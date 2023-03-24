@include('common.header')
@include('common.navbar')

<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "sports/sports_type_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('sports/sports_type');
            }
        }
    });
});
</script>
<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        sports_type_delete(s_no);
    } else {
        return false;
    }
}

function sports_type_delete(s_no) {
    $("#get_content").html(loader_div);
    $.ajax({
        type: "POST",
        url: access_link + "sports/delete_sports_level.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('sports/sports_type');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Sports Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/sports')}}" #><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Type</li>
    </ol>
</section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning my_border_top  ">
            <div class="box-header with-border ">
                <h3 class="box-title">Sports Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                    <div class="col-md-12">
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Sports Type<font style="color:red"><b>*</b></font></label>
                                <center><input type="text" name="sports_type" placeholder="Sports Type" value=""
                                        class="form-control" required></center>
                            </div>
                            <div class="col-md-12">
                                <center><input type="submit" name="finish" value="Submit" class="btn btn-success" />
                                </center>
                            </div>
                        </div>

                        <div class="col-md-3 "></div>

                        <div class="col-md-6">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Sports Type</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Chees</td>
                                            <td><button type="button" onclick="return valid('10');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Jump</td>
                                            <td><button type="button" onclick="return valid('12');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </form>
            </div>

            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
<script>
$(function() {
    $('#example1').DataTable()
})
</script>

@include('common.footer')