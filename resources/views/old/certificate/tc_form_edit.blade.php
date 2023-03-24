@include('common.header')
@include('common.navbar')
<script type="text/javascript">
$("#my_form").submit(function(e) {
    e.preventDefault();
    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "certificate/tc_form_edit_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            ////alert_new(detail);
            //$('#query_print').html(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('certificate/tc_list');
            }
        }
    });
});
</script>
<section class="content-header">
    <h1>
        Certificate Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/certificate')}}"><i class="fa fa-certificate"></i> Certificate</a></li>
        <li class="active">TC Form</li>
    </ol>
</section>





<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title"> TC Generate</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                    <input type="hidden" name="s_no" value="814">
                    <div class="col-md-12">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Tc Generate No.</label>
                                <input type="text" name="tc_generate_no" value="2147483647"
                                    placeholder="Tc Generate No." class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>student Name</label>
                            <input type="text" name="tc_student_name" value="Umesh" placeholder="student Name"
                                id="student_name" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class</label>
                            <input type="text" name="tc_student_class" value="2ND" placeholder="Class"
                                id="student_class" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Section</label>
                            <input type="text" name="tc_student_class_section" value="B" placeholder="Student Section"
                                id="student_section" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Roll No</label>
                            <input type="hidden" name="tc_student_roll_no" value="2000298" placeholder=""
                                id="student_roll_no" class="form-control" readonly>
                            <input type="text" value="" placeholder="Student Roll No" id="school_roll_no"
                                class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>SSSM Id No.</label>
                            <input type="text" name="tc_student_sssm_id_no" value="" id="tc_student_sssm_id_no"
                                placeholder="SSSM Id No." value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3  ">
                        <div class="form-group">
                            <label>Student Unique Id</label>
                            <input type="text" name="tc_student_uid_no" value="Bbxnnznxmxxm" id="tc_student_uid_no"
                                placeholder="Student Unique Id" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Name</label>
                            <input type="text" name="tc_student_father_name" value="Rajesh" id="tc_student_father_name"
                                placeholder="Father's Name" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Mother's Name</label>
                            <input type="text" name="tc_mother_name" id="query_print" value="Rajni"
                                placeholder="Mother's Name" value="" class="form-control" readonly>
                        </div>

                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="text" name="date_of_birth" id="date_of_birth" value="2020-08-25"
                                placeholder="Date Of Birth" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Birth(word)</label>
                            <input type="text" name="date_of_birth_in_word" id="date_of_birth_in_word"
                                value="  Twenty Fifth August Two Thousand Twenty " placeholder="Date Of Birth(word)"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Admission No.</label>
                            <input type="text" name="tc_admission_no" id="tc_admission_no" value=""
                                placeholder="Student Admission No." value="" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Admission Date</label>
                            <input type="text" name="tc_admission_date" id="tc_admission_date" value="2020-08-28"
                                placeholder="Admission Date" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class In Which Admitted</label>
                            <input type="text" name="class_in_which_admitted" id="class_in_which_admitted" value=""
                                placeholder="Class In Which Admitted" value="" class="form-control">

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Issue Date</label>
                            <input type="date" name="date_of_school_leaving" id="date_of_school_leaving"
                                value="2022-12-04" placeholder="Issue Date" value="2022-12-05" class="form-control">

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Reason For Leaving</label>
                            <input type="text" name="region_for_leaving" value="" placeholder="Reason For Leaving"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label> paid Month</label>
                            <input type="text" name="paid_month" id="paid_month" value="" class="form-control"
                                placeholder='enter paid month'>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Total Num Working</label>
                            <input type="text" name="total_num_working" id="total_num_working" value="27"
                                placeholder="Total Num Working" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Total Num Present Days</label>
                            <input type="text" name="num_of_days_present" id="num_of_days_present" value="0"
                                placeholder="Total Num Presents days" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Any Fee Concession</label>
                            <input type="text" name="any_fee_concession" id="any_fee_concession" class="form-control"
                                placeholder='any fees concession' value=''>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Wheather Ncc/Scout/Guide</label>
                            <input type="text" name="wheather_ncc_scount_guide" id="wheather_ncc_scount_guide"
                                class="form-control" placeholder='Yes/No' value=''>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Games Played Or Extra Activity</label>
                            <input type="text" name="Games_Played_Or_Extra_Activity" id="Games_Played_Or_Extra_Activity"
                                class="form-control" placeholder='Yes/No' value=''>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Result status</label>
                            <input type="text" name="result_status" id="result_status" class="form-control"
                                placeholder='result status pass,fail' value=''>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label> Subject</label>
                            <input type="text" name="tc_subject" value="" placeholder="Subject" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class In which Leaving</label>
                            <input type="text" name="tc_student_class_leaving" value="2ND" id="tc_student_class_leaving"
                                placeholder="Class In which Leaving" value="" class="form-control">

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Due If Any</label>
                            <input type="text" name="due_if_any" value="" placeholder="Due If Any" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Conduct And Behaviour</label>
                            <input type="text" name="conduct_and_behaviour" value="" placeholder="Conduct And Behaviour"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Due Date</label>
                            <input type="date" name="due_date" id="due_date" placeholder="" value="2022-12-05"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Application</label>
                            <input type="date" name="date_of_application" placeholder="" value="0000-00-00"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Any Other Remark</label>
                            <input type="text" name="any_other_remark" placeholder="" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>

                    </div>



                </form>

            </div>

        </div>
    </div>
</section>
@include('common.footer')
<script>
$('.select2').select2();
</script>