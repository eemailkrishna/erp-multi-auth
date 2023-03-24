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
        <li class="active">8THClass Details</li>
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
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>8TH /  Class Fee Total Amount :-  1151408.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>8TH /  Class Paid Total Amount :-  2950.00</center></h5>
			</div>
			<div class="col-sm-4">
			<h5 class="my_background_color" style="padding:10px 10px 10px 10px;"><center>8TH /  Class Dues Total Amount :-  1148708.00</center></h5>
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
                  <td style="text-align:center;">Akshay</td>
				  <td style="text-align:center;">ABC</td>
				  <td style="text-align:center;">1234567890, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">32400 </td>
                  <td style="text-align:center;">29700</td>
                  <td style="text-align:center;">2950</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200771')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">2</td>
                  <td style="text-align:center;">Gopi</td>
				  <td style="text-align:center;">BIKSHAM </td>
				  <td style="text-align:center;">9052483352, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">30000</td>
                  <td style="text-align:center;">30000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200783')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">3</td>
                  <td style="text-align:center;">mahi</td>
				  <td style="text-align:center;">rohit kumar </td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">33000</td>
                  <td style="text-align:center;">33000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200805')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">4</td>
                  <td style="text-align:center;">priya</td>
				  <td style="text-align:center;">kaml raj</td>
				  <td style="text-align:center;">56454564564564, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">47556</td>
                  <td style="text-align:center;">47556</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200817')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">5</td>
                  <td style="text-align:center;">mahi</td>
				  <td style="text-align:center;">kaml raj</td>
				  <td style="text-align:center;">5644545456, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">35500</td>
                  <td style="text-align:center;">35500</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200822')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">6</td>
                  <td style="text-align:center;">penolope </td>
				  <td style="text-align:center;">jonh</td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">25356</td>
                  <td style="text-align:center;">25356</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200846')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">7</td>
                  <td style="text-align:center;">jjlklkk</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">34356</td>
                  <td style="text-align:center;">34356</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200856')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">8</td>
                  <td style="text-align:center;">pooja bairagi</td>
				  <td style="text-align:center;">j. d. bairagi</td>
				  <td style="text-align:center;">, 9999999997</td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">36756</td>
                  <td style="text-align:center;">36756</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200871')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">9</td>
                  <td style="text-align:center;">pooja bairagi</td>
				  <td style="text-align:center;">j. d. bairagi</td>
				  <td style="text-align:center;">, 9087875766</td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">24900</td>
                  <td style="text-align:center;">24900</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200872')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">10</td>
                  <td style="text-align:center;">pooja bairagi</td>
				  <td style="text-align:center;">Mr. J.D. Bairagi</td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">26400</td>
                  <td style="text-align:center;">26400</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200879')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">11</td>
                  <td style="text-align:center;">Farhan khan</td>
				  <td style="text-align:center;">Riyaz khan</td>
				  <td style="text-align:center;">458963248327, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">181458</td>
                  <td style="text-align:center;">181458</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200883')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">12</td>
                  <td style="text-align:center;">Prashant</td>
				  <td style="text-align:center;">Rammu lal</td>
				  <td style="text-align:center;">7740000, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">36156</td>
                  <td style="text-align:center;">36156</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200910')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">13</td>
                  <td style="text-align:center;">mahi</td>
				  <td style="text-align:center;">kaml raj</td>
				  <td style="text-align:center;">4744444, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">31956</td>
                  <td style="text-align:center;">31956</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200915')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">14</td>
                  <td style="text-align:center;">riya</td>
				  <td style="text-align:center;">kaml raj</td>
				  <td style="text-align:center;">56454564, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">87100</td>
                  <td style="text-align:center;">87100</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200919')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">15</td>
                  <td style="text-align:center;">Pooja bairagi </td>
				  <td style="text-align:center;">Smt. Meenu bairagi</td>
				  <td style="text-align:center;">963486652388, 99654690856</td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">29250</td>
                  <td style="text-align:center;">29250</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200938')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">16</td>
                  <td style="text-align:center;">rajkumar</td>
				  <td style="text-align:center;">Rammu lal</td>
				  <td style="text-align:center;">544564, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">35556</td>
                  <td style="text-align:center;">35556</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200939')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">17</td>
                  <td style="text-align:center;">priya</td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">83400</td>
                  <td style="text-align:center;">83400</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200942')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">18</td>
                  <td style="text-align:center;">ashta </td>
				  <td style="text-align:center;">sanjeev </td>
				  <td style="text-align:center;">7894561230, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">35056</td>
                  <td style="text-align:center;">35056</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200945')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">19</td>
                  <td style="text-align:center;">shikha </td>
				  <td style="text-align:center;">rajendra </td>
				  <td style="text-align:center;">546123790, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">32656</td>
                  <td style="text-align:center;">32656</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200947')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">20</td>
                  <td style="text-align:center;">Prashant </td>
				  <td style="text-align:center;">rammu lal </td>
				  <td style="text-align:center;">7748770000, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">5000</td>
                  <td style="text-align:center;">5000</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200957')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">21</td>
                  <td style="text-align:center;">Prashant </td>
				  <td style="text-align:center;">rammu lal </td>
				  <td style="text-align:center;">74444, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">65700</td>
                  <td style="text-align:center;">65700</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200958')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">22</td>
                  <td style="text-align:center;">kamalkant</td>
				  <td style="text-align:center;">vasudev dhakad</td>
				  <td style="text-align:center;">9752199047, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">22400</td>
                  <td style="text-align:center;">22400</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200974')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">23</td>
                  <td style="text-align:center;">Prashant </td>
				  <td style="text-align:center;">rammu lal </td>
				  <td style="text-align:center;">744777, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">53025</td>
                  <td style="text-align:center;">53025</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200976')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">24</td>
                  <td style="text-align:center;">lokesh</td>
				  <td style="text-align:center;">sandeep</td>
				  <td style="text-align:center;">9416499566, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">21600</td>
                  <td style="text-align:center;">21600</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200984')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">25</td>
                  <td style="text-align:center;">Prashant </td>
				  <td style="text-align:center;">rammu lal </td>
				  <td style="text-align:center;">74440, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">27471</td>
                  <td style="text-align:center;">27471</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200989')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">26</td>
                  <td style="text-align:center;">Prashant </td>
				  <td style="text-align:center;">rammu lal </td>
				  <td style="text-align:center;">744, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">27600</td>
                  <td style="text-align:center;">27600</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200990')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">27</td>
                  <td style="text-align:center;">Prashant </td>
				  <td style="text-align:center;"></td>
				  <td style="text-align:center;">77, </td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">34200</td>
                  <td style="text-align:center;">34200</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200992')" class="btn btn-primary">Details</button></td>
                </tr>
                
                <tr>
                  <td style="text-align:center;">28</td>
                  <td style="text-align:center;">VEDANT TIWARI</td>
				  <td style="text-align:center;">MANOJ KUMAR TIWARI</td>
				  <td style="text-align:center;">8090688671, 9532822000</td>
                  <td style="text-align:center;">8TH(A)</td>
                  <td style="text-align:center;">15600</td>
                  <td style="text-align:center;">15600</td>
                  <td style="text-align:center;">0</td>               
                  <td><button type="button" onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200993')" class="btn btn-primary">Details</button></td>
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
