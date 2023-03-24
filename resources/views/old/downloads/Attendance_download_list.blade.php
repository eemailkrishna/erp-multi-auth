@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function for_section(value) {
    //alert_new(id);
    $.ajax({
        type: "POST",
        url: access_link + "downloads/ajax_class_section.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html('<option value="All">All</option>' + detail);
        }
    });

}
</script>

<script>
function form_submit() {

    $.ajax({
        type: "POST",
        url: access_link + "downloads/attendance_export.php",
        data: $("#my_form").serialize(),
        success: function(data1) {
            $('#get_content').html(data1);

        }
    });
}
</script>

<section class="content-header">
    <h1>
        Download Attendance Info
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/download')}}"><i class="fa fa-phone-square"></i>Download panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Download</li>
    </ol>
</section>


<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title"><b>Attendance Download Info</b></h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" id="my_form" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="col-md-3">
                            <div class="form-group">
                                <th><b style="font-size:15px">Select Month</b></th>
                                <select class="form-control" name="month_name" required>
                                    <option value="All">All</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                    <option value="01">Jaunary</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                </select>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Select Year</b></th>
                                <select class="form-control" name="year_name" required>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option selected value="2022">2022</option>


                                </select>

                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Class</b></th>
                                <select name="std_class" class="form-control new_student" id="std_class"
                                    onchange="for_section(this.value);">
                                    <option value="All">All</option>
                                    <option value="NURSERY">NURSERY</option>
                                    <option value="LKG">LKG</option>
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
                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Section</b></th>
                                <select class="form-control" name="student_class_section" id="student_class_section">
                                    <option value="All">All</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Order By</label>
                            <select class="form-control" name="order_by" id="order_by">
                                <option value="">Select</option>
                                <option value="student_name">Student Name</option>
                                <option value="student_father_name">Father Name</option>
                                <option value="school_roll_no">School Roll No</option>
                                <option value="student_admission_number">Admission No</option>
                                <option value="student_scholar_number">Scholar No</option>
                                <option value="student_registration_number">Registration No</option>
                                <option value="student_enrollment_number">Enrollment No</option>
                            </select>
                        </div>

                    </div></br></br></br></br></br>


            </div>

            <div class="col-md-12">
                <center><input type="button" name="submit" value="Submit" class="btn btn-primary"
                        onclick="form_submit()" /></center>
            </div>
            </form>
        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>
</section>

@include('common.footer')