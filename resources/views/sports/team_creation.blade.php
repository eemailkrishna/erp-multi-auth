@include('common.header')
@include('common.navbar')

<style>
#staff_company {
    padding: 15px;
    width: 100%;
    height: 300px;
    overflow: scroll;
    border: 1px solid #ccc;
}
</style>

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
function for_check(id) {
    if ($('#' + id).prop("checked") == true) {
        $("." + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $("." + id).each(function() {
            $(this).prop('checked', false);
        });
    }
}
</script>

<!---vidhan---->
<script>
// function for_search11() {
// var sports_name = document.getElementById('sports_name').value;
// var gender = document.getElementById('gender').value;
// var age_category = document.getElementById('age_category').value;
// var sports_type = document.getElementById('sports_type').value;
// if (sports_name != '' || gender != '' || age_category != '' || sports_type != '') {
// $('#for_student_list').html();
// $.ajax({
// type: "POST",
// url: access_link + "sports/ajax_team_creation.php?sports_name=" + sports_name + "&gender=" +
// gender + "&age_category=" + age_category + "&sports_type=" + sports_type + "",
// success: function(detail) {
// $('#for_student_list').html(detail);
// $('#company_123').val('All').change();
// }
// });

// } else {
// $('#for_student_list').html('');
// $('#company_123').val('All').change();
// }
// }

function validation() {
    var add = 0;
    $(".checked1").each(function() {
        if ($(this).prop("checked") == true) {
            add = add + 1;
        }
    });
    var add1 = 0;
    $(".checked2").each(function() {
        if ($(this).prop("checked") == true) {
            add1 = add1 + 1;
        }
    });
    if (add > 0 && add1 > 0) {
        return true;
    } else {
        alert_new("Please Select Atleast One Student Or One Escorts !!!", 'red');
        return false;
    }
}
</script>

<script>
function data_fill(value) {
    $(".type_data").each(function() {
        $(this).val(value);
    });
}

function select_company() {
    var company_123 = document.getElementById('company_123').value;
    var sports_name = document.getElementById('sports_name').value;
    if (company_123 != '' && sports_name != '') {
        $('#student_name_company').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "sports/ajax_staff_name.php?company_123=" + company_123 + "&sports_name=" +
                sports_name + "",
            success: function(detail) {
                $('#student_name_company').html(detail);
            }
        });
    } else {
        $('#student_name_company').html('');
    }
}

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "sports/team_creation_api.php",
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
                get_content('sports/team_creation_list');
            }
        }
    });
});
</script>
<section class="content-header">
    <h1>
        Team Creation
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/sports')}}" #><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Team Creation </li>
    </ol>
