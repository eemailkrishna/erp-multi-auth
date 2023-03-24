@include('common.header')
@include('common.navbar')
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

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
 
function for_list(){
    var route_name=document.getElementById('bus_route').value;
    var stop_name=document.getElementById('bus_stop').value;
   if(route_name!=''){
   $.ajax({
	  type: "POST",
	  url: access_link+"bus/ajax_get_route_list.php?route_name="+route_name+"",
	  cache: false,
	  success: function(detail){
		$("#route_list").html(detail);
	  }
   });
   }else{
	   $("#route_list").html('');
   }
}
 
 	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"bus/bus_route_add_api.php",
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
				   get_content('bus/bus_route_add');
            }
			}
         });
      });
</script>

    <section class="content-header">
      <h1>
        Bus Management      </h1>
      <ol class="breadcrumb">
            	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li class="active"> Add Routes</li>
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
              <h3 class="box-title">Bus Route Generate</h3>
            </div>
            <!-- /.box-header -->
			@if(session('message'))
	<script>
	 swal("Data Insert!", "Insert successfully!", "success")
	  </script>
	  {{session('message')}}
	  
	 @endif
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
			<form action="{{url('bus/add-stop')}}" id="my_form" method="post" enctype="multipart/form-data">
			   @csrf
	     		   <div class="col-md-12 ">
			       <div class="col-md-4 "></div>
			       <div class="col-md-4 ">
						<div class="form-group">
						  <label>Route Name<font style="color:red"><b>*</b></font></label>
						   <select name="route_name" id="bus_route" class="form-control" onchange="for_list();" >
                        <option value=''>Select</option>
						@foreach($route as $list)
                                          <option value="{{$list->route_name}}">{{$list->route_name}}</option>

										  @endforeach
                          
                          
            </select>
						</div>
				   </div>
				   <div class="col-md-4 "></div>
				</div>
				
				<div class="col-md-12 ">
				<div class="col-md-2"></div>
				
				
				<div class="col-md-8 box-body table-responsive">
                <table id="table-data" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Stop Name</th>
                  <th> Bus Time</th>
                  <th>Bus No</th>
				  <!--<th>Add More</th>-->
                </tr>
                </thead>
				<tbody>
					<tr >
					<td>
					<select name="stop_name" id="bus_stop" class="form-control" required >
					    <option value="">Select</option>
					    					    <option value="NASRULLAGANJ">NASRULLAGANJ</option>
					    					    <option value="RALA">RALA</option>
					    					    <option value="BORKHEDA">BORKHEDA</option>
					    					    <option value="MP">MP</option>
					    					    <option value="subhas nagar">subhas nagar</option>
					    					    <option value="20000">20000</option>
					    					    <option value="mp nagar">mp nagar</option>
					    					    <option value="ashoka garden">ashoka garden</option>
					    					    <option value="kolar">kolar</option>
					    					    <option value="bardi">bardi</option>
					    					    <option value="mp.nagar">mp.nagar</option>
					    					    <option value="arwind vihar">arwind vihar</option>
					    					    <option value="kalpna nagar">kalpna nagar</option>
					    					    <option value="KHANDAKPAR">KHANDAKPAR</option>
					    					    <option value="Bhel ">Bhel </option>
					    					    <option value="MOD">MOD</option>
					    					    <option value="mp nagar">mp nagar</option>
					    					    <option value="mp nagar">mp nagar</option>
					    					    <option value="mp nagar ">mp nagar </option>
					    					</select>
					</td>
					<td><input type="time" name="bus_time" required value=""></td>
					<td><input type="text" name="bus_no" required value=""></td>
					<!--<td>
					<input type="button" class="addButton" value="+" />
					<a class="btnAddnew" style="text-decoration: none;" onClick="javascript:deleteRow(this); return false;" id="btnremove">
					<input type="button" style="color:#000000" value="-" />
					</a>
					</td>-->

					</tr>
					
					</tbody>
				
                </table>
                </div>
				<div class="col-md-2"></div>
			</div>
			
				
				
				
				
		 <div class="col-md-12">
		        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
		  </div>
		  
		  <div class="col-md-12">&nbsp;</div>
		  <div class="col-md-8 col-md-offset-2" id="route_list">
		        
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

  @include('common.footer')