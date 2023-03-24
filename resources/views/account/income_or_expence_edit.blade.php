@include('common.header')
@include('common.navbar')


<script type="text/javascript">
function student_detail(value) {
    $.ajax({
        type: "get",
        url: "{{url('ajax-change-student-account')}}/" + value,
        cache: false,
        success: function(detail) {
            var user_id = detail['id'];
            var name = detail['name'];
            var address_id = detail['address']['id'];
            var address = detail['address']['street_address'];
            var phone_number = detail['phone_number'];

            $("#user_id").val(user_id);
            $("#student_name1").val(name);
            $("#address_id").val(address_id);
            $("#student_adress1").val(address);
            $("#student_father_contact_no1").val(phone_number);

        }
    });
}
</script>
<script type="text/javascript">
function staff_detail(value) {
    $.ajax({
        type: "get",
        url: "{{url('ajax-change-account-staff')}}/" + value,
        cache: false,
        success: function(detail) {
            var user_id = detail['id'];
            var name = detail['name'];
            var address_id = detail['address']['id'];
            var address = detail['address']['street_address'];
            var phone_number = detail['phone_number'];
            var designation = detail['employee']['emp_designation'];

            $("#user_id").val(user_id);
            $("#student_name1").val(name);
            $("#address_id").val(address_id);
            $("#student_adress1").val(address);
            $("#student_father_contact_no1").val(phone_number);
            $("#designation").val(designation);
        }
    });
}
</script>

