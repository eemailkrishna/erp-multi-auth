<?php

namespace App\Http\Controllers;
use App\Models\Session;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;

use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function session(){
        return view('session.session');
    }

    public function AddSessionPage(){   
        $sessions = Session::all();
        return view('session.add_session', ['sessions'=>$sessions]);
    }

    public function AddSession(Request $req){
        $validator = Validator::make($req->all(), [ 
            'add_session' => 'required|string', 
        ]);
        $data = Session::insert([
            'session' => $req->add_session,
            'last_session' => $req->last_session,
            'session_creation_date' => $req->creation_date,
        ]);
        return redirect()->back()->with('success', 'Session added successfully');
    }

    public function DestroySession($id)
    {
        $ses_data = Session::findOrFail($id);
        $ses_data->delete();
        return response()->json(['status'=>'Session Deleted successfully']);
    }

    public function MoveStudentPage(){
        $classes = Classes::all();
        $sessions = Session::all();
        $students = Student::all();
        return view('session.move_student', ['students'=>$students,'classes'=>$classes,'sessions'=>$sessions]);
    }

    // public function AjaxMoveStudentPage($id){
    //     $students=Student::with('user','class','section')->where('id',$id)->first();
    //        return $students;
    // }
    // ------------------------------------------------------search-from-session------------------------------------------

    public function SearchFromSession(Request $req){
        if($req->from_session!='' && $req->from_class!='' && $req->from_section!=''){

            $data = Student::where([
                ['session_id',$req->from_session],
                ['class_id',$req->from_class],
                ['section_id',$req->from_section]
            ])->get();
            }
            else if($req->from_session!='' && $req->from_class=='' && $req->from_section==''){
                $data = Student::where('session_id',$req->from_session)->get();
            }
            else if($req->from_session=='' && $req->from_class!='' && $req->from_session==''){
                $data = Student::where('class_id',$req->from_class)->get();
            }
            else if($req->from_session=='' && $req->from_class=='' && $req->from_session!=''){
                $data = Student::where('section_id',$req->from_session)->get();
            }
            else{
                $data = Student::get();
            }
        if($req->ajax()){
        if($data)
        {
            $output = '<table>';
            $output = '<thead>';
            $output .= '<tr>';                       
            $output .= '<th>' . 'S No.' . '</th>';
            $output .= '<th>' . 'Student Name' . '</th>';
            $output .= '<th>' . 'Father Name' . '</th>';
            $output .= '<th>' . '<br /><input type="checkbox" id="checked1" value="" name=""
            onclick="for_check(this.id);">' . '</th>';
            $output .= '</tr>';
            $output .= '</thead>';
            $output .= '<tbody>';
            if(count($data)>0){
            foreach($data as $item)
            {
            $output .= '<input type="hidden">'.$item->id.'</td>'; 
                $output .= '<tr>';
                $output .= '<td>'.$item->id.'</td>'; 
                $output .= '<td>';
                if($item->user)
                {
                    $output .= $item->user->name;
                }
                $output .= '</td>';
                $output .= '<td>'.$item->father_name.'</td>';
                $output .= '<td>'.'<input type="checkbox" class="checked1" value='.$item->id.'
                name="move_student_from['.$item->id.']">'.'</td>';  
                $output .= '</tr>';
            }
            $output .= '</tbody>';
            $output .= '</table>';
        }
        else{
          $output .='<td>No Data Found</td>';
        }
      return $output;
      }
    }
  }
// ------------------------------------------------------search-to-session------------------------------------------
  public function SearchToSession(Request $req){
    if($req->to_session!='' && $req->to_class!='' && $req->to_section!=''){

        $data = Student::where([
            ['session_id',$req->to_session],
            ['class_id',$req->to_class],
            ['section_id',$req->to_section]
        ])->get();
        }
        else if($req->to_session!='' && $req->to_class=='' && $req->to_section==''){
            $data = Student::where('session_id',$req->to_session)->get();
        }
        else if($req->to_session=='' && $req->to_class!='' && $req->to_session==''){
            $data = Student::where('class_id',$req->to_class)->get();
        }
        else if($req->to_session=='' && $req->to_class=='' && $req->to_session!=''){
            $data = Student::where('section_id',$req->to_session)->get();
        }
        else{
            $data = Student::get();
        }
    if($req->ajax()){
    if($data)
    {
        $output = '<table>';
        $output = '<thead>';
        $output .= '<tr>';                       
        $output .= '<th>' . 'S No.' . '</th>';
        $output .= '<th>' . 'Student Name' . '</th>';
        $output .= '<th>' . 'Father Name' . '</th>';
        $output .= '<th>' . '<br /><input type="checkbox" id="checked" value="" name=""
        onclick="for_check(this.id);">' . '</th>';
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';
        if(count($data)>0){
        foreach($data as $item)
        {
            $output .= '<input type="hidden">'.$item->id.'</td>'; 
            $output .= '<tr>';
            $output .= '<td>'.$item->id.'</td>'; 
            $output .= '<td>';
            if($item->user)
            {
                $output .= $item->user->name;
            }
            $output .= '</td>';
            $output .= '<td>'.$item->father_name.'</td>';
            $output .= '<td>'.'<input type="checkbox" class="checked"  value=""
            name="move_student_to[]">'.'</td>';  
            $output .= '</tr>';
        }
        $output .= '</tbody>';
        $output .= '</table>';
    }
    else{
      $output .='<td>No Data Found</td>';
    }
  return $output;
  }
}
}

public function PromotionStudent(Request $req){
    $from= $req->move_student_from;
    foreach ($from as  $values) {
        $data = Student::where('id',$values)->update([
            'session_id'=> $req->to_session,
            'class_id' =>$req->to_class,
            'section_id' => $req->to_section
        ]);       
    }
        return redirect()->back()->with('success','Student promoted successfully');
}


}


// @foreach($students as $stu)
// <tr>
//     <th>{{$loop->iteration}}</th>
//     <td>{{$stu->mother_name}}</td>
//     <td>{{$stu->father_name}}</td>
//     <td> <input type="checkbox" checked value="" class="all_check" name="move_student_from[]">
//     </td>
// </tr>
// @endforeach