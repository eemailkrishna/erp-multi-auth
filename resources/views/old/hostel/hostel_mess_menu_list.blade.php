@include('common.header')
@include('common.navbar')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hostel Management        <small>Control Panel</small>
      </h1>
    <ol class="breadcrumb">
	     <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
	       <li><a href="javascript:get_content('hostel/hostel_mess')"><i class="fa fa-bed"></i>Hostel Mess</a></li>
	    <li class="Active">Hostel Mess Menu List</li>
	</ol>
    </section>

<!---*****************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->

    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Mess Menu</h3>
			  <a href="javascript:get_content('hostel/mess_menu')"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">Mess Menu Edit</button></a>
            </div>

            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body">
			<form method="post">
			<div class="col-lg-12 form-group">
				<div class="col-lg-3"><h4>Day</h4></div>
				<div class="col-lg-3"><h4>Break Fast</h4></div>
				<div class="col-lg-3"><h4>Lunch</h4></div>
				<div class="col-lg-3"><h4>Dinner</h4></div>
			</div>
			<div class="col-md-3">
					<div class="form-group">
						<label>Sunday</label>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
						<input type="text"  name="sun_breakfast"  placeholder="Breakfast"  value="zeera rice" class="form-control" readonly>
				    </div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
						<input type="text"  name="sun_lunch"  placeholder="Lunch"  value="zeera rice" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
					   <input type="text"  name="sun_dinner" placeholder="Dinner"  value="zeera rice" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Monday</label>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
						<input type="text"  name="mon_breakfast"  placeholder="Breakfast"  value="bread butter" class="form-control" readonly>
				    </div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
						<input type="text"  name="mon_lunch"  placeholder="Lunch"  value="butter chicken" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="form-group">
					   <input type="text"  name="mon_dinner"  placeholder="Dinner"  value="biryani" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <label>Tuesday </label>
					</div>
				  </div>
				  <div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="tue_breakfast" placeholder="Breakfast"  value="" class="form-control" readonly>
					</div>
				  </div>
				  <div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="tue_lunch" placeholder="Lunch"  value="" class="form-control" readonly>
					</div>
				  </div>
				  <div class="col-md-3">
					<div class="form-group">
					  <input type="text"  name="tue_dinner" placeholder="Dinner"  value="" class="form-control" readonly>
					</div>
				  </div>
				<div class="col-md-3">
					<div class="form-group" >
					  <label>Wednesday </label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="wed_breakfast" placeholder="Breakfast"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="wed_lunch" placeholder="Lunch"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="wed_dinner" placeholder="Dinner"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <label >Thursday</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="thu_breakfast" placeholder="Breakfast"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="thu_lunch" placeholder="Lunch"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					   <input type="text"  name="thu_dinner" placeholder="Dinner"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <label >Friday</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="fri_breakfast" placeholder="Breakfast"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="fri_lunch" placeholder="Lunch"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					   <input type="text"  name="fri_dinner" placeholder="Dinner"  value="" class="form-control" readonly>
					</div>
				</div><div class="col-md-3">
					<div class="form-group" >
					  <label >Saturday</label>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="sat_breakfast" placeholder="Breakfast"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					  <input type="text"  name="sat_lunch" placeholder="Lunch"  value="" class="form-control" readonly>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" >
					   <input type="text"  name="sat_dinner" placeholder="Dinner"  value="" class="form-control" readonly>
					</div>
				</div>



		</form>
      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
</div>
@include('common.footer')
