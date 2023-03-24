<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovRequireController extends Controller
{
    public function gov_requirement(){
            return view('govt_requirement.govt_requirement');
    }


    public function govt_require_mappingList()
    {
        return view('govt_requirement.mapping_list');
    }

    public function govt_require_studentList()
    {
        return view('govt_requirement.student_list');
    }


    public function govt_require_contactNo()
    {
        return view('govt_requirement.student_contact_list');
    }
}