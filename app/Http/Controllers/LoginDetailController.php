<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginDetailController extends Controller
{
    public function login_detail(){
        return view('utility.login_details');
    }
    public function utility_login_details_traking(){
        return view('utility.login_details_traking');
    }
    public function student_login_detail(){
        return view('utility.student_login_details');
    }
    public function teacher_login_details(){
        return view('utility.teacher_login_details');
    }
}