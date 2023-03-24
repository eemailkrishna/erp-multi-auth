<script>

	  function window_close(){
		  window.parent.get_content('gallery/gallery');
	  }
</script>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	


 

<!--/script-->
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<script type="text/javascript">
	
			
			function save_image(){
			$('#submit_button').click();
			}
			function modal_name123(){
			$('#old_button').click();
			}	
				function on_close(){
			window.close();
			}
	function on_close_reopen(){
			location.reload();
			}			
			function save_name(){
			var gallery_name1=document.getElementById('gallery_name1').value;
			if(gallery_name1!=''){
				
			$('#modal1').hide();
			$('#gallery_name').val(gallery_name1);
			$('#new_button').click();
			}else{
				alert_new("Please Provide Gallery Name !!!",'red');
					//location.reload();
			}
			}
</script>

  <link rel="stylesheet" href="../../assests/css/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assests/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assests/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../assests/css/skins/_all-skins.min.css">



</head>

<body class="hold-transition skin-green fixed sidebar-mini">
<div class="col-md-4"></div>
<div class="col-md-4" style="padding:100px 100px 10px 10px;">
		
		  
		
			  <button type="button" class="btn btn-success"  id="old_button" style='display:none'data-toggle="modal" data-target="#modal1">
                + Add New Gallery</button>
	<button type="button" style='display:none' id="new_button" data-toggle="modal" data-target="#modal-default">
               </button>
			  

		 
		
		</div>
 <div class="col-md-4"></div>
    <!-- Content Header (Page header) -->
     

	
	 
    <!-- Main content -->
   <section id="portfolio">
   
   	<div class="row">
	 
   		<div class="col-twelve">
	 
				
		<!-----------------------------------------------Model Box Start----------------------------------------------------------->

	<div class="modal fade" id="modal-default">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header my_background_color">
					<button type="button" class="close" onclick="javascript: window.parent.get_content('gallery/gallery');" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add New Gallery</h4>
				  </div>
				  <div class="modal-body">
				
						
			
	<div class="file_upload">
	
		<form method="post"  action="uploadimage.php" class="dropzone" enctype="multipart/form-data" >
		<div class="form-group">
						  <label>Gallery Name<font style="color:red"><b>*</b></font></label>
						   <input type="text"  name="gallery_name"  id="gallery_name" placeholder="Gallery Name"  accept=".gif, .jpg, .jpeg, .png"  class="form-control " >
						</div>
			<div class="dz-message needsclick dropzone">
				<strong>Drop files here or click to upload.</strong><br />
			</div>
	<button type="submit" name="submit1" id="submit_button" style="display:none;">Save changes</button>
		</form>		
	</div>		
				  
				  

				  </div>
				  <div class="modal-footer ">
					<button type="button" class="btn btn-danger pull-left" onclick="javascript: window.parent.get_content('gallery/gallery');" data-dismiss="modal">Close</button>
					<button type="button" onclick="save_image()" class="btn btn-primary">upload</button>
				  </div>
				</div>
				<!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>
			<div class="modal fade" id="modal1">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header my_background_color">
					<button type="button" class="close" data-dismiss="modal" onclick="javascript: window.parent.get_content('gallery/gallery');" aria-label="Close">
					  <span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add New Gallery</h4>
				  </div>
				  <div class="modal-body">
		<div class="form-group">
						  <label>Gallery Name<font style="color:red"><b>*</b></font></label>
						   <input type="text"    id="gallery_name1" placeholder="Gallery Name"  accept=".gif, .jpg, .jpeg, .png"  class="form-control " >
						</div>
	   </div>		
				  
				  <div class="modal-footer ">
					<button type="button" onclick="javascript: window.parent.get_content('gallery/gallery');" class="btn btn-danger pull-left" >Close</button>
					<button type="button" onclick="save_name();" class="btn btn-primary" >ok</button>
				  </div>
				</div>
				<!-- /.modal-content -->
			  </div>
			  </div>
			  <!-- /.modal-dialog -->
							
  <!-----------------------------------------------Model Box End------------------------------------------------------------>		
   	 <!-- end folio-wrap -->
   		</div> <!-- end twelve -->
   	</div> <!-- end portfolio-content -->   	
</div> 
   </section>  <!-- end portfolio -->
<script src="../../assests/js/jquery.min.js"></script>
<script src="../../assests/js/jquery-ui.min.js"></script>
   <script src="js/bootstrap.min.js"></script>

 

</body>
</html>
<script>
modal_name123();	
</script>	
	 