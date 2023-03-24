<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\RouteGenerate;
use App\Models\AddStop;
use App\Models\AssignedRoute;
use App\Models\BusEmployeeAdd;
use App\Models\BusExpence;
use App\Models\StudentBusList;
use App\Models\Classes;


class BusController extends Controller
{
    public function bus(){
        return view('bus.bus');
    }
    public function bus_add_bus(){
        return view('bus.add_bus');
    }
    // all data  list show 
    public function bus_bus_list(Request $req){
      $data=Bus::all();
      return view('bus.bus_list',['abc'=>$data]);
    }
    public function bus_route_add(Request $req){
      $data=RouteGenerate::all();
     return view('bus.bus_route_add',['route'=>$data]);
    }
    public function bus_bus_route_list(Request $req){
      $show=AddStop::all();
        return view('bus.bus_route_list',['buslist'=>$show]);
    }
    public function bus_asigned_bus_route(){
      $data=AddStop::all();
        return view('bus.asigned_bus_route',['route'=>$data]);
    }
    public function bus_asigned_list(){
      $data=AssignedRoute::all();
        return view('bus.assigned_route_list',['assignlist'=>$data]);
    }
    public function bus_student_form(){
      $list=AddStop::all();
      
        return view('bus.bus_student_form',['liststd'=>$list]);
    }
    public function bus_bus_student_list(){
      $stdfrm=StudentBusList::all();
      $class_filter=Classes::all();
      return view('bus.bus_student_list',['class'=>$class_filter,'studentfrm'=>$stdfrm]);
    }
    public function bus_bus_staff(){
        return view('bus.bus_staff');
    }
    public function bus_employee_add(){
      return view('bus.employee_add');
    }
    public function bus_employee_list(){
      $data= BusEmployeeAdd::all();
      return view('bus.employee_list',['emplist'=>$data]);
    }
    public function bus_purchase_list(){
      return view('bus.purchase_list');
    }
    public function bus_add_bus_expance(){
      $data=Bus::all();
      $addexpence=BusExpence::all();
      return view('bus.add_bus_expance',['expence'=>$data,'expance'=>$addexpence]);
    }
    public function bus_bus_expense_report(){
      $show=Bus::all();
      return view('bus.bus_expense_report',['data'=>$show,'exprpt'=>$show]);
    }
    public function bus_student_list_bus_wise(){
      return view('bus.student_list_bus_wise');
    }
    public function route_add(){
      $data=RouteGenerate::all();
        return view('bus.route_add',['routename'=>$data]);
    }
     
    public function add_bus_detail(Request $req){
  $insert= new Bus;
  if($req->file('bus_photo')) {
    $file = $req->file('bus_photo');
    $bus_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_photo);
     $insert->bus_photo=$bus_photo;
  }
  if($req->file('bus_registration_card_photo')) {
    $file = $req->file('bus_registration_card_photo');
    $bus_registration_card_photo = time().'_'.$file->getClientOriginalName();
  $insert->bus_registration_card_photo=$bus_registration_card_photo;

  }
    $file->move('public/assests/image/',$bus_registration_card_photo);
  if($req->file('bus_insurance_photo')) {
    $file = $req->file('bus_insurance_photo');
    $bus_insurance_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_insurance_photo);
    $insert->bus_insurance_photo=$bus_insurance_photo;
  }
  if($req->file('bus_other_document_photo')) {
    $file = $req->file('bus_other_document_photo');
    $bus_other_document_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_other_document_photo);
    $insert->bus_other_document_photo=$bus_other_document_photo;
  }
  if($req->file('bus_pollution_certificate_photo')) {
    $file = $req->file('bus_pollution_certificate_photo');
    $bus_pollution_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_pollution_certificate_photo);
    $insert->bus_pollution_certificate_photo=$bus_pollution_certificate_photo;
  }
  if($req->file('bus_fitness_certicate_photo')) {
    $file = $req->file('bus_fitness_certicate_photo');
    $bus_fitness_certicate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_fitness_certicate_photo);
    $insert->bus_fitness_certicate_photo=$bus_fitness_certicate_photo;
  }
  if($req->file('bus_permit_certificate_photo')) {
    $file = $req->file('bus_permit_certificate_photo');
    $bus_permit_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_permit_certificate_photo);
    $insert->bus_permit_certificate_photo=$bus_permit_certificate_photo;
  }
  if($req->file('bus_speed_certificate_photo')) {
    $file = $req->file('bus_speed_certificate_photo');
    $bus_speed_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_speed_certificate_photo);
    $insert->bus_speed_certificate_photo=$bus_speed_certificate_photo;
  }
  if($req->file('bus_gps_certificate_photo')) {
    $file = $req->file('bus_gps_certificate_photo');
    $bus_gps_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_gps_certificate_photo);
    $insert->bus_gps_certificate_photo=$bus_gps_certificate_photo;
  }
  
  if($req->file('bus_camera_certificate_photo')) {
    $file = $req->file('bus_camera_certificate_photo');
    $bus_camera_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_camera_certificate_photo);
    $insert->bus_camera_certificate_photo=$bus_camera_certificate_photo;
  }
  $insert->bus_name=$req->bus_name;
  $insert->bus_company=$req->bus_company;
  $insert->bus_model_no=$req->bus_model_no;
  $insert->bus_no=$req->bus_no;
  $insert->bus_owner_name=$req->bus_owner_name;
  $insert->bus_owner_contact_no=$req->bus_owner_contact;
  $insert->bus_registration_no=$req->bus_registration_no;
  $insert->capacity_of_bus=$req->bus_capacity;
  
  
