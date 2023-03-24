<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>School Management Software </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/icon" href="" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <link rel="stylesheet" href="{{url('assests/css/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assests/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assests/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{url('assests/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{url('assests/css/morris.css')}}">
    <link rel="stylesheet" href="{{url('assests/css/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{url('assests/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assests/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{url('assests/css/select2.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <meta name="_token" content="{{ csrf_token() }}">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

    <style>
    .select2-selection {
        height: auto !important;
    }

    input {
        border: 1px solid green !important;
        border-radius: 5px !important;
        color: #000;
    }

    select {
        border: 1px solid green !important;
        border-radius: 5px !important;
    }

    input:focus {
        border: 1px solid red !important;
        background-color: #CCFFFF;
        color: #f00;
    }
    </style>

    <style>
    .load-bar {
        position: relative;
        margin-top: 0px;
        width: 100%;
        height: 3px;
        background-color: #34fa2c;
    }

    .bar {
        content: "";
        display: inline;
        position: absolute;
        width: 0;
        height: 100%;
        left: 50%;
        text-align: center;
    }

    .bar:nth-child(1) {
        background-color: #fa4733;
        animation: loading 1s linear infinite;
    }

    .bar:nth-child(2) {
        background-color: #3078f7;
        animation: loading 1s linear 300ms infinite;
    }

    .bar:nth-child(3) {
        background-color: #45fa2c;
        animation: loading 1s linear 500ms infinite;
    }

    /* @keyframes loading {
    from {left: 50%; width: 0;z-index:100;}
    33.3333% {left: 0; width: 100%;z-index: 10;}
    to {left: 0; width: 100%;}
} */
    input {
        border: 1px solid green !important;
        border-radius: 5px !important;
        color: #000;
    }

    select {
        border: 1px solid green !important;
        border-radius: 5px !important;
    }

    input:focus {
        background-color: #CCFFFF;
        color: #f00;
    }
    </style>
    <style>
    .lds-roller {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-roller div {
        animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        transform-origin: 40px 40px;
    }

    .lds-roller div:after {
        content: " ";
        display: block;
        position: absolute;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #007bff;
        margin: -4px 0 0 -4px;
    }

    .lds-roller div:nth-child(1) {
        animation-delay: -0.036s;
    }

    .lds-roller div:nth-child(1):after {
        top: 63px;
        left: 63px;
    }

    .lds-roller div:nth-child(2) {
        animation-delay: -0.072s;
    }

    .lds-roller div:nth-child(2):after {
        top: 68px;
        left: 56px;
    }

    .lds-roller div:nth-child(3) {
        animation-delay: -0.108s;
    }

    .lds-roller div:nth-child(3):after {
        top: 71px;
        left: 48px;
    }

    .lds-roller div:nth-child(4) {
        animation-delay: -0.144s;
    }

    .lds-roller div:nth-child(4):after {
        top: 72px;
        left: 40px;
    }

    .lds-roller div:nth-child(5) {
        animation-delay: -0.18s;
    }

    .lds-roller div:nth-child(5):after {
        top: 71px;
        left: 32px;
    }

    .lds-roller div:nth-child(6) {
        animation-delay: -0.216s;
    }

    .lds-roller div:nth-child(6):after {
        top: 68px;
        left: 24px;
    }

    .lds-roller div:nth-child(7) {
        animation-delay: -0.252s;
    }

    .lds-roller div:nth-child(7):after {
        top: 63px;
        left: 17px;
    }

    .lds-roller div:nth-child(8) {
        animation-delay: -0.288s;
    }

    .lds-roller div:nth-child(8):after {
        top: 56px;
        left: 12px;
    }

    @keyframes lds-roller {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>
    
    <style>
    #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #33dd32;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 0;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 0;
            opacity: 0;
        }
    }
    </style>
    <script>
    var loader_div_google =
        "<div class='load-bar'><div class='bar'></div><div class='bar'></div><div class='bar'></div></div>";
    loader_div =
        "<div style='width:100%;' ><center><div class='lds-roller' style='margin-top:200px'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></center></div>";

    function link_verification(cname) {
        if (cname == 'index_content' || cname == 'smartclass/smartclass' || cname == 'attendance/attendance' || cname ==
            'enquiry/enquiry' || cname == 'staff/staff' || cname == 'student/students' || cname == 'account/account' ||
            cname == 'dues/dues' || cname == 'fees/fees' || cname == 'fees_monthly/fees' || cname ==
            'fees_yearly/fees' || cname == 'fees_installmentwise/fees' || cname == 'penalty/penalty' || cname ==
            'certificate/certificate' || cname == 'examination/examination' || cname == 'homework/homework' || cname ==
            'exam_paper_setter/exam_paper_setter' || cname == 'complaint/complaint' || cname == 'sms/sms_panel' ||
            cname == 'time_table/time_table' || cname == 'event_management/event_management' || cname ==
            'holiday/holiday' || cname == 'leave/leave' || cname == 'sports/sports' || cname == 'important/important' ||
            cname == 'downloads/downloads' || cname == 'recycle_bin/recycle_bin' || cname == 'session/session' ||
            cname == 'govt_requirement/govt_requirement' || cname == 'reminder/reminder' || cname ==
            'school_info/school_info' || cname == 'bus/bus' || cname == 'hostel/hostel' || cname == 'library/library' ||
            cname == 'stock/stock' || cname == 'android_app/android_app' || cname == 'user_right/user_right' || cname ==
            'website_management/Notification' || cname == 'gate_pass/gate_pass' || cname ==
            'stock_management/stock_management' || cname == 'stock_management_new/stock_management' || cname ==
            'website_management_new/website_management') {
            return true;
        } else {
            return false;
        }
    }

    function alert_new(content, color) {
        var x = document.getElementById("snackbar");
        x.innerHTML = content;
        x.style.background = color;
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 5000);
    }

    function loader() {
        $("#get_content").html(loader_div);
    }

    function loader_with_id(id) {
        $("#" + id).html(loader_div);
    }

    function loader_with_id_remove(id) {
        $("#" + id).html("");
    }

    function setCookie(cname, cvalue, session_id231) {
        cname.replace("/", "_");
        cname = session_id231 + cname;
        sessionStorage.setItem(cname, cvalue);
    }

    function getCookie(cname, session_id231) {
        cname.replace("/", "_");
        cname = session_id231 + cname;
        var data = sessionStorage.getItem(cname);
        if (data != null) {
            return data;
        } else {
            return "";
        }
    }
    </script>
    <style>
    .load-bar {
        position: relative;
        margin-top: 0px;
        width: 100%;
        height: 3px;
        background-color: #34fa2c;
    }

    .bar {
        content: "";
        display: inline;
        position: absolute;
        width: 0;
        height: 100%;
        left: 50%;
        text-align: center;
    }

    .bar:nth-child(1) {
        background-color: #fa4733;
        animation: loading 1s linear infinite;
    }

    .bar:nth-child(2) {
        background-color: #3078f7;
        animation: loading 1s linear 300ms infinite;
    }

    .bar:nth-child(3) {
        background-color: #45fa2c;
        animation: loading 1s linear 500ms infinite;
    }

    @keyframes loading {
        from {
            left: 50%;
            width: 0;
            z-index: 100;
        }

        33.3333% {
            left: 0;
            width: 100%;
            z-index: 10;
        }

        to {
            left: 0;
            width: 100%;
        }
    }
    </style>
    <input type='hidden' value='English' id="language_change_37">
    <input type='hidden' value='school_software_v1_old' id="school_software_version_id">
    <input type='hidden' value='638b2c609b12a' id="session_id23">
    <input type="hidden" value="" id="hidden_value1" />
    <input type="hidden" value="" id="hidden_value2" />
    <script>
    function WhichButton(event) {
        var url11 = window.location.href;
        var url111 = url11.split('#');
        if (event.button == 2) {
            var length1 = document.getElementsByTagName("a").length;
            for (var v = 0; v < length1; v++) {
                var link1 = document.getElementsByTagName("a")[v].href;
                var link11 = link1.split("'");
                if (link11.length > 1) {
                    var final_url = url111[0] + "#" + link11[1];
                    document.getElementsByTagName("a")[v].href = final_url;
                }
            }
        }
    }
    var session_id231 = document.getElementById('session_id23').value;
    var school_software_version = document.getElementById('school_software_version_id').value;
    var access_link = '../' + school_software_version + '/admin/';
    var css_js_path = '../../' + school_software_version;
    var langue345 = document.getElementById('language_change_37').value;
    var loader_div =
        "<div class='load-bar'><div class='bar'></div><div class='bar'></div><div class='bar'></div></div>";

    function get_content(link) {
        //  $("#get_content").html(loader_div);
        var hidden_value22 = $('#hidden_value2').val();
        if (hidden_value22 == 0) {
            $('#hidden_value1').val('0');
        } else {
            $('#hidden_value2').val('0');
        }
        var data_get = "";
        if (link_verification(link)) {
            data_get = getCookie(link, session_id231);
        }
        if (data_get != '') {
            //   $("#get_content").html(data_get);
            window.location.hash = "#" + link + "?session_id=" + session_id231;
        } else {
            var url2 = "../../" + school_software_version + "/admin/" + link + ".php?session_id=" + session_id231;
            $.get(url2, function(data, status) {
                $("#get_content").html(data);
                if (link_verification(link)) {
                    setCookie(link, data, session_id231);
                }
                window.location.hash = "#" + link + "?session_id=" + session_id231;
            });
        }
    }

    function post_content(link, content) {
        var url21 = content.split('=');
        if (url21[0] == 'session_id') {
            var session_add = "";
        } else {
            var session_add = "session_id=" + session_id231 + "&";
        }
        $("#get_content").html(loader_div);
        var hidden_value22 = $('#hidden_value2').val();
        if (hidden_value22 == 0) {
            $('#hidden_value1').val('0');
        } else {
            $('#hidden_value2').val('0');
        }
        $.ajax({
            type: "POST",
            url: "../../" + school_software_version + "/admin/" + link + ".php?" + session_add + content,
            cache: false,
            success: function(data) {
                $("#get_content").html(data);
                window.location.hash = "#" + link + "?" + session_add + content;
            }
        });
    }
    </script>