<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallManagementController extends Controller
{
    public function CallManagement(){
        return view('call_management.call_management');
    }
    public function CallStudentList(){
        return view('call_management.call_student_list');
    }
}