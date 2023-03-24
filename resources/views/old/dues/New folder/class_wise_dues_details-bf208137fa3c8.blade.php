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
        <li class="active">2NDClass Details</li>
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
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>2ND /  Class Fee Total Amount :-  686700.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>2ND /  Class Paid Total Amount :-  57680.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>2ND /  Class Dues Total Amount :-  629700.00</center></h5>
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
                  <td style="text-align:center;">RAJ</td>
				  <td style="text-align:center;">rajesh</td>
				  <td style="text-align:center;">4987549, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">56500 </td>
                  <td style="text-align:center;">35200</td>
                  <td style="text-align:center;">21600</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200677')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">2</td>
                  <td style="text-align:center;">XYZ</td>
				  <td style="text-align:center;">XYZ</td>
				  <td style="text-align:center;">9818273851, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">60500</td>
                  <td style="text-align:center;">60500</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200685')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">3</td>
                  <td style="text-align:center;">abc</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">7845123698, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">46700</td>
                  <td style="text-align:center;">46700</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200686')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">4</td>
                  <td style="text-align:center;">rahul</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">51500    </td>
                  <td style="text-align:center;">32000</td>
                  <td style="text-align:center;">19620</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200687')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">5</td>
                  <td style="text-align:center;">sunil 1</td>
				  <td style="text-align:center;">Asad</td>
				  <td style="text-align:center;">9955886644, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">42500</td>
                  <td style="text-align:center;">42500</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200779')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">6</td>
                  <td style="text-align:center;">AVNI SHARMA</td>
				  <td style="text-align:center;">SOURABH SHARMA</td>
				  <td style="text-align:center;">9826625627, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">36000</td>
                  <td style="text-align:center;">36000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200786')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">7</td>
                  <td style="text-align:center;">SONU PRAJAPATI</td>
				  <td style="text-align:center;">LALARAM PRAJAPATI</td>
				  <td style="text-align:center;">7067208375, 8827359266</td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">34500</td>
                  <td style="text-align:center;">34500</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200796')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">8</td>
                  <td style="text-align:center;">dummy </td>
				  <td style="text-align:center;">dummy</td>
				  <td style="text-align:center;">1234567890, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">55800</td>
                  <td style="text-align:center;">55800</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200798')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">9</td>
                  <td style="text-align:center;">TABREZ ALAM</td>
				  <td style="text-align:center;">BAKRIDAN ANSARI</td>
				  <td style="text-align:center;">7677425494, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">15600 </td>
                  <td style="text-align:center;">14300</td>
                  <td style="text-align:center;">1340</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200799')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">10</td>
                  <td style="text-align:center;">PANKAJ KUMAR</td>
				  <td style="text-align:center;">UPENDRA SHARMA</td>
				  <td style="text-align:center;">7004625934, 8083477192</td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">24000</td>
                  <td style="text-align:center;">24000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200831')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">11</td>
                  <td style="text-align:center;">VINAYAK PATIDAR</td>
				  <td style="text-align:center;">SUNIL RAI</td>
				  <td style="text-align:center;">9955882211, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">35400</td>
                  <td style="text-align:center;">35400</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200861')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">12</td>
                  <td style="text-align:center;">VINAYAK PATIDAR</td>
				  <td style="text-align:center;">RAJENDRA PATIDAR</td>
				  <td style="text-align:center;">9988552233, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">32100</td>
                  <td style="text-align:center;">32100</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200927')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">13</td>
                  <td style="text-align:center;">vicky uikey</td>
				  <td style="text-align:center;">jitendra singh uikey</td>
				  <td style="text-align:center;">7354713649, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">12000</td>
                  <td style="text-align:center;">12000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200936')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">14</td>
                  <td style="text-align:center;">Vansh Kumar Pasi</td>
				  <td style="text-align:center;">Ravi Pasi</td>
				  <td style="text-align:center;">8103488491, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">18600</td>
                  <td style="text-align:center;">18600</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200951')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">15</td>
                  <td style="text-align:center;">RAM KUMAR </td>
				  <td style="text-align:center;">SHYAM KUMAR </td>
				  <td style="text-align:center;">8936860311, 9308079285</td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">36000</td>
                  <td style="text-align:center;">36000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200955')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">16</td>
                  <td style="text-align:center;">Amit rao</td>
				  <td style="text-align:center;">Sahab rao</td>
				  <td style="text-align:center;">9450673349, 8115130734</td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">36000</td>
                  <td style="text-align:center;">36000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200959')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">17</td>
                  <td style="text-align:center;">NIDHI SINGH</td>
				  <td style="text-align:center;">BHARAT PATIDAR</td>
				  <td style="text-align:center;">824685465, 6598758458</td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">21900      </td>
                  <td style="text-align:center;">8500</td>
                  <td style="text-align:center;">13580</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200961')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">18</td>
                  <td style="text-align:center;">shravan singh</td>
				  <td style="text-align:center;">rajaram singh</td>
				  <td style="text-align:center;">9452358861, 0</td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">18000 </td>
                  <td style="text-align:center;">16500</td>
                  <td style="text-align:center;">1540</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200962')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">19</td>
                  <td style="text-align:center;">asharamk</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">6265861579, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">27900</td>
                  <td style="text-align:center;">27900</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200965')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">20</td>
                  <td style="text-align:center;">Monali</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">2ND(A)</td>
                  <td style="text-align:center;">25200</td>
                  <td style="text-align:center;">25200</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200980')" class="btn btn-primary">Details</button></td>
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
