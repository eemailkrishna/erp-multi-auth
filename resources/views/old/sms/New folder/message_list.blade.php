
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

 

</head>

    <section class="content-header">
      <h1>
       SMS Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
             <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('sms/sms_panel')"><i class="fal fa-comment-alt"></i> Message</a></li>
       <li class="active">Message Report</li>
      </ol>
    </section>

	
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Message Report</h3>
            </div>
            <!-- /.box-header -->
			

            <div class="box-body table-responsive">
              <table id="example" class="table table-bordered table-striped display" cellspacing="0" width="100%">
           <thead class="my_background_color">
                <tr>
                  <th>S.No.</th>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Student Class</th>
                  <th>Message Title</th>
                  <th>Message</th>
                  <th>Message Date</th>
                  <th>Update By</th>
                </tr>
                </thead>
				
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
  </div>
    
  </div>
  <script>
        $(document).ready(function(){
            $.extend( true, $.fn.dataTable.defaults, {
  'scrollY':'60vh',
    "pageLength": 10,
     "scrollX": true,
     "autoWidth": false
} );
            var dataTable=$('#example').DataTable({
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:access_link+"sms/message_list_fetch.php",
                    type:"post"
                }
            });
        });
    </script>