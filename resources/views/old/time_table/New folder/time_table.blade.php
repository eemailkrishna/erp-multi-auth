@include('common.header');
@include('common.navbar');

<script>
window.scrollTo(0, 0);
</script>
    <section class="content-header">
      <h1>
        Time Table Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">Time Table</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Time Table For Same Period Timing for All Class</b></h3>
		</div>
		<div class="box-body">
	 <a href="javascript:get_content('time_table/add_class_period')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#33E6E6;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Class Period</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/time_table_panel.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/add_class_period')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
						<a href="javascript:get_content('time_table/subject_wise_teacher')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#E326F6;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Subject Wise Teacher</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/time_table_panel.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/subject_wise_teacher')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		 	  <a href="javascript:get_content('time_table/time_table_generate')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Time Table</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/time_table_panel.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/time_table_generate')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		 			 	 	 <a href="javascript:get_content('time_table/time_table_list')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Time Table List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/time_table_list.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/time_table_list')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


	 			 	 				 <a href="javascript:get_content('time_table/teacher_availability')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Teacher Availabilty</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/teacher_availablity.png')}}" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/teacher_availability')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 			 			 	<a href="javascript:get_content('time_table/teacher_assign')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#3B6AA7;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Teacher Management</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/teacher_availablity.png')}}" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/teacher_assign')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

	 			 	<a href="javascript:get_content('time_table/time_table_sheet')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#808000;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Time Table Sheet</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/teacher_availablity.png')}}" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/time_table_sheet')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

		</div>
      </div>

      	  <div <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Time Table For Diffrent Period Timing for Different Class(Teacher Availablity, Teacher Management And TimeTable Sheet is not possible for different period timing)</b></h3>
		</div>
		<div class="box-body">
		     <a href="javascript:get_content('time_table/diff_add_class_period')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#33E6E6;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Class Period</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/time_table_panel.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/diff_add_class_period')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		 	  <a href="javascript:get_content('time_table/diff_time_table_generate')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Time Table</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/time_table_panel.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/diff_time_table_generate')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		 			 	 	 <a href="javascript:get_content('time_table/diff_time_table_list')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
              <h3 style="font-size:18px;margin-left:10px;color:#fff;">Time Table List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/time_table_list.png')}}" style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="javascript:get_content('time_table/diff_time_table_list')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		</div>
      </div>

	 <!-- <div <div class="box box-success" > -->
		<!--<div class="box-header with-border">-->

		<!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
		<!--</div>-->
		<!--<div class="box-body">-->




		<!--</div>-->
	 <!-- </div>-->
	 <!-- <div <div class="box box-success" >-->
		<!--<div class="box-header with-border">-->

		<!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
		<!--</div>-->
		<!--<div class="box-body">-->

		<!--<a href="../school_software_v1_old/userhelp/Time table Panel.pdf" target="_blank">-->
		<!--			<div class="col-md-3 col-md-6">-->
		<!--				<div class="small-box" style="background-color:red;">-->
		<!--					<div class="inner"><br>-->
		<!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>-->
		<!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
		<!--				</div>-->
		<!--				<div class="icon">-->
		<!--					<i class="ion"><img src="../../school_software_v1_old/images/userhelp.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>-->
		<!--				</div>-->
		<!--					<a href="../school_software_v1_old/userhelp/Time table Panel.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			</a>-->


		<!--			<a href="../school_software_v1_old/userhelp/Time table Pane1 hindi.pdf" target="_blank"">-->
		<!--			<div class="col-md-3 col-md-6">-->
		<!--				<div class="small-box" style="background-color:green;">-->
		<!--					<div class="inner"><br>-->
		<!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>-->
		<!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
		<!--				</div>-->
		<!--				<div class="icon">-->
		<!--					<i class="ion"><img src="../../school_software_v1_old/images/userhelp.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>-->
		<!--				</div>-->
		<!--					<a href="../school_software_v1_old/userhelp/Time table Pane1 hindi.pdf" target="_blank"" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
		<!--				</div>-->
		<!--			</div>-->
					</a>

		</div>
	  </div>
    </section>

@include('common.footer');
