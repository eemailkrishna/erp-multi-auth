
<script>
function for_fee(){
var student_old_new=document.getElementById('student_old_new').value;
var student_class=document.getElementById('student_class').value;
if(student_old_new!='' && student_class!=''){
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_get_classwise_fee.php?old_new="+student_old_new+"&student_class="+student_class+"",
	  cache: false,
	  success: function(detail){
		var str =detail;
		var res = str.split("||");
		$("#student_admission_fee").val(res[0]);
		$("#click").click();
	    }
    });
}
}
</script>

<script>
// function discount_type1(value,count,class_code,fees_code){

	// if(value!='None'){		
	// $.ajax({
		  // type: "POST",
		  // url: access_link+"fees_monthly/ajax_discount.php?id="+value+"&student_class_code="+class_code+"&fees_code="+fees_code+"",
		  // cache: false,
		  // success: function(detail){
		  // var res = detail.split("|?|");
		  // $("#discount_method_"+count).val(res[2]);
	      // $("#discount_amount_"+count).val(res[1]);
	      // $("#click_"+count).click();
		  // }
	   // });
	   // }else{
	   // $("#discount_method_"+count).val('%');
	   // $("#discount_amount_"+count).val('0');
	   // $("#click_"+count).click();
	   // }
	   
// }
	
function for_total(value,count){
	  
	  var discount_amount=document.getElementById('discount_amount_'+count).value;
	  var discount_method=document.getElementById('discount_method_'+count).value;
	  var amount=document.getElementById('fee_type_'+count).value;
	  var paid_amt=document.getElementById('fee_paid11_'+count).value;
	  if(discount_amount>0){
	  if(discount_method=='%'){
	  var aft_disc_amount=parseFloat(amount)-parseFloat(parseFloat(amount)*parseFloat(discount_amount))/100;
	  $("#after_discount_amount_"+count).val(aft_disc_amount);
	  $("#balance_per_year_"+count).val(aft_disc_amount);
	  var min_val=parseFloat(paid_amt)+(parseFloat(amount)-parseFloat(aft_disc_amount));
	  $("#fee_type_"+count).prop('min',min_val);
	  }else if(discount_method=='Rs'){
	  var aft_disc_amount=parseFloat(amount)-parseFloat(discount_amount);
	  $("#after_discount_amount_"+count).val(aft_disc_amount);
	  $("#balance_per_year_"+count).val(aft_disc_amount);
	  var min_val=parseFloat(paid_amt)+(parseFloat(amount)-parseFloat(aft_disc_amount));
	  $("#fee_type_"+count).prop('min',min_val);
	  }
	  }else{
	  $("#after_discount_amount_"+count).val(amount);
	  $("#balance_per_year_"+count).val(amount);
	  $("#fee_type_"+count).prop('min',paid_amt);
	  }
	  if(value=='yes'){
	   var add1 = 0;
	  $('.amt').each(function() {
	  add1 += Number($(this).val());
	  });
	  document.getElementById('grand_total1').value = add1;
	  }else if(value=='no'){
	  var add = 0;
	  $('.fee').each(function() {
	  add += Number($(this).val());
	  });
	  document.getElementById('grand_total').value = add;
	  }

}
	
function month_total(month){
	var add = 0;
	$('.fee_amount_'+month).each(function() {
	add += Number($(this).val());
	});
	$('#total_month_'+month).html('Total Fee : '+add);
	var add1 = 0;
	$('.balance_amount_'+month).each(function() {
	add1 += Number($(this).val());
	});
	$('#balance_month_'+month).html('Total Balance : '+add1);
	var add2 = 0;
	$('.fee_paid_'+month).each(function() {
	add2 += Number($(this).val());
	});
	$('#paid_month_'+month).html('Total Paid : '+add2);
}

function for_same(id,class_name,clk_btn_cls,btn_id,chk_id){
	if($('#'+chk_id).prop("checked") == true){
		var all_val = document.getElementById(id).value;
		$("."+class_name).each(function(){
		$(this).val(all_val);
		});
		$("."+clk_btn_cls).each(function(){
		$(this).click();
		});
	}else{
		$('#'+btn_id).click();
	}
}
</script>	
<script>
  $(function(){
          var add = 0;
		  $('.fee').each(function() {
		  add += Number($(this).val());
          document.getElementById('grand_total').value = add;
    });
	});
	
	$(function(){
          var add1 = 0;
		  $('.amt').each(function() {
		  add += Number($(this).val());
          document.getElementById('grand_total1').value = add;
    });
	});
	
	function transport_total(value){
		if(value=='yes'){
		var add1 = 0;
		$('.amt').each(function() {
		add1 += Number($(this).val());
		});
		document.getElementById('grand_total1').value = add1;
		}else if(value=='no'){
		var add = 0;
		$('.fee').each(function() {
		add += Number($(this).val());
		});
		document.getElementById('grand_total').value = add;
		}
	}
	
	function with_admission(val){
	$('#click_'+val).click();
	}


    $(function(){
            var id=document.getElementById('student_class').value;			
            var section_hidden=document.getElementById('student_class_section_hidden').value;			
       $.ajax({
			  type: "POST",
              url: access_link+"fees_monthly/ajax_class_section_hidden.php?class_name="+id+"&section_hidden="+section_hidden+"",
              cache: false,
              success: function(detail){
                  $("#student_class_section").html(detail);
              }
           });

    });	
	
$("#my_form").submit(function(e){
	e.preventDefault();

var formdata = new FormData(this);
window.scrollTo(0, 0);
    get_content(loader_div);
	$.ajax({
		url: access_link+"fees_monthly/set_fee_details_api.php",
		type: "POST",
		data: formdata,
		mimeTypes:"multipart/form-data",
		contentType: false,
		cache: false,
		processData: false,
		success: function(detail){
		   var res=detail.split("|?|");
		   if(res[1]=='success'){
			   alert('Successfully Complete');
			   get_content('fees_monthly/student_admission_fee_list');
		}
		}
	 });
  });
  
