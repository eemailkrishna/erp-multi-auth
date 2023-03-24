@include('common.header')
@include('common.navbar')

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_gate_pass(s_no);
    } else {
        return false;
    }
}

function delete_gate_pass(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "gate_pass/delete_gate_pass.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {

                get_content('gate_pass/gate_pass_list');
            } else {
                alert(detail);
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Gate Pass
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/gate-pass')}}"><i class="fa fa-inr"></i>Gate Pass</a></li>
        <li><i class="Active"></i>List</li>
    </ol>
</section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S NO</th>
                                <th>Gate Pass Number</th>
                                <th>Student Name</th>
                                <th>Class(Section)</th>
                                <th>Admission No</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Reason</th>
                                <th>Recommender</th>
                                <th>Approver</th>
                                <th>Print</th>
                                <th>Thermal Print</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>166</td>
                                <td>Umesh</td>
                                <td>2ND(B)</td>
                                <td></td>
                                <td>2022-12-02</td>
                                <td>12:54:42pm</td>
                                <td></td>
                                <td>kailash soni(15)</td>
                                <td></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/gate_pass/gate_pass_pdf.php?id=166&session=2022_23'
                                        target="_blank"><button type="button" class="btn btn-success">
                                            Print</button></td>

                                <td><a href='../school_software_v1/pdf/pdf/gate_pass/gate_pass_pdf_thermal.php?id=166&session=2022_23'
                                        target="_blank"><button type="button" class="btn btn-success">
                                            Print</button></td>

                                <td><button type="button" class="btn class=" btn btn-danger"
                                        onclick="return  valid('166');">Delete</button></td>


                            </tr>

                            <tr>
                                <td>2</td>
                                <td>161</td>
                                <td>RAHUL</td>
                                <td>1ST(A)</td>
                                <td></td>
                                <td>2022-09-03</td>
                                <td>02:22:42pm</td>
                                <td>abc</td>
                                <td>anil n(76)</td>
                                <td>anil n(76)</td>
                                <td><a href='../school_software_v1_old/pdf/pdf/gate_pass/gate_pass_pdf.php?id=161&session=2022_23'
                                        target="_blank"><button type="button" class="btn btn-success">
                                            Print</button></td>

                                <td><a href='../school_software_v1/pdf/pdf/gate_pass/gate_pass_pdf_thermal.php?id=161&session=2022_23'
                                        target="_blank"><button type="button" class="btn btn-success">
                                            Print</button></td>

                                <td><button type="button" class="btn class=" btn btn-danger"
                                        onclick="return  valid('161');">Delete</button></td>


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

@include('common.footer')



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