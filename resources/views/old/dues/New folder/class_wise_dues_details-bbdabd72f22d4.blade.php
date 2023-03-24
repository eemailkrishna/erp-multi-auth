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
        <li class="active">UKGClass Details</li>
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
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>UKG /  Class Fee Total Amount :-  240750.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>UKG /  Class Paid Total Amount :-  1400.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>UKG /  Class Dues Total Amount :-  239350.00</center></h5>
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
                  <td style="text-align:center;">vishal jha</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">9918556649, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">20900</td>
                  <td style="text-align:center;">20900</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200714')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">2</td>
                  <td style="text-align:center;">muskan ray</td>
				  <td style="text-align:center;">roshan ray</td>
				  <td style="text-align:center;">9813405312, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">5000</td>
                  <td style="text-align:center;">5000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200717')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">3</td>
                  <td style="text-align:center;">sushant karn</td>
				  <td style="text-align:center;">bijay karn</td>
				  <td style="text-align:center;">9816870719, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">1800</td>
                  <td style="text-align:center;">1800</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200729')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">4</td>
                  <td style="text-align:center;">Abhay</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">1600</td>
                  <td style="text-align:center;">1600</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200741')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">5</td>
                  <td style="text-align:center;">Nikhil</td>
				  <td style="text-align:center;">jonh</td>
				  <td style="text-align:center;">9090909090, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;">0</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200780')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">6</td>
                  <td style="text-align:center;">Md alam ali </td>
				  <td style="text-align:center;">Ali alam</td>
				  <td style="text-align:center;">9473000888, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">25800</td>
                  <td style="text-align:center;">25800</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200797')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">7</td>
                  <td style="text-align:center;">mahi</td>
				  <td style="text-align:center;">ram singh </td>
				  <td style="text-align:center;">7024510634, 9685946008</td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">24000 </td>
                  <td style="text-align:center;">22600</td>
                  <td style="text-align:center;">1400</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200806')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">8</td>
                  <td style="text-align:center;">neha parihar </td>
				  <td style="text-align:center;">himanshu parihar </td>
				  <td style="text-align:center;">7854126359, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">26700</td>
                  <td style="text-align:center;">26700</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200901')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">9</td>
                  <td style="text-align:center;">mansha</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">35700</td>
                  <td style="text-align:center;">35700</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200918')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">10</td>
                  <td style="text-align:center;">Ariz</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">21200</td>
                  <td style="text-align:center;">21200</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200933')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">11</td>
                  <td style="text-align:center;">Ariz</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">18300</td>
                  <td style="text-align:center;">18300</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200934')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">12</td>
                  <td style="text-align:center;">Md. Mokarram alam </td>
				  <td style="text-align:center;">Md. Siddique alam </td>
				  <td style="text-align:center;">6200665811, 7543097865</td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">23700</td>
                  <td style="text-align:center;">23700</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200943')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">13</td>
                  <td style="text-align:center;">Aarunya Raj Sinha</td>
				  <td style="text-align:center;">tret</td>
				  <td style="text-align:center;">87874545454, 75489689896</td>
                  <td style="text-align:center;">UKG(A)</td>
                  <td style="text-align:center;">36050</td>
                  <td style="text-align:center;">36050</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200977')" class="btn btn-primary">Details</button></td>
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
