    @include('common.header')
    @include('common.navbar')
    <section class="content-header">
        <h1>
            School Information Management <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
            <li class="active">Add Subject Classwise</li>
        </ol>
    </section>

    <!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <script>
function for_stream() {
    var value2 = document.getElementById("class_name1").value;
    var class_value = value2.split('_');
    if (class_value[2] == 'class14' || class_value[2] == 'class15') {

        $("#student_class_stream_div").show();
        $("#student_class_group_div").show();
        $("#student_class_group_subject_div").show();
        $("#stream_name").attr('required', true);
        $("#group_name").attr('required', true);
    } else {
        $("#student_class_stream_div").hide();
        $("#student_class_group_div").hide();
        $("#student_class_group_subject_div").hide();
        $("#stream_name").attr('required', false);
        $("#group_name").attr('required', false);
        $("#stream_name").val('');
        $("#group_name").val('');
    }
}

function get_group(value1) {

    $.ajax({
        type: "POST",
        url: access_link + "school_info/ajax_stream_group.php?stream_name=" + value1 + "",
        cache: false,
        success: function($detail1) {
            var str1 = $detail1;

            $("#group_name").html(str1);
        }
    });
}

function for_subject_add() {

    var class_name2 = document.getElementById("class_name1").value;
    var subject_type = document.getElementById('subject_type').value;
    var stream_name = document.getElementById("stream_name").value;
    var group_name = document.getElementById('group_name').value;
    if (class_name2 != '') {
        var class_value = class_name2.split('_');
        if (class_value[2] == 'class14' || class_value[2] == 'class15') {
            if (stream_name != '' && group_name != '') {
                $.ajax({
                    type: "POST",
                    url: access_link + "school_info/ajax_class_wise_subject_add.php?class_name=" + class_name2 +
                        "&subject_type=" + subject_type + "&stream_name=" + stream_name + "&&group_name=" +
                        group_name + "",
                    cache: false,
                    success: function(detail) {

                        $('#example1').html(detail);
                    }
                });
            }
        } else {
            $.ajax({
                type: "POST",
                url: access_link + "school_info/ajax_class_wise_subject_add.php?class_name=" + class_name2 +
                    "&subject_type=" + subject_type + "&stream_name=" + stream_name + "&&group_name=" +
                    group_name + "",
                cache: false,
                success: function(detail) {
                    $('#example1').html(detail);
                }
            });
        }
    }
}

function for_subject_delete() {

    var class_name2 = document.getElementById("class_name1").value;
    var subject_type = document.getElementById('subject_type').value;
    var stream_name = document.getElementById("stream_name").value;
    var group_name = document.getElementById('group_name').value;
    if (class_name2 != '') {
        $.ajax({
            type: "POST",
            url: access_link + "school_info/ajax_class_wise_subject_delete.php?class_name=" + class_name2 +
                "&subject_type=" + subject_type + "&stream_name=" + stream_name + "&&group_name=" + group_name +
                "",
            cache: false,
            success: function(detail) {
                $('#example2').html(detail);
            }
        });
    }
}

function for_valid() {
    var num = 0;
    var data = [];
    $(".subjects").each(function() {
        if ($(this).prop('checked') == true) {
            num = Number(num + 1);
            data.push($(this).val());
        }
    });
    if (num > 0) {
        add_multiple_subject(data);
    } else {
        alert_new("Please Select Atleast One Subject !", 'red');
    }
}

function add_multiple_subject(data) {
    $.ajax({
        type: "POST",
        url: access_link + "school_info/classwise_multiple_subject_insert.php",
        data: {
            subject_details: data
        },
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully added !!!', 'green');
                get_content('school_info/class_wise_subject');

            }
        }
    });
}
    </script>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements disabled -->
            <div class="box box-primary my_border_top">
                <div class="box-header with-border ">
                </div>
                <!-- /.box-header -->
                <!------------------------------------------------Start Registration form--------------------------------------------------->

                <div class="box-body">
                    <form role="form" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Subject Type</label>
                                    <select class="form-control" id="subject_type"
                                        onchange='for_subject_add();for_subject_delete();' required>
                                        <option value="subject"> Main Subject</option>
                                        <option value="practical"> Practical Subject</option>
                                        <option value="other_subject"> Other Subject</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Class Name</label>
                                    <select name="class_name" class="form-control " id="class_name1"
                                        onchange='for_stream();for_subject_add();for_subject_delete();' required>
                                        <option value=''>Select</option>
                                        <option value="NURSERY_नर्सरी_class1">NURSERY</option>
                                        <option value="LKG_ऐल. के. जी_class2">LKG</option>
                                        <option value="UKG_यू .के. जी _class3">UKG</option>
                                        <option value="1ST_प्रथम _class4">1ST</option>
                                        <option value="2ND_द्रितीय _class5">2ND</option>
                                        <option value="3RD_तीसरी _class6">3RD</option>
                                        <option value="4TH_चतुर्थ _class7">4TH</option>
                                        <option value="5TH_पांचवीं _class8">5TH</option>
                                        <option value="6TH_छठी _class9">6TH</option>
                                        <option value="7TH_सातवीं _class10">7TH</option>
                                        <option value="8TH_आठवीं _class11">8TH</option>
                                        <option value="9TH_नौवीं _class12">9TH</option>
                                        <option value="10TH_दसवीं _class13">10TH</option>
                                        <option value="11TH__class14">11TH</option>
                                        <option value="12TH__class15">12TH</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 " id="student_class_stream_div" style="display:none;">
                                <div class="form-group">
                                    <label>Stream</label>
                                    <select class="form-control" name="student_class_stream" id="stream_name"
                                        onchange="get_group(this.value);for_subject_add();for_subject_delete();">
                                        <option value="">Select Stream</option>
                                        <option value="LLB">LLB</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-2 " id="student_class_group_div" style="display:none;">
                                <div class="form-group">
                                    <label>Group<font style="color:red"><b>*</b></font></label>
                                    <select class="form-control" name="student_class_group" id="group_name"
                                        onchange='for_subject_add();for_subject_delete();'>
                                        <option value="">Select Group</option>

                                    </select>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>For Checked</label>
                                    <input type="button" class="btn btn-success" onclick="for_valid();"
                                        value="Add Multiple Subject" />
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 box-body table-responsive">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Subject Name English</th>
                                            <th>Subject Name Hindi</th>
                                            <th>Add</th>
                                        </tr>
                                    </thead>
                                    <tbody id="example1">

                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="col-md-6 box-body table-responsive">

                            <table id="" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S.no.</th>
                                        <th>Subject Name English</th>
                                        <th>Subject Name Hindi</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody id="example2">

                                </tbody>
                            </table>
                        </div>
                </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </section>

    <script>
$(function() {
    for_subject_add();
    for_subject_delete();
    for_stream();
    //Initialize Select2 Elements
    $('.select2').select2()

})
    </script>
    @include('common.footer')