@include('common.header')
 @include('common.navbar')
<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_employee(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_employee(s_no){
$.ajax({
type: "POST",
url: access_link+"library/delete_return_book.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('library/view_return_book_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}
</script>

    <!-- Content Header (Page header) -->
   <section class="content-header" id="here">
      <h1>
       Library Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="javascript:get_content('library/library')"><i class="fa fa-book"></i> Library</a></li>
        <li class="active">View Return Book List</li>
      </ol>
	 
    </section>
	

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success" >
		   <div class="box-header with-border ">
              <center><h3 class="box-title" style="color:#592712;font-size:25px;"><b>Return Book Detail</b></h3></center></br>
            </div>
           
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th>S.No</th>
				  <th>Borrower's Name</th>
				  <th>Borrower's Id</th>
				  <th>Borrower's Class & section</th>
				  <th>Book Title</th>
				  <th>Author</th>
                  <th>Issued Date</th>
                  <th>Due Date</th>
                  <!-- <th>Return Date</th> -->
                  <!-- <th>No. of over due day</th> -->
                  <!-- <th>over due fine</th> -->
                  <!-- <th>Remark</th> -->
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
				<tbody id="search_table">
				@foreach($data as $library)
<tr>
<input type="hidden" class="deletereturnbookId" value="{{$library->id}}">

  <td>{{$loop->iteration}}</td>
  <td>{{$library->student_name}}</td>
  <td>{{$library->student_section}}</td>
  <td>{{$library->id_card}}</td>
  <td>{{$library->book_title}}</td>
  <td>{{$library->author_name}}</td>
  <td>{{$library->issue_date}}</td>
  <td>{{$library->due_date}}</td>
  <!-- <td>{{$library->created_at}}</td>  -->
  
	
  <td><button  type="button" class="btn btn-danger deletereturnbookBtn">Delete</button><td>
  
  
 
</tr>
                    @endforeach 
			<th>
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
    <!-- /.content -->


@include('common.footer');

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

    $('.deletereturnbookBtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.deletereturnbookId').val();

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
                        url: "/returnbook-delete/" + delete_id,
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
