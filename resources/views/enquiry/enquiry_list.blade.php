@include('common.header')
@include('common.navbar')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  <script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_enquiry(s_no);       
 }            
else  {      
return false;
 }       
  }           

function edit_enquiry(s_no){
$.ajax({
type: "POST",
url:access_link+"enquiry/enquiry_edit.php?id="+s_no+"",
cache: false,
success: function(detail){
$("#get_content").html(detail);
}
});
}
function delete_enquiry(s_no){
$.ajax({
type: "POST",
url: access_link+"enquiry/enquiry_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  // alert_new('Successfully Deleted');
				   get_content('enquiry/enquiry_list');
			   }else{
              //  alert_new(detail); 
			   }
}
});
}

   
 </script>
  
    <section class="content-header">
      <h1>
       Enquiry Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
       	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i>  Home</a></li>
        <li><a href="javascript:get_content('enquiry/enquiry')"><i class="fa fa-phone-square"></i>  Enquiry</a></li>
        <li class="active"><i class="fa fa-list"></i>  Enquiry List</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content" id="here">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Enquiry List</h3>
            </div>
            @if(Session('success'))
            <div class="alert alert-success">
                {{ Session('success') }}
            </div>
        @endif
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
        <!-- <th> Action </th> -->
		
		<th>Print</th>
		
		<th>Edit</th>
		<th>Delete</th>
        </tr>
        </thead>
		<tbody>
    @foreach($data as $enquiry) 
    <tr>
      
    <input type="hidden" class="deleteEnquiryId" value="{{$enquiry->id}}">

      <td>{{$loop->iteration}}</td>
      <td>{{$enquiry->enquiry_type}}</td>
      <td>{{$enquiry->enquiry_type_other}}</td>
      <td>{{$enquiry->enquiry_date}}</td>
      <td>{{$enquiry->enquiry_name}}</td>
      <td>{{$enquiry->enquiry_father_name}}</td>
      <td>{{$enquiry->select_class_name}}</td>
      <td>{{$enquiry->enquiry_address}}</td>
      <td>{{$enquiry->enquiry_contact_no}}</td>
      <td>{{$enquiry->enquiry_next_follow_up_date}}</td>
      <td>{{$enquiry->enquiry_remark_1}}</td>
      <td>{{$enquiry->enquiry_previou_school_name}}</td>
      <td>{{$enquiry->enquiry_staff_name}}</td>
      <td>{{$enquiry->enquiry_remark_2}}</td>
      <td>{{$enquiry->student_medium}}</td>
      <td>{{$enquiry->created_at}}</td>
      <td>{{$enquiry->updated_at}}</td>
      <td><a href=""><button type="button" class="btn btn-success"onclick="window.print();">Print</button></a></td>
      <td><a href="{{url('enquiry-edit/'.$enquiry->id)}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
      <td><button  type="button" class="btn btn-danger deleteEnquiryBtn">Delete</button><td>
      <td>
      <!-- <button type="button" onclick="delete_room({{$enquiry->id }})"
                class="btn btn-danger deletebtn1">Delete</button>   -->
      <td>
                  <!-- <button type="button" class="btn btn-danger" onclick="del({{ $enquiry->id}});">Delete</button> -->

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

    @include('common.footer')
        <script>
  $(function () {
    $('#example1').DataTable()
  })
 </script>


<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deleteEnquiryBtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.deleteEnquiryId').val();

        swal({

                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this account data !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    var data = {
                        "_token": $('input[name=_token]').val(),
                        "id": delete_id,
                    };
                    $.ajax({
                        type: "get",
                        url: "/enquiry-delete/" + delete_id,
                        data: data,
                        success: function(response) {
                            swal(response.status, {
                                    icon: "success",
                                })
                                .then((result) => {
                                    // location.reload();
                                    $("#here").load(window.location.href + " #here" );
                                });
                        }

                    });
                    // } else {
                    //     swal("Your imaginary file is safe!");
                }
            });
    });

});
</script>
