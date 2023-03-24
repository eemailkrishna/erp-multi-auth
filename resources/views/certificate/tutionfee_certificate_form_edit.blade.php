@include('common.header')
@include('common.navbar')

<script type="text/javascript">
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "certificate/tutionfee_certificate_form_edit_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('certificate/tutionfee_certificate_list');
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
        <li><a href="{{url('/certificate')}}"><i class="fa fa-certificate"></i>
                Certificate</a></li>
        <li class="active">Tutionfee Certificate Edit</li>
    </ol>
</section>




<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->



            <div class="box-body ">

                <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                    <input type="hidden" name="s_no" value="128">

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>student Name</label>
                            <input type="text" name="tutionfee_student_name" value="Palak Kumari"
                                placeholder="Student Name" id="student_name" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Name</label>
                            <input type="text" name="tutionfee_student_name" value="Krishna Sahani"
                                placeholder="Student Name" id="student_name" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Roll No</label>
                            <input type="text" name="tutionfee_student_roll_no" value="2000332"
                                placeholder="student Roll No." id="school_roll_no" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>School Name</label>
                            <input type="text" name="tutionfee_school_name" value="SIMPTION TECH PVT LTD"
                                placeholder="student Roll No." id="school_roll_no" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>During Year</label>
                            <div class="col-sm-12">
                                <div class="col-sm-6">

                                    <input type="text" name="tutionfee_current_year_from" class="form-control"
                                        placeholder="From" value="22" />
                                </div>

                                <div class="col-sm-6">

                                    <input type="text" class="form-control" name="tutionfee_current_year_to"
                                        placeholder="To" value="23" /><br />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>TutionFee Amount</label>
                            <input type="text" name="tutionfee_type" placeholder="TutionFee Amount" value="2000"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Issued Date</label>
                            <input type="date" name="tutionfee_issue_date" id="date_of_school_leaving"
                                placeholder="Organized  Date" value="2023-01-05" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <br />
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-success" /></center>
                        <br />
                    </div>


                </form>
                <div class="col-md-12">

                </div>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>

@include('common.footer')