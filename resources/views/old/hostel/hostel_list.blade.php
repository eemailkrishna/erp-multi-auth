@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
            url: access_link + "hostel/hostel_dlt.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Deleted', 'green');
                    get_content('hostel/hostel_list');
                } else {
                    //alert_new(detail);
                }
            }
        });
    }
</script>
<section class="content-header">
    <h1>
        Hostel Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
        <li class="active">Hostel List</a></li>
    </ol>
</section>

<!---***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Student Hostel List</h3>
                    <a href="{{ url('hostel-detail') }}"><button type="button" class="btn btn-success">Add
                            Hostel</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Hostel Name</th>
                                <th>Hostel type</th>
                                <th>No. of Room</th>
                                <th>Total Capacity</th>
                                <th>Facilities</th>
                                <th>Laundry Services</th>
                                <th>Mess</th>
                                <th>Warden Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach ($hostal as $list)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $list->hostal_name }}</td>
                                    <td>{{ $list->hostal_type }}</td>
                                    <td>{{ $list->hostal_no_of_room }}</td>
                                    <td>{{ $list->hostal_total_capacity }}</td>
                                    <td>{{ $list->hostal_facilities }}</td>
                                    <td>{{ $list->hostal_laundary_services }}</td>
                                    <td>{{ $list->hostal_mess }}</td>
                                    <td>{{ $list->hostal_warden_name }}</td>
                                    <td>

                                        <a href="{{ url('hostel-edit-list/'.$list->id) }}"><button type="button" onclick="post_content('hostel/hostel_details','id=18')"
                                            class="btn btn-success">Edit</button></a>
                                      <button type="button" class="btn btn btn-danger deletebut" onclick="deletebut({{ $list->id }});">Delete</button>
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

<script>
    function deletebut(id){
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
                        url: '{{ url('/hostel-list') }}/' + id,
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
