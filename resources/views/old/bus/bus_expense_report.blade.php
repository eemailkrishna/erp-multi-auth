@include('common.header')
@include('common.navbar')

<script>
function for_list(){
var from_date=document.getElementById('from_date').value;
var to_date=document.getElementById('to_date').value;
var bus_id=document.getElementById('bus_id').value;

$("#pdf_detail").html('');

if(from_date!='' && to_date!=''){
$("#pdf_detail").html(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"bus/ajax_bus_expense_report.php?from_date="+from_date+"&to_date="+to_date+"&bus_id="+bus_id+"",
	  cache: false,
	  success: function(detail){
		 $("#pdf_detail").html(detail);
	  }
   });
}

}
</script>
<script>
function for_print()
 {
 var divToPrint=document.getElementById("printTable");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
 }
</script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Download Bus Expense Report
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('bus/bus')"><i class="fa fa-money"></i> Bus Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Bus Expense Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Bus Expense Report download</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
        <form action="{{url('bus/bus_report')}}"method="post">
          @csrf

			
			<div class="col-md-12 col-md-offset-2" id="search_detail">
				
				<div class="col-md-2">				
				<div class="form-group" >
				<label>Bus Name</label>
                <select class="form-control" name="bus_id" id="bus_id" >
                <option value="">All</option>
                                
                                @foreach($exprpt as $exprpt)
                                <option  value="{{$exprpt->bus_name}}">{{$exprpt->bus_name}}</option>            
@endforeach
                                </select>
				</div>
				</div>
								
				<div class="col-md-2">				
				<div class="form-group" >
				<label>From Date</label>
				<input type="date" name="date1" class="form-control" id="from_date" value="2022-12-13" oninput="for_list();" />
				</div>
				</div>


				<div class="col-md-2">
				<div class="form-group">
				<label>To Date</label>
				<input type="date" name="date2" class="form-control" id="to_date" value="2022-12-13" oninput="for_list();" />
				</div>
				</div>
				
			</div>
			
			 </br></br></br><hr>
					
			{{-- <div class="col-md-12" id="pdf_detail">
			
			</div>  --}}
      <div class="col-md-12">
        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
  </div>

</form>
          
</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
  
    {{-- ---------------------------------------table--------------------------------------- --}}
    <div class="box-body table-responsive">
      <table id="myTable" class="table table-bordered table-striped">
        <thead>
        <tr>
<th>S.no.</th>
<th>Bus Name</th>
 <th>Bus detail</th>  
</tr>
</thead>
<tbody>
  
@foreach($data as $bus_report)
<tr>
  <td>{{$loop->iteration}}</td>
  <td>{{$bus_report->bus_name}}</td>
  <td>{{$bus_report->created_at}}</td>
  
</tr>
@endforeach
</tbody>




     </table>
    </div>
</section>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
  $('#myTable').DataTable();
} );
</script>
<script>
for_list();
</script>

@include('common.footer')