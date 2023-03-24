@include('common.header')
@include('common.navbar')

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_element(s_no);
    } else {
        return false;
    }
}

function delete_element(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "certificate/tutionfee_certificate_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('certificate/tutionfee_certificate_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Certificate Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/certificate')}}"><i class="fa fa-certificate"></i>
                Certificate</a></li>
        <li class="active">Tutionfee Certificate List</li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success ">
                <div class="box-header with-border">
                    <h3 class="box-title">Tutionfee Certificate List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>student Name</th>
                                <th>Father's Name</th>
                                <th>Roll.No.</th>
                                <th>School Name</th>
                                <th>During Year</th>
                                <th>Issue Date</th>
                                <th>Bonafied Type</th>

                                <th>Update By</th>
                                <th>Date</th>

                                <th>Print</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Palak Kumari</td>
                                <td>Krishna Sahani</td>
                                <td>2000332</td>
                                <td>SIMPTION TECH PVT LTD</td>
                                <td>22 - 23</td>
                                <td>05-01-2023</td>
                                <td>2000</td>

                                <td>rahul@simption.com</td>
                                <td>01-12-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tutionfee_certificate.php?id=128'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/tutionfee_certificate_form_edit','id=128')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('128');">Delete</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>joy</td>
                                <td>peter</td>
                                <td>2000345</td>
                                <td>SIMPTION TECH PVT LTD</td>
                                <td>2022 - 2022</td>
                                <td>24-11-2022</td>
                                <td>500</td>

                                <td>rahul@simption.com</td>
                                <td>25-11-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tutionfee_certificate.php?id=127'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/tutionfee_certificate_form_edit','id=127')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('127');">Delete</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>joy</td>
                                <td>peter</td>
                                <td>2000345</td>
                                <td>SIMPTION TECH PVT LTD</td>
                                <td>2021 - 2022</td>
                                <td>25-11-2022</td>
                                <td>18500</td>

                                <td>rahul@simption.com</td>
                                <td>25-11-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tutionfee_certificate.php?id=126'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/tutionfee_certificate_form_edit','id=126')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('126');">Delete</button></td>
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