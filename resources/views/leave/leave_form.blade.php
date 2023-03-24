@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">
    function roll_no(id) {
        $.ajax({
            type: "get",
            url: "{{ url('student-leave-info') }}/" + id,
            cache: false,
            success: function(info) {

                $('#student_roll_no').val(info.roll_no);
            }
        });

    }
</script>


<script>
    function check_date(value) {
        //define two variables and fetch the input from HTML form
        var dateI1 = document.getElementById("leave_from_date").value;
        var dateI2 = document.getElementById("leave_to_date").value;

        //define two date object variables to store the date values
        var date1 = new Date(dateI1);
        var date2 = new Date(dateI2);

        if (date1 <= date2) {
            var time_difference = date2.getTime() - date1.getTime();



            //calculate days difference by dividing total milliseconds in a day
            var result = time_difference / (1000 * 60 * 60 * 24);

            $("#total_leave_days").val(result);
        } else {
            $("#total_leave_days").val(alert("please fill start to end correct date !!"));
            // $("#total_leave_days").val(result);

        }



    }
</script>
{{-- <script>
    function check_date(value) {
        // alert_new("sakdfgsdiu");
        var from_date = document.getElementById("leave_from_date").value;
        var to_date = document.getElementById("leave_to_date").value;

        // if (from_date != '' && to_date != '') {
        if (from_date >= to_date && to_date <= to_date) {

            $("#total_leave_days").val('gdhdfj');
            // $("#total_sunday").val('Loading.....');
            // $("#total_holiday").val('Loading.....');


            $.ajax({
                type: "get",
                url:"{{ ('leave/ajax_holiday_detail.php?from_date=') }}" + from_date + "&to_date=" +
                    to_date + "",
                    // url: access_link + "{{ ('leave/ajax_holiday_detail.php?from_date=') }}" + from_date + "&to_date=" +

                cache: false,
                success: function(detail) {
                    // var str = detail;
                    // var res = str.split("|?|");
                    // $("#total_leave_days").val(res[0]);
                    $("#total_leave_days").val(detail.to_date-from_date);
                    // $("#total_sunday").val(res[1]);
                    // $("#total_holiday").val(res[2]);

                }

            });
        }
    }
    $("#my_form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        loader();
        $.ajax({
            url: access_link + "leave/leave_form_api.php",
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
                    get_content('leave/leave_list');
                }
            }
        });
    });
</script> --}}
{{-- <script>
    function check_date(value)
      var date = new Date();
      var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
      var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);
      document.getElementById("leave_from_date").innerHTML = "First day = " + firstDay;
      document.getElementById("leave_to_date").innerHTML = "Last day = " + lastDay;
   </script> --}}

<script>
    $(function() {

        $('.select2').select2()

    })
</script>

<section class="content-header">
    <h1>
        Leave Management </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('leave/leave')"#><i class="fa fa-umbrella"></i> Leave Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Leave</li>
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
                <h3 class="box-title">Student Leave Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                    @csrf
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Student class<font size="1" style="font-weight: normal;">
                                    (Unique class) </font> <span style="color:red;">*</span></label>
                            <select name="student_class" class="form-control select2" id="class_detail" required>
                                <option value="">Select class</option>
                                @foreach ($get_class as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <input  type="hidden" name="id" />

                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Section</label>
                            <select class="form-control" name="student_class_section" id="student_class_section">
                                <option value="">All</option>

                            </select>
                        </div>
                    </div>

                    <input type="hidden" name="hostel_student_id" placeholder="Unique Id" value="_4"
                        class="form-control" readonly>
                    <div class="col-md-2" style="display:none;">
                        <div class="form-group">
                            <button type="submit" style="margin-top:24px;" name="fill"
                                class="btn btn-primary">Validate</button>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Student Name<font size="1" style="font-weight: normal;">(Unique Student Name)
                                </font> <span style="color:red;">*</span></label>
                            <select name="id" class="form-control select2" id="studentlist"
                                onchange="roll_no(this.value);" required>
                                <option value="">Select Student Name</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-md-4 ">

                    </div>
                    <div class="col-md-4 ">

                    </div>
                    <div class="col-md-4 ">

                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Student Roll No </label>
                            <input type="text" name="student_roll_no" placeholder="Student Roll No"
                                id="student_roll_no" class="form-control" readonly>
                        </div>

                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Leave From<font size="1" style="font-weight: normal;"></font> <span
                                    style="color:red;">*</span> </label>
                            <input type="date" id="leave_from_date" name="leave_from_date" placeholder="Leave From "
                                onchange="" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Leave To <font size="1" style="font-weight: normal;"></font> <span
                                    style="color:red;">*</span></label>
                            <input type="date" onchange="check_date(this.value);" id="leave_to_date"
                                name="leave_to_date" placeholder="Leave To" value="" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Approved By</label>
                            <select name="approved_by" class="form-control" id="approved_by" value=""
                                class="form-control">
                                <option value="">Select</option>
                                <option value="Approved">Approved</option>
                                <option value="Non-Approved">Non-Approved</option>
                            </select>
                            {{-- <input type="text" name="approved_by" placeholder="Approved By" value=""
                                class="form-control"> --}}
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Upload Application</label>
                            <input type="file" id="leave_application_" name="upload_application_photo"
                                value=""
                                onchange="check_file_type(this,'leave_application','show_application','all');"class="form-control"
                                accept=".gif, .jpg, .jpeg, .png, .pdf, .doc">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <img src="" id="show_application" height="50" width="50">
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label>Total leave days</label>
                            <input type="text" name="total_leave_days" id="total_leave_days"
                                placeholder="Total leave days" value="" class="form-control" readonly>
                        </div>
                    </div>
                    {{-- <div class="col-md-1 ">
                        <div class="form-group">
                            <label>Sunday Holiday</label>
                            <input type="text" id="total_sunday" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-1 ">
                        <div class="form-group">
                            <label>Total Holiday</label>
                            <input type="text" id="total_holiday" value="" class="form-control" readonly>
                        </div> --}}
                    <div class="col-md-1 "style="display: none;">
                    </div>
            </div>
            <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>





            </form>
            <div class="col-md-12">

            </div>
        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>
</section>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $("#class_detail").change(function() {
            var class_id = $(this).val();
            // alert("hello");
            if (class_id == "") {
                var class_id = 0;
            }
            $.ajax({
                // url: '{{ url('/fetch-sections/') }}/' + staff_id,
                url: '{{ url('/fetchSections') }}/' + class_id,
                type: 'get',
                success: function(response) {
                    $('#student_class_section').html(response.section);
                    $('#studentlist').html(response.student);

                }
            });
        });
    });
</script>
<script>
    $(function() {
        $('#example1').DataTable()
    })
</script>
@include('common.footer')
