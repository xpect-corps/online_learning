<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    //
    public function blank_page(){
        return view('pages.blankPage');
    }
    public function hospital_profile(){
        return view('pages.blankPage_1');
    }

}
