@include('common.header')
@include('common.navbar')
<script>
$("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
//window.scrollTo(0, 0);
  // loader();
        $.ajax({
            url: access_link+"hostel/employee_edit_api.php",
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
            Hostel Management        <small>  Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>

	    <li><a href="javascript:get_content('hostel/staff')"><i class="fa fa-bed"></i> Hostel Staff</a></li>
	         <li><a href="employee_list.php"><i class="fa fa-bed"></i> Staff List</a></li>
	    <li class="Active">Edit Staff</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
		   <form method="POST" enctype="multipart/form-data" id="my_form">
            @csrf
          <div class="box box-warning  ">
            <div class="box-header with-border ">
              <h3 class="box-title"> Employee Info</h3>
            </div>
            <!-- /.box-header -->

<!--------------------------------Start Registration form--------------------------------------------------->



    <div class="box-body "  >


		<div class="box-body ">
		<h3 style="color:#d9534f;"><b>Personal Detail</b></h3>
			<div class="col-md-4 ">
				<div class="form-group">
				  <input type="hidden"  name="s_no"  value="3" class="form-control">
                    <label>Employee Name<font style="color:red"><b>*</b></font></label>
                    <input type="text" required name="emp_name" placeholder="Employee Name"  value="{{ $edit->emp_name }}" class="form-control">
                </div>

			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Gender</label>
                 <select name="emp_gender" class="form-control">
                    {{-- @foreach ($edit as $gender )
                    @if($edit->emp_gender)
			          <option value="{{ $gender->id }}">{{ $gender->emp_gender }}</option>
                      @endif
                      @endforeach --}}

			          <option value="Male">Male</option>
			          <option value="Male">Male</option>
			          <option value="Female">Female</option>
			        </select>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="date" name="emp_dob" placeholder="Date of Birth"  value="{{ $edit->emp_dob }}" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Husband/Father's Name</label>
                    <input type="text" name="emp_father" placeholder="Father/Husband Name"  value=" {{ $edit->emp_father }}" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="emp_email" placeholder="Email Address"  value="{{ $edit->emp_email }}" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Mobile No.  <font style="color:red"><b>*</b></font></label>
                    <input type="text" required name="emp_mobile" placeholder="Mobile No"  value="{{ $edit->emp_mobile }}" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                   <label>Address</label>
                   <input type="text" name="emp_address" placeholder="Address"  value="{{ $edit->emp_address }}" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                    <label>Employee Qualification</label>
                    <input type="text" name="emp_qualification" placeholder="Employee Qualification"  value="{{ $edit->emp_qualification }}" class="form-control">
                </div>
			</div>
			<div class="col-md-3 ">
			 	<div class="form-group">
                  <label>Photo</label>
                   <input type="file"  name="emp_photo" id="emp_photo" placeholder=""  value="{{ $edit->emp_photo }}" onchange="check_file_type(this,'emp_photo','emp_phroi12','image');"class="form-control" accept=".gif, .jpg, .jpeg, .png">
                </div>
			</div>
			<div class="col-md-1 "  >
					<div class="form-group">
					   <img id="emp_phroi12" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px' >
					</div>
				</div>
		</div>
		</div>
		   <div class="col-md-4 ">
				<div class="form-group">
                    <label>Date Of Joining</label>
                    <input type="date" name="emp_doj" placeholder=""  value="{{ $edit->emp_doj }}" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                   <label>Designation</label>
                   <input type="text" name="emp_designation" placeholder="Designation"  value="{{ $edit->emp_designation }}" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label>Leave For An Year</label>
                   <input type="text" name="emp_casual_leave" placeholder="Casual Leave for an Year" class="form-control">
                </div>
			</div>


	<div class="box-body ">
		<h3 style="color:#d9534f;"><b>Salary Details</b></h3>
			<div class="col-md-4 ">
				<div class="form-group">
                   <label>Pan Card No</label>
                   <input type="text" name="emp_pan_card_no" placeholder="Pan Card No."  value="{{$edit->emp_pan_card_no }}" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                  <label >Aadhar No</label>
                  <input type="text"  name="emp_uid_no" placeholder="Aadhar No."  value="{{ $edit->emp_aadhar_no }}" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                  <label >Bank Name </label>
                  <input type="text" name="emp_bank_name" placeholder="Bank Name"  value="{{ $edit->emp_bank_name }}" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Bank Account No</label>
                   <input type="text" name="emp_account_no" placeholder="Bank Account No"  value="{{ $edit->emp_account_no }}" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Bank IFSC Code</label>
                   <input type="text" name="emp_ifsc_code" placeholder="Bank IFSC Code"  value="{{ $edit->emp_ifsc_code }}" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Salary <font style="color:red"><b>*</b></font></label>
                   <input type="text" required name="emp_salary" placeholder="Salary"  value="{{ $edit->emp_salary}}" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >PF NUMBER</label>
                   <input type="text" name="emp_pf_number" placeholder="PF NUMBER"  value="{{ $edit->emp_pf_number}}" class="form-control">
                </div>
			</div>

			<div class="col-md-4 ">
				<div class="form-group">
                   <label >Remarks</label>
                   <input type="text" name="remarks" placeholder="Remarks"  value="{{ $edit->remarks}}" class="form-control">
                </div>
			</div>
		</div>

		<div class="col-md-12">
		      <center><input type="submit" name="finish" value="Update Details" class="btn btn-primary" /></center>
		</div>
	  </form>
	</div>

<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
@include('common.footer')
