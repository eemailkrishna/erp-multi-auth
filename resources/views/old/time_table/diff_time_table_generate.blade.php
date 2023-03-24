@include('common.header')
@include('common.navbar')
</head>

<script type="text/javascript">
function for_section(class_name) {
    $('#student_section').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "time_table/ajax_class_section.php?class_name=" + class_name + "",
        cache: false,
        success: function(detail) {
            $("#student_section").html(detail);
            for_stream(class_name);
            get_period();
        }
    });

}

function get_period() {

    var class_name = document.getElementById('student_class').value;
    var class_section = document.getElementById('student_section').value;
    var student_class_group = document.getElementById('student_class_group').value;
    var student_class_stream = document.getElementById('student_class_stream').value;
    var t = 0;
    if (class_name == 'class14' || class_name == 'class15') {
        if (student_class_group != '' && student_class_stream != '') {
            t = 1;
        }
    } else {
        t = 1;
    }
    if (class_name != '' && class_section != '' && t == 1) {
        $('#period_list').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "time_table/diff_ajax_get_period.php?class=" + class_name + "&section=" +
                class_section + "&student_class_stream=" + student_class_stream + "&student_class_group=" +
                student_class_group + "",
            cache: false,
            success: function(detail) {
                $("#period_list").html(detail);
            }
        });
    } else {
        $("#period_list").html('');
    }
    $('#class_code_hidden').val(class_name);
}

function fill_subject_name(row_num) {

    var subject_name = document.getElementById('subject_name_monday_' + row_num).value;

    $('#subject_name_tuesday_' + row_num).prepend('<option value="' + subject_name + '" selected>' + subject_name +
        '</option>');
    $('#subject_name_wednesday_' + row_num).prepend('<option value="' + subject_name + '" selected>' + subject_name +
        '</option>');
    $('#subject_name_thursday_' + row_num).prepend('<option value="' + subject_name + '" selected>' + subject_name +
        '</option>');
    $('#subject_name_friday_' + row_num).prepend('<option value="' + subject_name + '" selected>' + subject_name +
        '</option>');
    $('#subject_name_saturday_' + row_num).prepend('<option value="' + subject_name + '" selected>' + subject_name +
        '</option>');


}

function fill_teacher_name(row_num) {

    var teacher_name = document.getElementById('teacher_name_monday_' + row_num).value;

    $('#teacher_name_tuesday_' + row_num).prepend('<option value="' + teacher_name + '" selected>' + teacher_name +
        '</option>');
    $('#teacher_name_wednesday_' + row_num).prepend('<option value="' + teacher_name + '" selected>' + teacher_name +
        '</option>');
    $('#teacher_name_thursday_' + row_num).prepend('<option value="' + teacher_name + '" selected>' + teacher_name +
        '</option>');
    $('#teacher_name_friday_' + row_num).prepend('<option value="' + teacher_name + '" selected>' + teacher_name +
        '</option>');
    $('#teacher_name_saturday_' + row_num).prepend('<option value="' + teacher_name + '" selected>' + teacher_name +
        '</option>');


}

function for_stream(value2) {
    if (value2 == "class14" || value2 == "class15") {
        $("#student_class_stream_div").show();
        $("#student_class_group_div").show();
        $("#student_class_group_subject_div").show();
        $("#student_class_stream").attr('required', true);
        $("#student_class_group").attr('required', true);
    } else {
        $("#student_class_stream_div").hide();
        $("#student_class_group_div").hide();
        $("#student_class_group_subject_div").hide();
        $("#student_class_stream").attr('required', false);
        $("#student_class_group").attr('required', false);
    }
}

function get_group(value1) {
    $('#student_class_group').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "time_table/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function($detail1) {
            var str1 = $detail1;

            $("#student_class_group").html(str1);
        }
    });
}

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "time_table/diff_time_table_generate_api.php",
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
                get_content('time_table/time_table_list');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Time Table Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/time_table')}}"><i class="fa fa-clock-o"></i> Time Table</a></li>
        <li class="active">Time Table Generate</li>
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
                <h3 class="box-title">Time Table Generate</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <form role="form" method="post" enctype="multipart/form-data" id="my_form">


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class</label>
                            <select name="student_class1" id="student_class" class="form-control"
                                onchange="for_section(this.value);get_period();" required>
                                <option value="">Select</option>
                                <option value="class1">NURSERY</option>
                                <option value="class2">LKG</option>
                                <option value="class3">UKG</option>
                                <option value="class4">1ST</option>
                                <option value="class5">2ND</option>
                                <option value="class6">3RD</option>
                                <option value="class7">4TH</option>
                                <option value="class8">5TH</option>
                                <option value="class9">6TH</option>
                                <option value="class10">7TH</option>
                                <option value="class11">8TH</option>
                                <option value="class12">9TH</option>
                                <option value="class13">10TH</option>
                                <option value="class14">11TH</option>
                                <option value="class15">12TH</option>
                            </select>
                            <input type="hidden" id="class_code_hidden" name="class_code_hidden" />
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_stream_div" style="display:none;">
                        <div class="form-group">
                            <label>Stream</label>
                            <select class="form-control" name="student_class_stream" id="student_class_stream"
                                onchange="get_group(this.value);get_period();">
                                <option value="">Select Stream</option>
                                <option value="stream1">SCIENCE</option>
                                <option value="stream2">ARTS</option>
                                <option value="stream5">Commerce </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_div" style="display:none;">
                        <div class="form-group">
                            <label>Group</label>
                            <select class="form-control" name="student_class_group" id="student_class_group"
                                onchange="get_period();">
                                <option value="">Select Group</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Section</label>
                            <select name="student_section" id="student_section" class="form-control"
                                onchange="get_period();" required>
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <!-- /.box -->

                        <div class="box box-success">
                            <div class="box-header with-border">
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="table-data" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th colspan="2">
                                                <center>Monday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Tuesday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Wednesday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Thursday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Friday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Saturday</center>
                                            </th>

                                            <th></th>
                                            <th></th>

                                        </tr>
                                        <tr>
                                            <th>
                                                <center>Period Name</center>
                                            </th>
                                            <th>
                                                <center>Time From</center>
                                            </th>
                                            <th>
                                                <center>Time To</center>
                                            </th>
                                            <th>
                                                <center>Subject Name</center>
                                            </th>
                                            <th>
                                                <center>Teacher Name</center>
                                            </th>
                                            <th>
                                                <center>Subject Name</center>
                                            </th>
                                            <th>
                                                <center>Teacher Name</center>
                                            </th>
                                            <th>
                                                <center>Subject Name</center>
                                            </th>
                                            <th>
                                                <center>Teacher Name</center>
                                            </th>
                                            <th>
                                                <center>Subject Name</center>
                                            </th>
                                            <th>
                                                <center>Teacher Name</center>
                                            </th>
                                            <th>
                                                <center>Subject Name</center>
                                            </th>
                                            <th>
                                                <center>Teacher Name</center>
                                            </th>
                                            <th>
                                                <center>Subject Name</center>
                                            </th>
                                            <th>
                                                <center>Teacher Name</center>
                                            </th>

                                            <th>Update By</th>
                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody id="period_list">


                                    </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>


                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')