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

<script type="text/javascript">
function fill_detail(value) {
    $.ajax({
        type: "get",
        url: "{{url('sports/ajax_search_student_box')}}/" + value,
        cache: false,
        success: function(detail) {
            var roll_no = detail['roll_no']
            var user_id = detail['user']['id'];
            var name = detail['user']['name'];
            var phone_number = detail['user']['phone_number'];
            var gender = detail['user']['gender'];
            var father_name = detail['father_name'];
            var mother_name = detail['mother_name'];
            var class_id = detail['class']['id'];
            var class_name = detail['class']['class_name'];
            var section_id = detail['section']['id'];
            var section_name = detail['section']['section_name'];
            var dobq = detail['user']['dob'];
            var ageCa = (new Date(dobq).toLocaleDateString('en-GB'));
            //======================================================================================================
            var doba = new Date(dobq);
            var month_diffe = Date.now() - doba.getTime();
            var age_dte = new Date(month_diffe);
            var yeare = age_dte.getUTCFullYear();
            //now calculate the age of the user
            var agee = Math.abs(yeare - 1970);
            $("#age_year").val(agee);
            //======================================================================================================
            function getAge(dateString) {
                var now = new Date();
                var today = new Date(now.getYear(), now.getMonth(), now.getDate());

                var yearNow = now.getYear();
                var monthNow = now.getMonth();
                var dateNow = now.getDate();

                var dob = new Date(dateString.substring(6, 10),
                    dateString.substring(0, 2) - 1,
                    dateString.substring(3, 5)
                );

                var yearDob = dob.getYear();
                var monthDob = dob.getMonth();
                var dateDob = dob.getDate();
                var age = {};
                var ageString = "";
                var yearString = "";
                var monthString = "";
                var dayString = "";

                yearAge = yearNow - yearDob;

                if (monthNow >= monthDob)
                    var monthAge = monthNow - monthDob;
                else {
                    yearAge--;
                    var monthAge = 12 + monthNow - monthDob;
                }
                if (dateNow >= dateDob)
                    var dateAge = dateNow - dateDob;
                else {
                    monthAge--;
                    var dateAge = 31 + dateNow - dateDob;
                    if (monthAge < 0) {
                        monthAge = 11;
                        yearAge--;
                    }
                }
                age = {
                    years: yearAge,
                    months: monthAge,
                    days: dateAge
                };

                if (age.years > 1) yearString = " years";
                else yearString = " year";
                if (age.months > 1) monthString = " months";
                else monthString = " month";
                if (age.days > 1) dayString = " days";
                else dayString = " day";

                if ((age.years > 0) && (age.months > 0) && (age.days > 0))
                    ageString = age.years + yearString + ", " + age.months + monthString +
                    ", and " + age
                    .days + dayString + " old.";
                else if ((age.years == 0) && (age.months == 0) && (age.days > 0))
                    ageString = "Only " + age.days + dayString + " old!";
                else if ((age.years > 0) && (age.months == 0) && (age.days == 0))
                    ageString = age.years + yearString + " old. Happy Birthday!!";
                else if ((age.years > 0) && (age.months > 0) && (age.days == 0))
                    ageString = age.years + yearString + " and " + age.months + monthString +
                    " old.";
                else if ((age.years == 0) && (age.months > 0) && (age.days > 0))
                    ageString = age.months + monthString + " and " + age.days + dayString + " old.";
                else if ((age.years > 0) && (age.months == 0) && (age.days > 0))
                    ageString = age.years + yearString + " and " + age.days + dayString + " old.";
                else if ((age.years == 0) && (age.months > 0) && (age.days == 0))
                    ageString = age.months + monthString + " old.";
                else ageString = "Oops! Could not calculate age!";

                return ageString;
            }
            var ageCal = (new Date(ageCa).toLocaleDateString('en-GB'));
            $("#actualdate").val(getAge(ageCal));

            //======================================================================================================
            $("#student_roll").val(roll_no);
            $("#student_name_id").val(user_id);
            $("#student_name")
                .val(name);
            $("#contact_no").val(phone_number);
            $("#gender").val(gender);
            $(
                "#student_father_name").val(father_name);
            $("#student_mother_name").val(
                mother_name);
            $("#student_class_id").val(class_id);
            $("#student_class").val(
                class_name);
            $("#student_section_id").val(section_id);
            $("#student_section").val(
                section_name);
            $("#dateofbirth").val(dobq);
            //======================================================================================================

        }
    });

}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "/add-sport-participate",
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
</script>

<section class="content-header">
    <h1>
        Participation Form
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('sports')}}"><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Participation</li>
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
                <h3 class="box-title">Participation Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Participate form--------------------------------------------------->

            <div class="box-body">
               
                <form role="form" action="{{url('add-sport-participate')}}" method="post" enctype="multipart/form-data"
                    id="my_form">
                    @csrf
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sports Name<font style="color:red"><b>*</b></font></label>
                                <select name="sports_name" class="form-control" required>
                                    <option value="">Select Sport</option>
                                    @if (!empty($sports))
                                    @foreach ($sports as $sport)
                                    <option value="{{ $sport->id }}">{{ $sport->sports_name }}</option>
                                    @endforeach
                                    @endif
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
                                    <option value="{{$item->id}}">
                                        @if($item->user)
                                        {{$item->user->name}} - {{$item->user->phone_number}}
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
                            <input type="number" name="student_roll" id="student_roll" placeholder="Student Roll" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div id="data">
                        <div class="col-md-3 hidden">
                            <div class="form-group">
                                <label>Student Id</label>
                                <input type="text" name="student_name_id" placeholder="Student Name"
                                    id="student_name_id" class="form-control" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Student Name</label>
                                <input type="text" name="student_name" placeholder="Student Name" id="student_name"
                                    class="form-control" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Father Name</label>
                                <input type="text" name="student_father_name" id="student_father_name"
                                    placeholder="Father Name" value="" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mother Name</label>
                                <input type="text" name="student_mother_name" id="student_mother_name"
                                    placeholder="Mother Name" value="" class="form-control" readonly>
                            </div>
                        </div>
                      
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" name="contact_no" id="contact_no" placeholder="Contact No" value=""
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Board Registration Number</label>
                                <input type="number" name="board_no" placeholder="Board Registration Number" id=""
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3 hidden">
                            <div class="form-group">
                                <label>Class Id</font></label>
                                <input type="text" name="student_class_id" placeholder="Student Class"
                                    id="student_class_id" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Class</font></label>
                                <input type="text" name="class_id" placeholder="Student Class" id="student_class"
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 hidden">
                            <div class="form-group">
                                <label>Section Id</font></label>
                                <input type="text" name="student_section_id" placeholder="Student Section"
                                    id="student_section_id" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Section</font></label>
                                <input type="text" name="section_id" placeholder="Student Section" id="student_section"
                                    class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" id="gender" name="gender" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="dateofbirth" onInput="FindAge()" id="dateofbirth" value=""
                                    class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Age Category</label>
                                <input type="text" name="age_category" id="age_year" value="" class="form-control"
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
                                    class="form-control" accept=".gif, .jpg, .jpeg, .png" value="" required>
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
                                    class="form-control" accept=".gif, .jpg, .jpeg, .png" value="" required>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Document</label>
                                <img src="" id="show_documents" height="50" width="50"><input type="hidden"
                                    name="dob_certificate_hidden" id="dob_certificate">
                            </div>
                        </div>

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