<section class="content-header">
    <h3>
        Account Management <small>Control Panel</small>
    </h3>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/account')}}"><i class="fa fa-inr"></i>Account</a></li>
        <li><a href="{{url('income-or-expence-list')}}"><i class="fa fa-list"></i>List</a></li>
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
                <form role="form" action="{{url('edit-income-or-expence-info-data')}}" method="post"
                    enctype="multipart/form-data" id="my_form">
                    @csrf
                    <input type="hidden" name="id" value="{{$AccountInfo->id}}" class="form-control" required>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Amount Type</label>
                            <select name="account_amount_type" class="form-control" onchange="amount_type(this.value);"
                                id="account_amount_type" required>
                                <option value="Debit">Debit</option>
                                <option value="Credit">Credit</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Office Account</label>
                            <select name="office_account_info" class="form-control" required>
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
                            <!-- <select name="office_account_info" class="form-control">
                                <option value="">Select</option>
                            </select> -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Party Type</label><br>
                            <div class="form-control">

                                <input type="radio" name="account_party_type" class="account_party_type" <?php
                                    if($AccountInfo->party_type=='Other'){ ?> checked <?php  }
                                     ?> id="account_party_type" value="Other"
                                    onclick="party_select(this.value);">&nbsp;&nbsp;<b>Other</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <input type="radio" name="account_party_type" class="account_party_type " <?php
                                    if($AccountInfo->party_type=='Staff'){ ?> checked <?php  } ?>
                                    id="account_party_type" value="Staff"
                                    onclick="party_select(this.value);">&nbsp;&nbsp;<b>Staff</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <input type="radio" name="account_party_type" class="account_party_type" <?php
                                    if($AccountInfo->party_type=='Student'){ ?> checked <?php  } ?>
                                    id="account_party_type" value="Student"
                                    onclick="party_select(this.value);">&nbsp;&nbsp;<b>Student</b>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" id="classDropdown" style="display:none">
                        <div class="form-group">
                            <label>Select Class<font style="color:red"><b>*</b></font></label>
                            <select name="classDropdown" id="classSelect" class="form-control">
                                <option value="">Select Class</option>
                                @if (!empty($classes))
                                @foreach ($classes as $class)
                                <option value="{{$class->id }}">{{ $class->class_name }}
                                </option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4" style="display:none" id="student_select">
                        <div class="form-group">
                            <label>Student Select</label>
                            <select name="account_student_select" class="form-control select2" id="student_select1"
                                onchange="student_detail(this.value);" style="width:100%">
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
                    <div class="col-md-3" style="display:none" id="staff_select">
                        <div class="form-group">
                            <label>Staff Select</label>
                            <select name="account_staff_select" class="form-control select2" id="staff_select1"
                                onchange="staff_detail(this.value);" style="width:100%;">
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
                    <div class="col-md-4 hidden">
                        <div class="form-group">
                            <label>user id</label>
                            <input type="text" name="user_id" placeholder="user_id" id="user_id"
                                value="{{ $AccountInfo->cust_name }}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="account_customer_name" placeholder="Name" id="student_name1"
                                value="{{ $userAccountName}}" class="form-control" pattern="^[a-zA-Z ]*$" readonly
                                required>
                            <span class="text-danger">
                                @error('account_customer_name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4 hidden">
                        <div class="form-group">
                            <label>address id</label>
                            <input type="text" name="address_id" placeholder="address_id" id="address_id"
                                value="{{ $AccountInfo->address }}" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="account_customer_address" id="student_adress1"
                                placeholder="Address" value="{{$addresses}}" class="form-control"
                                pattern="^[a-zA-Z0-9 ]*$" readonly required>
                            <span class="text-danger">
                                @error('account_customer_address')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="number" name="account_customer_contact_no" id="student_father_contact_no1"
                                placeholder="Contact No." value="{{$AccountInfo->contact_no}}" class="form-control"
                                required readonly>
                            <span class="text-danger">
                                @error('account_customer_contact_no')
                                {{$message}}
                                @enderror
                            </span>

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
                            <label>Total Amount</label>
                            <input type="number" name="account_customer_total_amount"
                                id="account_customer_total_amount" placeholder="Total Amount" 
                                value="{{$AccountInfo->debit_amount}}{{$AccountInfo->credit_amount}}" class="form-control" required>

                            <input type="number" style="display:none;" name="account_customer_credit_amount"
                                id="account_customer_credit_amount" placeholder="Credit Amount"
                                value="{{$AccountInfo->credit_amount}}{{$AccountInfo->credit_amount}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="account_customer_date" placeholder="Date"
                                value="{{$AccountInfo->date}}" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bill/Quotation No.</label>
                            <input type="text" name="bill_quotation_no" class="form-control"
                                placeholder="Bill/Quotation No." value="{{$AccountInfo->bill_no}}" required>
                            <span class="text-danger">
                                @error('bill_quotation_no')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bill/Quotation Date</label>
                            <input type="date" name="bill_quotation_date" class="form-control"
                                value="{{$AccountInfo->date}}" required>
                            <span class="text-danger">
                                @error('bill_quotation_date')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Payment Mode</label>
                            <td>
                                <select name="account_payment_mode" id="account_payment_mode" class="form-control"
                                    onchange="payment_mode(this.value);">
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
                                id="for_cheque_bank_name" placeholder="Bank Name" value="{{$AccountInfo->bank_name}}"
                                pattern="^[a-zA-Z ]*$">
                        </div>
                    </div>

                    <div class="col-md-4" id="for_cheque_no" style="display:none;">
                        <div class="form-group">
                            <label>Cheque No.</label>
                            <input type="text" name="account_cheque_no" class="form-control" id="for_cheque_bank_no"
                                placeholder="Cheque No." value="{{$AccountInfo->cheque_no}}">
                        </div>
                    </div>

                    <div class="col-md-4" id="for_cheque_date" style="display:none;">
                        <div class="form-group">
                            <label>Cheque Date:</label>
                            <input type="date" name="account_cheque_date" id="for_cheque_date_bank" class="form-control"
                                placeholder="Cheque Date" value="{{$AccountInfo->cheque_date}}">
                        </div>
                    </div>

                    <div class="col-md-4" id="for_neft_account_no" style="display:none;">
                        <div class="form-group">
                            <label>Account No.</label>
                            <input type="number" name="account_neft_bank_account_no" id="neft_account_no"
                                class="form-control" placeholder="Account No." value="{{$AccountInfo->account_no}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Remark</label>
                            <input type="text" name="account_customer_remark" placeholder="Remark"
                                value="{{$AccountInfo->remark}}" class="form-control" required>
                            <span class="text-danger">
                                @error('account_customer_remark')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Bill/Quotation Image Upload</label>
                            <input type="file" id="bill_upload" name="bill_image" placeholder=""
                                onchange="check_file_type(this,'bill_upload','shwo_bill_upload','image');" value=""
                                class="form-control" accept=".gif, .jpg, .jpeg, .png">
                            <span class="text-danger">
                                @error('bill_image')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <img id="show_bill_upload" src="{{asset('images/account/'.$AccountInfo->bill_image)}}"
                                width='60px' height='60px'>
                        </div>
                    </div>

                    <div class="col-md-4" style="display:none">
                        <div class="form-group">
                            <label>Roll No./Emp Id</label>
                            <input type="text" name="account_student_or_emp_id" placeholder="Roll No./Emp Id"
                                id="student_roll_no1" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
                    </div>
            </div>

        </div>
    </div>
    <div id="mypdf_view">
        <div>

</section>

@include('common.footer')

<script>
$(document).ready(function() {
    $("#account_amount_type option[value^='{{$AccountInfo->amount_type}}']").attr("selected",
        "selected");

    $("#account_payment_mode option[value^='{{$AccountInfo->payment_mode}}']").attr("selected",
        "selected");

    $("#staff_select1 option[value^='{{$AccountInfo->cust_name}}']").attr("selected",
        "selected");

    $("#student_select1 option[value^='{{$AccountInfo->cust_name}}']").attr("selected",
        "selected");
});
</script>

<script>
$(function() {
    $('.select2').select2()
})
</script>

<!-------------------------------------------checkbox------------------------------------------------ -->

<script>
// $(document).ready(function() {
//     party_select('Other');
// });
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

if ($("input[type='radio'].account_party_type").is(':checked')) {
    var selected_value = $("input[type='radio'].account_party_type:checked").val();

    if (selected_value == 'Student') {

        $('#classDropdown').show();
        $('#student_select').show();
        $('#staff_select').hide();
        $('#staff_designation').hide();
        $('#student_name1').prop("readonly", true);

        $('#student_adress1').prop("readonly", true);
        $('#student_father_contact_no1').prop("readonly", true);
        $('#staff_select1').prop("required", false);
        $('#designation').prop("required", false);
        $('#student_adress').prop("readonly", true);

        $('#student_select1').prop("required", true);
    } else if (selected_value == 'Staff') {

        $('#classDropdown').hide();
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

        $('#classDropdown').hide();
        $('#staff_select').hide();
        $('#student_select').hide();
        $('#staff_designation').hide();
        $('#student_name1').prop("readonly", false)

        $('#designation').prop("required", false);
        $('#student_adress1').prop("readonly", false)
        $('#student_father_contact_no1').prop("readonly", false);
        $('#staff_select1').prop("required", false);
        $('#student_select1').prop("required", false);
    }

}
// -----------------------------------------checkbox------------------------------------------------

function party_select(value) {

    if (value == 'Student') {

        $("#designation").val('');
        $("#user_id").val('');
        $("#address_id").val('');

        $('#classDropdown').show();
        $('#student_select').show();
        $('#staff_select').hide();
        $('#staff_designation').hide();
        $('#student_name1').prop("readonly", true);
        $('#student_adress1').prop("readonly", true);
        $('#student_father_contact_no1').prop("readonly", true);
        $('#staff_select1').prop("required", false);
        $('#student_select1').prop("required", true);
    } else if (value == 'Staff') {

        $('#classDropdown').hide();
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
        $("#user_id").val('');
        $("#address_id").val('');

        $("#student_father_contact_no1").val('');
        $("#student_roll_no1").val('');
        $("#designation").val('');

        $('#classDropdown').hide();
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

<!-- <script>
$(document).ready(function(){
    $("select").change(function(){

        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).show();
               $(".box1").not("." + optionValue).show();
                $("." + optionValue).hide();
            } else{
                $(".box,.box1").hide();
            }
        });
    }).change();
});
</script> -->

