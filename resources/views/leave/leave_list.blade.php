    @include('common.header')
    @include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <section class="content-header">
      <h1>
        Leave Management      </h1>
      <ol class="breadcrumb">
               <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	   <li><a href="javascript:get_content('leave/leave')"><i class="fa fa-umbrella"></i> Leave Management</a></li>
        <li class="active"><i class="fa fa-list"></i> Leave List</li>
      </ol>
    </section>
    <script>
        $(function() {

            $('.select2').select2()

        })
    </script>

<script>
    function for_search(value){
        $.ajax({
            type:"GET",
            url:'class-info/{id}', value,
            cache:false,
            success:function(search) {
                $('#leave_from_date').val(search.leave_from_date);

            }
        });
    }

    </script>

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
url: access_link+"leave/delete_leave.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('leave/leave_list');
			   }else{
               alert_new(detail);
			   }
}
});
}

</script>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Leave List</h3>
            </div>


            <!-- /.box-header -->
            <div class="box-body table-responsive">

            <div class="col-md-3">
              <div class="form-group">
				<label>Class</label>
				<select name="student_class" id="student_class" class="form-control select2" >
					<option  value="">Select</option>
                    @foreach ($users as $class_list )
					<option  value="{{ $class_list->id }}">{{ $class_list->name }}</option>
                    @endforeach
                	</select>
			  </div>
			  </div>

			  <div class="col-md-3">
              <div class="form-group">
				<label>Particular Date</label>
				<input type="date" name="particular_date" id="particular_date" class="form-control" oninput="for_search(this.value);" value="" />
			  </div>
			  </div>

              <table id="tbody" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th id="std_name">student Name</th>
                  <th>Class</th>
                  <th>Roll.No.</th>
                  <th>Section</th>
                  <th>From Date</th>
                  <th>To Date</th>
				  <th>Total leave days</th>
                  <th>Approved By</th>
                  <th>Application</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  {{-- <th>Delete</th> --}}
                </tr>
                </thead>
                <tbody id="table">
                    @foreach ($leave as $item)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $item->student->user->name }}</td>
                        <td>{{ $item->student->class->name }}</td>
                        <td>{{ $item->student->roll_no }}</td>
                        <td>{{ $item->student->section->section_name }}</td>
                        <td>{{ $item->leave_from_date }}</td>
                        <td>{{ $item->leave_to_date }}</td>
                        <td>{{ $item->total_leave_days }}</td>
                        <td>{{ $item->approved_by }}</td>
                        <td>{{ $item->upload_application_photo }}</td>
                        <td>
                             <a href="{{ url('edit-leave/'.$item->id) }}"><button type="submit" class="btn btn-primary"> Edit </button></a></td>
                       <td>
                             <button type="button" onclick="delete_room({{ $item->id }})"
                           class="btn btn-danger">Delete</button>
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

    <!-- /.content -->

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
                        url: '{{ url('/leave-list') }}/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    });
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    // location reload();
                    $("#tbody").load(window.location.href + " #tbody");
                } else {
                    swal("Your imaginary file is safe!");
                }
            });

    }
</script>

{{-- ajax filter list query --}}
<script>
    $(document).ready(function() {
        $("#student_class").on('change', function() {
            var value = $(this).val();
            $.ajax({
                url: "{{ route('studentleavelist') }}",
                type: "GET",
                data: {
                    'class_id': value
                },
                success: function(data) {

                    var users = data.users;
                    console.log(users['id']);
                    var html = '';
                    if (users.length > 0) {
                        for (let i = 0; i < users.length; i++) {
                            html += '<tr>\
                <td> ' + users[i]['id'] + ' </td>\
                <td> ' + users[i]['name'] +' </td>\
                <td> ' + users[i]['student'] + ' </td>\
                <td> ' + users[i]['roll_no'] + ' </td>\
                <td> ' + users[i]['section'] + ' </td>\
                <td> ' + users[i]['leave_from_date'] + ' </td>\
                <td> ' + users[i]['leave_to_date'] + ' </td>\
                <td> ' + users[i]['total_leave_days'] + ' </td>\
                <td> ' + users[i]['approved_by'] + ' </td>\
                <td> ' + users[i]['upload_application_photo'] + ' </td>\
                <td><a href="{{ url('edit-leave/'.@$item->id) }}"><button type="submit" class="btn btn-primary"> Edit </button></a></td>\
                       <td><button type="button" onclick="delete_room({{ @$item->id }})" class="btn btn-danger deletebtn1">Delete</button></td>\
                 </tr>'
                        }
                    } else {
                        html += '<tr>\
            <td colspan="10" style="color:red;" align="center">No data found</td>\
            </tr>';
                    }
                    $("#table").html(html);
                }
            });
        });
    });
</script>

    @include('common.footer')
