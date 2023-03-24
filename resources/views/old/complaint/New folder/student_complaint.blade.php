<script>
    $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"complaint/student_complaint_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   get_content('complaint/student_complaint');
            }
			}
         });
      });
      
    function for_seen(s_no){
        $.ajax({
        type: "POST",
        url: access_link+"complaint/seen_unseen.php?id="+s_no+"",
        cache: false,
        success: function(detail){
        ////alert_new(detail);
        var res=detail.split("|?|");
           if(res[1]=='success'){
        	   alert_new('Successfully Completed');
        	   get_content('complaint/student_complaint');
           }else{
           //alert_new(detail); 
           }
        }
        });
    }
</script>
    <section class="content-header">
      <h1>
                  Complaint And Feedback Management		<small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('complaint/complaint')"><i class="fa fa-times-circle"></i> Complaints</a></li>
        <li class="active"><i class="fa fa-list"></i> Student Complaint List</li>
      </ol>
    </section>
	
	<!-- Model Box -->
	<div class="modal fade" id="modal-default">
		<div class="modal-dialog">
		<div class="modal-content">
		
		<div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true">&times;</span></button>
	    <h4 class="modal-title">Teacher Reply</h4>
		</div>
		<form method="post" id="my_form" enctype="multipart/form-data">
	    <div class="modal-body">
		
		
			 <div class="">
				<label>Reply to Parents</label>
			    <input type="text" name="student_complaint_teacher_reply" placeholder="Reply to Parents"  value="" class="form-control">
				<input type="hidden" id="reply_roll_no" name="reply_roll_no"   value="" class="form-control">
			 </div>
	   		
	
									  
		  </div>
		  <div class="modal-footer">
		  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		  <input type="submit" name="submit" value="Send" class="btn btn-primary" >
		  </div>
		</form>
		</div>
		  <!-- /.modal-content -->
		  </div>
		  <!-- /.modal-dialog -->
		  </div>

	
      <section class="content">
      <div class="row">
      <div class="col-xs-12">
         
          <!-- /.box -->

            <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Student Complaint List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
              <thead class="my_background_color">
                <tr>
                  <th>S.no.</th>
                  <th>student Name</th>
                  <th>Class</th>
                  <th>Roll.No.</th>
				  <th>Date</th>
				  <th>Complaints</th>
				  <th>Photo</th>
				  <th style="display:none;">Video</th>
				  <th>Complainter Name</th>
				  <th>Contact No.</th>
				  <th>Remark</th>
				  <th>Teacher Rpy</th>
				  
				  <th>Update By</th>
                  <th>Date</th>
				  
				  <th>Status</th>
				  <th> Reply</th>
                </tr>
              </thead>

