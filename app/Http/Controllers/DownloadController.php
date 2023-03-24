<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(){
        return view('downloads.downloads');
    }
    public function SelectStudent(){
        return view('downloads.select_student');
    }
    public function SelectStudentGroupwise(){
        return view('downloads.select_student_groupwise');
    }
    public function EmployeeDownload(){
        return view('downloads.employee_download');
    }
    public function EmployeeSalary(){
        return view('downloads.employee_download');
    }
    public function EnquiryDownloadInfo(){
        return view('downloads.enquiry_download_info');
    }
    public function StudentFeesDownloadList(){
        return view('downloads.student_fees_download_list');
    }
    public function AccountExpenseInfo(){
        return view('downloads.account_expense_info');
    }
    public function AccountInfoDownload(){
        return view('downloads.account_info_download');
    }
    public function AttendanceDownloadList(){
        return view('downloads.Attendance_download_list');
    }
    public function UseridPassword(){
        return view('downloads.userid_password');
    }
    public function StudentTc(){
        return view('downloads.student_tc');
    }
}