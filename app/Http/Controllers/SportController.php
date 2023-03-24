<?php

namespace App\Http\Controllers;
use App\Models\Sport;
use App\Models\Student;
use App\Models\Employee;
use App\Models\Classes;
use App\Models\Section;
use App\Models\User;
use App\Models\StaffTeamCreationInfo;
use App\Models\TeamCreationInfo;
use App\Models\Sports_Participate;
use Illuminate\Http\Request;
use DB;

class SportController extends Controller
{
    public function sport(){
        return  view('sports.sports');
    }

    public function AddSport(){
        $sports = Sport::all();
        return  view('sports.add_sports', ['sports'=>$sports]);
    }
    public function AddSportName(Request $req){
        $data = Sport::insert([
            'sports_name' =>$req->sports_name
        ]);
        return redirect()->back()->with('success', 'Sport added successfully');
    }
    public function DestroySport($id)
    {
        $sports = Sport::findOrFail($id);
        $sports->delete();
        return response()->json(['status'=>'Sport Deleted successfully']);
    }

    // public function SportType(){
    //     return  view('sports.sports_type');
    // }
    
    public function AgeCategory(Request $req){
        $data = DB::table('Sports_Participate');
        $classes = Classes::get();
        $sports = Sport::get();
        $genders = Sports_Participate::get();
        $data = $data
        ->select('Sports_Participate.*','sports.sports_name','users.name','users.dob','classes.class_name','sections.section_name','students.*')
        ->leftJoin('sports','sports.id','Sports_Participate.sports_id')
        ->leftJoin('users','users.id','Sports_Participate.student_id')
        ->leftJoin('classes','classes.id','Sports_Participate.class_id')
        ->leftJoin('sections','sections.id','Sports_Participate.section_id')
        ->leftJoin('students','students.user_id','Sports_Participate.student_id')
        ->get();
        return  view('sports.age_category',['data'=>$data,'classes'=>$classes,'sports'=>$sports]);
    }

