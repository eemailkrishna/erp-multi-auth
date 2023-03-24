<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SetPaper;
use DB;

class SetPaperController extends Controller
{
    public function SetPaper(){
        return view('exam_paper_setter.exam_paper_setter');
    }

    public function AddQuestion(){
        $classes = DB::table('classes')->orderBy('class_name', 'ASC')->get();
        $data['classes'] = $classes;
        return view('exam_paper_setter.add_question', $data);
    }
    // public function fetchSection($class_id = null) {
    //     $sections = \DB::table('sections')->where('class_id',$class_id)->get();

    //     return response()->json([
    //         'status' => 1,
    //         'sections' => $sections
    //     ]);
    
    // }
    // public function fetchSubject($class_id = null) {
    //     $subjects = \DB::table('subjects')->where('class_id',$class_id)->get();

    //     return response()->json([
    //         'status' => 1,
    //         'subjects' => $subjects
    //     ]);
    // }

    public function ViewQuestion(){
        return view('exam_paper_setter.view_question');
    }

    public function InstantGoToPaperSetter(){
        return view('exam_paper_setter.instant_go_to_paper_setter');
    }

    public function GoToPaperSetter(){
        return view('exam_paper_setter.go_to_paper_setter');
    }

    public function TotalPaperList(){
        return view('exam_paper_setter.total_paper_list');
    }
}