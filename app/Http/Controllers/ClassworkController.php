<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Classes;
use App\Models\Classwork;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class ClassworkController extends Controller
{
    public function AddClasswork(){
        $classes = Classes::orderBy('class_name', 'ASC')->get();
        $dataClass['classes'] = $classes;
        return view('homework.add-classwork', $dataClass);
    }

    public function AddClassworkQue(Request $req)
    {
        $req->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'subject_id' => 'required',
            'cw_date' => 'required',
            'cw_remark' => 'required',
        ]);

    $data = new Classwork;
    $data->class_id = $req->class_id;
    $data->section_id = $req->section_id;
    $data->subject_id = $req->subject_id;
    $data->classwork_date = $req->cw_date;
    $data->classwork_remark =$req->cw_remark;
    if ($req->hasfile('cw_image')) 
    {
        $file = $req->file('cw_image');
        $extension = $file->getClientOriginalName();
        $file->move('images/classworks', $extension);
        $data->classwork_image = $extension;
    }

    $data->classwork_write =$req->write_classwork;
    $data->save();
    return redirect(route('classwork-list'))->with('success','Classwork Added Successfully');

    }

    public function ClassworkList(Request $req){
        $classworks = DB::table('classworks');
        $classes = DB::table('classes')->get();
        $subjects = DB::table('subjects')->get();

        if ($req->class !=null){
            $classworks = $classworks->where('class_name','like','%'.$req->class.'%');
        }
        if ($req->subject !=null){
            $classworks = $classworks->where('classworks.subject_id',$req->subject);
        }
        if ($req->classwork_date !=null){
            $classworks = $classworks->where('classworks.classwork_date',$req->classwork_date);
        }
        $classworks = $classworks
        ->select('classworks.*','classes.class_name','sections.section_name','subjects.subject_info')
        ->leftJoin('classes','classes.id','classworks.class_id')
        ->leftJoin('sections','sections.id','classworks.section_id')
        ->leftJoin('subjects','subjects.id','classworks.subject_id')
        ->get();
        return view('homework.classwork-list', ['classworks'=>$classworks, 'classes'=>$classes, 'subjects'=>$subjects]);
    }

    public function EditClasswork($id){ 
        $classwork = Classwork::find($id);
        $classes = Classes::all();
        $sections = Section::where('class_id',$classwork['class_id'])->get();
        $subjects = Subject::where('class_id',$classwork['class_id'])->get();
        return view('homework.edit_classwork', ['classwork'=>$classwork,'classes'=>$classes,'sections'=>$sections,'subjects'=>$subjects]);
    }

    public function UpdateClasswork(Request $req){  
        $req->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'subject_id' => 'required',
            'cw_date' => 'required',
            'cw_remark' => 'required',
            'cw_image' => 'required',

        ]);
        $data = Classwork::find($req->id);
        $data->class_id = $req->class_id;
        $data->section_id = $req->section_id;
        $data->subject_id = $req->subject_id;
        $data->classwork_date = $req->cw_date;
        $data->classwork_remark =$req->cw_remark;
            if ($req->hasfile('cw_image')) {
            $file = $req->file('cw_image');
            $extension = $file->getClientOriginalName();
            $file->move('images/classworks', $extension);
            $data->classwork_image = $extension;
            }
        $data->classwork_write =$req->write_classwork;
        $data->save();

        return redirect(route('classwork-list'))->with('success','Classwork Update successfully');
    }

    public function DestroyClasswork($id){
        $cw_data = Classwork::findOrFail($id);
        $cw_data->delete();
        return response()->json(['status'=>'Classwork Delete successfully']);
    }


}