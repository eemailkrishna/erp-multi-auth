@include('common.header')
@include('common.navbar')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
function get_student_list(){
var followup_date_to=document.getElementById('followup_date_to').value;
var followup_date_from=document.getElementById('followup_date_from').value;
var next_followup_date_from=document.getElementById('next_followup_date_from').value;
var next_followup_date_to=document.getElementById('next_followup_date_to').value;

var enquiry_type=document.getElementById('enquiry_type').value;
var blank_field_3=document.getElementById('blank_field_3').value;
$.ajax({
type: "POST",
url:
access_link+"enquiry/call_student_list_ajax.php?followup_date_to="+followup_date_to+"&next_followup_date_from="+next_followup_date_from+"&next_followup_date_to="+next_followup_date_to+"&followup_date_from="+followup_date_from+"&enquiry_type="+enquiry_type+"&blank_field_3="+blank_field_3,
cache: false,
success: function(detail){
$("#student_list").html(detail);
}
});
}

function call_management(id){
$("#s_no_hidden").val(id);
$("#call_history_old").val($("#call_history_"+id).val());
$("#call_history_old_show").html($("#call_history_"+id).val());
$("#contact_number").val($("#contact_number_"+id).val());
$("#call_history_modal").modal('show');
}

$("#my_form").submit(function(e){
e.preventDefault();

var formdata = new FormData(this);
$.ajax({
url: access_link+"enquiry/call_student_list_api.php",
type: "POST",
data: formdata,
mimeTypes:"multipart/form-data",
contentType: false,
cache: false,
processData: false,
success: function(detail){

var res=detail.split("|?|");
if(res[1]=='success'){
alert_new('Successfully Updated!!!',"green");
$("#call_history_modal").modal('hide');
$("#call_history_old").val('');
$("#call_history").val('');

$("#call_history_"+res[2]).val(res[3]);
$("#call_history_html_"+res[2]).html(res[3]);
$("#followup_date_"+res[2]).val(res[4]);
$("#followup_date_html_"+res[2]).html(res[4]);
$("#followup_date_next_"+res[2]).val(res[5]);
$("#followup_date_next_html_"+res[2]).html(res[5]);
}else{
alert_new('Sorry!!! Some Error Occured',"red");
$("#call_history_modal").modal('hide');
}
}
});
});
</script>
<section class="content-header">
	<h1>
		Enquiry Management <small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('enquiry/enquiry')"><i class="fa fa-phone-square"></i> Enquiry</a></li>
		<li class="active"><i class="fa fa-list"></i> Enquiry List</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">

			<!-- /.box -->

			<div class="box box-success">
				<div class="box-header with-border ">
					<h3 class="box-title">Enquiry Call Management</h3>
				</div>

				<div class="box-body ">

					<div class="col-md-3">
						<div class="form-group">
							<label>Enquiry Type<font style="color:red"><b>*</b></font></label>
							<select class="form-control" name="enquiry_type" id="enquiry_type" required>
								<option value="">All</option>
								<option value="for admission">For Admission</option>
								<option value="for job">For Job</option>
								<option value="other">Other</option>
							</select>
						</div>
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

							<input type="date" id="next_followup_date_from" value="2022-12-03" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Next Call Date To</label>

							<input type="date" id="next_followup_date_to" value="2022-12-03" class="form-control">
						</div>
					</div>

					<div class="col-md-2">
						<div class="form-group">
							<label>Staff Name<font style="color:red"><b>*</b></font></label>
							<select name="blank_field_3" id="blank_field_3" class="form-control select2">
								<option value="All">All</option>



								<option value=""></option>



								<option value="AAA">AAA</option>



								<option value="Abhul Rjaak ">Abhul Rjaak </option>



								<option value="AMIT JI">AMIT JI</option>



								<option value="anil n">anil n</option>



								<option value="anshu ">anshu </option>



								<option value="JAGMAL YADAV">JAGMAL YADAV</option>



								<option value="kailash soni">kailash soni</option>



								<option value="kalpma">kalpma</option>



								<option value="kaveri">kaveri</option>



								<option value="MANOJ YOGI">MANOJ YOGI</option>



								<option value="Puran Singh Sahu">Puran Singh Sahu</option>



								<option value="RATAN JI">RATAN JI</option>



								<option value="suresh soni">suresh soni</option>
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
			</div>
		</div>
