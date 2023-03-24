@include('common.header')
@include('common.navbar')

<!----------------------12th script------------------->
<script>
function myContact(id2) {
    var total_sms = 0;
    var selected = [];
    var student_name = [];
    $('.checked_contact').each(function() {
        if ($(this).is(":checked")) {
            var hidden_value = $(this).val();
            var hidden_value1 = hidden_value.split("|?|");
            var hidden_value2 = hidden_value1[0];

            student_name.push(hidden_value2);
            selected.push($(this).val());
            total_sms++;
        }
    });
    $("#total_sms_count").html('Count:' + total_sms);
    document.getElementById('student_detail').value = student_name;
    document.getElementById('student_detail_hidden').value = selected;
    var b = 0;
    $('.check_' + id2).each(function() {
        if ($(this).is(":checked")) {
            b = 1;

        }
    });
    if (b == 0) {
        $('#checkbox_' + id2).prop('checked', false);
    } else {
        $('#checkbox_' + id2).prop('checked', true);
    }

}

function checkdAll(value1) {
    if ($('#checkbox_' + value1).prop('checked')) {
        $('.check_' + value1).each(function() {
            $('.check_' + value1).prop('checked', true);
        });

    } else {
        $('.check_' + value1).prop('checked', false);
    }
    myContact(value1);
}
</script>
<!----------------------12th script------------------->
<!----------------------Search box ------------------->

<script type="text/javascript">
$("#my_form").submit(function(e) {
    e.preventDefault();
    $("#loadess").html(loader_div);
    var formdata = new FormData(this);
    $.ajax({
        url: access_link + "sms/notification_sender.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new("Successfully Sent !!!", "green");
                get_content('sms/student_notification');
            }
        }
    });
});
</script>
<!----------------------Search box ------------------->

<section class="content-header">
    <h1>
        SMS Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/sms_panel')}}"><i class="fal fa-comment-alt"></i> SMS</a></li>
        <li class="active">Student Notification</li>
    </ol>
</section>




