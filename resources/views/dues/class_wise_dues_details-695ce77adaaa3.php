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
	  Fees Dues Management	  <small>Control Panel</small>
      </h1>
	            <ol class="breadcrumb">
		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('dues/dues')"><i class="fa fa-info-circle"></i>Dues Details</a></li>
        <li class="active">4THClass Details</li>
        </ol>
    </section>
    
	
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->
          <div class="box" id="printTable">
            <div class="box-header with-border">
			<div class="col-sm-12">
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>4TH /  Class Fee Total Amount :-  78200.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>4TH /  Class Paid Total Amount :-  15000.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>4TH /  Class Dues Total Amount :-  63200.00</center></h5>
			</div>
			</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="printTable" border="1" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
				  <th>S.no</th>
				  <th>student Name </th>
				  <th>Father's Name </th>
				  <th>Conatact Details </th>
				  <th>Student Section </th>
				  <th>Total Fee </th>
				  <th>Total Balance </th>
				  <th>Total Paid/Year </th>
				  <th>Details </th>
                </tr>
                </thead>
                <tbody>
                
				
                <tr>
                  <td style="text-align:center;">1</td>
                  <td style="text-align:center;">nidhi jain </td>
				  <td style="text-align:center;">sunil  jain</td>
				  <td style="text-align:center;">9988554665, </td>
                  <td style="text-align:center;">4TH(A)</td>
                  <td style="text-align:center;">43200</td>
                  <td style="text-align:center;">43200</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200776')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">2</td>
                  <td style="text-align:center;">Ramesh</td>
				  <td style="text-align:center;">Suresh</td>
				  <td style="text-align:center;">9821223300, </td>
                  <td style="text-align:center;">4TH(A)</td>
                  <td style="text-align:center;">25000</td>
                  <td style="text-align:center;">10000</td>
                  <td style="text-align:center;">15000</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2201062')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">3</td>
                  <td style="text-align:center;">Rajdeep kumar</td>
				  <td style="text-align:center;">Mandal himesh</td>
				  <td style="text-align:center;">8709788098, </td>
                  <td style="text-align:center;">4TH(A)</td>
                  <td style="text-align:center;">10000</td>
                  <td style="text-align:center;">10000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2201082')" class="btn btn-primary">Details</button></td>
                </tr>
                                </tbody>
             </table>
             
            </div>
            <!-- /.box-body -->
          </div>
          <div class="col-sm-12">
			  <div class="col-sm-6">
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('printTable', 'Dues Report')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
			  </div>
			  <div class="col-sm-6">
			  <center><button type="button" class="btn btn-success" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
			  </div>
			  </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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
  $(function () {
    $('#example1').DataTable()
  })
 
</script>
