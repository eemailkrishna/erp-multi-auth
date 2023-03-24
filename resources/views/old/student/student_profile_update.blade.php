@include('common.header')
@include('common.navbar')
  <script type="text/javascript">
   function for_section(value){
  $('#student_class_section').html("<option value='' >Loading....</option>"); 
       $.ajax({
			  type: "POST",
              url:  access_link+"student/ajax_class_section_all.php?class_name="+value+"",
              cache: false,
              success: function($detail){
                   var str =$detail;                
                 
                  $("#student_class_section").html(str);
				  for_search11();
				  
              }
           });

    }

function for_search11(){
var student_class=document.getElementById('student_class').value;
var student_class_section=document.getElementById('student_class_section').value;
var student_class_stream=document.getElementById('student_class_stream').value;
var student_fee_category_code=document.getElementById('student_fee_category_code').value;
var student_limit=document.getElementById('student_limit').value;
if(student_class!='' || student_class_section!=''){
$('#for_student_list').html(loader_div);
$.ajax({
type: "POST",
url: access_link+"student/ajax_student_profile_update.php?student_class="+student_class+"&student_class_section="+student_class_section+"&student_class_stream="+student_class_stream+"&student_fee_category_code="+student_fee_category_code+"&student_limit="+student_limit+"",
success: function(detail){
$('#for_student_list').html(detail);
  }
});

}else{
$('#for_student_list').html('');
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
   
   function validation(){
   var add=0;
   $(".checked1").each(function() {
	if($(this).prop("checked") == true){
	add=add+1;
	}
	});
    if(add>0){
	return true;
	}else{
	alert_new("Please Select Atleast One Student !!!","red");
	return false;
	}
   }
   
function for_route(ser_no){
    var student_bus=document.getElementById('student_bus_'+ser_no).value;
    $('#student_bus_route_'+ser_no).html("<option value=''>Loading.....</option>");
    if(student_bus=='Yes'){
        $.ajax({
        type: "POST",
        url: access_link+"student/ajax_get_student_bus_route_list.php",
        success: function(detail){
        $('#student_bus_route_'+ser_no).html(detail);
        }
        });
    }else{
        $("#student_bus_route_"+ser_no).html("<option value=''>Select</option>");
    }
}

function for_stop(ser_no){
    var student_bus_route=document.getElementById('student_bus_route_'+ser_no).value;
    $('#bus_fee_category_name_'+ser_no).html("<option value=''>Loading.....</option>");
    if(student_bus_route!=''){
        $.ajax({
        type: "POST",
        url: access_link+"student/ajax_get_student_bus_stop_list.php",
        success: function(detail){
        $('#bus_fee_category_name_'+ser_no).html(detail);
        }
        });
    }else{
        $("#bus_fee_category_name_"+ser_no).html("<option value=''>Select</option>");
    }
}

function for_no(ser_no){
    var student_bus_route=document.getElementById('student_bus_route_'+ser_no).value;
    var bus_fee_category_name=document.getElementById('bus_fee_category_name_'+ser_no).value;
    if(student_bus_route!='' && bus_fee_category_name!=''){
        var category_name=bus_fee_category_name.split('|?|');
        $.ajax({
        type: "POST",
        url: access_link+"student/ajax_get_student_bus_no_list.php?stop_name="+category_name[0]+"&student_bus_route="+student_bus_route+"",
        success: function(detail){
        $('#student_bus_no_'+ser_no).val(detail);
        }
        });
    }else{
        $("#student_bus_no_"+ser_no).val("");
    }
}
   
   	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
 window.scrollTo(0, 0);
     $("#get_content").html(loader_div);
        $.ajax({
            url: access_link+"student/student_profile_update_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete',"green");
				   get_content('student/student_profile_update');
            }
			}
         });
      });
	</script>

  
  
  
 <form role="form"  method="post" enctype="multipart/form-data" id="my_form">

    <section class="content-header">
      <h1>
        Student Profile Update
		<small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
        <li class="active">Student Profile Update</li>
      </ol>
    </section>
	<!---*****************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
			  <div class="box-body table-responsive">
              <div class="col-md-12">&nbsp;</div>
              <div class="col-md-12">
			  
              <div class="col-md-1"></div>
              <div class="col-md-10">
			  <div class="container-fluid">
			  
			  <div class="panel panel-default">
			  <div class="panel-body">
			   
				<div class="col-md-3">
				<label>Class</label>
				        <select name="student_class" onchange="for_section(this.value);" id="student_class" class="form-control"><option value="">Select Class</option>
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
				
				<div class="col-md-3">				
					<div class="form-group">
					  <label>Class Stream</label>
					    <select class="form-control select2" name="" id="student_class_stream" style="width:100%;" onchange="for_search11();">
					           <option value="All">All</option>
						       								<option value="SCIENCE">SCIENCE</option>
																<option value="ARTS">ARTS</option>
																<option value="Commerce ">Commerce </option>
													    </select>
					</div>
				</div>
				
				<div class="col-md-2">
				<label>Section</label>
				<select name="student_class_section" id="student_class_section" style="width:100%;" class="form-control" onchange="for_search11();">
				<option value="">Select</option>
				</select>
				</div>
				
				<div class="col-md-2">
                    <div class="form-group">
                        <label>Fee Category</label>
                        <select class="form-control" name="student_fee_category_code" id="student_fee_category_code" onchange="for_search11();">
                        <option value="All">All</option></option>
                                                
                        <option value="category1">Non- RTE</option>
                                                
                        <option value="category2">New </option>
                                                
                        <option value="category3">Oid </option>
                                                
                        <option value="category4">Science</option>
                                                
                        <option value="category5">RTE</option>
                                                
                        <option value="category6">sibling</option>
                                                </select>
                    </div>
                </div>
				
				<div class="col-md-2">
				<label>Limit</label>
				<select name="student_limit" id="student_limit" class="form-control" onchange="for_search11();">
				<option value="0">0-20</option>
				<option value="20">20-40</option>
				<option value="40">40-60</option>
				<option value="60">60-80</option>
				<option value="80">80-100</option>
				<option value="100">100-120</option>
				<option value="120">120-140</option>
				<option value="140">140-160</option>
				<option value="160">160-180</option>
				<option value="180">180-200</option>
				<option value="200">200-220</option>
				<option value="220">220-240</option>
				<option value="240">240-260</option>
				<option value="260">260-280</option>
				</select>
				</div>
				
			  </div>
			  </div>
			  </div>
			  </div>
			  <div class="col-md-1"></div>

        </div>
        <!-- /.col -->
      </div>
		  <div id="for_student_list" class="table-responsive">

  </div>
			</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
           </div>
     </div>
     </section>
  </form>
  @include('common.footer')
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>