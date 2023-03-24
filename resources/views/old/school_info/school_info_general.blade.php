@include('common.header')
@include('common.navbar')
<section class="content-header">
    <h1>
        School Information Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
        <li class="active">School General Info</li>
    </ol>
</section>
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();
    window.scrollTo(0, 0);
    loader();
    var formdata = new FormData(this);

    $.ajax({
        url: access_link + "school_info/school_info_general_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete!!!', 'green');
                get_content('school_info/school_info_general');
            }
        }
    });
});

function open_file1(image_type) {
    $.ajax({
        address: "POST",
        url: access_link + "school_info/ajax_open_image.php?image_type=" + image_type,
        cache: false,
        success: function(detail) {
            $("#mypdf_view").html('');
            $("#mypdf_view").html(detail);
        }
    });
}
</script>
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border ">
                <h3 class="box-title">School General Info</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form method="post" enctype="multipart/form-data" action="" id="my_form">
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>School Name</label>
                            <input type="text" name="school_info_school_name" placeholder="Student Name"
                                value="SIMPTION TECH PVT LTD" class="form-control" maxlength="40">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>School Name Short( For Message)</label>
                            <input type="text" name="multiple_school" placeholder="School Name Short"
                                value="SIMPTION TECH PVT LTD" class="form-control" maxlength="25">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="school_info_school_state" placeholder="State"
                                value="MADHYA PRADESH" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>District</label>
                            <input type="text" name="school_info_school_district" placeholder="District" value="BHOPAL"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="school_info_school_city" placeholder="City" value="BHOPAL"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Pincode</label>
                            <input type="text" name="school_info_school_pincode" placeholder="Pincode" value="462021"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Landmark</label>
                            <input type="text" name="school_info_school_landmark" placeholder="Landmark" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Latitude</label>
                            <input type="text" name="school_info_school_latitude" placeholder="Eg:-0123456789" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Longitude</label>
                            <input type="text" name="school_info_school_longitude" placeholder="Eg:-0123456789" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>School Address</label>
                            <input type="text" name="school_info_school_address" placeholder="School Address"
                                value="C-4, SECOND PRABHAT SQUARE BHOPAL" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>School Contact No</label>
                            <input type="text" name="school_info_school_contact_no" placeholder="School Contact No."
                                value="9074822542" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>School Email Id</label>
                            <input type="text" name="school_info_school_email_id" placeholder="School Email Id"
                                value="info@simption.com" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>School Website</label>
                            <input type="text" name="school_info_school_website" placeholder="School Website"
                                value="www.simption.com" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Principal Name</label>
                            <input type="text" name="school_info_principal_name" placeholder="Principal Name"
                                value="RAHUL AGRAWAL" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Dise Code</label>
                            <input type="text" name="school_info_dise_code" placeholder="Dise Code" value="23260100164"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>School Code</label>
                            <input type="text" name="school_info_school_code" placeholder="School Code" value="50702"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Registration Code</label>
                            <input type="text" name="school_info_registration_code" placeholder="Registration Code"
                                value="261682128" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Medium</label><br>
                            <select name="school_info_medium" class="form-control">
                                <option value="English">English</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 " style="display:none" ;>
                        <div class="form-group">
                            <label>School Board</label>
                            <select name="school_info_school_board" class="form-control">

                                <option selected value="State Board">State Board</option>
                                <option value="CBSE Board">CBSE Board</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Student Type</label>
                            <select name="school_info_student_type" class="form-control">
                                <option value="Regular">Regular</option>
                                <option value="Regular">Regular</option>
                                <option value="Regular + Unregular">Regular + Unregular</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Student Category</label>
                            <select name="school_info_student_category" class="form-control">
                                <option value="Non EWS">Non EWS</option>
                                <option value="Non EWS">Non EWS</option>
                                <option value="EWS + Non EWS">EWS + Non EWS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Fee Type</label>
                            <select name="fees_category" class="form-control">
                                <option selected value="monthly">monthly fees</option>
                                <option value="yearly">yearly fees</option>
                                <option value="installmentwise">installmentwise fees</option>
                                <option value="fees">Old fees</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Database Version</label>
                            <input type="text" name="database_version" placeholder="Database Version" value="1.5"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Fee SMS <small>(For Principal / Owner)</small></label>
                            <select name="blank_field_1" class="form-control">
                                <option value="">Select</option>
                                <option selected value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Attendance Machine Message Student</small></label>
                            <select name="sms_student" class="form-control">
                                <option selected value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Attendance Machine Message Staff</small></label>
                            <select name="sms_staff" class="form-control">
                                <option selected value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Default Session Value</small></label>
                            <select name="defalut_session_value" class="form-control">

                                <option value="2023_24"> 2023-24</option>

                                <option value="2024_25"> 2024-25</option>

                            </select>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Principal Seal</label>
                                <input type="file" id="school_info_principal_seal" name="school_info_principal_seal"
                                    placeholder=""
                                    onchange="check_file_type(this,'school_info_principal_seal','shwo_school_info_principal_seal','image');"
                                    value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img onclick="open_file1('school_info_principal_seal');"
                                    src="https://simptionerp.com/data-content/simptionschoolerp/demo/school_document/51329795_640px-Empty.png"
                                    id="shwo_school_info_principal_seal" height="50" width="50"
                                    style="margin-top:10px;">
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Principal Signature</label>
                                <input type="file" id="school_info_principal_signature"
                                    name="school_info_principal_signature" placeholder=""
                                    onchange="check_file_type(this,'school_info_principal_signature','show_school_info_principal_signature','image');"
                                    value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img onclick="open_file1('school_info_principal_signature');"
                                    src="https://simptionerp.com/data-content/simptionschoolerp/demo/school_document/92417163_640px-Empty.png"
                                    id="show_school_info_principal_signature" height="50" width="50"
                                    style="margin-top:10px;">
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" id="school_info_logo" name="school_info_logo" placeholder=""
                                    onchange="check_file_type(this,'school_info_logo','show_school_info_logo','image');"
                                    value="" class="form-control" accept=".gif, .jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <img onclick="open_file1('school_info_logo');"
                                    src="https://simptionerp.com/data-content/simptionschoolerp/demo/school_document/41024579_s logo.jpg"
                                    id="show_school_info_logo" height="50" width="50" style="margin-top:10px;">
                            </div>
                        </div>


                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>About School</label>

                                <textarea name="school_info_about" class="form-control" maxlength="500" rows="4"
                                    cols="200">ENGLISH MEDIUM SCHOOL</textarea>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
</form>
<div id="mypdf_view">
    <div>


        @include('common.footer')