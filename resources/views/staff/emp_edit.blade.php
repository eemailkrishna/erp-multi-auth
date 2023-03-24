@include('common.header')
@include('common.navbar')

<script>
    function for_teaching(value) {
        if (value == 'Teaching') {
            $('#for_class_prefered').show();
            $('#for_subject_prefered').show();
        } else {
            $('#for_class_prefered').hide();
            $('#emp_class_preferred').val('');
            $('#for_subject_prefered').hide();
            $('#emp_subject_preferred').val('');
        }
    }

    function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var emp_name = document.getElementById("emp_name").value;
        var school_name123 = document.getElementById("school_name123").value;
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
            // 		$('#contact').val('Dear '+emp_name+', Congratulation You Have Become Part of our organisation.');
            $('#contact').val('Dear ' + emp_name +
                ', Congratulation You Have Become Part of our organisation. Regards ' + school_name123 + '[SCHOOL]');
            $('#send_sms').val('Yes');
        } else {
            text.style.display = "none";
            $('#contact').val('');
            $('#send_sms').val('No');
        }
    }

    function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#' + id).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);

        }
    }

    function check_file_type(input, id, id_show, type1) {
        if (type1 == "image") {
            var file = input.files[0];
            if (file.size >= 5 * 1024 * 1024) {
                $('#' + id).val('');
                alert_new("File size must be at most 2MB", 'red');
                return;
            }
            if (!file.type.match("image/*")) {
                $('#' + id).val('');
                alert_new("Please Upload JPG/JPEG/PNG/GIF File", 'red');

                return;
            }
            var fileReader = new FileReader();
            fileReader.onloadend = function(e) {
                var arr = (new Uint8Array(e.target.result)).subarray(0, 4);
                var header = "";
                for (var i = 0; i < arr.length; i++) {
                    header += arr[i].toString(16);
                }
                if (mimeType(header) == 1) {
                    $('#' + id).val('');
                    alert_new("Please Upload JPG/JPEG/PNG/GIF File", 'red');

                }
            };
            fileReader.readAsArrayBuffer(file);
            readURL(input, id_show);
        } else {

            var file = input.files[0];
            if (file.size >= 5 * 1024 * 1024) {
                $('#' + id).val('');
                alert_new("File size must be at most 2MB", 'red');

                return;
            }

            var fileReader = new FileReader();
            fileReader.onloadend = function(e) {
                var arr = (new Uint8Array(e.target.result)).subarray(0, 4);
                var header = "";
                for (var i = 0; i < arr.length; i++) {
                    header += arr[i].toString(16);
                }
                if (mimeType(header) == 1) {
                    $('#' + id).val('');
                    alert_new("Please Upload JPG/JPEG/PNG/GIF/PDF/DOC File", 'red');

                }
            };
            fileReader.readAsArrayBuffer(file);
            readURL(input, id_show);
        }

    }

    function mimeType(headerString) {
        switch (headerString) {
            case "89504e47":
                type = "image/png";
                break;
            case "47494638":
                type = "image/gif";
                break;
            case "ffd8ffe0":
            case "ffd8ffe1":
            case "ffd8ffe2":
                type = "image/jpeg";
                break;
            case "25504446":
                type = "application/pdf";
                break;
            case "d0cf11e0":
                type = "application/doc";
                break;
            default:
                type = "1";
                break;
        }
        return type;
    }

    $("#my_form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        $("#get_content").html(loader_div);
        $.ajax({
            url: access_link + "staff/employee_add_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {


                console.log(detail);
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Complete', 'green');
                    get_content('staff/employee_list');
                }
            }
        });
    });
</script>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Employee Management <small>Control Panel</small></h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
        <li class="active">Add Employee</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
            </div>

            <div class="box-body">
                <form method="POST" enctype="multipart/form-data" action="" id="my_form">
