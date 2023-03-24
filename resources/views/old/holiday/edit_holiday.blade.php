@include('common.header')
@include('common.navbar')
<script>
    $("#my_form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        loader();
        $.ajax({
            url: access_link + "holiday/edit_holiday_api.php",
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
                    get_content('holiday/holiday_list');
                }
            }
        });
    });
</script>

<section class="content-header">
    <h1>
        Holiday Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('holiday/holiday')"><i class="fa fa-photo"></i> Holiday</a></li>
        <li><a href="javascript:get_content('holiday/holiday_list')"><i class="fa fa-list"></i>Holiday List</a></li>
        <li class="active"><i class="fa fa-edit"></i>Edit Holiday</li>
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
                <h3 class="box-title">Edit Holiday</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">


                <form role="form" method="POST" id="my_form">
                    @csrf



                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Holiday Name</label>
                            <input type="hidden" value="">
                            <input type="text"  name="holiday_name" placeholder="Enter Holiday Name" value="{{$holidays->name}}"
                                class="form-control ">
                            <input type="hidden" value="85">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" placeholder="Enter Date" value="{{ $holidays->date }}"
                                class="form-control" >
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Descrption</label>
                            <input type="text" name="holiday_description" placeholder="Description of holiday"
                                value="{{ $holidays->description }} " class="form-control">
                        </div>
                    </div>

                    <center><input type="submit" name="finish" value="Update" class="btn btn-success" /></center>





                </form>
                <div class="col-md-12">

                </div>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')
