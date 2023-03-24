
<script>
function for_total(serial){
	var add = 0;
	$('.fee1_'+serial).each(function() {
	add += Number($(this).val());
	});
	$('#total_amount_'+serial).val(add);
}

function for_section(value){
   $('#student_class_section').html("<option value='' >Loading....</option>");
   $.ajax({
		  type: "POST",
		  url: access_link+"fees_monthly/ajax_classwise_section_all.php?class_name="+value+"",
		  cache: false,
		  success: function(detail){
			$("#student_class_section").html(detail);
			for_feedetails();
		  }
	   });
}

function for_feedetails(){
    $("#student_fee_details").html(loader_div);
   var class_name=document.getElementById('student_class').value;
   var student_class_stream=document.getElementById('student_class_stream').value;
   var student_class_section=document.getElementById('student_class_section').value;
   if(class_name!='' && student_class_stream!='' && student_class_section!=''){
   $.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_set_classwise_transport_fee_details.php?class_name="+class_name+"&student_class_stream="+student_class_stream+"&student_class_section="+student_class_section+"",
	  cache: false,
	  success: function(detail){
		$("#student_fee_details").html(detail);
	  }
   });
   }else{
	   $("#student_fee_details").html('');
   }
}

function for_check(id){
if($('#'+id).prop("checked") == true){
	$("."+id).each(function() {
	$(this).prop('checked',true);
	});
}else{
	$("."+id).each(function() {
	$(this).prop('checked',false);
	});
}
}

function validate(){
	var add1=0;
	$(".info").each(function() {
	if($(this).prop('checked')==true){
		add1 = parseInt(add1+1);
	}
	});
	if(add1>0){
		return true;
	}else{
		alert('Please Select Atleast One Student !!!');
		return false;
	}
}

$("#my_form").submit(function(e){
e.preventDefault();

var formdata = new FormData(this);
window.scrollTo(0, 0);
    get_content(loader_div);
$.ajax({
	url: access_link+"fees_monthly/set_classwise_transport_fee_details_api.php",
	type: "POST",
	data: formdata,
	mimeTypes:"multipart/form-data",
	contentType: false,
	cache: false,
	processData: false,
	success: function(detail){
	   // alert(detail);
	   // $("#student_fee_details").html(detail);
	   var res=detail.split("|?|");
	   if(res[1]=='success'){
		   alert('Successfully Complete');
		   get_content('fees_monthly/set_classwise_transport_fee_details');
	}
	}
 });
});
</script>

    <!-- Content Header (Page header) -->
      <section class="content-header">
      <h1>
        Fees Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	  <li class="active">Set Transport Fees</li>
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
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
			  <!---------------------------Start Admission form--------------------------------------->
        <!---------------------------Start Personal Details ------------------------------------->
			
		<form method="post" enctype="multipart/form-data" id="my_form">
		
            <div class="box-body">
            <div class="col-md-6 col-md-offset-3">
			    
				<div class="col-md-4">
						<div class="form-group">
						  <label>Select Class</label>
						   <select name="student_class" id="student_class" class="form-control" onchange="for_section(this.value);" required>
						   <option value="">Select</option>
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
				<div class="col-md-4">				
					<div class="form-group">
					  <label>Class Stream</label>
					    <select class="form-control select2" name="student_class_stream" id="student_class_stream" style="width:100%;" onchange="for_feedetails();">
					           <option value="All">All</option>
						       								<option value="SCIENCE">SCIENCE</option>
																<option value="ARTS">ARTS</option>
																<option value="Commerce ">Commerce </option>
													    </select>
					</div>
				</div>
				<div class="col-md-4">
						<div class="form-group">
						  <label>Section</label>
						  <select name="student_class_section" id="student_class_section" class="form-control" onchange="for_feedetails();" required>
						  <option value="All">All</option>
						  </select>
						</div>
				</div>
				
				<div class="col-md-12">
				<hr/>
				</div>
				
			</div>
			</div>
				   
		<!---------------------------Start Fees Details ----------------------------------------->
		    <div class="box-body">
		    <div class="col-md-12" id="student_fee_details" style="overflow-x: auto;">
            
			</div>
			<div class="box-body ">
			<div class="col-md-12">
			<center><input type="submit" name="finish" value="Save Fee" onclick="return validate();" class="btn  my_background_color" /></center>
			</div>
			</div>
			</div>
		<!---------------------------End Fees Details ----------------------------------------->		   
			</div>
              <!---------------------------End Document Upload ----------------------------------------->

    <!---------------------------------------------End Admission form------------------------->
		  <!-- /.box-body -->
         
		</form>	

    </div>
</section>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>