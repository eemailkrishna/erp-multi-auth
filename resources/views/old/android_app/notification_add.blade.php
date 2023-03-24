@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function for_section(value) {
    $("#student_class_section").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "android_app/ajax_class_section.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html(detail);
        }
    });

}

$(function() {
    var id = document.getElementById('homework_class').value;
    $("#student_class_section").html("<option value=''>Loading.....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "android_app/ajax_class_section.php?class_name=" + id + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html(detail);
        }
    });

});
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "android_app/notification_add_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Completed', 'green');
                get_content('android_app/notification_list');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Notification Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('app')}}"><i class="fa fa-dashboard"></i> Android App</a></li>
        <li><a href="{{url('notification')}}"><i class="fa fa-book"></i>Notification Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Notification</li>
    </ol>
</section>




<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Notification Add</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                    <div class="col-md-8">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"><b>Write Notification Here<font style="color:red"><b>*</b></font>
                                    </b>
                                </h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">

                                <textarea id="" name="homework" class="form-control bordder-color"
                                    placeholder="Write Notification" rows="10" cols="80" required></textarea>

                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Class<font style="color:red"><b>*</b></font></label>
                            <select name="homework_class" onchange="for_section(this.value);" id="homework_class"
                                class="form-control" required>

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
                            <label>Section<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="homework_section" id="student_class_section">

                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Date<font style="color:red"><b>*</b></font></label>
                            <input type="date" value="2022-12-05" name="homework_date" id="myLocalDate"
                                placeholder="Date" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Expiry Date<font style="color:red"><b>*</b></font></label>
                            <input type="date" value="" name="update_status" value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Remark</label>
                            <input type="text" name="homework_remark" placeholder="Remark" value="" class="form-control"
                                required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-success" /></center>
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>

@include('common.footer')