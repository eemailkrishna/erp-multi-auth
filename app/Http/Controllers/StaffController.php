<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // staff main index
    public function staff()
    {
        return view('staff.staff');
    }
    // add emp_staff
    public function StaffAdd()
    {
        $staff_add = Staff::all();
        return view('staff.employee_add', ['add_staff' => $staff_add]);
    }
    // data store emp_staff
    public function StoreAddStaff(Request $request)
    {
        $staff_add = new Staff();

        $emp_photo = time() . '.' . $request->emp_photo->extension();
        $request->emp_photo->move(public_path('images'), $emp_photo);
        $emp_experience_latter = time() . '.' . $request->emp_experience_latter->extension();
        $request->emp_experience_latter->move(public_path('images'), $emp_experience_latter);
        $emp_degree = time() . '.' . $request->emp_degree->extension();
        $request->emp_degree->move(public_path('images'), $emp_degree);
        $emp_id_proof = time() . '.' . $request->emp_id_proof->extension();
        $request->emp_id_proof->move(public_path('images'), $emp_id_proof);
        $emp_other_document1 = time() . '.' . $request->emp_other_document1->extension();
        $request->emp_other_document1->move(public_path('images'), $emp_other_document1);



        $staff_add = new Staff();


        $staff_add->emp_name = $request->emp_name;
        $staff_add->emp_gender = $request->emp_gender;
        $staff_add->emp_dob = $request->emp_dob;
        $staff_add->emp_father = $request->emp_father;
        $staff_add->emp_email = $request->emp_email;
        $staff_add->emp_mobile = $request->emp_mobile;
        $staff_add->emp_mobile_new = $request->emp_mobile_new;
        $staff_add->emp_address = $request->emp_address;
        $staff_add->emp_qualification = $request->emp_qualification;
        $staff_add->blood_Group = $request->blood_Group;
        $staff_add->emp_id_prefix = $request->emp_id_prefix;
        $staff_add->emp_sssm_id = $request->emp_sssm_id;
        $staff_add->emp_shift = $request->emp_shift;
        // Image Upload
        $staff_add->emp_photo = $emp_photo;
        $staff_add->emp_experience_latter = $emp_experience_latter;
        $staff_add->emp_degree = $emp_degree;
        $staff_add->emp_id_proof = $emp_id_proof;
        $staff_add->emp_other_document1 = $emp_other_document1;
        //Salary Details
        $staff_add->emp_doj = $request->emp_doj;
        $staff_add->emp_rf_id_no = $request->emp_rf_id_no;
        $staff_add->emp_categories = $request->emp_categories;
        $staff_add->emp_class_preferred = $request->emp_class_preferred;
        $staff_add->emp_subject_preferred = $request->emp_subject_preferred;
        $staff_add->emp_designation = $request->emp_designation;
        $staff_add->emp_pan_card_no = $request->emp_pan_card_no;
        $staff_add->emp_uid_no = $request->emp_uid_no;
        $staff_add->emp_bank_name = $request->emp_bank_name;
        $staff_add->emp_account_no = $request->emp_account_no;
        $staff_add->emp_ifsc_code = $request->emp_ifsc_code;
        $staff_add->emp_basic_salary = $request->emp_basic_salary;
        $staff_add->emp_pf_number = $request->emp_pf_number;
        $staff_add->pf_deduction = $request->pf_deduction;
        $staff_add->tds_deduction = $request->tds_deduction;
        $staff_add->esic_deduction = $request->esic_deduction;
        $staff_add->ptax_deduction = $request->ptax_deduction;
        $staff_add->hra_amount = $request->hra_amount;~
        $staff_add->da_amount = $request->da_amount;
        $staff_add->emp_allowance = $request->emp_allowance;
        $staff_add->remarks = $request->remarks;
        // Leave Details
        $staff_add->emp_leave_cl = $request->emp_leave_cl;
        $staff_add->emp_earn_leave_pl = $request->emp_earn_leave_pl;
        $staff_add->emp_leave_sl = $request->emp_leave_sl;
        $staff_add->emp_leave_other = $request->emp_leave_other;

        $staff_add->school_name = $request->school_name;
        $staff_add->save();
        $add_emp_msg = 'Add Employee successful';
        return redirect(route('staff-add'))->with('add_emp',$add_emp_msg);
    }

    public function show_List($id)
    {
        $users = Staff::find($id);
        $user->save();
        return view('staff.employee_list',['users'=>$users]);
    }
    // staff emp data deleted
    public function emp_Delete($id)
    {

        $data = Staff::find($id);

        $data->delete();
        return response()->json(['status'=>'Employee list Deleted successfully']);
        // $emp_del_msg ='Your data was deleted successfully';
        // return redirect(route('emp-list'))->with('Delete',$emp_del_msg);
    }
    //staff edit page
    public function emp_Edit($id)
    {
        $edit = Staff::find($id);
        return view('staff.emp_edit',['emp_edit'=>$edit]);
    }
    //Update emp_data
    public function emp_Update(Request $request)
    {


        $emp_photo = time() . '.' . $request->emp_photo->extension();
        $request->emp_photo->move(public_path('images'), $emp_photo);
        $emp_experience_latter = time() . '.' . $request->emp_experience_latter->extension();
        $request->emp_experience_latter->move(public_path('images'), $emp_experience_latter);
        $emp_degree = time() . '.' . $request->emp_degree->extension();
        $request->emp_degree->move(public_path('images'), $emp_degree);
        $emp_id_proof = time() . '.' . $request->emp_id_proof->extension();
        $request->emp_id_proof->move(public_path('images'), $emp_id_proof);
        $emp_other_document1 = time() . '.' . $request->emp_other_document1->extension();
        $request->emp_other_document1->move(public_path('images'), $emp_other_document1);



        $staff_add =Staff::find($request->id);
        $staff_add->emp_name = $request->emp_name;
        $staff_add->emp_gender = $request->emp_gender;
        $staff_add->emp_dob = $request->emp_dob;
        $staff_add->emp_father = $request->emp_father;
        $staff_add->emp_email = $request->emp_email;
        $staff_add->emp_mobile = $request->emp_mobile;
        $staff_add->emp_mobile_new = $request->emp_mobile_new;
        $staff_add->emp_address = $request->emp_address;
        $staff_add->emp_qualification = $request->emp_qualification;
        $staff_add->blood_Group = $request->blood_Group;
        $staff_add->emp_id_prefix = $request->emp_id_prefix;
        $staff_add->emp_sssm_id = $request->emp_sssm_id;
        $staff_add->emp_shift = $request->emp_shift;
        // Document Upload
        $staff_add->emp_photo = $emp_photo;
        $staff_add->emp_experience_latter = $emp_experience_latter;
        $staff_add->emp_degree = $emp_degree;
        $staff_add->emp_id_proof = $emp_id_proof;
        $staff_add->emp_other_document1 = $emp_other_document1;
        //Salary Details
        $staff_add->emp_doj = $request->emp_doj;
        $staff_add->emp_rf_id_no = $request->emp_rf_id_no;
        $staff_add->emp_categories = $request->emp_categories;
        $staff_add->emp_class_preferred = $request->emp_class_preferred;
        $staff_add->emp_subject_preferred = $request->emp_subject_preferred;
        $staff_add->emp_designation = $request->emp_designation;
        $staff_add->emp_pan_card_no = $request->emp_pan_card_no;
        $staff_add->emp_uid_no = $request->emp_uid_no;
        $staff_add->emp_bank_name = $request->emp_bank_name;
        $staff_add->emp_account_no = $request->emp_account_no;
        $staff_add->emp_ifsc_code = $request->emp_ifsc_code;
        $staff_add->emp_basic_salary = $request->emp_basic_salary;
        $staff_add->emp_pf_number = $request->emp_pf_number;
        $staff_add->pf_deduction = $request->pf_deduction;
        $staff_add->tds_deduction = $request->tds_deduction;
        $staff_add->esic_deduction = $request->esic_deduction;
        $staff_add->ptax_deduction = $request->ptax_deduction;
        $staff_add->hra_amount = $request->hra_amount;
        $staff_add->da_amount = $request->da_amount;
        $staff_add->emp_allowance = $request->emp_allowance;
        $staff_add->remarks = $request->remarks;
        // Leave Details
        $staff_add->emp_leave_cl = $request->emp_leave_cl;
        $staff_add->emp_earn_leave_pl = $request->emp_earn_leave_pl;
        $staff_add->emp_leave_sl = $request->emp_leave_sl;
        $staff_add->emp_leave_other = $request->emp_leave_other;



        $staff_add->school_name = $request->school_name;
        $staff_add->save();
        $update_emp_msg = "Your data Updated was successful";
        return redirect(route('emp-list'))->with('update',$update_emp_msg);
    }

