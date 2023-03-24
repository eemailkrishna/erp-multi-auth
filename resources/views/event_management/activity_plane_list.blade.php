@include('common.header')
@include('common.navbar')

<script>
    function valid()
    {
var myval=confirm("Are you sure want to parmanently  delete this record !!!!");
    if(myval==true)
        {
            return true;
        }
    else
        {
            return false;
        }
        }
</script>	

    <section class="content-header">
      <h1>
         Activity Plan List
	   <small>Control Panel</small> 
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('event')}}"><i class="fa fa-calendar"></i>Event
                Management</a></li>
        <li class="active"><i class="fa fa-list"></i>Activity Plan List</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-md-12">
         
          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
          
			</div>
            <!-- /.box-header -->
            <div id="add-house" class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
                   <th>Sr No.</th>
				   <th>Event Name</th>
		           <th>Details</th>
               <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($activity_plans as $user)
				                <tr>
                          <th>{{$loop->iteration}}</th>
				  <th>{{ $user->event_name }}</th>
				<th>
          <a href="{{url('/event_management/activity_plan_details/'. $user->id)}}"
            class="btn btn-info btn-sm">Details</a>
          {{-- <button type="button"  class="btn btn-default" onclick="post_content('event_management/activity_plan_details','id={{ $user->id }}');" >Details</button>--}}</th>
          <th><button type="button" onclick="delete_function({{ $user->id}})" class="btn btn-info btn-sm">Delete</button></th>
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
    @include('common.footer')
<script>
$(function () {
$('#example1').DataTable()
})

</script>
<script>

function delete_function(id){

	swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Record!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
 $.ajax({
url:'/event_management/activity_plane_list/' + id,
method:'get',
success:function(res)
{

	
}
 })
    swal("Poof! Your Entery has been deleted!", {
      icon: "success",
    });
	$( "#add-house" ).load(window.location.href + " #add-house" );
  } else {
    swal("Your Entery is safe!");
  }
});
}


</script>
  