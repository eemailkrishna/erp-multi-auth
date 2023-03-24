@include('common.header')
@include('common.navbar')

<script src="../attachment/file_check.js"></script>
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "important/add_document_api.php",
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
                get_content('important/document_list');
            }
        }
    });
});
</script>
<section class="content-header">
    <h1>
        Add important Info
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/important')}}"><i class="fa fa-check-square"></i>Important</a></li>
        <li><a>Add important Info</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
                <h3 class="box-title">important Info Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="document_name" style="  border-color: red;" placeholder="Name"
                                value="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Date<font style="color:red"><b>*</b></font></label>
                            <input type="date" name="document_date" placeholder="Date" value="2022-12-13"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Documents upload<font style="color:red"><b>*</b></font></label>
                            <input type="file" name="document_upload" placeholder="Upload Bill" value=""
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@include('common.footer')