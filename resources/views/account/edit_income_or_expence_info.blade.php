@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function student_detail(value) {

    $.ajax({
        type: "get",
        url: "{{url('ajax-change-account')}}/" + value,
        cache: false,
        success: function(detail) {
            var name = detail['name'];
            var address = detail['address']['street_address'];
            var phone_number = detail['phone_number'];

            $("#student_name1").val(name);
            $("#student_adress1").val(address);
            $("#student_contact_no1").val(phone_number);

            //     $("#student_name1").val("Loading....");
            //     $("#student_adress1").val("Loading....");
            //     $("#student_father_contact_no1").val("Loading....");
            //     $("#student_roll_no1").val("Loading....");
            //     $.ajax({
            //         address: "POST",
            //         url: access_link + "account/ajax_search_student_details.php?id=" + value + "",
            //         cache: false,
            //         success: function(detail) {
            //             var str = detail;
            //             var res = str.split("|?|");
            //             $("#student_name1").val(res[0]);
            //             $("#student_adress1").val(res[1]);
            //             $("#student_father_contact_no1").val(res[2]);
            //             $("#student_roll_no1").val(res[3]);
        }
    });
}
</script>
<script type="text/javascript">
function account_cust(value) {

    $('#student_name1').val(value);
}
</script>

<script type="text/javascript">
function account_cust1(value) {

    $('#student_name11').val(value);
}
</script>
<script type="text/javascript">
function staff_detail(value) {
    $.ajax({
        type: "get",
        url: "{{url('ajax-change-account-staff')}}/" + value,
        cache: false,
        success: function(detail) {
            var nameq = detail['name'];
            var address = detail['address']['street_address'];
            var phone_number = detail['phone_number'];
            var designation = detail['employee']['emp_designation'];

            $("#student_name1").val(nameq);
            $("#student_adress1").val(address);
            $("#student_contact_no1").val(phone_number);
            $("#designation").val(designation);


        }
    });
}
</script>

<script>
$(document).ready(function() {
    party_select('Other');
});

function party_select(value) {
    $("#div_other_or_advance").hide();
    $("#other_or_advance").val('').change();
    if (value == 'Student') {
        $("#student_name1").val('');
        $("#student_adress1").val('');
        $("#student_father_contact_no1").val('');
        $("#student_roll_no1").val('');
        $("#designation").val('');
        $('#student_select').show();
        $('#staff_select').hide();
        $('#cust_select').hide();
        $('#staff_designation').hide();
        $('#student_name1').prop("readonly", true);
        $('#student_adress1').prop("readonly", true);
        $('#student_father_contact_no1').prop("readonly", true);
        $('#staff_select1').prop("required", false);
        $('#student_select1').prop("required", true);
    } else if (value == 'Staff') {

        $("#div_other_or_advance").show();

        $("#student_name1").val('');
        $("#student_adress1").val('');
        $("#student_father_contact_no1").val('');
        $("#student_roll_no1").val('');
        $("#designation").val('');
        $('#staff_select').show();
        $('#staff_designation').show();
        $('#student_select').hide();
        $('#cust_select').hide();
        $('#student_name1').prop("readonly", true);
        $('#student_adress1').prop("readonly", true);
        $('#student_father_contact_no1').prop("readonly", true);
        $('#designation').prop("readonly", true);
        $('#staff_select1').prop("required", true);
        $('#student_select1').prop("required", false);
    } else {
        $("#student_name1").val('');
        $("#student_adress1").val('');
        $("#student_father_contact_no1").val('');
        $("#student_roll_no1").val('');
        $("#designation").val('');
        $('#staff_select').hide();
        $('#cust_select').show();
        $('#student_select').hide();
        $('#staff_designation').hide();
        $('#student_name1').prop("readonly", false);
        $('#student_adress1').prop("readonly", false);
        $('#student_father_contact_no1').prop("readonly", false);
        $('#staff_select1').prop("required", false);
        $('#student_select1').prop("required", false);
    }
}

