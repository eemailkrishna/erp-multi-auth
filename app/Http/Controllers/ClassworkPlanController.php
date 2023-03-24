<?php

namespace App\Http\Controllers;
use App\Models\ClassworkPlan;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class ClassworkPlanController extends Controller
{
    public function ReminderTeacherAdd(){
        $users = User::where('user_type', 'employee')->get();
        $data['users'] = $users;

        $classes = DB::table('classes')->orderBy('class_name', 'ASC')->get();
        $data['classes'] = $classes;

        return view('reminder.reminder_teacher_add', $data);
    }
    public function fetchSection($class_id = null) {
        $sections = \DB::table('sections')->where('class_id',$class_id)->get();
        return response()->json([
            'status' => 1,
            'sections' => $sections
        ]);
    }
    public function fetchSubject($class_id = null) {
        $subjects = \DB::table('subjects')->where('class_id',$class_id)->get();
        return response()->json([
            'status' => 1,
            'subjects' => $subjects
        ]);
    }

    public function ReminderTeacherAddPlan(Request $req){

        $data = ClassworkPlan::insert([
            'teacher_id' => $req->reminder_teacher_name,
            'class_id' => $req->std_class,
            'section_id' => $req->student_class_section,
            'subject_id' => $req->subject_name,
            'reminder_task_1' => $req->reminder_teacher_task_1,
            'reminder_task_2' => $req->reminder_teacher_task_2,
            'reminder_task_3' => $req->reminder_teacher_task_3,
            'reminder_task_4' => $req->reminder_teacher_task_4,
            'reminder_task_5' =>$req->reminder_teacher_task_5,
            'allocated_date' =>$req->reminder_teacher_allocated_date,
            'finish_date' =>$req->reminder_teacher_finish_date,
            'reminder_remark' =>$req->reminder_teacher_remark
        ]);
        return redirect('reminder-teacher-list')->with('success', 'Reminder Plan added successfully');
    }

    public function ReminderTeacherList(){
        $classwork_plans = DB::table('classwork_plans')
        ->select('classwork_plans.*','users.name','classes.class_name','sections.section_name','subjects.subject_info')
        ->leftJoin('users','users.id','classwork_plans.teacher_id')
        ->leftJoin('classes','classes.id','classwork_plans.class_id')
        ->leftJoin('sections','sections.id','classwork_plans.section_id')
        ->leftJoin('subjects','subjects.id','classwork_plans.subject_id')
        ->get();
    $classes = DB::table('classes')->orderBy('class_name', 'ASC')->get();
    $dataListClass['classes'] = $classes;
        return view('reminder.reminder_teacher_list', ['classwork_plans'=>$classwork_plans], $dataListClass);
    }

    public function EditReminderTeacherPlan($id){
        $remTeaPlan = ClassworkPlan::find($id);
        // $users = User::get('name');
        $users = User::where('id',$remTeaPlan['teacher_id'])->get();

        $classwork_plans = DB::table('classwork_plans')
        ->select('classwork_plans.*','users.name','classes.class_name','sections.section_name','subjects.subject_info')
        ->leftJoin('users','users.id','classwork_plans.teacher_id')
        ->leftJoin('classes','classes.id','classwork_plans.class_id')
        ->leftJoin('sections','sections.id','classwork_plans.section_id')
        ->leftJoin('subjects','subjects.id','classwork_plans.subject_id')
        ->get();
        return view('reminder.reminder_teacher_edit', ['remTeaPlan'=>$remTeaPlan,'users'=>$users]);
    }

    public function UpdateReminderTeacherPlan(Request $req){
    $remTeaPlans = ClassworkPlan::where('id',$req->id)->update([
        // 'teacher_id' => $req->reminder_teacher_name,
        // 'class_id' => $req->std_class,
        // 'section_id' => $req->student_class_section,
        // 'subject_id' => $req->subject_name,
        'reminder_task_1' => $req->reminder_teacher_task_1,
        'reminder_task_2' => $req->reminder_teacher_task_2,
        'reminder_task_3' => $req->reminder_teacher_task_3,
        'reminder_task_4' => $req->reminder_teacher_task_4,
        'reminder_task_5' =>$req->reminder_teacher_task_5,
        'allocated_date' =>$req->reminder_teacher_allocated_date,
        'finish_date' =>$req->reminder_teacher_finish_date,
        'reminder_remark' =>$req->reminder_teacher_remark
        ]);
        return redirect(route('reminder-teacher-list'))->with('success','Updated successfully');
    }

    public function DestroyReminderTeacherPlan($id)
    {
        $acc_data = ClassworkPlan::findOrFail($id);
        $acc_data->delete();
        return response()->json(['status'=>'Reminder Plan Deleted successfully']);
    }
}