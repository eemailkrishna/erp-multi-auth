@include('common.header')
@include('common.navbar')
<script type="text/javascript">
function for_check(id) {
    if ($('#' + id).prop("checked") == true) {
        $("." + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $("." + id).each(function() {
            $(this).prop('checked', false);
        });
    }
}

function validate() {
    var add1 = 0;
    $(".info").each(function() {
        if ($(this).prop('checked') == true) {
            add1 = parseInt(add1 + 1);
        }
    });
    if (add1 > 0) {
        return true;
    } else {
        alert('Please Select Atleast One Option !!!');
        return false;
    }
}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    get_content(loader_div);
    $.ajax({
        url: access_link + "fees_monthly/reset_fee_structure_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert('Successfully Complete');
                get_content('fees_monthly/reset_fee_structure');
            }
        }
    });
});
</script>


<section class="content-header">
    <h1>
        Student Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees</a></li>
        <li class="active">Reset Fee Structure</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->



<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">

            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body">
                <!---------------------------Start Admission form--------------------------------------->
                <!---------------------------Start Personal Details ------------------------------------->

                <form method="post" enctype="multipart/form-data" id="my_form">

                    <div class="box-body">

                        <div class="col-md-12">
                            <div class="col-md-2">&nbsp;</div>
                            <div class="col-md-8">
                                <div class="col-md-8">
                                    <h2>Set Fee Months</h2>
                                </div>
                                <div class="col-md-4"><span style="color:red;float:right;"><input type="checkbox"
                                            id="info" value="" checked onclick="for_check(this.id);" /> All Check /
                                        Uncheck</span></div>
                                <div class="col-md-12" style="border:1px solid;border-radius:20px;">
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="205|?|April Month" checked> April Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="206|?|May Month" checked> May Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="207|?|June Month" checked> June Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="208|?|July Month" checked> July Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="209|?|August Month"> August Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="210|?|September Month"> September Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="211|?|October Month"> October Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="212|?|November Month"> November Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="213|?|December Month"> December Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="214|?|January Month"> January Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="215|?|February Month"> February Month</div>
                                    <div class="col-md-3"><input type="checkbox" name="fees_type_name[]" class="info"
                                            value="216|?|March Month"> March Month</div>
                                </div>
                            </div>
                            <div class="col-md-2">&nbsp;</div>
                        </div>
                        <div class="col-md-12">
                            <hr />
                        </div>

                    </div>

                    <!---------------------------Start Fees Details ----------------------------------------->
                    <div class="box-body">
                        <div class="col-md-8" id="student_fee_details">

                        </div>
                        <div class="col-md-4" id="student_details">

                        </div>
                        <div class="box-body ">
                            <div class="col-md-12">
                                <center><input type="submit" name="finish" value="Save Fee" onclick="return validate();"
                                        class="btn  my_background_color" /></center>
                            </div>
                        </div>
                    </div>
                    <!---------------------------End Fees Details ----------------------------------------->
            </div>
            <!---------------------------End Document Upload ----------------------------------------->

            <!---------------------------------------------End Admission form------------------------->
            <!-- /.box-body -->

            </form>

        </div>
</section>
@include('common.footer')