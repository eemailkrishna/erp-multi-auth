@include('common.header')
@include('common.navbar')
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    $("#myModal_close").click();
    $.ajax({
        url: access_link + "school_info/add_class_stream_api.php",
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

                get_content('school_info/add_class_stream');
            }
        }
    });
});

function add_edit(value, name) {
    var fee_name = name.split('-');
    $('#stream_name1').val(fee_name[0]);
    $('#stream_name_hindi').val(fee_name[1]);
    $('#stream_code_hidden').val(value);

}
</script>
<section class="content-header">
    <h1>
        School Information Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
        <li class="active">Add Stream</li>
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
                <h3 class="box-title">Stream Add </h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <div class="col-md-12 box-body table-responsive">
                    <table id="table-data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Stream</th>
                                <th>Stream Hindi</th>
                                <th>Add/Edit</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr align='center'>

                                <th>1</th>
                                <th>LLB</th>
                                <th></th>
                                <th><button type="button" id="stream1" name="LLB-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Edit</th>

                            </tr>
                            <tr align='center'>
                                <th colspan="4"><button type="button" id="stream2" name="-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Add More</th>
                        </tbody>

                    </table>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Class Add/Edit</label>
                                        <input type="text" name="stream_name1" id="stream_name1" class="form-control">
                                        <input type="hidden" name="stream_code_hidden" id="stream_code_hidden"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Class Hindi Add/Edit</label>
                                        <input type="text" name="stream_name_hindi" id="stream_name_hindi"
                                            class="form-control">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Add" class="btn btn-success" />
                                    <button type="button" id="myModal_close" class="btn btn-default"
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