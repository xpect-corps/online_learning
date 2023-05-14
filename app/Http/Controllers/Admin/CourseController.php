<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\CoursePricing;
use App\Models\CourseTag;
use App\Models\CourseTutor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::get();
        return view('admin.pages.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.pages.course.create', compact('categories'));
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

        $course = new Course();
        $course->category_id = $request->category_id;
        $course->title = $request->title;
        $course->description = $request->description;

        if ($request->hasFile('cover_image')) {
            $imageName = time() . '.' . $request->cover_image->extension();

            $request->cover_image->move(public_path('/images/course/cover_image'), $imageName);
            $course->cover_photo = $imageName;
        }
        if ($request->hasFile('video_file')) {
            $videoName = time() . '.' . $request->video_file->extension();

            $request->video_file->move(public_path('/images/course/video_file'), $videoName);
            $course->prelude_video_link = $videoName;
        }

        // $course->duration    
        $course->save();

        $coursePrice = new CoursePricing();
        $coursePrice->course_id = $course->id;
        $coursePrice->price = $request->price;
        $coursePrice->save();

        if($request->tags != null){foreach ($request->tags as $tag) {
            $courseTag = new CourseTag();
            $courseTag->course_id = $course->id;
            $courseTag->tag_id = $tag;
            $courseTag->save();
        }}

        // $courseTag = new CourseTutor();
        // $courseTag->course_id
        // $courseTag->tutor_id

        return redirect()->route('admin.course')->with('success', 'Course saved successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
