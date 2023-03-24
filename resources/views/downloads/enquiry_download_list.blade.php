
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


  <section class="content-header">
      <h1>
        Downloads Enquiry Info
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	    <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="javascript:get_content('downloads/downloads')"><i class="fa fa-phone-square"></i>Download panel</a></li>
	    <li><a href="javascript:get_content('downloads/enquiry_download_info')"><i class="fa fa-stack-overflow"></i>Enquiry Info</a></li>
	    <li class="active">Download Enquiry Report</li>
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
			  <center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Enquiry Info Report')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
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
			  <td><center><b>ENQUIRY INFO REPORT</b></center></td>
			  <td style="float:right"><b>School Code : 50702</b></td>
			  </tr>
			  </table>
				  				  <table id="example1" class="table table-bordered table-striped" border="1px" cellpadding="10px" cellspacing="0px" style="width:100%">
						<thead class="my_background_color">
								<tr>
								  <th>S.No.</th>
								  								  <th>enquiry type</th>
								  								  <th>enquiry date</th>
								  								  <th>enquiry name</th>
								  								  <th>enquiry father name</th>
								  								  <th>enquiry contact no 1</th>
								  								  <th>enquiry contact no 2</th>
								  								  <th>enquiry addresss</th>
								  								  <th>enquiry next follow up date</th>
								  								</tr>
						</thead>
					<tbody >
										<tr>
					<td>1</td>
										<td>for admission</td>
										<td>2022-04-03</td>
										<td>abc</td>
										<td>efdf</td>
										<td>56789056789</td>
										<td></td>
										<td>weewt</td>
										<td></td>
										</tr>
										<tr>
					<td>2</td>
										<td>for admission</td>
										<td>2022-04-25</td>
										<td>Niraj</td>
										<td>Sad</td>
										<td>7689885676</td>
										<td></td>
										<td>Ghdrae</td>
										<td>29-04-2022</td>
										</tr>
										<tr>
					<td>3</td>
										<td>for admission</td>
										<td>2022-05-22</td>
										<td>ABHIMANYU SHARMA</td>
										<td>GOURAV SHARMA</td>
										<td>9755404505</td>
										<td></td>
										<td>NASRULLAGANJ</td>
										<td>--</td>
										</tr>
										<tr>
					<td>4</td>
										<td>for admission</td>
										<td>2022-05-25</td>
										<td>Yogendra Patidar</td>
										<td>Prahlad Patidar</td>
										<td>7999009256</td>
										<td>9754944705</td>
										<td>Kasrawad</td>
										<td>27-05-2022</td>
										</tr>
										<tr>
					<td>5</td>
										<td>for admission</td>
										<td>2022-06-14</td>
										<td>dew</td>
										<td>yogesh</td>
										<td>9987766556</td>
										<td>8766554577</td>
										<td>ornas</td>
										<td>15-06-2022</td>
										</tr>
										<tr>
					<td>6</td>
										<td>for admission</td>
										<td>2022-06-17</td>
										<td>Amar </td>
										<td>Suresh</td>
										<td>9752159854</td>
										<td></td>
										<td>Pandariya </td>
										<td>18-06-2022</td>
										</tr>
										<tr>
					<td>7</td>
										<td>for admission</td>
										<td>2022-07-30</td>
										<td>rahul</td>
										<td>kailash</td>
										<td>7389323133</td>
										<td></td>
										<td>zirniya</td>
										<td>--</td>
										</tr>
										<tr>
					<td>8</td>
										<td>for admission</td>
										<td>2022-11-29</td>
										<td>lavi</td>
										<td>virendra</td>
										<td>455</td>
										<td>5555</td>
										<td>noida</td>
										<td>12-11-2022</td>
										</tr>
										<tr>
					<td>9</td>
										<td>for job</td>
										<td>2022-03-28</td>
										<td>raj</td>
										<td></td>
										<td>9874561230</td>
										<td></td>
										<td>dwdwddw</td>
										<td></td>
										</tr>
										<tr>
					<td>10</td>
										<td>for job</td>
										<td>2022-12-05</td>
										<td>deep</td>
										<td>kumar</td>
										<td>8055141487</td>
										<td></td>
										<td>noida</td>
										<td>--</td>
										</tr>
										</tbody>
				 </table>
			  
        <!-- /.col -->
      </div>
      </div>
			  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('printTable', 'Enquiry Info Report')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
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
