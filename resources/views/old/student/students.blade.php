@include('common.header')
    @include('common.navbar')

    <section class="content-header">
      <h1>
        Student Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">Student</li>
      </ol>
    </section>

    <section class="content">
            <div  class="box box-success" >
				<div class="box-header with-border">

				  <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
				</div>
				<div class="box-body">


			 <a href="{{url('student/student_registration')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Registration</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
             <a href="{{url('student/student_registration')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>



	  		<a href="{{url('student/student_registration_list')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Registration List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>

            <a href="{{url('student/student_registration_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 			 	 		<a href="{{url('student/student_admission')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Admission List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>

            <a href="{{url('student/student_admission_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

   			 	 	    <a href="javascript:get_content('student/student_action')">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#34B334;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">One Click</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>

            <a href="javascript:get_content('student/student_action')" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>



			 		 <a href="{{url('student/student_profile_update')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#003366;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Profile Update</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/student_profile_update')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


	 		 <a href="{{url('student/student_mapping_data_update')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#FF7373;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Mapping Data Update</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/student_mapping_data_update')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			 		 <a href="{{url('student/student_photo_update')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#daa520;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Photo Update</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/student_photo_update')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
							<a href="{{url('student/student_sms_contact_update')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#D67BBC;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">SMS Contact Update</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/student_sms_contact_update')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
				<a href="{{url('student/student_sms_notification_update')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#585858;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Web SMS</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/student_sms_notification_update')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

     			<a href="{{url('student/rfid_card_generate')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#40e0d0;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Assign RFID Card</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/rfid_card_generate')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

     	 	    <a href="{{url('student/student_roll_no')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:	#FF7E00;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Roll No Generate</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/student_roll_no')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

 		 <a href="{{url('student/donation_student_add')}}">
        <div class="col-md-3 col-md-6" style="display:none;">
          <div class="small-box" style="background-color:#8040FF;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Donation Student</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/donation_student_add')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		  		 <a href="{{url('student/student_id_card')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#804040;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student Id Generate</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/student_id_card')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

	  <a href="{{url('student/guardian_student_id_card')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#FF6848;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Guardian Id Generate</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/guardian_student_id_card')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	   		<a href="{{url('student/father_student_id_card')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#12C8fA;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Father Id Generate</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/father_student_id_card')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
				<a href="{{url('student/mother_student_id_card')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#02C87A;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Mother Id Generate</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/mother_student_id_card')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>


			 				<a href="{{url('student/health_zone')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#551B8C;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Medical Fitness</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/health_zone')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 			 	 				<a href="{{url('student/physical_fitness')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#72A0C1;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Physical Fitness</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <a href="{{url('student/physical_fitness')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
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

				    						<a href="{{url('student/report_student_strength_castewise')}}">
					<div class="col-md-3 col-md-6">
						<div class="small-box" style="background-color:#ffd700;">
							<div class="inner"><br>
							 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student Strength Caste Wise</h3>
							<p style="margin-left:10px;color:#fff;">Enter</p>
						</div>

							<a href="{{url('student/report_student_strength_castewise')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					</a>


										<a href="{{url('student/report_student_strength_religionwise')}}">
					<div class="col-md-3 col-md-6">
						<div class="small-box" style="background-color:#4617a0;">
							<div class="inner"><br>
							 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student Strength Religion Wise</h3>
							<p style="margin-left:10px;color:#fff;">Enter</p>
						</div>
				            <a href="{{url('student/report_student_strength_religionwise')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					</a>



			        <a href="{{url('student/student_registration_report')}}">
					<div class="col-md-3 col-md-6">
						<div class="small-box" style="background-color:#898281;">
							<div class="inner"><br>
							 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student Registration</h3>
							<p style="margin-left:10px;color:#fff;">Enter</p>
						</div>
				            <a href="{{url('student/student_registration_report')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					</a>
                 </div>
                 </div>


    <!--      <div <div class="box box-success" >-->
				<!--<div class="box-header with-border">-->

				<!--  <h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
				<!--</div>-->
				<!--<div class="box-body">-->
				<!--		<a href="../school_software_v1_old/userhelp/Student Panel.pdf" target="_blank">-->
				<!--	<div class="col-md-3 col-md-6">-->
				<!--		<div class="small-box" style="background-color:red;">-->
				<!--			<div class="inner"><br>-->
				<!--			 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>-->
				<!--			<p style="margin-left:10px;color:#fff;">Enter</p>-->
				<!--		</div>-->

				<!--			<a href="../school_software_v1_old/userhelp/Student Panel.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	</a>-->


				<!--	<a href="../school_software_v1_old/userhelp/Student Panel.pdf" target="_blank">-->
				<!--	<div class="col-md-3 col-md-6">-->
				<!--		<div class="small-box" style="background-color:green;">-->
				<!--			<div class="inner"><br>-->
				<!--			 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>-->
				<!--			<p style="margin-left:10px;color:#fff;">Enter</p>-->
				<!--		</div>-->

				<!--			<a href="../school_software_v1_old/userhelp/Student Panel.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	</a>-->
    <!--             </div>-->
    <!--             </div>-->


    </section>

    @include('common.footer')
