@include('common.header')
@include('common.navbar')

<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

})
</script>
<script type="text/javascript">
function for_teacher_detail(day) {
    //alert_new(day);
    $('#example2').html(loader_div);
    $.ajax({
        type: "POST",
        url: access_link + "time_table/ajax_get_teacher_detail.php?day=" + day + "",
        cache: false,
        success: function(detail) {
            //alert_new(detail);
            $("#example2").html(detail);
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Time Table Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/time_table')}}"><i class="fa fa-clock-o"></i> Time Table</a></li>
        <li class="active">Teacher Availabilty</li>
    </ol>
</section>



<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Teacher Availabilty</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <form role="form" method="post" enctype="multipart/form-data">


                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Select Day</label>
                            <select name="student_class1" id="student_class" class="form-control"
                                onchange="for_teacher_detail(this.value);" required>
                                <option value="">Select Day</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="saturday">Saturday</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-md-12">
                        <!-- /.box -->

                        <div class="box box-success">
                            <div class="box-header with-border">
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="table-data" border="1" class="table table-bordered table-striped"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Teacher Name</th>
                                            <th>present/Absent</th>
                                            <th>PERIOD-1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>INTERVAL</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>

                                            <th>Update By</th>
                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody id="example2">


                                    </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                </form>

                <div class="col-md-6">
                    <center><button type="button" class="btn btn-success"
                            onclick="exportTableToExcel('table-data', 'teacher availability')"><i class="fa fa-print"
                                aria-hidden="true"></i> Print In Excel</button></center>
                </div>


                <div class="col-md-6">
                    <center><button type="button" class="btn btn-primary" onclick="for_print();"><i class="fa fa-print"
                                aria-hidden="true"></i> Print In Pdf</button></center>
                </div>

            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')

</div>
<script>
function for_print() {
    var divToPrint = document.getElementById("table-data");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>


<script>
function exportTableToExcel(tableID, filename = '') {
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}
</script>