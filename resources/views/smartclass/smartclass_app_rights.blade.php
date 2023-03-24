@include('common.header')
@include('common.navbar')

<script>
function change_panel_right(panel_code, status) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/smartclass_app_rights_api.php?panel_code=" + panel_code + "&status=" +
            status + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                if (status == 'Show') {
                    alert_new('Panel Successfully Activated!!!!', 'green');
                } else {
                    alert_new('Panel Successfully HIde!!!!', 'green');
                }
                get_content('smartclass/smartclass_app_rights');
            } else {
                alert_new("Sorry!!!! Some error occured", 'red');
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Android Panel List Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Android Panel List </li>
    </ol>
</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title">Smart Class Panel List </h3>
        </div>
        <div class="box-body table-responsive">

            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>s no</th>
                            <th>Panel Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Video Lecture</td>
                            <td><button type="button" class="btn btn-danger"
                                    onclick="change_panel_right('video_lecture','Show')">Show</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Homewrok</td>
                            <td><button type="button" class="btn btn-success"
                                    onclick="change_panel_right('homework','Hide')">Hide</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Notification</td>
                            <td><button type="button" class="btn btn-success"
                                    onclick="change_panel_right('notification','Hide')">Hide</button></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ncert Book</td>
                            <td><button type="button" class="btn btn-success"
                                    onclick="change_panel_right('ncert_book','Hide')">Hide</button></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Important Videos</td>
                            <td><button type="button" class="btn btn-danger"
                                    onclick="change_panel_right('important_videos','Show')">Show</button></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Study Material</td>
                            <td><button type="button" class="btn btn-success"
                                    onclick="change_panel_right('study_material','Hide')">Hide</button></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Online Exam</td>
                            <td><button type="button" class="btn btn-danger"
                                    onclick="change_panel_right('online_exam','Show')">Show</button></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Student Profile</td>
                            <td><button type="button" class="btn btn-success"
                                    onclick="change_panel_right('webview1_status','Hide')">Hide</button></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Result</td>
                            <td><button type="button" class="btn btn-success"
                                    onclick="change_panel_right('webview2_status','Hide')">Hide</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@include('common.footer')