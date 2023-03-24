<style>
.vl {
    border-left: 6px solid green;
    height: 500px;
}
</style>
<script>
$("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
    var category_code = document.getElementById('category_code').value;
window.scrollTo(0, 0);
    get_content(loader_div);
        $.ajax({
            url: access_link+"fees_monthly/fee_structure_edit_api.php",
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
				   post_content('fees_monthly/fee_structure_list', 'category_code='+category_code);
            }
			}
         });
      });
	  
</script>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Fees Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	   <li><a href="javascript:get_content('fees_monthly/fee_structure_list')"><i class="fa fa-money"></i> Fees Structure List</a></li>
	 <li class="active">Fees Structure Edit</li>
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
			
            <div class="box-body my_border_color"  >
			  <!---------------------------Start Admission form--------------------------------------->
        <!---------------------------Start Personal Details ------------------------------------->
			
		<form method="post" enctype="multipart/form-data"  id="my_form">
						<div class="box-body col-lg-12" style="border:1px solid #ecedef;">

			    <div class="col-md-3 ">
						<div class="form-group">
						  <label>Class</label>
						   <input type="text"  name="student_class"  placeholder="class"  value="NURSERY" class="form-control" readonly>
						   <input type="hidden" name="s_no" value="601" readonly>
				        </div>
				</div>	
			    <div class="col-md-3">
						<div class="form-group">
						  <label>Total Fees/Year</label>
						   <input type="text"  name="student_total_fee_per_year" id="student_total_fee_per_year"  placeholder="Total Fee"  value="" class="form-control" readonly />
						</div>
				</div>
				<div class="col-md-3">
						&nbsp;
				</div>	
			    <div class="col-md-3">
					<span style="float:right;font-weight:bold;margin-top:30px;color:red;"><input type="checkbox" id="for_same1">Check For Same</span>
				</div>
         	
			</div>
  
		        				<div class="col-md-12">
				<h4 style="color:green;">April Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>April Month annual</label>
							<input type="text" name="student_fee1_month04" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>April Month singing</label>
							<input type="text" name="student_fee2_month04" placeholder="singing" value="500" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>April Month Transport fees</label>
							<input type="text" name="student_fee3_month04" placeholder="Transport fees" value="1000" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>April Month sports fees</label>
							<input type="text" name="student_fee4_month04" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>April Month exam fee</label>
							<input type="text" name="student_fee5_month04" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>April Month event fee</label>
							<input type="text" name="student_fee8_month04" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>April Month bus fee</label>
							<input type="text" name="student_fee9_month04" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">May Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>May Month annual</label>
							<input type="text" name="student_fee1_month05" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>May Month singing</label>
							<input type="text" name="student_fee2_month05" placeholder="singing" value="" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>May Month Transport fees</label>
							<input type="text" name="student_fee3_month05" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>May Month sports fees</label>
							<input type="text" name="student_fee4_month05" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>May Month exam fee</label>
							<input type="text" name="student_fee5_month05" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>May Month event fee</label>
							<input type="text" name="student_fee8_month05" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>May Month bus fee</label>
							<input type="text" name="student_fee9_month05" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">June Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>June Month annual</label>
							<input type="text" name="student_fee1_month06" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>June Month singing</label>
							<input type="text" name="student_fee2_month06" placeholder="singing" value="500" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>June Month Transport fees</label>
							<input type="text" name="student_fee3_month06" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>June Month sports fees</label>
							<input type="text" name="student_fee4_month06" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>June Month exam fee</label>
							<input type="text" name="student_fee5_month06" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>June Month event fee</label>
							<input type="text" name="student_fee8_month06" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>June Month bus fee</label>
							<input type="text" name="student_fee9_month06" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">July Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>July Month annual</label>
							<input type="text" name="student_fee1_month07" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>July Month singing</label>
							<input type="text" name="student_fee2_month07" placeholder="singing" value="" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>July Month Transport fees</label>
							<input type="text" name="student_fee3_month07" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>July Month sports fees</label>
							<input type="text" name="student_fee4_month07" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>July Month exam fee</label>
							<input type="text" name="student_fee5_month07" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>July Month event fee</label>
							<input type="text" name="student_fee8_month07" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>July Month bus fee</label>
							<input type="text" name="student_fee9_month07" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">August Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>August Month annual</label>
							<input type="text" name="student_fee1_month08" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>August Month singing</label>
							<input type="text" name="student_fee2_month08" placeholder="singing" value="" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>August Month Transport fees</label>
							<input type="text" name="student_fee3_month08" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>August Month sports fees</label>
							<input type="text" name="student_fee4_month08" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>August Month exam fee</label>
							<input type="text" name="student_fee5_month08" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>August Month event fee</label>
							<input type="text" name="student_fee8_month08" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>August Month bus fee</label>
							<input type="text" name="student_fee9_month08" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">September Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>September Month annual</label>
							<input type="text" name="student_fee1_month09" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>September Month singing</label>
							<input type="text" name="student_fee2_month09" placeholder="singing" value="" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>September Month Transport fees</label>
							<input type="text" name="student_fee3_month09" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>September Month sports fees</label>
							<input type="text" name="student_fee4_month09" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>September Month exam fee</label>
							<input type="text" name="student_fee5_month09" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>September Month event fee</label>
							<input type="text" name="student_fee8_month09" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>September Month bus fee</label>
							<input type="text" name="student_fee9_month09" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">October Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>October Month annual</label>
							<input type="text" name="student_fee1_month10" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>October Month singing</label>
							<input type="text" name="student_fee2_month10" placeholder="singing" value="" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>October Month Transport fees</label>
							<input type="text" name="student_fee3_month10" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>October Month sports fees</label>
							<input type="text" name="student_fee4_month10" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>October Month exam fee</label>
							<input type="text" name="student_fee5_month10" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>October Month event fee</label>
							<input type="text" name="student_fee8_month10" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>October Month bus fee</label>
							<input type="text" name="student_fee9_month10" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">November Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>November Month annual</label>
							<input type="text" name="student_fee1_month11" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>November Month singing</label>
							<input type="text" name="student_fee2_month11" placeholder="singing" value="" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>November Month Transport fees</label>
							<input type="text" name="student_fee3_month11" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>November Month sports fees</label>
							<input type="text" name="student_fee4_month11" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>November Month exam fee</label>
							<input type="text" name="student_fee5_month11" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>November Month event fee</label>
							<input type="text" name="student_fee8_month11" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>November Month bus fee</label>
							<input type="text" name="student_fee9_month11" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">December Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>December Month annual</label>
							<input type="text" name="student_fee1_month12" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>December Month singing</label>
							<input type="text" name="student_fee2_month12" placeholder="singing" value="" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>December Month Transport fees</label>
							<input type="text" name="student_fee3_month12" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>December Month sports fees</label>
							<input type="text" name="student_fee4_month12" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>December Month exam fee</label>
							<input type="text" name="student_fee5_month12" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>December Month event fee</label>
							<input type="text" name="student_fee8_month12" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>December Month bus fee</label>
							<input type="text" name="student_fee9_month12" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">January Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>January Month annual</label>
							<input type="text" name="student_fee1_month01" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>January Month singing</label>
							<input type="text" name="student_fee2_month01" placeholder="singing" value="500" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>January Month Transport fees</label>
							<input type="text" name="student_fee3_month01" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>January Month sports fees</label>
							<input type="text" name="student_fee4_month01" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>January Month exam fee</label>
							<input type="text" name="student_fee5_month01" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>January Month event fee</label>
							<input type="text" name="student_fee8_month01" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>January Month bus fee</label>
							<input type="text" name="student_fee9_month01" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">February Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>February Month annual</label>
							<input type="text" name="student_fee1_month02" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>February Month singing</label>
							<input type="text" name="student_fee2_month02" placeholder="singing" value="500" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>February Month Transport fees</label>
							<input type="text" name="student_fee3_month02" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>February Month sports fees</label>
							<input type="text" name="student_fee4_month02" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>February Month exam fee</label>
							<input type="text" name="student_fee5_month02" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>February Month event fee</label>
							<input type="text" name="student_fee8_month02" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>February Month bus fee</label>
							<input type="text" name="student_fee9_month02" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<h4 style="color:green;">March Month Fee</h4>
				</div>
								<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>March Month annual</label>
							<input type="text" name="student_fee1_month03" placeholder="annual" value="1000" oninput="same_value(this.value,'0');" class="form-control amt_0" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>March Month singing</label>
							<input type="text" name="student_fee2_month03" placeholder="singing" value="" oninput="same_value(this.value,'1');" class="form-control amt_1" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>March Month Transport fees</label>
							<input type="text" name="student_fee3_month03" placeholder="Transport fees" value="" oninput="same_value(this.value,'2');" class="form-control amt_2" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>March Month sports fees</label>
							<input type="text" name="student_fee4_month03" placeholder="sports fees" value="500" oninput="same_value(this.value,'3');" class="form-control amt_3" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>March Month exam fee</label>
							<input type="text" name="student_fee5_month03" placeholder="exam fee" value="700" oninput="same_value(this.value,'4');" class="form-control amt_4" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>March Month event fee</label>
							<input type="text" name="student_fee8_month03" placeholder="event fee" value="700" oninput="same_value(this.value,'5');" class="form-control amt_5" />
						</div>
					</div>
				</div>
		        				<div class="box-body col-lg-3" style="border:1px solid #ecedef;">
					<div class="col-md-12">
						<div class="form-group">
							<label>March Month bus fee</label>
							<input type="text" name="student_fee9_month03" placeholder="bus fee" value="400" oninput="same_value(this.value,'6');" class="form-control amt_6" />
						</div>
					</div>
				</div>
		        				<div class="col-md-12">
				<hr/><input type="hidden" id="total_fee_head" value="7" />
				<input type="hidden" id="category_code" value="category1" />
				</div>
				<div class="box-body ">
			       <div class="col-md-12">
		            <center><input type="submit" name="finish" value="Submit" class="btn  my_background_color" /></center>
		          </div>
			    </div>
		
				<!---------------------------End Personal Details -------------------------------------->
<script>
function same_value(value,id){
if($('#for_same1').prop("checked") == true){
	$(".amt_"+id).each(function() {
	$(this).val(value);
	});
	total_fee();
}else{
	total_fee();
}
}

function total_fee(){
var head_count=document.getElementById('total_fee_head').value;
var add = 0;
for(var j=0;j<head_count;j++){
$('.amt_'+j).each(function() {
add += Number($(this).val());
});
}
document.getElementById('student_total_fee_per_year').value = add;
}
</script>
    <!---------------------------------------------End Admission form------------------------->
		  <!-- /.box-body -->
		</form>
	</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

<script>
total_fee();
</script>