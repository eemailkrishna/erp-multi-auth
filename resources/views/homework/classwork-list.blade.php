@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>
        Class Work Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('homework')}}"><i class="fa fa-book"></i> Classwork</a></li>
        <li class="active"><i class="fa fa-list"></i> Classwork List</li>
    </ol>
</section>

<!-- <script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_fee(s_no);
    } else {
        return false;
    }
}

function delete_fee(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "homework/classwork_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('homework/classwork_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}

function for_search() {
    var student_class = document.getElementById('student_class').value;
    var particular_date = document.getElementById('particular_date').value;
    if (student_class != '' && particular_date != '') {
        var pass_var = "student_class=" + student_class + "&particular_date=" + particular_date;
    } else {
        if (student_class != '') {
            var pass_var = "student_class=" + student_class;
        } else if (particular_date != '') {
            var pass_var = "particular_date=" + particular_date;
        } else {
            var pass_var = "";
        }
    }
    post_content('homework/homework_list', pass_var);
}
</script> -->


<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-body">

                    <div class="box-header with-border">
                        <h3 class="box-title">Classwork List</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="col-md-8 col-md-offset-2">

                        <body>
                            <form action="" method="get">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <select name="class" id="class" class="form-control">
                                            <option value="">Select Class</option>
                                            @if (!empty($classes))
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Subject Name</label>
                                        <select name="subject" id="subject" class="form-control">
                                            <option value="">Select subject</option>
                                            @if (!empty($subjects))
                                            @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->subject_info }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Particular Date</label>
                                        <input type="date" name="classwork_date" id="classwork_date"
                                            class="form-control" value="" />
                                    </div>
                                </div>

                               
                                <center><button type="submit" class="btn btn-primary">Search</button></center>

                            </form>
                            <br>

                            <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label>Class</label>
                                <select name="student_class" id="student_class" class="form-control"
                                    onchange="for_search();">
                                    <option value="">Select Class</option>
                                    @if (!empty($classes))
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Particular Date</label>
                                    <input style="size:40px;" type="date" name="particular_date" id="particular_date"
                                         class="form-control" oninput="for_search();" value="" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Updated By</label>
                                    <select name="update_by" class="form-control new_student" id="update_by"
                                        onchange="for_search();">
                                        <option value="">All User</option>
                                        <option value="000@GMAIL.COM">000@GMAIL.COM</option>
                                        <option value="00@GMAIL.COM">00@GMAIL.COM</option>
                                        <option value="22188689@SJ.COM">22188689@SJ.COM</option>

                                    </select>
                                </div>
                            </div>-->
                        </body>
                    </div>
                </div>
            </div>
            <br>
            <div class="box box-success ">
                <div class="box-header with-border">
                    <h3 class="box-title" style="color:teal;">Classwork List</h3>
                </div>
                <br>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Subject</th>
                                <th>Classwork</th>
                                <th>Date</th>
                                <th>Remark</th>
                                <th>File</th>
                                <!-- <th>Update By</th> -->
                                <th>Update Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classworks as $cw)
                            <tr>
                                <input type="hidden" class="delete_classwork_id" value="{{$cw->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$cw->class_name}}</td>
                                <td>{{$cw->section_name}}</td>
                                <td>{{$cw->subject_info}}</td>
                                <td>{{$cw->classwork_write}}</td>
                                <td>{{$cw->classwork_date}}</td>
                                <td>{{$cw->classwork_remark}}</td>
                                <td>
                                    <img src="{{asset('images/homeworks/'.$cw->classwork_image)}}" width="60px"
                                        height="50px" alt="">
                                </td>
                                <!-- <td>{{$cw->classwork_image}}</td> -->
                                <!-- <td>{{$cw->updateBy}}</td> -->
                                <td>{{$cw->updated_at}}</td>
                                <td>
                                    <a href="{{ url('/edit-classwork', $cw->id)}}" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deleteclassworkbtn">Delete</button>
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
    $('.table').DataTable()
})
</script>
@include('common.footer')
<!-- /.content -->

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



<script>
function for_search() {
    var student_class = document.getElementById('-----------------------------------').value;
    var particular_date = document.getElementById('particular_date').value;
    var update_by = document.getElementById('update_by').value;
    var pass_var = "student_class=" + student_class + "&particular_date=" + particular_date + "&update_by=" +
        update_by;

    var dataTable = $('#example1').DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "homework/classwork-list" + pass_var,
            type: "post"
        }
    });
}
for_search();
</script>

<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deleteclassworkbtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.delete_classwork_id').val();
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
                        url: "/deletecw/" + delete_id,
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

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});

$(document).ready(function() {
    $("#class").change(function() {
        var class_id = $(this).val();
        if (class_id == "") {
            var class_id = 0;
        }
    });
});
</script>
<!-- --------------------------------------For-Toast------------------------------ -->
<script>
$(function() {
    var timeout = 3000; // in miliseconds (3*1000)
    $('.alert').delay(timeout).fadeOut(400);
});
</script>