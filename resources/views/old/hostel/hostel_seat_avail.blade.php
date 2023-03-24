@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<section class="content-header">
    <h1>
        Hostel Seat Management <small> Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
        <li class="active">Hostel List</a></li>
    </ol>
</section>

<script>
    function hostel_detail(value) {
        $("#bed_detail").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "hostel/seat_avail.php?hostel_name=" + value + "",
            cache: false,
            success: function(detail) {
                $("#bed_detail").html(detail);
            }
        });
    }
</script>

<!---*****************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Seat Availability</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form method="post">
                    <div class="col-md-12">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Hostel</label>
                                <select name="hostel_name" id="hostel_name" class="form-control">
                                    <option value=''>Select</option>
                                    @if(count($users) > 0)
                                  @foreach ($users as $list)
                                  <option value='{{ $list->id }}'>{{ $list->hostal_name }}</option>
                                  @endforeach
                                  @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="col-md-12" id="bed_detail">

                    </div>
            </div>
            </form>
        </div>
        <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>S.no.</th>
                    <th>Hostel Name</th>
                    <th>Hostel type</th>
                    <th>No.of Room</th>
                    <th>Total Capacity</th>
                    <th>Seat Availability</th>
                    <th>Action</th>
                </thead>
                <tbody id="tbody">
                    @foreach ($users as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->hostal_name }}</td>
                            <td>{{ $item->hostal_type }}</td>
                            <td>{{ $item->hostal_no_of_room }}</td>
                            <td>{{ $item->hostal_total_capacity}}</td>
                            <td>{{ $item->seat_availablity}}</td>
                            <td><button type="submit" class="btn btn-primary">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->


    </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#hostel_name").on('change', function() {
            var value = $(this).val();
            $.ajax({
                url: "{{ route('seatavailable') }}",
                type: "GET",
                data: {
                    'hostel_name': value
                },
                success: function(data) {
                    var users = data.users;
                    var html = '';
                    if (users.length > 0) {
                        for (let i = 0; i < users.length; i++) {
                            html += '<tr>\
                <td> ' + users[i]['id'] + ' </td>\
                <td> ' + users[i]['hostal_name'] + ' </td>\
                <td> ' + users[i]['hostal_type'] + ' </td>\
                <td> ' + users[i]['hostal_no_of_room'] + ' </td>\
                <td> ' + users[i]['hostal_total_capacity'] + ' </td>\
                <td> ' + users[i]['seat_availablity'] + ' </td>\
                <td>\
                    <a href=""<button type="submit" class="btn btn-primary">Edit</button></a>\
                <button type="button" onclick="delete_staff()" class="btn btn-danger deletebtn1">Delete</button>\
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

<script>
    $(function() {
        $('#example1').DataTable()

    })
</script>
@include('common.footer')
