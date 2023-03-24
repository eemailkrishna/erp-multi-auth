<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penalty; 
use App\Models\User; 

use App\Models\Student; 



class PenalityController extends Controller
{
    public function penality(){
    
        return view('penalty.penalty');

    }

    public function penalityForm(){
        $data = User::where('user_type','student')->get();
        return view('penalty.penalty_form',['data'=>$data]);
        
    }
        public function penalityList(){
        $var = Penalty::all();
       
        return view('penalty.penalty_list',['list'=>$var]);
    }

    public function penalty_form(Request $req){
        
        $penalty=new penalty;
        $penalty->student_search = $req->student_search;
        $penalty->student_name = $req->student_name;
        $penalty->student_class = $req->student_class;
        $penalty->student_section = $req->student_section;
        $penalty->student_roll_no = $req->student_roll_no;
        $penalty->penalty_amount = $req->penalty_amount;
        $penalty->penalty_reason = $req->penalty_reason;
        $penalty->penalty_remark = $req->penalty_remark;
        
        $penalty->save();
        return redirect('/penalty_list');
 
 
   }

   // Get Edit
   public function penalty_Edit($id){
        $var = Penalty::find($id);
        return view('penalty.editpenality',['editp'=>$var]);
   }
   //update 
   public function penalty_update(Request $req,$id){
        $data = Penalty::find($id);
        $data->student_search = $req->student_search;
        $data->student_name = $req->student_name;
        $data->student_class = $req->student_class;
        $data->student_section = $req->student_section;
        $data->student_roll_no = $req->student_roll_no;
        $data->penalty_amount = $req->penalty_amount;
        $data->penalty_reason = $req->penalty_reason;
        $data->penalty_remark = $req->penalty_remark;
        
        $data->update();
        return redirect('/penalty_list')->with('success', 'Data updated successfully');
 

   }

   public function penalty_del($id){
    $del=Penalty::find($id);
    $del->delete();
    return response()->json(['status' => 'penalty delete successfully']);
   }
   


    
}
