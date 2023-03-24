@include('common.header')
@include('common.navbar')  
<script>
 function sales_calculation(){
   var quantity=document.getElementById("item_quantity").value;
   var rate=document.getElementById("item_sales_rate").value;
   
	if(quantity>0 && rate>0){
	var total=parseFloat(quantity)*parseFloat(rate);
	document.getElementById("total_amount").value=total;
	}else{
	document.getElementById("total_amount").value='0';
	}
 }
</script>

<script>
 function student_details(){
   var stu_name=document.getElementById("item_quantity").value;
   var stu_f_name=document.getElementById("item_sales_rate").value;
   var stu_class=document.getElementById("item_sales_rate").value;
   var stu_roll_no=document.getElementById("item_sales_rate").value;
   
	if(quantity>0 && rate>0){
	var total=parseFloat(quantity)*parseFloat(rate);
	document.getElementById("total_amount").value=total;
	}else{
	document.getElementById("total_amount").value='0';
	}
 }
</script>

<script type="text/javascript">
			function student_details(value){
			$("#student_father_name").val('Loading.....');
			$("#student_class").val('Loading.....');
			$("#student_roll_no").val('Loading.....');
			$.ajax({
			address: "POST",
			url: access_link+"stock/get_student_details.php?id="+value+"",
			cache: false,
			success: function(detail){
			var res = detail.split("|?|");
			$("#student_father_name").val(res[0]);
			$("#student_class").val(res[1]);
			$("#student_roll_no").val(res[2]);
			
			}
			});
			}
			
			 $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"stock/sales_item_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('stock/sale_list');
            }
			}
         });
      });
			</script>



   <section class="content-header">
      <h1>
        Stock Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
             <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active">Sale Item </li>
        </ol>
    </section>

	
	
	<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h1 class="box-title"><b>Sale Item </b></h1>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Personal Detail--------------------------------------------------->
			
            <div class="box-body "  >
			<form role="form" action="{{url('sales-item')}}" method="post" enctype="multipart/form-data" id="my_form">
				@csrf
			
						<input type="hidden"  name="item_s_no" value="7"  class="form-control" readonly>
			<div class="col-md-3">				
					<div class="form-group" >
					  <label >Product Name </label>
					  <input type="text"  name="item_product_name" value="milk powder"  class="form-control" readonly>
					</div>
			</div>
			
			<div class="col-md-3">				
					<div class="form-group" >
					  <label >Category</label>
					  <input type="hidden" name="item_product_category" value="" readonly class="form-control">
					  <input type="text" name="" value="" readonly class="form-control">
					</div>
			</div>
		
			<div class="col-md-2">				
					<div class="form-group" >
					  <label >Quantity <font style="color:red"><b>*</b></font></label>
					  <input type="text"  name="item_quantity" placeholder="0" oninput="sales_calculation();" id="item_quantity"; value=""; class="form-control" required />
					</div>
			</div>  
				
			<div class="col-md-2">				
					<div class="form-group" >
					  <label >Rate <font style="color:red"><b>*</b></font></label>
					  <input type="text"  name="item_sales_rate" placeholder="0.00"  oninput="sales_calculation();" id="item_sales_rate"; value=""; class="form-control" required>
					</div>
			</div>
				
			<div class="col-md-2">				
					<div class="form-group" >
					  <label >Total Amount <font style="color:red"><b>*</b></font> </label>
					  <input type="text"  name="total_amount" value=""  id="total_amount"; placeholder="0.00"  class="form-control" readonly />
					</div>
			</div>
			
			<br><br><br><br><br>
			
			<div class="box-header with-border ">
					<h1 class="box-title"><b>Student Details</b></h1>
            </div>
			
			<br>
			
			<div class="col-md-3 ">				
					<div class="form-group" >
					  <label >student Name <font style="color:red"><b>*</b></font></label>
						<select type="text"  name="student_name" id="student_name" onchange="student_details(this.value);" value="" class="form-control select2" style="width:100%" required>
						<option value="">Select</option>
					  
						<option value='586'>REHAN [2ND (B) ]</option><option value='589'>Rajesh Prasad [2ND (B) ]</option><option value='590'>Palak Kumari [2ND (B) ]</option><option value='1087'>joy [3RD (A) ]</option><option value='1089'>Upen [3RD (A) ]</option><option value='1096'>Saurya [4TH (A) ]</option><option value='591'>dummy [2ND (B) ]</option><option value='1138'>Akhil [2ND (A) ]</option><option value='956'>Sangita [UKG (A) ]</option><option value='1090'>cddf [3RD (A) ]</option><option value='958'>umesh  dhakad [UKG (A) ]</option><option value='959'>Humaira [UKG (A) ]</option><option value='960'>ayush koli [UKG (A) ]</option><option value='1091'>ajay kewat [3RD (A) ]</option><option value='1097'>Aman [4TH (A) ]</option><option value='1092'>raja [3RD (A) ]</option><option value='1099'>Nikhil  Lodhi [4TH (A) ]</option><option value='907'>RAJESH [11TH (A) ]</option><option value='1107'>Vaidik [5TH (A) ]</option><option value='1100'>Diviya prajapati [4TH (A) ]</option><option value='1075'>Sagar Singh [7TH (A) ]</option><option value='1082'>Jidan uddin [1ST (A) ]</option><option value='982'>Avnish kumar [2ND (A) ]</option><option value='962'>umesh  [UKG (A) ]</option><option value='1114'>umesh  [6TH (A) ]</option><option value='1108'>umesh  [5TH (A) ]</option><option value='963'>Anshu [UKG (A) ]</option><option value='964'> BABALI SAHU [UKG (A) ]</option><option value='983'>श्री [2ND (A) ]</option><option value='1101'>Muhammed Adnan [4TH (A) ]</option><option value='970'>hari [2ND (A) ]</option><option value='1028'>Nidhi Mishra [UKG (A) ]</option><option value='861'>SARIKA SULTANE [11TH (A) ]</option><option value='984'>dummy [2ND (A) ]</option><option value='880'>balveer singh [LKG (A) ]</option><option value='881'>mahira khan [LKG (A) ]</option><option value='883'>sanny [LKG (A) ]</option><option value='985'>rohan sah [2ND (A) ]</option><option value='986'>ishan kumar [2ND (A) ]</option><option value='1115'>pankaj patel [6TH (A) ]</option><option value='884'>kirti panday [LKG (A) ]</option><option value='885'>lali [LKG (A) ]</option><option value='1029'>sushant singh [UKG (A) ]</option><option value='987'>saloni [2ND (A) ]</option><option value='1116'>suman [6TH (A) ]</option><option value='1054'>MANVEER SINGH  [7TH (A) ]</option><option value='1121'>RAM PANDEY [9TH (A) ]</option><option value='988'>Mayur Mangesh Padvi [2ND (A) ]</option><option value='989'>Bhavesh Arvind Padvi [2ND (A) ]</option><option value='990'>Nikhil Dinesh Padvi [2ND (A) ]</option><option value='1055'>Kiran Sharma [7TH (A) ]</option><option value='1056'>Riya Sharma [7TH (A) ]</option><option value='1058'>Meena Verma [7TH (A) ]</option><option value='1059'>Heena Mittal [7TH (A) ]</option><option value='1060'>Anamika [7TH (A) ]</option><option value='1061'>Lalu Kumar [7TH (A) ]</option><option value='1030'>SK Thakur [UKG (A) ]</option><option value='991'>abcs [2ND (A) ]</option><option value='1031'>Jay Sharma [UKG (A) ]</option><option value='1032'>Sikdar [UKG (A) ]</option><option value='1033'>Bijoy [UKG (A) ]</option><option value='992'>sona [2ND (A) ]</option><option value='1034'>RIYA DAS [UKG (A) ]</option><option value='1035'>SUMIT KUMAR [UKG (A) ]</option><option value='965'>Somya [UKG (A) ]</option><option value='912'>MAHEK DASHORE [11TH (A) ]</option><option value='1036'>Radha Kumari [UKG (A) ]</option><option value='1037'>ARPAN NANDEWAR [UKG (A) ]</option><option value='1103'>mahir khan  [4TH (A) ]</option><option value='1104'>imran khan  [4TH (A) ]</option><option value='993'>sajid khan  [2ND (A) ]</option><option value='994'>dummy  [2ND (A) ]</option><option value='1118'>dishika [6TH (A) ]</option><option value='1038'>Bhavesh Arvind Padvi [UKG (A) ]</option><option value='1076'>payal [7TH (A) ]</option><option value='1105'>SAJAL [4TH (A) ]</option><option value='1119'>sarita [6TH (A) ]</option><option value='995'>Komal Gupta [2ND (A) ]</option><option value='930'>Anil Kumar [4TH (A) ]</option><option value='932'>Anil Kapoor Dhoom [2ND (A) ]</option><option value='996'>Prashant  [2ND (A) ]</option><option value='997'>RAJ [2ND (A) ]</option><option value='966'>himanshi [UKG (A) ]</option><option value='1109'>Ram [5TH (A) ]</option><option value='1110'>Prashant Kumar [5TH (A) ]</option><option value='1039'>GGDFGFDGFDG [UKG (A) ]</option><option value='967'>ABHISHEK  [UKG (A) ]</option><option value='998'>XYZ [2ND (A) ]</option><option value='999'>abc [2ND (A) ]</option><option value='1000'>rahul [2ND (A) ]</option><option value='1001'>Prashant rajak [2ND (A) ]</option><option value='968'> Kanika [UKG (A) ]</option><option value='1040'>Ravi [UKG (A) ]</option><option value='1002'>Prashant kumar [2ND (A) ]</option><option value='1041'>RAHUL [UKG (A) ]</option><option value='971'>praveen kumar [1ST (A) ]</option><option value='979'>bjkb [2ND (A) ]</option><option value='980'>laxmi [2ND (A) ]</option><option value='1003'>AJAY [2ND (A) ]</option><option value='1042'>kunal jha [UKG (A) ]</option><option value='1043'>fgdfg [UKG (A) ]</option><option value='1120'>DISHANT PATIDAR [6TH (A) ]</option><option value='1044'>vishal jha [UKG (A) ]</option><option value='1106'>Ram [4TH (A) ]</option><option value='1237'>vishal jha [UKG (A) ]</option><option value='1084'>Prashant kumar [1ST (A) ]</option><option value='1093'>AS [3RD (A) ]</option><option value='1238'>muskan ray [UKG (A) ]</option><option value='1111'>Prashant  KUMAR [5TH (A) ]</option><option value='1024'>xghkjh [LKG (A) ]</option><option value='1139'>सौरभ [2ND (A) ]</option><option value='1027'>aashu  [3RD (A) ]</option><option value='1045'>SANJAY KUMAR [UKG (A) ]</option><option value='1026'>Rahul kumar [5TH (A) ]</option><option value='1140'>saloni karn [2ND (A) ]</option><option value='1239'>sushant karn [UKG (A) ]</option><option value='1053'>sanam karn [LKG (A) ]</option><option value='1112'>simran [5TH (A) ]</option><option value='1141'>APEKSHIT KOLI [2ND (A) ]</option><option value='1164'>Akshay Karande [LKG (A) ]</option><option value='1142'>Rituraj [2ND (A) ]</option><option value='1143'>Aaditya  [2ND (A) ]</option><option value='1122'>ashok [9TH (A) ]</option><option value='1165'>mayank [LKG (A) ]</option><option value='1144'>ashok [2ND (A) ]</option><option value='1240'>Abhay [UKG (A) ]</option><option value='1145'>vivek [2ND (A) ]</option><option value='1085'>abhisek [1ST (A) ]</option><option value='1146'>bbs [2ND (A) ]</option><option value='1123'>roma [9TH (A) ]</option><option value='1147'>ravi [2ND (A) ]</option><option value='1166'>Vaishnavi Thakur [LKG (A) ]</option><option value='1148'>AADITYA JHILLE [2ND (A) ]</option><option value='1126'>Shifa Meman [8TH (A) ]</option><option value='1149'>ROHIT KUMAR [2ND (A) ]</option><option value='1150'>Prashant  KUMAR [2ND (A) ]</option><option value='1167'>Urvi sen [LKG (A) ]</option><option value='1172'>Akshaj Mishra [3RD (A) ]</option><option value='1157'>priya [4TH (A) ]</option><option value='1186'>RAJESH KUMAR MAHTO  [6TH (A) ]</option><option value='1134'>Ram [12TH (A) ]</option><option value='1135'>Aashish [NURSERY (A) ]</option><option value='1168'>INAMUR RAHMAN [LKG (A) ]</option><option value='1179'>nidhi jain  [3RD (A) ]</option><option value='1169'>rakesh [LKG (A) ]</option><option value='1152'>Ravi [12TH (A) ]</option><option value='1162'>VINAYAK PATIDAR [5TH (A) ]</option><option value='1187'>RAJ  NAYK  [6TH (A) ]</option><option value='1163'>Praashant  [5TH (A) ]</option><option value='1219'>raman [NURSERY (A) ]</option><option value='1176'>Akshay [8TH (A) ]</option><option value='1174'>Prashant r [5TH (A) ]</option><option value='1180'>nidhi jain  [4TH (A) ]</option><option value='1184'>sunil 1 [2ND (A) ]</option><option value='1241'>Nikhil [UKG (A) ]</option><option value='1220'>yashi [NURSERY (A) ]</option><option value='1204'>Gopi [8TH (A) ]</option><option value='1192'>ABHIMANYU SHARMA [NURSERY (A) ]</option><option value='1193'>AVNI SHARMA [2ND (A) ]</option><option value='1319'>Fig [7TH (A) ]</option><option value='1221'>shree [NURSERY (A) ]</option><option value='1198'>shreyansh [1ST (A) ]</option><option value='1200'>Ajay [NURSERY (A) ]</option><option value='1222'>Druwa Ganesh Chaudhari [NURSERY (A) ]</option><option value='1211'>SONU PRAJAPATI [2ND (A) ]</option><option value='1205'>Md alam ali  [UKG (A) ]</option><option value='1212'>dummy  [2ND (A) ]</option><option value='1440'>TABREZ ALAM [2ND (A) ]</option><option value='1223'>SHIVANSH RAWAT [NURSERY (A) ]</option><option value='1373'>mahi [8TH (A) ]</option><option value='1399'>mahi [UKG (A) ]</option><option value='1265'>shahnawaz [1ST (A) ]</option><option value='1266'>yasin [1ST (A) ]</option><option value='1267'>sultana [1ST (A) ]</option><option value='1250'>pragya  [6TH (A) ]</option><option value='1374'>priya [8TH (A) ]</option><option value='1375'>mahi [8TH (A) ]</option><option value='1243'>Yash  [NURSERY (A) ]</option><option value='1251'>jeet kumar [6TH (A) ]</option><option value='1253'>PANKAJ KUMAR [2ND (A) ]</option><option value='1258'>Rohit [9TH (A) ]</option><option value='1268'>vicky uikey [1ST (A) ]</option><option value='1376'>penolope  [8TH (A) ]</option><option value='1280'>Abdul sami  [12TH (A) ]</option><option value='1377'>jjlklkk [8TH (A) ]</option><option value='1441'>VINAYAK PATIDAR [2ND (A) ]</option><option value='1328'>NIDHI SINGH [5TH (A) ]</option><option value='1320'>Prashant  [7TH (A) ]</option><option value='1321'>Prashant  [7TH (A) ]</option><option value='1378'>pooja bairagi [8TH (A) ]</option><option value='1379'>pooja bairagi [8TH (A) ]</option><option value='1380'>pooja bairagi [8TH (A) ]</option><option value='1381'>Farhan khan [8TH (A) ]</option><option value='1310'>पंकज कुमार [NURSERY (A) ]</option><option value='1312'>Mafidul Islam [6TH (A) ]</option><option value='1433'>neha parihar  [UKG (A) ]</option><option value='1382'>Prashant [8TH (A) ]</option><option value='1383'>mahi [8TH (A) ]</option><option value='1434'>mansha [UKG (A) ]</option><option value='1384'>riya [8TH (A) ]</option><option value='1442'>VINAYAK PATIDAR [2ND (A) ]</option><option value='1361'>ArhN [5TH (A) ]</option><option value='1435'>Ariz [UKG (A) ]</option><option value='1436'>Ariz [UKG (A) ]</option><option value='1443'>vicky uikey [2ND (A) ]</option><option value='1367'>Chirag jatav [1ST (A) ]</option><option value='1385'>Pooja bairagi  [8TH (A) ]</option><option value='1386'>rajkumar [8TH (A) ]</option><option value='1407'>priya [8TH (A) ]</option><option value='1437'>Md. Mokarram alam  [UKG (A) ]</option><option value='1408'>ashta  [8TH (A) ]</option><option value='1502'>lalit  [7TH (A) ]</option><option value='1409'>shikha  [8TH (A) ]</option><option value='1392'>SANDEEP [LKG (A) ]</option><option value='1395'>Vansh Kumar Pasi [2ND (A) ]</option><option value='1397'>rakesh [LKG (A) ]</option><option value='1444'>RAM KUMAR  [2ND (A) ]</option><option value='1410'>Prashant  [8TH (A) ]</option><option value='1455'>Prashant  [8TH (A) ]</option><option value='1445'>Amit rao [2ND (A) ]</option><option value='1446'>NIDHI SINGH [2ND (A) ]</option><option value='1447'>shravan singh [2ND (A) ]</option><option value='1448'>asharamk [2ND (A) ]</option><option value='1456'>kamalkant [8TH (A) ]</option><option value='1457'>Prashant  [8TH (A) ]</option><option value='1438'>Aarunya Raj Sinha [UKG (A) ]</option><option value='1429'>Monali [2ND (A) ]</option><option value='1458'>lokesh [8TH (A) ]</option><option value='1503'>prash [7TH (A) ]</option><option value='1459'>Prashant  [8TH (A) ]</option><option value='1478'>Prashant  [8TH (A) ]</option><option value='1479'>Prashant  [8TH (A) ]</option><option value='1480'>VEDANT TIWARI [8TH (A) ]</option><option value='1481'>Aamna Hussain [NURSERY (A) ]</option><option value='1488'>Prashant  [7TH (A) ]</option><option value='1489'>Prashant  [7TH (A) ]</option><option value='1508'>RAJESH CHOVE [9TH (A) ]</option><option value='1511'>Nitya Yadav [NURSERY (A) ]</option><option value='1512'>Shubh Kashyap [NURSERY (A) ]</option><option value='1513'>Arohi Kushwaha [NURSERY (A) ]</option><option value='1514'>Anikesh [NURSERY (A) ]</option><option value='1515'>Prithviraj [NURSERY (A) ]</option><option value='1516'>Arushi Diwakar [NURSERY (A) ]</option><option value='1517'>Kartik Nishad [NURSERY (A) ]</option><option value='1565'>Ramesh [4TH (A) ]</option><option value='1571'>AUGUSTAY [10TH (A) ]</option><option value='1572'>Anamika Agrawal [7TH (A) ]</option><option value='1573'>Sujata Agrawal [1ST (A) ]</option><option value='1575'>aman soni [11TH (A) ]</option><option value='1576'>aman soni 2 [9TH (A) ]</option><option value='1577'>amit [11TH (A) ]</option><option value='1578'>Roshan  [6TH (A) ]</option><option value='1579'>NIDHI SINGH  [7TH (A) ]</option><option value='1580'>Rajdeep kumar [4TH (A) ]</option><option value='1598'>SURYA PRATAP MAURYA [5TH (A) ]</option><option value='1599'>Danica Mariam Jacob [1ST (A) ]</option><option value='1600'>Rahul Kumar [NURSERY (A) ]</option>			
						</select>
					</div>
			</div>

		
			<div class="col-md-3 ">				
					<div class="form-group" >
					  <label >Father's Name </label>
					  <input type="text"  name="student_father_name" placeholder="Student Father Name" id="student_father_name"; value=""; class="form-control">
					</div>
			</div>  
				
			<div class="col-md-3 ">				
					<div class="form-group" >
					  <label >Class </label>
					  <input type="text"  name="student_class" placeholder="Student Class"   id="student_class"; value=""; class="form-control">
					</div>
			</div>
				
			<div class="col-md-3 ">				
					<div class="form-group" >
					  <label >Student Roll No </label>
					  <input type="text"  name="student_roll_no" placeholder="Student Roll No"  id="student_roll_no"; class="form-control">
					</div>
			</div>
			
		<br><br><br><br>
		<div class="col-md-12">
		        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
		</div>	
			
	</form>	

          
		  </div>
    </div>
</section>
<script>
$(function () {
    $('.select2').select2();
  });
</script>
@include('common.footer')

 