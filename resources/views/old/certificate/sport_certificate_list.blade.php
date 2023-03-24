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
        url: access_link + "certificate/sport_certificate_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('certificate/sport_certificate_list');
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
        <li><a href="{{url('/certificate')}}"><i class="fa fa-certificate"></i> Certificate</a></li>
        <li class="active">Sports Certificate List</li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success ">
                <div class="box-header with-border">
                    <h3 class="box-title">Sports Certificate List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>student Name</th>
                                <th>Roll.No.</th>
                                <th>Sports Type</th>
                                <th>Organized Date</th>
                                <th>Rank </th>

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
                                <td>2000332</td>
                                <td>criket</td>
                                <td>24-12-2022</td>
                                <td>2</td>

                                <td>rahul@simption.com</td>
                                <td>02-12-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=304'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=304')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('304');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Umesh</td>
                                <td>2000298</td>
                                <td>kabbadi</td>
                                <td>12-02-2022</td>
                                <td>1</td>

                                <td>rahul@simption.com</td>
                                <td>02-12-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=303'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=303')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('303');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Nidhi Mishra</td>
                                <td>2100601</td>
                                <td>kho kho </td>
                                <td>01-12-2022</td>
                                <td>1</td>

                                <td>rahul@simption.com</td>
                                <td>01-12-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=302'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=302')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('302');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Palak Kumari</td>
                                <td>2000332</td>
                                <td>Cricket</td>
                                <td>01-01-2023</td>
                                <td>1</td>

                                <td>rahul@simption.com</td>
                                <td>29-11-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=301'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=301')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('301');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Jayssh</td>
                                <td>2100407</td>
                                <td>Cricket </td>
                                <td>01-11-2022</td>
                                <td>Good </td>

                                <td>rahul@simption.com</td>
                                <td>27-11-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=300'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=300')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('300');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>deepak kumar</td>
                                <td>2000342</td>
                                <td>रिकेत</td>
                                <td>07-11-2022</td>
                                <td>1</td>

                                <td>rahul@simption.com</td>
                                <td>07-11-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=298'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=298')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('298');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Rashid khan</td>
                                <td>2000348</td>
                                <td>dddd</td>
                                <td>12-11-2022</td>
                                <td>a</td>

                                <td>rahul@simption.com</td>
                                <td>06-11-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=297'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=297')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('297');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>RAHUL</td>
                                <td>2000315</td>
                                <td>KBDDI</td>
                                <td>14-01-2022</td>
                                <td>1</td>

                                <td>rahul@simption.com</td>
                                <td>08-08-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=287'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=287')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('287');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>RAHUL</td>
                                <td>2000315</td>
                                <td>Cricket</td>
                                <td>25-04-2022</td>
                                <td>4</td>

                                <td>rahul@simption.com</td>
                                <td>25-04-2022</td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/sport_certificate.php?id=267'
                                        target="_blank"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                                <td><button type="button"
                                        onclick="post_content('certificate/sport_certificate_form_edit','id=267')"
                                        class="btn btn-success">Edit</button></td>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('267');">Delete</button></td>
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
@include('common.footer')
<script>
$(function() {
    $('#example1').DataTable()
})
</script>