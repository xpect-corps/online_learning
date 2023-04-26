<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Exception;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data = User::orderBy('id','DESC')->paginate(5);
        // return view('users.index',compact('data'))
        //     ->with('i', ($request->input('page', 1) - 1) * 5);
        $roles = Role::where('is_protected',0)->pluck('name','name');
        $country_arr=getCountryForSelectArr();
        // return $dataTable->render('users.index',compact('roles','country_arr'));
        $users=User::leftjoin('model_has_roles','model_has_roles.model_id','users.id')
        ->leftjoin('roles','roles.id','model_has_roles.role_id')
        ->where('users.is_customer',0)
        ->select('roles.id as role_id','users.*','roles.name as role')->orderBy('users.id','DESC')->get();
        return view('users.index',compact('roles','country_arr','users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        $country_arr=getCountryForSelectArr();
        return view('users.create',compact('roles','country_arr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'mobile_number' => 'required',
            'roles' => 'required',
            'image'=>'image|max:2048'
        ]);

        $input = $request->all();
        // dd( $input);

        $input['password'] = Hash::make($input['password']);
        if($request->has('is_admin'))
        {
            $input['is_admin'] = 1;
        }
        else{
            $input['is_admin'] = 0;

        }
        $input['dob']=date('Y-m-d',strtotime($request->dob));
        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(storage_path('uploads/profile_images'), $imageName);

            $input['image'] =  $imageName;
        }
    try {
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    }
    catch (Exception $e) {

        $message = $e->getMessage();
        // var_dump('Exception Message: '. $message);

        $code = $e->getCode();
        // var_dump('Exception Code: '. $code);

        $string = $e->__toString();
        // var_dump('Exception String: '. $string);

       return back()->with('danger',$message);
    }

        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id);
        // return view('users.show',compact('user'));
        $user = User::find($id);
        // $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $roles = Role::where('is_protected',0)->pluck('name','name');
        $country_arr=getCountryForSelectArr();

        return view('users.show',compact('user','roles','userRole','country_arr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        // $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $roles = Role::where('is_protected',0)->pluck('name','name');
        $country_arr=getCountryForSelectArr();

        return view('users.edit',compact('user','roles','userRole','country_arr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'roles' => 'required',
            'image' => 'image|max:2048',
            'mobile_number' => 'required',
            // 'latitude' => 'required',
        ]);

        // $input = $request->all();
        // if(!empty($input['password'])){
        //     $input['password'] = Hash::make($input['password']);
        // }else{
        //     $input = Arr::except($input,array('password'));
        // }
        $user_datas = User::find($id);
        $user = User::find($id);

         // image
         if($request->hasFile('image')){
            $file_path = storage_path().'/uploads/profile_images/'.$user->image;
            if (File::exists($file_path)) {
                file::delete($file_path);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(storage_path('uploads/profile_images'), $imageName);

        }
        if($request->has('is_admin'))
        {


            $request['is_admin'] = 1;
        }
        else{
            $request['is_admin'] = 0;

        }

        // dd($request->is_admin);

        $user->save([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'mobile_number'=>$request->mobile_number,
            'address'=>$request->address,
            'email'=>$request->email,
            'dob'=>date('Y-m-d',strtotime($request->dob)),
            'email'=>$request->email,
            'country'=>$request->country_id,
            'state'=>$request->state_id,
            'city'=>$request->city_id,
            'is_admin' => $request->is_admin,
            'is_active' => $request->status,
            'pincode' => $request->pincode,
            'password' => $request->password ? Hash::make($request->password) : $user_datas->password,
            'image' => $request->image ? $imageName : $user->image,
            ]);

        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->id;
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}
