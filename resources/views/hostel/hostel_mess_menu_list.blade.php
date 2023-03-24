@include('common.header')
@include('common.navbar')


<script type="text/javascript">
    function fill_detail(value) {

        $.ajax({
            type: "get",
            url: "{{url('mess-list')}}/" + value,
            cache: false,
            success: function(detail) {
                // var sun_breakfast = detail['fri_breakfast'];

                // $('#student-id').val(detail.id);
                $('#sun_breakfast').val(detail.fri_breakfast);
                $('#sun_lunch').val(detail.sun_lunch);
                $('#sun_dinner').val(detail.sun_dinner);
                $('#mon_breakfast').val(detail.mon_breakfast);
                $('#mon_lunch').val(detail.mon_lunch);
                $('#mon_dinner').val(detail.mon_dinner);
                $('#tue_breakfast').val(detail.tue_breakfast);
                $('#tue_lunch').val(detail.tue_lunch);
                $('#tue_dinner').val(detail.tue_dinner);
                $('#wed_breakfast').val(detail.wed_breakfast);
                $('#wed_lunch').val(detail.wed_lunch);
                $('#wed_dinner').val(detail.wed_dinner);
                $('#thu_breakfast').val(detail.thu_breakfast);
                $('#thu_lunch').val(detail.thu_lunch);
                $('#thu_dinner').val(detail.thu_dinner);
                $('#fri_breakfast').val(detail.fri_breakfast);
                $('#fri_lunch').val(detail.fri_lunch);
                $('#fri_dinner').val(detail.fri_dinner);
                $('#sat_breakfast').val(detail.sat_breakfast);
                $('#sat_lunch').val(detail.sat_lunch);
                $('#sat_dinner').val(detail.sat_dinner);

            }
            });
        }
    </script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Hostel Management <small>Control Panel</small>
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
                <a href="{{ url('hostel-mess-menu-edit') }}"><button type="button" class="btn btn-danger"
                        data-toggle="modal" data-target="#modal-default">Mess Menu Edit</button></a>
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
                                <select name="hostal_id" class="form-control select2" onchange="fill_detail(this.value);"  required>
                                    <option value="">Select</option>

                                    @foreach ($data as $item)
                                            <option value="{{ $item->id }}">{{ $item->hostal_name }}</option>
                                    @endforeach


                                </select>
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
                            <input type="text" name="sun_breakfast" id="sun_breakfast" placeholder="Breakfast" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="sun_lunch" id="sun_lunch" placeholder="Lunch" value=""
                                class="form-control" readonly >
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="sun_dinner" id="sun_dinner" placeholder="Dinner" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Monday</label>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="mon_breakfast" id="mon_breakfast" placeholder="Breakfast" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="mon_lunch" id="mon_lunch" placeholder="Lunch" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <input type="text" name="mon_dinner" id="mon_dinner" placeholder="Dinner" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tuesday </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="tue_breakfast" id="tue_breakfast" placeholder="Breakfast" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="tue_lunch" id="tue_lunch" placeholder="Lunch" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="tue_dinner" id="tue_dinner" placeholder="Dinner" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Wednesday </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="wed_breakfast" id="wed_breakfast" placeholder="Breakfast" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="wed_lunch" id="wed_lunch" placeholder="Lunch" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="wed_dinner" id="wed_dinner" placeholder="Dinner" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Thursday</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="thu_breakfast" id="thu_breakfast" placeholder="Breakfast" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="thu_lunch" id="thu_lunch" placeholder="Lunch" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="thu_dinner" id="thu_dinner" placeholder="Dinner" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Friday</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="fri_breakfast" id="fri_breakfast" placeholder="Breakfast" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="fri_lunch" id="fri_lunch" placeholder="Lunch" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="fri_dinner" id="fri_dinner" placeholder="Dinner" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Saturday</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="sat_breakfast" id="sat_breakfast" placeholder="Breakfast" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="sat_lunch" id="sat_lunch" placeholder="Lunch" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="sat_dinner" id="sat_dinner" placeholder="Dinner" value=""
                                class="form-control" readonly>
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
