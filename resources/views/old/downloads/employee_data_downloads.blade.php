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
        Downloads Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="javascript:get_content('downloads/downloads')"><i class="fa fa-phone-square"></i>Download panel</a></li>
	    <li><a href="javascript:get_content('downloads/employee_download')"><i class="fa fa-stack-overflow"></i>Employee Download</a></li>
	    <li class="active">Download PDF EXCEL</li>
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
			  <center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Employee Data')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
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
			  <td><center><b>EMPLOYEE DATA</b></center></td>
			  <td style="float:right"><b>School Code : 50702</b></td>
			  </tr>
			  </table>
				  				  <table id="example1" class="table table-bordered table-striped" border="1px" cellpadding="10px" cellspacing="0">
						<thead class="my_background_color">
								<tr>
								  <th>S.No.</th>
								  								  <th>emp id</th>
								  								  <th>emp rf id no</th>
								  								  <th>emp name</th>
								  								  <th>emp DOB</th>
								  								  <th>emp gender</th>
								  								  <th>emp father</th>
								  								  <th>emp email</th>
								  								  <th>emp mobile</th>
								  								  <th>emp address</th>
								  								  <th>emp qualification</th>
								  								  <th>emp doj</th>
								  								  <th>emp categories</th>
								  								  <th>emp class preferred</th>
								  								  <th>emp designation</th>
								  								  <th>emp pan card no</th>
								  								  <th>emp bank name</th>
								  								  <th>emp account no</th>
								  								  <th>emp ifsc code</th>
								  								  <th>emp basic salary</th>
								  								  <th>emp pf number</th>
								  								  <th>emp subject preferred</th>
								  								  <th>emp aadhar / uid no</th>
								  								  <th>emp sssmid no</th>
								  								  <th>salary</th>
								  								  <th>other wages</th>
								  								  <th>casual leave</th>
								  								  <th>pay/earn leave</th>
								  								  <th>sick leave</th>
								  								  <th>other leave</th>
								  								</tr>
						</thead>
					<tbody >
										<tr>
					<td>1</td>
															<td>160</td>
																				<td></td>
																				<td></td>
																				<td>09-05-1996</td>
																				<td>Male</td>
																				<td></td>
																				<td>Sheikhannu145@gmail.com</td>
																				<td></td>
																				<td>Chikhli ward no. 05 Rajnandgaon CG.</td>
																				<td>BCom</td>
																				<td>2022-12-05</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>00</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>00</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>2</td>
															<td>131</td>
																				<td></td>
																				<td> teacher</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>teacher@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>3</td>
															<td>159</td>
																				<td></td>
																				<td>AA</td>
																				<td>09-09-1996</td>
																				<td>Male</td>
																				<td>Aayprasad tiwari</td>
																				<td>tushar234@gmail.com</td>
																				<td></td>
																				<td>Chikhli ward no. 05 Rajnandgaon CG.</td>
																				<td>B.ed</td>
																				<td>2022-12-01</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>00</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>00</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>4</td>
															<td>158</td>
																				<td></td>
																				<td>AAA</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>rather@gmail.com</td>
																				<td></td>
																				<td>ward no. 25 house no 598 goal bajar rajnandgaon CG.</td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>567000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>567000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>5</td>
															<td>1132</td>
																				<td></td>
																				<td>ABHISHEK SINGH THAKUR</td>
																				<td>20-03-1983</td>
																				<td>Male</td>
																				<td>AMAR SINGH THAKUR</td>
																				<td>abhisheksingh2122@gmail.com</td>
																				<td>9300174646</td>
																				<td>49 PHASE-1 STAR CITY KATANGI ROAD KARMETA JABALPUR</td>
																				<td>B.SC. LL.B</td>
																				<td>2022-09-16</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Other</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>8400</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>8400</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>6</td>
															<td>29</td>
																				<td></td>
																				<td>Abhul Rjaak </td>
																				<td>12-12-2018</td>
																				<td>Male</td>
																				<td>Khursid Rjaak</td>
																				<td>rajaak987@gmail.com</td>
																				<td>9685745263</td>
																				<td>Satyam Comp house no 56 kolar Bhopal</td>
																				<td>B. ED.</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>9th to 12th</td>
																				<td>Teacher</td>
																				<td>1234567898</td>
																				<td>panjab National Bank </td>
																				<td>52639874544</td>
																				<td>Pnb- 526398</td>
																				<td>15000</td>
																				<td>15200</td>
																				<td>English </td>
																				<td>1234569874</td>
																				<td></td>
																				<td>15000</td>
																				<td>15001</td>
																				<td></td>
																				<td>2</td>
																				<td>2</td>
																				<td>2</td>
															</tr>
										<tr>
					<td>7</td>
															<td>135</td>
																				<td></td>
																				<td>abhushek</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>abhi23@gmail.com</td>
																				<td>8630913086</td>
																				<td>dehrsdun</td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>NURSERY</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>3300</td>
																				<td></td>
																				<td>Sanskrit ,Hindi </td>
																				<td></td>
																				<td></td>
																				<td>3300</td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>8</td>
															<td>334</td>
																				<td></td>
																				<td>ABJISHEK LAND</td>
																				<td>01-01-1999</td>
																				<td>Male</td>
																				<td></td>
																				<td>AA@GMAIL.COM</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-10-14</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>9</td>
															<td>86</td>
																				<td></td>
																				<td>Amit Kumar Patra</td>
																				<td>01-08-2016</td>
																				<td>Male</td>
																				<td>Bimal chandra Patra</td>
																				<td>rajanikanta.fine@gmail.com</td>
																				<td>8249570835</td>
																				<td>AT/PO-DHURWAGUDI(KHOKHMA), Tahasil-MAINPUR</td>
																				<td>B.Tech ,D.ed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>DCB BANK LTD</td>
																				<td>14300009516</td>
																				<td>DCBL000143</td>
																				<td>5000</td>
																				<td></td>
																				<td>Maths</td>
																				<td>493891000000</td>
																				<td></td>
																				<td>5000</td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>10</td>
															<td>125</td>
																				<td></td>
																				<td>anand sharma</td>
																				<td>09-12-1991</td>
																				<td>Male</td>
																				<td>ramesh sharma</td>
																				<td>xyz@gmail.com</td>
																				<td>1234567890</td>
																				<td>ngh</td>
																				<td>be</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>100000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>100000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>11</td>
															<td>156</td>
																				<td></td>
																				<td>ANAYAT ULLAH</td>
																				<td>11-02-1989</td>
																				<td>Male</td>
																				<td> </td>
																				<td>anayat@gmail.com</td>
																				<td>99064112069</td>
																				<td>PANZGAM</td>
																				<td>M.A</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>2ND</td>
																				<td>Principal</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td>English  urdu</td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>12</td>
															<td>103</td>
																				<td></td>
																				<td>Anjali ojha</td>
																				<td>30-11--0001</td>
																				<td>Female</td>
																				<td></td>
																				<td>anjli@gmail.com</td>
																				<td>887666</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>LKG</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>4000</td>
																				<td></td>
																				<td>AG BIO</td>
																				<td></td>
																				<td></td>
																				<td>4000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>13</td>
															<td>1337</td>
																				<td></td>
																				<td>ASHADUR RAHMAN MONDAL</td>
																				<td>01-09-1983</td>
																				<td>Male</td>
																				<td>AMZAD ALI MONDAL</td>
																				<td>ASHADURMONDALL@GMAIL.COM</td>
																				<td>7005657009</td>
																				<td>SOUTH SALMARA PART-II</td>
																				<td>BA, PGDCA</td>
																				<td>2022-11-07</td>
																				<td>Teaching</td>
																				<td>ALL</td>
																				<td>Principle</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>14</td>
															<td>104</td>
																				<td></td>
																				<td>atul singh thakur </td>
																				<td>16-07-2019</td>
																				<td>Male</td>
																				<td></td>
																				<td>thakuratulsingh53@gmail.com</td>
																				<td>7089840046</td>
																				<td>bhopal</td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>4563456346</td>
																				<td>0456321</td>
																				<td>4500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>4500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>15</td>
															<td>95</td>
																				<td>123456</td>
																				<td>AYUSH</td>
																				<td>06-11-1993</td>
																				<td>Male</td>
																				<td>GHANSHYAM RATHORE</td>
																				<td>rathore.ayush37@gmail.com</td>
																				<td>9406855366</td>
																				<td>181, chhatri colony, indore-kota road</td>
																				<td>BE</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>12</td>
																				<td>Teacher</td>
																				<td>BUI123456</td>
																				<td>BOI</td>
																				<td></td>
																				<td></td>
																				<td>15000</td>
																				<td></td>
																				<td>PHYSICS</td>
																				<td>465449</td>
																				<td></td>
																				<td>15000</td>
																				<td></td>
																				<td>5</td>
																				<td>14500</td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>16</td>
															<td>90</td>
																				<td></td>
																				<td>Brahmarao</td>
																				<td>31-12-2019</td>
																				<td>Male</td>
																				<td>DYtzgtkyg</td>
																				<td>vbr.svn@gmail.com</td>
																				<td>9949458795</td>
																				<td>D-NO: 2-36,MAIN ROAD, VANUKURU</td>
																				<td>B.Sc,B.Ed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>20000</td>
																				<td></td>
																				<td></td>
																				<td>521151</td>
																				<td></td>
																				<td>20000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>17</td>
															<td>74</td>
																				<td>0013678307</td>
																				<td>DEMO</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>demo@gmail.com</td>
																				<td>9717386989</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>LKG</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td>Social Science</td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>18</td>
															<td>127</td>
																				<td></td>
																				<td>demo faculty</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>demofaculty@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>19</td>
															<td>94</td>
																				<td></td>
																				<td>DS SALUJA</td>
																				<td>10-07-1977</td>
																				<td>Male</td>
																				<td>SURENDRA SINGH</td>
																				<td>SUDEEP.S.SALUJA@GMAIL.COM</td>
																				<td>9009742474</td>
																				<td>UJJAIN</td>
																				<td>MSC</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>12000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>12000</td>
																				<td></td>
																				<td></td>
																				<td>1</td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>20</td>
															<td>hi331</td>
																				<td></td>
																				<td>eswari</td>
																				<td>03-02-1999</td>
																				<td>Female</td>
																				<td>nil</td>
																				<td>eswari@gmail.com</td>
																				<td>6369209603</td>
																				<td>trichy</td>
																				<td>doctor</td>
																				<td>2022-11-02</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>lkytuiyeutr56aty</td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>21</td>
															<td>83</td>
																				<td></td>
																				<td>Goutam Kumar Das</td>
																				<td>15-08-2016</td>
																				<td>Male</td>
																				<td>rudra das</td>
																				<td>rajanikanta.fine@gmail.com</td>
																				<td>+916371329608</td>
																				<td>AT/PO-AMLIPADARTahasil-MAINPUR,DIST-GARIYABAND, C.G</td>
																				<td>B.A</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Principal</td>
																				<td>ALRPM5809M</td>
																				<td>DCB BANK LTD</td>
																				<td>14300009519</td>
																				<td>DCBL000143</td>
																				<td>7000</td>
																				<td></td>
																				<td></td>
																				<td>493891000000</td>
																				<td></td>
																				<td>7000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>22</td>
															<td>001175</td>
																				<td></td>
																				<td>Hansraj</td>
																				<td>04-01-1985</td>
																				<td>Male</td>
																				<td>Omprakash</td>
																				<td>hansraj4384@gmail.com</td>
																				<td>8053038939</td>
																				<td>Vpo RAMGARH DISTT REWARI state haryana</td>
																				<td>M.A</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>7</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>20000</td>
																				<td></td>
																				<td>English,social sciences,Science/Evs,Social Science</td>
																				<td></td>
																				<td>00q</td>
																				<td>20000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>23</td>
															<td>92</td>
																				<td></td>
																				<td>HARSHALI SHAH</td>
																				<td>14-11-1994</td>
																				<td>Female</td>
																				<td>SUNILpoj</td>
																				<td>HARSHALI234@GMAIL.COM</td>
																				<td>9406046007</td>
																				<td>HN-126 SUNDAR NAGAR </td>
																				<td>B.ed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>8</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>3000</td>
																				<td></td>
																				<td>Hindi,Maths,English,G.K.Computer</td>
																				<td></td>
																				<td></td>
																				<td>3000</td>
																				<td>1200</td>
																				<td>3</td>
																				<td>0</td>
																				<td>1</td>
																				<td>3</td>
															</tr>
										<tr>
					<td>24</td>
															<td>84</td>
																				<td></td>
																				<td>Human Ram Bhati</td>
																				<td>01-06-2017</td>
																				<td>Male</td>
																				<td>Jagat</td>
																				<td>rajanikanta.fine@gmail.com</td>
																				<td>8249570835</td>
																				<td>AT/PO-DHURWAGUDI(KHOKHMA, Tahasil-MAINPUR</td>
																				<td>B.A Bed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>DCB BANK LTD</td>
																				<td>14300009511</td>
																				<td>DCBL000143</td>
																				<td>4500</td>
																				<td></td>
																				<td>Hindi</td>
																				<td>493891000000</td>
																				<td></td>
																				<td>4500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>25</td>
															<td>323</td>
																				<td></td>
																				<td>JAGMAL YADAV</td>
																				<td>16-09-2022</td>
																				<td>Male</td>
																				<td></td>
																				<td>radhachohan@gmail.com</td>
																				<td>9898788845</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>26</td>
															<td>332</td>
																				<td></td>
																				<td>JAGMAL YADAV</td>
																				<td>10-10-2022</td>
																				<td>Male</td>
																				<td>late md masood khan</td>
																				<td>radhachohan@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-11-08</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>7000</td>
																				<td>11122336</td>
																				<td></td>
																				<td>9988223334</td>
																				<td></td>
																				<td>7000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>27</td>
															<td>333</td>
																				<td></td>
																				<td>JAGMAL YADAV</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td>late md masood khan</td>
																				<td>radhachohan@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-11-07</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>7000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>7000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>28</td>
															<td>166</td>
																				<td></td>
																				<td>JAVID</td>
																				<td>18-03-2020</td>
																				<td>Male</td>
																				<td></td>
																				<td>javid@gmail.com</td>
																				<td></td>
																				<td>panzgam</td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>29</td>
															<td>20</td>
																				<td></td>
																				<td>jay kishan</td>
																				<td>10-09-2018</td>
																				<td>Male</td>
																				<td>tomar ji</td>
																				<td>jay@gmail.com</td>
																				<td>9864645645</td>
																				<td>jktujryjryrjjjjjjjjj</td>
																				<td>phd</td>
																				<td>2022-09-16</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>30</td>
															<td>126</td>
																				<td></td>
																				<td>jitendra shriwash</td>
																				<td>01-01-1988</td>
																				<td>Male</td>
																				<td>godhan shriwas</td>
																				<td>jittu1988@gmail.com</td>
																				<td>9691737446</td>
																				<td>nawgaon</td>
																				<td>BA fainl</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>31</td>
															<td>82</td>
																				<td></td>
																				<td>Jyoti Ranjan Patra</td>
																				<td>11-08-1992</td>
																				<td>Male</td>
																				<td>Dhirendra Kumar Patra</td>
																				<td>rajanikanta.fine@gmail.com</td>
																				<td>+917008251522</td>
																				<td>AT/PO-DHURWAGUDI(KHOKHMA, Tahasil-MAINPUR</td>
																				<td>BCA D.E.D</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>Upper Primary</td>
																				<td>Teacher</td>
																				<td>ALRPM5809M</td>
																				<td>DCB BANK LTD</td>
																				<td>14300009515</td>
																				<td>DCBL000143</td>
																				<td>10000</td>
																				<td></td>
																				<td>Science</td>
																				<td>493891</td>
																				<td></td>
																				<td>10000</td>
																				<td>1500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>32</td>
															<td>15</td>
																				<td></td>
																				<td>kailash soni</td>
																				<td>10-11-1990</td>
																				<td>Male</td>
																				<td>ishwar deen soni</td>
																				<td>kailusoni99@gmail.com</td>
																				<td>9617777047</td>
																				<td>hoshangabad city</td>
																				<td>BE</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>NURSERY,4th,LKG,1ST</td>
																				<td>Teacher</td>
																				<td>CYWPS1953A</td>
																				<td>sbi</td>
																				<td>9584785878</td>
																				<td>sbinoo07</td>
																				<td>5000</td>
																				<td>1521468</td>
																				<td>Mathematics,SCIENCE,AG BIO,S.S.</td>
																				<td>12345678</td>
																				<td></td>
																				<td>5000</td>
																				<td>100</td>
																				<td>10</td>
																				<td>300</td>
																				<td>10</td>
																				<td>10</td>
															</tr>
										<tr>
					<td>33</td>
															<td>19</td>
																				<td></td>
																				<td>kailash soni</td>
																				<td>10-11-1990</td>
																				<td>Male</td>
																				<td>ishwar deen soni</td>
																				<td>kailusoni99@gmail.com</td>
																				<td>9617777047</td>
																				<td>hoshangabad</td>
																				<td>BE</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>LKG</td>
																				<td>Teacher</td>
																				<td>CYWPS1953A</td>
																				<td>sbi</td>
																				<td>9584785878</td>
																				<td>sbinoo07</td>
																				<td>5000</td>
																				<td>1521468</td>
																				<td>AG CHEMISTRY</td>
																				<td>12345678</td>
																				<td></td>
																				<td>5000</td>
																				<td>100</td>
																				<td>10</td>
																				<td>300</td>
																				<td>10</td>
																				<td>10</td>
															</tr>
										<tr>
					<td>34</td>
															<td>2901140</td>
																				<td></td>
																				<td>KAREEM RANA</td>
																				<td>09-12-1998</td>
																				<td>Male</td>
																				<td>AZAD KHAN</td>
																				<td>KKHAN0025@GMAIL.COM</td>
																				<td>8859090867</td>
																				<td>RABUPURA G.B. NAGAR</td>
																				<td>M.sc+ IGD Bombey</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>ALL,LKG</td>
																				<td>Principle</td>
																				<td></td>
																				<td>PNB</td>
																				<td>67800015003`101</td>
																				<td></td>
																				<td>12000</td>
																				<td></td>
																				<td>ALL</td>
																				<td>969561550578</td>
																				<td></td>
																				<td>12000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>35</td>
															<td>108</td>
																				<td></td>
																				<td>KUMAR RAVIKANT</td>
																				<td>10-02-1981</td>
																				<td>Male</td>
																				<td>BUNDI PRASAD</td>
																				<td>ravi100281@gmail.com</td>
																				<td>7979046795</td>
																				<td>M88 HOUSING BOARD COLONY, NEAR -ASHA SINGH MORE, GAYA</td>
																				<td>M.A IN EDUCATION</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>1ST,UKG,NURSERY</td>
																				<td>Incharge Principal</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>50000</td>
																				<td>GYA/EDN-9391</td>
																				<td>SCIENCE</td>
																				<td></td>
																				<td></td>
																				<td>50000</td>
																				<td></td>
																				<td>1</td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>36</td>
															<td>99</td>
																				<td></td>
																				<td>kunal mourya</td>
																				<td>01-02-1996</td>
																				<td>Male</td>
																				<td>umesh</td>
																				<td>umeshmourya2580@gmail.com</td>
																				<td>8889648546</td>
																				<td>ashokagardan bhopal </td>
																				<td>BE pass out </td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>12,11TH</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>345234</td>
																				<td></td>
																				<td>15000</td>
																				<td></td>
																				<td>English,Hindi </td>
																				<td></td>
																				<td></td>
																				<td>15000</td>
																				<td></td>
																				<td>1</td>
																				<td>1</td>
																				<td>2</td>
																				<td>3</td>
															</tr>
										<tr>
					<td>37</td>
															<td>322</td>
																				<td></td>
																				<td>kundan kumar jha</td>
																				<td>04-01-1998</td>
																				<td>Male</td>
																				<td></td>
																				<td>kjhatimple@gmail.com</td>
																				<td>8789581784</td>
																				<td>At-Dhengari ward no.06 Po- Bardaha ps- Bardaha dist-Araria</td>
																				<td>m.com</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>38</td>
															<td>143</td>
																				<td>1</td>
																				<td>MD JAHIR KHAN</td>
																				<td>27-05-2000</td>
																				<td>Male</td>
																				<td>MD jalaluddin khan</td>
																				<td>jahir.maxwell@gmail.com</td>
																				<td>+919086669999</td>
																				<td>Sora ching wangma</td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>300</td>
																				<td></td>
																				<td>E</td>
																				<td>795103</td>
																				<td></td>
																				<td>300</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>39</td>
															<td>199</td>
																				<td></td>
																				<td>Mohit nagar</td>
																				<td>27-02-2003</td>
																				<td>Male</td>
																				<td>Bheemsingh Nagar</td>
																				<td>dhakadmohit60448@gmail.com</td>
																				<td>7999245216</td>
																				<td>Amona road ward no. 02 tonkkhurd</td>
																				<td>B.sc/B.ed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>10th</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>4000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>112233221</td>
																				<td>4000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>40</td>
															<td>313</td>
																				<td></td>
																				<td>Moniika</td>
																				<td>25-04-2020</td>
																				<td>Female</td>
																				<td>Rathore</td>
																				<td>monika@gmail.com</td>
																				<td>9825356122</td>
																				<td>Bhopal</td>
																				<td>m.com</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>41</td>
															<td>315</td>
																				<td></td>
																				<td>Monika</td>
																				<td>25-01-2021</td>
																				<td>Female</td>
																				<td>Rathore</td>
																				<td>monika@gmail.com</td>
																				<td>9821556548</td>
																				<td></td>
																				<td>m.com</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>42</td>
															<td>124489134</td>
																				<td></td>
																				<td>MONU KUMAR</td>
																				<td>15-05-1988</td>
																				<td>Male</td>
																				<td>MANA RAM JAT</td>
																				<td>JKLJKLJKJK@GMAIL.COM</td>
																				<td>89559698998</td>
																				<td>JAIPUR</td>
																				<td>GRADUATION</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Accountant</td>
																				<td>PAND154893</td>
																				<td>HDFC</td>
																				<td>600021546658789</td>
																				<td>HDFC0002154</td>
																				<td>17500</td>
																				<td>2457845</td>
																				<td>OFFICE</td>
																				<td>124568954578</td>
																				<td></td>
																				<td>17500</td>
																				<td>3</td>
																				<td>1</td>
																				<td>1</td>
																				<td>1</td>
																				<td>1</td>
															</tr>
										<tr>
					<td>43</td>
															<td>S145</td>
																				<td></td>
																				<td>Mr Daya Nand Tiwari</td>
																				<td>13-02-1976</td>
																				<td>Male</td>
																				<td>Mr Sahiba Nand Tiwari</td>
																				<td>lakshya4shiksha@gmail.com</td>
																				<td>9336024608</td>
																				<td>Vill-Bhudkudi PO. Veer Pur Bhoj District Gonda</td>
																				<td>Graduate</td>
																				<td>2022-09-16</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Director</td>
																				<td></td>
																				<td>Allahabad bank</td>
																				<td>2819</td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td>254927319167</td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td>7</td>
																				<td>7</td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>44</td>
															<td>102</td>
																				<td></td>
																				<td>MR. BHOOPENDRA LODHI </td>
																				<td>11-08-1995</td>
																				<td>Male</td>
																				<td>BHAGWAT SINGH </td>
																				<td>BHOOPENDRA081194@GMAIL.COM</td>
																				<td>9340342389</td>
																				<td>JAGANNATHAPUR </td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>8TH</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td>Social Science</td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>45</td>
															<td>101</td>
																				<td>0009249336</td>
																				<td>MR. SANTOSH KUMAR SAHU</td>
																				<td>04-12-1994</td>
																				<td>Male</td>
																				<td>TABAL SINGH </td>
																				<td>SANTOSHSAHU6513@GMAIL.COM</td>
																				<td>8718909760</td>
																				<td>BICHUWA</td>
																				<td>B.A. D.C.A. </td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>UKG</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td>Science</td>
																				<td>487330</td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>46</td>
															<td>124</td>
																				<td></td>
																				<td>Neelam jharbade</td>
																				<td>20-08-1994</td>
																				<td>Female</td>
																				<td></td>
																				<td>neelamjharbade94@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Other</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>21000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>21000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>47</td>
															<td>148</td>
																				<td></td>
																				<td>Neelam jharbade</td>
																				<td>20-11-1994</td>
																				<td>Female</td>
																				<td>Sukhdev jharbade</td>
																				<td>neelamjharbade94@gmail.com</td>
																				<td>8109668266</td>
																				<td></td>
																				<td>BE </td>
																				<td>2022-09-16</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Other</td>
																				<td>BCTPJ8248</td>
																				<td>Karnataka bank</td>
																				<td>1272500101425401</td>
																				<td>KARB0000127</td>
																				<td>21000</td>
																				<td></td>
																				<td></td>
																				<td>539534751602</td>
																				<td></td>
																				<td>21000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>48</td>
															<td>309</td>
																				<td>23</td>
																				<td>nidhi</td>
																				<td>02-03-2000</td>
																				<td>Female</td>
																				<td>krishna</td>
																				<td>jjj33@gmail.com</td>
																				<td>7656754345</td>
																				<td>bhopal</td>
																				<td>pg</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>11th</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>maths</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>49</td>
															<td>123456109</td>
																				<td></td>
																				<td>nikhil advin</td>
																				<td>12-12-1990</td>
																				<td>Male</td>
																				<td>H. N advin</td>
																				<td>abc@gmail.com</td>
																				<td>1236547896</td>
																				<td></td>
																				<td>BE</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>LKG</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td>Hindi ,Sanskrit </td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td>2</td>
																				<td>5</td>
																				<td>4</td>
																				<td>1</td>
															</tr>
										<tr>
					<td>50</td>
															<td>AAAA141</td>
																				<td></td>
																				<td>PALWINDER KAUR</td>
																				<td>15-04-1972</td>
																				<td>Female</td>
																				<td>BHARPUR SINGH</td>
																				<td>KPALWINDER1972@GMAIL.COM</td>
																				<td>9417894252</td>
																				<td>SHUTRANA</td>
																				<td>M.A.B.ED.</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>7500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>7500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>51</td>
															<td>81</td>
																				<td></td>
																				<td>Pankajini Patra</td>
																				<td>23-05-2004</td>
																				<td>Female</td>
																				<td>Rajanikanta Mund</td>
																				<td>rajanikanta.fine@gmail.com</td>
																				<td>8249570835</td>
																				<td>AT/PO-DHURWAGUDI(KHOKHMA, Tahasil-MAINPUR</td>
																				<td>M.A</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>6th</td>
																				<td>Teacher</td>
																				<td>ALRPM5809M</td>
																				<td>DCB BANK LTD</td>
																				<td>14300009515</td>
																				<td>DCBL000143</td>
																				<td>5000</td>
																				<td>niil</td>
																				<td>Maths</td>
																				<td>4938916738907</td>
																				<td></td>
																				<td>5000</td>
																				<td>00</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>52</td>
															<td>RP34641645336</td>
																				<td></td>
																				<td>PARVATI PATIL</td>
																				<td>06-02-2006</td>
																				<td>Female</td>
																				<td>DURJAN PATIL</td>
																				<td>PATILPARVATI072@GAMIL.COM</td>
																				<td>7477010621</td>
																				<td>PATALESHWAR CHHINDWARA</td>
																				<td>MA</td>
																				<td>2022-10-14</td>
																				<td>Teaching</td>
																				<td>1 TO 5</td>
																				<td>Teacher</td>
																				<td>34646425331</td>
																				<td>SBI</td>
																				<td>213546879</td>
																				<td>SBI6464658552</td>
																				<td>10000</td>
																				<td>500</td>
																				<td>MATHS</td>
																				<td>365645687245</td>
																				<td>466636426</td>
																				<td>10000</td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>53</td>
															<td>Ok show130</td>
																				<td></td>
																				<td>Pawan malviya</td>
																				<td>04-10-1995</td>
																				<td>Male</td>
																				<td>Shreeram malviya</td>
																				<td>pawan1995@gmail.com</td>
																				<td>7746943011</td>
																				<td>Bindrai ghanaumri</td>
																				<td>12+3 fainal</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>1st to 5th</td>
																				<td>Teacher</td>
																				<td>Pyw1230r</td>
																				<td>Bank of maharastra</td>
																				<td>6023380567</td>
																				<td>MAHB0001929</td>
																				<td>4000</td>
																				<td>00</td>
																				<td>Hindi</td>
																				<td>889965432156</td>
																				<td></td>
																				<td>4000</td>
																				<td>100</td>
																				<td>06</td>
																				<td>00</td>
																				<td>06</td>
																				<td>00</td>
															</tr>
										<tr>
					<td>54</td>
															<td>310</td>
																				<td></td>
																				<td>pooja </td>
																				<td>03-05-2000</td>
																				<td>Female</td>
																				<td>surendra singh</td>
																				<td>rani73@gmail.com</td>
																				<td>56475534</td>
																				<td>near prabhat suare bhopal</td>
																				<td>m.com</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>11th</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>maths</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>55</td>
															<td>261</td>
																				<td></td>
																				<td>PRAKASH KUMAWAT</td>
																				<td>07-01-2022</td>
																				<td>Male</td>
																				<td>demo father</td>
																				<td>rkmps2014@gmail.com</td>
																				<td></td>
																				<td>BIRPUR</td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>LKG</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>B.K.A.</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>56</td>
															<td>1147</td>
																				<td>320401</td>
																				<td>praveen</td>
																				<td>07-07-1987</td>
																				<td>Male</td>
																				<td>ishwar lal</td>
																				<td>upadhyaygroup1@gmail.com</td>
																				<td>8120900282</td>
																				<td>82 2 kadhai, , mandir ki pass</td>
																				<td>MA BED</td>
																				<td>2022-11-28</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Principle</td>
																				<td></td>
																				<td>BANK OF INDIA</td>
																				<td>911310110009175</td>
																				<td>BKID0009113</td>
																				<td>15000</td>
																				<td></td>
																				<td></td>
																				<td>519285458694</td>
																				<td></td>
																				<td>15000</td>
																				<td>0</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>57</td>
															<td>78</td>
																				<td></td>
																				<td>pravin</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>abc@gmail.com</td>
																				<td>7578412587</td>
																				<td></td>
																				<td>BSC</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td>asdfgh123</td>
																				<td>sbi</td>
																				<td>123456789</td>
																				<td>123456987</td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td>254625412356</td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>58</td>
															<td>85</td>
																				<td></td>
																				<td>Premshankar Yadav</td>
																				<td>01-09-2017</td>
																				<td>Male</td>
																				<td>vijay shankar</td>
																				<td>rajanikanta.fine@gmail.com</td>
																				<td>8249570835</td>
																				<td>AT/PO-DHURWAGUDI(KHOKHMA, Tahasil-MAINPUR</td>
																				<td>B.A Bed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td>ALRPM5809M</td>
																				<td>DCB BANK LTD</td>
																				<td>14300009511</td>
																				<td>DCBL000143</td>
																				<td>4000</td>
																				<td></td>
																				<td>social studies</td>
																				<td>493891000000</td>
																				<td></td>
																				<td>4000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>59</td>
															<td>328</td>
																				<td></td>
																				<td>rahul </td>
																				<td>08-09-1997</td>
																				<td>Male</td>
																				<td>shiva ji</td>
																				<td>mkb@gmail.com</td>
																				<td>56455698</td>
																				<td>subhash nagar </td>
																				<td>B .tech</td>
																				<td>2022-10-06</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>60</td>
															<td>97</td>
																				<td></td>
																				<td>Rajanikanta Mund</td>
																				<td>21-01-1973</td>
																				<td>Male</td>
																				<td>Raghumani Mund</td>
																				<td>rajani.winzon@gmail.com</td>
																				<td>8249570835</td>
																				<td>AT-CHILICHILA,PO-BRAHMAN CHHENDIA, Tahasil-Dharamgarh</td>
																				<td>M.A</td>
																				<td>2022-09-16</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Other</td>
																				<td>ALRPM5809M</td>
																				<td>DCB BANK</td>
																				<td>14300009515</td>
																				<td>DCBL000143</td>
																				<td>20000</td>
																				<td></td>
																				<td></td>
																				<td>363965552995</td>
																				<td></td>
																				<td>20000</td>
																				<td></td>
																				<td>1</td>
																				<td>2</td>
																				<td>0</td>
																				<td>0</td>
															</tr>
										<tr>
					<td>61</td>
															<td>302</td>
																				<td></td>
																				<td>RAMKISHAN JI</td>
																				<td>01-01-0001</td>
																				<td>Male</td>
																				<td>ABC</td>
																				<td>ABC@GMAIL.COM</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>11TH,12TH</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>History</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>62</td>
															<td>107</td>
																				<td></td>
																				<td>rani</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>rani2@gmail.com</td>
																				<td>8275483645</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td>500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>63</td>
															<td>80</td>
																				<td></td>
																				<td>Rashi Saxena</td>
																				<td>08-07-1996</td>
																				<td>Female</td>
																				<td>mr. surendra saxena</td>
																				<td>rashisaxena1997@gmail.com</td>
																				<td>9630843846</td>
																				<td>chhatarpor</td>
																				<td>M.Sc.(IT)</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td>computer</td>
																				<td>471001</td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td>1</td>
																				<td>0</td>
																				<td>0</td>
																				<td>0</td>
															</tr>
										<tr>
					<td>64</td>
															<td>281</td>
																				<td></td>
																				<td>Rati </td>
																				<td>20-06-1993</td>
																				<td>Male</td>
																				<td>Rajkumar</td>
																				<td>Rati@gmail.com</td>
																				<td>9638527410</td>
																				<td>Dwarka New delhi </td>
																				<td>JBT B com</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2712</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>65</td>
															<td>111</td>
																				<td></td>
																				<td>Ravi</td>
																				<td>18-09-2005</td>
																				<td>Male</td>
																				<td></td>
																				<td>admin@gmail.com</td>
																				<td>00000000</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>66</td>
															<td>222155</td>
																				<td>Dff</td>
																				<td>RAYEES</td>
																				<td>10-05-1983</td>
																				<td>Male</td>
																				<td>Mani</td>
																				<td>dupanzgam@gmail.com</td>
																				<td>9906412069</td>
																				<td>Chakoora</td>
																				<td>M.A B.Ed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>2ND</td>
																				<td>Computer INSTRUCTOR</td>
																				<td>R444</td>
																				<td>Xxxx</td>
																				<td>689854689</td>
																				<td>IDIDIBIDIDIB0097</td>
																				<td>5000</td>
																				<td>  00</td>
																				<td>All</td>
																				<td>5556889096</td>
																				<td></td>
																				<td>5000</td>
																				<td>00</td>
																				<td>2</td>
																				<td>2</td>
																				<td>2</td>
																				<td>0</td>
															</tr>
										<tr>
					<td>67</td>
															<td>303</td>
																				<td></td>
																				<td>rima d</td>
																				<td>30-11--0001</td>
																				<td>Female</td>
																				<td></td>
																				<td>radhachohan@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>68</td>
															<td>71</td>
																				<td>0012002881</td>
																				<td>rohan</td>
																				<td>15-02-2019</td>
																				<td>Male</td>
																				<td>ajay</td>
																				<td>KOSAL78@GMAIL.COM</td>
																				<td>25625634</td>
																				<td>Near Prabhat petrol pump, Subhash Nagar, Ashoka, Garden,</td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>1ST,UKG,NURSERY</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td>Sanskrit ,English</td>
																				<td>462023</td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>69</td>
															<td>151</td>
																				<td></td>
																				<td>Rohit </td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>rohit@simption.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>70</td>
															<td>110</td>
																				<td></td>
																				<td>sadab</td>
																				<td>25-07-8458</td>
																				<td>Male</td>
																				<td></td>
																				<td>rani2@gmail.com</td>
																				<td>8275483645</td>
																				<td></td>
																				<td></td>
																				<td>2022-11-11</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>71</td>
															<td>Samir 112</td>
																				<td></td>
																				<td>Samir harle</td>
																				<td>25-08-1994</td>
																				<td>Male</td>
																				<td>Hariman </td>
																				<td>sam.harle@rediffmail.com</td>
																				<td>7083029022 </td>
																				<td>At thar tah ashti dist wardha</td>
																				<td>12th</td>
																				<td>2022-09-16</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Librarian</td>
																				<td>AAAAAAAAAA</td>
																				<td>Bom</td>
																				<td>12346788987</td>
																				<td>MOB45899553</td>
																				<td>120000</td>
																				<td>0</td>
																				<td></td>
																				<td>865801216080</td>
																				<td></td>
																				<td>120000</td>
																				<td>0</td>
																				<td>5</td>
																				<td>5</td>
																				<td>5</td>
																				<td>8</td>
															</tr>
										<tr>
					<td>72</td>
															<td>79</td>
																				<td></td>
																				<td>sanjay</td>
																				<td>08-12-1990</td>
																				<td>Male</td>
																				<td></td>
																				<td>sunflowerpublicschool786@gmail.com</td>
																				<td>8654963254</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>50000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>50000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1</td>
																				<td></td>
															</tr>
										<tr>
					<td>73</td>
															<td>105</td>
																				<td></td>
																				<td>SANTOSH KUMAR SINGH</td>
																				<td>01-12-1993</td>
																				<td>Male</td>
																				<td></td>
																				<td>nagendra709042198@GMAIL.COM</td>
																				<td>9709042198</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>6500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>6500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>74</td>
															<td>146</td>
																				<td></td>
																				<td>satyaprakash yadav</td>
																				<td>12-10-1988</td>
																				<td>Male</td>
																				<td>raj pal singh yadav</td>
																				<td>yadavsatyaprakashr@gmail.com</td>
																				<td>9638277283</td>
																				<td>godadara surat</td>
																				<td>Bed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>12</td>
																				<td>Teacher</td>
																				<td>airkp2344c</td>
																				<td>sbi</td>
																				<td>40462475056</td>
																				<td>SBIN0011017</td>
																				<td>12000</td>
																				<td></td>
																				<td>math</td>
																				<td>123456789123</td>
																				<td></td>
																				<td>12000</td>
																				<td></td>
																				<td>4</td>
																				<td>1</td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>75</td>
															<td>789456123216320</td>
																				<td>8465847</td>
																				<td>shamli </td>
																				<td>08-08-7997</td>
																				<td>Female</td>
																				<td>harichandra</td>
																				<td>mahsramshamli@gmail.com</td>
																				<td>6359874129</td>
																				<td>bhopal</td>
																				<td>BSC</td>
																				<td>2022-09-15</td>
																				<td>Teaching</td>
																				<td>12</td>
																				<td>Teacher</td>
																				<td>EETPM2323F</td>
																				<td>UNION BANK OF INDIA</td>
																				<td>62620001113634</td>
																				<td>UBI02396S</td>
																				<td>20000</td>
																				<td>12365</td>
																				<td>MATHS</td>
																				<td>23659874123</td>
																				<td>55544411</td>
																				<td>20000</td>
																				<td>100</td>
																				<td>200</td>
																				<td>834</td>
																				<td>100</td>
																				<td>350</td>
															</tr>
										<tr>
					<td>76</td>
															<td>153</td>
																				<td></td>
																				<td>Shiwanand Tiwari</td>
																				<td>27-10-1999</td>
																				<td>Female</td>
																				<td>Shiwanand Tiwari</td>
																				<td>Satishtiwari77616@gmail.com</td>
																				<td>8602503194</td>
																				<td>ward no. 25 house no 598 goal bajar rajnandgaon CG.</td>
																				<td>B.Com</td>
																				<td>2022-11-30</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>0</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>0</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>77</td>
															<td>75</td>
																				<td></td>
																				<td>shreya sharma</td>
																				<td>04-03-1991</td>
																				<td>Female</td>
																				<td>Mr. Bhola Sharma</td>
																				<td>dummy@gmail.com</td>
																				<td>987461236</td>
																				<td>Durga nagar rajakhedi makronia</td>
																				<td>m.tech</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>0</td>
																				<td></td>
																				<td></td>
																				<td>462000</td>
																				<td></td>
																				<td>0</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>78</td>
															<td>87</td>
																				<td>0004261845</td>
																				<td>Sibdutta Negi</td>
																				<td>01-05-2015</td>
																				<td>Male</td>
																				<td>Lalit Mohan Negi</td>
																				<td>rajanikanta.fine@gmail.com</td>
																				<td>9981229723</td>
																				<td>AT/PO-DHURWAGUDI(KHOKHMA, Tahasil-MAINPUR</td>
																				<td>HSC,D.ed</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>DCB BANK LTD</td>
																				<td>14300009517</td>
																				<td>DCBL000143</td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td>493891</td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>79</td>
															<td>91</td>
																				<td></td>
																				<td>srishti gusain</td>
																				<td>25-04-2019</td>
																				<td>Male</td>
																				<td></td>
																				<td>srishtigusain56@gmail.com</td>
																				<td>8602503194</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>80</td>
															<td>gtttsk280</td>
																				<td>147852369</td>
																				<td>Sunita Bai</td>
																				<td>05-05-1982</td>
																				<td>Female</td>
																				<td>Manmohan Raj</td>
																				<td>sunitabai@gmail.com</td>
																				<td>9992288710</td>
																				<td>Gurgaon Sector 10</td>
																				<td>MA Bed Med </td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>1st</td>
																				<td>Teacher</td>
																				<td>34962655</td>
																				<td>sbi</td>
																				<td>15479621475</td>
																				<td>SBI54856</td>
																				<td>9</td>
																				<td>65125</td>
																				<td>hindi </td>
																				<td>552145214521</td>
																				<td>2712</td>
																				<td>9</td>
																				<td>1</td>
																				<td>1</td>
																				<td>1</td>
																				<td>3</td>
																				<td>1</td>
															</tr>
										<tr>
					<td>81</td>
															<td>142</td>
																				<td></td>
																				<td>Supriya Santosh</td>
																				<td>05-12-2019</td>
																				<td>Female</td>
																				<td>Brijendra Pandey</td>
																				<td>Satishtiwari77616@gmail.com</td>
																				<td>4454655y6547</td>
																				<td>vbvnvvv</td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>56565</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>56565</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>82</td>
															<td>144</td>
																				<td></td>
																				<td>Supriya Santosh</td>
																				<td>01-05-1992</td>
																				<td>Female</td>
																				<td>Shiwanand Tiwari</td>
																				<td>supriyasantosh1234@gmail.com</td>
																				<td>8602503194</td>
																				<td>MILAKSARAY SHOP</td>
																				<td>B.Com. DEd.</td>
																				<td>2022-11-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>8000</td>
																				<td></td>
																				<td></td>
																				<td>322201</td>
																				<td></td>
																				<td>8000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>83</td>
															<td>137</td>
																				<td></td>
																				<td>Supriya tiwari</td>
																				<td>02-01-2000</td>
																				<td>Female</td>
																				<td>sdTiwari</td>
																				<td>saltnatansari159@gmail.com</td>
																				<td>8319595088</td>
																				<td>ward no. 25 house no 598 goal bajar rajnandgaon CG.</td>
																				<td>B.Com</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>84</td>
															<td>150</td>
																				<td></td>
																				<td>SURAJ KUMAR SINGH</td>
																				<td>05-02-1995</td>
																				<td>Male</td>
																				<td>SATISH KUMAR</td>
																				<td>tribhuwan311@gmail.com</td>
																				<td>9576771430</td>
																				<td>NURDICHAK</td>
																				<td>BA</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>6000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>6000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>85</td>
															<td>70</td>
																				<td>123456</td>
																				<td>suresh soni</td>
																				<td>01-01-2013</td>
																				<td>Male</td>
																				<td>something</td>
																				<td>someone@someid.com</td>
																				<td>07878963254</td>
																				<td>bhopal</td>
																				<td>12</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>LKG,2ND</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>20</td>
																				<td></td>
																				<td>maths</td>
																				<td>462030</td>
																				<td></td>
																				<td>20</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>86</td>
															<td>154</td>
																				<td></td>
																				<td>suresh soni</td>
																				<td>14-02-2020</td>
																				<td>Male</td>
																				<td>MR. SHEETLA PRASAD DWIVEDI </td>
																				<td>someone@someid.com</td>
																				<td></td>
																				<td>bhopal</td>
																				<td>12</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>8000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>8000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>87</td>
															<td>136</td>
																				<td></td>
																				<td>Teacher</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>teacher1@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>5000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>88</td>
															<td>149</td>
																				<td></td>
																				<td>Tribhuwan Kumar</td>
																				<td>11-10-1995</td>
																				<td>Male</td>
																				<td>Mithilesh Mishra</td>
																				<td>tribhuwan311@gmail.com</td>
																				<td>9155703545</td>
																				<td>Sambey</td>
																				<td>Graduation</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>89</td>
															<td>0338</td>
																				<td></td>
																				<td>TUSHAR</td>
																				<td>20-02-2001</td>
																				<td>Male</td>
																				<td>SANJAY</td>
																				<td>AAA@AAA.COM</td>
																				<td>0</td>
																				<td>0</td>
																				<td>LLB</td>
																				<td>2022-10-31</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Principle</td>
																				<td></td>
																				<td>JJUBL</td>
																				<td>123456789012345</td>
																				<td>HDFC0CJJUCBN</td>
																				<td>4500000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>0</td>
																				<td>4500000</td>
																				<td>4500000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>90</td>
															<td>96</td>
																				<td></td>
																				<td>TUSHAR IYRE </td>
																				<td>12-02-1985</td>
																				<td>Male</td>
																				<td>RAHUL</td>
																				<td>SIR1234@GMAIL.COM</td>
																				<td>9845632156</td>
																				<td>bhopal</td>
																				<td>B.ED</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>10</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>15000</td>
																				<td></td>
																				<td>maths</td>
																				<td>462030</td>
																				<td></td>
																				<td>15000</td>
																				<td></td>
																				<td>1</td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>91</td>
															<td>93</td>
																				<td></td>
																				<td>tushar modi </td>
																				<td>04-12-1885</td>
																				<td>Male</td>
																				<td>ayush modi </td>
																				<td>tushar234@gmail.com</td>
																				<td>8109964727</td>
																				<td>Chikhli ward no. 05 Rajnandgaon CG.</td>
																				<td>B.Com</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>8</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td>Hindi,Maths,English,G.K.Computer</td>
																				<td></td>
																				<td></td>
																				<td>10000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>92</td>
															<td>-335</td>
																				<td></td>
																				<td>TUSHAR SULTANE</td>
																				<td>20-02-2001</td>
																				<td>Male</td>
																				<td></td>
																				<td>TS20@GMAIL.COM</td>
																				<td></td>
																				<td></td>
																				<td>BCOM</td>
																				<td>2022-05-01</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Principle</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>-</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>93</td>
															<td>312</td>
																				<td></td>
																				<td>ufgv</td>
																				<td>19-09-2021</td>
																				<td>Female</td>
																				<td>xfx</td>
																				<td>kftg@gmail.com</td>
																				<td>25646541</td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>94</td>
															<td>152</td>
																				<td></td>
																				<td>umesh</td>
																				<td>06-02-2020</td>
																				<td>Male</td>
																				<td></td>
																				<td>ymeysssj@gmail</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>1ST,UKG,LKG</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1500</td>
																				<td></td>
																				<td>Science,Mathematics,English 2</td>
																				<td></td>
																				<td></td>
																				<td>1500</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>95</td>
															<td>122</td>
																				<td></td>
																				<td>umesh mourya</td>
																				<td>29-01-1996</td>
																				<td>Male</td>
																				<td>ramdash mourya</td>
																				<td>umeshmourya2580@gmail.com</td>
																				<td>7067247461</td>
																				<td>240/A sundar nagar ashoka gardan bhopal</td>
																				<td>BE </td>
																				<td>2022-09-16</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>BDE</td>
																				<td></td>
																				<td>SBI bank</td>
																				<td>31917928416</td>
																				<td>Sbin0002896</td>
																				<td>21000</td>
																				<td></td>
																				<td></td>
																				<td>901107069970</td>
																				<td></td>
																				<td>21000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>96</td>
															<td>129</td>
																				<td></td>
																				<td>user1</td>
																				<td>30-11--0001</td>
																				<td>Male</td>
																				<td></td>
																				<td>user1@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>1000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>97</td>
															<td>29002139</td>
																				<td></td>
																				<td>VAISHNAVI AGRWAL</td>
																				<td>12-12-1990</td>
																				<td>Female</td>
																				<td>VIVEK VERMA</td>
																				<td>VAISHNAVIAGRWAL123@GAMIL.COM</td>
																				<td>7900927306</td>
																				<td>CHOW BAJAR B.S.R.</td>
																				<td>B.A.</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td>1 TO 8</td>
																				<td>Teacher</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>4000</td>
																				<td></td>
																				<td>MATH</td>
																				<td></td>
																				<td></td>
																				<td>4000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>98</td>
															<td>128</td>
																				<td></td>
																				<td>VATAN VERMA</td>
																				<td>20-11-1990</td>
																				<td>Male</td>
																				<td></td>
																				<td>vatan.niit@gmail.com</td>
																				<td>8840241165</td>
																				<td>143 sadarpur pratappur kamaicha lambhua sultanpur</td>
																				<td>MCA</td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td>ENGINEER</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>20000</td>
																				<td></td>
																				<td></td>
																				<td>222303</td>
																				<td></td>
																				<td>20000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>99</td>
															<td>340</td>
																				<td></td>
																				<td>VIVEK KUMAR</td>
																				<td>01-12-2000</td>
																				<td>Male</td>
																				<td>VIPIN SAHANI</td>
																				<td>vivekies2000@gmail.com</td>
																				<td>9525553060</td>
																				<td></td>
																				<td>BA</td>
																				<td>2022-12-01</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>100</td>
															<td>157</td>
																				<td></td>
																				<td>xxx</td>
																				<td>02-11-2019</td>
																				<td>Male</td>
																				<td></td>
																				<td>rather@gmail.com</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>2022-09-16</td>
																				<td>Teaching</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>15000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td>15000</td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
															</tr>
										<tr>
					<td>101</td>
															<td>138</td>
																				<td></td>
																				<td>Yashpal Kr</td>
																				<td>25-01-1995</td>
																				<td>Male</td>
																				<td>Yashpal Gupta</td>
																				<td>yash14@gmail.com</td>
																				<td>741236985</td>
																				<td>CCL Sawang</td>
																				<td>BA</td>
																				<td>2022-09-16</td>
																				<td>Non Teaching</td>
																				<td></td>
																				<td>Accountant</td>
																				<td>jkl4515</td>
																				<td>SBI</td>
																				<td>13698854000</td>
																				<td>SBI00074K</td>
																				<td>15000</td>
																				<td></td>
																				<td></td>
																				<td>852147963258</td>
																				<td></td>
																				<td>15000</td>
																				<td>0</td>
																				<td>12</td>
																				<td>0</td>
																				<td>0</td>
																				<td>0</td>
															</tr>
							
					</tbody>
				 </table>
			  
        <!-- /.col -->
      </div>
      </div>
			  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('printTable', 'Employee Data')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
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
