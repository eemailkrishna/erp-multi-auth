<table id="example1" class="table table-bordered table-striped">
	<thead >
	<tr>
	<th>All<input type="checkbox" id="checked1" checked value="" name="" onclick="for_check(this.id);"></th>
	<th>S No.</th>
	<th>Admission No.</th>
	<th>Name</th>
	<th style="display:none">Current Class</th>
	<th>Admission Class</th>
	    <th>Section</th>
	<th>Father Name</th>
	<th>Mother Name</th>
	<th>Adm. Date</th>
	<th>D.O.B</th>
	<th>Std Address</th>
	<th>Admission Scheme</th>
	<th>Std. Identity Category</th>
	<th>Father Cont No. </th>
	<th>Fee Category</th>
	<th>Bus</th>
	<th>Bus Route</th>
	<th>Bus Category / Stop</th>
	<th>Adm. No.</th>
	<th>Roll NO.</th>
	<th>Scholar No.</th>
	<th>Gender</th>
	<th>Category</th>
	<th>Caste</th>
	<th>Bpl card No</th>
	<th>Income Certificate No</th>
	<th>Cast Certificate No</th>
	<th>Blood Group</th>
	<th>Show Status</th>
	</tr>
	</thead>
	<tbody>
  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="0" name="student_index[]"></td>
	<td>1</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Akshay Karande" title="Akshay Karande"><input type="hidden" name="student_roll_no[]" class="" value="2200733"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="Akshay Karande" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Akshay Karande" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Akshay Karande">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Akshay Karande" value="NILESH PATIDAR"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Akshay Karande" value="Sushila Kalasua"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Akshay Karande" value="2022-04-06" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Akshay Karande" value="2022-04-09" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Akshay Karande" value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Akshay Karande">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Akshay Karande">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Akshay Karande" value="">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Akshay Karande">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_1" onchange="for_route('1');" title="Akshay Karande">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_1" onchange="for_stop('1');" title="Akshay Karande">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_1" onchange="for_no('1');" title="Akshay Karande">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_1" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="Akshay Karande" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Akshay Karande" value="12366" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Akshay Karande" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Akshay Karande">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Akshay Karande">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Akshay Karande" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Akshay Karande" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Akshay Karande" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Akshay Karande" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Akshay Karande" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Akshay Karande">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="1" name="student_index[]"></td>
	<td>2</td>
	<td>77</td>
	<td><input type="text" name="student_name[]" class="" value="balveer singh" title="balveer singh"><input type="hidden" name="student_roll_no[]" class="" value="2200614"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="balveer singh" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="balveer singh" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="balveer singh">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="balveer singh" value="sukhvinder singh"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="balveer singh" value="prito singh "></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="balveer singh" value="2022-01-18" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="balveer singh" value="2017-02-02" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="balveer singh" value="CHACHAIPAR MAKHMELPUR MAU" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="balveer singh">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="balveer singh">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="balveer singh" value="9144555977">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="balveer singh">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_2" onchange="for_route('2');" title="balveer singh">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_2" onchange="for_stop('2');" title="balveer singh">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_2" onchange="for_no('2');" title="balveer singh">
	<option value="">Select</option>
		<option selected value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_2" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="balveer singh" value="77" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="balveer singh" value="12372" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="balveer singh" value="66" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="balveer singh">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="balveer singh">
	  <option value="General">General</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="balveer singh" value="sikh" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="balveer singh" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="balveer singh" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="balveer singh" value="2365542" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="balveer singh" value="A" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="balveer singh">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="2" name="student_index[]"></td>
	<td>3</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="INAMUR RAHMAN" title="INAMUR RAHMAN"><input type="hidden" name="student_roll_no[]" class="" value="2200759"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="INAMUR RAHMAN" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="INAMUR RAHMAN" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="INAMUR RAHMAN">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="INAMUR RAHMAN" value="ATIKUR RAHMAN"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="INAMUR RAHMAN" value="SANIYARA BEGUM"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="INAMUR RAHMAN" value="2022-04-20" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="INAMUR RAHMAN" value="2017-03-18" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="INAMUR RAHMAN" value="VILL- HARIPUR" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="INAMUR RAHMAN">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="INAMUR RAHMAN">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="INAMUR RAHMAN" value="8486304694">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="INAMUR RAHMAN">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_3" onchange="for_route('3');" title="INAMUR RAHMAN">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_3" onchange="for_stop('3');" title="INAMUR RAHMAN">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_3" onchange="for_no('3');" title="INAMUR RAHMAN">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_3" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="INAMUR RAHMAN" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="INAMUR RAHMAN" value="12348" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="INAMUR RAHMAN" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="INAMUR RAHMAN">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="INAMUR RAHMAN">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="INAMUR RAHMAN" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="INAMUR RAHMAN" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="INAMUR RAHMAN" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="INAMUR RAHMAN" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="INAMUR RAHMAN" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="INAMUR RAHMAN">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="3" name="student_index[]"></td>
	<td>4</td>
	<td>101</td>
	<td><input type="text" name="student_name[]" class="" value="kirti panday" title="kirti panday"><input type="hidden" name="student_roll_no[]" class="" value="2200626"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="kirti panday" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="kirti panday" value="1ST"  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="kirti panday">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="kirti panday" value="sumit panday"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="kirti panday" value="rekha panday"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="kirti panday" value="2022-01-27" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="kirti panday" value="2015-10-25" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="kirti panday" value="puspa nagar railway station bhopal " style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="kirti panday">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="kirti panday">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="kirti panday" value="9865474758">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="kirti panday">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_4" onchange="for_route('4');" title="kirti panday">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_4" onchange="for_stop('4');" title="kirti panday">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_4" onchange="for_no('4');" title="kirti panday">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_4" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="kirti panday" value="101" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="kirti panday" value="12374" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="kirti panday" value="741" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="kirti panday">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="kirti panday">
	  <option value="General">General</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="kirti panday" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="kirti panday" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="kirti panday" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="kirti panday" value="2345" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="kirti panday" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="kirti panday">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="4" name="student_index[]"></td>
	<td>5</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="lali" title="lali"><input type="hidden" name="student_roll_no[]" class="" value="2200627"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="lali" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="lali" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="lali">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="lali" value=""></td>
	<td><input type="text" name="student_mother_name[]" class="" title="lali" value=""></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="lali" value="2022-01-28" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="lali" value="2022-01-28" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="lali" value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="lali">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="lali">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="lali" value="">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="lali">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_5" onchange="for_route('5');" title="lali">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_5" onchange="for_stop('5');" title="lali">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_5" onchange="for_no('5');" title="lali">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_5" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="lali" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="lali" value="12364" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="lali" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="lali">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="lali">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="lali" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="lali" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="lali" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="lali" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="lali" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="lali">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="5" name="student_index[]"></td>
	<td>6</td>
	<td>94</td>
	<td><input type="text" name="student_name[]" class="" value="mahira khan" title="mahira khan"><input type="hidden" name="student_roll_no[]" class="" value="2200615"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="mahira khan" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="mahira khan" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="mahira khan">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="mahira khan" value="irfan khan"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="mahira khan" value="sahila khan "></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="mahira khan" value="2022-01-18" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="mahira khan" value="2018-05-23" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="mahira khan" value="GARHPURA" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="mahira khan">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="mahira khan">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="mahira khan" value="9144555977">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="mahira khan">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_6" onchange="for_route('6');" title="mahira khan">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_6" onchange="for_stop('6');" title="mahira khan">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_6" onchange="for_no('6');" title="mahira khan">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_6" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="mahira khan" value="94" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="mahira khan" value="12373" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="mahira khan" value="94" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="mahira khan">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="mahira khan">
	  <option value="General">General</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="mahira khan" value="KHAN" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="mahira khan" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="mahira khan" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="mahira khan" value="2365542" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="mahira khan" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="mahira khan">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="6" name="student_index[]"></td>
	<td>7</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="mayank" title="mayank"><input type="hidden" name="student_roll_no[]" class="" value="2200738"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="mayank" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="mayank" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="mayank">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="mayank" value="demo"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="mayank" value="demo"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="mayank" value="2022-04-07" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="mayank" value="2022-04-07" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="mayank" value="gfgggggggggggggggggggggg" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="mayank">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="mayank">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="mayank" value="-1">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="mayank">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_7" onchange="for_route('7');" title="mayank">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_7" onchange="for_stop('7');" title="mayank">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_7" onchange="for_no('7');" title="mayank">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_7" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="mayank" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="mayank" value="12367" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="mayank" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="mayank">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="mayank">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="mayank" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="mayank" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="mayank" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="mayank" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="mayank" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="mayank">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="7" name="student_index[]"></td>
	<td>8</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="rakesh" title="rakesh"><input type="hidden" name="student_roll_no[]" class="" value="2200953"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="rakesh" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="rakesh" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="rakesh">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="rakesh" value="shaelendra"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="rakesh" value="seema"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="rakesh" value="2022-08-17" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="rakesh" value="2014-12-06" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="rakesh" value="atrauli" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="rakesh">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="rakesh">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="rakesh" value="9058068745">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="rakesh">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option selected value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_8" onchange="for_route('8');" title="rakesh">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_8" onchange="for_stop('8');" title="rakesh">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_8" onchange="for_no('8');" title="rakesh">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_8" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="rakesh" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="rakesh" value="12365" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="rakesh" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="rakesh">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="rakesh">
	  <option value="OBC">OBC</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="rakesh" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="rakesh" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="rakesh" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="rakesh" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="rakesh" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="rakesh">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="8" name="student_index[]"></td>
	<td>9</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="rakesh" title="rakesh"><input type="hidden" name="student_roll_no[]" class="" value="2200761"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="rakesh" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="rakesh" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="rakesh">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="rakesh" value=""></td>
	<td><input type="text" name="student_mother_name[]" class="" title="rakesh" value=""></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="rakesh" value="2022-04-25" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="rakesh" value="2022-04-15" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="rakesh" value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="rakesh">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="rakesh">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="rakesh" value="">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="rakesh">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_9" onchange="for_route('9');" title="rakesh">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_9" onchange="for_stop('9');" title="rakesh">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_9" onchange="for_no('9');" title="rakesh">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_9" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="rakesh" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="rakesh" value="12370" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="rakesh" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="rakesh">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="rakesh">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="rakesh" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="rakesh" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="rakesh" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="rakesh" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="rakesh" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="rakesh">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="9" name="student_index[]"></td>
	<td>10</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="sanam karn" title="sanam karn"><input type="hidden" name="student_roll_no[]" class="" value="2200730"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="sanam karn" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="sanam karn" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="sanam karn">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="sanam karn" value="bijay karn"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="sanam karn" value="muni karn "></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="sanam karn" value="2022-04-04" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="sanam karn" value="2018-06-05" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="sanam karn" value="janakpur" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="sanam karn">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="sanam karn">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="sanam karn" value="9816870719">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="sanam karn">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_10" onchange="for_route('10');" title="sanam karn">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_10" onchange="for_stop('10');" title="sanam karn">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_10" onchange="for_no('10');" title="sanam karn">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_10" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="sanam karn" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="sanam karn" value="12362" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="sanam karn" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="sanam karn">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="sanam karn">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="sanam karn" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="sanam karn" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="sanam karn" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="sanam karn" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="sanam karn" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="sanam karn">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="10" name="student_index[]"></td>
	<td>11</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="SANDEEP" title="SANDEEP"><input type="hidden" name="student_roll_no[]" class="" value="2200948"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="SANDEEP" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="SANDEEP" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="SANDEEP">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="SANDEEP" value="PRATHAM SINGH"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="SANDEEP" value="MAMTA"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="SANDEEP" value="2022-08-06" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="SANDEEP" value="2005-01-02" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="SANDEEP" value="CHIRIMIRI" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="SANDEEP">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="SANDEEP">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="SANDEEP" value="9991233258">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="SANDEEP">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_11" onchange="for_route('11');" title="SANDEEP">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_11" onchange="for_stop('11');" title="SANDEEP">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_11" onchange="for_no('11');" title="SANDEEP">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_11" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="SANDEEP" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="SANDEEP" value="12363" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="SANDEEP" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="SANDEEP">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="SANDEEP">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="SANDEEP" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="SANDEEP" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="SANDEEP" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="SANDEEP" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="SANDEEP" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="SANDEEP">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="11" name="student_index[]"></td>
	<td>12</td>
	<td>66</td>
	<td><input type="text" name="student_name[]" class="" value="sanny" title="sanny"><input type="hidden" name="student_roll_no[]" class="" value="2200618"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="sanny" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="sanny" value="NURSERY"  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="sanny">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="sanny" value="soham"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="sanny" value="seema "></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="sanny" value="2022-01-18" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="sanny" value="2018-05-12" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="sanny" value="Sangam Vihar Chandausi" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="sanny">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="sanny">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="sanny" value="9144555977">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="sanny">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_12" onchange="for_route('12');" title="sanny">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_12" onchange="for_stop('12');" title="sanny">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_12" onchange="for_no('12');" title="sanny">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option selected value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_12" value="mp-04 nx-4550" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="sanny" value="66" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="sanny" value="12371" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="sanny" value="66" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="sanny">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="sanny">
	  <option value="General">General</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="sanny" value="GAWALI" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="sanny" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="sanny" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="sanny" value="2365542" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="sanny" value="O +" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="sanny">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="12" name="student_index[]"></td>
	<td>13</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Urvi sen" title="Urvi sen"><input type="hidden" name="student_roll_no[]" class="" value="2200752"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="Urvi sen" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Urvi sen" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Urvi sen">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Urvi sen" value="Prabhash sen"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Urvi sen" value="Nilima mili sen"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Urvi sen" value="2022-04-16" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Urvi sen" value="2015-04-25" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Urvi sen" value="Vill-Khanamukh, P.O- Nonkey Patgaon, Dist-sonitpur(Assam)Pin-784101" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Urvi sen">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Urvi sen">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Urvi sen" value="9101065310">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Urvi sen">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_13" onchange="for_route('13');" title="Urvi sen">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_13" onchange="for_stop('13');" title="Urvi sen">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_13" onchange="for_no('13');" title="Urvi sen">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_13" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="Urvi sen" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Urvi sen" value="12369" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Urvi sen" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Urvi sen">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Urvi sen">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Urvi sen" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Urvi sen" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Urvi sen" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Urvi sen" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Urvi sen" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Urvi sen">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="13" name="student_index[]"></td>
	<td>14</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Vaishnavi Thakur" title="Vaishnavi Thakur"><input type="hidden" name="student_roll_no[]" class="" value="2200747"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="Vaishnavi Thakur" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Vaishnavi Thakur" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Vaishnavi Thakur">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Vaishnavi Thakur" value="Mr. Amrendra Pratap Singh "></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Vaishnavi Thakur" value="Mrs. Roshni Singh "></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Vaishnavi Thakur" value="2022-04-14" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Vaishnavi Thakur" value="1998-10-06" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Vaishnavi Thakur" value="Belwa Sammay Road Colonelganj Dist. Gonda" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Vaishnavi Thakur">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Vaishnavi Thakur">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Vaishnavi Thakur" value="9918666600">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Vaishnavi Thakur">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_14" onchange="for_route('14');" title="Vaishnavi Thakur">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_14" onchange="for_stop('14');" title="Vaishnavi Thakur">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_14" onchange="for_no('14');" title="Vaishnavi Thakur">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_14" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="Vaishnavi Thakur" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Vaishnavi Thakur" value="12368" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Vaishnavi Thakur" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Vaishnavi Thakur">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Vaishnavi Thakur">
	  <option value="General">General</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Vaishnavi Thakur" value="Thakur " style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Vaishnavi Thakur" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Vaishnavi Thakur" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Vaishnavi Thakur" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Vaishnavi Thakur" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Vaishnavi Thakur">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="14" name="student_index[]"></td>
	<td>15</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="xghkjh" title="xghkjh"><input type="hidden" name="student_roll_no[]" class="" value="2200720"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="LKG(A)" title="xghkjh" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="xghkjh" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="xghkjh">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="xghkjh" value="Anil"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="xghkjh" value="sona"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="xghkjh" value="2022-04-01" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="xghkjh" value="2022-04-29" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="xghkjh" value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="xghkjh">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="xghkjh">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="xghkjh" value="1234567891">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="xghkjh">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_15" onchange="for_route('15');" title="xghkjh">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_15" onchange="for_stop('15');" title="xghkjh">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_15" onchange="for_no('15');" title="xghkjh">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option  value="MP|?|busfee4">MP</option>
		<option  value="subhas nagar|?|busfee5">subhas nagar</option>
		<option  value="20000|?|busfee6">20000</option>
		<option  value="mp nagar|?|busfee7">mp nagar</option>
		<option  value="ashoka garden|?|busfee8">ashoka garden</option>
		<option  value="kolar|?|busfee9">kolar</option>
		<option  value="bardi|?|busfee10">bardi</option>
		<option  value="mp.nagar|?|busfee11">mp.nagar</option>
		<option  value="arwind vihar|?|busfee12">arwind vihar</option>
		<option  value="kalpna nagar|?|busfee13">kalpna nagar</option>
		<option  value="KHANDAKPAR|?|busfee14">KHANDAKPAR</option>
		<option  value="Bhel |?|busfee15">Bhel </option>
		<option  value="MOD|?|busfee16">MOD</option>
		<option  value="mp nagar|?|busfee17">mp nagar</option>
		<option  value="mp nagar|?|busfee18">mp nagar</option>
		<option  value="mp nagar |?|busfee19">mp nagar </option>
		</select>
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_15" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="xghkjh" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="xghkjh" value="12361" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="xghkjh" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="xghkjh">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="xghkjh">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="xghkjh" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="xghkjh" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="xghkjh" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="xghkjh" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="xghkjh" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="xghkjh">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	     </tbody>
</table>
	 <div class="col-md-12">
		<center><input type="submit" name="finish" value="Submit" onclick="return validation();" class="btn btn-success"/></center> 
	 </div>
	 
<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
$(function () {
$('#example1').DataTable()
})
</script>