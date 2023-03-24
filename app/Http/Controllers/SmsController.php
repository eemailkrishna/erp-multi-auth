<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms(){
        return view('sms.sms_panel');
    }
    public function smsholidaysms(){
        return view('sms.holiday_sms');
    }
    public function smsbirthdaysms(){
        return view('sms.birthday_sms');
    }
    public function smsstudentnotification(){
        return view('sms.student_notification');
    }
    public function smsmessagelist(){
        return view('sms.message_list');
    }
    public function smssmsfrommobile(){
        return view('sms.sms_from_mobile');
    }
    public function smsdeliveryreport(){
        return view('sms.delivery_report');
    }
    public function SmsDeliveryPrintReport(){
        return view('sms.delivery_print_report');
    }
}