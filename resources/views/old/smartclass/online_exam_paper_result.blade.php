@include('common.header')
@include('common.navbar')


<script>
function for_paper_reset(paper_code, student_id) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/online_exam_paper_reset_check.php?paper_code=" + paper_code +
            "&student_id=" + student_id,
        cache: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete!!!', 'green');

                post_content('smartclass/online_exam_paper_result', 'paper_code=' + paper_code);
            }
        }
    });

}

function for_paper_re_evaluation(paper_code) {
    $.ajax({
        type: "POST",
        url: access_link + "smartclass/online_exam_re_evaluate.php?paper_code=" + paper_code,
        cache: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete!!!', 'green');

                post_content('smartclass/online_exam_paper_result', 'paper_code=' + paper_code);
            }
        }
    });

}

function set_detail(value) {
    post_content('smartclass/online_exam_paper_result', 'paper_code=' + value);
}
</script>
<script>
function for_print()


{
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>
<section class="content-header">
    <h1>
        Online Exam
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li><a href="{{url('/online-exam')}}"><i class="fa fa-dashboard"></i>Online Exam</a></li>
        <li class="active">Paper List</li>
    </ol>
</section>
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border ">
            <h3 class="box-title">Online Exam Paper List</h3>
        </div>
        <br>
        <div class="box-body ">
            <div class="col-md-12 ">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Paper Code</label>
                        <select class="form-control select2" onchange="set_detail(this.value);" id="paper_code"
                            name="paper_code">
                            <option value="">Select Paper</option>
                            <option value="3rd_english_31102022104035">Hindi[3rd_english_31102022104035]</option>
                            <option value="lkg_english_05082022041651">Test -1[lkg_english_05082022041651]</option>
                            <option value="5th_mathematics_13072022112154">maths[5th_mathematics_13072022112154]
                            </option>
                            <option value="12th_ag bio_20062022123639">baldev[12th_ag bio_20062022123639]</option>
                            <option value="8th_hindi _30042022125847">ddf[8th_hindi _30042022125847]</option>
                            <option value="12th_physics_10032022065357">Test -22[12th_physics_10032022065357]</option>
                            <option value="12th_physics_10032022065906">Test -11[12th_physics_10032022065906]</option>
                            <option value="12th_physics_10032022050655">test-1[12th_physics_10032022050655]</option>
                            <option value="nursery_english_03022022024253">halfyearly[nursery_english_03022022024253]
                            </option>
                            <option value="4th_english_19012022125622">English[4th_english_19012022125622]</option>
                            <option value="10th_hindi _22122021113720">122[10th_hindi _22122021113720]</option>
                            <option value="7th_hindi _20092021121309">hindi kkavya[7th_hindi _20092021121309]</option>
                            <option value="1st_english_13092021055504">enlish[1st_english_13092021055504]</option>
                            <option value="10th_english_02092021113413">hdgh[10th_english_02092021113413]</option>
                            <option value="5th_english_02082021094437">halfyear[5th_english_02082021094437]</option>
                            <option value="nursery_english_31072021034112">halfyear [nursery_english_31072021034112]
                            </option>
                            <option value="5TH_English_28072021113637">testing[5TH_English_28072021113637]</option>
                            <option value="NURSERY_Mathematics_21072021031203">dummy[NURSERY_Mathematics_21072021031203]
                            </option>
                            <option value="NURSERY_English_21072021025950">Testing[NURSERY_English_21072021025950]
                            </option>
                            <option value="NURSERY_English_21072021024846">halfyear [NURSERY_English_21072021024846]
                            </option>
                            <option value="5TH_English_01072021055328">halfyear [5TH_English_01072021055328]</option>
                            <option value="__24052021023928">test[__24052021023928]</option>
                            <option value="__21042021104559">ut[__21042021104559]</option>
                            <option value="NURSERY_All_21042021102056">
                                NURSERY_All_21042021101346[NURSERY_All_21042021102056]</option>
                            <option value="NURSERY_All_21042021101346">eng[NURSERY_All_21042021101346]</option>
                            <option value="1ST_English_15042021120619">english[1ST_English_15042021120619]</option>
                            <option value="NURSERY_Computer_14042021115611">unit test-3[NURSERY_Computer_14042021115611]
                            </option>
                            <option value="NURSERY_ENGLISH_05042021110030">UT 1[NURSERY_ENGLISH_05042021110030]</option>
                            <option value="NURSERY_All_05042021114918">ENLISH[NURSERY_All_05042021114918]</option>
                            <option value="__03042021071805">Hindi[__03042021071805]</option>
                            <option value="1ST_English_02032021094507">Aks[1ST_English_02032021094507]</option>
                            <option value="__22022021025026">enlish[__22022021025026]</option>
                            <option value="12TH_Physics_12022021092818">physics[12TH_Physics_12022021092818]</option>
                            <option value="1ST_Hindi _10022021024259">Hindi[1ST_Hindi _10022021024259]</option>
                            <option value="LKG_PROJECT WORK (ENGLISH)_31012021015446">hbjb[LKG_PROJECT WORK
                                (ENGLISH)_31012021015446]</option>
                            <option value="UKG_Regularity_24012021075208">mid term[UKG_Regularity_24012021075208]
                            </option>
                            <option value="UKG_Cleanliness_21012021112005">fddsf[UKG_Cleanliness_21012021112005]
                            </option>
                            <option value="NURSERY_Computer_04012021013530">unit test[NURSERY_Computer_04012021013530]
                            </option>
                            <option value="10TH_Mathematics_05122020111837">Maths[10TH_Mathematics_05122020111837]
                            </option>
                            <option value="10TH_Mathematics_05122020111837">Maths[10TH_Mathematics_05122020111837]
                            </option>
                            <option value="9TH_English_14112020090834">ONLINE TEST-3[9TH_English_14112020090834]
                            </option>
                            <option value="7TH_All_14112020091029">ONLINE TEST-2[7TH_All_14112020091029]</option>
                            <option value="7TH_All_28102020103445">polity[7TH_All_28102020103445]</option>
                            <option value="LKG_Mathematics_12092020115929">Maths 1 to
                                100[LKG_Mathematics_12092020115929]</option>
                            <option value="1ST_English_05092020113638">ENGLISH[1ST_English_05092020113638]</option>
                            <option value="NURSERY_Computer_22072020014654">Test 1[NURSERY_Computer_22072020014654]
                            </option>
                            <option value="8TH_Mathematics_Maths_09-06-2020_english">
                                Maths[8TH_Mathematics_Maths_09-06-2020_english]</option>
                            <option value="2ND_All_Urdu_31-05-2020_english">Urdu[2ND_All_Urdu_31-05-2020_english]
                            </option>
                            <option value="__dsdffdf_28-05-2020_hindi">dsdffdf[__dsdffdf_28-05-2020_hindi]</option>
                            <option value="1ST_All_English_20-05-2020_english">
                                English[1ST_All_English_20-05-2020_english]</option>
                            <option value="__english_05-05-2020_hindi">english[__english_05-05-2020_hindi]</option>
                            <option value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short
                                paper_01-05-2020_hindi]</option>
                            <option value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short
                                paper_01-05-2020_hindi]</option>
                            <option value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short
                                paper_01-05-2020_hindi]</option>
                            <option value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short
                                paper_01-05-2020_hindi]</option>
                            <option value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short
                                paper_01-05-2020_hindi]</option>
                            <option value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short
                                paper_01-05-2020_hindi]</option>
                            <option value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short
                                paper_01-05-2020_hindi]</option>
                            <option value="NURSERY_All_testing_">testing[NURSERY_All_testing_]</option>
                            <option value="NURSERY_All_test_29-">test[NURSERY_All_test_29-]</option>
                            <option value="NURSERY_Cleanliness_">hjhk[NURSERY_Cleanliness_]</option>
                            <option value="Paper-101">History Paper[Paper-101]</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>

@include('common.footer')



<script>
$(function() {
    $(".select2").select2();
})
</script>
<script>
function exportTableToExcel(tableID, filename = '') {
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}
</script>