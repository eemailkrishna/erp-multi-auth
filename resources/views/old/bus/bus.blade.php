    @include('common.header')
    @include('common.navbar')
    
    <section class="content-header">
      <h1>
        Bus Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
    <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Bus Management</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div class="box box-success ">
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">

			  <a href="{{url('bus/add_bus')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Bus</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
             <a href="{{url('bus/add_bus')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			<a href="{{url('bus/bus_list')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus Details</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
              <a href="{{url('bus/bus_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			 <a href="{{url('route_add')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Routes</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
            <a href="{{url('route_add')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			<a href="{{url('bus/route_add')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#C46210;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Stop</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
             <a href="{{url('bus/route_add')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			<a href="{{url('bus/bus_route_list')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#3B3B6D;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Route List</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
              <a href="{{url('bus/bus_route_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			<a href="{{url('bus/asigned_bus_route')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#FF7E00;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Assigned Routes</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
            <a href="{{url('bus/asigned_bus_route')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
    <a href="{{url('bus/bus_assigned_route_list')}}">
      <div class="col-md-3 col-md-6">
        <div class="small-box" style="background-color:#E32636;">
          <div class="inner"><br>
             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Assigned Route List</h3>
      <p style="margin-left:10px;color:#fff;">&nbsp;</p>
          </div>
            <a href="{{url('bus/bus_assigned_route_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
  </a>
   <a href="{{url('bus/student_bus_form')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:	#551B8C;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;"> Student Bus Form</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
             <a href="{{url('bus/student_bus_form')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a> 
			<a href="{{url('bus/bus_student_list')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#804040;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student List</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
              <a href="{{url('bus/bus_student_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
    	    <a href="{{url('bus/bus_staff')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#34B334;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus Staff</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
              <a href="{{url('bus/bus_staff')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
    	    {{-- <a href="{{url('bus/purchase_list')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:	#551B8C;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Daily Expence</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
             <a href="{{url('bus/purchase_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a> --}}
    
    
       <a href="{{url('bus/add_bus_expance')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#551B8C;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Bus Expense</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
            <a href="{{url('bus/add_bus_expance')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
      
          
		</div>
      </div>
	  <div class="box box-success ">
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>
		</div>
		<div class="box-body">

	 	
		<a href="{{url('bus/bus_expense_report')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#5A5554;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus Expense</h3>
				<p style="margin-left:10px;color:#fff;">Report</p>
            </div>
              <a href="{{url('bus/bus_expense_report')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
			
		{{-- <a href="{{url('bus/student_list_bus_wise')}}">
        <div class="col-md-3 col-md-6">
          <div class="small-box" style="background-color:#5A5554;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">student_list</h3>
				<p style="margin-left:10px;color:#fff;">Bus wise Report</p>
            </div>
              <a href="{{url('bus/student_list_bus_wise')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a> --}}
				
		
		
		</div>
	  </div>
	 
    </section>
    @include('common.footer')