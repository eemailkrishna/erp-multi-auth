@include('common.header')
@include('common.navbar')
<script>
window.scrollTo(0, 0);
</script>
<section class="content-header">
    <h1>
        Video Lecture
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>

        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li class="active">Video Lecture</li>
    </ol>
</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Video Lecture Management</h3>
        </div>
        <br>
        <div class="box-body">
            <a href="{{url('video-lecture-add')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#1D8348;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Video Link</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('video-lecture-add')}}" class="small-box-footer">More
                            info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

            <a href="{{url('video-lecture-list')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#8E44AD;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Video List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('video-lecture-list')}}" class="small-box-footer">More
                            info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>


        </div>


</section>
@include('common.footer')