function for_advance(value) {
    $("#advance_amount").val('');
    $("#advance_installment").val('');
    if (value == 'Advance') {
        $("#div_advance_amount").show();
        $("#div_advance_installment").show();
    } else {
        $("#div_advance_amount").hide();
        $("#div_advance_installment").hide();
    }
}

function same_amount(value, id) {
    var prty_type = $("input[name='account_party_type']:checked").val();
    if (prty_type == 'Staff') {
        $("#" + id).val(value);
    }
    for_inst();
}

function for_inst() {
    var main = document.getElementById('advance_amount').value;
    var inst = document.getElementById('advance_installment').value;
    if (Number(inst) > Number(main)) {
        alert_new("Please Enter Valid Installment Amount !!!", 'red');
        $("#advance_installment").val('');
    }
}
</script>
<script>
function payment_mode(value) {
    if (value == 'Cash') {
        $('#for_cheque_bank_date').val('');
        $('#for_cheque').val('');
        $('#for_cheque_bank_name').val('');
        $('#for_neft_account').val('');
        $('#for_neft_bank').val('');

    } else if (value == 'Cheque') {
        $('#for_cheque_bank_date').val('');
        $('#for_cheque').val('');
        $('#for_cheque_bank_name').val('');
        $('#for_neft_account').val('');
        $('#for_neft_bank').val('');


        $('#for_cheque_date').show();
        $('#for_cheque_no').show();
        $('#for_cheque_name').show();
        $('#for_neft_account_no').hide();
        $('#for_neft_bank_name').hide();
    } else if (value == 'NEFT') {
        $('#for_cheque_bank_date').val('');
        $('#for_cheque').val('');
        $('#for_cheque_bank_name').val('');
        $('#for_neft_account').val('');
        $('#for_neft_bank').val('');

        $('#for_neft_account_no').show();
        $('#for_neft_bank_name').show();
        $('#for_cheque_date').hide();
        $('#for_cheque_no').hide();
        $('#for_cheque_name').show();
    } else {
        $('#for_cheque_bank_date').val('');
        $('#for_cheque').val('');
        $('#for_cheque_bank_name').val('');
        $('#for_neft_account').val('');
        $('#for_neft_bank').val('');

        $('#for_cheque_date').hide();
        $('#for_cheque_no').hide();
        $('#for_cheque_name').hide();
        $('#for_neft_account_no').hide();
        $('#for_neft_bank_name').hide();
    }
}

