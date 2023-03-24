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
        <li class="active">1STClass Details</li>
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
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>1ST /  Class Fee Total Amount :-  122400.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>1ST /  Class Paid Total Amount :-  4960.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>1ST /  Class Dues Total Amount :-  117800.00</center></h5>
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
                  <td style="text-align:center;">praveen kumar</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">66666666666, </td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">9100  </td>
                  <td style="text-align:center;">4500</td>
                  <td style="text-align:center;">4960</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200695')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">2</td>
                  <td style="text-align:center;">Prashant kumar</td>
				  <td style="text-align:center;">babl</td>
				  <td style="text-align:center;">7844411100, </td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">9100</td>
                  <td style="text-align:center;">9100</td>
                  <td style="text-align:center;"></td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200715')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">3</td>
                  <td style="text-align:center;">shreyansh</td>
				  <td style="text-align:center;">Neeraj kumar</td>
				  <td style="text-align:center;">9911587539, 8800207311</td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">30000</td>
                  <td style="text-align:center;">30000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200791')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">4</td>
                  <td style="text-align:center;">shahnawaz</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">7677425494, </td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;"></td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200810')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">5</td>
                  <td style="text-align:center;">yasin</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">9931326638, </td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;"></td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200811')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">6</td>
                  <td style="text-align:center;">sultana</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">9693212542, </td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;"></td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200812')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">7</td>
                  <td style="text-align:center;">vicky uikey</td>
				  <td style="text-align:center;">jitendrasingh uikey</td>
				  <td style="text-align:center;">7354713649, </td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">40100</td>
                  <td style="text-align:center;">40100</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200841')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">8</td>
                  <td style="text-align:center;">Chirag jatav</td>
				  <td style="text-align:center;">MR.Arjun jatav</td>
				  <td style="text-align:center;">123, 456</td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;"></td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200937')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">9</td>
                  <td style="text-align:center;">Sujata Agrawal</td>
				  <td style="text-align:center;">Sushil Agrawal</td>
				  <td style="text-align:center;">7111111111, 6111111111</td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">27600</td>
                  <td style="text-align:center;">27600</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2201076')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">10</td>
                  <td style="text-align:center;">Danica Mariam Jacob</td>
				  <td style="text-align:center;">J P Jacob</td>
				  <td style="text-align:center;">9977228818, </td>
                  <td style="text-align:center;">1ST(A)</td>
                  <td style="text-align:center;">6500</td>
                  <td style="text-align:center;">6500</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2201085')" class="btn btn-primary">Details</button></td>
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
