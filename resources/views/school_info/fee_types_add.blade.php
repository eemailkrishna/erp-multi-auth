@include('common.header')
@include('common.navbar')
<script type="text/javascript">
function add_edit(value, name) {
    var fee_name = name.split('-');
    $('#fee_type1').val(fee_name[0]);
    $('#fee_type_hindi').val(fee_name[1]);
    $('#fee_code_hidden').val(value);
}

$("#my_form").submit(function(e) {
    e.preventDefault();
    var formdata = new FormData(this);
    $("#myModal_close").click();
    $.ajax({
        url: access_link + "school_info/fee_types_add_api.php",
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

                get_content('school_info/fee_types_add');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        School Information Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
        <li class="active">Add Fees Type</li>
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
                <h3 class="box-title">Add Fees Type</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <div class="col-md-12 box-body table-responsive">
                    <table id="table-data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Fee Type</th>
                                <th>Fee Type Hindi</th>
                                <th>Add/Edit</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr align='center'>

                                <th>1</th>
                                <th>annual</th>
                                <th></th>
                                <th><button type="button" id="fee1" name="annual-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>2</th>
                                <th>singing</th>
                                <th></th>
                                <th><button type="button" id="fee2" name="singing-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>3</th>
                                <th>Transport fees</th>
                                <th></th>
                                <th><button type="button" id="fee3" name="Transport fees-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>4</th>
                                <th>sports fees</th>
                                <th></th>
                                <th><button type="button" id="fee4" name="sports fees-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>5</th>
                                <th>exam fee</th>
                                <th></th>
                                <th><button type="button" id="fee5" name="exam fee-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>6</th>
                                <th>event fee</th>
                                <th></th>
                                <th><button type="button" id="fee8" name="event fee-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>7</th>
                                <th>bus fee</th>
                                <th></th>
                                <th><button type="button" id="fee9" name="bus fee-" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal">Add/Edit</th>

                            </tr>
                            <tr align='center'>
                                <th colspan="4"><button type="button" id="fee11" name="-" class="btn btn-success"
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
                                        <label>Fee Type Add Edit</label>
                                        <input type="text" name="fee_type1" id="fee_type1" class="form-control">
                                        <input type="hidden" name="fee_code_hidden" id="fee_code_hidden"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Fee Type Hindi Add Edit</label>
                                        <input type="text" name="fee_type_hindi" id="fee_type_hindi"
                                            class="form-control">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="finish" value="Add" class="btn btn-success" />
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