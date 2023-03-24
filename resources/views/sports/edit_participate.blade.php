@include('common.header')
@include('common.navbar')

<style type="text/css">
.result {
    position: absolute;
    z-index: 999;
    top: 80%;
    left: 0;
    background: white;
}

.search-box input[type="text"],
.result {
    width: 90%;
    margin-left: 5%;
    box-sizing: border-box;
}

/* Formatting result items */
.result p {
    margin: 0;
    padding: 7px 10px;
    border: 1px solid #CCCCCC;
    border-top: none;
    cursor: pointer;
}

.result p:hover {
    background: #f2f2f2;
}
</style>

<!-- <script type="text/javascript">
function fill_detail(value) {
    // alert(value);
    $.ajax({
        type: "get",
        url: "{{url('sports/ajax_search_student_box')}}/" + value,
        cache: false,
        success: function(detail) {
            var roll_no = detail['roll_no']
            var name = detail['user']['name'];
            var phone_number = detail['user']['phone_number'];
            var gender = detail['user']['gender'];
            var father_name = detail['father_name'];
            var mother_name = detail['mother_name'];
            var class_name = detail['class']['class_name'];
            var section_name = detail['section']['section_name'];
            var doba = detail['user']['dob'];


            // var result = new Date("06/24/2008");
            // //calculate month difference from current date in time
            // var month_diff = Date.now() - dob.getTime();
            // //convert the calculated difference in date format
            // var age_dt = new Date(month_diff);
            // //extract year from date    
            // var year = age_dt.getUTCFullYear();
            // //now calculate the age of the user
            // var age = Math.abs(year - 1975);
            // //display the calculated age
            // document.write(age);
            // var result = calDate("11=11=2000", "11-11-2005");
            // result
            // var doba = new Date(day) - detail['user']['dob'];
            // var today = new Date();
            // var Age = today.getTime() - doba.getTime();
            // Age = Math.floor(Age / (1000 * 60 * 60 * 24 * 365.25));
            // var name = detail['user'];
            // var phone_number = detail['phone_number'];
            $("#student_roll").val(roll_no);
            $("#student_name").val(name);
            $("#contact_no").val(phone_number);
            $("#gender").val(gender);
            $("#student_father_name").val(father_name);
            $("#student_mother_name").val(mother_name);
            $("#student_class").val(class_name);
            $("#student_section").val(section_name);
            $("#dateofbirth").val(doba);
            // $("#actualdate").val(result);
            // var day = document.getElementById("dateofbirth").value;
            // $("#age_year").val(result);
            // var dob = new Date(day);
            // var today = new Date();
            // var Age = today.getTime() - dob.getTime();
            // Age = Math.floor(Age / (1000 * 60 * 60 * 24 * 365.25));
            // // $("#age_year").val(Age);

            // document.getElementById("age_year").value = Age;
            // $("#student_category").val(res[7]);
            // $("#student_roll").val(res[8]);
            // $("#session_value").val(res[9]);
            // $("#show_student_photo").attr("src", "data:image;base64," + res[10]);
            //$("#student_photo_hidden").val(res[10]);
            // $("#student_adhar_number").val(res[11]);
            // $("#student_admission_number").val(res[12]);
            // $("#student_scholar_number").val(res[13]);
            // $("#company_name11").val(res[14]);
            // $("#show_documents").attr("src", "data:image;base64," + res[18]);
            //$("#dob_certificate").val(res[18]);
            ////alert_new(detail);
        }
    });

}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "sports/add_participate",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            ////alert_new(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('sports/participate_list');
            }
        }
    });
});
</script> -->

<section class="content-header">
    <h1>
        Participation Update Form
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('sports')}}"><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Update Participation</li>
    </ol>
