
    <section class="content-header">
      <h1>
         Homework Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
          
        <li><a href="javascript:get_content('smartclass/smartclass')"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="javascript:get_content('smartclass/homework')"><i class="fa fa-book"></i> Homework</a></li>
        <li class="active"><i class="fa fa-list"></i>  Homework List</li>
      </ol>
    </section>
	
	<script>

	function file_open(path){
	      $("#myModal").modal('show');
	    document.getElementById('image').src=path;
	    document.getElementById('file_download').href=path;
	  
	    
	}
		function home_work_detail(id){
	      $("#myModal1").modal('show');
	   var data= document.getElementById('homework_'+id).value;
	    $('#data').html(data);
	  
	    
	}function home_work_detail_reply(id){
	      $("#myModal2").modal('show');
	   var data= document.getElementById('homework_reply_'+id).value;
	    $('#homework_reply').val(data);
	    $('#answer_id_hidden').val(id);
	  
	    
	}
 $("#my_form").submit(function(e){
        e.preventDefault();
       $("#myModal2").modal('hide');
    var formdata = new FormData(this);
 var homework_id=document.getElementById('homework_id_hidden').value;

        $.ajax({
            url: access_link+"smartclass/homework_student_reply.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
             
              var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Replied!!!','green');
				   post_content('smartclass/homework_student_answer','homework_id='+homework_id);
            }else{
                alert_new('Sorry!!!Some error occured','red');
            }
			}
         });


      });
	</script>
	 

    <section class="content">
  <div class="box box-success ">
				<div class="box-header with-border">
					<h3 class="box-title" style="color:teal;">Homework List</h3>
				</div>
				<br>
<div class="box-body">
                       <input type="hidden" value="896" id="homework_id_hidden" >
              <div class="col-md-12">
                  <h3 style="color:red">Homework:-xyz</h3></div>
              	</div>
            <div class="box-body table-responsive">
             
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
	    <th>S No</th>
	    <th>Student Name</th>
	    <th>Class</th>
	    <th>Section</th>
	    <th>Homework</th>
	    <th>File-1</th>
	    <th>File-2</th>
	    <th>File-3</th>
	    <th>File-4</th>
	    <th>File-5</th>
	    <th>File-6</th>
	    <th>Reply</th>
        </tr>
        </thead>
        <tbody>
  </tbody>
             </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
		
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog" style="width:50%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <a href="" id="file_download" target="_blank"><button type="button" class="btn btn-success" >Download File</button></a>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h4 class="modal-title">File</h4>
      </div>
      <div class="modal-body">
       <img src="" id="image" width="600px" height="480px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <div id="myModal1" class="modal fade" role="dialog" >
  <div class="modal-dialog" style="width:50%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h4 class="modal-title">Answer</h4>
      </div>
      <div class="modal-body" id="data">
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <div id="myModal2" class="modal fade" role="dialog" >
  <div class="modal-dialog" style="width:50%">

    <!-- Modal content-->
    <div class="modal-content">
        
		   <form method="post" enctype="multipart/form-data" id="my_form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h4 class="modal-title">Reply</h4>
      </div>
      <div class="modal-body">
          
                  <input type="text" value="" id="answer_id_hidden" name="answer_id_hidden" style="display:none">
      <textarea id="homework_reply" rows="15" name="homework_reply" class="form-control"></textarea>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>