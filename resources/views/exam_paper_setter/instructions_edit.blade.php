<script>
    $("#my_form").submit(function(e){
    var formdata = new FormData(this);
        $.ajax({
            url: access_link+"exam_paper_setter/instructions_edit_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
				//alert_new(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','red');
				   get_content('exam_paper_setter/instructions_edit');
            }
			}
         });


      });
</script>
    <section class="content-header">
      <h1>
        Paper Setter
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
       <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i>Home</a></li>
		<li><a href="javascript:get_content('exam_paper_setter/exam_paper_setter')"><i class="fa fa-scribd" aria-hidden="true"></i>Exam Paper Setter</a></li>
       <li><a href="javascript:get_content('exam_paper_setter/set_paper')"><i class="fa fa-scribd" aria-hidden="true"></i>Set Paper</a></li>
        <li class="active">Edit Instruction</li>
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
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
    <div class="box-body">
	<form method="post" enctype="multipart/form-data" id="my_form">
			 
		<div class="box-body ">
		
		<div class="col-md-10 col-md-offset-1 ">
		<div class="col-md-6">
		
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 1</label>
					<input type="hidden" name="id[]" value="1">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 1"  value="All Questions are Compulsory." class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option selected value="Active">Active</option>  
			          <option  value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 2</label>
					<input type="hidden" name="id[]" value="2">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 2"  value="Read the Questions Carefully and Answer them." class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option selected value="Active">Active</option>  
			          <option  value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 3</label>
					<input type="hidden" name="id[]" value="3">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 3"  value="Marks of Each Question are Indicated Against It." class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option selected value="Active">Active</option>  
			          <option  value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 4</label>
					<input type="hidden" name="id[]" value="4">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 4"  value="Internal Choice are Given as per the Blue Print." class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option selected value="Active">Active</option>  
			          <option  value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 5</label>
					<input type="hidden" name="id[]" value="5">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 5"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 6</label>
					<input type="hidden" name="id[]" value="6">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 6"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 7</label>
					<input type="hidden" name="id[]" value="7">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 7"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 8</label>
					<input type="hidden" name="id[]" value="8">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 8"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 9</label>
					<input type="hidden" name="id[]" value="9">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 9"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					
		
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>Instruction : 10</label>
					<input type="hidden" name="id[]" value="10">
                    <input type="text" name="english_instruction[]" placeholder="Instruction : 10"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="english_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
			
					</div>
		<div class="col-md-6">
		
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 1</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 1"  value="केवल 2 या 2 के क्रम मे लिखे" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option selected value="Active">Active</option>  
			          <option  value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 2</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 2"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 3</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 3"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 4</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 4"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 5</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 5"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 6</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 6"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 7</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 7"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 8</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 8"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 9</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 9"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					
			<div class="col-md-8 ">
				<div class="form-group">
                    <label>निर्देश : 10</label>
                    <input type="text" name="hindi_instruction[]" placeholder="निर्देश : 10"  value="" class="form-control">
                </div>
					
			</div>
			<div class="col-md-4 ">
				<div class="form-group">
                  <label>Status : </label>
                   <select name="hindi_status[]" class="form-control">
			          <option  value="Active">Active</option>  
			          <option selected value="Deactive">De-Active</option>
			        </select>
				</div>
			</div>
					</div>
		
		</div>
		</div>	
	
	
		<div class="col-md-12">
		        <center><input type="submit" name="finish" value="Edit" class="btn btn-success" /></center>
		</div>
	  </form>	
	</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

    
  </div>
  
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	


</div>

