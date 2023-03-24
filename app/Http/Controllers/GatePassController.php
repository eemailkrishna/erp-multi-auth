<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatePassController extends Controller
{
    public function GatePass(){
        return view('gate_pass.gate_pass');
    }
    public function NewGatePass(){
        return view('gate_pass.new_gate_pass');
    }
    public function GatePassList(){
        return view('gate_pass.gate_pass_list');
    }
}