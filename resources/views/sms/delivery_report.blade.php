@include('common.header')
@include('common.navbar')
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<script>
function msg_resend() {

    $.ajax({
        type: "POST",
        url: access_link + "sms/ajax_msg_resend.php?msg=" + msg + "&contact=" + contact + "",
        cache: false,
        success: function($detail1) {
            alert($detail1);
        }
    });
}
</script>


</head>

<section class="content-header">
    <h1>
        SMS Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/sms_panel')}}"><i class="fal fa-comment-alt"></i> SMS</a></li>
        <li class="active">SMS Delivery Report</li>
    </ol>
</section>


<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sms Delivery Report</h3>
                </div>
                <!-- /.box-header -->


                <div class="box-body table-responsive">
                    <table id="example" class="table table-bordered table-striped display" cellspacing="0" width="100%">
                        <thead class="my_background_color">
                            <tr>
                                <th>S.No.</th>
                                <th>Date</th>
                                <th>Message Id</th>
                                <th>Contact</th>
                                <th>Message</th>
                                <th>Count</th>
                                <th>Last Balance</th>
                                <th>Delivery Report</th>
                                <th>Delivery Date</th>
                            </tr>
                        </thead>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
</div>

</div>
<script>
$(document).ready(function() {
    $.extend(true, $.fn.dataTable.defaults, {
        'scrollY': '60vh',
        "pageLength": 10,
        "scrollX": true,
        "autoWidth": false
    });
    var dataTable = $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "sms/fetch1.php",
            type: "post"
        }
    });
});
</script>
@include('common.footer')