</section>
<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    @if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{Session::get('success')}}
    </div>
    @endif
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Team Creation</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Participate form--------------------------------------------------->
            <form role="form" action="{{url('team-create-staff')}}" method="post" id="my_form"
                enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="box-body table-responsive">
                        <div class="col-sm-12">&nbsp;</div>
                        <div class="col-sm-12">

                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="container-fluid">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-sm-4">
                                                <label>Sports Name</label>
                                                <select name="event_name11" class="form-control" id="sports_name"
                                                    onchange="for_search11();">
                                                    <option value="">All</option>
                                                    @if (!empty($sports))
                                                    @foreach ($sports as $sport)
                                                    <option value="{{ $sport->id }}">{{ $sport->sports_name }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Gender</label>
                                                <select name="gender11" class="form-control" id="gender"
                                                    onchange="for_search11();">
                                                    <option value="">All</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Category</label>
                                                <select name="age_category" class="form-control" id="age_category"
                                                    onchange="for_search11();">
                                                    <option value="">All</option>
                                                    <option value="5">Under 5 Years</option>
                                                    <option value="10">Under 10 Years</option>
                                                    <option value="15">Under 15 Years</option>
                                                    <option value="18">Under 18 Years</option>
                                                    <option value="20">Under 20 Years</option>
                                                    <option value="25">Under 25 Years</option>
                                                    <option value="30">Under 30 Years</option>
                                                    <option value="35">Under 35 Years</option>
                                                    <option value="50">Under 50 Years</option>
                                                    <option value="100">Under 100 Years</option>


                                                </select>
                                            </div>

                                            <!-- <div class="col-sm-3">
                                                <label>Escorts(Staff)</label>
                                                <select name="company_123" style="width:100%;" id="company_123"
                                                    class="form-control" onchange="select_company();">
                                                    <option value="">All</option>
                                                    @if (!empty($employeesName))
                                                    @foreach ($employeesName as $emp)
                                                    @if($emp->user)
                                                    <option value="{{ $emp->user->id }}">{{ $emp->user->name }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ---------------------------------------------------------------------------------- -->
                            <div id="for_student_list">
                                <div id="staff_company">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>All<br /><input type="checkbox" id="checked1" checked value=""
                                                        name="" onclick="for_check(this.id);"></th>
                                                <th>S No.</th>
                                                <th>Name</th>
                                                <th>Class & Section</th>
                                                <th>Roll No</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Dob</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($participate as $player)

                                            <tr align='center'>
                                                <td><input type="checkbox" class="checked1" checked
                                                        value="{{$player->student_id}}" name="student_index[]">
                                                </td>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <input type="text" value="{{$player->name}}" name="student_name[]"
                                                        class="form-control" style="border:none;" readonly>
                                                </td>
                                                <td class="hidden">
                                                    <input type="text" value="{{$player->student_id}}"
                                                        name="student_id[]" class="form-control" style="border:none;"
                                                        readonly>
                                                </td>
                                                <td>
                                                    <input type="text"
                                                        value="{{$player->class_name}} - {{$player->section_name}}"
                                                        name="student_class[]" class="form-control" style="border:none;"
                                                        readonly>
                                                </td>
                                                <td class="hidden">
                                                    <input type="text" value="{{$player->class_id}}" name="class_id[]"
                                                        class="form-control" style="border:none;" readonly>
                                                </td>
                                                <td class="hidden">
                                                    <input type="text" value="{{$player->section_id}}"
                                                        name="section_id[]" class="form-control" style="border:none;"
                                                        readonly>
                                                </td>
                                                <td>
                                                    <input type="text" value="{{$player->roll_no}}"
                                                        name="student_roll_number[]" class="form-control"
                                                        style="border:none;" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" value="{{$player->father_name}}"
                                                        name="student_father_name[]" class="form-control"
                                                        style="border:none;" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" value="{{$player->mother_name}}"
                                                        name="student_mother_name[]" class="form-control"
                                                        style="border:none;" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" value="{{$player->dob}}" name="dateofbirth[]"
                                                        class="form-control" style="border:none;" readonly>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- <div id="student_name_company">  -->

                            <div id="staff_company">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>All<br /><input type="checkbox" checked id="checked2" value="" name=""
                                                    onclick="for_check(this.id);"></th>
                                            <th>S No.</th>
                                            <th>Name Of Staff</th>
                                            <th>Designation</th>
                                            <th>Contact No</th>
                                            <th>Name Of Events</th>
                                            <th style="width:150px;">Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody id="exampl" class="dinkar">
                                        @foreach ($employees as $emp)
                                        <tr align='center'>
                                            <td>
                                                <input type="checkbox" class="checked2" checked value="{{ $emp->id }}"
                                                    name="staff_index[]">
                                            </td>
                                            <td>{{$loop->iteration}}</td>
                                            <td class="hidden">
                                                <input type="text" value="{{ $emp->id }}" name="staff_id[]"
                                                    class="form-control" style="border:none;" readonly>
                                            </td>
                                            <td>
                                                <input type="text" value="{{ $emp->name }}" name="staff_name[]"
                                                    class="form-control" style="border:none;" readonly>
                                            </td>
                                            <td>
                                                <input type="text" value="{{$emp->emp_designation}}"
                                                    name="emp_designation[]" class="form-control" style="border:none;"
                                                    readonly>
                                            </td>
                                            <td>
                                                <input type="text" value="{{$emp->phone_number}}" name="emp_mobile[]"
                                                    class="form-control" style="border:none;" readonly>
                                            </td>
                                            <td>
                                                <select name="sport_id[]" class="form-control" id="sport_id"
                                                    onchange="for_search11();">
                                                    <option value="">Select Sport</option>
                                                    @if (!empty($sports))
                                                    @foreach ($sports as $sport)
                                                    <option value="{{ $sport->id }}">{{ $sport->sports_name }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="remark[]" class="form-control">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- </div> -->
                            <div class="col-md-12">
                                <center>
                                    <input type="submit" name="submit" value="Submit" class="btn btn-success saveBtn" />
                                </center>
                            </div>
                            <!-- </div> -->
                            <!-- /.col -->
                        </div>
                    </div>
            </form>

            <!---------------------------------------------End Participate form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>

@include('common.footer')

<!-- <script>
$(document).ready(function() {
    $('.saveBtn').on('click', function(e) {
        e.preventDefault();

        const staff_index = [];
        const staff_id = [];
        const sport_id = [];
        const remark = [];

        $('.checked2').each(function() {
            if ($(this).is(":checked")) {
                staff_index.push($(this).val());

            }
        });
        $('input[name^="staff_id"]').each(function() {
            staff_id.push($(this).val());
            // alert(staff_id);

        });

        $('input[name^="sport_id"]').each(function() {
            sport_id.push($(this).val());
            alert(sport_id);

        });

        $('input[name^="remark"]').each(function() {
            remark.push($(this).val());
        });

        $.ajax({
            url: "{{route('team-create-staff')}}",
            type: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                staff_index: staff_index,
                staff_id: staff_id,
                sport_id: sport_id,
                remark: remark,
            },
            success: function(response) {

            }
        });

    });
});
</script> -->

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
$(document).ready(function() {
    //---------------------------------------Age-Category---------------------------------------------
    $("#sports_name").change(function() {
        var sports_name = document.getElementById('sports_name').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({

            url: "{{route('team-craetion-data')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                sports_name: sports_name
            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });

    //---------------------------------------CLASS-NAME---------------------------------------------
    $("#gender").change(function() {
        var gender = document.getElementById('gender').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({
            url: "{{route('team-craetion-data')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                // sports_name: sports_name,
                gender: gender
            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });
    //---------------------------------------GENDER----------------------------------------------
    $("#age_category").change(function() {

        var category = document.getElementById('age_category').value;
        // var sports_name = document.getElementById('sports_name').value;
        // var gender = document.getElementById('gender').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;

        }
        $.ajax({
            url: "{{route('team-craetion-data')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                category: category,
                // sports_name: sports_name,
                // gender: gender


            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });
    //---------------------------------------SPORTS-NAME---------------------------------------------
    // $("#company_123").change(function() {

    //     var company_123 = document.getElementById('company_123').value;
    //     // var category = document.getElementById('age_category').value;
    //     // var class_name = document.getElementById('class').value;
    //     // var gender = document.getElementById('gender').value;

    //     var value = $(this).val();
    //     if (value == "") {
    //         var value = 0;
    //     }
    //     $.ajax({

    //         url: "{{route('team-craetion-data')}}",
    //         type: "post",
    //         data: {
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },

    //             company_123: company_123
    //             // category: category,
    //             // class_name: class_name,
    //             // gender: gender
    //         },
    //         success: function(data) {
    //             $("#example1").html(data);
    //         }
    //     });

    // });


});
</script>


<script>
$(function() {
    $('#example2').DataTable()
})

$(function() {
    $('.select2').select2()
})
</script>

<script>
$(function() {
    $('.table').DataTable()
})
</script>