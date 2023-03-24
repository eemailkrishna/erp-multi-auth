<script type="text/javascript">
function student_detail(value) {
    $("#student_name1").val("Loading....");
    $("#student_adress1").val("Loading....");
    $("#student_father_contact_no1").val("Loading....");
    $("#student_roll_no1").val("Loading....");
    $.ajax({
        address: "POST",
        url: access_link + "account/ajax_search_student_details.php?id=" + value + "",
        cache: false,
        success: function(detail) {
            var str = detail;
            var res = str.split("|?|");
            $("#student_name1").val(res[0]);
            $("#student_adress1").val(res[1]);
            $("#student_father_contact_no1").val(res[2]);
            $("#student_roll_no1").val(res[3]);
        }
    });
}
</script>
<script type="text/javascript">
function staff_detail(value) {
    $("#student_name1").val("Loading....");
    $("#student_adress1").val("Loading....");
    $("#student_father_contact_no1").val("Loading....");
    $("#student_roll_no1").val("Loading....");
    $("#designation").val("Loading....");
    $.ajax({
        address: "POST",
        url: access_link + "account/ajax_search_staff_details.php?id=" + value + "",
        cache: false,
        success: function(detail) {
            var str = detail;
            var res = str.split("|?|");
            $("#student_name1").val(res[0]);
            $("#student_adress1").val(res[1]);
            $("#student_father_contact_no1").val(res[2]);
            $("#student_roll_no1").val(res[3]);
            $("#designation").val(res[4]);
        }
    });
}
</script>

<script>
$(document).ready(function() {
    party_select('Other');
});

function party_select(value) {
    if (value == 'Student') {
        $('#student_select').show();
        $('#staff_select').hide();
        $('#staff_designation').hide();
        $('#student_name1').prop("readonly", true);
        $('#student_adress1').prop("readonly", true);
        $('#student_father_contact_no1').prop("readonly", true);
        $('#staff_select1').prop("required", false);
        $('#student_select1').prop("required", true);
    } else if (value == 'Staff') {
        $('#staff_select').show();
        $('#staff_designation').show();
        $('#student_select').hide();
        $('#student_name1').prop("readonly", true);
        $('#student_adress1').prop("readonly", true);
        $('#student_father_contact_no1').prop("readonly", true);
        $('#designation').prop("readonly", true);
        $('#staff_select1').prop("required", true);
        $('#student_select1').prop("required", false);
    } else {
        $('#staff_select').hide();
        $('#student_select').hide();
        $('#staff_designation').hide();
        $('#student_name1').prop("readonly", false);
        $('#student_adress1').prop("readonly", false);
        $('#student_father_contact_no1').prop("readonly", false);
        $('#staff_select1').prop("required", false);
        $('#student_select1').prop("required", false);
    }
}
</script>
<script>
function payment_mode(value) {
    if (value == 'Cheque') {
        $('#for_cheque_date').show();
        $('#for_cheque_no').show();
        $('#for_cheque_name').show();
        $('#for_neft_account_no').hide();
        $('#for_neft_bank_name').hide();
    } else if (value == 'NEFT') {
        $('#for_neft_account_no').show();
        $('#for_neft_bank_name').show();
        $('#for_cheque_date').hide();
        $('#for_cheque_no').hide();
        $('#for_cheque_name').hide();
    } else {
        $('#for_cheque_date').hide();
        $('#for_cheque_no').hide();
        $('#for_cheque_name').hide();
        $('#for_neft_account_no').hide();
        $('#for_neft_bank_name').hide();
    }
}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "account/income_or_expence_edit_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('account/income_or_expence_list');
            } else if (res[1] == 'session_not_set') {
                alert_new('Session Expire !!!', 'red');
            }
        }
    });
});
</script>





