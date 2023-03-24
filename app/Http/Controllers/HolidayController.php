<?php

namespace App\Http\Controllers;

use App\Models\Holyday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    // holiday index page
    public function index(){
        return view('holiday.holiday');
    }
    // adding  holidays
    public function Add_Holiday(){
        $holidays = Holyday::all();
        return view('holiday.add_holiday',['addholidays'=>$holidays]);
    }
// Holidays Data can be store
    public function Store_Data_Holiday(Request $request)
    {
        $holiday = new Holyday();
            $holiday->name = $request->holiday_name;
            $holiday->description = $request->description;
            $holiday->date = $request->date;
            $holiday->save();
        $message = "Add Holidays Succesfully";
        return redirect(route('holidayAddHoliday'))->with('Add_Holidays',$message);

    }
    // Delete holidays
    public function holiday_delete($id){
        // $holiday = Holyday::where('id', $id)->first();
        $holiday = Holyday::find($id);
        $holiday->delete();
        $message ='Data was Delete successfully';
        return redirect('add-holiday')->with('Delete_Holidays',$message);
    }
    // edit holidays
    public function holiday_Edit_Holiday($id){
        $edit = Holyday::find($id);
        return view('holiday.edit_holiday',['holidays'=>$edit]);
    }
    // updated holidays list
    public function updated_Holidays(Request $req){
        $update_Holiday = Holyday::find($req->id);
        $update_Holiday->name = $req->holiday_name;
        $update_Holiday->date = $req->date;
        $update_Holiday->description = $req->holiday_description;
        $update_Holiday->save();
        $message ='Update Successfully';
        return redirect(route('holidayAddHoliday'))->with('Update_Holidays',$message);

    }
    // Holidays list
    public function holidayHolidayList()
    {
        $holidaysList = Holyday::all();
        return view('holiday.holiday_list',['listholidays'=>$holidaysList]);
    }
}
