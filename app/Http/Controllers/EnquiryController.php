<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;


class EnquiryController extends Controller
{
    public function enquiry(){
        return view('enquiry.enquiry');
    }

    public function NewEnquiry(){
        
        return view('enquiry.add_enquiry'); 

    }
    public function ListEnquiry(){
        $data = Enquiry::all();
        return view('enquiry.enquiry_list',['data'=>$data]);
        
    }



    public function EnquirySms(Request $req)
    {
      $data =  Enquiry::whereBetween('created_at',[$req->from_date,$req->to_date])->get();
        $data = Enquiry::all();
        return view('enquiry.enquiry_sms_list',['data'=>$data]);

    }
        



    
    public function  CallList(Request $req){
      $data = Enquiry::whereBetween('created_at',[$req->followup_date,$req->followup_date_next])->get();
      $data = Enquiry::all();
      return view('enquiry.call_student_list',['data'=>$data]);
     
        
        
    }
    public function  EnquiryReport(Request $req){
        $data =  Enquiry::whereBetween('created_at',[$req->enquiry_from_date,$req->enquiry_to_date])->get();
        $data = Enquiry::all();
        return view('enquiry.enquiry_daily_report',['data'=>$data]);
        
    }

public function add_enquiry(Request $req)
         {
        $enquiry=new Enquiry;
        $enquiry->enquiry_type = $req->enquiry_type;
        $enquiry->enquiry_type_other = $req->enquiry_type_other;
        $enquiry->enquiry_date = $req->enquiry_date;
        $enquiry->enquiry_name = $req->enquiry_name	;
        $enquiry->enquiry_father_name = $req->enquiry_father_name;
        $enquiry->select_class_name = $req->enquiry_class_name;
        $enquiry->enquiry_address = $req->enquiry_address;
        $enquiry->enquiry_contact_no = $req->enquiry_contact_no;
        $enquiry->enquiry_next_follow_up_date = $req->enquiry_next_follow_up_date;
        $enquiry->enquiry_remark_1 = $req->enquiry_remark_1;
        $enquiry->previous_school_name = $req->previous_school_name;
        $enquiry->enquiry_staff_name = $req->enquiry_staff_name;
        $enquiry->enquiry_remark_2 = $req->enquiry_remark_2;
        $enquiry->student_medium = $req->student_medium;
        $enquiry->save();
        return redirect('/enquiry_list');
        
        }


       

        public function enquiry_Edit($id){
        $var = Enquiry::find($id);
        return view('enquiry.edit_enquiry',['update'=>$var]);

        }
        public function enquiry_update(Request $req,$id)
        {

           $enquiry_update=Enquiry::find($id);
           $enquiry_update->enquiry_type = $req->enquiry_type;
           $enquiry_update->enquiry_type_other = $req->enquiry_type_other;
           $enquiry_update->enquiry_date = $req->enquiry_date;
           $enquiry_update->enquiry_name = $req->enquiry_name	;
           $enquiry_update->enquiry_father_name = $req->enquiry_father_name;
           $enquiry_update->select_class_name = $req->enquiry_class_name;
           $enquiry_update->enquiry_address = $req->enquiry_address;
           $enquiry_update->enquiry_contact_no = $req->enquiry_contact_no;
           $enquiry_update->enquiry_next_follow_up_date = $req->enquiry_next_follow_up_date;
           $enquiry_update->enquiry_remark_1 = $req->enquiry_remark_1;
           $enquiry_update->previous_school_name = $req->previous_school_name;
           $enquiry_update->enquiry_staff_name = $req->enquiry_staff_name;
           $enquiry_update->enquiry_remark_2 = $req->enquiry_remark_2;
           $enquiry_update->student_medium = $req->student_medium;
           $enquiry_update->update();
        return redirect('/enquiry_list')->with('success', 'Data updated successfully');
    
           
           }
        
   
   

           public function enquiryDelete($id)
           {
           $del = Enquiry::find($id);
           $del->delete();
           return response()->json(['status'=>'Enquiry delete successfully']);
           
   
           }
           
    


}
