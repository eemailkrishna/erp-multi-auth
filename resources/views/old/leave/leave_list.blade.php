    @include('common.header')
    @include('common.navbar')
    <section class="content-header">
        <h1>
            Leave Management </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/leave')}}"><i class="fa fa-umbrella"></i> Leave Management</a></li>
            <li class="active"><i class="fa fa-list"></i> Leave List</li>
        </ol>
    </section>

    <script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        for_delete(s_no);
    } else {
        return false;
    }
}

function for_delete(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "leave/delete_leave.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('leave/leave_list');
            } else {
                alert_new(detail);
            }
        }
    });
}
    </script>

    <!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Leave List</h3>
                    </div>


                    <!-- /.box-header -->
                    <div class="box-body table-responsive">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Class</label>
                                <select name="student_class" id="student_class" class="form-control"
                                    onchange="for_search();">
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

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Particular Date</label>
                                <input type="date" name="particular_date" id="particular_date" class="form-control"
                                    oninput="for_search();" value="" />
                            </div>
                        </div>

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>student Name</th>
                                    <th>Class</th>
                                    <th>Roll.No.</th>
                                    <th>Section</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Total leave days</th>
                                    <th>Approved By</th>
                                    <th>Application</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
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
            url: access_link + "leave/leave_list_fatch.php" + pass_var,
            type: "post"
        }
    });
}
for_search();
    </script>
    @include('common.footer')