@include('common.header')
@include('common.navbar')

<script>
function for_list() {
    var from_date = document.getElementById('from_date').value;
    var to_date = document.getElementById('to_date').value;

    $("#pdf_detail").html('');

    if (from_date != '' && to_date != '') {
        $("#pdf_detail").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "account/ajax_ledger_report_monthly.php?from_date=" + from_date + "&to_date=" +
                to_date + "",
            cache: false,
            success: function(detail) {
                $("#pdf_detail").html(detail);
            }
        });
    }

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

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Download Ledger Report
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/account')}}"><i class="fa fa-money"></i> Account Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Ledger Report</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Ledger Report download</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">

                <div class="col-md-12 col-md-offset-4" id="search_detail">

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>From Date</label>
                            <input type="date" name="from_date" class="form-control" id="from_date" value="2022-12-01"
                                oninput="for_list();" />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>To Date</label>
                            <input type="date" name="to_date" class="form-control" id="to_date" value="2022-12-31"
                                oninput="for_list();" />
                        </div>
                    </div>

                </div>

                </br></br></br>
                <hr>

                <!-- <div class="col-md-12" id="pdf_detail">

                </div> -->
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <center><button type="button" class="btn default"
                                onclick="exportTableToExcel('printTable', 'Ledger monthly Report')"><i
                                    class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
                    </div>
                    <div class="col-sm-6">
                        <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print"
                                    aria-hidden="true"></i>Print In Pdf</button></center>
                    </div>
                </div>

                <div class="col-xs-12">
                    <!-- /.box -->
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="col-xs-10 col-xs-offset-1">
                            <div class="box-body table-responsive" id="printTable">
                                <table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
                                    <tr>
                                        <td colspan="3"><span style="font-size:20px;font-weight:bold">
                                                <center><b>SIMPTION TECH PVT LTD</b></center>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <td style="float:left;"><b>Dise Code : 23260100164</b></td>
                                        <td>
                                            <center><b>STUDENT LEDGER REPORT</b></center>
                                        </td>
                                        <td style="float:right;"><b>School Code : 50702</b></td>
                                    </tr>
                                    <tr>
                                        <td style="float:left;">Current Date : 03-12-2022</td>
                                        <td>
                                            <center><b>Monthly Report</b></center>
                                        </td>
                                        <td style="float:right;">From : 01-12-2022 To : 31-12-2022</td>
                                    </tr>
                                </table>

                                <table id="example1" class="table table-bordered table-striped" border="1px"
                                    cellpadding="10px" cellspacing="0" width="100%">
                                    <thead class="my_background_color">
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Bill No.</th>
                                            <th>Student Name</th>
                                            <th>Admission No.</th>
                                            <th>Income From</th>
                                            <th>Expense</th>
                                            <th>Credit Amount</th>
                                            <th>Debit Amount</th>
                                            <th>Balance Amount</th>
                                            <th>Date</th>
                                            <th>Remark</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td colspan='7'>Before - 01-12-2022</td>
                                            <td><span style="font-weight:bold;">-1137430.16</span></td>
                                            <td>&nbsp;</td>
                                            <td><span style="font-weight:bold;">Cash in Hand</span></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>45698</td>
                                            <td>Rahul</td>
                                            <td></td>
                                            <td>fee</td>
                                            <td></td>
                                            <td><span style="font-weight:bold;">4040</span></td>
                                            <td><span style="font-weight:bold;">-----</span></td>
                                            <td><span style="font-weight:bold;">-1133390.16</span></td>
                                            <td>01-12-2022</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>45696</td>
                                            <td>Nidhi Singh</td>
                                            <td></td>
                                            <td>fee</td>
                                            <td></td>
                                            <td><span style="font-weight:bold;">1550</span></td>
                                            <td><span style="font-weight:bold;">-----</span></td>
                                            <td><span style="font-weight:bold;">-1131840.16</span></td>
                                            <td>01-12-2022</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td></td>
                                            <td>Vivek Kumar</td>
                                            <td></td>
                                            <td></td>
                                            <td>salary</td>
                                            <td><span style="font-weight:bold;">-----</span></td>
                                            <td><span style="font-weight:bold;">14500.00</span></td>
                                            <td><span style="font-weight:bold;">-1146340.16</span></td>
                                            <td>01-12-2022</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>45697</td>
                                            <td>Nidhi Singh</td>
                                            <td></td>
                                            <td>fee</td>
                                            <td></td>
                                            <td><span style="font-weight:bold;">1070</span></td>
                                            <td><span style="font-weight:bold;">-----</span></td>
                                            <td><span style="font-weight:bold;">-1145270.16</span></td>
                                            <td>01-12-2022</td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td></td>
                                            <td>Vivek Kumar</td>
                                            <td></td>
                                            <td></td>
                                            <td>salary</td>
                                            <td><span style="font-weight:bold;">-----</span></td>
                                            <td><span style="font-weight:bold;">14300.00</span></td>
                                            <td><span style="font-weight:bold;">-1159570.16</span></td>
                                            <td>01-12-2022</td>
                                            <td></td>



                                        </tr>
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6"><span style="float:right;font-weight:bold;">Grand Total =
                                                </span></td>
                                            <td><span style="font-weight:bold;">264690</span></td>
                                            <td><span style="font-weight:bold;">72850</span></td>
                                            <td><span style="font-weight:bold;">-945590.16</span></td>
                                            <td>03-12-2022</td>
                                            <td><span style="font-weight:bold;">Cash in Hand</span></td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <!-- /.col -->
                            </div>
                        </div>
                        <div class="col-sm-12">&nbsp;</div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <center><button type="button" class="btn my_background_color"
                                        onclick="exportTableToExcel('printTable', 'Ledger monthly Report')"><i
                                            class="fa fa-print" aria-hidden="true"></i> Print In Excel</button></center>
                            </div>
                            <div class="col-sm-6">
                                <center><button type="button" class="btn my_background_color" onclick="for_print();"><i
                                            class="fa fa-print" aria-hidden="true"></i> Print In Pdf</button></center>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
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
for_list();
</script>

@include('common.footer')