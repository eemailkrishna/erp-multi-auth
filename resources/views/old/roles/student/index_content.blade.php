@include('common.header')
@include('roles.student.sidenavbar')

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

    <div <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;"><i
                    class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>STUDENT</b></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
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


</div>



@include('common.footer')
<!-------------------------------------- Support Panel End --------------------------------->