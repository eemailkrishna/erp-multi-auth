<?php

namespace App\Http\Controllers\Admin\superadmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminDashboardController extends Controller
{
    public function index()
    {
        return "i am superadmin";
    }

}
