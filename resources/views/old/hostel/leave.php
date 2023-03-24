

<script>
$("#my_form").submit(function(e){
        e.preventDefault();
 
    var formdata = new FormData(this);

        $.ajax({
            url: access_link+"hostel/leave_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			 
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('hostel/hostel_student_list');
            }
			}
         });
      });
</script>
 


        <section class="content-header">
      <h1>
        Hostel Management        <small>Control Panel</small>
      </h1>
    <ol class="breadcrumb">
	        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	    <li><a href="javascript:get_content('hostel/hostel_list')"><i class="fa fa-bed"></i>Hostel List</a></li>
	   <li class="Active">Leave Student </li>
	</ol>
    </section>
	
	
	<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
 <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-warning  ">
            <div class="box-header with-border ">
              <h3 class="box-title" style="color:#930F4B">Leave The Hostel</h3>
            </div>
            <!-- /.box-header -->
			
<!------------------------------------------------Start Registration form--------------------------------------------------->
	<form method="post" enctype="multipart/form-data" id="my_form">
    <div class="col-md-3"></div>
	<div class="col-md-6 col-md-6-offset-3">
    <div class="panel panel-default">
      <div id="my_table" class="panel-heading"><span style="font-size:18px;">Leave The Hostel</span></div>
      <div class="panel-body">

	 <div class="form-group">
		<label>Roll.No.<font style="color:red"><b>*</b></font></label>
		<input type="text" name="roll_number" placeholder="Student Name" value="2000183" class="form-control" readonly>
		<input type="hidden" name="hostel_student_id" placeholder="Student Name" value="0_7" class="form-control" readonly>
	</div>
	  
	<div class="form-group">
		<label>student Name</label>
		<input type="text" name="hostel_student_name" value="konkon" class="form-control" readonly>
	</div>
	<div class="form-group">
		<label>Room No.</label>
		<input type="text" name="room_number" value="" class="form-control" readonly>
	</div>
	<div class="form-group">
		<label>Caution Due Money:</label>
		<input type="text" name="caution_due" value="0"  class="form-control">
	</div>
	<div class="form-group">
		<label>Laundry Due</label>
		<input type="text" name="laundry_due" value="0" class="form-control">
	</div>
	<div class="form-group">
		<label>Mess Due</label>
		<input type="text" name="mess_due" value="2500" class="form-control">
	</div>
	<div class="form-group">
		<label>Room Due</label>
		<input type="text" name="room_due" value="0" class="form-control">
	</div>
	<div class="form-group">
		<label>Total Due</label>
		<input type="text" name="total_due" value="2500" class="form-control">
	</div>
	<div class="form-group">
		<label>Leave Date</label>
		<input type="date" name="leave_date" value="2022-12-05" class="form-control">
	</div>
	  
	 
	  <div class="form-group">
		    <center><button type="submit" name="submit" class="btn btn-primary">Submit Details</button></center>
	  </div>
	  
	  </div>
    </div>
    </div>
	<div class="col-md-3"></div>
	</form>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

 