$var=$insert->save();
if($var){
  return redirect()->back()->with('message','data insert successfully');
  }else{
      return redirect()->back()->with('error','data not insert successfully');
  }
}

// delete bus data
public function bus_bus_delete($id){
  $var=Bus::find($id);
  $var->delete();
  return redirect('bus/bus_list');
} 

//  Get update bus data
public function bus_bus_edit($id){
  $var=Bus::find($id);
  return view('bus/add_bus_edit',['editbus'=>$var]);
}

// Post Update bus data
public function bus_bus_update(Request $req, $id){
  $update=Bus::find($id);
  if($req->file('bus_photo')) {
    $file = $req->file('bus_photo');
    $bus_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_photo);
     $update->bus_photo=$bus_photo;
  }
  if($req->file('bus_registration_card_photo')) {
    $file = $req->file('bus_registration_card_photo');
    $bus_registration_card_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_registration_card_photo);
  $update->bus_registration_card_photo=$bus_registration_card_photo;

  }
  if($req->file('bus_insurance_photo')) {
    $file = $req->file('bus_insurance_photo');
    $bus_insurance_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_insurance_photo);
    $update->bus_insurance_photo=$bus_insurance_photo;
  }
  if($req->file('bus_other_document_photo')) {
    $file = $req->file('bus_other_document_photo');
    $bus_other_document_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_other_document_photo);
    $update->bus_other_document_photo=$bus_other_document_photo;
  }
  if($req->file('bus_pollution_certificate_photo')) {
    $file = $req->file('bus_pollution_certificate_photo');
    $bus_pollution_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_pollution_certificate_photo);
    $update->bus_pollution_certificate_photo=$bus_pollution_certificate_photo;
  }
  if($req->file('bus_fitness_certicate_photo')) {
    $file = $req->file('bus_fitness_certicate_photo');
    $bus_fitness_certicate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_fitness_certicate_photo);
    $update->bus_fitness_certicate_photo=$bus_fitness_certicate_photo;
  }
  if($req->file('bus_permit_certificate_photo')) {
    $file = $req->file('bus_permit_certificate_photo');
    $bus_permit_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_permit_certificate_photo);
    $update->bus_permit_certificate_photo=$bus_permit_certificate_photo;
  }
  if($req->file('bus_speed_certificate_photo')) {
    $file = $req->file('bus_speed_certificate_photo');
    $bus_speed_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_speed_certificate_photo);
    $update->bus_speed_certificate_photo=$bus_speed_certificate_photo;
  }
  if($req->file('bus_gps_certificate_photo')) {
    $file = $req->file('bus_gps_certificate_photo');
    $bus_gps_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_gps_certificate_photo);
    $update->bus_gps_certificate_photo=$bus_gps_certificate_photo;
  }
  
  if($req->file('bus_camera_certificate_photo')) {
    $file = $req->file('bus_camera_certificate_photo');
    $bus_camera_certificate_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$bus_camera_certificate_photo);
    $update->bus_camera_certificate_photo=$bus_camera_certificate_photo;
  }
  $update->bus_name=$req->bus_name;
  $update->bus_company=$req->bus_company;
  $update->bus_model_no=$req->bus_model_no;
  $update->bus_no=$req->bus_no;
  $update->bus_owner_name=$req->bus_owner_name;
  $update->bus_owner_contact_no=$req->bus_owner_contact;
  $update->bus_registration_no=$req->bus_registration_no;
  $update->capacity_of_bus=$req->bus_capacity;
  
  
$var=$update->update();
if($var){
  return redirect('bus/bus_list')->with('message','Update successfully');
  }else{
      return redirect()->back()->with('error','update not successfully');
  }
}

