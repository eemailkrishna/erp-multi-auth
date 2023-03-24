@include('common.header')
@include('common.navbar')
<script>
    window.scrollTo(0, 0);

    function payment_mode(value) {
        if (value == 'Cheque') {
            $('#for_cheque_date').show();
            $('#for_cheque_no').show();
            $('#for_cheque_name').show();
            $('#for_neft_account_no').hide();
            $('#for_neft_bank_name').hide();
        } else if (value == 'NEFT') {
            $('#for_neft_account_no').show();
            $('#for_neft_bank_name').show();
            $('#for_cheque_date').hide();
            $('#for_cheque_no').hide();
            $('#for_cheque_name').hide();
        } else {
            $('#for_cheque_date').hide();
            $('#for_cheque_no').hide();
            $('#for_cheque_name').hide();
            $('#for_neft_account_no').hide();
            $('#for_neft_bank_name').hide();
        }
    }
</script>

<script>
    function total_fee() {
        var add = 0;
        $('.amt').each(function() {
            add += Number($(this).val());
        });
        document.getElementById('total_paid').value = add;
    }
</script>
<script type="text/javascript">
    function fill_detail() {
        var value = document.getElementById('select_student').value;
        var term = document.getElementById('fitness_test').value;
        if (value != '') {
            $("#student_name").val('Loading....');
            $("#student_father_name").val('Loading....');
            $("#student_roll_no").val('Loading....');
            $("#student_class").val('Loading....');
            $("#student_class_section").val('Loading....');
            $.ajax({
                address: "POST",
                url: access_link + "student/ajax_physical_fitness.php?id=" + value + "&&term=" + term + "",
                cache: false,
                success: function(detail) {
                    var str = detail;
                    $("#fee_details").html(str);
                }
            });
        }


    }

    function fitness_detail(value, id) {
        if (id == "body_weight") {
            if (value <= 34.9) {
                $('#body_weight_zone').val('Zone1');
                $('#body_weight_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#body_weight_zone').val('Zone2');
                $('#body_weight_description').val('Within HZ');
            } else if (value >= 43) {
                $('#body_weight_zone').val('Zone3');
                $('#body_weight_description').val('Exceeds HZ');
            }
        } else if (id == "body_height") {
            if (value <= 34.9) {
                $('#body_height_zone').val('Zone1');
                $('#body_height_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#body_height_zone').val('Zone2');
                $('#body_height_description').val('Within HZ');
            } else if (value >= 43) {
                $('#body_height_zone').val('Zone3');
                $('#body_height_description').val('Exceeds HZ');
            }
        } else if (id == "pacer") {
            if (value <= 34.9) {
                $('#pacer_zone').val('Zone1');
                $('#pacer_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#pacer_zone').val('Zone2');
                $('#pacer_description').val('Within HZ');
            } else if (value >= 43) {
                $('#pacer_zone').val('Zone3');
                $('#pacer_description').val('Exceeds HZ');
            }
        } else if (id == "trunk_lift") {
            if (value <= 34.9) {
                $('#trunk_lift_zone').val('Zone1');
                $('#trunk_lift_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#trunk_lift_zone').val('Zone2');
                $('#trunk_lift_description').val('Within HZ');
            } else if (value >= 43) {
                $('#trunk_lift_zone').val('Zone3');
                $('#trunk_lift_description').val('Exceeds HZ');
            }
        } else if (id == "sit_reach_l") {
            if (value <= 34.9) {
                $('#sit_reach_l_zone').val('Zone1');
                $('#sit_reach_l_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#sit_reach_l_zone').val('Zone2');
                $('#sit_reach_l_description').val('Within HZ');
            } else if (value >= 43) {
                $('#sit_reach_l_zone').val('Zone3');
                $('#sit_reach_l_description').val('Exceeds HZ');
            }
        } else if (id == "sit_reach_r") {
            if (value <= 34.9) {
                $('#sit_reach_r_zone').val('Zone1');
                $('#sit_reach_r_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#sit_reach_r_zone').val('Zone2');
                $('#sit_reach_r_description').val('Within HZ');
            } else if (value >= 43) {
                $('#sit_reach_r_zone').val('Zone3');
                $('#sit_reach_r_description').val('Exceeds HZ');
            }
        } else if (id == "sit_reach_r") {
            if (value <= 34.9) {
                $('#sit_reach_r_zone').val('Zone1');
                $('#sit_reach_r_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#sit_reach_r_zone').val('Zone2');
                $('#sit_reach_r_description').val('Within HZ');
            } else if (value >= 43) {
                $('#sit_reach_r_zone').val('Zone3');
                $('#sit_reach_r_description').val('Exceeds HZ');
            }
        } else if (id == "curl_ups") {
            if (value <= 34.9) {
                $('#curl_zone').val('Zone1');
                $('#curl_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#curl_zone').val('Zone2');
                $('#curl_description').val('Within HZ');
            } else if (value >= 43) {
                $('#curl_zone').val('Zone3');
                $('#curl_description').val('Exceeds HZ');
            }
        } else if (id == "standing_raw") {
            if (value <= 34.9) {
                $('#standing_zone').val('Zone1');
                $('#standing_description').val('Below HZ');
            } else if (value >= 35 && value <= 42.9) {
                $('#standing_zone').val('Zone2');
                $('#standing_description').val('Within HZ');
            } else if (value >= 43) {
                $('#standing_zone').val('Zone3');
                $('#standing_description').val('Exceeds HZ');
            }
        }
    }

    function validate() {
        var x = document.forms["myForm"]["student_name"].value;
        if (x == "") {
            alert_new("Student Nmae Must Be required !!!", "red");
            return false;
        }
    }
    $("#my_form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);

        $.ajax({
            url: access_link + "student/physical_fitness_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {

                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Complete', "green");
                    get_content('student/physical_fitness');
                }
            }
        });
    });
