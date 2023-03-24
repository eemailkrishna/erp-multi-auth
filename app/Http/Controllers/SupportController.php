<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function CustomerSupport(){
        return view('customer_support.customer_support');
    }
    public function AddQuery(){
        return view('customer_support.add_query');
    }
    public function QueryList(){
        return view('customer_support.query_list');
    }
}