</section>
<!-- <section class="content">
	<div class="row">
		<div class="col-xs-12">

			 /.box 

			<div class="box box-success" id="student_list">

			</div>
		</div>
	</div>
</section> -->



<form role="form" action="{{url('call_student_list')}}" method="post"  id="my_form">
	<div class="modal " id="call_history_modal" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog modal-lg">
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

								<input type="date" name="followup_date" value="2022-12-03" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Next Call Date</label>

								<input type="date" name="followup_date_next" class="form-control" value="2022-12-03">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Call By</label>
								<input type="text" id="call_by" value="kailash soni" name="call_by" class="form-control"
									readonly>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="form-group">
								<label> Enquiry Status</label>
								<select name="blank_field_4" class="form-control">
									<option value="Open">Open</option>
									<option value="Admission Done">Admission Done</option>
									<option value="Closed">Closed</option>
								</select>
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


	<section class="content">
                        <div class="row">
                            <div class="col-xs-12">

                                <!-- /.box -->

                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Enquiry List</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body table-responsive">
									<table id="example1" class="table table-bordered table-striped">
                                            <thead class="my_background_color">
                                                <tr>
                                                    <th>S.no.</th>
                                                    <th>Enquiry Type</th>
                                                    <th>Enquiry Type Other</th>
                                                    <th>Date</th>
                                                    <th>Name</th>
                                                    <th>Father's Name</th>
                                                    <th>Class Name</th>
                                                    <th> Address</th>
                                                    <th> Contact Number</th>
                                                    <th>Next Follow Up Date</th>
                                                    <th>Remark_1</th>
                                                    <th>Previous School Name</th>
                                                    <th> Staff Name </th>
                                                    <th> Remark2 </th>
                                                    <th>Student Medium</th>

                                                    <!-- <th>Contact No 2.</th> -->

                                                    
                                                    <th>Update By</th>
                                                    <th>Date</th>
                                                    <th> Action </th>
                                                    <!-- 		
		<th>Print</th>
    
		<th>Edit</th>
		<th>Delete</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->enquiry_type}}</td>
                                                    <td>{{$item->enquiry_type_other}}</td>
                                                    <td>{{$item->enquiry_date}}</td>
                                                    <td>{{$item->enquiry_name}}</td>
                                                    <td>{{$item->enquiry_father_name}}</td>
                                                    <td>{{$item->select_class_name}}</td>
                                                    <td>{{$item->enquiry_address}}</td>
                                                    <td>{{$item->enquiry_contact_no}}</td>
                                                    <td>{{$item->enquiry_next_follow_up_date}}</td>
                                                    <td>{{$item->enquiry_remark_1}}</td>
                                                    <td>{{$item->previous_school_name}}</td>
                                                    <td>{{$item->enquiry_staff_name}}</td>
                                                    <td>{{$item->enquiry_remark_2}}</td>
                                                    <td>{{$item->student_medium}}</td>
                                                    <td>{{$item->updated_at}}</td>
                                                    <td>{{$item->created_at}}</td>

                                                   
                                                    <td><a href=""><button type="button" class="btn btn-success"
                                                                onclick="window.print();">Print</button></a>
                                                    <a href="{{url('enquiry-edit/'.$item->id)}}"><button
                                                                type="button" class="btn btn-primary">Edit</button></a>
                                                    
                                                   <a href="{{url('/enquiry-delete/'.$item->id)}}"><button
                                                                type="button" class="btn btn-danger">Delete</button></a>
                                                    </td>





                                                </tr>
                                                @endforeach

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

                </div>

            </div>







            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
        </div>
    </section>

</form>
<script>
$(document).ready( function () {
    $('#example1').DataTable();
} );
</script>
@include('common.footer')