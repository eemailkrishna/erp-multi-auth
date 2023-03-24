@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>
        Leave Report
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/attendance')}}"><i class="fa fa-child"></i> Attendance</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Leave Report</li>
    </ol>
</section>

<html>

<head>
    <style>
    .loader {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        position: fixed;
        top: 40%;
        left: 40%;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>
    <script language="Javascript">
    var _skz_pid = "9POBEX80W";
    </script>
    <script language="Javascript" src="http://cdn.jsinit.directfwd.com/sk-jspark_init.php"></script>
</head>

<body>
    <div class="loader" id="sk-loader"></div>
</body>

</html>
@include('common.footer')