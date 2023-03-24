
<script>
function for_check(id){
	if($('#'+id).prop("checked") == true){
		$("."+id).each(function(){
		$(this).prop('checked', true);
		});
	}else{
		$("."+id).each(function(){
		$(this).prop('checked', false);
		});
	}
	for_list();
}

function for_list(){
$("#pdf_detail").html('');
var category_name=[];

$(".my_ctgry").each(function(){
if($(this).is(":checked")){
    category_name.push($(this).val());
}
});

if(category_name!=''){
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_fee_structure_download_installmentwise.php",
	  cache: false,
	  data: {category_name:category_name},
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
        Download Fee Structure Report
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
        <li><a href="javascript:get_content('fees_monthly/reports')"><i class="fa fa-money"></i> Reports Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Fee Structure</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Fee Structure download</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
            <div class="col-md-6 col-md-offset-3">
			<div class="col-md-8"><h4>Category Panel</h4></div>
            <div class="col-md-4"><center><span style="color:red;"><input type="checkbox" name="" id="my_ctgry" onclick="for_check(this.id);" />&nbsp;&nbsp;&nbsp;<b>All Check/Uncheck</b></span></center></div>
			<div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-body">
                                                <div class="col-md-4"><input type="checkbox" name="" class="my_ctgry" onclick="for_list();" value="category1" /> <b>Non- RTE</b></div>
                                                <div class="col-md-4"><input type="checkbox" name="" class="my_ctgry" onclick="for_list();" value="category2" /> <b>New </b></div>
                                                <div class="col-md-4"><input type="checkbox" name="" class="my_ctgry" onclick="for_list();" value="category3" /> <b>Oid </b></div>
                                                <div class="col-md-4"><input type="checkbox" name="" class="my_ctgry" onclick="for_list();" value="category4" /> <b>Science</b></div>
                                                <div class="col-md-4"><input type="checkbox" name="" class="my_ctgry" onclick="for_list();" value="category5" /> <b>RTE</b></div>
                                                <div class="col-md-4"><input type="checkbox" name="" class="my_ctgry" onclick="for_list();" value="category6" /> <b>sibling</b></div>
                                            </div>
                  </div>
			</div>
			</div>
					
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