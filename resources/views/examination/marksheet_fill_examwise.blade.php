@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function for_list() {
    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var exam_type = document.getElementById('exam_type').value;
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;
    var select_month = document.getElementById('select_month').value;
    var order_by = document.getElementById('order_by').value;
    var student_limit = document.getElementById('student_limit').value;
    if (student_class_section != '' && student_class != '' && exam_type != '') {
        $('#example2').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "examination/ajax_fill_marksheet_examwise.php?id=" + student_class +
                "&student_section=" + student_class_section + "&student_exam_type=" + exam_type +
                "&student_class_stream=" + student_class_stream + "&student_class_group=" +
                student_class_group + "&select_month=" + select_month + "&order_by=" + order_by +
                "&student_limit=" + student_limit + "",
            cache: false,
            success: function(detail) {
                $('#example2').html(detail);
            }
        });
    } else {
        $('#example2').html('');
    }

}
</script>
<script type="text/javascript">
function for_section(value, selected, selected1) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "examination/ajax_class_section_code.php?class_name=" + value + "",
        cache: false,
        success: function($detail) {
            var str = $detail;

            $("#student_class_section").html("<option value='All'>All</option>" + str);
            if (selected != '') {
                $('#student_class_section').val(selected);
            }
            for_exam(selected1);
            for_list();

        }
    });

}

function for_exam(selected) {
    $('#exam_type').html("<option value='' >Loading....</option>");
    var student_class = document.getElementById('student_class').value;
    $.ajax({
        type: "POST",
        url: access_link + "examination/ajax_get_exam_type.php?class_name=" + student_class + "",
        cache: false,
        success: function(detail) {
            $("#exam_type").html(detail);
            $('#exam_type').val(selected);
        }
    });

}

function for_stream(value2, selected) {
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
    if (selected != '') {
        $('#student_class_stream').val(selected).change();
    }
}

function for_validation(id, value, sub_code) {
    var maximum_marks = document.getElementById('student_maximum_marks_' + sub_code).value;
    if (maximum_marks > 0) {
        var maximum_marks1 = maximum_marks;
    } else {
        var maximum_marks1 = '0';
    }
    if (parseFloat(value) > parseFloat(maximum_marks1)) {
        alert_new("Please Fill Marks Less or Equals to Maximum Marks !!!", 'red');
        $('#' + id).val('');
        $('#' + id).focus();
    }
}

function valid() {
    var num = 0;
    $(".exam_student_class").each(function() {
        num = Number(parseInt(num) + 1);
    });
    if (num <= 0) {
        alert_new("Student Not On Your Screen !!!", 'red');
        return false;
    }
}

