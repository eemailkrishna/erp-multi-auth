<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRightController extends Controller
{
    public function UserRight(){
        return view('user_right.user_right');
    }

    public function userRightAddUser()
    {
        return view('user_right.userRightAddUser');
    }
    public function userRightUserList()
    {
        return view('user_right.userRightUserList');
    }
    public function userRightAdduserEdit()
    {
        return view('user_right.userRightAdduserEdit');
    }
}