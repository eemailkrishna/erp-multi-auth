
<script>
function check_file_type(input,id,id_show,type1){
if(type1=="image"){
	   var file = input.files[0];
	   if (file.size >= 1024 * 1024 * 1024) {
	    $('#'+id).val('');
      alert_new("File size must be at most 2MB");
      return;
    }  
if(!file.type.match("image/*"))
{
 $('#'+id).val('');
alert_new("Please Upload JPG/JPEG/PNG/GIF File");

 return;
}  
	var fileReader = new FileReader();
  fileReader.onloadend = function(e) {
    var arr = (new Uint8Array(e.target.result)).subarray(0, 4);
    var header = "";
    for (var i = 0; i < arr.length; i++) {
      header += arr[i].toString(16);
    }
	if(mimeType(header)==1){
	  $('#'+id).val('');
	alert_new("Please Upload JPG/JPEG/PNG/GIF File");
	
	}
  };
  fileReader.readAsArrayBuffer(file);
  readURL(input,id_show);
}else{

	   var file = input.files[0];
	   if (file.size >= 1024 * 1024 * 1024) {
	    $('#'+id).val('');
      alert_new("File size must be at most 2MB");
	  
      return;
    }  
 
	var fileReader = new FileReader();
  fileReader.onloadend = function(e) {
    var arr = (new Uint8Array(e.target.result)).subarray(0, 4);
    var header = "";
    for (var i = 0; i < arr.length; i++) {
      header += arr[i].toString(16);
    }
	if(mimeType(header)==1){
	 $('#'+id).val('');
	alert_new("Please Upload JPG/JPEG/PNG/GIF/PDF/DOC File");
	 
	}
  };
  fileReader.readAsArrayBuffer(file);
  readURL(input,id_show);
}

}
function mimeType(headerString) {
  switch (headerString) {
    case "89504e47":
      type = "image/png";
      break;
    case "47494638":
      type = "image/gif";
      break;
    case "ffd8ffe0":
    case "ffd8ffe1":
    case "ffd8ffe2":
      type = "image/jpeg";
      break;
	 case "25504446":
      type = "application/pdf";
      break;
	  case "d0cf11e0":
      type = "application/doc";
      break;
    default:
      type = "1";
      break;
  }
  return type;
}

