<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"bus/employee_edit_api.php",
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
				   get_content('bus/employee_list');
            }
			}
         });
      });
</script>
    <section class="content-header">
      <h1>
        Bus Management        <small></small>
      </h1>
       <ol class="breadcrumb">
	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
	    <li><a href="javascript:get_content('bus/bus_staff')"><i class="fa fa-bed"></i>Bus Staff</a></li>
	</ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-warning  ">
            <div class="box-header with-border ">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
<!--------------------------------Start Registration form--------------------------------------------------->

			
    <div class="box-body "  >
		<form method="post" enctype="multipart/form-data"  id="my_form">
			 
		<div class="box-body ">
		<h3 style="color:#d9534f;"><b>Personal Detail</b></h3>
			<div class="col-md-4 ">
			    <input type="hidden" name="s_no" value="24" class="form-control">
				<div class="form-group">
                    <label>Employee Name<font style="color:red"><b>*</b></font></label>
                    <input type="text" required name="emp_name" placeholder="Employee Name"  value="demo" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Gender</label>
                 <select name="emp_gender" class="form-control">
			          <option value="Male">Male</option>  
			          <option value="Male">Male</option>  
			          <option value="Female">Female</option>
			        </select>
				</div>
			</div>
			<div class="col-md-4 ">		
				<div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="date" name="emp_dob" placeholder="Date of Birth"  value="2021-09-25" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">	
				<div class="form-group">
                    <label>Husband/Father's Name</label>
                    <input type="text" name="emp_father" placeholder="Father/Husband Name"  value="demo father" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">				
				<div class="form-group">
                    <label>Email Address </label>
                    <input type="email" name="emp_email" placeholder="Email Address"  value="nik.chandraprabha@gmail.com" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">				
				<div class="form-group">
                    <label>Mobile No.<font style="color:red"><b>*</b></font></label>
                    <input type="text" required name="emp_mobile" placeholder="Mobile No"  value="09144555977" class="form-control">
                </div>
			</div>	
			<div class="col-md-4 ">				
				<div class="form-group">
                   <label>Address</label>
                   <input type="text" name="emp_address" placeholder="Address"  value="NARWARA" class="form-control">
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
                   <input type="file"  name="emp_photo" id="emp_photo" placeholder=""  value="" onchange="check_file_type(this,'emp_photo','emp_phroi12','image');"class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                    <input type="date" name="emp_doj" placeholder=""  value="2021-09-25" class="form-control">
                </div>
			</div>
			<div class="col-md-4 ">				
				<div class="form-group">
                   <label>Designation</label>
                   <input type="text" name="emp_designation" placeholder="Designation"  value="" class="form-control">
                </div>
			</div>
			
			<div class="col-md-4 ">				
				<div class="form-group">
                   <label>Leave For An Year</label>
                   <input type="text" name="emp_casual_leave" placeholder="Casual Leave for an Year"  value="" class="form-control">
                </div>
			</div>
		
		
	<div class="box-body ">
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
                  <label >Bank Name</label>
                  <input type="text" name="emp_bank_name" placeholder="Bank Name"  value="" class="form-control">
                </div>
			</div>
			
			<div class="col-md-4 ">				
				<div class="form-group">
                   <label >Bank Account No.</label>
                   <input type="text" name="emp_account_no" placeholder="Bank Account No"  value="" class="form-control">
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
                   <input type="text" required name="emp_basic_salary" placeholder="Salary"  value="12000" class="form-control">
                </div>
			</div>
			
			<div class="col-md-4 ">				
				<div class="form-group">
                   <label >PF No.</label>
                   <input type="text" name="emp_pf_number" placeholder="PF NUMBER"  value="" class="form-control">
                </div>
			</div>
			
			<div class="col-md-4 ">				
				<div class="form-group">
                   <label >Remark</label>
                   <input type="text" name="remarks" placeholder="Remarks"  value="" class="form-control">
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
 