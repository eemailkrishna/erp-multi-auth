<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hostal;
// use App\Models\HostalRoom;
use App\Models\HostalRoomDetail;
use App\Models\Hostel_staff;
use App\Models\Section;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Hostel_Daily_Purchase;
use App\Models\Mess;
use App\Models\Hostel_student_adminssion;
use App\Models\User;
use DB;

class HostelController extends Controller
{
    //hostal index page
    public function hostel(){
        return view('hostel.hostel');
    }
    //hostal detail button
    public function hostel_detail(){
        $data = Hostal::all();
        return view('hostel.hostel_details');
    }
//hostal list in detail
    public function Hostel_List(){
        $data = Hostal::all();
        return view('hostel.hostel_list',['hostal'=>$data]);
    }
    //Data store in hostal detail button
    public function hostel_registeration(Request $request){
        $data = new Hostal();
        $data -> hostal_name = $request->hostel_name;
        $data -> hostal_type = $request->hostel_type;
        $data -> hostal_no_of_room = $request->hostel_number_of_room;
        $data -> hostal_total_capacity = $request->hostel_total_capacity;
        $data -> hostal_facilities = $request->hostel_facility;
        $data -> hostal_laundary_services = $request->hostel_laundry;
        $data -> hostal_mess = $request->hostel_mess;
        $data -> hostal_warden_name = $request->hostel_warden_name;
        $data->save();
        return redirect(route('hostel_List'));

    }
  // hostal delete list in detail
  public function hostal_delete_list($id){
        $drop_data = Hostal::find($id);
    $drop_data->delete();
    return response()->json(['status'=>'Employee list Deleted successfully']);

    // return view('hostel.hostel_list');
  }
  //hostal edit list in detail
public function hostel_edit_list($id){
        $data = Hostal::find($id);
        return view('hostel.hostal_edit_list',['edit'=>$data]);
}
//hostal update list in detail
public function hostel_update_list(Request $request){
        $data = Hostal::find($request->id);
        $data -> hostal_name = $request->hostel_name;
        $data -> hostal_type = $request->hostel_type;
        $data -> hostal_no_of_room = $request->hostel_number_of_room;
        $data -> hostal_total_capacity = $request->hostel_total_capacity;
        $data -> hostal_facilities = $request->hostel_facility;
        $data -> hostal_laundary_services = $request->hostel_laundry;
        $data -> hostal_mess = $request->hostel_mess;
        $data -> hostal_warden_name = $request->hostel_warden_name;
        $data->save();
    return redirect(route('hostel_List'));
}
//<.................................. hostal room detail list.....................................>
public function hostel_room_list(){
        // $list = Hostal::all();
    $list = HostalRoomDetail::with('hostal')->get();
     return view('hostel.room_list', ['data' => $list]);

}
    public function hostal_room_add_detail(){
        $hostal_room = Hostal::all();
        $hostal_rooms = HostalRoomDetail::all();
        return view('hostel.room_details',['hostel_name'=>$hostal_room]);
    }

    public function hostel_add_room(Request $request){

        $data = new HostalRoomDetail();
        $data->hostal_room_no =$request->room_number;
        $data->hostal_room_bed_type =$request->room_bed_type;
        $data->hostal_attach_washroom =$request->room_attach_washroom;
        $data->hostal_charge_per_student = $request->room_charge_per_student;
        $data->hostal_id = $request->hostal_id;
        $data->save();
        return redirect(route('room_list'));

    }

    public function hostel_edit_room_list($id){
        $list = Hostal::find($id);
        // $hostal_room = HostalRoomDetail::find($id);
    $list = HostalRoomDetail::with('hostal')->get();

        return view('hostel.hostel_edit_room_detail',['data'=>$list]);
    }
    public function update_edit_room(Request $request){
        $update = Hostal::find($request->id);
        $update =HostalRoomDetail::find($request->id);
        $update->hostal_room_no =$request->room_number;
        $update->hostal_room_bed_type =$request->room_bed_type;
        $update->hostal_attach_washroom =$request->room_attach_washroom;
        $update->hostal_charge_per_student = $request->room_charge_per_student;
        $update->hostal_id = $request->hostal_id;
        $update->save();
        return redirect(route('room_list'));
    }
   public function hostel_room_detail_delete($id){

        $list = HostalRoomDetail::find($id);
        // return $list;
        $list->delete();
        // return redirect(route('room_list'));
    return response()->json(['status'=>'Employee list Deleted successfully']);


   }
//<.............................module 3rd seat available................................................>
    public function Seat_Available(Request $request){
        $seat = Hostal::query();
        if($request->ajax()){
            if(empty($request->hostel_name)){
            // $users=$query->where(['id'=>$request->search])->get();
                $users = $seat->get();
            }
            else{
                $users=$seat->where(['id'=>$request->hostel_name])->get();

            }
            return response()->json(['users'=>$users]);
        }
        $users = $seat->get();
        // return $seat;
        return view("hostel.hostel_seat_avail",['users'=>$users]);
    }
//<.............................module 4th Hostel Staff................................................>
    public function Hostel_Staff(){
        return view('hostel.hostel_staff');
    }

