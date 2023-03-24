@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>Document List</h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/important')}}"><i class="fa fa-check-square"></i>Important</a></li>
        <li><a>Important Document List</a></li>
    </ol>
</section>

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        for_delete(s_no);
    } else {
        return false;
    }
}

function for_delete(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "important/document_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('important/document_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
<script>
function for_print() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">
                    <div class="col-md-4">
                        <h3 class="box-title">Important Document List</h3>
                    </div>
                    <div class="col-md-4">
                        <center><button type="button" class="btn default"
                                onclick="exportTableToExcel('printTable', 'Important Report')"><i class="fa fa-print"
                                    aria-hidden="true"></i>Print In Excel</button></center>
                    </div>
                    <div class="col-md-4">
                        <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print"
                                    aria-hidden="true"></i>Print In Pdf</button></center>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" id="printTable">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Remarks</th>
                                <th>Date</th>
                                <th>Documents</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>1</th>
                                <th>sk</th>
                                <th>2nd</th>
                                <th>good</th>
                                <th>2022-12-01</th>
                                <th><img onclick="open_file1('document_upload','govt_official_document','info_id','25');"
                                        src="https://simptionerp.com/data-content/simptionschoolerp/demo/govt_official_document/85581926_Screenshot (6).png"
                                        height="50" width="50"></th>

                                <th><button type="button" class="btn btn-success"
                                        onclick="post_content('important/document_edit','id=25');">Edit</button></th>
                                <th><button type="button" class="btn class=" btn btn-danger"
                                        onclick="return  valid('25');">Delete</button></th>
                            </tr>

                            <tr>
                                <th>2</th>
                                <th>patrak</th>
                                <th>2nd</th>
                                <th>good</th>
                                <th>2022-09-02</th>
                                <th><img onclick="open_file1('document_upload','govt_official_document','info_id','24');"
                                        src="https://simptionerp.com/data-content/simptionschoolerp/demo/govt_official_document/4674777_bootstrap_qr.2c01e0e4abde696b6ff5.js.download"
                                        height="50" width="50"></th>

                                <th><button type="button" class="btn btn-success"
                                        onclick="post_content('important/document_edit','id=24');">Edit</button></th>
                                <th><button type="button" class="btn class=" btn btn-danger"
                                        onclick="return  valid('24');">Delete</button></th>
                            </tr>

                            <tr>
                                <th>3</th>
                                <th>zubair </th>
                                <th>2nd</th>
                                <th>good</th>
                                <th>2022-07-21</th>
                                <th><img onclick="open_file1('document_upload','govt_official_document','info_id','23');"
                                        src="https://simptionerp.com/data-content/simptionschoolerp/demo/govt_official_document/56035164_विनयफलं शुश्रूषा गुरुशुश्रूषाफल�"
                                        height="50" width="50"></th>

                                <th><button type="button" class="btn btn-success"
                                        onclick="post_content('important/document_edit','id=23');">Edit</button></th>
                                <th><button type="button" class="btn class=" btn btn-danger"
                                        onclick="return  valid('23');">Delete</button></th>
                            </tr>

                            <tr>
                                <th>16</th>
                                <th>Bhupesh sen</th>
                                <th>2nd</th>
                                <th>good</th>
                                <th>2018-12-01</th>
                                <th><img onclick="open_file1('document_upload','govt_official_document','info_id','4');"
                                        src="../school_software_v1_old/images/student_blank.png" height="50" width="50">
                                </th>

                                <th><button type="button" class="btn btn-success"
                                        onclick="post_content('important/document_edit','id=4');">Edit</button></th>
                                <th><button type="button" class="btn class=" btn btn-danger"
                                        onclick="return  valid('4');">Delete</button></th>
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
    <div id="mypdf_view">
        <div>
</section>
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
<script>
$(function() {
    $('#example1').DataTable()
})
</script>
@include('common.footer')