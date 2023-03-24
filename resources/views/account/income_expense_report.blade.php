@include('common.header')
@include('common.navbar')

<!-- <script>
function for_list() {
    var from_date = document.getElementById('from_date').value;
    var to_date = document.getElementById('to_date').value;
    var income_expense = document.getElementById('income_expense').value;
    var income_expense_heads = document.getElementById('income_expense_heads').value;

    $("#pdf_detail").html('');

    if (from_date != '' && to_date != '' && income_expense != '' && income_expense_heads != '') {
        if (income_expense == 'Debit') {
            $page_name = "ajax_expense_report.php";
        } else if (income_expense == 'Credit') {
            $page_name = "ajax_income_report.php";
        } else {
            $page_name = "ajax_income_expense_report.php";
        }
        $("#pdf_detail").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "account/" + $page_name + "?from_date=" + from_date + "&to_date=" + to_date +
                "&income_expense=" + income_expense + "&income_expense_heads=" + income_expense_heads + "",
            cache: false,
            success: function(detail) {
                $("#pdf_detail").html(detail);
            }
        });
    }

}
</script> -->
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
        Download Income/Expense Report
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('account')}}"><i class="fa fa-money"></i> Account Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Income/Expense Report</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Income/Expense Report download</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">

                <div class="col-md-12 col-md-offset-3" id="search_detail">

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>From Date</label>
                            <input type="date" name="from_date" class="form-control" id="from_date" value=""
                                oninput="for_list();" />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>To Date</label>
                            <input type="date" name="to_date" class="form-control" id="to_date" value=""
                                oninput="for_list();" />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Income/Expense</label>
                            <select name="income_expense" class="form-control" id="income_expense"
                                onchange="for_list();">
                                <option value="All">All</option>
                                <option value="Debit">Expense</option>
                                <option value="Credit">Income</option>
                            </select>
                        </div>
                    </div>

                    <!-- <div class="col-md-2">
                        <div class="form-group">
                            <label>Heads</label>
                            <select name="income_expense_heads" class="form-control" id="income_expense_heads"
                                onchange="for_list();">
                                <option value="All">All</option>
                                <option value=""></option>
                                <option value="aaaa">aaaa</option>
                                <option value="aaaaa">aaaaa</option>
                                <option value="kailash soni">kailash soni</option>
                                <option value="Nidhi ">Nidhi </option>
                            </select>
                        </div>
                    </div> -->

                </div>

                </br></br></br>
                <hr>

                <div class="col-md-12" id="pdf_detail">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <center><button type="button" class="btn default"
                                    onclick="exportTableToExcel('printTable', 'Income/Expense Report')"><i
                                        class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
                        </div>
                        <div class="col-md-6">
                            <center><button type="button" class="btn default" onclick="for_print();"><i
                                        class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!-- /.box -->
                        <div class="box box-success ">
                            <!-- /.box-header -->
                            <div class="col-md-10 col-md-offset-1">
                                <div class="box-body table-responsive" id="printTable">
                                    <!-- <table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
                                        <tr>
                                            <td colspan="3"><span style="font-size:20px;font-weight:bold">
                                                    <center><b>SIMPTION TECH PVT LTD</b></center>
                                                </span></td>
                                        </tr>
                                        <tr>
                                            <td style="float:left;"><b>Dise Code : 23260100164</b></td>
                                            <td>
                                                <center><b>Income/Expense Report</b></center>
                                            </td>
                                            <td style="float:right;"><b>School Code : 50702</b></td>
                                        </tr>
                                        <tr>
                                            <td style="float:left;">&nbsp;</td>
                                            <td>
                                                <center><b>&nbsp;</b></center>
                                            </td>
                                            <td style="float:right;">From : 03-12-2022 To : 03-12-2022</td>
                                        </tr>
                                    </table> -->

                                    <table id="example1" class="table table-bordered table-striped" border="1px"
                                        cellpadding="10px" cellspacing="0" width="100%">
                                        <!-- <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Date</th>
                                                <th>Income/Expense Details</th>
                                                <th>Income Amount</th>
                                                <th>Expense Amount</th>
                                                <th>Payment Mode</th>
                                            </tr>
                                        </thead> -->
                                        <!-- <tbody> -->
                                            <!-- <tr>
                                                <td>1.</td>
                                                <td>03-12-2022</td>
                                                <td></td>
                                                <td>0</td>
                                                <td>7200.00</td>
                                                <td>Cash</td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>03-12-2022</td>
                                                <td>Fee ( Kiran Sharma / Ramu Sharma [ 7TH - A ] )</td>
                                                <td>3040</td>
                                                <td>0</td>
                                                <td>Cash</td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>03-12-2022</td>
                                                <td>Fee ( NIDHI SINGH / RAMRAJ [ 5TH - A ] )</td>
                                                <td>1070</td>
                                                <td>0</td>
                                                <td>Cash</td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>03-12-2022</td>
                                                <td>Fee ( Vaishnavi Thakur / Mr. Amrendra Pratap Singh [ LKG - A ] )
                                                </td>
                                                <td>3040</td>
                                                <td>0</td>
                                                <td>Cash</td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>03-12-2022</td>
                                                <td></td>
                                                <td></td>
                                                <td>0</td>
                                                <td>Cash</td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>03-12-2022</td>
                                                <td>Fee ( Kiran Sharma / Ramu Sharma [ 7TH - A ] )</td>
                                                <td>196090</td>
                                                <td>0</td>
                                                <td>Cash</td>
                                            </tr> -->
                                        <!-- </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3"><span style="float:right;font-weight:bold;">Grand Total
                                                        = </span></td>
                                                <td><span style="font-weight:bold;">203240</span></td>
                                                <td><span style="font-weight:bold;">7200</span></td>
                                                <td><span style="font-weight:bold;">&nbsp;</span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" style="height:100px;"><span
                                                        style="float:right;">Signature........................................</span>
                                                </td>
                                            </tr>
                                        </tfoot> -->
                                    </table>

                                    <!-- /.col -->
                                </div>
                            </div>
                            <!-- <div class="col-md-12">&nbsp;</div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <center><button type="button" class="btn btn-success"
                                            onclick="exportTableToExcel('printTable', 'Income/Expense Report')"><i
                                                class="fa fa-print" aria-hidden="true"></i> Print In Excel</button>
                                    </center>
                                </div>
                                <div class="col-md-6">
                                    <center><button type="button" class="btn btn-primary" onclick="for_print();"><i
                                                class="fa fa-print" aria-hidden="true"></i> Print In Pdf</button>
                                    </center>
                                </div>
                            </div> -->
                        </div>

                    </div>

                </div>

            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
$(document).ready(function() {
    //---------------------------------------date-between---------------------------------------------

    $("#to_date").change(function() {
        var from_date = document.getElementById('from_date').value;
        var to_date = document.getElementById('to_date').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({

            url: "{{route('search-income-date-wise')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                from_date: from_date,
                to_date: to_date
            },
            success: function(detail) {
                $("#example1").html(detail['data']);
              
            }
        });
    });

    $("#income_expense").change(function() {
        var income_expense = document.getElementById('income_expense').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({

            url: "{{route('search-income-date-wise')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                income_expense: income_expense
            },
            success: function(detail) {
                $("#example1").html(detail['data']);
              
            }
        });
    });
});
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
<script>
for_list();
</script>