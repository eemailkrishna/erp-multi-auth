@include('common.header')
@include('common.navbar')
<script>
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    if (value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_class_section.php?class_name=" + value + "",
            cache: false,
            success: function(detail) {
                $("#student_class_section").html(detail);
            }
        });
    } else {
        $('#student_class_section').html("<option value='All'>All</option>");
    }
}

function for_check(id, con11) {
    if ($('#' + id).prop("checked") == true) {
        $("." + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $("." + id).each(function() {
            $(this).prop('checked', false);
        });
    }
    if (con11 == 'Yes') {
        for_msg();
    }
}

function for_msg() {
    var school_name = document.getElementById('school_info_school_name').value;
    var school_database_name = document.getElementById('school_database_name').value;
    var ins_name = {
        01: "January",
        02: "February",
        03: "March",
        04: "April",
        05: "May",
        06: "June",
        07: "July",
        08: "August",
        09: "September",
        10: "October",
        11: "November",
        12: "December"
    };
    var month_arr = [];
    $(".my_month").each(function() {
        if ($(this).prop("checked") == true) {
            month_arr.push(ins_name[Number($(this).val())]);
        }
    });

    var for_late_fee = '';
    if ($("#late_fee").prop("checked") == true) {
        for_late_fee = 'and late fee amount ? ';
    }

    if (school_database_name == 'simptylz_pragyaschoolsasaram') {
        $("#student_message").val("Sir, Kindly deposit the due fees Rs ? and transport fee Rs ? " + for_late_fee +
            "of your child ?. Regards, PNPS");
    } else {
        // 	$("#student_message").val("Dear Parents, Kindly deposit the "+month_arr+" due fees amount ? and transport dues amount ? "+for_late_fee+"of your child ? at the earliest. Regards, "+school_name);
        $("#student_message").val(
            "Dear Parents, Kindly deposit the  due fees amount ? and transport dues amount ? of your child ? at the earliest. From " +
            school_name + " [SIMPTION]");
    }

}

function student_list() {
    $("#student_list").html(loader_div);
    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var student_status = document.getElementById('student_status').value;
    var selected_month = [];
    $(".my_month").each(function() {
        if ($(this).prop("checked") == true) {
            selected_month.push($(this).val());
        }
    });
    var head_value = $("input[name='select_head']:checked").val();

    var late_fee = 'No';
    if ($("#late_fee").prop("checked") == true) {
        late_fee = 'Yes';
    }

    if (student_class != '' && student_class_section != '' && selected_month != '' && head_value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_get_student_list_statuswise.php",
            data: {
                student_class: student_class,
                student_class_section: student_class_section,
                student_status: student_status,
                selected_month: selected_month,
                head_value: head_value,
                late_fee: late_fee
            },
            cache: false,
            success: function(detail) {
                $("#student_list").html(detail);
            }
        });
    } else {
        alert('Please Select Atleast One Class, One Month And One Head !!!');
        $('#student_list').html('');
    }
}

function validation(id) {

    var str = document.getElementById('student_message').value;
    var n = str.includes("?");
    var m = str.split("?");
    var q = m.length;

    var add = 0;
    $("." + id).each(function() {
        if ($(this).prop('checked') == true) {
            add = parseInt(add + 1);
        }
    });

    var late_fee_no = 4;
    if ($("#late_fee").prop("checked") == true) {
        late_fee_no = 5;
    }

    if (add > 0 && n == true && q == late_fee_no) {
        return true;
    } else {
        if (add <= 0) {
            alert("Please Choose student Class & Check Atleast One Student !!!");
        } else if (n == false || q != late_fee_no) {
            alert("Please Do Not Remove & Add the Extra ? (Question Mark) in Your Message !!!");
        }
        return false;
    }
}

