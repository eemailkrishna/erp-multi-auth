@include('common.header')
@include('common.navbar')

<script>
function get_text_question() {
    var x1 = document.getElementById("question_box").value;
    var x2 = document.getElementById("count_value").value;
    var res = x1.split(" ");
    var count = res.length;
    var count1 = count - 3;
    if (parseInt(count) > parseInt(x2)) {

        var desc = CKEDITOR.instances.editor1.getData();
        var res2 = desc.replace("<p>", "");
        var res3 = res2.replace("</p>", "");
        if (count1 < 0) {} else {
            var res4 = res3 + res[count1];
            CKEDITOR.instances.editor1.setData(res4);
        }
    }
    document.getElementById("count_value").value = count;
}

function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    if (value != '') {
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
    } else {
        $("#student_class_section").html("<option value=''>Select</option>");
    }

}
</script>
<script type="text/javascript">
/* $(function(){
      
            var id=document.getElementById('homework_class').value;	
           $('#student_class_section').html("<option value='' >Loading....</option>");
       $.ajax({
			  type: "POST",
              url: access_link+"homework/ajax_class_section.php?class_name="+id+"",
              cache: false,
              success: function(detail){
                   //var str =detail;                
                   // alert_new(str);
                  $("#student_class_section").html(detail);
              }
           });

    });*/
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    $("#get_content").html(loader_div);
    $.ajax({
        url: access_link + "homework/add_classwork_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            $("#student_detail").html(detail);
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
    var student_class = document.getElementById('homework_class').value;
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
</script>
<section class="content-header">
    <h1>
        Classwork Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('homework')}}"><i class="fa fa-book"></i> Classwork</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Classwork</li>
    </ol>
</section>
@if(session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif
<form role="form" method="post" enctype="multipart/form-data" id="my_form" action="{{url('add-classwork-que')}}">
    @csrf

    <div class="col-md-12">
        <div class="col-md-3">
            <div class="form-group">
                <label>Class<font style="color:red"><b>*</b></font></label>
                <select name="class_id" id="class" class="form-control" required>
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
                    <option value="">SCIENCE</option>
                    <option value="">ARTS</option>
                    <option value="">Commerce </option>
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
                <label>Section</label>
                <select class="form-control" name="section_id" id="section">
                    <option value=''>Select</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="form-group">
                <label>Subject Name<font style="color:red"><b>*</b></font></label>
                <select class="form-control" name="subject_id" id="subject">
                    <option value="">Select Subject</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Date</label>
                <input type="date" value="" name="cw_date" id="myLocalDate" placeholder="Date" value=""
                    class="form-control">
            </div>
        </div>

        <div class="col-md-3" style="display:none">
            <div class="form-group">
                <label>Medium</label>
                <select name="medium" class="form-control">
                    <option value="">Select Medium</option>
                    <option value="">English</option>
                    <option value="">Hindi</option>
                </select>
            </div>
        </div>

        <div class="col-md-3" style="display:none">
            <div class="form-group">
                <label>Shift</label>
                <select name="shift" class="form-control">
                    <option value="">Select Shift</option>
                    <option value="">shift1</option>
                    <option value="">shift2</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label>Remark</label>
                <input type="text" name="cw_remark" placeholder="Remark" value="" class="form-control">
            </div>
        </div>

    </div>
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Write Classwork Here<font style="color:red"><b>*</b></font></b>
                </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body pad">


                <h4 style="display:none;">Don't Know Hindi Typing? Don't Worry Click Here</h4>
                <input type="hidden" class="btn btn-success" value="Click" onclick="hindi_typing();">
                <h5 style="display:none;" id="suggestion">Press Space for showing Content in Editor and change font
                    style etc by selecting Content in Editor </h5>
                <input type="hidden" id="count_value" value="1"></input>
                <input type="text" id="question_box" rows="2" onKeyUp="get_text_question()" name="content"
                    class="form-control" style="display:none;">

                <textarea id="" name="write_classwork" class="form-control bordder-color"
                    placeholder="write class work here" rows="12" cols="80"></textarea>

            </div>
        </div>
        <!-- /.box -->
    </div>
    <div class="col-md-12">
        <center><input type="submit" name="btnSave" value="submit" class="btn btn-success" /></center>
    </div>
    <div id="student_detail"></div>
</form>

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