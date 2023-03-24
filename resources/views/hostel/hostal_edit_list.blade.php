@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"hostel/hostel_details_api.php",
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
				   get_content('hostel/hostel_list');
            }
			}
         });
      });
</script>
     <section class="content-header">
      <h1>
        Hostel Management        <small> Control Panel</small>
      </h1>
    <ol class="breadcrumb">
	    <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	    <li><a href="javascript:get_content('hostel/hostel_list')"><i class="fa fa-bed"></i>Hostel List</a></li>
	    <li class="Active">Hostel Details</li>
	</ol>
    </section>




	<!---****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">

            <div class="box-header with-border ">
              <h3 class="box-title"> Registration</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
		<div class="box-body">
	    	<form method="POST" enctype="multipart/form-data" id="my_form">
                @csrf
			<input type="hidden" name="s_no" value="18" />
     <div class="box-body">
	 <h3 style="color:#d9534f;"><b>Hostel Info</b></h3>
		    <div class="col-md-4 ">
					<div class="form-group">
						<label> Hostel Name</label>
						<input type="text"  name="hostel_name"   placeholder="Hostel Name"  value="{{ $edit->hostal_name }}" class="form-control " >
					</div>
				</div><div class="col-md-4 ">
					<div class="form-group">
						<label> Hostel type</label>
						<select name="hostel_type" class="form-control">
						  <option value=" ">Select</option>


						  <option value="Girls">Boys</option>
						  <option value="Girls">Girls</option>
						  <option value="Both">Both</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> No. of Room</label>
						<input type="number"  name="hostel_number_of_room"   placeholder="Number of Room"  value="{{ $edit->hostal_no_of_room }}" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> Total Capacity</label>
						<input type="number"  name="hostel_total_capacity"   placeholder="Capacity"  value="{{ $edit->hostal_total_capacity }}" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> Facilities</label>
						<select name="hostel_facility" class="form-control">
						  <option value=" ">Facilities</option>
						  <option value="Ac">Ac</option>
						  <option value="NonAc">NonAc</option>
						  <option value="Cooler">Cooler</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> Laundry Services</label>
						<select class="form-control" name="hostel_laundry">
						<option value="">Laundry Services</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label> Mess</label>
						<select class="form-control" name="hostel_mess">
						<option value="">Mess</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
					</div>
				</div>
			 <div class="col-md-4 ">
					<div class="form-group">
						<label> Warden Name</label>
						<input type="text" class="form-control" name="hostel_warden_name" placeholder="Warden Name" value="{{ $edit->hostal_warden_name  }}">
					</div>
				</div>

				<div class="col-md-12 ">
					<div class="form-group">
						<center><button type="submit" class="btn btn-primary">Update Details</button></center>
					</div>
				</div>
			</div>
			</form>
			</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->

          </div>

    </div>
</section>

@include('common.footer')
