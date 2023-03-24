<script type="text/javascript">
      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"certificate/character_certificate_form_edit_api.php",
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
				   get_content('certificate/character_certificate_list');
            }
			}
         });
      });
</script>   
    <section class="content-header">
      <h1>
          Certificate Management		<small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('certificate/certificate')"><i class="fa fa-certificate"></i> Certificate</a></li>
        <li><a href="javascript:get_content('certificate/character_certificate_list')">CC List</a></li>
        <li class="active">Character Certificate Edit</li>
      </ol>
    </section>

	
	
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Character Certificate Edit</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
		
				
		
            <div class="box-body "  >
			
			<form role="form" method="post" enctype="multipart/form-data" id="my_form">
			 <input type="hidden"  name="s_no"  value="783" >
			
			          <div class="col-md-3 ">
						<div class="form-group">
						  <label>student Name</label>
						   <input type="text"  name="character_student_name"  value="Umesh" placeholder="Student Name"   id="student_name" class="form-control" readonly>
					       </div>
					  </div>
					  
					  <div class="col-md-3 ">
						<div class="form-group">
						  <label>Father's Name</label>
						   <input type="text"  name="character_student_name"  value="Rajesh" placeholder="Student Name"   id="student_name" class="form-control" readonly>
					       </div>
					  </div>
			
					  <div class="col-md-3 ">	
					      <div class="form-group" >
						  <label>Student Roll No</label>
						  <input type="text" name="character_student_roll_no"  value="2000298" placeholder="student Roll No."  id="school_roll_no" class="form-control" readonly>
					      </div>
				      </div>
					  
					  <div class="col-md-3 ">	
					      <div class="form-group" >
						  <label>School Name</label>
						  <input type="text" name="character_school_name"  value="SIMPTION TECH PVT LTD" placeholder="student Roll No."  id="school_roll_no" class="form-control">
					      </div>
				      </div>
				      
					  <div class="col-md-3 ">	
					    <div class="form-group">
						<label>During Year</label>
						<div class="col-sm-12">
						 <div class="col-sm-6">
						
						   <input type="text" name="character_current_year_from"  class="form-control" placeholder="From" value="1"  />
						   </div>
						  
						   <div class="col-sm-6">
						 
						   	<input type="text" class="form-control" name="character_current_year_to" placeholder="To" value="2" /><br/>
                          </div>
					   </div>
					</div>
				     </div>
					  
				     <div class="col-md-3 ">	
						<div class="form-group" >
						 <label> Character Type</label>
						  <input type="text"  name="character_type" placeholder="character Type"  value="super" class="form-control">
						</div>
					  </div>
				 
					  <div class="col-md-3 ">	
						<div class="form-group" >
						 <label>Issued Date</label>
						  <input type="date"  name="character_issue_date" id="date_of_school_leaving" placeholder="Organized  Date"  value="2022-12-15" class="form-control">
						</div>
					  </div>
				 
					  <div class="col-md-12">
					   <br/><center><input type="submit" name="submit" value="Submit" class="btn btn-success" /></center><br/>
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

  