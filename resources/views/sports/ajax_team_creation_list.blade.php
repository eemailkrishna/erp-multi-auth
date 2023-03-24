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
        <thead>
            <tr>
                <th>S No.</th>
                <th>Name</th>
                <th>Class</th>
                <th>Adm/Sch No</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>D.O.B</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr align='center'>
                <td>1</td>
                <td>akshada yadav</td>
                <td>5TH</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td>2019-12-12</td>
                <td><button type="button" class="btn btn-default" onclick="return valid('11');">Delete</button></td>
        </tbody>
    </table>
</div>
<div class="col-md-12">
    <center><button type="button" class="btn btn-success" target="_blank"
            onclick="post_content('sports/download_team_creation','sports_name=All');">Print</button></center>
</div>

<script>
$(function() {
    $('#example2').DataTable()
    $('#example1').DataTable()
})

$(function() {
    $('.select2').select2()
})
</script>