@include('common.header')
@include('common.navbar')
    <section class="content-header">
      <h1>
			Expense        <small>Control Panel</small>
      </h1>
	   
      <ol class="breadcrumb">
	<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
	  </ol>
		<a href="javascript:get_content('bus/buy_item')"><button type="button" class="btn btn-default pull-right my_background_color">Purchase</button></a>
    </section>
	
<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
for_delete(s_no);       
 }            
else  {      
return false;
 }       
  }
  
function for_delete(s_no){
$.ajax({
type: "POST",
url: access_link+"bus/purchase_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Deleted','green');
				   get_content('bus/purchase_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}

</script>

	<!---*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
		<div class="row">
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box box-success ">
            
			
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
				

   <tr>
	<th colspan='5' align='center' ><font color="#f1f1f1">Bus Expenses</th>
	<th colspan='2' align='center' ><font color="black">Total Amount Bus Expense</th>
	<th colspan='2' align='center' ><font color="black">102252/-</th>
   </tr>
					<th style="width:50px";>S.no.</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Rate</th>
					<th>Shop Name</th>
					<th>Contact Person Name</th>
					<th>Total Amount</th>
					<th ><center>Action</center></th>
                </tr>
                </thead>
				<tbody id="search_table">



<tr  align='center' >

	<th style="width:50";>1</th>
	<th>bus curtain</th>
	<th>50</th>
	<th>160</th>
	<th>air free curtain</th>
	<th>jeevan sindhe </th>
	<th>8000</th>
	
<th>
	<center>

	<input type="button" onclick="return valid('4')" value="Delete" class="btn btn-default" style="background-color:#00a654;color:#fff;"></center> &nbsp;&nbsp;&nbsp;&nbsp;
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>2</th>
	<th>Dress for Driver and Conductor</th>
	<th>256</th>
	<th>350</th>
	<th>Mens Taylor</th>
	<th>Satyam Goswaami</th>
	<th>89600</th>
	
<th>
	<center>

	<input type="button" onclick="return valid('7')" value="Delete" class="btn btn-default" style="background-color:#00a654;color:#fff;"></center> &nbsp;&nbsp;&nbsp;&nbsp;
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>3</th>
	<th>diesel</th>
	<th>20</th>
	<th>80</th>
	<th>disel station</th>
	<th>abc</th>
	<th>1600</th>
	
<th>
	<center>

	<input type="button" onclick="return valid('8')" value="Delete" class="btn btn-default" style="background-color:#00a654;color:#fff;"></center> &nbsp;&nbsp;&nbsp;&nbsp;
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>4</th>
	<th>DESIL</th>
	<th>30</th>
	<th>75</th>
	<th>INDIAN PETROL BUNK</th>
	<th></th>
	<th>2250</th>
	
<th>
	<center>

	<input type="button" onclick="return valid('11')" value="Delete" class="btn btn-default" style="background-color:#00a654;color:#fff;"></center> &nbsp;&nbsp;&nbsp;&nbsp;
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>5</th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	
<th>
	<center>

	<input type="button" onclick="return valid('14')" value="Delete" class="btn btn-default" style="background-color:#00a654;color:#fff;"></center> &nbsp;&nbsp;&nbsp;&nbsp;
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>6</th>
	<th>gvbjbjk</th>
	<th>2</th>
	<th>1</th>
	<th></th>
	<th></th>
	<th>2</th>
	
<th>
	<center>

	<input type="button" onclick="return valid('15')" value="Delete" class="btn btn-default" style="background-color:#00a654;color:#fff;"></center> &nbsp;&nbsp;&nbsp;&nbsp;
</th>

</tr>


<tr  align='center' >

	<th style="width:50";>7</th>
	<th>petrool</th>
	<th>10</th>
	<th>80</th>
	<th>pp petrol pump</th>
	<th>sk</th>
	<th>800</th>
	
<th>
	<center>

	<input type="button" onclick="return valid('16')" value="Delete" class="btn btn-default" style="background-color:#00a654;color:#fff;"></center> &nbsp;&nbsp;&nbsp;&nbsp;
</th>

</tr>

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
$(function(){
$('#example1').DataTable()
})
</script>

@include('common.footer')