@csrf

                    <div class="box-body ">
                        <h4 style="color:#d9534f;"><b>Personal Detail:</b></h4>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Employee Name<font style="color:red"><b>*</b></font></label>
                                <input type="text" required name="emp_name" id="emp_name"
                                    placeholder="Employee Name" oninput="myFunction();" value="{{ $emp_edit->emp_name }}"
                                    class="form-control">
                            </div>

                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="emp_gender" class="form-control" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Transgender">Transgender</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="emp_dob" placeholder="Date Of Birth" value="{{ $emp_edit->emp_dob }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Husband/Father's Name</label>
                                <input type="text" name="emp_father" placeholder="Husband/Father's Name"
                                    value="{{ $emp_edit->emp_father }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Email Address <font style="color:red"><b>*</b></font></label>
                                <input type="email" name="emp_email" placeholder="Email Address" value="{{ $emp_edit->emp_email}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>SMS Contact No</label>
                                <input type="text" name="emp_mobile" placeholder="SMS Contact No" value="{{ $emp_edit->emp_mobile}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Contact No</label>
                                <input type="text" name="emp_mobile_new" placeholder="Contact No" value="{{ $emp_edit->emp_mobile_new}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="emp_address" placeholder="Address" value="{{ $emp_edit->emp_address}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Employee Qualification</label>
                                <input type="text" name="emp_qualification" placeholder="Employee Qualification"
                                    value="{{ $emp_edit->emp_qualification}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Blood Group</label>
                                <input type="text" name="blood_Group" placeholder="Blood Group" value="{{ $emp_edit->blood_Group}}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Enter Emp Id Prefix Text </label>
                                <input type="text" name="emp_id_prefix" placeholder="Enter Emp Id Prefix text"
                                    value="{{ $emp_edit->emp_id_prefix}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>SSSM ID</label>
                                <input type="text" name="emp_sssm_id" value="{{ $emp_edit->emp_sssm_id}}" class="form-control" />
                            </div>
                        </div>

                        {{-- <div class="col-md-3 " style="display:none;">
                            <div class="form-group">
                                <label>Medium </label>
                                <select type="text" name="emp_medium" placeholder="Medium" class="form-control">
                                    <option value="">Select Medium</option>
                                    <option value='Hindi'>Hindi</option>
                                    <option value='English'>English</option>
                                </select>
                            </div>
                        </div> --}}

                        <div class="col-md-3 " style="display:inline-block;">
                            <div class="form-group">
                                <label>Shift </label>
                                <select name="emp_shift" placeholder="Shift" class="form-control">
                                    <option value="">Select Shift</option>
                                    <option value="shift1">Shift-1</option>
                                    <option value="shift2">Shift-2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-body ">
                        <h4 style="color:#d9534f;"><b>Document Upload:</b></h4>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Employee Photo</label>
                                <input type="file" id="emp_photo" name="emp_photo" placeholder=""
                                    onchange="check_file_type(this,'emp_photo','show_emp_photo','image');"
                                    value="{{ $emp_edit->emp_photo }}" class="form-control" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_emp_photo" src='../school_software_v1_old/images/student_blank.png'
                                    width='60px' height='60px'>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <label>Experience Letter</label>
                                <input type="file" id="emp_experience_latter" name="emp_experience_latter"
                                    placeholder=""
                                    onchange="check_file_type(this,'emp_experience_latter','show_emp_experience_latter','image');"
                                    value="{{ $emp_edit->emp_experience_latter }}" class="form-control" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_emp_experience_latter"
                                    src='../school_software_v1_old/images/student_blank.png' width='60px'
                                    height='60px'>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <label>Qualification Proof</label>
                                <input type="file" id="emp_degree" name="emp_degree"
                                    placeholder="Qualification Proof"
                                    onchange="check_file_type(this,'emp_degree','show_emp_degree','image');"
                                    value="{{ $emp_edit->emp_degree }}" class="form-control" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_emp_degree" src='../school_software_v1_old/images/student_blank.png'
                                    width='60px' height='60px'>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Id Proof</label>
                                <input type="file" id="emp_id_proof" name="emp_id_proof" placeholder="Id Proof"
                                    value="{{ $emp_edit->emp_id_proof}}"
                                    onchange="check_file_type(this,'emp_id_proof','show_emp_id_proof','image');"class="form-control"
                                    accept=".gif, .jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_emp_id_proof" src='../school_software_v1_old/images/student_blank.png'
                                    width='60px' height='60px'>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <label>Other Document 1</label>
                                <input type="file" id="emp_other_document1" name="emp_other_document1"
                                    onchange="check_file_type(this,'emp_other_document1','show_emp_other_document1','all');"
                                    placeholder="Other Document" value="{{ $emp_edit->emp_other_ducument}}" class="form-control"
                                    accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_emp_other_document1"
                                    src='../school_software_v1_old/images/student_blank.png' width='60px'
                                    height='60px'>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <label>Other Document 2</label>
                                <input type="file" id="emp_other_document2" name="emp_other_document2"
                                    placeholder=""
                                    onchange="check_file_type(this,'emp_other_document2','show_emp_other_document2','all');"
                                    value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_emp_other_document2"
                                    src='../school_software_v1_old/images/student_blank.png' width='60px'
                                    height='60px'>
                            </div>
                        </div>
                    </div>




                    <div class="box-body ">
                        <h4 style="color:#d9534f;"><b>Document Details:</b></h4>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Date Of Joining</label>
                                <input type="date" name="emp_doj" placeholder="" value="{{ $emp_edit->emp_doj }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Rfid No.</label>
                                <input type="text" name="emp_rf_id_no" placeholder="Rfid No." value="{{ $emp_edit->emp_rf_id_no}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Categories</label>
                                <select name="emp_categories" class="form-control"
                                    onchange="for_teaching(this.value);">
                                    <option value="Teaching">Teaching</option>
                                    <option value="Non Teaching">Non Teaching</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3 " id="for_class_prefered">
                            <div class="form-group">
                                <label>Teaching class Preferred</label>
                                <input type="text" name="emp_class_preferred" id="emp_class_preferred"
                                    placeholder="Teaching class Preferred" value="{{ $emp_edit->emp_class_preferred}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 " id="for_subject_prefered">
                            <div class="form-group">
                                <label>Teaching Subject Preferred</label>
                                <input type="text" name="emp_subject_preferred" id="emp_subject_preferred"
                                    placeholder="Teaching Subject Preferred" value="{{ $emp_edit->emp_subject_preferred}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Designation</label>
                                <select name="emp_designation" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Director">Director</option>
                                    <option value="Principle">Principal</option>
                                    <option value="Vice Principal">Vice Principal</option>
                                    <option value="Incharge Principal">Incharge Principal</option>
                                    <option value="Head Master">Head Master</option>
                                    <option value="Head Mistress">Head Mistress</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="Librarian">Librarian</option>
                                    <option value="Computer Operator">Computer Operator</option>
                                    <option value="Driver">Driver</option>
                                    <option value="Peon">Peon</option>
                                    <option value="Maid">Maid</option>
                                    <option value="Assistant Teacher">Assistant Teacher</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="box-body ">
                        <h4 style="color:#d9534f;"><b>Salary Details:</b></h4>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Pan Card No.</label>
                                <input type="text" name="emp_pan_card_no" placeholder="Pan Card No."
                                    value="{{ $emp_edit->emp_pan_card_no}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Aadhar No.</label>
                                <input type="text" name="emp_uid_no" placeholder="Aadhar No." value="{{ $emp_edit->emp_uid_no}}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Bank Name </label>
                                <input type="text" name="emp_bank_name" placeholder="Bank Name" value="{{ $emp_edit->emp_bank_name}}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Bank Account No.</label>
                                <input type="text" name="emp_account_no" placeholder="Bank Account No."
                                    value="{{ $emp_edit->emp_account_no}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Bank IFSC Code</label>
                                <input type="text" name="emp_ifsc_code"
                                    onkeyup="this.value = this.value.toUpperCase();" placeholder="Bank IFSC Code"
                                    value="{{ $emp_edit->emp_ifsc_code}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Salary</label>
                                <input type="number" name="emp_basic_salary" placeholder="Salary" min="0"
                                    value="{{ $emp_edit->emp_basic_salary}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Other Wages </label>
                                <input type="number" name="emp_other_wages" placeholder="Other Wages"
                                    min="0" value="{{ $emp_edit->emp_other_wages}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>PF No.</label>
                                <input type="text" name="emp_pf_number" placeholder="PF Number" value="{{ $emp_edit->emp_pf_number}}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>PF Amount Monthly</label>
                                <input type="number" name="pf_deduction" value="{{ $emp_edit->pf_deduction}}" class="form-control"
                                    min="0">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>TDS Amount Monthly</label>
                                <input type="number" name="tds_deduction" value="{{ $emp_edit->tds_deduction}}" class="form-control" min="0">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>ESIC Amount Monthly</label>
                                <input type="number" name="esic_deduction" class="form-control" value="{{ $emp_edit->esic_deduction}}" min="0">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Professional TAX Amount Monthly</label>
                                <input type="number" name="ptax_deduction" value="{{ $emp_edit->ptax_deduction }}" class="form-control" min="0">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>HRA Amount Monthly</label>
                                <input type="number" name="hra_amount" min="0" value="{{ $emp_edit->hra_amount }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>DA Amount Monthly</label>
                                <input type="number" name="da_amount" value="{{ $emp_edit->da_amount}}" class="form-control"
                                    min="0">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Allowances Monthly</label>
                                <input type="number" name="emp_allowance" value="{{ $emp_edit->emp_allowance}}" class="form-control"
                                    min="0">
                            </div>
                        </div>



                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Remark</label>
                                <input type="text" name="remarks" placeholder="Remark" value="{{ $emp_edit->remarks }}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="box-body ">
                        <h4 style="color:#d9534f;"><b>Leave Details:</b></h4>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Casual Leave</label>
                                <input type="number" name="emp_leave_cl" placeholder="Casual Leave" value="{{ $emp_edit->emp_leave_cl}}"
                                    class="form-control" min="0">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Pay/Earn Leave</label>
                                <input type="number" name="emp_earn_leave_pl" min="0"
                                    placeholder="Pay/Earn Leave" value="{{ $emp_edit->emp_earn_leave_pl }}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Sick Leave</label>
                                <input type="number" name="emp_leave_sl" placeholder="Sick Leave" value="{{ $emp_edit->emp_leave_sl}}"
                                    class="form-control" min="0">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Other Leave</label>
                                <input type="number" name="emp_leave_other" placeholder="Other Leave"
                                    value="{{ $emp_edit->emp_leave_other}}" class="form-control" min="0">
                            </div>
                        </div>


                    </div>

                    <div class="box-body ">






                        {{-- <div class="col-md-3" style="display:none;">
                            <div class="form-group">
                                <label>School_name<font style="color:red"><b>*</b></font></label>
                                <input type="text" name="school_name123" id="school_name123"
                                    value="SIMPTION TECH PVT LTD" class="form-control new_student">
                            </div>
                        </div> --}}
                        <h4 style="color:#d9534f;"><b>Message Details:</b></h4>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                &nbsp;
                            </div>
                        </div>
                        <div class="col-md-3" style="display:inline-block;">
                            <div class="form-group">
                                <label>School_name<font style="color:red"><b>*</b></font></label>
                                <input type="text" name="school_name" id="school_name123"
                                    value="{{ $emp_edit->school_name }}" class="form-control new_student">
                            </div>
                        </div>

                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label><input type="checkbox" name="myCheck" id="myCheck"
                                        onclick="myFunction();">&nbsp;&nbsp;&nbsp;Check For Message</label>
                                <div class="form-group" id="text" style="display:none">

                                    <input type="text" name="sms" placeholder="" id="contact"
                                        class="form-control">
                                    <input type="hidden" name="send_sms" placeholder="" id="send_sms"
                                        class="form-control">

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Update" class="btn btn-success" />
                        </center>
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')
