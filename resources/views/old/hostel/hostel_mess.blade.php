@include('common.header')
@include('common.navbar')
     <section class="content-header">
      <h1>
       Hostel Management        <small>Control Panel</small>
      </h1>
    <ol class="breadcrumb">
	     <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	    <li class="Active">Hostel Mess</li>
	</ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">

		<a href="{{ url('hostel_mess_list') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#AF002A;">
            <div class="inner"><br>
              <h3 style="font-size:25px;margin-left:10px;color:#fff;">Mess Menu</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="../school_software_v1_old/images/hostel_mess.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="{{ url('hostel_mess_list') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
         <a href="{{ url('daily_mess_detail') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:	#C46210;">
            <div class="inner"><br>
              <h3 style="font-size:25px;margin-left:10px;color:#fff;">Daily Purchase</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="../school_software_v1_old/images/new_admission.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="{{ url('daily_mess_detail') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		</div>
      </div>
	  <div class="box" style="display:none;">
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>
		</div>
		<div class="box-body">




		</div>
	  </div>
	  <div class="box" style="display:none;">
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>
		</div>
		<div class="box-body">



		</div>
	  </div>
    </section>
    @include('common.footer')

