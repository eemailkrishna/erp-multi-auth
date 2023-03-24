@include('common.header')
@include('common.navbar')

<script>
function form_submit() {
    $.ajax({
        type: "POST",
        url: access_link + "school_info/add_stream_group_api.php",
        data: $("#my_form").serialize(),
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[2] == 'ok') {
                get_content('school_info/add_stream_group');
            } else {
                alert_new("More Than 10 Group Can Not Be Add !!!", "red");
                get_content('school_info/add_stream_group');
            }
        }
    });
}

function group_delete(data) {
    $.ajax({
        type: "POST",
        url: access_link + "school_info/group_delete.php?" + data,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                get_content('school_info/add_stream_group');
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
        <li class="active">Add Class</li>
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
                                    <th>Choose Stream</th>
                                    <th>Add Group</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control" name=" stream_name1">
                                            <option value="LLB">LLB</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="button" onclick="form_submit();" value="Add Group"
                                            class="btn btn-success" />
                                    </td>

                                </tr>

                            </tbody>

                        </table>
                    </div>

                    <div class="col-md-6 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Added Stream</th>
                                    <th>Added Group</th>
                                    <th>Deleted Group</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr align='center'>

                                    <th>1</th>
                                    <th>LLB</th>
                                    <th>Group-A,Group-B,Group-C,Group-D,Group-E,Group-F,Group-G</th>

                                    <th><button type="button" class="btn btn-success"
                                            onclick="group_delete('id=1&stream_group=7&stream_code=stream1')">Delete
                                    </th>
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
@include('common.footer')