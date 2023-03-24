@include('common.header')
@include('common.navbar')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
			function valid(s_no){
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_hostel(s_no);
 }
else  {
return false;
 }
  }
  function delete_hostel(s_no){
$.ajax({
type: "POST",
url: access_link+"hostel/mess_detail_dlt.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('hostel/daily_mess_purchase_detail');
			   }else{
               //alert_new(detail);
			   }
}
});
}


</script>
    <section class="content-header">
      <h1>
              Hostel Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">

	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i>Hostel</a></li>
	    <li><a href="javascript:get_content('hostel/hostel_mess')"><i class="fa fa-bed"></i>Hostel Mess</a></li>
	      <li class="Active">Daily Mess Purchase Details</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Item List</h3>
			  <a href="{{ url('hostel-daily-add-item') }}">
			  <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#modal-default">Add New Item</button>
			  </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Item Description</th>
                  <th>Quantity</th>
                  <th>Rate</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item )
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $item->item_desc }} </td>
                        <td> {{ $item->quantity }} </td>
                        <td> {{ $item->rate }} </td>
                        <td> {{ $item->purchase_date }} </td>
                        <td>
                            <a href="{{ url('hostel-purchase-edit-list/'.$item->id) }}"><button type="submit" class="btn btn-primary">Edit</button></a>
                            <button type="button" class="btn btn-danger" onclick="delete_room({{ $item->id }})">Delete</button>
                        </td>
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
{{-- ajax sweet alert delete function --}}
<script>
    function delete_room(id) {

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '{{ url('/daily-purchase-del') }}/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    });
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    // location reload();
                    $("#example1").load(window.location.href + " #example1");
                } else {
                    swal("Your imaginary file is safe!");
                }
            });

    }
</script>
@include('common.footer')
