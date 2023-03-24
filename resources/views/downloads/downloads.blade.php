 @include('common.header')
 @include('common.navbar')
 <script>
window.scrollTo(0, 0);
 </script>
 <section class="content-header">
     <h1>
         <b>Download Management</b>
         <small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Download</li>
     </ol>
 </section>
 <!-- Main content -->
 <section class="content">
     <div class="box box-success">
         <div class="box-header with-border">
             <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
             </h3>
         </div>
         <div class="box-body">
             <a href="{{url('select-student')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#E32636;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student Info</h3>
                             <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                         </div>
                         <a href="{{url('select-student')}}" class="small-box-footer">More Info
                             <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('select-student-groupwise')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#E32636;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student Info</h3>
                             <p style="margin-left:10px;color:#fff;">Groupwise</p>
                         </div>
                         <a href="{{url('select-student-groupwise')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('employee-download')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#417df4;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Employee List</h3>
                             <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                         </div>
                         <a href="{{url('employee-download')}}" class="small-box-footer">More
                             Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('employee-salary')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#e541f4;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Employee Salary </h3>
                             <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                         </div>
                         <a href="{{url('employee-salary')}}" class="small-box-footer">More
                             Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('enquiry-download-info')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#e20425;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Enquiry List</h3>
                             <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                         </div>
                         <a href="{{url('enquiry-download-info')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('student-fees-download-list')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#f22804;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student Fees List</h3>
                             <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                         </div>
                         <a href="{{url('student-fees-download-list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('account-expense-info')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#034cf1;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Account Expense</h3>
                             <p style="margin-left:10px;color:#fff;">Info</p>
                         </div>
                         <a href="{{url('account-expense-info')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('account-info-download')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#75a4ef;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Account Income</h3>
                             <p style="margin-left:10px;color:#fff;">Info</p>
                         </div>
                         <a href="{{url('account-info-download')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('Attendance-download-list')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#206b6f;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Attendance List</h3>
                             <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                         </div>
                         <a href="{{url('Attendance-download-list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('userid-password')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#F56F9A;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">User Id &</h3>
                             <p style="margin-left:10px;color:#fff;">Password</p>
                         </div>
                         <a href="{{url('userid-password')}}" class="small-box-footer">More
                             Info <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('student-tc')}}">
                 <div class="col-md-3 col-md-6">
                     <div class="small-box" style="background-color:#f73573;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student TC</h3>
                             <p style="margin-left:10px;color:#fff;">(MP Board)</p>
                         </div>
                         <a href="{{url('student-tc')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
         </div>
     </div>
 </section>
 @include('common.footer')