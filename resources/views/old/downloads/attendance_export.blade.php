<script>
        (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script>
function for_print()
 {
 var divToPrint=document.getElementById("printTable");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
//$('#printTable').print();
 }
</script>

  <section class="content-header">
      <h1>
        Downloads Employee Salary
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="javascript:get_content('downloads/downloads')"><i class="fa fa-phone-square"></i>Download panel</a></li>
	    <li><a href="javascript:get_content('downloads/Attendance_download_list')"><i class="fa fa-stack-overflow"></i>Attendance List</a></li>
	    <li class="active">Download Attendance Report</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
    <!-- Main content -->
    <section class="content">
      <div class="row">
		<div class="box box-primary my_border_top">
		<div class="box-header with-border ">
		<div class="col-md-12">
		
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Attendance Report')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
			  </div>
			  
		</div>
        </div>
	
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box box-success" >
            <!-- /.box-header -->
			<div class="col-md-10 col-md-offset-1">
            <div class="box-body table-responsive" id="printTable">
			
						  
			  <table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
			  <tr>
			  <td colspan="3"><span style="font-size:20px;font-weight:bold"><center><b>SIMPTION TECH PVT LTD</b></center></span></td>
			  </tr>
			  <tr>
			  <td style="float:left"><b>Dise Code : 23260100164</b></td>
			  <td><center><b>ATTENDANCE REPORT</b></center></td>
			  <td style="float:right"><b>School Code : 50702</b></td>
			  </tr>
			  <tr>
			  <td style="float:left"><b>Month: All</b></td>
			  <td>&nbsp;</td>
			  <td style="float:right"><b>Year: 2022</b></td>
			  </tr>
			  </table>
				  <table id="example1" class="table table-bordered table-striped" style="width:100%" border="1px" cellspacing="0px"; cellpadding="10px">
						<thead class="my_background_color">
								<tr>
								  <th>S.No.</th>
								  <th>Student Name</th>
								  <th>Class</th>
								  <th>Section</th>
								  <th>RFID Number</th>
								  <th>Year</th>
								  <th>Month</th>
								  
								  						<th>01</th>
							 						<th>02</th>
							 						<th>03</th>
							 						<th>04</th>
							 						<th>05</th>
							 						<th>06</th>
							 						<th>07</th>
							 						<th>08</th>
							 						<th>09</th>
							 						<th>10</th>
							 						<th>11</th>
							 						<th>12</th>
							 						<th>13</th>
							 						<th>14</th>
							 						<th>15</th>
							 						<th>16</th>
							 						<th>17</th>
							 						<th>18</th>
							 						<th>19</th>
							 						<th>20</th>
							 						<th>21</th>
							 						<th>22</th>
							 						<th>23</th>
							 						<th>24</th>
							 						<th>25</th>
							 						<th>26</th>
							 						<th>27</th>
							 						<th>28</th>
							 						<th>29</th>
							 						<th>30</th>
							 						<th>31</th>
							 							 <th>Total Present</th>
							 <th>Total Absent</th>
							 <th>Total Leave</th>
							 <th>Total Sunday</th>
							 <th>Total Holiday</th>
							 <th>Total Not Mark</th>
						
								</tr>
						</thead>
					<tbody >
											<!--<tr>
					<td colspan="44"><h4><b>No Data Found</b> <h4></td>
					</tr>-->
										</tbody>
				 </table>
			  
        <!-- /.col -->
      </div>
      </div>
			  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('printTable', 'Attendance Report')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
			  </div>
			  </div>
      <!-- /.row -->
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
