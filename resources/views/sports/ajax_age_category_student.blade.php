@include('common.header')
@include('common.navbar')

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
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>All<br /><input type="checkbox" id="checked1" checked value="" name=""
                        onclick="for_check(this.id);"></th>
                <th>S No.</th>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Gender</th>
                <th>Addm No</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>DOB</th>
                <th>Age Category</th>
                <th style="width:200px;">Actual Age As Per In(YY-MM-DD)</th>
            </tr>
        </thead>
        <tbody>

            <tr align='center'>
                <td><input type="checkbox" class="checked1" checked value="0" name="student_index[]"></td>
                <td>1</td>
                <td>lali</td>
                <td>LKG</td>
                <td>A</td>
                <td>Male</td>
                <td></td>
                <td></td>
                <td></td>
                <td>2022-01-28</td>
                <td>Under 1</td>
                <td>0 Years 10 Month 11 Days</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-12">
    <center><button type="button" class="btn btn-success"
            onclick="post_content('sports/download_category_list','age_category=1&student_class=All&gender=All&date_search=2022-12-05')">Print</button>
    </center>
</div>
@include('common.footer')

<script>
$(function() {
    $('#example1').DataTable()
})
</script>