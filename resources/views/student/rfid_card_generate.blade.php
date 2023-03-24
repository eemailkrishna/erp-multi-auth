@include('common.header')
@include('common.navbar')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
    function for_section(id) {

        $('#student_class_section').html("<option value='' >Loading....</option>");
        $.ajax({
            type: "get",
            url: '{{ url('student/rfid_card__generate_section') }}/' + id,
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


<section class="content-header">
    <h1>
        Student Profile Update
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a>
        </li>
        <li class="active">Student Profile Update</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Assign RFID</h3>
            </div>

            <div class="box-body">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                    @csrf
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class</label>
                            <select id="student_class" name="student_class" class="form-control"
                                onchange="for_section(this.value);" required>
                                <option value="">All</option>
                                @foreach ($class as $list)
                                    <option value="{{ $list->id }}">{{ $list->class }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Section</label>
                            <select class="form-control" name="student_class_section" onchange='for_list();'
                                id="student_class_section">
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
                            <div class="box-body table-responsive" id="example2">
                                <table class="table table-bordered table-striped" id="table-data">
                                    <thead>
                          
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- modal-box-open -->
                    
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>


<div class="modal" id="modal_todo-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form_todo" action="{{url('student/rfid_card__generate_update')}}" method="post">
                @csrf
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-title">Allot RFID No.</h4>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal">+</button> --}}
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">
                    <label for="">Student Name</label>

                    <input type="text" name="student_name" id="student_name" class="form-control" readonly>
                    <label for="">Assign RefId</label>
                    <input type="text" name="student_Add_RF_Id_Number" id="student_Add_RF_Id_Number" class="form-control">
                       
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info"   >Update</button>
                    <button type="submit" class="btn btn-danger"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
                url: '{{ url('student/rfid_card__list_post') }}/' + class_id,
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
                url: '{{ url('student/rfid_card__post_section') }}/' + section_id,
                type: 'get',
                success: function(response) {
                    $('#table-data').html(response.output);
                    $('#section').html(response.section);

                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            }
        })
    });

    $("#add_todo11").on('click', function() {
        alert('hhh');
        // $("#form_todo").trigger('reset');
        // $("#modal-title").html('Add Period');
        // $("#modal_todo").modal('show');
    });


    $(".edit_todo").on('click', function() {
        $("#form_todo").trigger('reset');
        $("#modal-title").html('Add Period');
        $("#modal_todo-edit").modal('show');
    });



    function edit_todo(id) {
        // alert(id);

        $.ajax({
            url: '{{ url("student/rfid_card__generate_edit") }}/' + id,
            method: 'get',
            success: function(res) {

                if (res) {

                    var name = res['name'];
                    // alert(name);
                    var assign = res['add_rf_id_no'];
                    var id = res['id'];
                  

                    $('#edit-id').val(id);
                    $('#student_name').val(name);
                    $('#student_Add_RF_Id_Number').val(assign);
                    $("#modal_todo-edit").modal('show');
                } else {
                    alert('something went wrong');
                }

            }

        })

    }
</script>

<script>
    function delete_functionn(id) {
        // alert(id);
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
                        url: '{{ url("student/rfid_card_generate_delete") }}/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    });
                    $("#heree").load(window.location.href + " #heree");
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    location.reload();
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function test1() {
        $("#modal_todo").modal('show');
    }
</script>
