@include('common.header');
@include('common.navbar');
<script type="text/javascript">
function for_list(){ 

var student_class_section=document.getElementById('student_class_section').value;
var roll_no_generate_by=document.getElementById('roll_no_generate_by').value;
var student_class=document.getElementById('student_class').value;
var start_number=document.getElementById('start_number').value;
var student_class_stream=document.getElementById('student_class_stream').value;
var student_admission_type=document.getElementById('student_admission_type').value;
var order_by=document.getElementById('order_by').value;

$('#my_table').html(loader_div);
$.ajax({
  type: "POST",
  url: access_link+"student/ajax_student_roll_no.php?id="+student_class+"&student_section="+student_class_section+"&roll_no_generate_by="+roll_no_generate_by+"&start_number="+start_number+"&student_class_stream="+student_class_stream+"&student_admission_type="+student_admission_type+"&order_by="+order_by+"",
  cache: false,
  success: function(detail){
      //alert(detail);
	$('#my_table').html(detail);

  }
});

}

function for_section(value){
     $('#student_class_section').html("<option>Loading....</option>"); 
$.ajax({
	  type: "POST",
	  url:  access_link+"student/ajax_class_section_for_roll.php?class_name="+value+"",
	  cache: false,
	  success: function(detail){
		  $("#student_class_section").html(detail);
		  for_list();
	  }
   });
}
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
 window.scrollTo(0, 0);
     $("#get_content").html(loader_div);
        $.ajax({
            url: access_link+"student/student_roll_no_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert('Successfully Complete');
				   get_content('student/student_roll_no');
            }
			}
         });
      });
</script>
    <section class="content-header">
      <h1>
         Student Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
	  <li class="active">Student Roll No</li>
      </ol>
    </section>
	<!---****************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Student Roll No</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body "  >
			<form role="form"  method="post" enctype="multipart/form-data" id="my_form">
			    <div class="col-md-3">	
					<div class="form-group" >
					    <label>Enter No. (<small>where RollNo. You are Start</small>)</label>
					    <input type="number" name="start_number" id="start_number" oninput='for_list();' class="form-control" />
					</div>
				</div>
				<div class="col-md-3">	
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
				
				<div class="col-md-3">				
					<div class="form-group">
					  <label>Class Stream</label>
					    <select class="form-control" name="student_class_stream" onchange='for_list();' id="student_class_stream" style="width:100%;" onchange="for_search11();">
					           <option value="All">All</option>
						       								<option value="SCIENCE">SCIENCE</option>
																<option value="ARTS">ARTS</option>
																<option value="Commerce ">Commerce </option>
													    </select>
					</div>
				</div>
				
				
				<div class="col-md-3">	
					<div class="form-group" >
					    <label>Section</label>
					    <select class="form-control" name="student_class_section" onchange='for_list();' id="student_class_section" >
						<option value="All">All</option>
					    </select>
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group" >
					    <label>Roll No. Genearate By</label>
					    <select class="form-control" name="roll_no_generate_by" onchange='for_list();' id="roll_no_generate_by" >
						<option value="Automatic">Automatic</option>
						<option value="Mannual">Mannual</option>
					    </select>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
					  <label>Admission Type</label>
					    <select class="form-control" name="student_admission_type" onchange='for_list();' id="student_admission_type">
						<option value="All">All</option>
						<option value="Regular">Regular</option>
						<option value="Private">Private</option>
						</select>
					</div>
				</div>
				
				<div class="col-md-3">	
					<div class="form-group" >
					    <label>Order By</label>
					    <select class="form-control" name="order_by" onchange='for_list();' id="order_by" >
						<option value=" ORDER BY student_name ASC">Student Name</option>
						<option value=" ORDER BY CAST(student_admission_number AS UNSIGNED) ASC">Student Admission Number</option>
					    </select>
					</div>
				</div>
				
				
				
				<div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" id="my_table">
                
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
		  <div class="col-md-12">
		        <center><input type="submit" name="finish" value="Submit" class="btn  my_background_color" /></center>
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
@include('common.footer');
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>