<table id="example1" class="table table-bordered table-striped">
		<thead class="my_background_color">
		<tr>
	    <th>All<br/><input type="checkbox" id="checked1" checked value="" name="" onclick="for_check(this.id);"></th>
	    <th>S No.</th>
        <th>Participate Type</th>
        <th>Name Of Event</th>
        <th>Name Of Participants</th>
        <th>Class & Section</th>
        <th>Gender</th>
        <th>School/Institute Name</th>
        <th>Category</th>
        <th>House Name</th>
        <th style="width:150px;">Result Remarks</th>
        </tr>
        </thead>
        <tbody>
		  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="0" name="student_index[]"></td>
    <td>1</td>
	<td><input type="text" value="Scholar" name="participate_type[]" class="form-control" style="border:none;" readonly></td>
	<td><input type="text" value="DIWALI FESTIWAL" name="event_name[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="DAKSH YADAW" name="student_name[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="5TH(A)" name="student_class[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="Male" name="gender[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="SIMPTION TECH PVT LTD" name="school_name[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="dancing" name="category[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" value="" name="house_name[]" class="form-control" style="border:none;" readonly><input type="hidden" value="0000-00-00" name="dateofbirth[]" class="form-control" style="border:none;" readonly><input type="hidden" value="2020_21" name="session_value[]" class="form-control" style="border:none;" readonly></td>
    <td><input type="text" name="remark[]" class="form-control type_data" oninput="data_fill(this.value);"></td>
  </tr>
	     </tbody>
     </table>
	 <div class="col-md-12">
		<center><input type="submit" name="finish" value="Submit" onclick="return validation();" class="btn  btn-success"/></center> 
	 </div>
	 
<script>
$(function () {
    $('#example2').DataTable()
    $('#example1').DataTable({
      'paging'      : false,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
 })
</script>