<!-- <script>
$(document).ready(function() {
    
// function payment_mode(value) {
    var value = $("#account_payment_mode option[value^='{{$AccountInfo->payment_mode}}']").attr("selected",
        "selected");
    if (value == 'Cheque') {
        $('#neft_bank_name').prop("required", false);
        $('#neft_account_no').prop("required", false);
        $('#for_cheque_date').show();
        $('#for_cheque_no').show();
        $('#for_cheque_name').show();
        $('#for_neft_account_no').hide();
        $('#for_neft_bank_name').hide();
    } else if (value == 'NEFT') {
        $('#for_cheque_bank_name').prop("required", false);
        $('#for_cheque_bank_no').prop("required", false);
        $('#for_cheque_date_bank').prop("required", false);
        $('#for_neft_account_no').show();
        $('#for_neft_bank_name').show();
        $('#for_cheque_date').hide();
        $('#for_cheque_no').hide();
        $('#for_cheque_name').hide();
    } else {
        $('#for_cheque_bank_name').prop("required", false);
        $('#for_cheque_bank_no').prop("required", false);
        $('#for_cheque_date_bank').prop("required", false);
        $('#neft_bank_name').prop("required", false);
        $('#neft_account_no').prop("required", false);
        $('#for_cheque_date').hide();
        $('#for_cheque_no').hide();
        $('#for_cheque_name').hide();
        $('#for_neft_account_no').hide();
        $('#for_neft_bank_name').hide();
    }
});
</script> -->

