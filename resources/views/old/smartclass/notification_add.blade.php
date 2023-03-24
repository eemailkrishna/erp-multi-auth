@include('common.header')
@include('common.navbar')


<script type="text/javascript">
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    if (value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "important_ajax/get_section_all.php?class_name=" + value + "",
            cache: false,
            success: function(detail) {
                $("#student_class_section").html(detail);
            }
        });
    } else {
        $("#student_class_section").html("<option value=''>Select</option>");
    }

}


$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    $("#get_content").html(loader_div);
    $.ajax({
        url: access_link + "smartclass/notification_add_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Completed!!!', 'green');
                get_content('smartclass/notification_list');
            } else {
                alert_new("Sorry!!!, Some Error Occured", 'red');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Notification Management
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-dashboard"></i> Smart Class</a></li>
        <li><a href="{{url('/notification')}}"><i class="fa fa-book"></i>Notification Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Notification</li>
    </ol>
</section>


<section class="content">
    <div class="box box-success  ">
        <div class="box-header with-border ">
            <h3 class="box-title">Notification Add</h3>
        </div>
        <div class="box-body ">
            <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Class<font style="color:red"><b>*</b></font></label>
                        <select name="notification_class" onchange="for_section(this.value);" id="class_name"
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
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Section<font style="color:red"><b>*</b></font></label>
                        <select class="form-control" name="notification_section" id="student_class_section">
                            <option value=''>Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Date<font style="color:red"><b>*</b></font></label>
                        <input type="date" value="2022-12-03" name="notification_date" id="myLocalDate"
                            placeholder="Date" value="" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Remark</label>
                        <input type="text" name="notification_remark" placeholder="Remark" value=""
                            class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <textarea id="" name="notification" class="form-control " placeholder="Write Notification" rows="4"
                        required></textarea>

                </div>

                <div class="col-md-12">
                    <center><input type="submit" name="submit" value="Submit" class="btn  btn-success" /></center>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>

@include('common.footer')