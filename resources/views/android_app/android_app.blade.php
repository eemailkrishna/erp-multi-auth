@include('common.header')
@include('common.navbar')

<script>
window.scrollTo(0, 0);
</script>
<section class="content-header">
    <h1>
        Notification Management
        <small> Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-book"></i> Notification</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">

            <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
        </div>
        <div class="box-body">

            <a href="{{url('notification-add')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3B7A57;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Notification</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('notification-add')}}" class="small-box-footer">More
                            Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

            <a href="{{url('student-user-password-change')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3498DB;">
                        <div class="inner"><br>
                            <h3 style="font-size:22px;margin-left:10px;color:#fff;">Password Reset</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('student-user-password-change')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

            <a href="{{url('publish-marks')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#C46210;">
                        <div class="inner"><br>
                            <h3 style="font-size:19px;margin-left:5px;color:#fff;">Publish Marks</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('publish-marks')}}" class="small-box-footer">More Info
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

        </div>
    </div>

</section>
@include('common.footer')