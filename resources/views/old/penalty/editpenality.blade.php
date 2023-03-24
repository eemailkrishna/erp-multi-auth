@include('common.header')
 @include('common.navbar')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   function fill_detail(value){
	
           
			$.ajax({
			  address: "get",              
			  url: '{{url("penalty/ajax_search_student_box")}}/'+value,
              cache: false,
              success: function(detail){
                 var name =detail['name'];
                 var student_class =detail['id'];
                 var student_section =detail['id'];
                 var student_roll_no =detail['id'];

				 
		  
		 	
			$("#student_name").val(name); 		
		    $("#student_class").val(student_class); 
            $("#student_section").val(student_section);  
            $("#student_roll_no").val(student_roll_no);  
        
      
              }
           });

    }
		      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"penalty/penalty_form_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				    alert_new('Successfully Complete','green');
				   get_content('penalty/penalty_list');
            }
			}
         });
      });
</script>  

    <section class="content-header">
      <h1>
    Student Action <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('penalty/penalty')"><i class="fa fa-exclamation-circle"></i> Penalty Management</a></li>
        <li class="active">Penalty Form</li>
      </ol>
    </section>

	
	
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Penalty Form</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
			<form action="{{url('/penalty-update/'.$editp->id)}}" method="post" enctype="multipart/form-data" id="my_form">
			@csrf		
			<div class="col-md-12">
			<div class="col-md-6 ">				
					<div class="form-group" >
					  <label>Search Student<font size="2" style="font-weight: normal;"> </font> 
					  <span style="color:red;">*</span></label>
					  <select name=""  class="form-control select2" onchange="fill_detail(this.value);" style="width:100%;" >
					  <option value="">Select student</option>
                                    <option value="2000296">ajit[]-[2000296]-[2ND-B]-[Satveer-9050653720]</option>
                                    <option value="2000297">REHAN[]-[2000297]-[2ND-B]-[FARHAT ALI-8077194624]</option>
                                    <option value="2000314">Rajesh Prasad[]-[2000314]-[2ND-B]-[Ananda Prasad-9135956095]</option>
				      </select>
						
			         </div>
			</div>
			</div>
			<input type="hidden" name="user_id"  placeholder="student Name"  id="student_name333" class="form-control">

		       <div class="col-md-3">
						<div class="form-group">
						  <label>student Name<font style="color:red"><b>*</b></font></label>
						   <input type="text" name="student_name" value="{{$editp->student_name}}" placeholder="student Name"  id="student_name" class="form-control">
						</div>
				</div>
				<div class="col-md-3">
						<div class="form-group">
						  <label>Class<font style="color:red"><b>*</b></font></label>
						   <input type="text" name="student_class" value="{{$editp->student_class}}" placeholder="Class"  id="student_class" class="form-control">
						</div>
				</div>
				<div class="col-md-3">
						<div class="form-group">
						  <label>Student Section<font style="color:red"><b>*</b></font></label>
						  <input type="text" name="student_section" value="{{$editp->student_section}}" placeholder="Student Section"  id="student_section" class="form-control">
						</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group" >
					  <label>Student Roll No<font style="color:red"><b>*</b></font></label>
					  <input type="text" name="student_roll_no" value="{{$editp->student_roll_no}}" placeholder="Student Roll No"  id="student_roll_no" class="form-control">
					</div>
				</div>  
				<div class="col-md-3">	
					<div class="form-group" >
					  <label>Penalty Amount<font style="color:red"><b>*</b></font></label>
					  <input type="text" name="penalty_amount" placeholder="Penalty Amount"  value="{{$editp->penalty_amount}}" class="form-control" required>
					</div>
				</div>
				<div class="col-md-3">	
					<div class="form-group" >
					  <label>Penalty Reason<font style="color:red"><b>*</b></font></label>
					  <input type="text" name="penalty_reason" placeholder="Penalty Reason"  value="{{$editp->penalty_reason}}" class="form-control" required>
					</div> 
				</div>
				<div class="col-md-3">	
					<div class="form-group" >
					  <label>Penalty Remark</label>
					  <input type="text" name="penalty_remark" placeholder="Penalty Remark"  value="{{$editp->penalty_remark}}" class="form-control">
					</div>
				</div>
				<div class="col-md-3">	
					
				</div>
				  
				<div class="col-md-12">
				<center><input type="submit" name="finish" value="update" class="btn btn-success" /></center>
				
			</div>
	        </form>	
	        <div class="col-md-12">   
            </div>
	        </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
    <!-- /.box-body -->
        </div>
        </div>
        </section>





		
<script>
$(function () {
    $('.select2').select2();
  });
</script>

<script>

	

@include('common.footer')

    