@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function for_subject(value) {
    $.ajax({
        address: "POST",
        url: access_link + "important_ajax/get_subject_all.php?class_name=" + class_name + "",
        cache: false,
        success: function(detail) {
            $("#subject").html(detail);
        }
    });
}


function for_subject(value) {
    $.ajax({
        address: "POST",
        url: access_link + "smartclass/ajax_get_subject_without_stream.php?value=" + value + "",
        cache: false,
        success: function(detail) {
            $("#subject_name").html(detail);
            //for_list();
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Homework Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="{{url('smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="{{url('homework')}}"><i class="fa fa-book"></i> Homework</a></li>
        <li class="active"><i class="fa fa-list"></i> Homework List</li>
    </ol>
</section>

<script>
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
        url: access_link + "smartclass/homework_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted!!!', 'green');
                get_content('smartclass/homework_list');
            } else {
                alert_new('Sorry!!! Some error occured', 'red');
            }
        }
    });
}
</script>
<section class="content">
    <div class="box box-success ">
        <br>
        <div class="box-body">
            <div class="col-md-8 col-md-offset-2">

                <body>
                    <form action="" method="get">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Class</label>
                                <select name="class" id="class" class="form-control">
                                    <option value="">All</option>
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
                                <input type="date" name="homework_date" id="homework_date" class="form-control"
                                    value="" />
                            </div>
                        </div>

                        
                        <center><button type="submit" class="btn btn-primary">Search</button></center>


                        <!-- <div class="col-md-3">
                            <div class="form-group">
                                <input type="search" name="classa" id="classa" placeholder="search here">
                                <label>Class</label>
                                <select name="class" id="class" class="form-control">
                                     onchange="for_subject(this.value);for_search();"
                                    <option value="">Select Class</option>
                                    @if (!empty($classes))
                                    @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Subject Name<font style="color:red"><b>*</b></font></label>
                                <select class="form-control" name="subject_id" id="subject" required>
                                    <option value="">Select Subject</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Subject Name</label>
                                <select class="form-control" name="subject" id="subject" required
                                    onchange="for_search();">
                                    <option value="">Select Subject</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Particular Date</label>
                                <input type="date" name="particular_date" id="particular_date" class="form-control"
                                    oninput="for_search();" value="" />
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Updated By</label>
                                <select name="bus_routee" class="form-control new_student" id="bus_routee"
                                    onchange="for_search();">
                                    <option value="All">All User</option>

                                </select>
                            </div>
                        </div> -->
                    </form>
                    <br>

            </div>
        </div>
    </div>
    <br>

    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Homework List</h3>
        </div>
        <br>
      
        <div class="box-body">

            <div class="col-md-12">
                <div class="details">
                    <table id="example" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Class</th>
                                <th>Student Section</th>
                                <th>Subject</th>
                                <th>Homework</th>
                                <th>Date</th>
                                <th>Remark</th>
                                <th>Update Date</th>
                                <th>H/W Page</th>
                                <!-- <th>Answers</th> -->
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody class="tbodyy" id="details">
                            @if(count($homeworks) > 0)
                            @foreach ($homeworks as $homework)
                            <tr>
                                <input type="hidden" class="delete_homework_id" value="{{$homework->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$homework->class_name}}</td>
                                <td>{{$homework->section_name}}</td>
                                <td>{{$homework->subject_info}}</td>
                                <td>{{$homework->homework_write}}</td>
                                <td>{{$homework->homework_date}}</td>
                                <td>{{$homework->homework_remark}}</td>
                                <td>{{$homework->updated_at}}</td>
                                <td>
                                    <img src="{{asset('images/homeworks/'.$homework->homework_image)}}" width="60px"
                                        height="50px" alt="">
                                </td>
                                <!-- <td>
                                    <a href="" class="btn btn-success">Answer</a>
                                </td> -->
                                <td>
                                    <a href="{{ url('/edit-homework', $homework->id)}}"
                                        class="btn btn-info edit_homework">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('/deletehw', $homework->id)}}"
                                        class="btn btn-danger deletehwbtn">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td>No Homework Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                </body>
            </div>
        </div>
    </div>
    </div>
    <meta name="_token" content="{{ csrf_token() }}">
</section>
@include('common.footer')
<!-- 
$(document).ready(function() {
    $("#class").on('change', function() {
        var value = $(this).val();
        $.ajax({
            url: "{{route('homeworkList')}}",
            type: "get",
            data: {
                'homeworks': value
            },
            success: function(data) {
                var classes = data.homeworks;
                var html = '';
                if (homeworks.length > 0) {
                    for (let i = 0; i < homeworks.length; i++) {
                        html += '<tr>\
                                    <td>' + homeworks[i]['iteration'] + '</td>\
                                    <td>' + homeworks[i]['class_name'] + '</td>\
                                    <td>' + homeworks[i]['section_name'] + '</td>\
                                    <td>' + homeworks[i]['subject_info'] + '</td>\
                                    <td>' + homeworks[i]['homework_write'] + '</td>\
                                    <td>' + homeworks[i]['homework_date'] + '</td>\
                                    <td>' + homeworks[i]['homework_remark'] + '</td>\
                                    <td>' + homeworks[i]['updateBy'] + '</td>\
                                    <td>' + homeworks[i]['update_at'] + '</td>\
                                </tr>';
                    }
                } else {
                    html += '<tr>\
                                 <td>No homework found</td>\
                            </tr>';
                }
                $("#details").html(html);
            }
        });
    });
});
</script> -->

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
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deletehwbtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.delete_homework_id').val();
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
                        url: "/deletehw/" + delete_id,
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
$(function() {
    $('.table').DataTable()
})
</script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});

$(document).ready(function() {
    // $("#class").change(function() {
    //     var class_id = $(this).val();
    //     if (class_id == "") {
    //         var class_id = 0;
    //     }
    //     $.ajax({
    //         url: '{{ url("/fetch-data/") }}/' + class_id,
    //         type: 'post',
    //         dataType: 'json',
    //         success: function(response) {
    //             // $('#section').find('option:not(:first)').remove();
    //             // $('#subject').find('option:not(:first)').remove();

    //             if (response['homeworks'].length > 0) {
    //                 $.each(response['homeworks'], function(key, value) {
    //                     $("#details").append("<tbody value='" + value['id'] +
    //                         "'>" +
    //                         //    [section_name]  from section table
    //                         value['class_name'] + "</tbody>")
    //                 });
    //             }
    //         }
    //     });
    // });
    $("#class").change(function() {
        var class_id = $(this).val();

        if (class_id == "") {
            var class_id = 0;
        }
        $.ajax({
            url: '{{ url("/fetch-subjects/") }}/' + class_id,
            type: 'post',
            dataType: 'json',
            success: function(response) {
                $('#subject').find('option:not(:first)').remove();
                if (response['subjects'].length > 0) {
                    $.each(response['subjects'], function(key, value) {
                        $("#subject").append("<option value='" + value['id'] +
                            "'>" +
                            value['subject_info'] + "</option>")
                    });
                }
            }
        });
    });
});
</script>
<!-- --------------------------------------For-Toast------------------------------ -->
