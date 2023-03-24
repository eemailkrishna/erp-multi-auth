	<script>

                                function countChar(val) 
            {
	$.ajax({
			  address: "POST",
              url: access_link+"sms/ajax_detect_encoding.php?msg="+val+"",
              cache: false,
              success: function(str){
				var res = str.split("|?|");
				$("#count").html( 'Character Count:'+res[1]+' SMS Count:'+res[2]);     
              }
           });		   
            }  function get_template() 
            {
	$.ajax({
			  address: "POST",
              url: access_link+"sms/message_template.php?template_type=birthday",
              cache: false,
              success: function(str){
				$("#sms_template").html(str);     
              }
           });		   
            }
            get_template();
        </script>
	
	     
		  <!----------------------12th script------------------->
		 <script>
		function myContact(id2){
		var total_sms=0;
		var selected = [];
		$('.check_'+id2).each(function() {
		   if ($(this).is(":checked")) {
			   selected.push($(this).val());
			   total_sms++;
		   }
		});
		document.getElementById('contact').value=selected;
	$("#total_sms_count").html('contact count:'+total_sms);
		}
		
		function checkdAll(value1){
	    if($('#checkbox_'+value1).prop('checked')) {
		 var total_class=document.getElementById('check_id1').value;
		//alert(total_class);
		 for(var i=1; i<=total_class; i++){
		 if(i==value1)
		 {
		 $('.check_'+i).prop('checked', true);
		 }
		 else{
		 $('#checkbox_'+i).prop('checked', false)
		 $('.check_'+i).prop('checked', false);
		 }
		 }
		  
        } else {
          $('.check_'+value1).prop('checked', false);
        }
        }
		

		
		function checkCheckedAllStaff(){
	    if($('#checkboxstaff').prop('checked')) {
		 $('.staff_chk').prop('checked', true);
		 $('.student_chk').prop('checked', false);
		 $('#checkboxstudent').prop('checked', false);
        } else {
          $('.staff_chk').prop('checked', false);
        }
        }
		function myStudentstaff(){
		var total_sms=0;
		var selected = [];
		$('.student_chk').each(function() {
		   if ($(this).is(":checked")) {
			   selected.push($(this).val());
			     total_sms++;
		   }
		});
				$('.staff_chk').each(function() {
		   if ($(this).is(":checked")) {
			   selected.push($(this).val());
			     total_sms++;
		   }
		});
		document.getElementById('contact').value=selected;
$("#total_sms_count").html('contact count:'+total_sms);
		
		}
		
		function checkCheckedAllStudent(){
	    if($('#checkboxstudent').prop('checked')) {
		  $('.student_chk').prop('checked', true);
		  $('.staff_chk').prop('checked', false);
		  $('#checkboxstaff').prop('checked', false);
        } else {
          $('.student_chk').prop('checked', false);
        }
        }
		</script>
		  <!----------------------12th script------------------->
		  <!----------------------Search box ------------------->
		 
	<script type="text/javascript">
		function search_contact(){        
     var total_sms=0;
	  var selected=[];
	  $('.multiple_class :selected').each(function(i, sel){ 
      selected.push($(this).val());
	    total_sms++;
	  });
	  $('#contact').val(selected);
	  $("#total_sms_count").html('contact count:'+total_sms);
	  	$('.student_chk').prop('checked', false);
		 $('#checkboxstudent').prop('checked', false);
		  $('.staff_chk').prop('checked', false);
		  $('#checkboxstaff').prop('checked', false);
    }
	function validateForm(){
        var total_sms=document.getElementById('contact').value;
		var total_sms1=total_sms.split(',');
		var total_sms2=total_sms1.length;
	if(total_sms2>500){
	alert('You Can Not Send More Then 500 Sms In Single Shot');
	return false;
	}else{
	return true;
	}
	}
				function sms_count(){
			var total_sms=document.getElementById('contact').value;
			var total_sms1=total_sms.split(',');
			var total_sms2=total_sms1.length;
			if(total_sms==''){
			total_sms2=0;
			}
			$("#total_sms_count").html('contact count:'+total_sms2);
			}
 $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);

        $.ajax({
            url: access_link+"sms/sms_send_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert("Successfully Sent !!!");
				   get_content('sms/birthday_sms');
            }
			}
         });
      });
