@include('common.header')
@include('common.navbar')
<script>
function for_total(count) {
    if (count != 'No') {
        var discount_amount = document.getElementById('discount_amount_' + count).value;
        var discount_method = document.getElementById('discount_method_' + count).value;
        var amount = document.getElementById('fee_type_' + count).value;
        if (discount_amount > 0) {
            if (discount_method == '%') {
                var aft_disc_amount = parseFloat(amount) - parseFloat(parseFloat(amount) * parseFloat(
                    discount_amount)) / 100;
                $("#after_discount_amount_" + count).val(aft_disc_amount);
            } else if (discount_method == 'Rs') {
                var aft_disc_amount = parseFloat(amount) - parseFloat(discount_amount);
                $("#after_discount_amount_" + count).val(aft_disc_amount);
            }
        } else {
            $("#after_discount_amount_" + count).val(amount);
        }
    }

    var add1 = 0;
    $('.amt').each(function() {
        add1 += Number($(this).val());
    });
    document.getElementById('grand_total1').value = add1;

}

function month_total(month) {
    var add = 0;
    $('.fee_amount_' + month).each(function() {
        add += Number($(this).val());
    });
    $('#total_month_' + month).html(add);
}

function for_same(id, class_name, clk_btn_cls, btn_id) {
    if ($('#check_for_same').prop("checked") == true) {
        var all_val = document.getElementById(id).value;
        $("." + class_name).each(function() {
            $(this).val(all_val);
        });
        $("." + clk_btn_cls).each(function() {
            $(this).click();
        });
    } else {
        $('#' + btn_id).click();
    }
}

function same_amount(value, fee_code) {

    if ($('#check_same').prop("checked") == true) {
        $("." + fee_code).each(function() {
            $(this).val(value);
        });
    }
    $(".clk_btn_" + fee_code).each(function() {
        $(this).click();
    });

}

function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "fees_monthly/ajax_classwise_section_all.php?class_name=" + value + "",
        cache: false,
        success: function(detail) {
            $("#student_class_section").html(detail);
            for_feestudent();
        }
    });
}

function for_feedetails() {
    $("#student_fee_details").html(loader_div);
    var class_name = document.getElementById('student_class').value;
    var student_transport = document.getElementById('student_transport').value;
    var bus_fee_category_code = document.getElementById('bus_fee_category_code').value;
    var student_fee_category_code = document.getElementById('student_fee_category_code').value;
    if (class_name != '' && student_transport != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_set_classwise_fee_details.php?class_name=" + class_name +
                "&student_transport=" + student_transport + "&bus_fee_category_code=" + bus_fee_category_code +
                "&student_fee_category_code=" + student_fee_category_code + "",
            cache: false,
            success: function(detail) {
                $("#student_fee_details").html(detail);
            }
        });
    } else {
        $("#student_fee_details").html('');
    }
}

