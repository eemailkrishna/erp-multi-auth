<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function certificate(){
        return view('certificate.certificate');
    }

    public function character_certificate_form(){
        return view('certificate/character_certificate_form');
    }

    public function character_certificate_form_edit(){
        return view('certificate/character_certificate_form_edit');
    }

    public function annualfee_certificate_form_edit(){
        return view('certificate/annualfee_certificate_form_edit');
    }

    public function annualfee_form(){
        return view('certificate/annualfee_form');
    }

    public function birth_certificate(){
        return view('certificate/birth_certificate');
    }

    public function character_certificate_list(){
        return view('certificate/character_certificate_list');
    }

    public function 
    event_certificate_form(){
        return view('certificate/event_certificate_form');
    }


    public function bonafied_form(){
        return view('certificate/bonafied_form');
    }

    public function bonafied_Cer_form(){
        return view('certificate/bonafied_certificate_form');
    }
    public function tutionfee_form(){
        return view('certificate/tutionfee_form');
    }

    public function tc_list(){
        return view('certificate/tc_list');
    }

    public function tc_form(){
        return view('certificate/tc_form');
    }

    public function tc_edit(){
        return view('certificate/tc_form_edit');
    }

    
    public function sport_certificate_list(){
        return view('certificate/sport_certificate_list');
    }

    public function sport_certificate_form(){
        return view('certificate/sport_certificate_form');
    }

    public function event_certificate_list(){
        return view('certificate/event_certificate_list');
    }

    public function bonafied_certificate_list(){
        return view('certificate/bonafied_certificate_list');
    }

    public function tutionfee_certificate_list(){
        return view('certificate/tutionfee_certificate_list');
    }

    public function annualfee_certificate_list(){
        return view('certificate/annualfee_certificate_list');
    }

    public function caste_certificate_form(){
        return view('certificate/caste_certificate_form');
    }

    public function caste_certificate_list(){
        return view('certificate/caste_certificate_list');
    }

}