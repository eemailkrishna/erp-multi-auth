<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Homework;
use App\Models\Subject;
use App\Models\Classes;
use App\Models\Section;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Validator;
class HomeWorkController extends Controller
{
    public function Homework(){
        return view('homework.homework');
    }

    public function HomeworkAdd(){
        $classes = Classes::orderBy('class_name', 'ASC')->get();
        $data['classes'] = $classes;
        return view('homework.homework-add', $data);
    }
    public function fetchData($class_id = null) {
        $sections = \DB::table('homeworks')->where('class_id',$class_id)->get();
        return response()->json([
            'status' => 1,
            'homeworks' => $homeworks
        ]); 
    }
    public function fetchSubject($class_id = null) {
        $subjects = \DB::table('subjects')->where('class_id',$class_id)->get();
        return response()->json([
            'status' => 1,
            'subjects' => $subjects
        ]);
    }
    
    public function AddHomeworkQue(Request $req){
        $req->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'subject_id' => 'required',
            'hw_date' => 'required',
            'hw_remark' => 'required',
           
        ]);

    $data = new Homework;
    $data->class_id = $req->class_id;
    $data->section_id = $req->section_id;
    $data->subject_id = $req->subject_id;
    $data->homework_date = $req->hw_date;
    $data->homework_remark =$req->hw_remark;
    if ($req->hasfile('hw_image')) 
    {
      $file = $req->file('hw_image');
      $extension = $file->getClientOriginalName();
      $file->move('images/homeworks', $extension);
      $data->homework_image =$extension;
    }
    $data->homework_write =$req->write_homework;
    $data->save();
    return redirect(route('homeworkList'))->with('success','Homework Added Successfully');

    }

    public function HomeworkList(Request $req){
        $homeworks = DB::table('homeworks');
        $classes = Classes::get();
        $subjects = Subject::get();

        if ($req->class !=null){
            $homeworks = $homeworks->where('class_name','like','%'.$req->class.'%');
        }
        if ($req->subject !=null){
            $homeworks = $homeworks->where('homeworks.subject_id',$req->subject);
        }
        if ($req->homework_date !=null){
            $homeworks = $homeworks->where('homeworks.homework_date',$req->homework_date);
        }
        $homeworks = $homeworks
        ->select('homeworks.*','classes.class_name','sections.section_name','subjects.subject_info')
        ->leftJoin('classes','classes.id','homeworks.class_id')
        ->leftJoin('sections','sections.id','homeworks.section_id')
        ->leftJoin('subjects','subjects.id','homeworks.subject_id')
        ->get();
        return view('homework.homework-list', ['homeworks'=>$homeworks, 'classes'=>$classes, 'subjects'=>$subjects]);
    }

    public function EditHomework($id){ 
        $homework = Homework::find($id);
        $classes = Classes::all();
        $sections = Section::where('class_id',$homework['class_id'])->get();
        $subjects = Subject::where('class_id',$homework['class_id'])->get();
        return view('homework.edit_homework', ['homework'=>$homework,'classes'=>$classes,'sections'=>$sections,'subjects'=>$subjects, compact('homework')]);
    }
    
    public function UpdateHomework(Request $req){
        $req->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'subject_id' => 'required',
            'hw_date' => 'required',
            'hw_remark' => 'required',
        ]);

        $data = Homework::find($req->id);
        $data->class_id = $req->class_id;
        $data->section_id = $req->section_id;
        $data->subject_id = $req->subject_id;
        $data->homework_date = $req->hw_date;
        $data->homework_remark =$req->hw_remark;
        if ($req->hasfile('hw_image')) 
        {
            $destination = 'images/homeworks/'.$data->homework_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
          $file = $req->file('hw_image');
          $extension = $file->getClientOriginalName();
          $file->move('images/homeworks/', $extension);
          $data->homework_image =$extension;
        }
        $data->homework_write =$req->write_homework;
        $data->update();
                
        return redirect(route('homeworkList'))->with('success','Updated successfully');
    }

    public function Destroy($id){
        $hw_data = Homework::find($id);
        $destination = 'images/homeworks/'.$hw_data->homework_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $hw_data->delete();
        return response()->json(['status'=>'Homework Deleted successfully']);
    }
}