<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourses()
    {
        $courses = Course::get();

        return $this->responseWithSuccess('Course fetched successfully',$courses);
    }
}