    public function hostal_Emp_Add(){
        $data = Hostel_staff::all();
        return view('hostel.employee_add');
    }
    public function hostel_store_data_emp(Request $request){
        $staff_add =new Hostel_staff();
        $emp_photo = time() . '.' . $request->emp_photo->extension();
        $request->emp_photo->move(public_path('images'), $emp_photo);
        $staff_add =new Hostel_staff();
        $staff_add->emp_name = $request->emp_name;
        $staff_add->emp_gender = $request->emp_gender;
        $staff_add->emp_dob = $request->emp_dob;
        $staff_add->emp_father = $request->emp_father;
        $staff_add->emp_email = $request->emp_email;
        $staff_add->emp_mobile = $request->emp_mobile;
        $staff_add->emp_address = $request->emp_address;
        $staff_add->emp_qualification = $request->emp_qualification;
        $staff_add->emp_photo = $emp_photo;
        $staff_add->emp_doj = $request->emp_doj;
        $staff_add->emp_designation = $request->emp_designation;
        $staff_add->emp_pan_card_no = $request->emp_pan_card_no;
        $staff_add->emp_aadhar_no = $request->emp_uid_no;
        $staff_add->emp_bank_name = $request->emp_bank_name;
        $staff_add->emp_account_no = $request->emp_account_no;
        $staff_add->emp_ifsc_code = $request->emp_ifsc_code;
        $staff_add->emp_salary = $request->emp_salary;
        $staff_add->emp_pf_number = $request->emp_pf_number;
        $staff_add->remarks = $request->remarks;
        $staff_add->save();
        return redirect(route('emp_add'))->with ('message','data insert succesful');

    }

    public function hostel_staff_list(){
        $hostel_emp_list = Hostel_staff::all();
        return view('hostel.employee_list', ['list_show' => $hostel_emp_list]);
    }
    public function hostel_edit_staff($id)
    {
        $edit_staff = Hostel_staff::find($id);
        return view('hostel.employee_edit',['edit'=>$edit_staff]);
    }
    public function hostel_update_staff(Request $request)
    {
        $edit_staff = Hostel_staff::find($request->id);
        $emp_photo = time() . '.' . $request->emp_photo->extension();
        $request->emp_photo->move(public_path('images'), $emp_photo);
        $edit_staff = Hostel_staff::find($request->id);
        $edit_staff->emp_name = $request->emp_name;
        $edit_staff->emp_gender = $request->emp_gender;
        $edit_staff->emp_dob = $request->emp_dob;
        $edit_staff->emp_father = $request->emp_father;
        $edit_staff->emp_email = $request->emp_email;
        $edit_staff->emp_mobile = $request->emp_mobile;
        $edit_staff->emp_address = $request->emp_address;
        $edit_staff->emp_qualification = $request->emp_qualification;
        $edit_staff->emp_photo = $emp_photo;
        $edit_staff->emp_doj = $request->emp_doj;
        $edit_staff->emp_designation = $request->emp_designation;
        $edit_staff->emp_pan_card_no = $request->emp_pan_card_no;
        $edit_staff->emp_aadhar_no = $request->emp_uid_no;
        $edit_staff->emp_bank_name = $request->emp_bank_name;
        $edit_staff->emp_account_no = $request->emp_account_no;
        $edit_staff->emp_ifsc_code = $request->emp_ifsc_code;
        $edit_staff->emp_salary = $request->emp_salary;
        $edit_staff->emp_pf_number = $request->emp_pf_number;
        $edit_staff->remarks = $request->remarks;
        $edit_staff->save();
        // return $edit_staff;
        return redirect(route('emp_list'))->with ('message','update succesful');

    }

