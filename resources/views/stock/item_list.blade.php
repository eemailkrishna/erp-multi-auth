@include('common.header')
@include('common.navbar')
	<section class="content-header">
      <h1>
        Stock Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active"> Item List</li>
        </ol>
    </section>

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
url: access_link+"stock/item_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('stock/item_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}


</script>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content" id="here">
		<div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
		  
		<div <div class="box box-success" >
            <div class="box-header with-border">
			  <div class="col-lg-3"></div>
			   <!-- <a href="javascript:get_content('stock/add_item')"> <button style="float:right;" type="button" class="btn btn-primary">+ Add New Item</button></a>   -->
			</div>
			
      @if(Session('success'))
            <div class="alert alert-success">
                {{ Session('success') }}
            </div>
        @endif
          
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
					<th style="width:50px";>S.no.</th>
					<th>Product Name</th>
					<th>Category</th>
					<th>Product Brand</th>
					<th>Rate/Product</th>
					<th>Product Description</th>
					<th>Product Quantity</th>
					<th>Product Code</th>
          <th>created_at</th>
					<th >Edit</th>
          <th>Delete</th>
                </tr>
                </thead>
				<tbody id="search_table">


         
                @foreach($data as $stock)
<tr>
<input type="hidden" class="deleteStockkId" value="{{$stock->id}}">

  <td>{{$loop->iteration}}</td>
  <td>{{$stock->name}}</td>
  <td>{{$stock->category}}</td>
  <td>{{$stock->brand}}</td>
  <td>{{$stock->rate}}</td>
  <td>{{$stock->description}}</td>
  <td>{{$stock->quantity}}</td>
  <td>{{$stock->code}}</td>
  <td>{{$stock->created_at}}</td> 
  <td><a href="{{url('stockk-edit/'.$stock->id)}}"style="text-decoration:none; color:white"><button type="button" class="btn btn-primary">Edit</button></a></td>
  <td><button  type="button" class="btn btn-danger deleteStockkBtn">Delete</button><td>
  
                 
  
 
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
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deleteStockkBtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.deleteStockkId').val();

        swal({

                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this account data !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    var data = {
                        "_token": $('input[name=_token]').val(),
                        "id": delete_id,
                    };
                    $.ajax({
                        type: "get",
                        url: "/delete-stockk/" + delete_id,
                        data: data,
                        success: function(response) {
                            swal(response.status, {
                                    icon: "success",
                                })
                                .then((result) => {
                                    // location.reload();
                                    $("#here").load(window.location.href + " #here" );
                                });
                        }

                    });
                    // } else {
                    //     swal("Your imaginary file is safe!");
                }
            });
    });

});
</script>