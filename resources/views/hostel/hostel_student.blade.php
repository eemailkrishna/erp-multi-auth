@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $("#my_form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        loader();
        $.ajax({
            url: access_link + "hostel/hostel_student_api.php",
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
                    get_content('hostel/hostel_student_list');
                }
            }
        });
    });
</script>
<script type="text/javascript">
    function hostel_detail(id) {

        $.ajax({
            type: "get",
            url: "{{ url('hostal-info') }}/" + id,
            cache: false,
            success: function(hostel) {
                $('#hostel_room').val(hostel.hostal_room_no);
                $('#hostel_bed_type').val(hostel.hostal_room_bed_type);
                $('#hostel_room_faci').val(hostel.hostal.hostal_facilities);
                $('#hostel_wash').val(hostel.hostal_attach_washroom);
                $('#hostel_room_charge').val(hostel.hostal_charge_per_student);
                // $('#mess').val(hostel.hostal.hostal_mess);
                $('select[name^="hostel_mess"] option[value="'+hostel.hostal.hostal_mess+'"]').attr("selected","selected");

            }
        });

    }
</script>

<script type="text/javascript">
    function fill_detail(value) {
        // alert_new('hit');
        $.ajax({
            type: "get",
            url: "{{url('student-info')}}/" + value,
            cache: false,
            success: function(detail) {

                $('#student-id').val(detail.id);
                $('#student_father_name').val(detail.father_name);
                $('#student_date_of_birth').val(detail.user.dob);
                $('select[name^="hostel_student_gender"] option[value="'+detail.user.gender+'"]').attr("selected","selected");
                //$('#student_gender option').val(detail.user.gender);
                $('#student_roll_no').val(detail.roll_no);
                $('#student_father_contact_number').val(detail.father_contact);
                $('#student_mother_name').val(detail.mother_name);
                $('#student_email_id').val(detail.user.email);
                $('#emergency_contact').val(detail.father_contact1);

            }
            });
        }
    </script>

<section class="content-header">
    <h1>
        Hostel Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
        <li><a href="javascript:get_content('hostel/hostel_list')"><i class="fa fa-bed"></i>Hostel List</a></li>
        <li class="Active">Hostel Student Add</li>
    </ol>
</section>


