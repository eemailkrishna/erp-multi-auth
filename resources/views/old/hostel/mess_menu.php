    <section class="content-header">
      <h1>
        Hostel Management        <small>Control Panel</small>
      </h1>
    <ol class="breadcrumb">
	  
	    <li><a href=".javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i>Hostel</a></li>
	    <li><a href="javascript:get_content('hostel/hostel_mess')"><i class="fa fa-bed"></i>Hostel Mess</a></li>
	    <li><a href="javascript:get_content('hostel/hostel_mess_menu_list')"><i class="fa fa-bed"></i>Hostel Mess Menu List</a></li>
	    <li class="Active">Edit Hostel Mess Menu</li>
	</ol>
    </section>

<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"hostel/mess_menu_api.php",
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
				   get_content('hostel/hostel_mess_menu_list');
            }
			}
         });
      });
</script>

	<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Mess Menu</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			<form method="post" enctype="multipart/form-data" id="my_form">
            <div class="box-body">
			
			<div class="col-lg-12 form-group">
				<div class="col-lg-3 "><h4>Day</h4></div>
				<div class="col-lg-3"><h4>Break Fast</h4></div>
				<div class="col-lg-3"><h4>Lunch</h4></div>
				<div class="col-lg-3"><h4>Dinner</h4></div>
			</div>
			<div class="col-md-3">
					<div class="form-group">
						<label>Sunday </label>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
						<input type="text"  name="sun_breakfast"  placeholder="Breakfast"  value="zeera rice" class="form-control" >
				    </div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
						<input type="text"  name="sun_lunch"  placeholder="Lunch"  value="zeera rice" class="form-control">
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
					   <input type="text"  name="sun_dinner" placeholder="Dinner"  value="zeera rice" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Monday</label>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
						<input type="text"  name="mon_breakfast"  placeholder="Breakfast"  value="bread butter" class="form-control" >
				    </div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
						<input type="text"  name="mon_lunch"  placeholder="Lunch"  value="butter chicken" class="form-control">
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
					   <input type="text"  name="mon_dinner"  placeholder="Dinner"  value="biryani" class="form-control">
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group" >
					  <label>Tuesday </label>
					</div>
				  </div>
				  <div class="col-md-3">	
					<div class="form-group" >
					  <input type="text"  name="tue_breakfast" placeholder="Breakfast"  value="" class="form-control" >
					</div>
				  </div>
				  <div class="col-md-3">	
					<div class="form-group" >
					  <input type="text"  name="tue_lunch" placeholder="Lunch"  value="" class="form-control" >
					</div>
				  </div>
				  <div class="col-md-3">	
					<div class="form-group">
					  <input type="text"  name="tue_dinner" placeholder="Dinner"  value="" class="form-control" >
					</div>
				  </div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <label>Wednesday </label>
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="wed_breakfast" placeholder="Breakfast"  value="" class="form-control" >
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="wed_lunch" placeholder="Lunch"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="wed_dinner" placeholder="Dinner"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <label >Thursday</label>
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="thu_breakfast" placeholder="Breakfast"  value="" class="form-control" >
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="thu_lunch" placeholder="Lunch"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					   <input type="text"  name="thu_dinner" placeholder="Dinner"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <label >Friday</label>
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="fri_breakfast" placeholder="Breakfast"  value="" class="form-control" >
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="fri_lunch" placeholder="Lunch"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					   <input type="text"  name="fri_dinner" placeholder="Dinner"  value="" class="form-control">
					</div>
				</div><div class="col-md-3">				
					<div class="form-group" >
					  <label >Saturday</label>
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="sat_breakfast" placeholder="Breakfast"  value="" class="form-control" >
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="sat_lunch" placeholder="Lunch"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					   <input type="text"  name="sat_dinner" placeholder="Dinner"  value="" class="form-control">
					</div>
				</div>
				
				
			<div class="col-md-12">
		        <center><input type="submit" name="submit" value="Update Details" class="btn btn-success" />&nbsp;&nbsp;</center>
		    </div>
			
      </div>
      </form>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
