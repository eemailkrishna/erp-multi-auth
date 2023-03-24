@include('common.header')
@include('common.navbar')
<script>
			function valid(s_no){
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_hostel(s_no);
 }
else  {
return false;
 }
  }
  function delete_hostel(s_no){
$.ajax({
type: "POST",
url: access_link+"hostel/hostel_student_dlt.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('hostel/hostel_student_list');
			   }else{
               //alert_new(detail);
			   }
}
});
}


</script>
    <section class="content-header">
      <h1>
               Hostel Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	     <li class="Active">Hostel Student List</li>
      </ol>
    </section>

	<!---***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Student Hostel List</h3>
<a href="javascript:get_content('hostel/hostel_student')"><button type="button" class="btn btn-danger" >Add Student</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Name</th>
                  <th>Father's Name</th>
                  <th>Class</th>
                  <th>Hostel Name</th>
                  <th>Room No.</th>
                  <th>Roll.No.</th>
                  <th>Total Fees</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                 <td >1</td>
                 <td >ankit jain</td>
                 <td >SONU </td>
                 <td >LKG</td>
                 <td >block1</td>
                 <td ></td>
                 <td >1900199</td>
                 <td >2000</td>
                  <td>
				  <button type="button"  onclick="post_content('hostel/hostel_student_details','id=6')" class="btn btn-success" >View</button>
			<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('6');" >Delete</button>

				 <button type="button"  onclick="post_content('hostel/hostel_pay_fee','id=6')" class="btn btn-success" >Pay Fee</button>
				   <button type="button"  onclick="post_content('hostel/leave','id=0_5')" class="btn btn-success" >Leave</button>
				  <button type="button"  onclick="post_content('hostel/hostel_pay_fee_details','id=0_5')" class="btn btn-success" >Paid</button>


				  </td>
                </tr>
                               <tr>
                 <td >2</td>
                 <td >Ongpong</td>
                 <td >mokho</td>
                 <td >NURSERY</td>
                 <td >MOSES</td>
                 <td >12</td>
                 <td >2000162</td>
                 <td >5000</td>
                  <td>
				  <button type="button"  onclick="post_content('hostel/hostel_student_details','id=7')" class="btn btn-success" >View</button>
			<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('7');" >Delete</button>

				 <button type="button"  onclick="post_content('hostel/hostel_pay_fee','id=7')" class="btn btn-success" >Pay Fee</button>
				   <button type="button"  onclick="post_content('hostel/leave','id=0_6')" class="btn btn-success" >Leave</button>
				  <button type="button"  onclick="post_content('hostel/hostel_pay_fee_details','id=0_6')" class="btn btn-success" >Paid</button>


				  </td>
                </tr>
                               <tr>
                 <td >3</td>
                 <td >konkon</td>
                 <td >yep</td>
                 <td >LKG</td>
                 <td >moses</td>
                 <td ></td>
                 <td >2000183</td>
                 <td >2500</td>
                  <td>
				  <button type="button"  onclick="post_content('hostel/hostel_student_details','id=8')" class="btn btn-success" >View</button>
			<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('8');" >Delete</button>

				 <button type="button"  onclick="post_content('hostel/hostel_pay_fee','id=8')" class="btn btn-success" >Pay Fee</button>
				   <button type="button"  onclick="post_content('hostel/leave','id=0_7')" class="btn btn-success" >Leave</button>
				  <button type="button"  onclick="post_content('hostel/hostel_pay_fee_details','id=0_7')" class="btn btn-success" >Paid</button>


				  </td>
                </tr>
                               <tr>
                 <td >4</td>
                 <td >NAMRATA SONVANE</td>
                 <td >NILKANTH SONVANE</td>
                 <td >LKG</td>
                 <td >TOL</td>
                 <td >10</td>
                 <td >2000034</td>
                 <td >2500</td>
                  <td>
				  <button type="button"  onclick="post_content('hostel/hostel_student_details','id=9')" class="btn btn-success" >View</button>
			<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('9');" >Delete</button>

				 <button type="button"  onclick="post_content('hostel/hostel_pay_fee','id=9')" class="btn btn-success" >Pay Fee</button>
				   <button type="button"  onclick="post_content('hostel/leave','id=0_8')" class="btn btn-success" >Leave</button>
				  <button type="button"  onclick="post_content('hostel/hostel_pay_fee_details','id=0_8')" class="btn btn-success" >Paid</button>


				  </td>
                </tr>
                               <tr>
                 <td >5</td>
                 <td >Abhijeet Thakur</td>
                 <td >RAMKISHAN CHAUHAN</td>
                 <td >5TH</td>
                 <td >TOL</td>
                 <td >10</td>
                 <td >2000108</td>
                 <td >500</td>
                  <td>
				  <button type="button"  onclick="post_content('hostel/hostel_student_details','id=12')" class="btn btn-success" >View</button>
			<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('12');" >Delete</button>

				 <button type="button"  onclick="post_content('hostel/hostel_pay_fee','id=12')" class="btn btn-success" >Pay Fee</button>
				   <button type="button"  onclick="post_content('hostel/leave','id=_2')" class="btn btn-success" >Leave</button>
				  <button type="button"  onclick="post_content('hostel/hostel_pay_fee_details','id=_2')" class="btn btn-success" >Paid</button>


				  </td>
                </tr>
                               <tr>
                 <td >6</td>
                 <td >ram kumar</td>
                 <td >raja</td>
                 <td >1ST</td>
                 <td >yohostel</td>
                 <td ></td>
                 <td >2200623</td>
                 <td >2500</td>
                  <td>
				  <button type="button"  onclick="post_content('hostel/hostel_student_details','id=13')" class="btn btn-success" >View</button>
			<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('13');" >Delete</button>

				 <button type="button"  onclick="post_content('hostel/hostel_pay_fee','id=13')" class="btn btn-success" >Pay Fee</button>
				   <button type="button"  onclick="post_content('hostel/leave','id=_3')" class="btn btn-success" >Leave</button>
				  <button type="button"  onclick="post_content('hostel/hostel_pay_fee_details','id=_3')" class="btn btn-success" >Paid</button>


				  </td>
                </tr>
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
         <script>
  $(function () {
    $('#example1').DataTable()
  })

</script>
@include('common.footer')
