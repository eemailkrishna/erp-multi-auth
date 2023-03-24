 @include('common.header')
 @include('common.navbar')

 <script>
window.scrollTo(0, 0);
 </script>
 <section class="content-header">
     <h1>
         Recycle Bin
         <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Recycle Bin</li>
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

             <a href="{{url('recycle-student-admission-list')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#E32636;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:2px;color:#fff;">Student Admission</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('recycle-student-admission-list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>

             <!--
		 <a href="recycle_fee_list.php">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
              <h3 style="font-size:17px;margin-left:5px;color:#fff;">Fee List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"><img src="../../school_software_v1_old/images/recycle_bin (3).png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>
            </div>
            <a href="recycle_fee_list.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
		-->
             <a href="{{url('recycle-employee-list')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#9F2B68;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:5px;color:#fff;">Employee List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('recycle-employee-list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="javascript:get_content('recycle_bin/recycle_employee_salary_list')">
                 <div class="col-lg-3 col-xs-6" style="display:none">
                     <div class="small-box" style="background-color:#C46210;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:5px;color:#fff;">Employee Salary</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="javascript:get_content('recycle_bin/recycle_employee_salary_list')"
                             class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="javascript:get_content('recycle_bin/recycle_income_list')">
                 <div class="col-lg-3 col-xs-6" style="display:none">
                     <div class="small-box" style="background-color:#3B3B6D;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:5px;color:#fff;">Income List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="javascript:get_content('recycle_bin/recycle_income_list')"
                             class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('recycle-expense-list')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:	#FF7E00;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:5px;color:#fff;">Expence List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('recycle-expense-list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="javascript:get_content('recycle_bin/recycle_bus_staff_list')">
                 <div class="col-lg-3 col-xs-6" style="display:none;">
                     <div class="small-box" style="background-color:#804040;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:5px;color:#fff;">Bus Staff List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="javascript:get_content('recycle_bin/recycle_bus_staff_list')"
                             class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="javascript:get_content('recycle_bin/recycle_bus_student_list')">
                 <div class="col-lg-3 col-xs-6" style="display:none;">
                     <div class="small-box" style="background-color:#34B334;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:5px;color:#fff;">Student List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="javascript:get_content('recycle_bin/recycle_bus_student_list')"
                             class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="javascript:get_content('recycle_bin/recycle_library_book_list')">
                 <div class="col-lg-3 col-xs-6" style="display:none;">
                     <div class="small-box" style="background-color:#551B8C;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:5px;color:#fff;">Book List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="javascript:get_content('recycle_bin/recycle_library_book_list')"
                             class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('recycle-hostel-student-list')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#915C83;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:2px;color:#fff;">Hostel Student List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('recycle-hostel-student-list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('recycle-hostel-account-list')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#4B5320;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:2px;color:#fff;">Hostel Account List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('recycle-hostel-account-list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('student-registration-list')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#b55e35;">
                         <div class="inner"><br>
                             <h3 style="font-size:17px;margin-left:2px;color:#fff;">Student Registration List</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('student-registration-list')}}" class="small-box-footer">More Info<i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>


         </div>
     </div>
     <!-- <div <div class="box box-success" >-->
     <!--<div class="box-header with-border">-->

     <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
     <!--</div>-->
     <!--<div class="box-body">-->




     <!--</div>-->
     <!-- </div>-->
     <!-- <div <div class="box box-success" > -->
     <!--<div class="box-header with-border">-->

     <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
     <!--</div>-->
     <!--<div class="box-body">-->



     <!--</div>-->
     <!-- </div>-->
 </section>
 @include('common.footer')