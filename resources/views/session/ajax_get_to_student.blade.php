@include('common.header')
@include('common.navbar')
<table id="" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>S No</th>
            <th>Student Name</th>
            <th>Father Name</th>
            <th><input type="checkbox" id="all_check1" onclick="for_check(this.id);" checked></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Aashish</td>
            <td>Ramesh</td>
            <td> <input type="checkbox" checked value="2200758" class="all_check1" name="move_student_to[]">
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>raman</td>
            <td>tapan</td>
            <td> <input type="checkbox" checked value="2200770" class="all_check1" name="move_student_to[]">
            </td>
        </tr>
    </tbody>
</table>
@include('common.footer')

<script>
$(function() {
    $('#example3').DataTable()
})
</script>