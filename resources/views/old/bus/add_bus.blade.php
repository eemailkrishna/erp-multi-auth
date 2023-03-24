@include('common.header')
@include('common.navbar')

<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"bus/add_bus_api.php",
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
				   get_content('bus/bus_list');
            }
			}
         });
      });
</script>

    <section class="content-header">
      <h1>
        Bus Management
		    <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li class="active">Add Details Bus</li>
      </ol>
    </section>
	@if(session('message'))
	<div class="alert alert-success">
	  {{session('message')}}
	 @endif
	
	 @if(session('error'))
	<div class="alert alert-success">
	  {{session('error')}}
	 @endif
	
	
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Add Bus Details From</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body "  >
			<form action="{{url('add-bus-detail')}}" method="post" enctype="multipart/form-data" id="my_form">
			@csrf
			      <div class="col-md-4 ">
						<div class="form-group">
						  <label>Bus Name <font style="color:red"><b>*</b></font></label>
						   <input type="text"  name="bus_name" placeholder="Name"    class="form-control" required>
						</div>
				   </div>
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus Company<font style="color:red"><b>*</b></font></label>
						   <input type="text" name="bus_company" placeholder="Company Name"    class="form-control" required>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
						  <label>Bus Model No.<font style="color:red"><b>*</b></font></label>
						   <input type="text"  name="bus_model_no"  placeholder="Bus Model No."    class="form-control" required>
						</div>
					</div>
				    <div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus No.<font style="color:red"><b>*</b></font></label>
						   <input type="text" name="bus_no" placeholder="Bus No."    class="form-control" required>
						</div>
					</div>
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus Owner Name<font style="color:red"><b>*</b></font></label>
						   <input type="text" name="bus_owner_name" placeholder="Bus Owner Name"    class="form-control" required>
						</div>
					</div>
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus Owner Contact No<font style="color:red"><b>*</b></font></label>
						   <input type="text" name="bus_owner_contact" placeholder="Contact No"    class="form-control" required>
						</div>
					</div>
					
				    <div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus Registration No.<font style="color:red"><b>*</b></font></label>
						   <input type="text" name="bus_registration_no" placeholder="Registration No."    class="form-control" required>
						</div>
					</div>
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Capacity Of Bus<font style="color:red"><b>*</b></font></label>
						   <input type="text" name="bus_capacity" placeholder="Capacity Of Bus"   class="form-control" required>
						</div>
					</div>	

				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Photo</label>
					  <input type="file" name="bus_photo" id="bus_photo" placeholder="" onchange="check_file_type(this,'bus_photo','show_bus_photo','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png" >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_photo" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>					
							<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Registration Card</label>
					  <input type="file" name="bus_registration_card_photo" id="bus_registration" placeholder="" onchange="check_file_type(this,'bus_registration','show_bus_registration','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_registration" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>				
				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Insurance</label>
					  <input type="file" name="bus_insurance_photo" id="bus_insurance" placeholder="" onchange="check_file_type(this,'bus_insurance','show_bus_insurance','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_insurance" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>					
				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Other Document</label>
					  <input type="file" name="bus_other_document_photo" id="bus_other_document" placeholder="" onchange="check_file_type(this,'bus_other_document','show_bus_document_uplode','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_document_uplode" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>
				
				
				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Pollution Certificate</label>
					  <input type="file" name="bus_pollution_certificate_photo" id="bus_pollution_certificate" placeholder="" onchange="check_file_type(this,'bus_pollution_certificate','show_bus_pollution_certificate','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_pollution_certificate" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Fitness Certificate</label>
					  <input type="file" name="bus_fitness_certicate_photo" id="bus_fitness_certificate" placeholder="" onchange="check_file_type(this,'bus_fitness_certificate','show_bus_fitness_certificate','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_fitness_certificate" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Permit Certificate</label>
					  <input type="file" name="bus_permit_certificate_photo" id="bus_permit_certificate" placeholder="" onchange="check_file_type(this,'bus_permit_certificate','show_bus_permit_certificate','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_permit_certificate" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Speed Certificate</label>
					  <input type="file" name="bus_speed_certificate_photo" id="bus_speed_certificate" placeholder="" onchange="check_file_type(this,'bus_speed_certificate','show_bus_speed_certificate','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_speed_certificate" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus GPS Certificate</label>
					  <input type="file" name="bus_gps_certificate_photo" id="bus_gps_certificate" placeholder="" onchange="check_file_type(this,'bus_gps_certificate','show_bus_gps_certificate','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_gps_certificate" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group">
			   <label>Bus Camera Certificate</label>
					  <input type="file" name="bus_camera_certificate_photo" id="bus_camera_certificate" placeholder="" onchange="check_file_type(this,'bus_camera_certificate','show_bus_camera_certificate','image');" class="form-control" accept=".gif, .jpg, .jpeg, .png"  >
					</div>
				</div>
				<div class="col-md-1">	
					<div class="form-group">
					   <img id="show_bus_camera_certificate" src='../school_software_v1_old/images/student_blank.png' width='60px' height='60px'>
					</div>
				</div>
				
		
		<div class="col-md-12">
		   <center><input type="submit" name="submit" value="submit" class="btn btn-primary" /></center>
		   </div>
		   </form>	
	       </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
  @include('common.footer')

