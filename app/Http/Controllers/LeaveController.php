<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Leave;
use App\Models\User;
use DB;


class LeaveController extends Controller
{
    public function leave()
    {
        return view('leave.leave');
    }
    public function student_leave_form()
    {
        $std_detail = Student::with('user','class')->get();
        $get_class = Classes::all();
        return view('leave.leave_form',['student'=>$std_detail,'get_class'=>$get_class]);
    }
    public function action_student_info($id){
        $student = Student::with('user', 'class')->where('users_id',$id)->first();
        return $student;
        }
    public function action_leave_date($id){

    }

    public function store_leave_form(Request $request){
        $data = new Leave();
        $upload_application_photo = time() . '.' . $request->upload_application_photo->extension();
        $request->upload_application_photo->move(public_path('images'), $upload_application_photo);

        $data = new Leave();
        $data->student_id =$request->id;
        $data->class_id =$request->id;
        $data->leave_from_date = $request->leave_from_date;
        $data->leave_to_date = $request->leave_to_date;
        $data->approved_by = $request->approved_by;
        $data->upload_application_photo =$upload_application_photo;
        $data->total_leave_days = $request->total_leave_days;
        $data->save();
        return redirect(route('studentleavelist'));
    }
    public function student_leave_list(Request $request)
    {


            $leave = Leave::query();
            $users = Classes::query();

            if($request->ajax()){


        $student = Student::where('id',$request->class_id)->get();


        $test = DB::table('leaves')
            ->join('students', 'students.class_id', '=', 'leaves.class_id')
            ->join('users', 'users.id', '=', 'leaves.student_id')->where('class_id',$request->class_id)->first();
        // return $student;
        // // $leave = Leave::where('c',$request->student_id)->get();
        // $user =User::where('id',$student->users_id)->first();
        // $cls =Classes::where('id',$student->class_id)->first();
        return $test;




                if(empty($request->class_id)){

                    return $request->class_id;


                // $users=$query->where(['id'=>$request->search])->get();
                    // $users = $query->get();
                }
                else{
                    // $users=$query->where(['id'=>$request->class_id])->get();

                }
                // return response()->json(['users'=>$user,'students'=>$student,'leave'=>$leave,'class'=>$cls]);
            }
            $users = $users->get();
            $leave = $leave->get();
        return view('leave.leave_list',compact('users','leave'));

        // $leave_list = Leave::with('student')->get();
        // return view('leave.leave_list',['leave'=>$leave_list]);
    }
    public function actionclassinfo($id){

        $hostel = Leave::with('student')->where('student_id',$id)->first();

        return $hostel;
        }


    public function edit_leave($id){
        $edit_leave = Leave::with('student')->where('id',$id)->first();
        return view('leave.edit_leave',['item'=>$edit_leave]);
        // return view('leave.edit_leave');
    }
    public function update_leave(Request $request){
        $upload_application_photo = time() . '.' . $request->upload_application_photo->extension();
        $request->upload_application_photo->move(public_path('images'), $upload_application_photo);

        $data = Leave::find($request->id);
        $data->leave_from_date = $request->leave_from_date;
        $data->leave_to_date = $request->leave_to_date;
        $data->approved_by = $request->approved_by;
        $data->upload_application_photo =$upload_application_photo;
        $data->total_leave_days = $request->total_leave_days;
        $data->update();
        return redirect(route('studentleavelist'));
    }
    public function delete_leave($id)
    {
        $list = Leave::find($id);
        $list->delete();
        return response()->json(['status' => 'leave list Deleted successfully']);
    }


    public function fetch_Sections($id)
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




        $result = ['section' => $output, 'student' => $studentOutput];
        return $result;


    }

}
