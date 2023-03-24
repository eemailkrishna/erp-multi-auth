@include('common.header')
@include('common.navbar')
<script>
	function valid(s_no){
	var myval=confirm("Are you sure want to delete this record !!!!");
	if(myval==true){
	delete_fee(s_no);
	}
	else  {
	return false;
	}
	}
	
	function delete_fee(s_no){
	$.ajax({
	type: "POST",
	url: access_link+"event_management/activity_plan_dlt.php?id="+s_no+"",
	cache: false,
	success: function(detail){
	var res=detail.split("|?|");
	if(res[1]=='success'){
	   alert_new('Successfully Deleted','green');
	   get_content('event_management/activity_plane_list');
	}else{
	//alert_new(detail); 
	}
	}
	});
	}
	</script>	

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Detail Activity Plan 

      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('event')}}"><i class="fa fa-calendar"></i>Event
                Management</a></li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-md-12">
         
          <!-- /.box -->

          <div class="box box-success" >
        
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-12">		
                <div class="col-md-3">		
                  <div class="form-group">
                  <label><small>Name Of Event Activity</small></label>
                    <select name="event_name" class="form-control" id="event_name" onchange="event_select(this.value);" >
                  <option value="{{$activity_plans->event_name}}" readonly>{{$activity_plans->event_name}}</option>
                          
                    
                              </select>
                  </div>
              </div>
                     <div class="col-md-3">
               <div class="form-group">
                <label><small>Type Of The Activity</small></label>
                <input type="text" value="{{$activity_plans->activity_type}}"  name="activity_type" placeholder="Type Of The Activity"   class="form-control" readonly	>
              </div>
            </div>
              <div class="col-md-3">
               <div class="form-group" >
                 <label><small>Organiser</small></label>
                <input type="text" name="organiser" value="{{$activity_plans->organiser}}" placeholder="Organiser"   class="form-control" readonly >
               </div>
              </div>
               <div class="col-md-3">
              <div class="form-group">
                <label><small>Objective</small></label>
                <input type="text"  name="objective" value="{{$activity_plans->objective}}" placeholder="Objective"    class="form-control"  readonly>
              </div>
            </div> 
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Topic/Theme</small></label>
                <input type="text"  name="topic_theme" value="{{$activity_plans->topic_theme}}" placeholder="Topic/Theme"    class="form-control"  readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Venue</small></label>
                <input type="text"  name="venue" value="{{$activity_plans->venue}}" placeholder="Venue"    class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Date And Day</small></label>
                <input type="text"  name="date_day" value="{{$activity_plans->date_day}}" placeholder="Date And Day"    class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Category</small></label>
                <input type="text"  name="category" value="{{$activity_plans->category}}" placeholder="Category"    class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Name Of Committee</small></label>
                <input type="text"  name="committee" value="{{$activity_plans->committee}}" placeholder="Name Of Committee"    class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Name Of Incharge</small></label>
                <input type="text"  name="incharge" value="{{$activity_plans->incharge}}" placeholder="Name Of Incharge"    class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>No Of Participants</small></label>
                <input type="text" name="no_participants" value="{{$activity_plans->no_participants}}" placeholder="No Of Participants" id="total_participats" value="" class="form-control" readonly>
              </div>
            </div>	
            
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Invitees</small></label>
                <input type="text" name="invitees" value="{{$activity_plans->invitees}}" placeholder="Invitees"  class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Circular/Invitation Card</small></label>
                <input type="text"  name="invitation_card" value="{{$activity_plans->invitation_card}}" placeholder="Circular/invitation"    class="form-control" >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Distribution Of Invitation Card</small></label>
                <input type="text"  name="distribution_card" value="{{$activity_plans->distribution_card}}" placeholder="Distribution Of Invitation Card"    class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Arrangement Of Sound System</small></label>
                <input type="text"  name="sound_system" value="{{$activity_plans->sound_system}}" placeholder="Arrangement Of Sound System"    class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Seating For Guest & Participants</small></label>
                <input type="text"  name="seating_guest" value="{{$activity_plans->seating_guest}}" placeholder="Guest & Participants"    class="form-control" readonly >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Arrangement Of Green Room</small></label>
                <input type="text"  name="green_room" value="{{$activity_plans->green_room}}" placeholder="Arrangement Of Green Room"    class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Sound System/In Or Out Source</small></label>
                <input type="text"  name="out_source" value="{{$activity_plans->out_source}}" placeholder="Sound System/In Or Out Source"    class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Stage Arrangement</small></label>
                <input type="text"  name="stage_arrangement" value="{{$activity_plans->stage_arrangement}}" placeholder="Stage Arrangement"    class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Arrangement Of Light</small></label>
                <input type="text"  name="light_arrangement" value="{{$activity_plans->light_arrangement}}" placeholder="Arrangement Of Light"    class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Name Of Judges</small></label>
                <input type="text"  name="name_judges" value="{{$activity_plans->name_judges}}" placeholder="Name Of Judges"    class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Time Duration</small></label>
                <input type="text"  name="time_duration" value="{{$activity_plans->time_duration}}" placeholder="Time Duration"    class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Compering</small></label>
                <input type="text"  name="compering"  value="{{$activity_plans->compering}}" placeholder="Compering"   class="form-control" readonly >
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Preparation</small></label>
                <input type="text" name="preparation" value="{{$activity_plans->preparation}}" placeholder="Preparation"   class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Preparation Of Script</small></label>
                <input type="text" name="preparation_script" value="{{$activity_plans->preparation_script}}" placeholder="Preparation Of Script"   class="form-control" readonly >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Photography</small></label>
                <input type="text" name="photography" value="{{$activity_plans->photography}}" placeholder="Photography"   class="form-control"  readonly >
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Publicity/Banner/Pressnote</small></label>
                <input type="text" name="publicity_banner" value="{{$activity_plans->publicity_banner}}" placeholder="Publicity/Banner/Pressnote"   class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Refreshment Arrangement</small></label>
                <input type="text" name="refreshment" value="{{$activity_plans->refreshment}}" placeholder="Refreshment Arrangement"   class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Writting Of Report</small></label>
                <input type="text" name="writting_report" value="{{$activity_plans->writting_report}}" placeholder="Writting Of Report"   class="form-control" readonly>
              </div>
            </div>	
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Feedback From Students</small></label>
                <input type="text" name="feedback_students" value="{{$activity_plans->feedback_students}}" placeholder="Writting Of Report"   class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Feedback From Parents</small></label>
                <input type="text" name="feedback_parents" value="{{$activity_plans->feedback_parents}}" placeholder="Writting Of Report"   class="form-control" readonly>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Total Amount Spent</small></label>
                <input type="text" name="amt_spent" value="{{$activity_plans->amt_spent}}" placeholder="Writting Of Report"   class="form-control" readonly>
              </div>
            </div>		
            <div class="col-md-3">
              <div class="form-group">
                <label><small>Review Of The Event</small></label>
                <input type="text" name="review_event" value="{{$activity_plans->review_event}}" placeholder="Writting Of Report"   class="form-control" readonly>
              </div>
            </div>
            </div>
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    @include('common.footer')
 <script>
$(function(){
$('#example1').DataTable()
})
</script>
