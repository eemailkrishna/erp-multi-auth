@include('common.header')
@include('common.navbar')

<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
	function add_edit(value,name){
		$('#class_preffered').find('option:selected').remove().end();
		$('#subject_preffered').find('option:selected').remove().end();
	var emp_detail=name.split('|?|');
	$('#emp_name').val(emp_detail[0]);
	var class_preffered1=emp_detail[1].split(",");
	var class_length=class_preffered1.length;
	
	for(var x=0;x<class_length;x++){
		  if(class_preffered1[x]!=''){
	$('#class_preffered').prepend( '<option value="'+class_preffered1[x]+'" selected>'+class_preffered1[x]+'</option>');
	}
	}
	
	var subject_preffered1=emp_detail[2].split(",");
	var subject_length=subject_preffered1.length;
	for(var x=0;x<subject_length;x++){
		  if(subject_preffered1[x]!=''){
	$('#subject_preffered').prepend( '<option value="'+subject_preffered1[x]+'" selected>'+subject_preffered1[x]+'</option>');
	}
	}
	
	
	$('#emp_code_hidden').val(value);
	}
	</script>
	<script>
	
		$("#my_form").submit(function(e){
			e.preventDefault();
	
		var formdata = new FormData(this);
					   $("#myModal_close").click();
			$.ajax({
				url: access_link+"time_table/subject_wise_teacher_api.php",
				type: "POST",
				data: formdata,
				mimeTypes:"multipart/form-data",
				contentType: false,
				cache: false,
				processData: false,
				success: function(detail){
				   var res=detail.split("|?|");
				   if(res[1]=='success'){
					   $('#myModal').modal('hide');
					
					   get_content('time_table/subject_wise_teacher');
				}
				}
			 });
		  });
	</script>
