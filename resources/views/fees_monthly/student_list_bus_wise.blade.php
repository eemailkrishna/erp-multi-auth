@include('common.header')
@include('common.navbar')
<script>
function for_list() {
    //var from_date=document.getElementById('from_date').value;

    var bus_no = document.getElementById('bus_no').value;
    var student_class = document.getElementById('student_class').value;
    var bus_stop_details = document.getElementById('bus_stop_details').value;
    //var no_of_installment=document.getElementById('no_of_installment').value;

    var count = 0;
    var fee_head = [];
    $(".my_head").each(function() {
        if ($(this).prop("checked") == true) {
            count = Number(count + 1);
            fee_head.push($(this).val());
        }
    });

    if (count == 1) {
        $(".my_head").each(function() {
            $(this).attr("disabled", true);
        });
        $('#head_' + fee_head).attr("disabled", false);
    } else {
        $(".my_head").each(function() {
            $(this).attr("disabled", false);
        });
    }


    $("#pdf_detail").html('');


    $("#pdf_detail").html(loader_div);
    if (fee_head != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_student_list_buswise_report.php",
            data: {
                bus_no: bus_no,
                student_class: student_class,
                bus_stop_details: bus_stop_details,
                fee_head: fee_head
            },
            cache: false,
            success: function(detail) {
                $("#pdf_detail").html(detail);
            }
        });
    } else {
        $("#pdf_detail").html('');
    }
}

function for_check(id) {
    if ($('#' + id).prop("checked") == true) {
        $("." + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $("." + id).each(function() {
            $(this).prop('checked', false);
        });
    }
}

function validate() {
    var add1 = 0;
    $(".info1").each(function() {
        if ($(this).prop('checked') == true) {
            add1 = parseInt(add1 + 1);
        }
    });
    if (add1 > 0) {
        return true;
    } else {
        alert('Please Select Atleast One Student !!!');
        return false;
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
        Download Bus Id Card
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Bus Id Card</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">student List Buswise Report download</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">

                <div class="col-md-12 col-md-offset-3" id="search_detail">

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bus Detail</label>
                            <select class="form-control" name="bus_no" id="bus_no" onchange="for_list();" required>
                                <option value="All">All</option>
                                <option value="MH19TS0001">BHARAT BENZ [BHARAT BENZ]-[4D34i]-[MH19TS0001]</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label>Class</label>
                            <select name="student_class" onchange="for_list();" id="student_class" class="form-control">
                                <option value="All">All</option>
                                <option value="NURSERY">NURSERY</option>
                                <option value="LKG">LKG</option>
                                <option value="UKG">UKG</option>
                                <option value="1ST">1ST</option>
                                <option value="2ND">2ND</option>
                                <option value="3RD">3RD</option>
                                <option value="4TH">4TH</option>
                                <option value="5TH">5TH</option>
                                <option value="6TH">6TH</option>
                                <option value="7TH">7TH</option>
                                <option value="8TH">8TH</option>
                                <option value="9TH">9TH</option>
                                <option value="10TH">10TH</option>
                                <option value="11TH">11TH</option>
                                <option value="12TH">12TH</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Route</label>
                            <select class="form-control" name="bus_stop_details" id="bus_stop_details"
                                onchange="for_list();" required>
                                <option value="All">All</option>
                                <option value="80feet thana">80feet thana</option>
                                <option value="1 - KURHA">1 - KURHA</option>
                                <option value="khandari">khandari</option>
                            </select>
                        </div>
                    </div>

                </div>
                <br />
                <div class="col-md-12">

                    <center>
                        <input type="checkbox" name="month_head[]" onclick="for_list();" class="my_head" id="head_fee3"
                            value="fee3"> Transport fees
                    </center>

                </div>

                <div class="col-md-12">
                    <hr />
                </div>

                <div class="col-md-12" id="pdf_detail">

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