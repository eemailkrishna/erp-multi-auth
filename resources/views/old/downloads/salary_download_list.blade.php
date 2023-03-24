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
	    <li><a href="javascript:get_content('downloads/employee_salary')"><i class="fa fa-stack-overflow"></i>Employee Salary</a></li>
	    <li class="active">Download Salary Report</li>
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
			  <center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Empolyee Salary Report')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
			  </div>
		</div>
        </div>
	
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
			<div class="col-md-10 col-md-offset-1">
            <div class="box-body table-responsive" id="printTable">
			
						
			  <table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
			  <tr>
			  <td colspan="3"><span style="font-size:20px;font-weight:bold"><center><b>SIMPTION TECH PVT LTD</b></center></span></td>
			  </tr>
			  <tr>
			  <td style="float:left"><b>Dise Code : 23260100164</b></td>
			  <td><center><b>EMPLOYEE SALARY REPORT</b></center></td>
			  <td style="float:right"><b>School Code : 50702</b></td>
			  </tr>
			  </table>
				  				  <table id="example1" class="table table-bordered table-striped" border="1px" cellspacing="0px"; cellpadding="10px" style="width:100%">
						<thead class="my_background_color">
								<tr>
								  <th>S.No.</th>
								  								  <th>emp id</th>
								  								  <th>employee name</th>
								  								  <th>employee a/c no</th>
								  								  <th>emp ifsc code</th>
								  								  <th>employee salary date from</th>
								  								  <th>employee salary date to</th>
								  								  <th>employee total working day</th>
								  								  <th>employee salary generate date</th>
								  								  <th>Employee Total Pay</th>
								  								  <th>employee pf no</th>
								  								  <th>employee pf amount</th>
								  								  <th>employee total pay after pf</th>
								  								  <th>total present</th>
								  								  <th>total absent</th>
								  								  <th>total leave</th>
								  								  <th>cheque bank name</th>
								  								  <th>cheque no</th>
								  								  <th>cheque date</th>
								  								  <th>neft bank name</th>
								  								  <th>neft bank account no</th>
								  								</tr>
						</thead>
					<tbody >
										<tr>
					<td>1</td>
										<td>0338</td>
										<td>TUSHAR</td>
										<td>123456789012345</td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-12-01</td>
										<td>4500</td>
										<td></td>
										<td>0</td>
										<td>4050.00</td>
										<td>20</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-12-01</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>2</td>
										<td>260</td>
										<td>S.G.HAGE</td>
										<td>30303030303</td>
										<td></td>
										<td>2022-03-29</td>
										<td>2022-03-31</td>
										<td>3</td>
										<td>2022-03-28</td>
										<td>45000</td>
										<td></td>
										<td>9000</td>
										<td>-4647.16</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td>sbi</td>
										<td>1234</td>
										<td>2022-03-23</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>3</td>
										<td>283</td>
										<td>LVS LUCY SWAIN</td>
										<td></td>
										<td></td>
										<td>2022-04-01</td>
										<td>2022-04-30</td>
										<td>26</td>
										<td>2022-05-02</td>
										<td>0</td>
										<td></td>
										<td>0</td>
										<td>0.00</td>
										<td>30</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-05-02</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>4</td>
										<td>288</td>
										<td>Sunil</td>
										<td></td>
										<td></td>
										<td>2022-04-26</td>
										<td>2022-04-26</td>
										<td>1</td>
										<td>2022-04-26</td>
										<td>40000</td>
										<td></td>
										<td>0</td>
										<td>1333.33</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-04-26</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>5</td>
										<td>309</td>
										<td>nidhi</td>
										<td></td>
										<td></td>
										<td>2022-08-01</td>
										<td>2022-08-31</td>
										<td>24</td>
										<td>2022-08-15</td>
										<td>12000</td>
										<td></td>
										<td>0</td>
										<td>12000.00</td>
										<td>0</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-08-15</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>6</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>25</td>
										<td>2022-11-08</td>
										<td>30000</td>
										<td></td>
										<td>0</td>
										<td>25000.00</td>
										<td>20</td>
										<td>5</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-08</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>7</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>25</td>
										<td>2022-11-11</td>
										<td>15000</td>
										<td></td>
										<td>0</td>
										<td>14500.00</td>
										<td>1</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-11</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>8</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>24</td>
										<td>2022-11-16</td>
										<td>15000</td>
										<td></td>
										<td>0</td>
										<td>14500.00</td>
										<td>2</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-16</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>9</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>24</td>
										<td>2022-11-22</td>
										<td>8000</td>
										<td></td>
										<td>0</td>
										<td>6933.33</td>
										<td>21</td>
										<td>4</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-22</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>10</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>24</td>
										<td>2022-11-23</td>
										<td>8000</td>
										<td></td>
										<td>0</td>
										<td>5333.33</td>
										<td>20</td>
										<td>10</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-23</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>11</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>24</td>
										<td>2022-11-28</td>
										<td>5000</td>
										<td></td>
										<td>0</td>
										<td>4333.33</td>
										<td></td>
										<td>4</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-28</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>12</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>24</td>
										<td>2022-11-28</td>
										<td>15000</td>
										<td></td>
										<td>0</td>
										<td>14500.00</td>
										<td>3</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-28</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>13</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>24</td>
										<td>2022-11-28</td>
										<td>14000</td>
										<td></td>
										<td>0</td>
										<td>13500.00</td>
										<td>3</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-28</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>14</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-10</td>
										<td>2022-11-30</td>
										<td>16</td>
										<td>2022-11-30</td>
										<td>1000000</td>
										<td></td>
										<td>1000000</td>
										<td>1450000.00</td>
										<td>2</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-29</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>15</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-11-29</td>
										<td>8000</td>
										<td></td>
										<td>0</td>
										<td>7200.00</td>
										<td>20</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-29</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>16</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-11-29</td>
										<td>30000</td>
										<td></td>
										<td>0</td>
										<td>27000.00</td>
										<td>20</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-29</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>17</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-11-29</td>
										<td>8000</td>
										<td></td>
										<td>0</td>
										<td>7200.00</td>
										<td>20</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-29</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>18</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-11-30</td>
										<td>8000</td>
										<td></td>
										<td>0</td>
										<td>7200.00</td>
										<td>20</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-30</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>19</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-11-30</td>
										<td>8000</td>
										<td></td>
										<td>0</td>
										<td>7200.00</td>
										<td>21</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-30</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>20</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-11-30</td>
										<td>15000</td>
										<td></td>
										<td>0</td>
										<td>14500.00</td>
										<td>4</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-11-30</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>21</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-12-01</td>
										<td>15000</td>
										<td></td>
										<td>0</td>
										<td>14500.00</td>
										<td>4</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-12-01</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>22</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-12-01</td>
										<td>15000</td>
										<td></td>
										<td>0</td>
										<td>14300.00</td>
										<td>4</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-12-01</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>23</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-12-01</td>
										<td>9000</td>
										<td></td>
										<td>0</td>
										<td>8100.00</td>
										<td>20</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-12-01</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>24</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-12-01</td>
										<td>15000</td>
										<td></td>
										<td>0</td>
										<td>14500.00</td>
										<td>4</td>
										<td>0</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-12-01</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>25</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-12-02</td>
										<td>8000</td>
										<td></td>
										<td>0</td>
										<td>7200.00</td>
										<td>20</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-12-02</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td>26</td>
										<td>340</td>
										<td>VIVEK KUMAR</td>
										<td></td>
										<td></td>
										<td>2022-11-01</td>
										<td>2022-11-30</td>
										<td>23</td>
										<td>2022-12-03</td>
										<td>8000</td>
										<td></td>
										<td>0</td>
										<td>7200.00</td>
										<td>20</td>
										<td>3</td>
										<td>0</td>
										<td></td>
										<td></td>
										<td>2022-12-03</td>
										<td></td>
										<td></td>
										</tr>
										<tr>
					<td><b>Total <b></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>1358500</td>
										<td></td>
										<td></td>
										<td>1697436.16</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										</tr>
										</tbody>
				 </table>
			  
        <!-- /.col -->
      </div>
      </div>
			  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn my_background_color" onclick="exportTableToExcel('printTable', 'Empolyee Salary Report')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn my_background_color" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
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
