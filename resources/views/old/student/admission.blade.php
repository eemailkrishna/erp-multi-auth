@include('common.header')
@include('common.navbar')
<script>
    function same_address_function() {
        if ($("#same_address_checkbox").is(":checked")) {
            $("#student_city_permanent").val($("#student_city").val());
            $("#student_address_permanent").val($("#student_adress").val());
            $("#student_block_permanent").val($("#student_block").val());
            $("#student_state_permanent").val($("#student_state").val());
            $("#student_pincode_permanent").val($("#student_pincode").val());
            $("#student_district_permanent").val($("#student_district").val());
        } else {
            $("#student_city_permanent").val('');
            $("#student_address_permanent").val('');
            $("#student_block_permanent").val('');
            $("#student_state_permanent").val('');
            $("#student_pincode_permanent").val('');
            $("#student_district_permanent").val('');
        }
    }
</script>


<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <!-- /.box-header -->
            <div>
                @if (session()->has('student'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        {{ session()->get('student') }}
                    </div>
                @endif
            </div>
            <h3 style="color: #d9534f"><b>Pesonal Detail:</b></h3>
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
                <form name="myForm" method="post" id="my_form" enctype="multipart/form-data" action=""
                    onsubmit="return validate();">
                    @csrf
                    {{-- personal Details --}}
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="hidden" name="student_id_generate" id="student_id_generate" value="1087"
                                class="form-control ">
                            <label>student Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="student_name" id="student_name" required
                                placeholder="student Name" value="{{$students->name}}" class="form-control new_student" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Name</label>
                            <input type="text" name="student_father_name" id="student_father_name"
                                placeholder="Father's Name" value="<?php echo $students->student->father_name?>" class="form-control new_student" readonly>

                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Qualification</label>
                            <input type="text" name="student_father_Qualification" id="student_father_name"
                                placeholder="Father's Qualification" value="" class="form-control new_student">

                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Mother's Name</label>
                            <input type="text" name="student_mother_name" id="student_mother_name"
                                placeholder="Mother's Name" value="{{$students->student->mother_name}}" class="form-control new_student" readonly>

                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Mother Qualification</label>
                            <input type="text" name="student_Mother_Qualification" id="student_Mother Qualification"
                                placeholder="Mother Qualification" value="" class="form-control new_student">

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Gender</label><br>
                            <select class="form-control new_student" name="student_gender" readonly>
                                <option  value="{{$students->gender}}">{{$students->gender}}</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Handicapped</label>
                            <select class="form-control" name="Handicapped">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Child With Special Need</label>
                            <select class="form-control" name="Child_With_Special_Need">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Religion</label>
                            <select class="form-control" name="student_religion">
                                <option value="Hindu">Hindu</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Sikh">Sikh</option>
                                <option value="Christian">Christian</option>
                                <option value="Jain">Jain</option>
                                <option value="Buddh">Buddh</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="student_category">
                                <option value="General">General</option>
                                <option value="OBC">OBC</option>
                                <option value="Sikh">Sikh</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Add RF Id Number<font style="color:red"><b>*</b></font></label>
                            <input type="text"name="student_Add_RF_Id_Number" placeholder="Add RF Id Number"
                                value="" id="student_Add RF Id Number" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Birth<font style="color:red"><b>*</b></font></label>
                            <input type="date" name="student_date_of_birth" placeholder=""
                                oninput="get_dob_in_words(this.value);" id="student_date_of_birth" value="{{$students->dob}}" readonly
                                class="form-control new_student" required>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>student_cast<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="student_cast" placeholder="student_cast"
                                oninput="get_dob_in_words(this.value);" id="student_cast" value=""
                                class="form-control new_student" required>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Birth(word)<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="student_Date_Of_Birth_word"
                                placeholder="Date Of Birth(word)" oninput="get_dob_in_words(this.value);"
                                id="student_Date Of Birth(word)" value="" class="form-control new_student"
                                required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>House Name</label>
                            <input type="text" name="student_House_Name" placeholder="House Name" value=""
                                id="student_House Name" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Blood Group</label>
                            <input type="text" name="student_Blood_Group" placeholder="Blood Group"
                                value="" id="student_Blood Group" class="form-control new_student">
                        </div>
                    </div>

                    {{-- Document Details --}}

                    <div class="col-md-12">
                        <h3 style="color: #d9534f"><b>Document Details:</b></h3>

                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Aadhar Card (Student)</label>
                            <input type="text" id="student_Aadhar Card (Student)"
                                name="student_Aadhar_Card_Student" value="" class="form-control"
                                placeholder="Aadhar Card (Student)">
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Aadhar Card (Father)</label>
                            <input type="text" id="student_Aadhar Card (Father)"
                                name="student_Aadhar_Card_Father" value="" class="form-control"
                                placeholder="Aadhar Card (Father)">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>SSSM Id No.</label>
                            <input type="text" name="SSSM_Id_No." placeholder="SSSM Id No." class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Family Id</label>
                            <input type="text" name="Family_Id" placeholder="Family Id" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Child Id</label>
                            <input type="text" name="Child_Id" placeholder="Child Id" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Registration No</label>
                            <input type="text" name="Registration No" value="{{$students->student->roll_no}}" placeholder="Registration No"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Enrollment No</label>
                            <input type="text" name="Enrollment_No" placeholder="Enrollment  No"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Bank Name (Father)</label>
                            <input type="text" name="Bank_Name_Father" placeholder="Bank Name (Father)"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Account Number (Father)</label>
                            <input type="number" name="Account_Number_Father"
                                placeholder="Account Number (Father)" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Bank IFSC Code (Father)</label>
                            <input type="text" name="Bank_IFSC_Code_Father"
                                placeholder="Bank IFSC Code (Father)" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Bank Name (Student)</label>
                            <input type="text" name="Bank_Name_Student" placeholder="Bank Name (Student)"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Account Number (Student)</label>
                            <input type="text" name="Account_Number_Student"
                                placeholder="Account Number (Student)" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Bank IFSC Code (Student)</label>
                            <input type="text" name="Bank_IFSC_Code_Student"
                                placeholder="Bank IFSC Code (Student)" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Annual Income</label>
                            <input type="text" name="Annual_Income" placeholder="Annual Income"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Cast certificate No</label>
                            <input type="text" name="Cast_certificate_No" placeholder="Cast certificate No"
                                class="form-control">
                        </div>
                    </div>

                    {{-- Admission  Details --}}

                    <div class="col-md-12 ">
                        <h3 style="color: #d9534f"><b>Admission Details:</b></h3>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Admission Type</label>
                            <select class="form-control" name="student_admission_type"  readonly id="student_admission_type">
                                <option value="{{$students->student->admission_type}}">{{$students->student->admission_type}}</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Admission Scheme</label>
                            <select class="form-control" name="student_admission_scheme" readonly>
                                <option value="{{$students->student->admission_scheme}}">{{$students->student->admission_scheme}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Student New Old</label>
                            <select class="form-control" name="student_old_or_new"  readonly>
                                <option value="{{$students->student->stu_new_old}}">{{$students->student->stu_new_old}}</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Admission Class<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="Student_Admission_Class" id="student_class" readonly
                                onchange="for_stream(this.value);get_group_subject();" required>
                                <option value="{{$students->student->class_id}}">{{$students->student->class_name}}</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Date Of Admission</label>
                            <input type="date" name="Date Of Admission" id="student_class_group_subject"
                            value="{{$students->student->doa}}" readonly class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Admission No</label>
                            <input type="text" name="student_Admission_No" id="student_class_group_subject"
                                placeholder="Admission No" value="" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Scholar No</label>
                            <input type="text" name="student_Scholar_No" id="student_class_group_subject"
                                placeholder="Scholar No" value="" class="form-control new_student">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Previous Class<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="Student_Previous_Class" id="student_class"
                                onchange="for_stream(this.value);get_group_subject();" required>
                                <option value="">Select Class</option>
                                <option value="none">none</option>
                                <option value="NURSERY">NURSERY</option>
                                <option value="1">LKG</option>
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
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Previous School Name</label>
                            <input type="text" name="student_Previous_School_Name"
                                id="student_class_group_subject" placeholder="Previous School Name" value=""
                                class="form-control new_student">
                        </div>
                    </div>

                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Previous School Tc No.</label>
                            <input type="text" name="student_Previous_School_Tc_No."
                                id="student_class_group_subject" placeholder="Previous School Tc No." value=""
                                class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Previous School Tc Date.</label>
                            <input type="date" name="student_Previous_School_Tc_Date."
                                id="student_class_group_subject" placeholder="Previous School Tc Date."
                                value="" class="form-control new_student">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Section</label>
                            <select class="form-control" name="student_section">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Admission Remark</label>
                            <input type="text" name="student_Admission_Remark" id="student_class_group_subject"
                                placeholder="Admission Remark" value="" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Fee Category</label>
                            <select class="form-control" name="student_shift" readonly>
                                <option value="{{$students->student->fee_category}}">{{$students->student->fee_category}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bus</label>
                            <select class="form-control" raedonly name="student_shift">
                                <option value="{{$students->student->bus}}">{{$students->student->bus}}</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Bus Fee Category</label>
                            <input type="text" name="student_Bus_Fee_Category" id="student_class_group_subject"
                                placeholder="Bus Fee Category" value="" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Bus Route</label>
                            <input type="text" name="student_Bus_Route" id="student_class_group_subject"
                                placeholder="Bus Route" value="" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3" id="student_class_group_subject_div">
                        <div class="form-group">
                            <label>Student Bus Fees</label>
                            <input type="text" name="Student_Bus_Fees" id="student_class_group_subject"
                                placeholder="Student Bus Fees" value="" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Hostel</label>
                            <select class="form-control" readonly name="student_Hostel">
                                <option value="{{$students->student->hostel}}">{{$students->student->hostel}}</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Boarding</label>
                            <select class="form-control" name="student_Boarding">
                                <option value="Non Boarding">Non Boarding</option>
                                <option value="Day Boarding">Day Boarding</option>
                                <option value="Boarding">Boarding</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Library</label>
                            <select class="form-control" readonly name="student_Library">
                                <option value="{{$students->student->library}}">{{$students->student->library}}</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Registration Fees</label>
                            <input type="text" name="student_registration_fee" readonly placeholder="Registration Fees"
                                value="{{$students->student->registration_fee}}" class="form-control">
                        </div>
                    </div>
                    {{-- Family Contacts --}}
                    <div class="col-md-12">
                        <h3 style="color: #d9534f"><b>Family Contacts:</b></h3>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Father Contact No.</label>
                            <input type="text" name="student_Father Contact No." placeholder="Father Contact No."
                                value="{{$students->student->father_contact}}" readonly class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Father Contact No2.</label>
                            <input type="text" name="student_Father Contact No2."
                                placeholder="Father Contact No2." value="{{$students->student->father_contact1}}" readonly class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Father Email Id</label>
                            <input type="email" name="student_Father_Email_Id" placeholder="Father Email Id"
                                value="{{$students->email}}" readonly class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Mother Contact No</label>
                            <input type="email" name="_"
                                placeholder="Father Mother Contact No" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Mother Email Id</label>
                            <input type="email" name="student_Mother_Email_Id" placeholder="Father Mother Email Id"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Father Occupation</label>
                            <input type="text" name="student_Father_Occupation" placeholder="Father Occupation"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Mother Occupation</label>
                            <input type="text" name="student_Mother_Occupation" placeholder="Mother Occupation"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Guardian Name 1</label>
                            <input type="text" name="student_Guardian_Name" placeholder="Guardian Name"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Guardian Name 2</label>
                            <input type="text" name="student_Guardian_Name2" placeholder="Guardian Name 2"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Guardian Contact Number</label>
                            <input type="text" name="student_Guardian Contact Number"
                                placeholder="Guardian Guardian Contact Number" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Guardian Email Id</label>
                            <input type="email" name="student_Guardian Email Id" placeholder="Guardian Email Id"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Guardian Occupation</label>
                            <input type="text" name="student_Guardian Occupation"
                                placeholder="Guardian Occupation" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Student Contact Number</label>
                            <input type="text" name="Student Contact Number" placeholder="Student Contact Number"
                                value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>SMS Contact Number</label>
                            <input type="text" name="SMS Contact Number" readonly placeholder="SMS Contact Number"
                                value="{{$students->student->sms_contact}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>SMS Facility</label>
                            <select class="form-control" name="SMS Facility">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Student Conveyance</label>
                            <select class="form-control" name="Student Conveyance">
                                <option value="With Parent">With Parent</option>
                                <option value="By Bus">By Bus</option>
                                <option value="With Guardian">With Guardian</option>
                                <option value="On Foot">On Foot</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Student Email Id</label>
                            <input type="text" name="Student Email Id" placeholder="Student Email Id"
                                value="" class="form-control">
                        </div>
                    </div>

                    {{-- address students --}}
                    <div class="box-body ">
                        <div class="col-md-12">
                            <h3 style="color:#d9534f;"><b>Address Details:</b></h3>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Student Address</label>
                                    <input type="text" name="student_adress" id="student_adress" value="{{$students->student->stu_add}}" readonly
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Village/City</label>
                                    <input type="text" name="student_city" id="student_city" value="{{$students->student->village_city}}" readonly
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Block</label>
                                    <input type="text" name="student_block" id="student_block" value="{{$students->student->block}}" readonly
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>District</label>
                                    <input type="text" name="student_district" id="student_district"
                                        value="{{$students->student->district}}" readonly class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="student_state" id="student_state" value="{{$students->student->state}}" readonly
                                        class="form-control">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" name="student_pincode" id="student_pincode" value="{{$students->student->pincode}}" readonly
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Landmark</label>
                                    <input type="text" name="student_landmark" id="student_landmark"
                                        value="{{$students->student->landmark}}" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Landmark</label>
                                    <input type="text" name="student_landmark" id="student_landmark"
                                        value="{{$students->student->landmark}}" readonly class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <label style="color:red">For Same</label>
                            <input type="checkbox" id="same_address_checkbox" onclick="same_address_function();">
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Student Address Permanent</label>
                                    <input type="text" name="student_address_permanent"
                                        id="student_address_permanent" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Village/City Permanent</label>
                                    <input type="text" name="student_city_permanent" id="student_city_permanent"
                                        value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Block Permanent</label>
                                    <input type="text" name="student_block_permanent" id="student_block_permanent"
                                        value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>District Permanent</label>
                                    <input type="text" name="student_district_permanent"
                                        id="student_district_permanent" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>State Permanent</label>
                                    <input type="text" name="student_state_permanent" id="student_state_permanent"
                                        value="" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pincode Permanent</label>
                                    <input type="text" name="student_pincode_permanent"
                                        id="student_pincode_permanent" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            {{-- Document Upload --}}
            <div class="box-body ">
                <h3 style="color:#d9534f;"><b>Document Uploads:</b></h3>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Student Photo</label>
                        <input type="file" id="student_image" name="student_image"
                            onchange="check_file_type(this,'student_image','show_student_photo','image');"
                            value="{{$students->profile_pic}}" readonly class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_image','2201133');"
                            src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/18678481_simption desktop wallpape1 - UPDATED.jpg"
                            id="show_student_photo" height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        <label>Father Photo</label>
                        <input type="file" id="student_father_image" name="student_father_image"
                            onchange="check_file_type(this,'student_father_image','show_father_photo','image');"
                            value="" readonly class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_father_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png" id="show_father_photo"
                            height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        <label>Mother Photo</label>
                        <input type="file" id="student_mother_image" name="student_mother_image"
                            onchange="check_file_type(this,'student_mother_image','show_mother_photo','image');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_mother_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png" id="show_mother_photo"
                            height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Guardian Photo</label>
                        <input type="file" id="student_guardian_image" name="student_guardian_image"
                            value=""
                            onchange="check_file_type(this,'student_guardian_image','show_guardian_photo','image');"
                            class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_guardian_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png" id="show_guardian_photo"
                            height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        <label>Last Passed Marksheet</label>
                        <input type="file" id="student_last_marksheet_image" name="student_last_marksheet_image"
                            onchange="check_file_type(this,'student_last_marksheet_image','show_student_last_marksheet','all');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_last_marksheet_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png" id="show_student_last_marksheet"
                            height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        <label>Transfer Certificate</label>
                        <input type="file" id="student_tc_image" name="student_tc_image"
                            onchange="check_file_type(this,'student_tc_image','show_student_tc','all');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_tc_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png" id="show_student_tc"
                            height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Income Certificate</label>
                        <input type="file" id="student_income_certificate_image"
                            name="student_income_certificate_image"
                            onchange="check_file_type(this,'student_income_certificate_image','show_student_income_certificate','all');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_income_certificate_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png"
                            id="show_student_income_certificate" height="50" width="50"
                            style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        <label>Caste of Certificate</label>
                        <input type="file" id="student_cast_certificate_image"
                            name="student_cast_certificate_image"
                            onchange="check_file_type(this,'student_cast_certificate_image','show_student_cast_certificate','all');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_cast_certificate_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png"
                            id="show_student_cast_certificate" height="50" width="50"
                            style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        <label>DOB Certificate</label>
                        <input type="file" id="student_dob_image" name="student_dob_image"
                            onchange="check_file_type(this,'student_dob_image','show_student_dob','all');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_dob_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png" id="show_student_dob"
                            height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        <label>Adhar Card</label>
                        <input type="file" id="student_adhar_card_image" name="student_adhar_card_image"
                            onchange="check_file_type(this,'student_adhar_card_image','show_adhar_photo','image');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>

                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_adhar_card_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png" id="show_adhar_photo"
                            height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>

                <div class="col-md-2 ">
                    <div class="form-group">
                        <label>SSSMID Certificate</label>
                        <input type="file" id="student_sssmid_image" name="student_sssmid_image"
                            onchange="check_file_type(this,'student_sssmid_image','show_sssmid_photo','image');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>

                <div class="col-md-1">
                    <div class="form-group">
                        <img onclick="open_file1('student_sssmid_image','2201133');"
                            src="../school_software_v1_old/images/student_blank.png" id="show_adhar_photo"
                            height="50" width="50" style="margin-top:10px;">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">

                        <input type="text" id="student_sssmid_image" name="user_id"
                            onchange="check_file_type(this,'student_sssmid_image','show_sssmid_photo','image');"
                            value="" class="form-control" accept=".gif, .jpg, .jpeg, .png" style="display: none">
                    </div>
                </div>



                <div id="mypdf_view">
                </div>
                <div class="col-md-12">
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Remark 1</label>
                            <input type="text" name="student_remark_1" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Remark 2</label>
                            <input type="text" name="student_remark_2" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Remark 3</label>
                            <input type="text" name="student_remark_3" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Remark 4</label>
                            <input type="text" name="student_remark_4" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12 ">




                        <input type="hidden" name="sms_school_name" id="sms_school_name"
                            value="SIMPTION TECH PVT LTD" class="form-control">
                        <div class="col-md-8 ">
                            <label><input type="checkbox" name="myCheck" id="myCheck"
                                    onclick="myFunction();">&nbsp;&nbsp;&nbsp;Check For Message</label>
                            <div class="form-group" id="div_sms_content" style="display:none">
                                <input type="text" name="sms_content" id="sms_content"
                                    value="Dear Parents, Thanks for choosing us for a bright future of testz Regards - SIMPTION TECH PVT LTD[SCHOOL]"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <br>
                <div class="box-body col-md-12">
                    <div class="col-md-6">
                        <input type="submit" style="float:right;" name="finish" value="Submit"
                            class="btn btn-success">
                    </div>
                </div>
            </div>
            </form>
        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
        </form>
    </div>
    </div>
</section>

<!---------------------------------------------Model window start --------------------------------------------------------->

@include('common.footer');
<script>
    $(function() {
        $('.select2').select2()
    })
</script>
