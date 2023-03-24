
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Fees Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
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
   var order_by=document.getElementById('order_by').value;
   var month_code = [];
   //var month_name = [];
   $(".my_check").each(function() {
   if($(this).prop("checked") == true){
   month_code.push($(this).val());
   //month_name.push($(this).attr('id'));
   }
   });
   
   if(student_class!='' && student_section!='' && month_code!=''){
   $.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_only_fee_balance_details.php",
	  data: {student_class:student_class,student_section:student_section,month_code:month_code,order_by:order_by},
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
		<div class="col-md-8 col-md-offset-2">
		
		<div class="col-md-3">&nbsp;</div>
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
		
		<div class="col-md-2">
			<div class="form-group">
			  <label>Section</label>
			  <select name="student_class_section" id="student_class_section" class="form-control" onchange="for_feelist();" required>
			  <option value="All">All</option>
			  </select>
			</div>
		</div>
		
        <div class="col-md-2">
        <div class="form-group">
        <label>Order By</label>
        <select class="form-control" name="order_by" id="order_by" onchange="for_feelist();">
        <option value="">Select</option>
        <option value=" ORDER BY student_name ASC">By Name</option>
        </select>
        </div>
        </div>
		<div class="col-md-3">&nbsp;</div>
		
		<div class="col-md-12">
				<div class="col-md-3">
			<input type="checkbox" id="April Month" class="my_check" value="04" onclick="for_feelist();" /><span style="font-weight:bold;"> April Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="May Month" class="my_check" value="05" onclick="for_feelist();" /><span style="font-weight:bold;"> May Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="June Month" class="my_check" value="06" onclick="for_feelist();" /><span style="font-weight:bold;"> June Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="July Month" class="my_check" value="07" onclick="for_feelist();" /><span style="font-weight:bold;"> July Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="August Month" class="my_check" value="08" onclick="for_feelist();" /><span style="font-weight:bold;"> August Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="September Month" class="my_check" value="09" onclick="for_feelist();" /><span style="font-weight:bold;"> September Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="October Month" class="my_check" value="10" onclick="for_feelist();" /><span style="font-weight:bold;"> October Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="November Month" class="my_check" value="11" onclick="for_feelist();" /><span style="font-weight:bold;"> November Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="December Month" class="my_check" value="12" onclick="for_feelist();" /><span style="font-weight:bold;"> December Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="January Month" class="my_check" value="01" onclick="for_feelist();" /><span style="font-weight:bold;"> January Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="February Month" class="my_check" value="02" onclick="for_feelist();" /><span style="font-weight:bold;"> February Month</span>
		</div>
				<div class="col-md-3">
			<input type="checkbox" id="March Month" class="my_check" value="03" onclick="for_feelist();" /><span style="font-weight:bold;"> March Month</span>
		</div>
				</div>
		
		</div>
		    
		</div>
		<div class="col-md-12">&nbsp;</div>
			
		<div class="col-md-12" style="overflow:scroll;border:1px solid;" id="fee_details">
		
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