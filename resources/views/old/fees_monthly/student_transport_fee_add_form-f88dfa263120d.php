
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
										<option selected value="2000296">ajit[]-[]-[2ND-B]-[Satveer-9050653720]</option>
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
			<input type="checkbox" id="" class="fee_month" value="04" checked onclick="call_me();" > April Month / <span style="color:red;font-weight:bold;" id="dues_04">0</span>
			</div>
						</div>
		</div>
		
				
		<div class="box-body col-md-12" style="border:1px solid;">
		<center><h4 style="color:red;">Pay Transport Fees</h4></center>
            <script>alert('Student Fee Has Not Set Please Set It Firstly');</script><script>get_content('fees_monthly/set_classwise_transport_fee_details');</script>				
				<div class="col-md-12" style="display:none;">				
				<div class="col-md-4">				
				<div class="form-group">
                  <label>Previous Year Fee</label>
                  <input type="text" name="student_previous_year_fee" value="" placeholder="Previous Year Fee" id=""  class="form-control" readonly />
                </div>
				</div>
				
				<div class="col-md-4">				
				<div class="form-group">
                  <label>Previous Year Fee Balance</label>
                  <input type="text" name="student_previous_year_fee_balance" value="" placeholder="Previous Year Fee Balance" id=""  class="form-control" readonly />
                </div>
				</div>
				
				<div class="col-md-4">				
				<div class="form-group">
                  <label>Previous Year Fee Paid</label>
                  <input type="number" name="student_previous_year_fee_paid" value="" placeholder="Previous Year Fee Paid" step="1" max="" oninput="total_fee();" id="previous_year_fee_paid1" class="form-control amt" />
                </div>
				</div>
		        </div>
				
		        </div>
		  
		    <div class="col-md-12">
		        
		        
                                
                 <div class="col-md-1">
				<div class="form-group">
				  <label>Receipt No</label>
                  <input type="number" name="fee_receipt_no" placeholder="" value="45711" class="form-control" readonly >
                </div>
                </div>
                
                                
                
                
				<div class="col-md-2">
				<div class="form-group">
                  <label>Fee submission Date</label>
                  <input type="date"  name="fee_submission_date" placeholder=""  value="2022-12-05" class="form-control"  >
                </div>
                </div>
				<div class="col-md-2" style="display:none;">
				<div class="form-group">
                  <label>student Name</label>
                  <input type="text"  name="student_name" placeholder="student Name" id="student_name" value="ajit" class="form-control" readonly />
                </div>
                </div>
				<div class="col-md-2" style="display:none;">
				<div class="form-group">
                  <label>Father's Name</label>
                  <input type="text"  name="student_father_name" placeholder="Father's Name"  value="Satveer" class="form-control" readonly />
                </div>
                </div>
				<div class="col-md-2" style="display:none;">
				<div class="form-group">
                  <label>Student Roll No</label>
                  <input type="hidden"  name="student_roll_no" placeholder="Student Roll No"  value="2000296" class="form-control" readonly />
				   <input type="text"   placeholder="Student Roll No"  value="" class="form-control" readonly />
                </div>
                </div>
				<div class="col-md-2" style="display:none;">
			    <div class="form-group">
                  <label>Class</label>
                  <input type="text"  name="student_class" placeholder="Class"  value="2ND" class="form-control" readonly />
                </div>
                </div>
				<div class="col-md-2" style="display:none;">
				<div class="form-group">
                  <label>Section</label>
                  <input type="text"  name="student_class_section" placeholder="Section"  value="B" class="form-control" readonly />
                </div>
                </div>
                <div class="col-md-2">				
					<div class="form-group">
					  <label>Office Account</label>
					    <select name="office_account_sno" class="form-control" >
					    <option value="">Select</option>
					    					    <option value="50">Monika rathore ( 9896384654 )</option>
					    					    <option value="51">nidhi ( 98789787667 )</option>
					    					    <option value="52">Monika rathore ( 757415815 )</option>
					    					    <option value="53">kanhar valley public school ( 7740047 )</option>
					    					    <option value="54">NIDHI SINGH ( 1524624524515 )</option>
					    					    <option value="56">Rajat Sharma  ( 45789654123541 )</option>
					    					    <option value="57">Pokhari ( 100 )</option>
					    					    <option value="58">Laxman ( 1010 )</option>
					    					    <option value="59">Jalgaon Jamod Secondary and Higher Secondary School ( 123456789012345 )</option>
					    					    <option value="60">hemant ( 987654321456987 )</option>
					    					    <option value="61">Sushil ( 89878767655555555 )</option>
					    					    <option value="62">abc ( 12345 )</option>
					    					    <option value="63">aaaa ( 1111 )</option>
					    					    </select>
					</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
                  <label>Payment Mode</label>
                    <select name="student_payment_mode" class="form-control" onchange="payment_mode(this.value);" required >
					  <option value="">Select</option>
			          <option value="Cash">Cash</option>
					  <option value="Cheque">Cheque</option>
			          <option value="NEFT">NEFT Net Banking</option>
			        </select>
                </div>
                </div>
				<div class="col-md-2" id="for_cheque_name" style="display:none;">
				<div class="form-group">
                  <label>Bank Name</label>
                  <input type="text"  name="cheque_bank_name" placeholder="Bank Name"  value="" class="form-control">
                </div>
                </div>
				<div class="col-md-2" id="for_cheque_no" style="display:none;">
				<div class="form-group">
                  <label>Cheque No</label>
                  <input type="text"  name="cheque_no" placeholder="Cheque No."  value="" class="form-control">
                </div>
                </div>
				<div class="col-md-2" id="for_cheque_date" style="display:none;">
				<div class="form-group">
                  <label>Cheque Date</label>
                  <input type="date"  name="cheque_date" placeholder="Cheque Date"  value="2022-12-05" class="form-control">
                </div>
                </div>
				<div class="col-md-2" id="for_neft_bank_name" style="display:none;">
				<div class="form-group">
                  <label>Bank Name</label>
                  <input type="text"  name="neft_bank_name" placeholder="Bank Name"  value="" class="form-control">
                </div>
                </div>
				<div class="col-md-2" id="for_neft_account_no" style="display:none;">
				<div class="form-group">
                  <label>Account Number</label>
                  <input type="text"  name="neft_bank_account_no" placeholder="Account No."  value="" class="form-control">
                </div>
                </div>
			  
			  <div class="col-md-2">
			   <div class="form-group">
                  <label>Discount Remark</label>
                  <input type="text" name="discount_remark" placeholder="Discount Remark" value="" id="discount_remark" class="form-control" />
				</div>
               </div>
               
               <div class="col-md-2">
			   <div class="form-group">
                  <label>Discount Amount <small>( In Rs )</small></label>
                  <input type="text" name="discount_amount" placeholder="Discount Amount" value="" id="discount_amount" class="form-control" oninput="total_fee();" />
				</div>
               </div>
			  
			  <div class="col-md-2">
			   <div class="form-group">
                  <label>Total Fee / Year</label>
                  <input type="text" name="grand_total" placeholder="0"  value="0 " id="grand_total1" class="form-control" readonly />
				</div>
               </div>			  
             <div class="col-md-2">				
		      <div class="form-group">
                  <label>Total Fee Balance/Year</label>
                  <input type="text" name="balance_total" placeholder="0"  value="0 " id="grand_total1" class="form-control" readonly >
                </div>
             </div>
			 <div class="col-md-2">				
		      <div class="form-group">
                  <label>To Be Paid</label>
                  <input type="text" name="total_paid" placeholder="0"  value="" id="total_paid" class="form-control " readonly >
                </div>
             </div>
			 <div class="col-md-1">				
		      <div class="form-group">
                  <label>Penalty</label>
                  <input type="text" name="penalty_fee" placeholder="0" value="" class="form-control amt" oninput="total_fee();">
                </div>
             </div>
			 
			 <div class="col-md-3">				
		      <div class="form-group">
                  <label>Other Fee Remark</label>
                  <input type="text" name="other_fee_remark" placeholder="Other Fee Remark" value="" class="form-control" />
                </div>
             </div>
			 <div class="col-md-1">				
		      <div class="form-group">
                  <label>Other Fee</label>
                  <input type="text" name="other_fee_amount" placeholder="0" value="" class="form-control amt" oninput="total_fee();" />
                </div>
             </div>
			 
		    </div>
		</div>
		
		        <div class="col-md-12 ">
		            <div class="col-md-3">				
        		      <div class="form-group">
                          <label>Pay Amount</label>
                          <input type="number" placeholder="Enter Pay Amount" id="submission_amount" class="form-control" oninput="for_paid('1','');" />
                        </div>
                     </div>
		        </div>
		        <div class="col-md-12 ">
				<div class="col-md-8 ">	
				<label><input type="checkbox" name="myCheck" id="myCheck"  onclick="myFunction()">&nbsp;&nbsp;&nbsp;Check For Message</label>
				<div class="form-group" id="text" style="display:none">
				<input type="text" name="sms" placeholder="" id="contact"  class="form-control">
				  <label>Contact Number</label>
				<input type="text" name="student_sms_contact_number"  value="9050653720"  class="form-control">
			    <input type="hidden" name="send_sms" placeholder="" id="send_sms"  class="form-control">	 
			    </div>
				</div>
				</div>
		
		        <div class="box-body">
			       <div class="col-md-12">
		            <input type="hidden" name="penalty_amount" value="0" />
		            <input type="hidden" name="other_fee_amount1" value="0" />
					<input type="hidden" name="student_previous_year_fee_paid_total" value="" />
				    <input type="hidden" name="paid_total" value="0" />
				    <input type="hidden" name="month_count111" value="" />
				    <input type="hidden" name="month" value="04" />
				    <input type="hidden" name="blank_field_column_name" value="blank_field_5" />
		            <center><input type="submit" name="finish" value="Fee Submit" onclick="return validate();" class="btn  my_background_color" /></center>
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