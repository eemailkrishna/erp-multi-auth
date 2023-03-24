@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


{{-- <script type="text/javascript">

function for_check(id){
if($('#'+id).prop("checked") == true){
$("."+id).each(function() {
$(this).prop('checked',true);
});
}else{
$("."+id).each(function() {
$(this).prop('checked',false);
});
}
 }




   function for_list(){
			var emp_categories=	document.getElementById('emp_categories').value;
$("#my_table").html(loader_div);
       $.ajax({
			  type: "POST",
              url: access_link+"staff/ajax_staff_id_card.php?id="+emp_categories+"",
              cache: false,
              success: function(detail){
            $('#my_table').html(detail);
			//$("#click").click();
              }
           });

    }
</script> --}}

     <section class="content-header">
      <h1>
        Employee Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
	  <li class="active">Staff ID Card</li>
      </ol>
    </section>

{{--
	<script type="text/javascript">


	   function set_id_card(value1){
	   var page1 = "../pdf/id_card_page/id_card_pdf_"+value1+".php";
	    $('#my_form').attr('action',page1);
    }
</script> --}}


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
						            <div class="box-body "  >
			<form role="form"  method="post" id="my_form" action="../school_software_v1_old/pdf/pdf/id_card_page/id_card_pdf_staff.php" enctype="multipart/form-data" target="_blank">

			 <div class="col-md-3 ">
					<div class="form-group" >
					    <label>Categories</label>
                            <select name="search" class="form-control select2" id="search1" required>
						       <option value="">All</option>
                               @if (count($users) > 0)
                               @foreach ($users as $user)
                                   <option value="{{ $user->id }}">{{ $user->emp_categories }}</option>
                               @endforeach
                           @endif

					    </select>
					</div>
				</div>



				<div class="col-xs-12">
                <!-- /.box -->

                <div class="box box-success" >
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" id="my_table">
                <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th>S.No.</th>
                  <th>Employee Id No</th>
                  <th>Employee Name</th>
                  <th>Select Employee &nbsp;<input type="checkbox" id="checked1" checked value="" name="" onclick="for_check(this.id);"></th>
                </tr>
                </thead>

				<tbody id="tbody">
                    @foreach ($users as $id)
                    <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $id->id}}</td>
            <td>{{ $id->emp_name }}</td>
            <td></td>
        </tr>
        @endforeach

            </tbody>

</table>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>

		  <div class="col-md-12">
		        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
</div>
{{-- select category staff ajax start script --}}
<script>
    $(document).ready(function() {
        $("#search1").on('change', function() {
            var value = $(this).val();
            $.ajax({
                url: "{{ route('emp-list') }}",
                type: "GET",
                data: {
                    'search': value
                },
                success: function(data) {
                    var users = data.users;
                    var html = '';
                    if (users.length > 0) {
                        for (let i = 0; i < users.length; i++) {
                            html += '<tr>\
                <td> ' +(i+1) + ' </td>\
                <td> ' + users[i]['id'] + ' </td>\
                <td> ' + users[i]['emp_name'] + ' </td>\
                 </tr>'
                        }
                    } else {
                        html += '<tr>\
            <td colspan="10" style="color:red;" align="center">No data found</td>\
            </tr>';
                    }
                    $("#tbody").html(html);
                }
            });
        });
    });
</script>
{{-- select category staff ajax end script --}}


<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
@include('common.footer')
