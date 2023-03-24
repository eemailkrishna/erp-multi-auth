@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<script>
   function for_list(value){
       $('#my_table').html(loader_div);
       if(value!=''){
       $.ajax({
			  type: "POST",
              url: access_link+"bus/ajax_bus_student_list.php?id="+value+"",
              cache: false,
              success: function(detail){
              $('#my_table').html(detail);
              }
           });
       }else{
       $('#my_table').html('');
       }
    }
</script>
<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
$("#my_button").click();
        $.ajax({
            url: access_link+"bus/bus_student_list_api.php",
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
				   get_content('bus/bus_student_list');
            }
			}
         });
      });
</script>
    <section class="content-header">
      <h1>
        Bus Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
	  <li class="active">Student Registration List</li>
      </ol>
    </section>
	
	<!---*******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************    <section class="content">
      <!-- Small boxes (Stat box) -->
	  <form action="{{url('bus-class-list')}}"  method="post" enctype="multipart/form-data" id="my_form">@csrf
	  <section class="content forHeight" style="min-height: fit-content">
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
            <h3 class="box-title">Bus Student List</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
			
			 <div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Class</label>
					    <select onchange="test()" name="name"  class="form-control" id="class_id" required>
						       <option value=" ">Select Class</option>
                   <option value="">All</option>
                   {{-- @if (count($users) > 0) --}}
                   @foreach ($class as $user)
                       <option value="{{ $user->name }}">{{ $user->name }}</option>
                   @endforeach 
               {{-- @endif --}}
						       						       {{-- <option value="NURSERY">NURSERY</option>
					     						       <option value="LKG">LKG</option>
					     						       <option value="UKG">UKG</option>
					     						       <option value="1ST">1ST</option>
					     						       <option value="2ND">2ND</option>
					     						       <option value="3RD">3RD</option>
					     						       <option value="4TH">4TH</option>
					     						       <option value="5TH">5TH</option>
					     						       <option value="6TH">6TH</option>
					     						       <option value="7TH">7TH</option>
					     						       <option value="8TH">8TH</option>
					     						       <option value="9TH">9TH</option>
					     						       <option value="10TH">10TH</option>
					     						       <option value="11TH">11TH</option>
					     						       <option value="12TH">12TH</option> --}}
					     					    </select>
					</div>
				</div>
				
        {{-- <select name="search" class="form-control select2" id="search">
          <option value=" ">All</option>
         
      </select> --}}
      <div class="col-md-12">
        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
  </div>
    		<div class="col-md-12">
                <!-- /.box -->

                {{-- <div class="box box-success ">
                <div class="box-header with-border">
                </div>
            <div class="box-body table-responsive" id="my_table" >
              
            </div> --}}
            	
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      </div>
      <!-- /.row -->
    </section>
    </form>
    <div class="box-body table-responsive"id="your_div_ID">
      <table id="myTable" class="table table-bordered table-striped">
        <thead >
        <tr>
<th>S.no.</th>
<th>Admission No</th>
<th>Student Name</th>
<th>Father Name</th>
<th>Std Class</th>
<th>Std RollNo</th>
<th>Address</th>
<th>Std Pickup</th>
<th>Bus No</th>
<th>Bus Route</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
@foreach($studentfrm as $busfrm)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$busfrm->adm_no}}</td>	
<td>{{$busfrm->student_name}}</td>	
<td>{{$busfrm->father_name}}</td>	
<td>{{$busfrm->std_class}}</td>	
<td>{{$busfrm->std_roll_no}}</td>	
<td>{{$busfrm->address}}</td>	
<td>{{$busfrm->pickup}}</td>	
<td>{{$busfrm->bus_no}}</td>	
<td>{{$busfrm->bus_route}}</td>	
	
{{-- <td><button type="button"onclick=''class="btn btn-success"><a href="{{url('')}}"style="text-decoration:none; color:white">Edit</a></button></td> --}}
<td><button type="button"class="btn btn-danger" onclick="delete_bus({{$busfrm->id}})">Delete</button></td> 
</tr>   
@endforeach 
</tbody> 
     </table>
    
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
       <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
      <script>
     $(document).ready( function () {
       $('#myTable').DataTable();
     } );
     </script> 
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
          url: '{{ url("bus-bus-list-delete") }}/'+id,
           method: 'get',
          success: function(res) {

            }
          });
    swal("Deleted!", "Your data has been deleted.", "success");
    $( "#your_div_ID" ).load(window.location.href + " #your_div_ID" );

  } else {
    swal("Cancelled", "Your data is safe :)", "error");
  }
});
  }
  </script>
  
 
  
<script>
for_list('');
</script>
@include('common.footer')

