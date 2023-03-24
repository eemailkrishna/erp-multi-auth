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
url: access_link+"hostel/employee_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('hostel/employee_list');
			   }else{
               //alert_new(detail);
			   }
}
});
}
</script>

    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
                Hostel Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
    <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>

	    <li><a href="javascript:get_content('hostel/staff')"><i class="fa fa-bed"></i> Hostel Staff</a></li>
	    <li class="Active">Staff List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Employee List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Employee Name</th>
                  <th>Photo</th>
				  <th>Contact No.</th>
                  <th>Designation</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>

<tr>
    <td>1</td>
	<td>Jangbahadur Thakur</td>
	<td><img src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>+918269869375</td>
	<td>Warden</td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=3')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('3');" >Delete</button></td>
	</tr>
	 <tr>
    <td>2</td>
	<td>Avinash Ganeshe</td>
	<td><img src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>9826821566</td>
	<td>Chef</td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=4')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('4');" >Delete</button></td>
	</tr>
	 <tr>
    <td>3</td>
	<td>Sarita Sahu</td>
	<td><img src="https://simptionerp.com/data-content/simptionschoolerp/demo/hostel_staff/29522872_170920190405pm.jpg" height="50" width="50"></td>
	<td>826964685</td>
	<td>Chef</td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=5')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('5');" >Delete</button></td>
	</tr>
	 <tr>
    <td>4</td>
	<td>somesh ji</td>
	<td><img src="https://simptionerp.com/data-content/simptionschoolerp/demo/hostel_staff/8353389_170920190405pm.jpg" height="50" width="50"></td>
	<td>9864645645</td>
	<td></td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=6')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('6');" >Delete</button></td>
	</tr>
	 <tr>
    <td>5</td>
	<td>Suneel Chakkarwati</td>
	<td><img src="https://simptionerp.com/data-content/simptionschoolerp/demo/hostel_staff/47072807_170920190405pm.jpg" height="50" width="50"></td>
	<td>9685745263</td>
	<td>store Room instractor</td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=7')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('7');" >Delete</button></td>
	</tr>
	 <tr>
    <td>6</td>
	<td>dsfgsdfg</td>
	<td><img src="https://simptionerp.com/data-content/simptionschoolerp/demo/hostel_staff/86314952_simption_logo1.png" height="50" width="50"></td>
	<td>dfsgsdfg</td>
	<td></td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=8')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('8');" >Delete</button></td>
	</tr>
	 <tr>
    <td>7</td>
	<td></td>
	<td><img src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td></td>
	<td></td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=9')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('9');" >Delete</button></td>
	</tr>
	 <tr>
    <td>8</td>
	<td>hjbjkkll</td>
	<td><img src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>996543567</td>
	<td></td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=10')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('10');" >Delete</button></td>
	</tr>
	 <tr>
    <td>9</td>
	<td>demo</td>
	<td><img src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>09144555977</td>
	<td></td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=11')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('11');" >Delete</button></td>
	</tr>
	 <tr>
    <td>10</td>
	<td>demo</td>
	<td><img src="../school_software_v1_old/images/student_blank.png" height="50" width="50"></td>
	<td>7777777770</td>
	<td></td>

    <td><button type="button"  onclick="post_content('hostel/employee_edit','id=12')" class="btn btn-success" >Edit</button>
	<button type="button"  class="btn class="btn btn-danger" onclick="return  valid('12');" >Delete</button></td>
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
