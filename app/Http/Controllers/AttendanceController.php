<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attendance(){
           return view('attendance.attendance');
    }

    public function student_attendance(){

           return view('attendance.student_attendance_select');
    
       }
       public function AttendanceSelect(){

              return view('attendance.emp_attendance_select');
       
          }
          public function RegisterwiseStaff(){

              return view('attendance.emp_registerwise_attendance_select');
       
          }
          public function RfidStudent(){

              return view('attendance.student_rfid_attendance');
       
          }
          public function RfidStaff(){

              return view('attendance.emp_rfid_attendance');
       
          }
          public function GraPical(){

              return view('attendance.attendance_graphical_report');
       
          }
          public function SmsSelect(){

              return view('attendance.student_attendance_sms_select');
       
          }
          public function DailyReport(){

              return view('attendance.student_attendance_daily_report_classwise');
       
          }
          public function MonthlyReport(){

              return view('attendance.student_attendance_report_classwise_monthly');
       
          }
          public function yearlyReport(){

              return view('attendance.student_attendance_report_classwise_yearly');
       
          }

          public function EmpReport(){

              return view('attendance.emp_attendance_daily_report_categorywise');
       
          }
          public function EmpmonthReport(){

              return view('attendance.ajax_emp_attendance_report_monthly');
       
          }

          public function AttendanceList(){

              return view('attendance.Attendance_download_list');
       
          }

          public function EmpattendanceList(){

              return view('attendance.emp_attendance_download_list');
       
          }
          public function DayattendanceList(){

              return view('attendance.daywise_attendance_download_list');
       
          }
          public function Bothleave(){

              return view('attendance.student_employee_leave_report');
       
          }



          
       
}