</section>
<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Participation Update Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Participate form--------------------------------------------------->

            <div class="box-body">
               
                <form role="form" action="{{url('edit-sport-participate')}}" method="post" enctype="multipart/form-data"
                    id="my_form">
                    @csrf
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sports Name<font style="color:red"><b>*</b></font></label>
                                <select name="sports_name" class="form-control" required>
                                    <option value="">Select Sport</option>
                                    @foreach ($sports as $spt)
                                    @if($Sports_Participate['sports_id'] == $spt->id)
                                    <option value="{{ $spt->id }}" selected>{{$spt->sports_name}}</option>
                                    @else
                                    <option value="{{ $spt->id }}">{{$spt->sports_name}}</option>
                                    @endif
                                    @endforeach
                                    <!-- @foreach($sports as $sport)
                                    <option value="{{$sport->id}}" selected>
                                        @if($sport->sport)
                                        {{$sport->sport->sports_name}}
                                        @endif
                                    </option>
                                    @endforeach -->
                                    <!-- @if (!empty($sports))
                                    @foreach ($sports as $spt)
                                    <option value="{{ $spt->sports_id }}" selected>{{ $spt->sports_name }}</option>
                                    @endforeach
                                    @endif -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Name<font size="2" style="font-weight: normal;">(Search by Name)</font>
                                    <span style="color:red;">*</span></label>
                                <select name="student" id="student" style="width:100%;" class="form-control select2"
                                    onchange="fill_detail(this.value);">
                                    <option value="">Select Student</option>
                                    @foreach($users as $item)
                                    <option value="{{$item->id}}" selected>
                                        @if($item->user)
                                        {{$item->user->name}}
                                        @endif
                                    </option>
                                    @endforeach

                                    <!-- <option value="2201086">Rahul Kumar[2201086-Male]-[NURSERY-A]-[Lalbabu
                                        Ray-9570503057]</option> -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>School/Institute Participate</label>
                            <input type="text" name="school_name" placeholder="School Institute"
                                value="SIMPTION TECH PVT LTD" class="form-control" readonly />
                        </div>
                    </div>

                    <div class="col-md-3" style="display:none;">
                        <div class="form-group">
                            <input type="text" name="session_value" id="session_value" value="" class="form-control"
                                readonly />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Student Roll No</label>
                            <input type="text" name="student_roll" id="student_roll" placeholder="Student Roll"
                                value="{{$Sports_Participate->roll_no}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div id="data">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Student Name</label>
                                <input type="text" name="student_name" placeholder="Student Name" id="student_name"
                                    class="form-control" value="{{$Sports_Participate->student_id}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Father Name</label>
                                <input type="text" name="student_father_name" id="student_father_name"
                                    placeholder="Father Name" value="{{$Sports_Participate->father_name}}"
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mother Name</label>
                                <input type="text" name="student_mother_name" id="student_mother_name"
                                    placeholder="Mother Name" value="{{$Sports_Participate->mother_name}}"
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <!-- <div class="col-md-3" style="display:none;">
                            <div class="form-group">
                                <label>Aadhar/Uid No</label>
                                <input type="text" name="student_adhar_number" id="student_adhar_number"
                                    class="form-control" readonly />
                            </div>
                        </div> -->
                        <!-- <div class="col-md-3" style="display:none;">
                            <div class="form-group">
                                <label>Addmission No.</label>
                                <input type="text" name="student_admission_number" id="student_admission_number"
                                    value="" class="form-control" readonly />
                            </div>
                        </div> -->
                        <!-- <div class="col-md-3" style="display:none;">
                            <div class="form-group">
                                <label>Scholar No.</label>
                                <input type="text" name="student_scholar_number" id="student_scholar_number" value=""
                                    class="form-control" readonly />
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" name="contact_no" id="contact_no" placeholder="Contact No"
                                    value="{{$Sports_Participate->contact_no}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Board Registration Number</label>
                                <input type="text" name="board_no" value="{{$Sports_Participate->board_reg_no}}"
                                    required placeholder="Board Registration Number" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Class</font></label>
                                <input type="text" name="student_class" placeholder="Student Class" id="student_class"
                                    value="{{$Sports_Participate->class_id}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Section</font></label>
                                <input type="text" name="student_section" placeholder="Student Section"
                                    value="{{$Sports_Participate->section_id}}" id="student_section"
                                    class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" id="gender" name="gender" value="{{$Sports_Participate->gender}}"
                                    class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="dateofbirth" onInput="FindAge()" id="dateofbirth"
                                    value="{{$Sports_Participate->dob}}" class="form-control" readonly>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="form-group">
                                <label>Age Category</label>
                                <input type="text" name="age_category" id="age_year" value="{{$Sports_Participate->student_id}}" class="form-control"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Actual Age</label>
                                <input type="text" name="actual_age" id="actualdate" value="" class="form-control"
                                    readonly>
                            </div>
                        </div>

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
                                <label>Photo</label>
                                <img src="" id="show_student_photo" height="50" width="50"><input type="hidden"
                                    name="student_photo_hidden" id="student_photo_hidden">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Dob Certificate</label>
                                <input type="file" name="document_dob" id="document_dob" placeholder=""
                                    onchange="check_file_type(this,'document_dob','show_documents','image');"
                                    class="form-control" accept=".gif, .jpg, .jpeg, .png" value="">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Document</label>
                                <img src="" id="show_documents" height="50" width="50"><input type="hidden"
                                    name="dob_certificate_hidden" id="dob_certificate">
                            </div>
                        </div> -->

                        <div class="col-md-12">
                            <center><input type="submit" name="finish" value="Submit" class="btn btn-primary" />
                            </center>
                        </div>
                    </div>
                </form>
            </div>

            <!---------------------------------------------End Participate form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>

</section>
@include('common.footer')

<script>
$(function() {
    $('.select2').select2();
});
</script>