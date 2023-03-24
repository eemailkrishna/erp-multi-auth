@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function get_student_list() {
    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var student_class_stream = document.getElementById('student_class_stream').value;
    var followup_date_to = document.getElementById('followup_date_to').value;
    var followup_date_from = document.getElementById('followup_date_from').value;
    var next_followup_date_from = document.getElementById('next_followup_date_from').value;
    var next_followup_date_to = document.getElementById('next_followup_date_to').value;
    var order_by = document.getElementById('order_by').value;
    if (student_class != '') {
        $("#student_list").html(loader_div_google);
        $.ajax({
            type: "POST",
            url: access_link + "call_management/call_student_list_ajax.php?student_class=" + student_class +
                "&student_class_stream=" + student_class_stream + "&student_class_group=" +
                student_class_section + "&order_by=" + order_by + "&followup_date_to=" + followup_date_to +
                "&next_followup_date_from=" + next_followup_date_from + "&next_followup_date_to=" +
                next_followup_date_to + "&followup_date_from=" + followup_date_from,
            cache: false,
            success: function(detail) {
                $("#student_list").html(detail);
            }
        });
    } else {
        alert_new("Please Select Class!!", "red");
        $("#student_list").html('');
    }
}

function call_management(id) {
    $("#s_no_hidden").val(id);
    $("#call_history_old").val($("#call_history_" + id).val());
    $("#call_history_old_show").html($("#call_history_" + id).val());
    $("#contact_number").val($("#contact_number_" + id).val());
    $("#call_history_modal").modal('show');
}

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    $.ajax({
        url: access_link + "call_management/call_student_list_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Updated!!!', "green");
                $("#call_history_modal").modal('hide');
                $("#call_history_old").val('');
                $("#call_history").val('');

                $("#call_history_" + res[2]).val(res[3]);
                $("#call_history_html_" + res[2]).html(res[3]);
                $("#followup_date_" + res[2]).val(res[4]);
                $("#followup_date_html_" + res[2]).html(res[4]);
                $("#followup_date_next_" + res[2]).val(res[5]);
                $("#followup_date_next_html_" + res[2]).html(res[5]);
            } else {
                alert_new('Sorry!!! Some Error Occured', "red");
                $("#call_history_modal").modal('hide');
            }
        }
    });
});

function for_stream(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
        $("#stream_div").show();
    } else {
        $("#stream_div").hide();
    }
}

function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "student/ajax_class_section_all.php?class_name=" + value + "",
        cache: false,
        success: function($detail) {
            var str = $detail;

            $("#student_class_section").html(str);
            for_search11();

        }
    });

}
</script>
<section class="content-header">
    <h1>
        Student Call Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/student')}}"><i class="fa fa-phone-square"></i> Student</a></li>
        <li class="active"><i class="fa fa-list"></i> Student Call Management </li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border ">
                    <h3 class="box-title"> Student Call Management</h3>
                </div>

                <div class="box-body ">

                    <div class="col-md-3">
                        <label>Class</label>
                        <select name="student_class" onchange="for_section(this.value);" id="student_class"
                            class="form-control">
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

                    <div class="col-md-3" id="stream_div" style="display:none">
                        <div class="form-group">
                            <label>Class Stream</label>
                            <select class="form-control select2" name="" id="student_class_stream" style="width:100%;">
                                <option value="All">All</option>
                                <option value="LLB">LLB</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label>Section</label>
                        <select name="student_class_section" id="student_class_section" style="width:100%;"
                            class="form-control">
                            <option value="">Select</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Last Follow Date From</label>

                            <input type="date" id="followup_date_from" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Last Follow Date To</label>

                            <input type="date" id="followup_date_to" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Next Call Date From</label>

                            <input type="date" id="next_followup_date_from" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Next Call Date To</label>

                            <input type="date" id="next_followup_date_to" value="" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Order By</label>
                            <select class="form-control" name="order_by" id="order_by">
                                <option value=" ORDER BY student_name ASC">Student Name</option>
                                <option value=" ORDER BY CAST(student_admission_number AS UNSIGNED) ASC">Student
                                    Admission Number</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <br>
                            <button type="button" onclick="get_student_list();" class="btn btn-success ">Get
                                List</button>
                        </div>
                    </div>
                </div>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success" id="student_list">

            </div>
        </div>
    </div>
</section>


<form role="form" method="post" enctype="multipart/form-data" id="my_form">
    <div class="modal " id="call_history_modal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Call Update</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <input type="hidden" id="s_no_hidden" name="s_no_hidden">
                <input type="hidden" id="call_history_old" name="call_history_old">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Contact Number</label>

                                <input type="text" id="contact_number" value="" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Call Date</label>

                                <input type="date" name="followup_date" value="2022-12-16" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Next Call Date</label>

                                <input type="date" name="followup_date_next" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Call By</label>
                                <input type="text" id="call_by" value="kailash soni" name="call_by" class="form-control"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Call History</label>

                                <p id="call_history_old_show" readonly></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Call Detail</label>

                                <textarea rows"5" id="call_history" name="call_history" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>
</form>


@include('common.footer')


<script>
$(function() {
    $('#example1').DataTable()
})
</script>