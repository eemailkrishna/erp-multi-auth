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
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Penalty List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
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
  <td>{{$loop->iteration}}</td>
  <td>{{$penality->student_name}}</td>
  <td>{{$penality->student_roll_no}}</td>
  <td>{{$penality->student_class}}</td>
  <td>{{$penality->student_section}}</td>
  <td>{{$penality->penalty_amount}}</td>
  <td>{{$penality->penalty_reason}}</td>
  <td>{{$penality->penalty_remark}}</td>
  <td><button type="button" class="btn btn-primary"><a href="{{url('penalty-edit/'.$penality->id)}}"style="text-decoration:none; color:white">Edit</a></button></td>
  <td> <button type="button" class="btn btn-danger"><a href="{{url('penalty-delete/'.$penality->id)}}"style="text-decoration:none; color:white">Delete</a></button></td>
                                                    
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

  