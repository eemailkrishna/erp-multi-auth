@include('common.header')
@include('common.navbar')
<!-- 
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "account/add_account_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                //alert_new('Successfully Complete');
                get_content('account/account_list');
            }
        }
    });
});
</script> -->
<script>
function user_select(value) {
    if (value == 'Staff') {
        $("#staff").val('');
        $("#class").val('');
        $("#selectStudent").val('');
        $("#selectTeacher").val('');
        $("#driverDropdown").val('');
        $("#houseDropdown").val('');

        $("#staff").prop("required", true);
        $("#class").prop("required", false);
        $("#selectStudent").prop("required", false);
        $("#selectTeacher").prop("required", true);

        $('#staffDropdown').show();
        $('#classDropdown').hide();
        $('#studentDropdown').hide();
        $('#teacherDropdown').hide();
        $('#driverDropdown').hide();
        $('#houseDropdown').hide();
    } else if (value == 'Student') {
        $("#staff").val('');
        $("#class").val('');
        $("#selectStudent").val('');
        $("#selectTeacher").val('');
        $("#driverDropdown").val('');
        $("#houseDropdown").val('');

        $("#staff").prop("required", false);
        $("#class").prop("required", true);
        $("#selectStudent").prop("required", true);
        $("#selectTeacher").prop("required", false);

        $('#staffDropdown').hide();
        $('#classDropdown').show();
        $('#studentDropdown').show();
        $('#teacherDropdown').hide();
        $('#driverDropdown').hide();
        $('#houseDropdown').hide();
    } else {
        $("#staff").val('');
        $("#class").val('');
        $("#selectStudent").val('');
        $("#selectTeacher").val('');
        $("#driverDropdown").val('');
        $("#houseDropdown").val('');

        $("#staff").prop("required", false);
        $("#class").prop("required", false);
        $("#selectStudent").prop("required", false);
        $("#selectTeacher").prop("required", false);
        $('#staffDropdown').hide();
        $('#classDropdown').hide();
        $('#studentDropdown').hide();
        $('#teacherDropdown').hide();
        $('#driverDropdown').hide();
        $('#houseDropdown').hide();
    }
}

function staff_select(value) {
    if (value == 'Teacher') {
        $('#selectTeacher').val();
        $('#selectDriver').val();
        $('#selectHouse').val();

        $('#selectTeacher').prop("required", true);
        $('#selectDriver').prop("required", false);
        $('#selectHouse').prop("required", false);

        $('#teacherDropdown').show();
        $('#driverDropdown').hide();
        $('#houseDropdown').hide();

    } else if (value == 'Driver') {
        $('#selectTeacher').val();
        $('#selectDriver').val();
        $('#selectHouse').val();

        $('#selectTeacher').prop("required", false);
        $('#selectDriver').prop("required", true);
        $('#selectHouse').prop("required", false);

        $('#teacherDropdown').hide();
        $('#driverDropdown').show();
        $('#houseDropdown').hide();

    } else if (value == 'Housekeepers') {
        $('#selectTeacher').val();
        $('#selectDriver').val();
        $('#selectHouse').val();

        $('#selectTeacher').prop("required", false);
        $('#selectDriver').prop("required", false);
        $('#selectHouse').prop("required", true);

        $('#teacherDropdown').hide();
        $('#driverDropdown').hide();
        $('#houseDropdown').show();

    } else {
        $('#selectTeacher').val();
        $('#selectDriver').val();
        $('#selectHouse').val();

        $('#teacherDropdown').hide();
        $('#driverDropdown').hide();
        $('#houseDropdown').hide();
    }
}
</script>