</script>


<section class="content-header">
    <h1>
        Student Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
        <li class="active">Fitness</li>
    </ol>
</section>



<!---*****************###########################################*********************************-->



<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <!-- /.box-header -->           
                <br>               
                </div>
            <br>
            <div class="col-md-12">
                <form name="myForm" method="post" action="{{url('/student/physical_fitness_insert')}}" enctype="multipart/form-data" id="my_form">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <select name="student_name" class="form-control select2" id="studentlist"
                                onchange="fill_details(this.value);" required>
                                <option value="">Select Student Name</option>

                                @foreach ($student as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="" id="fee_details">
                            <div class="box-body col-md-3">
                                <div class="form-group">
                                    <label>Fitness Test Date</label>
                                    <input type="date" name="fitness_test_date" placeholder="" value="2022-12-03"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>student Name</label>
                                    <input type="text" name="student_name" id="student_name2"
                                        placeholder="student Name" value="" class="form-control" readonly />
                                </div>
                                <div class="form-group">
                                    <label>Father's Name</label>
                                    <input type="text" name="student_father_name" id="student_father_name"
                                        placeholder="Father's Name" value="" class="form-control" readonly />
                                </div>
                                <div class="form-group">
                                    <label>Student Unique Id</label>
                                    <input type="hidden" name="student_roll_no" value="" class="form-control"
                                        readonly />
                                    <input type="text" id="student_roll_no" placeholder="Student Unique Id"
                                        value="" class="form-control" readonly />
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
                                    <input type="text" name="student_class" id="student_class" placeholder="Class"
                                        value="" class="form-control" readonly />
                                </div>
                                <div class="form-group">
                                    <label>Section</label>
                                    <input type="text" name="student_class_section" id="student_class_section"
                                        placeholder="Section" value="" class="form-control" readonly />
                                </div>



                            </div>
                            <div class="col-md-1">
                            </div>
                            <div style="border:1px solid" id="fitness_div" class="box-body table-responsive col-md-6"
                                id="example2">
                                <center>
                                    <h4 style="color:red;">Fitness Scores</h4>
                                </center>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Part Of Fitness</th>
                                            <th>Test</th>
                                            <th>Raw Score</th>
                                            <th>Zone</th>
                                            <th>Descrption</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">Body Composition</td>
                                            <td>Body Weight</td>
                                            <td><input type="number" id="body_weight" name="body_weight_rawscore"
                                                    oninput="fitness_detail(this.value,this.id)" class="form-control">
                                            </td>
                                            <td><input type="text" id="body_weight_zone" name="body_weight_zone"
                                                    class="form-control" readonly></td>
                                            <td><input type="text" id="body_weight_description"
                                                    name="body_weight_description" class="form-control"readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Body Height</td>
                                            <td><input type="number" oninput="fitness_detail(this.value,this.id)"
                                                    id="body_height" name="body_height_rawscore" class="form-control">
                                            </td>
                                            <td><input type="text" id="body_height_zone" name="body_height_zone"
                                                    class="form-control"readonly></td>
                                            <td><input type="text" id="body_height_description"
                                                    name="body_height_description" class="form-control"readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Cardio Resiratory Endurance</td>
                                            <td>Pacer(20m)</td>
                                            <td><input type="number" oninput="fitness_detail(this.value,this.id)"
                                                    name="pacer_raw_score" id="pacer" class="form-control"></td>
                                            <td><input type="text" id="pacer_zone" name="pacer_zone"
                                                    class="form-control" readonly></td>
                                            <td><input type="text" id="pacer_description" name="pacer_description"
                                                    class="form-control" readonly></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Flexibility</td>
                                            <td>Trunk Lift</td>
                                            <td><input type="number" oninput="fitness_detail(this.value,this.id)"
                                                    id="trunk_lift" name="trunk_lift_raw_score" class="form-control">
                                            </td>
                                            <td><input type="text" id="trunk_lift_zone" name="trunk_lift_zone"
                                                    class="form-control" readonly></td>
                                            <td><input type="text" id="trunk_lift_description"
                                                    name="trunk_lift_description" class="form-control" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Sit And reach(L)</td>
                                            <td><input type="number" name="sit_reach_l_raw_score"
                                                    oninput="fitness_detail(this.value,this.id)" id="sit_reach_l"
                                                    class="form-control"></td>
                                            <td><input type="text" name="sit_reach_l_zone" id="sit_reach_l_zone"
                                                    class="form-control" readonly></td>
                                            <td><input type="text" name="sit_reach_l_description"
                                                    id="sit_reach_l_description" class="form-control" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Sit And reach(R)</td>
                                            <td><input type="number" name="sit_reach_r_raw_score" id="sit_reach_r"
                                                    oninput="fitness_detail(this.value,this.id)" class="form-control">
                                            </td>
                                            <td><input type="text" name="sit_reach_r_zone" id="sit_reach_r_zone"
                                                    class="form-control" readonly></td>
                                            <td><input type="text" name="sit_reach_r_description"
                                                    id="sit_reach_r_description" class="form-control" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Muscular Endurance</td>
                                            <td>Curl-ups</td>
                                            <td><input type="number" name="curl_raw_score" id="curl_ups"
                                                    oninput="fitness_detail(this.value,this.id)" class="form-control">
                                            </td>
                                            <td><input type="text" name="curl_zone" id="curl_zone"
                                                    class="form-control" readonly></td>
                                            <td><input type="text" name="curl_description" id="curl_description"
                                                    class="form-control" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Muscular Strength</td>
                                            <td>Standing Long Jump</td>
                                            <td><input type="number" name="standing_raw_score" id="standing_raw"
                                                    oninput="fitness_detail(this.value,this.id)" class="form-control">
                                            </td>
                                            <td><input type="text" name="standing_zone" id="standing_zone"
                                                    class="form-control" readonly></td>
                                            <td><input type="text" name="standing_description"
                                                    id="standing_description" class="form-control" readonly></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="box-body ">
                            <div class="col-md-6">
                                <center><input type="submit" name="finish" value="Submit"
                                        class="btn btn-success" /></center>
                            </div>
                        </div>
                    </div> <br />
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
    </div>
</section>
@include('common.footer')
<script>
    $(function() {

        $('.select2').select2()

    })
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
    function fill_details(value) {

        // alert_new(value);
        $.ajax({
            type: "get",
            url: "{{ url('student/physical_fitness-info') }}/" + value,
            cache: false,
            success: function(detail) {
                // alert(detail);
                $('#student_name2').val(detail.name);
                $('#student_class').val(detail.student.class);
                $('#student_roll_no').val(detail.student.roll_no);
                $('#student_father_name').val(detail.student.father_name);
                // $('#student_cwsn').val(detail.student.child_wiht_spe_need);
                // $('#checkup_remark').val(detail.student.remark);
                // $('#student_Gender').val(detail.gender);

            }
        });
    }
</script>