<script>
function payment_mode(value) {
    if (value == 'Cheque') {
        $('#for_neft_account_no').val('');

        $('#for_cheque_bank_name').prop("required", true);
        $('#neft_account_no').prop("required", false);
        $('#for_cheque_date').show();
        $('#for_cheque_no').show();
        $('#for_cheque_name').show();
        $('#for_neft_account_no').hide();
    } else if (value == 'NEFT') {
        $('#for_cheque_date_bank').val('');
        $('#for_cheque_bank_no').val('');
        $('#for_cheque_bank_name').prop("required", true);
        $('#for_cheque_bank_no').prop("required", false);
        $('#for_cheque_date_bank').prop("required", false);
        $('#for_neft_account_no').show();
        $('#for_cheque_date').hide();
        $('#for_cheque_no').hide();
        $('#for_cheque_name').show();
    } else {
        $('#for_cheque_date_bank').val('');
        $('#for_cheque_bank_no').val('');
        $('#for_cheque_bank_name').val('');
        $('#neft_account_no').val('');

        $('#for_cheque_bank_name').prop("required", false);
        $('#for_cheque_bank_no').prop("required", false);
        $('#for_cheque_date_bank').prop("required", false);
        $('#neft_account_no').prop("required", false);
        $('#for_cheque_date').hide();
        $('#for_cheque_no').hide();
        $('#for_cheque_name').hide();
        $('#for_neft_account_no').hide();
        $('#for_neft_bank_name').hide();
    }
}
</script>


<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
$(document).ready(function() {
    $("#classSelect").change(function() {
        var class_id = $(this).val();
        if (class_id == "") {
            var class_id = 0;
        }

        $.ajax({
            url: '{{ url("/fetch-students-dropdown-expense/") }}/' + class_id,
            type: 'post',
            dataType: 'json',
            success: function(response) {

                $('#student_select1').find('option:not(:first)').remove();
                if (response['students'].length > 0) {
                    $.each(response['students'], function(key, value) {
                        $("#student_select1").append("<option value='" + value[
                                'user_id'] +
                            "'>" +
                            value['user']['name'] + "</option>")
                    });
                }
            }
        });
    });
});
</script>