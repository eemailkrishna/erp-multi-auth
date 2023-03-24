
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Fees Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
		<li><a href="javascript:get_content('fees_monthly/student_fee_balance_details')"><i class="fa fa-money"></i> Balance Details</a></li>
        <li class="active">Balance Details Particular</li>
      </ol>
    </section>
	
<script>
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
for_details();
}

function for_details(){
	var student_roll_no=document.getElementById('student_roll_no').value;
	var month_code = [];
	var month_name = [];
	$(".my_check").each(function() {
	if($(this).prop("checked") == true){
	month_code.push($(this).val());
	month_name.push($(this).attr('id'));
	}
	});
	$("#particular_details").html(loader_div);
	if(month_code!='' && month_name!=''){
	$.ajax({
	type: "POST",
	url: access_link+"fees_monthly/ajax_student_fee_balance_details_particular.php",
	data: {student_roll_no:student_roll_no,month_code:month_code,month_name:month_name},
	cache: false,
	success: function(detail){
	// alert(detail);
	$("#particular_details").html(detail);
	}
	});
	}else{
	$("#particular_details").html('');
	}
}

function for_pay(){
    var student_roll_no=document.getElementById('student_roll_no').value;
    var fee_month = '';
	$(".my_check").each(function() {
	if($(this).prop("checked") == true){
	if(fee_month!=''){
	fee_month=fee_month+','+$(this).val();
	}else{
	fee_month=$(this).val();
	}
	}
	});
    if(student_roll_no!='' && fee_month!='') {
    post_content('fees_monthly/student_fee_add_form','student_roll_no='+student_roll_no+'&fee_month='+fee_month);
    }
}
</script>
	
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
           
            <!-- /.box-header -->			
        <div class="box-body">
		
		<div class="box-body  col-md-12">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-7">
				<div class="col-md-4">
			<input type="checkbox" id="April Month" class="my_check" value="04" onclick="for_details();" checked /><span style="font-weight:bold;"> April Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="May Month" class="my_check" value="05" onclick="for_details();" checked /><span style="font-weight:bold;"> May Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="June Month" class="my_check" value="06" onclick="for_details();" checked /><span style="font-weight:bold;"> June Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="July Month" class="my_check" value="07" onclick="for_details();" checked /><span style="font-weight:bold;"> July Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="August Month" class="my_check" value="08" onclick="for_details();" checked /><span style="font-weight:bold;"> August Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="September Month" class="my_check" value="09" onclick="for_details();" checked /><span style="font-weight:bold;"> September Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="October Month" class="my_check" value="10" onclick="for_details();" checked /><span style="font-weight:bold;"> October Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="November Month" class="my_check" value="11" onclick="for_details();" checked /><span style="font-weight:bold;"> November Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="December Month" class="my_check" value="12" onclick="for_details();" checked /><span style="font-weight:bold;"> December Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="January Month" class="my_check" value="01" onclick="for_details();" checked /><span style="font-weight:bold;"> January Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="February Month" class="my_check" value="02" onclick="for_details();" checked /><span style="font-weight:bold;"> February Month</span>
		</div>
				<div class="col-md-4">
			<input type="checkbox" id="March Month" class="my_check" value="03" onclick="for_details();" checked /><span style="font-weight:bold;"> March Month</span>
		</div>
				</div>
		<div class="col-md-2">
		<input type="checkbox" name="" id="my_check" onclick="for_check(this.id);" checked /><span style="color:red;font-weight:bold;"> All Check / Uncheck</span>
		<input type="hidden" name="" id="student_roll_no" value="2000345" />
		</div>
		</div>
		<div class="col-md-12">&nbsp;</div>

		<div class="box-body col-md-10 col-md-offset-1" style="overflow:scroll;border:1px solid;" id="particular_details">

		
<table id="example1" class="table table-bordered table-striped">
<thead class="my_background_color">
<tr>
  <th>#</th>
  <th>student Name</th>
    <th>April Month Balance</th>
    <th>May Month Balance</th>
    <th>June Month Balance</th>
    <th>July Month Balance</th>
    <th>August Month Balance</th>
    <th>September Month Balance</th>
    <th>October Month Balance</th>
    <th>November Month Balance</th>
    <th>December Month Balance</th>
    <th>January Month Balance</th>
    <th>February Month Balance</th>
    <th>March Month Balance</th>
    <th>Transport Balance</th>
  <th>Total Balance</th>
  <th>Action</th>
</tr>
</thead>
<tbody>

<tr>
  <td>1.</td>
  <td>joy</td>
    <td>5000</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
  <td>5000</td>
  <td><button type="button" name="" id="" class="btn btn-default my_background_color" onclick="for_pay();">Pay Fee</button></td>
</tr>
</tbody>
</table>
		
		</div>
		  
		    
		</div>
		
</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
  </div>
</div>
</section>