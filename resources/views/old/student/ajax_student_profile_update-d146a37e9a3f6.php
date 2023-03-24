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
	<td><input type="text" name="student_name[]" class="" value="Aamna Hussain" title="Aamna Hussain"><input type="hidden" name="student_roll_no[]" class="" value="2201009"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Aamna Hussain" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Aamna Hussain" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Aamna Hussain">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Aamna Hussain" value="Syed Farhat Hussain"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Aamna Hussain" value="Yusra Marghool"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Aamna Hussain" value="2022-09-27" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Aamna Hussain" value="2020-06-07" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Aamna Hussain" value="Sunjwan" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Aamna Hussain">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Aamna Hussain">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Aamna Hussain" value="9018501010">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Aamna Hussain">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_1" onchange="for_route('1');" title="Aamna Hussain">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_1" onchange="for_stop('1');" title="Aamna Hussain">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_1" onchange="for_no('1');" title="Aamna Hussain">
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
	<td><input type="text" name="student_admission_number[]" class="" title="Aamna Hussain" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Aamna Hussain" value="5" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Aamna Hussain" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Aamna Hussain">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Aamna Hussain">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Aamna Hussain" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Aamna Hussain" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Aamna Hussain" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Aamna Hussain" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Aamna Hussain" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Aamna Hussain">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="1" name="student_index[]"></td>
	<td>2</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Aashish" title="Aashish"><input type="hidden" name="student_roll_no[]" class="" value="2200758"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Aashish" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Aashish" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Aashish">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Aashish" value="Ramesh"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Aashish" value="Diya"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Aashish" value="2022-04-18" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Aashish" value="2020-02-06" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Aashish" value="G" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Aashish">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Aashish">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Aashish" value="9416499566">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Aashish">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_2" onchange="for_route('2');" title="Aashish">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_2" onchange="for_stop('2');" title="Aashish">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_2" onchange="for_no('2');" title="Aashish">
	<option value="">Select</option>
		<option  value="NASRULLAGANJ|?|busfee1">NASRULLAGANJ</option>
		<option  value="RALA|?|busfee2">RALA</option>
		<option  value="BORKHEDA|?|busfee3">BORKHEDA</option>
		<option selected value="MP|?|busfee4">MP</option>
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
	<td><input type="text" name="student_admission_number[]" class="" title="Aashish" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Aashish" value="6" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Aashish" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Aashish">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Aashish">
	  <option value="General">General</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Aashish" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Aashish" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Aashish" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Aashish" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Aashish" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Aashish">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="2" name="student_index[]"></td>
	<td>3</td>
	<td>1001</td>
	<td><input type="text" name="student_name[]" class="" value="ABHIMANYU SHARMA" title="ABHIMANYU SHARMA"><input type="hidden" name="student_roll_no[]" class="" value="2200785"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="ABHIMANYU SHARMA" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="ABHIMANYU SHARMA" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="ABHIMANYU SHARMA">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="ABHIMANYU SHARMA" value="GOURAV SHARMA"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="ABHIMANYU SHARMA" value="PRIYANKA SHARMA"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="ABHIMANYU SHARMA" value="2022-05-22" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="ABHIMANYU SHARMA" value="2018-08-07" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="ABHIMANYU SHARMA" value="SHASTRI COLONY" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="ABHIMANYU SHARMA">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="ABHIMANYU SHARMA">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="ABHIMANYU SHARMA" value="9755404505">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="ABHIMANYU SHARMA">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_3" onchange="for_route('3');" title="ABHIMANYU SHARMA">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_3" onchange="for_stop('3');" title="ABHIMANYU SHARMA">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_3" onchange="for_no('3');" title="ABHIMANYU SHARMA">
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
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_3" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="ABHIMANYU SHARMA" value="1001" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="ABHIMANYU SHARMA" value="7" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="ABHIMANYU SHARMA" value="1001" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="ABHIMANYU SHARMA">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="ABHIMANYU SHARMA">
	  <option value="General">General</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="ABHIMANYU SHARMA" value="BRAHMIN" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="ABHIMANYU SHARMA" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="ABHIMANYU SHARMA" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="ABHIMANYU SHARMA" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="ABHIMANYU SHARMA" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="ABHIMANYU SHARMA">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="3" name="student_index[]"></td>
	<td>4</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Ajay" title="Ajay"><input type="hidden" name="student_roll_no[]" class="" value="2200793"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Ajay" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Ajay" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Ajay">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Ajay" value="Vijay"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Ajay" value="Mays"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Ajay" value="2022-05-26" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Ajay" value="2008-05-13" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Ajay" value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Ajay">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Ajay">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Ajay" value="685555555555">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Ajay">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_4" onchange="for_route('4');" title="Ajay">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_4" onchange="for_stop('4');" title="Ajay">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_4" onchange="for_no('4');" title="Ajay">
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
	<td><input type="text" name="student_admission_number[]" class="" title="Ajay" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Ajay" value="8" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Ajay" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Ajay">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Ajay">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Ajay" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Ajay" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Ajay" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Ajay" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Ajay" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Ajay">
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
	<td><input type="text" name="student_name[]" class="" value="Anikesh" title="Anikesh"><input type="hidden" name="student_roll_no[]" class="" value="2201038"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Anikesh" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Anikesh" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Anikesh">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Anikesh" value="Mr. Amit Kumar"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Anikesh" value="Mrs. Savitri Yadav"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Anikesh" value="2022-04-15" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Anikesh" value="2019-07-05" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Anikesh" value="Oil Seedsfarm, Kalyanpur, Kanpur Nagar" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Anikesh">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Anikesh">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Anikesh" value="9621111842">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Anikesh">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_5" onchange="for_route('5');" title="Anikesh">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_5" onchange="for_stop('5');" title="Anikesh">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_5" onchange="for_no('5');" title="Anikesh">
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
	<td><input type="text" name="student_admission_number[]" class="" title="Anikesh" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Anikesh" value="" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Anikesh" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Anikesh">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Anikesh">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Anikesh" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Anikesh" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Anikesh" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Anikesh" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Anikesh" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Anikesh">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="5" name="student_index[]"></td>
	<td>6</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Arohi Kushwaha" title="Arohi Kushwaha"><input type="hidden" name="student_roll_no[]" class="" value="2201037"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Arohi Kushwaha" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Arohi Kushwaha" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Arohi Kushwaha">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Arohi Kushwaha" value="Mr. Shailendra Singh Kushwaha"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Arohi Kushwaha" value="Mrs. Rubi Kushwaha"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Arohi Kushwaha" value="2022-03-21" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Arohi Kushwaha" value="2018-07-17" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Arohi Kushwaha" value="112-B Kachiyana, CSJM University Kanpur" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Arohi Kushwaha">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Arohi Kushwaha">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Arohi Kushwaha" value="8726794375">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Arohi Kushwaha">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_6" onchange="for_route('6');" title="Arohi Kushwaha">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_6" onchange="for_stop('6');" title="Arohi Kushwaha">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_6" onchange="for_no('6');" title="Arohi Kushwaha">
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
	<td><input type="text" name="student_admission_number[]" class="" title="Arohi Kushwaha" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Arohi Kushwaha" value="" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Arohi Kushwaha" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Arohi Kushwaha">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Arohi Kushwaha">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Arohi Kushwaha" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Arohi Kushwaha" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Arohi Kushwaha" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Arohi Kushwaha" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Arohi Kushwaha" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Arohi Kushwaha">
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
	<td><input type="text" name="student_name[]" class="" value="Arushi Diwakar" title="Arushi Diwakar"><input type="hidden" name="student_roll_no[]" class="" value="2201040"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Arushi Diwakar" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Arushi Diwakar" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Arushi Diwakar">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Arushi Diwakar" value="Mr. Virendra Kumar"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Arushi Diwakar" value="Mrs. Jyoti Dilwakar"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Arushi Diwakar" value="2022-04-22" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Arushi Diwakar" value="2018-03-22" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Arushi Diwakar" value="Balajipuram, Kanpur Nagar" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Arushi Diwakar">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Arushi Diwakar">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Arushi Diwakar" value="6393465780">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Arushi Diwakar">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_7" onchange="for_route('7');" title="Arushi Diwakar">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_7" onchange="for_stop('7');" title="Arushi Diwakar">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_7" onchange="for_no('7');" title="Arushi Diwakar">
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
	<td><input type="text" name="student_admission_number[]" class="" title="Arushi Diwakar" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Arushi Diwakar" value="9" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Arushi Diwakar" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Arushi Diwakar">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Arushi Diwakar">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Arushi Diwakar" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Arushi Diwakar" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Arushi Diwakar" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Arushi Diwakar" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Arushi Diwakar" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Arushi Diwakar">
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
	<td><input type="text" name="student_name[]" class="" value="पंकज कुमार" title="पंकज कुमार"><input type="hidden" name="student_roll_no[]" class="" value="2200884"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="पंकज कुमार" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="पंकज कुमार" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="पंकज कुमार">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="पंकज कुमार" value="लालू राम"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="पंकज कुमार" value=""></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="पंकज कुमार" value="2022-07-16" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="पंकज कुमार" value="2016-11-05" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="पंकज कुमार" value="कंकर बाग " style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="पंकज कुमार">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="पंकज कुमार">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="पंकज कुमार" value="9898888888">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="पंकज कुमार">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_8" onchange="for_route('8');" title="पंकज कुमार">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_8" onchange="for_stop('8');" title="पंकज कुमार">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_8" onchange="for_no('8');" title="पंकज कुमार">
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
	<td><input type="text" name="student_admission_number[]" class="" title="पंकज कुमार" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="पंकज कुमार" value="10" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="पंकज कुमार" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="पंकज कुमार">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="पंकज कुमार">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="पंकज कुमार" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="पंकज कुमार" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="पंकज कुमार" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="पंकज कुमार" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="पंकज कुमार" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="पंकज कुमार">
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
	<td><input type="text" name="student_name[]" class="" value="Druwa Ganesh Chaudhari" title="Druwa Ganesh Chaudhari"><input type="hidden" name="student_roll_no[]" class="" value="2200795"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Druwa Ganesh Chaudhari" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Druwa Ganesh Chaudhari" value="NURSERY"  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Druwa Ganesh Chaudhari">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Druwa Ganesh Chaudhari" value="Ganesh Chaudhari"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Druwa Ganesh Chaudhari" value=""></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Druwa Ganesh Chaudhari" value="2022-05-28" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Druwa Ganesh Chaudhari" value="2017-09-25" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Druwa Ganesh Chaudhari" value="Selamba" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Druwa Ganesh Chaudhari">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Druwa Ganesh Chaudhari">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Druwa Ganesh Chaudhari" value="8469808008">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Druwa Ganesh Chaudhari">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_9" onchange="for_route('9');" title="Druwa Ganesh Chaudhari">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_9" onchange="for_stop('9');" title="Druwa Ganesh Chaudhari">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_9" onchange="for_no('9');" title="Druwa Ganesh Chaudhari">
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
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_9" value="mh-05" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="Druwa Ganesh Chaudhari" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Druwa Ganesh Chaudhari" value="11" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Druwa Ganesh Chaudhari" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Druwa Ganesh Chaudhari">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Druwa Ganesh Chaudhari">
	  <option value="OBC">OBC</option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Druwa Ganesh Chaudhari" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Druwa Ganesh Chaudhari" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Druwa Ganesh Chaudhari" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Druwa Ganesh Chaudhari" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Druwa Ganesh Chaudhari" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Druwa Ganesh Chaudhari">
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
	<td><input type="text" name="student_name[]" class="" value="Kartik Nishad" title="Kartik Nishad"><input type="hidden" name="student_roll_no[]" class="" value="2201041"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Kartik Nishad" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Kartik Nishad" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Kartik Nishad">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Kartik Nishad" value="Kartik Nishad"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Kartik Nishad" value="Mrs. Savita Nishad"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Kartik Nishad" value="2022-05-13" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Kartik Nishad" value="0001-01-01" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Kartik Nishad" value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Kartik Nishad">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Kartik Nishad">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Kartik Nishad" value="">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Kartik Nishad">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_10" onchange="for_route('10');" title="Kartik Nishad">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_10" onchange="for_stop('10');" title="Kartik Nishad">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_10" onchange="for_no('10');" title="Kartik Nishad">
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
	<td><input type="text" name="student_admission_number[]" class="" title="Kartik Nishad" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Kartik Nishad" value="12" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Kartik Nishad" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Kartik Nishad">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Kartik Nishad">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Kartik Nishad" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Kartik Nishad" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Kartik Nishad" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Kartik Nishad" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Kartik Nishad" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Kartik Nishad">
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
	<td><input type="text" name="student_name[]" class="" value="Nitya Yadav" title="Nitya Yadav"><input type="hidden" name="student_roll_no[]" class="" value="2201035"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Nitya Yadav" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Nitya Yadav" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Nitya Yadav">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Nitya Yadav" value="Mr. Mayank Yadav"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Nitya Yadav" value="Mrs. Poonam Yadav"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Nitya Yadav" value="2022-03-28" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Nitya Yadav" value="2018-11-27" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Nitya Yadav" value="314 Balajipuram, Makdikheda, Kanpur Nagar" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Nitya Yadav">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Nitya Yadav">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Nitya Yadav" value="8707260755">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Nitya Yadav">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_11" onchange="for_route('11');" title="Nitya Yadav">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_11" onchange="for_stop('11');" title="Nitya Yadav">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_11" onchange="for_no('11');" title="Nitya Yadav">
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
	<td><input type="text" name="student_admission_number[]" class="" title="Nitya Yadav" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Nitya Yadav" value="" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Nitya Yadav" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Nitya Yadav">
	<option value="Female">Female</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Nitya Yadav">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Nitya Yadav" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Nitya Yadav" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Nitya Yadav" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Nitya Yadav" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Nitya Yadav" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Nitya Yadav">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="11" name="student_index[]"></td>
	<td>12</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Prithviraj" title="Prithviraj"><input type="hidden" name="student_roll_no[]" class="" value="2201039"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Prithviraj" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Prithviraj" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Prithviraj">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Prithviraj" value="Dr. Pramod Kumar"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Prithviraj" value="Mrs. Preeti"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Prithviraj" value="2022-04-16" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Prithviraj" value="2018-11-15" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Prithviraj" value="Krishna Kutumb, Rama Dental College Lakhanpur, Kanpur Nagar" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Prithviraj">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Prithviraj">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Prithviraj" value="9219270152">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Prithviraj">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_12" onchange="for_route('12');" title="Prithviraj">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_12" onchange="for_stop('12');" title="Prithviraj">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_12" onchange="for_no('12');" title="Prithviraj">
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
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_12" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="Prithviraj" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Prithviraj" value="13" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Prithviraj" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Prithviraj">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Prithviraj">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Prithviraj" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Prithviraj" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Prithviraj" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Prithviraj" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Prithviraj" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Prithviraj">
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
	<td><input type="text" name="student_name[]" class="" value="Rahul Kumar" title="Rahul Kumar"><input type="hidden" name="student_roll_no[]" class="" value="2201086"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Rahul Kumar" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Rahul Kumar" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Rahul Kumar">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Rahul Kumar" value="Lalbabu Ray"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Rahul Kumar" value="Shanti Devi"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Rahul Kumar" value="2022-11-30" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Rahul Kumar" value="1999-03-06" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Rahul Kumar" value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Rahul Kumar">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Rahul Kumar">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Rahul Kumar" value="9570503057">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Rahul Kumar">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_13" onchange="for_route('13');" title="Rahul Kumar">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_13" onchange="for_stop('13');" title="Rahul Kumar">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_13" onchange="for_no('13');" title="Rahul Kumar">
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
	<td><input type="text" name="student_admission_number[]" class="" title="Rahul Kumar" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Rahul Kumar" value="" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Rahul Kumar" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Rahul Kumar">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Rahul Kumar">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Rahul Kumar" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Rahul Kumar" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Rahul Kumar" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Rahul Kumar" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Rahul Kumar" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Rahul Kumar">
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
	<td><input type="text" name="student_name[]" class="" value="raman" title="raman"><input type="hidden" name="student_roll_no[]" class="" value="2200770"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="raman" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="raman" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="raman">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="raman" value="tapan"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="raman" value=""></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="raman" value="2022-04-30" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="raman" value="2022-04-08" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="raman" value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="raman">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="raman">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="raman" value="7896541256">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="raman">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_14" onchange="for_route('14');" title="raman">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_14" onchange="for_stop('14');" title="raman">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_14" onchange="for_no('14');" title="raman">
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
	<td><input type="text" name="student_admission_number[]" class="" title="raman" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="raman" value="14" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="raman" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="raman">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="raman">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="raman" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="raman" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="raman" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="raman" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="raman" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="raman">
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
	<td><input type="text" name="student_name[]" class="" value="SHIVANSH RAWAT" title="SHIVANSH RAWAT"><input type="hidden" name="student_roll_no[]" class="" value="2200800"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="SHIVANSH RAWAT" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="SHIVANSH RAWAT" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="SHIVANSH RAWAT">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="SHIVANSH RAWAT" value="AJAY"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="SHIVANSH RAWAT" value="NISHA"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="SHIVANSH RAWAT" value="2022-05-23" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="SHIVANSH RAWAT" value="2018-10-21" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="SHIVANSH RAWAT" value="VILL. KUMBRA" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="SHIVANSH RAWAT">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="SHIVANSH RAWAT">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="SHIVANSH RAWAT" value="6283926887">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="SHIVANSH RAWAT">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_15" onchange="for_route('15');" title="SHIVANSH RAWAT">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_15" onchange="for_stop('15');" title="SHIVANSH RAWAT">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_15" onchange="for_no('15');" title="SHIVANSH RAWAT">
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
	<td><input type="text" name="student_admission_number[]" class="" title="SHIVANSH RAWAT" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="SHIVANSH RAWAT" value="15" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="SHIVANSH RAWAT" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="SHIVANSH RAWAT">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="SHIVANSH RAWAT">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="SHIVANSH RAWAT" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="SHIVANSH RAWAT" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="SHIVANSH RAWAT" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="SHIVANSH RAWAT" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="SHIVANSH RAWAT" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="SHIVANSH RAWAT">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="15" name="student_index[]"></td>
	<td>16</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="shree" title="shree"><input type="hidden" name="student_roll_no[]" class="" value="2200790"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="shree" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="shree" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="shree">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="shree" value="samay singh "></td>
	<td><input type="text" name="student_mother_name[]" class="" title="shree" value="pramdevi"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="shree" value="2022-05-26" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="shree" value="2019-03-02" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="shree" value="hayatpur " style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="shree">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="shree">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="shree" value="9911587536">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="shree">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_16" onchange="for_route('16');" title="shree">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_16" onchange="for_stop('16');" title="shree">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_16" onchange="for_no('16');" title="shree">
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
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_16" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="shree" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="shree" value="16" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="shree" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="shree">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="shree">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="shree" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="shree" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="shree" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="shree" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="shree" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="shree">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="16" name="student_index[]"></td>
	<td>17</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Shubh Kashyap" title="Shubh Kashyap"><input type="hidden" name="student_roll_no[]" class="" value="2201036"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Shubh Kashyap" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Shubh Kashyap" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Shubh Kashyap">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Shubh Kashyap" value="Mr. Anikesh Kumar"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Shubh Kashyap" value="Mrs. Meenu Kashyap"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Shubh Kashyap" value="2022-03-28" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Shubh Kashyap" value="2019-04-23" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Shubh Kashyap" value="2A/224 Azad Nagar, Kanpur Nagar" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Shubh Kashyap">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Shubh Kashyap">
		<option  value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Shubh Kashyap" value="8957380880">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Shubh Kashyap">
        <option selected value="Non- RTE|?|category1">Non- RTE</option>
        <option  value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_17" onchange="for_route('17');" title="Shubh Kashyap">
	<option selected value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_17" onchange="for_stop('17');" title="Shubh Kashyap">
	<option value="">Select</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_17" onchange="for_no('17');" title="Shubh Kashyap">
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
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_17" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="Shubh Kashyap" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Shubh Kashyap" value="" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Shubh Kashyap" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Shubh Kashyap">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Shubh Kashyap">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Shubh Kashyap" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Shubh Kashyap" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Shubh Kashyap" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Shubh Kashyap" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Shubh Kashyap" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Shubh Kashyap">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="17" name="student_index[]"></td>
	<td>18</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Yash " title="Yash "><input type="hidden" name="student_roll_no[]" class="" value="2200823"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="Yash " style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="Yash " value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="Yash ">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="Yash " value="Soun"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="Yash " value="Beenu "></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="Yash " value="2022-06-20" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="Yash " value="2018-06-22" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="Yash " value="" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="Yash ">
    <option  value="NON-RTE">NON-RTE</option>
    <option selected value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="Yash ">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="Yash " value="6265767366">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="Yash ">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_18" onchange="for_route('18');" title="Yash ">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_18" onchange="for_stop('18');" title="Yash ">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_18" onchange="for_no('18');" title="Yash ">
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
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_18" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="Yash " value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="Yash " value="" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="Yash " value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="Yash ">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="Yash ">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="Yash " value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="Yash " value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="Yash " value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="Yash " value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="Yash " value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="Yash ">
	<option value=""></option>
	<option  value="No">No</option>
	<option  value="Yes">Yes</option>
	</select>
	</td>
  </tr>
  
  
	
	  <tr align='center'>
   
    <td><input type="checkbox" class="checked1" checked value="18" name="student_index[]"></td>
	<td>19</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="yashi" title="yashi"><input type="hidden" name="student_roll_no[]" class="" value="2200782"></td>
	<td style="display:none"><input type="text" name="student_class[]" class="" value="NURSERY(A)" title="yashi" style="width:80px;" readonly /></td>
	<td><input type="text" name="student_admission_class[]" class="" title="yashi" value=""  style="width:80px;"></td>
		<td>
	<select name="student_class_section[]" style="width:60px;" title="yashi">
		<option selected value="A">A</option>
		<option  value="B">B</option>
		<option  value="C">C</option>
		<option  value="D">D</option>
		<option  value="E">E</option>
		</select>
	</td>
	<td><input type="text" name="student_father_name[]" class="" title="yashi" value="pushpendra"></td>
	<td><input type="text" name="student_mother_name[]" class="" title="yashi" value="pinki"></td>
	<td><input type="date" name="student_date_of_admission[]" class="" title="yashi" value="2022-05-19" style="width:130px;"></td>
	<td><input type="date" name="student_date_of_birth[]" class="" title="yashi" value="2019-05-11" style="width:130px;"></td>
	<td><input type="text" name="student_address[]" class="" title="yashi" value="dehra milak" style="width:130px;"></td>
	
	<td>
    <select name="student_admission_scheme[]" title="yashi">
    <option selected value="NON-RTE">NON-RTE</option>
    <option  value="RTE">RTE</option>
    </select>
    </td>
	
	<td>
	<select name="student_identity_category[]" style="width:60px;" title="yashi">
		<option selected value="Commerce ">Commerce </option>
		<option  value="Science">Science</option>
		<option  value="Arts">Arts</option>
		</select>
	</td>  
	
	
	<td>
	    <input style="width:90px;" type ="text" name="student_father_contact_number[]" title="yashi" value="8430555580">
	</td>
	
	<td>
    <select name="student_fee_category[]" title="yashi">
        <option  value="Non- RTE|?|category1">Non- RTE</option>
        <option selected value="New |?|category2">New </option>
        <option  value="Oid |?|category3">Oid </option>
        <option  value="Science|?|category4">Science</option>
        <option  value="RTE|?|category5">RTE</option>
        <option  value="sibling|?|category6">sibling</option>
        </select>
	</td>
	
	<td>
	<select name="student_bus[]" id="student_bus_19" onchange="for_route('19');" title="yashi">
	<option  value="No">No</option>
	<option selected value="Yes">Yes</option>
	</select>
	</td>
	
	
	<td>
	<select name="student_bus_route[]" id="student_bus_route_19" onchange="for_stop('19');" title="yashi">
	<option value="">Select</option>
		<option  value="1 - KURHA">1 - KURHA</option>
		<option  value="80feet thana">80feet thana</option>
		<option  value="khandari">khandari</option>
		</select>
	</td>
	<td>
	<select name="bus_fee_category_name[]" id="bus_fee_category_name_19" onchange="for_no('19');" title="yashi">
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
	<input type="hidden" name="student_bus_no[]" id="student_bus_no_19" value="" />
	</td>
	<td><input type="text" name="student_admission_number[]" class="" title="yashi" value="" style="width:60px;"></td>
	<td><input type="text" name="school_roll_no[]" class="" title="yashi" value="17" style="width:60px;"></td>
	<td><input type="text" name="student_scholar_number[]" class="" title="yashi" value="" style="width:60px;"></td>
	<td>
	<select name="student_gender[]" style="width:60px;" title="yashi">
	<option value="Male">Male</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="student_category[]" style="width:60px;" title="yashi">
	  <option value=""></option>
	  <option value="General">General</option>
	  <option value="OBC">OBC</option>
	  <option value="SC">SC</option>
	  <option value="ST">ST</option>
	  <option value="Other">Other</option>
	</select>
	</td>
	
	<td><input type="text" name="student_caste[]" class="" title="yashi" value="" style="width:100px;"></td>
	<td><input type="text" name="bpl_card_no[]" class="" title="yashi" value="" style="width:100px;"></td>
	<td><input type="text" name="income_certificate_no[]" class="" title="yashi" value="" style="width:100px;"></td>
	<td><input type="text" name="caste_certificate_no[]" class="" title="yashi" value="" style="width:100px;"></td>
	<td><input type="text" name="student_blood_group[]" class="" title="yashi" value="" style="width:100px;"></td>
	
		<td>
	<select name="blank_field_4[]"  title="yashi">
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