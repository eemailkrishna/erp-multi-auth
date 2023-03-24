@include('common.header');
@include('common.navbar');
<script type="text/javascript">
   function for_list(){
			var student_class_section= document.getElementById('student_class_section').value;
			var student_class=document.getElementById('student_class').value;
			if(student_class!='' && student_class_section!=''){
			    $('#example2').html(loader_div); 
		$.ajax({
			  type: "POST",
              url: access_link+"student/ajax_rfid_get.php?id="+student_class+"&student_section="+student_class_section+"",
              cache: false,
              success: function(detail){
            $('#example2').html(detail);
              }
           });
	  }
    }  
    function rfid_remove(id){
		$.ajax({
			  type: "POST",
              url: access_link+"student/rfid_card_remove.php?id="+id,
              cache: false,
              success: function(detail){
           alert_new("Successfully Removed..","green");
            for_list();
              }
           });
	  
    }
</script>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
	  <li class="active">Student RFID Card</li>
      </ol>
    </section>
	
	<script type="text/javascript">
   function for_section(value){
        $('#student_class_section').html("<option value='' >Loading....</option>"); 
       $.ajax({
			  type: "POST",
              url: access_link+"student/ajax_class_section_all.php?class_name="+value+"",
              cache: false,
              success: function(detail){
                  $("#student_class_section").html(detail);
                  for_list();
              }
           });
    }
	
    $("#my_form").submit(function(e){
        e.preventDefault();
 $('#modal-default').modal('hide');
		var student_class_section= document.getElementById('student_class_section').value;
		var student_class=document.getElementById('student_class').value;
		var data12="class="+student_class+"&section="+student_class_section;
    var formdata = new FormData(this);
    
        $.ajax({
            url: access_link+"student/rfid_card_generate_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
               var res=detail.split("|?|");
				   alert_new(res[1],res[2]);
				      $("#student_rf_id_number").val("");
				  for_list();
            
			}
         });
      });
</script>
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Assign RFID</h3>
            </div>
   
            <div class="box-body">
			<form role="form" method="post" enctype="multipart/form-data" id="my_form">
			    <div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Class</label>
				        <select name="student_class" onchange="for_section(this.value);" id="student_class" class="form-control" required>
						       <option value="">Select Class</option>
						       <option value="all">All</option>
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
					<div class="form-group" >
					    <label>Section</label>
					    <select class="form-control" name="student_class_section" onchange='for_list();' id="student_class_section" >
						<option value="">Select</option>
					    </select>
					</div>
				</div>
				
				<div class="col-md-12">
                <!-- /.box -->

                <div <div class="box box-success" >
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" id="example2">
                <table  class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th>S.no.</th>
				  <th>Admission No.</th>
                  <th>student Name</th>
                  <th>Father's Name</th>
                  <th>Roll.No.</th>
				  <th>Class</th>
				  <th>Section</th>
				  <th>Rfid No.</th>
                  <th>Action</th>
                  <th>Remove</th>
                </tr>
                </thead>
				<tbody >
		        </tbody>
                </table>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
				 <!-- modal-box-open -->
			         		<form role="form"  method="post" enctype="multipart/form-data">
	                         <div class="modal fade" id="modal-default">
							 <div class="modal-dialog">
							 <div class="modal-content">
							 <div class="modal-header my_background_color">
							 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							 <span aria-hidden="true">&times;</span></button>
							 <center><h4 class="modal-title"><b>ADD RFID CARD NO</b></h4></center>
							 </div>
							 <div class="modal-body">
									 
						     <div class="form-group">
						     <label>student Name<font style="color:red"><b>*</b></font></label>
						     <input type="text" class="form-control" name="student_name" id="student_name"  readonly />
						     </div>
					         <div class="form-group" style="display:none">
					         <label>Roll.No.</label>
					         <input type="hidden" class="form-control" name="student_roll_no" id="student_roll_no1"  readonly>
							 </div>
							 <div class="form-group">
						     <label>Add RFID</label>
						     <input type="text" name="student_rf_id_number"  id="student_rf_id_number" autofocus class="form-control"  />
						     </div>
							 </div>
							 <div class="modal-footer ">
							 <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
							 <input type="submit" name="submit" value="Submit" class="btn btn-primary" >
							 </div>
							 </div>
							 </div>
							 </div>
					      </form>			
			              <!-- modal-box-end -->
		  <div class="col-md-12" style="display:none">
		        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
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
	function open_model(roll_no){
	var student=document.getElementById("student_name_"+roll_no).value;
	document.getElementById("student_name").value=student;
	document.getElementById("student_roll_no1").value=roll_no;
	}
</script>
