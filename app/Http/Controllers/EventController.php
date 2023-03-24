<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_house;
use App\Models\add_event;
use App\Models\add_particcipent;
use App\Models\activity_plan;
use App\Models\add_teamcreation;

class EventController extends Controller
{
    public function event(){
        return view('event_management.event_management');
    }
    public function add_house(){
        $add_house = add_house::all();
        return view('event_management.add_house',['add_houses'=>$add_house]);
    
    }

    public function create(Request $request){
        $add_house = new add_house;
        $add_house->house=$request->house;
        $add_house->save();
        return redirect('/event_management/add_house')->with('success','House successfully added.');
    }
    public function destroy($id)
    {
        $add_house=add_house::find($id);
        $add_house->delete();
        return redirect('/event_management/add_house');
    }

    public function add_event(){
        $add_event = add_event::all();
        return view('event_management.add_event',['add_events'=>$add_event]);
    }
    public function createevent(Request $request){
        $add_event = new add_event;
        $add_event->event_name=$request->event_name;
        $add_event->total_participats=$request->total_participats;
        $add_event->event_date=$request->event_date;
        $add_event->save();
        return redirect('/event_management/add_event')->with('success','Event successfully added.');
    }

    public function destroyevent($id)
    {
        $add_event=add_event::find($id);
        $add_event->delete();
        return redirect('/event_management/add_event');
    }

    public function add_participate(){
        return view('event_management.add_participate');

    
    }

    public function createparticipate(Request $request){
        $add_participate = new add_particcipent;
        $add_participate->participate_type=$request->participate_type;
        $add_participate->event_name=$request->event_name;
        $add_participate->school_name=$request->school_name;
        $add_participate->student_name=$request->student_name;
        $add_participate->student_father_name=$request->student_father_name;
        $add_participate->student_mother_name=$request->student_mother_name;
        $add_participate->class=$request->class;
        $add_participate->gender=$request->gender;
        $add_participate->dateofbirth=$request->dateofbirth;
        $add_participate->category=$request->category;
        $add_participate->save();
        
        return redirect('/event_management/add_participate')->with('success','Product successfully added.');
    }

    public function participate_list(){
        return view('event_management.participate_list_report');
    }
    public function activity_plane(){
        
        return view('event_management.activity_plane');
    }

    public function create_activity_plane(Request $request){

        $activity_plans = new activity_plan;
        $activity_plans->event_name=$request->event_name;
        $activity_plans->activity_type=$request->activity_type;
        $activity_plans->organiser=$request->organiser;
        $activity_plans->objective=$request->objective;
        $activity_plans->topic_theme=$request->topic_theme;
        $activity_plans->venue=$request->venue;
        $activity_plans->date_day=$request->date_day;
        $activity_plans->category=$request->category;
        $activity_plans->committee=$request->committee;
        $activity_plans->incharge=$request->incharge;
        $activity_plans->no_participants=$request->no_participants;
        $activity_plans->invitees=$request->invitees;
        $activity_plans->invitation_card=$request->invitation_card;
        $activity_plans->distribution_card=$request->distribution_card;
        $activity_plans->sound_system=$request->sound_system;
        $activity_plans->seating_guest=$request->seating_guest;
        $activity_plans->green_room=$request->green_room;
        $activity_plans->out_source=$request->out_source;
        $activity_plans->stage_arrangement=$request->stage_arrangement;
        $activity_plans->light_arrangement=$request->light_arrangement;
        $activity_plans->name_judges=$request->name_judges;
        $activity_plans->compering=$request->compering;
        $activity_plans->preparation=$request->preparation;
        $activity_plans->preparation_script=$request->preparation_script;
        $activity_plans->photography=$request->photography;
        $activity_plans->publicity_banner=$request->publicity_banner;   
        $activity_plans->refreshment=$request->refreshment;
        $activity_plans->writting_report=$request->writting_report;
        $activity_plans->feedback_students=$request->feedback_students;
        $activity_plans->feedback_parents=$request->feedback_parents;
        $activity_plans->review_event=$request->review_event;
        $activity_plans->amt_spent=$request->amt_spent;
        $activity_plans->save();
        return redirect('/event_management/activity_plane')->with('success','Product successfully added.');
    }


    public function activity_plane_list(){
        $activity_plan = activity_plan::all();
        
        return view('event_management.activity_plane_list',['activity_plans'=>$activity_plan]);
    }




    public function activity_plane_listdetails($id){
        $activity_plans = activity_plan::find($id);
      
        return view('event_management.activity_plan_details',['activity_plans'=>$activity_plans]);
    }

    public function destroyactivity($id)
    {
        $add_event=activity_plan::find($id);
        $add_event->delete();
        return redirect('/event_management/activity_plane_list');
    }

    public function destroyeventresult($id)
    {
        $activity_plans=add_event::find($id);
        $activity_plans->delete();
        return redirect('/event_management/event_result_list');
    }


    public function event_result(){
        
        $add_event = add_event::all();
        return view('event_management.event_result',['add_events'=>$add_event]);
       
    }

    public function ajax_event_result($id){
        

        if($id=='A'){
          
            $test = add_event::all();
         }
         else{
             $test = add_event::where('id',$id)->get();
         }

        return $test;
       
       
    }
    public function event_result_list(){
        return view('event_management.event_result_list');
    }
    public function team_creation(){

        return view('event_management.team_creation');
    }

    public function destroyteamcreation($id)
    {
        $team_creations=add_teamcreation::find($id);
        $team_creations->delete();
        return redirect('/event_management/team_creation_list');
    }
    public function team_creationadd(Request $request){
        
        $team_creations = new add_teamcreation;
        $team_creations->event_name11=$request->event_name11;
        $team_creations->gender11=$request->gender11;
        $team_creations->category11=$request->category11;
        $team_creations->staff=$request->staff;
        $team_creations->save();
        return redirect('/event_management/team_creation')->with('success','Event successfully added.');
    }

    public function team_creation_list(){
        $add_teamcreation = add_teamcreation::all();
       
       
        return view('event_management.team_creation_list',['add_teamcreations'=>$add_teamcreation]);
    }

    public function ajax_team_creation_list($id){
        if($id=='A'){
          
           $test = add_teamcreation::all();
        }
        else{
            $test = add_teamcreation::where('id',$id)->get();
        }
        return $test;
       
    }


    public function participate_list_report(){
        $add_particcipent = add_particcipent::all();   
        return view('event_management.participate_list_report',['add_particcipents'=>$add_particcipent]);
       
    }


     public function destroy_participent($id)
    {
        $add_particcipent=add_particcipent::find($id);
        $add_particcipent->delete();
        return redirect('/event_management/participate_list_report');
    }

    public function edit($id)
    {
      $add_particcipents = add_particcipent::find($id);
      return view('/event_management/edit_participate_list_report',['add_particcipents'=>$add_particcipents]);
    }

    public function update_participent(Request $request, $id)
    {
        $add_particcipent=add_particcipent::find($id);    
        $add_particcipent->participate_type=$request->participate_type;
        $add_particcipent->event_name=$request->event_name;
        $add_particcipent->school_name=$request->school_name;
        $add_particcipent->student_name=$request->student_name;
        $add_particcipent->student_father_name=$request->student_father_name;
        $add_particcipent->student_mother_name=$request->student_mother_name;
        $add_particcipent->class=$request->class;
        $add_particcipent->gender=$request->gender;
        $add_particcipent->dateofbirth=$request->dateofbirth;
        $add_particcipent->category=$request->category;
        $add_particcipent->save();
         
        return redirect('/event_management/participate_list_report/')->with('success','Product successfully Updated.');
    }
}