    //------------------------------SEARCH----------------------------------------
    public function SearchSport(Request $req){
        
        if($req->category!='' && $req->class_name!='' && $req->gender!='' && $req->sports_name!=''){
            $data = Sports_Participate::where([
                ['age_category',$req->category],
                ['class_id',$req->class_name],
                ['gender',$req->gender],
                ['sports_id',$req->sports_name]
            ])->get();
            }
            else if($req->category!='' && $req->class_name=='' && $req->gender=='' && $req->sports_name==''){
                $data = Sports_Participate::whereBetween('age_category', [0, $req->category])->get();
            }
            else if($req->category=='' && $req->class_name!='' && $req->gender=='' && $req->sports_name==''){
                $data = Sports_Participate::where('class_id',$req->class_name)->get();
            }
            else if($req->category=='' && $req->class_name=='' && $req->gender!='' && $req->sports_name==''){
                $data = Sports_Participate::where('gender',$req->gender)->get();
            }
            else if($req->category=='' && $req->class_name=='' && $req->gender=='' && $req->sports_name!=''){
                $data = Sports_Participate::where('sports_id',$req->sports_name)->get();
            }
            
            // else if($req->category!='' && $req->class_name!='' && $req->gender!='' && $req->sports_name!=''){
            //     $data = Sports_Participate::whereBetween('age_category', [0, $req->category])
            //     ->orWhere('class_id',$req->class_name)
            //     ->orWhere('gender',$req->gender)
            //     ->orWhere('sports_id',$req->sports_name)
            //     ->get();
            // }
            else{
                $data = Sports_Participate::get();
            }
    
        // if($req->ajax()){

        if($data)
        {
            $output = '<table class="table table-bordered table-striped text-center">';
            $output = '<thead>';
            $output .= '<tr>';                       
            $output .= '<th>' . 'All<br /><input type="checkbox" id="checked1" checked value="" name=""
                        onclick="for_check(this.id);">' . '</th>';
            $output .= '<th>' . 'S No.' . '</th>';
            $output .= '<th>' . 'Name' . '</th>';
            $output .= '<th>' . 'Class' . '</th>';
            $output .= '<th>' . 'Section' . '</th>';
            $output .= '<th>' . 'Gender' . '</th>';
            $output .= '<th>' . 'Sports Name' . '</th>';
            $output .= '<th>' . 'Roll No' . '</th>';
            $output .= '<th>' . 'Father Name' . '</th>';
            $output .= '<th>' . 'Mother Name' . '</th>';
            $output .= '<th>' . 'DOB' . '</th>';
            $output .= '<th>' . 'Age Category' . '</th>';
            $output .= '<th>' . 'Actual Age As Per In(YY-MM-DD)' . '</th>';
            $output .= '</tr>';
            $output .= '</thead>';
            $output .= '<tbody>';
            if(count($data)>0){
                $l=1;
            foreach($data as $item)
            {
                $output .= '<tr>';
                $output .= '<td>'.'<input type="checkbox" class="checked1" checked value=""
                           name="student_index[]">'.'</td>';                 
                $output .= '<td>'.$l++.'</td>'; 
                $output .= '<td>'.$item->user->name.'</td>';
                $output .= '<td>'.$item->class->class_name.'</td>';
                $output .= '<td>'.$item->section->section_name.'</td>';
                $output .= '<td>'.$item->gender.'</td>';
                $output .= '<td>'.$item->sport->sports_name.'</td>';;
                $output .= '<td>'.$item->student->roll_no.'</td>';
                $output .= '<td>'.$item->student->father_name.'</td>';
                $output .= '<td>'.$item->student->mother_name.'</td>';
                $output .= '<td>'.$item->user->dob.'</td>';
                $output .= '<td>'.'Under'.' '.$item->age_category.' '.'years'.'</td>';
                $output .= '<td>'.$item->actual_age.'</td>';  
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
    // }
  }

// -----------------------------------------------------------------------------------------------

    public function AddParticipate(){
        $users = Student::with('user')->get();
        $sports = Sport::get();
        return  view('sports.add_participate', ['sports'=>$sports, 'users'=>$users]);
    }
    
    public function ajax_search_student_box($id){
        $students=Student::with('user','class','section')->where('id',$id)->first();
           return $students;
    }

    public function AddSportParticipate(Request $req){
            $data = new Sports_Participate;
            $data->student_id = $req->student_name_id;
            $data->class_id = $req->student_class_id;
            $data->section_id = $req->student_section_id;
            $data->gender = $req->gender;
            $data->age_category =$req->age_category;
            $data->actual_age =$req->actual_age;
            $data->sports_id =$req->sports_name;
            $data->board_reg_no =$req->board_no;

            if ($req->hasfile('student_photo')) 
            {
              $file = $req->file('student_photo');
              $extension = $file->getClientOriginalName();
              $file->move('images/sports_participate', $extension);
              $data->student_photo =$extension;
            }

            if ($req->hasfile('document_dob')) 
            {
              $file = $req->file('document_dob');
              $extension = $file->getClientOriginalName();
              $file->move('images/sports_participate', $extension);
              $data->dob_certificate =$extension;
            }
            $data->save();
            return redirect(route('participate-list'))->with('success','Participate added successfully');
            }

    public function ParticipateList(){
        $players = DB::table('Sports_Participate');
        $sports = Sport::get();
        $players = $players
        ->select('Sports_Participate.*','sports.sports_name','classes.class_name','sections.section_name','users.*','students.*')
        ->leftJoin('sports','sports.id','Sports_Participate.sports_id')
        ->leftJoin('classes','classes.id','Sports_Participate.class_id')
        ->leftJoin('sections','sections.id','Sports_Participate.section_id')
        ->leftJoin('users','users.id','Sports_Participate.student_id')
        ->leftJoin('students','students.user_id','Sports_Participate.student_id')
        ->get();

        return  view('sports.participate_list', ['players'=>$players,'sports'=>$sports]);
    }
    // public function EditSportParticipate($id){ 
    //     $sports = Sport::get();
    //     $users = Student::with('user')->get();
    //     $Sports_Participate = Sports_Participate::find($id);
        
    //     return view('sports.edit_participate',['Sports_Participate'=>$Sports_Participate, 'users'=>$users,'sports'=>$sports]);
    // }

    public function DestroyParticipate($id){
        $pc_data = Sports_Participate::find($id);
        $pc_data->delete();
        return response()->json(['status'=>'Participate delete successfully']);
    }
    
    public function TeamCreation(){
        $sports = Sport::get();
        $employeesName = Employee::get();
        $employees = DB::table('employees');

        $employees = $employees
        ->select('employees.*','users.name','users.phone_number')
        ->leftJoin('users','users.id','employees.user_id')
        ->get();

        $participate = DB::table('Sports_Participate');
        
        $participate = $participate
        ->select('Sports_Participate.*','sports.sports_name','classes.class_name','sections.section_name','users.*','students.*')
        ->leftJoin('sports','sports.id','Sports_Participate.sports_id')
        ->leftJoin('classes','classes.id','Sports_Participate.class_id')
        ->leftJoin('sections','sections.id','Sports_Participate.section_id')
        ->leftJoin('users','users.id','Sports_Participate.student_id')
        ->leftJoin('students','students.user_id','Sports_Participate.student_id')
        ->get();

        return  view('sports.team_creation',['sports'=>$sports,'employees'=>$employees,'employeesName'=>$employeesName,'participate'=>$participate]);
    }

    public function TeamCreationList(){
        return  view('sports.team_creation_list');
    }
 

// ---------------------------------Search------------------------------------------------------------------
    public function TeamCreationData(Request $req){
        
    if($req->category!='' && $req->gender!='' && $req->sports_name!=''){
        $data = Sports_Participate::where([
            ['age_category',$req->category],
            ['gender',$req->gender],
            ['sports_id',$req->sports_name]
        ])->get();
        }
        else if($req->category!='' && $req->gender=='' && $req->sports_name==''){
            $data = Sports_Participate::whereBetween('age_category', [0, $req->category])->get();
        }
        else if($req->category=='' && $req->gender!='' && $req->sports_name==''){
            $data = Sports_Participate::where('gender',$req->gender)->get();
        }
        else if($req->category=='' && $req->gender=='' && $req->sports_name!=''){
            $data = Sports_Participate::where('sports_id',$req->sports_name)->get();
        }
    
        else{
            $data = Sports_Participate::get();
        }

    if($req->ajax()){

    if($data)
    {
        $output = '<table class="table table-bordered table-striped text-center">';
        $output = '<thead>';
        $output .= '<tr>';                       
        $output .= '<th>' . 'All<br /><input type="checkbox" id="checked1"  value="" name=""
                    onclick="for_check(this.id);">' . '</th>';
        $output .= '<th>' . 'S No.' . '</th>';
        $output .= '<th>' . 'Name' . '</th>';
        $output .= '<th>' . 'Class' .' '. '&'.' ' . 'Section' . '</th>';
        $output .= '<th>' . 'Roll No' . '</th>';
        $output .= '<th>' . 'Father Name' . '</th>';
        $output .= '<th>' . 'Mother Name' . '</th>';
        $output .= '<th>' . 'DOB' . '</th>';
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';
        if(count($data)>0){
            $l=1;
        foreach($data as $item)
        {
            $output .= '<tr>';

            $output .= '<input type="hidden" value='.$item->id.'>'; 
            $output .= '<td>'.'<input type="checkbox" class="checked1"  value='.$item->student_id.'
                       name="student_index[]">'.'</td>';                 
            $output .= '<td>'.$l++.'</td>'; 
            $output .= '<td>';
            if($item->user)
            {
                $output .= '<input type="text" value='.$item->user->name.' name="student_name[]"
                class="form-control" style="border:none;" readonly>';
            }
            $output .= '</td>';
            
            $output .= '<td class="hidden">';
            {
                $output .= '<input type="text" value='.$item->student_id.' name="student_id[]"
                class="form-control" style="border:none;" readonly>';
            }
            $output .= '</td>';
            
            $output .= '<td>';
            {
                $output .= '<input type="text" value='.$item->class->class_name. '-' .$item->section->section_name.' name="student_name[]"
                class="form-control" style="border:none;" readonly>';
            }
            $output .= '</td>';
    
            $output .= '<td>';
            $output .= '<input type="text" value='.$item->student->roll_no.' name="roll_no[]"
                class="form-control" style="border:none;" readonly>';
            $output .= '<td>';
            
                $output .= '<input type="text" value='.$item->student->father_name.' name="father_name[]"
                class="form-control" style="border:none;" readonly>';
            $output .= '</td>';

            $output .= '<td>';
                $output .= '<input type="text" value='.$item->student->mother_name.' name="mother_name[]"
                class="form-control" style="border:none;" readonly>';
            $output .= '</td>';

            $output .= '<td>';
                $output .= '<input type="text" value='.$item->user->dob.' name="dob[]"
                class="form-control" style="border:none;" readonly>';
            $output .= '</td>';

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

// ---------------------------------End--Search------------------------------------------------------------------

public function TeamCreateStaff(Request $req)
{  
    $req->staff_index;
        // $data = new StaffTeamCreationInfo();
        // $data ->staff_id  = $req->staff_id;
        // $data ->sport_id  = $req->sport_id;
        // $data ->remark  = $req->remark;
        // // return ($data);
        // $data->save();
        
        $datasave = [
            'staff_id' => $req->staff_index,
            'sport_id' => $req->sport_id,
            'remark' => $req->remark,
        ];
        return dd($datasave);
        DB::table('staff_team_creation_informations')->insert($datasave);
    // }        
    // return redirect()->back();         
   
    foreach($req->student_index as $key=>$insert) {
        $datasave = [
            'team_student_id' => $req->student_index[$key],
        ];
        DB::table('team_creation_informations')->insert($datasave);
    }
    return redirect()->back();         
}   
}