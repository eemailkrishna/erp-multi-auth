@include('common.header')
@include('common.navbar')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Student Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees</a></li>
        <li class="active"> Print Challan List</li>
    </ol>
</section>
<script>
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    if (value != 'All') {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_classwise_section_all.php?class_name=" + value + "",
            cache: false,
            success: function(detail) {
                $("#student_class_section").html(detail);
                student_list();
            }
        });

    } else {
        $("#student_class_section").html("<option value='All'>All</option>");
        student_list();
    }
}

function for_check(id, check) {
    if ($('#' + id).prop("checked") == true) {
        $("." + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $("." + id).each(function() {
            $(this).prop('checked', false);
        });
    }
    if (check == 'Yes') {
        student_list();
    }
}

function student_list() {
    $("#search_list").html(loader_div);
    var class_name = document.getElementById('student_class').value;
    var section_name = document.getElementById('student_class_section').value;
    var admission_scheme = document.getElementById('admission_scheme').value;

    var no_of_count = 0;
    var month_arr = [];
    $(".fee_month").each(function() {
        if ($(this).prop("checked") == true) {
            no_of_count = Number(no_of_count + 1);
            month_arr.push($(this).val());
        }
    });

    if (class_name != '' && section_name != '' && no_of_count > 0) {
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_get_student_for_challan.php",
            data: {
                class_name: class_name,
                section_name: section_name,
                month_arr: month_arr,
                no_of_count: no_of_count,
                admission_scheme: admission_scheme
            },
            cache: false,
            success: function(detail) {
                $("#search_list").html(detail);
            }
        });
    } else {
        $("#search_list").html('');
    }
}

function check_valid() {
    var count = 0;
    $(".info").each(function() {
        if ($(this).prop("checked") == true) {
            count = Number(count + 1);
        }
    });
    if (count > 0) {
        return true;
    } else {
        alert('Please select Atleast One Student !!!');
        return false;
    }
}
</script>

<!---******************************************************************************************************-->
<form method="post" action="../school_software_v1_old/pdf/pdf/challan_pdf/challan_pdf_monthly.php"
    enctype="multipart/form-data" target="_blank">
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="box box-primary my_border_top">
                <div class="box-header with-border ">
                    <div class="col-md-4">
                        <h3 class="box-title">Selection Area</h3>
                    </div>
                    <div class="col-md-6">
                        <span style="float:right;"><input type="checkbox" name="doc_no_update" value="" /><b
                                style="color:red;"> With Doc No Update</b></span>
                    </div>
                    <div class="col-md-2">
                        <span style="float:right;"><input type="checkbox" value="" id="fee_month"
                                onclick="for_check(this.id,'Yes');" /><b style="color:red;">Check All</b></span>
                    </div>

                    <div class="col-md-12 col-md-offset-1">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Select Class</label>
                                <select name="student_class" id="student_class" class="form-control"
                                    onchange="for_section(this.value);" required>
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

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Section</label>
                                <select name="student_class_section" id="student_class_section" class="form-control"
                                    onchange="student_list();" required>
                                    <option value="All">All</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Select Bank</label>
                                <select name="selected_bank" class="form-control select2" id="selected_bank"
                                    style="width:100%;">
                                    <option value="">Select Bank</option>
                                    <option value="50">Monika rathore[sbi]-[Narela]-[9896384654]-[56464]</option>
                                    <option value="51">nidhi[pnb bank]-[bhopal]-[98789787667]-[776587]</option>
                                    <option value="52">Monika rathore[sbi]-[Narela]-[757415815]-[5642266]</option>
                                    <option value="53">kanhar valley public school[sbi]-[bpl]-[7740047]-[sbin000440]
                                    </option>
                                    <option value="54">NIDHI SINGH[BANK OF INDIA]-[BOI]-[1524624524515]-[ifsc234]
                                    </option>
                                    <option value="56">Rajat Sharma [Union bank ]-[Raisen ]-[45789654123541]-[Un1025482]
                                    </option>
                                    <option value="57">Pokhari[abc]-[abc]-[100]-[111]</option>
                                    <option value="58">Laxman[Hari Bank]-[ccc]-[1010]-[cccc]</option>
                                    <option value="59">Jalgaon Jamod Secondary and Higher Secondary School[Jalgaon Jamod
                                        Urban Cooprative Bank Pvt. Ltd.]-[Jalgaon Jamod Main
                                        Branch]-[123456789012345]-[HDFC0CJJUCB]</option>
                                    <option value="60">hemant[rahu sir]-[dev sir]-[987654321456987]-[9074]</option>
                                    <option value="61">Sushil[STATE BANK OF
                                        INDIA]-[Delhi]-[89878767655555555]-[456546546]</option>
                                    <option value="62">abc[state bank of india]-[mau]-[12345]-[sbin0976554]</option>
                                    <option value="63">aaaa[aaaa]-[aaaa]-[1111]-[aaaa1111]</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Admission Scheme</label>
                                <select name="admission_scheme" id="admission_scheme" class="form-control"
                                    onchange="student_list();">
                                    <option value="All">All</option>
                                    <option value="RTE">RTE</option>
                                    <option value="NON-RTE">NON-RTE</option>
                                </select>
                            </div>
                        </div>


                    </div>

                    <div class="box-body  col-md-12">

                        <div class="col-md-12 col-md-offset-1">

                            <div class="col-md-10">

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="04"
                                        onclick="student_list();" /> April Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="05"
                                        onclick="student_list();" /> May Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="06"
                                        onclick="student_list();" /> June Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="07"
                                        onclick="student_list();" /> July Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="08"
                                        onclick="student_list();" /> August Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="09"
                                        onclick="student_list();" /> September Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="10"
                                        onclick="student_list();" /> October Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="11"
                                        onclick="student_list();" /> November Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="12"
                                        onclick="student_list();" /> December Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="01"
                                        onclick="student_list();" /> January Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="02"
                                        onclick="student_list();" /> February Month
                                </div>

                                <div class="col-md-2">
                                    <input type="checkbox" name="fee_months[]" id="" class="fee_month" value="03"
                                        onclick="student_list();" /> March Month
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="box-body ">
                        <div class="col-md-12">
                            <!-- /.box -->

                            <div class="box">
                                <div class="box-header">
                                </div>

                                <div class="box-body table-responsive">

                                    <div class="col-md-8 col-md-offset-2" id="search_list">

                                    </div>

                                </div>
                            </div>

                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
    </section>

</form>

<!-- /.content -->
<script>
student_list();
</script>
<script>
$(function() {
    $('.select2').select2();
});
</script>
@include('common.footer')