function reset_fee(student_roll_no){
window.scrollTo(0, 0);
    get_content(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/reset_fee_details_api.php?student_roll_no="+student_roll_no+"",
	  cache: false,
	  success: function(detail){
		var res=detail.split("|?|");
		if(res[1]=='success'){
		alert('Reset Successfully');
		post_content('fees_monthly/set_fee_details',"student_roll_no="+student_roll_no);
		}
	  }
   });
   
}
</script>

    <!-- Content Header (Page header) -->
      <section class="content-header">
      <h1>
        Student Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	  <li><a href="javascript:get_content('fees_monthly/student_admission_fee_list')"><i class="fa fa-money"></i> Student Admission Fee List</a></li>
	  <li class="active">Set Student Fee Details</li>
      </ol>
      </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
           
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
			  <!---------------------------Start Admission form--------------------------------------->
        <!---------------------------Start Personal Details ------------------------------------->
			
		<form method="post" enctype="multipart/form-data" id="my_form">
		
				
            <div class="box-body">
			    <div class="col-md-3">
					<div class="form-group">
					  <label>Student Name</label>
					   <input type="text"  name="student_name"  placeholder="Student Name"  value="ajit" class="form-control" readonly>
					</div>
				</div>
				 <div class="col-md-3">
						<div class="form-group">
						  <label>Father Name</label>
						   <input type="text"  name="father_name"  placeholder="Father Name"  value="Satveer" class="form-control" readonly>
						</div>
				 </div>
				<div class="col-md-2">
						<div class="form-group">
						  <label>Class</label>
						   <input type="text"  name="student_class"  placeholder="Class"  value="2ND" class="form-control" readonly>
						</div>
				</div>
				<div class="col-md-2">
						<div class="form-group">
						  <label>Section</label>
						   <input type="text"  name="student_class_section"  placeholder="Section"  value="B" class="form-control" readonly>
						</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					<label>&nbsp;</label>
		            <center><button type="button" value="Reset Fee" onclick="reset_fee('2000296');" class="btn  my_background_color" >Reset Fee</button></center>
		          </div>
			    </div>
				
			</div>
				   
		<!---------------------------Start Fees Details ----------------------------------------->
		    <div class="box-body">
			<div class="col-md-4"><h3 style="color:#d9534f;"><b>Fees Details:</b></h3></div>
			<div class="col-md-3" style="float:right;"><span style="color:red;"><input type="checkbox" name="" id="check_for_same" value="" />&nbsp;&nbsp;&nbsp;<b>Check For Same Discount</b></span></div>
			<div class="col-md-3" style="float:right;"><span style="color:red;"><input type="checkbox" name="" id="head_same" value="" />&nbsp;&nbsp;&nbsp;<b>Check For Same Fee</b></span></div>
            	
				 				 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">April Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month04" placeholder="annual" value="" id="fee_type_1" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_1','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month04" id="disc_type_1" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_1','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_1" class="clk_btn_fee1" value="no" onclick="for_total('no','1');month_total('04');">
					<input type="text" name="student_fee1_discount_amount_month04" id="discount_amount_1" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_1','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month04" id="discount_method_1" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_1','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month04" placeholder="0"  value="" id="after_discount_amount_1" class="form-control fee fee_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month04" placeholder="0"  value="" id="balance_per_year_1" class="form-control balance_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month04" value="0" placeholder="0" id="fee_paid11_1" class="form-control fee_paid_1" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month04" placeholder="singing" value="" id="fee_type_2" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_2','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month04" id="disc_type_2" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_2','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_2" class="clk_btn_fee2" value="no" onclick="for_total('no','2');month_total('04');">
					<input type="text" name="student_fee2_discount_amount_month04" id="discount_amount_2" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_2','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month04" id="discount_method_2" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_2','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month04" placeholder="0"  value="" id="after_discount_amount_2" class="form-control fee fee_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month04" placeholder="0"  value="" id="balance_per_year_2" class="form-control balance_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month04" value="0" placeholder="0" id="fee_paid11_2" class="form-control fee_paid_2" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month04" placeholder="Transport fees" value="450" id="fee_type_3" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_3','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month04" id="disc_type_3" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_3','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_3" class="clk_btn_fee3" value="no" onclick="for_total('no','3');month_total('04');">
					<input type="text" name="student_fee3_discount_amount_month04" id="discount_amount_3" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_3','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month04" id="discount_method_3" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_3','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month04" placeholder="0"  value="450" id="after_discount_amount_3" class="form-control fee fee_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month04" placeholder="0"  value="450" id="balance_per_year_3" class="form-control balance_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month04" value="0" placeholder="0" id="fee_paid11_3" class="form-control fee_paid_3" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month04" placeholder="sports fees" value="" id="fee_type_4" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_4','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month04" id="disc_type_4" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_4','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_4" class="clk_btn_fee4" value="no" onclick="for_total('no','4');month_total('04');">
					<input type="text" name="student_fee4_discount_amount_month04" id="discount_amount_4" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_4','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month04" id="discount_method_4" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_4','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month04" placeholder="0"  value="" id="after_discount_amount_4" class="form-control fee fee_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month04" placeholder="0"  value="" id="balance_per_year_4" class="form-control balance_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month04" value="0" placeholder="0" id="fee_paid11_4" class="form-control fee_paid_4" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month04" placeholder="exam fee" value="" id="fee_type_5" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_5','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month04" id="disc_type_5" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_5','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_5" class="clk_btn_fee5" value="no" onclick="for_total('no','5');month_total('04');">
					<input type="text" name="student_fee5_discount_amount_month04" id="discount_amount_5" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_5','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month04" id="discount_method_5" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_5','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month04" placeholder="0"  value="" id="after_discount_amount_5" class="form-control fee fee_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month04" placeholder="0"  value="" id="balance_per_year_5" class="form-control balance_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month04" value="0" placeholder="0" id="fee_paid11_5" class="form-control fee_paid_5" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month04" placeholder="event fee" value="" id="fee_type_6" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_6','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month04" id="disc_type_6" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_6','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_6" class="clk_btn_fee8" value="no" onclick="for_total('no','6');month_total('04');">
					<input type="text" name="student_fee8_discount_amount_month04" id="discount_amount_6" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_6','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month04" id="discount_method_6" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_6','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month04" placeholder="0"  value="" id="after_discount_amount_6" class="form-control fee fee_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month04" placeholder="0"  value="" id="balance_per_year_6" class="form-control balance_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month04" value="0" placeholder="0" id="fee_paid11_6" class="form-control fee_paid_6" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month04" placeholder="bus fee" value="" id="fee_type_7" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_7','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month04" id="disc_type_7" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_7','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_7" class="clk_btn_fee9" value="no" onclick="for_total('no','7');month_total('04');">
					<input type="text" name="student_fee9_discount_amount_month04" id="discount_amount_7" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_7','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month04" id="discount_method_7" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_7','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month04" placeholder="0"  value="" id="after_discount_amount_7" class="form-control fee fee_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month04" placeholder="0"  value="" id="balance_per_year_7" class="form-control balance_amount_04" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month04" value="0" placeholder="0" id="fee_paid11_7" class="form-control fee_paid_7" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_04">Total Fee : 450</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_04">Total Balance : 450</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_04">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">May Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month05" placeholder="annual" value="" id="fee_type_8" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_8','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month05" id="disc_type_8" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_8','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_8" class="clk_btn_fee1" value="no" onclick="for_total('no','8');month_total('05');">
					<input type="text" name="student_fee1_discount_amount_month05" id="discount_amount_8" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_8','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month05" id="discount_method_8" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_8','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_8" class="form-control fee fee_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month05" placeholder="0"  value="" id="balance_per_year_8" class="form-control balance_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month05" value="0" placeholder="0" id="fee_paid11_8" class="form-control fee_paid_8" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month05" placeholder="singing" value="" id="fee_type_9" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_9','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month05" id="disc_type_9" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_9','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_9" class="clk_btn_fee2" value="no" onclick="for_total('no','9');month_total('05');">
					<input type="text" name="student_fee2_discount_amount_month05" id="discount_amount_9" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_9','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month05" id="discount_method_9" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_9','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_9" class="form-control fee fee_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month05" placeholder="0"  value="" id="balance_per_year_9" class="form-control balance_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month05" value="0" placeholder="0" id="fee_paid11_9" class="form-control fee_paid_9" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month05" placeholder="Transport fees" value="" id="fee_type_10" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_10','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month05" id="disc_type_10" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_10','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_10" class="clk_btn_fee3" value="no" onclick="for_total('no','10');month_total('05');">
					<input type="text" name="student_fee3_discount_amount_month05" id="discount_amount_10" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_10','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month05" id="discount_method_10" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_10','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_10" class="form-control fee fee_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month05" placeholder="0"  value="" id="balance_per_year_10" class="form-control balance_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month05" value="0" placeholder="0" id="fee_paid11_10" class="form-control fee_paid_10" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month05" placeholder="sports fees" value="" id="fee_type_11" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_11','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month05" id="disc_type_11" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_11','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_11" class="clk_btn_fee4" value="no" onclick="for_total('no','11');month_total('05');">
					<input type="text" name="student_fee4_discount_amount_month05" id="discount_amount_11" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_11','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month05" id="discount_method_11" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_11','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_11" class="form-control fee fee_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month05" placeholder="0"  value="" id="balance_per_year_11" class="form-control balance_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month05" value="0" placeholder="0" id="fee_paid11_11" class="form-control fee_paid_11" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month05" placeholder="exam fee" value="" id="fee_type_12" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_12','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month05" id="disc_type_12" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_12','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_12" class="clk_btn_fee5" value="no" onclick="for_total('no','12');month_total('05');">
					<input type="text" name="student_fee5_discount_amount_month05" id="discount_amount_12" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_12','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month05" id="discount_method_12" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_12','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_12" class="form-control fee fee_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month05" placeholder="0"  value="" id="balance_per_year_12" class="form-control balance_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month05" value="0" placeholder="0" id="fee_paid11_12" class="form-control fee_paid_12" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month05" placeholder="event fee" value="" id="fee_type_13" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_13','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month05" id="disc_type_13" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_13','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_13" class="clk_btn_fee8" value="no" onclick="for_total('no','13');month_total('05');">
					<input type="text" name="student_fee8_discount_amount_month05" id="discount_amount_13" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_13','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month05" id="discount_method_13" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_13','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_13" class="form-control fee fee_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month05" placeholder="0"  value="" id="balance_per_year_13" class="form-control balance_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month05" value="0" placeholder="0" id="fee_paid11_13" class="form-control fee_paid_13" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month05" placeholder="bus fee" value="" id="fee_type_14" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_14','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month05" id="disc_type_14" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_14','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_14" class="clk_btn_fee9" value="no" onclick="for_total('no','14');month_total('05');">
					<input type="text" name="student_fee9_discount_amount_month05" id="discount_amount_14" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_14','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month05" id="discount_method_14" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_14','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_14" class="form-control fee fee_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month05" placeholder="0"  value="" id="balance_per_year_14" class="form-control balance_amount_05" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month05" value="0" placeholder="0" id="fee_paid11_14" class="form-control fee_paid_14" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_05">Total Fee : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_05">Total Balance : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_05">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">June Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month06" placeholder="annual" value="" id="fee_type_15" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_15','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month06" id="disc_type_15" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_15','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_15" class="clk_btn_fee1" value="no" onclick="for_total('no','15');month_total('06');">
					<input type="text" name="student_fee1_discount_amount_month06" id="discount_amount_15" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_15','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month06" id="discount_method_15" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_15','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_15" class="form-control fee fee_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month06" placeholder="0"  value="" id="balance_per_year_15" class="form-control balance_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month06" value="0" placeholder="0" id="fee_paid11_15" class="form-control fee_paid_15" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month06" placeholder="singing" value="" id="fee_type_16" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_16','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month06" id="disc_type_16" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_16','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_16" class="clk_btn_fee2" value="no" onclick="for_total('no','16');month_total('06');">
					<input type="text" name="student_fee2_discount_amount_month06" id="discount_amount_16" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_16','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month06" id="discount_method_16" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_16','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_16" class="form-control fee fee_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month06" placeholder="0"  value="" id="balance_per_year_16" class="form-control balance_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month06" value="0" placeholder="0" id="fee_paid11_16" class="form-control fee_paid_16" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month06" placeholder="Transport fees" value="" id="fee_type_17" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_17','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month06" id="disc_type_17" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_17','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_17" class="clk_btn_fee3" value="no" onclick="for_total('no','17');month_total('06');">
					<input type="text" name="student_fee3_discount_amount_month06" id="discount_amount_17" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_17','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month06" id="discount_method_17" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_17','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_17" class="form-control fee fee_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month06" placeholder="0"  value="" id="balance_per_year_17" class="form-control balance_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month06" value="0" placeholder="0" id="fee_paid11_17" class="form-control fee_paid_17" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month06" placeholder="sports fees" value="" id="fee_type_18" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_18','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month06" id="disc_type_18" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_18','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_18" class="clk_btn_fee4" value="no" onclick="for_total('no','18');month_total('06');">
					<input type="text" name="student_fee4_discount_amount_month06" id="discount_amount_18" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_18','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month06" id="discount_method_18" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_18','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_18" class="form-control fee fee_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month06" placeholder="0"  value="" id="balance_per_year_18" class="form-control balance_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month06" value="0" placeholder="0" id="fee_paid11_18" class="form-control fee_paid_18" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month06" placeholder="exam fee" value="" id="fee_type_19" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_19','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month06" id="disc_type_19" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_19','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_19" class="clk_btn_fee5" value="no" onclick="for_total('no','19');month_total('06');">
					<input type="text" name="student_fee5_discount_amount_month06" id="discount_amount_19" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_19','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month06" id="discount_method_19" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_19','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_19" class="form-control fee fee_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month06" placeholder="0"  value="" id="balance_per_year_19" class="form-control balance_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month06" value="0" placeholder="0" id="fee_paid11_19" class="form-control fee_paid_19" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month06" placeholder="event fee" value="" id="fee_type_20" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_20','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month06" id="disc_type_20" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_20','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_20" class="clk_btn_fee8" value="no" onclick="for_total('no','20');month_total('06');">
					<input type="text" name="student_fee8_discount_amount_month06" id="discount_amount_20" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_20','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month06" id="discount_method_20" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_20','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_20" class="form-control fee fee_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month06" placeholder="0"  value="" id="balance_per_year_20" class="form-control balance_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month06" value="0" placeholder="0" id="fee_paid11_20" class="form-control fee_paid_20" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month06" placeholder="bus fee" value="" id="fee_type_21" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_21','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month06" id="disc_type_21" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_21','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_21" class="clk_btn_fee9" value="no" onclick="for_total('no','21');month_total('06');">
					<input type="text" name="student_fee9_discount_amount_month06" id="discount_amount_21" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_21','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month06" id="discount_method_21" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_21','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_21" class="form-control fee fee_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month06" placeholder="0"  value="" id="balance_per_year_21" class="form-control balance_amount_06" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month06" value="0" placeholder="0" id="fee_paid11_21" class="form-control fee_paid_21" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_06">Total Fee : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_06">Total Balance : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_06">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">July Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month07" placeholder="annual" value="" id="fee_type_22" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_22','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month07" id="disc_type_22" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_22','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_22" class="clk_btn_fee1" value="no" onclick="for_total('no','22');month_total('07');">
					<input type="text" name="student_fee1_discount_amount_month07" id="discount_amount_22" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_22','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month07" id="discount_method_22" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_22','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_22" class="form-control fee fee_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month07" placeholder="0"  value="" id="balance_per_year_22" class="form-control balance_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month07" value="0" placeholder="0" id="fee_paid11_22" class="form-control fee_paid_22" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month07" placeholder="singing" value="" id="fee_type_23" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_23','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month07" id="disc_type_23" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_23','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_23" class="clk_btn_fee2" value="no" onclick="for_total('no','23');month_total('07');">
					<input type="text" name="student_fee2_discount_amount_month07" id="discount_amount_23" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_23','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month07" id="discount_method_23" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_23','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_23" class="form-control fee fee_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month07" placeholder="0"  value="" id="balance_per_year_23" class="form-control balance_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month07" value="0" placeholder="0" id="fee_paid11_23" class="form-control fee_paid_23" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month07" placeholder="Transport fees" value="" id="fee_type_24" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_24','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month07" id="disc_type_24" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_24','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_24" class="clk_btn_fee3" value="no" onclick="for_total('no','24');month_total('07');">
					<input type="text" name="student_fee3_discount_amount_month07" id="discount_amount_24" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_24','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month07" id="discount_method_24" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_24','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_24" class="form-control fee fee_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month07" placeholder="0"  value="" id="balance_per_year_24" class="form-control balance_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month07" value="0" placeholder="0" id="fee_paid11_24" class="form-control fee_paid_24" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month07" placeholder="sports fees" value="" id="fee_type_25" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_25','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month07" id="disc_type_25" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_25','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_25" class="clk_btn_fee4" value="no" onclick="for_total('no','25');month_total('07');">
					<input type="text" name="student_fee4_discount_amount_month07" id="discount_amount_25" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_25','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month07" id="discount_method_25" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_25','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_25" class="form-control fee fee_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month07" placeholder="0"  value="" id="balance_per_year_25" class="form-control balance_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month07" value="0" placeholder="0" id="fee_paid11_25" class="form-control fee_paid_25" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month07" placeholder="exam fee" value="" id="fee_type_26" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_26','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month07" id="disc_type_26" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_26','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_26" class="clk_btn_fee5" value="no" onclick="for_total('no','26');month_total('07');">
					<input type="text" name="student_fee5_discount_amount_month07" id="discount_amount_26" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_26','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month07" id="discount_method_26" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_26','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_26" class="form-control fee fee_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month07" placeholder="0"  value="" id="balance_per_year_26" class="form-control balance_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month07" value="0" placeholder="0" id="fee_paid11_26" class="form-control fee_paid_26" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month07" placeholder="event fee" value="" id="fee_type_27" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_27','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month07" id="disc_type_27" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_27','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_27" class="clk_btn_fee8" value="no" onclick="for_total('no','27');month_total('07');">
					<input type="text" name="student_fee8_discount_amount_month07" id="discount_amount_27" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_27','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month07" id="discount_method_27" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_27','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_27" class="form-control fee fee_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month07" placeholder="0"  value="" id="balance_per_year_27" class="form-control balance_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month07" value="0" placeholder="0" id="fee_paid11_27" class="form-control fee_paid_27" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month07" placeholder="bus fee" value="" id="fee_type_28" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_28','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month07" id="disc_type_28" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_28','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_28" class="clk_btn_fee9" value="no" onclick="for_total('no','28');month_total('07');">
					<input type="text" name="student_fee9_discount_amount_month07" id="discount_amount_28" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_28','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month07" id="discount_method_28" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_28','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_28" class="form-control fee fee_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month07" placeholder="0"  value="" id="balance_per_year_28" class="form-control balance_amount_07" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month07" value="0" placeholder="0" id="fee_paid11_28" class="form-control fee_paid_28" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_07">Total Fee : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_07">Total Balance : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_07">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">August Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month08" placeholder="annual" value="" id="fee_type_29" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_29','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month08" id="disc_type_29" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_29','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_29" class="clk_btn_fee1" value="no" onclick="for_total('no','29');month_total('08');">
					<input type="text" name="student_fee1_discount_amount_month08" id="discount_amount_29" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_29','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month08" id="discount_method_29" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_29','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_29" class="form-control fee fee_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month08" placeholder="0"  value="" id="balance_per_year_29" class="form-control balance_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month08" value="0" placeholder="0" id="fee_paid11_29" class="form-control fee_paid_29" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month08" placeholder="singing" value="" id="fee_type_30" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_30','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month08" id="disc_type_30" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_30','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_30" class="clk_btn_fee2" value="no" onclick="for_total('no','30');month_total('08');">
					<input type="text" name="student_fee2_discount_amount_month08" id="discount_amount_30" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_30','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month08" id="discount_method_30" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_30','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_30" class="form-control fee fee_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month08" placeholder="0"  value="" id="balance_per_year_30" class="form-control balance_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month08" value="0" placeholder="0" id="fee_paid11_30" class="form-control fee_paid_30" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month08" placeholder="Transport fees" value="" id="fee_type_31" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_31','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month08" id="disc_type_31" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_31','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_31" class="clk_btn_fee3" value="no" onclick="for_total('no','31');month_total('08');">
					<input type="text" name="student_fee3_discount_amount_month08" id="discount_amount_31" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_31','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month08" id="discount_method_31" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_31','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_31" class="form-control fee fee_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month08" placeholder="0"  value="" id="balance_per_year_31" class="form-control balance_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month08" value="0" placeholder="0" id="fee_paid11_31" class="form-control fee_paid_31" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month08" placeholder="sports fees" value="" id="fee_type_32" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_32','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month08" id="disc_type_32" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_32','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_32" class="clk_btn_fee4" value="no" onclick="for_total('no','32');month_total('08');">
					<input type="text" name="student_fee4_discount_amount_month08" id="discount_amount_32" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_32','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month08" id="discount_method_32" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_32','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_32" class="form-control fee fee_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month08" placeholder="0"  value="" id="balance_per_year_32" class="form-control balance_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month08" value="0" placeholder="0" id="fee_paid11_32" class="form-control fee_paid_32" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month08" placeholder="exam fee" value="" id="fee_type_33" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_33','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month08" id="disc_type_33" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_33','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_33" class="clk_btn_fee5" value="no" onclick="for_total('no','33');month_total('08');">
					<input type="text" name="student_fee5_discount_amount_month08" id="discount_amount_33" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_33','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month08" id="discount_method_33" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_33','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_33" class="form-control fee fee_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month08" placeholder="0"  value="" id="balance_per_year_33" class="form-control balance_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month08" value="0" placeholder="0" id="fee_paid11_33" class="form-control fee_paid_33" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month08" placeholder="event fee" value="" id="fee_type_34" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_34','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month08" id="disc_type_34" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_34','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_34" class="clk_btn_fee8" value="no" onclick="for_total('no','34');month_total('08');">
					<input type="text" name="student_fee8_discount_amount_month08" id="discount_amount_34" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_34','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month08" id="discount_method_34" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_34','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_34" class="form-control fee fee_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month08" placeholder="0"  value="" id="balance_per_year_34" class="form-control balance_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month08" value="0" placeholder="0" id="fee_paid11_34" class="form-control fee_paid_34" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month08" placeholder="bus fee" value="" id="fee_type_35" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_35','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month08" id="disc_type_35" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_35','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_35" class="clk_btn_fee9" value="no" onclick="for_total('no','35');month_total('08');">
					<input type="text" name="student_fee9_discount_amount_month08" id="discount_amount_35" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_35','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month08" id="discount_method_35" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_35','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_35" class="form-control fee fee_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month08" placeholder="0"  value="" id="balance_per_year_35" class="form-control balance_amount_08" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month08" value="0" placeholder="0" id="fee_paid11_35" class="form-control fee_paid_35" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_08">Total Fee : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_08">Total Balance : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_08">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">September Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month09" placeholder="annual" value="" id="fee_type_36" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_36','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month09" id="disc_type_36" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_36','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_36" class="clk_btn_fee1" value="no" onclick="for_total('no','36');month_total('09');">
					<input type="text" name="student_fee1_discount_amount_month09" id="discount_amount_36" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_36','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month09" id="discount_method_36" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_36','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_36" class="form-control fee fee_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month09" placeholder="0"  value="" id="balance_per_year_36" class="form-control balance_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month09" value="0" placeholder="0" id="fee_paid11_36" class="form-control fee_paid_36" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month09" placeholder="singing" value="" id="fee_type_37" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_37','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month09" id="disc_type_37" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_37','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_37" class="clk_btn_fee2" value="no" onclick="for_total('no','37');month_total('09');">
					<input type="text" name="student_fee2_discount_amount_month09" id="discount_amount_37" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_37','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month09" id="discount_method_37" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_37','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_37" class="form-control fee fee_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month09" placeholder="0"  value="" id="balance_per_year_37" class="form-control balance_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month09" value="0" placeholder="0" id="fee_paid11_37" class="form-control fee_paid_37" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month09" placeholder="Transport fees" value="" id="fee_type_38" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_38','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month09" id="disc_type_38" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_38','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_38" class="clk_btn_fee3" value="no" onclick="for_total('no','38');month_total('09');">
					<input type="text" name="student_fee3_discount_amount_month09" id="discount_amount_38" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_38','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month09" id="discount_method_38" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_38','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_38" class="form-control fee fee_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month09" placeholder="0"  value="" id="balance_per_year_38" class="form-control balance_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month09" value="0" placeholder="0" id="fee_paid11_38" class="form-control fee_paid_38" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month09" placeholder="sports fees" value="" id="fee_type_39" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_39','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month09" id="disc_type_39" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_39','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_39" class="clk_btn_fee4" value="no" onclick="for_total('no','39');month_total('09');">
					<input type="text" name="student_fee4_discount_amount_month09" id="discount_amount_39" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_39','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month09" id="discount_method_39" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_39','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_39" class="form-control fee fee_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month09" placeholder="0"  value="" id="balance_per_year_39" class="form-control balance_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month09" value="0" placeholder="0" id="fee_paid11_39" class="form-control fee_paid_39" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month09" placeholder="exam fee" value="" id="fee_type_40" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_40','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month09" id="disc_type_40" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_40','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_40" class="clk_btn_fee5" value="no" onclick="for_total('no','40');month_total('09');">
					<input type="text" name="student_fee5_discount_amount_month09" id="discount_amount_40" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_40','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month09" id="discount_method_40" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_40','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_40" class="form-control fee fee_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month09" placeholder="0"  value="" id="balance_per_year_40" class="form-control balance_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month09" value="0" placeholder="0" id="fee_paid11_40" class="form-control fee_paid_40" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month09" placeholder="event fee" value="" id="fee_type_41" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_41','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month09" id="disc_type_41" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_41','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_41" class="clk_btn_fee8" value="no" onclick="for_total('no','41');month_total('09');">
					<input type="text" name="student_fee8_discount_amount_month09" id="discount_amount_41" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_41','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month09" id="discount_method_41" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_41','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_41" class="form-control fee fee_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month09" placeholder="0"  value="" id="balance_per_year_41" class="form-control balance_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month09" value="0" placeholder="0" id="fee_paid11_41" class="form-control fee_paid_41" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month09" placeholder="bus fee" value="" id="fee_type_42" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_42','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month09" id="disc_type_42" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_42','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_42" class="clk_btn_fee9" value="no" onclick="for_total('no','42');month_total('09');">
					<input type="text" name="student_fee9_discount_amount_month09" id="discount_amount_42" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_42','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month09" id="discount_method_42" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_42','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_42" class="form-control fee fee_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month09" placeholder="0"  value="" id="balance_per_year_42" class="form-control balance_amount_09" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month09" value="0" placeholder="0" id="fee_paid11_42" class="form-control fee_paid_42" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_09">Total Fee : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_09">Total Balance : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_09">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">October Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month10" placeholder="annual" value="" id="fee_type_43" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_43','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month10" id="disc_type_43" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_43','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_43" class="clk_btn_fee1" value="no" onclick="for_total('no','43');month_total('10');">
					<input type="text" name="student_fee1_discount_amount_month10" id="discount_amount_43" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_43','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month10" id="discount_method_43" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_43','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_43" class="form-control fee fee_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month10" placeholder="0"  value="" id="balance_per_year_43" class="form-control balance_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month10" value="0" placeholder="0" id="fee_paid11_43" class="form-control fee_paid_43" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month10" placeholder="singing" value="" id="fee_type_44" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_44','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month10" id="disc_type_44" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_44','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_44" class="clk_btn_fee2" value="no" onclick="for_total('no','44');month_total('10');">
					<input type="text" name="student_fee2_discount_amount_month10" id="discount_amount_44" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_44','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month10" id="discount_method_44" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_44','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_44" class="form-control fee fee_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month10" placeholder="0"  value="" id="balance_per_year_44" class="form-control balance_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month10" value="0" placeholder="0" id="fee_paid11_44" class="form-control fee_paid_44" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month10" placeholder="Transport fees" value="" id="fee_type_45" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_45','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month10" id="disc_type_45" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_45','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_45" class="clk_btn_fee3" value="no" onclick="for_total('no','45');month_total('10');">
					<input type="text" name="student_fee3_discount_amount_month10" id="discount_amount_45" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_45','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month10" id="discount_method_45" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_45','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_45" class="form-control fee fee_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month10" placeholder="0"  value="" id="balance_per_year_45" class="form-control balance_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month10" value="0" placeholder="0" id="fee_paid11_45" class="form-control fee_paid_45" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month10" placeholder="sports fees" value="" id="fee_type_46" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_46','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month10" id="disc_type_46" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_46','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_46" class="clk_btn_fee4" value="no" onclick="for_total('no','46');month_total('10');">
					<input type="text" name="student_fee4_discount_amount_month10" id="discount_amount_46" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_46','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month10" id="discount_method_46" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_46','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_46" class="form-control fee fee_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month10" placeholder="0"  value="" id="balance_per_year_46" class="form-control balance_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month10" value="0" placeholder="0" id="fee_paid11_46" class="form-control fee_paid_46" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month10" placeholder="exam fee" value="" id="fee_type_47" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_47','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month10" id="disc_type_47" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_47','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_47" class="clk_btn_fee5" value="no" onclick="for_total('no','47');month_total('10');">
					<input type="text" name="student_fee5_discount_amount_month10" id="discount_amount_47" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_47','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month10" id="discount_method_47" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_47','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_47" class="form-control fee fee_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month10" placeholder="0"  value="" id="balance_per_year_47" class="form-control balance_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month10" value="0" placeholder="0" id="fee_paid11_47" class="form-control fee_paid_47" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month10" placeholder="event fee" value="" id="fee_type_48" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_48','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month10" id="disc_type_48" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_48','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_48" class="clk_btn_fee8" value="no" onclick="for_total('no','48');month_total('10');">
					<input type="text" name="student_fee8_discount_amount_month10" id="discount_amount_48" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_48','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month10" id="discount_method_48" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_48','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_48" class="form-control fee fee_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month10" placeholder="0"  value="" id="balance_per_year_48" class="form-control balance_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month10" value="0" placeholder="0" id="fee_paid11_48" class="form-control fee_paid_48" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month10" placeholder="bus fee" value="" id="fee_type_49" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_49','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month10" id="disc_type_49" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_49','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_49" class="clk_btn_fee9" value="no" onclick="for_total('no','49');month_total('10');">
					<input type="text" name="student_fee9_discount_amount_month10" id="discount_amount_49" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_49','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month10" id="discount_method_49" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_49','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_49" class="form-control fee fee_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month10" placeholder="0"  value="" id="balance_per_year_49" class="form-control balance_amount_10" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month10" value="0" placeholder="0" id="fee_paid11_49" class="form-control fee_paid_49" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_10">Total Fee : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_10">Total Balance : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_10">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">November Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month11" placeholder="annual" value="" id="fee_type_50" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_50','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month11" id="disc_type_50" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_50','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_50" class="clk_btn_fee1" value="no" onclick="for_total('no','50');month_total('11');">
					<input type="text" name="student_fee1_discount_amount_month11" id="discount_amount_50" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_50','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month11" id="discount_method_50" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_50','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_50" class="form-control fee fee_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month11" placeholder="0"  value="" id="balance_per_year_50" class="form-control balance_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month11" value="0" placeholder="0" id="fee_paid11_50" class="form-control fee_paid_50" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month11" placeholder="singing" value="" id="fee_type_51" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_51','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month11" id="disc_type_51" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_51','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_51" class="clk_btn_fee2" value="no" onclick="for_total('no','51');month_total('11');">
					<input type="text" name="student_fee2_discount_amount_month11" id="discount_amount_51" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_51','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month11" id="discount_method_51" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_51','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_51" class="form-control fee fee_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month11" placeholder="0"  value="" id="balance_per_year_51" class="form-control balance_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month11" value="0" placeholder="0" id="fee_paid11_51" class="form-control fee_paid_51" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month11" placeholder="Transport fees" value="" id="fee_type_52" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_52','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month11" id="disc_type_52" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_52','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_52" class="clk_btn_fee3" value="no" onclick="for_total('no','52');month_total('11');">
					<input type="text" name="student_fee3_discount_amount_month11" id="discount_amount_52" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_52','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month11" id="discount_method_52" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_52','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_52" class="form-control fee fee_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month11" placeholder="0"  value="" id="balance_per_year_52" class="form-control balance_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month11" value="0" placeholder="0" id="fee_paid11_52" class="form-control fee_paid_52" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month11" placeholder="sports fees" value="" id="fee_type_53" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_53','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month11" id="disc_type_53" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_53','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_53" class="clk_btn_fee4" value="no" onclick="for_total('no','53');month_total('11');">
					<input type="text" name="student_fee4_discount_amount_month11" id="discount_amount_53" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_53','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month11" id="discount_method_53" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_53','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_53" class="form-control fee fee_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month11" placeholder="0"  value="" id="balance_per_year_53" class="form-control balance_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month11" value="0" placeholder="0" id="fee_paid11_53" class="form-control fee_paid_53" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month11" placeholder="exam fee" value="" id="fee_type_54" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_54','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month11" id="disc_type_54" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_54','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_54" class="clk_btn_fee5" value="no" onclick="for_total('no','54');month_total('11');">
					<input type="text" name="student_fee5_discount_amount_month11" id="discount_amount_54" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_54','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month11" id="discount_method_54" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_54','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_54" class="form-control fee fee_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month11" placeholder="0"  value="" id="balance_per_year_54" class="form-control balance_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month11" value="0" placeholder="0" id="fee_paid11_54" class="form-control fee_paid_54" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month11" placeholder="event fee" value="" id="fee_type_55" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_55','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month11" id="disc_type_55" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_55','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_55" class="clk_btn_fee8" value="no" onclick="for_total('no','55');month_total('11');">
					<input type="text" name="student_fee8_discount_amount_month11" id="discount_amount_55" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_55','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month11" id="discount_method_55" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_55','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_55" class="form-control fee fee_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month11" placeholder="0"  value="" id="balance_per_year_55" class="form-control balance_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month11" value="0" placeholder="0" id="fee_paid11_55" class="form-control fee_paid_55" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month11" placeholder="bus fee" value="" id="fee_type_56" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_56','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month11" id="disc_type_56" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_56','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_56" class="clk_btn_fee9" value="no" onclick="for_total('no','56');month_total('11');">
					<input type="text" name="student_fee9_discount_amount_month11" id="discount_amount_56" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_56','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month11" id="discount_method_56" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_56','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_56" class="form-control fee fee_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month11" placeholder="0"  value="" id="balance_per_year_56" class="form-control balance_amount_11" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month11" value="0" placeholder="0" id="fee_paid11_56" class="form-control fee_paid_56" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_11">Total Fee : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_11">Total Balance : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_11">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">December Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month12" placeholder="annual" value="" id="fee_type_57" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_57','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month12" id="disc_type_57" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_57','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_57" class="clk_btn_fee1" value="no" onclick="for_total('no','57');month_total('12');">
					<input type="text" name="student_fee1_discount_amount_month12" id="discount_amount_57" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_57','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month12" id="discount_method_57" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_57','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_57" class="form-control fee fee_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month12" placeholder="0"  value="" id="balance_per_year_57" class="form-control balance_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month12" value="0" placeholder="0" id="fee_paid11_57" class="form-control fee_paid_57" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month12" placeholder="singing" value="" id="fee_type_58" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_58','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month12" id="disc_type_58" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_58','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_58" class="clk_btn_fee2" value="no" onclick="for_total('no','58');month_total('12');">
					<input type="text" name="student_fee2_discount_amount_month12" id="discount_amount_58" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_58','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month12" id="discount_method_58" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_58','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_58" class="form-control fee fee_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month12" placeholder="0"  value="" id="balance_per_year_58" class="form-control balance_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month12" value="0" placeholder="0" id="fee_paid11_58" class="form-control fee_paid_58" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month12" placeholder="Transport fees" value="" id="fee_type_59" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_59','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month12" id="disc_type_59" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_59','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_59" class="clk_btn_fee3" value="no" onclick="for_total('no','59');month_total('12');">
					<input type="text" name="student_fee3_discount_amount_month12" id="discount_amount_59" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_59','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month12" id="discount_method_59" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_59','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_59" class="form-control fee fee_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month12" placeholder="0"  value="" id="balance_per_year_59" class="form-control balance_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month12" value="0" placeholder="0" id="fee_paid11_59" class="form-control fee_paid_59" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month12" placeholder="sports fees" value="" id="fee_type_60" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_60','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month12" id="disc_type_60" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_60','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_60" class="clk_btn_fee4" value="no" onclick="for_total('no','60');month_total('12');">
					<input type="text" name="student_fee4_discount_amount_month12" id="discount_amount_60" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_60','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month12" id="discount_method_60" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_60','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_60" class="form-control fee fee_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month12" placeholder="0"  value="" id="balance_per_year_60" class="form-control balance_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month12" value="0" placeholder="0" id="fee_paid11_60" class="form-control fee_paid_60" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month12" placeholder="exam fee" value="" id="fee_type_61" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_61','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month12" id="disc_type_61" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_61','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_61" class="clk_btn_fee5" value="no" onclick="for_total('no','61');month_total('12');">
					<input type="text" name="student_fee5_discount_amount_month12" id="discount_amount_61" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_61','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month12" id="discount_method_61" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_61','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_61" class="form-control fee fee_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month12" placeholder="0"  value="" id="balance_per_year_61" class="form-control balance_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month12" value="0" placeholder="0" id="fee_paid11_61" class="form-control fee_paid_61" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month12" placeholder="event fee" value="" id="fee_type_62" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_62','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month12" id="disc_type_62" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_62','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_62" class="clk_btn_fee8" value="no" onclick="for_total('no','62');month_total('12');">
					<input type="text" name="student_fee8_discount_amount_month12" id="discount_amount_62" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_62','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month12" id="discount_method_62" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_62','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_62" class="form-control fee fee_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month12" placeholder="0"  value="" id="balance_per_year_62" class="form-control balance_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month12" value="0" placeholder="0" id="fee_paid11_62" class="form-control fee_paid_62" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month12" placeholder="bus fee" value="" id="fee_type_63" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_63','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month12" id="disc_type_63" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_63','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_63" class="clk_btn_fee9" value="no" onclick="for_total('no','63');month_total('12');">
					<input type="text" name="student_fee9_discount_amount_month12" id="discount_amount_63" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_63','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month12" id="discount_method_63" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_63','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_63" class="form-control fee fee_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month12" placeholder="0"  value="" id="balance_per_year_63" class="form-control balance_amount_12" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month12" value="0" placeholder="0" id="fee_paid11_63" class="form-control fee_paid_63" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_12">Total Fee : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_12">Total Balance : 0</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_12">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">January Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month01" placeholder="annual" value="1000" id="fee_type_64" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_64','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month01" id="disc_type_64" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_64','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_64" class="clk_btn_fee1" value="no" onclick="for_total('no','64');month_total('01');">
					<input type="text" name="student_fee1_discount_amount_month01" id="discount_amount_64" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_64','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month01" id="discount_method_64" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_64','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month01" placeholder="0"  value="1000" id="after_discount_amount_64" class="form-control fee fee_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month01" placeholder="0"  value="1000" id="balance_per_year_64" class="form-control balance_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month01" value="0" placeholder="0" id="fee_paid11_64" class="form-control fee_paid_64" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month01" placeholder="singing" value="" id="fee_type_65" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_65','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month01" id="disc_type_65" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_65','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_65" class="clk_btn_fee2" value="no" onclick="for_total('no','65');month_total('01');">
					<input type="text" name="student_fee2_discount_amount_month01" id="discount_amount_65" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_65','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month01" id="discount_method_65" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_65','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month01" placeholder="0"  value="" id="after_discount_amount_65" class="form-control fee fee_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month01" placeholder="0"  value="" id="balance_per_year_65" class="form-control balance_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month01" value="0" placeholder="0" id="fee_paid11_65" class="form-control fee_paid_65" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month01" placeholder="Transport fees" value="450" id="fee_type_66" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_66','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month01" id="disc_type_66" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_66','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_66" class="clk_btn_fee3" value="no" onclick="for_total('no','66');month_total('01');">
					<input type="text" name="student_fee3_discount_amount_month01" id="discount_amount_66" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_66','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month01" id="discount_method_66" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_66','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month01" placeholder="0"  value="450" id="after_discount_amount_66" class="form-control fee fee_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month01" placeholder="0"  value="450" id="balance_per_year_66" class="form-control balance_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month01" value="0" placeholder="0" id="fee_paid11_66" class="form-control fee_paid_66" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month01" placeholder="sports fees" value="2000" id="fee_type_67" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_67','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month01" id="disc_type_67" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_67','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_67" class="clk_btn_fee4" value="no" onclick="for_total('no','67');month_total('01');">
					<input type="text" name="student_fee4_discount_amount_month01" id="discount_amount_67" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_67','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month01" id="discount_method_67" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_67','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month01" placeholder="0"  value="2000" id="after_discount_amount_67" class="form-control fee fee_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month01" placeholder="0"  value="2000" id="balance_per_year_67" class="form-control balance_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month01" value="0" placeholder="0" id="fee_paid11_67" class="form-control fee_paid_67" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month01" placeholder="exam fee" value="500" id="fee_type_68" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_68','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month01" id="disc_type_68" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_68','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_68" class="clk_btn_fee5" value="no" onclick="for_total('no','68');month_total('01');">
					<input type="text" name="student_fee5_discount_amount_month01" id="discount_amount_68" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_68','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month01" id="discount_method_68" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_68','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month01" placeholder="0"  value="500" id="after_discount_amount_68" class="form-control fee fee_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month01" placeholder="0"  value="500" id="balance_per_year_68" class="form-control balance_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month01" value="0" placeholder="0" id="fee_paid11_68" class="form-control fee_paid_68" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month01" placeholder="event fee" value="" id="fee_type_69" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_69','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month01" id="disc_type_69" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_69','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_69" class="clk_btn_fee8" value="no" onclick="for_total('no','69');month_total('01');">
					<input type="text" name="student_fee8_discount_amount_month01" id="discount_amount_69" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_69','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month01" id="discount_method_69" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_69','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month01" placeholder="0"  value="" id="after_discount_amount_69" class="form-control fee fee_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month01" placeholder="0"  value="" id="balance_per_year_69" class="form-control balance_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month01" value="0" placeholder="0" id="fee_paid11_69" class="form-control fee_paid_69" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month01" placeholder="bus fee" value="" id="fee_type_70" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_70','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month01" id="disc_type_70" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_70','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_70" class="clk_btn_fee9" value="no" onclick="for_total('no','70');month_total('01');">
					<input type="text" name="student_fee9_discount_amount_month01" id="discount_amount_70" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_70','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month01" id="discount_method_70" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_70','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month01" placeholder="0"  value="" id="after_discount_amount_70" class="form-control fee fee_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month01" placeholder="0"  value="" id="balance_per_year_70" class="form-control balance_amount_01" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month01" value="0" placeholder="0" id="fee_paid11_70" class="form-control fee_paid_70" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_01">Total Fee : 3950</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_01">Total Balance : 3950</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_01">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">February Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month02" placeholder="annual" value="" id="fee_type_71" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_71','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month02" id="disc_type_71" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_71','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_71" class="clk_btn_fee1" value="no" onclick="for_total('no','71');month_total('02');">
					<input type="text" name="student_fee1_discount_amount_month02" id="discount_amount_71" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_71','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month02" id="discount_method_71" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_71','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_71" class="form-control fee fee_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month02" placeholder="0"  value="" id="balance_per_year_71" class="form-control balance_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month02" value="0" placeholder="0" id="fee_paid11_71" class="form-control fee_paid_71" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month02" placeholder="singing" value="" id="fee_type_72" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_72','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month02" id="disc_type_72" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_72','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_72" class="clk_btn_fee2" value="no" onclick="for_total('no','72');month_total('02');">
					<input type="text" name="student_fee2_discount_amount_month02" id="discount_amount_72" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_72','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month02" id="discount_method_72" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_72','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_72" class="form-control fee fee_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month02" placeholder="0"  value="" id="balance_per_year_72" class="form-control balance_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month02" value="0" placeholder="0" id="fee_paid11_72" class="form-control fee_paid_72" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month02" placeholder="Transport fees" value="450" id="fee_type_73" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_73','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month02" id="disc_type_73" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_73','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_73" class="clk_btn_fee3" value="no" onclick="for_total('no','73');month_total('02');">
					<input type="text" name="student_fee3_discount_amount_month02" id="discount_amount_73" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_73','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month02" id="discount_method_73" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_73','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month02" placeholder="0"  value="450" id="after_discount_amount_73" class="form-control fee fee_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month02" placeholder="0"  value="450" id="balance_per_year_73" class="form-control balance_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month02" value="0" placeholder="0" id="fee_paid11_73" class="form-control fee_paid_73" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month02" placeholder="sports fees" value="2500" id="fee_type_74" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_74','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month02" id="disc_type_74" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_74','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_74" class="clk_btn_fee4" value="no" onclick="for_total('no','74');month_total('02');">
					<input type="text" name="student_fee4_discount_amount_month02" id="discount_amount_74" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_74','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month02" id="discount_method_74" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_74','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month02" placeholder="0"  value="2500" id="after_discount_amount_74" class="form-control fee fee_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month02" placeholder="0"  value="2500" id="balance_per_year_74" class="form-control balance_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month02" value="0" placeholder="0" id="fee_paid11_74" class="form-control fee_paid_74" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month02" placeholder="exam fee" value="" id="fee_type_75" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_75','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month02" id="disc_type_75" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_75','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_75" class="clk_btn_fee5" value="no" onclick="for_total('no','75');month_total('02');">
					<input type="text" name="student_fee5_discount_amount_month02" id="discount_amount_75" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_75','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month02" id="discount_method_75" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_75','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_75" class="form-control fee fee_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month02" placeholder="0"  value="" id="balance_per_year_75" class="form-control balance_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month02" value="0" placeholder="0" id="fee_paid11_75" class="form-control fee_paid_75" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month02" placeholder="event fee" value="" id="fee_type_76" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_76','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month02" id="disc_type_76" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_76','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_76" class="clk_btn_fee8" value="no" onclick="for_total('no','76');month_total('02');">
					<input type="text" name="student_fee8_discount_amount_month02" id="discount_amount_76" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_76','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month02" id="discount_method_76" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_76','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_76" class="form-control fee fee_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month02" placeholder="0"  value="" id="balance_per_year_76" class="form-control balance_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month02" value="0" placeholder="0" id="fee_paid11_76" class="form-control fee_paid_76" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month02" placeholder="bus fee" value="" id="fee_type_77" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_77','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month02" id="disc_type_77" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_77','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_77" class="clk_btn_fee9" value="no" onclick="for_total('no','77');month_total('02');">
					<input type="text" name="student_fee9_discount_amount_month02" id="discount_amount_77" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_77','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month02" id="discount_method_77" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_77','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_77" class="form-control fee fee_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month02" placeholder="0"  value="" id="balance_per_year_77" class="form-control balance_amount_02" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month02" value="0" placeholder="0" id="fee_paid11_77" class="form-control fee_paid_77" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_02">Total Fee : 2950</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_02">Total Balance : 2950</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_02">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								 <div class="col-md-12">
				 <div class="col-md-12">
				 <h4 style="color:green;">March Month Fee Set</h4>
				 </div>
				 				<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>annual</label>
                  <input type="text"  name="student_fee1_month03" placeholder="annual" value="" id="fee_type_78" class="form-control third_0" oninput="for_same(this.id,'third_0','clk_btn_fee1','click_78','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee1_discount_month03" id="disc_type_78" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_78','check_for_same');" class="form-control disc_type_fee1" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_78" class="clk_btn_fee1" value="no" onclick="for_total('no','78');month_total('03');">
					<input type="text" name="student_fee1_discount_amount_month03" id="discount_amount_78" value="0" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_78','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee1_discount_method_month03" id="discount_method_78" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_78','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee1_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_78" class="form-control fee fee_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Balance</small></label>
                  <input type="text" name="student_fee1_balance_month03" placeholder="0"  value="" id="balance_per_year_78" class="form-control balance_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>annual Paid Amount</small></label>
                  <input type="text" name="student_fee1_paid_total_month03" value="0" placeholder="0" id="fee_paid11_78" class="form-control fee_paid_78" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>singing</label>
                  <input type="text"  name="student_fee2_month03" placeholder="singing" value="" id="fee_type_79" class="form-control third_1" oninput="for_same(this.id,'third_1','clk_btn_fee2','click_79','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee2_discount_month03" id="disc_type_79" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_79','check_for_same');" class="form-control disc_type_fee2" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_79" class="clk_btn_fee2" value="no" onclick="for_total('no','79');month_total('03');">
					<input type="text" name="student_fee2_discount_amount_month03" id="discount_amount_79" value="0" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_79','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee2_discount_method_month03" id="discount_method_79" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_79','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee2_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_79" class="form-control fee fee_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Balance</small></label>
                  <input type="text" name="student_fee2_balance_month03" placeholder="0"  value="" id="balance_per_year_79" class="form-control balance_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>singing Paid Amount</small></label>
                  <input type="text" name="student_fee2_paid_total_month03" value="0" placeholder="0" id="fee_paid11_79" class="form-control fee_paid_79" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>Transport fees</label>
                  <input type="text"  name="student_fee3_month03" placeholder="Transport fees" value="450" id="fee_type_80" class="form-control third_2" oninput="for_same(this.id,'third_2','clk_btn_fee3','click_80','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee3_discount_month03" id="disc_type_80" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_80','check_for_same');" class="form-control disc_type_fee3" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_80" class="clk_btn_fee3" value="no" onclick="for_total('no','80');month_total('03');">
					<input type="text" name="student_fee3_discount_amount_month03" id="discount_amount_80" value="0" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_80','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee3_discount_method_month03" id="discount_method_80" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_80','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee3_total_amount_after_discount_month03" placeholder="0"  value="450" id="after_discount_amount_80" class="form-control fee fee_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Balance</small></label>
                  <input type="text" name="student_fee3_balance_month03" placeholder="0"  value="450" id="balance_per_year_80" class="form-control balance_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Transport fees Paid Amount</small></label>
                  <input type="text" name="student_fee3_paid_total_month03" value="0" placeholder="0" id="fee_paid11_80" class="form-control fee_paid_80" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>sports fees</label>
                  <input type="text"  name="student_fee4_month03" placeholder="sports fees" value="2000" id="fee_type_81" class="form-control third_3" oninput="for_same(this.id,'third_3','clk_btn_fee4','click_81','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee4_discount_month03" id="disc_type_81" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_81','check_for_same');" class="form-control disc_type_fee4" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_81" class="clk_btn_fee4" value="no" onclick="for_total('no','81');month_total('03');">
					<input type="text" name="student_fee4_discount_amount_month03" id="discount_amount_81" value="0" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_81','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee4_discount_method_month03" id="discount_method_81" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_81','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee4_total_amount_after_discount_month03" placeholder="0"  value="2000" id="after_discount_amount_81" class="form-control fee fee_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Balance</small></label>
                  <input type="text" name="student_fee4_balance_month03" placeholder="0"  value="2000" id="balance_per_year_81" class="form-control balance_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>sports fees Paid Amount</small></label>
                  <input type="text" name="student_fee4_paid_total_month03" value="0" placeholder="0" id="fee_paid11_81" class="form-control fee_paid_81" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>exam fee</label>
                  <input type="text"  name="student_fee5_month03" placeholder="exam fee" value="" id="fee_type_82" class="form-control third_4" oninput="for_same(this.id,'third_4','clk_btn_fee5','click_82','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee5_discount_month03" id="disc_type_82" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_82','check_for_same');" class="form-control disc_type_fee5" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_82" class="clk_btn_fee5" value="no" onclick="for_total('no','82');month_total('03');">
					<input type="text" name="student_fee5_discount_amount_month03" id="discount_amount_82" value="0" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_82','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee5_discount_method_month03" id="discount_method_82" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_82','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee5_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_82" class="form-control fee fee_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Balance</small></label>
                  <input type="text" name="student_fee5_balance_month03" placeholder="0"  value="" id="balance_per_year_82" class="form-control balance_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>exam fee Paid Amount</small></label>
                  <input type="text" name="student_fee5_paid_total_month03" value="0" placeholder="0" id="fee_paid11_82" class="form-control fee_paid_82" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>event fee</label>
                  <input type="text"  name="student_fee8_month03" placeholder="event fee" value="" id="fee_type_83" class="form-control third_5" oninput="for_same(this.id,'third_5','clk_btn_fee8','click_83','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee8_discount_month03" id="disc_type_83" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_83','check_for_same');" class="form-control disc_type_fee8" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_83" class="clk_btn_fee8" value="no" onclick="for_total('no','83');month_total('03');">
					<input type="text" name="student_fee8_discount_amount_month03" id="discount_amount_83" value="0" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_83','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee8_discount_method_month03" id="discount_method_83" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_83','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee8_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_83" class="form-control fee fee_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Balance</small></label>
                  <input type="text" name="student_fee8_balance_month03" placeholder="0"  value="" id="balance_per_year_83" class="form-control balance_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>event fee Paid Amount</small></label>
                  <input type="text" name="student_fee8_paid_total_month03" value="0" placeholder="0" id="fee_paid11_83" class="form-control fee_paid_83" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12">
				<div class="col-md-2">				
				<div class="form-group">
                  <label>bus fee</label>
                  <input type="text"  name="student_fee9_month03" placeholder="bus fee" value="" id="fee_type_84" class="form-control third_6" oninput="for_same(this.id,'third_6','clk_btn_fee9','click_84','head_same');" />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
				<input type="hidden" value="2ND" id="student_class" />
                  <label>Discount Type</label>
				   <select name="student_fee9_discount_month03" id="disc_type_84" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_84','check_for_same');" class="form-control disc_type_fee9" required>
				    <option value="None">None</option>
								<option value="Principal">Principal</option>
			    				<option value="yearly">yearly</option>
			    				<option value="Staff Discount">Staff Discount</option>
			    				<option value="Sibling Discount">Sibling Discount</option>
			    				</select>			 
                </div>
				</div>
				
				<div class="col-md-2">				
                <label>Discount Amount</label>
				<div class="input-group">
					<input type="hidden" id="click_84" class="clk_btn_fee9" value="no" onclick="for_total('no','84');month_total('03');">
					<input type="text" name="student_fee9_discount_amount_month03" id="discount_amount_84" value="0" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_84','check_for_same');" />
					<span class="input-group-addon" style="padding:0px;">
					<select name="student_fee9_discount_method_month03" id="discount_method_84" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_84','check_for_same');">
					<option value="%">%</option>
					<option value="Rs">Rs</option>
					</select>
					</span>
				</div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>Total Amount After Discount</small></label>
                  <input type="text"  name="student_fee9_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_84" class="form-control fee fee_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Balance</small></label>
                  <input type="text" name="student_fee9_balance_month03" placeholder="0"  value="" id="balance_per_year_84" class="form-control balance_amount_03" readonly />
                </div>
				</div>
				
				<div class="col-md-2">				
				<div class="form-group">
                  <label><small>bus fee Paid Amount</small></label>
                  <input type="text" name="student_fee9_paid_total_month03" value="0" placeholder="0" id="fee_paid11_84" class="form-control fee_paid_84" readonly />
                </div>
				</div>
				</div>
		
								<div class="col-md-12" style="border:1px solid;border-radius:20px;">
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="total_month_03">Total Fee : 2450</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="balance_month_03">Total Balance : 2450</h4></center>
				</div>
				<div class="col-md-4">
				<center><h4 style="color:blue;" id="paid_month_03">Total Paid : 0</h4></center>
				</div>
				</div>
                </div>
								<div class="col-md-12">
				<div class="col-md-3">
				<div class="form-group">
                  &nbsp;
                </div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
                  <label>Previous Dues Fee</label>
                  <input type="text" name="student_previous_year_fee" placeholder="0" oninput="transport_total('no');" value="29600" id="student_previous_year_fee" class="form-control fee" />
				  <input type="hidden" name="student_previous_year_fee_paid" placeholder="0" value="0" id="student_previous_year_fee_paid" class="form-control" readonly />
                </div>
				</div>
				
								<div class="col-md-3">				
				<div class="form-group">
                  <label>Transport Fee</label>
				                    <input type="text" name="student_transport_fee" placeholder="0" oninput="transport_total('no');" value="1800" id="student_transport_fee" class="form-control fee" />
				  <input type="hidden" name="student_transport_fee_paid" placeholder="0" value="0" id="student_transport_fee_paid" class="form-control" readonly />
                </div>
				</div>
								
			    <div class="col-md-3">				
				<div class="form-group">
                  <label>Grand Total</label>
                  <input type="text" name="grand_total" placeholder="0"  value="41200" id="grand_total" class="form-control" readonly />
				  <input type="hidden" name="paid_total" value="0" readonly />
                </div>
				</div>
				
				</div>
				
				<div class="box-body ">
			       <div class="col-md-12">
				   <input type="hidden" name="student_roll_no" value="2000296" readonly />
		            <center><input type="submit" name="finish" value="Save" class="btn  my_background_color" /></center>
		          </div>
			    </div>
				
			</div>
		<!---------------------------End Fees Details ----------------------------------------->		   
			</div>
			</br></br>
              <!---------------------------End Document Upload ----------------------------------------->

    <!---------------------------------------------End Admission form------------------------->
		  <!-- /.box-body -->
         
		</form>	
<div id="mypdf_view">
			<div>
	</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>