@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function for_subject() {

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
</script>
<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_study_material(s_no);
    } else {
        return false;
    }
}

function delete_study_material(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/study_material_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Study Material Successfully Deleted!!!!', 'green');
                get_content('smartclass/delete_study_material_list');
            } else {
                alert_new("Sorry!!!! Some Error Occured", "red");
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

function hide_study_material(s_no, hide_show) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/study_material_hide.php?id=" + s_no + "&hide_show=" + hide_show,
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                if (hide_show == 'Active') {
                    alert_new('Study Material Successfully Activated!!!!', 'green');
                } else {
                    alert_new('Study Material Successfully HIde!!!!', 'green');
                }
                for_search();
            } else {

                alert_new("Sorry!!!! Some Error Occured", "red");
            }
        }
    });
}
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Library Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="{{url('/study-material')}}"><i class="fa fa-book"></i> Study Material</a>
        </li>
        <li class="active">Study Material List</li>
    </ol>

</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Study Material Filter</h3>
        </div>
        <br>
        <div class="box-body">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Class</label>
                    <select name="student_class" id="student_class" class="form-control"
                        onchange="for_subject();for_search();for_stream(this.value);">
                        <option value="">All</option>
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
                        onchange="for_search();for_subject();">
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
                    <label>Subject Name</label>
                    <select class="form-control" name="exam_stuff_subject" id="subject_name" required
                        onchange="for_search();">
                        <option value="">Select Subject</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Particular Date</label>
                    <input type="date" name="particular_date" id="particular_date" class="form-control"
                        oninput="for_search();" value="" />
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Study Material List</h3>
        </div>
        <br>
        <div class="box-body">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Class</th>
                            <th>Subject</th>
                            <th>Document Name</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>File</th>
                            <th>Link</th>
                            <th>Show/Hide</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            </form>
        </div>
    </div>
    </div>

</section>
@include('common.footer')


<script>
function for_search() {
    var student_class = document.getElementById('student_class').value;
    var particular_date = document.getElementById('particular_date').value;
    var subject_name = document.getElementById('subject_name').value;
    var student_class_stream = document.getElementById('student_class_stream').value;

    var pass_var = "?student_class=" + student_class + "&particular_date=" + particular_date + "&subject_name=" +
        subject_name + "&student_class_stream=" + student_class_stream;

    var dataTable = $('#example1').DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "smartclass/study_material_list_fetch.php" + pass_var,
            type: "post"
        }
    });
}
for_search();
</script>