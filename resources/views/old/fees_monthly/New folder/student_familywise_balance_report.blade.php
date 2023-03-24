
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
function for_feelist(){
   $("#fee_details").html(loader_div);
   var student_family=document.getElementById('student_family').value;
   var order_by=document.getElementById('order_by').value;
   
    var select_inst = [];
    var select_inst_count = 0;
    $(".sel_installments").each(function() {
    if($(this).prop("checked") == true){
    select_inst.push($(this).val());
    select_inst_count = Number(select_inst_count+1);
    }
    });
   
   if(student_family!='' && select_inst_count>0){
   $.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_familywise_balance_report.php",
	  data : {student_family:student_family, order_by:order_by, select_inst:select_inst, select_inst_count:select_inst_count},
	  cache: false,
	  success: function(detail){
		$("#fee_details").html(detail);
	  }
   });
   }else{
	   $("#fee_details").html('');
   }
}

function for_check(id){

if($("#"+id).prop("checked") == true){
$("."+id).each(function() {
$(this).prop("checked",true);
});
}else{
$("."+id).each(function() {
$(this).prop("checked",false);
});
}
for_feelist();

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
		
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-8">
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="04" onclick="for_feelist();" /> April Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="05" onclick="for_feelist();" /> May Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="06" onclick="for_feelist();" /> June Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="07" onclick="for_feelist();" /> July Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="08" onclick="for_feelist();" /> August Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="09" onclick="for_feelist();" /> September Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="10" onclick="for_feelist();" /> October Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="11" onclick="for_feelist();" /> November Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="12" onclick="for_feelist();" /> December Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="01" onclick="for_feelist();" /> January Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="02" onclick="for_feelist();" /> February Month        </div>
                <div class="col-md-2">
        <input type="checkbox" class="sel_installments" value="03" onclick="for_feelist();" /> March Month        </div>
                </div>
        <div class="col-md-2"><input type="checkbox" id="sel_installments" onclick="for_check(this.id);" /> <b style="color:red;">All</b></div>
        
        <div class="col-md-12">&nbsp;</div>
        
		<div class="col-md-2">&nbsp;</div>
		<div class="col-md-6">
		<div class="col-md-12">
		
			<div class="form-group">
			  <label>Select Family Member</label>
			   <select name="student_family" id="student_family" class="form-control select2" width="100%" onchange="for_feelist();" >
			   <option value="All">All Families</option>
			   			   <option value="33213439">ram  (9816870719) [ umesh  (UKG-A) | balveer singh (LKG-A) | mahira khan (LKG-A) | pankaj patel (6TH-A) ]</option>
			   			   <option value="48373229">rohit kumar (9816870719) [ sanny (LKG-A) | ishan kumar (2ND-A) ]</option>
			   			   <option value="989878">bijay karn (9816870719) [ sushant singh (UKG-A) | saloni (2ND-A) | suman (6TH-A) | saloni karn (2ND-A) | sushant karn (UKG-A) | sanam karn (LKG-A) ]</option>
			   			   </select>
			</div>
		
		</div>
		</div>
        <div class="col-md-2">
        <div class="form-group">
        <label>Order By</label>
        <select class="form-control" name="order_by" id="order_by" onchange="for_feelist();">
        <option value="">Select</option>
        <option value=" ORDER BY student_father_name ASC">By Father Name</option>
        </select>
        </div>
        </div>
		<div class="col-md-2">&nbsp;</div>
		</div>
		<div class="col-md-12">&nbsp;</div>
			
		<div class="box-body col-md-12" style="border:1px solid;" id="fee_details">
		
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