    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bus Management
		    <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
		<li><a href="javascript:get_content('bus/bus_route_list')"><i class="fa fa-truck"></i>Bus Details List</a></li>
        <li class="active">Particular List</li>
      </ol>
    </section>
    
<script>
function valid(s_no,bus_root){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
for_delete(s_no,bus_root);       
 }            
else  {      
return false;
 }       
  }
  
function for_delete(s_no,bus_root){
$.ajax({
type: "POST",
url: access_link+"bus/bus_route_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Deleted','green');
				   post_content('bus/bus_route_list_details','id='+bus_root);
			   }else{
               //alert_new(detail); 
			   }
}
});
}

</script>

	<!---***********************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
         
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
        <th>Bus Route</th>
        <th>Bus Stop Name</th>
        <th>Bus Route Timing</th>
        <th>Bus No.</th>
        <th>Edit</th>
		<th>Delete</th>
        </tr>
        </thead>
		
		
<tr  align='center' > 

	<th >1</th>
	<th  ></th>
	<th  >mp nagar</th>
	<th  >19:22</th>
	<th  >MH19TS0001</th>
	
	<th><button type="button" class="btn btn-default" onclick="post_content('bus/bus_route_list_edit','id=84');" >Edit</th>
	<th><button type="button" class="btn btn-default" onclick="return valid('84','');" >Delete</th>
	
	</tr>
	
	
<tr  align='center' > 

	<th >2</th>
	<th  ></th>
	<th  >kolar</th>
	<th  >17:03</th>
	<th  >MH19TS0001</th>
	
	<th><button type="button" class="btn btn-default" onclick="post_content('bus/bus_route_list_edit','id=86');" >Edit</th>
	<th><button type="button" class="btn btn-default" onclick="return valid('86','');" >Delete</th>
	
	</tr>
	
	
<tr  align='center' > 

	<th >3</th>
	<th  ></th>
	<th  >arwind vihar</th>
	<th  >12:44</th>
	<th  >MH19TS0001</th>
	
	<th><button type="button" class="btn btn-default" onclick="post_content('bus/bus_route_list_edit','id=91');" >Edit</th>
	<th><button type="button" class="btn btn-default" onclick="return valid('91','');" >Delete</th>
	
	</tr>
	
	
<tr  align='center' > 

	<th >4</th>
	<th  ></th>
	<th  >subhas nagar</th>
	<th  >17:57</th>
	<th  >MH19TS0001</th>
	
	<th><button type="button" class="btn btn-default" onclick="post_content('bus/bus_route_list_edit','id=93');" >Edit</th>
	<th><button type="button" class="btn btn-default" onclick="return valid('93','');" >Delete</th>
	
	</tr>
	
	
<tr  align='center' > 

	<th >5</th>
	<th  ></th>
	<th  >BORKHEDA</th>
	<th  >16:05</th>
	<th  >MH19TS0001</th>
	
	<th><button type="button" class="btn btn-default" onclick="post_content('bus/bus_route_list_edit','id=94');" >Edit</th>
	<th><button type="button" class="btn btn-default" onclick="return valid('94','');" >Delete</th>
	
	</tr>
	
	
<tr  align='center' > 

	<th >6</th>
	<th  ></th>
	<th  >MP</th>
	<th  >18:07</th>
	<th  >MH19TS0001</th>
	
	<th><button type="button" class="btn btn-default" onclick="post_content('bus/bus_route_list_edit','id=95');" >Edit</th>
	<th><button type="button" class="btn btn-default" onclick="return valid('95','');" >Delete</th>
	
	</tr>
	
	
<tr  align='center' > 

	<th >7</th>
	<th  ></th>
	<th  >ashoka garden</th>
	<th  >16:48</th>
	<th  >MH19TS0001</th>
	
	<th><button type="button" class="btn btn-default" onclick="post_content('bus/bus_route_list_edit','id=96');" >Edit</th>
	<th><button type="button" class="btn btn-default" onclick="return valid('96','');" >Delete</th>
	
	</tr>
	
	
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
