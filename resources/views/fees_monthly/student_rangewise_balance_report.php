
<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Fees Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	    <li><a href="javascript:get_content('fees_monthly/reports')"><i class="fa fa-money"></i> Reports Panel</a></li>
        <li class="active">Balance Details</li>
      </ol>
    </section>
	
<script>
function for_section(value){
   $('#student_class_section').html("<option value='' >Loading....</option>");
   $.ajax({
		  type: "POST",
		  url: access_link+"fees_monthly/ajax_classwise_section_all.php?class_name="+value+"",
		  cache: false,
		  success: function(detail){
			$("#student_class_section").html(detail);
			for_feelist();
		  }
	   });
}

function for_feelist(){
   $("#fee_details").html(loader_div);
   var student_class=document.getElementById('student_class').value;
   var student_section=document.getElementById('student_class_section').value;
   var bus_fee_category_code=document.getElementById('bus_fee_category_code').value;
   var myRange=document.getElementById('myRange').value;
   var for_paid_balance=document.getElementById('for_paid_balance').value;
   var for_less_greater=document.getElementById('for_less_greater').value;
   var order_by=document.getElementById('order_by').value;
   if(student_class!='' && student_section!='' && bus_fee_category_code!='' && myRange!=''){
   $.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_rangewise_balance_report.php?student_class="+student_class+"&student_section="+student_section+"&bus_fee_category_code="+bus_fee_category_code+"&myRange="+myRange+"&for_paid_balance="+for_paid_balance+"&for_less_greater="+for_less_greater+"&order_by="+order_by+"",
	  cache: false,
	  success: function(detail){
		$("#fee_details").html(detail);
	  }
   });
   }else{
	   $("#fee_details").html('');
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

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
           
            <!-- /.box-header -->			
        <div class="box-body">
		
		<div class="box-body  col-md-12">
		
		<div class="col-md-12">
		
		<div class="col-md-6 col-md-offset-3">
		<div class="col-md-4">
		<div class="form-group">
		<label>For Paid/Balance</label>
		<select name="for_paid_balance" id="for_paid_balance" class="form-control" onchange="for_feelist();" >
          <option value="paid_total">Paid</option>
          <option value="balance_total">Balance</option>
        </select>
        </div>
        </div>
        <div class="col-md-4">
		<div class="form-group">
		<label>For Less/Greater</label>
		<select name="for_less_greater" id="for_less_greater" class="form-control" onchange="for_feelist();" >
          <option value="<=">Less</option>
          <option value=">=">Greater</option>
        </select>
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
        <label>Order By</label>
        <select class="form-control" name="order_by" id="order_by" onchange="for_feelist();">
        <option value="">Select</option>
        <option value=" ORDER BY student_name ASC">By Name</option>
        </select>
        </div>
        </div>
        </div>
		
		</div>
		<div class="col-md-12">
		
		<div class="col-md-2">
			<div class="form-group">
			  <label>Select Class</label>
			   <select name="student_class" id="student_class" class="form-control" onchange="for_section(this.value);" required>
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
			  <select name="student_class_section" id="student_class_section" class="form-control" onchange="for_feelist();" required>
			  <option value="All">All</option>
			  </select>
			</div>
		</div>
		<div class="col-md-3">
		<div class="form-group">
         <label>Bus Category</label>
         <select class="form-control select2" name="bus_fee_category_code" id="bus_fee_category_code" style="width:100%" onchange="for_feelist();">
                   <option  value="All">All</option>
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
		<div class="col-md-6">
		<div class="form-group">
                 <label>Fee Range</label>
		<div class="""slidecontainer">
          <input type="range" min="0" max="50000" value="0" step="5" class="slider" id="myRange" onchange="for_feelist();" />
          <p style="color:blue;">Value : <span id="demo"></span></p>
        </div>
		</div>
		</div>
		
		</div>
		
		</div>
		<div class="col-md-12">&nbsp;</div>
			
		<div class="box-body col-md-12" style="overflow:scroll;border:1px solid;" id="fee_details">
		
		</div>
		  
		    
		</div>
		
</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
  </div>
</div>
</section>
<script>
for_feelist();
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
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