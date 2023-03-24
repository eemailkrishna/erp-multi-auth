@include('common.header')
 @include('common.navbar') 
<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_penalty(s_no);       
 }            
else  {      
return false;
 }       
  } 
function delete_penalty(s_no){
$.ajax({
type: "POST",
url: access_link+"penalty/penalty_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
		if(res[1]=='success'){
		 alert_new('Successfully Deleted'.'green');
		 get_content('penalty/penalty_list');
	  }else{
        //  alert_new(detail); 
   }
}
});
}
</script>
    <section class="content-header">
      <h1>
        Student Action        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	          <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="javascript:get_content('penalty/penalty')"><i class="fa fa-exclamation-circle"></i> Penalty Management</a></li>
        <li class="active">Penalty List</li>
      </ol>
    </section>

	
    <!-- Main content -->
    <section class="content" id="here">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Penalty List</h3>
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
                  <th>S.no.</th>
                  <th>student Search</th>
                  <th>student Name</th>
                  <th>Student Roll No</th>
                  <th>Class</th>
                  <th>Student Section</th>
                  <th>Penalty Amount</th>
                  <th>Penalty Reason</th>
                  <th>Penalty Remark</th>
                  
                  <th>Edit</th>
                 
                  
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
				          
                    @foreach($list as $penality)
<tr>

<input type="hidden" class="deletepenaltyId" value="{{$penality->id}}">

  <td>{{$loop->iteration}}</td>
  <td>{{$penality->student_search}}
  <td>{{$penality->student_name}}</td>
  <td>{{$penality->student_roll_no}}</td>
  <td>{{$penality->student_class}}</td>
  <td>{{$penality->student_section}}</td>
  <td>{{$penality->penalty_amount}}</td>
  <td>{{$penality->penalty_reason}}</td>
  <td>{{$penality->penalty_remark}}</td>
  <td><a href="{{url('penalty-edit/'.$penality->id)}}"style="text-decoration:none; color:white"><button type="button" class="btn btn-primary">Edit</button></a></td>
  <td><button  type="button" class="btn btn-danger deletepenaltyBtn">Delete</button><td>
  
                                                    
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

    $('.deletepenaltyBtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.deletepenaltyId').val();

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
                        url: "/penalty-delete/" + delete_id,
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