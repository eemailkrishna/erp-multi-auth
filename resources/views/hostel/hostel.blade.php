@include('common.header')
@include('common.navbar')

<script>
window.scrollTo(0, 0);
</script>
<section class="content-header">
      <h1>
                Hostel Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="Active"><a href="">Hostel</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">

		   <a href="{{ url('hostel-list') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Hostel Details</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('hostel-list') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
@include('common.header')
</div>
		</a>
	 	<a href="{{ url('hostal-room-list') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Room Details</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('hostal-room-list') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 		 	 	  		 <a href="{{ url('seat-available') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Seat Availablity</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('seat-available') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


	 		 	 	  		<a href="{{ url('hostel-staff') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#FF7E00;">
            <div class="inner"><br>
              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Hostel Staff</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('hostel-staff') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 		 	 	  		<a href="{{ url('hostal-stu-list') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#C46210;">
            <div class="inner"><br>
              <h3 style="font-size:17px;margin-left:1px;color:#fff;">Hostel Student List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('hostal-stu-list') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
 	 		 	 	        <a href="{{ url('hostal_mess') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B3B6D;">
            <div class="inner"><br>
              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Mess</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('hostal_mess') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 		 	 	  		<a href="{{ url('/leave') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#804040;">
            <div class="inner"><br>
              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Old Hostellers</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('/leave') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
 	 		 	 	         <a href="javascript:get_content('hostel/hostel_daily_entry')">
        <div class="col-lg-3 col-xs-6" style="display:none;">
          <div class="small-box" style="background-color:#34B334;">
            <div class="inner"><br>
              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Daily Entry</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="javascript:get_content('hostel/hostel_daily_entry')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

	 		 	 	  		<a href="{{ url('/account') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#551B8C;">
            <div class="inner"><br>
              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Account</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{ url('/account') }}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		</div>
      </div>
	 <!-- <div class="box" style="display:none;">-->
		<!--<div class="box-header with-border">-->

		<!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
		<!--</div>-->
		<!--<div class="box-body">-->




		<!--</div>-->
	 <!-- </div>-->
	 <!-- <div class="box" style="display:none;">-->
		<!--<div class="box-header with-border">-->

		<!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
		<!--</div>-->
		<!--<div class="box-body">-->



		<!--</div>-->
	 <!-- </div>-->
    </section>
{{-- @include('common.footer'); --}}
@extends('common.footer')

