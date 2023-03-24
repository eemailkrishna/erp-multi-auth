@include('common.header')
@include('common.navbar')
<script>
function countChar(val) {
    $.ajax({
        address: "POST",
        url: access_link + "sms/ajax_detect_encoding.php?msg=" + val + "",
        cache: false,
        success: function(str) {
            var res = str.split("|?|");
            $("#count").html('Character Count:' + res[1] + ' SMS Count:' + res[2]);
        }
    });
}

function holiday_type_function(value) {
    if (value == "multiple") {
        $("#holiday_to_div").show();
        $("#holiday_from_div").show();
        $("#holiday_reason_div").show();
        $("#template_div").show();
        $("#holiday_from_text").html('Holiday From Date');
    } else if (value == "single") {
        $("#holiday_to_div").hide();
        $("#holiday_from_div").show();
        $("#holiday_from_text").html('Holiday Date');
        $("#holiday_reason_div").show();
        $("#template_div").show();
    } else {
        $("#holiday_to_div").hide();
        $("#holiday_from_div").hide();
        $("#holiday_reason_div").hide();
        $("#template_div").hide();
    }
}

function get_template() {


    var holiday_reason = document.getElementById('holiday_reason').value;
    var holiday_from_date = document.getElementById('holiday_from_date').value;
    var holiday_to_date = document.getElementById('holiday_to_date').value;
    var holiday_type = document.getElementById('holiday_type').value;
    $.ajax({
        address: "POST",
        url: access_link + "sms/message_template.php?template_type=holiday&holiday_reason=" + holiday_reason +
            "&holiday_from_date=" + holiday_from_date + "&holiday_to_date=" + holiday_to_date +
            "&holiday_type=" + holiday_type,
        cache: false,
        success: function(str) {
            $("#sms_template").html(str);
        }
    });
}

get_template();

function validateForm() {
    var total_sms = document.getElementById('contact').value;
    var total_sms1 = total_sms.split(',');
    var total_sms2 = total_sms1.length;
    if (total_sms2 > 1000) {
        alert('You Can Not Send More Then 1000 Sms In Single Shot');
        return false;
    } else {
        return true;
    }
}

function sms_count() {
    var total_sms = document.getElementById('contact').value;
    var total_sms1 = total_sms.split(',');
    var total_sms2 = total_sms1.length;
    if (total_sms == '') {
        total_sms2 = 0;
    }
    $("#total_sms_count").html('contact count:' + total_sms2);
}
</script>


