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
        url: access_link + "important/add_other_document_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            // 			//alert_new(detail);

            // 			console.log(detail)
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('important/other_document_list');
            }
        }
    });
});
</script>
<section class="content-header">
    <h1>
        Add Other Info
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/important')}}"><i class="fa fa-check-square"></i>Important</a></li>
        <li><a>Add Other Info</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
                <h3 class="box-title">Other Info Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="other_document_name" style="  border-color: red;"
                                placeholder="Name" value="" class="form-control" required>
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
                            <input type="file" name="other_document_upload" placeholder="Upload document" value=""
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Class</label>
                        <select name="class" id="student_class" class="form-control" required>
                            <option value="">Select Class</option>
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

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Remark<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="remark" placeholder="Remark" value="" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center>
                    </div>
            </div>
            </form>

        </div>
    </div>
</section>
@include('common.footer')