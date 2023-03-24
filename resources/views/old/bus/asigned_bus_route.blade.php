@include('common.header')
@include('common.navbar')
    <section class="content-header">
      <h1>
        Bus Management		<small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li class="active">Add Asigned Bus Route</li>
      </ol>
    </section>

<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"bus/asigned_bus_route_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			////alert_new(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('bus/asigned_bus_route');
            }
			}
         });
      });
</script>
	
	<!---*****************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title"> Assigned Bus Route Generate</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			<form action="{{url('bus/asigned_list')}}" method="post" id="my_form" enctype="multipart/form-data">@csrf
            <div class="box-body">
			
			<div class="col-md-2 "></div>
			 <div class="col-md-4 ">				
			  <div class="form-group" >
				 <label>Bus No.<font style="color:red"><b>*</b></font></label>
				 <select class="form-control" name="bus_no"value="" required>
				 <option value="">Select</option>
				 @foreach($route as $list)
				 					<option value="{{$list->bus_no}}">{{$list->bus_no}}</option>
									 @endforeach
					 				 </select>
				
				
				 </div>
				</div>
				
				<div class="col-md-4 ">				
			  <div class="form-group" >
				 <label >Bus Route<font style="color:red"><b>*</b></font></label>
				 <select class="form-control" name="bus_route" required>
				 <option value="">Select</option>
				 @foreach($route as $list)
				 					<option value="{{$list->route_name}}">{{$list->route_name}}</option>
					@endforeach
					 					
					
					 				 </select>
				 </div>
				</div>
				<div class="col-md-2 "></div>
		
				<div class="col-md-12">
		        <center><input type="submit" name="submit" value="Submit" class="btn btn-success" /></center>
		  </div>
	      </div>
	      </form>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
           </div>
     </div>
     </section>
@include('common.footer')
   