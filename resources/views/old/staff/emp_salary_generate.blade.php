@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    function open_file1(image_type,emp_id){
        $.ajax({
        address: "POST",
        url: access_link+"staff/ajax_open_image.php?image_type="+image_type+"&emp_id="+emp_id+"",
        cache: false,
        success: function(detail){
         $("#mypdf_view").html(detail);
        }
        });
        }
    </script>
        <section class="content-header">
           <h1>Employee Management        <small>Control Panel</small></h1>
          <ol class="breadcrumb">
          <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
               <li><a href="javascript:get_content('staff/employee_list')"><i class="fa fa-male"></i>Employee List</a></li>
          <li class="active">Employee Salary List</li>
          </ol>
        </section>


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <!-- /.box -->

              <div class="box box-success" >
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead >
                    <tr>
                      <th>S.no.</th>
                      <th>Employee Name</th>
                      <!-- <th></th> -->
                      <th>Contact No.</th>
                      <th>Designation</th>
                      <th>Salary</th>
                      <th>Details</th>
                    </tr>
                    </thead>
        <tbody>
            @foreach ($detail as $data)
<tr>

            <td> {{ $loop->iteration }}</td>
            <td> {{ $data->emp_name }}</td>
            <td> {{ $data->emp_mobile_new }}</td>
            <td> {{ $data->emp_designation }}</td>
            <td> {{ $data->emp_basic_salary }}</td>
            <td> {{ $data->emp_address }}</td>

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
       <div id="mypdf_view">
                <div>
        </section>
             {{-- <script>
      $(function () {
          var dataTable=$('#example1').DataTable({
                    destroy: true,
                    "processing": true,
                    "serverSide":true,
                    "ajax":{
                        url:access_link+"staff/salary_list_fatch.php",
                        type:"post"
                    }
                });
       $('#example1').DataTable()
      })
    </script> --}}
    <script>
        $(function() {
            $('#example1').DataTable()

        })
        </script>

@include('common.footer')
