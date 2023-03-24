@include('common.header')
@include('roles.user.sidenavbar')

<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
<section class="col-lg-12 ">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>New
                    Panels</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('smartclass')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#884EA0;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Smart Class School Panel</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('smartclass')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('call-management')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#808000;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Call Management<img
                                    src="http://uppsc.up.nic.in/images/new_2.gif" alt="" border="0"></h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('call-management')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="https://simptionsmartclass.com/demo.php" target="_blank">
                <div style="display:none" class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#D35400;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Smart Class Student Panel<img
                                    src="http://uppsc.up.nic.in/images/new_2.gif" alt="" border="0"></h3>
                            <i class="ion"><img src="../../school_software_v1_old/images/paid-min.png"
                                    style="width:70px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                    title="School Management System" class="image1"></i>
                        </div>
                        <a href="https://simptionsmartclass.com" target="_blank" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i
                    class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Important</b></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a href="{{url('attendance')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#E32636;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Attendance</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('attendance')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('enquiry')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3B7A57;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Enquiry</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('enquiry')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('staff')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#9F2B68;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Staff</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('staff')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('student')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#C46210;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Student</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('student')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Important Panel End --------------------------------->
<!-------------------------------------- Account Panel Start --------------------------------->
<section class="col-lg-12 ">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i class="fa fa-inr"></i>&nbsp;&nbsp;&nbsp;<b>Account</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('account')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3B3B6D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Account</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('account')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('dues')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#FF7E00;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Dues</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('dues')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('fees')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#804040;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Fees</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('fees')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('penalty')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:	#34B334;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Penalty</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('penalty')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Account Panel End --------------------------------->
<!-------------------------------------- Academic Panel Start --------------------------------->
<section class="col-lg-12 ">
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Academic</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('certificate')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#551B8C;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Certificate</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('certificate')}}" class="small-box-footer">More Info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('examination')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#915C83;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Examination</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('examination')}}" class="small-box-footer">More Info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('homework')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#4B5320;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Homework/Classwork</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('homework')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('set-paper')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3B444B;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Set Paper</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('set-paper')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Academic Panel End --------------------------------->
<!-------------------------------------- Services Panel Start --------------------------------->
<section class="col-lg-12 ">
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i
                    class="fa fa-folder-open-o"></i>&nbsp;&nbsp;&nbsp;<b>Services</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('complaint')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#A2006D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Complaints</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('complaint')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('gallery')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#007FFF;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Gallery</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('gallery')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('sms')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#FF1493;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">SMS Services</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('sms')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('time-table')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#21ABCD;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Time Table</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('time-table')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Services Panel End --------------------------------->
<!------------------------------ Management Panel Start --------------------------------->
<section class="col-lg-12">
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;&nbsp;<b>Management</b>
            </h3>
        </div>
        <div class="box-body">
            <a href="{{url('event')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#E0218A;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Event</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('holiday')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#7C0A02;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Holiday</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('holiday')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('leave')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#E48400;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Leave</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('leave')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('sports')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#CC6666;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Sports </h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('sports')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Management Panel End --------------------------------->
<!-------------------------------------- Backup Panel Start --------------------------------->
<section class="col-lg-12 ">
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i class="fa fa-database"></i>&nbsp;&nbsp;&nbsp;<b>Backup</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('important')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#0088DC;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Important</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('important')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('download')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#CC0000;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Downloads</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('download')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('recycle-bin')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#006A4E;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Recycle bin</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('recycle-bin')}}" class="small-box-footer">More Info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('session')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#8A2BE2;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Session</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('session')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Backup Panel End --------------------------------->
<!-------------------------------------- Other Panel Start --------------------------------->
<section class="col-lg-12">
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i class="fa fa-rocket"></i>&nbsp;&nbsp;&nbsp;<b>Other</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('govt-requirement')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#08E8DE;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Govt. Requir.</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('govt-requirement')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('reminder')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#993300;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Reminder</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('reminder')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('school-info')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#800020;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">School Info</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('school-info')}}" class="small-box-footer">More Info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('login_details')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#24A0ED;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Login Details</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('login_details')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Other Panel End --------------------------------->
<!-------------------------------------- Add On Panel Start --------------------------------->
<section class="col-lg-12 ">
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i class="fa fa-puzzle-piece"></i>&nbsp;&nbsp;&nbsp;<b>Add On</b>
            </h3>
        </div>
        <div class="box-body">
            <a href="{{url('bus')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#ED872D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Bus</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('bus')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('hostel')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#9955BB;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Hostel</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('hostel')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('library')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#00CC99;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Library</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('library')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('stock')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3C1421;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Stocks</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('stock')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Add On Panel End --------------------------------->
<!-------------------------------------- Academic Panel Start --------------------------------->
<section class="col-lg-12 ">
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Premium</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('live-bus')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#551B8C;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Live Bus</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('live-bus')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('app')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#915C83;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Android App</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('app')}}" class="small-box-footer">More Info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('user-right')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#0088DC;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">USER RIGHTS</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('user-right')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('website-management')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#9F2B68;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Website Management</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('website-management')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-------------------------------------- Academic Panel End --------------------------------->
<!-------------------------------------- Support Panel Start --------------------------------->
<section class="col-lg-12 ">
    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i
                    class="fa fa-question-circle"></i>&nbsp;&nbsp;&nbsp;<b>Support</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('customer-support')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#5F5C5D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Support</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('customer-support')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('gate-pass')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#5F5CdD;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Gate Pass</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('gate-pass')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('stock-management')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#109897;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Stock Management</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('stock-management')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('pdf-format')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#EF5C5D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Pdf Format</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('pdf-format')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('youtube-videos')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#5FEC5D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Youtube Videos</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('youtube-videos')}}" class="small-box-footer">More Info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
</div>



@include('common.footer')
<!-------------------------------------- Support Panel End --------------------------------->