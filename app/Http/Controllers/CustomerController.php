<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // profile
        $country_arr=getCountryForSelectArr();
        $blood_group_arr=getBloodGroupSelectArr();
        // $customer_plans=getCustomerPlanArr();
        $customer_data = Customer::leftjoin('users','users.id','customers.user_id')
        // ->leftjoin('customer_status','customers.status','customer_status.id')
        // ->leftJoin('customer_sources','customer_sources.id','customers.source')
        ->select('customers.id','customers.user_id','customers.created_at','users.first_name as patient_name',
        'users.mobile_number as contact_number','customers.is_parent as parent_status','customers.emergency_country','customers.emergency_state','customers.emergency_city',
          DB::raw('(CASE WHEN customers.is_parent = 1 THEN "Yes" ELSE "No" END) AS is_parent')
        )->orderBy('customers.created_at','DESC')->get();
    return view('customers.index',compact('country_arr','customer_data','blood_group_arr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'customer_source_id'=>'required',
            'image' => 'image|max:2048',
        ]);
        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(storage_path('uploads/profile_images'), $imageName);
        }

        $check_mobile_number_existing = User::where('mobile_number',$request->mobile_number)->count();
        $check_email_existing = User::where('email',$request->email)->count();


        if($check_mobile_number_existing > 0 || $check_email_existing > 0){


            $corporate_user_id = User::where('mobile_number',$request->mobile_number)->orWhere('email',$request->email)->first();

            $userId = $corporate_user_id->id;
    }
        else{
            if($request->dob){
                $dob = $request->dob;
                $age = Carbon::parse($dob)->age;
            }else{
                $dob = Carbon::now()->subYears($request->age)->format('Y-m-d');
            }

            $user=new User();
            $user->first_name=$request->first_name;
            $user->middle_name=$request->middle_name;
            $user->last_name=$request->last_name;
            $user->mobile_number=$request->mobile_number;
            $user->email=$request->email;
            $user->address=$request->address;
            $user->landmark=$request->landmark;
            $user->gender=$request->gender;
            $user->password=Hash::make($request->password);
            $user->country=$request->country_id;
            $user->state=$request->state_id;
            $user->city=$request->city_id;
            $user->latitude=$request->latitude;
            $user->longitude=$request->longitude;
            $user->age= $request->age ? $request->age : $age ;
            $user->dob= $request->dob ? date('Y-m-d',strtotime($request->dob)) : $dob;
            $user->residence_type=$request->residence_type_id;
            $user->is_customer=1;
            $user->password= Hash::make($request->password);
            if($request->hasFile('image')){
                $user->image = $imageName;
            }
            $user->save();

            $userId=$user->id;

            $customer=new Customer();
            $customer->customer_plan=$request->customer_plan;
            $customer->user_id=$userId;
            $customer->customer_type=$request->customer_type;//Normal Customer
            $customer->is_parent=1;
            $customer->is_child=0;
            $customer->emergency_name = $request->emergency_name;
            $customer->relation = $request->relation_id;
            $customer->emergency_contact_no = $request->emergency_contact_no;
            $customer->emergency_country = $request->emergency_country;
            $customer->emergency_state = $request->emergency_state;
            $customer->emergency_city = $request->emergency_city;
            $customer->emergency_pincode = $request->emergency_pincode;
            $customer->emergency_address = $request->emergency_address;
            $customer->source = $request->customer_source_id;
            $customer->blood_group=$request->blood_group;
            $customer->height=$request->height;
            $customer->weight=$request->weight;
            $customer->weight_unit=$request->weight_unit;
            $customer->height_unit=$request->height_unit;
            $customer->is_married=$request->is_married;
            $customer->save();


            return back()->with('success','Customer  created successfully');

    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $customer=Customer::with('user')->leftjoin('weekly_goal','weekly_goal.id','customers.weekly_goal')->select('*','customers.id as id','weekly_goal.goal as goal')->where('customers.id',$id)->first();


        // dd($customer);

        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country_arr=getCountryForSelectArr();
        $customer_plans=getCustomerPlanArr();
        $customer=Customer::with('user','customerplan')->where('id',$id)->first();
        return view('customers.edit',compact('customer','customer_plans','country_arr'));
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
        $this->validate($request, [
            'image' => 'image|max:2048',
        ]);

        $customer=Customer::select('user_id')->where('id',$id)->first();
        $user_id=$customer->user_id;
        $dob = $request->dob;
        $dob_age = Carbon::parse($dob)->age;

        $customer_update=Customer::where('id',$id)
            ->update([
                'customer_plan'=>$request->customer_plan,
                'customer_type'=>$request->customer_type,
                'emergency_name' => $request->emergency_name,
                'relation' => $request->relation_id,
                'emergency_contact_no' => $request->emergency_contact_no,
                'emergency_country' => $request->emergency_country,
                'emergency_state' => $request->emergency_state,
                'emergency_city' => $request->emergency_city,
                'emergency_pincode' => $request->emergency_pincode,
                'emergency_address' => $request->emergency_address,
                'source' => $request->customer_source_id,
                ]);
        $user_datas = User::find($user_id);

        if($request->hasFile('image')){
            $file_path = storage_path().'/uploads/profile_images/'.$user_datas->image;
            if (File::exists($file_path)) {
                file::delete($file_path);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(storage_path('uploads/profile_images'), $imageName);
        }

        $user_update=User::where('id',$user_id)->update([
            'first_name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'last_name'=>$request->last_name,
            'mobile_number'=>$request->mobile_number,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'email'=>$request->email,
            'country'=>$request->country_id,
            'state'=>$request->state_id,
            'city'=>$request->city_id,
            'is_active'=>$request->is_active,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
            'landmark'=>$request->landmark,
            'pincode'=>$request->pincode,
            'dob'=>date('Y-m-d',strtotime($request->dob)),
            'residence_type'=>$request->residence_type_id,
            'password'=>$request->password ? Hash::make($request->password) : $user_datas->password,
            'image'=> $request->hasFile('image') ?  $imageName : $user_datas->image,
            'age' => $request->age ? $request->age : $dob_age,
        ]);
        return redirect()->route('customers.show',$id)->with('success','Customer updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $customer = Customer::where('id',$request->clinician_id)->first();
        // if($customer->is_parent == 1){
        //     $haveChild = Customer::where('parent_id',$request->clinician_id)->where('is_child',1)->count();
        //     if($haveChild != 0){
        //         return response()->json(['error'=>'This is a parent customer and have childs accounts']);
        //     }
        // }

        $count = Customer::where('user_id',$customer->user_id)->count();
        if($count < 2){
            $user_id = $customer->user_id;
            $customer = Customer::where('id',$request->clinician_id)->delete();
            $user = User::where('id',$user_id)->delete();

            return response('deleted');

        }else{

            $customer = Customer::where('id',$request->clinician_id)->delete();

            return response('deleted');

        }

    }



    // document records
    public function addDocument(Request $request)
    {
        $this->validate($request, [
            'upload_document' => 'required',
        ]);

        $record = new CustomerDocument();
        $record->customer_id = $request->customer_id;
        $record->document_type_id = $request->document_type;
        $record->document_name = $request->document_name;

        $fileName = time().'.'.$request->upload_document->extension();
        $request->upload_document->move(storage_path('uploads/medical_records'), $fileName);

        $record->added_by = Auth::user()->id;
        $record->file = $fileName;

        $record->save();
        CustomerActivityHistory::insert(['customer_id'=> $request->customer_id,'activity_status_id'=>7,'added_by'=>Auth::user()->id]);
        // return redirect()->route('customers.show',$request->customer_id);
        Session::flash('active_tab', 'privacy');
        return back()->with('success', 'documents added successfully');
    }

    public function getDocumentDetails(Request $request)
    {
        $document = CustomerDocument::where('id',$request->id)->first();

        return response()->json($document);
    }

    public function updateDocument(Request $request)
    {
        $document = CustomerDocument::where('id',$request->document_id)->first();

        if($request->file('upload_document'))
        {
            $file_path = storage_path().'/uploads/medical_records/'.$document->file;
            if (File::exists($file_path)) {
                file::delete($file_path);
            }
            $fileName = time().'.'.$request->upload_document->extension();
            $request->upload_document->move(storage_path('uploads/medical_records'), $fileName);

        }

        $document = CustomerDocument::where('id',$request->document_id)->update(['document_type_id'=>$request->document_type,'document_name'=>$request->document_name ,'file'=>$request->file('upload_document') ? $fileName : $document->file]);

        CustomerActivityHistory::insert(['customer_id'=> $request->customer_id,'activity_status_id'=>9,'added_by'=>Auth::user()->id]);
        // return redirect()->route('customers.show',$request->customer_id);
        Session::flash('active_tab', 'privacy');
        return back()->with('success', 'documents updated successfully');

    }

    public function deleteDocument(Request $request)
    {
        CustomerDocument::where('id',$request->document_id)->delete();
        CustomerActivityHistory::insert(['customer_id'=> $request->customer_id,'activity_status_id'=>13,'added_by'=>Auth::user()->id]);

        // return back()->with('success','Child  Deleted Successfully');
        return response()->json(['status'=>true,"redirect_url"=>route('customers.show',$request->customer_id)]);

    }


}
