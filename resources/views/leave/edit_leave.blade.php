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

            //calculate time difference
            var time_difference = date2.getTime() - date1.getTime();

            //calculate days difference by dividing total milliseconds in a day
            var result = time_difference / (1000 * 60 * 60 * 24);

            $("#total_leave_days").val(result);
        } else {
            $("#total_leave_days").val(alert("please fill start to end correct date !!"));

        }
    }
</script>

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
                            <label>Student class</label>
                            <input type="text" name="std-class" placeholder="Student Class"
                                value="{{ $item->student->class->name }}" class="form-control" readonly />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Section </label>
                            <input type="text" name="section" placeholder="Section" class="form-control"
                                value="{{ $item->student->section->section_name }}" readonly />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" name="std-name" placeholder="Student Name" class="form-control"
                                value="{{ $item->student->user->name }}" readonly />

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
                            <input type="text" name="student_roll_no" value="{{ $item->student->roll_no }}"
                                placeholder="Student Roll No" id="student_roll_no" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Leave From<font size="1" style="font-weight: normal;"></font> <span
                                    style="color:red;">*</span> </label>
                            <input type="date" id="leave_from_date" value="{{ $item->leave_from_date }}"
                                name="leave_from_date" placeholder="Leave From " class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Leave To <font size="1" style="font-weight: normal;"></font> <span
                                    style="color:red;">*</span></label>
                            <input type="date" onchange="check_date(this.value);" id="leave_to_date"
                                name="leave_to_date" placeholder="Leave To" value="{{ $item->leave_to_date }}"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Approved By</label>
                            {{-- <select name="approved_by" class="form-control" id="approved_by" value=""
                                class="form-control">
                                <option value="">Select</option>
                                <option value="Approved">Approved</option>
                                <option value="Non-Approved">Non-Approved</option>
                            </select> --}}
                            <input type="text" name="approved_by" placeholder="Approved By" value="{{ $item->approved_by }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Upload Application</label>
                            <input type="file" id="leave_application_" name="upload_application_photo"
                                onchange="check_file_type(this,'leave_application','show_application','all');"class="form-control"
                                accept=".gif, .jpg, .jpeg, .png, .pdf, .doc">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <img src="{{ url('/public/images/upload_application_photo') }}" id="show_application"
                                height="50" width="50">
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label>Total leave days</label>
                            <input type="text" name="total_leave_days" id="total_leave_days"
                                placeholder="Total leave days" value="{{ $item->total_leave_days }}"
                                class="form-control" readonly>
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
            <center><input type="submit" name="finish" value="Update" class="btn btn-success" /></center>





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
