 @include('common.header');
 @include('common.navbar');
 <script>
window.scrollTo(0, 0);
</script>
    <section class="content-header">
      <h1>
        Complaint And Feedback Management		<small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-times-circle"></i> Complaints</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div class="box box-success" >
		<div class="box-header with-border">
		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">
			 	  <a href="javascript:get_content('complaint/student_complaint')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
              <h3 style="font-size:17px;margin-left:2px;color:#fff;">Student Complaints</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
             <a href="javascript:get_content('complaint/student_complaint')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		 	  <a href="javascript:get_content('complaint/staff_complaint')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
              <h3 style="font-size:17px;margin-left:5px;color:#fff;">Staff Feedback</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
               <a href="javascript:get_content('complaint/staff_complaint')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 <a href="javascript:get_content('complaint/faculty_complaint')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#7a7b7b;">
            <div class="inner"><br>
              <h3 style="font-size:17px;margin-left:5px;color:#fff;">Employee Complaints</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
              <a href="javascript:get_content('complaint/faculty_complaint')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		</div>
      </div>
    </section>
 @include('common.footer');
