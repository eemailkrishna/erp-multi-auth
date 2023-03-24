<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecycleBinController extends Controller
{
    public function RecycleBin(){
        return view('recycle_bin.recycle_bin');
    }

    public function RecycleStudentAdmissionList(){
        return view('recycle_bin.recycle_student_admission_list');
    }

    public function RecycleEmployeeList(){
        return view('recycle_bin.recycle_employee_list');
    }
    
    public function RecycleExpenseList(){
        return view('recycle_bin.recycle_expense_list');
    }

    public function RecycleHostelStudentList(){
        return view('recycle_bin.recycle_hostel_student_list');
    }
    
    public function RecycleHostelAccountList(){
        return view('recycle_bin.recycle_hostel_account_list');
    }

    public function StudentRegistrationList(){
        return view('recycle_bin.student_registration_list');
    }
    
}