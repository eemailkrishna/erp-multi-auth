@include('common.header')
@include('common.navbar')


<!-- <script type="text/javascript">
function for_income_ledger(id) {
    $('#my_table1').html(loader_div);
    if (id == "date_wise") {
        var from_date = document.getElementById('from_date').value;
        var to_date = document.getElementById('to_date').value;

    }
    if (id == "month_wise") {
        var current_month = document.getElementById('ledger_month_wise').value;
        var current_year = document.getElementById('ledger_year_wise').value;

        if (current_month == "01" || current_month == "03" || current_month == "05" || current_month == "07" ||
            current_month == "08" || current_month == "10" || current_month == "12") {
            var last_day = "31";
        } else if (current_month == "04" || current_month == "06" || current_month == "09" || current_month == "11") {
            var last_day = "30";
        } else if (current_month == "02") {
            var last_day = "28";
            if (current_year == "2020" || current_year == "2024" || current_year == "2028" || current_year == "2032" ||
                current_year == "2036") {
                var last_day = "29";
            }
        }
        var from_date = current_year + '-' + current_month + '-01';
        var to_date = current_year + '-' + current_month + '-' + last_day;
    }
    $.ajax({
        type: "POST",
        url: access_link + "account/ajax_income_ledger_details.php?from_date=" + from_date + "&to_date=" +
            to_date + "",
        cache: false,
        success: function(detail) {
            $('#my_table1').html(detail);
        }
    });
    for_total_income_expence_info(from_date, to_date);
}

function for_total_income_expence_info(from_date, to_date) {
    $("#expence_total_amount").val("Loading....");
    $("#grand_total").val("Loading....");
    $("#income_total_amount").val("Loading....");
    $.ajax({
        type: "POST",
        url: access_link + "account/ajax_total_income_expence_info.php?from_date=" + from_date + "&to_date=" +
            to_date + "",
        cache: false,
        success: function(detail) {
            var str = detail;
            var res = str.split("||");
            $("#expence_total_amount").val(res[1]);
            $("#grand_total").val(res[2]);
            $("#income_total_amount").val(res[3]);
        }
    });
}

function for_expence_ledger(id) {
    $('#my_table2').html(loader_div);
    if (id == "date_wise") {
        var from_date = document.getElementById('from_date').value;
        var to_date = document.getElementById('to_date').value;

    }
    if (id == "month_wise") {
        var current_month = document.getElementById('ledger_month_wise').value;
        var current_year = document.getElementById('ledger_year_wise').value;

        if (current_month == "01" || current_month == "03" || current_month == "05" || current_month == "07" ||
            current_month == "08" || current_month == "10" || current_month == "12") {
            var last_day = "31";
        } else if (current_month == "04" || current_month == "06" || current_month == "09" || current_month == "11") {
            var last_day = "30";
        } else if (current_month == "02") {
            var last_day = "28";
            if (current_year == "2020" || current_year == "2024" || current_year == "2028" || current_year == "2032" ||
                current_year == "2036") {
                var last_day = "29";
            }
        }
        var from_date = current_year + '-' + current_month + '-01';
        var to_date = current_year + '-' + current_month + '-' + last_day;
    }
    $.ajax({
        type: "POST",
        url: access_link + "account/ajax_expence_ledger_details.php?from_date=" + from_date + "&to_date=" +
            to_date + "",
        cache: false,
        success: function(detail) {
            $('#my_table2').html(detail);


        }
    });
    for_total_income_expence_info(from_date, to_date);
}
</script> -->


<!-- <script type="text/javascript">
$(document).ready(function() {
    for_income_ledger("month_wise");
    for_expence_ledger("month_wise");
});
</script> -->



<section class="content-header">
    <h1>
        Account Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/account-fee')}}"><i class="fa fa-inr"></i>Account</a></li>
        <li><i class="Active"></i>Ledger</li>
    </ol>
</section>

