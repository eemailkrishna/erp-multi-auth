@include('common.header')
@include('common.navbar')
<script>
    function for_search11() {

        var event_name = document.getElementById('event_name').value;
        if (event_name != '') {
            $('#for_student_list').html(loader_div);
            $.ajax({
                type: "POST",
                url: access_link + "event_management/ajax_team_creation_list.php?event_name=" + event_name + "",
                success: function(detail) {
                    //alert_new(detail);
                    $('#for_student_list').html(detail);
                }
            });

        } else {
            $('#for_student_list').html('');
        }
    }

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
</script>
<script>
    function valid(s_no) {
        var myval = confirm("Are you sure want to delete this record !!!!");
        if (myval == true) {
            for_fee(s_no);
        } else {
            return false;
        }
    }

    function for_fee(s_no) {
        $.ajax({
            type: "POST",
            url: access_link + "event_management/dlt_team_participants.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Deleted', 'green');
                    get_content('event_management/team_creation_list');
                } else {
                    //alert_new(detail); 
                }
            }
        });
    }


    function valid1(s_no) {
        var myval = confirm("Are you sure want to delete this record !!!!");
        if (myval == true) {
            for_fee1(s_no);
        } else {
            return false;
        }
    }

    function for_fee1(s_no) {
        $.ajax({
            type: "POST",
            url: access_link + "event_management/dlt_team_staff.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Deleted', 'green');
                    get_content('event_management/team_creation_list');
                } else {
                    //alert_new(detail); 
                }
            }
        });
    }
</script>

<section class="content-header">
    <h1>
        Team Creation List
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('event')}}"><i class="fa fa-calendar"></i>Event
                Management</a></li>
        <li class="active"><i class="fa fa-list"></i>Team Creation List</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
          
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <form method="post" id="my_form">
                <div class="box-body">
                    <div class="box-body table-responsive">
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">


                            <div class="col-md-12">
                                <div class="container-fluid">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <label>Events</label>
                                                <select name="event_name" class="form-control" id="event_name" required>


                                                    <option value="" selected>All</option>
                                                    @foreach ($add_teamcreations as $user)
                                                        <option value="{{ $user->id }}">{{ $user->event_name11 }}
                                                        </option>
                                                    @endforeach


                                                </select>
                                            </div>
                                            <div>&nbsp;</div>
                                            <div class="col-md-12">

                                                <div id="add-event" class="box-body table-responsive">


                                                    <div class="data1">
                                                        <table
                                                            class="table table-bordered table-striped table-responsive">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.No</th>

                                                                    <th>Event Name</th>
                                                                    <th>Gender</th>
                                                                    <th>Category</th>
                                                                    <th>Staff</th>
                                                                    <th>Action</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody id="tBody">
                                                                @foreach ($add_teamcreations as $user)
                                                                    <tr>

                                                                        <td>{{ $loop->iteration }}</td>

                                                                        <td>{{ $user->event_name11 }}</td>
                                                                        <td>{{ $user->gender11 }}</td>
                                                                        <td>{{ $user->category11 }}</td>
                                                                        <td>{{ $user->staff }}</td>
                                                                        <td>
                                                                            <button type="button"
                                                                                onclick="delete_function({{ $user->id }})"
                                                                                class="btn btn-info btn-sm">Delete</button>
                                                                        </td>
                                                                        <br>
                                                                    </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
            </form>

            <!---------------------------------------------End Participate form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script/getData.js"></script>
<script>
    $(document).ready(function() {
        // code to get all records from table via select box
        $("#event_name").change(function() {

            var id = $(this).find(":selected").val();

            if (id == '') {
                id = 'A'

            }
            $.ajax({
                url: '{{ url('/ajax_event_management/team_creation_list') }}/' + id,
                method: 'get',
                data: {
                    id: id
                },
                cache: false,
                success: function(employeeData) {

                    if (employeeData) {
                        var html = '';
                        var serial_no = 1;

                        if (employeeData.length > 0) {
                            for (var count = 0; count < employeeData.length; count++) {

                                html += '<tr>';
                                html += '<td>' + serial_no + '</td>';
                                html += '<td>' + employeeData[count].event_name11 + '</td>';
                                html += '<td>' + employeeData[count].gender11 + '</td>';
                                html += '<td>' + employeeData[count].category11 + '</td>';
                                html += '<td>' + employeeData[count].staff + '</td>';
                                html += '<td>'
                                        + '<button type="button" class="btn btn-info btn-sm" onclick="delete_function({{ $user->id }})">delete</button>'
                                        + '</td>';
                                
                                html += '</tr>';
                            }
                        }
                        $('#tBody').html(html);
                    } else {


                    }
                }
            });
        })
    });
</script>

<script>
    function delete_function(id) {

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this Record!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '/event_management/team_creation_list/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    })
                    swal("Poof! Your Entery has been deleted!", {
                        icon: "success",
                    });
                    $("#add-event").load(window.location.href + " #add-event");
                } else {
                    swal("Your Entery is safe!");
                }
            });
    }
</script>