function for_feestudent() {
    $("#student_details").html(loader_div);
    var class_name = document.getElementById('student_class').value;
    var section_name = document.getElementById('student_class_section').value;
    var student_transport = document.getElementById('student_transport').value;
    var student_old_new = document.getElementById('student_old_new').value;
    var student_admission_scheme = document.getElementById('student_admission_scheme').value;
    var bus_fee_category_code = document.getElementById('bus_fee_category_code').value;
    var student_fee_category_code = document.getElementById('student_fee_category_code').value;
    var student_class_stream = document.getElementById('student_class_stream').value;
    if (class_name != '' && section_name != '' && student_transport != '') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_get_student_for_fee.php?class_name=" + class_name +
                "&section_name=" + section_name + "&student_transport=" + student_transport +
                "&student_old_new=" + student_old_new + "&student_admission_scheme=" +
                student_admission_scheme + "&bus_fee_category_code=" + bus_fee_category_code +
                "&student_fee_category_code=" + student_fee_category_code + "&student_class_stream=" +
                student_class_stream + "",
            cache: false,
            success: function(detail) {
                $("#student_details").html(detail);
            }
        });
    } else {
        $("#student_details").html('');
    }
    for_feedetails();
}

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
        alert('Please Select Atleast One Student !!!');
        return false;
    }
}

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    get_content(loader_div);
    $.ajax({
        url: access_link + "fees_monthly/set_classwise_fee_details_api.php",
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
                get_content('fees_monthly/set_classwise_fee_details');
            }
        }
    });
});
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Student Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees</a></li>
        <li><a href="{{url('/student_admission_fee_list')}}"><i class="fa fa-money"></i> Student Admission Fee List</a>
        </li>
        <li class="active">Set Classwise Fee Details</li>
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

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Fee Category</label>
                                <select class="form-control" name="student_fee_category_code"
                                    id="student_fee_category_code" onchange="for_feestudent();">
                                    <option value="category1">Science</option>
                                    <option value="category2">Commerce</option>
                                    <option value="category3">Arts</option>
                                    <option value="category4">Computer Science</option>
                                    <option value="category5">Sports</option>
                                    <option value="category6">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Select Class</label>
                                <select name="student_class" id="student_class" class="form-control"
                                    onchange="for_section(this.value);" required>
                                    <option value="">Select</option>
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
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Class Stream</label>
                                <select class="form-control select2" name="student_class_stream"
                                    id="student_class_stream" style="width:100%;" onchange="for_feestudent();">
                                    <option value="All">All</option>
                                    <option value="SCIENCE">SCIENCE</option>
                                    <option value="ARTS">ARTS</option>
                                    <option value="Commerce ">Commerce </option>
                                    <option value="Commerce ">Other </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Section</label>
                                <select name="student_class_section" id="student_class_section" class="form-control"
                                    onchange="for_feestudent();" required>
                                    <option value="All">Select</option>
                                    <option value="All">A</option>
                                    <option value="All">B</option>
                                    <option value="All">C</option>
                                    <option value="All">D</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Transport</label>
                                <select name="student_transport" id="student_transport" class="form-control"
                                    onchange="for_feestudent();" required>
                                    <option value="All">All</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Old/New</label>
                                <select name="student_old_new" id="student_old_new" class="form-control"
                                    onchange="for_feestudent();" required>
                                    <option value="All">All</option>
                                    <option value="Old">OLD</option>
                                    <option value="New">NEW</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group">
                                <th><b style="font-size:15px">Scheme</b></th>
                                <select class="form-control" name="student_admission_scheme"
                                    id="student_admission_scheme" onchange="for_feestudent();">
                                    <option value="All">All</option>
                                    <option value="NON-RTE">NON-RTE</option>
                                    <option value="RTE">RTE</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Bus Fee Category</label>
                                <select class="form-control select2" name="bus_fee_category_code"
                                    id="bus_fee_category_code" style="width:100%;" onchange="for_feestudent();">
                                    <option value="All">All</option>
                                    <option value="busfee1">NASRULLAGANJ</option>
                                    <option value="busfee2">RALA</option>
                                    <option value="busfee3">BORKHEDA</option>
                                    <option value="busfee4">MP</option>
                                    <option value="busfee5">subhas nagar</option>
                                    <option value="busfee6">20000</option>
                                    <option value="busfee7">mp nagar</option>
                                    <option value="busfee8">ashoka garden</option>
                                    <option value="busfee9">kolar</option>
                                    <option value="busfee10">bardi</option>
                                    <option value="busfee11">mp.nagar</option>
                                    <option value="busfee12">arwind vihar</option>
                                    <option value="busfee13">kalpna nagar</option>
                                    <option value="busfee14">KHANDAKPAR</option>
                                    <option value="busfee15">Bhel </option>
                                    <option value="busfee16">MOD</option>
                                    <option value="busfee17">mp nagar</option>
                                    <option value="busfee18">mp nagar</option>
                                    <option value="busfee19">mp nagar </option>
                                </select>
                            </div>
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
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

})
</script>
@include('common.footer')