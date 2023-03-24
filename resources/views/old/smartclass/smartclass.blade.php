@include('common.header')
@include('common.navbar')
<section class="content-header">
    <h1>
        Smart Class
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Smart Class</li>
    </ol>
</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Smart Class Management</h3>
        </div>
        <br>
        <div class="box-body">

            <a href="{{url('video-lecture')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#808000;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Video Lecture</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('video-lecture')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a><a href="{{url('homework')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#800080;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Homework</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('homework')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('notification')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#008080;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Notification</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('notification')}}" class="small-box-footer">More info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a><a href="{{url('study-material')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#800000;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Study Material</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('study-material')}}" class="small-box-footer">More info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('online-exam')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#008000;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Online Test</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('online-exam')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('smartclass-app-rights')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#000080;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Android App Rights</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('smartclass-app-rights')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('student-user-password-change')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#808000;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Password Management</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('student-user-password-change')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('student-login-details')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#800080;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Student Login </h3>
                            <p style="margin-left:10px;color:#fff;">Details</p>
                        </div>
                        <a href="{{url('student-login-details')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('result-show')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#008080;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Show Result</h3>
                            <p style="margin-left:10px;color:#fff;">Details</p>
                        </div>
                        <a href="{{url('result-show')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

            <a href="{{url('active-user-list')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#008000;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Active Student</h3>
                            <p style="margin-left:10px;color:#fff;">Details</p>
                        </div>
                        <a href="{{url('active-user-list')}}" class="small-box-footer">More
                            info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

            <a href="{{url('liveclass')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#F4a943;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Live Class</h3>
                            <p style="margin-left:10px;color:#fff;">Details</p>
                        </div>
                        <a href="{{url('liveclass')}}" class="small-box-footer">More info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>

</section>
@include('common.footer')