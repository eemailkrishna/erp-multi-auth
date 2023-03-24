@include('common.header')
@include('common.navbar')


<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_notification(s_no);
    } else {
        return false;
    }
}

function delete_notification(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/notification_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted!!!', 'green');
                get_content('smartclass/notification_list');
            } else {
                alert_new("Sorry!!! Some error occured", "red");
            }
        }
    });
}

function hide_notification(s_no, hide_show) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/notification_hide.php?id=" + s_no + "&hide_show=" + hide_show,
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                if (hide_show == 'Active') {
                    alert_new('Notification Successfully Activated!!!!', 'green');
                } else {
                    alert_new('Notification Successfully HIde!!!!', 'green');
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
        Notification Management
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-dashboard"></i>Smart Class</a></li>
        <li><a href="{{url('/notification')}}"><i class="fa fa-book"></i>Notification Panel</a></li>
        <li class="active"><i class="fa fa-list"></i>Notification List</li>
    </ol>
</section>

<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title">Notification List</h3>
        </div>
        <br>
        <div class="box-body">
            <div class="col-md-3">
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
        </div>
    </div>
    <br>
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title">Notification List</h3>
        </div>
        <br>
        <div class="box-body table-responsive">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Class</th>
                            <th>Student Section</th>
                            <th>Notification</th>
                            <th>Date</th>
                            <th>Remark</th>
                            <th>Update By</th>
                            <th>Update Date</th>
                            <th>Hide/Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody></tbody>

                </table>
            </div>
        </div>
    </div>
    </div>
</section>

@include('common.footer')


<script>
function for_search() {
    var student_class = document.getElementById('student_class').value;
    var pass_var = "?student_class=" + student_class;

    var dataTable = $('#example1').DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "smartclass/notification_list_fetch.php" + pass_var,
            type: "post"
        }
    });
}
for_search();
</script>