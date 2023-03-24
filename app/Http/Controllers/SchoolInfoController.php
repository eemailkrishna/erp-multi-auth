<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolInfoController extends Controller
{
    public function index()
    {
        return view('school_info.school_info');
    }

    public function schoolgeneralinfo()
    {
        return view('school_info.school_info_general');
    }


    public function schoolinfoacademiccalender()
    {
        return view('school_info.academic_calender');
    }
    public function schoolinfoaddbuscategorymonthlywise()
    {
        return view('/school_info.add_bus_fee_category_monthly_installmentwise');
    }
    public function schoolInfoaddstudentidentitycategory()
    {
        return view('school_info.add_student_identity_category');
    }
    public function schoolInfoAddFeeCategory()
    {
        return view('school_info.fee_category_add');
    }
    public function school_info_syllabusDetails()
    {
        return view('school_info.student_syllabus_details');
    }
    public function student_user_password_change()
    {
        return view('school_info.student_user_password_change');
    }
    public function school_info_add_class_stream()
    {
        return view('school_info.add_class_stream');
    }
    public function school_info_add_section()
    {
        return view('school_info.add_section');
    }
    public function school_info_add_group()
    {
        return view('school_info.add_stream_group');
    }
    public function school_info_exam_type_add()
    {
        return view('school_info.exam_type_add');
    }
    public function school_info_subject_add()
    {
        return view('school_info.subject_add');
    }
    public function school_info_fee_types_add()
    {
        return view('school_info.fee_types_add');
    }
    public function school_info_class_wise_subject()
    {
        return view('school_info.class_wise_subject');
    }
    public function school_info_discount_types_add()
    {
        return view('school_info.discount_types_add');
    }
    public function school_info_total_list()
    {
        return view('school_info.total_list');
    }
}   