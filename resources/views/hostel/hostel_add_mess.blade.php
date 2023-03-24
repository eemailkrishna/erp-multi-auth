@include('common.header')
@include('common.navbar')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Hostel Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-bed"></i> Hostel</a></li>
        <li><a href="javascript:get_content('hostel/hostel_mess')"><i class="fa fa-bed"></i>Hostel Mess</a></li>
        <li class="Active">Hostel Add Mess Menu </li>
    </ol>
</section>


@if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!---*****************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->

<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Mess Menu</h3>
                {{-- <a href="{{ url('hostel-mess-menu-edit') }}"><button type="button" class="btn btn-danger"
                        data-toggle="modal" data-target="#modal-default">Mess Menu Edit</button></a> --}}
            </div>

            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body">
                <form method="post" action="{{ url('hostel-add-new-mess') }}">
                    @csrf

                    <div class="col-md-4 col-md-offset-4">
                        <div class="col-md-12">
                        <div class="form-group">
                                <label>Hostel Name<font style="color:red"><b>*</b></font></label>
                                <select name="hostal_id" class="form-control select2"  required>
                                    @if (count($hostel) > 0)
                                        @foreach ($hostel as $hot)
                                            <option value="{{ $hot->id }}">
                                                {{ $hot->hostal_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            {{-- <input type="text" name="hostel_name1" id="hostel_name"
                                placeholder="Hostel Name" value="" class="form-control" required> --}}
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <div class="col-lg-3">
                            <h4>Day</h4>
                        </div>
                        <div class="col-lg-3">
                            <h4>Break Fast</h4>
                        </div>
                        <div class="col-lg-3">
                            <h4>Lunch</h4>
                        </div>
                        <div class="col-lg-3">
                            <h4>Dinner</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sunday</label>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="sun_breakfast" placeholder="Breakfast" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="sun_lunch" placeholder="Lunch" value=""
                                class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="sun_dinner" placeholder="Dinner" value=""
                                class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Monday</label>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="mon_breakfast" placeholder="Breakfast" value=""
                                class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="mon_lunch" placeholder="Lunch" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="mon_dinner" placeholder="Dinner" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tuesday </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="tue_breakfast" placeholder="Breakfast" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="tue_lunch" placeholder="Lunch" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="tue_dinner" placeholder="Dinner" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Wednesday </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="wed_breakfast" placeholder="Breakfast" value=""
                                class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="wed_lunch" placeholder="Lunch" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="wed_dinner" placeholder="Dinner" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Thursday</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="thu_breakfast" placeholder="Breakfast" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="thu_lunch" placeholder="Lunch" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="thu_dinner" placeholder="Dinner" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Friday</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="fri_breakfast" placeholder="Breakfast" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="fri_lunch" placeholder="Lunch" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="fri_dinner" placeholder="Dinner" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Saturday</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="sat_breakfast" placeholder="Breakfast" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="sat_lunch" placeholder="Lunch" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="sat_dinner" placeholder="Dinner" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <center>
                                <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                            </center>
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
<script>
    $(function() {
        $('.select2').select2();
    });
</script>
@include('common.footer')
