<script>
    function check_all(){
       var id =document.getElementById('check_bus_card').checked;
         if(id==true){
             $('input:checkbox').attr('checked',true);
         }else{
            $('input:checkbox').attr('checked',false);
         }
    }
</script>
<div class="col-md-12">
<div class="col-md-6">
<center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Bus Expense Report')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
</div>
<div class="col-md-6">
<center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
</div>
</div>

        <div class="col-md-12">
          <!-- /.box -->
          <div class="box box-success ">
            <!-- /.box-header -->
			<div class="col-md-10 col-md-offset-1">
            <div class="box-body table-responsive" id="printTable">
						<table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
			<tr>
			<td colspan="3"><span style="font-size:20px;font-weight:bold"><center><b>SIMPTION TECH PVT LTD</b></center></span></td>
			</tr>
			<tr>
			<td style="float:left;"><b>Dise Code : 23260100164</b></td>
			<td><center><b>Student List Bus Wise</b></center></td>
			<td style="float:right;"><b>School Code : 50702</b></td>
			</tr>
			<tr>
			<td style="float:left;">Current Date : 13-12-2022</td>
			<td><center><b>&nbsp;</b></center></td>
			</tr>
			</table>
			
		
				   <form method='post' action="../school_software_v1_old/pdf/pdf/id_card_page/bus_id_card1.php" target='_blank'>
				  <table id="example1" class="table table-bordered table-striped" border="1px" cellpadding="5px" cellspacing="0" width="100%">
						<thead >
								<tr>
								  <th>S.No.</th>
								  <th>SR No.</th>
								  <th>Student Name</th>
								  <th>Father Name</th>
								  <th>Mother Name</th>
								  <th>Class(Section)</th>
								  <th>Contact Details</th>
								  <th>Student route</th>
								  <th>Validity</th>
								  <th>All <input type='checkbox' name='check_bus_card' id="check_bus_card" checked onclick="check_all()"></th>
								</tr>
						</thead>
					<tbody>
					  
					    <input type='submit' name='print_bus' class="btn btn-primary" value='Print Bus Card' style="float:right" >
					    <!-- <input type="hidden" name="no_of_installment" class="form-control" value="" />
					    <input type="hidden" name="fee_head" class="form-control" value="" /> -->
										<tr>
					<td>1.</td>
					<td></td>
					<td>SURYANSH KUMAR PRAJAPATI</td>
					<td>PANKAJ KUMAR PRAJAPATI</td>
					<td>SARITA PRAJAPATI</td>
					<td>2ND(B)</td>
					<td>7843999808, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000125]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000125' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>2.</td>
					<td></td>
					<td>abhiyank</td>
					<td>suresh</td>
					<td>alekha</td>
					<td>2ND(B)</td>
					<td>9893492355, 9340816455</td>
					<td></td>
					<td><input type='text' name='bus_validity[2000138]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000138' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>3.</td>
					<td></td>
					<td>alok</td>
					<td>rk singh</td>
					<td>bindu</td>
					<td>LKG(A)</td>
					<td>, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000147]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000147' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>4.</td>
					<td></td>
					<td>Riti</td>
					<td>Alok</td>
					<td>Julee</td>
					<td>LKG(A)</td>
					<td>9973560977, </td>
					<td>blde road</td>
					<td><input type='text' name='bus_validity[2000148]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000148' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>5.</td>
					<td></td>
					<td>NAINCY SHARMA</td>
					<td>Pramod sharma</td>
					<td>Human sharma</td>
					<td>2ND(A)</td>
					<td>9893005322, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000168]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000168' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>6.</td>
					<td></td>
					<td>mani</td>
					<td>gurmeet</td>
					<td>fgfg</td>
					<td>2ND(B)</td>
					<td>535354453, 5635464665</td>
					<td></td>
					<td><input type='text' name='bus_validity[2000178]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000178' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>7.</td>
					<td></td>
					<td>K Deka</td>
					<td>R Deka</td>
					<td>B Deka</td>
					<td>2ND(B)</td>
					<td>12345678890, 12345678890</td>
					<td></td>
					<td><input type='text' name='bus_validity[2000180]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000180' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>8.</td>
					<td></td>
					<td>Rajeev</td>
					<td>Ramveer</td>
					<td>Reena</td>
					<td>2ND(B)</td>
					<td>9927594141, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000199]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000199' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>9.</td>
					<td></td>
					<td>radha kumari</td>
					<td>ram mohan singh</td>
					<td>radhika devi</td>
					<td>2ND(B)</td>
					<td>7739836507, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000203]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000203' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>10.</td>
					<td></td>
					<td>Ram</td>
					<td>Dam</td>
					<td>Man</td>
					<td>2ND(B)</td>
					<td>9888866905, 652969999663</td>
					<td></td>
					<td><input type='text' name='bus_validity[2000211]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000211' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>11.</td>
					<td></td>
					<td>Rajendra</td>
					<td>Narayan</td>
					<td>ncjkakjnckjs</td>
					<td>2ND(A)</td>
					<td>9682515115, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000219]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000219' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>12.</td>
					<td>02</td>
					<td>vishal vilran</td>
					<td>Jagdish Chandra</td>
					<td>Gita Devi</td>
					<td>5TH(A)</td>
					<td>8174902080, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000230]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000230' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>13.</td>
					<td></td>
					<td>shekhu </td>
					<td>aman</td>
					<td>mina</td>
					<td>2ND(B)</td>
					<td>8349379171, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000259]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000259' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>14.</td>
					<td></td>
					<td>Arham Patel</td>
					<td>Abdulnasir</td>
					<td>Ayesha</td>
					<td>2ND(B)</td>
					<td>7276231940, 9623293570</td>
					<td></td>
					<td><input type='text' name='bus_validity[2000289]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000289' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>15.</td>
					<td></td>
					<td>ajit</td>
					<td>Satveer</td>
					<td>Seeta</td>
					<td>2ND(B)</td>
					<td>9050653720, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2000296]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000296' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>16.</td>
					<td>85274196313</td>
					<td>Palak Kumari</td>
					<td>Krishna Sahani</td>
					<td>Rina Devi</td>
					<td>2ND(B)</td>
					<td>9876543210, 8976542310</td>
					<td></td>
					<td><input type='text' name='bus_validity[2000332]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000332' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>17.</td>
					<td>192</td>
					<td>joy</td>
					<td>peter</td>
					<td>Jenny</td>
					<td>3RD(A)</td>
					<td>8893387594, 9987767098</td>
					<td></td>
					<td><input type='text' name='bus_validity[2000345]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000345' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>18.</td>
					<td></td>
					<td>LEYA ANNA ANTONY</td>
					<td>ANTONY K VARGHESE</td>
					<td>ANIMOL ANTONY</td>
					<td>4TH(A)</td>
					<td>7034691897, 7034691897</td>
					<td></td>
					<td><input type='text' name='bus_validity[2000356]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2000356' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>19.</td>
					<td>197</td>
					<td>Mohit </td>
					<td>Mr. Ravi</td>
					<td>Mrs. Rakhi</td>
					<td>3RD(A)</td>
					<td>9717386989, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2100392]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2100392' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>20.</td>
					<td></td>
					<td>raja</td>
					<td>raja</td>
					<td>rani</td>
					<td>3RD(A)</td>
					<td>1234567891, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2100474]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2100474' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>21.</td>
					<td>6</td>
					<td>Ratan Lohar</td>
					<td>SANJAY KUMAR</td>
					<td>PUSHPA DEVI</td>
					<td>UKG(A)</td>
					<td>9144555977, 23423423</td>
					<td></td>
					<td><input type='text' name='bus_validity[2100492]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2100492' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>22.</td>
					<td></td>
					<td>Sagar Singh</td>
					<td>Rakesh Singh</td>
					<td>Sarita Singh</td>
					<td>7TH(A)</td>
					<td>1234567890, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2100541]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2100541' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>23.</td>
					<td></td>
					<td>Jidan uddin</td>
					<td>riyaz uddin</td>
					<td>shanaya </td>
					<td>1ST(A)</td>
					<td>8942116685, 8866651555</td>
					<td></td>
					<td><input type='text' name='bus_validity[2100544]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2100544' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>24.</td>
					<td></td>
					<td>rohan sah</td>
					<td>ram </td>
					<td>rani</td>
					<td>2ND(A)</td>
					<td>9816870719, 2548751512</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200622]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200622' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>25.</td>
					<td></td>
					<td>ishan kumar</td>
					<td>rohit kumar</td>
					<td>ishita kumar</td>
					<td>2ND(A)</td>
					<td>9816870719, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200623]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200623' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>26.</td>
					<td>101</td>
					<td>kirti panday</td>
					<td>sumit panday</td>
					<td>rekha panday</td>
					<td>LKG(A)</td>
					<td>9865474758, 9827358424</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200626]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200626' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>27.</td>
					<td>75</td>
					<td>sushant singh</td>
					<td>nilkamal singh </td>
					<td>muni</td>
					<td>UKG(A)</td>
					<td>9825734280, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200628]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200628' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>28.</td>
					<td></td>
					<td>saloni</td>
					<td>bijay</td>
					<td>muni</td>
					<td>2ND(A)</td>
					<td>9825734280, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200629]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200629' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>29.</td>
					<td></td>
					<td>shubham bisen</td>
					<td>rameshwar bisen</td>
					<td>seeta bisen</td>
					<td>9TH(A)</td>
					<td>9009739291, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200631]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200631' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>30.</td>
					<td></td>
					<td>MANVEER SINGH </td>
					<td>GURDEV SINGH </td>
					<td>GAGANDEEP KAUR</td>
					<td>7TH(A)</td>
					<td>836009915, </td>
					<td>Route 4</td>
					<td><input type='text' name='bus_validity[2200632]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200632' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>31.</td>
					<td></td>
					<td>Mayur Mangesh Padvi</td>
					<td>Mangesh Gorakh Padvi</td>
					<td>Vasubai Mangesh Padvi</td>
					<td>2ND(A)</td>
					<td>7773954846, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200634]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200634' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>32.</td>
					<td></td>
					<td>Bhavesh Arvind Padvi</td>
					<td>Arvind Gorakh Padvi</td>
					<td>Harshla Arvind Padvi</td>
					<td>2ND(A)</td>
					<td>8766578634, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200635]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200635' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>33.</td>
					<td></td>
					<td>Nikhil Dinesh Padvi</td>
					<td>Dinesh Gorakh Padvi</td>
					<td>Manglabai Dinesh Padvi</td>
					<td>2ND(A)</td>
					<td>7507167517, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200636]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200636' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>34.</td>
					<td></td>
					<td>Kiran Sharma</td>
					<td>Ramu Sharma</td>
					<td>Reema Sharma</td>
					<td>7TH(A)</td>
					<td>123456789, </td>
					<td>Route 3</td>
					<td><input type='text' name='bus_validity[2200637]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200637' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>35.</td>
					<td></td>
					<td>Riya Sharma</td>
					<td>Ram Sharma</td>
					<td>Geeta Sharma</td>
					<td>7TH(A)</td>
					<td>234567891, </td>
					<td>Route 2</td>
					<td><input type='text' name='bus_validity[2200638]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200638' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>36.</td>
					<td></td>
					<td>Ram Kumar</td>
					<td>Ravi Kumar</td>
					<td>Neeta</td>
					<td>7TH(A)</td>
					<td>345678912, </td>
					<td>Route 1</td>
					<td><input type='text' name='bus_validity[2200639]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200639' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>37.</td>
					<td></td>
					<td>Meena Verma</td>
					<td>Jay Verma</td>
					<td>Mona Verma</td>
					<td>7TH(A)</td>
					<td>456789123, </td>
					<td>Route 4</td>
					<td><input type='text' name='bus_validity[2200640]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200640' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>38.</td>
					<td></td>
					<td>Heena Mittal</td>
					<td>Lalu Pasad</td>
					<td>Rani Kumari</td>
					<td>7TH(A)</td>
					<td>567891234, </td>
					<td>Route 3</td>
					<td><input type='text' name='bus_validity[2200641]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200641' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>39.</td>
					<td></td>
					<td>Anamika</td>
					<td>Yash Kapoor</td>
					<td>Hemlata Kapoor</td>
					<td>7TH(A)</td>
					<td>9456312705, </td>
					<td>Route 2</td>
					<td><input type='text' name='bus_validity[2200642]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200642' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>40.</td>
					<td></td>
					<td>Lalu Kumar</td>
					<td>Raju Kumar</td>
					<td>Kiran kumari</td>
					<td>7TH(A)</td>
					<td>678912345, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200643]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200643' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>41.</td>
					<td></td>
					<td>abcs</td>
					<td>ebgh</td>
					<td></td>
					<td>2ND(A)</td>
					<td>25585, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200645]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200645' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>42.</td>
					<td>100094</td>
					<td>SUMIT KUMAR</td>
					<td>Anil kumar </td>
					<td>Roma Devi</td>
					<td>UKG(A)</td>
					<td>1234567890, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200652]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200652' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>43.</td>
					<td></td>
					<td>Jibran khan</td>
					<td>Md kamran khan</td>
					<td>Riya</td>
					<td>4TH(A)</td>
					<td>9977805298, 7415443537</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200655]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200655' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>44.</td>
					<td></td>
					<td>Radha Kumari</td>
					<td>Ram Kumar</td>
					<td>Geeta Kumari</td>
					<td>UKG(A)</td>
					<td>1234567894, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200656]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200656' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>45.</td>
					<td></td>
					<td>imran khan </td>
					<td>waseem khan </td>
					<td>nighat khan </td>
					<td>4TH(A)</td>
					<td>9977805298, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200661]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200661' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>46.</td>
					<td></td>
					<td>dishika</td>
					<td>sonu khatri </td>
					<td>monika khatri </td>
					<td>6TH(A)</td>
					<td>1234567892, 5461239782</td>
					<td>bhojpur</td>
					<td><input type='text' name='bus_validity[2200665]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200665' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>47.</td>
					<td></td>
					<td>RAJ</td>
					<td>rajesh</td>
					<td></td>
					<td>2ND(A)</td>
					<td>4987549, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200677]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200677' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>48.</td>
					<td></td>
					<td>himanshi</td>
					<td>babl</td>
					<td></td>
					<td>UKG(A)</td>
					<td>1444411, 12</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200678]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200678' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>49.</td>
					<td></td>
					<td>Prashant Kumar</td>
					<td>Rammu</td>
					<td></td>
					<td>5TH(A)</td>
					<td>8109607707, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200680]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200680' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>50.</td>
					<td></td>
					<td>abc</td>
					<td></td>
					<td></td>
					<td>2ND(A)</td>
					<td>7845123698, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200686]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200686' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>51.</td>
					<td></td>
					<td>Prashant rajak</td>
					<td>Rammu lal</td>
					<td></td>
					<td>2ND(A)</td>
					<td>647322824425, 87412214</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200688]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200688' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>52.</td>
					<td></td>
					<td>kunal jha</td>
					<td></td>
					<td></td>
					<td>UKG(A)</td>
					<td>9918556649, </td>
					<td>KHAMGAON - JALGAON JAMOD</td>
					<td><input type='text' name='bus_validity[2200707]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200707' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>53.</td>
					<td>14</td>
					<td>Prashant  KUMAR</td>
					<td>Rammu lal</td>
					<td></td>
					<td>5TH(A)</td>
					<td>7744447774, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200719]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200719' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>54.</td>
					<td></td>
					<td>Rahul kumar</td>
					<td>vijay singh</td>
					<td>Kalpana singh</td>
					<td>5TH(A)</td>
					<td>8700377769, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200725]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200725' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>55.</td>
					<td></td>
					<td>saloni karn</td>
					<td>bijay karn</td>
					<td>muni karn </td>
					<td>2ND(A)</td>
					<td>9816870719, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200728]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200728' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>56.</td>
					<td></td>
					<td>Rituraj</td>
					<td>mitu raj</td>
					<td>jitu kaur</td>
					<td>2ND(A)</td>
					<td>9875455522, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200734]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200734' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>57.</td>
					<td></td>
					<td>Aaditya </td>
					<td>Sujit</td>
					<td>Soni</td>
					<td>2ND(A)</td>
					<td>9934507865, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200735]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200735' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>58.</td>
					<td></td>
					<td>Abhay</td>
					<td></td>
					<td></td>
					<td>UKG(A)</td>
					<td>, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200741]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200741' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>59.</td>
					<td></td>
					<td>bbs</td>
					<td>bbs</td>
					<td>bbs</td>
					<td>2ND(A)</td>
					<td>9638527410, 9638527410</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200744]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200744' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>60.</td>
					<td></td>
					<td>Vaishnavi Thakur</td>
					<td>Mr. Amrendra Pratap Singh </td>
					<td>Mrs. Roshni Singh </td>
					<td>LKG(A)</td>
					<td>9918666600, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200747]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200747' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>61.</td>
					<td>552</td>
					<td>AADITYA JHILLE</td>
					<td>AASHISH JHILLE</td>
					<td></td>
					<td>2ND(A)</td>
					<td>7024347776, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200748]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200748' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>62.</td>
					<td></td>
					<td>ROHIT KUMAR</td>
					<td>DOODH NATH YADAV</td>
					<td>USHA DEVI</td>
					<td>2ND(A)</td>
					<td>8577908478, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200750]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200750' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>63.</td>
					<td></td>
					<td>Prashant  KUMAR</td>
					<td>Rammu lal</td>
					<td></td>
					<td>2ND(A)</td>
					<td>7748908646, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200751]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200751' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>64.</td>
					<td></td>
					<td>Ram</td>
					<td>Bca</td>
					<td>Abc</td>
					<td>12TH(A)</td>
					<td>9416499566, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200757]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200757' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>65.</td>
					<td></td>
					<td>Aashish</td>
					<td>Ramesh</td>
					<td>Diya</td>
					<td>NURSERY(A)</td>
					<td>9416499566, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200758]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200758' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>66.</td>
					<td></td>
					<td>RAJ  NAYK </td>
					<td>GOPAL KHATRI</td>
					<td>monika khatri </td>
					<td>6TH(A)</td>
					<td>96325663, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200765]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200765' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>67.</td>
					<td></td>
					<td>Nikhil</td>
					<td>jonh</td>
					<td>sonam</td>
					<td>UKG(A)</td>
					<td>9090909090, </td>
					<td>Khapar, Selamba</td>
					<td><input type='text' name='bus_validity[2200780]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200780' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>68.</td>
					<td></td>
					<td>yashi</td>
					<td>pushpendra</td>
					<td>pinki</td>
					<td>NURSERY(A)</td>
					<td>8430555580, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200782]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200782' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>69.</td>
					<td>1001</td>
					<td>ABHIMANYU SHARMA</td>
					<td>GOURAV SHARMA</td>
					<td>PRIYANKA SHARMA</td>
					<td>NURSERY(A)</td>
					<td>9755404505, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200785]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200785' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>70.</td>
					<td></td>
					<td>shree</td>
					<td>samay singh </td>
					<td>pramdevi</td>
					<td>NURSERY(A)</td>
					<td>9911587536, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200790]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200790' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>71.</td>
					<td></td>
					<td>shreyansh</td>
					<td>Neeraj kumar</td>
					<td>Seema</td>
					<td>1ST(A)</td>
					<td>9911587539, 8800207311</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200791]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200791' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>72.</td>
					<td></td>
					<td>Ajay</td>
					<td>Vijay</td>
					<td>Mays</td>
					<td>NURSERY(A)</td>
					<td>685555555555, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200793]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200793' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>73.</td>
					<td></td>
					<td>Druwa Ganesh Chaudhari</td>
					<td>Ganesh Chaudhari</td>
					<td></td>
					<td>NURSERY(A)</td>
					<td>8469808008, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200795]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200795' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>74.</td>
					<td></td>
					<td>Md alam ali </td>
					<td>Ali alam</td>
					<td>Rehana khatoon</td>
					<td>UKG(A)</td>
					<td>9473000888, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200797]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200797' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>75.</td>
					<td></td>
					<td>Yash </td>
					<td>Soun</td>
					<td>Beenu </td>
					<td>NURSERY(A)</td>
					<td>6265767366, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200823]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200823' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>76.</td>
					<td></td>
					<td>vicky uikey</td>
					<td>jitendrasingh uikey</td>
					<td>smt. hemkala uikey</td>
					<td>1ST(A)</td>
					<td>7354713649, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200841]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200841' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>77.</td>
					<td></td>
					<td>pooja bairagi</td>
					<td>Mr. J.D. Bairagi</td>
					<td>Mrs. Meenu bairagi</td>
					<td>8TH(A)</td>
					<td>, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200879]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200879' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>78.</td>
					<td></td>
					<td>Pooja bairagi </td>
					<td>Smt. Meenu bairagi</td>
					<td>Mr. J.d. bairagi </td>
					<td>8TH(A)</td>
					<td>963486652388, 99654690856</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200938]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200938' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>79.</td>
					<td></td>
					<td>ashta </td>
					<td>sanjeev </td>
					<td>radhika </td>
					<td>8TH(A)</td>
					<td>7894561230, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200945]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200945' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>80.</td>
					<td></td>
					<td>RAM KUMAR </td>
					<td>SHYAM KUMAR </td>
					<td>RADHA KUMARI </td>
					<td>2ND(A)</td>
					<td>8936860311, 9308079285</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200955]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200955' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>81.</td>
					<td></td>
					<td>Amit rao</td>
					<td>Sahab rao</td>
					<td>Indrawati devi</td>
					<td>2ND(A)</td>
					<td>9450673349, 8115130734</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200959]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200959' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>82.</td>
					<td></td>
					<td>Ram</td>
					<td>Papa</td>
					<td></td>
					<td>1ST(A)</td>
					<td>868563355968, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2200985]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200985' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>83.</td>
					<td></td>
					<td>VEDANT TIWARI</td>
					<td>MANOJ KUMAR TIWARI</td>
					<td>ARCHANA TIWARI</td>
					<td>8TH(A)</td>
					<td>8090688671, 9532822000</td>
					<td></td>
					<td><input type='text' name='bus_validity[2200993]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2200993' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>84.</td>
					<td></td>
					<td>Ramesh</td>
					<td>Suresh</td>
					<td>Rani</td>
					<td>4TH(A)</td>
					<td>9821223300, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2201062]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201062' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>85.</td>
					<td>50</td>
					<td>AUGUSTAY</td>
					<td> SHARMA</td>
					<td>DHIMAN</td>
					<td>10TH(A)</td>
					<td>9897015271, 8449410503</td>
					<td></td>
					<td><input type='text' name='bus_validity[2201068]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201068' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>86.</td>
					<td></td>
					<td>aman soni</td>
					<td>ravi soni</td>
					<td>mamta</td>
					<td>11TH(A)</td>
					<td>6387770743, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2201077]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201077' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>87.</td>
					<td></td>
					<td>amit</td>
					<td>ram chandr</td>
					<td>anita</td>
					<td>11TH(A)</td>
					<td>8976453600, 8976453600</td>
					<td></td>
					<td><input type='text' name='bus_validity[2201079]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201079' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>88.</td>
					<td></td>
					<td>NIDHI SINGH </td>
					<td>Asad</td>
					<td>SEEMA PATIDAR</td>
					<td>7TH(A)</td>
					<td>8454154454, 76546416515</td>
					<td></td>
					<td><input type='text' name='bus_validity[2201081]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201081' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>89.</td>
					<td></td>
					<td>Danica Mariam Jacob</td>
					<td>J P Jacob</td>
					<td>Shiny Jacob</td>
					<td>1ST(A)</td>
					<td>9977228818, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2201085]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201085' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>90.</td>
					<td></td>
					<td>Rahul Kumar</td>
					<td>Lalbabu Ray</td>
					<td>Shanti Devi</td>
					<td>NURSERY(A)</td>
					<td>9570503057, </td>
					<td>1 - KURHA</td>
					<td><input type='text' name='bus_validity[2201086]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201086' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>91.</td>
					<td></td>
					<td>rakesh tailor</td>
					<td>ganpat lal</td>
					<td>raji devi</td>
					<td>1ST(A)</td>
					<td>9413137558, 8955834409</td>
					<td></td>
					<td><input type='text' name='bus_validity[2201089]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201089' id="bus_card" checked></td>
			         </tr>
										<tr>
					<td>92.</td>
					<td></td>
					<td>Deepak Kumar </td>
					<td>Ramakant Sharma </td>
					<td></td>
					<td>NURSERY(A)</td>
					<td>7004727008, </td>
					<td></td>
					<td><input type='text' name='bus_validity[2201093]' value='' id="" /></td>
					<td><input type='checkbox' name='bus_card[]' value='2201093' id="bus_card" checked></td>
			         </tr>
					
				 </table>
				 </form>
			  
        <!-- /.col -->
      </div>
      </div>
			  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('printTable', 'Bus Expense Report')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-primary" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
			  </div>
			  </div>
  </div>
    
  </div>