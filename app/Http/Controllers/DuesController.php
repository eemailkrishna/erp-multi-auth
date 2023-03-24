<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuesController extends Controller
{
    public function dues(){
        return view('dues.dues');
    }



    public function duesNursery()
    {
        return view('dues.nurseryClass');
    }
    public function duesNurseryDetails()
    {
        return view('fees_monthly.student_fee_list_particular');
    }
}