@include('common.header')
@include('common.navbar')
<script>
    function check_date(holiday) {
        $.ajax({
            type: "POST",
            url: access_link + "holiday/ajax_holiday_detail.php?holiday=" + holiday + "",
            cache: false,
            success: function(detail) {
                if (detail != 0) {
                    alert_new("This Date has Aleardy Exist in Holiday List. You can Edit it", 'red');
                    $('#holiday').val('');
                }
            }
        });
    }
    $("#my_form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        loader();
        $.ajax({
            url: access_link + "holiday/add_holiday_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {

                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Complete', 'green');
                    get_content('holiday/add_holiday');
                }
            }
        });
    });

    function valid(s_no) {
        var myval = confirm("Are you sure want to delete this record !!!!");
        if (myval == true) {
            delete_holiday(s_no);
        } else {
            return false;
        }
    }

    function delete_holiday(s_no) {
        $.ajax({
            type: "POST",
            url: access_link + "holiday/delete_holiday.php?id=" + s_no + "",
            cache: false,
            success: function(detail) {
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    //  alert_new('Successfully Deleted','green');
                    get_content('holiday/add_holiday');
                } else {
                    alert_new(detail);
                }
            }
        });
    }
</script>
{{-- Start if condtion  --}}
<div>
    {{--Adding Holidays List  --}}
    @if (session()->has('Add_Holidays'))
    <div  class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>

    <strong>{{ session()->get('Add_Holidays') }}</strong>
    </div>
    {{-- Delete Holidays List  --}}
    @elseif (session()->has('Delete_Holidays'))
    <div  class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
   <strong> {{ session()->get('Delete_Holidays') }}</strong>
    </div>
    {{-- Update Holidays List  --}}
    @elseif(session()->has('Update_Holidays'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>{{ session()->get('Update_Holidays') }}</strong>
    @endif
{{-- end if condition --}}
    </div>
<section class="content-header">
    <h1>
        Holiday Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('holiday/holiday')"><i class="fa fa-photo"></i> Holiday</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Holiday</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Holiday Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="POST" id="my_form">
                    @csrf
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Holiday Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="holiday_name" placeholder="Holiday Name" value=""
                                class="form-control " required />
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Date<font style="color:red"><b>*</b></font></label>
                            <input type="date" name="date" id="holiday" onchange="check_date(this.value)"
                                placeholder="Date" value="" class="form-control" required />
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Descrption</label>
                            <input type="text" name="description" placeholder="Descrption" value=""
                                class="form-control">
                        </div>
                    </div>

                    <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>





                </form>
                <div class="col-md-12">

                </div>
            </div>

            <div class="box-body ">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Holiday List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>S.no.</th>
                                    <th>Holiday Name</th>
                                    <th>Date</th>
                                    <th>Day</th>
                                    <th>Descrption</th>

                                    <th>Update By</th>
                                    <th>Date</th>

                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                {{-- Start foreach condition --}}
                                @foreach ($addholidays as $holidays)
                                    <tr>
                                        <td>{{ $holidays->id }}</td>
                                        <td>{{ $holidays->name }} </td>
                                        <td>{{ $holidays->date }}</td>
                                        <td>Tuesday</td>
                                        <td>{{ $holidays->description }} </td>

                                        <td>rahul@simption.com</td>
                                        <td>{{ $holidays->date }}</td>

                                        <td><a href="{{ url('edit-holiday/'.$holidays->id) }}"><button type="button"
                                                    onclick="post_content('holiday/edit_holiday','id=85')"
                                                    class="btn btn-success">Edit</button></a>


                                            <a href="{{ url('holiday-delete/'.$holidays->id) }}"><button type="button"
                                                    class="btn btn btn-danger"  onclick="return  valid('84');"
                                                   >Delete</button></a>
                                        </td>

                                    </tr>
                                @endforeach
                            {{-- end foreach condition  --}}

                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>
    $(function() {
        $('#example1').DataTable()
    })
</script>
@include('common.footer')
