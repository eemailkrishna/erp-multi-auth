<script>
    $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"complaint/staff_complaint_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   get_content('complaint/staff_complaint');
            }
			}
         });
      });
</script>
    <section class="content-header">
      <h1>
                  Complaint And Feedback Management		<small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('complaint/complaint')"><i class="fa fa-times-circle"></i> Complaints</a></li>
        <li><i class="fa fa-list"></i>   Complaint And Feedback Management</li>
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
		<form method="post" id="my_form"  >
	    <div class="modal-body">
		
		
			 <div class="">
				<label>Reply to Parents</label>
			    <input type="text" name="staff_complaint_reply" placeholder="Reply to Parents"  value="" class="form-control">
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

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
      <section class="content">
      <div class="row">
      <div class="col-xs-12">
         
          <!-- /.box -->

            <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Staff Complaint List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
              <thead class="my_background_color">
                <tr>
                  <th>S.no.</th>
                  <th>Complaint Type</th>
				  <th>Roll.No.</th>
				  <th>Name</th>
				  <th>Date</th>
				  <th>Complaints</th>
				  <th>Complainter Name</th>
				  <th>Contact No.</th>
				  <th>Suggestion</th>
				  
				  <th>Update By</th>
                  <th>Date</th>
				  
				  <th style="display:none;"> Reply</th>
				  <th style="display:none;">Status</th>
				  <th style="display:none;"> Reply</th>
                </tr>
              </thead>

<tr  align='center' >

	<th >1</th>
	<th  >studies</th>
	<th  >2201043</th>
	<th  >xxx</th>
	<th  >31/48/2022</th>
	<th  ></th>
	<th  >ram</th>
	<th  ></th>
	<th  ></th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=35 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2201043" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >2</th>
	<th  >studies</th>
	<th  >2200960</th>
	<th  >suresh soni</th>
	<th  >27/20/2022</th>
	<th  >your son is very poor in math</th>
	<th  >UMESH KUMAR KUSHWAHA</th>
	<th  >4523659874</th>
	<th  >please take care him</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=34 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200960" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >3</th>
	<th  >studies</th>
	<th  >2200940</th>
	<th  >suresh soni</th>
	<th  >03/23/2022</th>
	<th  ></th>
	<th  >Neeraj Agrawal</th>
	<th  >9300251956</th>
	<th  ></th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=33 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200940" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >4</th>
	<th  >studies</th>
	<th  >2200940</th>
	<th  >suresh soni</th>
	<th  >03/22/2022</th>
	<th  ></th>
	<th  >Neeraj Agrawal</th>
	<th  >9300251956</th>
	<th  ></th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=32 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200940" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >5</th>
	<th  >studies</th>
	<th  >2200914</th>
	<th  >suresh soni</th>
	<th  >26/01/2022</th>
	<th  ></th>
	<th  >Prashant kumar</th>
	<th  ></th>
	<th  ></th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=31 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200914" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >6</th>
	<th  >studies</th>
	<th  >2200881</th>
	<th  >Puran Singh Sahu</th>
	<th  >19/41/2022</th>
	<th  ></th>
	<th  >aashish xyz </th>
	<th  >5656565656</th>
	<th  ></th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=30 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200881" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >7</th>
	<th  >studies</th>
	<th  >2200800</th>
	<th  >xxx</th>
	<th  >05/51/2022</th>
	<th  ></th>
	<th  >SHIVANSH RAWAT</th>
	<th  >6283926887</th>
	<th  ></th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=29 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200800" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >8</th>
	<th  >studies</th>
	<th  >2200759</th>
	<th  >VIVEK KUMAR SHARMA</th>
	<th  >21/25/2022</th>
	<th  >hjjk</th>
	<th  >INAMUR RAHMAN</th>
	<th  >8486304694</th>
	<th  >bbj</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=28 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200759" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >9</th>
	<th  >studies</th>
	<th  >2200720</th>
	<th  >xxx</th>
	<th  >01/38/2022</th>
	<th  >name change</th>
	<th  >xghkjh</th>
	<th  >1234567891</th>
	<th  >sir apka name change kijiye