<section class="content-header">
    <h1>
        Account Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/account')}}"><i class="fa fa-inr"></i>Account</a></li>
        <li><a href="{{url('/account-list')}}"><i class="fa fa-list"></i>Account List</a></li>
        <li class="active">Add Account</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
                <h3 class="box-title" style=" color: red;"> Bank Account Registration Form </h3>
            </div>

            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="col-md-12">

                <form role="form" action="{{url('add-bank-account')}}" method="post" enctype="multipart/form-data"
                    id="my_form">
                    @csrf
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select User Type<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="userDropdown" id="userDropdown"
                                onchange="user_select(this.value);" required>
                                <option value="">Select User Type</option>
                                <option value="Staff">Staff</option>
                                <option value="Student">Student</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-4" id="staffDropdown" style="display:none">
                        <div class="form-group">
                            <label>Staff Type<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" onchange="staff_select(this.value);" id="staff"
                                name="staffDropdown" required>
                                <option value="">Select Staff Type</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Driver">Driver</option>
                                <option value="Housekeepers">Housekeepers</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4" id="teacherDropdown" style="display:none">
                        <div class="form-group">
                            <label>Select Teacher<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" id="selectTeacher" name="teacherDropdown" required>
                                <option value="">Select Teacher</option>
                                @if (!empty($employees))
                                @foreach ($employees as $staff)
                                <option value="{{ $staff->id }}">{{ $staff->name }} [{{$staff->phone_number }}]</option>
                                @endforeach
                                @endif

                            </select>
                        </div>
                    </div>

                    <div class="col-md-4" id="driverDropdown" style="display:none">
                        <div class="form-group">
                            <label>Select Driver<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" id="selectDriver" name="driverDropdown">
                                <option value="">Select Driver</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-4" id="houseDropdown" style="display:none">
                        <div class="form-group">
                            <label>Select House Keepers<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" id="selectHouse" name="houseDropdown">
                                <option value="">Select House Keepers</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-4" id="classDropdown" style="display:none">
                        <div class="form-group">
                            <label>Select Class<font style="color:red"><b>*</b></font></label>
                            <select name="classDropdown" id="class" class="form-control" required>
                                <option value="">Select Class</option>
                                @if (!empty($classes))
                                @foreach ($classes as $class)
                                <option value="{{$class->id }}">{{ $class->class_name }}
                                </option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4" id="studentDropdown" style="display:none">
                        <div class="form-group">
                            <label>Select Student<font style="color:red"><b>*</b></font></label>
                            <select name="studentDropdown" id="selectStudent" class="form-control" required>
                                <option value="">Select Student</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Account Holder Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" pattern="^[a-zA-Z ]*$" name="bank_account_holder_name" value=""
                                class="form-control" required>
                            <span class="text-danger">
                                @error('bank_account_holder_name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Account Number<font style="color:red"><b>*</b></font></label>
                            <input type="number" pattern="^[0-9]{16}$" name="bank_account_no" value=""
                                class="form-control" required>
                            <span class="text-danger">
                                @error('bank_account_no')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bank Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" pattern="^[a-zA-Z ]*$" name="bank_name" value="" class="form-control"
                                required>
                            <span class="text-danger">
                                @error('bank_name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bank Branch Name</label>
                            <input type="text" pattern="^[a-zA-Z0-9 ]*$" name="bank_branch_name" value=""
                                class="form-control" required>
                            <span class="text-danger">
                                @error('bank_branch_name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bank IFSC Code</label>
                            <input type="text" pattern="^[A-Z]{4}0[A-Z0-9]{6}$" name="bank_ifsc_code" value=""
                                class="form-control" required>
                            <span class="text-danger">
                                @error('bank_ifsc_code')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('common.footer')

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
$(document).ready(function() {
    $("#class").change(function() {
        var class_id = $(this).val();
        if (class_id == "") {
            var class_id = 0;
        }

        $.ajax({
            url: '{{ url("/fetch-students-dropdown/") }}/' + class_id,
            type: 'post',
            dataType: 'json',
            success: function(response) {

                $('#selectStudent').find('option:not(:first)').remove();
                if (response['students'].length > 0) {
                    $.each(response['students'], function(key, value) {
                        $("#selectStudent").append("<option value='" + value['id'] +
                            "'>" +
                            value['user']['name'] + "</option>")
                    });
                }
            }
        });
    });
});
</script>