function print_list() {
    $("#student_list").html(loader_div);
    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var student_status = document.getElementById('student_status').value;
    var selected_month = [];
    $(".my_month").each(function() {
        if ($(this).prop("checked") == true) {
            selected_month.push($(this).val());
        }
    });
    var head_value = $("input[name='select_head']:checked").val();
    var student_note = document.getElementById('student_note').value;

    var late_fee = 'No';
    if ($("#late_fee").prop("checked") == true) {
        late_fee = 'Yes';
    }

    if (student_class != '' && student_class_section != '' && selected_month != '' && head_value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_get_student_list_for_print_statuswise.php",
            data: {
                student_class: student_class,
                student_class_section: student_class_section,
                student_status: student_status,
                selected_month: selected_month,
                head_value: head_value,
                student_note: student_note,
                late_fee: late_fee
            },
            cache: false,
            success: function(detail) {
                $("#student_list").html(detail);
            }
        });
    } else {
        alert('Please Select Atleast One Class, One Month And One Head !!!');
        $('#student_list').html('');
    }
}

function print_list1() {
    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var student_status = document.getElementById('student_status').value;
    var selected_month = [];
    $(".my_month").each(function() {
        if ($(this).prop("checked") == true) {
            selected_month.push($(this).val());
        }
    });
    var head_value = $("input[name='select_head']:checked").val();
    var student_note = document.getElementById('student_note').value;

    var late_fee = 'No';
    if ($("#late_fee").prop("checked") == true) {
        late_fee = 'Yes';
    }

    if (student_class != '' && student_class_section != '' && selected_month != '' && head_value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_get_fee_due_student_list_statuswise.php",
            data: {
                student_class: student_class,
                student_class_section: student_class_section,
                student_status: student_status,
                selected_month: selected_month,
                head_value: head_value,
                student_note: student_note,
                late_fee: late_fee
            },
            cache: false,
            success: function(detail) {
                $("#prnt_stdnt_lst").html(detail);
                $("#model_button").click();
            }
        });
    }
}

function print_list2() {
    var student_roll_no = [];
    $(".selected_student").each(function() {
        if ($(this).prop("checked") == true) {
            student_roll_no.push($(this).val());
        }
    });
    if (student_roll_no != '') {
        $("#student_list").html(loader_div);
        var student_class = document.getElementById('student_class').value;
        var student_class_section = document.getElementById('student_class_section').value;
        var student_status = document.getElementById('student_status').value;
        var selected_month = [];
        $(".my_month").each(function() {
            if ($(this).prop("checked") == true) {
                selected_month.push($(this).val());
            }
        });
        var head_value = $("input[name='select_head']:checked").val();
        var student_note = document.getElementById('student_note').value;

        var late_fee = 'No';
        if ($("#late_fee").prop("checked") == true) {
            late_fee = 'Yes';
        }

        if (student_class != '' && student_class_section != '' && selected_month != '' && head_value != '') {
            $.ajax({
                type: "POST",
                url: access_link + "fees_monthly/ajax_get_selected_student_list_for_print_statuswise.php",
                cache: false,
                data: {
                    student_class: student_class,
                    student_class_section: student_class_section,
                    student_status: student_status,
                    selected_month: selected_month,
                    head_value: head_value,
                    student_note: student_note,
                    student_roll_no: student_roll_no,
                    late_fee: late_fee
                },
                success: function(detail) {
                    $("#student_list").html(detail);
                }
            });
        } else {
            alert('Please Select Atleast One Class, One Month And One Head !!!');
            $('#student_list').html('');
        }
    } else {
        alert("Please Select Atleast One student !!!");
        $('#student_list').html('');
    }
}

function print_list3() {
    $("#student_list").html(loader_div);
    var student_class = document.getElementById('student_class').value;
    var student_class_section = document.getElementById('student_class_section').value;
    var student_status = document.getElementById('student_status').value;
    var selected_month = [];
    $(".my_month").each(function() {
        if ($(this).prop("checked") == true) {
            selected_month.push($(this).val());
        }
    });
    var head_value = $("input[name='select_head']:checked").val();
    var student_note = document.getElementById('student_note').value;

    var late_fee = 'No';
    if ($("#late_fee").prop("checked") == true) {
        late_fee = 'Yes';
    }

    if (student_class != '' && student_class_section != '' && selected_month != '' && head_value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_get_student_list_for_print_tablewise.php",
            data: {
                student_class: student_class,
                student_class_section: student_class_section,
                student_status: student_status,
                selected_month: selected_month,
                head_value: head_value,
                student_note: student_note,
                late_fee: late_fee
            },
            cache: false,
            success: function(detail) {
                $("#student_list").html(detail);
            }
        });
    } else {
        alert('Please Select Atleast One Class, One Month And One Head !!!');
        $('#student_list').html('');
    }
}

