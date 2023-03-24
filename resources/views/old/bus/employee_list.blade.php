@include('common.header')
    @include('common.navbar')
	<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
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
url: access_link+"bus/employee_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Deleted','green');
				   get_content('bus/employee_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}

</script>

    <section class="content-header" >
      <h1>
       Bus Management        <small>Control Panel</small>
      </h1>
     <ol class="breadcrumb">
	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
	    <li><a href="javascript:get_content('bus/bus_staff')"><i class="fa fa-bed"></i>Bus Staff</a></li>
	</ol>
    </section>
    @if(session('message'))
    <script>
     swal("Good job!", "data update successfully!", "success")
      </script>
      {{session('message')}}
      
     @endif
    <!-- Main content -->
    <section class="content">
      <div class="row" id="your_div_ID">
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box box-success ">
            <div class="box-header with-border">
              <h3 class="box-title">Employee List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Employee Name</th>
                  <th> Employee Email</th>
				         <th>Contact No.</th>
				         <th>Employee Address</th>
				         <th>Bank Account No.</th>
				         <th>Bank IFSC Code</th>
				         <th>Salary</th>
				         <th>Edit</th>
				          <th>Delete</th>
                </tr>
                </thead>
                @foreach($emplist as $empdata)
                <tr>
                  <td>{{$loop->iteration}}</td>
                <td>{{$empdata->emp_name}}</td>
                <td>{{$empdata->emp_email}}</td>
                <td>{{$empdata->emp_mobile}}</td>
                <td>{{$empdata->emp_address}}</td>
                <td>{{$empdata->emp_account_no}}</td>
                <td>{{$empdata->emp_ifsc_code}}</td>
                <td>{{$empdata->emp_salary}}</td>
                <td><button type="button"onclick=''class="btn btn-success"><a href="{{url('bus-emp-list-edit/'.$empdata->id)}}"style="text-decoration:none; color:white">Edit</a></button></td>
                <td><button type="button"class="btn btn-danger" onclick="delete_bus({{$empdata->id}})">Delete</button></td>
                </tr>
                @endforeach
                <tbody>
                
<tr>
   
	 	</tbody>
	   </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
     <div id="mypdf_view">
			<div>
    </section>
    {{-- sweet alert --}}
<script>
  function delete_bus(id){
    swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel",
  closeOnConfirm: false,
  closeOnCancel: false
},

function(isConfirm){
  if (isConfirm) {
    $.ajax({
          url: '{{ url("bus-emp-list-del") }}/'+id,
           method: 'get',
          success: function(res) {
            $( "#your_div_ID" ).load(window.location.href + " #your_div_ID" );

            }
          });
    swal("Deleted!", "Your data has been deleted.", "success");

  } else {
    swal("Cancelled", "Your data is safe :)", "error");
  }
});
  }
  </script>

<script>
$(function(){
$('#example1').DataTable()
})
</script>
@include('common.footer')