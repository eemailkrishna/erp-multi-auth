<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Section;
use App\Models\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PromotionController extends Controller
{
    public function MoveStudentPage(){
        // $sessions = Session::orderBy('session', 'ASC')->get();
        // $sessions['sessions'] = $sessions;

        // $classes = Classes::orderBy('class_name', 'ASC')->get();
        // $classes['classes'] = $classes;
        $classes = Classes::all();
        $sessions = Session::all();

        $students = Student::all();
        return view('session.move_student', ['students'=>$students,'classes'=>$classes,'sessions'=>$sessions]);
    }

    //  public function fetchSection($class_id = null) {
    //     $sections = Section::where('class_id',$class_id)->get();
    //     return response()->json([
    //         'status' => 1,
    //         'sections' => $sections
    //     ]); 
    // }
    // public function fetchStudent($class_id = null) {
    //     $students = Student::where('class_id',$class_id)->get();
    //     return response()->json([
    //         'status' => 1,
    //         'students' => $students
    //     ]); 
    // }
    // public function Promotion(){   
    //     $students = Student::all();
    //     return view('session.move_student', ['students'=>$students]);
    // }
}