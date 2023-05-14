<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::get();
       return view('admin.pages.tutor.index', compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        return view('admin.pages.tutor.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $user = new User();
        $user->name = $request->f_name ;
        $user->email = $request->email;
        $user->mobile_no = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        $tutor = new Tutor();
        $tutor->first_name = $request->f_name;
        $tutor->last_name = $request->l_name;
        $tutor->user_id = $user->id;
        $tutor->mobile_no = $request->phone;
        $tutor->email = $request->email;
        $tutor->dob = $request->b_day;
        $tutor->country_id = $request->country;
        $tutor->city = $request->city;
        $tutor->pincode = $request->zipcode;
        $tutor->address_1 = $request->address_1;
        $tutor->address_2 = $request->address_2;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('/images/tutor'), $imageName);
            $tutor->image = $imageName;
        }
        $tutor->save();

        return redirect()->route('admin.tutor')->with('success', 'Tutor saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutor = Tutor::where('id', $id)->first();
        $countries = Country::get();
        return view('admin.pages.tutor.show', compact('tutor','countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $user->name = $request->f_name ;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $tutor = Tutor::find($request->tutor_id);
        $tutor->first_name = $request->f_name;
        $tutor->last_name = $request->l_name;
        $tutor->user_id = $user->id;
        $tutor->mobile_no = $request->phone;
        $tutor->email = $request->email;
        $tutor->dob = $request->b_day;
        $tutor->country_id = $request->country;
        $tutor->city = $request->city;
        $tutor->pincode = $request->zipcode;
        $tutor->address_1 = $request->address_1;
        $tutor->address_2 = $request->address_2;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('/images/tutor'), $imageName);
            $tutor->image = $imageName;
        }
        $tutor->save();

        return redirect()->route('admin.tutor')->with('success', 'Tutor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
