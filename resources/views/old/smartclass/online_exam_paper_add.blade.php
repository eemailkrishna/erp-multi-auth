@include('common.header')
@include('common.navbar')

<script>
function for_subject() {

    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class = document.getElementById('class_name').value;
    if (student_class != '') {
        $('#subject_name').html("<option value='' >Loading....</option>");
        $.ajax({
            address: "POST",
            url: access_link + "important_ajax/get_subject.php?class_name=" + student_class + "&class_stream=" +
                student_class_stream + "&class_group=",
            cache: false,
            success: function(detail) {
                $("#subject_name").html(detail);
            }
        });
    } else {
        $("#subject_name").html("<option value=''>Select</option>");
    }
}

function create_unique_id() {
    var class_1 = document.getElementById("class_name").value;
    var subject_1 = document.getElementById("subject_name").value;
    var paper_name = document.getElementById("paper_name").value;
    var date_1 = document.getElementById("current_date").value;
    var language = document.getElementById("paper_language").value;
    var uni_id = class_1 + "_" + subject_1 + "_" + date_1;
    document.getElementById("paper_code").value = uni_id.toLowerCase();


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
$("#my_form").submit(function(e) {
    e.preventDefault();
    var formdata = new FormData(this);


    $.ajax({
        url: access_link + "smartclass/online_exam_paper_add_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete!!!', "green");
                get_content('smartclass/online_exam_paper_list');
            } else {

                alert_new("Sorry!!! Some error occured", 'red');
            }
        }
    });


});
</script>
<section class="content-header">
    <h1>
        Paper Setter
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="{{url('/online-exam')}}"><i class="fa fa-dashboard"></i>Online Exam</a></li>
        <li class="active">Paper Add</li>
    </ol>
</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Paper Add</h3>
        </div>
        <br>
        <form method="post" enctype="multipart/form-data" id="my_form">
            <div class="box-body">
                <div class="col-md-12">

                    <div class="col-md-3">
                    </div>

                    <div class="col-md-6">
                        <label>Unique Id</label>
                        <input type="text" name="paper_code" style="" class="form-control" id="paper_code" readonly />
                        <input type="hidden" name="current_date" value="03122022053605" class="form-control"
                            id="current_date" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Paper Name (Short)</label>
                            <input type="text" name="paper_name" style="" class="form-control" id="paper_name"
                                oninput="create_unique_id();" required />

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Class</label>
                            <select name="class_name" style="" id="class_name" class="form-control"
                                onchange="for_subject();" required>
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

                    <div class="col-md-2 " id="student_class_stream_div" style="display:none;">
                        <div class="form-group">
                            <label>Stream</label>
                            <select class="form-control" id="student_class_stream"
                                onchange="for_subject();create_unique_id();">
                                <option value="">Select</option>
                                <option value="All">All</option>
                                <option value="SCIENCE">SCIENCE</option>
                                <option value="ARTS">ARTS</option>
                                <option value="Commerce ">Commerce </option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Subject</label>
                            <select name="subject_name" style="" class="form-control" id="subject_name"
                                onchange="create_unique_id();" required>
                                <option value="">Select Subject</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Language</label>
                            <select name="paper_language" style="" id="paper_language" class="form-control"
                                onchange="create_unique_id();" required>
                                <option value="hindi">Hindi</option>
                                <option value="english">English</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Total Question</label>
                            <input type="number" name="total_question" style="" class="form-control" required />

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Per Question Mark</label>
                            <input type="text" name="positive_mark" style="" class="form-control" required />

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Total Mark</label>
                            <input type="number" name="total_mark" style="" class="form-control" required />

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Total Time(Minute)</label>
                            <input type="number" name="total_time" style="" class="form-control" required />

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Paper Description</label>
                            <input type="text" name="paper_description" style="" class="form-control" />

                        </div>
                    </div>
                </div>

                <br />
                <div class="col-md-12">
                    <center><button type="submit" name="submit" id="my_submit" class="btn btn-success">Submit</button>
                    </center><br />
                </div>


            </div>
        </form>

    </div>
    </div>
</section>


@include('common.footer')