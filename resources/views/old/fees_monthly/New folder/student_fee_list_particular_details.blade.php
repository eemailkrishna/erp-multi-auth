
<script>
function total_fee(){
var add = 0;
$('.amt').each(function() {
add += Number($(this).val());
});
document.getElementById('total_paid').value = add;
}
</script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fees Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	  <li><a href="javascript:get_content('fees_monthly/student_fee_list')"><i class="fa fa-money"></i> Student Fees List</a></li>
	  <li class="active">Student Fees List Particular Details</li>
      </ol>
    </section>
	
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
		
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
           
            <!-- /.box-header -->			
        <div class="box-body">
		<br>
    <form method="post" enctype="multipart/form-data">
			
		    <div class="box-body col-md-12">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-2">
                <div class="form-group">
                  <label>Fee Submission Date</label>
                  <input type="text" name="fee_submission_date" placeholder=""  value="2022-11-16" class="form-control" readonly >
                </div>
                </div>
				<div class="col-md-2">
				<div class="form-group">
                  <label>Student Name</label>
                  <input type="text"  name="student_name" placeholder="Student Name"  value="RAJ" class="form-control" readonly />
                </div>
                </div>
				<div class="col-md-2">
				<div class="form-group">
                  <label>Student Father's Name</label>
                  <input type="text"  name="student_father_name" placeholder="Student Father's Name"  value="rajesh" class="form-control" readonly />
                </div>
                </div>
				<div class="col-md-2">
			    <div class="form-group">
                  <label>Student Class</label>
                  <input type="text"  name="student_class" placeholder="Student Class"  value="2ND" class="form-control" readonly />
                </div>
                </div>
				<div class="col-md-2">
				<div class="form-group">
                  <label>Student Class Section</label>
                  <input type="text"  name="student_class_section" placeholder="Student Class section"  value="A" class="form-control" readonly />
                </div>
                </div>
				<div class="col-md-1">
				<div class="form-group">
                  <label></label>
                  <input type="hidden"  name="" placeholder=""  value="" class="form-control" readonly >
                </div>
                </div>
				
			</div>
			
		<div class="box-body col-md-12" style="border:1px solid;">
		<center><h2 style="color:teal;">Paid Fee Details</h2></center>
            				<div class="col-md-6" style="border:1px solid;border-radius:10px;">
				<div class="col-md-6">
				<h4 style="color:green;">April Month Fee Details</h4>
				</div>
								<div class="col-md-6">				
				<div class="form-group">
                  <label>annual Fee Paid Amount</label>
                  <input type="text" name="student_fee1_paid_total_month04" value="0" placeholder="amount" class="form-control" readonly />
                </div>
				</div>					
								<div class="col-md-6">				
				<div class="form-group">
                  <label>singing Fee Paid Amount</label>
                  <input type="text" name="student_fee2_paid_total_month04" value="" placeholder="amount" class="form-control" readonly />
                </div>
				</div>					
								<div class="col-md-6">				
				<div class="form-group">
                  <label>Transport fees Fee Paid Amount</label>
                  <input type="text" name="student_fee3_paid_total_month04" value="" placeholder="amount" class="form-control" readonly />
                </div>
				</div>					
								<div class="col-md-6">				
				<div class="form-group">
                  <label>sports fees Fee Paid Amount</label>
                  <input type="text" name="student_fee4_paid_total_month04" value="1000" placeholder="amount" class="form-control" readonly />
                </div>
				</div>					
								<div class="col-md-6">				
				<div class="form-group">
                  <label>exam fee Fee Paid Amount</label>
                  <input type="text" name="student_fee5_paid_total_month04" value="500" placeholder="amount" class="form-control" readonly />
                </div>
				</div>					
								<div class="col-md-6">				
				<div class="form-group">
                  <label>event fee Fee Paid Amount</label>
                  <input type="text" name="student_fee8_paid_total_month04" value="200" placeholder="amount" class="form-control" readonly />
                </div>
				</div>					
								<div class="col-md-6">				
				<div class="form-group">
                  <label>bus fee Fee Paid Amount</label>
                  <input type="text" name="student_fee9_paid_total_month04" value="1500" placeholder="amount" class="form-control" readonly />
                </div>
				</div>					
								</div>
						</div>
								<div class="col-md-12">
			   
				 <div class="col-md-3">				
				  <div class="form-group" style="display:none;">
					  <label>Other Fee Remark</label>
					  <input type="text" name="other_fee_remark" placeholder="Other Fee Remark" value="" class="form-control" readonly />
					</div>
				 </div>
				 <div class="col-md-1">				
				  <div class="form-group" style="display:none;">
					  <label>Other Fee</label>
					  <input type="text" name="other_fee_amount" placeholder="0" value="" class="form-control amt" readonly />
					</div>
				 </div>
				
				<div class="col-md-2">
				<div class="form-group" style="">
                  <label>Penalty</label>
                  <input type="text" name="penalty_amount" value="300" placeholder="amount" id="" class="form-control amt" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				  <div class="form-group" style="">
					  <label>Previous Year Fee</label>
					  <input type="text" name="student_previous_year_fee_paid_total" placeholder="0" value="18100" class="form-control amt" readonly />
					</div>
				 </div>
				
				<div class="col-md-2">				
				  <div class="form-group" style="display:none;">
					  <label>Transport Amount</label>
					  <input type="text" name="transport_amount" placeholder="0" value="" class="form-control amt" readonly />
					</div>
				 </div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Total Paid</label>
                  <input type="text" name="paid_total" value="21600" placeholder="amount" id="" class="form-control amt" readonly />
                </div>
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