@include('common.header')
@include('common.navbar')
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_bus(s_no);       
 }            
else  {      
return false;
 }       
  }
  
function delete_bus(s_no){
$.ajax({
type: "POST",
url: access_link+"bus/bus_details_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('bus/bus_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}

</script>	
    <section class="content-header">
      <h1>
        Bus Management
		    <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li class="active">Bus Details List</li>
      </ol>
    </section>
    

	<!---****************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content" id="your_div_ID">
      <div class="row">
        <div class="col-md-12">
          @if(session('message'))
          <script>
           swal("Good job!", "data update successfully!", "success")
            </script>
            {{session('message')}}
            
           @endif
         
          <!-- /.box -->

          <div class="box box-success ">
            <div class="box-header with-border">
              <h3 class="box-title">Bus Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
			    <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
	    <th>S No.</th>
        <th>Bus Name</th>
        <th>Bus Company</th>
        <th>Model No.</th>
        <th>Bus No.</th>
        <th>Capacity</th>
	    <th>Owner Name</th>
	    <th>Contact No.</th>
		<th>Ragistration No.</th>
		<th>Registration Photo</th>
		<th>Bus Photo</th>
		<th>Edit</th>
		<th>Delete</th>
        </tr>
        </thead>
        @foreach($abc as $buslist)
        <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$buslist->bus_name}}</td>
      <td>{{$buslist->bus_company}}</td>
      <td>{{$buslist->bus_model_no}}</td>
      <td>{{$buslist->bus_no}}</td>
      <td>{{$buslist->capacity_of_bus}}</td>
      <td>{{$buslist->bus_owner_name}}</td>
      <td>{{$buslist->bus_owner_contact_no}}</td>
      <td>{{$buslist->bus_registration_no}}</td>
 <td><img src="{{url('public/assests/image/'. $buslist->bus_registration_card_photo)}}" height="50" width="50"></a></td>
	<td><img src="{{url('public/assests/image/'. $buslist->bus_photo)}}" height="50" width="50"></a></td>
<td><button type="button"onclick=''class="btn btn-success"><a href="{{url('bus-data-edit/'.$buslist->id)}}"style="text-decoration:none; color:white">Edit</a></button></td>
		{{-- <td><button type="button"class="btn btn-success" onclick="update_bus({{$buslist->id}})">Edit</button></td> --}}
		<td><button type="button"class="btn btn-danger" onclick="delete_bus({{$buslist->id}})">Delete</button></td>
    </tr>              
    @endforeach   
   
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
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

{{-- sweet alert --}}
<script>
  function delete_bus(id){
    swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel",
  closeOnConfirm: false,
  closeOnCancel: false
},

function(isConfirm){
  if (isConfirm) {
    $.ajax({
          url: '{{ url("bus-data-delete") }}/'+id,
           method: 'get',
          success: function(res) {

            }
          });
    swal("Deleted!", "Your data has been deleted.", "success");
    $( "#your_div_ID" ).load(window.location.href + " #your_div_ID" );

  } else {
    swal("Cancelled", "Your data is safe :)", "error");
  }
});
  }
  </script>
  

@include('common.footer')