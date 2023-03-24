@include('common.header')
@include('common.navbar')


<style type="text/css">
.result {
    position: absolute;
    z-index: 999;
    top: 80%;
    left: 0;
    background: white;
}

#staff_company {
    padding: 15px;
    width: 100%;
    height: 300px;
    overflow: scroll;
    border: 1px solid #ccc;
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

<script>
function for_print() {
    var divToPrint = document.getElementById("example1");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>

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


<script>
// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//     }
// });

// function for_search11(value) {

//     var category = document.getElementById('age_category').value;
//     var class_name = document.getElementById('class').value;
//     var gender = document.getElementById('gender').value;
//     var sports_name = document.getElementById('sports_name').value;
//     if (category != '') {
//         if (category != '' && class_name == '' && gender == '' && sports_name == '') {
//             // $('#example1').html(value);

//             $.ajax({

//                 url: "{{route('search-sport')}}",
//                 type: "post",
//                 data: {
//                     // headers: {
//                     //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                     // },

//                     sports_name: sports_name,
//                     category: category,
//                     class_name: class_name,
//                     gender: gender
//                 },
//                 success: function(data) {
//                     alert(data);

//                     $("#example1").html(data);
//                 }
//             });

//             // $.ajax({
//             //     type: "post",
//             //     url: "{{route('search-sport')}}" + value,
//             // cache: false,


//             // url: access_link + "sports/ajax_age_category_student.php?age_category=" + age_category +
//             //     "&student_class=" + student_class + "&gender=" + gender + "&date_search=" + date_search +
//             //     "&sports_name=" + sports_name + "",
//             // success: function(detail) {
//             //     alert(detail);
//             //     $('#example1').html(detail);
//             // }
//             // });

//             // } else {
//             //     $('#example1').html('');
//         }
//     }
// }

function validation() {
    var add = 0;
    $(".checked1").each(function() {
        if ($(this).prop("checked") == true) {
            add = add + 1;
        }
    });
    if (add > 0) {
        return true;
    } else {
        alert_new("Please Select Atleast One Student !!!", 'red');
        return false;
    }
}
</script>

<section class="content-header">
    <h1>
        Age Category
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('sports')}}"><i class="fa fa-futbol-o"></i> Sport Management</a></li <li class="active"><i
            class="fa fa-user-plus"></i> Age Category</li>
    </ol>
</section>
<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Age Category</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Participate form--------------------------------------------------->
            <form action="" oninput="x.value=parseInt(age_category.value)" method="post" id="my_form"
                enctype="multipart/form-data">
                <div class="box-body">
                    <div class="box-body table-responsive">
                        <div class="col-sm-12">&nbsp;</div>
                        <div class="col-sm-12">

                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <div class="container-fluid">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-sm-4">
                                                <label>Age Category</label>
                                                <div class="input-group">
                                                    <input style="width:100%;" type="range" name="student_date_of_birth"
                                                        id="age_category" value="" onchange="for_search11(value)">
                                                    <span class="input-group-addon" style="padding:0px;">
                                                        <input style="color:red;font-size:20px;width:100px;" name="x"
                                                            value="" style="border:none;">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Class</label>
                                                <select name="class" class="form-control" id="class"
                                                    onchange="for_search11(value)" required>
                                                    <option value="">All</option>
                                                    @if (!empty($classes))
                                                    @foreach ($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->class_name }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Gender</label>
                                                <select name="gender" class="form-control" id="gender"
                                                    onchange="for_search11(value)" required>
                                                    <option value="">All</option>
                                                    <option value="male">male</option>
                                                    <option value="female">female</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-2">
                                                <label>Sports</label>
                                                <select name="sports_name" class="form-control" id="sports_name"
                                                    onchange="for_search11(value);">
                                                    <option value="">All</option>
                                                    @if (!empty($sports))
                                                    @foreach ($sports as $sport)
                                                    <option value="{{ $sport->id }}">{{ $sport->sports_name }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12"></div>
                        <div id="for_student_list">
                        </div>

                        <!-- /.col -->
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="box-body table-responsive">
                            </div>
                        </div>
                    </div>

                    <div id="staff_company">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>All<br /><input type="checkbox" id="checked1" value="" name=""
                                            onclick="for_check(this.id);"></th>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Gender</th>
                                    <th>Sport Name</th>
                                    <th>Roll No</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>DOB</th>
                                    <th>Age Category</th>
                                    <th style="width:200px;">Actual Age As Per In(YY-MM-DD)</th>
                                </tr>
                            </thead>
                            <tbody id="details">
                                @foreach ($data as $player)
                                <tr>
                                    <td><input type="checkbox" class="checked1" value="{{$player->id}}"
                                            name="student_index[]"></td>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$player->name}}</td>
                                    <td>{{$player->class_name}}</td>
                                    <td>{{$player->section_name}}</td>
                                    <td>{{$player->gender}}</td>
                                    <td>{{$player->sports_name}}</td>
                                    <td>{{$player->roll_no}}</td>
                                    <td>{{$player->father_name}}</td>
                                    <td>{{$player->mother_name}}</td>
                                    <td>{{$player->dob}}</td>
                                    <td>Under {{$player->age_category}} years</td>
                                    <td>{{$player->actual_age}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <center>
                            <button type="button" onclick="for_print();" aria-hidden="true"
                                class="btn btn-success">Print</button>
                        </center>
                        <!-- onclick="post_content('sports/download_category_list','age_category=1&student_class=All&gender=All&date_search=2022-12-05')">Print</button> -->
                    </div>
                </div>
            </form>
            <!---------------------------------------------End Participate form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>

@include('common.footer')
<script>
$(function() {
    $('#staff_company').DataTable()
})
</script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
$(document).ready(function() {
    //---------------------------------------Age-Category---------------------------------------------
    $("#age_category").change(function() {
        var category = document.getElementById('age_category').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({

            url: "{{route('search-sport')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                category: category
            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });

    //---------------------------------------CLASS-NAME---------------------------------------------
    $("#class").change(function() {
        // var category = document.getElementById('age_category').value;
        var class_name = document.getElementById('class').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({
            url: "{{route('search-sport')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                // category: category,
                class_name: class_name
            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });
    //---------------------------------------GENDER----------------------------------------------
    $("#gender").change(function() {
        // var category = document.getElementById('age_category').value;
        // var class_name = document.getElementById('class').value;
        var gender = document.getElementById('gender').value;
        var value = $(this).val();
        if (value == "") {
            var value = 0;

        }
        $.ajax({
            url: "{{route('search-sport')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                // category: category,
                // class_name: class_name,
                gender: gender
            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });
    //---------------------------------------SPORTS-NAME---------------------------------------------
    $("#sports_name").change(function() {
        // var category = document.getElementById('age_category').value;
        // var class_name = document.getElementById('class').value;
        // var gender = document.getElementById('gender').value;
        var sports_name = document.getElementById('sports_name').value;

        var value = $(this).val();
        if (value == "") {
            var value = 0;
        }
        $.ajax({

            url: "{{route('search-sport')}}",
            type: "post",
            data: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                // category: category,
                // class_name: class_name,
                // gender: gender,
                sports_name: sports_name
            },
            success: function(data) {
                $("#example1").html(data);
            }
        });
    });
});
</script> -->

<!-- ---------------------------------------------------------------------------------- -->