<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasrole('superadmin')) {
            return view('roles.superadmin.index_content');

        } elseif (Auth::user()->hasrole('admin')) {
            return view('roles.admin.index_content');
        } elseif (Auth::user()->hasrole('manager')) {
            return view('roles.manager.index_content');
        } elseif (Auth::user()->hasrole('student')) {

            return view('roles.student.index_content');
        } elseif (Auth::user()->hasrole('am')) {
            return view('roles.am.index_content');
        } elseif (Auth::user()->hasrole('user')) {
            return view('roles.user.index_content');
        }
    }

}