    public function hostel_delete_staff($id)
    {
        $list = Hostel_staff::find($id);
        $list->delete();
        return response()->json(['status'=>'Employee list Deleted successfully']);

    }

//<.............................module 5th Hostel Student................................................>

    public function Hostal_Stu_List(){
        $student = Hostel_student_adminssion::with('hostal_room_details')->get();
        return view('hostel.hostel_student_list',['student'=>$student]);
    }
// ================================hostel student=========================================
    public function hostel_student(){
        // $std_detail = User::all();
        $std_detail = Student::with('hostal','hostalRoom','user','section','class')->get();
        $class = Classes::all();
        $hostal = Hostal::get();
        return view('hostel.hostel_student',['student'=>$std_detail,'class'=>$class, 'hostal' => $hostal]);
        }
    public function hostel_add_student(Request $request){
        $data =new Hostel_student_adminssion;
        $data->student_id = $request->id;
        $data->class_id = $request->student_class;
        $data->section_id = $request->student_class_section;
        $data->users_id = $request->student_name;
        $data->handicaped = $request->hostel_student_handicapped;
        $data->religion = $request->hostel_student_religion;
        $data->category = $request->hostel_student_category;
        $data->mother_contact_no = $request->hostel_student_mother_contact;
        $data->hostal_id = $request->hostal_name;
        $data->room_id = $request->hostel_room;
        $data->room_table = $request->hostel_room_table;
        $data->room_bed = $request->hostel_room_bed;
        $data->room_alimirah = $request->hostel_room_almirah;
        $data->mess_charge = $request->hostel_mess_charge;
        $data->doj = $request->hostel_join;
        $data->caution_money = $request->hostel_caution_money;
        $data->laundry_charge = $request->hostel_laundry_charge;
        $data->save();

        return redirect(route('hostal_student_list'));
    }
        public function actionstudentInfo($id){
        $student = Student::with('user', 'class')->where('id',$id)->first();
        return $student;
        }
        public function actionHostalInfo($id){

            $hostel = HostalRoomDetail::with('hostal')->where('hostal_id',$id)->first();

            return $hostel;
            }
            public function hostel_student_edit($id){
                $edit_detail =Hostel_student_adminssion::find($id);
        $edit_class = Classes::all();
        $edit_hostel = Hostal::get();
                // $hostel_stu_adm = Hostel_student_adminssion::find($id);
                return view('hostel.hostel_student_view',['views'=>$edit_detail,'edit'=>$edit_class,'hostal'=>$edit_hostel]);

            }
            public function hostel_student_view(Request $request ){
        $data = Hostel_student_adminssion::find($request->id);

        $data->handicaped = $request->hostel_student_handicapped;
        $data->religion = $request->hostel_student_religion;
        $data->category = $request->hostel_student_category;
        $data->mother_contact_no = $request->hostel_student_mother_contact;
        $data->hostal_id = $request->hostal_name;
        $data->room_id = $request->hostel_room;
        $data->room_table = $request->hostel_room_table;
        $data->room_bed = $request->hostel_room_bed;
        $data->room_alimirah = $request->hostel_room_almirah;
        $data->mess_charge = $request->hostel_mess_charge;
        $data->doj = $request->hostel_join;
        $data->caution_money = $request->hostel_caution_money;
        $data->laundry_charge = $request->hostel_laundry_charge;
        // return $data;
        $data->update();
                return redirect(route('hostal_student_list'));
                // return redirect((''));
            }
            public function hostel_pay_fee($id){

        $student = Hostel_student_adminssion::with('hostal_room_details')->where('id',$id)->first();
                return view('hostel.hostel_pay_fee',['fee'=>$student]);
            }
            public function hostel_leave($id){

                 $leave = Hostel_student_adminssion::find($id);

                return view('hostel.leave',['leave'=>$leave]);
            }

        public function hostel_stu_list_del($id){

            $list = Hostel_student_adminssion::find($id);
            $list->delete();
        return response()->json(['status'=>'Employee list Deleted successfully']);


       }
// ===============================================================================================================



//<.............................module 5th mess menu................................................>
    public function Hostal_Mess(){
        return view('hostel.hostel_mess');
    }


    public function Hostel_Add_Mess(){
        $mess_hostel = Hostal::all();
        return view('hostel.hostel_add_mess',['hostel'=>$mess_hostel]);
    }
    public function Hostel_Mess_List(){

        $data = Hostal::with('mess')->get();

        return view('hostel.hostel_mess_menu_list',['data'=>$data]);
    }

