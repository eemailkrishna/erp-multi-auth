    <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>
        Fees Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	  <li class="active">Fees Structure List</li>
      </ol>
    </section>
    
    <script>
    function for_category(value){
        post_content('fees_monthly/fee_structure_list', 'category_code='+value);
    }
    </script>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
         
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <div class="col-md-2 col-md-offset-5">
              <div class="col-md-12">
                <div class="form-group">
                <!-- <label>Fee Category</label> -->
                <select class="form-control" name="student_fee_category" id="student_fee_category" onchange="for_category(this.value);">
                                <option selected value="category1">Non- RTE</option>
                                <option  value="category2">New </option>
                                <option  value="category3">Oid </option>
                                <option  value="category4">Science</option>
                                <option  value="category5">RTE</option>
                                <option  value="category6">sibling</option>
                                </select>
                </div>
              </div>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
				  <td>#</td>
				   <td>Class</td>
								  <td>annual</td>
				  				  <td>singing</td>
				  				  <td>Transport fees</td>
				  				  <td>sports fees</td>
				  				  <td>exam fee</td>
				  				  <td>event fee</td>
				  				  <td>bus fee</td>
				  				  <td>Total Fee</td>
				  
				  <td>Update By</td>
                  <td>Date</td>
				  
				  <td>Action</td>
                </tr>
                </thead>
                <tbody>
              
								 <tr>
				 <td>1</td>
				 <td>NURSERY</td>
				 				<td>4000</td>
								<td>1000</td>
								<td>1000</td>
								<td>2000</td>
								<td>2800</td>
								<td>2800</td>
								<td>1600</td>
								<td>15200				
				<td>rahul@simption.com</td>
                <td>02-12-2022</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=601')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>2</td>
				 <td>LKG</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td>rahul@simption.com</td>
                <td>22-05-2022</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=602')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>3</td>
				 <td>UKG</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td>rahul@simption.com</td>
                <td>22-05-2022</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=603')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>4</td>
				 <td>1ST</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td>rahul@simption.com</td>
                <td>22-05-2022</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=604')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>5</td>
				 <td>2ND</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td>rahul@simption.com</td>
                <td>22-05-2022</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=605')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>6</td>
				 <td>3RD</td>
				 				<td>0</td>
								<td>500</td>
								<td>400</td>
								<td>1000</td>
								<td>500</td>
								<td>0</td>
								<td>0</td>
								<td>2400				
				<td>rahul@simption.com</td>
                <td>23-06-2022</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=606')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>7</td>
				 <td>4TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td></td>
                <td>30-11--0001</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=607')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>8</td>
				 <td>5TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td></td>
                <td>30-11--0001</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=608')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>9</td>
				 <td>6TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td></td>
                <td>30-11--0001</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=609')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>10</td>
				 <td>7TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td></td>
                <td>30-11--0001</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=610')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>11</td>
				 <td>8TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>4000</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>4000				
				<td>rahul@simption.com</td>
                <td>19-08-2022</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=611')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>12</td>
				 <td>9TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td></td>
                <td>30-11--0001</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=612')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>13</td>
				 <td>10TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td></td>
                <td>30-11--0001</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=613')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>14</td>
				 <td>11TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>1500</td>
								<td>1500</td>
								<td>3000</td>
								<td>7500</td>
								<td>13500				
				<td>rahul@simption.com</td>
                <td>22-05-2022</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=614')" class="btn btn-default my_background_color" >Edit</button></td>
                </tr>
                				 <tr>
				 <td>15</td>
				 <td>12TH</td>
				 				<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0				
				<td></td>
                <td>30-11--0001</td>
				
				</td>
				<td><button type="button" onclick="post_content('fees_monthly/fee_structure_edit','id=615')" class="btn btn-default my_background_color" >Edit</button></td>
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