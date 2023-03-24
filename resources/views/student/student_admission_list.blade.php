@include('common.header')
@include('common.navbar')
{{-- 
<script>
    function valid(s_no) {
        var myval = confirm("Are you sure want to delete this record !!!!");
        if (myval == true) {
            admission_delete(s_no);
        } else {
            return false;
        }
    }

    function admission_delete(s_no) {
        $("#get_content").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "student/student_admission_delete.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Deleted', "red");
                    get_content('student/student_admission_list');
                } else {
                    //  alert_new(detail); 
                }
            }
        });
    }
</script>
<script>
    function check_function() {
        $("#search_list").html(loader_div);
        if ($("#all_medium").prop("checked") == true) {
            var value = "Yes";
        } else {
            var value = "No";
        }
        $.ajax({
            type: "POST",
            url: access_link + "student/student_admission_filter_checked.php?checked=" + value + "",
            cache: false,
            success: function(detail) {
                $("#search_list").html(detail);
            }
        });
    }
</script> --}}
<section class="content-header">
    <h1>
        Student Management<small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
        <li class="active">Student Admission List</li>
    </ol>
</section>


<!---******************************************************************************************************-->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Admission List</h3>
                    <div class="input-group-btn">
                    <select name="sort_by" class="btn btn-info " id="sort_by" onchange="for_list();">
                        <option value=" ORDER BY s_no DESC">Sort By</option>
                        <option value=" ORDER BY student_name ASC">Name</option>
                      
                    </select>
                    <a href="javascript:get_content('student/student_admission_list')"><button style="float:right;"
                            type="button" class="btn btn-info my_background_color">Reset</button></a>
                    <button style="float:right;" type="button" class="btn btn-info" onclick="myFunction()"
                        data-toggle="collapse" data-target="#demo">Filter</button>
                </div>


                <form oninput="x.value=parseInt(a.value)" id="demo" class="collapse" method="post">



                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Class</label><br>
                            <select name="student_class"
                                onchange="for_section(this.value);for_list();for_stream(this.value);" id="student_class"
                                class="form-control" required>
                                <option value="All">All</option>
                                <option value="NURSERY">NURSERY</option>
                                <option value="LKG">LKG</option>
                          
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 " id="student_class_stream_div" style="display:none;">
                        <div class="form-group">
                            <label>Stream<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_stream" id="student_class_stream"
                                onchange="get_group(this.value);for_list();" required>
                                <option value="All">All</option>
                                <option value="SCIENCE">SCIENCE</option>
                            
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 " id="student_class_group_div" style="display:none;">
                        <div class="form-group">
                            <label>Group<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_group" id="student_class_group"
                                onchange='for_list();' required>
                                <option value="">Select Group</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Section</label><br>
                            <select class="form-control" name="student_class_section" id="student_class_section"
                                onchange='for_list();' required>
                                <option value="All">All</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Gender</label><br>
                            <div class="form-control">
                                <input type="radio" name="student_gender" onclick="for_list();" id="g3"
                                    value="Both" checked>&nbsp;&nbsp;<b>Both</b>
                     
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Religion</label><br>
                            <div class="form-control">
                                <input type="radio" name="student_religion" onclick="for_list();" id="r5"
                                    value="All" checked>&nbsp;&nbsp;<b>All</b>
                             

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Catagory</label><br>
                            <div class="form-control">
                                <input type="radio" name="student_category" onclick="for_list();" id="c5"
                                    value="All" checked>&nbsp;<b>All</b>
                                <input type="radio" name="student_category" onclick="for_list();" id="c1"
                                    value="General">&nbsp;<b>General</b>&nbsp;
                     

                            </div>
                        </div>
                    </div>


                </form>

                <script>
                    $(function() {
                        //Initialize Select2 Elements
                        $('.select2').select2()

                    })
                </script>
            </div>

            <div class="box-body ">
                <div class="col-md-12" id="here">
                    <!-- /.box -->

                    <div class="box box-success">

                        <div class="box-header with-border">
                        </div>

                        <div class="box-body table-responsive" id="search_list">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>student Name</th>
                                        <th>Father's Name</th>
                                        <th>Class</th>
                                        <th>Stream</th>
                                        <th>Father Contact No.</th>
                                        <th>student DOB</th>
                                        <th>student Gender</th>
                                        <th>Student Roll No</th>
                                        <th>Admission No</th>
                                        <th>Update By</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Print</th>
                                        <th>Scholar Print</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($data as $list)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $list->user->name }}</td>
                                            <td>{{ $list->father_name ?? 'None' }}</td>
                                            <td>{{ $list->class->class?? 'None' }}</td>
                                            <td>{{ $list->stream ?? 'None' }}</td>
                                            <td>{{ $list->father_contact ?? 'None' }}</td>
                                            <td>{{ $list->user->dob ?? 'None' }}</td>
                                            <td>{{ $list->user->gender ?? 'None' }}</td>
                                            <td>{{ $list->roll_no ?? 'None' }}</td>
                                            <td>{{ $list->admission->father_qualification ?? 'None' }}</td>
                                            <td>{{ $list->user->email ?? 'None' }}</td>
                                            <td>{{ $list->user->dob ?? 'None' }}</td>
                                            <td><a
                                                    href="{{ url('student/admission-edit1/' .$list->id) }}"class="btn btn-info btn-sm">Edit</a>
                                            </td>
                                            <td><button type="button" onclick="delete_function({{ $list->id }})"
                                                    class="btn btn-danger btn-sm">Delete</button></td>
                                            <td><a href=""class="btn btn-info btn-sm"
                                                    onclick="window.print()">Print</a></td>
                                            <td><a href=""class="btn btn-info btn-sm">Scholar Print</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</section>
<!-- /.content -->
@include('common.footer');

<script>
    $(function() {
        for_list();
    })
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function delete_function(id) {
		
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '{{url("student/student_admission_delete")}}/' + id,
                        method: 'get',
                        success: function(res) {

                        } 
                    });
                    $( "#here" ).load(window.location.href + " #here" );

                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>
