   @include('common.header');
   @include('common.navbar');

   <section class="content-header">
      <h1>
       SMS Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">SMS Panel</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div class="box">
		<div class="box-header">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">
             <a href="javascript:get_content('sms/student_sms')">
        <div class="col-lg-3 col-xs-6" style="display:none">
          <div class="small-box" style="background-color:#808000;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/student_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		  <a href="javascript:get_content('sms/holiday_sms')">
        <div class="col-lg-3 col-xs-6" >
          <div class="small-box" style="background-color:#800080;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Holiday SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/holiday_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		 <a href="javascript:get_content('sms/birthday_sms')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:	#008080;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Birthday SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/birthday_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		 <a href="javascript:get_content('sms/student_notification')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:	#008000;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">App Message</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/student_notification')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


		 <a href="javascript:get_content('sms/message_list')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:	#800000;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">App Message List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/message_list')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>



		<a href="javascript:get_content('sms/sms_from_mobile')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:	#000080;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">SMS From Mobile</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/sms_from_mobile')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>



				    		  <a href="javascript:get_content('sms/classwise_sms')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#808080;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/classwise_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			  	<a href="javascript:get_content('sms/staff_sms')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#3B3B6D;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Staff SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/staff_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			    		  	<a href="javascript:get_content('sms/attendance_sms')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Attendance SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/attendance_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			    		  	<a href="javascript:get_content('sms/fee_sms')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#34B334;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Fee SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/fee_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>



		 <a href="javascript:get_content('sms/sms_templates_list')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:	#804040;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">SMS Template</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/sms_templates_list')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			    		  	<a href="javascript:get_content('sms/add_group')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#1A47F0;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Group</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/add_group')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			    		  	<a href="javascript:get_content('sms/add_group_staff')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#1A47F0;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Group Staff</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/add_group_staff')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

        <a href="javascript:get_content('sms/group_student')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#A481CB;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Group Student</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/group_student')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

		<a href="javascript:get_content('sms/group_teacher')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Group Teacher</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/group_teacher')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			    		  	<a href="javascript:get_content('sms/group_wise_sms')">
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:	#C46210;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Group SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/group_wise_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			    		  	<a href="javascript:get_content('sms/delivery_report')">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:	#C46210;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Delivery Report</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/delivery_report')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		    				<a href="javascript:get_content('sms/bus_sms')" >
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#34B334;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/bus_sms')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		  <a href="javascript:get_content('sms/group_other')" >
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Group Other Contact</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/group_other')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
					<a href="javascript:get_content('sms/voice_call_panel')" >
        <div class="col-lg-3 col-xs-6"  style="display:none">
          <div class="small-box" style="background-color:#82700E;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Voice Call</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="javascript:get_content('sms/voice_call_panel')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

		</div>

      </div>
	  <div class="box">
		<div class="box-header">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>
		</div>
		<div class="box-body">

            <a href="javascript:get_content('sms/delivery_print_report')">
            <div class="col-lg-3 col-xs-6">
              <div class="small-box" style="background-color:	#C46210;">
                <div class="inner"><br>
                   <h3 style="font-size:20px;margin-left:5px;color:#fff;">SMS Delivery Report</h3>
    				<p style="margin-left:10px;color:#fff;">Enter</p>
                </div>
                <a href="javascript:get_content('sms/delivery_print_report')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
    		</a>

		</div>

      </div>
	  <div class="box">
		<div class="box-header">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>
		</div>
		<div class="box-body">

            <a href="../school_software_v1_old/userhelp/Sms Panel.pdf" target="_blank">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box" style="background-color:red;">
							<div class="inner"><br>
							 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>
							<p style="margin-left:10px;color:#fff;">Enter</p>
						</div>
							<a href="../school_software_v1_old/userhelp/Sms Panel.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					</a>


					<a href="../school_software_v1_old/userhelp/Sms Panel hindi.pdf" target="_blank">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box" style="background-color:green;">
							<div class="inner"><br>
							 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>
							<p style="margin-left:10px;color:#fff;">Enter</p>
						</div>
							<a href="../school_software_v1_old/userhelp/Sms Panel hindi.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					</a>

		</div>
	  </div>
    </section>
   @include('common.footer');