<!---*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content" id="data">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">

            <div class="box-header with-border ">
                <h3 class="box-title">Registration Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <form method="POST" enctype="multipart/form-data" id="my_form" action="{{ url('/hostel-student') }}">
                @csrf
            <div class="box-body">

                <div class="box-body">
                    <h3 style="color:#d9534f;"><b>Student Admission In Hostel</b></h3>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Student class<font size="1" style="font-weight: normal;">
                                    (Unique Id) </font> <span style="color:red;">*</span></label>
                            <select name="student_class" class="form-control select2" id="select_hostel" required>
                                <option value="">Select class</option>
                                @foreach ($class as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Section</label>
                            <select class="form-control" name="student_class_section" id="student_class_section"
                                onchange="for_list();">
                                <option value="">All</option>
                                {{-- @if (count($student) > 0)
                                    @foreach ($student as $section)
                                        @if ($section->user)
                                        <option value="{{ $section->id }}">{{ $section->class->name}}</option>
                                        @endif
                                    @endforeach
                                    @endif --}}
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
                            <label>Student Name<font size="1" style="font-weight: normal;">
                                    (Unique Id) </font> <span style="color:red;">*</span></label>
                            <select name="student_name" class="form-control select2" id="studentlist" onchange="fill_detail(this.value);" required>
                                 <option value="" >Select Student Name</option>
                                {{--    @foreach ($student as $item)
                                    @if ($item->user)
                                        <option value="{{ $item->id }}">{{ $item->user->name }}</option>
                                        @endif
                                    @endforeach --}}
                            </select>

                        </div>
                    </div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Father's Name<font style="color:red"><b>*</b></font></label>
                                <input type="text" name="hotel_father_name" placeholder="Father's Name"
                                    id="student_father_name" value="" class="form-control" readonly required>
                            </div>
                            <input type="hidden" name="id" placeholder="Father's Name"
                            id="student-id" value="" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" name="hostel_student_dob" id="student_date_of_birth"
                                    value="" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Gender</label><br>
                                <select name="hostel_student_gender" id="student_gender" class="form-control" readonly>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Handicapped </label>
                                <select name="hostel_student_handicapped" id="student_handicapped" class="form-control">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Religion</label>
                                <input type="text" name="hostel_student_religion" id="student_religion"
                                    placeholder="Religion" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="hostel_student_category" id="student_category"
                                    placeholder="Category" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Aadhar No.<font style="color:red"><b>*</b></font></label>
                                <input type="text" name="hostel_student_aadhar" id="student_adhar_number"
                                    placeholder="Aadhar No." value="12345678908765" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Roll Number<font style="color:red"><b>*</b></font></label>
                                <input type="text" name="hostel_student_roll_no" placeholder="Class"
                                    id="student_roll_no" value="" placeholder="Roll No" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Father Contact No.<font style="color:red"><b>*</b></font></label>
                                <input type="text" name="hostel_student_father_contact"
                                    id="student_father_contact_number" placeholder="Father Contact No."
                                    value="" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Father Email Id</label>
                                <input type="text" name="hostel_student_father_email" id="student_father_email_id"
                                    placeholder="Father Email Id" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Mother's Name<font style="color:red"><b>*</b></font></label>
                                <input type="text" name="hostel_student_mother_name" id="student_mother_name"
                                    placeholder="Mother's Name" value="" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Mother Contact No</label>
                                <input type="text" name="hostel_student_mother_contact"
                                    id="student_mother_contact_number" placeholder="Mother Contact No" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 " style="display:none;">
                            <div class="form-group">
                                <label></label>
                                <input type="text" name="hostel_student_contact" id="student_contact_number"
                                    placeholder="" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Student Email Id</label>
                                <input type="text" name="hostel_student_email" id="student_email_id"
                                    placeholder="Student Email Id" value="" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-4" style="display:none;">
                            <div class="form-group">
                                <label>Student Photo<font style="color:red"><b>*</b></font></label>
                                <input type="text" name="hostel_student_photo" value="" id="student_photo"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4" style="display:none;">
                            <div class="form-group">
                                <label>School Name</label>
                                <input type="text" name="hostel_school_name" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Emergency Contact</label>
                                <input type="text" name="hostel_emergency_contact" id="emergency_contact"
                                    placeholder="Emergency Contact" value="Emergency Contact" class="form-control" readonly>
                            </div>
                        </div>
                </div>

                {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Room
                    Allotment</button> --}}


                <!-----------------------------------------------Model Box Start----------------------------------------------------------->

                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header my_background_color">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Hostel Room</h4>
                            </div>
                            {{-- <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Hostel</label>
                                            <select name="hostel_name" id="hostel_name" class="form-control">
                                                <option value=''>Select</option>
                                                @if (count($student) > 0)
                                                    @foreach ($student as $hostel)
                                                        <option value='{{ $hostel->id }}'>
                                                            {{ $hostel->hostal->hostal_name }}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div> --}}
                                <div class="col-md-12" id="bed_detail">




                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                {{-- <button type="submit" class="btn btn-info">Submit</button> --}}
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <!-----------------------------------------------Model Box End------------------------------------------------------------>


                <div class="box-body">
                    <h3 style="color:#d9534f;"><b>Hostel Info</b></h3>
                    <div class="col-md-4 ">
                        <div class="form-group">

                            <label>Hostel Name<font style="color:red"><b>*</b></font></label>
                            <select name="hostal_name" class="form-control select2"  onchange="hostel_detail(this.value);"  required>
                                <option value="">Hostel Name</option>
                                @if (count($hostal) > 0)
                                    @foreach ($hostal as $hot)
                                        <option value="{{ $hot->id }}">
                                            {{ $hot->hostal_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            {{-- <input type="text" name="hostel_name1" id="hostel_name"
                                    placeholder="Hostel Name" value="" class="form-control" required> --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Room No.<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="hostel_room" id="hostel_room" placeholder="Room No."
                                value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Room Bed Type<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="hostel_bed_type" id="hostel_bed_type"
                                placeholder="Room Bed Type" value="" class="form-control" readonly required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Facilities<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="hostel_room_facility" id="hostel_room_faci"
                                placeholder="Facilities" value="" class="form-control" readonly required />
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Attach Washroom<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="hostel_washroom" id="hostel_wash"
                                placeholder="Attach Washroom" value="" class="form-control" readonly required />
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Room Charge Per Bed<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="hostel_room_charge_per_bed" id="hostel_room_charge"
                                placeholder="Room Charge Per Bed" value="" class="form-control" readonly required />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Room Table</label>
                            <select class="form-control" name="hostel_room_table">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Room Bed</label>
                            <select class="form-control" name="hostel_room_bed">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Room Almirah</label>
                            <select class="form-control" name="hostel_room_almirah">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Mess</label>
                            <select class="form-control" name="hostel_mess" id="mess" readonly>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Mess Charge</label>
                            <input type="text" class="form-control" name="hostel_mess_charge" placeholder="Mess Charge">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Date Of Joining</label>
                            <input type="date" name="hostel_join" value="2022-12-05" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Caution Money</label>
                            <input type="text" name="hostel_caution_money" placeholder="Caution Money"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Laundry Charge</label>
                            <input type="text" name="hostel_laundry_charge" placeholder="Laundry Charge"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <center><button type="submit" name="submit" class="btn btn-primary">Submit
                                    Details</button></center>
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
<script>
    $(function() {
        $('.select2').select2();
    });
</script>



<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $("#select_hostel").change(function() {
            var hostel_id = $(this).val();
            // alert(hostel_id);
            if (hostel_id == "") {
                var hostel_id = 0;
            }
            $.ajax({
                // url: '{{ url('/fetch-sections/') }}/' + hostel_id,
                url: '{{ url('/getSections') }}/' + hostel_id,
                type: 'get',
                success: function(response) {
                    $('#student_class_section').html(response.output);
                    $('#studentlist').html(response.student);


                }
            });
        });
    });
</script>


@include('common.footer')
