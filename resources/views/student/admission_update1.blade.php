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
                <form name="myForm" method="post" id="my_form" enctype="multipart/form-data"
                    action="{{ url('/student/admission_update1') }}" onsubmit="return validate();">
                    @csrf
                    {{-- personal Details --}}
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="hidden" name="student_id_generate" id="student_id_generate" value="1087"
                                class="form-control ">
                            <label>student Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="student_name" id="student_name" required
                                placeholder="student Name" value="{{ $students->name }}"
                                class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Name</label>
                            <input type="text" name="student_father_name" id="student_father_name"
                                placeholder="Father's Name" value="<?php echo $students->student->father_name; ?>"
                                class="form-control new_student">

                        </div>
                    </div>



                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Qualification</label>
                            <input type="text" name="student_father_Qualification" id="student_father_name11111"
                                placeholder="Father's Qualification" value="<?php echo $students->admission->father_qualification; ?>"
                                class="form-control new_student">

                        </div>
                    </div>


                   <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Mother's Name</label>
                            <input type="text" name="student_mother_name" id="student_mother_name"
                                placeholder="Mother's Name" value="{{ $students->student->mother_name }}"
                                class="form-control new_student">
                        </div>
                    </div>
            </div>


            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Mother Qualification</label>
                    <input type="text" name="student_Mother_Qualification" id="student_Mother Qualification"
                        placeholder="Mother Qualification" value="{{$students->admission->mother_qualification}}"
                        class="form-control new_student">

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Gender</label><br>
                    <select class="form-control new_student" name="student_gender">
                        <option value="{{ $students->gender }}">{{ $students->gender }}</option>
                    </select>

                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Handicapped</label>
                    <select class="form-control" name="Handicapped">
                        <option value="{{ $students->admission->handicapped }}">{{ $students->admission->handicapped }}</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Child With Special Need</label>
                    <select class="form-control" name="Child_With_Special_Need">
                        <option value="{{ $students->student->child_wiht_spe_need }}">{{$students->student->child_wiht_spe_need}}</option>
            
                    </select>
                </div>
            </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Description for Child With Special Need</label>
                            <input type="text" name="Child_With_Special_Need_des" id="student_Mother Qualification"
                                placeholder="Description" value="{{ $students->student->stu_cwsn_des }}" class="form-control new_student">

                        </div>
                    </div>
              
            <div class="col-md-3">
                <div class="form-group">
                    <label>Religion</label>
                    <select class="form-control" name="student_religion">
                        <option value="{{ $students->admission->regligion }}">{{ $students->admission->regligion }}</option>
                       
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="student_category">
                        <option value="{{ $students->admission->category }}">{{ $students->admission->category }}</option>
                        
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Add RF Id Number<font style="color:red"><b>*</b></font></label>
                    <input type="text"name="student_Add_RF_Id_Number" placeholder="Add RF Id Number"
                        value="{{ $students->admission->add_rf_id_no }}" id="student_Add RF Id Number" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Date Of Birth<font style="color:red"><b>*</b></font></label>
                    <input type="date" name="student_date_of_birth" placeholder=""
                        oninput="get_dob_in_words(this.value);" id="student_date_of_birth"
                        value="{{ $students->dob }}" class="form-control new_student" required>

                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>student_cast<font style="color:red"><b>*</b></font></label>
                    <input type="text" name="student_cast" placeholder="student_cast"
                        oninput="get_dob_in_words(this.value);" id="student_cast" value="{{ $students->admission->stu_cast }}"
                        class="form-control new_student" required>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Date Of Birth(word)<font style="color:red"><b>*</b></font></label>
                    <input type="text" name="student_Date_Of_Birth_word" placeholder="Date Of Birth(word)"
                        oninput="get_dob_in_words(this.value);" id="student_Date Of Birth(word)" value="{{ $students->admission->dob_in_word }}"
                        class="form-control new_student" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>House Name</label>
                    <input type="text" name="student_House_Name" placeholder="House Name" value="{{ $students->admission->house_name }}"
                        id="student_House Name" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Blood Group</label>
                    <input type="text" name="student_Blood_Group" placeholder="Blood Group" value="{{ $students->admission->blood_group }}"
                        id="student_Blood Group" class="form-control new_student">
                </div>
            </div> 

            {{-- Document Details --}}

            <div class="col-md-12">
                <h3 style="color: #d9534f"><b>Document Details:</b></h3>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Aadhar Card (Student)</label>
                    <input type="text" id="student_Aadhar Card (Student)" name="student_Aadhar_Card_Student"
                        value="{{ $students->admission->adhaar_card_no_stu }}" class="form-control" placeholder="Aadhar Card (Student)">
                </div>
            </div>


             <div class="col-md-3">
                <div class="form-group">
                    <label>Aadhar Card (Father)</label>
                    <input type="text" id="student_Aadhar Card (Father)" name="student_Aadhar_Card_Father"
                        value="{{ $students->admission->father_adhr_no }}" class="form-control" placeholder="Aadhar Card (Father)">
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="form-group">
                    <label>SSSM Id No.</label>
                    <input type="text" name="SSSM_Id_No." value="{{ $students->admission->sssm_idno }}" placeholder="SSSM Id No." class="form-control">
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Family Id</label>
                    <input type="text" name="Family_Id" value="{{ $students->admission->family_id }}" placeholder="Family Id" class="form-control">
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Child Id</label>
                    <input type="text" name="Child_Id" value="{{ $students->admission->child_id }}" placeholder="Child Id" class="form-control">
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Registration No</label>
                    <input type="text" name="student_registration_number" value="{{ $students->student->roll_no }}"
                        placeholder="Registration No" class="form-control">
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Enrollment No</label>
                    <input type="text" name="Enrollment_No" value="{{ $students->admission->enrollment_no }}" placeholder="Enrollment  No" class="form-control">
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Bank Name (Father)</label>
                    <input type="text" name="Bank_Name_Father" value="{{ $students->admission->bank_name_father }}" placeholder="Bank Name (Father)"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Account Number (Father)</label>
                    <input type="number" name="Account_Number_Father" value="{{ $students->admission->acc_no_father }}" placeholder="Account Number (Father)"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Bank IFSC Code (Father)</label>
                    <input type="text" name="Bank_IFSC_Code_Father" value="{{ $students->admission->bank_ifsc_code_father }}" placeholder="Bank IFSC Code (Father)"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Bank Name (Student)</label>
                    <input type="text" name="Bank_Name_Student" value="{{ $students->admission->bank_name_student }}" placeholder="Bank Name (Student)"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Account Number (Student)</label>
                    <input type="text" name="Account_Number_Student" value="{{ $students->admission->acc_no_student }}" placeholder="Account Number (Student)"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Bank IFSC Code (Student)</label>
                    <input type="text" name="Bank_IFSC_Code_Student" value="{{ $students->admission->bank_ifsc_code_student }}" placeholder="Bank IFSC Code (Student)"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Annual Income</label>
                    <input type="text" name="Annual_Income" value="{{ $students->admission->annual_income }}" placeholder="Annual Income" class="form-control">
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Cast certificate No</label>
                    <input type="text" name="Cast_certificate_No" value="{{ $students->admission->cast_cer_no }}" placeholder="Cast certificate No"
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
                    <select class="form-control" name="student_admission_type" id="student_admission_type">
                        <option value="{{ $students->student->admission_type }}">
                            {{ $students->student->admission_type }}</option>

                    </select>
                </div>
            </div>
          <div class="col-md-3">
                <div class="form-group">
                    <label>Admission Scheme</label>
                    <select class="form-control" name="student_admission_scheme">
                        <option value="{{ $students->student->admission_scheme }}">
                            {{ $students->student->admission_scheme }}</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Student New Old</label>
                    <select class="form-control" name="student_old_or_new">
                        <option value="{{ $students->student->stu_new_old }}">
                            {{ $students->student->stu_new_old }}</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 ">
                <div class="form-group">
                    <label>Student Admission Class</label>
                    <select class="form-control" name="Student_Admission_Class" id="student_class"
                        onchange="for_stream(this.value);get_group_subject();" required>
                        <option value="{{ $students->student->class}}">{{ $students->student->class }}
                        </option>

                    </select>
                </div>
            </div>

            <div class="col-md-3 " id="student_class_stream_div">
                <div class="form-group">
                    <label>Stream</label>
                    <select class="form-control" name="stream" id="student_class_stream"
                        onchange="get_group(this.value);get_group_subject();">
                        <option value="{{ $students->student->stream }}">{{ $students->student->stream }}</option>
                    </select>

                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Date Of Admission</label>
                    <input type="date" name="Date Of Admission" id="student_class_group_subject"
                        value="{{ $students->student->doa }}" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Admission No</label>
                    <input type="text" name="student_Admission_No" id="student_class_group_subject"
                        placeholder="Admission No" value="{{ $students->admission->admission_no }}" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Scholar No</label>
                    <input type="text" name="student_Scholar_No" id="student_class_group_subject"
                        placeholder="Scholar No" value="{{ $students->admission->scholar_no }}" class="form-control new_student">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Previous Class<font style="color:red"><b>*</b></font></label>
                    <select class="form-control" name="Student_Previous_Class" id="student_class"
                        onchange="for_stream(this.value);get_group_subject();" required>
                        <option value="{{ $students->admission->previous_class }}">{{ $students->admission->previous_class }}</option>
                        
                    </select>
                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Previous School Name</label>
                    <input type="text" name="student_Previous_School_Name" id="student_class_group_subject"
                        placeholder="Previous School Name" value="{{ $students->admission->previ_sch_name }}" class="form-control new_student">
                </div>
            </div>

            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Previous School Tc No.</label>
                    <input type="text" name="previ_sch_tc_no" id="student_class_group_subject"
                        placeholder="Previous School Tc No." value="{{ $students->admission->previ_sch_tc_no }}" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Previous School Tc Date.</label>
                    <input type="date" name="student_Previous_School_Tc_Date" id="student_class_group_subject"
                        placeholder="Previous School Tc Date." value="{{ $students->admission->previ_sch_tc_date }}" class="form-control new_student">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Section</label>
                    <select class="form-control" name="student_section">
                        <option value="{{ $students->admission->section }}">{{ $students->admission->section }}</option>
                        
                    </select>
                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Admission Remark</label>
                    <input type="text" name="student_Admission_Remark" id="student_class_group_subject"
                        placeholder="Admission Remark" value="{{ $students->admission->admission_remark }}" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Fee Category</label>
                    <select class="form-control" name="student_shift">
                        <option value="{{ $students->student->fee_category }}">
                            {{ $students->student->fee_category }}</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Bus</label>
                    <select class="form-control" name="student_shift">
                        <option value="{{ $students->student->bus }}">{{ $students->student->bus }}</option>

                    </select>
                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Bus Fee Category</label>
                    <input type="text" name="student_Bus_Fee_Category" id="student_class_group_subject"
                        placeholder="Bus Fee Category" value="{{ $students->admission->bus_fee_category }}" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Bus Route</label>
                    <input type="text" name="student_Bus_Route" id="student_class_group_subject"
                        placeholder="Bus Route" value="{{ $students->admission->bus_route }}" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3" id="student_class_group_subject_div">
                <div class="form-group">
                    <label>Student Bus Fees</label>
                    <input type="text" name="Student_Bus_Fees" id="student_class_group_subject"
                        placeholder="Student Bus Fees" value="{{ $students->admission->stu_bus_fee }}" class="form-control new_student">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Hostel</label>
                    <select class="form-control" name="student_Hostel">
                        <option value="{{ $students->student->hostel }}">{{ $students->student->hostel }}
                        </option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Boarding</label>
                    <select class="form-control" name="student_Boarding">
                        <option value="{{ $students->admission->boarding }}">{{ $students->admission->boarding }}</option>
                    
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Library</label>
                    <select class="form-control" name="student_Library">
                        <option value="{{ $students->student->library }}">{{ $students->student->library }}
                        </option>

                    </select>
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Registration Fees</label>
                    <input type="text" name="student_registration_fee" placeholder="Registration Fees"
                        value="{{ $students->student->registration_fee }}" class="form-control">
                </div>
            </div> 
            {{-- Family Contacts --}}
            <div class="col-md-12">
                <h3 style="color: #d9534f"><b>Family Contacts:</b></h3>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Father Contact No.</label>
                    <input type="text" name="father_contact" placeholder="Father Contact No."
                        value="{{ $students->student->father_contact }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Father Contact No2.</label>
                    <input type="text" name="student_Father Contact No2." placeholder="Father Contact No2."
                        value="{{ $students->father_contact1 }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Father Email Id</label>
                    <input type="email" name="student_Father_Email_Id" placeholder="Father Email Id"
                        value="{{ $students->admission->fath_email_id }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Mother Contact No</label>
                    <input type="text" name="student_Mother_Contact_No" placeholder="Mother Contact No" value="{{ $students->admission->mother_cont_no }}"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Mother Email Id</label>
                    <input type="email" name="student_Mother_Email_Id" placeholder="Mother Email Id"
                        value="{{ $students->admission->moth_email_id }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Father Occupation</label>
                    <input type="text" name="student_Father_Occupation" placeholder="Father Occupation"
                        value="{{ $students->admission->fath_occupation }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Mother Occupation</label>
                    <input type="text" name="student_Mother_Occupation" placeholder="Mother Occupation"
                        value="{{ $students->admission->moth_occupation	 }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Guardian Name 1</label>
                    <input type="text" name="student_Guardian_Name" placeholder="Guardian Name" value="{{ $students->admission->guardian_name }}"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Guardian Name 2</label>
                    <input type="text" name="student_Guardian_Name2" placeholder="Guardian Name 2" value="{{ $students->admission->guardian_name2 }}"
                        class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Guardian Contact Number</label>
                    <input type="text" name="student_Guardian Contact Number"
                        placeholder="Guardian Guardian Contact Number" value="{{ $students->admission->guardian_con_no }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Guardian Email Id</label>
                    <input type="email" name="student_Guardian Email Id" placeholder="Guardian Email Id"
                        value="{{ $students->admission->guardian_email }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Guardian Occupation</label>
                    <input type="text" name="student_Guardian Occupation" placeholder="Guardian Occupation"
                        value="{{ $students->admission->guardian_occupation }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Student Contact Number</label>
                    <input type="text" name="Student Contact Number" placeholder="Student Contact Number"
                        value="{{ $students->admission->stu_con_no }}" class="form-control">
                </div>
            </div>

            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>SMS Contact Number</label>
                    <input type="text" name="SMS Contact Number" placeholder="SMS Contact Number"
                        value="{{ $students->student->sms_contact }}" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>SMS Facility</label>
                    <select class="form-control" name="SMS Facility">
                        <option value="{{ $students->admission->sms_facility }}">{{ $students->admission->sms_facility }}</option>
                
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Student Conveyance</label>
                    <select class="form-control" name="Student Conveyance">
                        <option value="{{ $students->admission->stu_convenynce }}">{{ $students->admission->stu_convenynce }}</option>
                        
                    </select>
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="form-group">
                    <label>Student Email Id</label>
                    <input type="text" name="Student Email Id" placeholder="Student Email Id" value="{{ $students->admission->stu_email }}"
                        class="form-control">
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
                            <input type="text" name="student_adress" id="student_adress"
                                value="{{ $students->student->stu_add }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Village/City</label>
                            <input type="text" name="student_city" id="student_city"
                                value="{{ $students->student->village_city }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Block</label>
                            <input type="text" name="student_block" id="student_block"
                                value="{{ $students->student->block }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>District</label>
                            <input type="text" name="student_district" id="student_district"
                                value="{{ $students->student->district }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="student_state" id="student_state"
                                value="{{ $students->student->state }}" class="form-control">

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Pincode</label>
                            <input type="text" name="student_pincode" id="student_pincode"
                                value="{{ $students->student->pincode }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Landmark</label>
                            <input type="text" name="student_landmark" id="student_landmark"
                                value="{{ $students->student->landmark }}" class="form-control">
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
                                <input type="text" name="student_address_permanent" id="student_address_permanent"
                                    value="{{ $students->admission->stu_add_permanant }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Village/City Permanent</label>
                                <input type="text" name="student_city_permanent" id="student_city_permanent"
                                    value="{{ $students->admission->village_city_permanant }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Block Permanent</label>
                                <input type="text" name="student_block_permanent" id="student_block_permanent"
                                    value="{{ $students->admission->block_permanant }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>District Permanent</label>
                                <input type="text" name="student_district_permanent"
                                    id="student_district_permanent" value="{{ $students->admission->district_permanant }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State Permanent</label>
                                <input type="text" name="student_state_permanent" id="student_state_permanent"
                                    value="{{ $students->admission->state_permanant }}" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Pincode Permanent</label>
                                <input type="text" name="student_pincode_permanent" id="student_pincode_permanent"
                                    value="{{ $students->admission->pincode_permanant }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Landmark</label>
                                <input type="text" name="student_landmark_permanent" id="student_landmark"
                                    value="{{ $students->admission->landmark_permanant }}" class="form-control">
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
                            value="{{ $students->profile_pic }}" class="form-control"
                            accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div>
                <input type="hidden" name="user_id" value="{{$students->id}}" >
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
                            value="{{ $students->student->father_photo }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                            value="{{ $students->student->mother_photo }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                            value="{{ $students->admission->Guardian_photo }}"
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
                            value="{{ $students->admission->Last_Passed_Marksheet }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                            value="{{ $students->admission->Transfer_Certificate }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                            value="{{ $students->admission->Income_Certificate }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                            value="{{ $students->admission->Caste_of_Certificate }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                            value="{{ $students->admission->DOB_Certificate }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                            value="{{ $students->admission->SSSMID_certificate }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                            value="{{ $students->admission->admission_remark }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
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
                        <input type="hidden" id="student_sssmid_image" name="user_id"
                            onchange="check_file_type(this,'student_sssmid_image','show_sssmid_photo','image');"
                            value="{{ $students->id }}" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                </div> 

<input type="hidden" value="{{$students->id}}" name="user_id">

                <div id="mypdf_view">
                </div>
                <div class="col-md-12">
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Remark 1</label>
                            <input type="text" name="student_remark_1" value="{{ $students->student->remark }}"
                                class="form-control">
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
                <br>admission_remark
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
