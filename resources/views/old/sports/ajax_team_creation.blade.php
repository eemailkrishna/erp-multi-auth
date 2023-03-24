<style>
#staff_company {
    padding: 15px;
    width: 100%;
    height: 300px;
    overflow: scroll;
    border: 1px solid #ccc;
}
</style>
<div id="staff_company">
<table id="example2" class="table table-bordered table-striped">
	<thead >
		<tr>
	    <th>All<br/><input type="checkbox" id="checked1" checked value="" name="" onclick="for_check(this.id);"></th>
	    <th>S No.</th>
        <th>Name</th>
        <th>Class & Section</th>
        <th>Addm No</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Dob</th>
        <th>Board Reg No</th>
       </tr>
	</thead>
	<tbody>
  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="0" name="student_index[]"></td>
    <td>1</td>
	<td><input type="text" value="ashok gahlot" name="student_name[]" class="form-control" style="border:none;" readonly></td>
	<td><input type="text" value="NURSERY" name="student_class[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="" name="student_admission_number[]" class="form-control" style="border:none;" readonly></td>
	<td><input type="text" value="s k gahlot" name="student_father_name[]" class="form-control" style="border:none;" readonly></td>
	<td><input type="text" value="Raani gahlot" name="student_mother_name[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="2000-11-01" name="dateofbirth[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="456" name="board_no[]" class="form-control" style="border:none;" readonly><input type="hidden" value="2018_19" class="form-control" name="session_value[]">
	 <input type="hidden" value="" class="form-control" name="sports_type[]"><input type="hidden" value="Under 19 Year" class="form-control" name="age_category[]"></td>
  </tr>
	</tbody>
</table>
</div>

<script>
$(function(){
$('#example2').DataTable()
})

$(function () {
$('.select2').select2()
})
</script>