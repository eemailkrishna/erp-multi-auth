@include('common.header');
@include('common.navbar');

<style>
.table>tbody>tr>td, .table>tbody>tr>th, .table>thead>tr>td, .table>thead>tr>th
{
  border: 5px solid white !important;
}
hr
{

background-color: black !important;
height: 2px !important;
}
</style>
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
        Paper Setter Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li><a href="javascript:get_content('exam_paper_setter/exam_paper_setter')"><i class="fa fa-dashboard"></i> Paper Setter Management</a></li>
       <li><a href="javascript:get_content('exam_paper_setter/total_paper_list')"><i class="fa fa-scribd" aria-hidden="true"></i>Total Paper List</a></li>
        <li class="active">Paper List</li>
      </ol>
    </section>
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1" style="border:1px solid black;height: 1000px;overflow-y: auto;">

          <!-- /.box -->

          <div class="box box-success" >

            <!-- /.box-header -->
            <div class="box-body table-responsive" id="printTable">
              <table id="example1" class="table">
			  <tr>
  <td width="30px;"></td>
  <td width="30px;"></td>
  <td width="200px;"></td>
  <td width="30px;"></td>
  <td width="200px;"></td>
  <td width="30px;"></td>
  <td width="200px;"></td>
  <td width="30px;"></td>
  <td width="200px;"></td>
  <td width="50px;"></td>
  <td width="150px;"></td>
</tr>
<tr>
<td colspan="11" width="1150px"><center><h2><b>SIMPTION TECH PVT LTD</b></h2></center></td>
</tr>
								<tr>
				  <td colspan="11" width="1150px"><center><h3><b>first</b></h3></center></td>
				</tr>
				                <tr>
				 <td width="30px">&nbsp;</td>
				  <td colspan="8" width="920px"><b>Exam Date : 01-12-2022</b></td>
				  <td colspan="2" width="200px"><b>Class : 10TH</b></td>
                </tr>
				<tr>
				 <td width="30px">&nbsp;</td>
				  <td colspan="8" width="920px"><b>Exam Time : 13:21  -  13:21</b></td>
				  <td colspan="2" width="200px"><b>Marks : 78</b></td>
                </tr>
				<tr>
				  <td width="30px">&nbsp;</td>
				  <td colspan="8" width="920px"><b>Subject : Social Science</b></td>
				  <td colspan="2" width="200px"><b>Roll No : ..........</b></td>
                </tr>
				<tr>
				  <td colspan="11" width="1150px" class="hr"><hr/></td>
                </tr>
				<tr>
  <td>&nbsp;</td>
   <td>&nbsp;</td>
  <td colspan='6'><h4><b>INSTRUCTIONS - </b></h4></td>
</tr>
<tr>
  <td width="30px">&nbsp;</td>
  <td width="30px"><b>1.</b></td>
  <td colspan="7" width="890"><b>All Questions are Compulsory.</b></td>
  <td width="50px;"></td>
  <td width="150px;"></td>

</tr>
<tr>
  <td width="30px">&nbsp;</td>
  <td width="30px"><b>2.</b></td>
  <td colspan="7" width="890"><b>Read the Questions Carefully and Answer them.</b></td>
  <td width="50px;"></td>
  <td width="150px;"></td>

</tr>
<tr>
  <td width="30px">&nbsp;</td>
  <td width="30px"><b>3.</b></td>
  <td colspan="7" width="890"><b>Marks of Each Question are Indicated Against It.</b></td>
  <td width="50px;"></td>
  <td width="150px;"></td>

</tr>
<tr>
  <td width="30px">&nbsp;</td>
  <td width="30px"><b>4.</b></td>
  <td colspan="7" width="890"><b>Internal Choice are Given as per the Blue Print.</b></td>
  <td width="50px;"></td>
  <td width="150px;"></td>

</tr>
<tr>
  <td width="30px;"></td>
  <td width="30px;"></td>
  <td width="200px;"></td>
  <td width="30px;"></td>
  <td width="200px;"></td>
  <td width="30px;"></td>
  <td width="200px;"></td>
  <td width="30px;"></td>
  <td width="200px;"></td>
  <td width="50px;"></td>
  <td width="150px;"></td>
