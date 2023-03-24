@include('common.header')
@include('common.navbar')
<script>
function for_other(){
    var enquiry_type=document.getElementById('enquiry_type').value;
    if(enquiry_type=='other'){
        $('#div_enquiry_type_ohter').show();
        $('#enquiry_type_ohter').val('');
    }else{
        $('#div_enquiry_type_ohter').hide();
        $('#enquiry_type_ohter').val(enquiry_type);
    }
}

function myFunction()
{
if ($("#myCheck").prop("checked") == true){
$("#div_sms_content").show();
} else {
$("#div_sms_content").hide();
}
}

$("#my_form").submit(function(e){
e.preventDefault();

var formdata = new FormData(this);
window.scrollTo(0, 0);
loader();
$.ajax(l{
url: access_link+"enquiry/add_enquiry_api.php",
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
get_content('enquiry/enquiry_list');
}
}
});
});
</script>

<section class="content-header">
	<h1>
		New Enquiry <small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('enquiry/enquiry')"><i class="fa fa-phone-square"></i> Enquiry</a></li>
		<li class="active"><i class="fa fa-user-plus"></i> Enquiry Add</li>
	</ol>
</section>



<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<!-- general form elements disabled -->
		<div class="box box-primary my_border_top">
			<div class="box-header with-border ">
				<h3 class="box-title">Enquiry Form</h3>
			</div>
			<!-- /.box-header -->
			<!------------------------------------------------Start Registration form--------------------------------------------------->

			<div class="box-body">
				<form role="form" action="/enquiry-edit/{{$update->id}}" method="POST" id="my_form"
					enctype="multipart/form-data">
					@csrf

					<div class="col-md-4">
						<div class="form-group">
							<label>Enquiry Type<font style="color:red"><b>*</b></font></label>
							<select class="form-control" name="enquiry_type" id="enquiry_type" value="{{$update->enquiry_type}}" onchange="for_other();"
								required>
								<option value="{{$update->enquiry_type}}" selected hidden>{{$update->enquiry_type}}</option>
								<option value="for admission">For Admission</option>
								<option value="for job">For Job</option>
								<option value="other">Other</option>
							</select>
						</div>
					</div>

					<div class="col-md-4" id="div_enquiry_type_ohter">
						<div class="form-group">
							<label>Enquiry Type Other<font style="color:red"><b>*</b></font></label>
							<input type="text" value="{{$update->enquiry_type_other}}" name="enquiry_type_other" id="enquiry_type_ohter"
								placeholder="enquiry_type_other" class="form-control" required>
						</div>
					</div>

					<div class="col-md-4 ">
						<div class="form-group">
							<label>Date<font style="color:red"><b>*</b></font></label>
							<input type="date" value="{{$update->enquiry_type_other}}" name="enquiry_date" id="myLocalDate"
								placeholder="Date" value="" class="form-control" required>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Name<font style="color:red"><b>*</b></font></label>
							<input type="text" name="enquiry_name" placeholder="Name" value="{{$update->enquiry_name}}" class="form-control"
								required>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Father's Name</label>
							<input type="text" name="enquiry_father_name" placeholder="Father's Name" value="{{$update->enquiry_father_name}}"
								class="form-control">
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Enquiry Class<font style="color:red"><b>*</b></font></label>
							<select class="form-control" name="enquiry_class_name" id="blank_field_1" required>
								<option value="{{$update->select_class_name}}" selected hidden>{{$update->select_class_name}}</option>
								<option value="">Select Class</option>
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
							</select>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Address<font style="color:red"><b>*</b></font></label>
							<input type="text" name="enquiry_address" placeholder="Address" value="{{$update->enquiry_address}}"
								class="form-control" required>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Contact No 1.<font style="color:red"><b>*</b></font></label>
							<input type="text" name="enquiry_contact_no" placeholder="Contact No 1." value="{{$update->enquiry_contact_no}}"
								class="form-control" required>
						</div>
					</div>
					<!-- <div class="col-md-4 ">		
						<div class="form-group">
						  <label>Contact No 2.</label>
						   <input type="text" name="enquiry_contact_no_2" placeholder="Contact No 2."  value="" class="form-control">
						</div>
					</div> -->
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Next Follow Up Date</label>
							<input type="date" name="enquiry_next_follow_up_date" placeholder="Date" value="{{$update->enquiry_next_follow_up_date}}"
								class="form-control">
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Enquiry Remark1<font style="color:red"><b>*</b></font></label>
							<input type="text" name="enquiry_remark_1" placeholder="Enquiry Remark1" value="{{$update->enquiry_remark_1}}"
								class="form-control" required>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Previous School Name<font style="color:red"><b>*</b></font></label>
							<input type="text" name="previous_school_name" placeholder="Previous School Name" value="{{$update->previous_school_name}}"
								class="form-control" required>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
							<label>Staff Name<font style="color:red"><b></b></font></label>
							<select name="enquiry_staff_name" class="form-control select2">
							<option value="{{$update->enquiry_staff_name}}" selected hidden>{{$update->enquiry_staff_name}}</option>
								<option value="{{$update->enquiry_staff_name}}">select staff</option>
								<option value="kailash soni">kailash soni</option>
								<option value="kailash soni">kailash soni</option>
								<option value="jay kishan">jay kishan</option>
								<option value="Abhul Rjaak ">Abhul Rjaak </option>
								<option value="suresh soni">suresh soni</option>
								<option value="rohan">rohan</option>
								<option value="DEMO">DEMO</option>
								<option value="shreya sharma">shreya sharma</option>
								<option value="pravin">pravin</option>
								<option value="sanjay">sanjay</option>
								<option value="Rashi Saxena">Rashi Saxena</option>
								<option value="Pankajini Patra">Pankajini Patra</option>
								<option value="Jyoti Ranjan Patra">Jyoti Ranjan Patra</option>
								<option value="Goutam Kumar Das">Goutam Kumar Das</option>
								<option value="Human Ram Bhati">Human Ram Bhati</option>
								<option value="Premshankar Yadav">Premshankar Yadav</option>
								<option value="Amit Kumar Patra">Amit Kumar Patra</option>
								<option value="Sibdutta Negi">Sibdutta Negi</option>
								<option value="Brahmarao">Brahmarao</option>
								<option value="srishti gusain">srishti gusain</option>
								<option value="HARSHALI SHAH">HARSHALI SHAH</option>
								<option value="tushar modi ">tushar modi </option>
								<option value="DS SALUJA">DS SALUJA</option>
								<option value="AYUSH">AYUSH</option>
								<option value="TUSHAR IYRE ">TUSHAR IYRE </option>
								<option value="Rajanikanta Mund">Rajanikanta Mund</option>
								<option value="kunal mourya">kunal mourya</option>
								<option value="MR. SANTOSH KUMAR SAHU">MR. SANTOSH KUMAR SAHU</option>
								<option value="MR. BHOOPENDRA LODHI ">MR. BHOOPENDRA LODHI </option>
								<option value="Anjali ojha">Anjali ojha</option>
								<option value="atul singh thakur ">atul singh thakur </option>
								<option value="SANTOSH KUMAR SINGH">SANTOSH KUMAR SINGH</option>
								<option value="rani">rani</option>
								<option value="KUMAR RAVIKANT">KUMAR RAVIKANT</option>
								<option value="nikhil advin">nikhil advin</option>
								<option value="sadab">sadab</option>
								<option value="Ravi">Ravi</option>
								<option value="Samir harle">Samir harle</option>
								<option value="umesh mourya">umesh mourya</option>
								<option value="Neelam jharbade">Neelam jharbade</option>
								<option value="anand sharma">anand sharma</option>
								<option value="jitendra shriwash">jitendra shriwash</option>
								<option value="demo faculty">demo faculty</option>
								<option value="VATAN VERMA">VATAN VERMA</option>
								<option value="user1">user1</option>
								<option value="Pawan malviya">Pawan malviya</option>
								<option value=" teacher"> teacher</option>
								<option value="ABHISHEK SINGH THAKUR">ABHISHEK SINGH THAKUR</option>
								<option value="MONU KUMAR">MONU KUMAR</option>
								<option value="abhushek">abhushek</option>
								<option value="Teacher">Teacher</option>
								<option value="Supriya tiwari">Supriya tiwari</option>
								<option value="Yashpal Kr">Yashpal Kr</option>
								<option value="VAISHNAVI AGRWAL">VAISHNAVI AGRWAL</option>
								<option value="KAREEM RANA">KAREEM RANA</option>
								<option value="PALWINDER KAUR">PALWINDER KAUR</option>
								<option value="Supriya Santosh">Supriya Santosh</option>
								<option value="MD JAHIR KHAN">MD JAHIR KHAN</option>
								<option value="Supriya Santosh">Supriya Santosh</option>
								<option value="Mr Daya Nand Tiwari">Mr Daya Nand Tiwari</option>
								<option value="satyaprakash yadav">satyaprakash yadav</option>
								<option value="praveen">praveen</option>
								<option value="Neelam jharbade">Neelam jharbade</option>
								<option value="Tribhuwan Kumar">Tribhuwan Kumar</option>
								<option value="SURAJ KUMAR SINGH">SURAJ KUMAR SINGH</option>
								<option value="Rohit ">Rohit </option>
								<option value="umesh">umesh</option>
								<option value="Shiwanand Tiwari">Shiwanand Tiwari</option>
								<option value="suresh soni">suresh soni</option>
								<option value="RAYEES">RAYEES</option>
								<option value="ANAYAT ULLAH">ANAYAT ULLAH</option>
								<option value="xxx">xxx</option>
								<option value="AAA">AAA</option>
								<option value="AA">AA</option>
								<option value="JAVID">JAVID</option>
								<option value="Hansraj">Hansraj</option>
								<option value="Mohit nagar">Mohit nagar</option>
								<option value="PRAKASH KUMAWAT">PRAKASH KUMAWAT</option>
								<option value="Sunita Bai">Sunita Bai</option>
								<option value="Rati ">Rati </option>
								<option value="Priyanka kaushik">Priyanka kaushik</option>
								<option value="JAGMAL YADAV">JAGMAL YADAV</option>
								<option value="RAMKISHAN JI">RAMKISHAN JI</option>
								<option value="rima d">rima d</option>
								<option value="nidhi">nidhi</option>
								<option value="pooja ">pooja </option>
								<option value="ufgv">ufgv</option>
								<option value="Moniika">Moniika</option>
								<option value="Monika">Monika</option>
								<option value="shamli ">shamli </option>
								<option value="kundan kumar jha">kundan kumar jha</option>
								<option value="JAGMAL YADAV">JAGMAL YADAV</option>
								<option value="rahul ">rahul </option>
								<option value="eswari">eswari</option>
								<option value="JAGMAL YADAV">JAGMAL YADAV</option>
								<option value="JAGMAL YADAV">JAGMAL YADAV</option>
								<option value="ABJISHEK LAND">ABJISHEK LAND</option>
								<option value="TUSHAR SULTANE">TUSHAR SULTANE</option>
								<option value="PARVATI PATIL">PARVATI PATIL</option>
								<option value="ASHADUR RAHMAN MONDAL">ASHADUR RAHMAN MONDAL</option>
								<option value="TUSHAR">TUSHAR</option>
								<option value="VIVEK KUMAR">VIVEK KUMAR</option>
								<option value="suresh Devashi">suresh Devashi</option>
							</select>
						</div>
					</div>

					<div class="col-md-4 ">
						<div class="form-group">
							<label>Enquiry Remark2</label>
							<input type="text" name="enquiry_remark_2" placeholder="Enquiry Remark2" value="{{$update->"
								class="form-control">
						</div>
					</div>

					<div class="col-md-4 ">
						<div class="form-group">
							<label> Medium</label>
							<select name="student_medium" class="form-control">
								<option value="Hindi">Hindi</option>
								<option value="English">English</option>
							</select>
						</div>
					</div>

					<div class="col-md-12 ">
						<div class="col-md-8 ">
							<label><input type="checkbox" name="myCheck" id="myCheck"
									onclick="myFunction();">&nbsp;&nbsp;&nbsp;Check For Message</label>
							<div class="form-group" id="div_sms_content" style="display:none">
								<input type="text" name="sms_content" id="sms_content"
									value="Welcome to our School. Regards - SIMPTION TECH PVT LTD For more detail - 9074822542 [SCHOOL]"
									class="form-control">
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<center><input type="submit" name="submit" id="submitButtonId" value="Update"
								class="btn btn-primary" /></center>
					</div>
				</form>
			</div>
			<!---------------------------------------------End Registration form--------------------------------------------------------->
			<!-- /.box-body -->
		</div>
	</div>
</section>
<script>
	for_other();
</script>
<script>
	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()

	})
</script>
@include('common.footer')