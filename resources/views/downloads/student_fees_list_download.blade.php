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
	    <li><a href="javascript:get_content('downloads/student_fees_download_list')"><i class="fa fa-stack-overflow"></i>Student Fees List</a></li>
	    <li class="active">Download Fees List</li>
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
			  <center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Student fees List')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
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
			  <td><center><b>STUDENT FEES LIST</b></center></td>
			  <td style="float:right"><b>School Code : 50702</b></td>
			  </tr>
			  </table>
				  				  <table id="example1" class="table table-bordered table-striped" style="width:100% " border="1px;" cellspacing="0" cellpadding="5px;">
						<thead class="my_background_color">
								<tr>
								  <th>S.No.</th>
								  								  <th>fee status</th>
								  								  <th>student name</th>
								  								  <th>student father name</th>
								  								  <th>student class</th>
								  								  <th>student class section</th>
								  								  <th>student roll no</th>
								  								  <th>fee submission date</th>
								  								  <th>grand total</th>
								  								  <th>balance total</th>
								  								  <th>paid total</th>
								  								  <th>student payment mode</th>
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
<td>Active</td>
<td>RAJESH</td>
<td>TARACHANDRA</td>
<td>11TH</td>
<td>A</td>
<td>2100536</td>
<td>22-07-2022</td>
<td>92000 </td>
<td>91900</td>
<td>100</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>2</td>
<td>Active</td>
<td>RAJESH</td>
<td>TARACHANDRA</td>
<td>11TH</td>
<td>A</td>
<td>2100536</td>
<td>01-12-2022</td>
<td>92000 </td>
<td>69000</td>
<td>23040</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>3</td>
<td>Active</td>
<td>kirti panday</td>
<td>sumit panday</td>
<td>LKG</td>
<td>A</td>
<td>2200626</td>
<td>11-07-2022</td>
<td>NaN </td>
<td>-17750</td>
<td>17750</td>
<td>Googlepay</td>
<td></td>
<td></td>
<td>11-07-2022</td>
<td></td>
<td></td>
</tr>
<tr>
<td>4</td>
<td>Active</td>
<td>kirti panday</td>
<td>sumit panday</td>
<td>LKG</td>
<td>A</td>
<td>2200626</td>
<td>21-11-2022</td>
<td>NaN </td>
<td>-7750</td>
<td>7790</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>5</td>
<td>Active</td>
<td>kirti panday</td>
<td>sumit panday</td>
<td>LKG</td>
<td>A</td>
<td>2200626</td>
<td>28-11-2022</td>
<td>NaN  </td>
<td>-15500</td>
<td>7750</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>6</td>
<td>Active</td>
<td>Kiran Sharma</td>
<td>Ramu Sharma</td>
<td>7TH</td>
<td>A</td>
<td>2200637</td>
<td>03-12-2022</td>
<td>204150 </td>
<td>201150</td>
<td>3040</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>7</td>
<td>Active</td>
<td>Kiran Sharma</td>
<td>Ramu Sharma</td>
<td>7TH</td>
<td>A</td>
<td>2200637</td>
<td>03-12-2022</td>
<td>204150  </td>
<td>5100</td>
<td>196090</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>8</td>
<td>Active</td>
<td>Kiran Sharma</td>
<td>Ramu Sharma</td>
<td>7TH</td>
<td>A</td>
<td>2200637</td>
<td>05-12-2022</td>
<td>204150   </td>
<td>3400</td>
<td>1740</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>9</td>
<td>Active</td>
<td>Riya Sharma</td>
<td>Ram Sharma</td>
<td>7TH</td>
<td>A</td>
<td>2200638</td>
<td>17-11-2022</td>
<td>167500 </td>
<td>165000</td>
<td>2780</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>10</td>
<td>Active</td>
<td>Riya Sharma</td>
<td>Ram Sharma</td>
<td>7TH</td>
<td>A</td>
<td>2200638</td>
<td>21-11-2022</td>
<td>167500  </td>
<td>0</td>
<td>165000</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>11</td>
<td>Active</td>
<td>MAHEK DASHORE</td>
<td>NAVIN KUMAR DASHORE</td>
<td>11TH</td>
<td>A</td>
<td>2200654</td>
<td>23-11-2022</td>
<td>43000 </td>
<td>20000</td>
<td>23000</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>12</td>
<td>Active</td>
<td>MAHEK DASHORE</td>
<td>NAVIN KUMAR DASHORE</td>
<td>11TH</td>
<td>A</td>
<td>2200654</td>
<td>02-12-2022</td>
<td>43000  </td>
<td>0</td>
<td>20000</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>13</td>
<td>Active</td>
<td>RAJ</td>
<td>rajesh</td>
<td>2ND</td>
<td>A</td>
<td>2200677</td>
<td>16-11-2022</td>
<td>56500 </td>
<td>35200</td>
<td>21600</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>14</td>
<td>Active</td>
<td>rahul</td>
<td></td>
<td>2ND</td>
<td>A</td>
<td>2200687</td>
<td>29-11-2022</td>
<td>51500 </td>
<td>44000</td>
<td>7540</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>15</td>
<td>Active</td>
<td>rahul</td>
<td></td>
<td>2ND</td>
<td>A</td>
<td>2200687</td>
<td>01-12-2022</td>
<td>51500  </td>
<td>40000</td>
<td>4040</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>16</td>
<td>Active</td>
<td>rahul</td>
<td></td>
<td>2ND</td>
<td>A</td>
<td>2200687</td>
<td>01-12-2022</td>
<td>51500   </td>
<td>36000</td>
<td>4040</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>17</td>
<td>Active</td>
<td>rahul</td>
<td></td>
<td>2ND</td>
<td>A</td>
<td>2200687</td>
<td>01-12-2022</td>
<td>51500    </td>
<td>32000</td>
<td>4000</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>18</td>
<td>Active</td>
<td>praveen kumar</td>
<td></td>
<td>1ST</td>
<td>A</td>
<td>2200695</td>
<td>19-11-2022</td>
<td>9100 </td>
<td>6500</td>
<td>2960</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>19</td>
<td>Active</td>
<td>praveen kumar</td>
<td></td>
<td>1ST</td>
<td>A</td>
<td>2200695</td>
<td>28-11-2022</td>
<td>9100  </td>
<td>4500</td>
<td>2000</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>20</td>
<td>Active</td>
<td>Vaishnavi Thakur</td>
<td>Mr. Amrendra Pratap Singh </td>
<td>LKG</td>
<td>A</td>
<td>2200747</td>
<td>24-11-2022</td>
<td>34234 </td>
<td>31234</td>
<td>3040</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>21</td>
<td>Active</td>
<td>Vaishnavi Thakur</td>
<td>Mr. Amrendra Pratap Singh </td>
<td>LKG</td>
<td>A</td>
<td>2200747</td>
<td>03-12-2022</td>
<td>34234  </td>
<td>28234</td>
<td>3040</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>22</td>
<td>Active</td>
<td>Akshaj Mishra</td>
<td>shesh Narayan Mishra</td>
<td>3RD</td>
<td>A</td>
<td>2200753</td>
<td>11-11-2022</td>
<td>14400 </td>
<td>12200</td>
<td>2250</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>23</td>
<td>Active</td>
<td>RAJESH KUMAR MAHTO </td>
<td>SITA RAM MAHTO </td>
<td>6TH</td>
<td>A</td>
<td>2200756</td>
<td>24-11-2022</td>
<td>56650 </td>
<td>49500</td>
<td>7190</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>24</td>
<td>Active</td>
<td>RAJESH KUMAR MAHTO </td>
<td>SITA RAM MAHTO </td>
<td>6TH</td>
<td>A</td>
<td>2200756</td>
<td>24-11-2022</td>
<td>56650  </td>
<td>45000</td>
<td>4500</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>25</td>
<td>Active</td>
<td>INAMUR RAHMAN</td>
<td>ATIKUR RAHMAN</td>
<td>LKG</td>
<td>A</td>
<td>2200759</td>
<td>22-11-2022</td>
<td>36000 </td>
<td>33000</td>
<td>3040</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>26</td>
<td>Active</td>
<td>nidhi jain </td>
<td>sunil  jain</td>
<td>3RD</td>
<td>A</td>
<td>2200760</td>
<td>11-11-2022</td>
<td>17600 </td>
<td>16600</td>
<td>1050</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>27</td>
<td>Active</td>
<td>nidhi jain </td>
<td>sunil  jain</td>
<td>3RD</td>
<td>A</td>
<td>2200760</td>
<td>14-11-2022</td>
<td>17600  </td>
<td>15400</td>
<td>1400</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>28</td>
<td>Active</td>
<td>nidhi jain </td>
<td>sunil  jain</td>
<td>3RD</td>
<td>A</td>
<td>2200760</td>
<td>16-11-2022</td>
<td>17600   </td>
<td>14900</td>
<td>500</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>29</td>
<td>Active</td>
<td>nidhi jain </td>
<td>sunil  jain</td>
<td>3RD</td>
<td>A</td>
<td>2200760</td>
<td>19-11-2022</td>
<td>17600    </td>
<td>14200</td>
<td>700</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>30</td>
<td>Active</td>
<td>nidhi jain </td>
<td>sunil  jain</td>
<td>3RD</td>
<td>A</td>
<td>2200760</td>
<td>19-11-2022</td>
<td>17600     </td>
<td>13800</td>
<td>400</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>31</td>
<td>Active</td>
<td>RAJ  NAYK </td>
<td>GOPAL KHATRI</td>
<td>6TH</td>
<td>A</td>
<td>2200765</td>
<td>18-11-2022</td>
<td>42000 </td>
<td>38500</td>
<td>3820</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>32</td>
<td>Active</td>
<td>Akshay</td>
<td>ABC</td>
<td>8TH</td>
<td>A</td>
<td>2200771</td>
<td>15-11-2022</td>
<td>32400 </td>
<td>29700</td>
<td>2950</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>33</td>
<td>Active</td>
<td>Ajay</td>
<td>Vijay</td>
<td>NURSERY</td>
<td>A</td>
<td>2200793</td>
<td>23-11-2022</td>
<td>31800 </td>
<td>29150</td>
<td>2690</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>34</td>
<td>Active</td>
<td>TABREZ ALAM</td>
<td>BAKRIDAN ANSARI</td>
<td>2ND</td>
<td>A</td>
<td>2200799</td>
<td>23-11-2022</td>
<td>15600 </td>
<td>14300</td>
<td>1340</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>35</td>
<td>Active</td>
<td>mahi</td>
<td>ram singh </td>
<td>UKG</td>
<td>A</td>
<td>2200806</td>
<td>10-11-2022</td>
<td>24000 </td>
<td>22600</td>
<td>1400</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>36</td>
<td>Active</td>
<td>jeet kumar</td>
<td>amit kumar </td>
<td>6TH</td>
<td>A</td>
<td>2200827</td>
<td>13-11-2022</td>
<td>39900 </td>
<td>36700</td>
<td>3350</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>37</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>22-11-2022</td>
<td>31200 </td>
<td>29200</td>
<td>2040</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>38</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>23-11-2022</td>
<td>31200  </td>
<td>28600</td>
<td>640</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>39</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>25-11-2022</td>
<td>31200   </td>
<td>26000</td>
<td>2600</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>40</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>28-11-2022</td>
<td>31200    </td>
<td>24500</td>
<td>1570</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>41</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>28-11-2022</td>
<td>31200     </td>
<td>24000</td>
<td>570</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>42</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>28-11-2022</td>
<td>31200      </td>
<td>23500</td>
<td>570</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>43</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>30-11-2022</td>
<td>31200       </td>
<td>23400</td>
<td>100</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>44</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>01-12-2022</td>
<td>31200        </td>
<td>21900</td>
<td>1550</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>45</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>01-12-2022</td>
<td>31200         </td>
<td>20900</td>
<td>1070</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>46</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>01-12-2022</td>
<td>31200          </td>
<td>18900</td>
<td>2070</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>47</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>02-12-2022</td>
<td>31200           </td>
<td>18800</td>
<td>100</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>48</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>03-12-2022</td>
<td>31200            </td>
<td>17800</td>
<td>1070</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>49</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>RAMRAJ</td>
<td>5TH</td>
<td>A</td>
<td>2200864</td>
<td>05-12-2022</td>
<td>31200             </td>
<td>17200</td>
<td>600</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>50</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>09-11-2022</td>
<td>21900</td>
<td>20200</td>
<td>1700</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>51</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>09-11-2022</td>
<td>21900</td>
<td>18700</td>
<td>1500</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>52</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>21-11-2022</td>
<td>21900</td>
<td>18500</td>
<td>200</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>53</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>28-11-2022</td>
<td>21900 </td>
<td>17000</td>
<td>1540</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>54</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>28-11-2022</td>
<td>21900  </td>
<td>15300</td>
<td>1700</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>55</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>28-11-2022</td>
<td>21900   </td>
<td>13600</td>
<td>1700</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>56</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>29-11-2022</td>
<td>21900    </td>
<td>11900</td>
<td>1700</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>57</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>29-11-2022</td>
<td>21900     </td>
<td>10200</td>
<td>1740</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>58</td>
<td>Active</td>
<td>NIDHI SINGH</td>
<td>BHARAT PATIDAR</td>
<td>2ND</td>
<td>A</td>
<td>2200961</td>
<td>30-11-2022</td>
<td>21900      </td>
<td>8500</td>
<td>1800</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>59</td>
<td>Active</td>
<td>shravan singh</td>
<td>rajaram singh</td>
<td>2ND</td>
<td>A</td>
<td>2200962</td>
<td>02-12-2022</td>
<td>18000 </td>
<td>16500</td>
<td>1540</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>60</td>
<td>Active</td>
<td>prash</td>
<td>rrmm</td>
<td>7TH</td>
<td>A</td>
<td>2200987</td>
<td>03-11-2022</td>
<td>27600 </td>
<td>0</td>
<td>27600</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>61</td>
<td>Active</td>
<td>Aamna Hussain</td>
<td>Syed Farhat Hussain</td>
<td>NURSERY</td>
<td>A</td>
<td>2201009</td>
<td>09-11-2022</td>
<td>11900 </td>
<td>0</td>
<td>11900</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>62</td>
<td>Active</td>
<td>Prashant </td>
<td>rammu lal </td>
<td>7TH</td>
<td>A</td>
<td>2201015</td>
<td>22-11-2022</td>
<td>22800 </td>
<td>17800</td>
<td>4940</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>63</td>
<td>Active</td>
<td>Ramesh</td>
<td>Suresh</td>
<td>4TH</td>
<td>A</td>
<td>2201062</td>
<td>09-11-2022</td>
<td>25000</td>
<td>10000</td>
<td>15000</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
<td></td>
<td></td>
</tr>
<tr>
<td>64</td>
<td>Active</td>
<td>amit</td>
<td>ram chandr</td>
<td>11TH</td>
<td>A</td>
<td>2201079</td>
<td>25-11-2022</td>
<td>101800 </td>
<td>50900</td>
<td>50940</td>
<td>Cash</td>
<td></td>
<td></td>
<td>&nbsp;</td>
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
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('printTable', 'Student fees List')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
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
	