function print_list4() {
    var student_roll_no = [];
    $(".selected_student").each(function() {
        if ($(this).prop("checked") == true) {
            student_roll_no.push($(this).val());
        }
    });
    if (student_roll_no != '') {
        $("#student_list").html(loader_div);
        var student_class = document.getElementById('student_class').value;
        var student_class_section = document.getElementById('student_class_section').value;
        var student_status = document.getElementById('student_status').value;
        var selected_month = [];
        $(".my_month").each(function() {
            if ($(this).prop("checked") == true) {
                selected_month.push($(this).val());
            }
        });
        var head_value = $("input[name='select_head']:checked").val();
        var student_note = document.getElementById('student_note').value;

        var late_fee = 'No';
        if ($("#late_fee").prop("checked") == true) {
            late_fee = 'Yes';
        }

        if (student_class != '' && student_class_section != '' && selected_month != '' && head_value != '') {
            $.ajax({
                type: "POST",
                url: access_link + "fees_monthly/ajax_get_selected_student_list_for_print_tablewise.php",
                cache: false,
                data: {
                    student_class: student_class,
                    student_class_section: student_class_section,
                    student_status: student_status,
                    selected_month: selected_month,
                    head_value: head_value,
                    student_note: student_note,
                    student_roll_no: student_roll_no,
                    late_fee: late_fee
                },
                success: function(detail) {
                    $("#student_list").html(detail);
                }
            });
        } else {
            alert('Please Select Atleast One Class, One Month And One Head !!!');
            $('#student_list').html('');
        }
    } else {
        alert("Please Select Atleast One student !!!");
        $('#student_list').html('');
    }
}

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    get_content(loader_div);
    $.ajax({
        url: access_link + "fees_monthly/student_fee_dues_list_statuswise_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert('Message Successfully Sent.');
                get_content('fees_monthly/student_fee_dues_list_statuswise');
            }
        }
    });
});
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
        Fees Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees</a></li>
        <li class="active">Fees Dues List</li>
    </ol>
</section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->

