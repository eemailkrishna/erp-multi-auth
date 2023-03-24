<script type="text/javascript">
   function fill_detail(value){
           
			$.ajax({
			  address: "POST",
              url: "ajax_search_student_box.php?id="+value+"",
              cache: false,
              success: function(detail){
			  //alert_new(detail);
                 var str =detail;
		  var res = str.split("|?|");
		 $("#student_roll_no").val(value); 
		  $("#student_name").val(res[0]); 
		  $("#student_class").val(res[1]); 
          $("#student_section").val(res[2]);  
        
      
              }
           });

    }
    
 	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"leave/edit_leave_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			//$('#student_name_company').html(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('leave/leave_list');
            }
			}
         });
      });
</script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Leave Management      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
	   <li><a href="javascript:get_content('leave/leave')"><i class="fa fa-umbrella"></i> Leave Management</a></li>
        <li><a href="javascript:get_content('leave/leave_list')"><i class="fa fa-list"></i> Leave List</a></li>
		<li class="active"><i class="fa fa-edit"></i> Leave Edit</li>
      </ol>
    </section>

	
	
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Leave Edit</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
						<form role="form" id="my_form" method="post" enctype="multipart/form-data">
			
			
			
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>student Name</label>
						   <input type="text"  name="student_name" placeholder="Student Name"  id="student_name" class="form-control" value="aashish xyz " readonly>
						    <input type="hidden"  name="s_no1"  id="s_no1" class="form-control" value="208" readonly>
						</div>
							</div>
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Class</label>
						   <input type="text"  name="student_class" placeholder="Student Class"  id="student_class" class="form-control" value="NURSERY" readonly>
						
						</div>
							</div>
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Student Section</label>
						   <input type="text"  name="student_section" placeholder="Student Section"  id="student_section" class="form-control" value="A" readonly>
						  
						</div>
							</div>
							<div class="col-md-4 ">	
					<div class="form-group" >
					  <label>Student Roll No</label>
					  <input type="text"  name="student_roll_no" placeholder="student Roll No."  id="student_roll_no" class="form-control" value="2200881" readonly>
					</div>
				  </div>
				  
				<div class="col-md-4 ">	
					<div class="form-group" >
					  <label>Leave From </label>
					  <input type="date"  name="leave_from_date" placeholder="Enter start date"  value="2022-07-16" class="form-control">
					</div>
				  </div>
				<div class="col-md-4 ">	
					<div class="form-group" >
					  <label>Leave To</label>
					  <input type="date"  name="leave_to_date" placeholder="Enter last date"  value="2022-07-16" class="form-control">
					</div>
				  </div>
				  <div class="col-md-4 ">	
					<div class="form-group" >
					  <label>Approved By</label>
					  <input type="text"  name="leave_approved_by" placeholder="Enter approved by"  value="" class="form-control">
					</div>
				  </div>
				  
				  <div class="col-md-3 ">	
					<div class="form-group" >
				  <label>Upload Application</label>
					   <input type="file"  name="leave_application" id= "leave_application" onchange="check_file_type(this,'leave_application','show_application','all');"class="form-control" accept=".gif, .jpg, .jpeg, .png, .pdf, .doc"/>
		
					</div>
				  </div>
				<div class="col-md-1">	
					<div class="form-group" >
					  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/leave_document/100_160720220806pm.jpg" id="show_application" height="50" width="50">
			        </div>
				</div>
				  
				  <div class="col-md-4 ">	
					<div class="form-group" >
					  <label>Total leave days</label>
					  <input type="text"  name="leave_total_day" placeholder="Enter total no of day"  value="" class="form-control">
					</div>
				  </div>
				  <div class="col-md-12">
				<center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
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

	<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>