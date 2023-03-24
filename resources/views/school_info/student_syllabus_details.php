
<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_record(s_no);       
 }            
else  {      
return false;
 }       
  } 
  
function delete_record(s_no){
$.ajax({
type: "POST",
url: access_link+"school_info/student_syllabus_details_delete.php?s_no="+s_no+"",
cache: false,
success: function(detail){
	//alert(detail);
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				    alert_new('Successfully Deleted!!!','green');
				  
				   get_content('school_info/student_syllabus_details');
			   }else{
              alert_new('Sorry!!! Some error occcured','red');
			   }
}
});
}
</script>
<script type="text/javascript">
   function for_section(value){
       if(value!=''){
  $('#student_class_section').html("<option value='' >Loading....</option>");
       $.ajax({
			  type: "POST",
             url:  access_link+"school_info/ajax_class_section_code.php?class_name="+value+"",
              cache: false,
              success: function(detail){
                  $("#student_class_section").html(detail);
                  for_subject();
              }
           });
       }else{
           $("#student_class_section").html("<option value=''>Select Section</option>");
           for_subject();
       }
    }
    
    function for_subject(){
    var student_class= document.getElementById('student_class').value;
    if(student_class!=''){
    $('#subject_name').html("<option value='' >Loading....</option>");
    $.ajax({
    address: "POST",
    url: access_link+"school_info/ajax_get_subject.php?value="+student_class+"",
    cache: false,
    success: function(detail){
    $("#subject_name").html(detail);
    for_list();
    }
    });
    }else{
           $("#subject_name").html("<option value=''>Select Subject</option>");
           for_list();
       }
    }
    
function for_list(){ 
var student_class= document.getElementById('student_class').value;
var student_class_section= document.getElementById('student_class_section').value;
var subject_name= document.getElementById('subject_name').value;
if(student_class_section!='' && student_class!='' && subject_name!='' ){
$('#example2').html(loader_div);
$.ajax({
type: "POST",
url:  access_link+"school_info/ajax_student_syllabus_details.php?id="+student_class+"&student_section="+student_class_section+"&subject_name="+subject_name+"",
cache: false,
success: function(detail){
$('#example2').html(detail);
}
});
}else{
$('#example2').html('');
}
}


function for_section1(value){
       if(value!=''){
  $('#model_student_class_section').html("<option value='' >Loading....</option>");
       $.ajax({
			  type: "POST",
             url:  access_link+"school_info/ajax_class_section_code.php?class_name="+value+"",
              cache: false,
              success: function(detail){
                  $("#model_student_class_section").html(detail);
                  for_subject1();
              }
           });
       }else{
           $("#model_student_class_section").html("<option value=''>Select Section</option>");
           for_subject1();
       }
    }
    
    function for_subject1(){
    var student_class= document.getElementById('model_student_class').value;
    if(student_class!=''){
    $('#model_subject_name').html("<option value='' >Loading....</option>");
    $.ajax({
    address: "POST",
    url: access_link+"school_info/ajax_get_subject.php?value="+student_class+"",
    cache: false,
    success: function(detail){
    $("#model_subject_name").html(detail);
    }
    });
    }else{
           $("#model_subject_name").html("<option value=''>Select Subject</option>");
       }
    }
    
    	$("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
    $("#close_btn").click();
        $.ajax({
            url: access_link+"school_info/student_syllabus_details_add.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   $('#myModal').modal('hide');
				   get_content('school_info/student_syllabus_details');
            }
			}
         });
      });
      
    function for_edit(sno){
        if(sno!=''){
        $.ajax({
        type: "POST",
        url:  access_link+"school_info/ajax_student_syllabus_details_edit.php?id="+sno+"",
        cache: false,
        success: function(detail){
        $('#edit_detail').html(detail);
        $('#edit_button').click();
        }
        });
        }else{
        $('#edit_detail').html('');
        $('#edit_button').click();
        }
    }
    
    $("#my_form1").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
    $("#close_btn1").click();
        $.ajax({
            url: access_link+"school_info/student_syllabus_details_edit.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   $('#myModal1').modal('hide');
				   get_content('school_info/student_syllabus_details');
            }
			}
         });
      });
      
    function for_complete(s_no,value){
        $.ajax({
        type: "POST",
        url:  access_link+"school_info/ajax_student_syllabus_details_complete_incomplete.php?s_no="+s_no+"&value="+value+"",
        cache: false,
        success: function(detail){
        
            var res=detail.split("|?|");
            if(res[1]=='success'){
            get_content('school_info/student_syllabus_details');
            }
        
        }
        });
    }
</script>
<script>
function for_print()
 {
 var divToPrint=document.getElementById("example1");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
 }
