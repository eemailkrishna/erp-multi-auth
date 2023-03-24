@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    window.scrollTo(0, 0);

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
            url: access_link + "hostel/room_dlt.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Deleted', 'green');
                    get_content('hostel/room_list');
                } else {
                    //alert_new(detail);
                }
            }
        });
    }
</script>
<section class="content-header">
    <h1>
        Hostel Management <small> Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
        <li class="Active"> Room List</li>
    </ol>
</section>

<!---******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Student Room List</h3>
                    <a href="{{ url('hostel-room-add-detail') }}"><button type="button" class="btn btn-danger"
                        data-toggle="modal" data-target="#modal-default">Add Room</button></a>
                        {{-- @foreach ($room_list as $data)
                            <a href="{{ url('hostel-room-detail/'.$data->id) }}"><button type="button" class="btn btn-danger">Add Room</button></a>
                            @endforeach --}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive" id="tbody">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S.no.</th>
                                        <th>Hostel</th>
                                        <th>Room No.</th>
                                        <th>Room Bed Type</th>
                                        <th>Facilities</th>
                                        <th>Attach Washroom</th>
                                        <th>Charges Per Student</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($item->hostal)
                                            {{ $item->hostal->hostal_name }}
                                            @endif
                                        </td>
                                        <td>{{ $item->hostal_room_no }}</td>
                                        <td>{{ $item->hostal_room_bed_type }}</td>
                                        <td>
                                            @if ($item->hostal)
                                            {{ $item->hostal->hostal_facilities }}
                                            @endif
                                        </td>
                                        <td>{{ $item->hostal_attach_washroom }}</td>
                                        <td>{{ $item->hostal_charge_per_student }}</td>

                                        <td> <a href="{{ url('hostel-room-edit-list/' . $item->id) }}"><button
                                            type="button" class="btn btn-success">Edit</button></a>
                                            <button type="button" onclick="delete_room({{ $item->id }})"
                                                class="btn btn-danger deletebtn1">Delete</button>
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
@include('common.footer')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                        url: '{{ url('/hostal-room-list-del') }}/' + id,
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



<script>
    $(function() {
        $('#example1').DataTable()
    })
</script>
