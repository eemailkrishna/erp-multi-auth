@include('common.header')
@include('common.navbar')


<script>
function valid1(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_data(s_no);
    } else {
        return false;
    }
}

function delete_data(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "recycle_bin/recycle_purchase_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('recycle_bin/recycle_hostel_account_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}

function valid(s_no) {
    var myval = confirm("Are you sure want to restore this record !!!!");
    if (myval == true) {
        restore_data(s_no);
    } else {
        return false;
    }
}

function restore_data(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "recycle_bin/recycle_purchase_restore.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Restore', 'green');
                get_content('recycle_bin/recycle_hostel_account_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Recycle Bin
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/recycle-bin')}}"><i class="fal fa-trash-alt"></i> Recycle Bin</a></li>
        <li class="active">Hostel Account Recycle Bin</li>
    </ol>
</section>


<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->
            <div <div class="box box-success">
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <tr>
                                <th colspan='5' align='center'>
                                    <font color="#f1f1f1">Hostel Expenses
                                </th>
                                <th colspan='2' align='center'>
                                    <font color="black">Total Amount Hostel Expense
                                </th>
                                <th colspan='2' align='center'>
                                    <font color="black">0/-
                                </th>
                            </tr>
                            <th style="width:50px" ;>S No</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Shop Name</th>
                            <th>Contact Person Name</th>
                            <th>Total Amount</th>
                            <th>Restore</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="search_table">
                        </tbody>
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
<script>
$(function() {
    $('#example1').DataTable()
})
</script>

@include('common.footer')