@include('common.header')
@include('common.navbar')

<script type="text/javascript">




   function for_list(){ 
			var student_class_section= document.getElementById('student_class_section').value;
			var student_class=	document.getElementById('student_class').value;
	$("#my_table").html(loader_div);
       $.ajax({
			  type: "POST",
              url: access_link+"student/ajax_parents_student_id_card.php?id="+student_class+"&student_section="+student_class_section+"",
              cache: false,
              success: function(detail){
            $('#my_table').html(detail);
		
              }
           });
		  }
</script>
     <section class="content-header">
      <h1>
         Student Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
    		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
	  <li class="active">Student ID Card</li>
      </ol>
    </section>
	

	<script type="text/javascript">
   function for_section(value){
          $('#student_class_section').html("<option value='' >Loading....</option>"); 
            var id=value;  
       $.ajax({
			  type: "POST",
              url: access_link+"student/ajax_class_section_all.php?class_name="+value+"",
              cache: false,
              success: function($detail){
                   var str =$detail;                
                   
                  $("#student_class_section").html(str);
                   for_list();
              }
           });
}

 
</script>


	
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Father Generate ID</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->

						          	
            <div class="box-body "  >
					<form role="form"  method="post" id="my_form" action="../school_software_v1_old/pdf/pdf/id_card_page_father/father_id_card.php" onsubmit="return checked_null_value();" enctype="multipart/form-data" target="_blank">
			
			 <div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Class</label>
					    <select name="student_class" onchange="for_section(this.value);" id="student_class" class="form-control" required>
						       <option value="">Select Class</option>
						       						       <option value="NURSERY">NURSERY</option>
					     						       <option value="LKG">LKG</option>
					     						       <option value="UKG">UKG</option>
					     						       <option value="1ST">1ST</option>
					     						       <option value="2ND">2ND</option>
					     						       <option value="3RD">3RD</option>
					     						       <option value="4TH">4TH</option>
					     						       <option value="5TH">5TH</option>
					     						       <option value="6TH">6TH</option>
					     						       <option value="7TH">7TH</option>
					     						       <option value="8TH">8TH</option>
					     						       <option value="9TH">9TH</option>
					     						       <option value="10TH">10TH</option>
					     						       <option value="11TH">11TH</option>
					     						       <option value="12TH">12TH</option>
					     					    </select>
					</div>
				</div>
				<div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Section</label>
					    <select class="form-control" name="student_class_section" onchange='for_list();' id="student_class_section" >
						<option value="">Select</option>
						 
					    </select>
					</div>
				</div>		
				<div class="col-md-12">
                <!-- /.box -->

                <div <div class="box box-success" >>
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" id="my_table">
                <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th>S.no.</th>
				  <th>Admission No.</th>
                  <th>Student Roll No</th>
                  <th>student Name</th>
                  <th>Select Student</th>
                  
                  <th>Update By</th>
                  <th>Date</th>
                </tr>
                </thead>
				
				<tbody id="example2">
				
		        </tbody>
				
                </table>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
				
		  <div class="col-md-12">
		        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
@include('common.footer')

<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
