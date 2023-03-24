@include('common.header')
@include('common.navbar')
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
<script>
    function rem_bal(value){
    var room_charge_total_fee=document.getElementById('room_charge_total').value;
    var room_charge_pay_fee=document.getElementById('room_charge_pay').value;

    var mess_total_fee=document.getElementById('mess_total_fee').value;
    var mess_pay_fee=document.getElementById('mess_pay_fee').value;

    var laundry_chrg_total_fee=document.getElementById('laundry_charge_total_fee').value;
    var laundry_chrg_pay_fee=document.getElementById('laundry_charge_pay_fee').value;

    var caution_money_total_fee=document.getElementById('caution_money_total_fee').value;
    var caution_money_pay_fee=document.getElementById('caution_money_pay_fee').value;

    var total_charges_total_fee=document.getElementById('total_charges_total_fee').value;
    var total_charges_pay_fee=document.getElementById('bal_tot').value;
// ==================================calculation part===============================
    var room_bal_fee=room_charge_total_fee - room_charge_pay_fee;
    var mess_bal_fee=mess_total_fee - mess_pay_fee;
    var laundry_chrg_bal_fee=laundry_chrg_total_fee - laundry_chrg_pay_fee;
    var c_money_bal_fee=caution_money_total_fee - caution_money_pay_fee;
    var total_charges_bal_fee=total_charges_total_fee - total_charges_pay_fee;
// =======================================inner html in var==========================
    var room_charged= document.getElementById("room_charge_bal").innerHTML=room_bal_fee;
    var mess_fee= document.getElementById("mess_bal_fee").innerHTML=mess_bal_fee;
    var laundry_charge= document.getElementById("laundry_charge_bal_fee").innerHTML=laundry_chrg_bal_fee;
    var caution_money= document.getElementById("caution_money_bal_fee").innerHTML=c_money_bal_fee;
    var total_charge= document.getElementById("total_charges_bal_fee").innerHTML=total_charges_bal_fee;
// ============================call by id function =====================================
    $('#room_charge_bal').val(room_charged);
    $('#mess_bal_fee').val(mess_fee);
    $('#laundry_charge_bal_fee').val(laundry_charge);
    $('#caution_money_bal_fee').val(caution_money);
    $('#total_charges_bal_fee').val(total_charge);
    }
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
				<form method="POST" enctype="multipart/form-data" id="my_form">
                    @csrf
			   <div class="col-md-6 ">
					<div class="form-group">
						<label>Roll.No.<font style="color:red"><b>*</b></font></label>
						<input type="text"  name="roll_number" placeholder="Roll No"  value="{{ $fee->student->roll_no}}" class="form-control" readonly>
						<input type="hidden"  name="hostel_student_id" placeholder="Student Name"  value="0_7" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="form-group">
						<label>student Name<font style="color:red"><b>*</b></font></label>
						<input type="text"  name="hostel_student_name" placeholder="Student Name"  value="{{ $fee->user->name }}" class="form-control" readonly>
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
						<input type="text"  name="hostel_room_charge_total"  id="room_charge_total" placeholder="Amount"  value="{{ $fee->hostal_room_details->hostal_charge_per_student }}" class="form-control" readonly>
				    </div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<input type="text" name="hostel_room_charge_bal" id="room_charge_bal" placeholder="Amount" value="{{ $fee->hostal_room_details->hostal_charge_per_student }}" class="form-control" readonly>
				    </div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<input type="text"  name="pay_hostel_room_charge" id="room_charge_pay"  oninput="for_pay('bal_tot');rem_bal(this.val)" placeholder="Pay"  value="" class="form-control bal_tot">
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
					  <input type="text"  name="mess_fee_balance" id="mess_total_fee" placeholder="Amount"  value="{{ $fee->mess_charge }}" class="form-control" readonly>
					</div>
				  </div>

				  <div class="col-md-2">
					<div class="form-group">
						<input type="text" name="mess_fee_bal" id="mess_bal_fee" placeholder="Amount" value="{{ $fee->mess_charge }}" class="form-control" readonly>
				    </div>
				</div>

				  <div class="col-md-2">
					<div class="form-group" >
					  <input type="text"  name="mess_fee_pay" id="mess_pay_fee" placeholder="Pay"  oninput="for_pay('bal_tot');rem_bal(this.val);" value="" class="form-control bal_tot" >
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
					  <input type="text"  name="laundry_charge_balance" placeholder="Amount"  id="laundry_charge_total_fee" value="{{ $fee->laundry_charge }}" class="form-control" readonly>
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<input type="text" name="" id="laundry_charge_bal_fee" placeholder="Amount" value="{{ $fee->laundry_charge }}" class="form-control" readonly>
				    </div>
				</div>

				<div class="col-md-2">
					<div class="form-group" >
					  <input type="text"  name="pay_laundry_charge" id="laundry_charge_pay_fee" oninput="for_pay('bal_tot');rem_bal(this.val)" id="laundry_charge" placeholder="Pay"  value="" class="form-control bal_tot">
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
					  <input type="text"  name="caution_money_balance" id="caution_money_total_fee" placeholder="Amount"  value="{{ $fee->caution_money }}" class="form-control" readonly>
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<input type="text" name="laundry_charge_bal_fee" id="caution_money_bal_fee" placeholder="Amount" value="{{ $fee->caution_money }}" class="form-control" readonly>
				    </div>
				</div>

				<div class="col-md-2">
					<div class="form-group" >
					  <input type="text"  name="pay_caution_money" id="caution_money_pay_fee" oninput="for_pay('bal_tot');rem_bal(this.val)" placeholder="Pay"  value="" class="form-control bal_tot">
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
						<input type="text"  name="hostel_charge_balance" id="total_charges_total_fee"  placeholder="Amount"  value="{{ $fee->mess_charge +  $fee->caution_money + $fee->laundry_charge + $fee->hostal_room_details->hostal_charge_per_student}}" class="form-control" readonly>
				    </div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<input type="text" name="" id="total_charges_bal_fee" placeholder="Amount" value="{{ $fee->mess_charge +  $fee->caution_money + $fee->laundry_charge + $fee->hostal_room_details->hostal_charge_per_student }}" class="form-control" readonly>
				    </div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<input type="text"  name="pay_hostel_charge" id="bal_tot" placeholder="Pay"  value="" class="form-control" readonly>
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

@include('common.footer')

