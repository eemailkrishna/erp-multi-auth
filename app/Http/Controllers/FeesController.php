<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function fees()
    {
        return view('fees_monthly.fees');
    }
    public function ResetFees()
    {
        return view('fees_monthly.reset_fee_structure');
    }
    public function DuesDetail()
    {
        return view('fees_monthly.set_dues_detail');
    }
    public function FeeStructure()
    {
        return view('fees_monthly.fee_structure_list');
    }
    public function Student_Admission(){
        return view('fees_monthly.student_admission_fee_list');
    }
    public function Classwise_Fees(){
        return view('fees_monthly.set_classwise_fee_details');
    }
    public function Classwise_Transport(){
        return view('fees_monthly.set_classwise_monthly_transport_fee_details');
    }
    public function Prev_Years(){
        return view('fees_monthly.add_previous_year_dues_fee');
    }
    public function Std_Fee_Form(){
        return view('fees_monthly.student_fee_add_form');
    }
    public function Std_Fee_List(){
        return view('fees_monthly.student_fee_list');
    }
    public function Std_Fee_List_RFID(){
        return view('fees_monthly.student_fee_list_by_rfid');
    }
    public function Std_Fee_Dues_List(){
        return view('fees_monthly.student_fee_dues_list');
    }
    public function Std_Fee_Demand_Bill(){
        return view('fees_monthly.student_fee_demand_bill_list');
    }
    public function Std_Fee_Demand_NewBill_List(){
        return view('fees_monthly.student_fee_demand_bill_list_new');
    }
    public function Std_Fee_Balance_Detail(){
        // return 'ddd';
        return view('fees_monthly.student_fee_balance_details_from_to_to');
    }
    public function Std_Fee_Balance(){
        return view('fees_monthly.student_fee_balance_details');
    }
    public function Balance_Detail(){
        return view('fees_monthly.student_only_fee_balance_details');
    }
    public function Reset_Transport(){
        return view('fees_monthly.reset_transport_fee_structure');
    }
    public function Set_Transport_Dues(){
        return view('fees_monthly.set_transport_dues_detail');
    }
    public function Add_Bus_Fee_Category(){
        return view('fees_monthly.add_bus_fee_category_monthly_installmentwise');
    }
    public function Set_Classwise_Transport(){
        return view('fees_monthly.set_classwise_transport_fee_details');
    }
    public function Challan_List(){
        return view('fees_monthly.print_challan_list');
    }
    public function Std_Transport_Fee_Add_Form(){
        return view('fees_monthly.student_transport_fee_add_form');
    }
    public function Fee_List_Transport(){
        return view('fees_monthly.student_transport_fee_list');
    }
    public function Dues_List(){
        return view('fees_monthly.student_transport_fee_dues_list_statuswise');
    }
    public function Report(){
        return view('fees_monthly.reports');
    }
    public function Report_Transport(){
        return view('fees_monthly.reports_Transport');
    }
    public function Buswise_List(){
        return view('fees_monthly.student_list_bus_wise');
    }
}