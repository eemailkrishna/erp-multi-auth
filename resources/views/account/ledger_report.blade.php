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
            url: access_link + "account/ajax_ledger_report.php?from_date=" + from_date + "&to_date=" + to_date +
                "",
            cache: false,
            success: function(detail) {
                console.log(detail)
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
                            <input type="date" name="from_date" class="form-control" id="from_date" value="2022-12-03"
                                oninput="for_list();" />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>To Date</label>
                            <input type="date" name="to_date" class="form-control" id="to_date" value="2022-12-03"
                                oninput="for_list();" />
                        </div>
                    </div>

                </div>

                </br></br></br>
                <hr>

                <div class="col-md-12" id="pdf_detail">
                    <!-- <div class="col-sm-12"> -->
                    <div class="col-sm-6">
                        <center><button type="button" class="btn default"
                                onclick="exportTableToExcel('printTable', 'Ledger Daily Report')"><i class="fa fa-print"
                                    aria-hidden="true"></i>Print In Excel</button></center>
                    </div>
                    <div class="col-sm-6">
                        <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print"
                                    aria-hidden="true"></i>Print In Pdf</button></center>
                    </div>
                </div>


                <div class="col-md-12">
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
                                    <center><b>Daily Report</b></center>
                                </td>
                                <td style="float:right;">From : 03-12-2022 To : 03-12-2022</td>
                            </tr>
                        </table>

                        <table id="example1" class="table table-bordered table-striped" border="1px" cellpadding="5px"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Bill No.</th>
                                    <th>Std. Name</th>
                                    <th>Contact No.</th>
                                    <th>Income From</th>
                                    <th>Expense</th>
                                    <th>Cre Amount</th>
                                    <th>Deb Amount</th>
                                    <th>Bal Amount</th>
                                    <th>Date</th>
                                    <th>Remark</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td></td>
                                    <td>Vivek Kumar</td>
                                    <td></td>
                                    <td></td>
                                    <td>salary</td>
                                    <td><span style="font-weight:bold;">-----</span></td>
                                    <td><span style="font-weight:bold;">7200.00</span></td>
                                    <td><span style="font-weight:bold;">-7200</span></td>
                                    <td>03-12-2022</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>2.</td>
                                    <td>255</td>
                                    <td>Kiran Sharma</td>
                                    <td></td>
                                    <td>fee</td>
                                    <td></td>
                                    <td><span style="font-weight:bold;">3040</span></td>
                                    <td><span style="font-weight:bold;">-----</span></td>
                                    <td><span style="font-weight:bold;">-4160</span></td>
                                    <td>03-12-2022</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>3.</td>
                                    <td>256</td>
                                    <td>Nidhi Singh</td>
                                    <td></td>
                                    <td>fee</td>
                                    <td></td>
                                    <td><span style="font-weight:bold;">1070</span></td>
                                    <td><span style="font-weight:bold;">-----</span></td>
                                    <td><span style="font-weight:bold;">-3090</span></td>
                                    <td>03-12-2022</td>
                                    <td></td>
                                </tr>
                            </tbody>

                            <tbody>
                            @foreach ($accountInfo as $data)
                            <tr>
                                <input type="hidden" class="delete_accountInfo_id" value="{{$data->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->bill_no}}</td>
                                
                                <td>
                                @if($data->user)
                                {{$data->user->name}}
                                @else
                                {{$data->cust_name}}
                                @endif
                                </td>

                                <td>{{$data->contact_no}}</td>

                                <!-- <td>{{$data->designation}}</td> -->
                                <td>{{$data->amount_type}}</td>
                                <td>{{$data->total_amount}}</td>
                                <td>
                                    <img src="{{asset('images/account/'.$data->bill_image)}}" width="60px"
                                        height="50px" alt="">
                                </td>
                                <td>{{$data->date}}</td>

                                </tr>
                                @endforeach
                            </tbody>p

                            <tfoot>
                                <tr>
                                    <td colspan="6"><span style="float:right;font-weight:bold;">Grand Total = </span>
                                    </td>
                                    <td><span style="font-weight:bold;">203240</span></td>
                                    <td><span style="font-weight:bold;">7200</span></td>
                                    <td><span style="font-weight:bold;">196040</span></td>
                                    <td>03-12-2022</td>
                                    <td><span style="font-weight:bold;">Cash in Hand</span></td>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
                <div class="col-sm-12">&nbsp;</div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <center><button type="button" class="btn btn-success"
                                onclick="exportTableToExcel('printTable', 'Ledger Daily Report')"><i class="fa fa-print"
                                    aria-hidden="true"></i> Print In Excel</button></center>
                    </div>
                    <div class="col-sm-6">
                        <center><button type="button" class="btn btn-primary" onclick="for_print();"><i
                                    class="fa fa-print" aria-hidden="true"></i> Print In Pdf</button></center>
                    </div>
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
@include('common.footer')


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