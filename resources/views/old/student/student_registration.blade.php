@include('common.header')
@include('common.navbar')
<section class="content-header">
    <h1>
        Student Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
        <li class="active">Student Registration</li>
    </ol>
</section>


<script>
    function for_stream_get() {
        var class_name = document.getElementById('student_class').value;
        $('#student_class_stream').html("<option value='' >Loading....</option>");
        $.ajax({
            type: "POST",
            url: access_link + "student/ajax_get_stream_name.php?class_name=" + class_name + "",
            cache: false,
            success: function(detail) {
                // alert_new(detail);
                $("#student_class_stream").html(detail);
            }
        });
    }


    function get_dob_in_words(dob1) {
        $.ajax({
            type: "POST",
            url: access_link + "student/ajax_datetoword.php?dob=" + dob1 + "",
            cache: false,
            success: function(detail) {

                document.getElementById('student_date_of_birth_in_word1').value = detail;
            }
        });

    }

    function for_stream(value2) {
        for_stream_get();
        if (value2 == "11TH" || value2 == "12TH") {
            $("#student_class_stream_div").show();
            $("#student_class_group_div").show();
            $("#student_class_group_subject_div").show();
            $("#student_class_stream").attr('required', true);
            $("#student_class_group").attr('required', true);
        } else {
            $("#student_class_stream_div").hide();
            $("#student_class_group_div").hide();
            $("#student_class_group_subject_div").hide();
            $("#student_class_stream").attr('required', false);
            $("#student_class_group").attr('required', false);
        }
    }

    function get_group(value1) {

        $.ajax({
            type: "POST",
            url: access_link + "student/ajax_stream_group.php?stream_name=" + value1 + "",
            cache: false,
            success: function($detail1) {
                var str1 = $detail1;

                $("#student_class_group").html(str1);
            }
        });
    }

    function sms_contact(value1) {

        $('#student_sms_contact_number').val(value1);
    }

    function get_group_subject() {
        var student_class = document.getElementById('student_class').value;
        var group_name = document.getElementById('student_class_group').value;
        var stream_name = document.getElementById('student_class_stream').value;
        if (student_class != '') {
            $.ajax({
                type: "POST",
                url: access_link + "student/ajax_stream_group_subject.php?student_class=" + student_class +
                    "&stream_name=" + stream_name + "&group_name=" + group_name + "",
                cache: false,
                success: function(detail1) {

                    $("#student_class_group_subject").val(detail1);

                }
            });
        } else {
            $("#student_class_group_subject").val('');
        }

    }

    function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var student_name = document.getElementById("student_name").value;
        var school_name123 = document.getElementById("school_name123").value;
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
            //	$('#contact').val('Dear '+student_name+',Your Registration Have Completed Successfully . Thanking You '+school_name123);
            $('#contact').val('Dear Student,Your Registration Has Been Completed Successfully . Thank You. From ' +
                school_name123 + ' [SIMPTION]');
            $('#send_sms').val('Yes');
        } else {
            text.style.display = "none";
            $('#contact').val('');
            $('#send_sms').val('No');
        }
    }





    $("#my_form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        $("#get_content").html(loader_div);
        $.ajax({
            url: access_link + "student/student_registration_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Complete', "green");
                    get_content('student/student_registration_list');
                }
            }
        });
    });
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
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <form name="myForm" method="post" id="my_form" enctype="multipart/form-data" action=""
                onsubmit="return validate();">
                @csrf
                <div class="box-body">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Registration No.</label>
                            <font style="color:red"><b>*</b></font><br>
                            <input type="text" name="student_registration_number" value="<?php echo date('ymdhis'); ?>"
                                class="form-control" required />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Student New Old</label>
                            <select class="form-control" name="student_old_or_new">
                                <option value="New">New</option>
                                <option value="Old">Old</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class" id="student_class"
                                onchange="for_stream(this.value);get_group_subject();" required>
                                <option value="">Select Class</option>
                               @foreach($classes as $list)
                                <option value="">{{$list->class_name}}</option>
                                @endforeach


                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 " id="student_class_group_div" style="display:none;">
                        <div class="form-group">
                            <label>Group<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_group" id="student_class_group"
                                onchange="get_group_subject();">
                                <option value="">Select Group</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8 " id="student_class_group_subject_div" style="display:none;">
                        <div class="form-group">
                            <label>Group Subject</label>
                            <input type="text" name="student_class_group_subject" id="student_class_group_subject"
                                value="" class="form-control new_student" readonly>
                        </div>
                    </div>





                    <div class="col-md-3" style="display:none;">
                        <div class="form-group">
                            <label>School_name<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="school_name123" id="school_name123"
                                value="SIMPTION TECH PVT LTD" class="form-control new_student">
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="hidden" name="student_id_generate" id="student_id_generate" value="1087"
                                class="form-control ">
                            <label>student Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="student_name" id="student_name" required
                                placeholder="student Name" value="" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Name</label>
                            <input type="text" name="student_father_name" id="student_father_name"
                                placeholder="Father's Name" value="" class="form-control new_student">

                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Mother's Name</label>
                            <input type="text" name="student_mother_name" id="student_mother_name"
                                placeholder="Mother's Name" value="" class="form-control new_student">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Father Contact No1.<font style="color:red"><b>*</b></font></label>
                            <input type="number" minlength="10" maxlength="10" name="student_father_contact_number"
                                placeholder="Father Contact No1." oninput="sms_contact(this.value);" value=""
                                id="student_father_contact_number" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Father Contact No2.</label>
                            <input type="number" minlength="10" maxlength="10"
                                name="student_father_contact_number2" placeholder="Father Contact No2."
                                value="" id="student_father_contact_number2" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="student_email" placeholder="Email" value=""
                                id="student_email" class="form-control new_student">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Birth<font style="color:red"><b>*</b></font></label>
                            <input type="date" name="student_date_of_birth" placeholder=""
                                oninput="get_dob_in_words(this.value);" id="student_date_of_birth" value=""
                                class="form-control new_student" required>

                        </div>
                    </div>
                    {{-- <div class="col-md-3">
						<div class="form-group">
						  <label>DoB In Word</label>
						   <input type="text"  id="student_date_of_birth_in_word1" name="student_date_of_birth_in_word"  value="" class="form-control" placeholder="DoB In Word" readonly >
				        </div>
				</div> --}}
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Gender</label><br>
                            <select class="form-control new_student" name="student_gender" id="student_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Admission</label>
                            <input type="date" name="student_date_of_admission" placeholder="" value="2022-12-03"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Admission Type</label>
                            <select class="form-control" name="student_admission_type" id="student_admission_type">
                                <option value="Regular">Regular</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Stream</label>
                            <select class="form-control" name="stream" id="student_admission_type">
                                <option value="all">All</option>
                                <option value="science">Science</option>
                                <option value="commerce">Commerce</option>
                                <option value="art">Art</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Admission Scheme</label>
                            <select class="form-control" name="student_admission_scheme">
                                <option value="NON-RTE">NON-RTE</option>
                                <option value="RTE">RTE</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3" style="display:none">
                        <div class="form-group">
                            <label>Medium</label>
                            <select class="form-control" name="student_medium">
                                <option value="">Select</option>
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3" style="display:none">
                        <div class="form-group">
                            <label>BOARD</label>
                            <select class="form-control" name="student_board">
                                <option value="">Select</option>
                                <option value="CBSE">CBSE</option>
                                <option value="MP Board">MP Board</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3" style="display:none">
                        <div class="form-group">
                            <label>SHIFT</label>
                            <select class="form-control" name="student_shift">
                                <option value="">Select</option>
                                <option value="Shift2">Shift2</option>
                                <option value="Shift1">Shift1</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Fee Category</label>
                            <select class="form-control" name="student_fee_category">
                                <option value="Non-RTE">Non-RTE</option>
                                <option value="New">New</option>
                                <option value="Old">Old</option>
                                <option value="Science">Science</option>
                                <option value="RTE">RTE</option>
                                <option value="sibling">sibling</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bus</label>
                            <select class="form-control" name="student_bus">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Hostel</label>
                            <select class="form-control" name="student_hostel">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Library</label>
                            <select class="form-control" name="student_library">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3" style="">
                        <div class="form-group">
                            <label>Registration Fees</label>
                            <input type="text" name="student_registration_fee" placeholder="Registration Fees"
                                value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>SMS Contact No</label>
                            <input type="text" name="student_sms_contact_number" id="student_sms_contact_number"
                                placeholder="SMS Contact No" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Student Address</label>
                                <input type="text" name="student_adress" id="student_adress" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Village/City</label>
                                <input type="text" name="student_city" id="student_city" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Block</label>
                                <input type="text" name="student_block" id="student_block" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>District</label>
                                <input type="text" name="student_district" id="student_district" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" name="student_state" id="student_state" value=""
                                    class="form-control">

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Pincode</label>
                                <input type="text" name="student_pincode" id="student_pincode" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Landmark</label>
                                <input type="text" name="student_landmark" id="student_landmark" value=""
                                    class="form-control">
                            </div>
                        </div>
                    </div>




                    <div class="col-md-12 ">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Student Photo</label>
                                <input type="file" name="student_photo" id="student_photo" placeholder=""
                                    onchange="check_file_type(this,'student_photo','show_student_photo','image');"
                                    class="form-control" accept=".gif, .jpg, .jpeg, .png" value="">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_student_photo" src='../school_software_v1_old/images/student_blank.png'
                                    width='60px' height='60px'>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Father Photo</label>
                                <input type="file" name="father_photo" id="father_photo" placeholder=""
                                    onchange="check_file_type(this,'father_photo','show_father_photo','image');"class="form-control"
                                    accept=".gif, .jpg, .jpeg, .png" value="">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_father_photo" src='../school_software_v1_old/images/student_blank.png'
                                    width='60px' height='60px'>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mother Photo</label>
                                <input type="file" name="mother_photo" id="mother_photo" placeholder=""
                                    onchange="check_file_type(this,'mother_photo','show_mother_photo','image');"class="form-control"
                                    accept=".gif, .jpg, .jpeg, .png" value="">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img id="show_mother_photo" src='../school_software_v1_old/images/student_blank.png'
                                    width='60px' height='60px'>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Remark 1</label>
                                <input type="text" name="student_remark_1" placeholder="Remark 1" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Remark 2</label>
                                <input type="text" name="student_remark_2" placeholder="Remark 2" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Remark 3</label>
                                <input type="text" name="student_remark_3" placeholder="Remark 3" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Remark 4</label>
                                <input type="text" name="student_remark_4" placeholder="Remark 4" value=""
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="col-md-8 ">
                            <label><input type="checkbox" name="myCheck" id="myCheck"
                                    onclick="myFunction()">&nbsp;&nbsp;&nbsp;Check For Message</label>
                            <div class="form-group" id="text" style="display:none">
                                <input type="text" name="sms" placeholder="" id="contact"
                                    class="form-control" readonly>
                                <input type="hidden" name="send_sms" placeholder="" id="send_sms"
                                    class="form-control">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <center><input type="submit" name="finish" id="submitButtonId" value="Submit"
                                class="btn btn-success" /></center>
                    </div>


                </div>
                <!---------------------------------------------End Registration form--------------------------------------------------------->
                <!-- /.box-body -->
        </div>
    </div>
</section>

<!---------------------------------------------Model window start --------------------------------------------------------->

</form>

</div>
@include('common.footer');
<script>
    $(function() {
        $('.select2').select2()
    })
</script>
