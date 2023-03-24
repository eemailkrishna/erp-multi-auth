 @include('common.header')
 @include('common.navbar')
 <script>
window.scrollTo(0, 0);
 </script>
 <section class="content-header">
     <h1>
         School Information Management <small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active"> School Info</li>
     </ol>
 </section>


 <!-- Main content -->
 <section class="content">
     <div <div class="box box-success">
         <div class="box-header with-border">

             <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
             </h3>
         </div>
         <div class="box-body">

             <a href="{{url('/school-school_general_info')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#E32636;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">School General Info</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-school_general_info')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>

             <a href="{{url('/school-info-exam-type-add')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#3B7A57;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Examination Type</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info-exam-type-add')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="javascript:get_content('school_info/exam_type_add_monthly')">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#FBAA00;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Exam Type Monthly</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="javascript:get_content('school_info/exam_type_add_monthly')"
                             class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info-add-section')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#C46210;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Section</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info-add-section')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('school-info-add-class-stream')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#3B3B6D;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Stream</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('school-info-add-class-stream')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info-add-group')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#FF7E00;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Group</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info-add-group')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info-subject-add')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#804040;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Subject</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info-subject-add')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info-class-wise-subject')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#34B334;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Classwise Subject</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info-class-wise-subject')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info-fee-types-add')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#551B8C;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Fee Type</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info-fee-types-add')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info-discount-types-add')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#915C83;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Discount Type</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info-discount-types-add')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="javascript:get_content('school_info/rfid_card_add')">
                 <div class="col-md-3 col-md-6" style="display:none">
                     <div class="small-box" style="background-color:#4B5320;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Rfid</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion">></i>
                         </div>
                         <a href="javascript:get_content('school_info/rfid_card_add')" class="small-box-footer">More
                             Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info-total-list')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#4B5320;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">School Data</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info-total-list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>

             <a href="{{url('/student-user-password-change')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#4B5320;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student Password Update</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/student-user-password-change')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info_addfeecategory')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#716B70;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Fee Category</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info_addfeecategory')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/schoolInfo-AddBusFeeCategory-MonthlyInstallmentwise')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#1D8A73;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Bus Fee Category</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/schoolInfo-AddBusFeeCategory-MonthlyInstallmentwise')}}"
                             class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('schoolInfo-addstudentidentitycategory')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#3B3B6D;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Std. Identity Category</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('schoolInfo-addstudentidentitycategory')}}" class="small-box-footer">More Info
                             <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('/school-info_syllabusDetails')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#333432;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Syllabus Details</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info_syllabusDetails')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>

         </div>
     </div>
     <div <div class="box box-success">
         <div class="box-header with-border">

             <h3 class="box-title" style="color:teal;"><i
                     class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>
         </div>
         <div class="box-body">

             <a href="{{url('/school-info_academic-calender')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#171F63;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Academic Calender</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('/school-info_academic-calender')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>

         </div>
     </div>
     <!-- <div <div class="box box-success" >-->
     <!--<div class="box-header with-border">-->

     <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
     <!--</div>-->
     <!--<div class="box-body">-->

     <!-- <a href="../../../school_software_v1_old/userhelp/School info PAne1_englisg.pdf" target="_blank">-->
     <!--			<div class="col-md-3 col-md-6">-->
     <!--				<div class="small-box" style="background-color:red;">-->
     <!--					<div class="inner"><br>-->
     <!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>-->
     <!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
     <!--				</div>-->
     <!--				<div class="icon">-->
     <!--					<i class="ion"></i>-->
     <!--				</div>-->
     <!--					<a href="../../../school_software_v1_old/userhelp/School info PAne1_englisg.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
     <!--				</div>-->
     <!--			</div>-->
     <!--			</a>-->


     <!--			<a href="../../../school_software_v1_old/userhelp/School info PAnel.pdf" target="_blank">-->
     <!--			<div class="col-md-3 col-md-6">-->
     <!--				<div class="small-box" style="background-color:red;">-->
     <!--					<div class="inner"><br>-->
     <!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>-->
     <!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
     <!--				</div>-->
     <!--				<div class="icon">-->
     <!--					<i class="ion"></i>-->
     <!--				</div>-->
     <!--					<a href="../../../school_software_v1_old/userhelp/School info PAnel.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
     <!--				</div>-->
     <!--			</div>-->
     <!--			</a>-->

     <!--</div>-->
     <!-- </div>-->
 </section>
 @include('common.footer')