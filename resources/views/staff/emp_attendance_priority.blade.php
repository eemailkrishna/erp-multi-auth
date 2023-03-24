@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Employee Attendance Register Priority
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-money"></i> Staff</a></li>
        <li class="active">Employee Attendance Register Priority</li>
    </ol>
</section>
<script>
    function for_check(id) {
        if ($('#' + id).prop("checked") == true) {
            $("." + id).each(function() {
                $(this).prop('checked', true);
            });
        } else {
            $("." + id).each(function() {
                $(this).prop('checked', false);
            });
        }
    }

    function validation() {
        var add = 0;
        $(".checked1").each(function() {
            if ($(this).prop("checked") == true) {
                add = add + 1;
            }
        });
        if (add > 0) {
            return true;
        } else {
            alert_new("Please Select Atleast One Employee !!!", 'red');
            return false;
        }
    }

    $("#my_form").submit(function(e) {
        e.preventDefault();
        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        loader();
        $.ajax({
            url: access_link + "staff/emp_attendance_priority_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {

                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Complete', 'green');
                    get_content('staff/emp_attendance_priority');
                }
            }
        });
    });
</script>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<form id="my_form" method="post" enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->

                <div <div class="box box-success">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <div class="col-sm-12">&nbsp;</div>
                        <div class="col-sm-12">

                            <div class="col-sm-2">
                                <div class="col-sm-12">
                                </div>
                                <div class="col-sm-12">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="container-fluid">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-sm-12">

                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <td>S.NO.</td>
                                                            <td><input type="checkbox" id="checked1"
                                                                    onclick="for_check(this.id);" checked> All</td>
                                                            <td>Empolyee Name</td>
                                                            <td>Attendance Priority</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="priority">
                                                        @foreach ($priority as $register)
                                                        <tr>
                                                                <td><b>{{ $loop->iteration }}</b><input type="hidden"
                                                                        name="emp_id[]" class="form-control"
                                                                        value="19" readonly /></td>
                                                                <td><input type="checkbox" class="checked1" checked
                                                                        value="0" name="emp_index[]"></td>
                                                                <td><input type="text" name="emp_name[]"
                                                                        class="form-control" value="{{ $register->emp_name }}"
                                                                        readonly /></td>
                                                                <td><input type="number"
                                                                        name="emp_attendance_priority[]"
                                                                        class="form-control" value=""
                                                                        placeholder="Priority" /></td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                    <tfoot>

                                                        <tr>
                                                            <td colspan="6">
                                                                <center><input type="submit" name="submit"
                                                                        value="Update" onclick="return validation();"
                                                                        class="btn btn-success" /></center>
                                                            </td>
                                                        </tr>

                                                    </tfoot>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
</form>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

    })
</script>
<script>
    $(function() {
        $('#example1').DataTable()
    })
</script>
@include('common.footer')
