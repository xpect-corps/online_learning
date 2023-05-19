<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CoursePlaylist;
use App\Models\CoursePricing;
use App\Models\CourseTag;
use App\Models\CourseTutor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourses()
    {
        $courses = Course::get();
        foreach($courses as $course){
            $course['prices'] = CoursePricing::where('course_id', $course->id)->get();
            $course['playlists'] = CoursePlaylist::where('course_id', $course->id)->get();
            $course['tags'] = CourseTag::leftJoin('tags','tags.id','course_tags.tag_id')->where('course_tags.course_id',$course->id)->get();
            $course['tutor'] = CourseTutor::where('course_id', $course->id)->get();
        }

        return $this->responseWithSuccess('Course fetched successfully',$courses);
    }
}
