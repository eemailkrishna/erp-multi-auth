<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function examination(){
        return view('examination.examination');
    }
    public function ExaminationAdmitCard(){
        return view('examination.admit_card');
    }
    public function ExaminationAdmitCardprint(){
        return view('examination.admit_card_print');
    }
    public function ExaminationMarksheetFill(){
        return view('examination.marksheet_fill');
    }
    public function ExaminationMarksheetFillExamwise(){
        return view('examination.marksheet_fill_examwise');
    }
    public function ExaminationMarksheetView(){
        return view('examination.marksheet_view');
    }
    public function ExaminationMarksheetFillMonthly(){
        return view('examination.marksheet_fill_monthly');
    }
    public function ExaminationMarksheetFillMonthlyExamwise(){
        return view('examination.marksheet_fill_monthly_examwise');
    }
    public function ExaminationMarksheetViewMonthly(){
        return view('examination.marksheet_view_monthly');
    }
    public function ExaminationAddWeeklyTest(){
        return view('examination.add_weekly_test');
    }
    public function ExaminationViewWeeklyTest(){
        return view('examination.view_weekly_test');
    }
    public function ExaminationAddWeeklyTestMarks(){
        return view('examination.add_weekly_test_marks');
    }
    public function ExaminationResultsheetView(){
        return view('examination.resultsheet_view');
    }
    public function marks_download_state_board(){
        return view('examination.marks_download_state_board');
    }
    public function marks_download_state_board_monthly(){
        return view('examination.marks_download_state_board_monthly');
    }
}