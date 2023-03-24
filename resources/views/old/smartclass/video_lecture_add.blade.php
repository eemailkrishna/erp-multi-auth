@include('common.header')
@include('common.navbar')
<script>
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    if (value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "important_ajax/get_section_all.php?class_name=" + value + "",
            cache: false,
            success: function(detail) {
                $("#student_class_section").html(detail);
            }
        });
    } else {
        $("#student_class_section").html("<option value=''>Select</option>");
    }

}
</script>
<script type="text/javascript">
$("#my_form").submit(function(e) {
    e.preventDefault();
    var video_link = document.getElementById('video_link').value;
    if (video_link.length < 12) {
        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        $("#get_content").html(loader_div);
        $.ajax({
            url: access_link + "smartclass/video_lecture_add_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {

                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Video Link Successfully Added!!!', 'green');
                    get_content('smartclass/video_lecture_list');
                } else {
                    alert_new('Sorry!!! Some error occured', 'red');
                }
            }
        });
    } else {
        alert_new("Please Enter Correct Video Link !!!", 'red');
    }
});

function for_subject() {
    $('#subject_name').html("<option value='' >Loading....</option>");
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;
    var student_class = document.getElementById('class_name').value;

    $.ajax({
        address: "POST",
        url: access_link + "important_ajax/get_subject_all.php?class_name=" + student_class + "&class_stream=" +
            student_class_stream + "&class_group=" + student_class_group + "",
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
        url: access_link + "important_ajax/get_group_all.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group").html(detail1);
        }
    });

}
</script>
<section class="content-header">
    <h1>
        Video Lecture Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="{{url('/video_lecture')}}"><i class="fa fa-book"></i> Video Lecture</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Add Video Lecture</li>
    </ol>
</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Video Lecture Add </h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Class<font style="color:red"><b>*</b></font></label>
                            <select name="class_name"
                                onchange="for_section(this.value);for_subject();for_stream(this.value)" id="class_name"
                                class="form-control" required>
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
                    </div>
                    <div class="col-md-3 " id="student_class_stream_div" style="display:none;">
                        <div class="form-group">
                            <label>Stream<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_stream" id="student_class_stream"
                                onchange="get_group(this.value);for_subject();">
                                <option value="">Select Stream</option>
                                <option value="All">All</option>
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
                                onchange="for_subject();">
                                <option value="">Select Group</option>
                                <option value="All">All</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Section</label>
                            <select class="form-control" name="section" id="student_class_section">
                                <option value=''>Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Subject Name<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="subject_name" id="subject_name">
                                <option value="">Select Subject</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" value="2022-12-03" name="upload_date" placeholder="Date" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Video Title</label>
                            <input type="text" value="" name="video_title" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Remark</label>
                            <input type="text" name="video_remark" placeholder="Remark" value="" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Video Youtube Link(<s>https://www.youtube.com/watch?v=</s>fE1q8s0NNAA)</label>
                            <input type="text" value="" name="video_link" placeholder="eg. fE1q8s0NNAA" id="video_link"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="btnSave" value="Submit" class="btn  btn-success" /></center>
                    </div>
            </form>

        </div>
    </div>

    </div>
    </div>
    </div>
</section>

@include('common.footer')
<!-- /.content -->