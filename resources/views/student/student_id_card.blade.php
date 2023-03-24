@include('common.header')
@include('common.navbar')
<meta name="csrf-token" content="{{csrf_token()}}"> 
<script type="text/javascript">
    function for_section(id) {

        $('#student_section').html("<option value='' >Loading....</option>");
        $.ajax({
            type: "get",
            url: '{{ url('/student/student_id_card_generate_section') }}/' + id,
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
                    $('#student_class_section').html(html);

                } else {

				}
            }
        });
    }
</script>
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
         Student Management<small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
	  <li class="active">Student ID Card</li>
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
              <h3 class="box-title">Student Roll No</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			            <div class="box-body">
			<form role="form"  method="post" id="my_form" action="../school_software_v1_old/pdf/pdf/id_card_page/id_card_pdf_2.php" onsubmit="return checked_null_value();" enctype="multipart/form-data" target="_blank">
			
			    <div class="col-md-2">	
					<div class="form-group" >
					    <label>Class</label>
					    <select  id="student_class" name="student_class" class="form-control"
                                onchange="for_section(this.value);"  required>
                                <option value="">All</option>
                                @foreach ($class as $list)
                                    <option value="{{$list->id }}">{{ $list->class }}</option>
                                @endforeach
                            </select>
					</div>
				</div>
				<div class="col-md-2">	
					<div class="form-group">
					    <label>Section</label>
					    <select class="form-control" name="student_class_section" onchange='for_list();' id="student_class_section" >
						<option value="">Select</option>
					    </select>
					</div>
				</div>
				{{-- <div class="col-md-2">	
					<div class="form-group">
					    <label>Student Identity Category</label>
					    <select class="form-control" name="student_identity_category" onchange='for_list();' id="student_identity_category">
						<option value="all">All</option>
												<option value="Commerce ">Commerce </option>
												<option value="Science">Science</option>
												<option value="Arts">Arts</option>
												<option value=""></option>
												<option value=""></option>
												<option value=""></option>
											    </select>
					</div>
				</div> --}}
				
				<div class="col-md-12">
                <!-- /.box -->

                <div <div class="box box-success" >
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" id="my_table">
                <table id="table-data" class="table table-bordered table-striped">
                <thead >
              
                </thead>
				
				<tbody id="example2">
				
		        </tbody>
				
                </table>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
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
                url: '{{url('/student/student_team_creation_list_post')}}/'+class_id,
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
                url: '{{url('/student/student_team_creation_list_post_section')}}/' + section_id,
                type: 'get',
                success: function(response) {
                    $('#table-data').html(response.output);
                    $('#section').html(response.section);

                }
            });
        });
    });
</script>

