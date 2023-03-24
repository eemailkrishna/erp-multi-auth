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
            url: access_link+"hostel/room_details_api.php",
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
				   get_content('hostel/room_list');
            }
			}
         });
      });
</script>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Hostel Edit      <small>  Panel</small>
      </h1>
    <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	    <li><a href="javascript:get_content('hostel/room_list')"><i class="fa fa-bed"></i>Hostel List</a></li>
	</ol>
    </section>

  <!---*******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
 <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-warning  ">
            <div class="box-header with-border ">
              <h3 class="box-title" style="color:#930F4B">Edit Room Details</h3>
            </div>
            <!-- /.box-header -->

<!------------------------------------------------Start Registration form--------------------------------------------------->
   	<form method="POST" enctype="multipart/form-data" id="my_form">
        @csrf
			<input type="hidden" name="edit_s_no" value="24" />
    <div class="col-md-3"></div>
	<div class="col-md-6 col-md-6-offset-3">
    <div class="panel panel-default">
      <div id="my_table" class="panel-heading"><span style="font-size:18px;">Edit Rooms Details</span></div>
      <div class="panel-body">


	 <div class="form-group">


		<label>Hostel Name</label>
		<input type="text" name="hostel_name" value="{{ $data->hostal->hostal_name }}" placeholder="Hostel Name" class="form-control">
	</div>
	<div class="form-group">
		<label>Room No.</label>
		<input type="text" name="room_number" value="{{ $data->hostal_room_no }}" placeholder="Room No." class="form-control">
	</div>
	<div class="form-group">
	   <label>Room Bed Type</label>
		<select name="room_bed_type" class="form-control">
            <option value="">Bed Type</option>
            @if($data->hostal_room_bed_type )
            @foreach ($data as $bed)
            <option value="{{ $bed->id }}">{{ $bed->hostal_room_bed_type }}</option>
            @endforeach
@endif

		{{-- <option value="1">Single</option>
		<option value="2">Double</option>
		<option value="3">Triple</option>
		<option value="4">Fourth</option> --}}
		</select>
	</div>

	  <div class="form-group">
		<label>Attach Washroom</label>
		<select name="room_attach_washroom" class="form-control">
		<option value="">Attach Washroom</option>
		<option>Yes</option>
		<option>No</option>
		</select>
	  </div>
	 <div class="form-group">
		<label>Charges Per Student</label>
		<input type="text" value="{{ $data->hostal_charge_per_student }}" placeholder="Student Per Charge" name="room_charge_per_student" class="form-control">
	  </div>

	  <div class="form-group">
		    <center><button type="submit" name="submit" class="btn btn-primary">Update Details</button></center>
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
<script>
    $(function() {
        $('#example1').DataTable()

    })
</script>
@include('common.footer')

