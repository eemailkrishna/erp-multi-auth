@include('common.header')
@include('common.navbar')

<!-- <script type="text/javascript">
function for_section(value) {
    var id = value;
    $.ajax({
        type: "POST",
        url: access_link + "homework/ajax_class_section.php?class_name=" + value + "",
        cache: false,
        success: function($detail) {
            var str = $detail;
            // alert_new(str);
            $("#student_class_section").html(str);
        }
    });

}
</script>

<script type="text/javascript">
$(function() {
    var id = document.getElementById('classwork_class').value;
    $.ajax({
        type: "POST",
        url: access_link + "homework/ajax_class_section.php?class_name=" + id + "",
        cache: false,
        success: function(detail) {
            //var str =detail;                
            // alert_new(str);
            $("#student_class_section").html(detail);
        }
    });

});


$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "homework/classwork_edit_api.php",
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
                get_content('homework/classwork_list');
            }
        }
    });
});

function for_subject() {
    $('#subject_name').html("<option value='' >Loading....</option>");

    var student_class_stream = document.getElementById('student_class_stream').value;

    var student_class_group = document.getElementById('student_class_group').value;

    var student_class = document.getElementById('classwork_class').value;

    $.ajax({
        address: "POST",
        url: access_link + "homework/ajax_get_subject.php?value=" + student_class + "&student_class_stream=" +
            student_class_stream + "&student_class_group=" + student_class_group + "&student_class_stream=" +
            student_class_stream + "&student_class_group=" + student_class_group + "",
        cache: false,
        success: function(detail) {
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
        url: access_link + "examination/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group").html(detail1);
        }
    });

}
</script> -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Classwork Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/homework')}}"><i class="fa fa-book"></i> classwork</a></li>
        <li><a href="{{url('/classwork-list')}}"><i class="fa fa-list"></i> classwork List</a>
        </li>
        <li class="active"><i class="fa fa-edit"></i> Classwork</li>
    </ol>
</section>



<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Classwork Edit</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
            <div class="box-body ">
                <form role="form" action="{{url('edit-classwork')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$classwork->id}}" class="form-control" required>

                    <div class="col-md-12 ">
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Class</label>
                                <select class="form-control" id="class" name="class_id" value="">
                                    <option value="">Select Class</option>
                                    @foreach ($classes as $class)
                                    @if($classwork['class_id'] == $class->id)
                                    <option value="{{ $class->id }}" selected>{{$class->class_name}}</option>
                                    @else
                                    <option value="{{ $class->id }}">{{$class->class_name}}</option>
                                    @endif
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 " id="student_class_stream_div" style="display:none;">
                            <div class="form-group">
                                <label>Stream<font style="color:red"><b>*</b></font></label>
                                <select class="form-control" name="student_class_stream" id="student_class_stream"
                                    onchange="get_group(this.value);for_subject();">
                                    <option value=""></option>

                                    <option value="SCIENCE">SCIENCE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3" id="student_class_group_div" style="display:none;">
                            <div class="form-group">
                                <label>Group<font style="color:red"><b>*</b></font></label>
                                <select class="form-control" name="student_class_group" id="student_class_group"
                                    onchange="for_subject();">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Section</label>
                                <select class="form-control" name="section_id" id="section">
                                    <option value="">Select Section</option>
                                    @foreach($sections as $section)
                                    @if($classwork['section_id'] == $section->id)
                                    <option value="{{ $section->id }}" selected>{{$section->section_name}}</option>
                                    @else
                                    <option value="{{ $section->id }}">{{$section->section_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Subject Name<font style="color:red"><b>*</b></font></label>
                                <select class="form-control" name="subject_id" id="subject">
                                    <option value="">Select Subject</option>
                                    @foreach ($subjects as $subject)
                                    @if($classwork['subject_id'] == $subject->id)
                                    <option value="{{ $subject->id }}" selected>{{$subject->subject_info}}</option>
                                    @else
                                    <option value="{{ $subject->id }}">{{$subject->subject_info}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" value="{{$classwork->classwork_date}}" name="cw_date"
                                    id="myLocalDate" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Remark</label>
                                <input type="text" name="cw_remark" placeholder="Write Remark"
                                    value="{{$classwork->classwork_remark}}" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>classwork write here</b>
                                </h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">

                                <h4 style="display:none;">Don't Know Hindi Typing? Don't Worry Click Here</h4>
                                <input type="hidden" class="btn btn-success" value="Click" onclick="hindi_typing();">
                                <h5 style="display:none" id="suggestion">Press Space for showing Content in Editor and
                                    change font style etc by selecting Content in Editor </h5>
                                <input type="hidden" id="count_value" value="1"></input> <input type="hidden"
                                    name="edit_id" value="209"></input>
                                <input type="text" id="question_box" rows="2" onKeyUp="get_text_question()"
                                    name="content" class="form-control" style="display:none">

                                <textarea name="write_classwork" class="form-control bordder-color"
                                    placeholder="write homework here" rows="10"
                                    cols="80">{{$classwork->classwork_write}}
                                </textarea>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Update Details" class="btn btn-primary" />
                        </center>

                        <!-- <center><input type="submit" name="submit" value="Update Details" class="btn btn-primary" />
                        </center> -->
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

<!-- <script>
$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})
</script> -->