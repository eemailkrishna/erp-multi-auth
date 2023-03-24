<script>
function for_pay(bal_tot){

var total_pay=0;
$("."+bal_tot).each(function() {
total_pay+=Number($(this).val());
});
$("#"+bal_tot).val(total_pay);

}

$("#my_form").submit(function(e){
        e.preventDefault();
 
    var formdata = new FormData(this);

        $.ajax({
            url: access_link+"hostel/hostel_pay_fee_api.php",
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
				   get_content('hostel/hostel_student_list');
            }
			}
         });
      });
</script>

    <section class="content-header">
      <h1>
                Hostel Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	    <li><a href="javascript:get_content('hostel/hostel_list')"><i class="fa fa-bed"></i>Hostel List</a></li>
	   <li class="Active">Hostel Pay Fee </li>
      </ol>
    </section>



	<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Hostel Fee Pay</h3>
			  
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
				<form method="post" enctype="multipart/form-data" id="my_form">
			   <div class="col-md-6 ">
					<div class="form-group">
						<label>Roll.No.<font style="color:red"><b>*</b></font></label>
						<input type="text"  name="roll_number" placeholder="Student Name"  value="2000183" class="form-control" readonly>
						<input type="hidden"  name="hostel_student_id" placeholder="Student Name"  value="0_7" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group">
						<label>student Name<font style="color:red"><b>*</b></font></label>
						<input type="text"  name="hostel_student_name" placeholder="Student Name"  value="konkon" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group">
						<label>Date</label>
						<input type="date"  name="pay_date" value="2022-12-05" class="form-control">
					</div>
				</div>
				
								
				
				
				
				
				<div class="col-md-6 ">
					<div class="form-group">
					   <label>Month</label>
					    <select name="month_pay" class="form-control">
						   <option value="December">December</option>
						   <option value="January">Jaunary</option>
						   <option value="February">February</option>
						   <option value="March">March</option>
						   <option value="April">April</option>
						   <option value="May">May</option>
						   <option value="June">June</option>
						   <option value="July">July</option>
						   <option value="August">August</option>
						   <option value="September">September</option>
						   <option value="October">October</option>
						   <option value="November">November</option>
						   <option value="December">December</option>
						</select>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label>Fees Type</label>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Total Fee</label>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Balance Fee</label>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label>Pay Fee</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Remark</label>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label>Room Charge Per Bed</label>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="text"  name="hostel_room_charge_balance"   placeholder="Amount"  value="0" class="form-control" readonly>
				    </div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<input type="text" name="" placeholder="Amount" value="0" class="form-control" readonly>
				    </div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<input type="text"  name="pay_hostel_room_charge" id="room_charge" oninput="for_pay('bal_tot');" placeholder="0"  value="" class="form-control bal_tot">
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
					   <input type="text"  name="hostel_room_charge_remarks"  placeholder="Remark"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group" >
					  <label>Mess Fee </label>
					</div>
				  </div>
				  <div class="col-md-2">	
					<div class="form-group" >
					  <input type="text"  name="mess_fee_balance" placeholder="Amount"  value="2500" class="form-control" readonly>
					</div>
				  </div>
				  
				  <div class="col-md-2">
					<div class="form-group">
						<input type="text" name="" placeholder="Amount" value="2500" class="form-control" readonly>
				    </div>
				</div>
				  
				  <div class="col-md-2">	
					<div class="form-group" >
					  <input type="text"  name="pay_mess_fee" placeholder="0" oninput="for_pay('bal_tot');" id="mess_fee" value="" class="form-control bal_tot" >
					</div>
				  </div>
				  <div class="col-md-3">	
					<div class="form-group">
					  <input type="text"  name="mess_fee_remarks" placeholder="Remark"  value="" class="form-control" >
					</div>
				  </div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <label>Laundry Charge </label>
					</div>
				</div>
				<div class="col-md-2">				
					<div class="form-group" >
					  <input type="text"  name="laundry_charge_balance" placeholder="Amount"  value="" class="form-control" readonly>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<input type="text" name="" placeholder="Amount" value="0" class="form-control" readonly>
				    </div>
				</div>
				
				<div class="col-md-2">				
					<div class="form-group" >
					  <input type="text"  name="pay_laundry_charge" oninput="for_pay('bal_tot');" id="laundry_charge" placeholder="0"  value="" class="form-control bal_tot">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <input type="text"  name="laundry_charge_remarks" placeholder="Remark"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					  <label >Caution Money </label>
					</div>
				</div>
				<div class="col-md-2">				
					<div class="form-group" >
					  <input type="text"  name="caution_money_balance" placeholder="Amount"  value="" class="form-control" readonly>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<input type="text" name="" placeholder="Amount" value="0" class="form-control" readonly>
				    </div>
				</div>
				
				<div class="col-md-2">				
					<div class="form-group" >
					  <input type="text"  name="pay_caution_money" oninput="for_pay('bal_tot');" id="caution_money" placeholder="0"  value="" class="form-control bal_tot">
					</div>
				</div>
				<div class="col-md-3">				
					<div class="form-group" >
					   <input type="text"  name="caution_money_remarks" placeholder="Remark"  value="" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Total Charge </label>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="text"  name="hostel_charge_balance"  placeholder="Amount"  value="2500" class="form-control" readonly>
				    </div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<input type="text" name="" placeholder="Amount" value="2500" class="form-control" readonly>
				    </div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<input type="text"  name="pay_hostel_charge" id="bal_tot" placeholder="0"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
					   <input type="text"  name="hostel_charge_remarks" placeholder="Remark"  value="" class="form-control">
					</div>
				</div>
				
				
			<div class="col-md-12">
		        <center><input type="submit" name="submit" value="Submit Details" class="btn btn-success" /></center>
		    </div>
		</form>	
      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

  
