@include('common.header')
@include('common.navbar')
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<script>
    $("#my_form").submit(function (e) {
        e.preventDefault();

        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        loader();
        $.ajax({
            url: access_link + "bus/employee_add_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function (detail) {
                ////alert_new(detail);
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Complete', 'green');
                    get_content('bus/employee_list');
                }
            }
        });
    });

</script>
<section class="content-header">
    <h1>
        Bus Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('bus/bus')"><i class="fa fa-truck"></i> Bus Management</a></li>
        <li><a href="javascript:get_content('bus/bus_staff')"><i class="fa fa-bed"></i>Bus Staff</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
                <h3 class="box-title">Student Info</h3>
            </div>
            <!-- /.box-header -->
            @if(session('message'))
                <script>
                    swal("Data Insert!", "data insert successfully!", "success")

                </script>
                {{ session('message') }}

            @endif
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <form action="{{ url('bus/student-form-bus') }}" method="post" id="my_form" enctype="multipart/form-data">
                @csrf
                <div class="box-body">

                    <div class="box-body ">
                        <h3 style="color:#d9534f;"><b>Student Bus Form</b></h3>
                        <div class="col-md-4 ">
                            <input type="hidden" name="s_no" value="1" class="form-control">
                            <div class="form-group">
                                <label>Admission No.<font style="color:red"><b>*</b></font></label>
                                <input type="text" required name="adm_no" placeholder="Employee Name" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Student Name <font style="color:red"><b>*</b></font></label>
                                <input type="text" name="student_name" placeholder="Student Name" value=""
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Father Name </label>
                                <input type="text" name="father_name" placeholder="Father Name" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Student Class<font style="color:red"><b>*</b></font></label>
                                <select name="std_class" required id="bus_route" class="form-control" onchange="for_list();">
                                    <option value="All">All</option>
                                    <option value="NURSERY">NURSERY</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1ST">1ST</option>
                                    <option value="2ND">2ND</option>
                                    <option value="3RD">3RD</option>
                                    <option value="4TH">4TH</option>
                                    <option value="5TH">5TH</option>
                                    <option value="6TH">6TH</option>
                                    <option value="7TH">7TH</option>
                                    <option value="8TH">8TH</option>
                                    <option value="9TH">9TH</option>
                                    <option value="10TH">10TH</option>
                                    <option value="11TH">11TH</option>
                                    <option value="12TH">12TH</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Student Roll No.</label>
                                <input type="text" name="std_roll_no" placeholder="Student Roll No." value=""class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Address"
                                    value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Pickup Point</label>
                                <input type="text" name="pickup" placeholder="Pickup Point"
                                    value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Bus No.<font style="color:red"><b>*</b></font></label>
                                <select name="bus_no" id="bus_no" class="form-control"required onchange="for_list();">
                                    <option value='select'>Select</option>
                                    
                                    @foreach($liststd as $list)
                                          <option value="{{ $list->bus_no }}">{{ $list->bus_no }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Bus Route<font style="color:red"><b>*</b></font></label>
                                <select name="bus_route" id="" class="form-control"required onchange="for_list();">
                                    <option value='select'>Select</option>
                                    
                                    @foreach($liststd as $list)
                                          <option value="{{ $list->route_name }}">{{ $list->route_name }}</option>

                                    @endforeach</select>
                            </div>
                        </div>
             

                <div class="col-md-12" >
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary " style="margin-top:10px!important">
                </div>
            </form>
        </div>





        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>
</section>
@include('common.footer')
