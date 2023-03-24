 
	 <script type="text/javascript">


	 function form_submit(){
        $.ajax({
            type: "POST",
            url: access_link+"school_info/change_password_api.php",
           data: $("#my_form").serialize(), 
            success: function(detail){
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new("Password SuccessFully Changed Please Login Again!!! ","green");
				   window.open('index.php','_self');
            }else{
				alert_new("User Name Name Password Didnt Match!!!","red");
				 get_content('school_info/change_password');
			}
			}
         });
      }
</script>
    <section class="content-header">
      <h1>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
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
                <div class="col-md-4">
	</div>
			
            <div class="col-md-4 ">
	            <br><br><br>
				  <!-- /.login-logo -->
				<div class="login-box-body">
					<h4 class="login-box-msg"><b>Change Your Password</b></h4>

				<form  method="post" id="my_form" >
					<div class="form-group has-feedback">
					  <input type="text" name="user_name" required placeholder="User Name"  value="" class="form-control" >
					</div>
					
					<div class="form-group has-feedback">
					  <input type="text" name="old_password" required placeholder="Old Password"  value="" class="form-control" >
					</div>
								
					<div class="form-group has-feedback">
					   <input type="password" name="new_password" required placeholder="New Password"  value="" class="form-control" >
					</div>
					    <div class="row">
						<div class="col-md-4">						 					
						</div>
					
						<div class="col-md-4">
						  <button type="button" name="submit"  onclick="form_submit();" class="btn btn-primary btn-block btn-flat">Submit</button>
						</div>
						<div class="col-md-4">						 					
						</div>					
					    </div>
			    </form>
				</div>
            </div>
		<div class="col-md-4">
		</div>		
</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
  </div>
  </div>
</div>
</section>
  