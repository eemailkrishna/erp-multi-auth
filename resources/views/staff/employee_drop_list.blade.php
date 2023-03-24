@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- {{-- <script>
    function valid(s_no) {
        var myval = confirm("Are you sure want to delete this record !!!!");
        if (myval == true) {
            delete_employee(s_no);
        } else {
            return false;
        }
    }

    function delete_employee(s_no) {
        $.ajax({
            type: "POST",
            url: access_link + "staff/employee_delete.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Deleted', 'green');
                    get_content('staff/employee_drop_list');
                } else {
                    alert_new('Sorry!!! Some Error Occured', 'red');
                }
            }
        });
    }

    function for_rejoin(s_no) {
        var myval = confirm("Are you sure you want to Re-Join this Employee !!!!");
        if (myval == true) {
            for_rejoin11(s_no);
        } else {
            return false;
        }
    }

    function for_rejoin11(s_no) {
        $.ajax({
            type: "POST",
            url: access_link + "staff/employee_rejoin.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Completed', 'green');
                    get_content('staff/employee_drop_list');
                } else {
                    alert_new('Sorry!!! Some Error Occured', 'red');
                }
            }
        });
    }

    function open_file1(image_type, emp_id) {
        $.ajax({
            address: "POST",
            url: access_link + "staff/ajax_open_image.php?image_type=" + image_type + "&emp_id=" + emp_id + "",
            cache: false,
            success: function(detail) {
                $("#mypdf_view").html(detail);
            }
        });
    }

    function for_edit(s_no, drop_date) {
        $('#s_no').val(s_no);
        $('#drop_date').val(drop_date);
    }

    $("#my_form").submit(function(e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $("#myModal_close").click();
        $.ajax({
            url: access_link + "staff/employee_drop_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {

                    $('#myModal').modal('hide');

                    get_content('staff/employee_drop_list');
                }
            }
        });
    });
</script> --}} -->
<section class="content-header">
    <h1>Employee Management <small>Control Panel</small></h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
        <li class="active">Employee List</li>
    </ol>
</section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">


            <!-- /.box -->

            <div <div class="box box-success">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.NO.</th>
                                <th>Employee Name</th>
                                <!-- <th></th> -->
                                <th>Contact No.</th>
                                <th>Designation</th>
                                {{-- <th>Drop Date</th>ss --}}

                                <th>Update By</th>
                                <th>Date</th>

                                <th>Print</th>
                                <th style="display:none;">Edit</th>
                                {{-- <th>Re - join</th> --}}
                                <th>Delete</th>
                                {{-- <th>Drop Date</th> --}}
                            </tr>
                        </thead>
                        <tbody id="tbody">

                            <tr>
                                <!-- {{-- @if (count($data) > 0) --}} -->
                                @foreach ($data as $emp_drop)
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $emp_drop->emp_name }}</td>
                                    <td>{{ $emp_drop->emp_mobile_new }}</td>
                                    <td>{{ $emp_drop->emp_designation }}</td>
                                    <td></td>
                                    <td></td>

                                    <td><button type="button" class="btn btn-success"
                                            onclick="window.print()">Print</button></a></td>
                                    <td style="display:none;"><button type="button"
                                            onclick="post_content('staff/employee_edit','s_no=262')"
                                            class="btn btn-success">Edit</button></td>
                                    <td><button type="button" class="btn btn-danger deletebtn1  "
                                            onclick="delete_staff({{ $emp_drop->id }})">Delete</button></td>
                                    <!-- {{-- <td><button type="button" class="btn btn-success" onclick="for_edit('262','2022-02-09')" data-toggle="modal" data-target="#myModal">Change</button></td> --}} -->

                            </tr>
                            @endforeach

                            <!-- {{-- @endif --}} -->
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div id="mypdf_view">
            <div>
            </div>
            <!-- /.row -->
</section>

<div class="modal fade" id="myModal" role="dialog">
    <form role="form" method="post" enctype="multipart/form-data" id="my_form">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Drop Date</label>
                        <input type="date" name="drop_date" value="" id="drop_date"
                            class="form-control" />
                        <input type="hidden" name="s_no" id="s_no" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="finish" value="Edit" class="btn btn-success" />
                    <button type="button" class="btn btn-default" id="myModal_close"
                        data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </form>
</div>
@include('common.footer')

<script>
    $(function() {
        $('#example1').DataTable()
    })
</script>
{{-- // delete staff emp popup msg with sweet alert start--}}
<script>
    function delete_staff(id) {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '{{ url('/emp-delete') }}/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    });
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    // location reload();
                    $("#tbody").load(window.location.href + " #tbody");
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>