</script>

    <section class="content-header">
      <h1>
        Examination Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li><a href="javascript:get_content('school_info/school_info')"><i class="fa fa-graduation-cap"></i> School Info</a></li>
	   <li class="active"> Syllabus Details</li>
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
              <h3 class="box-title">Exam Marks Fill</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
		
		<!--	<form role="form" id="my_form" method="post" enctype="multipart/form-data"> -->
			
			    <div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Class<font style="color:red"><b>*</b></font></label>
					    <select name="student_class" onchange="for_section(this.value);" id="student_class" class="form-control" required>
						<option value="">Select Class</option>
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
				
				<div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Section<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="student_class_section" id="student_class_section" onchange="for_subject();" required>
					     <option value="">Select Section</option>
					    </select>
					</div>
				</div>
				
				<div class="col-md-3 ">				
			    <div class="form-group" >
				 <label >Subject Name<font style="color:red"><b>*</b></font></label>
				 <select class="form-control" name="subject_name" id="subject_name" onchange="for_list();" required>
				 <option value="">Select Subject</option>
				 </select>
				 </div>
				 </div>
				 
				 <div class="col-md-3 ">
				 <div class="form-group">
				 <center><label >For Add</label></center>
			     <center><button class="btn btn-success" data-toggle="modal" data-target="#myModal" name=add_more>Add More</button></center>
				 </div>
				 </div>
				
				<div class="col-md-12">
                <!-- /.box -->

                <div <div class="box box-success" >>
                <div class="box-header with-border">
                    
                    <div class="col-md-12">
                    <div class="col-md-6">
                    <center><button type="button" class="btn default" onclick="exportTableToExcel('example1', 'Syllabus Report')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
                    </div>
                    <div class="col-md-6">
                    <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
                    </div>
                    </div>
                    
                </div>
                <!-- /.box-header  id="printTable" -->
                <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th>S.No.</th>
                  <th>Class(Sec)</th>
                  <th>Subject Name</th>
				  <th>Syllabus Topic</th>
				  <th>Book Name</th>
				  <th>Chapter Book Name</th>
				  <th>Subject Teacher</th>
				  <th>Estimated Completion Date</th>
				  <th>Action</th>
                </tr>
                </thead>
				
				<tbody id="example2">
				
                                
                <tr>
                <td>1.</td>
                <td>NURSERY (A)</td>
                <td>Computer</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Puran Singh Sahu</td>
                <td>03-09-2022</td>
                <td>
                <button type="button" class="btn btn-primary" onclick="for_edit('15');" name="edit">Edit</button>&nbsp;
                <button type="button" class="btn btn-danger" onclick="return valid('15');" name="delete">Delete</button>&nbsp;
                <button type="button" class="btn btn-default" onclick="for_complete('15','Incomplete');" name="complete/incomplete">Complete</button>
                </td>
                </tr>
                				
		        </tbody>
				
                </table>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
				
		<!--  </form> -->
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
<script>
$(function () {
$('#example1').DataTable()
})
</script>
<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>

