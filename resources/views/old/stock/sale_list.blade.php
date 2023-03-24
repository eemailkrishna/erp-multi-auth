@include('common.header')
@include('common.navbar')  
  
 <script>
			function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_item(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_item(s_no){
$.ajax({
type: "POST",
url: access_link+"stock/sales_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('stock/sale_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}
</script>

   <section class="content-header">
      <h1>
        Stock Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
             <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active">Sale List</li>
        </ol>
    </section>
	

	<!---**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
		<div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div <div class="box box-success" >>
            
			
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th> S.no.</th>
				  <th> student Name</th>
				  <th> Father's Name</th>
                  <th> Product Name</th>
                  <th>Category</th>
				  <th> Quantity</th>
                  <th> Rate</th>
                  <th> Total Amount</th>
				  <th><center> Action</center></th>
                </tr>
                </thead>
				<tbody id="search_table">

				@foreach($data as $stock)
<tr>
  <td>{{$loop->iteration}}</td>
  <td>{{$stock->student_name}}</td>
  <td>{{$stock->father_name}}</td>
  <td>{{$stock->product_name}}</td>
  <td>{{$stock->category}}</td>
  <td>{{$stock->quantity}}</td>
  <td>{{$stock->rate}}</td>
  <td>{{$stock->total_amount}}</td>
  <td>{{$stock->created_at}}</td> 
  
 
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
@include('common.footer')

