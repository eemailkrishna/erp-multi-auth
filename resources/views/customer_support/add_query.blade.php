@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>
        Support Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('customer-support')}}"><i class="fa fa-male"></i> Support</a></li>
        <li class="active">Add Query</li>
    </ol>
</section>

<script type="text/javascript">
$(document).ready(function() {
    var url = window.location.href;
    $('#my_url').val(url);
});
</script>

<!--<script>
$("#my_form").submit(function(e){
e.preventDefault();

var formdata = new FormData(this);
//window.scrollTo(0, 0);
//    get_content(loader_div);
$.ajax({
	url: "http://simption.com/complaint/complaint_api/ajax_add_query.php",
	type: "POST",
	data: formdata,
	mimeTypes:"multipart/form-data",
	contentType: false,
	cache: false,
	processData: false,
	success: function(detail){
	   var res=detail.split("|?|");
	   if(res[1]=='success'){
		   alert('Successfully Complete');
		   get_content('customer_support/add_query');
	}
	}
 });
});
</script>-->


<!---********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Add Query</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form------------------------------------>

            <form name="myForm" method="post" action="http://simption.com/complaint/complaint_api/ajax_add_query.php"
                enctype="multipart/form-data" id="my_form">
                <div class="box-body">

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label>Error/Enquiry</label>
                            <select name="error_enquiry" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Error">Error</option>
                                <option value="Enquiry">Enquiry</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Panel Name</label>
                            <select name="panel_name" class="form-control select2" required>
                                <option value="">Select</option>
                                <option value="Attendance Panel">Attendance Panel</option>
                                <option value="Enquiry Panel">Enquiry Panel</option>
                                <option value="Staff Panel">Staff Panel</option>
                                <option value="Student Panel">Student Panel</option>
                                <option value="Account Panel">Account Panel</option>
                                <option value="Dues Panel">Dues Panel</option>
                                <option value="Fees Panel">Fees Panel</option>
                                <option value="Penalty Panel">Penalty Panel</option>
                                <option value="Certificate Panel">Certificate Panel</option>
                                <option value="Examination Panel">Examination Panel</option>
                                <option value="Homework Panel">Homework Panel</option>
                                <option value="Set Paper Panel">Set Paper Panel</option>
                                <option value="Complaints Panel">Complaints Panel</option>
                                <option value="Gallery Panel">Gallery Panel</option>
                                <option value="SMS Services Panel">SMS Services Panel</option>
                                <option value="Time Table Panel">Time Table Panel</option>
                                <option value="Event Panel">Event Panel</option>
                                <option value="Holiday Panel">Holiday Panel</option>
                                <option value="Leave Panel">Leave Panel</option>
                                <option value="Sports Panel">Sports Panel</option>
                                <option value="Downloads Panel">Downloads Panel</option>
                                <option value="Recycle Bin Panel">Recycle Bin Panel</option>
                                <option value="Session Panel">Session Panel</option>
                                <option value="Important Panel">Important Panel</option>
                                <option value="Govt Requirement Panel">Govt Requirement Panel</option>
                                <option value="Reminder Panel">Reminder Panel</option>
                                <option value="School Info Panel">School Info Panel</option>
                                <option value="Login Details Panel">Login Details Panel</option>
                                <option value="Bus Panel">Bus Panel</option>
                                <option value="Hostel Panel">Hostel Panel</option>
                                <option value="Library Panel">Library Panel</option>
                                <option value="Stocks Panel">Stocks Panel</option>
                                <option value="Live Bus Panel">Live Bus Panel</option>
                                <option value="Android App Panel">Android App Panel</option>
                                <option value="User Rights Panel">User Rights Panel</option>
                                <option value="Website Management Panel">Website Management Panel</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="number" name="query_contact" placeholder="Contact No." class="form-control"
                                required />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Query Date</label>
                            <input type="date" name="query_date" value="2022-12-16" class="form-control" required
                                readonly />
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label>Write Your Query</label>
                            <textarea name="query" placeholder="Write Your Query" class="form-control" required rows="4"
                                cols="50"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label>Query Remark</label>
                            <textarea name="query_remark" placeholder="Query Remark" class="form-control" rows="4"
                                cols="50"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Error/Enquiry Page Link</label>
                            <input type="hidden" name="school_name" value="SIMPTION TECH PVT LTD" class="form-control"
                                readonly />
                            <input type="hidden" name="server_name" value="simptionerp.com" class="form-control"
                                readonly />
                            <input type="hidden" name="database_name" value="demo" class="form-control" readonly />
                            <input type="hidden" name="my_url" id="my_url" class="form-control" readonly />
                            <input type="text" name="page_link" placeholder="Error/Enquiry Page Link"
                                class="form-control" />
                        </div>
                    </div>


                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn  btn-success" /></center>
                    </div>

                </div>
            </form>

            <!-------------------------------------End Registration form------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>

@include('common.footer')

<script>
$(function() {
    $('.select2').select2();
});
</script>