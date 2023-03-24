@include('common.header')
@include('common.navbar')
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<script>
    // sweet alert message in insert data
    <script>
    @if(session('message'))
    swal("Data Insert!", "data insert successfully!", "success")
     </script>
     {{session('message')}}
     @endif

     @if(session('update'))
     <script>
      swal("Data Update!", "data update successfully!", "success")
       </script>
       {{session('update')}}

    @endif



$("#my_form").submit(function(e){
        e.preventDefault();
    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"hostel/employee_add_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			////alert_new(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('hostel/employee_list');
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

	    <li><a href="javascript:get_content('hostel/staff')"><i class="fa fa-bed"></i> Hostel Staff</a></li>
	    <li class="Active">Add Staff</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-warning  ">
            <div class="box-header with-border ">
              <h3 class="box-title">Employee Info</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->

    <div class="box-body "  >
		<form method="POST" enctype="multipart/form-data" id="my_form">
            @csrf
		<div class="col-md-12">
		<h3 style="color:#d9534f;"><b>Personal Detail</b></h3>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Employee Name<font style="color:red"><b>*</b></font></label>
                    <input type="text" name="emp_name" placeholder="Employee Name"  value="" class="form-control">
                </div>

			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Gender</label>
                   <select name="emp_gender" class="form-control">
			          <option value="Male">Male</option>
			          <option value="Female">Female</option>
			        </select>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="date" name="emp_dob" placeholder="Date Of Birth"  value="" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Husband/Father's Name</label>
                    <input type="text" name="emp_father" placeholder="Husband/Father's Name"  value="" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Email Address </label>
                    <input type="email" name="emp_email" placeholder="Email Address"  value="" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Mobile No. <font style="color:red"><b>*</b></font></label>
                    <input type="text" required name="emp_mobile" placeholder="Mobile No."  value="" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                   <label>Address</label>
                   <input type="text" name="emp_address" placeholder="Address"  value="" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Employee Qualification</label>
                    <input type="text" name="emp_qualification" placeholder="Employee Qualification"  value="" class="form-control">
                </div>
			</div>
			<div class="col-md-3 ">
			 	<div class="form-group">
                  <label>Photo</label>
                   <input type="file" name="emp_photo" id="" onchange="check_file_type(this,'emp_photo','emp_phroi12','image');"class="form-control" accept=".gif, .jpg, .jpeg, .png">
                </div>
			</div>
			<div class="col-md-1 "  >
					<div class="form-group">
					   <img id="emp_phroi12" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px' >
					</div>
				</div>
		</div>
	     <div class="col-md-4 ">
				<div class="form-group">
                    <label>Date Of Joining</label>
                    <input type="date" name="emp_doj" placeholder="Date Of Joining"  value="2022-12-05" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                   <label>Designation</label>
                   <input type="text" name="emp_designation" placeholder="Designation"  value="" class="form-control">
                </div>
			</div>

			{{-- <div class="col-md-4 ">
				<div class="form-group">
                   <label>Leave For An Year</label>
                   <input type="text" name="emp_casual_leave" placeholder="Leave For An Year"  value="" class="form-control">
                </div>
			</div> --}}



	<div class="col-md-12">
		<h3 style="color:#d9534f;"><b>Salary Details</b></h3>
			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Pan Card No.</label>
                   <input type="text" name="emp_pan_card_no" placeholder="Pan Card No."  value="" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                  <label >Aadhar No.</label>
                  <input type="text"  name="emp_uid_no" placeholder="Aadhar No."  value="" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                  <label >Bank Name </label>
                  <input type="text" name="emp_bank_name" placeholder="Bank Name"  value="" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Bank Account No.</label>
                   <input type="text" name="emp_account_no" placeholder="Bank Account No."  value="" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Bank IFSC Code</label>
                   <input type="text" name="emp_ifsc_code" placeholder="Bank IFSC Code"  value="" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Salary <font style="color:red"><b>*</b></font></label>
                   <input type="text" required name="emp_salary" placeholder="Salary "  value="" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >PF No.</label>
                   <input type="text" name="emp_pf_number" placeholder="PF No."  value="" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Remark</label>
                   <input type="text" name="remarks" placeholder="Remark"  value="" class="form-control">
                </div>
			</div>
		</div>


		<div class="col-md-12">
		      <center><input type="submit" name="submit" value="Submit Details" class="btn btn-success" /></center>
		</div>
	  </form>
	</div>





<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
@include('common.footer')