<section class="content-header">
	<h1>
		School Information Management<small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-graduation-cap"></i>Time Table</a>
		</li>
		<li class="active">Add Teachers</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="box box-primary my_border_top">
			<button type="submit" class="btn btn-primary" id="add_todo">
				Add Teachers
			</button>

			<table class="table table-bordered">
				<thead>
					<th>Sr.no</th>
					<th>Teacher Name</th>
					<th>Subject Preferred</th>
					<th>Class Preferred</th>
					<th>Action</th>
				</thead>
				<tbody id="list_todo">
					@foreach ($todoss as $todoo)
						<tr id="list_todo_{{ $todoo->id }}">
							<td>{{ $todoo->id }}</td>
							<td>{{ $todoo->teacher_name }}</td>
							<td>{{ $todoo->subject_preferred }} </td>
							<td>{{ $todoo->class_preferred }}</td>
							<td>
								<button type="button"  onclick="edit_todo({{$todoo->id}})"   
									class="edit_todo btn btn-sm btn-info ml-1">Edit</button>
								<button type="button" id="delete_todo"  onclick="delete_functionn({{$todoo->id}})"
									class="btn btn-sm btn-danger ml-1">Delete</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>


			<!-- The Modal -->

			<body>

				<div class="modal" id="modal_todo">
					<div class="modal-dialog">
						<div class="modal-content">
							<form id="form_todo" action="{{url('time_table/subject_wise_teacher-store')}}" method="POST">
							   @csrf
								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title" id="modal-title">Modal</h4>
								
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									
									<label for="">Teacher Name</label>
									<input type="text" name="teacher_name" id="teacher_name" class="form-control"
										placeholder="Period Name">
									<label for="">Subject Preferred</label>
									<select name="subject_preferred[]" class="select2  form-control" id='subject_preffered' multiple style="width:100%">
										          <option value="SCIENCE">SCIENCE</option>
												  <option value="CHEMISTRY">CHEMISTRY</option>
												  <option value="AG BIO">AG BIO</option>
												  <option value="HINDI">HINDI</option>
												  <option value="S.S.">S.S.</option>
												  <option value="SANSKRIT">SANSKRIT</option>
												  <option value="Bangali">Bangali</option>
												  <option value="Biology M">Biology M</option>
												  <option value="Chemistry">Chemistry</option>
												  <option value="Physics">Physics</option>
												  <option value="Maths ">Maths </option>
										
												  <option value="testr">testr</option>
												  <option value="Cleanliness">Cleanliness</option>
												  <option value="Regularity">Regularity</option>
												  <option value="Homework">Homework</option>
												  <option value="Computer">Computer</option>
												  <option value="Project Work">Project Work</option>
												  <option value="MATH">MATH</option>
												  <option value="LIFE SKILL & VALUE">LIFE SKILL & VALUE</option>
												 
												  <option value="GK & DRAWING">GK & DRAWING</option>
											
													  
	  </select>
									<label for="">Class Preferred</label>
									<select name="class_preferred[]" multiple class="select2  form-control" id='class_preffered'  style="width:100%">
										<option value="NURSERY">NURSERY</option>
												  <option value="LKG">LKG</option>
												  <option value="UKG">UKG</option>
												  <option value="1ST">1ST</option>
												  <option value="2ND">2ND</option>
												  <option value="3RD">3RD</option>
												  <option value="4TH">4TH</option>
												  <option value="5TH">5TH</option>
												  <option value="6TH">6TH</option>
												  <option value="7TH">7TH</option>
												  <option value="8TH">8TH</option>
												  <option value="9TH">9TH</option>
												  <option value="10TH">10TH</option>
												  <option value="11TH">11TH</option>
												  <option value="12TH">12TH</option>
													  
	  </select>

								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="submit" class="btn btn-info" id="add_data"  data-bs-dismiss="modal">Add</button>
									<button type="button" class="btn btn-danger"
										data-bs-dismiss="modal">Close</button>
								</div>
							</form>
						</div>
					</div>
				</div>


				<div class="modal" id="modal_todo-edit">
				   <div class="modal-dialog">
					   <div class="modal-content">
						   <form id="form_todo" action="{{url('time_table/subject_wise_teacher-edit-update')}}" method="post">
							   @csrf
							   <!-- Modal Header -->
							   <div class="modal-header">
								   <h4 class="modal-title" id="modal-title">Edit Period</h4>
								   {{-- <button type="button" class="btn-close" data-bs-dismiss="modal">+</button> --}}
							   </div>

							   <!-- Modal body -->
							   <div class="modal-body">
								   <input type="hidden" name="id" id="edit-id">
								   <label for="">Teacher Name</label>

								   <input type="text" name="teacher_name" id="teacher_name-edit" class="form-control"
									   placeholder="Period Name">
								   <label for="">Subject Preferred</label>
								   <select name="subject_preferred[]" multiple class="select2  form-control" id='subject_preferred-edit'  style="width:100%">
									<option value="SCIENCE">SCIENCE</option>
											  <option value="CHEMISTRY">CHEMISTRY</option>
											  <option value="AG BIO">AG BIO</option>
											  <option value="HINDI">HINDI</option>
											  <option value="S.S.">S.S.</option>
											  <option value="SANSKRIT">SANSKRIT</option>
											  <option value="Bangali">Bangali</option>
											  <option value="Biology M">Biology M</option>
											  <option value="Chemistry">Chemistry</option>
											  <option value="Physics">Physics</option>
											  <option value="Maths ">Maths </option>
											  <option value="Biotechnology">Biotechnology</option>
											  <option value="Sociology">Sociology</option>
											  <option value="Psychology">Psychology</option>
											  <option value="Political Science">Political Science</option>
											  <option value="DRAWING">DRAWING</option>
											  <option value="History">History</option>
											  <option value="Geography">Geography</option>
											  <option value="Economics">Economics</option>
											  <option value="Anatomy">Anatomy</option>
											  <option value="Agriculture">Agriculture</option>
											  <option value="Home Management">Home Management</option>
											  <option value="Element Science">Element Science</option>
											  <option value="Business">Business</option>
											  <option value="Book Keeping & Accountancy">Book Keeping & Accountancy</option>
											  <option value="Crop Production">Crop Production</option>
											  <option value="Element of Animal">Element of Animal</option>
											  <option value="Computer">Computer</option>
											  <option value="General Knowledge">General Knowledge</option>
											  <option value="Information">Information</option>
											  <option value="SCIENCE">SCIENCE</option>
											  <option value="GK OR COMPUTER">GK OR COMPUTER</option>
											  <option value="Economics ">Economics </option>
											  <option value="Bussines Study">Bussines Study</option>
											
											  <option value="Animal Husbandry And Poultary Farm">Animal Husbandry And Poultary Farm</option>
											
											  <option value="ORGANIC CHEMISTRY ">ORGANIC CHEMISTRY </option>
											
											  <option value="testr">testr</option>
											  <option value="Cleanliness">Cleanliness</option>
											  <option value="Regularity">Regularity</option>
											  <option value="Homework">Homework</option>
											  <option value="Computer">Computer</option>
											  <option value="Project Work">Project Work</option>
											  <option value="MATH">MATH</option>
											  <option value="LIFE SKILL & VALUE">LIFE SKILL & VALUE</option>
											  <option value=""></option>
											  <option value="GK & DRAWING">GK & DRAWING</option>
											
												  
  </select>
								   <label for="">Class Preferred</label>
								   <select name="class_preferred[]" multiple class="select2  form-control" id='class_preferred-edit'  style="width:100%">
									<option value="NURSERY">NURSERY</option>
											  <option value="LKG">LKG</option>
											  <option value="UKG">UKG</option>
											  <option value="1ST">1ST</option>
											  <option value="2ND">2ND</option>
											  <option value="3RD">3RD</option>
											  <option value="4TH">4TH</option>
											  <option value="5TH">5TH</option>
											  <option value="6TH">6TH</option>
											  <option value="7TH">7TH</option>
											  <option value="8TH">8TH</option>
											  <option value="9TH">9TH</option>
											  <option value="10TH">10TH</option>
											  <option value="11TH">11TH</option>
											  <option value="12TH">12TH</option>
												  
  </select>


							   </div>

							   <!-- Modal footer -->
							   <div class="modal-footer">
								   <button type="submit" class="btn btn-info"  onclick="update_todo({{$todoo->id}})" data-bs-dismiss="modal">Update</button>
								   <button type="button" class="btn btn-danger"
									   data-bs-dismiss="modal">Close</button>
							   </div>
						   </form>
					   </div>
				   </div>
			   </div>
			</body>
		</div>
	</div>
