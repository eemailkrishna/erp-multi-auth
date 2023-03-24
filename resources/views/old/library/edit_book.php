<script>
	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
 window.scrollTo(0, 0);
  loader();
        $.ajax({
            url: access_link+"library/edit_book_api.php",
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
				   get_content('library/view_book_library');
            }
			}
         });
      });
</script>
<script type="text/javascript">
         	function for_subject(value){
			$.ajax({
			address: "POST",
			url: "ajax_get_subject.php?value="+value+"",
			cache: false,
			success: function(detail){
			 $("#subject_name").html(detail);
			 for_list();
			}
			});
			}
</script>
<script type="text/javascript">
   function for_section(value){
         
       $.ajax({
			  type: "POST",
              url: "ajax_class_section.php?class_name="+value+"",
              cache: false,
              success: function($detail){
                   var str =$detail;                
                 
                  $("#student_class_section").html(str);
				  for_list();
              }
           });

    }
</script>


   <section class="content-header">
      <h1>
       Library  Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="javascript:get_content('library/library')"><i class="fa fa-book"></i> Library</a></li>
		<li><a href="javascript:get_content('library/view_book_library')"><i class="fa fa-book"></i> Book List</a></li>
        <li class="active">Edit Book</li>
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
             <center><h3 class="box-title" style="color:#f4427d;font-size:30px;"><b>Update Library Book</b></h3></center></br></br></br>
            </div>
			 			  
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
			<form role="form"  method="post"  id="my_form" enctype="multipart/form-data">
			
			 <div class="col-md-4 ">
						<div class="form-group">
						  <label>Accession NO./Book No.<font style="color:red"><b>*</b></font></label>
						   <input type="text"  name="book_id_no"   placeholder="Enter Book Accession No."  value="02554" class="form-control " readonly />
						</div>
				</div>
				
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Book Code No.</label>
						   <input type="text" name="book_code_number" value="94061" class="form-control" />
						</div>
				</div>
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Division Name</label>
						   <input type="text" name="division_name" value="F" class="form-control" />
						</div>
				</div>
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Language</label>
						   <input type="text" name="language" value="English" class="form-control" />
						</div>
				</div>
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Book Type</label>
						   <input type="text" name="book_type" value="4 Subjects" class="form-control" />
						</div>
				</div>
				
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Book Title<font style="color:red"><b>*</b></font></label>
						   <input type="text"  name="book_title"  placeholder="Enter book title"  value="Nectar Textbook" class="form-control" required />
						</div>
				</div>
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Author<font style="color:red"><b>*</b></font></label>
						   <input type="text"  name="author"  placeholder="Enter Author name"  value="Main Textbook" class="form-control" required />
						</div>
				</div>
							
				<div class="col-md-4 ">	
					<div class="form-group" >
					    <label>Classification No./Main Class<font style="color:red"><b>*</b></font></label>
					    <select name="student_class" onchange="for_section(this.value);for_search11();" id="student_class" class="form-control" >
						       <option  value="">Select Class</option>
						       						       <option  value="NURSERY">NURSERY</option>
					           						       <option  value="LKG">LKG</option>
					           						       <option  value="UKG">UKG</option>
					           						       <option  value="1ST">1ST</option>
					           						       <option selected value="2ND">2ND</option>
					           						       <option  value="3RD">3RD</option>
					           						       <option  value="4TH">4TH</option>
					           						       <option  value="5TH">5TH</option>
					           						       <option  value="6TH">6TH</option>
					           						       <option  value="7TH">7TH</option>
					           						       <option  value="8TH">8TH</option>
					           						       <option  value="9TH">9TH</option>
					           						       <option  value="10TH">10TH</option>
					           						       <option  value="11TH">11TH</option>
					           						       <option  value="12TH">12TH</option>
					           					    </select>
					</div>
				</div>
				
				<div class="col-md-4 ">				
			    <div class="form-group" >
				 <label >Subject</label>
				 <input type="text" name="subject" class="form-control" placeholder="Enter subject Name" value="English, Mathematics, EVS, GK">
				 </div>
				 </div>
				
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Publisher</label>
					  <input type="text" class="form-control" name="publish_name" placeholder="Enter publication" value="">
					</div>
				</div>	
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Publication Date</label>
					  <input type="date" class="form-control" name="publish_date" value="">
					</div>
				</div>	
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >No. Of Copies</label>
					  <input type="Number" class="form-control" name="no_of_copy" placeholder="Enter No of Book" value="227">
					</div>
				</div>	
				
				<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Vendor</label>
					  <input type="text" class="form-control" name="Vendor_name" placeholder="Enter Vendor Name" value="">
					</div>
				</div>	
				<div class="col-md-4 ">				
					 <div class="form-group" >
					  <label >Cost of Book<font style="color:red"><b>*</b></font></label>
					  <input type="Number" class="form-control" name="book_cost" placeholder="Enter book cost" value="50" required>
					</div>
				 </div>
				
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Entry Date</label>
						   <input type="date" name="entry_date" value="2022-09-16" class="form-control" />
						</div>
				</div>
				<div class="col-md-4 ">
						<div class="form-group">
						  <label>Other Information</label>
						   <input type="text" name="other_information" value="" class="form-control" />
						</div>
				</div>
				
				<div class="col-md-12">
				<center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
				</div>
		        </form>	
		        
		 
	</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
