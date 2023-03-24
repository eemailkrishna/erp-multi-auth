@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>
        Online Exam
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="{{url('/online-exam')}}"><i class="fa fa-dashboard"></i>Online Exam</a></li>
        <li class="active">Paper List</li>
    </ol>
</section>

<script>
function for_subject() {
    $('#subject_name').html("<option value='' >Loading....</option>");
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class = document.getElementById('student_class').value;

    $.ajax({
        address: "POST",
        url: access_link + "important_ajax/get_subject_all.php?class_name=" + student_class + "&class_stream=" +
            student_class_stream + "&class_group=All",
        cache: false,
        success: function(detail) {
            $("#subject_name").html(detail);

        }
    });
}

function paper_publish(data, id) {

    $.ajax({
        type: "POST",
        url: access_link + "smartclass/online_exam_paper_publish.php?s_no=" + data + "&id=" + id,
        cache: "false",
        success: function(detail) {
            var res = detail.split("|?|");

            if (res[1] == 'success') {
                if (id == 'No') {
                    alert_new('Paper Successfully Unpublished!!!', 'green');
                } else {
                    alert_new('Paper Successfully Published!!!', 'green');
                }
                get_content('smartclass/online_exam_paper_list');
            } else {
                alert_new('Please Select Desire Number Of Questions', 'red');
            }
        }
    });
}

function paper_start(data, id) {

    $.ajax({
        type: "POST",
        url: access_link + "smartclass/online_exam_paper_publish.php?s_no=" + data + "&id=" + id,
        cache: "false",
        success: function(detail) {
            var res = detail.split("|?|");

            if (res[1] == 'success') {
                if (id == 'Yes') {
                    alert_new('Paper Successfully Started!!', 'green');
                } else {
                    alert_new('Paper Successfully Ended!!!', 'green');
                }
                get_content('smartclass/online_exam_paper_list');
            } else {
                alert_new('Please Select Desire Number Of Questions', 'red');
            }
        }
    });
}

function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_paper(s_no);
    } else {
        return false;
    }
}

function delete_paper(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/online_exam_paper_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted!!!!', 'green');
                get_content('smartclass/online_exam_paper_list');
            } else {
                alert_new('Sorry!!!! Some Error Occured', 'red');
            }
        }
    });
}

function for_stream(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
        $("#student_class_stream_div").show();
        $("#student_class_stream").attr('required', true);
    } else {
        $("#student_class_stream_div").hide();
        $("#student_class_stream").attr('required', false);
    }
}
</script>
<section class="content">
    <div class="row">
        <div class="box box-success ">
            <div class="box-header with-border ">
                <h3 class="box-title">Online Exam Paper List</h3>
            </div>
            <div class="box-body ">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Class</label>
                        <select name="student_class" id="student_class" class="form-control"
                            onchange="for_subject();for_stream(this.value);">
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
                <div class="col-md-2 " id="student_class_stream_div" style="display:none;">
                    <div class="form-group">
                        <label>Stream</label>
                        <select class="form-control" id="student_class_stream" onchange="for_subject();">
                            <option value="">Select</option>
                            <option value="All">All</option>
                            <option value="SCIENCE">SCIENCE</option>
                            <option value="ARTS">ARTS</option>
                            <option value="Commerce ">Commerce </option>
                        </select>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Subject Name</label>
                        <select class="form-control" id="subject_name">
                            <option value="">Select Subject</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Submission Date</label>
                        <input type="date" id="submission_date" class="form-control" />
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label>Paper Publish Status</label>
                        <select class="form-control" id="publish">
                            <option value="All">All</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>&nbsp;</label>
                        <button class="btn btn-success form-control" type="button" onclick="for_list()">Get
                            List</button>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-success  ">
                        <div class="box-header with-border ">
                        </div>
                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S.No</th>

                                        <th>Publish</th>
                                        <th>Paper Start</th>
                                        <th>Paper ID</th>
                                        <th>Paper Name</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Language</th>
                                        <th>Total Question</th>
                                        <th>Mark</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('common.footer')

<script>
$(function() {
    for_list('');
})

function for_list() {
    var student_class = $("#student_class").val();
    var publish = $("#publish").val();
    var subject_name = $("#subject_name").val();
    var stream_name = $("#student_class_stream").val();
    var subject_name = $("#subject_name").val();
    var submission_date = $("#submission_date").val();
    var dataTable = $('#example1').DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "smartclass/online_exam_paper_list_fetch.php?student_class=" + student_class +
                "&publish=" + publish + "&subject_name=" + subject_name + "&stream_name=" + stream_name +
                "&submission_date=" + submission_date + "",
            type: "post"
        }
    });
}
</script>