<tr  align='center' >

	<th >1</th>
	<th  >Kartik Nishad</th>
	<th  >NURSERY</th>
	<th  >2201041</th>
	<th  >10/11/2022</th>
	<th  >waa Sagsaaga Layliska </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >teacher Socail </th>
	<th  ></th>
	<th  >A </th>
	<th >hey</th>
	
    <th>rahul@simption.com</th>
    <th>01-12-2022</th>

	<th><button type="button" onclick="for_seen('87')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="87" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >2</th>
	<th  >ram</th>
	<th  >NURSERY</th>
	<th  >2201043</th>
	<th  >31/10/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('86')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="86" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >3</th>
	<th  >ram</th>
	<th  >NURSERY</th>
	<th  >2201043</th>
	<th  >31/10/2022</th>
	<th  >work not done</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >aaaa</th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('85')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="85" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >4</th>
	<th  >shamli mashram </th>
	<th  >NURSERY</th>
	<th  >2200983</th>
	<th  >09/10/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >1234567899</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('84')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="84" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >5</th>
	<th  >shamli mashram </th>
	<th  >NURSERY</th>
	<th  >2200983</th>
	<th  >28/09/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >1234567899</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('83')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="83" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >6</th>
	<th  >shamli mashram </th>
	<th  >NURSERY</th>
	<th  >2200983</th>
	<th  >09/09/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >1234567899</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('82')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="82" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >7</th>
	<th  >Neeraj Agrawal</th>
	<th  >NURSERY</th>
	<th  >2200940</th>
	<th  >03/08/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >9300251956</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('81')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="81" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >8</th>
	<th  >Prashant kumar</th>
	<th  >NURSERY</th>
	<th  >2200914</th>
	<th  >26/07/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('80')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="80" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >9</th>
	<th  >aashish xyz </th>
	<th  >NURSERY</th>
	<th  >2200881</th>
	<th  >16/07/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >5656565656</th>
	<th  >A </th>
	<th >YOUR SUN IS BEHAVE NOT GOOD TO TEACHER</th>
	
    <th>rahul@simption.com</th>
    <th>20-07-2022</th>

	<th><button type="button" onclick="for_seen('79')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="79" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >10</th>
	<th  >SHIVANSH RAWAT</th>
	<th  >NURSERY</th>
	<th  >2200800</th>
	<th  >05/06/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >6283926887</th>
	<th  >A </th>
	<th >YOUR SUN IS BEHAVE NOT GOOD TO TEACHER</th>
	
    <th>rahul@simption.com</th>
    <th>21-07-2022</th>

	<th><button type="button" onclick="for_seen('78')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="78" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >11</th>
	<th  >INAMUR RAHMAN</th>
	<th  >NURSERY</th>
	<th  >2200759</th>
	<th  >24/04/2022</th>
	<th  >Buurhakabo</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >Mohamed Al</th>
	<th  >8486304694</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('77')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="77" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >12</th>
	<th  >INAMUR RAHMAN</th>
	<th  >NURSERY</th>
	<th  >2200759</th>
	<th  >24/04/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8486304694</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('76')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="76" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >13</th>
	<th  >Vaishnavi Thakur</th>
	<th  >NURSERY</th>
	<th  >2200747</th>
	<th  >15/04/2022</th>
	<th  >not reading</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >roshni</th>
	<th  >9918666600</th>
	<th  >A </th>
	<th >Are you see </th>
	
    <th>rahul@simption.com</th>
    <th>26-04-2022</th>

	<th><button type="button" onclick="for_seen('75')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="75" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >14</th>
	<th  >xghkjh</th>
	<th  >NURSERY</th>
	<th  >2200720</th>
	<th  >02/04/2022</th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >1234567891</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('74')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="74" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >15</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >14 / 09 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th >i will check</th>
	
    <th>rahul@simption.com</th>
    <th>25-09-2021</th>

	<th><button type="button" onclick="for_seen('73')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="73" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >16</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >29 / 08 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('72')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="72" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >17</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >01 / 08 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('71')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="71" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >18</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >13 / 07 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('70')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="70" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >19</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >13 / 07 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('69')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="69" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >20</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >13 / 07 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('68')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="68" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >21</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >10 / 07 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th >Pending</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('67')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="67" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >22</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >30 / 05 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('66')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="66" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >23</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >16 / 05 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('65')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="65" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >24</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >19 / 04 / 2021 </th>
	<th  >demo </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >test</th>
	<th  ></th>
	<th  >A </th>
	<th >ok raja</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('64')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="64" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >25</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >05 / 04 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('63')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="63" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >26</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >27 / 01 / 2021 </th>
	<th  >Abc is speaking in urdu</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >observers report</th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('62')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="62" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >27</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >25 / 01 / 2021 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('61')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="61" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >28</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >23 / 11 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('60')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="60" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >29</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >06 / 11 / 2020 </th>
	<th  >naughty </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >Moli </th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('59')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="59" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >30</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >16 / 10 / 2020 </th>
	<th  >sir I have issue with maths</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >subject</th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('58')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="58" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >31</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >15 / 07 / 2020 </th>
	<th  >hlo</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >teacher</th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th>rahul@simption.com</th>
    <th>05-09-2020</th>

	<th><button type="button" onclick="for_seen('57')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="57" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >32</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >15 / 07 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('56')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="56" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >33</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >17 / 06 / 2020 </th>
	<th  >good</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >good
