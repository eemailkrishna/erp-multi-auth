    @include('common.header')
    @include('common.navbar')
    <section class="content-header">
      <h1>
        Enquiry Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
         	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i>  Home</a></li>
       <li><i class="fa fa-phone-square"></i>  Enquiry</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">


		 <a href="{{url('add_enquiry')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">New Enquiry</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>

		   <a href="{{url('add_enquiry')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		 </a>
		  <a href="{{url('enquiry_list')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Enquiry List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
               <a href="{{url('enquiry_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		 </a>

        <a href="{{url('enquiry_sms_list')}}">
          
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#8F736D;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Enquiry SMS</h3>
				<p style="margin-left:10px;color:#fff;">List</p>
            </div>
             <a href="{{url('enquiry_sms_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
                 <a href="{{url('call_student_list')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#808000;">
            <div class="inner"><br>
              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Enquiry Call Management</h3>
				<p style="margin-left:10px;color:#fff;">List</p>
            </div>
             <a href="{{url('call_student_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		</div>
      </div>
	  <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>
		</div>
		<div class="box-body">


		<a href="{{url('enquiry_daily_report')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#594518;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Enquiry Report</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
             <a href="{{url('enquiry_daily_report')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		</div>
	  </div>

    </section>
  </div>
  @include('common.footer')
