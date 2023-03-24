@include('common.header')
@include('common.navbar')

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_reminder(s_no);
    } else {
        return false;
    }
}

function delete_reminder(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "reminder/reminder_teacher_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('reminder/reminder_teacher_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Reminder Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/reminder')}}"><i class="fa fa-history"></i> Reminder</a></li>
        <li><a><i class="fa fa-list"></i>Teacher Reminder List</a></li>
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
                    <h3 class="box-title">Teacher Reminder List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Teacher Name</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Subject</th>
                                <th>Allocated Date</th>
                                <th>Finsih Date</th>
                                <th>Reminder Task1</th>
                                <th>Reminder Task2</th>
                                <th>Reminder Task3</th>
                                <th>Reminder Task4</th>
                                <th> Reminder Task5</th>
                                <th>Remark</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classwork_plans as $remTeaPlan)
                            <tr>
                                <input type="hidden" class="delete_remTeaPlan_id" value="{{$remTeaPlan->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$remTeaPlan->name}}</td>
                                <td>{{$remTeaPlan->class_name}}</td>
                                <td>{{$remTeaPlan->section_name}}</td>
                                <td>{{$remTeaPlan->subject_info}}</td>
                                <td>{{$remTeaPlan->allocated_date}}</td>
                                <td>{{$remTeaPlan->finish_date}}</td>
                                <td>{{$remTeaPlan->reminder_task_1}}</td>
                                <td>{{$remTeaPlan->reminder_task_2}}</td>
                                <td>{{$remTeaPlan->reminder_task_3}}</td>
                                <td>{{$remTeaPlan->reminder_task_4}}</td>
                                <td>{{$remTeaPlan->reminder_task_5}}</td>
                                <td>{{$remTeaPlan->reminder_remark}}</td>
                                <td>
                                    <a href="{{ url('/edit-reminder-teacher-plan', $remTeaPlan->id)}}"
                                        class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletertpbtn">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- 
                        <tr'>
                            <td><button type="button" onclick="post_content('reminder/reminder_teacher_edit','id=73')"
                                    class="btn btn-success">Edit</button></td>
                            <td>
                                <button type="button" class="btn btn-danger"
                                    onclick="return valid('73');">Delete</button>
                            </td>
                        </tr> -->

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


<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deletertpbtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.delete_remTeaPlan_id').val();
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this account data !",
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
                        url: "/delete-reminder-teacher-plan/" + delete_id,
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
                    // } else {
                    //     swal("Your imaginary file is safe!");
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