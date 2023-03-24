   @include('common.header')
   @include('common.navbar')

   <section class="content-header">
       <h1>
           Homework Management <small> Control Panel</small>
       </h1>
       <ol class="breadcrumb">
           <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
           <li class="active"><i class="fa fa-book"></i> Homework</li>
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

               <a href="{{url('utility/login_details_traking')}}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#3B7A57;">
                           <div class="inner"><br>
                               <h3 style="font-size:22px;margin-left:10px;color:#fff;">Login Details</h3>
                               <p style="margin-left:10px;color:#fff;">Traking</p>
                           </div>
                           <div class="icon">
                               <i class="ion"></i>
                           </div>
                           <a href="{{('utility/login_details_traking')}}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>

               <a href="{{url('utility/student_login_details')}}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#9d669eeb;">
                           <div class="inner"><br>
                               <h3 style="font-size:22px;margin-left:10px;color:#fff;">Student Login </h3>
                               <p style="margin-left:10px;color:#fff;">Details</p>
                           </div>
                           <div class="icon">
                               <i class="ion"></i>
                           </div>
                           <a href="{{url('utility/student_login_details')}}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{url('utility/teacher_login_details')}}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#52c0d0;">
                           <div class="inner"><br>
                               <h3 style="font-size:22px;margin-left:10px;color:#fff;">Teacher Login </h3>
                               <p style="margin-left:10px;color:#fff;">Details</p>
                           </div>
                           <div class="icon">
                               <i class="ion"></i>
                           </div>
                           <a href="{{url('utility/teacher_login_details')}}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>

           </div>
       </div>
       <!-- <div <div class="box box-success" > style="display:none;">-->
       <!--<div class="box-header with-border">-->

       <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
       <!--</div>-->
       <!--<div class="box-body">-->




       <!--</div>-->
       <!-- </div>-->
       <!-- <div <div class="box box-success" > style="display:none;">-->
       <!--<div class="box-header with-border">-->

       <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
       <!--</div>-->
       <!--<div class="box-body">-->



       <!--</div>-->
       <!-- </div>-->
   </section>

   @include('common.footer')