</section>
@include('common.footer')
<script>
	$(document).ready(function() {
		$.ajaxSetup({
			headers: {
				'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
			}
		})
	});

	$("#add_todo").on('click', function() {
		$("#form_todo").trigger('reset');
		$("#modal-title").html('Add teachers');
		$("#modal_todo").modal('show');
	});


	$(".edit_todo").on('click', function() {
		$("#form_todo").trigger('reset');
		$("#modal-title").html('Add teachers');
		$("#modal_todo-edit").modal('show');
	});

	

	function edit_todo(id){      

	   $.ajax({
		   url:'{{url("time_table/subject_wise_teacher-edit")}}/'+id,
		   method:'get',
		   success: function(res){

			   if(res){

				   var teacher_name = res['teacher_name'];
				   var subject_preferred = res['subject_preferred'];
				   var class_preferred = res['class_preferred'];
				   var id = res['id'];

				   $('#edit-id').val(id);
				   $('#teacher_name-edit').val(teacher_name);
				   $('#subject_preferred-edit').val(subject_preferred);
				   $('#class_preferred-edit').val(class_preferred);
			   }
			   else{
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
					   url:'{{url("time_table/subject_wise_teacher-edit-delete")}}/'+id,
					   method: 'get',
					   success: function(res) {

					   }
				   });
				   $( "#heree" ).load(window.location.href + " #heree" );
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
	$(function () {
	  //Initialize Select2 Elements
	  $('.select2').select2()
  
	})
  </script>