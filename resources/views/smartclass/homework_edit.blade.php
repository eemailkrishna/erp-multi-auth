<script type="text/javascript">
    	
    function for_section(value){
       $('#student_class_section').html("<option value='' >Loading....</option>");
        if(value!=''){
       $.ajax({
			  type: "POST",
              url: access_link+"important_ajax/get_section_all.php?class_name="+value+"",
              cache: false,
              success: function(detail){
                  $("#student_class_section").html(detail);
              }
           });
        } else {
            $("#student_class_section").html("<option value=''>Select</option>");
        }

    }
</script>

<script type="text/javascript">

    
    
    	$("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    $("#get_content").html(loader_div);
        $.ajax({
            url: access_link+"smartclass/homework_edit_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Homework Successfully Updated!!!','green');
				   get_content('smartclass/homework_list');
            }else{
                  alert_new('Sorry!!! Some error occured','red');
            }
			}
         });
      });
      		
				function for_subject(){
			       $('#subject_name').html("<option value='' >Loading....</option>");
			var student_class_stream= document.getElementById('student_class_stream').value;
			var student_class_group= document.getElementById('student_class_group').value;
			var student_class= document.getElementById('class_name').value;

			$.ajax({
			address: "POST",
			url: access_link+"important_ajax/get_subject_all.php?class_name="+student_class+"&class_stream="+student_class_stream+"&class_group="+student_class_group+"",
			cache: false,
			success: function(detail){
			 $("#subject_name").html(detail);
		
			}
			});
			}
				function for_stream(value2){
		   if(value2=="11TH" || value2=="12TH"){
$("#student_class_stream_div").show();
$("#student_class_group_div").show();
$("#student_class_stream").attr('required',true);
$("#student_class_group").attr('required',true);
}else{
$("#student_class_stream_div").hide();
$("#student_class_group_div").hide();
$("#student_class_stream").attr('required',false);
$("#student_class_group").attr('required',false);
}
}
     function get_group(value1){
 $('#student_class_group').html("<option value='' >Loading....</option>");
       $.ajax({
			  type: "POST",
             url:  access_link+"important_ajax/get_group_all.php?stream_name="+value1+"",
              cache: false,
              success: function(detail1){			   
                  $("#student_class_group").html(detail1);
              }
           });

    }
</script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Homework Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('smartclass/smartclass')"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="javascript:get_content('smartclass/homework')"><i class="fa fa-book"></i> Homework</a></li>
        <li><a href="javascript:get_content('smartclass/homework_list')"><i class="fa fa-list"></i>  Homework List</a></li>
		<li class="active"><i class="fa fa-edit"></i>   Homework Edit</li>
      </ol>
    </section>

    <section class="content">
       <form role="form" method="post" enctype="multipart/form-data" id="my_form">
           <input type='hidden' name='edit_id' value="912">
  <div class="box box-success ">
				<div class="box-header with-border">
					<h3 class="box-title" style="color:teal;">Homework Edit</h3>
				</div>
				<br>
<div class="box-body">

			   <div class="col-md-12 ">				
			   <div class="col-md-3 ">				
			  <div class="form-group" >
				 <label >Class</label>
				 <select class="form-control" onchange="for_section(this.value);for_subject();for_stream(this.value)" id="class_name" name="homework_class" value="">
				 <option value=""></option>
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
				<div class="col-md-3 " id="student_class_stream_div" style="display:none;"  >				
					<div class="form-group">
					  <label >Stream<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="student_class_stream" id="student_class_stream" onchange="get_group(this.value);for_subject();" >
					        	<option value=""></option>
					       
						       						       <option value="SCIENCE">SCIENCE</option>
					           						       <option value="ARTS">ARTS</option>
					           						       <option value="Commerce ">Commerce </option>
					           					    </select>
					
					</div>
		</div>
		<div class="col-md-3" id="student_class_group_div" style="display:none;"  >				
					<div class="form-group">
					  <label >Group<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="student_class_group" id="student_class_group" onchange="for_subject();" >
					        	<option value=""></option>
					         
					    </select>
					  </select>
					</div>
				</div>
				<div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Section</label>
					    <select class="form-control" name="homework_section" id="student_class_section">
						<option value=""></option>
					    </select>
					</div>
				</div>
								<div class="col-md-3 ">				
			    <div class="form-group" >
				 <label >Subject Name<font style="color:red"><b>*</b></font></label>
				 <select class="form-control" name="subject_name" id="subject_name"  required>
				     	<option value="All">All</option>
				 <option value="">Select Subject</option>
				 </select>
				 </div>
				 </div>
			  <div class="col-md-3 ">	
				<div class="form-group" >
				<label>Date</label>
			    <input type="date" value="05-12-2022" name="homework_date" id="myLocalDate" class="form-control" required>
				 </div>
			  </div>
			  			    <div class="col-md-3">	
					<div class="form-group">
					  <label>Home Work Image</label>
					  <input type="file" name="homework_file" id="homework_file" placeholder="" onchange="check_file_type(this,'homework_file','show_homework_file','all');" class="form-control" accept=".gif, .jpg, .jpeg, .png, .pdf, .doc" value="">
					</div>
				</div>
							  <div class="col-md-3 ">		
				<div class="form-group">
				<label>Remark</label>
				<input type="text" name="homework_remark" placeholder="Write Remark"  value="" class="form-control" required>
				</div>
			  </div>
			  </div>
			  </div>
			  </div>
			  	<br>
              <div class="box box-success ">
              <div class="box-header with-border ">
              <h3 class="box-title"><b>Write Homework Here<font style="color:red"><b>*</b></font></b>
              </h3>
              
            </div>
            <div class="box-body">
         
			<div class="col-md-12">	
					<div class="form-group">
					  
  <textarea id="" name="homework" class="form-control" placeholder="write homework"required rows="6"></textarea>
					</div>
				</div>
		          <div class="col-md-12">
		          <center><input type="submit" name="submit" value="Update" class="btn btn-success" /></center>
		          </div>
		          </form>
	                 </div>

          </div>
    </div>
</section>