// Route Generate
public function routegenerate(Request $req){
  $insert= new RouteGenerate;
  $insert->route_name=$req->route_name;
  $insert->save();
    return redirect('route_add');
  }

  // Delete 
  public function delete_route($id){
    $var= RouteGenerate::find($id);
    $var->delete();
    return redirect('route_add')->with('message','Delete successfully');
  }
 // Add Stop
 public function bus_add_stop(Request $req){
  $insert= new AddStop;
  $insert->route_name=$req->route_name;
  $insert->stop_name=$req->stop_name;
  $insert->bus_time=$req->bus_time;
  $insert->bus_no=$req->bus_no;
  $insert->save();
  return redirect('bus/route_add')->with('message','Insert Successfully');
 }
 //delete
 public function delete_add_stop($id){
  $data= AddStop::find($id);
  $data->delete();
  return redirect('bus/bus_route_list');
 }
 // Bus Assign List
 public function bus_assign_route(Request $req){
  $insert = new AssignedRoute;
  $insert->bus_no=$req->bus_no;
  $insert->bus_route=$req->bus_route;
  $insert->save();
  return redirect('bus/bus_assigned_route_list');
 }
 // bus assign delete
 public function assign_list_del($id){
  $var=AssignedRoute::find($id);
  $var->delete();
  return redirect('bus/bus_assigned_route_list');
 }
 // edit get assign bus list
 public function assign_edit($id){
  $edit= AssignedRoute::find($id);
  $route =AssignedRoute::all();
return view('bus.assign_bus_edit',['test'=>$edit,'route'=>$route]);
 }
 // post update assign bus list
 public function assign_update(Request $req, $id){
  $update=AssignedRoute::find($id);
  $update->bus_no=$req->bus_no;
  $update->bus_route=$req->bus_route;
  $update->update();
  return redirect('bus/bus_assigned_route_list')->with('message','Update successfully');
}
// employee add
public function bus_employee_detail(Request $req){
  $insert= new BusEmployeeAdd;

  if($req->file('emp_photo')) {
    $file = $req->file('emp_photo');
    $emp_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$emp_photo);
     $insert->emp_photo=$emp_photo;
  }
  $insert->emp_name=$req->emp_name;
  $insert->emp_gender=$req->emp_gender;
  $insert->emp_dob=$req->emp_dob;
  $insert->emp_father=$req->emp_father;
  $insert->emp_email=$req->emp_email;
  $insert->emp_mobile=$req->emp_mobile;
  $insert->emp_address=$req->emp_address;
  $insert->emp_qualification=$req->emp_qualification;
  // $insert->emp_photo=$req->emp_photo;
  $insert->emp_doj=$req->emp_doj;
  $insert->emp_designation=$req->emp_designation;
  $insert->emp_casual_leave=$req->emp_casual_leave;
  $insert->emp_pan_card_no=$req->emp_pan_card_no;
  $insert->emp_adhar_no=$req->emp_adhar_no;
  $insert->emp_bank_name=$req->emp_bank_name;
  $insert->emp_account_no=$req->emp_account_no;
  $insert->emp_ifsc_code=$req->emp_ifsc_code;
  $insert->emp_salary=$req->emp_salary;
  $insert->emp_pf_number=$req->emp_pf_number;
  $insert->remarks=$req->remarks;
  $var= $insert->save();
  return redirect()->back()->with('message','data insert successfully');
  }
  // emp delete
  public function emp_delete($id){
    $data= BusEmployeeAdd::find($id);
    $data->delete();
    return redirect('bus/employee-list');
  }
  // get edit emplist
  public function emp_edit($id){
    $data= BusEmployeeAdd::find($id);
    return view('bus.bus_emplist_edit',['empedit'=>$data]);
  }
