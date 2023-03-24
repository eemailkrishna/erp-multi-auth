<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Validator;

class AuthController extends Controller
{
    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',            
        ]);
    $credetials = $request->only('email','password');    
        if(Auth::attempt($credetials)){
            $role=Auth::user()->role;
            if($role=='admin'){    
                return redirect('dashboard');          
                return $authUser = Auth::user(); 
            }
            else{
                auth()->logout();
                return redirect()->back()->with('error','Please Try Again !! Invalid Credetials');
            }                    
        }
        else{                    
             return redirect()->back()->with('error','Please Try Again !! Invalid Credetials');
        }
    }

    public function Authlogout()
    {
        auth()->logout();
        return redirect('/')->with('error', 'Logout successfully');
    }
}