function get_group(value1, selected) {
    $('#student_class_group').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "examination/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group").html(detail1);
            if (selected != '') {
                $('#student_class_group').val(selected).change();
            }
        }
    });
    for_list();
}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    $("#loader_div_id").html(loader_div);
    $.ajax({
        url: access_link + "examination/marksheet_fill_examwise_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            console.log(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                //post_content('examination/marksheet_fill_examwise',res[2]);
                for_list();
                $("#loader_div_id").html("");
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Examination Management <small> Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/examination')}}"><i class="fa fa-id-card-o"></i> Examination</a></li>
        <li class="active"> Exam Marks Fill</li>
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
                <h3 class="box-title">Exam Marks Fill</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body">

                <form role="form" id="my_form" method="post" enctype="multipart/form-data">

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class<font style="color:red"><b>*</b></font></label>
                            <select name="student_class"
                                onchange="for_section(this.value,'','');for_stream(this.value,'');" id="student_class"
                                class="form-control" required>
                                <option value="">Select Class</option>
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
                    </div>
                    <div class="col-md-3 " id="student_class_stream_div" style="display:none;">
                        <div class="form-group">
                            <label>Stream<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_stream" id="student_class_stream"
                                onchange="get_group(this.value,'');">
                                <option value="">Select Stream</option>
                                <option value="SCIENCE">SCIENCE</option>
                                <option value="ARTS">ARTS</option>
                                <option value="Commerce ">Commerce </option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_div" style="display:none;">
                        <div class="form-group">
                            <label>Group<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_group" id="student_class_group"
                                onchange="for_list();">
                                <option value="">Select Group</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Section<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_section" id="student_class_section"
                                onchange='for_list();' required>
                                <option value="All">All</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Exam Type<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="exam_type" id="exam_type" onchange='for_list();'
                                required>
                                <option value="">Select Exam Type</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Till Month <small>( For Attendance Calculation )</small></label>
                            <select class="form-control" name="select_month" id="select_month" onchange="for_list();">
                                <option value="">Select</option>
                                <option value="|?|04">April </option>
                                <option value="|?|04|?|05">May </option>
                                <option value="|?|04|?|05|?|06">June </option>
                                <option value="|?|04|?|05|?|06|?|07">July </option>
                                <option value="|?|04|?|05|?|06|?|07|?|08">August </option>
                                <option value="|?|04|?|05|?|06|?|07|?|08|?|09">September </option>
                                <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10">October </option>
                                <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11">November </option>
                                <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12">December </option>
                                <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12|?|01">Jaunary </option>
                                <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12|?|01|?|02">February
                                </option>
                                <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12|?|01|?|02|?|03">March
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Order By</label>
                            <select class="form-control" name="order_by" id="order_by" onchange="for_list();">
                                <option value="">Select</option>
                                <option value=" ORDER BY student_name ASC">Student Name</option>
                                <option value=" ORDER BY student_father_name ASC">Father Name</option>
                                <option value=" ORDER BY CAST(school_roll_no AS SIGNED) ASC">Roll No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Limit</label>
                            <select class="form-control" name="student_limit" id="student_limit" onchange="for_list();">

                                <!--    <option value=" LIMIT 0, 25">0-25</option>-->
                                <!--<option value=" LIMIT 25, 25">25-50</option>-->
                                <!--<option value=" LIMIT 50, 25">50-75</option>-->
                                <!--<option value=" LIMIT 75, 25">75-100</option>-->
                                <!--<option value=" LIMIT 100, 25">100-125</option>-->
                                <!--<option value=" LIMIT 125, 25">125-150</option>-->
                                <!--<option value=" LIMIT 150, 25">150-175</option>-->
                                <!--<option value=" LIMIT 175, 25">175-200</option>-->
                                <!--<option value=" LIMIT 200, 50">200-250</option>-->
                                <!--<option value=" LIMIT 250, 50">250-300</option>-->
                                <!--<option value=" LIMIT 300, 50">300-350</option>-->
                                <!--<option value=" LIMIT 350, 50">350-400</option>-->
                                <!--<option value=" LIMIT 400, 50">400-450</option>-->
                                <!--<option value=" LIMIT 450, 50">450-500</option>-->

                                <option value=" LIMIT 0, 20">0-20</option>
                                <option value=" LIMIT 20, 20">20-40</option>
                                <option value=" LIMIT 40, 20">40-60</option>
                                <option value=" LIMIT 60, 20">60-80</option>
                                <option value=" LIMIT 80, 20">80-100</option>
                                <option value=" LIMIT 100, 20">100-120</option>
                                <option value=" LIMIT 120, 20">120-140</option>
                                <option value=" LIMIT 140, 20">140-160</option>
                                <option value=" LIMIT 160, 20">160-180</option>
                                <option value=" LIMIT 180, 20">180-200</option>
                                <option value=" LIMIT 200, 20">200-220</option>
                                <option value=" LIMIT 220, 20">220-240</option>
                                <option value=" LIMIT 240, 20">240-260</option>
                                <option value=" LIMIT 260, 20">260-280</option>


                                <!--<option value=" LIMIT 0, 10">0-10</option>-->
                                <!--<option value=" LIMIT 10, 10">10-20</option>-->
                                <!--<option value=" LIMIT 20, 10">20-30</option>-->
                                <!--<option value=" LIMIT 30, 10">30-40</option>-->
                                <!--<option value=" LIMIT 40, 10">40-50</option>-->
                                <!--<option value=" LIMIT 50, 10">50-60</option>-->
                                <!--<option value=" LIMIT 60, 10">60-70</option>-->
                                <!--<option value=" LIMIT 70, 10">70-80</option>-->
                                <!--<option value=" LIMIT 80, 10">80-90</option>-->
                                <!--<option value=" LIMIT 90, 10">90-100</option>-->
                                <!--<option value=" LIMIT 100, 10">100-110</option>-->
                                <!--<option value=" LIMIT 110, 10">110-120</option>-->
                                <!--<option value=" LIMIT 120, 10">120-130</option>-->
                                <!--<option value=" LIMIT 130, 10">130-140</option>-->

                                <!--<option value=" LIMIT 0, 30">0-30</option>-->
                                <!--<option value=" LIMIT 30, 30">30-60</option>-->
                                <!--<option value=" LIMIT 60, 30">60-90</option>-->
                                <!--<option value=" LIMIT 90, 30">90-120</option>-->
                                <!--<option value=" LIMIT 120, 30">120-150</option>-->
                                <!--<option value=" LIMIT 150, 30">150-180</option>-->
                                <!--<option value=" LIMIT 180, 30">180-210</option>-->
                                <!--<option value=" LIMIT 210, 30">210-240</option>-->
                                <!--<option value=" LIMIT 240, 30">240-270</option>-->
                                <!--<option value=" LIMIT 270, 30">270-300</option>-->
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div id="loader_div_id">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- /.box -->

                        <div class="box box-success">
                            <div class="box-header with-border">
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive" id="example2">



                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" onclick="return valid();"
                                class="btn  btn-success" /></center>
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
<script>
$(function() {
    $('#example1').DataTable()
})
</script>
@include('common.footer')