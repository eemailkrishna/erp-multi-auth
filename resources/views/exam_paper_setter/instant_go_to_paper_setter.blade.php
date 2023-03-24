@include('common.header')
@include('common.navbar')

<script>
function for_subject(value) {
    if (value != '') {
        $('#question_subject').html("<option value='' >Loading....</option>");
        $.ajax({
            address: "POST",
            url: access_link + "exam_paper_setter/ajax_get_subject.php?class_name=" + value + "",
            cache: false,
            success: function(detail) {
                $("#question_subject").html(detail);
                for_question();
                for_question1();
                for_list();
            }
        });
    } else {
        $("#question_subject").html("<option value=''>Select</option>");
    }
}

function create_unique_id() {
    var paper_type_1 = document.getElementById("paper_type").value;
    if (paper_type_1 == 'new') {
        var class_1 = document.getElementById("question_class").value;
        var subject_1 = document.getElementById("question_subject").value;
        var exam_type_1 = document.getElementById("question_exam_type").value;
        var date_1 = document.getElementById("current_date").value;
        var language = document.getElementById("question_exam_language").value;
        var uni_id = class_1 + "_" + subject_1 + "_" + exam_type_1 + "_" + date_1 + "_" + language;
        document.getElementById("paper_unique_id1").value = uni_id;
        $('#paper_unique_id').hide();
        $('#paper_unique_id1').show();
        $('#question_class').show();
        $('#question_class').prop('required', true);
        $('#question_class1').hide();
        $('#question_subject').show();
        $('#question_subject').prop('required', true);
        $('#question_subject1').hide();
        $('#question_exam_type').show();
        $('#question_exam_type').prop('required', true);
        $('#question_exam_type1').hide();
        $('#question_exam_language').show();
        $('#question_exam_language').prop('required', true);
        $('#question_exam_language1').hide();
    } else {
        $('#paper_unique_id').show();
        $('#paper_unique_id1').hide();
        $('#question_class1').show();
        $('#question_class').hide();
        $('#question_class').prop('required', false);
        $('#question_subject1').show();
        $('#question_subject').hide();
        $('#question_subject').prop('required', false);
        $('#question_exam_type1').show();
        $('#question_exam_type').hide();
        $('#question_exam_type').prop('required', false);
        $('#question_exam_language1').show();
        $('#question_exam_language').hide();
        $('#question_exam_language').prop('required', false);
    }
}

function for_details(value) {
    if (value != '') {
        $.ajax({
            address: "POST",
            url: access_link + "exam_paper_setter/ajax_get_details.php?value=" + value + "",
            cache: false,
            success: function(detail) {
                var str = detail;
                var res = str.split('|?|');
                $('#question_class1').val(res[2]);
                $('#question_subject1').val(res[3]);
                $('#question_exam_type1').val(res[1]);
                $('#question_exam_language1').val(res[4]);
            }
        });
    } else {
        $('#question_class1').val('');
        $('#question_subject1').val('');
        $('#question_exam_type1').val('');
        $('#question_exam_language1').val('');
    }
}

$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
        url: access_link + "exam_paper_setter/instant_go_to_paper_setter_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'red');
                post_content('exam_paper_setter/instant_set_paper', res[2]);
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Paper Setter Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('set-paper')}}"><i class="fa fa-dashboard"></i> Paper Setter Management</a></li>
        <li class="active">Set Paper</li>
    </ol>
