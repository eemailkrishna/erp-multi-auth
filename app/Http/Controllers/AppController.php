<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function android_app(){
        return view('android_app.android_app');
    }
    public function NotificationAdd(){
        return view('android_app.notification_add');
    }
    public function StudentUserPasswordChange(){
        return view('android_app.student_user_password_change');
    }
    public function PublishMarks(){
        return view('android_app.publish_marks');
    }
}