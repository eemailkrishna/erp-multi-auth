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
        url: access_link + "certificate/event_certificate_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('certificate/event_certificate_list');
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
	        <li class="active">Event Certificate List</li>
	    </ol>
	</section>


	<!-- Main content -->
	<section class="content">
	    <div class="row">
	        <div class="col-xs-12">

	            <!-- /.box -->

	            <div class="box box-success ">
	                <div class="box-header with-border">
	                    <h3 class="box-title">Event Certificate List</h3>
	                </div>
	                <!-- /.box-header -->
	                <div class="box-body table-responsive">
	                    <table id="example1" class="table table-bordered table-striped">
	                        <thead>
	                            <tr>
	                                <th>S.no.</th>
	                                <th>student Name</th>
	                                <th>Roll.No.</th>
	                                <th>Event Type</th>
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
	                                <td>Rajesh Prasad</td>
	                                <td>2000314</td>
	                                <td>sports</td>
	                                <td>31-12-2022</td>
	                                <td>1</td>

	                                <td>rahul@simption.com</td>
	                                <td>02-12-2022</td>

	                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/event_certificate_cbs.php?id=230&session=2022_23'
	                                        target="_blank"><button type="button"
	                                            class="btn btn-success">Print</button></a></td>
	                                <td><button type="button"
	                                        onclick="post_content('certificate/event_certificate_form_edit','id=230')"
	                                        class="btn btn-success">Edit</button></td>


	                                <td><button type="button" class="btn btn-danger"
	                                        onclick="return valid('230');">Delete</button></td>
	                            </tr>

	                            <tr>
	                                <td>2</td>
	                                <td>joy</td>
	                                <td>2000345</td>
	                                <td>sports</td>
	                                <td>22-12-2022</td>
	                                <td>1</td>

	                                <td>rahul@simption.com</td>
	                                <td>01-12-2022</td>

	                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/event_certificate_cbs.php?id=229&session=2022_23'
	                                        target="_blank"><button type="button"
	                                            class="btn btn-success">Print</button></a></td>
	                                <td><button type="button"
	                                        onclick="post_content('certificate/event_certificate_form_edit','id=229')"
	                                        class="btn btn-success">Edit</button></td>


	                                <td><button type="button" class="btn btn-danger"
	                                        onclick="return valid('229');">Delete</button></td>
	                            </tr>

	                            <tr>
	                                <td>3</td>
	                                <td>S</td>
	                                <td>2000142</td>
	                                <td>cultural</td>
	                                <td>24-11-2022</td>
	                                <td>3</td>

	                                <td>rahul@simption.com</td>
	                                <td>29-11-2022</td>

	                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/event_certificate_cbs.php?id=228&session=2022_23'
	                                        target="_blank"><button type="button"
	                                            class="btn btn-success">Print</button></a></td>
	                                <td><button type="button"
	                                        onclick="post_content('certificate/event_certificate_form_edit','id=228')"
	                                        class="btn btn-success">Edit</button></td>


	                                <td><button type="button" class="btn btn-danger"
	                                        onclick="return valid('228');">Delete</button></td>
	                            </tr>

	                            <tr>
	                                <td>4</td>
	                                <td>deepak kumar</td>
	                                <td>2000342</td>
	                                <td>Ksjj</td>
	                                <td>06-10-2022</td>
	                                <td>1</td>

	                                <td>rahul@simption.com</td>
	                                <td>06-10-2022</td>

	                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/event_certificate_cbs.php?id=220&session=2022_23'
	                                        target="_blank"><button type="button"
	                                            class="btn btn-success">Print</button></a></td>
	                                <td><button type="button"
	                                        onclick="post_content('certificate/event_certificate_form_edit','id=220')"
	                                        class="btn btn-success">Edit</button></td>


	                                <td><button type="button" class="btn btn-danger"
	                                        onclick="return valid('220');">Delete</button></td>
	                            </tr>

	                            <tr>
	                                <td>5</td>
	                                <td>RAHUL</td>
	                                <td>2000315</td>
	                                <td>sanskratik </td>
	                                <td>10-02-2022</td>
	                                <td>1st </td>

	                                <td>rahul@simption.com</td>
	                                <td>03-08-2022</td>

	                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/event_certificate_cbs.php?id=219&session=2022_23'
	                                        target="_blank"><button type="button"
	                                            class="btn btn-success">Print</button></a></td>
	                                <td><button type="button"
	                                        onclick="post_content('certificate/event_certificate_form_edit','id=219')"
	                                        class="btn btn-success">Edit</button></td>


	                                <td><button type="button" class="btn btn-danger"
	                                        onclick="return valid('219');">Delete</button></td>
	                            </tr>

	                            <tr>
	                                <td>6</td>
	                                <td> BABALI SAHU</td>
	                                <td>2100575</td>
	                                <td>colors day</td>
	                                <td>29-07-2022</td>
	                                <td>1</td>

	                                <td>rahul@simption.com</td>
	                                <td>29-07-2022</td>

	                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/event_certificate_cbs.php?id=218&session=2022_23'
	                                        target="_blank"><button type="button"
	                                            class="btn btn-success">Print</button></a></td>
	                                <td><button type="button"
	                                        onclick="post_content('certificate/event_certificate_form_edit','id=218')"
	                                        class="btn btn-success">Edit</button></td>


	                                <td><button type="button" class="btn btn-danger"
	                                        onclick="return valid('218');">Delete</button></td>
	                            </tr>

	                            <tr>
	                                <td>7</td>
	                                <td>RAHUL</td>
	                                <td>2000315</td>
	                                <td>speech</td>
	                                <td>07-06-1993</td>
	                                <td>1</td>

	                                <td>rahul@simption.com</td>
	                                <td>12-07-2022</td>

	                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/event_certificate_cbs.php?id=209&session=2022_23'
	                                        target="_blank"><button type="button"
	                                            class="btn btn-success">Print</button></a></td>
	                                <td><button type="button"
	                                        onclick="post_content('certificate/event_certificate_form_edit','id=209')"
	                                        class="btn btn-success">Edit</button></td>


	                                <td><button type="button" class="btn btn-danger"
	                                        onclick="return valid('209');">Delete</button></td>
	                            </tr>

	                            <tr>
	                                <td>8</td>
	                                <td>vishal vilran</td>
	                                <td>2000230</td>
	                                <td>Jonn</td>
	                                <td>17-06-2022</td>
	                                <td>Good</td>

	                                <td>rahul@simption.com</td>
	                                <td>17-06-2022</td>

	                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/event_certificate_cbs.php?id=204&session=2022_23'
	                                        target="_blank"><button type="button"
	                                            class="btn btn-success">Print</button></a></td>
	                                <td><button type="button"
	                                        onclick="post_content('certificate/event_certificate_form_edit','id=204')"
	                                        class="btn btn-success">Edit</button></td>


	                                <td><button type="button" class="btn btn-danger"
	                                        onclick="return valid('204');">Delete</button></td>
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