</th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('55')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="55" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >34</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >17 / 06 / 2020 </th>
	<th  >123
</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >fgh
</th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('54')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="54" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >35</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >17 / 06 / 2020 </th>
	<th  >test</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >test
</th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th>rahul@simption.com</th>
    <th>05-09-2020</th>

	<th><button type="button" onclick="for_seen('53')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="53" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >36</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >14 / 06 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('52')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="52" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >37</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >11 / 06 / 2020 </th>
	<th  >This is my complaint.
to the teacher</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >Mr. Kurrey
</th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('51')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="51" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >38</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >08 / 06 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('50')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="50" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >39</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >07 / 06 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('49')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="49" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >40</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >16 / 05 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  ></th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('48')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="48" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >41</th>
	<th  >AAISHA KURREY</th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >06 / 05 / 2020 </th>
	<th  >dyiyoykdukdukdukd</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >ucukcukdykdyixykxhmzngBhshkduk</th>
	<th  >null</th>
	<th  >A </th>
	<th >j</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('47')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="47" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >42</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >11 / 02 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('46')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="46" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >43</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >09 / 02 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('45')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="45" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >44</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >04 / 02 / 2020 </th>
	<th  >no good</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >shutdiwn

</th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('44')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="44" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >45</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >26 / 01 / 2020 </th>
	<th  >Jo