<form method="post" enctype="multipart/form-data" id="my_form">
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements disabled -->
            <div class="box box-primary my_border_top">

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-12" style="display:none;"><span style="float:right;color:red;"><input
                                type="checkbox" name="late_fee" id="late_fee" onclick="for_msg();" /> Late Fee</span>
                    </div>
                    <input type="hidden" id="school_info_school_name" value="SIMPTION TECH PVT LTD" />
                    <input type="hidden" id="school_database_name" value="simpt5nk_demo" />
                    <div class="box-body  col-md-12">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Select Student Class</label>
                                <select name="student_class" class="form-control" id="student_class"
                                    onchange="for_section(this.value);" required>
                                    <option value="">Select Class</option>
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
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Section</label>
                                <select name="student_class_section" class="form-control" id="student_class_section"
                                    required>
                                    <option value="All">All</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <label>Write Your Message</label>
                            <input type="text" name="student_message" id="student_message"
                                placeholder="Write Your Message" class="form-control" />
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="student_status" class="form-control" id="student_status" required>
                                    <option value="Active">Active</option>
                                    <option value="Tc_issued">TC Issued</option>
                                    <option value="Deactive">Deleted</option>
                                    <option value="All">All</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="box-body  col-md-12">
                        <div class="col-md-8" style="border:1px solid;border-radius:15px;">
                            <div class="col-md-10">
                                <h4>Select Months</h4>
                            </div>
                            <div class="col-md-2"><span style="float:right;font-weight:bold;color:red;"><input
                                        type="checkbox" name="" id="my_month" onclick="for_check(this.id,'Yes');" />
                                    All</span></div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="04"
                                    class="my_month" onclick="for_msg();" /> April Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="05"
                                    class="my_month" onclick="for_msg();" /> May Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="06"
                                    class="my_month" onclick="for_msg();" /> June Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="07"
                                    class="my_month" onclick="for_msg();" /> July Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="08"
                                    class="my_month" onclick="for_msg();" /> August Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="09"
                                    class="my_month" onclick="for_msg();" /> September Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="10"
                                    class="my_month" onclick="for_msg();" /> October Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="11"
                                    class="my_month" onclick="for_msg();" /> November Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="12"
                                    class="my_month" onclick="for_msg();" /> December Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="01"
                                    class="my_month" onclick="for_msg();" /> January Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="02"
                                    class="my_month" onclick="for_msg();" /> February Month</div>
                            <div class="col-md-3"><input type="checkbox" name="select_month[]" value="03"
                                    class="my_month" onclick="for_msg();" /> March Month</div>
                        </div>
                        <div class="col-md-4" style="border:1px solid;border-radius:15px;">
                            <div class="col-md-12">
                                <h4>Select Head</h4>
                            </div>
                            <div class="col-md-6"><input type="radio" name="select_head" value="yearly_head"
                                    class="my_head" checked /> Yearly Transport Fee</div>
                            <div class="col-md-6"><input type="radio" name="select_head" value="fee3" class="my_head" />
                                Transport fees</div>
                            <div class="col-md-6"><input type="radio" name="select_head" value="fee9" class="my_head" />
                                bus fee</div>
                        </div>
                    </div>

                    <div class="box-body  col-md-12">
                        <div class="col-md-8">
                            <label>Note : <small style="color:blue;">( This Area Use Only for Print Dues List
                                    )</small></label>
                            <input type="text" name="" id="student_note" placeholder="Please Write Dues Note Here"
                                class="form-control" />
                        </div>
                        <div class="col-md-2">
                            <center>
                                <label>Click For Print List :</label>
                                <!-- <button type="button" onclick="print_list();" class="btn btn-info">For List Print</button> -->
                                <div class="dropdown">
                                    <button class="btn btn-info dropdown-toggle" type="button"
                                        data-toggle="dropdown">For List Print
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li style="cursor: pointer;" onclick="print_list();"><a>All</a></li>
                                        <li class="divider"></li>
                                        <li style="cursor: pointer;" onclick="print_list1();"><a>Selected</a></li>

                                        <li class="divider"></li>
                                        <li style="cursor: pointer;" onclick="print_list3();"><a>All Tablewise</a></li>

                                    </ul>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-2">
                            <center>
                                <label>Click For Dues List :</label>
                                <button type="button" class="btn my_background_color" onclick="student_list();"> Show
                                    List</button>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>

                    <div class="box-body col-md-12" style="border:1px solid;">
                        <div class="col-md-12">
                            <center><u>
                                    <h4 style="color:red;">Dues List</h4>
                                </u></center>
                        </div>
                        <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-10" id="student_list">

                        </div>
                        <div class="col-md-1"><span style="float:right;font-weight:bold;color:red;"><input
                                    type="checkbox" name="" id="my_no" onclick="for_check(this.id,'No');" checked />
                                All</span></div>
                    </div>


                </div>

                <div class="box-body">
                    <div class="col-md-12">
                        <center>
                            <input type="submit" name="finish" value="Send SMS" class="btn  my_background_color"
                                onclick="return validation('my_no');" />
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-default" onclick="for_print();"><i class="fa fa-print"
                                    aria-hidden="true"></i> Print In Pdf</button>
                        </center>
                    </div>
                </div>

            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
        </div>
    </section>
</form>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->


<!------  Start Model ------->
<!-- Trigger the modal with a button -->
<button type="button" id="model_button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
    style="display:none;">Open Modal</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Student List</h4>
            </div>
            <div class="modal-body" id="prnt_stdnt_lst">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn my_background_color" onclick="print_list2();" data-dismiss="modal">Open
                    List</button>
                <button type="button" class="btn my_background_color" onclick="print_list4();" data-dismiss="modal">Open
                    List Tablewise</button>
            </div>
        </div>

    </div>
</div>
<!------  End Model ------->

<script>
for_msg();
</script>
@include('common.footer')