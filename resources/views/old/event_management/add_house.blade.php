@include('common.header')
@include('common.navbar')

<script type="text/javascript">
$(function()
{
    $("#table-data").on('click', 'input.addButton', function() 
	{	
		 var $tr = $(this).closest('tr');
        var allTrs = $tr.closest('table').find('tr');
        var lastTr = allTrs[allTrs.length-1];
        var $clone = $(lastTr).clone();
        $clone.find('td').each(function()
		{
			var el = $(this).find(':first-child');
			var id = el.attr('id') || null;
			if(id) 
			{
				var i = id.substr(id.length-1);
				var prefix = id.substr(0, (id.length-1));
			}
        });
        $clone.find('input:text').val('');
        $tr.closest('table').append($clone);
});
});
</script>


	
    <section class="content-header">
      <h1>
        House Name Generate
      </h1>
      <ol class="breadcrumb">
 	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('event_management/event_management')"><i class="fa fa-calendar"></i>Event Management</a></li>
        <li class="active">Add House Name</li>
      </ol>
    </section>

<!---********************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">House Name Generate</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
				@if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
				</div>
				@endif
			<form role="form" method="post" enctype="multipart/form-data" id="my_form">
			   @csrf
	     		   <div class="col-md-12">
			      <div class="col-md-6 ">
						<div class="form-group">
						  <label>House Name<font style="color:red"><b>*</b></font></label>
						   <center><input type="text"  name="house" placeholder="Eg: House1"   class="form-control" required></center>
						</div>
						<center><input type="submit" name="finish" value="Submit" class="btn  btn-success" /></center>
				   </div>
			 
				
				<div class="col-md-6">
				
				
				
		<div id="add-house" class="col-md-12 box-body table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
                  <th>S.No</th>
                  <th>House Name</th>
                  <th>Delete</th>
				</tr>
                </thead>
								<tbody>
									@foreach ($add_houses as $user)				
					<tr>
						
					   <td>{{ $user->id }}</td>
					   <td>{{ $user->house }} </td>
					   <td>
						<button type="button" onclick="delete_function({{ $user->id}})" class="btn btn-info btn-sm">Delete</button>
					   </td>
				       {{-- <th><a href="{{url('/event_management/add_house/'. $user->id)}}" class="btn btn-info btn-sm" onclick="return confirm('Are you sure?')">Delete</a></th> --}}
					
						
					</tr>
					@endforeach
					<br>
									
				
									</tbody>
									<div id="search-result"></div>
                </table>
                </div>
				
			</div>
			</div>
			<div class="col-md-12">
		     
		  </div>
		 
		  </form>
		  
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
@include('common.footer')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(function () {
$('#example2').DataTable()
})
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
url:'/event_management/add_house/' + id,
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