@include('common.header')
@include('common.navbar')
<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_employee(s_no);
    } else {
        return false;
    }
}

function delete_employee(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "library/delete_return_book.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('library/view_return_book_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Library Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/library')}}"><i class="fa fa-book"></i> Library</a></li>
        <li class="active">View Return Book List</li>
    </ol>

</section>


<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border ">
                    <center>
                        <h3 class="box-title" style="color:#592712;font-size:25px;"><b>Return Book Detail</b></h3>
                    </center></br>
                </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Borrower's Name</th>
                                <th>Borrower's Id</th>
                                <th>Borrower's Class & section</th>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Issued Date</th>
                                <th>Due Date</th>
                                <th>Return Date</th>
                                <th>No. of over due day</th>
                                <th>over due fine</th>
                                <th>Remark</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody id="search_table">

                            <tr>
                                <th>1</th>
                                <th>YOGENDRA KUMAR SAHU</th>
                                <th>2000085</th>
                                <th>2ND(A)</th>
                                <th></th>
                                <th></th>
                                <th>2022-05-31</th>
                                <th>2022-06-02</th>
                                <th>2022-06-03</th>
                                <th>+1 days</th>
                                <th>0</th>
                                <th></th>
                                <th>
                                    <button type="button" class="btn class=" btn btn-danger"
                                        onclick="return  valid('79');">Delete</button>
                                </th>
                            </tr>

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
<!-- /.content -->

<script>
function open_model(roll_no) {
    var book_id = document.getElementById("student_book_" + roll_no).value;
    var date = document.getElementById("student_date_" + roll_no).value;
    document.getElementById("student_roll_no").value = roll_no;
    document.getElementById("book_id_no").value = book_id;
    document.getElementById("date_of_return").value = date;
}
</script>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<script>
$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>
@include('common.footer');