//staff emp drop
    public function EmpDrop()
    {
        $drop = Staff::all();
        return view('staff.employee_drop_list',['data'=>$drop]);
    }

//staff emp register priority
    public function Emp_Register_Priority()
    {
        $register_Priority = Staff::all();
        return view('staff.emp_attendance_priority',['priority'=>$register_Priority]);
    }
    //RFID card assign in staff
    public function AssignRFIDCard(Request $request)
    {
        $query = Staff::query();
        if($request->ajax()){

            if(empty($request->staff_type)){
                $users = $query->get();
            }
            else{
                $users = $query->where(['id' => $request->staff_type])->get();
            }
            return response()->json(['users'=>$users]);
        }
        $users = $query->get();
        return view('staff.assign_RFID_card',compact('users'));
        // $assign_card=Staff::all();
        // return view('staff.assign_RFID_card',['card'=>$assign_card]);
    }

public function rfidallotcard(Request $request){
        $rfid = Staff::find($request->id);
        $rfid->emp_rf_id_no = $request->emp_rf_id_no;
        $rfid->save();
        return redirect(route('assign-card'));


}

    public function AttendRegister()
    {
        $attendance_register = Staff::all();
        return view('staff.emp_attendance_register',['attendance'=>$attendance_register]);
    }
    //staff id generator
    public function IdGenrator(Request $request)
    {
        $query = Staff::query();
        if($request->ajax()){
            if(empty($request->search)){
            // $users=$query->where(['id'=>$request->search])->get();
                $users = $query->get();
            }
            else{
                $users=$query->where(['id'=>$request->search])->get();

            }
            return response()->json(['users'=>$users]);
        }
        $users = $query->get();
        return view('staff.id_generate',compact('users'));
    }
    // salary detail
    public function Salary_Detail()
    {
        $salary_detail = Staff::all();
        return view('staff.emp_salary_generate',['detail'=>$salary_detail]);
    }
    // staff emp list
    public function EmpList(Request $request)
    {
        $query = Staff::query();
        if($request->ajax()){
            if(empty($request->search)){
            // $users=$query->where(['id'=>$request->search])->get();
                $users = $query->get();
            }
            else{
                $users=$query->where(['id'=>$request->search])->get();

            }
            return response()->json(['users'=>$users]);
        }
        $users = $query->get();
        return view('staff.employee_list',compact('users'));
    }
        // if($request->ajax()){
        //     $users=$query->where('emp_name', 'LIKE', '%'.$request->search.'%')            // ->orwhere('emp_mobile_new','LIKE','%'.$request->search.'%')
        //     // ->orwhere('emp_dob','LIKE','%'.$request->search.'%')
        //     // ->orwhere('emp_designation','LIKE','%'.$request->search.'%')
        //     ->get();
        //     return response()->json(['users' => $users]);
        // }

        // else{
        //     $users = $query->get();
        //     return view('staff.employee_list',compact('users'));

        // }
    }