<!----------------------12th script------------------->
<script>
function myContact(id2) {
    var total_sms = 0;
    var selected = [];
    $('.checked_contact').each(function() {
        if ($(this).is(":checked")) {
            selected.push($(this).val());
            total_sms++;
        }
    });
    $("#total_sms_count").html('contact count:' + total_sms);
    document.getElementById('contact').value = selected;
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
function search_contact() {
    var total_sms = 0;
    var selected = [];
    $('#multiple :selected').each(function(i, sel) {
        selected.push($(this).val());
        total_sms++;
    });
    $("#total_sms_count").html('contact count:' + total_sms);
    $('#contact').val(selected);
    $('#contact1').val(selected);
}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);

    $.ajax({
        url: access_link + "sms/sms_send_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert("Successfully Sent !!!");
                get_content('sms/holiday_sms');
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
        <li><a href="{{url('sms/sms_panel')}}"><i class="fal fa-comment-alt"></i> SMS</a></li>
        <li class="active">Holiday SMS</li>
    </ol>
</section>




<!---******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-5">
            <div class="box box-info my_border_top ">
                <div class="box box-default collapsed-box">
                    <table id="search_table">
                        <div class="box-header with-border">

                            <select class="form-control select2" multiple="multiple" id="multiple"
                                data-placeholder=" Search by name..." onchange="search_contact()" style="width: 100%;">

                                <option value="9050653720">ajit (9050653720)</option>

                                <option value="8077194624">REHAN (8077194624)</option>

                                <option value="9135956095">Rajesh Prasad (9135956095)</option>

                                <option value="9876543210">Palak Kumari (9876543210)</option>

                                <option value="8893387594">joy (8893387594)</option>

                                <option value="8601727725">Upen (8601727725)</option>

                                <option value="9456930082">Saurya (9456930082)</option>

                                <option value="1234567890">dummy (1234567890)</option>

                                <option value="9719433442">Akhil (9719433442)</option>

                                <option value="9827185031">Sangita (9827185031)</option>

                                <option value="6">cddf (6)</option>

                                <option value="8269548476">umesh dhakad (8269548476)</option>

                                <option value="1316543133">Humaira (1316543133)</option>

                                <option value="9826390607">ayush koli (9826390607)</option>

                                <option value="">ajay kewat ()</option>

                                <option value="9634569635">Aman (9634569635)</option>

                                <option value="1234567891">raja (1234567891)</option>

                                <option value="8679458246">Nikhil Lodhi (8679458246)</option>

                                <option value="9839458652">RAJESH (9839458652)</option>

                                <option value="9974301792">Vaidik (9974301792)</option>

                                <option value="9571176454">Diviya prajapati (9571176454)</option>

                                <option value="1234567890">Sagar Singh (1234567890)</option>

                                <option value="8942116685">Jidan uddin (8942116685)</option>

                                <option value="9931742369">Avnish kumar (9931742369)</option>

                                <option value="9144555977">umesh (9144555977)</option>

                                <option value="">umesh ()</option>

                                <option value="">umesh ()</option>

                                <option value="9144555977">Anshu (9144555977)</option>

                                <option value="7978988989"> BABALI SAHU (7978988989)</option>

                                <option value="9926621333">श्री (9926621333)</option>

                                <option value="686868606868">Muhammed Adnan (686868606868)</option>

                                <option value="123456">hari (123456)</option>

                                <option value="7571940317">Nidhi Mishra (7571940317)</option>

                                <option value="7498177242">SARIKA SULTANE (7498177242)</option>

                                <option value="1234567890">dummy (1234567890)</option>

                                <option value="9144555977">balveer singh (9144555977)</option>

                                <option value="9144555977">mahira khan (9144555977)</option>

                                <option value="9144555977">sanny (9144555977)</option>

                                <option value="9816870719">rohan sah (9816870719)</option>

                                <option value="9816870719">ishan kumar (9816870719)</option>

                                <option value="9816870719">pankaj patel (9816870719)</option>

                                <option value="9865474758">kirti panday (9865474758)</option>

                                <option value="">lali ()</option>

                                <option value="9825734280">sushant singh (9825734280)</option>

                                <option value="9825734280">saloni (9825734280)</option>

                                <option value="9825734280">suman (9825734280)</option>

                                <option value="836009915">MANVEER SINGH (836009915)</option>

                                <option value="77718853445">RAM PANDEY (77718853445)</option>

                                <option value="7773954846">Mayur Mangesh Padvi (7773954846)</option>

                                <option value="8766578634">Bhavesh Arvind Padvi (8766578634)</option>

                                <option value="7507167517">Nikhil Dinesh Padvi (7507167517)</option>

                                <option value="123456789">Kiran Sharma (123456789)</option>

                                <option value="234567891">Riya Sharma (234567891)</option>

                                <option value="456789123">Meena Verma (456789123)</option>

                                <option value="567891234">Heena Mittal (567891234)</option>

                                <option value="9456312705">Anamika (9456312705)</option>

                                <option value="678912345">Lalu Kumar (678912345)</option>

                                <option value="8084407273">SK Thakur (8084407273)</option>

                                <option value="25585">abcs (25585)</option>

                                <option value="1234567891">Jay Sharma (1234567891)</option>

                                <option value="666">Sikdar (666)</option>

                                <option value="4555">Bijoy (4555)</option>

                                <option value="9816870719">sona (9816870719)</option>

                                <option value="">RIYA DAS ()</option>

                                <option value="1234567890">SUMIT KUMAR (1234567890)</option>

                                <option value="6756789876">Somya (6756789876)</option>

                                <option value="9584669888">MAHEK DASHORE (9584669888)</option>

                                <option value="1234567894">Radha Kumari (1234567894)</option>

                                <option value="7987736568">ARPAN NANDEWAR (7987736568)</option>

                                <option value="8305694069">mahir khan (8305694069)</option>

                                <option value="9977805298">imran khan (9977805298)</option>

                                <option value="9826038592">sajid khan (9826038592)</option>

                                <option value="1234567890">dummy (1234567890)</option>

                                <option value="1234567892">dishika (1234567892)</option>

                                <option value="">Bhavesh Arvind Padvi ()</option>

                                <option value="8052987121">payal (8052987121)</option>

                                <option value="9818273851">SAJAL (9818273851)</option>

                                <option value="8840268435">sarita (8840268435)</option>

                                <option value="8192906306">Komal Gupta (8192906306)</option>

                                <option value="9990008522">Anil Kumar (9990008522)</option>

                                <option value="9998000522">Anil Kapoor Dhoom (9998000522)</option>

                                <option value="">Prashant ()</option>

                                <option value="4987549">RAJ (4987549)</option>

                                <option value="1444411">himanshi (1444411)</option>

                                <option value="9893230765">Ram (9893230765)</option>

                                <option value="8109607707">Prashant Kumar (8109607707)</option>

                                <option value="">GGDFGFDGFDG ()</option>

                                <option value="9695924506">ABHISHEK (9695924506)</option>

                                <option value="9818273851">XYZ (9818273851)</option>

                                <option value="7845123698">abc (7845123698)</option>

                                <option value="">rahul ()</option>

                                <option value="647322824425">Prashant rajak (647322824425)</option>

                                <option value="0123456789"> Kanika (0123456789)</option>

                                <option value="">Ravi ()</option>

                                <option value="">Prashant kumar ()</option>

                                <option value="">RAHUL ()</option>

                                <option value="66666666666">praveen kumar (66666666666)</option>

                                <option value="9038423904">bjkb (9038423904)</option>

                                <option value="1234567892">laxmi (1234567892)</option>

                                <option value="7067633301">AJAY (7067633301)</option>

                                <option value="9918556649">kunal jha (9918556649)</option>

                                <option value="955656">fgdfg (955656)</option>

                                <option value="9999555333">DISHANT PATIDAR (9999555333)</option>

                                <option value="9918556649">vishal jha (9918556649)</option>

                                <option value="9999999995656">Ram (9999999995656)</option>

                                <option value="9918556649">vishal jha (9918556649)</option>

                                <option value="7844411100">Prashant kumar (7844411100)</option>

                                <option value="4545454">AS (4545454)</option>

                                <option value="9813405312">muskan ray (9813405312)</option>

                                <option value="7744447774">Prashant KUMAR (7744447774)</option>

                                <option value="1234567891">xghkjh (1234567891)</option>

                                <option value="9234567981">सौरभ (9234567981)</option>

                                <option value="1234567891">aashu (1234567891)</option>

                                <option value="470050060">SANJAY KUMAR (470050060)</option>

                                <option value="8700377769">Rahul kumar (8700377769)</option>

                                <option value="9816870719">saloni karn (9816870719)</option>

                                <option value="9816870719">sushant karn (9816870719)</option>

                                <option value="9816870719">sanam karn (9816870719)</option>

                                <option value="9977522556">simran (9977522556)</option>

                                <option value="7697233299">APEKSHIT KOLI (7697233299)</option>

                                <option value="">Akshay Karande ()</option>

                                <option value="9875455522">Rituraj (9875455522)</option>

                                <option value="9934507865">Aaditya (9934507865)</option>

                                <option value="">ashok ()</option>

                                <option value="-1">mayank (-1)</option>

                                <option value="">ashok ()</option>

                                <option value="">Abhay ()</option>

                                <option value="">vivek ()</option>

                                <option value="8109195202">abhisek (8109195202)</option>

                                <option value="9638527410">bbs (9638527410)</option>

                                <option value="8109195202">roma (8109195202)</option>

                                <option value="56548455455">ravi (56548455455)</option>

                                <option value="9918666600">Vaishnavi Thakur (9918666600)</option>

                                <option value="7024347776">AADITYA JHILLE (7024347776)</option>

                                <option value="9893840078">Shifa Meman (9893840078)</option>

                                <option value="8577908478">ROHIT KUMAR (8577908478)</option>

                                <option value="7748908646">Prashant KUMAR (7748908646)</option>

                                <option value="9101065310">Urvi sen (9101065310)</option>

                                <option value="9685437207">Akshaj Mishra (9685437207)</option>

                                <option value="65463312">priya (65463312)</option>

                                <option value="7488150952">RAJESH KUMAR MAHTO (7488150952)</option>

                                <option value="9416499566">Ram (9416499566)</option>

                                <option value="9416499566">Aashish (9416499566)</option>

                                <option value="8486304694">INAMUR RAHMAN (8486304694)</option>

                                <option value="9988525245">nidhi jain (9988525245)</option>

                                <option value="">rakesh ()</option>

                                <option value="8059076999">Ravi (8059076999)</option>

                                <option value="456946564">VINAYAK PATIDAR (456946564)</option>

                                <option value="96325663">RAJ NAYK (96325663)</option>

                                <option value="70000040">Praashant (70000040)</option>

                                <option value="7896541256">raman (7896541256)</option>

                                <option value="1234567890">Akshay (1234567890)</option>

                                <option value="">Prashant r ()</option>

                                <option value="9988554665">nidhi jain (9988554665)</option>

                                <option value="9955886644">sunil 1 (9955886644)</option>

                                <option value="9090909090">Nikhil (9090909090)</option>

                                <option value="8430555580">yashi (8430555580)</option>

                                <option value="9052483352">Gopi (9052483352)</option>

                                <option value="9755404505">ABHIMANYU SHARMA (9755404505)</option>

                                <option value="9826625627">AVNI SHARMA (9826625627)</option>

                                <option value="458725">Fig (458725)</option>

                                <option value="9911587536">shree (9911587536)</option>

                                <option value="9911587539">shreyansh (9911587539)</option>

                                <option value="685555555555">Ajay (685555555555)</option>

                                <option value="8469808008">Druwa Ganesh Chaudhari (8469808008)</option>

                                <option value="7067208375">SONU PRAJAPATI (7067208375)</option>

                                <option value="9473000888">Md alam ali (9473000888)</option>

                                <option value="1234567890">dummy (1234567890)</option>

                                <option value="7677425494">TABREZ ALAM (7677425494)</option>

                                <option value="6283926887">SHIVANSH RAWAT (6283926887)</option>

                                <option value="">mahi ()</option>

                                <option value="7024510634">mahi (7024510634)</option>

                                <option value="7677425494">shahnawaz (7677425494)</option>

                                <option value="9931326638">yasin (9931326638)</option>

                                <option value="9693212542">sultana (9693212542)</option>

                                <option value="1234567891">pragya (1234567891)</option>

                                <option value="56454564564564">priya (56454564564564)</option>

                                <option value="5644545456">mahi (5644545456)</option>

                                <option value="6265767366">Yash (6265767366)</option>

                                <option value="7896454571">jeet kumar (7896454571)</option>

                                <option value="7004625934">PANKAJ KUMAR (7004625934)</option>

                                <option value="9918066214">Rohit (9918066214)</option>

                                <option value="7354713649">vicky uikey (7354713649)</option>

                                <option value="">penolope ()</option>

                                <option value="6005939589">Abdul sami (6005939589)</option>

                                <option value="">jjlklkk ()</option>

                                <option value="9955882211">VINAYAK PATIDAR (9955882211)</option>

                                <option value="89789665677">NIDHI SINGH (89789665677)</option>

                                <option value="1234569875">Prashant (1234569875)</option>

                                <option value="1234587932">Prashant (1234587932)</option>

                                <option value="">pooja bairagi ()</option>

                                <option value="">pooja bairagi ()</option>

                                <option value="">pooja bairagi ()</option>

                                <option value="458963248327">Farhan khan (458963248327)</option>

                                <option value="9898888888">पंकज कुमार (9898888888)</option>

                                <option value="00000000000000">Mafidul Islam (00000000000000)</option>

                                <option value="7854126359">neha parihar (7854126359)</option>

                                <option value="7740000">Prashant (7740000)</option>

                                <option value="4744444">mahi (4744444)</option>

                                <option value="">mansha ()</option>

                                <option value="56454564">riya (56454564)</option>

                                <option value="9988552233">VINAYAK PATIDAR (9988552233)</option>

                                <option value="982365526">ArhN (982365526)</option>

                                <option value="">Ariz ()</option>

                                <option value="">Ariz ()</option>

                                <option value="7354713649">vicky uikey (7354713649)</option>

                                <option value="123">Chirag jatav (123)</option>

                                <option value="963486652388">Pooja bairagi (963486652388)</option>

                                <option value="544564">rajkumar (544564)</option>

                                <option value="">priya ()</option>

                                <option value="6200665811">Md. Mokarram alam (6200665811)</option>

                                <option value="7894561230">ashta (7894561230)</option>

                                <option value="1234567890">lalit (1234567890)</option>

                                <option value="546123790">shikha (546123790)</option>

                                <option value="9991233258">SANDEEP (9991233258)</option>

                                <option value="8103488491">Vansh Kumar Pasi (8103488491)</option>

                                <option value="9058068745">rakesh (9058068745)</option>

                                <option value="8936860311">RAM KUMAR (8936860311)</option>

                                <option value="7748770000">Prashant (7748770000)</option>

                                <option value="74444">Prashant (74444)</option>

                                <option value="9450673349">Amit rao (9450673349)</option>

                                <option value="824685465">NIDHI SINGH (824685465)</option>

                                <option value="9452358861">shravan singh (9452358861)</option>

                                <option value="6265861579">asharamk (6265861579)</option>

                                <option value="9752199047">kamalkant (9752199047)</option>

                                <option value="744777">Prashant (744777)</option>

                                <option value="87874545454">Aarunya Raj Sinha (87874545454)</option>

                                <option value="">Monali ()</option>

                                <option value="9416499566">lokesh (9416499566)</option>

                                <option value="7444">prash (7444)</option>

                                <option value="74440">Prashant (74440)</option>

                                <option value="744">Prashant (744)</option>

                                <option value="77">Prashant (77)</option>

                                <option value="8090688671">VEDANT TIWARI (8090688671)</option>

                                <option value="9018501010">Aamna Hussain (9018501010)</option>

                                <option value="74444">Prashant (74444)</option>

                                <option value="7441000">Prashant (7441000)</option>

                                <option value="">RAJESH CHOVE ()</option>

                                <option value="8707260755">Nitya Yadav (8707260755)</option>

                                <option value="8957380880">Shubh Kashyap (8957380880)</option>

                                <option value="8726794375">Arohi Kushwaha (8726794375)</option>

                                <option value="9621111842">Anikesh (9621111842)</option>

                                <option value="9219270152">Prithviraj (9219270152)</option>

                                <option value="6393465780">Arushi Diwakar (6393465780)</option>

                                <option value="">Kartik Nishad ()</option>

                                <option value="9821223300">Ramesh (9821223300)</option>

                                <option value="9897015271">AUGUSTAY (9897015271)</option>

                                <option value="9111111111">Anamika Agrawal (9111111111)</option>

                                <option value="7111111111">Sujata Agrawal (7111111111)</option>

                                <option value="6387770743">aman soni (6387770743)</option>

                                <option value="6387770743">aman soni 2 (6387770743)</option>

                                <option value="8976453600">amit (8976453600)</option>

                                <option value="9936528547">Roshan (9936528547)</option>

                                <option value="8454154454">NIDHI SINGH (8454154454)</option>

                                <option value="8709788098">Rajdeep kumar (8709788098)</option>

                                <option value="">SURYA PRATAP MAURYA ()</option>

                                <option value="9977228818">Danica Mariam Jacob (9977228818)</option>

                                <option value="9570503057">Rahul Kumar (9570503057)</option>

                            </select>

                            <!-- /.box-tools -->
                        </div>

                    </table>

                    <!-- /.box-body -->
                </div>
            </div>
            <!---------------------------------Nursery Start------------------------------------->


            <div class="col-md-12">
                <div class="box box-default collapsed-box my_border_top" style="border-radius:20px;">
                    <div class="box-header with-border ">
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_1" onclick="checkdAll(1);"
                                value="">&nbsp;&nbsp;&nbsp;NURSERY[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-19]</span></h3>

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
                                        class="check_1 checked_contact" value="9416499566">&nbsp;&nbsp;&nbsp;Aashish
                                    (9416499566)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="7896541256">&nbsp;&nbsp;&nbsp;raman
                                    (7896541256)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="8430555580">&nbsp;&nbsp;&nbsp;yashi
                                    (8430555580)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="9755404505">&nbsp;&nbsp;&nbsp;ABHIMANYU
                                    SHARMA (9755404505)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="9911587536">&nbsp;&nbsp;&nbsp;shree
                                    (9911587536)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        value="685555555555">&nbsp;&nbsp;&nbsp;Ajay (685555555555)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="8469808008">&nbsp;&nbsp;&nbsp;Druwa
                                    Ganesh Chaudhari (8469808008)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="6283926887">&nbsp;&nbsp;&nbsp;SHIVANSH
                                    RAWAT (6283926887)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="6265767366">&nbsp;&nbsp;&nbsp;Yash
                                    (6265767366)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="9898888888">&nbsp;&nbsp;&nbsp;पंकज कुमार
                                    (9898888888)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="9018501010">&nbsp;&nbsp;&nbsp;Aamna
                                    Hussain (9018501010)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="8707260755">&nbsp;&nbsp;&nbsp;Nitya Yadav
                                    (8707260755)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="8957380880">&nbsp;&nbsp;&nbsp;Shubh
                                    Kashyap (8957380880)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="8726794375">&nbsp;&nbsp;&nbsp;Arohi
                                    Kushwaha (8726794375)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="9621111842">&nbsp;&nbsp;&nbsp;Anikesh
                                    (9621111842)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="9219270152">&nbsp;&nbsp;&nbsp;Prithviraj
                                    (9219270152)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="6393465780">&nbsp;&nbsp;&nbsp;Arushi
                                    Diwakar (6393465780)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        value="">&nbsp;&nbsp;&nbsp;Kartik Nishad ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(1);"
                                        class="check_1 checked_contact" value="9570503057">&nbsp;&nbsp;&nbsp;Rahul Kumar
                                    (9570503057)<br>
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
                                value="">&nbsp;&nbsp;&nbsp;LKG[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-15]</span></h3>

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
                                        class="check_6 checked_contact" value="9144555977">&nbsp;&nbsp;&nbsp;balveer
                                    singh (9144555977)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="9144555977">&nbsp;&nbsp;&nbsp;mahira khan
                                    (9144555977)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="9144555977">&nbsp;&nbsp;&nbsp;sanny
                                    (9144555977)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="9865474758">&nbsp;&nbsp;&nbsp;kirti
                                    panday (9865474758)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        value="">&nbsp;&nbsp;&nbsp;lali ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="1234567891">&nbsp;&nbsp;&nbsp;xghkjh
                                    (1234567891)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="9816870719">&nbsp;&nbsp;&nbsp;sanam karn
                                    (9816870719)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        value="">&nbsp;&nbsp;&nbsp;Akshay Karande ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        value="-1">&nbsp;&nbsp;&nbsp;mayank (-1)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="9918666600">&nbsp;&nbsp;&nbsp;Vaishnavi
                                    Thakur (9918666600)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="9101065310">&nbsp;&nbsp;&nbsp;Urvi sen
                                    (9101065310)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="8486304694">&nbsp;&nbsp;&nbsp;INAMUR
                                    RAHMAN (8486304694)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        value="">&nbsp;&nbsp;&nbsp;rakesh ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="9991233258">&nbsp;&nbsp;&nbsp;SANDEEP
                                    (9991233258)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(6);"
                                        class="check_6 checked_contact" value="9058068745">&nbsp;&nbsp;&nbsp;rakesh
                                    (9058068745)<br>
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
                                value="">&nbsp;&nbsp;&nbsp;UKG[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-42]</span></h3>

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
                                        class="check_8 checked_contact" value="9827185031">&nbsp;&nbsp;&nbsp;Sangita
                                    (9827185031)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="8269548476">&nbsp;&nbsp;&nbsp;umesh
                                    dhakad (8269548476)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="1316543133">&nbsp;&nbsp;&nbsp;Humaira
                                    (1316543133)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9826390607">&nbsp;&nbsp;&nbsp;ayush koli
                                    (9826390607)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9144555977">&nbsp;&nbsp;&nbsp;umesh
                                    (9144555977)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9144555977">&nbsp;&nbsp;&nbsp;Anshu
                                    (9144555977)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="7978988989">&nbsp;&nbsp;&nbsp; BABALI
                                    SAHU (7978988989)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="7571940317">&nbsp;&nbsp;&nbsp;Nidhi
                                    Mishra (7571940317)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9825734280">&nbsp;&nbsp;&nbsp;sushant
                                    singh (9825734280)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="8084407273">&nbsp;&nbsp;&nbsp;SK Thakur
                                    (8084407273)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="1234567891">&nbsp;&nbsp;&nbsp;Jay Sharma
                                    (1234567891)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="666">&nbsp;&nbsp;&nbsp;Sikdar (666)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="4555">&nbsp;&nbsp;&nbsp;Bijoy (4555)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;RIYA DAS ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="1234567890">&nbsp;&nbsp;&nbsp;SUMIT KUMAR
                                    (1234567890)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="6756789876">&nbsp;&nbsp;&nbsp;Somya
                                    (6756789876)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="1234567894">&nbsp;&nbsp;&nbsp;Radha
                                    Kumari (1234567894)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="7987736568">&nbsp;&nbsp;&nbsp;ARPAN
                                    NANDEWAR (7987736568)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;Bhavesh Arvind Padvi ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="1444411">&nbsp;&nbsp;&nbsp;himanshi (1444411)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;GGDFGFDGFDG ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9695924506">&nbsp;&nbsp;&nbsp;ABHISHEK
                                    (9695924506)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="0123456789">&nbsp;&nbsp;&nbsp; Kanika
                                    (0123456789)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;Ravi ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;RAHUL ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9918556649">&nbsp;&nbsp;&nbsp;kunal jha
                                    (9918556649)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="955656">&nbsp;&nbsp;&nbsp;fgdfg (955656)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9918556649">&nbsp;&nbsp;&nbsp;vishal jha
                                    (9918556649)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9918556649">&nbsp;&nbsp;&nbsp;vishal jha
                                    (9918556649)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9813405312">&nbsp;&nbsp;&nbsp;muskan ray
                                    (9813405312)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="470050060">&nbsp;&nbsp;&nbsp;SANJAY KUMAR (470050060)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9816870719">&nbsp;&nbsp;&nbsp;sushant
                                    karn (9816870719)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;Abhay ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9090909090">&nbsp;&nbsp;&nbsp;Nikhil
                                    (9090909090)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="9473000888">&nbsp;&nbsp;&nbsp;Md alam ali
                                    (9473000888)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="7024510634">&nbsp;&nbsp;&nbsp;mahi
                                    (7024510634)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="7854126359">&nbsp;&nbsp;&nbsp;neha
                                    parihar (7854126359)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;mansha ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;Ariz ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="">&nbsp;&nbsp;&nbsp;Ariz ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        class="check_8 checked_contact" value="6200665811">&nbsp;&nbsp;&nbsp;Md.
                                    Mokarram alam (6200665811)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(8);"
                                        value="87874545454">&nbsp;&nbsp;&nbsp;Aarunya Raj Sinha (87874545454)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_12" onclick="checkdAll(12);"
                                value="">&nbsp;&nbsp;&nbsp;1ST[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-12]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="8942116685">&nbsp;&nbsp;&nbsp;Jidan
                                    uddin (8942116685)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        value="66666666666">&nbsp;&nbsp;&nbsp;praveen kumar (66666666666)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="7844411100">&nbsp;&nbsp;&nbsp;Prashant
                                    kumar (7844411100)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="8109195202">&nbsp;&nbsp;&nbsp;abhisek
                                    (8109195202)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="9911587539">&nbsp;&nbsp;&nbsp;shreyansh
                                    (9911587539)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="7677425494">&nbsp;&nbsp;&nbsp;shahnawaz
                                    (7677425494)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="9931326638">&nbsp;&nbsp;&nbsp;yasin
                                    (9931326638)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="9693212542">&nbsp;&nbsp;&nbsp;sultana
                                    (9693212542)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="7354713649">&nbsp;&nbsp;&nbsp;vicky
                                    uikey (7354713649)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        value="123">&nbsp;&nbsp;&nbsp;Chirag jatav (123)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="7111111111">&nbsp;&nbsp;&nbsp;Sujata
                                    Agrawal (7111111111)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(12);"
                                        class="check_12 checked_contact" value="9977228818">&nbsp;&nbsp;&nbsp;Danica
                                    Mariam Jacob (9977228818)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_14" onclick="checkdAll(14);"
                                value="">&nbsp;&nbsp;&nbsp;2ND[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-55]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9719433442">&nbsp;&nbsp;&nbsp;Akhil
                                    (9719433442)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9931742369">&nbsp;&nbsp;&nbsp;Avnish
                                    kumar (9931742369)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9926621333">&nbsp;&nbsp;&nbsp;श्री
                                    (9926621333)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="123456">&nbsp;&nbsp;&nbsp;hari (123456)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="1234567890">&nbsp;&nbsp;&nbsp;dummy
                                    (1234567890)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9816870719">&nbsp;&nbsp;&nbsp;rohan sah
                                    (9816870719)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9816870719">&nbsp;&nbsp;&nbsp;ishan
                                    kumar (9816870719)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9825734280">&nbsp;&nbsp;&nbsp;saloni
                                    (9825734280)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7773954846">&nbsp;&nbsp;&nbsp;Mayur
                                    Mangesh Padvi (7773954846)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="8766578634">&nbsp;&nbsp;&nbsp;Bhavesh
                                    Arvind Padvi (8766578634)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7507167517">&nbsp;&nbsp;&nbsp;Nikhil
                                    Dinesh Padvi (7507167517)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="25585">&nbsp;&nbsp;&nbsp;abcs (25585)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9816870719">&nbsp;&nbsp;&nbsp;sona
                                    (9816870719)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9826038592">&nbsp;&nbsp;&nbsp;sajid khan
                                    (9826038592)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="1234567890">&nbsp;&nbsp;&nbsp;dummy
                                    (1234567890)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="8192906306">&nbsp;&nbsp;&nbsp;Komal
                                    Gupta (8192906306)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9998000522">&nbsp;&nbsp;&nbsp;Anil
                                    Kapoor Dhoom (9998000522)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="">&nbsp;&nbsp;&nbsp;Prashant ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="4987549">&nbsp;&nbsp;&nbsp;RAJ (4987549)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9818273851">&nbsp;&nbsp;&nbsp;XYZ
                                    (9818273851)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7845123698">&nbsp;&nbsp;&nbsp;abc
                                    (7845123698)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="">&nbsp;&nbsp;&nbsp;rahul ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="647322824425">&nbsp;&nbsp;&nbsp;Prashant rajak (647322824425)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="">&nbsp;&nbsp;&nbsp;Prashant kumar ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9038423904">&nbsp;&nbsp;&nbsp;bjkb
                                    (9038423904)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="1234567892">&nbsp;&nbsp;&nbsp;laxmi
                                    (1234567892)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7067633301">&nbsp;&nbsp;&nbsp;AJAY
                                    (7067633301)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9234567981">&nbsp;&nbsp;&nbsp;सौरभ
                                    (9234567981)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9816870719">&nbsp;&nbsp;&nbsp;saloni
                                    karn (9816870719)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7697233299">&nbsp;&nbsp;&nbsp;APEKSHIT
                                    KOLI (7697233299)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9875455522">&nbsp;&nbsp;&nbsp;Rituraj
                                    (9875455522)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9934507865">&nbsp;&nbsp;&nbsp;Aaditya
                                    (9934507865)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="">&nbsp;&nbsp;&nbsp;ashok ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="">&nbsp;&nbsp;&nbsp;vivek ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9638527410">&nbsp;&nbsp;&nbsp;bbs
                                    (9638527410)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="56548455455">&nbsp;&nbsp;&nbsp;ravi (56548455455)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7024347776">&nbsp;&nbsp;&nbsp;AADITYA
                                    JHILLE (7024347776)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="8577908478">&nbsp;&nbsp;&nbsp;ROHIT
                                    KUMAR (8577908478)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7748908646">&nbsp;&nbsp;&nbsp;Prashant
                                    KUMAR (7748908646)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9955886644">&nbsp;&nbsp;&nbsp;sunil 1
                                    (9955886644)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9826625627">&nbsp;&nbsp;&nbsp;AVNI
                                    SHARMA (9826625627)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7067208375">&nbsp;&nbsp;&nbsp;SONU
                                    PRAJAPATI (7067208375)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="1234567890">&nbsp;&nbsp;&nbsp;dummy
                                    (1234567890)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7677425494">&nbsp;&nbsp;&nbsp;TABREZ
                                    ALAM (7677425494)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7004625934">&nbsp;&nbsp;&nbsp;PANKAJ
                                    KUMAR (7004625934)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9955882211">&nbsp;&nbsp;&nbsp;VINAYAK
                                    PATIDAR (9955882211)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9988552233">&nbsp;&nbsp;&nbsp;VINAYAK
                                    PATIDAR (9988552233)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="7354713649">&nbsp;&nbsp;&nbsp;vicky
                                    uikey (7354713649)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="8103488491">&nbsp;&nbsp;&nbsp;Vansh
                                    Kumar Pasi (8103488491)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="8936860311">&nbsp;&nbsp;&nbsp;RAM KUMAR
                                    (8936860311)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9450673349">&nbsp;&nbsp;&nbsp;Amit rao
                                    (9450673349)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="824685465">&nbsp;&nbsp;&nbsp;NIDHI SINGH (824685465)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="9452358861">&nbsp;&nbsp;&nbsp;shravan
                                    singh (9452358861)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        class="check_14 checked_contact" value="6265861579">&nbsp;&nbsp;&nbsp;asharamk
                                    (6265861579)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(14);"
                                        value="">&nbsp;&nbsp;&nbsp;Monali ()<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_15" onclick="checkdAll(15);"
                                value="">&nbsp;&nbsp;&nbsp;3RD[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-9]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        class="check_15 checked_contact" value="8893387594">&nbsp;&nbsp;&nbsp;joy
                                    (8893387594)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        class="check_15 checked_contact" value="8601727725">&nbsp;&nbsp;&nbsp;Upen
                                    (8601727725)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        value="6">&nbsp;&nbsp;&nbsp;cddf (6)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        value="">&nbsp;&nbsp;&nbsp;ajay kewat ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        class="check_15 checked_contact" value="1234567891">&nbsp;&nbsp;&nbsp;raja
                                    (1234567891)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        value="4545454">&nbsp;&nbsp;&nbsp;AS (4545454)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        class="check_15 checked_contact" value="1234567891">&nbsp;&nbsp;&nbsp;aashu
                                    (1234567891)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        class="check_15 checked_contact" value="9685437207">&nbsp;&nbsp;&nbsp;Akshaj
                                    Mishra (9685437207)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(15);"
                                        class="check_15 checked_contact" value="9988525245">&nbsp;&nbsp;&nbsp;nidhi jain
                                    (9988525245)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_16" onclick="checkdAll(16);"
                                value="">&nbsp;&nbsp;&nbsp;4TH[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-14]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="9456930082">&nbsp;&nbsp;&nbsp;Saurya
                                    (9456930082)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="9634569635">&nbsp;&nbsp;&nbsp;Aman
                                    (9634569635)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="8679458246">&nbsp;&nbsp;&nbsp;Nikhil
                                    Lodhi (8679458246)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="9571176454">&nbsp;&nbsp;&nbsp;Diviya
                                    prajapati (9571176454)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        value="686868606868">&nbsp;&nbsp;&nbsp;Muhammed Adnan (686868606868)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="8305694069">&nbsp;&nbsp;&nbsp;mahir khan
                                    (8305694069)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="9977805298">&nbsp;&nbsp;&nbsp;imran khan
                                    (9977805298)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="9818273851">&nbsp;&nbsp;&nbsp;SAJAL
                                    (9818273851)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="9990008522">&nbsp;&nbsp;&nbsp;Anil Kumar
                                    (9990008522)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        value="9999999995656">&nbsp;&nbsp;&nbsp;Ram (9999999995656)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        value="65463312">&nbsp;&nbsp;&nbsp;priya (65463312)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="9988554665">&nbsp;&nbsp;&nbsp;nidhi jain
                                    (9988554665)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="9821223300">&nbsp;&nbsp;&nbsp;Ramesh
                                    (9821223300)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(16);"
                                        class="check_16 checked_contact" value="8709788098">&nbsp;&nbsp;&nbsp;Rajdeep
                                    kumar (8709788098)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_18" onclick="checkdAll(18);"
                                value="">&nbsp;&nbsp;&nbsp;5TH[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-13]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        class="check_18 checked_contact" value="9974301792">&nbsp;&nbsp;&nbsp;Vaidik
                                    (9974301792)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        value="">&nbsp;&nbsp;&nbsp;umesh ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        class="check_18 checked_contact" value="9893230765">&nbsp;&nbsp;&nbsp;Ram
                                    (9893230765)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        class="check_18 checked_contact" value="8109607707">&nbsp;&nbsp;&nbsp;Prashant
                                    Kumar (8109607707)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        class="check_18 checked_contact" value="7744447774">&nbsp;&nbsp;&nbsp;Prashant
                                    KUMAR (7744447774)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        class="check_18 checked_contact" value="8700377769">&nbsp;&nbsp;&nbsp;Rahul
                                    kumar (8700377769)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        class="check_18 checked_contact" value="9977522556">&nbsp;&nbsp;&nbsp;simran
                                    (9977522556)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        value="456946564">&nbsp;&nbsp;&nbsp;VINAYAK PATIDAR (456946564)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        value="70000040">&nbsp;&nbsp;&nbsp;Praashant (70000040)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        value="">&nbsp;&nbsp;&nbsp;Prashant r ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        value="89789665677">&nbsp;&nbsp;&nbsp;NIDHI SINGH (89789665677)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        value="982365526">&nbsp;&nbsp;&nbsp;ArhN (982365526)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(18);"
                                        value="">&nbsp;&nbsp;&nbsp;SURYA PRATAP MAURYA ()<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_20" onclick="checkdAll(20);"
                                value="">&nbsp;&nbsp;&nbsp;6TH[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-12]</span></h3>

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
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        value="">&nbsp;&nbsp;&nbsp;umesh ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="9816870719">&nbsp;&nbsp;&nbsp;pankaj
                                    patel (9816870719)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="9825734280">&nbsp;&nbsp;&nbsp;suman
                                    (9825734280)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="1234567892">&nbsp;&nbsp;&nbsp;dishika
                                    (1234567892)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="8840268435">&nbsp;&nbsp;&nbsp;sarita
                                    (8840268435)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="9999555333">&nbsp;&nbsp;&nbsp;DISHANT
                                    PATIDAR (9999555333)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="7488150952">&nbsp;&nbsp;&nbsp;RAJESH
                                    KUMAR MAHTO (7488150952)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        value="96325663">&nbsp;&nbsp;&nbsp;RAJ NAYK (96325663)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="1234567891">&nbsp;&nbsp;&nbsp;pragya
                                    (1234567891)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="7896454571">&nbsp;&nbsp;&nbsp;jeet kumar
                                    (7896454571)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        value="00000000000000">&nbsp;&nbsp;&nbsp;Mafidul Islam (00000000000000)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(20);"
                                        class="check_20 checked_contact" value="9936528547">&nbsp;&nbsp;&nbsp;Roshan
                                    (9936528547)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_23" onclick="checkdAll(23);"
                                value="">&nbsp;&nbsp;&nbsp;7TH[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-18]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        class="check_23 checked_contact" value="1234567890">&nbsp;&nbsp;&nbsp;Sagar
                                    Singh (1234567890)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="836009915">&nbsp;&nbsp;&nbsp;MANVEER SINGH (836009915)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="123456789">&nbsp;&nbsp;&nbsp;Kiran Sharma (123456789)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="234567891">&nbsp;&nbsp;&nbsp;Riya Sharma (234567891)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="456789123">&nbsp;&nbsp;&nbsp;Meena Verma (456789123)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="567891234">&nbsp;&nbsp;&nbsp;Heena Mittal (567891234)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        class="check_23 checked_contact" value="9456312705">&nbsp;&nbsp;&nbsp;Anamika
                                    (9456312705)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="678912345">&nbsp;&nbsp;&nbsp;Lalu Kumar (678912345)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        class="check_23 checked_contact" value="8052987121">&nbsp;&nbsp;&nbsp;payal
                                    (8052987121)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="458725">&nbsp;&nbsp;&nbsp;Fig (458725)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        class="check_23 checked_contact" value="1234569875">&nbsp;&nbsp;&nbsp;Prashant
                                    (1234569875)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        class="check_23 checked_contact" value="1234587932">&nbsp;&nbsp;&nbsp;Prashant
                                    (1234587932)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        class="check_23 checked_contact" value="1234567890">&nbsp;&nbsp;&nbsp;lalit
                                    (1234567890)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="7444">&nbsp;&nbsp;&nbsp;prash (7444)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="74444">&nbsp;&nbsp;&nbsp;Prashant (74444)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        value="7441000">&nbsp;&nbsp;&nbsp;Prashant (7441000)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        class="check_23 checked_contact" value="9111111111">&nbsp;&nbsp;&nbsp;Anamika
                                    Agrawal (9111111111)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(23);"
                                        class="check_23 checked_contact" value="8454154454">&nbsp;&nbsp;&nbsp;NIDHI
                                    SINGH (8454154454)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_24" onclick="checkdAll(24);"
                                value="">&nbsp;&nbsp;&nbsp;8TH[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-29]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="9893840078">&nbsp;&nbsp;&nbsp;Shifa
                                    Meman (9893840078)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="1234567890">&nbsp;&nbsp;&nbsp;Akshay
                                    (1234567890)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="9052483352">&nbsp;&nbsp;&nbsp;Gopi
                                    (9052483352)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="">&nbsp;&nbsp;&nbsp;mahi ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="56454564564564">&nbsp;&nbsp;&nbsp;priya (56454564564564)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="5644545456">&nbsp;&nbsp;&nbsp;mahi
                                    (5644545456)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="">&nbsp;&nbsp;&nbsp;penolope ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="">&nbsp;&nbsp;&nbsp;jjlklkk ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="">&nbsp;&nbsp;&nbsp;pooja bairagi ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="">&nbsp;&nbsp;&nbsp;pooja bairagi ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="">&nbsp;&nbsp;&nbsp;pooja bairagi ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="458963248327">&nbsp;&nbsp;&nbsp;Farhan khan (458963248327)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="7740000">&nbsp;&nbsp;&nbsp;Prashant (7740000)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="4744444">&nbsp;&nbsp;&nbsp;mahi (4744444)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="56454564">&nbsp;&nbsp;&nbsp;riya (56454564)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="963486652388">&nbsp;&nbsp;&nbsp;Pooja bairagi (963486652388)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="544564">&nbsp;&nbsp;&nbsp;rajkumar (544564)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="">&nbsp;&nbsp;&nbsp;priya ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="7894561230">&nbsp;&nbsp;&nbsp;ashta
                                    (7894561230)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="546123790">&nbsp;&nbsp;&nbsp;shikha (546123790)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="7748770000">&nbsp;&nbsp;&nbsp;Prashant
                                    (7748770000)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="74444">&nbsp;&nbsp;&nbsp;Prashant (74444)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="9752199047">&nbsp;&nbsp;&nbsp;kamalkant
                                    (9752199047)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="744777">&nbsp;&nbsp;&nbsp;Prashant (744777)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="9416499566">&nbsp;&nbsp;&nbsp;lokesh
                                    (9416499566)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="74440">&nbsp;&nbsp;&nbsp;Prashant (74440)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="744">&nbsp;&nbsp;&nbsp;Prashant (744)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        value="77">&nbsp;&nbsp;&nbsp;Prashant (77)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(24);"
                                        class="check_24 checked_contact" value="8090688671">&nbsp;&nbsp;&nbsp;VEDANT
                                    TIWARI (8090688671)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_25" onclick="checkdAll(25);"
                                value="">&nbsp;&nbsp;&nbsp;9TH[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-6]</span></h3>

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
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(25);"
                                        value="77718853445">&nbsp;&nbsp;&nbsp;RAM PANDEY (77718853445)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(25);"
                                        value="">&nbsp;&nbsp;&nbsp;ashok ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(25);"
                                        class="check_25 checked_contact" value="8109195202">&nbsp;&nbsp;&nbsp;roma
                                    (8109195202)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(25);"
                                        class="check_25 checked_contact" value="9918066214">&nbsp;&nbsp;&nbsp;Rohit
                                    (9918066214)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:red">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(25);"
                                        value="">&nbsp;&nbsp;&nbsp;RAJESH CHOVE ()<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(25);"
                                        class="check_25 checked_contact" value="6387770743">&nbsp;&nbsp;&nbsp;aman soni
                                    2 (6387770743)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_27" onclick="checkdAll(27);"
                                value="">&nbsp;&nbsp;&nbsp;10TH[A]<span style="color:red">&nbsp;&nbsp;&nbsp;[Total
                                Student-1]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(27);"
                                        class="check_27 checked_contact" value="9897015271">&nbsp;&nbsp;&nbsp;AUGUSTAY
                                    (9897015271)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_28" onclick="checkdAll(28);"
                                value="">&nbsp;&nbsp;&nbsp;11TH[SCIENCE][A]<span
                                style="color:red">&nbsp;&nbsp;&nbsp;[Total Student-4]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(28);"
                                        class="check_28 checked_contact" value="9839458652">&nbsp;&nbsp;&nbsp;RAJESH
                                    (9839458652)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(28);"
                                        class="check_28 checked_contact" value="9584669888">&nbsp;&nbsp;&nbsp;MAHEK
                                    DASHORE (9584669888)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(28);"
                                        class="check_28 checked_contact" value="6387770743">&nbsp;&nbsp;&nbsp;aman soni
                                    (6387770743)<br>
                                </div>
                            </td>
                        </tr>

                        <!-- /.box-header -->

                        <tr>
                            <td>
                                <div class="box-body" style="color:teal;">
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(28);"
                                        class="check_28 checked_contact" value="8976453600">&nbsp;&nbsp;&nbsp;amit
                                    (8976453600)<br>
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
                        <h3 class="box-title"><input type="checkbox" name="" id="checkbox_31" onclick="checkdAll(31);"
                                value="">&nbsp;&nbsp;&nbsp;12TH[SCIENCE][A]<span
                                style="color:red">&nbsp;&nbsp;&nbsp;[Total Student-1]</span></h3>

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
                                    &nbsp;&nbsp;&nbsp;<input type="checkbox" name="" onclick="myContact(31);"
                                        class="check_31 checked_contact" value="9416499566">&nbsp;&nbsp;&nbsp;Ram
                                    (9416499566)<br>
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
                        <h5 class="box-title" style="float:left;color:teal;font-size:15px">Balance:0</h5>
                        <h5 id="total_sms_count"></h5>
                    </div>
                    <div class="box-header with-border">
                        For Hindi Change Typing Language From Header
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" onsubmit="return validateForm();" id="my_form">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Contact</label>

                            <div class="col-sm-8">
                                <input type="textbox" class="form-control" oninput="sms_count();" id="contact"
                                    name="contact" placeholder="Eg:-0123456789,1234567890,987654321">
                                <input type="textbox" class="form-control" id="contact1" name="contact1"
                                    style="display:none;" placeholder="Eg:-0123456789,1234567890,987654321">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">Holiday Type</label>
                            <div class="col-sm-8">
                                <select class="form-control" onchange="holiday_type_function(this.value);"
                                    id="holiday_type">
                                    <option value="">select holiday type</option>
                                    <option value="single">Single Day</option>
                                    <option value="multiple">Multiple Day</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group" style="display:none" id="holiday_from_div">
                            <label for="inputEmail3" class="col-sm-4 control-label" id="holiday_from_text">Holiday From
                                date</label>
                            <div class="col-sm-8">
                                <input type="date" value="2022-12-05" class="form-control" id="holiday_from_date"
                                    onchange="get_template();">
                            </div>
                        </div>
                        <br>
                        <div class="form-group" style="display:none" id="holiday_to_div">
                            <label for="inputEmail3" class="col-sm-4 control-label">Holiday To date</label>
                            <div class="col-sm-8">
                                <input type="date" value="2022-12-05" class="form-control" id="holiday_to_date"
                                    onchange="get_template();">
                            </div>
                        </div>
                        <br>
                        <div class="form-group" style="display:none" id="holiday_reason_div">
                            <label for="inputEmail3" class="col-sm-4 control-label">Holiday Reason(30 character
                                only)</label>
                            <div class="col-sm-8">
                                <input type="text" value="" class="form-control" id="holiday_reason"
                                    oninput="get_template();" max="30">
                            </div>
                        </div>
                        <br>
                        <div class="form-group" style="display:none" id="template_div">
                            <label for="inputEmail3" class="col-sm-2 control-label">Template</label>
                            <div class="col-sm-10" id="sms_template">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Sms Content</label>

                            <div class="col-sm-10">

                                <textarea rows="4" cols="50" id="message_box" onKeyUp="countChar(this.value)"
                                    name="content" class="form-control" readonly></textarea>
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