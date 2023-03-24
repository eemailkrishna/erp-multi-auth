<?php

namespace App\Http\Controllers;

use App\Models\Admission_form;
use App\Models\section;
use App\Models\Student;
use App\Models\TimeTable;
use App\Models\Classes;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Url;
use PhpParser\Node\Stmt\Return_;

class TimeTableController extends Controller
{
    public function TimeTable()
    {
        return view('time_table.time_table');
    }
    public function add_class_period_create(Request $request)
    {

        $data = new TimeTable;
        $data->period_name = $request->period_name;
        $data->start_time = $request->start_time;
        $data->end_time = $request->end_time;
        $data->save();
        return redirect('time_table/add_class_period');
    }

    public function add_class_period_store()
    {
        return view('time_table/add_class_period', ['todos' => TimeTable::orderBy('id')->get()]);
    }

    public function add_class_period_store_edit($id)
    {

        return TimeTable::find($id);
    }


    public function add_class_period_update(Request $request)
    {

        $data = TimeTable::find($request->id);

        $data->period_name = $request->period_name;
        $data->start_time = $request->start_time;
        $data->end_time = $request->end_time;
        $data->save();
        return redirect('time_table/add_class_period');
    }
    public function add_class_period_destroy($id)
    {
        TimeTable::destroy($id);
        return redirect('time_table/add_class_period');
    }

    public function subject_wise_teacher()

    {

        $dd = TimeTable::orderBy('id', 'DESC')->get();

        return view('time_table/subject_wise_teacher', ['todoss' => TimeTable::orderBy('id', 'DESC')->get()]);
    }
    public function subject_wise_teacher_create(Request $request)
    {



        $data = new TimeTable;
        $data->teacher_name = $request->teacher_name;
        $data->subject_preferred = implode(" ", $request->subject_preferred);
        $data->class_preferred = implode(" ", $request->class_preferred);
        $data->save();
        return redirect('time_table/subject_wise_teacher');
    }


    public function subject_wise_teacher_store_edit($id)
    {

        return TimeTable::find($id);
    }


    public function subject_wise_teacher_update(Request $request)
    {

        $data = TimeTable::find($request->id);

        $data->teacher_name = $request->teacher_name;
        $data->subject_preferred = implode(", ", $request->subject_preferred);
        $data->class_preferred = implode(" ", $request->class_preferred);
        $data->save();
        return redirect('time_table/subject_wise_teacher');
    }
    public function subject_wise_teacher_destroy($id)
    {
        TimeTable::destroy($id);
        return redirect('time_table/subject_wise_teacher');
    }
    // TIME TABLE PORTION
    public function time_table_generate()
    {

        $class = Classes::all();
        return view('time_table/time_table_generate', ['todoss' => TimeTable::orderBy('id', 'DESC')->get(), 'class' => $class]);
    }

    public function get_section($id)
    {
        $section = section::where('class_id', $id)->get();
        return $section;
    }

