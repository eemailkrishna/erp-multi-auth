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
<script type="text/javascript">
 var deleteRow = function (link) {
     var row = link.parentNode.parentNode;
     var table = row.parentNode; 
     table.removeChild(row); 
 }
 
 $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
  window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"event_management/add_event_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				  get_content('event_management/add_event');
            }
			}
         });
      });
</script>
<script>
	function valid(s_no){
	var myval=confirm("Are you sure want to delete this record !!!!");
	if(myval==true){
	delete_fee(s_no);
	}else{
	return false;
	}
	}
	
	function delete_fee(s_no){
	$.ajax({
	type: "POST",
	url: access_link+"event_management/delete_event.php?id="+s_no+"",
	cache: false,
	success: function(detail){
	var res=detail.split("|?|");
	if(res[1]=='success'){
	   alert_new('Successfully Deleted','green');
	   get_content('event_management/add_event');
	}else{
	//alert_new(detail); 
	}
	}
	});
	}
	</script>


    <section class="content-header">
      <h1>
        Event Name Generate
      </h1>
      <ol class="breadcrumb">
		<li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('event')}}"><i class="fa fa-calendar"></i>Event
                Management</a></li>
        <li class="active">Add Event Name</li>
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
              <h3 class="box-title">Event Name Generate</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
				@if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
				</div>
				@endif
			<form id="my_form" method="post" enctype="multipart/form-data">
				@csrf
	     		   <div class="col-md-12">
			      <div class="col-md-2 ">
						<div class="form-group">
						  <label>Event Name<font style="color:red"><b>*</b></font></label>
						   <center><input type="text"  name="event_name" placeholder="Eg: House1"  value="" class="form-control" required></center>
						</div>
				   </div>   
				   <div class="col-md-2 ">
						<div class="form-group">
						  <label>No. Of Participants<font style="color:red"><b>*</b></font></label>
						   <center><input type="number"  name="total_participats" placeholder="No. Of Participants"  maxlength="10" class="form-control" required></center>
						</div>
				   </div>
			       <div class="col-md-2 ">
						<div class="form-group">
						  <label>Date<font style="color:red"><b>*</b></font></label>
						   <center><input type="date"  name="event_date" value="" class="form-control" required></center>
						</div>
				   </div>
				
				<div class="col-md-6">
				<div class="col-md-2"></div>
				
				
				<div id="add-event" class="col-md-10 box-body table-responsive">
                <table id="example3" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
					<th>S.no</th>
				
                  <th>Event Name</th>
                  <th>No.Of Participants</th>
                  <th>Date</th>
                  <th>Delete</th>
				</tr>
                </thead>
								<tbody>
									@foreach ($add_events as $user)		
					<tr>
						<td>{{$loop->iteration}}</td>
						
					   <td>{{ $user->event_name }}</td>
					   <td>{{ $user->total_participats }}</td>
					   <td>{{ $user->event_date }}</td>
					   <td>
						<button type="button" onclick="delete_function({{ $user->id}})" class="btn btn-info btn-sm">Delete</button>
					   </td> 
					   {{-- <th><a href="{{url('/event_management/add_event/'. $user->id)}}" class="btn btn-info btn-sm" onclick="return confirm('Are you sure?')">Delete</a></th> --}}
					</tr>
					@endforeach
								
				
										
									</tbody>
                </table>
                </div>
			
			</div>
			</div>
	
		  <div class="col-md-12">
		        <center><input type="submit" name="submit" value="Submit" class="btn  btn-success" /></center>
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
@include('common.footer')

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
url:'/event_management/add_event/' + id,
method:'get',
success:function(res)
{
	
}
 })
    swal("Poof! Your Entery has been deleted!", {
      icon: "success",
    });
	$( "#add-event" ).load(window.location.href + " #add-event" );
  } else {
    swal("Your Entery is safe!");
  }
});
}

</script>
