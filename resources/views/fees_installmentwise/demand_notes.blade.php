
<script>
function for_section(value){
$('#student_class_section').html("<option value='' >Loading....</option>");
if(value!=''){
$.ajax({
	  type: "POST",
	  url: access_link+"fees_installmentwise/ajax_class_section.php?class_name="+value+"",
	  cache: false,
	  success: function(detail){
		 $("#student_class_section").html(detail);
		 for_list();
	  }
   });
}else{
$("#student_class_section").html("<option value='All'>All</option>");
for_list();
}

}

function for_list(){
var class_name=document.getElementById('std_class').value;
var section_name=document.getElementById('student_class_section').value;

$("#pdf_detail").html('');

if(class_name!='' && section_name!=''){
$("#pdf_detail").html(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"fees_installmentwise/ajax_student_demand_notes_classwise.php?class_name="+class_name+"&section_name="+section_name+"",
	  cache: false,
	  success: function(detail){
		 $("#pdf_detail").html(detail);
	  }
   });
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
var month=0;
$('.my_check').each(function() {
if($(this).prop('checked')==true){
month = Number(parseInt(month)+1);
}
});
var student=0;
$('.info').each(function() {
if($(this).prop('checked')==true){
student = Number(parseInt(student)+1);
}
});
if(month>0 && student>0) {
	return true;
}else{
    alert("Please Select Atleast One Student And One Month !!!");
	return false;
}
}
</script>
<script>
function for_print()
 {
 var divToPrint=document.getElementById("printTable");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
 }
</script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Download Demand Notes Classwise
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('fees_installmentwise/fees')"><i class="fa fa-money"></i> Fees</a></li>
        <li><a href="javascript:get_content('fees_installmentwise/reports')"><i class="fa fa-money"></i> Reports Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Demand Notes Classwise</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Demand Notes Classwise download</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
            			<form method="post" action="../school_software_v1_old/pdf/pdf/demand_notes/demand_notes.php" enctype="multipart/form-data" id="my_form" target="_blank">
			<div class="col-md-12 col-md-offset-3" id="search_detail">
								
				<div class="col-md-2">				
				<div class="form-group" >
				<label>Class</label>
				<select name="std_class" class="form-control new_student" id="std_class" onchange="for_section(this.value);" >
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

				<div class="col-md-2">
				<div class="form-group">
				<label>Section</label>
				<select class="form-control" name="student_class_section" id="student_class_section" onchange="for_list();">
				<option value="All">All</option>
				</select>
				</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
				<span style="float:right;"><input type="checkbox" name="check_previous" value="" /> <b>Previous Dues Fee</b></span>
				</div>
				</div>
				
			</div>
			<div class="col-md-12">
			    <span style="float:right;"><input type="checkbox" value="" id="my_check" onclick="for_check(this.id);"  /><b style="color:red;">Check All</b></span>
			</div>
            <div class="col-md-12">
                        <div class="col-md-2">
            <input type="checkbox" name="fees_month[]" id="Installment1" class="my_check" value="01" /><span style="font-weight:bold;"> Installment1</span>
            </div>
                        <div class="col-md-2">
            <input type="checkbox" name="fees_month[]" id="Installment2" class="my_check" value="02" /><span style="font-weight:bold;"> Installment2</span>
            </div>
                        <div class="col-md-2">
            <input type="checkbox" name="fees_month[]" id="Installment3" class="my_check" value="03" /><span style="font-weight:bold;"> Installment3</span>
            </div>
                        <div class="col-md-2">
            <input type="checkbox" name="fees_month[]" id="Installment4" class="my_check" value="04" /><span style="font-weight:bold;"> Installment4</span>
            </div>
                        <div class="col-md-2">
            <input type="checkbox" name="fees_month[]" id="Installment5" class="my_check" value="05" /><span style="font-weight:bold;"> Installment5</span>
            </div>
                        <div class="col-md-2">
            <input type="checkbox" name="fees_month[]" id="Installment6" class="my_check" value="06" /><span style="font-weight:bold;"> Installment6</span>
            </div>
                        <div class="col-md-2">
            <input type="checkbox" name="fees_month[]" id="Installment7" class="my_check" value="07" /><span style="font-weight:bold;"> Installment7</span>
            </div>
                        <div class="col-md-2">
            <input type="checkbox" name="fees_month[]" id="Installment8" class="my_check" value="08" /><span style="font-weight:bold;"> Installment8</span>
            </div>
                        </div>
			
			</br></br></br><hr>
					
			<div class="col-md-12" id="pdf_detail">
			
			</div>
			</form>
	        </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

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
<script>
for_list();
</script>