<!-- Main content -->

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success ">
                <form action="" method="get">
                    @csrf
                    <div class="col-md-6">
                        <br />
                        <!-- <div class="input-group input-daterange"> -->
                        <div class="col-md-6 my_background_color">
                            <div class="form-group">
                                <label>From Date</label>
                                <input type="date" name="ledger_from_date" id="from_date" value="" class="form-control">
                                <!-- oninput='for_income_ledger("date_wise");for_expence_ledger("date_wise");'> -->
                            </div>
                        </div>
                        <div class="col-md-6 my_background_color">
                            <div class="form-group">
                                <label>To Date</label>
                                <input type="date" name="ledger_to_date" id="to_date" value="" class="form-control">
                                <!-- oninput='for_income_ledger("date_wise");for_expence_ledger("date_wise");'> -->
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="col-md-3 my_background_color">
                            <div class="form-group">
                                <label>Month wise</label>
                                <select name="ledger_month" id="ledger_month_wise" class="form-control"> -->
                                    <!-- onchange='for_income_ledger("month_wise");for_expence_ledger("month_wise");' -->
                                    <!-- <option value="01">Jaunary</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-3 my_background_color">
                            <div class="form-group">
                                <label>Year</label>
                                <select name="ledger_year" id="ledger_year_wise" class="form-control">
                                   onchange='for_income_ledger("month_wise");for_expence_ledger("month_wise");' 
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- <center><button type="submit" class="btn btn-primary subbtn">Search</button></center> -->
                    </div>
                </form>

                <div class="col-md-6">
                    <br />
                    <div class="col-md-4 my_background_color">
                        <div class="form-group">
                            <label>Income Total</label>
                            <input type="text" name="ledger_income_total" id="income_total_amount" placeholder="0"
                                class="form-control" value="" readonly>
                            <td>
                            </td>
                        </div>
                    </div>
                    <div class="col-md-4 my_background_color">
                        <div class="form-group">
                            <label>Expense Total</label>
                            <input type="text" name="ledger_expence_total" id="expence_total_amount" placeholder="0"
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 my_background_color">
                        <div class="form-group">
                            <label>Grand Total</label>
                            <input type="text" name="ledger_grand_total" placeholder="0" id="grand_total"
                                class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <br />
            <!-- /.box -->
            <div class="col-md-6">
                <div class="box box-success " style="padding:10px 10px 10px 10px;">
                    <h4 style="color:red;">
                        <center>Income Details:- </center>
                    </h4><br />
                    <!-- /.box-header -->
                    <div class="box-body table-responsive" id="my_table1">
                        <table id="example1" class="table table-bordered table-striped">
                            <!-- <thead>
                                <th>Details</th>
                            </thead> -->
                            <tbody id="example5">
                                <!-- <td>
                                    <a href="{{ url('/account-fee')}}" class="btn btn-info">Details</a>
                                </td> -->
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>


            <div class="col-md-6">
                <div class="box box-success " style="padding:10px 10px 10px 10px;">
                    <h4 style="color:red;">
                        <center> Expense Details :- </center>
                    </h4><br />
                    <!-- /.box-header -->

                    <div class="box-body table-responsive" id="my_table2">
                        <table id="example3" class="table table-bordered table-striped">
                            <tbody id="example6">
                            </tbody>
                        </table>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
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

            url: "{{route('search-date-wise')}}",
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
                $("#example3").html(detail['dataa']);
                $("#income_total_amount").val(detail['feeIncome']);
                $("#expence_total_amount").val(detail['feeExpence']);
                $("#grand_total").val(detail['grand_total']);
            }
        });
    });
    // success: function(detail['data']) {
    //     if (detail['data']) {
    //         var html = '';
    //         var serial_no = 1;
    //         if (detail['data'].length > 0) {
    //             for (var count = 0; count < detail['data'].length; count++) {
    //                 html += '<tr>';
    //                 html += '<td>' + serial_no + '</td>';
    //                 html += '<td>' + detail['data'][count].student_id + '</td>';
    //                 html += '<td>' + detail['data'][count].amount_type + '</td>';
    //                 html += '<td>' + detail['data'][count].fee_info + '</td>';
    //                 html += '<td>' + detail['data'][count].submission_date + '</td>';
    //                 html += '<td>' + detail['data'][count].grand_total + '</td>';
    //                 html += '<td>' +
    //                     '<button type="button" class="btn btn-info btn-sm" onclick="delete_function()">Details</button>' +
    //                     '</td>';
    //                 html += '</tr>';
    //             }
    //         }
    //         $('#example5').html(html);

    //     }
    // }
    // success: function(dataa) {
    // if (dataa) {
    //     var htmll = '';
    //     var serial_no = 1;
    //     if (dataa.length > 0) {
    //         for (var count = 0; count < dataa.length; count++) {
    //             htmll += '<tr>';
    //             htmll += '<td>' + serial_no + '</td>';
    //             htmll += '<td>' + dataa[count].user_id + '</td>';
    //             htmll += '<td>' + dataa[count].amount_type + '</td>';
    //             htmll += '<td>' + dataa[count].expence_for + '</td>';
    //             htmll += '<td>' + dataa[count].date + '</td>';
    //             htmll += '<td>' + dataa[count].total_amount + '</td>';
    //             htmll += '<td>'
    //                     + '<button type="button" class="btn btn-info btn-sm" onclick="delete_function()">Details</button>'
    //                     + '</td>';
    //             htmll += '</tr>';
    //         }
    //     }
    //     $('#example6').html(htmll);

    //                 // }
    //             }
    //         });
    // });

    $("#ledger_month_wise").change(function() {
        var ledger_month_wise = document.getElementById('ledger_month_wise').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({

            url: "{{route('search-date-wise')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                },
                ledger_month_wise: ledger_month_wise
            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });

    $("#ledger_year_wise").change(function() {
        var ledger_year_wise = document.getElementById('ledger_year_wise').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({

            url: "{{route('search-date-wise')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                },
                ledger_year_wise: ledger_year_wise
            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });
});
</script>

<script>
$(function() {
    $('#example1').DataTable()

})
</script>
<script>
$(function() {
    $('#example3').DataTable()

})
</script>

<!-- <script>
$(document).ready(function() {

    var date = new Date();

    $('.input-daterange').datepicker({
        todayBtn: 'linked',
        format: 'yyyy-mm-dd',
        autoclose: true
    });

    var _token = $('input[name="_token"]').val();

    fetch_data();

    function fetch_data(from_date = '', to_date = '') {
        alert(from_date);

        $.ajax({
            url: "{{route('search-date-wise')}}",
            type: "post",
            data: {
                from_date: from_date,
                to_date: to_date,
                _token: _token
            },
            dataType: "json",
            success: function(data) {

                var output = '';
                $('#total_records').text(data.length);
                for (var count = 0; count < data.length; count++) {
                    output += '<tr>';
                    output += '<td>' + data[count].post_title + '</td>';
                    output += '<td>' + data[count].post_description + '</td>';
                    output += '<td>' + data[count].date + '</td></tr>';
                }
                $('tbody').html(output);
            }
        })
    } 

    //  $('#subbtn').click(function(){
    //   var from_date = $('#from_date').val();
    //   var to_date = $('#to_date').val();
    //   if(from_date != '' &&  to_date != '')
    //   {
    //    fetch_data(from_date, to_date);
    //   }
    //   else
    //   {
    //    alert('Both Date is required');
    //   }
    //  });

    //  $('#refresh').click(function(){
    //   $('#from_date').val('');
    //   $('#to_date').val('');
    //   fetch_data();
    //  });


});
</script>-->