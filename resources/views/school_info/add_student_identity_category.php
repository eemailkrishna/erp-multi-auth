<script>

    $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"school_info/add_student_identity_category_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete!!!','green');
				   get_content('school_info/add_student_identity_category');
            }
			}
         });
      });
</script>
     <section class="content-header">
      <h1>
        School Information Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('school_info/school_info')"><i class="fa fa-graduation-cap"></i> School Info</a></li>
	  <li class="active">Student Identity Ctegory</li>
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
              <h3 class="box-title">Add Class</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
			<form role="form"  method="post" enctype="multipart/form-data" id="my_form">
		        
				
				<div class="col-md-6 box-body table-responsive">
                <table id="table-data" class="table table-bordered table-striped">

                    <thead >
                    <tr>
                    <th>Identity Category Name</th>
				    <th>Add Category Group</th>
                    </tr>
                    </thead>
				    <tbody>
					<tr >
					<td>
					<input type="text" name="identity_category_name" value="" placeholder="Category Group Name" class="form-control">
					</td>
					<td>
					<input type="submit" name="add_section" value="Add Group" class="btn btn-success" />
					</td>

					</tr>
					
					</tbody>
				
                </table>
                </div>
			
				<div class="col-md-6 box-body table-responsive">
                <table id="table-data" class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th>S.no.</th>
                  <th>Identity Category Name</th>
				  <th>Delete Category</th>
                </tr>
                </thead>
                <tbody>
								
				<tr align='center'>
				<th>1</th>
				<th>LLB-3 YEARS</th>
				<th><a href="javascript:post_content('school_info/student_identity_category_delete','id=13')" ><button type="button" class="btn btn-success">Delete</th>
                </tr>
								
				<tr align='center'>
				<th>2</th>
				<th></th>
				<th><a href="javascript:post_content('school_info/student_identity_category_delete','id=14')" ><button type="button" class="btn btn-success">Delete</th>
                </tr>
								
				<tr align='center'>
				<th>3</th>
				<th></th>
				<th><a href="javascript:post_content('school_info/student_identity_category_delete','id=15')" ><button type="button" class="btn btn-success">Delete</th>
                </tr>
								
				<tr align='center'>
				<th>4</th>
				<th>krishna  bhardwaj </th>
				<th><a href="javascript:post_content('school_info/student_identity_category_delete','id=16')" ><button type="button" class="btn btn-success">Delete</th>
                </tr>
								</tbody>
				
                </table>
                </div>
			    </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

  