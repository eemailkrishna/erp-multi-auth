    <section class="content-header">
      <h1>
       Fees Management        <small>Control Panel</small>
		</h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	  <li class="active">Student Fees List</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
         
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
				  <th>S. No.</th>
				  <th>Adm. No.</th>
				  <th>student Name</th>
				  <th>Father's Name</th>
				  <th>Class</th>
				  <th>Student Section</th>
				  <th>Receipt Numbers</th>
                  <th>Submission Date</th>
				  <th>Total Fee</th>
				  <th>Total Paid/Year</th>
				  <th>Remaining Fee</th>
				  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                
			
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
        $(document).ready(function(){
            var dataTable=$('#example1').DataTable({
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:access_link+"fees_monthly/fetch_fees_module_threeapi.php",
                    type:"post"
                }
            });
        });
    </script>
	