<section class="content-header">
    <h3>
        Account Management <small>Control Panel</small>
    </h3>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('account/account')"><i class="fa fa-inr"></i>Account</a></li>
        <li><a href="javascript:get_content('account/income_or_expence_list')"><i class="fa fa-list"></i>List</a></li>
        <li><i class="Active"></i>Add Info</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                    <input type="hidden" name="s_no1" value="350">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Amount Type</label>
                            <select name="account_amount_type" class="form-control">
                                <option value="">Select</option>
                                <option value="Debit">Debit</option>
                                <option value="Credit">Credit</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Office Account</label>
                            <select name="office_account_info" class="form-control">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Party Type</label><br>
                            <div class="form-control">
                                <input type="radio" name="account_party_type" id="" value="Other"
                                    onclick="party_select(this.value);">&nbsp;&nbsp;<b>Other</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                                    type="radio" name="account_party_type" id="" onclick="party_select(this.value);"
                                    value="Staff"
                                    checked>&nbsp;&nbsp;<b>Staff</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                                    type="radio" name="account_party_type" id="" onclick="party_select(this.value);"
                                    value="Student">&nbsp;&nbsp;<b>Student</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="display:none" id="student_select">
                        <div class="form-group">
                            <label>Student Select</label>
                            <select name="account_student_select" class="form-control select2" id="student_select1"
                                onchange="student_detail(this.value);" style="width:100%" required>
                                <option value="">Select</option>
                                <option value="2000196">RASHI [2000196]-[2ND-B]-[HARISH]</option>
                                <option value="2000210">b[2000210]-[2ND-B]-[]</option>
                                <option value="2000314">Rajesh Prasad[2000314]-[2ND-B]-[Ananda Prasad]</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" style="display:none" id="staff_select">
                        <div class="form-group">
                            <label>Staff Select</label>
                            <select name="account_staff_select" class="form-control select2" id="staff_select1"
                                onchange="staff_detail(this.value);" style="width:100%;" required>
                                <option value="">Select</option>
                                <option value="15">kailash soni[15]-[Teacher]</option>
                                <option value="19">kailash soni[19]-[Teacher]</option>
                                <option value="20">jay kishan[20]-[]</option>
                                <option value="29">Abhul Rjaak [29]-[Teacher]</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="account_customer_name" placeholder="Name" id="student_name1"
                                value="kailash soni" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="account_customer_address" id="student_adress1"
                                placeholder="Address" value="hoshangabad city" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="number" name="account_customer_contact_no" id="student_father_contact_no1"
                                placeholder="Contact No." value="9617777047" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4" style="display:none" id="staff_designation">
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="account_customer_designation" placeholder="Designation"
                                id="designation" value="Teacher" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Total Amount</label>
                            <input type="number" name="account_customer_total_amount" placeholder="Total Amount"
                                value="2000" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="account_customer_date" placeholder="Date" value="2023-02-04"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bill/Quotation No.</label>
                            <input type="text" name="bill_quotation_no" class="form-control"
                                placeholder="Bill/Quotation No." value="" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bill/Quotation Date</label>
                            <input type="date" name="bill_quotation_date" class="form-control" value="2023-02-04" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Payment Mode</label>
                            <td>
                                <select name="account_payment_mode" class="form-control"
                                    onchange="payment_mode(this.value);" required>
                                    <option value="Cash">Cash</option>
                                    <option value="">Select</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="NEFT">NEFT/Net Banking</option>
                                </select>
                            </td>
                        </div>
                    </div>


                    <div class="col-md-4" id="for_cheque_name" style="display:none;">

                        <div class="form-group">
                            <label>Bank Name</label>
                            <input type="text" name="account_cheque_bank_name" class="form-control"
                                placeholder="Bank Name" value="">
                        </div>
                    </div>


                    <div class="col-md-4" id="for_cheque_no" style="display:none;">

                        <div class="form-group">
                            <label>Cheque No.</label>
                            <input type="text" name="account_cheque_no" class="form-control" placeholder="Cheque No."
                                value="">
                        </div>
                    </div>

                    <div class="col-md-4" id="for_cheque_date" style="display:none;">

                        <div class="form-group">
                            <label>Cheque Date:</label>
                            <input type="date" name="account_cheque_date" class="form-control" placeholder="Cheque Date"
                                value="2023-02-04">
                        </div>
                    </div>

                    <div class="col-md-4" id="for_neft_bank_name" style="display:none;">

                        <div class="form-group">
                            <label>Bank Name</label>
                            <input type="text" name="account_neft_bank_name" class="form-control"
                                placeholder="Bank Name" value="">
                        </div>
                    </div>

                    <div class="col-md-4" id="for_neft_account_no" style="display:none;">

                        <div class="form-group">
                            <label>Account No.</label>
                            <input type="text" name="account_neft_bank_account_no" class="form-control"
                                placeholder="Account No." value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Remark</label>
                            <input type="text" name="account_customer_remark" placeholder="Remark" value=""
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Bill/Quotation Image Upload</label>
                            <input type="file" id="bill_upload" name="bill_upload" placeholder=""
                                onchange="check_file_type(this,'bill_upload','shwo_bill_upload','image');" value=""
                                class="form-control" accept=".gif, .jpg, .jpeg, .png">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <img onclick="open_file1('bill_upload','account_document','account_id','350');"
                                src="../../school_software_v1_old/images/student_blank.png" id="shwo_bill_upload"
                                height="50" width="50" style="margin-top:10px;">
                        </div>
                    </div>

                    <div class="col-md-4" style="display:none">
                        <div class="form-group">
                            <label>Roll No./Emp Id</label>
                            <input type="text" name="account_student_or_emp_id" placeholder="Roll No./Emp Id"
                                id="student_roll_no1" value="15" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
                    </div>
            </div>

        </div>
    </div>
</section>
<div id="mypdf_view">
    <div>
        <script>
        $(function() {
            $('.select2').select2()
        })
        </script>