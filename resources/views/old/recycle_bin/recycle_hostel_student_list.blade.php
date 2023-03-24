@include('common.header')
@include('common.navbar')

<script>
function valid1(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_data(s_no);
    } else {
        return false;
    }
}

function delete_data(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "recycle_bin/recycle_hostel_list_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('recycle_bin/recycle_hostel_student_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}

function valid(s_no) {
    var myval = confirm("Are you sure want to restore this record !!!!");
    if (myval == true) {
        restore_data(s_no);
    } else {
        return false;
    }
}

function restore_data(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "recycle_bin/recycle_hostel_list_restore.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Restore', 'green');
                get_content('recycle_bin/recycle_hostel_student_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Recycle Bin
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/recycle-bin')}}"><i class="fal fa-trash-alt"></i> Recycle Bin</a></li>
        <li class="active">Hostel Student Recycle Bin</li>
    </ol>
</section>


<!---***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Student Hostel List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S_no</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Class</th>
                                <th>Hostel Name</th>
                                <th>Room No.</th>
                                <th>Roll No.</th>
                                <th>Total Fees</th>
                                <th>Restore</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ranu Ghuraiya</td>
                                <td>Mahesh Ghuraiya</td>
                                <td>NURSERY</td>
                                <td>New Students Hostal</td>
                                <td>104</td>
                                <td>1800003</td>
                                <td>9000</td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('2');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('2');">Delete</button></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>shurya singh</td>
                                <td>shory singh</td>
                                <td>9TH</td>
                                <td>jaypal Hostel</td>
                                <td></td>
                                <td>1800027</td>
                                <td>5000</td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('3');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('3');">Delete</button></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>ANKIT SHARMA</td>
                                <td>ASHOK SHARMA</td>
                                <td>6TH</td>
                                <td>dsfgdfg</td>
                                <td></td>
                                <td>1900144</td>
                                <td>2000</td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('5');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('5');">Delete</button></td>

                            </tr>
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
<script>
$(function() {
    $('#example1').DataTable()
})
</script>
@include('common.footer')