<!---******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<section class="content">
    <div class="row" id="loadess">

    </div>
    <div class="row">

        <div class="col-md-1"> </div>
        <div class="col-md-5">
            <h3>Total Student Having Android App:<span style='color:red'> 28</span></h3>



            <div class="col-md-12">
                <div class="box box-default collapsed-box my_border_top" style="border-radius:20px;">
                    <div class="box-header with-border ">
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_1" onclick="checkdAll(1);"
                                value="">&nbsp;&nbsp;&nbsp;NURSERY[A]<span style='color:red'>[Student Count: 8]</span>
                        </h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <table>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact"
                                        value="raman|?|2200770|?|NURSERY|?|cQfaVCyRTb6pCuy_bgRX75:APA91bGVUKR2Vdm3ePfaYbsiYF4wIO_tkyOveB_RjyADNtnGzlZLCiaetT1XMKklpweADd__dLkhkeWYLxrvWeyOvNhYeKaDxc23_wbNcaLveyTN1w1CEh7Ju_AR30mUCXSQ9XQoRqZ2">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> raman <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact"
                                        value="yashi|?|2200782|?|NURSERY|?|fuOJF_fjT7mVEViaXjeSJX:APA91bEJpRB_QBKRwXn1k2rqR4o4hUVoWABhDEzYHtNvbd84Nwys00VfQEIYiS3R4IsOwgx96s4tSlHaOOj_Ehva1yVXoPK-Qu32Ig5SU0HYYhldlw9M5v08yYpn_eRzkooKcMtXkfAR">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> yashi <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact"
                                        value="Druwa Ganesh Chaudhari|?|2200795|?|NURSERY|?|dFKA796eROGORWB0R36D0_:APA91bEM2kWSnOPp2IFiCGVyOGYKPMyrAH2znEDGem5H0mwgapjI83vpGGRKEdChI9b4oifDokaPHsGVgHE_MPDYkj-z73PIsIOQRKaYnVDaH9ZKqhfydwbjiIQa0mtnfj795hXCenZb">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Druwa Ganesh
                                    Chaudhari <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact"
                                        value="SHIVANSH RAWAT|?|2200800|?|NURSERY|?|dNNhtv9uTCWR2SNJn5C1f1:APA91bFjhe1uYtuBMrhJ4rW_hX7UT2shEXLJietVZhdPIOXnLjK95zp_pSzE1SQqXTuHbQeDLFphrN1BMVWlPtEEOHXNHaMsGuAJiGI4VeFDlo80y8_YcYcuGI6vkD_N065AnETjmnN0">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> SHIVANSH
                                    RAWAT <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact"
                                        value="पंकज कुमार|?|2200884|?|NURSERY|?|cQVEnHfoTwaapwzfsIRuh_:APA91bHKQF9PJ5wQ7RK1s9PQF5HT9dAuS4chwlrpT54t-xk7hVTr9f9lBuhM8nXc9sM4IpT2CJXJHeF_jRHAG6ftRNbUxv1o_Aqj_lNiypFTrbUmRaVyX5V7X_MQmGNakOv8aBR8Igtk">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> पंकज कुमार
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact"
                                        value="Aamna Hussain|?|2201009|?|NURSERY|?|c6kFXszDSmS_urgBlIFaio:APA91bEpp6fwyo28DS4_LNW9KLSspthc4MWpPRjT7FKOcNTUZxleLrL2PLgWLIMM8mhK8P5uFyr4JObuagBfSJGWHP6TpIBXfbCy5qQPaHRGKqPnw_CSqVTodKGXYr-X_DJfOREcRBPO">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Aamna Hussain
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact"
                                        value="Kartik Nishad|?|2201041|?|NURSERY|?|d6uNTp2vTpyfHNYfHX5ssq:APA91bEDQwOUUEjEx2G302hoEcyupnyrtSeneF7croG-8xg7KrW9JtRVMhcNOJUX9beLthAOl78xN0brtSrF63Eb99gNriKAHHZM5kobsFeejYC-9sJ-xxDq27Z2ItzSGbuFnIvaclzc">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Kartik Nishad
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact"
                                        value="Rahul Kumar|?|2201086|?|NURSERY|?|efk7P_TeSEKSso4uBEuqTy:APA91bHjXIOHJi854Hc5dFG9Nt5INN4iSa_zVnySPN-QTgwa1RXfqS_H9ToRGDO6bSNE8FCdOFJk1kzTuSJ6Gm2_Tay79-2ZzeC8reuf_eGz17XCZPbvFpUJeBiwQuuoc4Td8XoHIuFM">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Rahul Kumar
                                    <br>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>


            <div class="col-md-12">
                <div class="box box-default collapsed-box my_border_top" style="border-radius:20px;">
                    <div class="box-header with-border ">
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_6" onclick="checkdAll(6);"
                                value="">&nbsp;&nbsp;&nbsp;LKG[A]<span style='color:red'>[Student Count: 6]</span></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <table>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact"
                                        value="xghkjh|?|2200720|?|LKG|?|ftDguEe-QoSFhOougy9Xfl:APA91bGBKxITtF2rDWs37WLZe2p6USENgjvdpOI1xrjbZBjMkmfLHzWrO31Di2k3YUB9bPPnPNaGNHxi02llMKSae5TK93Zrr2tdzmKAAFZ1En5yoVgiakBkWZDtkdLCAVqN7BWEi6yv">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> xghkjh <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact"
                                        value="sanam karn|?|2200730|?|LKG|?|fUyjynnOQg-WFc7NPY7TE2:APA91bGb6bq9-7GRQq94wnzodiZS57gXfkHeme-H81zUsHo2bTs89DInb4okH2nO8ZKQ98iRhEUbWUFXYWeV9w_kkSVSfFlXYa3_hYPO6HcqyfqBNR2hHYJgNStz-7ThetSQKAIWs9rc">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> sanam karn
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact"
                                        value="Vaishnavi Thakur|?|2200747|?|LKG|?|em-plRH2SWezUOhgyMbIi4:APA91bGCH6BgfmdwjKUra3XrPqT1GqdZhCtkuVxj1gtjGXnTfxzppVEMZq6bY4x_Bm95UQu0M84QRtV3B77XsvAohm23_N4H_Q71ziTuTjTQJAvy_oF0hGtDV-d8vxhhL7eDml2kDthn">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Vaishnavi
                                    Thakur <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact"
                                        value="Urvi sen|?|2200752|?|LKG|?|ekC7xhcZQWqjDbWM2wklkZ:APA91bGvXTBfNWTGYGC67zCsUONsiCkKEUw6yylfpRWnD3-6DjUtGwsdwFz2BoxE6cpsSWcV8AQ0Vw9TkPkKtAfQ6yABmJoJCAUiF-YnfF81aHGK3Q1Sg6G68yUDnyArB196JPSKMI1_">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Urvi sen <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact"
                                        value="INAMUR RAHMAN|?|2200759|?|LKG|?|fxOiwt0cTkixvtGWkH4Gvr:APA91bEWTB5kGYhLe3xcBIQcvcUZXWAGHl5YzR-A0E-0Tg0u6dd40QANaSBTs_lfJrq36MObnW8aK8IyODaL7B0XcF1E8WDKSYvP-YZHy5YH5XlLwhOEQ9y4cexcIkxfWLFOnpno7KQA">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> INAMUR RAHMAN
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact"
                                        value="rakesh|?|2200761|?|LKG|?|de7m36eCSd-v4nb1laMkm3:APA91bGxeI58XOn8XyYTTFFwbxLgA3m1a3pt5C_1ee0qtqmphdNRn3HyYAGtxWZF7Q-JGJOo4tAw9KcMt8ejP__e4bQX48bJowDzrHDZctgMx6PjRuV_tasD7lkPd0ub2iXiFtr6I7l7">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> rakesh <br>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>


            <div class="col-md-12">
                <div class="box box-default collapsed-box my_border_top" style="border-radius:20px;">
                    <div class="box-header with-border ">
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_8" onclick="checkdAll(8);"
                                value="">&nbsp;&nbsp;&nbsp;UKG[A]<span style='color:red'>[Student Count: 14]</span></h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <table>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="SK Thakur|?|2200644|?|UKG|?|dOqkFC4DTlmtgIHx2z_N9O:APA91bHCmqHFnPM2spLznOomhWTYQi_4IZlY_E1S-4Sn7ZLSZO49i9Jl9lQkMRle5MBBRKe4xcl3uv9uYb71Itlu3uUDd4rrVnTNj0Q09XE_2jKSi5WyNDNnyl60bG6s9cAdPQld9jD_">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> SK Thakur
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="Jay Sharma|?|2200646|?|UKG|?|evn1oHjUSJG-N7-mf5FVKx:APA91bFa5JXKIWE8aM11DWMaxclHyQuqvQrlJDY7TKK5Vn7kR57eDi_8LRBCebNjyZq6VjnlYn3ydjMv7ejjDrXMP-SYa5jY3vQtwrbZy3STDeMlUpox-pu9ir4OHnk4-TrbUBhEBqnf">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Jay Sharma
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="Sikdar|?|2200647|?|UKG|?|dOqkFC4DTlmtgIHx2z_N9O:APA91bHCmqHFnPM2spLznOomhWTYQi_4IZlY_E1S-4Sn7ZLSZO49i9Jl9lQkMRle5MBBRKe4xcl3uv9uYb71Itlu3uUDd4rrVnTNj0Q09XE_2jKSi5WyNDNnyl60bG6s9cAdPQld9jD_">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Sikdar <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="Bijoy|?|2200648|?|UKG|?|ebvuMMXOSqWq7E1eFSL_fX:APA91bHvk1Ojj99vVAwwxuve3RTadTREphFZOYJooJDODefoxpdiNplhcdfbXcjJRs3w7yVyrYkZXjgofjMieZIwlI2d0oWxSl9fvWgK8s18qzKg8wnEYqPrJe90hMyVTCTImyEmsY2x">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Bijoy <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="RIYA DAS|?|2200651|?|UKG|?|dnfRINrZSfuwxJGQu8SoY1:APA91bGdlqk0n62xCGJU9FD9zGSnXXSyOSDZjSFDE3kdIeFl6Ej8_M6RdNhwPZpD-6uTXlOqPgbQdWXookkZEKYk0Ia175uV7_lFJMDYYUoiNpS94_8rQF5rhz-ayhdvR0cQZBnPdNlm">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> RIYA DAS <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="Radha Kumari|?|2200656|?|UKG|?|dOqkFC4DTlmtgIHx2z_N9O:APA91bHCmqHFnPM2spLznOomhWTYQi_4IZlY_E1S-4Sn7ZLSZO49i9Jl9lQkMRle5MBBRKe4xcl3uv9uYb71Itlu3uUDd4rrVnTNj0Q09XE_2jKSi5WyNDNnyl60bG6s9cAdPQld9jD_">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Radha Kumari
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="ARPAN NANDEWAR|?|2200657|?|UKG|?|dOqkFC4DTlmtgIHx2z_N9O:APA91bHCmqHFnPM2spLznOomhWTYQi_4IZlY_E1S-4Sn7ZLSZO49i9Jl9lQkMRle5MBBRKe4xcl3uv9uYb71Itlu3uUDd4rrVnTNj0Q09XE_2jKSi5WyNDNnyl60bG6s9cAdPQld9jD_">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> ARPAN
                                    NANDEWAR <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="Bhavesh Arvind Padvi|?|2200666|?|UKG|?|d0simH8pSBmvdjpl9LFsEn:APA91bH_n1F6r6zJrADFdWOX6nFJ3-eBHF5xK_e3PxoOsLTrYDg7HFih6EBSP7L1CdqUPoWfW908ePuPjWyuSTxnuJAjunee1MlFnHo4zqw6DaKUrhIrmolKIxNNre1Aw10RNaTgN_3M">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Bhavesh
                                    Arvind Padvi <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="GGDFGFDGFDG|?|2200681|?|UKG|?|dOqkFC4DTlmtgIHx2z_N9O:APA91bHCmqHFnPM2spLznOomhWTYQi_4IZlY_E1S-4Sn7ZLSZO49i9Jl9lQkMRle5MBBRKe4xcl3uv9uYb71Itlu3uUDd4rrVnTNj0Q09XE_2jKSi5WyNDNnyl60bG6s9cAdPQld9jD_">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> GGDFGFDGFDG
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="Ravi|?|2200691|?|UKG|?|dRY99OTTT9-Badf44ROyqh:APA91bGEnXF3dByhvN3SiDqNTgf0fxw3wn-GLHZXvrO9Re3A2MGNUQZQoc3mIJEkPbzENpLGjBC7SbRMdj3U72djMMrzwohxsCRv7gAZePxkyPhngkMbdZ1iDI8-fzR4TEVVYOSxfuML">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> Ravi <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="RAHUL|?|2200693|?|UKG|?|c0is2ZY2QBS6qOkW8dNK5d:APA91bEraMTpXU931wWw3HQuU055RXeWp0BPQbjDhIipwfuKb_UApUPTnZAfWEVbSWyXhDxyAvwi6anr2mfDbGchuUFaCXyCNA3I6osj34MyjCsk-dQQSZ-IyGZNXl4Gi2KDO-3rESoR">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> RAHUL <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="kunal jha|?|2200707|?|UKG|?|ftDguEe-QoSFhOougy9Xfl:APA91bGBKxITtF2rDWs37WLZe2p6USENgjvdpOI1xrjbZBjMkmfLHzWrO31Di2k3YUB9bPPnPNaGNHxi02llMKSae5TK93Zrr2tdzmKAAFZ1En5yoVgiakBkWZDtkdLCAVqN7BWEi6yv">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> kunal jha
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="vishal jha|?|2200710|?|UKG|?|f4NTODI2TMyGd0FGwqicMx:APA91bGtFye6LAljpeOWODzBRg_KuPBQiLy7Yvu3cIeSd4nzdXuzzRcOG9YznM9Plv5ozSmXhjcfabLUwDflyzWojXGabwECyXIJcOv-iyJTGPc25Lehge2Ch24gpCUdGYO7KAE1oPqX">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> vishal jha
                                    <br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact"
                                        value="SANJAY KUMAR|?|2200724|?|UKG|?|eF7CG1IoRziqEcoDtYxgET:APA91bGIB-JaLTJ7WCa075VdnDSwVrcziLkRUxDNpstAOnKJjXUO4yp40XYk1grKH__GyPzk8m13M_Sgu1aFfeKu5H07-95Mi6Hie3R_YhRpFQHk24gqAatq7OSRU1zD5QGoiw4dvmi6">&nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-android" style="color:green;" aria-hidden="true"></i> SANJAY KUMAR
                                    <br>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <input type="hidden" name="" id="check_id1" value="33">
            <!---------------------------------Nursery End------------------------------------->


        </div>


        <div class="col-md-5">
            <div class="box box-info my_border_top">
                <div class="box-header with-border">

                    <div class="col-lg-4">
                        <h5 class="box-title" style="float:left;color:teal;font-size:15px">Balance:</h5><br>
                        <h5 id="total_sms_count">Count:0</h5>
                    </div>

                </div>
                <form method="post" enctype="multipart/form-data" id="my_form">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Student</label>

                            <div class="col-sm-10">
                                <input type="textbox" class="form-control" id="student_detail" name="student_detail"
                                    readonly>
                                <input type="textbox" class="form-control" id="student_detail_hidden"
                                    name="student_detail_hidden" style="display:none;">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Title</label>

                            <div class="col-sm-10">
                                <input type="textbox" class="form-control" id="title" name="title" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Sms Content</label>

                            <div class="col-sm-10">

                                <textarea rows="6" cols="100" id="message_box" onKeyUp="countChar(this.value)"
                                    name="content" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">

                                <label>
                                    <div id="count"></div>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <center><input type="submit" name="submit1" value="Send"
                                    class="btn btn-primary my_background_color" /></center>
                        </div>

                    </div>


                </form>
            </div>

        </div>
        <div class="col-md-1"> </div>

    </div>


</section>

<script>
$("[data-widget='collapse']").click(function() {
    //Find the box parent........
    var box = $(this).parents(".box").first();
    //Find the body and the footer
    var bf = box.find(".box-body, .box-footer");
    if (!$(this).children().hasClass("fa-plus")) {
        $(this).children(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
        bf.slideUp();
    } else {
        //Convert plus into minus
        $(this).children(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
        bf.slideDown();
    }
});
</script>
<script>
$(function() {
    $('.select2').select2()
});
</script>
@include('common.footer')