ye konsa nam hota h</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=27 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200720" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >10</th>
	<th  >studies</th>
	<th  >2200648</th>
	<th  >xxx</th>
	<th  >16/13/2022</th>
	<th  ></th>
	<th  >Bijoy</th>
	<th  >4555</th>
	<th  ></th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=26 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200648" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >11</th>
	<th  >studies</th>
	<th  >2200648</th>
	<th  >xxx</th>
	<th  >13/25/2022</th>
	<th  >ghhhh</th>
	<th  >Bijoy</th>
	<th  >4555</th>
	<th  >fg</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=25 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="2200648" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >12</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >Rashid Wafy</th>
	<th  >15 / 06 / 2021 </th>
	<th  >gg</th>
	<th  >ggg</th>
	<th  >999966332</th>
	<th  >ty</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=24 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >13</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >honey</th>
	<th  >28 / 01 / 2021 </th>
	<th  >ggh</th>
	<th  >sai</th>
	<th  >22</th>
	<th  >df</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=23 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >14</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >honey</th>
	<th  >27 / 01 / 2021 </th>
	<th  >no brooming in class 2nd</th>
	<th  >tariaq sir</th>
	<th  >9622780109</th>
	<th  >plz broom the class</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=22 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >15</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >honey</th>
	<th  >25 / 01 / 2021 </th>
	<th  >Tonk name</th>
	<th  >Ujjawal Kumar</th>
	<th  >7858917983</th>
	<th  >Good</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=21 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >16</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >Dhanraj Prajapati</th>
	<th  >01 / 06 / 2020 </th>
	<th  >this not show my profil</th>
	<th  >pranjal</th>
	<th  >+916203880</th>
	<th  >please repair it</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" >yes</th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=20 '><button type="button" class="btn btn-default "  >seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >17</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >Brindaban Jamatia</th>
	<th  >15 / 04 / 2020 </th>
	<th  >jddjdjjd</th>
	<th  >djdjdjdj</th>
	<th  >6464646464</th>
	<th  >sjejejjejrjrjrjrjrjrjfjfjt</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=19 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >18</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >MD JAHIR KHAN</th>
	<th  >06 / 01 / 2020 </th>
	<th  >yfdhjk</th>
	<th  >jc</th>
	<th  >9893868714</th>
	<th  >hff</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=18 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >19</th>
	<th  >studies</th>
	<th  >1900642</th>
	<th  >DEMO</th>
	<th  >25 / 09 / 2019 </th>
	<th  >complaint </th>
	<th  >name</th>
	<th  >25802580</th>
	<th  >suggestions</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=17 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900642" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >20</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >suresh soni</th>
	<th  >13 / 09 / 2019 </th>
	<th  >uyg</th>
	<th  >fuhf</th>
	<th  >6635522226</th>
	<th  >gghgfhgf</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=16 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >21</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >DEMO</th>
	<th  >03 / 09 / 2019 </th>
	<th  >j</th>
	<th  >jh</th>
	<th  >56</th>
	<th  >bb</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=15 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >22</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >Abhul Rjaak </th>
	<th  >16 / 07 / 2019 </th>
	<th  >4 book</th>
	<th  >amit singh</th>
	<th  >+449191313</th>
	<th  >english</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=14 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >23</th>
	<th  >studies</th>
	<th  >1900229</th>
	<th  >Abhul Rjaak </th>
	<th  >17 / 06 / 2019 </th>
	<th  >rd</th>
	<th  >cff</th>
	<th  >98</th>
	<th  >good</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=13 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900229" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >24</th>
	<th  >studies</th>
	<th  >1900138</th>
	<th  >Human Ram Bhati</th>
	<th  >26 / 03 / 2019 </th>
	<th  >hg</th>
	<th  >hj</th>
	<th  >66</th>
	<th  >hh</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=12 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900138" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >25</th>
	<th  >studies</th>
	<th  >1800014</th>
	<th  >shreya sharma</th>
	<th  >12 / 03 / 2019 </th>
	<th  >complaint </th>
	<th  >complaint </th>
	<th  >25802580</th>
	<th  >suggestions </th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=11 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1800014" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >26</th>
	<th  >studies</th>
	<th  >1900102</th>
	<th  >rohan</th>
	<th  >28 / 02 / 2019 </th>
	<th  >complaint </th>
	<th  >complaint </th>
	<th  >25802580</th>
	<th  >complaint </th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=10 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900102" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >27</th>
	<th  >studies</th>
	<th  >1900102</th>
	<th  >DEMO</th>
	<th  >28 / 02 / 2019 </th>
	<th  >complaint </th>
	<th  >complaint </th>
	<th  >25802580</th>
	<th  >No Suggestion </th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=9 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900102" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >28</th>
	<th  >studies</th>
	<th  >1900102</th>
	<th  >cfvg</th>
	<th  >28 / 02 / 2019 </th>
	<th  >complaint </th>
	<th  >Complaint </th>
	<th  >25802580</th>
	<th  >complaint </th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=8 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1900102" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >29</th>
	<th  >studies</th>
	<th  >1800090</th>
	<th  >Esaaan</th>
	<th  >08 / 01 / 2019 </th>
	<th  >rr</th>
	<th  >de</th>
	<th  >52</th>
	<th  >fr</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=7 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1800090" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >30</th>
	<th  >studies</th>
	<th  >1800090</th>
	<th  >Aarti Jha</th>
	<th  >08 / 01 / 2019 </th>
	<th  >nsns</th>
	<th  >bsbs</th>
	<th  >9797</th>
	<th  >vsbs</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=6 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1800090" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >31</th>
	<th  >studies</th>
	<th  >1800090</th>
	<th  >Kailash soni</th>
	<th  >05 / 01 / 2019 </th>
	<th  >tuu</th>
	<th  >tiu</th>
	<th  >666</th>
	<th  >guu</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=5 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1800090" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >32</th>
	<th  >studies</th>
	<th  >1800090</th>
	<th  >kajal Sahu </th>
	<th  >26 / 12 / 2018 </th>
	<th  >demo</th>
	<th  >buupesh</th>
	<th  >9039427433</th>
	<th  >improve </th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=4 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1800090" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >33</th>
	<th  >studies</th>
	<th  >1800090</th>
	<th  >Aarti Jha</th>
	<th  >26 / 12 / 2018 </th>
	<th  >testing</th>
	<th  >test</th>
	<th  >369369</th>
	<th  >test</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=3 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1800090" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >34</th>
	<th  >studies</th>
	<th  >1800090</th>
	<th  >Aarti Jha</th>
	<th  >26 / 12 / 2018 </th>
	<th  >test</th>
	<th  >test</th>
	<th  >25802580</th>
	<th  >Test</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=2 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1800090" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
	</tr>
	
	
	
<tr  align='center' >

	<th >35</th>
	<th  >studies</th>
	<th  >1800090</th>
	<th  >Aarti Jha</th>
	<th  >25 / 12 / 2018 </th>
	<th  >not good</th>
	<th  >bhs</th>
	<th  >8080808080</th>
	<th  >leave him</th>
	
    <td></td>
    <td>30-11--0001</td>
	
	<th style="display:none;" ></th>
	<th style="display:none;"><a href='seen_unseen_staff.php?id=1 '><button type="button" class="btn btn-default "  >Seen</th>
	<th style="display:none;"><button type="button" class="btn btn-default " value="1800090" onclick="open_model(this.value)" data-toggle="modal"  data-target="#modal-default" id="student_roll_no" >Reply</th>
	
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
