@include('common.header')
@include('common.navbar')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
			function valid(s_no){
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_hostel(s_no);
 }
else  {
return false;
 }
  }
  function delete_hostel(s_no){
$.ajax({
type: "POST",
url: access_link+"hostel/hostel_student_dlt.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('hostel/hostel_student_list');
			   }else{
               //alert_new(detail);
			   }
}
});
}


</script>
    <section class="content-header">
      <h1>
               Hostel Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	     <li class="Active">Hostel Student List</li>
      </ol>
    </section>

	<!---***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Student Hostel List</h3>
<a href="{{ url('hostel-student') }}"><button type="button" class="btn btn-danger" >Add Student</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Name</th>
                  <th>Father's Name</th>
                  <th>Class</th>
                  <th>Hostel Name</th>
                  <th>Room No.</th>
                  <th>Roll.No.</th>
                  <th>Total Fees</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($student as $hostel )

                <tr>
                 <td >{{$loop->iteration}}</td>

                 <td >
                    @if($hostel->user)
                        {{ $hostel->user->name }}
                    @endif
                 </td>
                 <td >{{ $hostel->student->father_name }}</td>
                 {{-- <td >{{ $hostel->father_name }}</td> --}}

                 <td >
                    @if($hostel->class)
                        {{ $hostel->class->name }}
                    @endif
                 </td>
                 @if($hostel->hostal)
                 <td >{{ $hostel->hostal->hostal_name }}</td>
                 @endif
                 <td >
                {{ $hostel->hostal_room_details->hostal_room_no }}
                </td>
                 <td >
                        {{ $hostel->student->roll_no }}
                        {{-- {{ $hostel->roll_no }} --}}
                 </td>
                 <td >
                    {{ $hostel->total_fee }}
                 </td>
                  <td>
				  <a href="{{ url('hostel-student-view/'.$hostel->id) }}"><button type="button" class="btn btn-primary" >view   </button></a>
				 <a href="{{ url('hostel-pay-fee/'.$hostel->id) }}"><button type="button" class="btn btn-success" >Pay Fee</button></a>
                 <a href="{{ url('hostel-leave/'.$hostel->id) }}"> <button type="button" class="btn btn-info" >Leave</button></a>
                 {{-- <a href="{{ url('hostel-student-list-delete/'.$hostel->id) }}"> <button type="button" class="btn btn-danger" >Delete</button></a> --}}
			{{-- <button type="button"  class="btn btn btn-danger" onclick="return  valid('6');" >Delete</button> --}}
            <button type="button" onclick="delete_room({{ $hostel->id }})"
                class="btn btn-danger deletebtn1">Delete</button>

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
         <script>
  $(function () {
    $('#example1').DataTable()
  })

</script>
{{-- ajax sweet alert delete function --}}
<script>
    function delete_room(id) {

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '{{ url('/hostel-student-list-delete') }}/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    });
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    // location reload();
                    $("#example1").load(window.location.href + " #example1");
                } else {
                    swal("Your imaginary file is safe!");
                }
            });

    }
</script>

@include('common.footer')
