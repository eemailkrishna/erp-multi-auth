@include('common.header')
@include('common.navbar')

    <section class="content-header">
      <h1>
         Student Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
    		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
      <li class="active">Medical Fitness</li> </ol>
    </section>


	
	
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Health Zone</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
				<form role="form" method="post" action="{{url('/student/health_zone_insert')}}" enctype="multipart/form-data" id="my_form">
					@csrf
            <div class="box-body "  >

		
				<div class="col-md-12">
					<div class="form-group">
					
						<select name="student_name" class="form-control select2" id="studentlist" onchange="fill_detail(this.value);" required>
							 <option value="" >Select Student Name</option>
							 
							@foreach ($student as $item)								
									<option value="{{ $item->id }}">{{ $item->name }}</option>
							@endforeach 
							
								
						</select>
			
			
			         <div class="col-md-3 ">
						<div class="form-group">
						  <label>student Name</label>
						   <input type="text"  name="student_name" value="" placeholder="student Name"   id="student_name" class="form-control" readonly>
						</div>
					 </div>
					
					 
				     <div class="col-md-3 ">
						<div class="form-group">
						  <label>Class</label>
						   <input type="text"  name="student_class" value="" placeholder="Class"  id="student_class" class="form-control" readonly>
						</div>
					 </div>
					  
				    <div class="col-md-3 ">
						<div class="form-group">
						  <label>Student Gender</label>
						   <input type="text"  name="student_class_Gender" value="" placeholder="Student Gender"  id="student_Gender" class="form-control" readonly>
						  </div>
					</div>
					
					<div class="col-md-3 ">
						<div class="form-group">
						  <label>Student Roll No</label>
						   <input type="text"  name="student_roll_no" value="" placeholder="Student Roll No"  id="student_roll_no" class="form-control" readonly>
						  </div>
					</div>

                  <div class="col-md-3 ">	
					<div class="form-group" >
					  <label>Father's Name</label>
					  <input type="text"  name="student_father_name" id="tc_student_father_name" placeholder="Father's Name"  value="" class="form-control" readonly>
					</div>
				  </div>


				 
				 <div class="col-md-3 ">	
                     <div class="form-group" >
					  <label>Student CWSN</label>
					  <input type="text"  name="student_cwsn" value="" placeholder="Student CWSN"  id="student_cwsn" class="form-control" readonly>
					</div>
				 </div>
				 
				 <div class="col-md-3 ">	
                     <div class="form-group" >
					  <label>Student CWSN Description</label>
					  <input type="text"  name="student_cwsn_description" value="" placeholder="Student CWSN Description"  id="student_cwsn_description" class="form-control" readonly>
					</div>
				 </div>
				 
				  <div class="col-md-3">	
                     <div class="form-group" >
					  <label>Medical History</label>
					  <select name="student_medical_history" id="student_medical_history1" class="form-control" onchange="detail1(this.value);" required>
			        <option value="No">No</option>
					  <option value="Yes">Yes</option>
					
					  </select>
					</div>
                   </div>
				 
				  <div class="col-md-3 ">	
                     <div class="form-group" >
					  <label>Student Height</label>
					  <input type="text"  name="student_height" value="" placeholder="Student Height"  id="student_height" class="form-control" >
					</div>
				 </div>
				 
				 <div class="col-md-3 ">	
                     <div class="form-group" >
					  <label>Student weight</label>
					  <input type="text"  name="student_weight" value="" placeholder="Student weight"  id="student_weight" class="form-control" >
					</div>
				 </div>
				
				<div class="col-md-4">	
                     <div class="form-group" >
					  <label>Checkup Date</label>
					  <input type="date"  name="checkup_date" value="" placeholder=""  id="checkup_date" class="form-control" >
					</div>
				 </div>
				 
				  <div class="col-md-4 ">
						<div class="form-group">
						  <label>Hospital Name</label>
						   <input type="text"  name="checkup_hospital_name" value="" placeholder="Hospital Name"   id="checkup_hospital_name" class="form-control" >
						</div>
			      </div>
				  
				  <div class="col-md-4 ">
						<div class="form-group">
						  <label>Doctor Name</label>
						   <input type="text"  name="checkup_doctor_name" value="" placeholder="Doctor Name"   id="checkup_doctor_name" class="form-control" >
						</div>
			      </div>
				  	<div class="col-md-3">	
					<div class="form-group">
				 <label>Checkup Report</label>
					  <input type="file" name="checkup_report1" id="checkup_report1" placeholder="" onchange="check_file_type(this,'checkup_report1','show_checkup_report1','image');"class="form-control" accept=" .jpg, .jpeg, .png" value="">
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_checkup_report1" src='../school_software_v1_old/images/hostel_student_list.png' width='60px' height='60px'>
					</div>
				</div>
		</div>	
		
		           <div class="col-md-4 ">
						<div class="form-group">
						  <label>Blood Group</label>
						   <input type="text"  name="blood_group" value="" placeholder="blood_group"   id="blood_group" class="form-control" >
						</div>
			      </div>
		           
				  <div class="col-md-4 ">
						<div class="form-group">
						  <label>Blood Pressure Level</label>
						   <input type="number"  name="checkup_bp" value="" placeholder="Blood Pressure Level"   id="checkup_bp" class="form-control" >
						</div>
			      </div>
				  
				  <div class="col-md-4 ">
						<div class="form-group">
						  <label>Hemoglobin Level</label>
						   <input type="number"  name="checkup_hb" value="" placeholder="Hemoglobin Level" id="checkup_hb" class="form-control" >
						</div>
			      </div>
				  
				  <div class="col-md-4 ">
						<div class="form-group">
						  <label>Diabetes Level</label>
						   <input type="number"  name="checkup_suger" value="" placeholder="Diabetes Level" id="checkup_suger" class="form-control" >
						</div>
			      </div>
				  
				  <div class="col-md-4">	
                    <div class="form-group" >
					   <label>HIV</label>
					   <select name="checkup_hiv" class="form-control " id="checkup_hiv"  required>
					   <option value="No">No</option>
					   <option value="Yes">Yes</option>
					   </select>
					 </div>
                   </div>
				   
				   <div class="col-md-4">	
                     <div class="form-group" >
					  <label>TB Infection</label>
					  <select name="checkup_tb" class="form-control " id="checkup_tb" required>
					  <option value="No">No</option>
					  <option value="Yes">Yes</option>
					  </select>
					  </div>
                   </div>
				   
				   <div class="col-md-4">	
                     <div class="form-group" >
					  <label>Eye Problem</label>
					  <select name="eye_problem" class="form-control " id="checkup_eye_problem"  required>
					  <option value="No">No</option>
					  <option value="Yes">Yes</option>
					  </select>
					  </div>
                   </div>
				   
				   <div class="col-md-4">	
                     <div class="form-group"  >
					  <label>Specs</label>
					  <select name="specs" class="form-control " id="checkup_specs" onchange="drop(this.value);"  required>
					  <option value="No">No</option>
					  <option value="Yes">Yes</option>
					  </select>
					  </div>
                   </div>
				   
				  
				  
				  <div class="col-md-4 ">	
                     <div class="form-group" >
					  <label>Remark</label>
					  <input type="text"  name="checkup_remark" value="" placeholder="Remark"  id="checkup_remark" class="form-control" >
					</div>
				  </div>
				  
				  <div class="col-md-4 ">	
                     <div class="form-group" >
					  <label>Descrption</label>
					  <input type="text"  name="checkup_discription" value="" placeholder="Descrption"  id="checkup_discription" class="form-control" >
					</div>
				  </div>
				  
				  <div class="col-md-4 ">	
                     <div class="form-group" >
					  <label>Health Marks</label>
					  <input type="text"  name="checkup_marks" value="" placeholder="Health Marks"  id="checkup_marks" class="form-control" >
					</div>
				  </div> 
				 
				   
				  
				  <div class="col-md-12">
				<center><input type="submit" name="submit" value="Submit" class="btn btn-success" /></center>
				
				</div>
				
				
				
		</form>	
		<div class="col-md-12">
		        
		  </div>
	</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
@include('common.footer')
<script>
	$(function () {
	
	  $('.select2').select2()
  
	})
  </script>

<script>
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
	<script type="text/javascript">
		function fill_detail(value) {

			// alert_new(value);
			$.ajax({
				type: "get",
				url: "{{url('student-info')}}/"+value,
				cache: false,
				success: function(detail) {
					$('#student_name').val(detail.name);
					$('#student_class').val(detail.student.class);
					$('#student_roll_no').val(detail.student.roll_no);
					$('#tc_student_father_name').val(detail.student.father_name);
					$('#student_cwsn').val(detail.student.child_wiht_spe_need);
					$('#checkup_remark').val(detail.student.remark);
					$('#student_Gender').val(detail.gender);
	
				}
				});
			}
		</script>