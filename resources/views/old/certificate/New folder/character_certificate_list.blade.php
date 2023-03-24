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
url: access_link+"certificate/character_certificate_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('certificate/character_certificate_list');
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
      <li class="active">Character Certificate List</li> </ol>
    </section>

	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box box-success ">
            <div class="box-header with-border">
              <h3 class="box-title">Character Certificate List</h3>
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
                  <th>Character Type</th>
                  
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
				  <td>1 - 2</td>
				  <td>15-12-2022</td>
                  <td>super</td>
                  
                  <td>rahul@simption.com</td>
                  <td>02-12-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=783' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=783')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('783');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>2</td>
                  <td>joy</td>
                  <td>peter</td>
				  <td>2000345</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>1 - 3</td>
				  <td>14-12-2022</td>
                  <td>super</td>
                  
                  <td>rahul@simption.com</td>
                  <td>01-12-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=782' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=782')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('782');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>3</td>
                  <td>Upen</td>
                  <td>Rajdev Mishra</td>
				  <td>2100412</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>20 - 22</td>
				  <td>30-10-2022</td>
                  <td></td>
                  
                  <td>rahul@simption.com</td>
                  <td>30-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=781' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=781')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('781');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>4</td>
                  <td>joy</td>
                  <td>peter</td>
				  <td>2000345</td>
				  <td>Tabssum Sr Sec School Noorpur </td>
				  <td>01-04-2021 - 31/03/2022</td>
				  <td>27-11-2022</td>
                  <td>Good </td>
                  
                  <td>rahul@simption.com</td>
                  <td>27-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=780' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=780')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('780');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>5</td>
                  <td>Jayssh</td>
                  <td>parvesh</td>
				  <td>2100407</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2022 - 2023</td>
				  <td>24-11-2023</td>
                  <td></td>
                  
                  <td>rahul@simption.com</td>
                  <td>25-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=779' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=779')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('779');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>6</td>
                  <td>Mohit </td>
                  <td>Mr. Ravi</td>
				  <td>2100392</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 2022</td>
				  <td>23-11-2022</td>
                  <td>good</td>
                  
                  <td>rahul@simption.com</td>
                  <td>23-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=777' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=777')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('777');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>7</td>
                  <td>Upen</td>
                  <td>Rajdev Mishra</td>
				  <td>2100412</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2020 - 2022</td>
				  <td>21-11-2022</td>
                  <td>Good</td>
                  
                  <td>rahul@simption.com</td>
                  <td>21-11-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=776' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=776')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('776');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>8</td>
                  <td>RAHUL</td>
                  <td>BINOD</td>
				  <td>2000315</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 2022</td>
				  <td>08-12-2022</td>
                  <td></td>
                  
                  <td>rahul@simption.com</td>
                  <td>17-08-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=754' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=754')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('754');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>9</td>
                  <td>RAHUL</td>
                  <td>BINOD</td>
				  <td>2000315</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2011 - 2022</td>
				  <td>14-01-2022</td>
                  <td>nice</td>
                  
                  <td>rahul@simption.com</td>
                  <td>08-08-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=753' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=753')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('753');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>10</td>
                  <td>deepak kumar</td>
                  <td>nitish kumar</td>
				  <td>2000342</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>6.07.2004 - 30.04.22</td>
				  <td>22-08-2022</td>
                  <td>GOOD</td>
                  
                  <td>rahul@simption.com</td>
                  <td>06-08-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=752' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=752')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('752');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>11</td>
                  <td>RAHUL</td>
                  <td>BINOD</td>
				  <td>2000315</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>23 - 22</td>
				  <td>12-01-2022</td>
                  <td></td>
                  
                  <td>rahul@simption.com</td>
                  <td>03-08-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=750' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=750')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('750');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>12</td>
                  <td>ram</td>
                  <td>shyam</td>
				  <td>2100556</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2021 - 2022</td>
				  <td>29-07-2022</td>
                  <td>good</td>
                  
                  <td>rahul@simption.com</td>
                  <td>29-07-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=747' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=747')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('747');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>13</td>
                  <td>vishal vilran</td>
                  <td>Jagdish Chandra</td>
				  <td>2000230</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>1 - 2</td>
				  <td>11-07-2022</td>
                  <td>GOOD</td>
                  
                  <td>rahul@simption.com</td>
                  <td>29-07-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=733' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=733')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('733');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>14</td>
                  <td>vishal vilran</td>
                  <td>Jagdish Chandra</td>
				  <td>2000230</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2012 - 1017</td>
				  <td>17-06-2022</td>
                  <td>Good </td>
                  
                  <td>rahul@simption.com</td>
                  <td>17-06-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=720' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=720')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('720');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>15</td>
                  <td>RAHUL</td>
                  <td>BINOD</td>
				  <td>2000315</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2012 - 2022</td>
				  <td>13-06-2022</td>
                  <td>h</td>
                  
                  <td>rahul@simption.com</td>
                  <td>14-06-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=717' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=717')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('717');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>16</td>
                  <td>S</td>
                  <td></td>
				  <td>2000142</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>4 - 3</td>
				  <td>13-06-2022</td>
                  <td></td>
                  
                  <td>rahul@simption.com</td>
                  <td>13-06-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=714' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=714')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('714');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>17</td>
                  <td>vishal vilran</td>
                  <td>Jagdish Chandra</td>
				  <td>2000230</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2 - 5</td>
				  <td>07-05-2022</td>
                  <td></td>
                  
                  <td>rahul@simption.com</td>
                  <td>31-05-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=712' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=712')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('712');" >Delete</button></td>
                </tr>
                
                <tr>
                  <td>18</td>
                  <td>x</td>
                  <td></td>
				  <td>2000209</td>
				  <td>SIMPTION TECH PVT LTD</td>
				  <td>2015 - 2020</td>
				  <td>02-05-2022</td>
                  <td></td>
                  
                  <td>rahul@simption.com</td>
                  <td>02-05-2022</td>
                  
                 <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/character_certificate_cbs.php?id=701' target="_blank"><button type="button" class="btn btn-success">Print</button></a></td>
			     <td><button type="button" onclick="post_content('certificate/character_certificate_form_edit','id=701')"  class="btn btn-success">Edit</button></td>
				 <td><button type="button"  class="btn btn-danger" onclick="return valid('701');" >Delete</button></td>
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