<script type="text/javascript">
      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"certificate/event_certificate_form_edit_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   get_content('certificate/event_certificate_list');
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
        <li><a href="javascript:get_content('certificate/event_certificate_list')"><i class="fa fa-certificate"></i> Event Certificate List</a></li>
      <li class="active">Edit Event Certificate Form</li> </ol>
    </section>

	
	
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title"> Edit Event Certificate Form</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
		
				
		
            <div class="box-body "  >
			
				<form role="form" method="post" enctype="multipart/form-data" id="my_form">
			 <input type="hidden"  name="s_no"  value="230" >
			
			
			          <div class="col-md-3 ">
						<div class="form-group">
						  <label>student Name</label>
						   <input type="text"  name="event_student_name"  value="Rajesh Prasad" placeholder="Student Name"   id="student_name" class="form-control" readonly>
					       </div>
					  </div>
			
					  <div class="col-md-3 ">	
					      <div class="form-group" >
						  <label>Student Roll No</label>
						  <input type="text" name="event_student_roll_no"  value="2000314" placeholder="student Roll No."  id="school_roll_no" class="form-control" readonly>
					      </div>
				      </div>
				  
				     <div class="col-md-3 ">	
						<div class="form-group" >
						 <label> Event Type</label>
						  <input type="text"  name="event_type" placeholder="event Type"  value="sports" class="form-control">
						</div>
					  </div>
				 
					  <div class="col-md-3 ">	
						<div class="form-group" >
						 <label>Organized Date</label>
						  <input type="date"  name="event_organized_date" id="date_of_school_leaving" placeholder="Organized  Date"  value="2022-12-31" class="form-control">
						</div>
					  </div>
				 
				      <div class="col-md-3 ">	
					    <div class="form-group" >
					    <label> Rank </label>
					     <input type="text"  name="event_rank" placeholder="Rank"  value="1" class="form-control">
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

 