</script>
<!----------------------Search box ------------------->
	
  <section class="content-header">
      <h1>
       SMS Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
     <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('sms/sms_panel')"><i class="fal fa-comment-alt"></i> SMS</a></li>
       <li class="active">BirthDay SMS</li>
      </ol>
    </section>


	
	
	<!---******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
     <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	  <div class="col-md-4">
				<div class="box box-info my_border_top">
					<div class="box box-default collapsed-box">
					<table id="search_table">
            <div class="box-header with-border">
             
 <select class="form-control select2 multiple_class" multiple="multiple" id="multiple" data-placeholder=" Search by name..." onchange="search_contact()"
                        style="width: 100%;">
						   
                </select>
             
              <!-- /.box-tools -->
            </div>
			
			</table>
            <!-- /.box-body -->
          </div>
				</div> 
 <!---------------------------------Nursery Start------------------------------------->
           <div class="col-md-12">
          <div class="box box-default collapsed-box">
              
              <h3 style="color:red">Father Contact Number</h3>
           <table  class="table  ">
                <thead class="my_background_color">
                <tr>
                  <th><input type="checkbox" name="" id="checkboxstudent" onclick="checkCheckedAllStudent();myStudentstaff();" value="">&nbsp;&nbsp;&nbsp;All Student List</th>
				</tr>
                </thead>
				 <tbody>
						
				
               
                
                <tr>
                  <td  style="color:red"  ><input type="checkbox" name=""    onclick="myStudentstaff();" value="546123790">&nbsp;&nbsp;&nbsp;shikha (546123790)[2011-12-05]</td>
                 </tr>
				 
                  </tbody>
             </table>
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
   <!---------------------------------Nursery End------------------------------------->
      <div class="col-md-12">
          <div class="box box-default collapsed-box">
              <h3 style="color:red">Mother Contact Number</h3>
           <table  class="table  ">
                <thead class="my_background_color">
               
                </thead>
				 <tbody>
						
				
               
                
                <tr>
                  <td  style="color:red"  ><input type="checkbox" name=""    onclick="myStudentstaff();" value="">&nbsp;&nbsp;&nbsp;shikha ()[2011-12-05]</td>
                 </tr>
				 
                  </tbody>
             </table>
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		</div>
	
	
	  <div class="col-md-4">
			<div class="box box-info my_border_top">
            <div class="box-header with-border">
			
             <div class="col-lg-4">
						   			  <h5 class="box-title" style="float:left;color:teal;font-size:15px">Balance:-0</h5><h5 id="total_sms_count"></h5>
			  </div>
				For Hindi Change Typing Language From Header	
              </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" enctype="multipart/form-data" onsubmit="return validateForm();" id="my_form">
              <div class="box-body">
			   
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contact</label>

                  <div class="col-sm-10">
                    <input type="textbox" class="form-control" oninput="sms_count();" id="contact" name="contact"  placeholder="Eg:-0123456789,1234567890,987654321">
                  </div>
                </div>
				<br>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" >Template</label>
                   <div class="col-sm-10" id="sms_template">
                </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Sms Content</label>

                     <div class="col-sm-10">
	
                    <textarea rows="4" cols="50" id="message_box"  onKeyUp="countChar(this.value)" name="content" class="form-control" readonly></textarea>
                  </div>
                </div>
				<div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                      <label>
                         <div id="count"></div>
                      </label>
                    </div>
                  </div>			  
               <div class="col-md-12 ">
		        <center><input type="submit" name="submit1" value="Send" class="btn btn-primary my_background_color" /></center>
				</div>
                
              </div>
               
              
			  </form>
			  </div>
	      
    </div>
	  <div class="col-md-4">
				<div class="box box-info my_border_top">
					<div class="box box-default collapsed-box">
					<table id="search_table">
            <div class="box-header with-border">
             
 <select class="form-control select2 multiple_class" multiple="multiple" id="multiple4" data-placeholder=" Search by name..." onchange="search_contact()"
                        style="width: 100%;">
						   
                </select>
             
              <!-- /.box-tools -->
            </div>
			
			</table>
            <!-- /.box-body -->
          </div>
				</div> 
 <!---------------------------------Nursery Start------------------------------------->
           <div class="col-md-12">
          <div class="box box-default collapsed-box">
           <table  class="table  ">
                <thead class="my_background_color">
                <tr>
                  <th><input type="checkbox" name="" id="checkboxstaff" onclick="checkCheckedAllStaff();myStudentstaff();" value="">&nbsp;&nbsp;&nbsp;All Staff List</th>
				</tr>
                </thead>
				 <tbody>
						
				
               
                
                <tr>
                 <td  style="color:red"  ><input type="checkbox" name=""   onclick="myStudentstaff();" value="4454655y6547">&nbsp;&nbsp;&nbsp;Supriya Santosh(4454655y6547)[2019-12-05]</td>
                 </tr>
				 
                </tbody>
             </table>
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
   <!---------------------------------Nursery End------------------------------------->
   
		</div>
	 
       
      
	   
</section>
    
 
   	<script>
  $("[data-widget='collapse']").click(function() {
    //Find the box parent........
    var box = $(this).parents(".box").first();
    //Find the body and the footer
    var bf = box.find(".box-body, .box-footer");
    if(!$(this).children().hasClass("fa-plus")) {
        $(this).children(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
        bf.slideUp();
    } else {
        //Convert plus into minus
        $(this).children(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
        bf.slideDown();
    }
});
</script>
<script>	
  $(function () {
    $('.select2').select2()
  });
</script>	 
