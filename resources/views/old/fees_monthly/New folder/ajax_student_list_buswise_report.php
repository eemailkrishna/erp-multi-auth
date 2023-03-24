<div class="col-md-12">
<div class="col-md-6">
<center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Student Buswise Report')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
</div>
<div class="col-md-6">
<center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
</div>
</div>

        <div class="col-md-12">
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
			<div class="col-md-10 col-md-offset-1">
            <div class="box-body table-responsive" id="printTable">
						<table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
			<tr>
			<td colspan="3"><span style="font-size:20px;font-weight:bold"><center><b>SIMPTION TECH PVT LTD</b></center></span></td>
			</tr>
			<tr>
			<td style="float:left;"><b>Dise Code : 23260100164</b></td>
			<td><center><b>Student List Bus Wise</b></center></td>
			<td style="float:right;"><b>School Code : 50702</b></td>
			</tr>
			<tr>
			<td style="float:left;">Current Date : 05-12-2022</td>
			<td><center><b>&nbsp;</b></center></td>
			</tr>
			</table>
			
		
				  <form method='post' action="../school_software_v1_old/pdf/pdf/id_card_page/bus_id_card_monthly.php" target='_blank'>
				  <table id="example1" class="table table-bordered table-striped" border="1px" cellpadding="5px" cellspacing="0" width="100%">
						<thead class="my_background_color">
								<tr>
								  <th>S.No.</th>
								  <th>Student Name</th>
								  <th>Father Name</th>
								  <th>Class(Section)</th>
								  <th>Student route</th>
								  <th>All <input type='checkbox' name='check_bus_card' id="info1" checked onclick="for_check(this.id);" /></th>
								</tr>
						</thead>
					<tbody>
					  
					    <input type='submit' name='print_bus' onclick="return validate();" class="btn btn-primary" value='Print Bus Card' style="float:right" >
					    <!-- <input type="hidden" name="no_of_installment" class="form-control" value="" /> -->
					    <input type="hidden" name="fee_head" class="form-control" value="fee3" />
					
				 </table>
				 </form>
			  
        <!-- /.col -->
      </div>
      </div>
			  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn my_background_color" onclick="exportTableToExcel('printTable', 'Student Buswise Report')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn my_background_color" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
			  </div>
			  </div>
  </div>
    
  </div>