@include('common.header')
@include('common.navbar')


<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        for_delete(s_no);
    } else {
        return false;
    }
}

function for_delete(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "sports/delete_participate.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('sports/participate_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Sports Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/sports')}}" #><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li><i class="fa fa-list"></i> Participate List</li>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->
          
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Participation List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="overflow-x:scroll;width:100%;">
                    <table id="example1" class="table table-bordered table-striped text-center" style="height:100px;">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Class/Sec</th>
                                <th>Gender</th>
                                <th>Roll No</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Dob</th>
                                <th>Age Category</th>
                                <th>Actual Age </th>
                                <th>Contact</th>
                                <th>Sports Name</th>
                                <th>Board Reg No</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $player)
                            <tr>
                                <input type="hidden" class="delete_participate_id" value="{{$player->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$player->name}}</td>
                                <td>{{$player->class_name}} ({{$player->section_name}})</td>
                                <td>{{$player->gender}}</td>
                                <td>{{$player->roll_no}}</td>
                                <td>{{$player->father_name}}</td>
                                <td>{{$player->mother_name}}</td>
                                <td>{{$player->dob}}</td>
                                <td>Under {{$player->age_category}} years</td>
                                <td>{{$player->actual_age}}</td>
                                <td>{{$player->phone_number}}</td>
                                <td>{{$player->sports_name}}</td>
                                <td>{{$player->board_reg_no}}</td>
                                <td>
                                    <a href="{{ url('/delete-participate', $player->id)}}"
                                        class="btn btn-danger deleteparticipatebtn">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="col-md-12">
                <center><button type="button" class="btn btn-success" onclick="for_print()">Print</button></center>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@include('common.footer')

<script>
$(function() {
    @if(Session::has('success'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
    }
    toastr.success("{{ session('success') }}")
    @endif
});
</script>

<!-- /.content -->
<script>
function for_print() {
    var divToPrint = document.getElementById("example1");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>

<script>
$(function() {
    $('#example1').DataTable()
})
</script>
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deleteparticipatebtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.delete_participate_id').val();
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this homework data !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    var data = {
                        "_token": $('input[name=_token]').val(),
                        "id": delete_id,
                    };
                    $.ajax({
                        type: "get",
                        url: "/delete-participate/" + delete_id,
                        data: data,
                        success: function(response) {
                            swal(response.status, {
                                    icon: "success",
                                })
                                .then((result) => {
                                    location.reload();
                                });
                        }
                    });
                }
            });
    });
});
</script>
<!-- --------------------------------------For-Toast------------------------------ -->
