@include('common.header')
@include('common.navbar')
<meta name="_token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
{{-- <script src=
"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
  </script> --}}

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
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
                    get_content('staff/employee_list');
                } else {
                    alert_new('Sorry!!! Some Error Occured', 'red');
                }
            }
        });
    }

    function for_drop(s_no) {
        var myval = confirm("Are you sure you want to Drop this Employee !!!!");
        if (myval == true) {
            for_drop11(s_no);
        } else {
            return false;
        }
    }

    function for_drop11(s_no) {
        $.ajax({
            type: "POST",
            url: access_link + "staff/employee_drop.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Completed', 'green');
                    get_content('staff/employee_list');
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

    function fill_detail() {

        var emp_id = document.getElementById('employee_id').value;
        $.ajax({
            type: "POST",
            url: access_link + "staff/ajax_get_emp_detail.php?emp_id=" + emp_id + "",
            cache: false,
            success: function(detail) {

                console.log(detail);

                $("#emp_detail_list").html(detail);
            }
        });

    }
</script>

{{-- Start if condtion  --}}

@if (session()->has('update'))
    <div class="alert alert-success">
        <button type="sumbit" class="close" data-dismiss="alert">X</button>
        <strong>{{ session()->get('update') }}</strong>
    </div>
@elseif (session()->has('Delete'))
    <div class="alert alert-success">
        <button type="sumbit" class="close" data-dismiss="alert">X</button>
        <strong>{{ session()->get('Delete') }}</strong>
    </div>
@endif
{{-- end if condition --}}
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

            <div class="box box-success">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">

                    <div class="col-md-4 col-md-offset-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Search Employees <font size="2" style="font-weight: normal;"></label>

                                {{-- <select name="" class="form-control select2" onchange="fill_detail();"
                                    id="emp_search"> --}}
                                {{-- <input type="search"  placeholder="Search..." name="search" class="form-control select2" id="search" > --}}
                                <select name="search" class="form-control select2" id="search">
                                    <option value=" ">All</option>
                                    @if (count($users) > 0)
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->emp_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.NO.</th>
                                <th>Employee Name</th>
                                <th>Contact No.</th>
                                <th>D.O.B.</th>
                                <th>Designation</th>
                                <th>Update By</th>
                                <th>Date</th>
                                <th>Joining Letter</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="tbody">
                            @if (count($users) > 0)
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}
                                            <!-- {{-- <td>{{ $user->id }}</td> --}} -->
                                        <td>{{ $user->emp_name }}</td>
                                        <td>{{ $user->emp_mobile_new }}</td>
                                        <td>{{ $user->emp_dob }}</td>
                                        <td>{{ $user->emp_designation }}</td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $user->emp_doj }}</td>
                                        <td>
                                            <a href="{{ url('emp-edit/' . $user->id) }}"><button type="submit"
                                                    class="btn btn-primary">Edit</button></a>
                                            <a href="{{ url('/Emp-Drop') }}"><button type="submit"
                                                    class="btn btn-success">Drop</button></a>

                                            <button type="button" onclick="delete_staff({{ $user->id }})"
                                                class="btn btn-danger deletebtn1">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div>
        </div>
</section>
{{-- ajax filter list query --}}
<script>
    $(document).ready(function() {
        $("#search").on('change', function() {
            var value = $(this).val();
            $.ajax({
                url: "{{ route('emp-list') }}",
                type: "GET",
                data: {
                    'search': value
                },
                success: function(data) {
                    var users = data.users;
                    var html = '';
                    if (users.length > 0) {
                        for (let i = 0; i < users.length; i++) {
                            html += '<tr>\
                <td> ' + users[i]['id'] + ' </td>\
                <td> ' + users[i]['emp_name'] + ' </td>\
                <td> ' + users[i]['emp_mobile_new'] + ' </td>\
                <td> ' + users[i]['emp_dob'] + ' </td>\
                <td> ' + users[i]['emp_designation'] + ' </td>\
                <td> </td>\
                <td> </td>\
                <td> ' + users[i]['emp_doj'] + ' </td>\
                <td><a href="{{ url('emp-edit/' . '$user->id') }}"><button type="submit" class="btn btn-primary">Edit</button></a>\
                <a href="{{ url('/Emp-Drop') }}"><button type="submit" class="btn btn-success">Drop</button></a>\
                <button type="button" onclick="delete_staff({{ '$user->id'}})" class="btn btn-danger deletebtn1">Delete</button>\
                </td>\
                 </tr>'
                        }
                    } else {
                        html += '<tr>\
            <td colspan="10" style="color:red;" align="center">No data found</td>\
            </tr>';
                    }
                    $("#tbody").html(html);
                }
            });
        });
    });
</script>

{{-- <script>
    $(function() {
        var dataTable = $('#example1').DataTable({
            destroy: true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: access_link + "{{ url('staff.emp_list_fatch.php')}}",
                type: "post"
            }
        });
        $('#example1').DataTable()
    })
</script> --}}

<script>
    $(function() {
        Initialize Select2 Elements
        $('.select2').select2()

    })
</script>
<script>
    $(function() {
        $('#example1').DataTable()

    })
</script>
{{-- ajax sweet alert delete function --}}
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




@include('common.footer')
