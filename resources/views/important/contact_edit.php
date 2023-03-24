<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"important/contact_edit_api.php",
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
				   get_content('important/contact_info_list');
            }
			}
         });
      });
</script>
    <section class="content-header">
      <h1>
        Edit Contact Info
      </h1>
      <ol class="breadcrumb">
                 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('important/important')"><i class="fa fa-check-square"></i>Important</a></li>
		<li><a>Edit Contact Info</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-warning  ">
            <div class="box-header with-border ">
              <h3 class="box-title">Contact Info Form Edit</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
		
            <div class="box-body "  >
			<form role="form" method="post" enctype="multipart/form-data" id="my_form">
			  <input type="hidden"  name="s_no1"  value="2" >
			 <div class="col-md-4 ">
				  <div class="form-group">
					 <label>Name<font style="color:red"><b>*</b></font></label>
						 <input type="text"  name="name"  placeholder="Name" value="trtyjty" class="form-control" required>
				   </div>
			  </div>
			  
			 <div class="col-md-4 ">
				  <div class="form-group">
					 <label>Contact No<font style="color:red"><b>*</b></font></label>
						 <input type="text"  name="contact_no" placeholder="Contact No" value="5498598745" class="form-control" required>
				   </div>
			  </div>
			  
			  <div class="col-md-4 ">
				  <div class="form-group">
					 <label>Address<font style="color:red"><b>*</b></font></label>
						 <input type="text"  name="address" placeholder="Address" value="kolar road bhopal" class="form-control" required>
				   </div>
			  </div>
			  
			   <div class="col-md-4 ">
				  <div class="form-group">
					 <label>Remark</label>
						 <input type="text"  name="remark" placeholder="Remark" value="seller" class="form-control" >
				   </div>
			  </div>
				 

				<div class="col-md-12">
		        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
		  </div>
	</div>
		</form>	

          </div>
    </div>
</section>