function amount_type(value) {
    $("#account_customer_total_amount").val('');
    $("#account_customer_credit_amount").val('');
    if (value == 'Debit') {
        $("#account_customer_total_amount").show();
        $("#account_customer_credit_amount").hide();
        $('#account_customer_credit_amount').prop("required", false);
    } else {
        $("#account_customer_total_amount").hide();
        $("#account_customer_credit_amount").show();
        $('#account_customer_total_amount').prop("required", false);
    }
}

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "account/add_income_or_expence_info _api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                // $("#123").html(detail);
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
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('account')}}"><i class="fa fa-inr"></i>Account</a></li>
        <li><a href="{{url('income-or-expence-list')}}"><i class="fa fa-list"></i>List</a></li>
        <li class="active">Account Info Update</li>
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
                <form role="form" action="{{url('edit-income-or-expence-info-data')}}" method="post"
                    enctype="multipart/form-data" id="my_form">
                    @csrf
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Amount Type</label>
                            <select name="account_amount_type" class="form-control" id="account_amount_type" required>
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
                                @foreach ($users as $user)
                                @if($AccountInfo['office_account'] == $user->id)
                                <option value="{{ $user->id }}" selected>{{ $user->name }} [{{$user->phone_number }}]
                                </option>
                                @else
                                <option value="{{ $user->id }}">{{ $user->name }} [{{$user->phone_number }}]</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Party Type</label><br>
                            <div class="form-control">
                                <input type="radio" name="account_party_type" id="account_party_type" value="Other"
                                    checked
                                    onclick="party_select(this.value);">&nbsp;&nbsp;<b>Other</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="account_party_type" id="" onclick="party_select(this.value);"
                                    value="Staff">&nbsp;&nbsp;<b>Staff</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="account_party_type" id="" onclick="party_select(this.value);"
                                    value="Student">&nbsp;&nbsp;<b>Student</b>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2" style="display:none;" id="div_other_or_advance">
                        <div class="form-group">
                            <label>Other Or Advance</label>
                            <select name="other_or_advance" id="other_or_advance" onchange="for_advance(this.value);"
                                class="form-control">
                                <option value="">Other</option>
                                <option value="">Advance</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2" style="display:none;" id="div_advance_amount">
                        <div class="form-group">
                            <label>Advance Amount</label>
                            <input type="text" name="advance_amount" id="advance_amount"
                                oninput="same_amount(this.value,'account_customer_total_amount');"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-2" style="display:none;" id="div_advance_installment">
                        <div class="form-group">
                            <label>Advance Installment</label>
                            <input type="text" name="advance_installment" id="advance_installment" oninput="for_inst();"
                                class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-4" style="display:none" id="student_select">
                        <div class="form-group">
                            <label>Student Select</label>
                            <select name="account_student_select" class="form-control select2" id="student_select1"
                                onchange="student_detail(this.value);" required style="width:100%">
                                <option value="">Select</option>
                                @foreach ($students as $student)
                                @if($student['student_id'] == $user->id)
                                <option value="{{ $student->id }}" selected>{{ $student->name }}
                                    [{{ $student->phone_number }}]
                                </option>
                                @else
                                <option value="{{ $student->id }}">{{ $student->name }} [{{$student->phone_number }}]
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" style="display:none" id="staff_select">
                        <div class="form-group">
                            <label>Staff Select</label>
                            <select name="account_staff_select" class="form-control select2" id="staff_select1"
                                onchange="staff_detail(this.value);" required style="width:100%;">
                                <option value="">Select</option>
                                @foreach ($employees as $staff)
                                @if($staff['user_id'] == $user->id)
                                <option value="{{ $staff->id }}" selected>{{ $staff->name }} [{{$staff->phone_number }}]
                                </option>
                                @else
                                <option value="{{ $staff->id }}">{{ $staff->name }} [{{$staff->phone_number }}]
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4" id="cust_select">
                        <div class="form-group">
                            <label>Name</label>
                            <select name="account_customer_name1" class="form-control select2"
                                onchange="account_cust(this.value);" style="width:100%;">
                                <option value="">Select</option>
                                <option value="kailash soni">kailash soni</option>
                                <option value="aaaa">aaaa</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            @foreach ($users as $spt)
                            @if($AccountInfo['name'] == $spt->id)
                            <input type="text" name="account_customer_name" placeholder="Name" id="student_name1"
                                value="{{ $spt->name }}" class="form-control" readonly>
                            @endif
                            @endforeach
                        </div>
                    </div>


                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Address</label>
                            @foreach ($addresses as $address)
                            @if($AccountInfo['address'] == $address->id)
                            <input type="text" name="account_customer_address" id="student_adress1"
                                placeholder="Address" value="{{$address->street_address}}" class="form-control"
                                readonly>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="number" name="account_customer_contact_no" id="student_contact_no1"
                                placeholder="Contact No." value="{{$AccountInfo->contact_no}}" class="form-control"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-4" style="display:none" id="staff_designation">
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="account_customer_designation" placeholder="Designation"
                                id="designation" value="{{$AccountInfo->designation}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Total Amount<font style="color:red"><b>*</b></font></label>
                            <input type="number" name="account_customer_total_amount" placeholder="Total Amount"
                                value="{{$AccountInfo->debit_amount}}" class="form-control" required>
                           
                            <input type="number" style="display:none;" name="account_customer_credit_amount"
                                id="account_customer_credit_amount" placeholder="Credit Amount"
                                value="{{$AccountInfo->credit_amount}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Date<font style="color:red"><b>*</b></font></label>
                            <input type="date" name="account_customer_date" placeholder="Date"
                                value="{{$AccountInfo->date}}" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bill/Quotation No.</label>
                            <input type="text" name="bill_quotation_no" value="{{$AccountInfo->bill_no}}"
                                class="form-control" placeholder="Bill/Quotation No." />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bill/Quotation Date</label>
                            <input type="date" name="bill_quotation_date" class="form-control"
                                value="{{$AccountInfo->date}}" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Payment Mode</label>
                            <td>
                                <select name="account_payment_mode" class="form-control"
                                    onchange="payment_mode(this.value);" required>
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
                            <input type="text" name="account_cheque_bank_name" id="for_cheque_bank_name"
                                class="form-control" placeholder="Bank Name" value="{{$AccountInfo->bank_name}}">
                        </div>
                    </div>
                    <div class="col-md-4" id="for_cheque_no" style="display:none;">
                        <div class="form-group">
                            <label>Cheque No</label>
                            <input type="text" name="account_cheque_no" id="for_cheque" class="form-control"
                                placeholder="Cheque No." value="{{$AccountInfo->cheque_no}}">
                        </div>
                    </div>
                    <div class="col-md-4" id="for_cheque_date" style="display:none;">
                        <div class="form-group">
                            <label>Cheque Date</label>
                            <input type="date" name="account_cheque_date" id="for_cheque_bank_date" class="form-control"
                                placeholder="Cheque Date" value="{{$AccountInfo->cheque_date}}">
                        </div>
                    </div>
                    <!-- <div class="col-md-4" id="for_neft_bank_name" style="display:none;">
                        <div class="form-group">
                            <label>Bank Name</label>
                            <input type="text" name="account_neft_bank_name" id="for_neft_bank" class="form-control"
                                placeholder="Bank Name" value="">
                        </div>
                    </div> -->
                    <div class="col-md-4" id="for_neft_account_no" style="display:none;">
                        <div class="form-group">
                            <label>Account Number</label>
                            <input type="text" name="account_neft_bank_account_no" id="for_neft_account"
                                class="form-control" placeholder="Account No." value="{{$AccountInfo->account_no}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Remark</label>
                            <input type="text" name="account_customer_remark" placeholder="Remark"
                                value="{{$AccountInfo->remark}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bill/Quotation Image Upload</label>
                            <input type="file" name="bill_image" id="bill_upload" placeholder=""
                                onchange="check_file_type(this,'bill_upload','show_bill_upload','image');"
                                class="form-control" accept=".gif, .jpg, .jpeg, .png" value="">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <img id="show_bill_upload" src="{{asset('images/account/'.$AccountInfo->bill_image)}}"
                                width='60px' height='60px'>
                        </div>
                    </div>

                    <div class=" col-md-4" style="display:none">
                        <div class="form-group">
                            <label>Roll No./Emp Id</label>
                            <input type="text" name="account_student_or_emp_id" placeholder="Roll No./Emp Id"
                                id="student_roll_no1" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Update" class="btn btn-primary" />
                        </center>
                    </div>
            </div>
            </form>

        </div>
    </div>
</section>

@include('common.footer')
<script>
$(document).ready(function() {
    $("#account_amount_type option[value^='{{$AccountInfo->amount_type}}']").attr("selected", "selected");
});
</script>
<script>
$(document).ready(function() {
    $("#other_or_advance option[value^='{{$AccountInfo->other_advance}}']").attr("selected", "selected");
});
</script>
<!-- <script>
$(document).ready(function() {
    $("#account_party_type div[value^='{{$AccountInfo->party_type}}']").attr("checked", "checked");
});
</script> -->
<script>
$(function() {
    $('.select2').select2()
})
</script>