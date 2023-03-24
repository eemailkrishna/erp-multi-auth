@include('common.header')
@include('common.navbar')
  
  
  <script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_enquiry(s_no);       
 }            
else  {      
return false;
 }       
  }           

function edit_enquiry(s_no){
$.ajax({
type: "POST",
url:access_link+"enquiry/enquiry_edit.php?id="+s_no+"",
cache: false,
success: function(detail){
$("#get_content").html(detail);
}
});
}
function delete_enquiry(s_no){
$.ajax({
type: "POST",
url: access_link+"enquiry/enquiry_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  // alert_new('Successfully Deleted');
				   get_content('enquiry/enquiry_list');
			   }else{
              //  alert_new(detail); 
			   }
}
});
}

   
 </script>
  
    <section class="content-header">
      <h1>
       Enquiry Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
       	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i>  Home</a></li>
        <li><a href="javascript:get_content('enquiry/enquiry')"><i class="fa fa-phone-square"></i>  Enquiry</a></li>
        <li class="active"><i class="fa fa-list"></i>  Enquiry List</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Enquiry List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
	    <th>S.no.</th>
		<th>Enquiry Type</th>
		<th>Enquiry Type Other</th>
    <th>Date</th>
        <th>Name</th>
        <th>Father's Name</th>
        <th>Class Name</th>
        <th> Address</th>
        <th> Contact Number</th>
        <th>Next Follow Up Date</th>
        <th>Remark_1</th>
        <th>Previous School Name</th>
        <th> Staff Name </th>
        <th> Remark2 </th>
        <th>Student Medium</th>
        
	    <!-- <th>Contact No 2.</th> -->
	    
		
		<th>Update By</th>
        <th>Date</th>
        <th> Action </th>
<!-- 		
		<th>Print</th>
		
		<th>Edit</th>
		<th>Delete</th> -->
        </tr>
        </thead>
		<tbody>
    @foreach($data as $item) 
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$item->enquiry_type}}</td>
      <td>{{$item->enquiry_type_other}}</td>
      <td>{{$item->enquiry_date}}</td>
      <td>{{$item->enquiry_name}}</td>
      <td>{{$item->enquiry_father_name}}</td>
      <td>{{$item->select_class_name}}</td>
      <td>{{$item->enquiry_address}}</td>
      <td>{{$item->enquiry_contact_no}}</td>
      <td>{{$item->enquiry_next_follow_up_date}}</td>
      <td>{{$item->enquiry_remark_1}}</td>
      <td>{{$item->enquiry_previou_school_name}}</td>
      <td>{{$item->enquiry_staff_name}}</td>
      <td>{{$item->enquiry_remark_2}}</td>
      <td>{{$item->student_medium}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->updated_at}}</td>
      <td><a href=""><button type="button" class="btn btn-success"onclick="window.print();">Print</button></a></td>
      <td><a href="{{url('enquiry-edit/'.$item->id)}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
      <td><a href="{{url('/enquiry-delete/'.$item->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>



      

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
    <!-- /.content -->
 

<script>

var dataTable=$('#example1').DataTable({
                "orderMulti": true,
                "processing": true,
                "serverSide":true,
              
                "ajax":{
                    url:access_link+"enquiry/enquiry_list_fetch.php",
                    type:"post"
                }
            });


</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@include('common.footer')

