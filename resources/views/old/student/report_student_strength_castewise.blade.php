@include('common.header');
@include('common.navbar');
 <script>
function for_print()
 {
 var divToPrint=document.getElementById("printTable");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 var isAndroid = /(android)/i.test(navigator.userAgent);
 if(!isAndroid){
  newWin.close();   
 }
 }
 
function check_function()
{
    $("#example1").html(loader_div);
    if($("#all_medium").prop("checked")==true){
        var value='Yes';
    }else{
        var value='No';
    }
    $.ajax({
        type:"POST",
        url:access_link+"student/report_student_strength_castewise_filter_checked.php?checked="+value+"",
        cache:false,
        success:function(detail){
           $("#example1").html(detail);
        }
    });
}
</script>
    <section class="content-header">
      <h1>
        School Information Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
	  <li class="active">Student Strength Report</li>
      </ol>
    </section>
	
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
	  	<div class="box-header with-border ">
		<div class="col-md-12">
		
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Caste Wise Student Data')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
			  </div>
		</div>
        </div>
            <div class="col-md-12">
                <div style="float: right;">
                    <label><input type="checkbox" onclick="check_function();" name="all_medium" id="all_medium" value="" />Plz check for Both Medium</label>
                </div>
            </div>
        <div class="col-md-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >>
            <div class="box-header with-border">
              
            </div>
             <div class="box-body table-responsive" id="printTable">
						 <div class="col-md-12">
				<span style="font-size:20px;font-weight:bold"><center><b>SIMPTION TECH PVT LTD</b></center></span>
			  </div>
			  <div class="col-md-12">
			  <div class="col-md-3">
	          <center><b>Dise Code : 23260100164</b></center>
			  </div>
			  <div class="col-md-6">
				<span style="font-size:20px;font-weight:bold"><center>Caste Wise STUDENT STRENGTH INFO</center></span>
			  </div>
			  <div class="col-md-3">
			  <center><b>School Code : 50702</b></center>
			  </div>
			  </div>
			  
			  <table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
			  <tr>
				<td style="float:left"><b></b></td>
				<td style="float:right"><b></b></td>
			  </tr>
			  </table>
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped" border="1px" cellpadding="10px" cellspacing="0" width="100%">
                <thead >
                    <tr>
                        <th rowspan="2">Serial No</th>
                        <th rowspan="2">Class</th>
                        <th rowspan="2">Total Students</th>
                        <th rowspan="2">Total Boys</th>
                        <th rowspan="2">Total Girls</th>
                        <th colspan="3">Total Gen</th>
                        <th colspan="3">Total Obc</th>
                        <th colspan="3">Total SC</th>
                        <th colspan="3">Total ST</th>
                        <th colspan="3">Total Other</th>				  
                    </tr>
    				<tr>
                        <th>Boy</th>
                        <th>Girl</th>
                        <th>Total</th>
                        <th>Boy</th>
                        <th>Girl</th>
                        <th>Total</th>
                        <th>Boy</th>
                        <th>Girl</th>
                        <th>Total</th>
                        <th>Boy</th>
                        <th>Girl</th>
                        <th>Total</th>
                        <th>Boy</th>
                        <th>Girl</th>
                        <th>Total</th>				  
                    </tr>
                </thead>
                <tbody>
				
	
				
			
				
			
                
				
                <tr>
                  <td><b>1</b></td>
                  <td><b>NURSERY</b></td>
                  <td><b>19</b></td>
                  <td><b>16</b></td>
                  <td><b>3</b></td>
                  <td><b>2</b></td>
                  <td><b>0</b></td>
                  <td><b>2</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>2</b></td>
                  <td><b>LKG</b></td>
                  <td><b>15</b></td>
                  <td><b>10</b></td>
                  <td><b>5</b></td>
                  <td><b>2</b></td>
                  <td><b>3</b></td>
                  <td><b>5</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>3</b></td>
                  <td><b>UKG</b></td>
                  <td><b>42</b></td>
                  <td><b>35</b></td>
                  <td><b>7</b></td>
                  <td><b>5</b></td>
                  <td><b>2</b></td>
                  <td><b>7</b></td>
                  <td><b>2</b></td>
                  <td><b>0</b></td>
                  <td><b>2</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>4</b></td>
                  <td><b>1ST</b></td>
                  <td><b>12</b></td>
                  <td><b>10</b></td>
                  <td><b>2</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>
                  <td><b>2</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>5</b></td>
                  <td><b>2ND</b></td>
                  <td><b>59</b></td>
                  <td><b>51</b></td>
                  <td><b>8</b></td>
                  <td><b>5</b></td>
                  <td><b>3</b></td>
                  <td><b>8</b></td>
                  <td><b>6</b></td>
                  <td><b>0</b></td>
                  <td><b>6</b></td>
				  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
				  <td><b>4</b></td>
                  <td><b>0</b></td>
                  <td><b>4</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>6</b></td>
                  <td><b>3RD</b></td>
                  <td><b>9</b></td>
                  <td><b>8</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>7</b></td>
                  <td><b>4TH</b></td>
                  <td><b>14</b></td>
                  <td><b>14</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>8</b></td>
                  <td><b>5TH</b></td>
                  <td><b>13</b></td>
                  <td><b>13</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>2</b></td>
                  <td><b>0</b></td>
                  <td><b>2</b></td>
				  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>9</b></td>
                  <td><b>6TH</b></td>
                  <td><b>12</b></td>
                  <td><b>8</b></td>
                  <td><b>4</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>10</b></td>
                  <td><b>7TH</b></td>
                  <td><b>18</b></td>
                  <td><b>9</b></td>
                  <td><b>9</b></td>
                  <td><b>0</b></td>
                  <td><b>4</b></td>
                  <td><b>4</b></td>
                  <td><b>1</b></td>
                  <td><b>2</b></td>
                  <td><b>3</b></td>
				  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>
				  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
				  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>11</b></td>
                  <td><b>8TH</b></td>
                  <td><b>29</b></td>
                  <td><b>25</b></td>
                  <td><b>4</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>
                  <td><b>2</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>12</b></td>
                  <td><b>9TH</b></td>
                  <td><b>6</b></td>
                  <td><b>6</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>13</b></td>
                  <td><b>10TH</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>14</b></td>
                  <td><b>11TH</b></td>
                  <td><b>5</b></td>
                  <td><b>3</b></td>
                  <td><b>2</b></td>
                  <td><b>0</b></td>
                  <td><b>1</b></td>
                  <td><b>1</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                
                <tr>
                  <td><b>15</b></td>
                  <td><b>12TH</b></td>
                  <td><b>3</b></td>
                  <td><b>3</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>
				  <td><b>0</b></td>
                  <td><b>0</b></td>
                  <td><b>0</b></td>

                  
                </tr>
                				<tr>
                    <td><b></b></td>
                    <td style="color:red;"><b>All Class</b></td>
                    <td><b>257</b></td>
                    <td><b>212</b></td>
                    <td><b>45</b></td>
                    <td><b>19</b></td>
                    <td><b>16</b></td>
                    <td><b>35</b></td>
                    <td><b>15</b></td>
                    <td><b>3</b></td>
                    <td><b>18</b></td>
                    <td><b>2</b></td>
                    <td><b>1</b></td>
                    <td><b>3</b></td>
                    <td><b>5</b></td>
                    <td><b>0</b></td>
                    <td><b>5</b></td>
                    <td><b>0</b></td>
                    <td><b>1</b></td>
                    <td><b>1</b></td>
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
	  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('printTable', 'Caste Wise Student Data')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-primary" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
			  </div>
			  </div>
    </section>
    @include('common.footer');
<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