    public function getTable($id)
    {
        $data = TimeTable::where('class_id', $id)->get();
        $output = '<thead>';
        $output .= '<tr>';
        $output .= '<th></th>';
        $output .= '<th></th>';
        $output .= '<th></th>';
        $output .= '<th colspan="2">' . 'Monday' . '</th>';
        $output .= '<th colspan="2">' . 'Tuesday' . '</th>';
        $output .= '<th colspan="2">' . 'Wednesday' . '</th>';
        $output .= '<th colspan="2">' . 'Thursday' . '</th>';
        $output .= '<th colspan="2">' . 'Friday' . '</th>';
        $output .= '<th colspan="2">' . 'Saturday' . '</th>';

        $output .= '</tr>';
        $output .= '<tr>';
        $output .= '<th><center>' . 'Period Name' . '</center></th>';
        $output .= '<th><center>' . 'Time From' . '</center></th>';
        $output .= '<th><center>' . 'Time To' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
        $output .= '<th style="width:200px"><center>' . 'Action' . '</center></th>';

        $output .= '</tr>';
        $output .= '</thead>';

        $output .= '<tbody>';

        foreach ($data as $item) {
            // $output .= '<form action='.url('/hello/'.$item->id).' method="POST">';
            $output .= '<form action="#" method="post">';

            $output .= '<tr>';
            $output .= '<td><input type="text" name="period_name" value=' . $item->period_name . '></td>';
            $output .= '<td style="display:none;"><input type="text" name="id" value=' . $item->id . '></td>';
            $output .= '<td><input type="time" name="time_from" value=' . $item->time_from . '></td>';
            $output .= '<td><input type="time" name="time_to"  value=' . $item->time_to . '></td>';
            $output .= '<td><input type="text" name="monday_subject_name"  value=' . $item->monday_subject_name . '></td>';
            $output .= '<td><input type="text" name="monday_teacher_name"  value=' . $item->monday_teacher_name . '></td>';

            $output .= '<td><input type="text" name="tuesday_subject_name"  value=' . $item->tuesday_subject_name . '></td>';
            $output .= '<td><input type="text" name="tuesday_teacher_name"  value=' . $item->tuesday_teacher_name    . '></td>';
            $output .= '<td><input type="text" name="wednesday_subject_name"  value=' . $item->wednesday_subject_name . '></td>';
            $output .= '<td><input type="text" name="wednesday_teacher_name"  value=' . $item->wednesday_teacher_name . '></td>';
            $output .= '<td><input type="text" name="thursday_subject_name"  value=' . $item->thursday_subject_name . '></td>';
            $output .= '<td><input type="text" name="thursday_teacher_name"  value=' . $item->thursday_teacher_name . '></td>';
            $output .= '<td><input type="text" name="friday_subject_name"  value=' . $item->friday_subject_name . '></td>';
            $output .= '<td><input type="text" name="friday_teacher_name"  value=' . $item->friday_teacher_name . '></td>';
            $output .= '<td><input type="text" name="saturday_subject_name"  value=' . $item->saturday_subject_name . '></td>';
            $output .= '<td><input type="text" name="saturday_teacher_name"  value=' . $item->saturday_teacher_name    . '></td>';
            $output .= '<td><input type="Submit" class="btn btn-success"></td>';

            $output .= '</tr>';
        }

        $output .= '</tbody>';

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            // $data .= '<option>'.'select'.'</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }


        $result = ['output' => $output, 'section' => $data];

        return $result;
    }

    public function getDataforStudentSection($id)
    {
        $section = Section::where('id', $id)->first();
        // $class_id =  $section->class_id;
        $data = TimeTable::with('class', 'section')->where('section_id', $id)->where('class_id', $id)->get();

        if ($data) {
            $output = '<thead>';
            $output .= '<tr>';
            $output .= '<th></th>';
            $output .= '<th></th>';
            $output .= '<th></th>';
            $output .= '<th colspan="2">' . 'Monday' . '</th>';
            $output .= '<th colspan="2">' . 'Tuesday' . '</th>';
            $output .= '<th colspan="2">' . 'Wednesday' . '</th>';
            $output .= '<th colspan="2">' . 'Thursday' . '</th>';
            $output .= '<th colspan="2">' . 'Friday' . '</th>';
            $output .= '<th colspan="2">' . 'Saturday' . '</th>';

            $output .= '</tr>';
            $output .= '<tr>';
            $output .= '<th><center>' . 'Period Name' . '</center></th>';
            $output .= '<th><center>' . 'Time From' . '</center></th>';
            $output .= '<th><center>' . 'Time To' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Subject Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Teacher Name' . '</center></th>';
            $output .= '<th style="width:200px"><center>' . 'Action' . '</center></th>';

            $output .= '</tr>';
            $output .= '</thead>';
        }
        $output .= '<tbody>';
        foreach ($data as $item) {
            $output .= '<tr>';
            $output .= '<td><input type="text" value=' . $item->period_name . '></td>';
            $output .= '<td><input type="time" value=' . $item->time_from . '></td>';
            $output .= '<td><input type="time" value=' . $item->time_to . '></td>';
            $output .= '<td><input type="text" value=' . $item->monday_subject_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->monday_teacher_name . '></td>';

            $output .= '<td><input type="text" value=' . $item->tuesday_subject_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->tuesday_teacher_name    . '></td>';
            $output .= '<td><input type="text" value=' . $item->wednesday_subject_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->wednesday_teacher_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->thursday_subject_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->thursday_teacher_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->friday_subject_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->friday_teacher_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->saturday_subject_name . '></td>';
            $output .= '<td><input type="text" value=' . $item->saturday_teacher_name    . '></td>';
            // $output .= '<td><input type="submit">';
        }


        $output .= '</tbody>';
    

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            $data = '<option>' . 'select' . '</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }
        $result = ['output' => $output, 'section' => $data];
        return $result;
    }

    public function time_table_list()
    {
        $class = Classes::all();
        return view('time_table/time_table_list', ['todoss' => TimeTable::orderBy('id', 'DESC')->get(), 'class' => $class]);
    }

