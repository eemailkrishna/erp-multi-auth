@include('common.header')
@include('common.navbar')

<table id="" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>S No</th>
            <th>Student Name</th>
            <th>Father Name</th>
            <th><input type="checkbox" id="all_check" onclick="for_check(this.id);" checked></th>
        </tr>
    </thead>

    <tbody>
    </tbody>

</table>
@include('common.footer')

<script>
$(function() {
    $('#example3').DataTable()
})
</script>