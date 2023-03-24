<?php

namespace App\Http\Controllers;
use App\Models\Reminder;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function reminder(){
        return view('reminder.reminder');
    }

    public function ReminderAdd(){
        return view('reminder.reminder_add');
    }
    public function AddReminderTask(Request $req){

        $data = Reminder::insert([
            'reminder_task_1' => $req->reminder_task_1,
            'reminder_task_2' => $req->reminder_task_2,
            'reminder_task_3' => $req->reminder_task_3,
            'reminder_task_4' => $req->reminder_task_4,
            'reminder_task_5' =>$req->reminder_task_5,
            'allocated_date' =>$req->reminder_allocated_date,
            'finish_date' =>$req->reminder_finish_date,
            'reminder_remark' =>$req->reminder_remark

        ]);
        return redirect('reminder-list')->with('success', 'Reminder added successfully');
    }


    public function ReminderList(){
        $reminders = Reminder::all();
        return view('reminder.reminder_list', ['reminders'=>$reminders]);
    }
    public function EditReminderTask($id){
        $reminder = Reminder::find($id);
        return view('reminder.reminder_edit', ['reminder'=>$reminder]);
    }

    public function UpdateReminderTask(Request $req){
    $reminder = Reminder::where('id',$req->id)->update([
        'reminder_task_1' => $req->reminder_task_1,
        'reminder_task_2' => $req->reminder_task_2,
        'reminder_task_3' => $req->reminder_task_3,
        'reminder_task_4' => $req->reminder_task_4,
        'reminder_task_5' =>$req->reminder_task_5,
        'allocated_date' =>$req->reminder_allocated_date,
        'finish_date' =>$req->reminder_finish_date,
        'reminder_remark' =>$req->reminder_remark
        ]);
        return redirect(route('reminder-list'))->with('success','Updated successfully');
    }
    public function DestroyReminder($id)
    {
        $acc_data = Reminder::findOrFail($id);
        $acc_data->delete();
        return response()->json(['status'=>'Reminder Deleted successfully']);
    }




}