$("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"hostel/hostel_student_details_api.php",
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
	   <li class="Active">Hostel Student Details</li>
      </ol>
    </section>


	
	
	<!---***************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
		 
            <div class="box-header with-border ">
              <h3 class="box-title"> Hostel Admission Form </h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
		<div class="box-body">	
	    	<form method="post" enctype="multipart/form-data" id="my_form">
			<input type="hidden"  name="s_no"    value="6" class="form-control"  >
            <div class="box-body">
			<h3 style="color:#d9534f;"><b>Student Admission In Hostel</b></h3>
			    <div class="col-md-4">
					<div class="form-group">
						<label>Roll.No.<font style="color:red"><b>*</b></font></label>
						<input type="text"  name="roll_number" placeholder="Roll No."  value="1900199" class="form-control" readonly>
						<input type="hidden"  name="hostel_student_id" placeholder="Unique Id"  value="0_5" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-2" style="display:none;">
					<div class="form-group">
						<button type="submit" style="margin-top:24px;" name="fill" class="btn btn-primary">Validate</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Name</label>
						<input type="text"  name="hostel_student_name"  placeholder="Name"  value="ankit jain" class="form-control">
					</div>
				</div>
				<div class="col-md-4">		
					<div class="form-group">
				       <label>Father's Name</label>
					   <input type="text" name="hotel_father_name" placeholder="Father's Name"  value="SONU " class="form-control">
					</div>
				</div>
				<div class="col-md-4">	
					<div class="form-group">
					  <label>Date Of Birth</label>
					  <input type="date"  name="hostel_student_dob"   value="1993-03-09" class="form-control">
					</div>
				  </div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label>Gender</label><br>
                        <select name="hostel_student_gender" class="form-control">
						   <option value="Male">Male</option>
						   <option value="Male">Male</option>
						   <option value="Female">Female</option>
						</select>
				</div>
				</div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Handicapped </label>
					   <select name="hostel_student_handicapped" class="form-control">
				<option value="No">No</option>
						   <option value="No">No</option>
						   <option value="Yes">Yes</option>
						</select>
					  
					</div>
				</div>	
				<div class="col-md-4 ">				
					 <div class="form-group" >
					  <label>Religion</label>
					  <input type="text"  name="hostel_student_religion" placeholder="Religion"  value="Hindu" class="form-control">
				 </div>
				 </div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Category</label>
					<input type="text"  name="hostel_student_category" placeholder="Category"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Aadhar No.</label>
					  <input type="text"  name="hostel_student_aadhar" placeholder="Aadhar No."  value="12345" class="form-control">
					</div>
				</div>	
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Class</label>
					 <input type="text"  name="hostel_student_class" placeholder="Class"  value="LKG" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label>Father Contact No.</label>
					  <input type="text"  name="hostel_student_father_contact"  placeholder="Father Contact"  value="123455" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label>Father Email Id</label>
					  <input type="text"  name="hostel_student_father_email"  placeholder="Father Email I'd"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label>Mother's Name</label>
					  <input type="text"  name="hostel_student_mother_name"  placeholder="Mother Name"  value="asdfsdfg" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label>Mother Contact No</label>
					  <input type="text"  name="hostel_student_mother_contact"  placeholder="Mother Contact"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4" style="display:none;">				
					<div class="form-group">
					  <label></label>
					  <input type="text"  name="hostel_student_contact"  placeholder="Student Contact"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4">				
					<div class="form-group" >
					  <label>Student Email Id</label>
					  <input type="text"  name="hostel_student_email"  placeholder="Student Email"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4">				
					<div class="form-group" >
					  <label>Student Photo</label>
					  <input type="file"  name="hostel_student_photo" onchange="check_file_type(this,'student_image','show_student_photo','image');" placeholder=""  value="" class="form-control">
				      <img src="../school_software_v1_old/images/student_blank.png" id="show_student_photo" height="50" width="50">
					</div>
				</div>
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label>Emergency Contact</label>
					  <input type="text"  name="hostel_emergency_contact" value="Emergency Contact" class="form-control">
					</div>
				</div>
	        </div>
			
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Room Allotment</button>
			
		
	<!-----------------------------------------------Model Box Start----------------------------------------------------------->

			<div class="modal fade" id="modal-default">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header my_background_color">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Hostel Room</h4>
									  </div>
									  <div class="modal-body">
									  <div class="col-md-12">
									  <div class="col-md-3"></div>
									  <div class="col-md-6">
									  	<div class="form-group">
										<label>Select Hostel:</label>
										<select name="hostel_name" id="hostel_name" class="form-control" onchange="hostel_detail(this.value);" >
										<option value=''>Select</option>
								   									 <option value="gbssss">gbssss</option>
																			 <option value="TS BOYS HOSTEL">TS BOYS HOSTEL</option>
																			 <option value="TSRD GIRLS HOSTEL">TSRD GIRLS HOSTEL</option>
																			 <option value="v boys hostel">v boys hostel</option>
																			   </select>
									 </div>
									  </div>
									  <div class="col-md-3"></div>
									  </div>
									  <div class="col-md-12" id="bed_detail">
									  
									  
									  
										
									  </div>
									 </div>
									  <div class="modal-footer ">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									  </div>
									</div>
									<!-- /.modal-content -->
								  </div>
								  <!-- /.modal-dialog -->
								</div>
								
  <!-----------------------------------------------Model Box End------------------------------------------------------------>
	 	
	 <div class="box-body">
	 <h3 style="color:#d9534f;"><b>Hostel Info</b></h3>
		    <div class="col-md-4 ">
					<div class="form-group">
						<label>Hostel Name<font style="color:red"><b>*</b></font></label>
						<input type="text" name="hostel_name1" id="hostel_name1" placeholder="Room Number"  value="block1" class="form-control" required>
						<input type="hidden" name="hostel_name2" id="hostel_name2" placeholder="Room Number"  value="block1" class="form-control" readonly>
					</div>
				</div><div class="col-md-4 ">
					<div class="form-group">
						<label>Room No.<font style="color:red"><b>*</b></font></label>
						<input type="text" name="hostel_room" id="hostel_room" placeholder="Room Number"  value="" class="form-control" required>
						<input type="hidden" name="hostel_room2" id="hostel_room2" placeholder="Room Number"  value="" class="form-control" readonly />
					</div>
				</div><div class="col-md-4 ">
					<div class="form-group">
						<label>Room Bed Type<font style="color:red"><b>*</b></font></label>
						<input type="text" name="hostel_room_bed_type" id="hostel_bed_type" placeholder="Room Number"  value="bed" class="form-control" required>
						
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Facilities<font style="color:red"><b>*</b></font></label>
						<input type="text" name="hostel_room_facility" id="hostel_room_faci" placeholder="Room Number"  value="abx" class="form-control" required />
						
					</div>
				</div>
				 <div class="col-md-4 ">
					<div class="form-group">
						<label>Attach Washroom<font style="color:red"><b>*</b></font></label>
						<input type="text" name="hostel_washroom" id="hostel_wash" placeholder="Attach Washroom"  value="yes" class="form-control" required />
						
					</div>
				 </div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Room Charge Per Bed<font style="color:red"><b>*</b></font></label>
						<input type="text"  name="hostel_room_charge_per_bed" id="hostel_room_charge" placeholder="Room Charge Per Bed"  value="2000" class="form-control" required />
					
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Room Table</label>
						<select class="form-control" name="hostel_room_table">
						<option value="Yes">Yes</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Room Bed</label>
						<select class="form-control" name="hostel_room_bed">
						<option value="Yes">Yes</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Room Almirah</label>
						<select class="form-control" name="hostel_room_almirah">
						<option value="Yes">Yes</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Mess</label>
						<select class="form-control" name="hostel_mess">
						<option value="Yes">Yes</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Mess Charge</label>
						<input type="text" class="form-control" name="hostel_mess_charge" value="">
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Date Of Joining</label>
						<input type="date"  name="hostel_join" value="2019-12-03" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Caution Money</label>
						<input type="text"  name="hostel_caution_money" placeholder="Caution Money"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="form-group">
						<label>Laundry Charge</label>
						<input type="text"  name="hostel_laundry_charge" placeholder="Laundry Charge"  value="" class="form-control">
					</div>
				</div>
<div class="col-md-12 ">
	<div class="form-group">
		<center><button type="submit" name="submit" class="btn btn-primary">Update Details </button></center>
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

 