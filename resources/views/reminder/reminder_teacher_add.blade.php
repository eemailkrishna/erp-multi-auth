@include('common.header')
@include('common.navbar')


<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "reminder/reminder_teacher_add_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('reminder/reminder_teacher_list');
            }
        }
    });
});
</script>
<script type="text/javascript">
function for_section(value) {

    $.ajax({
        type: "POST",
        url: access_link + "downloads/ajax_class_section.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html("<option value='All'>All</option>" + detail);
        }
    });

}

function for_subject() {
    $('#subject_name').html("<option value='' >Loading....</option>");
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;
    var student_class = document.getElementById('std_class').value;
    $.ajax({
        address: "POST",
        url: access_link + "homework/ajax_get_subject_1.php?value=" + student_class + "&student_class_stream=" +
            student_class_stream + "&student_class_group=" + student_class_group + "&student_class_stream=" +
            student_class_stream + "&student_class_group=" + student_class_group + "",
        cache: false,
        success: function(detail) {

            console.log(detail)
            $("#subject_name").html(detail);

        }
    });
}

function for_stream(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
        $("#student_class_stream_div").show();
        $("#student_class_group_div").show();
        $("#student_class_stream").attr('required', true);
        $("#student_class_group").attr('required', true);
    } else {
        $("#student_class_stream_div").hide();
        $("#student_class_group_div").hide();
        $("#student_class_stream").attr('required', false);
        $("#student_class_group").attr('required', false);
    }
}

function get_group(value1) {
    $('#student_class_group').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "homework/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group").html(detail1);
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
        <li class="active"><i class="fa fa-user-plus"></i> Add Teacher Reminder</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
                <h3 class="box-title">Reminder Teacher Form</h3>
            </div>

            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
                @endif

                <form role="form" action="{{url('reminder-teacher-add-plan')}}" method="post"
                    enctype="multipart/form-data" id="my_form">
                    @csrf
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Teacher Name<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="reminder_teacher_name" required>
                                <option value="">Select Teacher</option>
                                @if (!empty($users))
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <th><b style="font-size:15px">Choose Class</b></th>
                            <select name="std_class" class="form-control new_student" id="class"
                                onchange="for_section(this.value);for_subject();for_stream(this.value)">
                                <option value="">Select Class</option>
                                @if (!empty($classes))
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 " id="student_class_stream_div" style="display:none;">
                        <div class="form-group">
                            <label>Stream<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_stream" id="student_class_stream"
                                onchange="get_group(this.value);for_subject();">
                                <option value="">Select Stream</option>
                                <option value="SCIENCE">SCIENCE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_div" style="display:none;">
                        <div class="form-group">
                            <label>Group<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_group" id="student_class_group"
                                onchange="for_subject();">
                                <option value="">Select Group</option>
                            </select>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <th><b style="font-size:15px">Section</b></th>
                            <select class="form-control" name="student_class_section" id="section">
                                <option value="">Select Section</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Subject Name<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="subject_name" id="subject">
                                <option value="">Select Subject</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_1">Task 1<font style="color:red"><b>*</b></font>
                            </label>
                            <input type="text" name="reminder_teacher_task_1" class="form-control bordder-color" id=""
                                required>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_2">Task 2</label>
                            <input type="text" name="reminder_teacher_task_2" class="form-control bordder-color" id="">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_3">Task 3</label>
                            <input type="text" name="reminder_teacher_task_3" class="form-control bordder-color" id="">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_4">Task 4</label>
                            <input type="text" name="reminder_teacher_task_4" class="form-control bordder-color" id="">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="reminder_teacher_task_5">Task 5</label>
                            <input type="text" name="reminder_teacher_task_5" class="form-control bordder-color" id="">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Allocated Date<font style="color:red"><b>*</b></font></label>
                            <input type="date" value="" name="reminder_teacher_allocated_date" id="myLocalDate"
                                placeholder="Date" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Finsih Date</label>
                            <input type="date" name="reminder_teacher_finish_date" placeholder="Date" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Remark<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="reminder_teacher_remark" placeholder="Remark" value=""
                                class="form-control">
                        </div>
                    </div>



                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-success" />
                        </center>

                        <!-- <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center> -->
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')

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
        $.ajax({
            url: '{{ url("/fetch-sections/") }}/' + class_id,
            type: 'post',
            dataType: 'json',
            success: function(response) {
                $('#section').find('option:not(:first)').remove();
                $('#subject').find('option:not(:first)').remove();

                if (response['sections'].length > 0) {
                    $.each(response['sections'], function(key, value) {
                        $("#section").append("<option value='" + value['id'] +
                            "'>" +
                            //    [section_name]  from section table
                            value['section_name'] + "</option>")
                    });
                }
            }
        });
    });
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
                            //    [subject_info]  from subject table
                            value['subject_info'] + "</option>")
                    });
                }
            }
        });
    });

});
</script>