@include('common.header')
@include('common.navbar')
</head>

<script type="text/javascript">
 

function get_period(){

var day_name=document.getElementById('day_name').value;

if(day_name!=''){
$('#period_list').html(loader_div);
$.ajax({
type: "POST",
url: access_link+"time_table/ajax_get_time_table_sheet.php?day_name="+day_name+"",
cache: false,
success: function(detail){
$("#period_list").html(detail);
  }
});
}else{
$("#period_list").html('');
}

}


</script>

    <section class="content-header">
      <h1>
        Time Table Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-clock-o"></i> Time Table</a></li>
	  <li class="active">Time Table Sheet</li>
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
              <h3 class="box-title">Time Table Generate</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >


			
		
				 <div class="col-md-3 ">	
				<div class="form-group">
				<label>Select Day</label>
				<select id="day_name"  class="form-control" onchange="get_period();" required>
					<option value="">Select</option>
					<option value="monday">Monday</option>
					<option value="tuesday">Tuesday</option>
					<option value="wednesday">Wednesday</option>
					<option value="thursday">Thursday</option>
					<option value="friday">Friday</option>
					<option value="saturday">Saturday</option>

				
				</select>
			  </div>
			  	</div>
	
	
				
						  

		  
	      </div>
		
	<div class="col-md-12">
                 <div class="box box-success" >
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                <table id="table-data" border="1" class="table table-bordered table-striped" width="100%">
                <thead >
    
                <tr>
				  <th>Class</th>
				    				  <th><center>PERIOD-1<br>08:00-08:30</center></th>
				  				  <th><center>2<br>10:00-11:00</center></th>
				  				  <th><center>3<br>11:05-11:50</center></th>
				  				  <th><center>4<br>11:50-12:35</center></th>
				  				  <th><center>INTERVAL<br>12:35-12:50</center></th>
				  				  <th><center>5<br>12:50-01:00</center></th>
				  				  <th><center>6<br>13:30-14:10</center></th>
				  				  <th><center>7<br>14:10-14:45</center></th>
				  				  <th><center>8<br>14:45-15:30</center></th>
				                    </tr>
                </thead>
				<tbody id="period_list">

				
		        </tbody>
				
                </table>
                </div>
                </div>
                </div>
                		  
		  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('table-data', 'Class Time Table')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
		  </div>
		  
		  
		  <div class="col-md-6">
			  <center><button type="button" class="btn btn-primary" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
			  </div>
		  
	      </div>

	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
@include('common.footer')
<script>
function for_print()
 {
 var divToPrint=document.getElementById("table-data");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
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
	