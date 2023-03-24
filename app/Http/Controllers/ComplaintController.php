<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function complaint(){
        return view('complaint.complaint');
    }
    
    public function complaint_studentComplaint()
    {
        return view('complaint.student_complaint');
        
    }


    public function complaint_staffFeedback()
    {
        return view('complaint.staff_complaint');

    }

    public function complaint_employeeComplaints()
    {
        return view('complaint.faculty_complaint');

    }

}