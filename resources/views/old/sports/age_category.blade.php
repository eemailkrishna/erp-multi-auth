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


<script>
function for_search11() {
    var age_category = document.getElementById('age_category').value;
    var student_class = document.getElementById('student_class').value;
    var gender = document.getElementById('gender').value;
    var date_search = document.getElementById('date_search').value;
    var sports_name = document.getElementById('sports_name').value;
    if (age_category != '' && student_class != '' && gender != '' && date_search != '' && sports_name != '') {
        $('#for_student_list').html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "sports/ajax_age_category_student.php?age_category=" + age_category +
                "&student_class=" + student_class + "&gender=" + gender + "&date_search=" + date_search +
                "&sports_name=" + sports_name + "",
            success: function(detail) {
                $('#for_student_list').html(detail);
            }
        });

    } else {
        $('#for_student_list').html('');
    }
}

function validation() {
    var add = 0;
    $(".checked1").each(function() {
        if ($(this).prop("checked") == true) {
            add = add + 1;
        }
    });
    if (add > 0) {
        return true;
    } else {
        alert_new("Please Select Atleast One Student !!!", 'red');
        return false;
    }
}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "sports/age_category_api.php",
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
                get_content('sports/age_category');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Age Category
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('sports')}}"><i class="fa fa-futbol-o"></i> Sport Management</a></li <li class="active"><i
            class="fa fa-user-plus"></i> Age Category</li>
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
                <h3 class="box-title">Age Category</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Participate form--------------------------------------------------->
            <form action="" oninput="x.value=parseInt(age_category.value)" method="post" id="my_form"
                enctype="multipart/form-data">
                <div class="box-body">
                    <div class="box-body table-responsive">
                        <div class="col-sm-12">&nbsp;</div>
                        <div class="col-sm-12">

                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <div class="container-fluid">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-sm-4">
                                                <label>Age Category</label>
                                                <div class="input-group">
                                                    <input style="width:100%;" type="range" name="student_date_of_birth"
                                                        id="age_category" value="0" oninput="for_search11();">
                                                    <span class="input-group-addon" style="padding:0px;">
                                                        <input style="color:red;font-size:20px;width:100px;" name="x"
                                                            value="0" style="border:none;">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Class</label>
                                                <select name="student_class" class="form-control" id="student_class"
                                                    onchange="for_search11();" required>
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
                                            <div class="col-sm-2">
                                                <label>Gender</label>
                                                <select name="gender" class="form-control" id="gender"
                                                    onchange="for_search11();" required>
                                                    <option value="All">All</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Date</label>
                                                <input type="date" class="form-control" id="date_search"
                                                    onchange="for_search11();" value="2022-12-05">
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Sports</label>
                                                <select name="sports_name" class="form-control" id="sports_name"
                                                    onchange="for_search11();">
                                                    <option value="All">All</option>
                                                    <option value="Non_Sport">Non Sport</option>
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

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div id="for_student_list">

                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="box-body table-responsive">

                            </div>
                        </div>


                    </div>
                </div>
            </form>

            <!---------------------------------------------End Participate form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>

@include('common.footer')