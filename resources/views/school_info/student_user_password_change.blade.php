@include('common.header')
@include('common.navbar')
<script>
function for_section() {
    var class_name = document.getElementById('attendance_student_class').value;
    $("#attendance_student_section").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "school_info/ajax_class_section.php?class_name=" + class_name + "",
        cache: false,
        success: function(detail) {
            $("#attendance_student_section").html(detail);
            attendance_list();
        }
    });
}

function attendance_list() {

    var class_name = document.getElementById('attendance_student_class').value;
    var class_section = document.getElementById('attendance_student_section').value;
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;

    var t = 0;
    if (class_name == '11TH' || class_name == '12TH') {
        if (student_class_group != '' && student_class_stream != '') {
            t = 1;
        }
    } else {
        t = 1;
    }
    if (class_name != '' && class_section != '' && t == 1) {
        $("#example1").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "school_info/ajax_student_password_update.php?class_name=" + class_name +
                "&class_section=" + class_section + "&student_class_stream=" + student_class_stream +
                "&student_class_group=" + student_class_group + "",
            cache: false,
            success: function(detail) {
                $("#example1").html(detail);
            }
        });
    } else {
        $("#example1").html('');
    }
}

function for_stream(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
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
    $("#student_class_group").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "school_info/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function($detail1) {
            var str1 = $detail1;
            $("#student_class_group").html(str1);
            attendance_list();
        }
    });
}
</script>
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    $.ajax({
        url: access_link + "school_info/student_user_password_change_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {

                get_content('school_info/student_user_password_change');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Student Password Update </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
        <li class="active">Student Password Update</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3">


            <!-- /.box -->
            <div class="box box-success" style="padding:10px 10px 10px 10px;">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <div class="form-group">
                        <label>Class :</label>
                        <select name="attendance_student_class" id="attendance_student_class" class="form-control"
                            onchange="for_section();for_stream(this.value)" required>
                            <option value="">Select</option>
                            <option value="NURSERY">NURSERY</option>
                            <option value="LKG">LKG</option>
                            <option value="UKG">UKG</option>
                            <option value="1ST">1ST</option>
                            <option value="2ND">2ND</option>
                            <option value="3RD">3RD</option>
                            <option value="4TH">4TH</option>
                            <option value="5TH">5TH</option>
                            <option value="6TH">6TH</option>
                            <option value="7TH">7TH</option>
                            <option value="8TH">8TH</option>
                            <option value="9TH">9TH</option>
                            <option value="10TH">10TH</option>
                            <option value="11TH">11TH</option>
                            <option value="12TH">12TH</option>
                        </select>
                    </div>

                    <div class="form-group" id="student_class_stream_div" style="display:none;">
                        <label>Stream</label>
                        <select class="form-control" name="student_class_stream" id="student_class_stream"
                            onchange="get_group(this.value);">
                            <option value="">Select Stream</option>
                            <option value="LLB">LLB</option>
                        </select>
                    </div>

                    <div class="form-group" id="student_class_group_div" style="display:none;">
                        <label>Group</label>
                        <select class="form-control" name="student_class_group" id="student_class_group"
                            onchange="get_group_subject();">
                            <option value="">Select Group</option>
                        </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Section :</label>
                        <select name="attendance_student_section" id="attendance_student_section" class="form-control"
                            onchange="attendance_list();" required>
                            <option value="">Select</option>
                        </select>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>
        <div class="col-md-9">

            <!-- /.box -->
            <div class="box box-success" style="padding:10px 10px 10px 10px;">
                <div class="box-header with-border">
                </div>
                <form method="post" enctype="multipart/form-data" id="my_form">
                    <div class="box-body table-responsive" style="height:800px;">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>student Name</th>
                                    <th>Class</th>
                                    <th>User Id</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </form>
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@include('common.footer')