<!-- Modal1 Start -->
<form role="form" id="my_form" method="post" enctype="multipart/form-data">
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Syllabus</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
            
            <div class="col-md-5">	
					<div class="form-group" >
					    <label>Class<font style="color:red"><b>*</b></font></label>
					    <select name="model_student_class" onchange="for_section1(this.value);" id="model_student_class" class="form-control" required>
						<option value="">Select Class</option>
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
				
				<div class="col-md-3">	
					<div class="form-group" >
					    <label>Section<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="model_student_class_section" id="model_student_class_section" onchange="for_subject1();" required>
					     <option value="">Select Section</option>
					    </select>
					</div>
				</div>
				
				<div class="col-md-4">				
			    <div class="form-group" >
				 <label >Subject Name<font style="color:red"><b>*</b></font></label>
				 <select class="form-control" name="model_subject_name" id="model_subject_name" required>
				 <option value="">Select Subject</option>
				 </select>
				 </div>
				 </div>
				 
				 <div class="col-md-6">				
			    <div class="form-group" >
				 <label >Syllabus Subject Teacher<font style="color:red"><b>*</b></font></label>
				 <select class="form-control select2" name="model_subject_teacher" id="model_subject_teacher" style="width:100%" required>
				 				 <option value="kailash soni">kailash soni[ishwar deen soni][9617777047]</option>
				 				 <option value="kailash soni">kailash soni[ishwar deen soni][9617777047]</option>
				 				 <option value="Abhul Rjaak ">Abhul Rjaak [Khursid Rjaak][9685745263]</option>
				 				 <option value="suresh soni">suresh soni[something][07878963254]</option>
				 				 <option value="rohan">rohan[ajay][25625634]</option>
				 				 <option value="DEMO">DEMO[][9717386989]</option>
				 				 <option value="shreya sharma">shreya sharma[Mr. Bhola Sharma][987461236]</option>
				 				 <option value="Rashi Saxena">Rashi Saxena[mr. surendra saxena][9630843846]</option>
				 				 <option value="Pankajini Patra">Pankajini Patra[Rajanikanta Mund][8249570835]</option>
				 				 <option value="Jyoti Ranjan Patra">Jyoti Ranjan Patra[Dhirendra Kumar Patra][+917008251522]</option>
				 				 <option value="Premshankar Yadav">Premshankar Yadav[vijay shankar][8249570835]</option>
				 				 <option value="HARSHALI SHAH">HARSHALI SHAH[SUNILpoj][9406046007]</option>
				 				 <option value="tushar modi ">tushar modi [ayush modi ][8109964727]</option>
				 				 <option value="AYUSH">AYUSH[GHANSHYAM RATHORE][9406855366]</option>
				 				 <option value="TUSHAR IYRE ">TUSHAR IYRE [RAHUL][9845632156]</option>
				 				 <option value="MR. SANTOSH KUMAR SAHU">MR. SANTOSH KUMAR SAHU[TABAL SINGH ][8718909760]</option>
				 				 <option value="Anjali ojha">Anjali ojha[][887666]</option>
				 				 <option value="SANTOSH KUMAR SINGH">SANTOSH KUMAR SINGH[][9709042198]</option>
				 				 <option value="nikhil advin">nikhil advin[H. N advin][1236547896]</option>
				 				 <option value="user1">user1[][]</option>
				 				 <option value="Pawan malviya">Pawan malviya[Shreeram malviya][7746943011]</option>
				 				 <option value="VAISHNAVI AGRWAL">VAISHNAVI AGRWAL[VIVEK VERMA][7900927306]</option>
				 				 <option value="PALWINDER KAUR">PALWINDER KAUR[BHARPUR SINGH][9417894252]</option>
				 				 <option value="MD JAHIR KHAN">MD JAHIR KHAN[MD jalaluddin khan][+919086669999]</option>
				 				 <option value="satyaprakash yadav">satyaprakash yadav[raj pal singh yadav][9638277283]</option>
				 				 <option value="DD">DD[dxas][54654]</option>
				 				 <option value="JAVID">JAVID[][]</option>
				 				 <option value="Hansraj">Hansraj[Omprakash][8053038939]</option>
				 				 <option value="Mohit nagar">Mohit nagar[Bheemsingh Nagar][7999245216]</option>
				 				 <option value="Sunita Bai">Sunita Bai[Manmohan Raj][9992288710]</option>
				 				 <option value="Priyanka kaushik">Priyanka kaushik[Neeprit rajvansh][9926534586]</option>
				 				 <option value="nidhi">nidhi[krishna][7656754345]</option>
				 				 <option value="pooja ">pooja [surendra singh][56475534]</option>
				 				 <option value="shamli ">shamli [harichandra][6359874129]</option>
				 				 <option value="JAGMAL YADAV">JAGMAL YADAV[][9898788845]</option>
				 				 <option value="rahul ">rahul [shiva ji][56455698]</option>
				 				 <option value="ABJISHEK LAND">ABJISHEK LAND[][]</option>
				 				 <option value="PARVATI PATIL">PARVATI PATIL[DURJAN PATIL][7477010621]</option>
				 				 </select>
				 </div>
				 </div>
				 
	<div class="col-md-6">
		<div class="form-group" >
		    <label>Syllabus Topic</label>
		    <input type="text" name="model_syllabus_topic" class="form-control" />
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group" >
		    <label>Book Name</label>
		    <input type="text" name="model_syllabus_book_name" class="form-control" />
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group" >
		    <label>Chapter Book Name</label>
		    <input type="text" name="model_syllabus_chapter_book_name" class="form-control" />
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group" >
		    <label>Student Feedback</label>
		    <input type="text" name="model_syllabus_student_feedback" class="form-control" />
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group" >
		    <label>Syllabus Remark</label>
		    <input type="text" name="model_syllabus_remark" class="form-control" />
		</div>
    </div>
    <div class="col-md-6">
        <div class="form-group" >
		    <label>Estimated Completion Date</label>
		    <input type="date" name="model_syllabus_estimated_completion_date" value="2022-12-14" class="form-control" required />
		</div>
    </div>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close_btn">Close</button>
        <input type="submit" class="btn btn-success" value="Submit" />
      </div>
    </div>

  </div>
</div>
</form>
<!-- Modal1 End -->

<!-- Edit Model Start -->
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" id="edit_button" style="display:none;">Open Modal</button>
<form role="form" id="my_form1" method="post" enctype="multipart/form-data">
<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Syllabus Edit</h4>
      </div>
      <div class="modal-body" id="edit_detail">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close_btn1">Close</button>
        <input type="submit" class="btn btn-success" value="Edit Now" />
      </div>
    </div>

  </div>
</div>
</form>
<!-- Edit Model End -->
<script>
$(function () {
    $('.select2').select2();
  });
</script>