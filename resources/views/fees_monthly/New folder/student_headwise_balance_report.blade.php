
<script>
function for_section(value){
$('#student_class_section').html("<option value='' >Loading....</option>");
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_class_section.php?class_name="+value+"",
	  cache: false,
	  success: function(detail){
		 $("#student_class_section").html(detail);
		 for_list();
	  }
   });
}

function for_list(){
var class_name=document.getElementById('std_class').value;
var section_name=document.getElementById('student_class_section').value;
var bus_fee_category_code=document.getElementById('bus_fee_category_code').value;
var order_by=document.getElementById('order_by').value;
if($('#student_bus_fee_category').prop("checked") == true){
var bus_fee_category=$('#student_bus_fee_category').val();
}else{
var bus_fee_category="";
}

var head_code = [];
var head_name = [];
$(".my_head").each(function() {
if($(this).prop("checked") == true){
head_code.push($(this).val());
head_name.push($(this).attr('id'));
}
});

var previous_head_dues='';
if($('#previous_head').prop("checked") == true){
previous_head_dues='Yes';
}

var transport_head_dues='';
if($('#transport_head').prop("checked") == true){
transport_head_dues='Yes';
}

$("#pdf_detail").html('');

if(class_name!='' && section_name!='' && (head_code!='' || previous_head_dues!='' || transport_head_dues!='')){
$("#pdf_detail").html(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_headwise_balance_report.php",
	  cache: false,
	  data:{ class_name:class_name, section_name:section_name, head_code:head_code, head_name:head_name, bus_fee_category_code:bus_fee_category_code, order_by:order_by, bus_fee_category:bus_fee_category, previous_head_dues:previous_head_dues, transport_head_dues:transport_head_dues },
	  success: function(detail){
		 $("#pdf_detail").html(detail);
	  }
   });
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
        Download Student Balance Report
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
        <li><a href="javascript:get_content('fees_monthly/reports')"><i class="fa fa-money"></i> Reports Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Balance Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <div class="col-md-8">
              <h3 class="box-title">Balance Report download</h3>
              </div>
              <div class="col-md-4">
              <input type="checkbox" id="student_bus_fee_category" onclick="for_list();" value="student_bus_fee_category" /> <b>Print Bus Category Name</b>
              </div>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
			
			<div class="col-md-12" id="search_detail">
								
				<div class="col-md-2">				
				<div class="form-group" >
				<label>Class</label>
				<select name="std_class" class="form-control new_student" id="std_class" onchange="for_section(this.value);" >
				<option value="All">All Class</option>
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

				<div class="col-md-1">
				<div class="form-group">
				<label>Section</label>
				<select class="form-control" name="student_class_section" id="student_class_section" onchange="for_list();">
				<option value="All">All</option>
				</select>
				</div>
				</div>
				
				<div class="col-md-5">				
                                        <div class="col-md-4">
                    <input type="checkbox" name="month_head[]" onclick="for_list();" class="my_head" id="annual" value="fee1"> annual                    </div>
                                        <div class="col-md-4">
                    <input type="checkbox" name="month_head[]" onclick="for_list();" class="my_head" id="singing" value="fee2"> singing                    </div>
                                        <div class="col-md-4">
                    <input type="checkbox" name="month_head[]" onclick="for_list();" class="my_head" id="Transport fees" value="fee3"> Transport fees                    </div>
                                        <div class="col-md-4">
                    <input type="checkbox" name="month_head[]" onclick="for_list();" class="my_head" id="sports fees" value="fee4"> sports fees                    </div>
                                        <div class="col-md-4">
                    <input type="checkbox" name="month_head[]" onclick="for_list();" class="my_head" id="exam fee" value="fee5"> exam fee                    </div>
                                        <div class="col-md-4">
                    <input type="checkbox" name="month_head[]" onclick="for_list();" class="my_head" id="event fee" value="fee8"> event fee                    </div>
                                        <div class="col-md-4">
                    <input type="checkbox" name="month_head[]" onclick="for_list();" class="my_head" id="bus fee" value="fee9"> bus fee                    </div>
                                        <div class="col-md-4">
                    <input type="checkbox" name="" onclick="for_list();" id="previous_head" value=""> Previous Dues
                    </div>
                    <div class="col-md-4">
                    <input type="checkbox" name="" onclick="for_list();" id="transport_head" value=""> Transport Fee
                    </div>
				</div>
				
				<div class="col-md-2">				
                <div class="form-group">
                <label>Bus Fee Category</label>
                <select class="form-control" name="bus_fee_category_code" id="bus_fee_category_code" onchange="for_list();">
                <option value="All">All</option>
                                <option value="busfee1">NASRULLAGANJ</option>
                                <option value="busfee2">RALA</option>
                                <option value="busfee3">BORKHEDA</option>
                                <option value="busfee4">MP</option>
                                <option value="busfee5">subhas nagar</option>
                                <option value="busfee6">20000</option>
                                <option value="busfee7">mp nagar</option>
                                <option value="busfee8">ashoka garden</option>
                                <option value="busfee9">kolar</option>
                                <option value="busfee10">bardi</option>
                                <option value="busfee11">mp.nagar</option>
                                <option value="busfee12">arwind vihar</option>
                                <option value="busfee13">kalpna nagar</option>
                                <option value="busfee14">KHANDAKPAR</option>
                                <option value="busfee15">Bhel </option>
                                <option value="busfee16">MOD</option>
                                <option value="busfee17">mp nagar</option>
                                <option value="busfee18">mp nagar</option>
                                <option value="busfee19">mp nagar </option>
                                </select>
                </div>
                </div>
				
				<div class="col-md-2">
				<div class="form-group">
				<label>Order By</label>
				<select class="form-control" name="order_by" id="order_by" onchange="for_list();">
				<option value="">Select</option>
				<option value=" ORDER BY student_name ASC">By Name</option>
				</select>
				</div>
				</div>
				
			</div>
			
			</br></br></br><hr>
					
			<div class="col-md-12" id="pdf_detail">
			
			</div>
			
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