
<script>
function call_me(){
var selected_student=document.getElementById('selected_student').value;
var chk_all="";
if($('#fee_month').prop("checked") == true){
chk_all="&check_all='all'";
}
var fee_month='';
var num=0;
$(".fee_month").each(function() {
if($(this).prop("checked") == true){
num += Number(parseInt(num)+1);
if(num>1){
fee_month=fee_month+','+$(this).val();
}else{
fee_month=$(this).val();
}
}
});
if(selected_student!='' && fee_month!='') {
post_content('fees_monthly/student_transport_fee_add_form','student_roll_no='+selected_student+'&fee_month='+fee_month+chk_all);
//window.open('student_fee_add_form.php?student_roll_no='+selected_student+'&fee_month='+fee_month,'_self');
}
}

function for_dues1(){
var student_rollno=document.getElementById('selected_student').value;
$.ajax({
type: "POST",
url: access_link+"fees_monthly/ajax_get_student_transport_dues_amount.php?student_rollno="+student_rollno+"",
cache: false,
success: function(detail){
var str=detail.split('|?|');
var lienth_count=str.length;
for(var k=1;k<lienth_count;k++){
	var str1=str[k].split('|??|');
	$("#dues_"+str1[1]).html(str1[0]);
}
}
});
}

function payment_mode(value){
if(value=='Cheque'){
$('#for_cheque_date').show();
$('#for_cheque_no').show();
$('#for_cheque_name').show();
$('#for_neft_account_no').hide();
$('#for_neft_bank_name').hide();
}else if(value=='NEFT'){
$('#for_neft_account_no').show();
$('#for_neft_bank_name').show();
$('#for_cheque_date').hide();
$('#for_cheque_no').hide();
$('#for_cheque_name').hide();
}else{
$('#for_cheque_date').hide();
$('#for_cheque_no').hide();
$('#for_cheque_name').hide();
$('#for_neft_account_no').hide();
$('#for_neft_bank_name').hide();
}
}
</script>  
  
<script>
function total_fee(){
var add = 0;
$('.amt').each(function() {
add += Number($(this).val());
});
var discount_amount=document.getElementById('discount_amount').value;
add=Number(add-discount_amount);
document.getElementById('total_paid').value = add;
}

function validate(){
var x = document.forms["myForm"]["total_paid"].value;
var month=0;
$('.fee_month').each(function() {
if($(this).prop('checked')==true){
month += Number(parseInt(month)+1);
}
});
if (x=="" || x<=0 || month<=0) {
	alert("Total Paid amount or Month must be required !!!");
	return false;
}
}

function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var student_name = document.getElementById("student_name").value;
    var total_amount = document.getElementById("total_paid").value;
    var text = document.getElementById("text");
    if (checkBox.checked == true){
        text.style.display = "block";
		$('#contact').val('Dear '+student_name+',Your Fee Amount '+total_amount+' Successfully deposited. Thanking You');
		 $('#send_sms').val('Yes');
    } else {
       text.style.display = "none";
	   $('#contact').val('');
	   $('#send_sms').val('No');
    }
}

function for_check(id){
if($('#'+id).prop("checked") == true){
	$("."+id).each(function() {
	$(this).prop('checked',true);
	});
}else{
	$("."+id).each(function() {
	$(this).prop('checked',false);
	});
}
call_me();
}

$("#my_form").submit(function(e){
e.preventDefault();

var formdata = new FormData(this);
window.scrollTo(0, 0);
    get_content(loader_div);
$.ajax({
	url: access_link+"fees_monthly/student_transport_fee_add_form_api.php",
	type: "POST",
	data: formdata,
	mimeTypes:"multipart/form-data",
	contentType: false,
	cache: false,
	processData: false,
	success: function(detail){
	    
	   //  console.log(detail);
//	    alert(detail);
console.log(detail);
	   var res=detail.split("|?|");
	   if(res[1]=='success'){
		   alert('Successfully Complete');
		   post_content('fees_monthly/student_transport_fee_list_particular','student_roll_no='+res[2]);
	}
	}
 });
});