</section>
<form method="post" enctype="multipart/form-data" id='my_form'>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements disabled -->
            <div class="box box-primary my_border_top">
                <div class="box-header with-border ">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <!------------------------------------------------Start Registration form--------------------------------------------------->
                <div class="box-body">

                    <div class="col-md-12">

                        <div class="col-md-2">
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Old New</label>
                                <select name="paper_type" id="paper_type" class="form-control"
                                    onchange="create_unique_id();" required>
                                    <option value="old">Old</option>
                                    <option value="new">New</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group" id="text_select">
                                <label>Unique Id</label>
                                <input type="text" name='paper_unique_id1' id="paper_unique_id1" class='form-control'
                                    style="display:none;" readonly />
                                <input type="hidden" id="current_date" value="05_12_2022" />
                                <select name='paper_unique_id' class='form-control' id='paper_unique_id'
                                    onchange="for_details(this.value);">
                                    <option value=''>Select</option>
                                    <option value="10TH_Social Science_first_19_04_2020_English">10TH_Social
                                        Science_first_19_04_2020_English</option>
                                    <option value="1ST_computer_objective_25_08_2021_English">
                                        1ST_computer_objective_25_08_2021_English</option>
                                    <option value="1ST_computer_Yearly_18_10_2022_English">
                                        1ST_computer_Yearly_18_10_2022_English</option>
                                    <option value="1ST_English_Annual Exam_19_05_2021_English">1ST_English_Annual
                                        Exam_19_05_2021_English</option>
                                    <option value="1ST_English_first_19_04_2020_English">
                                        1ST_English_first_19_04_2020_English</option>
                                    <option value="1ST_English_Half yearly_07_01_2020_English">1ST_English_Half
                                        yearly_07_01_2020_English</option>
                                    <option value="1ST_English_half yearly_07_04_2022_English">1ST_English_half
                                        yearly_07_04_2022_English</option>
                                    <option value="1ST_English_Half yearly_24_02_2020_English">1ST_English_Half
                                        yearly_24_02_2020_English</option>
                                    <option value="1ST_English_Half yearly_28_06_2022_English">1ST_English_Half
                                        yearly_28_06_2022_English</option>
                                    <option value="1ST_English_yearly_25_09_2021_English">
                                        1ST_English_yearly_25_09_2021_English</option>
                                    <option value="1ST_Hindi _FIRST_TERM_EXAM_2022_04_10_2022_Hindi">1ST_Hindi
                                        _FIRST_TERM_EXAM_2022_04_10_2022_Hindi</option>
                                    <option value="1ST_Hindi _Half yearly_08_01_2020_English">1ST_Hindi _Half
                                        yearly_08_01_2020_English</option>
                                    <option value="1ST_Mathematics_Annual exam_19_05_2021_English">
                                        1ST_Mathematics_Annual exam_19_05_2021_English</option>
                                    <option value="1ST_Mathematics_Half yearly_10_01_2020_English">1ST_Mathematics_Half
                                        yearly_10_01_2020_English</option>
                                    <option value="5TH_English_first_19_04_2020_English">
                                        5TH_English_first_19_04_2020_English</option>
                                    <option value="5TH_English_VBVVN_21_03_2021_English">
                                        5TH_English_VBVVN_21_03_2021_English</option>
                                    <option value="6TH_Hindi _Test_19_03_2020_English">6TH_Hindi
                                        _Test_19_03_2020_English</option>
                                    <option value="7TH_Mathematics_QUT._01_12_2022_English">
                                        7TH_Mathematics_QUT._01_12_2022_English</option>
                                    <option value="8TH_Mathematics_अर्द्धवार्षिक परीक्षा _26_02_2020_Hindi">
                                        8TH_Mathematics_अर्द्धवार्षिक परीक्षा _26_02_2020_Hindi</option>
                                    <option value="LKG_Animal Husbandry And Poultary Farm_ह्ह्ह_04_04_2020_Hindi">
                                        LKG_Animal Husbandry And Poultary Farm_ह्ह्ह_04_04_2020_Hindi</option>
                                    <option value="LKG_Animal Husbandry And Poultary Farm__04_04_2020_Hindi">LKG_Animal
                                        Husbandry And Poultary Farm__04_04_2020_Hindi</option>
                                    <option value="LKG_EVS_hgfhdfhdfh_17_10_2022_English">
                                        LKG_EVS_hgfhdfhdfh_17_10_2022_English</option>
                                    <option value="NURSERY_Cleanliness_abc_07_06_2022_Hindi">
                                        NURSERY_Cleanliness_abc_07_06_2022_Hindi</option>
                                    <option value="NURSERY_Cleanliness_vcv_24_04_2020_Hindi">
                                        NURSERY_Cleanliness_vcv_24_04_2020_Hindi</option>
                                    <option value="NURSERY_Computer_abc_05_04_2021_English">
                                        NURSERY_Computer_abc_05_04_2021_English</option>
                                    <option value="NURSERY_Computer_wwwww_26_04_2020_English">
                                        NURSERY_Computer_wwwww_26_04_2020_English</option>
                                    <option value="NURSERY_English_FA1 exam_21_02_2020_English">NURSERY_English_FA1
                                        exam_21_02_2020_English</option>
                                    <option value="NURSERY_English_FA2 exam_21_02_2020_English">NURSERY_English_FA2
                                        exam_21_02_2020_English</option>
                                    <option value="NURSERY_English_fa_14_04_2022_English">
                                        NURSERY_English_fa_14_04_2022_English</option>
                                    <option value="NURSERY_English_term_21_02_2020_English">
                                        NURSERY_English_term_21_02_2020_English</option>
                                    <option value="NURSERY_English_Test exam 1_18_06_2021_English">NURSERY_English_Test
                                        exam 1_18_06_2021_English</option>
                                    <option value="NURSERY_Mathematics_New exam_28_02_2020_English">
                                        NURSERY_Mathematics_New exam_28_02_2020_English</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="col-md-2">
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Class</label>
                                <input type="text" name="question_class1" id="question_class1" class='form-control'
                                    readonly />
                                <select name="question_class" style="display:none;" id="question_class"
                                    class="form-control" onchange="for_subject(this.value);create_unique_id();">
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
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="question_subject1" id="question_subject1" class='form-control'
                                    readonly />
                                <select name="question_subject" style="display:none;" class="form-control"
                                    id="question_subject" onchange="create_unique_id();">
                                    <option value="">Select Subject</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 ">

                        <div class="col-md-2">
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Exam Type</label>
                                <input type="text" name="question_exam_type1" id="question_exam_type1"
                                    class='form-control' readonly />
                                <input type="text" name="question_exam_type" style="display:none;"
                                    id="question_exam_type" class='form-control' oninput="create_unique_id()" ; />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Language</label>
                                <input type="text" name="question_exam_language1" id="question_exam_language1"
                                    class='form-control' readonly />
                                <select name="question_exam_language" style="display:none;" id="question_exam_language"
                                    class="form-control" onchange="create_unique_id();">
                                    <option value="Hindi">Hindi</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <br />
                    <div class="col-md-12">
                        <center><button type="submit" name="submit" class="btn btn-success">Submit</button></center>
                    </div>
                    <div class="col-md-12">
                        &nbsp;
                    </div>










                </div>
                <!---------------------------------------------End Registration form--------------------------------------------------------->
                <!-- /.box-body -->
            </div>
        </div>
    </section>
    <!-- / All Section -->
</form>

@include('common.footer')