@include('common.header')
@include('common.navbar')

<script type="text/javascript">
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    $("#get_content").html(loader_div);
    $.ajax({
        url: access_link + "smartclass/study_material_add_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete!!!', 'green');
                get_content('smartclass/study_material_list');
            } else {
                alert_new("Sorry!!! Some error occured", 'red');
            }
        }
    });
});

function for_document_type(value) {

    if (value == "File Upload") {
        $("#file_upload_div").show();
        $("#link_div").hide();
        $("#upload_file").prop("required", true);
        $("#link").prop("required", false);
    } else {

        $("#file_upload_div").hide();
        $("#link_div").show();
        $("#upload_file").prop("required", false);
        $("#link").prop("required", true);
    }
}


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

function for_subject() {
    $('#subject_name').html("<option value='' >Loading....</option>");
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;
    var student_class = document.getElementById('student_class').value;

    $.ajax({
        address: "POST",
        url: access_link + "important_ajax/get_subject.php?class_name=" + student_class + "&class_stream=" +
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
        Study Material Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="{{url('/study-material')}}"><i class="fa fa-book"></i> Study Material</a>
        </li>
        <li class="active">Study Material Add</li>
    </ol>

</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border ">
            <h3 class="box-title">Study Material Add</h3>
        </div>
        <form id="my_form" role="form" method="post" enctype="multipart/form-data">
            <br>
            <div class="box-body table-responsive">
                <div class="col-md-12">
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class</label>
                            <select name="exam_stuff_class"
                                onchange="for_section(this.value);for_subject();for_stream(this.value);for_search();"
                                id="student_class" class="form-control" required>
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
                                onchange="get_group(this.value);for_subject();">
                                <option value="">Select</option>
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
                            <select class="form-control" name="student_class_group" id="student_class_group">
                                <option value="">Select</option>
                                <option value="All">All</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Section</label>
                            <select class="form-control" name="student_class_section" id="student_class_section">
                                <option value=''>Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Subject Name</label>
                            <select class="form-control" name="exam_stuff_subject" id="subject_name" required
                                onchange="for_search();">
                                <option value="">Select Subject</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ducument Name</label>
                            <input type="text" name="exam_stuff_document_name" placeholder="Ducument Name" value=""
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" name="exam_stuff_date" placeholder="Publish Date"
                                required />
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Document Type</label>
                            <select name="document_type" onchange="for_document_type(this.value);" class="form-control"
                                required>
                                <option value="">Select Document Type</option>
                                <option value="File Upload">File Upload</option>
                                <option value="Direct Link">Direct Link</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" style="display:none" id="link_div">
                        <div class="form-group">
                            <label>Link("https://example.com/")</label>
                            <input type="text" class="form-control" name="link" id="link" />
                        </div>
                    </div>
                    <div class="col-md-4" id="file_upload_div">
                        <div class="form-group">
                            <label>Upload Documents</label>
                            <input type="file" id="upload_file" name="upload_file" value="" class="form-control"
                                accept=".gif, .jpg, .jpeg, .png, .pdf">
                        </div>
                    </div>


                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" class="btn  btn-success" /></center>
                    </div>
                </div>


        </form>
    </div>
    </div>
    </div>

</section>

@include('common.footer')