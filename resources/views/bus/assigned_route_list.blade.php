@include('common.header')
@include('common.navbar')
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<section class="content-header">
  <h1>
    Bus Management		    <small>Control Panel</small>
  </h1>
  <ol class="breadcrumb">
<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
    <li class="active">Bus Details List</li>
  </ol>
</section>

<!---***********************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content"id="your_div_ID">
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
    <th>S.no.</th>
    <th>Bus No</th>
     <th>Bus Route</th>
   <th>Edit</th>
   <th>Delete</th>
    </tr>
    </thead>
    @foreach($assignlist as $assignroute)
    <tr>
        <td>{{$loop->iteration}}</td>
    <td>{{$assignroute->bus_no}}</td>	
    <td>{{$assignroute->bus_route}}</td>	
    <td><button type="button"onclick=''class="btn btn-success"><a href="{{url('bus-assign-edit/'.$assignroute->id)}}"style="text-decoration:none; color:white">Edit</a></button></td>
   <td><button type="button"class="btn btn-danger" onclick="delete_bus({{$assignroute->id}})">Delete</button></td>
</tr>   

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
      url: '{{ url("bus-assign-delete") }}/'+id,
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

<script>
$(function(){
$('#example1').DataTable()
})
</script>
@include('common.footer')