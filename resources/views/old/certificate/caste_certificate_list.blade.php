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
        url: access_link + "certificate/caste_certificate_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('certificate/caste_certificate_list');
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
		        <li class="active">Caste Certificate List</li>
		    </ol>
		</section>


		<!-- Main content -->
		<section class="content">
		    <div class="row">
		        <div class="col-xs-12">

		            <!-- /.box -->

		            <div class="box box-success ">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Caste Certificate List</h3>
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
		                                <th>Category</th>
		                                <th>Caste Name</th>

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
		                                <td>cddf</td>
		                                <td></td>
		                                <td>2100437</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>Muslim </td>
		                                <td>Meo</td>

		                                <td>rahul@simption.com</td>
		                                <td>27-11-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=167'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=167')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('167');">Delete</button></td>
		                            </tr>
		                            <tr>
		                                <td>2</td>
		                                <td>joy</td>
		                                <td>peter</td>
		                                <td>2000345</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>General</td>
		                                <td>muslim</td>

		                                <td>rahul@simption.com</td>
		                                <td>25-11-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=166'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=166')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('166');">Delete</button></td>
		                            </tr>
		                            <tr>
		                                <td>3</td>
		                                <td>Jayssh</td>
		                                <td>parvesh</td>
		                                <td>2100407</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>muslim</td>
		                                <td>musli</td>

		                                <td>rahul@simption.com</td>
		                                <td>25-11-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=165'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=165')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('165');">Delete</button></td>
		                            </tr>
		                            <tr>
		                                <td>4</td>
		                                <td>LAXMI GUPTA </td>
		                                <td>SUSHIL GUPTA </td>
		                                <td>2000374</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>Obc</td>
		                                <td>Sundi</td>

		                                <td>rahul@simption.com</td>
		                                <td>19-11-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=164'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=164')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('164');">Delete</button></td>
		                            </tr>
		                            <tr>
		                                <td>5</td>
		                                <td>RAM PANDEY</td>
		                                <td>KAMLESH PANDEY</td>
		                                <td>2200633</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>rajpoot</td>
		                                <td>GEN</td>

		                                <td>rahul@simption.com</td>
		                                <td>29-07-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=155'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=155')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('155');">Delete</button></td>
		                            </tr>
		                            <tr>
		                                <td>6</td>
		                                <td>shreyansh</td>
		                                <td>Neeraj kumar</td>
		                                <td>2200791</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>General</td>
		                                <td>Rajput</td>

		                                <td>rahul@simption.com</td>
		                                <td>26-05-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=146'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=146')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('146');">Delete</button></td>
		                            </tr>
		                            <tr>
		                                <td>7</td>
		                                <td>vishal vilran</td>
		                                <td>Jagdish Chandra</td>
		                                <td>2000230</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>SC</td>
		                                <td>Valmiki</td>

		                                <td>rahul@simption.com</td>
		                                <td>26-04-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=142'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=142')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('142');">Delete</button></td>
		                            </tr>
		                            <tr>
		                                <td>8</td>
		                                <td>Ram</td>
		                                <td>Dam</td>
		                                <td>2000211</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>General</td>
		                                <td>bhumihar</td>

		                                <td>rahul@simption.com</td>
		                                <td>03-04-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=137'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=137')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('137');">Delete</button></td>
		                            </tr>
		                            <tr>
		                                <td>9</td>
		                                <td>RAJESH TRIVEDI</td>
		                                <td>RAMLAL</td>
		                                <td>2000201</td>
		                                <td>SIMPTION TECH PVT LTD</td>
		                                <td>gree</td>
		                                <td>obc</td>

		                                <td>rahul@simption.com</td>
		                                <td>26-04-2022</td>

		                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/caste_certificate.php?id=135'
		                                        target="_blank"><button type="button"
		                                            class="btn btn-success">Print</button></a></td>
		                                <td><button type="button"
		                                        onclick="post_content('certificate/caste_certificate_form_edit','id=135')"
		                                        class="btn btn-success">Edit</button></td>
		                                <td><button type="button" class="btn btn-danger"
		                                        onclick="return valid('135');">Delete</button></td>
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