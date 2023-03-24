

<script type="text/javascript">
    function fill_detail(value){

		$('#rfid_no').val(value);
		set_attendance(value);

    }

    function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true){
        text.style.display = "block";
		$('#contact').val('Dear Parents, Your Child  has Come to School.');
		 $('#send_sms').val('Yes');
    } else {
       text.style.display = "none";
	   $('#contact').val('');
	   $('#send_sms').val('No');
    }
}

function set_attendance(value){
    if(value!=''){
var sms=document.getElementById('contact').value;
var send_sms=document.getElementById('send_sms').value;
$.ajax({
	type:"POST",
	url:access_link+"attendance/ajax_set_student_rfid_attendance.php?rfid="+value+"&sms="+sms+"&send_sms="+send_sms+"",
	cache:false,
	success:function(data)
	{
	$('#rfid_no').val('');
	$('#hidden_rfid').val(value);
	attendance_detail();
	}
});
}
}
function check_same(value){
var len=value.length;
if(len==10){
var hidden_rfid1=document.getElementById('hidden_rfid').value;
if(hidden_rfid1==value){
$('#rfid_no').val('');
}
}
}

function attendance_detail(){
    $("#attendance_list").html(loader_div);
$.ajax({
	type:"POST",
	url:access_link+"attendance/ajax_get_attendance_list.php",
	cache:false,
	success:function(data)
	{
	$('#attendance_list').html(data);
	}
});
}

// setInterval(function(){
    // attendance_detail()
// }, 5000);
</script>


  

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Attendance Management         <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('attendance/attendance')"><i class="fa fa-child"></i> Attendance</a></li>
	  <li class="active">Student RFID Attendance</li>
      </ol>
    </section>
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <div class="col-md-8"><h3 class="box-title">RFID Attendance</h3></div>
			  <div class="col-md-4"><button type="button" class="btn btn-success style="float:right;" onclick="attendance_detail();">Refresh List</button></div>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
	
				<div class="col-md-4 box-body table-responsive">
                <table id="table-data" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Enter RFID No</th>
                </tr>
                </thead>
				<tbody>
					<tr>
					<input type="hidden" id="hidden_rfid">
					<td><input type="text" name="rfid_no" id="rfid_no" placeholder="Enter RFID No" autofocus required value="" oninput="check_same(this.value);" onchange="set_attendance(this.value);" autocomplete="off"></td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					</tr>
					<tr>
					<td>
					<label>Search Student</label>
					  <select name="" id="select_rfid_no" class="form-control select2" onchange="fill_detail(this.value);" style="width:100%;">
					  <option value="">Select student</option>
					        							<option value="IES0001PK">Palak Kumari[]-[IES0001PK]-[2ND-B]-[Krishna Sahani-9876543210]</option>
														<option value="0004279640">joy[126574]-[0004279640]-[3RD-A]-[peter-8893387594]</option>
														<option value="01">Humaira[18]-[01]-[UKG-A]-[Palash-1316543133]</option>
														<option value="0014944965">umesh [30]-[0014944965]-[UKG-A]-[abhishek-9144555977]</option>
														<option value="0011996285">Anshu[7]-[0011996285]-[UKG-A]-[Vijay-9144555977]</option>
														<option value="0010290419"> BABALI SAHU[2]-[0010290419]-[UKG-A]-[SHAIKH-7978988989]</option>
														<option value="0014944965">balveer singh[12372]-[0014944965]-[LKG-A]-[sukhvinder singh-9144555977]</option>
														<option value="0014806624">ishan kumar[120009]-[0014806624]-[2ND-A]-[rohit kumar-9816870719]</option>
														<option value="0012660095">Mayur Mangesh Padvi[120012]-[0012660095]-[2ND-A]-[Mangesh Gorakh Padvi-7773954846]</option>
														<option value="0003757438">Lalu Kumar[]-[0003757438]-[7TH-A]-[Raju Kumar-678912345]</option>
														<option value="0003757961">sona[120026]-[0003757961]-[2ND-A]-[rajesh-9816870719]</option>
														<option value="577711111111111">Prashant  KUMAR[12561]-[577711111111111]-[5TH-A]-[Rammu lal-7744447774]</option>
														<option value="0009240208">aashu []-[0009240208]-[3RD-A]-[-1234567891]</option>
														<option value="12345">Rituraj[126593]-[12345]-[2ND-A]-[mitu raj-9875455522]</option>
														<option value="744444740000">Prashant  KUMAR[]-[744444740000]-[2ND-A]-[Rammu lal-7748908646]</option>
														<option value="0014816326">Akshay[]-[0014816326]-[8TH-A]-[ABC-1234567890]</option>
														<option value="0005981246">Gopi[126572]-[0005981246]-[8TH-A]-[BIKSHAM -9052483352]</option>
														<option value="No">Fig[]-[No]-[7TH-A]-[Niraj Kumar -458725]</option>
														<option value="272">shreyansh[401396]-[272]-[1ST-A]-[Neeraj kumar-9911587539]</option>
														<option value="0010317118">Farhan khan[1265701]-[0010317118]-[8TH-A]-[Riyaz khan-458963248327]</option>
														<option value="0002847890">Ariz[2]-[0002847890]-[UKG-A]-[-]</option>
														<option value="0012022978">Amit rao[]-[0012022978]-[2ND-A]-[Sahab rao-9450673349]</option>
														<option value="0007113750">Aarunya Raj Sinha[]-[0007113750]-[UKG-A]-[tret-87874545454]</option>
												  </select>
					</td>
					</tr>
                    <tr>
					<td>
					<div class="form-group">
					<label><input type="checkbox" name="myCheck" id="myCheck" checked onclick="myFunction();">&nbsp;&nbsp;&nbsp;Check For Present Student Message</label>
				    <div class="form-group" id="text" style="display:none">
					
					  <input type="text" name="sms" placeholder="" id="contact"  class="form-control">
					  <input type="hidden" name="send_sms" placeholder="" id="send_sms"  class="form-control">
					 
					</div>
					</div>
					</td>
					</tr>
					</tbody>
				
                </table>
                </div>
					            
				<div class="col-md-8 box-body table-responsive" id="attendance_list">
                
                </div>
				
		  </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>


</div>

</body>
</html>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
<script>
myFunction();
</script>