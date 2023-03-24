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
url: access_link+"hostel/mess_detail_dlt.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('hostel/daily_mess_purchase_detail');
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
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i>Hostel</a></li>
	    <li><a href="javascript:get_content('hostel/hostel_mess')"><i class="fa fa-bed"></i>Hostel Mess</a></li>
	      <li class="Active">Daily Mess Purchase Details</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
              <h3 class="box-title">Item List</h3>
			  <a href="javascript:get_content('hostel/daily_mess_purchase')">
			  <button type="button" class="btn btn-success pull-right " data-toggle="modal" data-target="#modal-default">Add New Item</button>
			  </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>Item Description</th>
                  <th>Quantity</th>
                  <th>Rate</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            <tr>
              <td>1</td>
              <td>Daal</td>
              <td>50kg</td>
              <td>3000</td>
              <td>2018-11-30</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('4');" >Delete</button></td>
            </tr>
                           <tr>
              <td>2</td>
              <td>Rajma</td>
              <td>30kg</td>
              <td>1500</td>
              <td>2018-11-30</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('5');" >Delete</button></td>
            </tr>
                           <tr>
              <td>3</td>
              <td>Rice</td>
              <td>50kg</td>
              <td>2000</td>
              <td>2018-12-11</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('6');" >Delete</button></td>
            </tr>
                           <tr>
              <td>4</td>
              <td>Daal</td>
              <td>50kg</td>
              <td>3000</td>
              <td>2018-12-11</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('7');" >Delete</button></td>
            </tr>
                           <tr>
              <td>5</td>
              <td>Other</td>
              <td></td>
              <td>5000</td>
              <td>2018-12-11</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('8');" >Delete</button></td>
            </tr>
                           <tr>
              <td>6</td>
              <td>DAL</td>
              <td>10</td>
              <td>20</td>
              <td>2019-09-25</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('9');" >Delete</button></td>
            </tr>
                           <tr>
              <td>7</td>
              <td>Rice</td>
              <td>10</td>
              <td>100</td>
              <td>2019-11-06</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('11');" >Delete</button></td>
            </tr>
                           <tr>
              <td>8</td>
              <td>RICE</td>
              <td>200</td>
              <td>4000</td>
              <td>2020-04-08</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('12');" >Delete</button></td>
            </tr>
                           <tr>
              <td>9</td>
              <td>POTATO</td>
              <td>200</td>
              <td>5000</td>
              <td>2020-04-08</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('13');" >Delete</button></td>
            </tr>
                           <tr>
              <td>10</td>
              <td>RICE</td>
              <td>60</td>
              <td>600</td>
              <td>2020-04-19</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('15');" >Delete</button></td>
            </tr>
                           <tr>
              <td>11</td>
              <td>Pakoda</td>
              <td>2</td>
              <td>222</td>
              <td>2020-06-18</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('16');" >Delete</button></td>
            </tr>
                           <tr>
              <td>12</td>
              <td>rice</td>
              <td>5</td>
              <td>500</td>
              <td>2021-06-08</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('17');" >Delete</button></td>
            </tr>
                           <tr>
              <td>13</td>
              <td>testing</td>
              <td>1</td>
              <td>10</td>
              <td>2021-09-25</td>
		      <td> <button type="button"  class="btn class="btn btn-danger" onclick="return  valid('18');" >Delete</button></td>
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
