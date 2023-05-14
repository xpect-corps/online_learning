<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Student;
use App\Models\StudentPurchasedCourse;
use App\Models\StudentWishlistedCourse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::get();
      return view('admin.pages.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        return view('admin.pages.students.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name ;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile_no = $request->phone;
        $user->is_student = 1;
        $user->save();

        $studentCode = random_int(100000, 999999);
        
        $tutor = new Student();
        // $tutor->name = $request->name;
        // $tutor->last_name = $request->l_name;
        $tutor->student_code = $studentCode;
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

            $request->image->move(public_path('/images/student'), $imageName);
            $tutor->image = $imageName;
        }
        $tutor->save();

        return redirect()->route('admin.student')->with('success', 'Student saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $purchasedCousers = StudentPurchasedCourse::where('student_id', $id)->get();
        $wishlistedCousers = StudentWishlistedCourse::where('student_id', $id)->get();
        return view('admin.pages.students.show', compact('student','purchasedCousers','wishlistedCousers'));
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
    public function update(Request $request, $id)
    {
        //
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