function for_paid(serial_no,month_count){
    var submission_amount=document.getElementById('submission_amount').value;
    var total_payable=0;
    $(".bal1").each(function() {
    total_payable += Number($(this).val());
    });
    if(submission_amount<=total_payable){
        for(var j=0; j<month_count; j++){
        for(var i=0; i<serial_no; i++){
            if(Number($("#balance_tot_"+i+"_"+j).val())<=Number(submission_amount)){
                submission_amount = Number(parseFloat(submission_amount)-parseFloat($("#balance_tot_"+i+"_"+j).val()));
                $("#paid_tot_"+i+"_"+j).val($("#balance_tot_"+i+"_"+j).val());
            }else{
                if(submission_amount!='0'){
                    $("#paid_tot_"+i+"_"+j).val(submission_amount);
                    submission_amount=0;
                }else{
                    $("#paid_tot_"+i+"_"+j).val(submission_amount);
                }
            }
        }
        }
    }else{
        alert("Please Enter Valid Amount !!!");
        $('#submission_amount').val('');
    }
    total_fee();
}
</script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Fees Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
        <li class="active">Student Transport Fee Add</li>
      </ol>
    </section>
	
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
	<form name="myForm" method="post" enctype="multipart/form-data" id="my_form">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
           
            <!-- /.box-header -->			
        <div class="box-body">
		<br>
		<div class="box-body  col-md-12">
			<div class="col-md-4">				
					<div class="form-group" >
					<label>Search Student</label>
					<select name="" class="form-control select2" id="selected_student" onchange="for_dues1();call_me();" style="width:100%;" required>
					<option value="">Select student</option>
										<option  value="2000296">ajit[]-[]-[2ND-B]-[Satveer-9050653720]</option>
										<option  value="2200628">sushant singh[75]-[101219]-[UKG-A]-[nilkamal singh -9825734280]</option>
										<option  value="2200665">dishika[]-[]-[6TH-A]-[sonu khatri -1234567892]</option>
										<option  value="2200686">abc[]-[120002]-[2ND-A]-[-7845123698]</option>
										<option  value="2200707">kunal jha[]-[]-[UKG-A]-[-9918556649]</option>
										<option  value="2200719">Prashant  KUMAR[14]-[12561]-[5TH-A]-[Rammu lal-7744447774]</option>
										<option  value="2200735">Aaditya []-[1]-[2ND-A]-[Sujit-9934507865]</option>
										<option  value="2200741">Abhay[]-[4]-[UKG-A]-[-]</option>
										<option  value="2200748">AADITYA JHILLE[552]-[]-[2ND-A]-[AASHISH JHILLE-7024347776]</option>
										<option  value="2200751">Prashant  KUMAR[]-[]-[2ND-A]-[Rammu lal-7748908646]</option>
										<option  value="2200757">Ram[]-[]-[12TH-A]-[Bca-9416499566]</option>
										<option  value="2200758">Aashish[]-[6]-[NURSERY-A]-[Ramesh-9416499566]</option>
										<option  value="2200785">ABHIMANYU SHARMA[1001]-[7]-[NURSERY-A]-[GOURAV SHARMA-9755404505]</option>
										<option  value="2201062">Ramesh[]-[28]-[4TH-A]-[Suresh-9821223300]</option>
										<option  value="2201085">Danica Mariam Jacob[]-[]-[1ST-A]-[J P Jacob-9977228818]</option>
										</select>
					</div>
			</div>
			<div class="col-md-8">
			<div class="col-md-12">
			    <span style="float:right;"><input type="checkbox" value="" id="fee_month" onclick="for_check(this.id);"  /><b style="color:red;">Check All</b></span>
			</div>
			 			
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="04"  onclick="call_me();" > April Month / <span style="color:red;font-weight:bold;" id="dues_04">0</span>
			</div>
						</div>
		</div>
		
		
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
  </div>
</div>
</section>
</form>

<script>
for_dues1();
total_fee();
</script>
<script>
$(function () {
    $('.select2').select2();
  });
</script>