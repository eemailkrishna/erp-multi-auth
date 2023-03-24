@include('common.header')
@include('common.navbar')
</head>
<script type="text/javascript">
    function for_section(id) {

        $('#student_section').html("<option value='' >Loading....</option>");
        $.ajax({
            type: "get",
            url: '{{ url('time_table/time_table_generate_section_list') }}/' + id,
            cache: false,
            success: function(employeeData) {
                if (employeeData) {
                    var html = '';
                    var serial_no = 1;

                    if (employeeData.length > 0) {
                        for (var count = 0; count < employeeData.length; count++) {

                            html += '<option value="'+employeeData[count].id+'">' + employeeData[count].section + '</option>';
                        }
                    }
                    $('#student_section').html(html);

                } else {

				}
            }
        });
    }
</script>


<section class="content-header">
    <h1>
        Time Table Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-clock-o"></i> Time Table</a></li>
        <li class="active">Time Table Generate</li>
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
                <h3 class="box-title">Time Table Generate</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <form role="form" method="post" enctype="multipart/form-data" id="my_form" action="{{url('/time-table-new1')}}">
					@csrf

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class</label>
                            <select  id="student_class" name="student_class" class="form-control"
                                onchange="for_section(this.value);"  required>
                                <option value="">All</option>
                                @foreach ($class as $list)
                                    <option value="{{$list->id }}">{{ $list->class }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" id="class_code_hidden" name="class_code_hidden" />
                        </div>
                    </div>

                
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Section </label>
                            <select name="student_section" id="student_section" class="form-control"
                                onchange="get_section11111();" required>
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- /.box -->

                        <div <div class="box box-success">
                            <div class="box-header with-border">
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="table-data" class="table table-bordered table-striped" style="width:3000px">
                                    <thead>
                                        
                                        {{-- <tr>
											<td>S.no</td>
											<td>Class</td>
											<td>Section</td>
											<td>Update By</td>
											<td>Date</td>
											<td>Print</td>
                                        </tr> --}}
                                    </thead>
                                    {{-- <tbody id="period_list">

                                        @foreach ($todoss as $todoo)
                                            <tr id="list_todo_{{ $todoo->id }}">
                                                <td><input type="text" value="{{ $todoo->period_name }}"></td>
                                                {{-- <td>{{ $todoo->period_name }}</td>						 
                                                <td><input type="time" value="{{ $todoo->time_from }}"></td>
                                                <td><input type="time" value="{{ $todoo->time_to }}"></td>
                                                <td><input type="text" value=" {{ $todoo->monday_subject_name }}">
                                                </td>
                                                <td><input type="text" value="{{ $todoo->monday_teacher_name }}">
                                                </td>
                                                <td><input type="text" value="{{ $todoo->tuesday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->tuesday_teacher_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->wednesday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->wednesday_teacher_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->thursday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->thursday_teacher_name }}">
                                                    </<td>
                                                <td><input type="text"value="{{ $todoo->friday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->friday_teacher_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->saturday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->saturday_teacher_name }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody> --}}

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
					                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" />
                        </center>
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
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
        $("#student_class").change(function() {
            var class_id = $(this).val();
            if (class_id == "") {
                var class_id = 0;
            }
            $.ajax({
                // url: '{{ url('/fetch-sections/') }}/' + class_id,
                url: '{{url('/time_table/team_creation_list_post_list')}}/'+class_id,
                type: 'get',
                success: function(response) {
                    $('#table-data').html(response.output);
                    $('#section').html(response.section);

                }
            });
        });

        $("#student_section").change(function() {
            var section_id = $(this).val();
            if (section_id == "") {
                var section_id = 0;
            }
            $.ajax({
                url: '{{url('/time_table/team_creation_list_post_section_list')}}/' + section_id,
                type: 'get',
                success: function(response) {
                    $('#table-data').html(response.output);
                    $('#section').html(response.section);

                }
            });
        });
    });
</script>