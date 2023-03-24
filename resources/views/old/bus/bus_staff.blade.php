@include('common.header')
@include('common.navbar')
   <section class="content-header">
      <h1>
       Bus Management        <small>Control Panel</small>
      </h1>
     <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
	    <li><i class="active"></i>Bus Staff</li>
	</ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div class="box box-success ">
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">

		<a href="{{url('bus/employee-add')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
              <h3 style="font-size:25px;margin-left:10px;color:#fff;"> Employee Add</h3>
				<p style="margin-left:10px;color:#fff;"> Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/enquiry_list.png')}}" style="width:60px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="{{url('bus/employee-add')}}" class="small-box-footer"> More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		 <a href="{{url('bus/employee-list')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#B0BF1A;">
            <div class="inner"><br>
              <h3 style="font-size:25px;margin-left:10px;color:#fff;"> Employee List</h3>
				<p style="margin-left:10px;color:#fff;"> Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="{{url('images/enquiry_list.png')}}" style="width:60px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="{{url('bus/employee-list')}}" class="small-box-footer"> More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		</div>
      </div>
	  <div class="box box-success " style="display:none;">
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>
		</div>
		<div class="box-body">

		</div>
	  </div>
	  <div class="box box-success " style="display:none;">
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>
		</div>
		<div class="box-body">

		
		
		</div>
	  </div>
    </section>

    @include('common.footer')