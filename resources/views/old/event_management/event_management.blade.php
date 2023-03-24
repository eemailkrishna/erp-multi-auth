@include('common.header')
@include('common.navbar')

<script>
window.scrollTo(0, 0);
</script>
<section class="content-header">
    <h1>
        Event Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-calendar-check-o"></i> Event Management</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box box-success">
        <div class="box-header with-border">

            <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('event_management/add_house')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#FE6A0F;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Add House</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/add_house')}}" class="small-box-footer">More
                            Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('event_management/add_event')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#E32636;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Add Event</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/add_event')}}" class="small-box-footer">More
                            Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

            <a href="{{url('event_management/add_participate')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#3B7A57;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Add Participate</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/add_participate')}}"
                            class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('event_management/participate_list_report')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#C46210;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Participant List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/participate_list_report')}}"
                            class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('event_management/activity_plane')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#5EF3D3;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Activity Plan</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/activity_plane')}}"
                            class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('event_management/activity_plane_list')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#92AF04;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Activity Plan List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/activity_plane_list')}}"
                            class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('event_management/event_result')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#5EDAF3;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Event Result</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/event_result')}}" class="small-box-footer">More
                            Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('event_management/event_result_list')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#C8AC2A;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Event Result List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/event_result_list')}}"
                            class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('event_management/team_creation')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#20B5F7;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Team Creation</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/team_creation')}}" class="small-box-footer">More
                            Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('event_management/team_creation_list')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#BC85F7;">
                        <div class="inner"><br>
                            <h3 style="font-size:18px;margin-left:10px;color:#fff;">Team Creation List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('event_management/team_creation_list')}}"
                            class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

        </div>
    </div>
   

</section>
@include('common.footer')