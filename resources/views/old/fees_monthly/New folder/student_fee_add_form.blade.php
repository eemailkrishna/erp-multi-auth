
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
num = Number(parseInt(num)+1);
if(num>1){
fee_month=fee_month+','+$(this).val();
}else{
fee_month=$(this).val();
}
}
});
if(selected_student!='' && fee_month!='') {
post_content('fees_monthly/student_fee_add_form','student_roll_no='+selected_student+'&fee_month='+fee_month+chk_all);
//window.open('student_fee_add_form.php?student_roll_no='+selected_student+'&fee_month='+fee_month,'_self');
}
}

function for_dues1(){
var student_rollno=document.getElementById('selected_student').value;
$.ajax({
type: "POST",
url: access_link+"fees_monthly/ajax_get_student_dues_amount.php?student_rollno="+student_rollno+"",
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
$('#for_transaction_no').hide();
}else if(value=='NEFT'){
$('#for_neft_account_no').show();
$('#for_neft_bank_name').show();
$('#for_cheque_date').hide();
$('#for_cheque_no').hide();
$('#for_cheque_name').hide();
$('#for_transaction_no').hide();
}else if(value=='Paytm' || value=='Phone Pay' || value=='Google Pay' || value=='Other Wallet' || value=='Upi'){
$('#for_transaction_no').show();
$('#for_neft_account_no').hide();
$('#for_neft_bank_name').hide();
$('#for_cheque_date').hide();
$('#for_cheque_no').hide();
$('#for_cheque_name').hide();
}else{
$('#for_cheque_date').hide();
$('#for_cheque_no').hide();
$('#for_cheque_name').hide();
$('#for_neft_account_no').hide();
$('#for_neft_bank_name').hide();
$('#for_transaction_no').hide();
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
month = Number(parseInt(month)+1);
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
    
    var school_name = "SIMPTION TECH PVT LTD";
    var text = document.getElementById("text");
    if (checkBox.checked == true){
        text.style.display = "block";
		$('#contact').val('Dear '+student_name+',Your Fee Amount '+total_amount+' Successfully deposited. Thanking You');
			$('#contact').val('Dear '+student_name+',Your Fee Amount '+total_amount+' Has Been Successfully Deposited. Thank You, From '+school_name+' [SIMPTION]');

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
	url: access_link+"fees_monthly/student_fee_add_form_api.php",
	type: "POST",
	data: formdata,
	mimeTypes:"multipart/form-data",
	contentType: false,
	cache: false,
	processData: false,
	success: function(detail){
	    
	   // alert(detail)
	   // console.log(detail);
	   
	   var res=detail.split("|?|");
	   if(res[1]=='success'){
		   alert('Successfully Complete');
		  // get_content('fees_monthly/student_fee_add_form');
		  // window.open(res[3],'_blank');
		   post_content('fees_monthly/student_fee_list_particular','student_roll_no='+res[2]);
	}else if(res[1]=='session_not_set'){
                alert('Session Expire !!!');
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
    if(Number(submission_amount)<=Number(total_payable)){
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
function for_penalty(value){
    var selected_student=document.getElementById('selected_student').value;
    var select_month=[];
    var select_count=0;
    $('.fee_month').each(function() {
    if($(this).prop('checked')==true){
    select_month.push($(this).val());
    select_count = Number(parseInt(select_count)+1);
    }
    });
    if(select_count>0 && selected_student!='' && value!=''){
        
        $.ajax({
        type: "POST",
        url: access_link+"fees_monthly/ajax_get_penalty_amount.php",
        data: {select_month:select_month,select_count:select_count,selected_student:selected_student,value:value},
        cache: false,
        success: function(detail){
        var res=detail.split("|?|");
        $("#penalty_fee").val(res[1]);
        total_fee();
        }
        });
        
    }else{
        $("#penalty_fee").val('0');
        total_fee();
    }
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
        <li class="active">Student Fee Add</li>
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
										<option  value="2000297">REHAN[]-[]-[2ND-B]-[FARHAT ALI-8077194624]</option>
										<option  value="2000314">Rajesh Prasad[]-[]-[2ND-B]-[Ananda Prasad-9135956095]</option>
										<option  value="2000332">Palak Kumari[85274196313]-[]-[2ND-B]-[Krishna Sahani-9876543210]</option>
										<option  value="2000345">joy[192]-[126574]-[3RD-A]-[peter-8893387594]</option>
										<option  value="2100412">Upen[]-[126579]-[3RD-A]-[Rajdev Mishra-8601727725]</option>
										<option  value="2100414">Saurya[]-[30]-[4TH-A]-[Sanjeev Kumar-9456930082]</option>
										<option  value="2100415">dummy[]-[]-[2ND-B]-[dummy father -1234567890]</option>
										<option  value="2100427">Akhil[]-[4]-[2ND-A]-[Mr. Manoj-9719433442]</option>
										<option  value="2100430">Sangita[]-[25]-[UKG-A]-[Ramji-9827185031]</option>
										<option  value="2100437">cddf[]-[126573]-[3RD-A]-[-6]</option>
										<option  value="2100450">umesh  dhakad[]-[31]-[UKG-A]-[mr  ramgopal dhakad-8269548476]</option>
										<option  value="2100451">Humaira[]-[18]-[UKG-A]-[Palash-1316543133]</option>
										<option  value="2100458">ayush koli[]-[8]-[UKG-A]-[prabhu dayal-9826390607]</option>
										<option  value="2100470">ajay kewat[]-[126571]-[3RD-A]-[durga kewat-]</option>
										<option  value="2100471">Aman[]-[16]-[4TH-A]-[Asad-9634569635]</option>
										<option  value="2100474">raja[]-[126577]-[3RD-A]-[raja-1234567891]</option>
										<option  value="2100520">Nikhil  Lodhi[427]-[25]-[4TH-A]-[Mayank Lodhi-8679458246]</option>
										<option  value="2100536">RAJESH[]-[]-[11TH-A]-[TARACHANDRA-9839458652]</option>
										<option  value="2100537">Vaidik[]-[12565]-[5TH-A]-[-9974301792]</option>
										<option  value="2100538">Diviya prajapati[]-[18]-[4TH-A]-[Shrawan Ram-9571176454]</option>
										<option  value="2100541">Sagar Singh[]-[1]-[7TH-A]-[Rakesh Singh-1234567890]</option>
										<option  value="2100544">Jidan uddin[]-[401392]-[1ST-A]-[riyaz uddin-8942116685]</option>
										<option  value="2100549">Avnish kumar[]-[120004]-[2ND-A]-[Gopal kumar-9931742369]</option>
										<option  value="2100553">umesh [109]-[30]-[UKG-A]-[abhishek-9144555977]</option>
										<option  value="2100561">umesh []-[]-[6TH-A]-[-]</option>
										<option  value="2100563">umesh []-[12564]-[5TH-A]-[-]</option>
										<option  value="2100571">Anshu[126]-[7]-[UKG-A]-[Vijay-9144555977]</option>
										<option  value="2100575"> BABALI SAHU[100094]-[2]-[UKG-A]-[SHAIKH-7978988989]</option>
										<option  value="2100583">श्री[]-[120005]-[2ND-A]-[दीपक-9926621333]</option>
										<option  value="2100585">Muhammed Adnan[]-[23]-[4TH-A]-[Muhammed Afnan-686868606868]</option>
										<option  value="2100589">hari[]-[101206]-[2ND-A]-[hani-123456]</option>
										<option  value="2100601">Nidhi Mishra[]-[101212]-[UKG-A]-[Nidhi Mishra-7571940317]</option>
										<option  value="2100609">SARIKA SULTANE[]-[]-[11TH-A]-[SANJAY-7498177242]</option>
										<option  value="2200612">dummy[]-[120007]-[2ND-A]-[dummy father -1234567890]</option>
										<option  value="2200614">balveer singh[77]-[12372]-[LKG-A]-[sukhvinder singh-9144555977]</option>
										<option  value="2200615">mahira khan[94]-[12373]-[LKG-A]-[irfan khan-9144555977]</option>
										<option  value="2200618">sanny[66]-[12371]-[LKG-A]-[soham-9144555977]</option>
										<option  value="2200622">rohan sah[]-[120023]-[2ND-A]-[ram -9816870719]</option>
										<option  value="2200623">ishan kumar[]-[120009]-[2ND-A]-[rohit kumar-9816870719]</option>
										<option  value="2200624">pankaj patel[1234]-[]-[6TH-A]-[ram -9816870719]</option>
										<option  value="2200626">kirti panday[101]-[12374]-[LKG-A]-[sumit panday-9865474758]</option>
										<option  value="2200627">lali[]-[12364]-[LKG-A]-[-]</option>
										<option  value="2200628">sushant singh[75]-[101219]-[UKG-A]-[nilkamal singh -9825734280]</option>
										<option  value="2200629">saloni[]-[120025]-[2ND-A]-[bijay-9825734280]</option>
										<option  value="2200630">suman[]-[]-[6TH-A]-[bijay-9825734280]</option>
										<option  value="2200632">MANVEER SINGH []-[]-[7TH-A]-[GURDEV SINGH -836009915]</option>
										<option  value="2200633">RAM PANDEY[]-[]-[9TH-A]-[KAMLESH PANDEY-77718853445]</option>
										<option  value="2200634">Mayur Mangesh Padvi[]-[120012]-[2ND-A]-[Mangesh Gorakh Padvi-7773954846]</option>
										<option  value="2200635">Bhavesh Arvind Padvi[]-[120006]-[2ND-A]-[Arvind Gorakh Padvi-8766578634]</option>
										<option  value="2200636">Nikhil Dinesh Padvi[]-[120014]-[2ND-A]-[Dinesh Gorakh Padvi-7507167517]</option>
										<option  value="2200637">Kiran Sharma[]-[]-[7TH-A]-[Ramu Sharma-123456789]</option>
										<option  value="2200638">Riya Sharma[]-[]-[7TH-A]-[Ram Sharma-234567891]</option>
										<option  value="2200640">Meena Verma[]-[]-[7TH-A]-[Jay Verma-456789123]</option>
										<option  value="2200641">Heena Mittal[]-[]-[7TH-A]-[Lalu Pasad-567891234]</option>
										<option  value="2200642">Anamika[]-[]-[7TH-A]-[Yash Kapoor-9456312705]</option>
										<option  value="2200643">Lalu Kumar[]-[]-[7TH-A]-[Raju Kumar-678912345]</option>
										<option  value="2200644">SK Thakur[]-[101217]-[UKG-A]-[Aasss-8084407273]</option>
										<option  value="2200645">abcs[]-[120003]-[2ND-A]-[ebgh-25585]</option>
										<option  value="2200646">Jay Sharma[]-[101207]-[UKG-A]-[Harsh Sharma-1234567891]</option>
										<option  value="2200647">Sikdar[]-[101216]-[UKG-A]-[-666]</option>
										<option  value="2200648">Bijoy[]-[101204]-[UKG-A]-[ajoy-4555]</option>
										<option  value="2200650">sona[]-[120026]-[2ND-A]-[rajesh-9816870719]</option>
										<option  value="2200651">RIYA DAS[]-[101214]-[UKG-A]-[RATAN DAS-]</option>
										<option  value="2200652">SUMIT KUMAR[100094]-[101218]-[UKG-A]-[Anil kumar -1234567890]</option>
										<option  value="2200653">Somya[]-[]-[UKG-A]-[-6756789876]</option>
										<option  value="2200654">MAHEK DASHORE[]-[]-[11TH-A]-[NAVIN KUMAR DASHORE-9584669888]</option>
										<option  value="2200656">Radha Kumari[]-[101213]-[UKG-A]-[Ram Kumar-1234567894]</option>
										<option  value="2200657">ARPAN NANDEWAR[]-[101201]-[UKG-A]-[RAM NANDEWAR-7987736568]</option>
										<option  value="2200659">mahir khan []-[22]-[4TH-A]-[javed khan -8305694069]</option>
										<option  value="2200661">imran khan []-[19]-[4TH-A]-[waseem khan -9977805298]</option>
										<option  value="2200662">sajid khan []-[120024]-[2ND-A]-[javed khan-9826038592]</option>
										<option  value="2200663">dummy []-[120008]-[2ND-A]-[dummy father-1234567890]</option>
										<option  value="2200665">dishika[]-[]-[6TH-A]-[sonu khatri -1234567892]</option>
										<option  value="2200666">Bhavesh Arvind Padvi[]-[101203]-[UKG-A]-[-]</option>
										<option  value="2200667">payal[]-[]-[7TH-A]-[shyamlal-8052987121]</option>
										<option  value="2200668">SAJAL[]-[29]-[4TH-A]-[-9818273851]</option>
										<option  value="2200669">sarita[]-[]-[6TH-A]-[ramjee Gupta-8840268435]</option>
										<option  value="2200671">Komal Gupta[11]-[120011]-[2ND-A]-[Pramod Gupta-8192906306]</option>
										<option  value="2200672">Anil Kumar[]-[17]-[4TH-A]-[-9990008522]</option>
										<option  value="2200674">Anil Kapoor Dhoom[]-[]-[2ND-A]-[-9998000522]</option>
										<option  value="2200675">Prashant []-[31]-[2ND-A]-[Rammu lal-]</option>
										<option  value="2200677">RAJ[]-[120020]-[2ND-A]-[rajesh-4987549]</option>
										<option  value="2200678">himanshi[]-[]-[UKG-A]-[babl-1444411]</option>
										<option  value="2200679">Ram[]-[12563]-[5TH-A]-[Lala seth-9893230765]</option>
										<option  value="2200680">Prashant Kumar[]-[12562]-[5TH-A]-[Rammu-8109607707]</option>
										<option  value="2200681">GGDFGFDGFDG[]-[101205]-[UKG-A]-[-]</option>
										<option  value="2200684">ABHISHEK []-[]-[UKG-A]-[B L YADAV-9695924506]</option>
										<option  value="2200685">XYZ[]-[120027]-[2ND-A]-[XYZ-9818273851]</option>
										<option  value="2200686">abc[]-[120002]-[2ND-A]-[-7845123698]</option>
										<option  value="2200687">rahul[]-[120019]-[2ND-A]-[-]</option>
										<option  value="2200688">Prashant rajak[]-[120018]-[2ND-A]-[Rammu lal-647322824425]</option>
										<option  value="2200689"> Kanika[]-[]-[UKG-A]-[-0123456789]</option>
										<option  value="2200691">Ravi[]-[]-[UKG-A]-[xyz-]</option>
										<option  value="2200692">Prashant kumar[]-[120017]-[2ND-A]-[Rammu lal-]</option>
										<option  value="2200693">RAHUL[]-[]-[UKG-A]-[XYC-]</option>
										<option  value="2200695">praveen kumar[]-[401394]-[1ST-A]-[-66666666666]</option>
										<option  value="2200698">bjkb[]-[]-[2ND-A]-[kllkdv-9038423904]</option>
										<option  value="2200699">laxmi[]-[]-[2ND-A]-[venkat-1234567892]</option>
										<option  value="2200702">AJAY[]-[]-[2ND-A]-[SUNIL-7067633301]</option>
										<option  value="2200707">kunal jha[]-[]-[UKG-A]-[-9918556649]</option>
										<option  value="2200708">fgdfg[]-[]-[UKG-A]-[dfgdf-955656]</option>
										<option  value="2200709">DISHANT PATIDAR[]-[]-[6TH-A]-[-9999555333]</option>
										<option  value="2200710">vishal jha[]-[]-[UKG-A]-[-9918556649]</option>
										<option  value="2200713">Ram[]-[27]-[4TH-A]-[-9999999995656]</option>
										<option  value="2200714">vishal jha[]-[20]-[UKG-A]-[-9918556649]</option>
										<option  value="2200715">Prashant kumar[]-[401393]-[1ST-A]-[babl-7844411100]</option>
										<option  value="2200716">AS[]-[126572]-[3RD-A]-[SS-4545454]</option>
										<option  value="2200717">muskan ray[]-[13]-[UKG-A]-[roshan ray-9813405312]</option>
										<option  value="2200719">Prashant  KUMAR[14]-[12561]-[5TH-A]-[Rammu lal-7744447774]</option>
										<option  value="2200720">xghkjh[]-[12361]-[LKG-A]-[Anil-1234567891]</option>
										<option  value="2200722">सौरभ[]-[9]-[2ND-A]-[sunil  jain-9234567981]</option>
										<option  value="2200723">aashu []-[]-[3RD-A]-[-1234567891]</option>
										<option  value="2200724">SANJAY KUMAR[]-[]-[UKG-A]-[manoj pandey-470050060]</option>
										<option  value="2200725">Rahul kumar[]-[]-[5TH-A]-[vijay singh-8700377769]</option>
										<option  value="2200728">saloni karn[]-[28]-[2ND-A]-[bijay karn-9816870719]</option>
										<option  value="2200729">sushant karn[]-[17]-[UKG-A]-[bijay karn-9816870719]</option>
										<option  value="2200730">sanam karn[]-[12362]-[LKG-A]-[bijay karn-9816870719]</option>
										<option  value="2200731">simran[]-[]-[5TH-A]-[PRAKASH PATIDAR-9977522556]</option>
										<option  value="2200732">APEKSHIT KOLI[]-[5]-[2ND-A]-[MANOJ KUMAR KOLI-7697233299]</option>
										<option  value="2200733">Akshay Karande[]-[12366]-[LKG-A]-[NILESH PATIDAR-]</option>
										<option  value="2200734">Rituraj[]-[126593]-[2ND-A]-[mitu raj-9875455522]</option>
										<option  value="2200735">Aaditya []-[1]-[2ND-A]-[Sujit-9934507865]</option>
										<option  value="2200737">ashok[]-[]-[9TH-A]-[-]</option>
										<option  value="2200738">mayank[]-[12367]-[LKG-A]-[demo--1]</option>
										<option  value="2200740">ashok[]-[6]-[2ND-A]-[-]</option>
										<option  value="2200741">Abhay[]-[4]-[UKG-A]-[-]</option>
										<option  value="2200742">vivek[]-[30]-[2ND-A]-[-]</option>
										<option  value="2200743">abhisek[]-[401390]-[1ST-A]-[-8109195202]</option>
										<option  value="2200744">bbs[]-[10]-[2ND-A]-[bbs-9638527410]</option>
										<option  value="2200745">roma[]-[]-[9TH-A]-[-8109195202]</option>
										<option  value="2200746">ravi[]-[]-[2ND-A]-[udham-56548455455]</option>
										<option  value="2200747">Vaishnavi Thakur[]-[12368]-[LKG-A]-[Mr. Amrendra Pratap Singh -9918666600]</option>
										<option  value="2200748">AADITYA JHILLE[552]-[]-[2ND-A]-[AASHISH JHILLE-7024347776]</option>
										<option  value="2200749">Shifa Meman[]-[]-[8TH-A]-[Shabbir Meman-9893840078]</option>
										<option  value="2200750">ROHIT KUMAR[]-[]-[2ND-A]-[DOODH NATH YADAV-8577908478]</option>
										<option  value="2200751">Prashant  KUMAR[]-[]-[2ND-A]-[Rammu lal-7748908646]</option>
										<option  value="2200752">Urvi sen[]-[12369]-[LKG-A]-[Prabhash sen-9101065310]</option>
										<option  value="2200753">Akshaj Mishra[]-[1]-[3RD-A]-[shesh Narayan Mishra-9685437207]</option>
										<option  value="2200755">priya[]-[26]-[4TH-A]-[rahul mehara-65463312]</option>
										<option  value="2200756">RAJESH KUMAR MAHTO []-[12005]-[6TH-A]-[SITA RAM MAHTO -7488150952]</option>
										<option  value="2200757">Ram[]-[]-[12TH-A]-[Bca-9416499566]</option>
										<option  value="2200758">Aashish[]-[6]-[NURSERY-A]-[Ramesh-9416499566]</option>
										<option  value="2200759">INAMUR RAHMAN[]-[12348]-[LKG-A]-[ATIKUR RAHMAN-8486304694]</option>
										<option  value="2200760">nidhi jain []-[4]-[3RD-A]-[sunil  jain-9988525245]</option>
										<option  value="2200761">rakesh[]-[12370]-[LKG-A]-[-]</option>
										<option  value="2200762">Ravi[]-[]-[12TH-A]-[-8059076999]</option>
										<option  value="2200763">VINAYAK PATIDAR[]-[126507]-[5TH-A]-[rahul mehara-456946564]</option>
										<option  value="2200765">RAJ  NAYK []-[12004]-[6TH-A]-[GOPAL KHATRI-96325663]</option>
										<option  value="2200767">Praashant []-[126501]-[5TH-A]-[rammulal-70000040]</option>
										<option  value="2200770">raman[]-[14]-[NURSERY-A]-[tapan-7896541256]</option>
										<option  value="2200771">Akshay[]-[]-[8TH-A]-[ABC-1234567890]</option>
										<option  value="2200772">Prashant r[]-[]-[5TH-A]-[rahul mehara -]</option>
										<option  value="2200776">nidhi jain []-[24]-[4TH-A]-[sunil  jain-9988554665]</option>
										<option  value="2200779">sunil 1[]-[]-[2ND-A]-[Asad-9955886644]</option>
										<option  value="2200780">Nikhil[]-[]-[UKG-A]-[jonh-9090909090]</option>
										<option  value="2200782">yashi[]-[17]-[NURSERY-A]-[pushpendra-8430555580]</option>
										<option  value="2200783">Gopi[]-[126572]-[8TH-A]-[BIKSHAM -9052483352]</option>
										<option  value="2200785">ABHIMANYU SHARMA[1001]-[7]-[NURSERY-A]-[GOURAV SHARMA-9755404505]</option>
										<option  value="2200786">AVNI SHARMA[]-[]-[2ND-A]-[SOURABH SHARMA-9826625627]</option>
										<option  value="2200788">Fig[]-[]-[7TH-A]-[Niraj Kumar -458725]</option>
										<option  value="2200790">shree[]-[16]-[NURSERY-A]-[samay singh -9911587536]</option>
										<option  value="2200791">shreyansh[]-[401396]-[1ST-A]-[Neeraj kumar-9911587539]</option>
										<option  value="2200793">Ajay[]-[8]-[NURSERY-A]-[Vijay-685555555555]</option>
										<option  value="2200795">Druwa Ganesh Chaudhari[]-[11]-[NURSERY-A]-[Ganesh Chaudhari-8469808008]</option>
										<option  value="2200796">SONU PRAJAPATI[741]-[24]-[2ND-A]-[LALARAM PRAJAPATI-7067208375]</option>
										<option  value="2200797">Md alam ali []-[]-[UKG-A]-[Ali alam-9473000888]</option>
										<option  value="2200798">dummy [0950]-[11]-[2ND-A]-[dummy-1234567890]</option>
										<option  value="2200799">TABREZ ALAM[]-[]-[2ND-A]-[BAKRIDAN ANSARI-7677425494]</option>
										<option  value="2200800">SHIVANSH RAWAT[]-[15]-[NURSERY-A]-[AJAY-6283926887]</option>
										<option  value="2200805">mahi[]-[1265704]-[8TH-A]-[rohit kumar -]</option>
										<option  value="2200806">mahi[]-[3]-[UKG-A]-[ram singh -7024510634]</option>
										<option  value="2200810">shahnawaz[]-[401395]-[1ST-A]-[-7677425494]</option>
										<option  value="2200811">yasin[]-[401400]-[1ST-A]-[-9931326638]</option>
										<option  value="2200812">sultana[]-[401398]-[1ST-A]-[-9693212542]</option>
										<option  value="2200814">pragya []-[1030]-[6TH-A]-[rajesh-1234567891]</option>
										<option  value="2200817">priya[]-[1265710]-[8TH-A]-[kaml raj-56454564564564]</option>
										<option  value="2200822">mahi[]-[1265705]-[8TH-A]-[kaml raj-5644545456]</option>
										<option  value="2200823">Yash []-[]-[NURSERY-A]-[Soun-6265767366]</option>
										<option  value="2200827">jeet kumar[]-[1031]-[6TH-A]-[amit kumar -7896454571]</option>
										<option  value="2200831">PANKAJ KUMAR[]-[]-[2ND-A]-[UPENDRA SHARMA-7004625934]</option>
										<option  value="2200836">Rohit[]-[]-[9TH-A]-[Ram kumar-9918066214]</option>
										<option  value="2200841">vicky uikey[]-[401399]-[1ST-A]-[jitendrasingh uikey-7354713649]</option>
										<option  value="2200846">penolope []-[1265706]-[8TH-A]-[jonh-]</option>
										<option  value="2200854">Abdul sami []-[]-[12TH-A]-[Mohd Sharif -6005939589]</option>
										<option  value="2200856">jjlklkk[]-[1265703]-[8TH-A]-[-]</option>
										<option  value="2200861">VINAYAK PATIDAR[]-[25]-[2ND-A]-[SUNIL RAI-9955882211]</option>
										<option  value="2200864">NIDHI SINGH[]-[]-[5TH-A]-[RAMRAJ-89789665677]</option>
										<option  value="2200868">Prashant []-[]-[7TH-A]-[Rammu lal-1234569875]</option>
										<option  value="2200869">Prashant []-[]-[7TH-A]-[Rammu lal-1234587932]</option>
										<option  value="2200871">pooja bairagi[]-[1265707]-[8TH-A]-[j. d. bairagi-]</option>
										<option  value="2200872">pooja bairagi[]-[1265708]-[8TH-A]-[j. d. bairagi-]</option>
										<option  value="2200879">pooja bairagi[]-[1265709]-[8TH-A]-[Mr. J.D. Bairagi-]</option>
										<option  value="2200883">Farhan khan[]-[1265701]-[8TH-A]-[Riyaz khan-458963248327]</option>
										<option  value="2200884">पंकज कुमार[]-[10]-[NURSERY-A]-[लालू राम-9898888888]</option>
										<option  value="2200886">Mafidul Islam[]-[]-[6TH-A]-[Ali-00000000000000]</option>
										<option  value="2200901">neha parihar []-[6]-[UKG-A]-[himanshu parihar -7854126359]</option>
										<option  value="2200910">Prashant[]-[]-[8TH-A]-[Rammu lal-7740000]</option>
										<option  value="2200915">mahi[]-[]-[8TH-A]-[kaml raj-4744444]</option>
										<option  value="2200918">mansha[]-[4]-[UKG-A]-[-]</option>
										<option  value="2200919">riya[]-[]-[8TH-A]-[kaml raj-56454564]</option>
										<option  value="2200927">VINAYAK PATIDAR[]-[]-[2ND-A]-[RAJENDRA PATIDAR-9988552233]</option>
										<option  value="2200931">ArhN[]-[]-[5TH-A]-[Arqam-982365526]</option>
										<option  value="2200933">Ariz[]-[1]-[UKG-A]-[-]</option>
										<option  value="2200934">Ariz[]-[2]-[UKG-A]-[-]</option>
										<option  value="2200936">vicky uikey[]-[]-[2ND-A]-[jitendra singh uikey-7354713649]</option>
										<option  value="2200937">Chirag jatav[]-[401391]-[1ST-A]-[MR.Arjun jatav-123]</option>
										<option  value="2200938">Pooja bairagi []-[]-[8TH-A]-[Smt. Meenu bairagi-963486652388]</option>
										<option  value="2200939">rajkumar[]-[]-[8TH-A]-[Rammu lal-544564]</option>
										<option  value="2200942">priya[]-[]-[8TH-A]-[-]</option>
										<option  value="2200943">Md. Mokarram alam []-[5]-[UKG-A]-[Md. Siddique alam -6200665811]</option>
										<option  value="2200945">ashta []-[]-[8TH-A]-[sanjeev -7894561230]</option>
										<option  value="2200946">lalit []-[]-[7TH-A]-[harichandra -1234567890]</option>
										<option  value="2200947">shikha []-[]-[8TH-A]-[rajendra -546123790]</option>
										<option  value="2200948">SANDEEP[]-[12363]-[LKG-A]-[PRATHAM SINGH-9991233258]</option>
										<option  value="2200951">Vansh Kumar Pasi[]-[]-[2ND-A]-[Ravi Pasi-8103488491]</option>
										<option  value="2200953">rakesh[]-[12365]-[LKG-A]-[shaelendra-9058068745]</option>
										<option  value="2200955">RAM KUMAR []-[]-[2ND-A]-[SHYAM KUMAR -8936860311]</option>
										<option  value="2200957">Prashant []-[]-[8TH-A]-[rammu lal -7748770000]</option>
										<option  value="2200958">Prashant []-[]-[8TH-A]-[rammu lal -74444]</option>
										<option  value="2200959">Amit rao[]-[]-[2ND-A]-[Sahab rao-9450673349]</option>
										<option  value="2200961">NIDHI SINGH[]-[]-[2ND-A]-[BHARAT PATIDAR-824685465]</option>
										<option  value="2200962">shravan singh[]-[]-[2ND-A]-[rajaram singh-9452358861]</option>
										<option  value="2200965">asharamk[]-[]-[2ND-A]-[-6265861579]</option>
										<option  value="2200974">kamalkant[]-[]-[8TH-A]-[vasudev dhakad-9752199047]</option>
										<option  value="2200976">Prashant []-[]-[8TH-A]-[rammu lal -744777]</option>
										<option  value="2200977">Aarunya Raj Sinha[]-[]-[UKG-A]-[tret-87874545454]</option>
										<option  value="2200980">Monali[03]-[]-[2ND-A]-[-]</option>
										<option  value="2200984">lokesh[]-[]-[8TH-A]-[sandeep-9416499566]</option>
										<option  value="2200987">prash[]-[]-[7TH-A]-[rrmm-7444]</option>
										<option  value="2200989">Prashant []-[]-[8TH-A]-[rammu lal -74440]</option>
										<option  value="2200990">Prashant []-[123469]-[8TH-A]-[rammu lal -744]</option>
										<option  value="2200992">Prashant []-[123470]-[8TH-A]-[-77]</option>
										<option  value="2200993">VEDANT TIWARI[]-[123476]-[8TH-A]-[MANOJ KUMAR TIWARI-8090688671]</option>
										<option  value="2201009">Aamna Hussain[]-[5]-[NURSERY-A]-[Syed Farhat Hussain-9018501010]</option>
										<option  value="2201010">Prashant []-[]-[7TH-A]-[rammu lal -74444]</option>
										<option  value="2201015">Prashant []-[]-[7TH-A]-[rammu lal -7441000]</option>
										<option  value="2201032">RAJESH CHOVE[]-[]-[9TH-A]-[MUKESH CHOVE-]</option>
										<option  value="2201035">Nitya Yadav[]-[]-[NURSERY-A]-[Mr. Mayank Yadav-8707260755]</option>
										<option  value="2201036">Shubh Kashyap[]-[]-[NURSERY-A]-[Mr. Anikesh Kumar-8957380880]</option>
										<option  value="2201037">Arohi Kushwaha[]-[]-[NURSERY-A]-[Mr. Shailendra Singh Kushwaha-8726794375]</option>
										<option  value="2201038">Anikesh[]-[]-[NURSERY-A]-[Mr. Amit Kumar-9621111842]</option>
										<option  value="2201039">Prithviraj[]-[13]-[NURSERY-A]-[Dr. Pramod Kumar-9219270152]</option>
										<option  value="2201040">Arushi Diwakar[]-[9]-[NURSERY-A]-[Mr. Virendra Kumar-6393465780]</option>
										<option  value="2201041">Kartik Nishad[]-[12]-[NURSERY-A]-[Kartik Nishad-]</option>
										<option  value="2201062">Ramesh[]-[28]-[4TH-A]-[Suresh-9821223300]</option>
										<option  value="2201068">AUGUSTAY[50]-[]-[10TH-A]-[ SHARMA-9897015271]</option>
										<option  value="2201069">Anamika Agrawal[ABC123]-[]-[7TH-A]-[Sushil Agrawal-9111111111]</option>
										<option  value="2201076">Sujata Agrawal[ABC345]-[401397]-[1ST-A]-[Sushil Agrawal-7111111111]</option>
										<option  value="2201077">aman soni[]-[]-[11TH-A]-[ravi soni-6387770743]</option>
										<option  value="2201078">aman soni 2[]-[]-[9TH-A]-[ravi soni-6387770743]</option>
										<option  value="2201079">amit[]-[]-[11TH-A]-[ram chandr-8976453600]</option>
										<option  value="2201080">Roshan []-[]-[6TH-A]-[Raj Mishra-9936528547]</option>
										<option  value="2201081">NIDHI SINGH []-[]-[7TH-A]-[Asad-8454154454]</option>
										<option  value="2201082">Rajdeep kumar[]-[]-[4TH-A]-[Mandal himesh-8709788098]</option>
										<option  value="2201084">SURYA PRATAP MAURYA[]-[]-[5TH-A]-[-]</option>
										<option  value="2201085">Danica Mariam Jacob[]-[]-[1ST-A]-[J P Jacob-9977228818]</option>
										<option  value="2201086">Rahul Kumar[]-[]-[NURSERY-A]-[Lalbabu Ray-9570503057]</option>
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
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="05"  onclick="call_me();" > May Month / <span style="color:red;font-weight:bold;" id="dues_05">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="06"  onclick="call_me();" > June Month / <span style="color:red;font-weight:bold;" id="dues_06">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="07"  onclick="call_me();" > July Month / <span style="color:red;font-weight:bold;" id="dues_07">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="08"  onclick="call_me();" > August Month / <span style="color:red;font-weight:bold;" id="dues_08">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="09"  onclick="call_me();" > September Month / <span style="color:red;font-weight:bold;" id="dues_09">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="10"  onclick="call_me();" > October Month / <span style="color:red;font-weight:bold;" id="dues_10">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="11"  onclick="call_me();" > November Month / <span style="color:red;font-weight:bold;" id="dues_11">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="12"  onclick="call_me();" > December Month / <span style="color:red;font-weight:bold;" id="dues_12">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="01"  onclick="call_me();" > January Month / <span style="color:red;font-weight:bold;" id="dues_01">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="02"  onclick="call_me();" > February Month / <span style="color:red;font-weight:bold;" id="dues_02">0</span>
			</div>
						
			<div class="col-md-3">
			<input type="checkbox" id="" class="fee_month" value="03"  onclick="call_me();" > March Month / <span style="color:red;font-weight:bold;" id="dues_03">0</span>
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