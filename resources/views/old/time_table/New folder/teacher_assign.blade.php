	<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>

 <section class="content-header">
      <h1>
        Time Table Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-clock-o"></i> Time Table</a></li>
	  <li class="active">Teacher Availabilty</li>
      </ol>
    </section>
	

	
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Teacher Managemnet</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
   <h3 class="box-title">Please check that you have already marked staff's attendence and have already filled subject wise teacher list</h3>
			<form role="form"  method="post" enctype="multipart/form-data">
			

			  
				
				
				<div class="col-md-12">
                <!-- /.box -->

                <div <div class="box box-success" >>
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                <table id="table-data" border="1" class="table table-bordered table-striped" width="100%">
                <thead >
				  <tr>
				  <th>S.no</th>
				  <th>Absent Teacher Name</th>
								  
				
				  
                  </tr>
                </thead>
				<tbody id="example2">
You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '112' at line 1