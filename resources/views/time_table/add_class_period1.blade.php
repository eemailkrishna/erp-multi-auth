@include('common.header')
@include('common.navbar')
<script type="text/javascript">
    function add_edit(value, name) {
        var period_name1 = name.split('|?|');
        $('#period_name').val(period_name1[0]);
        $('#period_start_time').val(period_name1[1]);
        $('#period_end_time').val(period_name1[2]);
        $('#period_code_hidden').val(value);
    }
</script>
<script>
    $("#my_form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);
        $("#myModal_close").click();
        $.ajax({
            url: access_link + "time_table/add_class_period_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    $('#myModal').modal('hide');

                    get_content('time_table/add_class_period');
                }
            }
        });
    });
</script>
<section class="content-header">
    <h1>
        School Information Management<small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-graduation-cap"></i>Time Table</a>
        </li>
        <li class="active">Add Period</li>
    </ol>
</section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Period Add</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <div class="col-md-12 box-body table-responsive">
                    <table id="table-data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>Period Name</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Add/Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr align='center'>
                                <th>1</th>
                                <th>PERIOD-1</th>
                                <th>08:00:00</th>
                                <th>08:30:00</th>

                                <th><button type="button" id="1" name="PERIOD-1|?|08:00:00|?|08:30:00"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal">Add/Edit</th>
                            </tr>

                            <tr align='center'>
                                <th>2</th>
                                <th>2</th>
                                <th>10:00:00</th>
                                <th>11:00:00</th>

                                <th><button type="button" id="2" name="2|?|10:00:00|?|11:00:00"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal">Add/Edit</th>
                            </tr>

                            <tr align='center'>
                                <th>3</th>
                                <th>3</th>
                                <th>11:05:00</th>
                                <th>11:50:00</th>

                                <th><button type="button" id="3" name="3|?|11:05:00|?|11:50:00"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal">Add/Edit</th>
                            </tr>

                            <tr align='center'>
                                <th>4</th>
                                <th>4</th>
                                <th>11:50:00</th>
                                <th>12:35:00</th>

                                <th><button type="button" id="4" name="4|?|11:50:00|?|12:35:00"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal">Add/Edit</th>
                            </tr>

                            <tr align='center'>
                                <th>5</th>
                                <th>INTERVAL</th>
                                <th>12:35:00</th>
                                <th>12:50:00</th>

                                <th><button type="button" id="5" name="Interval|?|12:35:00|?|12:50:00"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal">Add/Edit</th>
                            </tr>

                            <tr align='center'>
                                <th>6</th>
                                <th>5</th>
                                <th>12:50:00</th>
                                <th>01:00:00</th>

                                <th><button type="button" id="6" name="5|?|12:50:00|?|01:00:00"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal">Add/Edit</th>
                            </tr>

                            <tr align='center'>
                                <th>7</th>
                                <th>6</th>
                                <th>13:30:00</th>
                                <th>14:10:00</th>

                                <th><button type="button" id="7" name="6|?|13:30:00|?|14:10:00"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal">Add/Edit</th>
                            </tr>

                            <tr align='center'>
                                <th>8</th>
                                <th>7</th>
                                <th>14:10:00</th>
                                <th>14:45:00</th>

                                <th><a href="{{url('/time_table/add_class_period1')}}">Add/Edit</a></th>
                            </tr>

                            <tr align='center'>
                                <th>9</th>
                                <th>8</th>
                                <th>14:45:00</th>
                                <th>15:30:00</th>

                                <th><button type="button" id="9" name="8|?|14:45:00|?|15:30:00"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal">Add/Edit</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                        @csrf
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Period Add/Edit</label>
                                            <input type="text" name="period_name" id="period_name"
                                                class="form-control">
                                            <input type="hidden" name="period_code_hidden" id="period_code_hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Start Time Add/Edit</label>
                                            <input type="Time" name="period_start_time" id="period_start_time"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>End Time Add/Edit</label>
                                            <input type="Time" name="period_end_time" id="period_end_time"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="finish" value="ADD" class="btn btn-success" />
                                    <button type="button" class="btn btn-default" id="myModal_close"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')
