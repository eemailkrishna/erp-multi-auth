
@include('common.header')
 @include('common.navbar')
<style type="text/css">
    
    .result{
        position: absolute;        
        z-index: 999;
        top: 80%;
        left: 0;
		background:white;
    }
    .search-box input[type="text"], .result{
        width: 90%;
		margin-left:5%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"library/issue_book_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			////alert_new(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Complete','green');
				  get_content('library/view_issued_book_list');
            }
			}
         });
      });
</script>
<script type="text/javascript">
   function for_name(value){
   //alert_new('hit');
       $.ajax({
			  type: "POST",
              url: access_link+"library/ajax_get_name.php?roll="+value+"",
              cache: false,
              success: function(detail){
			  ////alert_new(detail); 
            $('#student_name').val(detail);
              }
           });
    }
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
		var classs=document.getElementById('class_no').value;
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal,term2: classs}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents("#search-box").find('input[type="text"]').val($(this).text());
        $(this).parents("#search-box").find('input[type="text"]').focus();
        $(this).parent(".result").empty();
    });
});
</script>
<script type="text/javascript">
   function fill_detail(value){
    var book_id=document.getElementById('book_id_number').value;
			$.ajax({
			  address: "POST",
              url: access_link+"library/ajax_search_student_box.php?id="+value+"&book_id="+book_id+"",
              cache: false,
              success: function(detail){
			  if(detail!=0){
		  var res = detail.split("|?|");
	      $("#student_roll_no").val(value); 
		  $("#student_name").val(res[0]); 
		  $("#student_class").val(res[1]); 
          $("#student_section").val(res[2]);
          }else{
		  alert_new('Sorry ! can not Issue Same Book to Same Student !!!','red');
		  $("#student_roll_no111").val('');
		  }
        
      
              }
           });

    }
</script>

    <section class="content-header">
      <h1>
       Library Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="javascript:get_content('library/library')"><i class="fa fa-book"></i> Library</a></li>
	  <li class="active">Issue Book List</li>
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
              <center><h3 class="box-title" style="color:#592712;font-size:25px;"><b>Issue Book</b></h3></center></br>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
			<form role="form" method="post" id="my_form" enctype="multipart/form-data" Action="{{url('/issue-book')}}">
			@csrf
			<div class="col-md-12">
			
			 <div class="col-md-6 ">				
					<div class="form-group" >
					  <label>Borrower's Name<font size="2" style="font-weight: normal;">
					  <input type="text"  name="student_name" placeholder="Student Class"  id="student_class" class="form-control" >

					   <!-- </font> <span style="color:red;">*</span></label> -->
					  <!-- <select name="" class="form-control select2" id="student_roll_no111" onchange="fill_detail(this.value);" > -->
					  <!-- <option value="">Select student</option>
					        							<option value="2200672">Anil Kumar[2200672]-[4TH-A]-[-9990008522]</option>
														<option value="2200713">Ram[2200713]-[4TH-A]-[-9999999995656]</option>
														<option value="2200755">priya[2200755]-[4TH-A]-[rahul mehara-65463312]</option>
														<option value="2200776">nidhi jain [2200776]-[4TH-A]-[sunil  jain-9988554665]</option>
														<option value="2201062">Ramesh[2201062]-[4TH-A]-[Suresh-9821223300]</option>
														<option value="2201082">Rajdeep kumar[2201082]-[4TH-A]-[Mandal himesh-8709788098]</option>
														<option value="2201084">SURYA PRATAP MAURYA[2201084]-[5TH-A]-[-]</option>
														<option value="2201085">Danica Mariam Jacob[2201085]-[1ST-A]-[J P Jacob-9977228818]</option>
														<option value="2201086">Rahul Kumar[2201086]-[NURSERY-A]-[Lalbabu Ray-9570503057]</option>
												  </select> -->
					</div>
				</div>
			</div>
			
		
			

      
         	<div class="col-md-3 ">
						<div class="form-group" >
					  <label>Borrower's Class & Section</label>
					  <input type="text"  name="student_section" placeholder="Student Class"  id="student_class" class="form-control" >
					</div>
				</div>
				<div class="col-md-3 ">				
					 <div class="form-group" id="search-box" >
					  <label >Borrower's ID</label>
							<input type="text" autocomplete="off" class="form-control" name="id_card" id="student_roll_no" onblur="for_name(this.value);" placeholder="student id" >
							<div class="result"></div>
						</div>
				</div>
				
							
				
				<div class="col-md-3 ">				
					 <div class="form-group" >
					  <label >Book Title</label>
						<input type="hidden" class="form-control" name="copy_left" value="226">
							<input type="text" class="form-control" name="book_title"  value="Nectar Textbook" placeholder="Enter Name" > 
						</div>
				</div>
				<input type="hidden" class="form-control" name="book_id_number" id="book_id_number"  value="02554" placeholder="" > 

			     <div class="col-md-3 ">						 
					 <div class="form-group" >
					  <label >Author Name</label>
					  <input type="text"  name="author_name" placeholder="Add Student Roll No"  value="Main Textbook" class="form-control" >
					</div>
				  </div>
				  
				  	<div class="col-md-3 ">				
					<div class="form-group" >
					  <label >Date Of Issue<font style="color:red"><b>*</b></font></label>
					  <input type="date" class="form-control" name="issue_date" value="2022-12-05" placeholder="Enter today's date" required >
					</div>
				</div>
			
				<div class="col-md-3 ">				
					 <div class="form-group" >
					  <label >Due Date<font style="color:red"><b>*</b></font></label>
					 <input type="date" class="form-control" name="due_date" placeholder="Enter publisher name" required >
					</div>
				 </div>
				
				<div class="col-md-3">				
					<div class="form-group" style="display:none" >
					  <label style="color:black;">Status</label>
					  <input type="text" class="form-control" name="status" value="Active" readonly />
					</div>
				</div>
				<div class="col-md-12">
				<div class="form-group">
				<center><input type="submit" name="finish" value="Submit" class="btn btn-success"/></center>
				</div>
				</div>
		</form>	
		        
		  </div>
	</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

<script>
  $(function () {
    $('.select2').select2()
  })
</script>
@include('common.footer')
