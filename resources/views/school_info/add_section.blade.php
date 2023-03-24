@include('common.header')
@include('common.navbar')
<script>
function form_submit() {

    $.ajax({
        type: "POST",
        url: access_link + "school_info/add_section_api.php",
        data: $("#my_form").serialize(),
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[2] == 'ok') {
                get_content('school_info/add_section');
            } else {
                alert_new("More Than 10 Section Can Not Be Add !!!", 'red');
                get_content('school_info/add_section');
            }
        }
    });
}

function section_delete(s_no, section) {
    $.ajax({
        type: "POST",
        url: access_link + "school_info/section_delete.php?id=" + s_no + "&section=" + section + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted!!!', 'green');
                get_content('school_info/add_section');
            } else {
                alert_new('There is Only 1 Section You Can not Delete', 'red');
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        School Information Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
        <li class="active"> Add Class</li>
    </ol>
</section>



<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Add Class</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">


                    <div class="col-md-6 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>Choose Class</th>
                                    <th>Add Section</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control" name=" class_section">
                                            <option value="NURSERY">NURSERY</option>
                                            <option value="LKG">LKG</option>
                                            <option value="UKG">UKG</option>
                                            <option value="1ST">1ST</option>
                                            <option value="2ND">2ND</option>
                                            <option value="3RD">3RD</option>
                                            <option value="4TH">4TH</option>
                                            <option value="5TH">5TH</option>
                                            <option value="6TH">6TH</option>
                                            <option value="7TH">7TH</option>
                                            <option value="8TH">8TH</option>
                                            <option value="9TH">9TH</option>
                                            <option value="10TH">10TH</option>
                                            <option value="11TH">11TH</option>
                                            <option value="12TH">12TH</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="button" name="add_section" onclick="form_submit();"
                                            value="Add Section" class="btn btn-success" />
                                    </td>

                                </tr>

                            </tbody>

                        </table>
                    </div>

                    <div class="col-md-6 box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Added Class</th>
                                    <th>Added Section</th>
                                    <th>Delete Section</th>
                                </tr>
                            </thead>



                            <tbody>
                                <tr align='center'>

                                    <th>1</th>
                                    <th>NURSERY</th>
                                    <th>A,B,C,D</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('NURSERY','4');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>2</th>
                                    <th>LKG</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('LKG','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>3</th>
                                    <th>UKG</th>
                                    <th>A,B</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('UKG','2');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>4</th>
                                    <th>1ST</th>
                                    <th>A,B,C</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('1ST','3');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>5</th>
                                    <th>2ND</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('2ND','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>6</th>
                                    <th>3RD</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('3RD','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>7</th>
                                    <th>4TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('4TH','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>8</th>
                                    <th>5TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('5TH','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>9</th>
                                    <th>6TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('6TH','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>10</th>
                                    <th>7TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('7TH','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>11</th>
                                    <th>8TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('8TH','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>12</th>
                                    <th>9TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('9TH','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>13</th>
                                    <th>10TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('10TH','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>14</th>
                                    <th>11TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('11TH','1');">Delete</button< /th>
                                </tr>


                            <tbody>
                                <tr align='center'>

                                    <th>15</th>
                                    <th>12TH</th>
                                    <th>A</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="section_delete('12TH','1');">Delete</button< /th>
                                </tr>
                            </tbody>

                        </table>
                    </div>


            </div>


            </form>
        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>
</section>
<script>
$(function() {
    $('#example1').DataTable()
})
</script>
@include('common.footer')