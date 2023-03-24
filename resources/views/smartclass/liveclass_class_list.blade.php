@include('common.header')
@include('common.navbar')

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_liveclass_googlemeet(s_no);
    } else {
        return false;
    }
}

function delete_liveclass_googlemeet(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/liveclass_class_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Class Successfully Deleted !!!', 'green');
                get_content('smartclass/liveclass_class_list');
            } else {
                alert_new("Sorry!!!! Some Error Occured", "red");
            }
        }
    });
}

function start_meeting(s_no, meeting_id) {
    window.open("https://zoom.us/meeting/" + meeting_id, "_blank");
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/liveclass_start_meeting.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Class Successfully Started !!!', 'green');
                get_content('smartclass/liveclass_class_list');
            } else {
                alert_new("Sorry!!!! Some Error Occured", "red");
            }
        }
    });

}

function class_detail(id) {
    post_content('smartclass/liveclass_student_call_list', 'id=' + id);
}

function start_meeting_new(s_no) {
    post_content("smartclass/live_class_student_list", 'id=' + s_no);
}

function end_meeting(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/liveclass_end_meeting.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Class Successfully Ended !!!', 'green');
                get_content('smartclass/liveclass_class_list');
            } else {
                alert_new("Sorry!!!! Some Error Occured", "red");
            }
        }
    });

}

function hide_liveclass(s_no, hide_show) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/liveclass_hide.php?id=" + s_no + "&hide_show=" + hide_show,
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                if (hide_show == 'Active') {
                    alert_new('LiveClass Successfully Activated!!!!', 'green');
                } else {
                    alert_new('LiveClass Successfully HIde!!!!', 'green');
                }
                for_search();
            } else {

                alert_new("Sorry!!!! Some Error Occured", "red");
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Live Class Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="{{url('/liveclass')}}"><i class="fa fa-book"></i> Live Class</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Live Class List</li>
    </ol>
</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title">Live Class Filter </h3>
        </div>
        <div class="box-body table-responsive">

            <div class="col-md-4 col-md-offset-4">


                <div class="col-md-6">
                    <div class="form-group">
                        <label>Class</label>
                        <select name="student_class" id="student_class" class="form-control" onchange="for_search();">
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

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Particular Date</label>
                        <input type="date" name="particular_date" id="particular_date" class="form-control"
                            oninput="for_search();" value="" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title">Live Class List </h3>
        </div><br>
        <div class="box-body table-responsive">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Show Hide</th>
                            <th>Class Status</th>
                            <th>Detail</th>
                            <th>Class</th>
                            <th>Student Section</th>
                            <th>Subject</th>
                            <th>Class Title</th>
                            <th>Class Date</th>
                            <th>Class Time</th>
                            <th>Class Duration</th>
                            <th>Teacher</th>
                            <th>Platform</th>
                            <th>CLass ID</th>
                            <th>Platform Password</th>

                            <th>Update By</th>
                            <th>Date</th>

                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>
@include('common.footer')



<!-- /.content -->
<script>
function for_search() {
    var student_class = document.getElementById('student_class').value;
    var particular_date = document.getElementById('particular_date').value;
    if (student_class != '' && particular_date != '') {
        var pass_var = "?student_class=" + student_class + "&particular_date=" + particular_date;
    } else {
        if (student_class != '') {
            var pass_var = "?student_class=" + student_class;
        } else if (particular_date != '') {
            var pass_var = "?particular_date=" + particular_date;
        } else {
            var pass_var = "";
        }
    }
    var dataTable = $('#example1').DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "smartclass/liveclass_class_list_fetch.php" + pass_var,
            type: "post"
        }
    });
}
for_search();
</script>