    public function action_mess_list(Request $response, $id)
    {
        $data = Hostal::with('mess')->where('id', $id)->first();
        $data1 = json_decode($data->mess->menu);
        return $data1;
    }
    public function hostel_edit_mess_menu(){
        $mess_hostel = Hostal::all();
        return view('hostel.edit_mess_menu',['mess'=>$mess_hostel]);
    }
    public function action_edit_mess(Request $response, $id)
    {
        $data = Hostal::with('mess')->where('id', $id)->first();
        $data1 = json_decode($data->mess->menu);
        return $data1;
    }
    public function hostel_mess_update(){
        $mess_hostel = Hostal::all();
        return redirect(route('messlist'));
    }
//<=====================================daily purchases========================>

    public function daily_purchase_list(){
        $daily_list = Hostel_Daily_Purchase::all();
        return view('hostel.daily_purchase_list',['list'=>$daily_list]);
    }
    public function purchase_edit_list($id){
        $edit = Hostel_Daily_purchase::find($id);
        return view('hostel.purchase_edit_list',['data'=>$edit]);
    }

    public function purchase_update_list(Request $req){
        $item_list =Hostel_Daily_Purchase::find($req->id);
        $item_list->item_desc = $req->item_description;
        $item_list->quantity = $req->quantity;
        $item_list->rate = $req->rate;
        $item_list->purchase_date = $req->date_purchase;
        $item_list->update();
        return redirect(route('daily_purchase_list'));
    }

    public function daily_purchase_list_del($id){

        $list = Hostel_Daily_Purchase::find($id);
        $list->delete();
        return response()->json(['status'=>'Employee list Deleted successfully']);
   }
  public function daily_add_item(){
        return view('hostel.daily_add_item');
    }
    public function daily_add_item_store(Request $req){
        $item_list = new Hostel_Daily_Purchase;
        $item_list->item_desc = $req->item_description;
        $item_list->quantity = $req->quantity;
        $item_list->rate = $req->rate;
        $item_list->purchase_date = $req->date_purchase;
        $item_list->save();
        return redirect(route('daily_purchase_list'));
    }

    public function hostel_add_new_mess(Request $request){
        $mess = [
                'sun_breakfast'=>$request->sun_breakfast,
                'sun_lunch'=>$request->sun_lunch,
                'sun_dinner'=>$request->sun_dinner,

                'mon_breakfast'=>$request->mon_breakfast,
                'mon_lunch'=>$request->mon_lunch,
                'mon_dinner'=>$request->mon_dinner,

                'tue_breakfast'=>$request->tue_breakfast,
                'tue_lunch'=>$request->tue_lunch,
                'tue_dinner'=>$request->tue_dinner,

                'wed_breakfast'=>$request->wed_breakfast,
                'wed_lunch'=>$request->wed_lunch,
                'wed_dinner'=>$request->wed_dinner,


                'thu_breakfast'=>$request->thu_breakfast,
                'thu_lunch'=>$request->thu_lunch,
                'thu_dinner'=>$request->thu_dinner,

                'fri_breakfast'=>$request->fri_breakfast,
                'fri_lunch'=>$request->fri_lunch,
                'fri_dinner'=>$request->fri_dinner,

                'sat_breakfast'=>$request->sat_breakfast,
                'sat_lunch'=>$request->sat_lunch,
                'sat_dinner'=>$request->sat_dinner
        ];

        $data = new Mess;
        $data->hostal_id = $request->hostal_id;
        $data->menu = json_encode($mess);
        $data->save();
        return redirect()->back();



    }




    public function getSections($id)
    {
        $data = Section::where('class_id', $id)->get();

        $output = '<option>' . 'select' . '</option>';
        foreach($data as $item)
        {
            $output .= '<option value=' . $item->id . '>' . $item->section_name . '</option>';
        }




        $student = Student::with('user')->where('class_id', $id)->get();

        $studentOutput = '<option>' . 'select' . '</option>';



        foreach($student as $item)
        {
            $studentOutput .= '<option value=' . $item->id . '>';
            if($item->user)
            {
                $studentOutput .= $item->user->name;
            }
            $studentOutput .= '</option>';
        }




        $result = ['output' => $output, 'student' => $studentOutput];
        return $result;


    }




}