    public function get_section_list($id)
    {
        $section = section::where('class_id', $id)->get();
        return $section;
    }

    public function getTablelist($id)
    {
        $data = TimeTable::where('class_id', $id)->get();
        $output = '<thead>';
        $output .= '<tr>';
        $output .= '<th><center>' . 's.no' . '</center></th>';
        $output .= '<th><center>' . 'Class' . '</center></th>';
        $output .= '<th><center>' . 'Section' . '</center></th>';
        $output .= '<th><center>' . 'Print' . '</center></th>';

        $output .= '</tr>';
        $output .= '</thead>';

        $output .= '<tbody>';

        foreach ($data as $item) {

            $output .= '<tr>';
            $output .= '<td>' . $item->id . '</td>';
            $output .= '<td>' . $item->class->class . '</td>';
            $output .= '<td>' . $item->section->section . '</td>';
            $output .= '</tr>';
        }
        $output .= '</tbody>';

        $section = Section::where('class_id', $id)->get();

        if ($section) {
            // $data .= '<option>'.'select'.'</option>';
            foreach ($section as $item) {
                $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }
        $result = ['output' => $output, 'section' => $data];
        return $result;
    }
    public function time_table_generate_edit($id)
    {           
        $students = TimeTable::find($id); 
        return view('time_table/time_table_generate',['students'=>$students]);
    }
    public function time_table_generate_update(Request $request){
       
        $timetable =TimeTable::where('id',$request->id)->update([
            'period_name'=> $request->period_name,
            'time_from' => $request->time_from,
            'time_to'=> $request->time_to,
            'monday_subject_name'=> $request->monday_subject_name,
            'monday_teacher_name' => $request->monday_teacher_name,
            'tuesday_subject_name'=> $request->tuesday_subject_name,
            'tuesday_teacher_name'=> $request->tuesday_teacher_name,
            'wednesday_subject_name' => $request->wednesday_subject_name,
            'wednesday_teacher_name'=> $request->wednesday_teacher_name,
            'thursday_subject_name'=> $request->thursday_subject_name,
            'thursday_teacher_name' => $request->thursday_teacher_name,
            'friday_subject_name'=> $request->friday_subject_name,
            'friday_teacher_name'=> $request->friday_teacher_name,
            'saturday_subject_name' => $request->saturday_subject_name,
            'saturday_teacher_name'=> $request->saturday_teacher_name,
        ]);
      
        return redirect('time_table/time_table_generate');

    }
  
    // public function getDataforStudentSectionlist($id)
    // {

    //     $section = Section::where('id', $id)->first();
    //     $class_id =  $section->class_id;
    //     $data = TimeTable::with('class', 'section')->where('section_id', $id)->where('class_id', $class_id)->get();

    //     if ($data) {
    //         $output = '<thead>';

    //         $output .= '<tr>';
    //         $output .= '<th><center>' . 's.no' . '</center></th>';
    //         $output .= '<th><center>' . 'Class' . '</center></th>';
    //         $output .= '<th><center>' . 'Section' . '</center></th>';
    //         $output .= '<th><center>' . 'Print' . '</center></th>';

    //         $output .= '</tr>';
    //         $output .= '</thead>';

    //         $output .= '<tbody>';
    //         foreach ($data as $item) {
    //             $output .= '<tr>';
    //             $output .= '<td><center>' . $item->id . '</center></td>';
    //             $output .= '<td><center>' . $item->class->class . '</center></td>';
    //             $output .= '<td><center>' . $item->section->section . '</center></td>';
    //             $output .= '<td><center>' . $item->period_name . '</center></td>';
    //             $output .= '</tr>';
    //         }
    //         $output .= '</tbody>';
    //     }
    //     $section = Section::where('class_id', $class_id)->get();

    //     if ($section) {
    //         $data = '<option>' . 'select' . '</option>';
    //         foreach ($section as $item) {
    //             $data .= '<option value="' . $item->id . '">' . $item->name . '</option>';
    //         }
    //     }
    //     $result = ['output' => $output, 'section' => $data];
    //     return $result;
    // }


    public function teacher_availability()
    {
        return view('time_table/teacher_availability');
    }

    public function teacher_assign()
    {
        return view('time_table/teacher_assign');
    }

    public function diff_add_class_period()
    {
        return view('time_table/diff_add_class_period');
    }
    public function diff_time_table_generate()
    {

        return view('time_table/diff_time_table_generate');
    }
    public function diff_time_table_list()
    {
        return view('time_table/diff_time_table_list');
    }

}
