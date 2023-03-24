@include('common.header')
@include('common.navbar')
<script>
function for_print() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>
<section class="content-header">
    <h1>
        Fees Dues Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/dues')}}"><i class="fa fa-info-circle"></i>Dues Details</a></li>
        <li class="active">NURSERYClass Details</li>
    </ol>
</section>


<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->
            <div class="box" id="printTable">
                <div class="box-header with-border">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <h5 class="my_background_color" style="padding:10px 10px 10px 10px;">
                                <center>NURSERY / Class Fee Total Amount :- 484918.00</center>
                            </h5>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="my_background_color" style="padding:10px 10px 10px 10px;">
                                <center>NURSERY / Class Paid Total Amount :- 14590.00</center>
                            </h5>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="my_background_color" style="padding:10px 10px 10px 10px;">
                                <center>NURSERY / Class Dues Total Amount :- 470368.00</center>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="printTable" border="1" class="table table-bordered table-striped">
                        <thead class="my_background_color">
                            <tr>
                                <th>S.no</th>
                                <th>student Name </th>
                                <th>Father's Name </th>
                                <th>Conatact Details </th>
                                <th>Student Section </th>
                                <th>Total Fee </th>
                                <th>Total Balance </th>
                                <th>Total Paid/Year </th>
                                <th>Details </th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td style="text-align:center;">1</td>
                                <td style="text-align:center;">raman</td>
                                <td style="text-align:center;">tapan</td>
                                <td style="text-align:center;">7896541256, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">48000</td>
                                <td style="text-align:center;">48000</td>
                                <td style="text-align:center;">0</td>
                                <td><a href="{{url('/duesNurseryDetails')}}"><button type="button"
                                            onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200770')"
                                            class="btn btn-primary">Details</button></a></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">2</td>
                                <td style="text-align:center;">yashi</td>
                                <td style="text-align:center;">pushpendra</td>
                                <td style="text-align:center;">8430555580, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">45668</td>
                                <td style="text-align:center;">45668</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200782')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">3</td>
                                <td style="text-align:center;">ABHIMANYU SHARMA</td>
                                <td style="text-align:center;">GOURAV SHARMA</td>
                                <td style="text-align:center;">9755404505, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">40800</td>
                                <td style="text-align:center;">40800</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200785')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">4</td>
                                <td style="text-align:center;">shree</td>
                                <td style="text-align:center;">samay singh </td>
                                <td style="text-align:center;">9911587536, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">52800</td>
                                <td style="text-align:center;">52800</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200790')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">5</td>
                                <td style="text-align:center;">Ajay</td>
                                <td style="text-align:center;">Vijay</td>
                                <td style="text-align:center;">685555555555, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">31800 </td>
                                <td style="text-align:center;">29150</td>
                                <td style="text-align:center;">2690</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200793')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">6</td>
                                <td style="text-align:center;">Druwa Ganesh Chaudhari</td>
                                <td style="text-align:center;">Ganesh Chaudhari</td>
                                <td style="text-align:center;">8469808008, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">32900</td>
                                <td style="text-align:center;">32900</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200795')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">7</td>
                                <td style="text-align:center;">SHIVANSH RAWAT</td>
                                <td style="text-align:center;">AJAY</td>
                                <td style="text-align:center;">6283926887, 7814267364</td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">35800</td>
                                <td style="text-align:center;">35800</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200800')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">8</td>
                                <td style="text-align:center;">Yash </td>
                                <td style="text-align:center;">Soun</td>
                                <td style="text-align:center;">6265767366, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">31200</td>
                                <td style="text-align:center;">31200</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200823')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">9</td>
                                <td style="text-align:center;">पंकज कुमार</td>
                                <td style="text-align:center;">लालू राम</td>
                                <td style="text-align:center;">9898888888, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">48000</td>
                                <td style="text-align:center;">48000</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2200884')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">10</td>
                                <td style="text-align:center;">Aamna Hussain</td>
                                <td style="text-align:center;">Syed Farhat Hussain</td>
                                <td style="text-align:center;">9018501010, 9469090110</td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">11900 </td>
                                <td style="text-align:center;">0</td>
                                <td style="text-align:center;">11900</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2201009')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">11</td>
                                <td style="text-align:center;">Prithviraj</td>
                                <td style="text-align:center;">Dr. Pramod Kumar</td>
                                <td style="text-align:center;">9219270152, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">12900</td>
                                <td style="text-align:center;">12900</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2201039')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">12</td>
                                <td style="text-align:center;">Kartik Nishad</td>
                                <td style="text-align:center;">Kartik Nishad</td>
                                <td style="text-align:center;">, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">52000</td>
                                <td style="text-align:center;">52000</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2201041')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>

                            <tr>
                                <td style="text-align:center;">13</td>
                                <td style="text-align:center;">Rahul Kumar</td>
                                <td style="text-align:center;">Lalbabu Ray</td>
                                <td style="text-align:center;">9570503057, </td>
                                <td style="text-align:center;">NURSERY(A)</td>
                                <td style="text-align:center;">41150</td>
                                <td style="text-align:center;">41150</td>
                                <td style="text-align:center;">0</td>
                                <td><button type="button"
                                        onclick="post_content('fees_monthly/student_fee_list_particular','student_roll_no=2201086')"
                                        class="btn btn-primary">Details</button></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!-- /.box-body -->
            </div>
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <center><button type="button" class="btn btn-success"
                            onclick="exportTableToExcel('printTable', 'Dues Report')"><i class="fa fa-print"
                                aria-hidden="true"></i> Print In Excel</button></center>
                </div>
                <div class="col-sm-6">
                    <center><button type="button" class="btn btn-success" onclick="for_print();"><i class="fa fa-print"
                                aria-hidden="true"></i> Print In Pdf</button></center>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
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