//post edit emplist
public function emp_update(Request $req,$id){
  $update=BusEmployeeAdd::find($id);
  if($req->file('emp_photo')) {
    $file = $req->file('emp_photo');
    $emp_photo = time().'_'.$file->getClientOriginalName();
    $file->move('public/assests/image/',$emp_photo);
     $insert->emp_photo=$emp_photo;
  }
  $update->emp_name=$req->emp_name;
  $update->emp_gender=$req->emp_gender;
  $update->emp_dob=$req->emp_dob;
  $update->emp_father=$req->emp_father;
  $update->emp_email=$req->emp_email;
  $update->emp_mobile=$req->emp_mobile;
  $update->emp_address=$req->emp_address;
  $update->emp_qualification=$req->emp_qualification;
  $update->emp_doj=$req->emp_doj;
  $update->emp_designation=$req->emp_designation;
  $update->emp_casual_leave=$req->emp_casual_leave;
  $update->emp_pan_card_no=$req->emp_pan_card_no;
  $update->emp_adhar_no=$req->emp_adhar_no;
  $update->emp_bank_name=$req->emp_bank_name;
  $update->emp_account_no=$req->emp_account_no;
  $update->emp_ifsc_code=$req->emp_ifsc_code;
  $update->emp_salary=$req->emp_salary;
  $update->emp_pf_number=$req->emp_pf_number;
  $update->remarks=$req->remarks;
  $update->update();
  return redirect('bus/employee-list')->with('message','Update successfully');
  
}
//Add Bus Expense
public function bus_expence(Request $req){
  $insert=new BusExpence;
  $insert->bus_name=$req->bus_name;
  $insert->bus_company=$req->bus_company;
  $insert->bus_model_no=$req->bus_model_no;
  $insert->bus_no=$req->bus_no;
  $insert->bus_expence_remark=$req->bus_expence_remark;
  $insert->maintainance_date=$req->maintainance_date;
  $insert->garage_shop=$req->garage_shop;
  $insert->bus_expence_amount=$req->bus_expence_amount;
  $insert->bill_date=$req->bill_date;
  $insert->payment_date=$req->payment_date;
  $insert->bus_reading=$req->bus_reading;
  $insert->save();
  return redirect('bus/add_bus_expance')->with('message','Insert Successfully');
}
//delete bus expense
public function delete_expense($id){
  $var=BusExpence::find($id);
  $var->delete();
  return redirect('bus/add_bus_expance');
}
// get edit bus expense
public function edit_expense($id){
  $var=BusExpence::find($id);
  $data=Bus::all();
  return view('bus/bus_expense_edit',['editexpense'=>$var,'expence'=>$data,]);
}
public function update_expense(Request $req,$id){
  $update= BusExpence::find($id);
  $update->bus_name=$req->bus_name;
  $update->bus_company=$req->bus_company;
  $update->bus_model_no=$req->bus_model_no;
  $update->bus_no=$req->bus_no;
  $update->bus_expence_remark=$req->bus_expence_remark;
  $update->maintainance_date=$req->maintainance_date;
  $update->garage_shop=$req->garage_shop;
  $update->bus_expence_amount=$req->bus_expence_amount;
  $update->bill_date=$req->bill_date;
  $update->payment_date=$req->payment_date;
  $update->bus_reading=$req->bus_reading;
  $update->update();
  return redirect('bus/add_bus_expance')->with('update','Update Successfully');

}
// Between Bus Data
public function bus_bus_report (Request $req){
 
  if($req->bus_id==''){
    $data = Bus::all();
    }
  else{
   $data=Bus::whereBetween('created_at', [$req->date1, $req->date2])->where('bus_name',$req->bus_id)->get();
    
  }
      // return $data;
      
      return view("bus.bus_expense_report",["data" =>$data ,'exprpt'=>$data]);
}

public function bus_std_form(Request $req){
  $insert=new StudentBusList;
  $insert->adm_no=$req->adm_no;
  $insert->student_name=$req->student_name;
  $insert->father_name=$req->father_name;
  $insert->std_class=$req->std_class;
  $insert->std_roll_no=$req->std_roll_no;
  $insert->address=$req->address;
  $insert->pickup=$req->pickup;
  $insert->bus_no=$req->bus_no;
  $insert->bus_route=$req->bus_route;
  $insert->save();
  return redirect('bus/student_bus_form')->with('message','data insert Successfully');
}
// ajax code
// public function bus_class_list(Request $request)
// {
//     $query = StudentBusList::query();
//     if($request->ajax()){
//         if(empty($request->search)){
//         // $users=$query->where(['id'=>$request->search])->get();
//             $users = $query->get();
//         }
//         else{
//             $users=$query->where(['id'=>$request->search])->get();

//         }
//         return response()->json(['users'=>$users]);
//     }
//     $users = $query->get();
//     return view('bus/student_bus_form',compact('users'));
// }

function class_fetech(Request $req){ 
 
  if($req->name ==''){
    $data = StudentBusList::all();
    }
  else{
  $data =StudentBusList::where('std_class',$req->name)->get();
}
$class_filter=Classes::all();

return view('bus.bus_student_list',["data" =>$data,'studentfrm'=>$data,'class'=> $class_filter]);
}
 // delete class_list
 public function del_bus_list($id){
  $del=StudentBusList::find($id);
  $del->delete();
  return redirect('bus.bus_student_list');
 }
}

  

    

