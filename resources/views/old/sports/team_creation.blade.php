@include('common.header')
@include('common.navbar')

<style type="text/css">
.result {
    position: absolute;
    z-index: 999;
    top: 80%;
    left: 0;
    background: white;
}

.search-box input[type="text"],
.result {
    width: 90%;
    margin-left: 5%;
    box-sizing: border-box;
}

/* Formatting result items */
.result p {
    margin: 0;
    padding: 7px 10px;
    border: 1px solid #CCCCCC;
    border-top: none;
    cursor: pointer;
}

.result p:hover {
    background: #f2f2f2;
}
</style>

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
</script>

<!---vidhan---->
<script>
function for_search11() {
    var sports_name = document.getElementById('sports_name').value;
    var gender = document.getElementById('gender').value;
    var age_category = document.getElementById('age_category').value;
    var sports_type = document.getElementById('sports_type').value;
    if (sports_name != '' || gender != '' || age_category != '' || sports_type != '') {
        $('#for_student_list').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "sports/ajax_team_creation.php?sports_name=" + sports_name + "&gender=" +
                gender + "&age_category=" + age_category + "&sports_type=" + sports_type + "",
            success: function(detail) {
                $('#for_student_list').html(detail);
                $('#company_123').val('All').change();
            }
        });

    } else {
        $('#for_student_list').html('');
        $('#company_123').val('All').change();
    }
}

function validation() {
    var add = 0;
    $(".checked1").each(function() {
        if ($(this).prop("checked") == true) {
            add = add + 1;
        }
    });
    var add1 = 0;
    $(".checked2").each(function() {
        if ($(this).prop("checked") == true) {
            add1 = add1 + 1;
        }
    });
    if (add > 0 && add1 > 0) {
        return true;
    } else {
        alert_new("Please Select Atleast One Student Or One Escorts !!!", 'red');
        return false;
    }
}
</script>

<script>
function data_fill(value) {
    $(".type_data").each(function() {
        $(this).val(value);
    });
}

function select_company() {
    var company_123 = document.getElementById('company_123').value;
    var sports_name = document.getElementById('sports_name').value;
    if (company_123 != '' && sports_name != '') {
        $('#student_name_company').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "sports/ajax_staff_name.php?company_123=" + company_123 + "&sports_name=" +
                sports_name + "",
            success: function(detail) {
                $('#student_name_company').html(detail);
            }
        });
    } else {
        $('#student_name_company').html('');
    }
}

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "sports/team_creation_api.php",
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
                get_content('sports/team_creation_list');
            }
        }
    });
});
</script>
<section class="content-header">
    <h1>
        Team Creation
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/sports')}}" #><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Team Creation </li>
    </ol>
</section>
<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Team Creation</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Participate form--------------------------------------------------->
            <form action="" method="post" id="my_form">
                <div class="box-body">
                    <div class="box-body table-responsive">
                        <div class="col-sm-12">&nbsp;</div>
                        <div class="col-sm-12">

                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <div class="container-fluid">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-sm-3">
                                                <label>Sports Name</label>
                                                <select name="event_name11" class="form-control" id="sports_name"
                                                    onchange="for_search11();" required>
                                                    <option value="All">All</option>
                                                    <option value="फूत्बल्ल">फूत्बल्ल</option>
                                                    <option value="Basket Ball">Basket Ball</option>
                                                    <option value="Bedminton">Bedminton</option>
                                                    <option value="Chess">Chess</option>
                                                    <option value="Cricket">Cricket</option>
                                                    <option value="Fancey ">Fancey </option>
                                                    <option value="football">football</option>
                                                    <option value="high jump">high jump</option>
                                                    <option value="hoky">hoky</option>
                                                    <option value="hollyboll">hollyboll</option>
                                                    <option value="Keram">Keram</option>
                                                    <option value="kho kho">kho kho</option>
                                                    <option value="long jump">long jump</option>
                                                    <option value="NADI PAHAD">NADI PAHAD</option>
                                                    <option value="Running">Running</option>
                                                    <option value="swiming">swiming</option>
                                                    <option value="teakndow">teakndow</option>
                                                    <option value="testing">testing</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Gender</label>
                                                <select name="gender11" class="form-control" id="gender"
                                                    onchange="for_search11();" required>
                                                    <option value="All">All</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Category</label>
                                                <select name="category11" class="form-control" id="age_category"
                                                    onchange="for_search11();" required>
                                                    <option value="All">All</option>
                                                    <option value="Under 1 Year">Under 1 Year</option>
                                                    <option value="Under 10 Year">Under 10 Year</option>
                                                    <option value="Under 11 Year">Under 11 Year</option>
                                                    <option value="Under 12 Year">Under 12 Year</option>
                                                    <option value="Under 15 Year">Under 15 Year</option>
                                                    <option value="Under 18 Year">Under 18 Year</option>
                                                    <option value="Under 19 Year">Under 19 Year</option>
                                                    <option value="Under 2017 Year">Under 2017 Year</option>
                                                    <option value="Under 2022 Year">Under 2022 Year</option>
                                                    <option value="Under 21 Year">Under 21 Year</option>
                                                    <option value="Under 23 Year">Under 23 Year</option>
                                                    <option value="Under 3 Year">Under 3 Year</option>
                                                    <option value="Under 4 Year">Under 4 Year</option>
                                                    <option value="Under 52 Year">Under 52 Year</option>
                                                    <option value="Under 7 Year">Under 7 Year</option>
                                                    <option value="Under 8 Year">Under 8 Year</option>
                                                    <option value="Under 9 Year">Under 9 Year</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Sports Type</label>
                                                    <select name="sports_type" class="form-control"
                                                        onchange="for_search11();" id="sports_type" required>
                                                        <option value="">Select</option>
                                                        <option value="bedminton">bedminton</option>
                                                        <option value="bnv">bnv</option>
                                                        <option value="Chees">Chees</option>
                                                        <option value="chess">chess</option>
                                                        <option value="cricket">cricket</option>
                                                        <option value="demo">demo</option>
                                                        <option value="Fancy ">Fancy </option>
                                                        <option value="Football">Football</option>
                                                        <option value="hocky">hocky</option>
                                                        <option value="Jump">Jump</option>
                                                        <option value="outdoor sports">outdoor sports</option>
                                                        <option value="pllplp">pllplp</option>
                                                        <option value="RUNNING">RUNNING</option>
                                                        <option value="sack  race">sack race</option>
                                                        <option value="swimming">swimming</option>
                                                        <option value="Technical Quiz">Technical Quiz</option>
                                                        <option value="wwe">wwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Escorts(Staff)</label>
                                                <select name="company_123" style="width:100%;" id="company_123"
                                                    class="form-control" onchange="select_company();" required>
                                                    <option value="All">All</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="for_student_list">

                            </div>
                            <div id="student_name_company">

                            </div>
                            <div class="col-md-12">
                                <center><input type="submit" name="finish" value="Submit" onclick="return validation();"
                                        class="btn btn-success" /></center>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </form>

            <!---------------------------------------------End Participate form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>

@include('common.footer')