</tr>

							<tr>
						  <td width="30px;"><b>1.</b></td>
						  <td colspan="8" width="920px;"><b>DFSDFHASDFASHDKFJASDF</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>3</b></td>

						</tr>
												<tr>
						  <td width="30px;">&nbsp;</td>
						  <td width="30px;">A.</td>
						  <td colspan="6" width="890px;">ASDFASDFASDF</td>
					      <td  colspan="2" width="200px;">[True/False]</td>

						   <td width="150px;">&nbsp;</td>
	</tr>
												<tr>
						  <td width="30px;">&nbsp;</td>
						  <td width="30px;">B.</td>
						  <td colspan="6" width="890px;">FDGSDFGSD</td>
					      <td  colspan="2" width="200px;">[True/False]</td>

						   <td width="150px;">&nbsp;</td>
	</tr>
												<tr>
						  <td width="30px;">&nbsp;</td>
						  <td width="30px;">C.</td>
						  <td colspan="6" width="890px;">SDFGSDFGSDFGSDF</td>
					      <td  colspan="2" width="200px;">[True/False]</td>

						   <td width="150px;">&nbsp;</td>
	</tr>


							<tr>
						      <td width="30px;"><b>2.</b></td>
						  <td colspan="8" width="920px;"><b>WHO IS THE PM OF INDIA</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>23</b></td>
						</tr>


							<tr>
						      <td width="30px;"><b>3.</b></td>
						  <td colspan="8" width="920px;"><b>DFSDFHASDFASHDKFJASDF</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>4</b></td>
						</tr>


							<tr>
						      <td width="30px;"><b>4.</b></td>
						  <td colspan="8" width="920px;"><b>DFSDFHASDFASHDKFJASDF</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>3</b></td>
						</tr>


							<tr>
						  <td width="30px;"><b>5.</b></td>
						  <td colspan="8" width="920px;"><b>CAN YOU JHAHD V DHFAK ADHFAD LADSH</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>4</b></td>

						</tr>
												<tr>
						   <td width="30px;">&nbsp;</td>
						  <td width="30px;">A.</td>
						  <td width="200px;" >RWERQWE</td>
						  							     <td width="30px;">B.</td>
						  <td width="200px;" >ERQWER</td>
													     <td width="30px;">C.</td>
						  <td width="200px;" >QWERE</td>


							<tr>
						  <td width="30px;"><b>6.</b></td>
						  <td colspan="8" width="920px;"><b>who s the men uins</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>4</b></td>

						</tr>
												<tr>
						   <td width="30px;">&nbsp;</td>
						  <td width="30px;">A.</td>
						  <td width="200px;" >whl isn hnalklk</td>
						  							     <td width="30px;">B.</td>
						  <td width="200px;" >sfj;;jdfj</td>
													     <td width="30px;">C.</td>
						  <td width="200px;" >DSFASDF</td>


							<tr>
						      <td width="30px;"><b>7.</b></td>
						  <td colspan="8" width="920px;"><b>abc</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>2</b></td>
						</tr>


							<tr>
						      <td width="30px;"><b>8.</b></td>
						  <td colspan="8" width="920px;"><b>WHO IS THE PM OF INDIA</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>23</b></td>
						</tr>


							<tr>
						  <td width="30px;"><b>9.</b></td>
						  <td colspan="8" width="920px;"><b>who s the men uins</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>4</b></td>

						</tr>
												<tr>
						   <td width="30px;">&nbsp;</td>
						  <td width="30px;">A.</td>
						  <td width="200px;" >whl isn hnalklk</td>
						  							     <td width="30px;">B.</td>
						  <td width="200px;" >sfj;;jdfj</td>
													     <td width="30px;">C.</td>
						  <td width="200px;" >DSFASDF</td>


							<tr>
						  <td width="30px;"><b>10.</b></td>
						  <td colspan="8" width="920px;"><b>CAN YOU JHAHD V DHFAK ADHFAD LADSH</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>4</b></td>

						</tr>
												<tr>
						   <td width="30px;">&nbsp;</td>
						  <td width="30px;">A.</td>
						  <td width="200px;" >RWERQWE</td>
						  							     <td width="30px;">B.</td>
						  <td width="200px;" >ERQWER</td>
													     <td width="30px;">C.</td>
						  <td width="200px;" >QWERE</td>


							<tr>
						  <td width="30px;"><b>11.</b></td>
						  <td colspan="8" width="920px;"><b>who s the men uins</b></td>
						  <td width="50px;">&nbsp;</td>
						  <td width="150px;"><b>4</b></td>

						</tr>
												<tr>
						   <td width="30px;">&nbsp;</td>
						  <td width="30px;">A.</td>
						  <td width="200px;" >whl isn hnalklk</td>
						  							     <td width="30px;">B.</td>
						  <td width="200px;" >sfj;;jdfj</td>
													     <td width="30px;">C.</td>
						  <td width="200px;" >DSFASDF</td>


						<tr>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						  <td>&nbsp;</td>
						</tr>


             </table>
            </div>

			<div class="col-xs-8 col-xs-offset-2">
			  <center><button type="button" onclick="for_print();" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>  Print</button></center>
			  <center><button onclick="Export2Doc('printTable', 'word-content');" class="btn btn-success">Export as .doc</button></center>
			</div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
   <script>
       function Export2Doc(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });

    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);

    // Specify file name
    filename = filename?filename+'.doc':'document.doc';

    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }

    document.body.removeChild(downloadLink);
}
   </script>

@include('common.footer');
