@include('common.header')
@include('common.navbar')
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<script>
	function valid(s_no){
	var myval=confirm("Are you sure want to delete this record !!!!");
	if(myval==true){
	delete_fee(s_no);
	}
	else  {
	return false;
	}
	}
	
	function delete_fee(s_no){
	$.ajax({
	type: "POST",
	url: access_link+"bus/bus_expense_delete.php?s_no="+s_no+"",
	cache: false,
	success: function(detail){
	var res=detail.split("|?|");
	if(res[1]=='success'){
	   alert_new('Successfully Deleted','green');
	   get_content('bus/add_bus_expance');
	}else{
	//alert_new(detail); 
	}
	}
	});
	}
	</script>
<script>
function for_detail(value){
    if(value!=''){
        var res=value.split('|?|');
        $('#bus_company').val(res[1]);
        $('#bus_model_no').val(res[2]);
        $('#bus_no').val(res[3]);
    }else{
        $('#bus_company').val('');
        $('#bus_model_no').val('');
        $('#bus_no').val('');
    }
}

	      $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"bus/add_bus_expense_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			 //   alert
			 //console.log(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('bus/add_bus_expance');
            }
			}
         });
      });
</script>

    <section class="content-header">
      <h1>
        Bus Management
		    <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      	   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li class="active">Add Bus Expense</li>
      </ol>
    </section>

	
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Add Bus Expense</h3>
            </div>
            <!-- /.box-header -->
			@if(session('message'))
    <script>
     swal("Data update!", "data update successfully!", "success")
      </script>
      {{session('message')}}
      
     @endif
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
			<form action="{{url('bus-add-expence-update/'.$editexpense->id)}}" method="post" enctype="multipart/form-data" id="my_form">@csrf
			
			      <div class="col-md-4 ">
						<div class="form-group">
						  <label>Bus Name <font style="color:red"><b>*</b></font></label>
                   <select class="form-control" name="bus_name" id="bus_name"value="" onchange="for_detail(this.value);" required>
                    @foreach($expence as $expanse)
				 <option  value="{{$expanse->bus_name}}">{{$expanse->bus_name}}</option>
					@endforeach
					 				 </select>						</div>
				   </div>
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus Company<font style="color:red"><b>*</b></font></label>
						  <select class="form-control" name="bus_company" id="bus_company" placeholder="Company Name" value="" class="form-control" required>
							
							@foreach($expence as $expanse)
							<option  value="{{$expanse->bus_company}}">{{$expanse->bus_company}}</option>
		   @endforeach
		   
							 </select>			
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="form-group">
						  <label>Bus Model No.<font style="color:red"><b>*</b></font></label>
						  <select class="form-control" name="bus_model_no" id="bus_model_no" placeholder="Bus Model No." value="" class="form-control" required>
							
							@foreach($expence as $expanse)
							<option  value="{{$expanse->bus_model_no}}">{{$expanse->bus_model_no}}</option>
		   @endforeach
		   
							 </select>			
						</div>
					</div>
				    <div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus No.<font style="color:red"><b>*</b></font></label>
						  <select class="form-control" name="bus_no" id="bus_no" placeholder="Bus No." value="" class="form-control" required>
							
							@foreach($expence as $expanse)
							<option  value="{{$expanse->bus_no}}">{{$expanse->bus_no}}</option>
		   @endforeach
		   
							 </select>			
						</div>
					</div>
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus Expense Remark</label>
						   <input type="text" name="bus_expence_remark" id="bus_expence_remark" value="{{$editexpense->bus_expence_remark}}" class="form-control" >
						</div>
					</div>
					
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Maintainance Date<font style="color:red"><b></b></font></label>
						   <input type="date" name="maintainance_date" id="maintainance_date" value="{{$editexpense->maintainance_date}}" class="form-control">
						</div>
					</div>
					
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Garage/Shop<font style="color:red"><b></b></font></label>
						   <input type="text" name="garage_shop" id="garage_shop" value="{{$editexpense->garage_shop}}" class="form-control">
						</div>
					</div>
					
			        <div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus Expense Amount<font style="color:red"><b></b></font></label>
						   <input type="number" name="bus_expence_amount" id="bus_expance_amount" value="{{$editexpense->bus_expence_amount}}" class="form-control" required>
						</div>
					</div>
				      
				    <div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bill Date<font style="color:red"><b></b></font></label>
						   <input type="date" name="bill_date" id="bill_date" value="{{$editexpense->bill_date}}" class="form-control">
						</div>
					</div>
					
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Payment Date<font style="color:red"><b></b></font></label>
						   <input type="date" name="payment_date" id="payment_date" value="{{$editexpense->payment_date}}" class="form-control" />
						</div>
					</div>
					
					<div class="col-md-4 ">		
						<div class="form-group">
						  <label>Bus Reading<font style="color:red"><b></b></font></label>
						   <input type="text" name="bus_reading" id="bus_reading" value="{{$editexpense->bus_reading}}" class="form-control" />
						</div>
					</div>
		
		<div class="col-md-12">
		   		   <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
		   		   </div>
		   </form>	
	       
	      

@include('common.footer')