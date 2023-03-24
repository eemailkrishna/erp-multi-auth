@include('common.header')
@include('common.navbar')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
    function for_section(id) {

        $('#student_class_section').html("<option value='' >Loading....</option>");
        $.ajax({
            type: "get",
            url: '{{ url('student/student_photo_update_generate_section') }}/' + id,
            cache: false,
            success: function(employeeData) {
                if (employeeData) {
                    var html = '';
                    var serial_no = 1;

                    if (employeeData.length > 0) {
                        for (var count = 0; count < employeeData.length; count++) {

                            html += '<option value="' + employeeData[count].id + '">' + employeeData[count]
                                .section + '</option>';
                        }
                    }
                    $('#student_class_section').html(html);

                } else {

                }
            }
        });
    }
</script>

<form role="form" action="{{ url('student/student_photo_generate_update') }}" method="post" enctype="multipart/form-data"  id="my_form">
    <section class="content-header">
        <h1>
            Student Photo Update
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a>
            </li>
            <li class="active">Student Profile Update</li>
        </ol>
    </section>
    <!---*****************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements disabled -->
            <div class="box box-primary my_border_top">
                <div class="box-header with-border ">

                </div>
                <!-- /.box-header -->
                <!------------------------------------------------Start Registration form--------------------------------------------------->

                <div class="box-body">
                    <div class="box-body table-responsive">
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="container-fluid">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-md-6">
                                                <label>Class</label>
                                                <select id="student_class" name="student_class" class="form-control"
                                                    onchange="for_section(this.value);" required>
                                                    <option value="">All</option>
                                                    @foreach ($class as $list)
                                                        <option value="{{ $list->id }}">{{ $list->class }}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="col-md-6">
                                                <label>Section</label>
                                                <select name="student_class_section" id="student_class_section"
                                                    style="width:100%;" class="form-control" onchange="for_search11();">
                                                    <option value="">Select</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="table-responsive">

                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                            </thead>
                            <tbody id="period_list">
                            </tbody>

                        </table>
                    </div>
                    <div id="for_student_list" class="table-responsive">

                    </div>
                </div>
                <!---------------------------------------------End Registration form--------------------------------------------------------->
                <!-- /.box-body -->
            </div>
        </div>
    </section>
</form>
@include('common.footer')

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

    })
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $("#student_class").change(function() {
            var class_id = $(this).val();
            if (class_id == "") {
                var class_id = 0;
            }
            $.ajax({
                // url: '{{ url('/fetch-sections/') }}/' + class_id,
                url: '{{ url('student/student_photo_update_list_post') }}/' + class_id,
                type: 'get',
                success: function(response) {
                    $('#table-data').html(response.output);
                    $('#section').html(response.section);

                }
            });
        });

        $("#student_class_section").change(function() {
            var section_id = $(this).val();
            if (section_id == "") {
                var section_id = 0;
            }
            $.ajax({
                url: '{{ url('student/student_photo_update_post_section') }}/' + section_id,
                type: 'get',
                success: function(response) {
                    $('#table-data').html(response.output);
                    $('#section').html(response.section);

                }
            });
        });
    });
</script>
<script>$('form').append('{{csrf_field()}}');</script>