3</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >bbb</th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('43')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="43" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >46</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >24 / 01 / 2020 </th>
	<th  >bbb</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >nnhh</th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('42')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="42" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >47</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >20 / 01 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('41')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="41" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >48</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >03 / 01 / 2020 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('40')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="40" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >49</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >22 / 12 / 2019 </th>
	<th  >poor</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >hindi</th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('39')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="39" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >50</th>
	<th  >Abhijeet Thakur</th>
	<th  >NURSERY</th>
	<th  >1900584</th>
	<th  >26 / 11 / 2019 </th>
	<th  >student  is very bad </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent </th>
	<th  >9424162200</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('38')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="38" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >51</th>
	<th  >Abhijeet Thakur</th>
	<th  >NURSERY</th>
	<th  >1900584</th>
	<th  >26 / 11 / 2019 </th>
	<th  >complaint </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent </th>
	<th  >9424162200</th>
	<th  >A </th>
	<th >good</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('37')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="37" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >52</th>
	<th  >cheatan</th>
	<th  >NURSERY</th>
	<th  >1900703</th>
	<th  >11 / 11 / 2019 </th>
	<th  >student behaviour  is wrong in home and cheat an is not complete our homework self in home plg you see carefully  in class  and special treat ....</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent </th>
	<th  >9717386989</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('36')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="36" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >53</th>
	<th  >cheatan</th>
	<th  >NURSERY</th>
	<th  >1900703</th>
	<th  >11 / 11 / 2019 </th>
	<th  >this student is very bad in home and out side the home and this student not complete our homework  self...</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent</th>
	<th  >9717386989</th>
	<th  >A </th>
	<th >okkk I will see your student in class but your student manners is wrong in inside a class plg you also care student</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('35')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="35" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >54</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >08 / 11 / 2019 </th>
	<th  >check tiffin box of vikash modi</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >tiffin</th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th>rahul@simption.com</th>
    <th>25-03-2020</th>

	<th><button type="button" onclick="for_seen('32')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="32" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >55</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >08 / 11 / 2019 </th>
	<th  >hows abot vikash study</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th >very weak in hindi subject</th>
	
    <th>kailash soni</th>
    <th>07-01-2020</th>

	<th><button type="button" onclick="for_seen('31')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="31" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >56</th>
	<th  >cheatan</th>
	<th  >NURSERY</th>
	<th  >1900703</th>
	<th  >06 / 11 / 2019 </th>
	<th  >cheats is not complete  our work properly  in home</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent</th>
	<th  >9717386989</th>
	<th  >A </th>
	<th >your sun is not complete  our homework and this student is very bad manners in school please care...</th>
	
    <th>rahul@simption.com</th>
    <th>24-01-2021</th>

	<th><button type="button" onclick="for_seen('30')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="30" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >57</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >19 / 10 / 2019 </th>
	<th  >he is not given</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('29')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="29" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >58</th>
	<th  >Student demo </th>
	<th  >11TH</th>
	<th  >1900642</th>
	<th  >25 / 09 / 2019 </th>
	<th  >complaint</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent </th>
	<th  >9717386989</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('28')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="28" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >59</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >13 / 09 / 2019 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('27')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="27" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >60</th>
	<th  >Student demo </th>
	<th  >11TH</th>
	<th  >1900642</th>
	<th  >13 / 09 / 2019 </th>
	<th  >complaint</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent</th>
	<th  >9717386989</th>
	<th  >A </th>
	<th >no reply</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('26')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="26" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >61</th>
	<th  >Student demo </th>
	<th  >11TH</th>
	<th  >1900642</th>
	<th  >13 / 09 / 2019 </th>
	<th  >complaint</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >teacher</th>
	<th  >9717386989</th>
	<th  >A </th>
	<th >good</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('25')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="25" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >62</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >03 / 09 / 2019 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th >ok</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('24')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="24" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >63</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >02 / 07 / 2019 </th>
	<th  >wfvgqfvq</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >Tammy.ar</th>
	<th  >8109433924</th>
	<th  >A </th>
	<th >today </th>
	
    <th>rahul@simption.com</th>
    <th>04-10-2020</th>

	<th><button type="button" onclick="for_seen('23')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="23" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >64</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >20 / 05 / 2019 </th>
	<th  >vdgdyfufl</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >8109433924</th>
	<th  >A </th>
	<th >c</th>
	
    <th>simption</th>
    <th>03-09-2019</th>

	<th><button type="button" onclick="for_seen('22')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="22" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >65</th>
	<th  >VIKAS MODI </th>
	<th  >NURSERY</th>
	<th  >1900229</th>
	<th  >09 / 05 / 2019 </th>
	<th  >my complaint </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >by me</th>
	<th  >8109433924</th>
	<th  >A </th>
	<th >no</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('21')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="21" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >66</th>
	<th  >Avik Shrotiya</th>
	<th  >NURSERY</th>
	<th  >1800014</th>
	<th  >12 / 03 / 2019 </th>
	<th  >complaint </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent</th>
	<th  >8269679536</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('20')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="20" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >67</th>
	<th  >Avik Shrotiya</th>
	<th  >NURSERY</th>
	<th  >1800014</th>
	<th  >12 / 03 / 2019 </th>
	<th  >complaint </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >parent</th>
	<th  >8269679536</th>
	<th  >A </th>
	<th >good</th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('19')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="19" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >68</th>
	<th  >    Rahul Agrawal</th>
	<th  >NURSERY</th>
	<th  >1900102</th>
	<th  >07 / 03 / 2019 </th>
	<th  >This is todey</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >9074822542</th>
	<th  >A </th>
	<th ></th>
	
    <th></th>
    <th>30-11--0001</th>

	<th><button type="button" onclick="for_seen('18')" class="btn btn-default "  ></th>
	<th><button type="button" class="btn btn-default " value="18" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >69</th>
	<th  >Rahul Agrawal</th>
	<th  >NURSERY</th>
	<th  >1900102</th>
	<th  >04 / 03 / 2019 </th>
	<th  >complaint </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >complaint </th>
	<th  >9074822542</th>
	<th  >A </th>
	<th ></th>
	
    <th>rahul@simption.com</th>
    <th>21-02-2022</th>

	<th><button type="button" onclick="for_seen('17')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="17" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >70</th>
	<th  >Rahul Agrawal</th>
	<th  >NURSERY</th>
	<th  >1900102</th>
	<th  >28 / 02 / 2019 </th>
	<th  >student complaint </th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >complaint </th>
	<th  >9074822542</th>
	<th  >A </th>
	<th ></th>
	
    <th>rahul@simption.com</th>
    <th>25-01-2021</th>

	<th><button type="button" onclick="for_seen('16')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="16" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >71</th>
	<th  >Aditi Bhargav</th>
	<th  >1ST</th>
	<th  >1800090</th>
	<th  >15 / 02 / 2019 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >9825854588</th>
	<th  >A </th>
	<th ></th>
	
    <th>rahul@simption.com</th>
    <th>13-04-2020</th>

	<th><button type="button" onclick="for_seen('15')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="15" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >72</th>
	<th  >Aditi Bhargav</th>
	<th  >1ST</th>
	<th  >1800090</th>
	<th  >15 / 02 / 2019 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >9825854588</th>
	<th  >A </th>
	<th ></th>
	
    <th>simption2329</th>
    <th>29-04-2019</th>

	<th><button type="button" onclick="for_seen('14')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="14" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >73</th>
	<th  >Aarush Sahu</th>
	<th  >NURSERY</th>
	<th  >1800012</th>
	<th  >14 / 01 / 2019 </th>
	<th  >demo</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >demo</th>
	<th  ></th>
	<th  >A </th>
	<th >superb</th>
	
    <th>simption2329</th>
    <th>29-01-2019</th>

	<th><button type="button" onclick="for_seen('13')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="13" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >74</th>
	<th  >Aarush Sahu</th>
	<th  >NURSERY</th>
	<th  >1800012</th>
	<th  >14 / 01 / 2019 </th>
	<th  >demo</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >demo</th>
	<th  ></th>
	<th  >A </th>
	<th >good</th>
	
    <th>rahul@simption.com</th>
    <th>13-04-2020</th>

	<th><button type="button" onclick="for_seen('12')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="12" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >75</th>
	<th  >AAFSEEN KHAN</th>
	<th  >NURSERY</th>
	<th  >1800873</th>
	<th  >13 / 01 / 2019 </th>
	<th  >hh</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >hh</th>
	<th  >8435268022</th>
	<th  >A </th>
	<th >good</th>
	
    <th>rahul@simption.com</th>
    <th>13-04-2020</th>

	<th><button type="button" onclick="for_seen('11')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="11" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >76</th>
	<th  >Aditi Bhargav</th>
	<th  >1ST</th>
	<th  >1800090</th>
	<th  >08 / 01 / 2019 </th>
	<th  ></th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  ></th>
	<th  >9825854588</th>
	<th  >A </th>
	<th ></th>
	
    <th>simption</th>
    <th>25-09-2019</th>

	<th><button type="button" onclick="for_seen('10')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="10" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >77</th>
	<th  >Aditi Bhargav</th>
	<th  >1ST</th>
	<th  >1800090</th>
	<th  >08 / 01 / 2019 </th>
	<th  >hhh</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >vv</th>
	<th  >9825854588</th>
	<th  >A </th>
	<th ></th>
	
    <th>simption2329</th>
    <th>06-02-2019</th>

	<th><button type="button" onclick="for_seen('9')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="9" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >78</th>
	<th  >Aditi Bhargav</th>
	<th  >1ST</th>
	<th  >1800090</th>
	<th  >08 / 01 / 2019 </th>
	<th  >hhh</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >vv</th>
	<th  >9825854588</th>
	<th  >A </th>
	<th ></th>
	
    <th>simption</th>
    <th>24-11-2019</th>

	<th><button type="button" onclick="for_seen('8')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="8" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >79</th>
	<th  >Aditi Bhargav</th>
	<th  >1ST</th>
	<th  >1800090</th>
	<th  >05 / 01 / 2019 </th>
	<th  >haahahsh</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >father</th>
	<th  >9825854588</th>
	<th  >A </th>
	<th >demo complete</th>
	
    <th>rahul@simption.com</th>
    <th>12-10-2020</th>

	<th><button type="button" onclick="for_seen('7')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="7" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >80</th>
	<th  >Aditi Bhargav</th>
	<th  >LKG</th>
	<th  >1800090</th>
	<th  >28 / 12 / 2018 </th>
	<th  >vb</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >nbn</th>
	<th  >9825854588</th>
	<th  >A </th>
	<th ></th>
	
    <th>rahul@simption.com</th>
    <th>31-03-2020</th>

	<th><button type="button" onclick="for_seen('6')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="6" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >81</th>
	<th  >Aditi Bhargav</th>
	<th  >LKG</th>
	<th  >1800090</th>
	<th  >28 / 12 / 2018 </th>
	<th  >hh</th>
		<th><img src="../../documents/Complaint/blank_document.jpg" height="50" width="50"></th>
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >bju</th>
	<th  >9825854588</th>
	<th  >A </th>
	<th >Dhdhdhdh</th>
	
    <th>rahul@simption.com</th>
    <th>14-07-2020</th>

	<th><button type="button" onclick="for_seen('5')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="5" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >82</th>
	<th  >Aditi Bhargav</th>
	<th  >NURSERY</th>
	<th  >1800090</th>
	<th  >26 / 12 / 2018 </th>
	<th  >demo complaint </th>
		<th><a href="../../documents/complaint//955855.jpg" target="_blank"><img src="../../documents/complaint//955855.jpg" height="50" width="50"></a></th> 
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >bhupesh</th>
	<th  >9825854588</th>
	<th  >A </th>
	<th >lkmk;l,l/</th>
	
    <th>rahul@simption.com</th>
    <th>22-09-2020</th>

	<th><button type="button" onclick="for_seen('4')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="4" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >83</th>
	<th  >Aditi Bhargav</th>
	<th  >NURSERY</th>
	<th  >1800090</th>
	<th  >26 / 12 / 2018 </th>
	<th  >ips@gmail.com </th>
		<th><a href="../../documents/complaint//369133.jpg" target="_blank"><img src="../../documents/complaint//369133.jpg" height="50" width="50"></a></th> 
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >ips@gmail.com </th>
	<th  >9825854588</th>
	<th  >A </th>
	<th >vdvd</th>
	
    <th>rahul@simption.com</th>
    <th>13-04-2020</th>

	<th><button type="button" onclick="for_seen('3')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="3" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >84</th>
	<th  >Aditi Bhargav</th>
	<th  >NURSERY</th>
	<th  >1800090</th>
	<th  >26 / 12 / 2018 </th>
	<th  >test </th>
		<th><a href="../../documents/complaint//969393.jpg" target="_blank"><img src="../../documents/complaint//969393.jpg" height="50" width="50"></a></th> 
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >test</th>
	<th  >9825854588</th>
	<th  >A </th>
	<th >ghgr</th>
	
    <th>rahul@simption.com</th>
    <th>04-10-2020</th>

	<th><button type="button" onclick="for_seen('2')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="2" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >85</th>
	<th  >Aditi Bhargav</th>
	<th  >NURSERY</th>
	<th  >1800090</th>
	<th  >25 / 12 / 2018 </th>
	<th  >bb</th>
		<th><a href="../../documents/complaint//157977.jpg" target="_blank"><img src="../../documents/complaint//157977.jpg" height="50" width="50"></a></th> 
		<th  style="display:none;"><a href="../../documents/complaint//" target="_blank">Click</a></th>
	<th  >vv</th>
	<th  >9825854588</th>
	<th  >A </th>
	<th >फ़्ड्ग़्ड</th>
	
    <th>rahul@simption.com</th>
    <th>20-02-2022</th>

	<th><button type="button" onclick="for_seen('1')" class="btn btn-default "  >Seen</th>
	<th><button type="button" class="btn btn-default " value="1" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_complaint_roll_no" >Reply</th>
	
	</tr>
	
	
				  
			 
			  
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
   <!-- /.content -->
  </div>
    


<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
	function open_model(roll_no){
	document.getElementById("reply_roll_no").value=roll_no;
	}
</script>
