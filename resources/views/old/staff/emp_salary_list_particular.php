<script>
function valid(id,date,emp_id,amount,advance_id,advance_amount){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
salary_delete(id,date,emp_id,amount,advance_id,advance_amount);       
 }            
else  {      
return false;
 }       
  }    
function salary_delete(id,date,emp_id,amount,advance_id,advance_amount){
$.ajax({
type: "POST",
url: access_link+"staff/emp_salary_list_particular_delete.php?id="+id+"&date="+date+"&amount="+amount+"&emp_id="+emp_id+"&advance_id="+advance_id+"&advance_amount="+advance_amount+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   post_content('staff/emp_salary_list_particular',res[2]);
			   }else{
               alert_new('Sorry!!! Some Error Occured','red'); 
			   }
}
});
}
  
</script>  


    <section class="content-header">
       <h1>Employee Management        <small>Control Panel</small></h1>
       <ol class="breadcrumb">
	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
	  	 <li><a href="javascript:get_content('staff/emp_salary_list')"><i class="fa fa-male"></i>Employee Salary List</a></li>
	   <li class="active">Employee Salary List</li>
       </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >>
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Employee Name</th>
                  <!-- <th></th> -->
				  <th>Contact No.</th>
                  <th>Designation</th>
                  <th>Salary From</th>
                  <th>Salary To</th>
                  <th>Salary Amount</th>
                  
                  <th>Update By</th>
                  <th>Date</th>
                  
				  <th>Print</th>
				  <th>Delete</th>
                </tr>
                </thead>
        <tbody>
             						   
            				<tr>
				<td>1</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-12-2022</td>
				<td>31-12-2022</td>
				<td><b>29000.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>13-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=780&emp_id=340&date_diff=30'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('780','2022-12-13','340','29000.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>2</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>8500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>12-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=779&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('779','2022-12-12','340','8500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>3</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>14500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>12-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=778&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('778','2022-12-12','340','14500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>4</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>9500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>12-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=777&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('777','2022-12-12','340','9500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>5</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>9500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>09-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=776&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('776','2022-12-09','340','9500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>6</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>11500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>07-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=775&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('775','2022-12-07','340','11500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>7</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>11500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>07-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=774&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('774','2022-12-07','340','11500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>8</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>11500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>07-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=773&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('773','2022-12-07','340','11500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>9</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>6200.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>06-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=771&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('771','2022-12-06','340','6200.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>10</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>7200.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>03-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=770&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('770','2022-12-03','340','7200.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>11</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>7200.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>02-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=769&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('769','2022-12-02','340','7200.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>12</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>14500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>01-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=768&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('768','2022-12-01','340','14500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>13</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>8100.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>01-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=766&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('766','2022-12-01','340','8100.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>14</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>14300.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>01-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=765&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('765','2022-12-01','340','14300.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>15</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>14500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>01-12-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=764&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('764','2022-12-01','340','14500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>16</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>14500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>30-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=763&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('763','2022-11-30','340','14500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>17</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>7200.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>30-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=762&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('762','2022-11-30','340','7200.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>18</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>7200.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>30-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=761&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('761','2022-11-30','340','7200.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>19</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>7200.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>29-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=760&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('760','2022-11-29','340','7200.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>20</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>27000.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>29-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=759&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('759','2022-11-29','340','27000.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>21</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>7200.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>29-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=758&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('758','2022-11-29','340','7200.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>22</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>10-11-2022</td>
				<td>30-11-2022</td>
				<td><b>1450000.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>29-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=757&emp_id=340&date_diff=20'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('757','2022-11-30','340','1450000.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>23</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>13500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>28-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=756&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('756','2022-11-28','340','13500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>24</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>14500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>28-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=755&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('755','2022-11-28','340','14500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>25</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>4333.33</b></td>
				
                <td>rahul@simption.com</td>
                <td>28-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=754&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('754','2022-11-28','340','4333.33','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>26</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>5333.33</b></td>
				
                <td>rahul@simption.com</td>
                <td>23-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=753&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('753','2022-11-23','340','5333.33','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>27</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>6933.33</b></td>
				
                <td>rahul@simption.com</td>
                <td>22-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=752&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('752','2022-11-22','340','6933.33','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>28</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>14500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>16-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=751&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('751','2022-11-16','340','14500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>29</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>14500.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>11-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=750&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('750','2022-11-11','340','14500.00','','0');">
                Delete</button></td>
				</tr>
								<tr>
				<td>30</td>
				<td>VIVEK KUMAR</td>
				<!-- <td><img  src="" height="50" width="50" style="margin-top:10px;"></td> -->
				<td>9525553060</td>
				<td></td>
				<td>01-11-2022</td>
				<td>30-11-2022</td>
				<td><b>25000.00</b></td>
				
                <td>rahul@simption.com</td>
                <td>08-11-2022</td>
				
				<td><a target="_blank" href='../school_software_v1_old/pdf/pdf/salary_slip/emp_salary_slip_pdf.php?id=749&emp_id=340&date_diff=29'><button type="button"  class="btn btn-success"  >Print</button></a></td>
				<td><button type="button" class="btn btn-success"  onclick="return valid('749','2022-11-08','340','25000.00','','0');">
                Delete</button></td>
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
  