@include('common.header')
@include('common.navbar')
<table id="example1" class="table table-bordered table-striped">
<thead class="my_background_color">
<tr>
  <th>S.no.</th>
  <th>Name</th>
  <th>Father's Name</th>
  <th>Date</th>
  <th><input type="checkbox" id="info" value="" checked onclick="for_check(this.id);" />All</th>
</tr>
</thead>
<tbody>

</tbody>
<tfoot>
<tr>
  <td colspan="5"><center><input type="submit" name="finish" value="Send SMS" onclick="return validate();" class="btn  btn-success" /></center></td>
</tr>
</tfoot>
</table>
@include('common.footer')

