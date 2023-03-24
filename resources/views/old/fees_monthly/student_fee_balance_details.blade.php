@include('common.header')
@include('common.navbar')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Fees Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees</a></li>
        <li class="active">Balance Details</li>
    </ol>
</section>

<script>
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "fees_monthly/ajax_classwise_section_all.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html(detail);
            for_feelist();
        }
    });
}

function for_feelist() {
    $("#fee_details").html(loader_div);
    var student_class = document.getElementById('student_class').value;
    var student_section = document.getElementById('student_class_section').value;
    if (student_class != '' && student_section != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_student_fee_balance_details.php?student_class=" +
                student_class + "&student_section=" + student_section + "",
            cache: false,
            success: function(detail) {
                $("#fee_details").html(detail);
            }
        });
    } else {
        $("#fee_details").html('');
    }
}
</script>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->


<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">

            <!-- /.box-header -->
            <div class="box-body">

                <div class="box-body  col-md-12">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Select Class</label>
                                <select name="student_class" id="student_class" class="form-control"
                                    onchange="for_section(this.value);" required>
                                    <option value="All">All Class</option>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Section</label>
                                <select name="student_class_section" id="student_class_section" class="form-control"
                                    onchange="for_feelist();" required>
                                    <option value="All">All</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">&nbsp;</div>
                </div>
                <div class="col-md-12">&nbsp;</div>

                <div class="box-body col-md-10 col-md-offset-1" style="overflow:scroll;border:1px solid;"
                    id="fee_details">

                </div>


            </div>

        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>
</section>
<script>
for_feelist();
</script>
@include('common.footer')