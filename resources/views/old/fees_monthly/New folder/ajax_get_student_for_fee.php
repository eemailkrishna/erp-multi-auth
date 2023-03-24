<h4 style="color:#d9534f;">Student Details:</h4>
<table id="example1" class="table table-bordered table-striped">
<thead class="my_background_color">
<tr>
<th><input type="checkbox" id="info" value="" checked onclick="for_check(this.id);" /> All</th>
<th>S No</th>
<th>Admission No.</th>
<th>Name</th>
<th>Father Name</th>
<th>Class (Sec)</th>
</tr>
</thead>
<tbody>
<tr>
<td><input type="checkbox" name="student_info[]" class="info" value="2200758|?|Aashish|?|NURSERY" checked /></td>
<td>1</td>
<td></td>
<td>Aashish</td>
<td>Ramesh</td>
<td>NURSERY (A)</td>
</tr>
</tbody>
</table>
<script>
$(function () {
$('#example1').DataTable()
})

</script>
  