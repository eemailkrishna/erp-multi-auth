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
        delete_video_lecture(s_no);
    } else {
        return false;
    }
}

function delete_video_lecture(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/video_lecture_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Video Successfully Deleted!!!!', 'green');
                get_content('smartclass/video_lecture_list');
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

function hide_video_lecture(s_no, hide_show) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/video_lecture_hide.php?id=" + s_no + "&hide_show=" + hide_show,
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                if (hide_show == 'Active') {
                    alert_new('Video Successfully Activated!!!!', 'green');
                } else {
                    alert_new('Video Successfully HIde!!!!', 'green');
                }
                for_search();
            } else {

                alert_new("Sorry!!!! Some Error Occured", "red");
            }
        }
    });
}

function form_submit() {
    $("#modal_close1").click();
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/video_lecture_edit_api.php",
        data: $("#my_form").serialize(),
        success: function(detail) {
            $('#myModal12').modal('hide');
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Video Info Successfully Updated!!!!', 'green');
                for_search();

            }
        }
    });
}

function for_edit(s_no) {
    var data = $("#id_hidden_" + s_no).val();
    var data1 = data.split("|?|");
    $("#s_no_hidden").val(s_no);
    $("#video_title").val(data1[0]);
    $("#video_link").val(data1[1]);
    $("#video_remark").val(data1[2]);
}
</script>

<script>
function for_print() {
    var divToPrint = document.getElementById("example1");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
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
        <li class="active"><i class="fa fa-user-plus"></i>Video Lecture List</li>
    </ol>
</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Video Lecture Filter</h3>
        </div>
        <br>
        <div class="box-body">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Class</label>
                    <select name="student_class" id="student_class" class="form-control"
                        onchange="for_subject();for_search();for_stream(this.value);">
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
            <h3 class="box-title" style="color:teal;">Video Lecture List</h3>
        </div>
        <br>
        <div class="box-body">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Class</th>
                            <th>Student Section</th>
                            <th>Subject</th>
                            <th>Title</th>
                            <th>Video Link</th>
                            <th>Play</th>
                            <th>Date</th>
                            <th>Remark</th>
                            <th>Update By</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Hide/Show</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>

                <div class="col-md-12">
                    <div class="col-md-6">
                        <center><button type="button" class="btn btn-success"
                                onclick="exportTableToExcel('example1', 'Video Lecture Report')"><i class="fa fa-print"
                                    aria-hidden="true"></i>Print In Excel</button></center>
                    </div>
                    <div class="col-md-6">
                        <center><button type="button" class="btn btn-primary" onclick="for_print();"><i
                                    class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>


    <!-- /.col -->
    </div>

    <div class="modal fade myModal121223" id="myModal12" role="dialog">
        <form role="form" method="post" enctype="multipart/form-data" id="my_form">
            <input type="hidden" id="s_no_hidden" name="s_no_hidden">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Video Title</label>
                                <input type="text" value="" name="video_title" id="video_title" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Video Youtube Link</label>
                                <input type="text" value="" name="video_link" placeholder="eg. fE1q8s0NNAA"
                                    id="video_link" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Remark</label>
                                <input type="text" name="video_remark" placeholder="Remark" value="" id="video_remark"
                                    class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" data-dismiss="modal" onclick="form_submit();" value="Add"
                            class="btn btn-success" />
                        <button type="button" id="modal_close1" class="btn btn-danger"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>

@include('common.footer')

<!-- /.content -->
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
            url: access_link + "smartclass/video_lecture_list_fetch.php" + pass_var,
            type: "post"
        }
    });
}
for_search();
</script>
<script>
function exportTableToExcel(tableID, filename = '') {
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}
</script>