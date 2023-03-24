<div class="col-md-6"><h4 style="color:#d9534f;">Fees Details:</h4></div>
<div class="col-md-3"><center><span style="color:red;"><input type="checkbox" name="" id="check_same" value="" />&nbsp;&nbsp;&nbsp;<b>Check For Same <small>(Amount)</small></b></span></center></div>
<div class="col-md-3"><center><span style="color:red;"><input type="checkbox" name="" id="check_for_same" value="" />&nbsp;&nbsp;&nbsp;<b>Check For Same <small>(Discount)</small></b></span></center></div>
	<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">April Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month04" placeholder="annual" value="1000" id="fee_type_1" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month04" id="disc_type_1" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_1');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_1" class="clk_btn_fee1" onclick="for_total('1');month_total('04');">
		<input type="text" name="student_fee1_discount_amount_month04" id="discount_amount_1" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_1');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month04" id="discount_method_1" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_1');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month04" placeholder="0"  value="1000" id="after_discount_amount_1" class="form-control amt fee_amount_04" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month04" placeholder="singing" value="200" id="fee_type_2" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month04" id="disc_type_2" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_2');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_2" class="clk_btn_fee2" onclick="for_total('2');month_total('04');">
		<input type="text" name="student_fee2_discount_amount_month04" id="discount_amount_2" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_2');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month04" id="discount_method_2" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_2');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month04" placeholder="0"  value="200" id="after_discount_amount_2" class="form-control amt fee_amount_04" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month04" placeholder="Transport fees" value="" id="fee_type_3" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month04" id="disc_type_3" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_3');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_3" class="clk_btn_fee3" onclick="for_total('3');month_total('04');">
		<input type="text" name="student_fee3_discount_amount_month04" id="discount_amount_3" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_3');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month04" id="discount_method_3" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_3');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month04" placeholder="0"  value="" id="after_discount_amount_3" class="form-control amt fee_amount_04" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month04" placeholder="sports fees" value="500" id="fee_type_4" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month04" id="disc_type_4" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_4');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_4" class="clk_btn_fee4" onclick="for_total('4');month_total('04');">
		<input type="text" name="student_fee4_discount_amount_month04" id="discount_amount_4" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_4');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month04" id="discount_method_4" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_4');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month04" placeholder="0"  value="500" id="after_discount_amount_4" class="form-control amt fee_amount_04" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month04" placeholder="exam fee" value="700" id="fee_type_5" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month04" id="disc_type_5" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_5');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_5" class="clk_btn_fee5" onclick="for_total('5');month_total('04');">
		<input type="text" name="student_fee5_discount_amount_month04" id="discount_amount_5" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_5');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month04" id="discount_method_5" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_5');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month04" placeholder="0"  value="700" id="after_discount_amount_5" class="form-control amt fee_amount_04" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month04" placeholder="event fee" value="700" id="fee_type_6" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month04" id="disc_type_6" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_6');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_6" class="clk_btn_fee8" onclick="for_total('6');month_total('04');">
		<input type="text" name="student_fee8_discount_amount_month04" id="discount_amount_6" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_6');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month04" id="discount_method_6" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_6');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month04" placeholder="0"  value="700" id="after_discount_amount_6" class="form-control amt fee_amount_04" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month04" placeholder="bus fee" value="400" id="fee_type_7" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month04" id="disc_type_7" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_7');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_7" class="clk_btn_fee9" onclick="for_total('7');month_total('04');">
		<input type="text" name="student_fee9_discount_amount_month04" id="discount_amount_7" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_7');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month04" id="discount_method_7" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_7');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month04" placeholder="0"  value="400" id="after_discount_amount_7" class="form-control amt fee_amount_04" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">April Month Total Fee : <span id="total_month_04">3500</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">May Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month05" placeholder="annual" value="" id="fee_type_8" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month05" id="disc_type_8" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_8');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_8" class="clk_btn_fee1" onclick="for_total('8');month_total('05');">
		<input type="text" name="student_fee1_discount_amount_month05" id="discount_amount_8" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_8');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month05" id="discount_method_8" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_8');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_8" class="form-control amt fee_amount_05" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month05" placeholder="singing" value="" id="fee_type_9" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month05" id="disc_type_9" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_9');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_9" class="clk_btn_fee2" onclick="for_total('9');month_total('05');">
		<input type="text" name="student_fee2_discount_amount_month05" id="discount_amount_9" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_9');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month05" id="discount_method_9" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_9');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_9" class="form-control amt fee_amount_05" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month05" placeholder="Transport fees" value="" id="fee_type_10" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month05" id="disc_type_10" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_10');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_10" class="clk_btn_fee3" onclick="for_total('10');month_total('05');">
		<input type="text" name="student_fee3_discount_amount_month05" id="discount_amount_10" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_10');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month05" id="discount_method_10" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_10');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_10" class="form-control amt fee_amount_05" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month05" placeholder="sports fees" value="" id="fee_type_11" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month05" id="disc_type_11" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_11');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_11" class="clk_btn_fee4" onclick="for_total('11');month_total('05');">
		<input type="text" name="student_fee4_discount_amount_month05" id="discount_amount_11" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_11');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month05" id="discount_method_11" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_11');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_11" class="form-control amt fee_amount_05" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month05" placeholder="exam fee" value="" id="fee_type_12" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month05" id="disc_type_12" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_12');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_12" class="clk_btn_fee5" onclick="for_total('12');month_total('05');">
		<input type="text" name="student_fee5_discount_amount_month05" id="discount_amount_12" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_12');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month05" id="discount_method_12" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_12');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_12" class="form-control amt fee_amount_05" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month05" placeholder="event fee" value="" id="fee_type_13" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month05" id="disc_type_13" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_13');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_13" class="clk_btn_fee8" onclick="for_total('13');month_total('05');">
		<input type="text" name="student_fee8_discount_amount_month05" id="discount_amount_13" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_13');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month05" id="discount_method_13" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_13');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_13" class="form-control amt fee_amount_05" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month05" placeholder="bus fee" value="" id="fee_type_14" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month05" id="disc_type_14" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_14');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_14" class="clk_btn_fee9" onclick="for_total('14');month_total('05');">
		<input type="text" name="student_fee9_discount_amount_month05" id="discount_amount_14" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_14');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month05" id="discount_method_14" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_14');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month05" placeholder="0"  value="" id="after_discount_amount_14" class="form-control amt fee_amount_05" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">May Month Total Fee : <span id="total_month_05">0</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">June Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month06" placeholder="annual" value="" id="fee_type_15" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month06" id="disc_type_15" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_15');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_15" class="clk_btn_fee1" onclick="for_total('15');month_total('06');">
		<input type="text" name="student_fee1_discount_amount_month06" id="discount_amount_15" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_15');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month06" id="discount_method_15" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_15');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_15" class="form-control amt fee_amount_06" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month06" placeholder="singing" value="" id="fee_type_16" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month06" id="disc_type_16" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_16');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_16" class="clk_btn_fee2" onclick="for_total('16');month_total('06');">
		<input type="text" name="student_fee2_discount_amount_month06" id="discount_amount_16" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_16');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month06" id="discount_method_16" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_16');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_16" class="form-control amt fee_amount_06" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month06" placeholder="Transport fees" value="" id="fee_type_17" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month06" id="disc_type_17" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_17');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_17" class="clk_btn_fee3" onclick="for_total('17');month_total('06');">
		<input type="text" name="student_fee3_discount_amount_month06" id="discount_amount_17" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_17');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month06" id="discount_method_17" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_17');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_17" class="form-control amt fee_amount_06" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month06" placeholder="sports fees" value="" id="fee_type_18" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month06" id="disc_type_18" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_18');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_18" class="clk_btn_fee4" onclick="for_total('18');month_total('06');">
		<input type="text" name="student_fee4_discount_amount_month06" id="discount_amount_18" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_18');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month06" id="discount_method_18" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_18');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_18" class="form-control amt fee_amount_06" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month06" placeholder="exam fee" value="" id="fee_type_19" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month06" id="disc_type_19" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_19');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_19" class="clk_btn_fee5" onclick="for_total('19');month_total('06');">
		<input type="text" name="student_fee5_discount_amount_month06" id="discount_amount_19" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_19');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month06" id="discount_method_19" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_19');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_19" class="form-control amt fee_amount_06" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month06" placeholder="event fee" value="" id="fee_type_20" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month06" id="disc_type_20" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_20');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_20" class="clk_btn_fee8" onclick="for_total('20');month_total('06');">
		<input type="text" name="student_fee8_discount_amount_month06" id="discount_amount_20" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_20');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month06" id="discount_method_20" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_20');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_20" class="form-control amt fee_amount_06" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month06" placeholder="bus fee" value="" id="fee_type_21" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month06" id="disc_type_21" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_21');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_21" class="clk_btn_fee9" onclick="for_total('21');month_total('06');">
		<input type="text" name="student_fee9_discount_amount_month06" id="discount_amount_21" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_21');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month06" id="discount_method_21" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_21');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month06" placeholder="0"  value="" id="after_discount_amount_21" class="form-control amt fee_amount_06" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">June Month Total Fee : <span id="total_month_06">0</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">July Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month07" placeholder="annual" value="" id="fee_type_22" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month07" id="disc_type_22" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_22');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_22" class="clk_btn_fee1" onclick="for_total('22');month_total('07');">
		<input type="text" name="student_fee1_discount_amount_month07" id="discount_amount_22" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_22');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month07" id="discount_method_22" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_22');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_22" class="form-control amt fee_amount_07" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month07" placeholder="singing" value="" id="fee_type_23" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month07" id="disc_type_23" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_23');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_23" class="clk_btn_fee2" onclick="for_total('23');month_total('07');">
		<input type="text" name="student_fee2_discount_amount_month07" id="discount_amount_23" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_23');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month07" id="discount_method_23" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_23');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_23" class="form-control amt fee_amount_07" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month07" placeholder="Transport fees" value="" id="fee_type_24" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month07" id="disc_type_24" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_24');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_24" class="clk_btn_fee3" onclick="for_total('24');month_total('07');">
		<input type="text" name="student_fee3_discount_amount_month07" id="discount_amount_24" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_24');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month07" id="discount_method_24" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_24');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_24" class="form-control amt fee_amount_07" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month07" placeholder="sports fees" value="" id="fee_type_25" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month07" id="disc_type_25" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_25');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_25" class="clk_btn_fee4" onclick="for_total('25');month_total('07');">
		<input type="text" name="student_fee4_discount_amount_month07" id="discount_amount_25" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_25');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month07" id="discount_method_25" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_25');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_25" class="form-control amt fee_amount_07" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month07" placeholder="exam fee" value="" id="fee_type_26" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month07" id="disc_type_26" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_26');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_26" class="clk_btn_fee5" onclick="for_total('26');month_total('07');">
		<input type="text" name="student_fee5_discount_amount_month07" id="discount_amount_26" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_26');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month07" id="discount_method_26" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_26');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_26" class="form-control amt fee_amount_07" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month07" placeholder="event fee" value="" id="fee_type_27" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month07" id="disc_type_27" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_27');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_27" class="clk_btn_fee8" onclick="for_total('27');month_total('07');">
		<input type="text" name="student_fee8_discount_amount_month07" id="discount_amount_27" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_27');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month07" id="discount_method_27" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_27');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_27" class="form-control amt fee_amount_07" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month07" placeholder="bus fee" value="" id="fee_type_28" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month07" id="disc_type_28" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_28');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_28" class="clk_btn_fee9" onclick="for_total('28');month_total('07');">
		<input type="text" name="student_fee9_discount_amount_month07" id="discount_amount_28" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_28');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month07" id="discount_method_28" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_28');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month07" placeholder="0"  value="" id="after_discount_amount_28" class="form-control amt fee_amount_07" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">July Month Total Fee : <span id="total_month_07">0</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">August Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month08" placeholder="annual" value="" id="fee_type_29" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month08" id="disc_type_29" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_29');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_29" class="clk_btn_fee1" onclick="for_total('29');month_total('08');">
		<input type="text" name="student_fee1_discount_amount_month08" id="discount_amount_29" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_29');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month08" id="discount_method_29" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_29');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_29" class="form-control amt fee_amount_08" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month08" placeholder="singing" value="" id="fee_type_30" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month08" id="disc_type_30" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_30');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_30" class="clk_btn_fee2" onclick="for_total('30');month_total('08');">
		<input type="text" name="student_fee2_discount_amount_month08" id="discount_amount_30" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_30');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month08" id="discount_method_30" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_30');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_30" class="form-control amt fee_amount_08" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month08" placeholder="Transport fees" value="" id="fee_type_31" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month08" id="disc_type_31" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_31');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_31" class="clk_btn_fee3" onclick="for_total('31');month_total('08');">
		<input type="text" name="student_fee3_discount_amount_month08" id="discount_amount_31" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_31');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month08" id="discount_method_31" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_31');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_31" class="form-control amt fee_amount_08" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month08" placeholder="sports fees" value="" id="fee_type_32" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month08" id="disc_type_32" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_32');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_32" class="clk_btn_fee4" onclick="for_total('32');month_total('08');">
		<input type="text" name="student_fee4_discount_amount_month08" id="discount_amount_32" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_32');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month08" id="discount_method_32" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_32');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_32" class="form-control amt fee_amount_08" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month08" placeholder="exam fee" value="" id="fee_type_33" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month08" id="disc_type_33" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_33');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_33" class="clk_btn_fee5" onclick="for_total('33');month_total('08');">
		<input type="text" name="student_fee5_discount_amount_month08" id="discount_amount_33" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_33');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month08" id="discount_method_33" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_33');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_33" class="form-control amt fee_amount_08" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month08" placeholder="event fee" value="" id="fee_type_34" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month08" id="disc_type_34" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_34');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_34" class="clk_btn_fee8" onclick="for_total('34');month_total('08');">
		<input type="text" name="student_fee8_discount_amount_month08" id="discount_amount_34" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_34');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month08" id="discount_method_34" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_34');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_34" class="form-control amt fee_amount_08" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month08" placeholder="bus fee" value="" id="fee_type_35" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month08" id="disc_type_35" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_35');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_35" class="clk_btn_fee9" onclick="for_total('35');month_total('08');">
		<input type="text" name="student_fee9_discount_amount_month08" id="discount_amount_35" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_35');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month08" id="discount_method_35" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_35');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month08" placeholder="0"  value="" id="after_discount_amount_35" class="form-control amt fee_amount_08" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">August Month Total Fee : <span id="total_month_08">0</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">September Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month09" placeholder="annual" value="" id="fee_type_36" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month09" id="disc_type_36" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_36');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_36" class="clk_btn_fee1" onclick="for_total('36');month_total('09');">
		<input type="text" name="student_fee1_discount_amount_month09" id="discount_amount_36" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_36');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month09" id="discount_method_36" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_36');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_36" class="form-control amt fee_amount_09" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month09" placeholder="singing" value="" id="fee_type_37" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month09" id="disc_type_37" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_37');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_37" class="clk_btn_fee2" onclick="for_total('37');month_total('09');">
		<input type="text" name="student_fee2_discount_amount_month09" id="discount_amount_37" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_37');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month09" id="discount_method_37" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_37');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_37" class="form-control amt fee_amount_09" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month09" placeholder="Transport fees" value="" id="fee_type_38" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month09" id="disc_type_38" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_38');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_38" class="clk_btn_fee3" onclick="for_total('38');month_total('09');">
		<input type="text" name="student_fee3_discount_amount_month09" id="discount_amount_38" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_38');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month09" id="discount_method_38" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_38');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_38" class="form-control amt fee_amount_09" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month09" placeholder="sports fees" value="" id="fee_type_39" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month09" id="disc_type_39" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_39');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_39" class="clk_btn_fee4" onclick="for_total('39');month_total('09');">
		<input type="text" name="student_fee4_discount_amount_month09" id="discount_amount_39" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_39');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month09" id="discount_method_39" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_39');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_39" class="form-control amt fee_amount_09" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month09" placeholder="exam fee" value="" id="fee_type_40" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month09" id="disc_type_40" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_40');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_40" class="clk_btn_fee5" onclick="for_total('40');month_total('09');">
		<input type="text" name="student_fee5_discount_amount_month09" id="discount_amount_40" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_40');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month09" id="discount_method_40" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_40');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_40" class="form-control amt fee_amount_09" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month09" placeholder="event fee" value="" id="fee_type_41" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month09" id="disc_type_41" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_41');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_41" class="clk_btn_fee8" onclick="for_total('41');month_total('09');">
		<input type="text" name="student_fee8_discount_amount_month09" id="discount_amount_41" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_41');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month09" id="discount_method_41" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_41');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_41" class="form-control amt fee_amount_09" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month09" placeholder="bus fee" value="" id="fee_type_42" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month09" id="disc_type_42" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_42');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_42" class="clk_btn_fee9" onclick="for_total('42');month_total('09');">
		<input type="text" name="student_fee9_discount_amount_month09" id="discount_amount_42" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_42');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month09" id="discount_method_42" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_42');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month09" placeholder="0"  value="" id="after_discount_amount_42" class="form-control amt fee_amount_09" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">September Month Total Fee : <span id="total_month_09">0</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">October Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month10" placeholder="annual" value="" id="fee_type_43" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month10" id="disc_type_43" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_43');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_43" class="clk_btn_fee1" onclick="for_total('43');month_total('10');">
		<input type="text" name="student_fee1_discount_amount_month10" id="discount_amount_43" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_43');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month10" id="discount_method_43" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_43');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_43" class="form-control amt fee_amount_10" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month10" placeholder="singing" value="" id="fee_type_44" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month10" id="disc_type_44" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_44');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_44" class="clk_btn_fee2" onclick="for_total('44');month_total('10');">
		<input type="text" name="student_fee2_discount_amount_month10" id="discount_amount_44" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_44');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month10" id="discount_method_44" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_44');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_44" class="form-control amt fee_amount_10" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month10" placeholder="Transport fees" value="" id="fee_type_45" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month10" id="disc_type_45" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_45');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_45" class="clk_btn_fee3" onclick="for_total('45');month_total('10');">
		<input type="text" name="student_fee3_discount_amount_month10" id="discount_amount_45" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_45');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month10" id="discount_method_45" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_45');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_45" class="form-control amt fee_amount_10" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month10" placeholder="sports fees" value="" id="fee_type_46" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month10" id="disc_type_46" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_46');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_46" class="clk_btn_fee4" onclick="for_total('46');month_total('10');">
		<input type="text" name="student_fee4_discount_amount_month10" id="discount_amount_46" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_46');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month10" id="discount_method_46" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_46');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_46" class="form-control amt fee_amount_10" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month10" placeholder="exam fee" value="" id="fee_type_47" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month10" id="disc_type_47" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_47');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_47" class="clk_btn_fee5" onclick="for_total('47');month_total('10');">
		<input type="text" name="student_fee5_discount_amount_month10" id="discount_amount_47" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_47');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month10" id="discount_method_47" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_47');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_47" class="form-control amt fee_amount_10" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month10" placeholder="event fee" value="" id="fee_type_48" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month10" id="disc_type_48" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_48');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_48" class="clk_btn_fee8" onclick="for_total('48');month_total('10');">
		<input type="text" name="student_fee8_discount_amount_month10" id="discount_amount_48" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_48');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month10" id="discount_method_48" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_48');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_48" class="form-control amt fee_amount_10" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month10" placeholder="bus fee" value="" id="fee_type_49" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month10" id="disc_type_49" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_49');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_49" class="clk_btn_fee9" onclick="for_total('49');month_total('10');">
		<input type="text" name="student_fee9_discount_amount_month10" id="discount_amount_49" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_49');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month10" id="discount_method_49" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_49');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month10" placeholder="0"  value="" id="after_discount_amount_49" class="form-control amt fee_amount_10" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">October Month Total Fee : <span id="total_month_10">0</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">November Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month11" placeholder="annual" value="" id="fee_type_50" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month11" id="disc_type_50" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_50');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_50" class="clk_btn_fee1" onclick="for_total('50');month_total('11');">
		<input type="text" name="student_fee1_discount_amount_month11" id="discount_amount_50" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_50');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month11" id="discount_method_50" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_50');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_50" class="form-control amt fee_amount_11" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month11" placeholder="singing" value="" id="fee_type_51" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month11" id="disc_type_51" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_51');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_51" class="clk_btn_fee2" onclick="for_total('51');month_total('11');">
		<input type="text" name="student_fee2_discount_amount_month11" id="discount_amount_51" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_51');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month11" id="discount_method_51" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_51');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_51" class="form-control amt fee_amount_11" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month11" placeholder="Transport fees" value="" id="fee_type_52" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month11" id="disc_type_52" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_52');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_52" class="clk_btn_fee3" onclick="for_total('52');month_total('11');">
		<input type="text" name="student_fee3_discount_amount_month11" id="discount_amount_52" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_52');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month11" id="discount_method_52" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_52');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_52" class="form-control amt fee_amount_11" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month11" placeholder="sports fees" value="" id="fee_type_53" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month11" id="disc_type_53" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_53');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_53" class="clk_btn_fee4" onclick="for_total('53');month_total('11');">
		<input type="text" name="student_fee4_discount_amount_month11" id="discount_amount_53" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_53');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month11" id="discount_method_53" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_53');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_53" class="form-control amt fee_amount_11" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month11" placeholder="exam fee" value="" id="fee_type_54" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month11" id="disc_type_54" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_54');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_54" class="clk_btn_fee5" onclick="for_total('54');month_total('11');">
		<input type="text" name="student_fee5_discount_amount_month11" id="discount_amount_54" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_54');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month11" id="discount_method_54" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_54');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_54" class="form-control amt fee_amount_11" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month11" placeholder="event fee" value="" id="fee_type_55" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month11" id="disc_type_55" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_55');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_55" class="clk_btn_fee8" onclick="for_total('55');month_total('11');">
		<input type="text" name="student_fee8_discount_amount_month11" id="discount_amount_55" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_55');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month11" id="discount_method_55" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_55');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_55" class="form-control amt fee_amount_11" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month11" placeholder="bus fee" value="" id="fee_type_56" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month11" id="disc_type_56" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_56');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_56" class="clk_btn_fee9" onclick="for_total('56');month_total('11');">
		<input type="text" name="student_fee9_discount_amount_month11" id="discount_amount_56" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_56');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month11" id="discount_method_56" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_56');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month11" placeholder="0"  value="" id="after_discount_amount_56" class="form-control amt fee_amount_11" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">November Month Total Fee : <span id="total_month_11">0</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">December Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month12" placeholder="annual" value="" id="fee_type_57" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month12" id="disc_type_57" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_57');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_57" class="clk_btn_fee1" onclick="for_total('57');month_total('12');">
		<input type="text" name="student_fee1_discount_amount_month12" id="discount_amount_57" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_57');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month12" id="discount_method_57" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_57');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_57" class="form-control amt fee_amount_12" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month12" placeholder="singing" value="" id="fee_type_58" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month12" id="disc_type_58" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_58');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_58" class="clk_btn_fee2" onclick="for_total('58');month_total('12');">
		<input type="text" name="student_fee2_discount_amount_month12" id="discount_amount_58" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_58');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month12" id="discount_method_58" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_58');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_58" class="form-control amt fee_amount_12" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month12" placeholder="Transport fees" value="" id="fee_type_59" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month12" id="disc_type_59" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_59');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_59" class="clk_btn_fee3" onclick="for_total('59');month_total('12');">
		<input type="text" name="student_fee3_discount_amount_month12" id="discount_amount_59" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_59');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month12" id="discount_method_59" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_59');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_59" class="form-control amt fee_amount_12" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month12" placeholder="sports fees" value="" id="fee_type_60" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month12" id="disc_type_60" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_60');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_60" class="clk_btn_fee4" onclick="for_total('60');month_total('12');">
		<input type="text" name="student_fee4_discount_amount_month12" id="discount_amount_60" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_60');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month12" id="discount_method_60" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_60');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_60" class="form-control amt fee_amount_12" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month12" placeholder="exam fee" value="" id="fee_type_61" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month12" id="disc_type_61" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_61');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_61" class="clk_btn_fee5" onclick="for_total('61');month_total('12');">
		<input type="text" name="student_fee5_discount_amount_month12" id="discount_amount_61" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_61');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month12" id="discount_method_61" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_61');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_61" class="form-control amt fee_amount_12" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month12" placeholder="event fee" value="" id="fee_type_62" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month12" id="disc_type_62" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_62');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_62" class="clk_btn_fee8" onclick="for_total('62');month_total('12');">
		<input type="text" name="student_fee8_discount_amount_month12" id="discount_amount_62" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_62');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month12" id="discount_method_62" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_62');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_62" class="form-control amt fee_amount_12" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month12" placeholder="bus fee" value="" id="fee_type_63" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month12" id="disc_type_63" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_63');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_63" class="clk_btn_fee9" onclick="for_total('63');month_total('12');">
		<input type="text" name="student_fee9_discount_amount_month12" id="discount_amount_63" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_63');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month12" id="discount_method_63" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_63');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month12" placeholder="0"  value="" id="after_discount_amount_63" class="form-control amt fee_amount_12" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">December Month Total Fee : <span id="total_month_12">0</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">January Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month01" placeholder="annual" value="1000" id="fee_type_64" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month01" id="disc_type_64" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_64');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_64" class="clk_btn_fee1" onclick="for_total('64');month_total('01');">
		<input type="text" name="student_fee1_discount_amount_month01" id="discount_amount_64" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_64');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month01" id="discount_method_64" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_64');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month01" placeholder="0"  value="1000" id="after_discount_amount_64" class="form-control amt fee_amount_01" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month01" placeholder="singing" value="" id="fee_type_65" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month01" id="disc_type_65" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_65');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_65" class="clk_btn_fee2" onclick="for_total('65');month_total('01');">
		<input type="text" name="student_fee2_discount_amount_month01" id="discount_amount_65" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_65');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month01" id="discount_method_65" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_65');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month01" placeholder="0"  value="" id="after_discount_amount_65" class="form-control amt fee_amount_01" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month01" placeholder="Transport fees" value="" id="fee_type_66" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month01" id="disc_type_66" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_66');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_66" class="clk_btn_fee3" onclick="for_total('66');month_total('01');">
		<input type="text" name="student_fee3_discount_amount_month01" id="discount_amount_66" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_66');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month01" id="discount_method_66" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_66');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month01" placeholder="0"  value="" id="after_discount_amount_66" class="form-control amt fee_amount_01" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month01" placeholder="sports fees" value="1000" id="fee_type_67" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month01" id="disc_type_67" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_67');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_67" class="clk_btn_fee4" onclick="for_total('67');month_total('01');">
		<input type="text" name="student_fee4_discount_amount_month01" id="discount_amount_67" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_67');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month01" id="discount_method_67" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_67');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month01" placeholder="0"  value="1000" id="after_discount_amount_67" class="form-control amt fee_amount_01" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month01" placeholder="exam fee" value="500" id="fee_type_68" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month01" id="disc_type_68" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_68');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_68" class="clk_btn_fee5" onclick="for_total('68');month_total('01');">
		<input type="text" name="student_fee5_discount_amount_month01" id="discount_amount_68" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_68');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month01" id="discount_method_68" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_68');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month01" placeholder="0"  value="500" id="after_discount_amount_68" class="form-control amt fee_amount_01" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month01" placeholder="event fee" value="" id="fee_type_69" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month01" id="disc_type_69" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_69');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_69" class="clk_btn_fee8" onclick="for_total('69');month_total('01');">
		<input type="text" name="student_fee8_discount_amount_month01" id="discount_amount_69" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_69');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month01" id="discount_method_69" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_69');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month01" placeholder="0"  value="" id="after_discount_amount_69" class="form-control amt fee_amount_01" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month01" placeholder="bus fee" value="" id="fee_type_70" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month01" id="disc_type_70" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_70');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_70" class="clk_btn_fee9" onclick="for_total('70');month_total('01');">
		<input type="text" name="student_fee9_discount_amount_month01" id="discount_amount_70" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_70');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month01" id="discount_method_70" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_70');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month01" placeholder="0"  value="" id="after_discount_amount_70" class="form-control amt fee_amount_01" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">January Month Total Fee : <span id="total_month_01">2500</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">February Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month02" placeholder="annual" value="" id="fee_type_71" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month02" id="disc_type_71" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_71');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_71" class="clk_btn_fee1" onclick="for_total('71');month_total('02');">
		<input type="text" name="student_fee1_discount_amount_month02" id="discount_amount_71" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_71');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month02" id="discount_method_71" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_71');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_71" class="form-control amt fee_amount_02" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month02" placeholder="singing" value="" id="fee_type_72" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month02" id="disc_type_72" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_72');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_72" class="clk_btn_fee2" onclick="for_total('72');month_total('02');">
		<input type="text" name="student_fee2_discount_amount_month02" id="discount_amount_72" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_72');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month02" id="discount_method_72" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_72');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_72" class="form-control amt fee_amount_02" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month02" placeholder="Transport fees" value="" id="fee_type_73" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month02" id="disc_type_73" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_73');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_73" class="clk_btn_fee3" onclick="for_total('73');month_total('02');">
		<input type="text" name="student_fee3_discount_amount_month02" id="discount_amount_73" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_73');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month02" id="discount_method_73" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_73');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_73" class="form-control amt fee_amount_02" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month02" placeholder="sports fees" value="2500" id="fee_type_74" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month02" id="disc_type_74" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_74');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_74" class="clk_btn_fee4" onclick="for_total('74');month_total('02');">
		<input type="text" name="student_fee4_discount_amount_month02" id="discount_amount_74" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_74');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month02" id="discount_method_74" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_74');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month02" placeholder="0"  value="2500" id="after_discount_amount_74" class="form-control amt fee_amount_02" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month02" placeholder="exam fee" value="" id="fee_type_75" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month02" id="disc_type_75" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_75');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_75" class="clk_btn_fee5" onclick="for_total('75');month_total('02');">
		<input type="text" name="student_fee5_discount_amount_month02" id="discount_amount_75" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_75');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month02" id="discount_method_75" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_75');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_75" class="form-control amt fee_amount_02" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month02" placeholder="event fee" value="" id="fee_type_76" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month02" id="disc_type_76" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_76');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_76" class="clk_btn_fee8" onclick="for_total('76');month_total('02');">
		<input type="text" name="student_fee8_discount_amount_month02" id="discount_amount_76" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_76');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month02" id="discount_method_76" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_76');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_76" class="form-control amt fee_amount_02" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month02" placeholder="bus fee" value="" id="fee_type_77" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month02" id="disc_type_77" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_77');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_77" class="clk_btn_fee9" onclick="for_total('77');month_total('02');">
		<input type="text" name="student_fee9_discount_amount_month02" id="discount_amount_77" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_77');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month02" id="discount_method_77" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_77');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month02" placeholder="0"  value="" id="after_discount_amount_77" class="form-control amt fee_amount_02" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">February Month Total Fee : <span id="total_month_02">2500</span></h4></center>
	</div>
	</div>
		<div class="col-md-12">
	<div class="col-md-12">
	<h4 style="color:green;">March Month Fee Set</h4>
	</div>
		<div class="col-md-3">
	<div class="form-group">
	  <label >annual</label>
	  <input type="text" name="student_fee1_month03" placeholder="annual" value="" id="fee_type_78" class="form-control fee1" oninput="same_amount(this.value,'fee1');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee1_discount_month03" id="disc_type_78" onchange="for_same(this.id,'disc_type_fee1','clk_btn_fee1','click_78');" class="form-control disc_type_fee1" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_78" class="clk_btn_fee1" onclick="for_total('78');month_total('03');">
		<input type="text" name="student_fee1_discount_amount_month03" id="discount_amount_78" class="form-control disc_amt_fee1" oninput="for_same(this.id,'disc_amt_fee1','clk_btn_fee1','click_78');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee1_discount_method_month03" id="discount_method_78" style="border:none;" class="disc_mtd_fee1" onchange="for_same(this.id,'disc_mtd_fee1','clk_btn_fee1','click_78');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee1_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_78" class="form-control amt fee_amount_03" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >singing</label>
	  <input type="text" name="student_fee2_month03" placeholder="singing" value="" id="fee_type_79" class="form-control fee2" oninput="same_amount(this.value,'fee2');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee2_discount_month03" id="disc_type_79" onchange="for_same(this.id,'disc_type_fee2','clk_btn_fee2','click_79');" class="form-control disc_type_fee2" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_79" class="clk_btn_fee2" onclick="for_total('79');month_total('03');">
		<input type="text" name="student_fee2_discount_amount_month03" id="discount_amount_79" class="form-control disc_amt_fee2" oninput="for_same(this.id,'disc_amt_fee2','clk_btn_fee2','click_79');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee2_discount_method_month03" id="discount_method_79" style="border:none;" class="disc_mtd_fee2" onchange="for_same(this.id,'disc_mtd_fee2','clk_btn_fee2','click_79');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee2_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_79" class="form-control amt fee_amount_03" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >Transport fees</label>
	  <input type="text" name="student_fee3_month03" placeholder="Transport fees" value="" id="fee_type_80" class="form-control fee3" oninput="same_amount(this.value,'fee3');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee3_discount_month03" id="disc_type_80" onchange="for_same(this.id,'disc_type_fee3','clk_btn_fee3','click_80');" class="form-control disc_type_fee3" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_80" class="clk_btn_fee3" onclick="for_total('80');month_total('03');">
		<input type="text" name="student_fee3_discount_amount_month03" id="discount_amount_80" class="form-control disc_amt_fee3" oninput="for_same(this.id,'disc_amt_fee3','clk_btn_fee3','click_80');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee3_discount_method_month03" id="discount_method_80" style="border:none;" class="disc_mtd_fee3" onchange="for_same(this.id,'disc_mtd_fee3','clk_btn_fee3','click_80');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee3_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_80" class="form-control amt fee_amount_03" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >sports fees</label>
	  <input type="text" name="student_fee4_month03" placeholder="sports fees" value="2000" id="fee_type_81" class="form-control fee4" oninput="same_amount(this.value,'fee4');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee4_discount_month03" id="disc_type_81" onchange="for_same(this.id,'disc_type_fee4','clk_btn_fee4','click_81');" class="form-control disc_type_fee4" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_81" class="clk_btn_fee4" onclick="for_total('81');month_total('03');">
		<input type="text" name="student_fee4_discount_amount_month03" id="discount_amount_81" class="form-control disc_amt_fee4" oninput="for_same(this.id,'disc_amt_fee4','clk_btn_fee4','click_81');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee4_discount_method_month03" id="discount_method_81" style="border:none;" class="disc_mtd_fee4" onchange="for_same(this.id,'disc_mtd_fee4','clk_btn_fee4','click_81');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee4_total_amount_after_discount_month03" placeholder="0"  value="2000" id="after_discount_amount_81" class="form-control amt fee_amount_03" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >exam fee</label>
	  <input type="text" name="student_fee5_month03" placeholder="exam fee" value="" id="fee_type_82" class="form-control fee5" oninput="same_amount(this.value,'fee5');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee5_discount_month03" id="disc_type_82" onchange="for_same(this.id,'disc_type_fee5','clk_btn_fee5','click_82');" class="form-control disc_type_fee5" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_82" class="clk_btn_fee5" onclick="for_total('82');month_total('03');">
		<input type="text" name="student_fee5_discount_amount_month03" id="discount_amount_82" class="form-control disc_amt_fee5" oninput="for_same(this.id,'disc_amt_fee5','clk_btn_fee5','click_82');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee5_discount_method_month03" id="discount_method_82" style="border:none;" class="disc_mtd_fee5" onchange="for_same(this.id,'disc_mtd_fee5','clk_btn_fee5','click_82');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee5_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_82" class="form-control amt fee_amount_03" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >event fee</label>
	  <input type="text" name="student_fee8_month03" placeholder="event fee" value="" id="fee_type_83" class="form-control fee8" oninput="same_amount(this.value,'fee8');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee8_discount_month03" id="disc_type_83" onchange="for_same(this.id,'disc_type_fee8','clk_btn_fee8','click_83');" class="form-control disc_type_fee8" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_83" class="clk_btn_fee8" onclick="for_total('83');month_total('03');">
		<input type="text" name="student_fee8_discount_amount_month03" id="discount_amount_83" class="form-control disc_amt_fee8" oninput="for_same(this.id,'disc_amt_fee8','clk_btn_fee8','click_83');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee8_discount_method_month03" id="discount_method_83" style="border:none;" class="disc_mtd_fee8" onchange="for_same(this.id,'disc_mtd_fee8','clk_btn_fee8','click_83');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee8_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_83" class="form-control amt fee_amount_03" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-3">
	<div class="form-group">
	  <label >bus fee</label>
	  <input type="text" name="student_fee9_month03" placeholder="bus fee" value="" id="fee_type_84" class="form-control fee9" oninput="same_amount(this.value,'fee9');"/>
	</div>
	</div>
	
	
	
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Discount Type</label>
	   <select name="student_fee9_discount_month03" id="disc_type_84" onchange="for_same(this.id,'disc_type_fee9','clk_btn_fee9','click_84');" class="form-control disc_type_fee9" required>
		<option value="None">None</option>
		<option value="Principal">Principal</option>
		<option value="yearly">yearly</option>
		<option value="Staff Discount">Staff Discount</option>
		<option value="Sibling Discount">Sibling Discount</option>
		</select>			 
	</div>
	</div>

	<div class="col-md-3">				
	<label>Discount Amount</label>
	<div class="input-group">
		<input type="hidden" id="click_84" class="clk_btn_fee9" onclick="for_total('84');month_total('03');">
		<input type="text" name="student_fee9_discount_amount_month03" id="discount_amount_84" class="form-control disc_amt_fee9" oninput="for_same(this.id,'disc_amt_fee9','clk_btn_fee9','click_84');" value="0" />
		<span class="input-group-addon" style="padding:0px;">
		<select name="student_fee9_discount_method_month03" id="discount_method_84" style="border:none;" class="disc_mtd_fee9" onchange="for_same(this.id,'disc_mtd_fee9','clk_btn_fee9','click_84');">
		<option value="%">%</option>
		<option value="Rs">Rs</option>
		</select>
		</span>
	</div>
	</div>

	<div class="col-md-3">				
	<div class="form-group">
	  <label><small>Total Amount After Discount</small></label>
	  <input type="text"  name="student_fee9_total_amount_after_discount_month03" placeholder="0"  value="" id="after_discount_amount_84" class="form-control amt fee_amount_03" readonly />
	</div>
	</div>
	
	
	
		<div class="col-md-12" style="border:1px solid;border-radius:20px;">
	<center><h4 style="color:blue;">March Month Total Fee : <span id="total_month_03">2000</span></h4></center>
	</div>
	</div>
		<div class="col-md-6">				
	<div class="form-group">
	  &nbsp;
	</div>
	</div>
	
		<div class="col-md-3">				
	<div class="form-group">
	  <input type="hidden" name="transport_amount" placeholder="0" value="0" id="transport_amount" class="form-control" />
	</div>
	</div>
		
	<div class="col-md-3">				
	<div class="form-group">
	  <label>Grand Total</label>
	  <input type="text" name="grand_total" placeholder="0" value="10500" id="grand_total1" class="form-control" readonly />
	</div>
	</div>