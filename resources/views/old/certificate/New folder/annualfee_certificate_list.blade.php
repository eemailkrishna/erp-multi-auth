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
url: access_link+"certificate/annualfee_certificate_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('certificate/annualfee_certificate_list');
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
      <li class="active">Annualfee Certificate List</li> </ol>
    </section>

	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success ">
            <div class="box-header with-border">
              <h3 class="box-title">Annualfee Certificate List</h3>
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
                  <th>Annualfee Amount</th>
                  
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
				  <td>02-12-2022</td>
                  <td>7300</td>
                  
                  <td>rahul@simption.com</td>
                  <td>02-12-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/annual_certificate.php?id=95' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/annualfee_certificate_form_edit','id=95')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('95');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>2</td>
                  <td>AMINA DHABAK</td>
                  <td>AJIJUL DHABAK</td>
				  <td>2100398</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2020 - 2022</td>
				  <td>21-11-2022</td>
                  <td>2500</td>
                  
                  <td>rahul@simption.com</td>
                  <td>21-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/annual_certificate.php?id=94' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/annualfee_certificate_form_edit','id=94')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('94');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>3</td>
                  <td>joy</td>
                  <td>peter</td>
				  <td>2000345</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2022 - 2022</td>
				  <td>04-10-2022</td>
                  <td>2000</td>
                  
                  <td>rahul@simption.com</td>
                  <td>06-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/annual_certificate.php?id=93' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/annualfee_certificate_form_edit','id=93')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('93');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>4</td>
                  <td>rakesh</td>
                  <td>kumar singh</td>
				  <td>2000352</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 2022</td>
				  <td>06-01-2022</td>
                  <td>1000</td>
                  
                  <td>rahul@simption.com</td>
                  <td>06-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/annual_certificate.php?id=92' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/annualfee_certificate_form_edit','id=92')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('92');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>5</td>
                  <td>vishal vilran</td>
                  <td>Jagdish Chandra</td>
				  <td>2000230</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2012 - 2017</td>
				  <td>17-06-2022</td>
                  <td>50000</td>
                  
                  <td>rahul@simption.com</td>
                  <td>17-06-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/annual_certificate.php?id=85' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/annualfee_certificate_form_edit','id=85')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('85');" >Delete</button></td>
                </tr>
                                <tr>
                  <td>6</td>
                  <td>DHVANIL</td>
                  <td>ROHIT</td>
				  <td>2000176</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2007 - 2008</td>
				  <td>14-02-2022</td>
                  <td>80000</td>
                  
                  <td>rahul@simption.com</td>
                  <td>01-02-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/annual_certificate.php?id=72' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/annualfee_certificate_form_edit','id=72')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('72');" >Delete</button></td>
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