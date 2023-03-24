@include('common.header')
@include('common.navbar')
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">


<script>
    @if (session('message'))
        swal("Data Insert!", "updated successfully!", "success")
</script>
{{ session('message') }}
@endif

@if (session('update'))
    <script>
        swal("Data Update!", "data update successfully!", "success")
    </script>
    {{ session('update') }}

@endif

<script>
    function valid(s_no) {
        var myval = confirm("Are you sure want to delete this record !!!!");
        if (myval == true) {
            delete_hostel(s_no);
        } else {
            return false;
        }
    }

    function delete_hostel(s_no) {
        $.ajax({
            type: "POST",
            url: access_link + "hostel/employee_delete.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Deleted', 'green');
                    get_content('hostel/employee_list');
                } else {
                    //alert_new(detail);
                }
            }
        });
    }
</script>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Hostel Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>

        <li><a href="javascript:get_content('hostel/staff')"><i class="fa fa-bed"></i> Hostel Staff</a></li>
        <li class="Active">Staff List</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Employee List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Employee Name</th>
                                <th>Photo</th>
                                <th>Contact No.</th>
                                <th>Designation</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_show as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->emp_name }}</td>
                                    <td><img src="" height="50" width="50">{{ $data->emp_photo }}</td>
                                    <td>{{ $data->emp_mobile }}</td>
                                    <td>{{ $data->emp_designation }}</td>

                                    <td>
                                        <a href="{{ url('hostel-staff-edit/' . $data->id) }}"> <button type="button"
                                                class="btn btn-success">Edit</button></a>
                                                <button type="button" class="btn btn-danger" onclick="delete_room({{ $data->id }})">Delete</button>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>


<script>
    $(function() {
        $('#example1').DataTable()
    })
</script>

{{-- ajax sweet alert delete function --}}
<script>
    function delete_room(id) {
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
                        url: '{{ url('/hostel-staff-list-del') }}/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    });
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    // location reload();
                    $("#example1").load(window.location.href + " #example1");
                } else {
                    swal("Your imaginary file is safe!");
                }
            });

    }
</script>
@include('common.footer')
