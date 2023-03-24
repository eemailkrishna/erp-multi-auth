
@include('common.header')
@include('common.navbar')
<script>
			function valid(s_no){
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_holiday(s_no);
 }
else  {
return false;
 }
  }
  function delete_holiday(s_no){
$.ajax({
type: "POST",
url: access_link+"holiday/delete_holiday.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Deleted','green');
				   get_content('holiday/holiday_list');
			   }else{
               alert_new(detail);
			   }
}
});
}

</script>

    <section class="content-header">
      <h1>
        Holiday Management
      </h1>
      <ol class="breadcrumb">
    <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('holiday/holiday')"><i class="fa fa-photo"></i> Holiday</a></li>
        <li class="active"><i class="fa fa-list"></i> Holiday List </li>
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
              <h3 class="box-title">Holiday List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Holiday Name</th>
                  <th>Holidays Date</th>
                  <th>Day</th>
                  <th>Descrption</th>

                  <th>Update By</th>
                  <th>Updated By Date</th>

                  <th>Action</th>

                </tr>
                </thead>

		<tbody>
            {{-- Start foreach condition  --}}
            @foreach ($listholidays as $list )

				                <tr>
                  <td>{{ $list->id }}</td>
                  <td>{{ $list->name }} </td>
                  <td>{{ $list->date }}</td>
                  <td>Tuesday</td>
                  <td>{{ $list->description }} </td>
                  <td>rahul@simption.com</td>
                  <td>13-12-2022</td>

                  <td><a href="{{ url('edit-holiday/'.$list->id) }}"><button type="button"  onclick="post_content('holiday/edit_holiday','id=84')" class="btn btn-success" >Edit</button></a>
			<a href="{{ url('holiday-delete/'.$list->id) }}"><button type="button"  class="btn class btn btn-danger" onclick="return  valid('84');" >Delete</button></a></td>
                </tr>
                @endforeach
            {{-- end for each condition      --}}
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
