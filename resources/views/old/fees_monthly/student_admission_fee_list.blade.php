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
        <li class="active"> Student Fee List</li>
    </ol>
</section>

<script>
function reset_fee1(student_roll_no) {

    var myval = confirm("Are You Sure You Want to Reset Fee of This Student !!!");
    if (myval == true) {
        reset_fee(student_roll_no);
    }

}

function reset_fee(student_roll_no) {
    window.scrollTo(0, 0);
    get_content(loader_div);
    $.ajax({
        type: "POST",
        url: access_link + "fees_monthly/reset_fee_details_api.php?student_roll_no=" + student_roll_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert('Reset Successfully');
                get_content('fees_monthly/student_admission_fee_list');
            }
        }
    });

}
</script>

<!---******************************************************************************************************-->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Student Fee</h3>
                <script>
                function for_list() {
                    //$("#search_list").html(loader_div);
                    if (document.getElementById('g1').checked) {
                        var gender = document.getElementById('g1').value;
                    } else if (document.getElementById('g2').checked) {
                        var gender = document.getElementById('g2').value;
                    } else if (document.getElementById('g3').checked) {
                        var gender = document.getElementById('g3').value;
                    } else if (document.getElementById('g4').checked) {
                        var gender = document.getElementById('g4').value;
                    }

                    if (document.getElementById('r1').checked) {
                        var religion = document.getElementById('r1').value;
                    } else if (document.getElementById('r2').checked) {
                        var religion = document.getElementById('r2').value;
                    } else if (document.getElementById('r3').checked) {
                        var religion = document.getElementById('r3').value;
                    } else if (document.getElementById('r4').checked) {
                        var religion = document.getElementById('r4').value;
                    } else if (document.getElementById('r5').checked) {
                        var religion = document.getElementById('r5').value;
                    } else if (document.getElementById('r6').checked) {
                        var religion = document.getElementById('r6').value;
                    }
                    if (document.getElementById('c1').checked) {
                        var caste = document.getElementById('c1').value;
                    } else if (document.getElementById('c2').checked) {
                        var caste = document.getElementById('c2').value;
                    } else if (document.getElementById('c3').checked) {
                        var caste = document.getElementById('c3').value;
                    } else if (document.getElementById('c4').checked) {
                        var caste = document.getElementById('c4').value;
                    } else if (document.getElementById('c5').checked) {
                        var caste = document.getElementById('c5').value;
                    } else if (document.getElementById('c6').checked) {
                        var caste = document.getElementById('c6').value;
                    }

                    var age = document.getElementById('a').value;
                    var scheme = document.getElementById('student_admission_scheme').value;
                    var type = document.getElementById('student_admission_type').value;
                    var student_class = document.getElementById('student_class').value;
                    var student_class_stream = document.getElementById('student_class_stream').value;
                    var student_class_group = document.getElementById('student_class_group').value;
                    var student_class_section = document.getElementById('student_class_section').value;
                    var bus_fee_category_name = document.getElementById('bus_fee_category_name').value;

                    var sort_by = document.getElementById('sort_by').value;

                    var dataTable = $('#example1').DataTable({
                        destroy: true,
                        "processing": true,
                        "serverSide": true,
                        "ajax": {
                            url: access_link + "fees_monthly/student_admission_fee_list_fatch.php?gender=" +
                                gender + "&student_class_group=" + student_class_group +
                                "&student_class_stream=" + student_class_stream + "&religion=" + religion +
                                "&caste=" + caste + "&age=" + age + "&scheme=" + scheme + "&type=" + type +
                                "&student_class=" + student_class + "&student_class_section=" +
                                student_class_section + "&bus_fee_category_name=" + bus_fee_category_name +
                                "&sort_by=" + sort_by + "",
                            type: "post"
                        }
                    });
                    /*
  $.ajax({
		type: "POST",
		url: access_link+"fees_monthly/ajax_filter_student_admission_fee_list.php?gender="+gender+"&student_class_group="+student_class_group+"&student_class_stream="+student_class_stream+"&religion="+religion+"&caste="+caste+"&age="+age+"&scheme="+scheme+"&type="+type+"&student_class="+student_class+"&student_class_section="+student_class_section+"&bus_fee_category_name="+bus_fee_category_name+"&sort_by="+sort_by+"",
		cache: false,
		success: function(detail){
		$('#search_list').html(detail);
		$('#example1').DataTable();
		}
	   });
	   */
                }
                </script>
                <script>
                function for_stream(value2) {
                    if (value2 == "11TH" || value2 == "12TH") {
                        $("#student_class_stream_div").show();
                        $("#student_class_group_div").show();
                    } else {
                        $("#student_class_stream_div").hide();
                        $("#student_class_group_div").hide();
                    }
                }

                function get_group(value1) {
                    $("#student_class_group").html("<option value='' >Loading....</option>");
                    if (value1 != 'All') {
                        $.ajax({
                            type: "POST",
                            url: access_link + "fees_monthly/ajax_stream_group_all.php?stream_name=" + value1 +
                                "",
                            cache: false,
                            success: function(detail1) {
                                $("#student_class_group").html(detail1);
                            }
                        });
                    } else {
                        $("#student_class_group").html('');
                    }
                }
                </script>
                <script type="text/javascript">
                function for_section(value) {
                    $("#student_class_section").html("<option value='' >Loading....</option>");
                    $.ajax({
                        type: "POST",
                        url: access_link + "fees_monthly/ajax_class_section_all.php?class_name=" + value + "",
                        cache: false,
                        success: function(detail) {
                            $("#student_class_section").html(detail);
                            for_list();
                        }
                    });
                }
                </script>

                <div class="input-group-btn">
                    <select name="sort_by" style="display:none;" class="btn btn-info my_background_color " id="sort_by"
                        onchange="for_list();">
                        <option value="none">Sort By</option>
                        <option value="student_name">Name</option>
                        <option value="student_class">Classwise</option>
                        <option value="school_roll_no">Roll No.</option>
                        <option value="student_class_section">Section</option>
                        <option value="student_father_name">Father</option>
                    </select>

                    <a href="javascript:get_content('fees_monthly/set_classwise_fee_details')"><button type="button"
                            style="float:right;" class="btn btn-success">Classwise Set Fee</button></a>
                    <a href="javascript:get_content('fees_monthly/student_admission_fee_list')"><button
                            style="float:right;" type="button"
                            class="btn btn-info my_background_color">Reset</button></a>
                    <button style="float:right;" type="button" class="btn btn-info my_background_color"
                        data-toggle="collapse" data-target="#demo">Filter</button>
                </div>

                <form oninput="x.value=parseInt(a.value)" id="demo" class="collapse" method="post">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Class</label><br>
                            <select name="student_class"
                                onchange="for_section(this.value);for_list();for_stream(this.value);" id="student_class"
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
                    <div class="col-md-4" id="student_class_stream_div" style="display:none;">
                        <div class="form-group">
                            <label>Stream<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_stream" id="student_class_stream"
                                onchange="get_group(this.value);" required>
                                <option value="All">All</option>
                                <option value="SCIENCE">SCIENCE</option>
                                <option value="ARTS">ARTS</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value="Commerce ">Commerce </option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" id="student_class_group_div" style="display:none;">
                        <div class="form-group">
                            <label>Group<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class_group" id="student_class_group" required>
                                <option value="All">All</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Section</label><br>
                            <select class="form-control" name="student_class_section" id="student_class_section"
                                onchange='for_list();' required>
                                <option value="All">All</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gender</label><br>
                            <div class="form-control">
                                <input type="radio" name="student_gender" onclick="for_list();" id="g3" value="Both"
                                    checked>&nbsp;&nbsp;<b>Both</b>
                                <input type="radio" name="student_gender" onclick="for_list();" id="g1"
                                    value="Male">&nbsp;&nbsp;<b>Male</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="student_gender" onclick="for_list();" id="g2"
                                    value="Female">&nbsp;&nbsp;<b>Female</b>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="student_gender" onclick="for_list();" id="g4"
                                    value="Other">&nbsp;&nbsp;<b>Other</b>&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Religion</label><br>
                            <div class="form-control">
                                <input type="radio" name="student_religion" onclick="for_list();" id="r5" value="All"
                                    checked>&nbsp;&nbsp;<b>All</b>
                                <input type="radio" name="student_religion" onclick="for_list();" id="r1"
                                    value="Hindu">&nbsp;<b>Hindu</b>
                                <input type="radio" name="student_religion" onclick="for_list();" id="r2"
                                    value="Muslim">&nbsp;<b>Muslim</b>
                                <input type="radio" name="student_religion" onclick="for_list();" id="r3"
                                    value="Sikh">&nbsp;<b>Sikh</b>
                                <input type="radio" name="student_religion" onclick="for_list();" id="r4"
                                    value="Christian">&nbsp;<b>Christian</b>
                                <input type="radio" name="student_religion" onclick="for_list();" id="r6"
                                    value="Other">&nbsp;<b>Other</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Catagory</label><br>
                            <div class="form-control">
                                <input type="radio" name="student_category" onclick="for_list();" id="c5" value="All"
                                    checked>&nbsp;<b>All</b>
                                <input type="radio" name="student_category" onclick="for_list();" id="c1"
                                    value="General">&nbsp;<b>General</b>&nbsp;
                                <input type="radio" name="student_category" onclick="for_list();" id="c2"
                                    value="OBC">&nbsp;<b>OBC</b>&nbsp;
                                <input type="radio" name="student_category" onclick="for_list();" id="c3"
                                    value="SC">&nbsp;<b>SC</b>&nbsp;
                                <input type="radio" name="student_category" onclick="for_list();" id="c4"
                                    value="ST">&nbsp;<b>ST</b>&nbsp;
                                <input type="radio" name="student_category" onclick="for_list();" id="c6"
                                    value="Other">&nbsp;<b>Other</b>&nbsp;

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Scheme</label>
                            <select class="form-control" name="student_admission_scheme" id="student_admission_scheme"
                                onchange="for_list();">
                                <option value="All">All</option>
                                <option value="NON-RTE">NON-RTE</option>
                                <option value="RTE">RTE</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Admission Type</label>
                            <select class="form-control" name="student_admission_type" id="student_admission_type"
                                onchange="for_list();">
                                <option value="All">All</option>
                                <option value="Regular">Regular</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Age (In Years)</label>
                        <div class="input-group">
                            <input style="width:100%;" type="range" name="student_date_of_birth" id="a" value="0"
                                oninput="for_list();">
                            <span class="input-group-addon" style="padding:0px;">
                                <input style="color:red;font-size:20px;width:100px;" name="x" style="border:none;">
                            </span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Bus Category</label>
                        <select class="form-control select2" name="bus_fee_category_name" id="bus_fee_category_name"
                            style="width:100%" onchange="for_list();">
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

                </form>

                <script>
                $(function() {
                    //Initialize Select2 Elements
                    $('.select2').select2()

                })
                </script>
            </div>
            <div class="box-body ">
                <div class="col-md-12">
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                        </div>

                        <div class="box-body table-responsive" id="search_list">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="my_background_color">
                                    <tr>
                                        <th>#</th>
                                        <th>Admission No.</th>
                                        <th>student Name</th>
                                        <th>Father's Name</th>
                                        <th>Class/Section</th>
                                        <th>Student Roll No</th>
                                        <th>Update By</th>
                                        <th>Date</th>
                                        <th>Reset Fee</th>
                                        <th>Fee Status</th>
                                        <th>Set Fee</th>
                                    </tr>
                                </thead>
                            </table>
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
<script>



</script>
<script>
$(function() {
    /*   var dataTable=$('#example1').DataTable({
           destroy: true,
           "processing": true,
           "serverSide":true,
           "ajax":{
               url:access_link+"fees_monthly/student_admission_fee_list_fatch.php?gender="+gender+"&student_class_group="+student_class_group+"&student_class_stream="+student_class_stream+"&religion="+religion+"&caste="+caste+"&age="+age+"&scheme="+scheme+"&type="+type+"&student_class="+student_class+"&student_class_section="+student_class_section+"&bus_fee_category_name="+bus_fee_category_name+"&sort_by="+sort_by+"",
               type:"post"
           }
       });
       */
    for_list();
})
</script>
@include('common.footer')