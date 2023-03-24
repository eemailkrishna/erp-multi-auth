			<script>
		
			function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_element(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_element(s_no){
$.ajax({
type: "POST",
url: access_link+"certificate/bonafied_certificate_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('certificate/bonafied_certificate_list');
			   }else{
               //alert_new(detail); 
			   }
}
});
}

</script>	
    <section class="content-header">
      <h1>
        Certificate Management		<small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
       <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('certificate/certificate')"><i class="fa fa-certificate"></i> Certificate</a></li>
      <li class="active">Bonafied Certificate List</li> </ol>
    </section>

	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success ">
            <div class="box-header with-border">
              <h3 class="box-title">Bonafied Certificate List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>student Name</th>
                  <th>Father's Name</th>
                  <th>Roll.No.</th>
                  <th>School Name</th>
				  <th>During Year</th>
                  <th>Issue Date</th>
                  <th>Bonafied Type</th>
                  
                  <th>Update By</th>
                  <th>Date</th>
                  
                  <th>Print</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
				                                <tr>
                  <td>1</td>
                  <td>Umesh</td>
                  <td>Rajesh</td>
				  <td>2000298</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 2022</td>
				  <td>22-11-2022</td>
                  <td>scholarship</td>
                  
                  <td>rahul@simption.com</td>
                  <td>02-12-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/bonafied_certificate.php?id=206' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/bonafied_certificate_form_edit','id=206')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('206');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>2</td>
                  <td>AMINA DHABAK</td>
                  <td>AJIJUL DHABAK</td>
				  <td>2100398</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 2022</td>
				  <td>24-11-2022</td>
                  <td>fdf</td>
                  
                  <td>rahul@simption.com</td>
                  <td>25-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/bonafied_certificate.php?id=205' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/bonafied_certificate_form_edit','id=205')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('205');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>3</td>
                  <td>joy</td>
                  <td>peter</td>
				  <td>2000345</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 22</td>
				  <td>25-11-2022</td>
                  <td>Student</td>
                  
                  <td>rahul@simption.com</td>
                  <td>25-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/bonafied_certificate.php?id=204' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/bonafied_certificate_form_edit','id=204')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('204');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>4</td>
                  <td>Upen</td>
                  <td>Rajdev Mishra</td>
				  <td>2100412</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 2022</td>
				  <td>26-11-2022</td>
                  <td>notmsl</td>
                  
                  <td>rahul@simption.com</td>
                  <td>25-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/bonafied_certificate.php?id=203' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/bonafied_certificate_form_edit','id=203')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('203');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>5</td>
                  <td>dummy</td>
                  <td>dummy father </td>
				  <td>2200612</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2000 - 2022</td>
				  <td>10-11-2022</td>
                  <td>hjllkjkjlkj</td>
                  
                  <td>rahul@simption.com</td>
                  <td>11-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/bonafied_certificate.php?id=202' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/bonafied_certificate_form_edit','id=202')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('202');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>6</td>
                  <td>RAHUL</td>
                  <td>BINOD</td>
				  <td>2000315</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>12 - 12</td>
				  <td>12-12-12011</td>
                  <td>1</td>
                  
                  <td>rahul@simption.com</td>
                  <td>09-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/bonafied_certificate.php?id=188' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/bonafied_certificate_form_edit','id=188')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('188');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>7</td>
                  <td>ABDUL KAREEM </td>
                  <td>SHAIKH</td>
				  <td>2000330</td>
				  <td>New Unique Res public school </td>
				  <td>2021 - 2022</td>
				  <td>25-04-2022</td>
                  <td>Concern </td>
                  
                  <td>rahul@simption.com</td>
                  <td>25-04-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/bonafied_certificate.php?id=170' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/bonafied_certificate_form_edit','id=170')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('170');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>8</td>
                  <td>AJAY</td>
                  <td>SUNIL</td>
				  <td>2200702</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 2022</td>
				  <td>31-03-2022</td>
                  <td>Fff</td>
                  
                  <td>rahul@simption.com</td>
                  <td>31-03-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/bonafied_certificate.php?id=163' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/bonafied_certificate_form_edit','id=163')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('163');" >Delete</button></td>
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