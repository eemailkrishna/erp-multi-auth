<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportantController extends Controller
{
    
        public function important(){
            return view('important.important');
        }
        public function govtdocument(){
            return view('important.add_document');
        }
        public function importantdocumentlist(){
            return view('important.document_list');
        }
        public function important_add_other_document(){
            return view('important.add_other_document');
        }
        public function important_contact_info(){
            return view('important.contact_info');
        }
        public function important_contact_info_list(){
            return view('important.contact_info_list');
        }
        public function other_document_list(){
            return view('important.other_document_list');
        }
    
}
