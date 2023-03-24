
<script>
function for_section(value){
$('#student_class_section').html("<option value='' >Loading....</option>");
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_class_section.php?class_name="+value+"",
	  cache: false,
	  success: function(detail){
		 $("#student_class_section").html(detail);
		 for_list();
	  }
   });
}

function for_list(){
var class_name=document.getElementById('std_class').value;
var section_name=document.getElementById('student_class_section').value;
var from_date=document.getElementById('from_date').value;
var to_date=document.getElementById('to_date').value;
var order_by=document.getElementById('order_by').value;
var user_detail=document.getElementById('user_detail').value;
var fee_status=document.getElementById('fee_status').value;
if($('#select_head').prop('checked')==true){
    var transport_checked=$('#select_head').val();
}else{
    var transport_checked='No';
}

if(class_name!='' && section_name!='' && from_date!='' && to_date!=''){
$("#pdf_detail").html(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_fee_daily_collection_report.php?class_name="+class_name+"&section_name="+section_name+"&from_date="+from_date+"&to_date="+to_date+"&order_by="+order_by+"&transport_checked="+transport_checked+"&user_detail="+user_detail+"&fee_status="+fee_status+"",
	  cache: false,
	  success: function(detail){
		 $("#pdf_detail").html(detail);
	  }
   });
}else{
    $("#pdf_detail").html('');
}

}
</script>
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

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Download Fee Daily Collection Report
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
        <li><a href="javascript:get_content('fees_monthly/reports')"><i class="fa fa-money"></i> Reports Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Daily Collection Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <div class="col-md-4"><h3 class="box-title">Fee Daily Collection Report download</h3></div>
              <div class="col-md-6">
                                <span style="float:right;"><input type="checkbox" name="select_head" id="select_head" value="fee3" onclick="for_list();" /> <b>Transport fees</b></span>&nbsp;&nbsp;
                                <span style="float:right;"><input type="checkbox" name="select_head" id="select_head" value="fee9" onclick="for_list();" /> <b>bus fee</b></span>&nbsp;&nbsp;
                              </div>
              <div class="col-md-2">
			  <div class="form-group">
			  <label>Fee Status</label>
			  <select class="form-control" name="fee_status" id="fee_status" onchange="for_list();">
			  <option value="Active">Active</option>
			  <option value="All">All</option>
			  <option value="Deactive">Deleted</option>
			  </select>
			  </div>
			  </div>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
			
			<div class="col-md-12" id="search_detail">
								
				<div class="col-md-2">				
				<div class="form-group" >
				<label>Class</label>
				<select name="std_class" class="form-control new_student" id="std_class" onchange="for_section(this.value);" >
				<option value="All">All Class</option>
								<option value="NURSERY">NURSERY</option>
								<option value="LKG">LKG</option>
								<option value="UKG">UKG</option>
								<option value="1ST">1ST</option>
								<option value="2ND">2ND</option>
								<option value="3RD">3RD</option>
								<option value="4TH">4TH</option>
								<option value="5TH">5TH</option>
								<option value="6TH">6TH</option>
								<option value="7TH">7TH</option>
								<option value="8TH">8TH</option>
								<option value="9TH">9TH</option>
								<option value="10TH">10TH</option>
								<option value="11TH">11TH</option>
								<option value="12TH">12TH</option>
								</select>
				</div>
				</div>

				<div class="col-md-2">
				<div class="form-group">
				<label>Section</label>
				<select class="form-control" name="student_class_section" id="student_class_section" onchange="for_list();">
				<option value="All">All</option>
				</select>
				</div>
				</div>

				<div class="col-md-2">
				<div class="form-group">
				<label>From Date</label>
				<input type="date" name="from_date" id="from_date" value="2022-12-05" class="form-control" oninput="for_list();" />
				</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
				<label>To Date</label>
				<input type="date" name="to_date" id="to_date" value="2022-12-05" class="form-control" oninput="for_list();" />
				</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
				<label>Order By</label>
				<select class="form-control" name="order_by" id="order_by" onchange="for_list();">
				<option value="">Select</option>
				<option value=" ORDER BY student_name ASC">By Name</option>
				<option value=" ORDER BY blank_field_5 ASC">By Receipt No.</option>
				<option value=" ORDER BY fee_submission_date ASC">By Date</option>
				</select>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group" >
				<label>User Details</label>
				<select name="user_detail" class="form-control" id="user_detail" onchange="for_list();" >
				<option value="All">All User</option>
								<option value="kailash soni|?|rahul@simption.com">kailash soni [kailash soni]</option>
								<option value="Amit Chaudhary|?|Pranatbhai123@gmail.com">Amit Chaudhary [Amit Chaudhary]</option>
								<option value="|?|subairfaisy@gmail.com">Subair faisy []</option>
								<option value="PRAKASH KUMAWAT|?|SAINIKISHAN2002@GMAIL.COM">PRAKASH KUMAWAT [PRAKASH KUMAWAT]</option>
								<option value="Norang lal|?|noranglalmanglaw@gmail.com">Norang lal [Norang lal]</option>
								<option value="|?|shsh@gmail.com">we []</option>
								<option value="Md Farhan Ashraf|?|farhanashraf487@gmail.com">Md Farhan Ashraf [Md Farhan Ashraf]</option>
								<option value="|?|hansraj4384@gmail.com">Hansraj []</option>
								<option value="|?|bbinakia@rocketmail.com">NANDINI BINAKIA []</option>
								<option value="DWARAPUREDDI GANESH|?|ganeshdwarapureddi1999@gmail.com">DWARAPUREDDI GANESH [DWARAPUREDDI GANESH]</option>
								<option value="|?|fkgkv@gmail.com">Gdufjc []</option>
								<option value="Bonald|?|bonaldsangma@gmail.com">Bonald [Bonald]</option>
								<option value="RAM|?|parantappublicschool@gmail.com">RAM [RAM]</option>
								<option value="|?|pdkoli82@gmail.com">prabhu dayal koli []</option>
								<option value="|?|dilrubaazad357@gail.com">MISTER AZAD []</option>
								<option value="|?|ASHADURMONDALL@GMAIL.COM">ASHADUR RAHMAN MONDA []</option>
								<option value="|?|sanjaykr875762@gmail.com">SANJAY KUMAR MAHTO []</option>
								<option value="rani|?|rani73@gmail.com">rani [rani]</option>
								<option value="|?|aashu@gmail.com">aashu  []</option>
								<option value="|?|arizaktar@gmail.com">HASIBUR RAHAMAN []</option>
								<option value="|?|iringattirirashid@gmail.com">Rashid Wafy []</option>
								<option value="|?|abc@gmail.com">pravin []</option>
								<option value="|?|abc@gmail.com">nikhil advin []</option>
								<option value="|?|abc@gmail.com">Varshika []</option>
								<option value="|?|abc@gmail.com">amar []</option>
								<option value="|?|BHAN.RATHOD@GMAIL.COM">GYGT []</option>
								<option value="|?|alokkumarsharma1983@gmail.com">ALOK KUMAR SHARMA []</option>
								<option value="|?|nbikaujgh@gmail.com">Sumit []</option>
								<option value="|?|pfedjhnepj@gmail.com">shardha []</option>
								<option value="|?|anitachoudhary@gmail.com">Anita choudhary []</option>
								<option value="|?|22188689@SJ.COM">SATISH HAGE []</option>
								<option value="|?|dec@gmail.cpm">demo []</option>
								<option value="|?|sghage@tsrd.com">S.G.HAGE []</option>
								<option value="|?|rkmps2014@gmail.com">PRAKASH KUMAWAT []</option>
								<option value="simption@4170gmail.c|?|bhopal@gmail.com">simption@4170gmail.c [simption@4170gmail.c]</option>
								<option value="kailash soni|?|kailusoni99@gmail.com">kailash soni [kailash soni]</option>
								<option value="kailash soni|?|kailusoni99@gmail.com">kailash soni [kailash soni]</option>
								<option value="demo|?|demo123@gmail.com">demo [demo]</option>
								<option value="Abhul Rjaak |?|rajaak987@gmail.com">Abhul Rjaak  [Abhul Rjaak ]</option>
								<option value="|?|XYZ@GMAIL.COM">anand sharma []</option>
								<option value="|?|XYZ@GMAIL.COM">Anamika []</option>
								<option value="|?|XYZ@GMAIL.COM">Anamika []</option>
								<option value="Puran Singh Sahu|?|rajanikanta.fine@gmail.com">Puran Singh Sahu [Puran Singh Sahu]</option>
								<option value="Puran Singh Sahu|?|rajanikanta.fine@gmail.com">Puran Singh Sahu [Puran Singh Sahu]</option>
								<option value="Puran Singh Sahu|?|rajanikanta.fine@gmail.com">Puran Singh Sahu [Puran Singh Sahu]</option>
								<option value="Puran Singh Sahu|?|rajanikanta.fine@gmail.com">Puran Singh Sahu [Puran Singh Sahu]</option>
								<option value="Puran Singh Sahu|?|rajanikanta.fine@gmail.com">Puran Singh Sahu [Puran Singh Sahu]</option>
								<option value="Puran Singh Sahu|?|rajanikanta.fine@gmail.com">Puran Singh Sahu [Puran Singh Sahu]</option>
								<option value="Puran Singh Sahu|?|rajanikanta.fine@gmail.com">Puran Singh Sahu [Puran Singh Sahu]</option>
								<option value="Puran Singh Sahu|?|rajanikanta.fine@gmail.com">Puran Singh Sahu [Puran Singh Sahu]</option>
								<option value="|?|jay@gmail.com">jay kishan []</option>
								<option value="sanjay|?|sunflowerpublicschool786@gmail.com">sanjay [sanjay]</option>
								<option value="|?|nagendra709042198@GMAIL.COM">SANTOSH KUMAR SINGH []</option>
								<option value="|?|demo@gmail.com">DEMO []</option>
								<option value="|?|harshitkumars092@gmail.com">Harshit sharma []</option>
								<option value="|?|cds@gmaill.com">DD []</option>
								<option value="|?|SIR1234@GMAIL.COM">TUSHAR IYRE  []</option>
								<option value="rohan|?|KOSAL78@GMAIL.COM">rohan [rohan]</option>
								<option value="|?|dummy@gmail.com">shreya sharma []</option>
								<option value="|?|bbsbs@d.com">Vishu []</option>
								<option value="someone@someid.com|?|someone@someid.com">someone@someid.com [someone@someid.com]</option>
								<option value="someone@someid.com|?|someone@someid.com">someone@someid.com [someone@someid.com]</option>
								<option value="000@GMAIL.COM|?|000@GMAIL.COM">000@GMAIL.COM [000@GMAIL.COM]</option>
								<option value="anil n|?|ANILNEMA17@GMAIL.COM">anil n [anil n]</option>
								<option value="|?|md.gjgj@gmai.com">rahul []</option>
								<option value="|?|kaveri12@gmail.com">kaveri []</option>
								<option value="Monika|?|monika@gmail.com">Monika [Monika]</option>
								<option value="Monika|?|monika@gmail.com">Monika [Monika]</option>
								<option value="|?|gunghuu10@gmail.com">Ghunguu []</option>
								<option value="|?|00@GMAIL.COM">RATAN JI []</option>
								<option value="|?|00@GMAIL.COM">MANOJ YOGI []</option>
								<option value="|?|00@GMAIL.COM">AMIT JI []</option>
								<option value="|?|supriyasantosh1234@gmail.com">Shiwanand Tiwari []</option>
								<option value="|?|supriyasantosh1234@gmail.com">Supriya Santosh []</option>
								<option value="|?|kjhatimple@gmail.com">kundan kumar jha []</option>
								<option value="|?|mahsramshamli@gmail.com">shamli  []</option>
								<option value="|?|BHOOPENDRA081194@GMAIL.COM">MR. BHOOPENDRA LODHI []</option>
								<option value="|?|ravi100281@gmail.com">KUMAR RAVIKANT []</option>
								<option value="|?|umeshmourya2580@gmail.com">kunal mourya []</option>
								<option value="|?|teacher1@gmail.com">Teacher []</option>
								<option value="|?|srishtigusain56@gmail.com">srishti gusain []</option>
								<option value="|?|tushar234@gmail.com">tushar modi  []</option>
								<option value="|?|tushar234@gmail.com">AA []</option>
								<option value="|?|sureshramesh@gmail.com">suresh Devashi []</option>
								<option value="|?|info@simption.com">KHETARAM JI []</option>
								<option value="|?|rathore.ayush37@gmail.com">AYUSH []</option>
								<option value="|?|rahul@gmail.com">Ass []</option>
								<option value="|?|HARSHALI234@GMAIL.COM">HARSHALI SHAH []</option>
								<option value="|?|rashisaxena1997@gmail.com">Rashi Saxena []</option>
								</select>
				</div>
				</div>
				
			</div>
			
			</br></br></br><hr>
					
			<div class="col-md-12" id="pdf_detail">
			
			</div>
			
	        </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
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
<script>
for_list();
</script>