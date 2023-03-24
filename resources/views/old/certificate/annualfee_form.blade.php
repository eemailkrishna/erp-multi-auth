@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function fill_detail(value) {

    var res = value.split("|?|");
    $("#student_roll_no").val(res[0]);
    $("#student_name").val(res[1]);
    $("#student_father_name").val(res[2]);
    $("#school_roll_no").val(res[3]);

}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "certificate/annualfee_form_api.php",
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
                get_content('certificate/annualfee_certificate_list');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Certificate Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('certificate/certificate')}}"><i class="fa fa-certificate"></i> Certificate</a></li>
        <li class="active">Bonafied Certificate Form</li>
    </ol>
</section>




<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title"> Bonafied Certificate Generate</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                    <div class="col-md-12">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Search Student</label>
                                <select name="" class="form-control select2" onchange="fill_detail(this.value);"
                                    required>
                                    <option value="">Select student</option>
                                    <option value="2000296|?|ajit|?|Satveer|?|">ajit[]-[]-[2ND-B]-[Satveer-9050653720]
                                    </option>
                                    <option value="2000297|?|REHAN|?|FARHAT ALI|?|">REHAN[]-[]-[2ND-B]-[FARHAT
                                        ALI-8077194624]</option>
                                    <option value="2000314|?|Rajesh Prasad|?|Ananda Prasad|?|">Rajesh
                                        Prasad[]-[]-[2ND-B]-[Ananda Prasad-9135956095]</option>
                                    <option value="2000332|?|Palak Kumari|?|Krishna Sahani|?|">Palak
                                        Kumari[85274196313]-[]-[2ND-B]-[Krishna Sahani-9876543210]</option>
                                    <option value="2000345|?|joy|?|peter|?|126574">
                                        joy[192]-[126574]-[3RD-A]-[peter-8893387594]</option>
                                    <option value="2100412|?|Upen|?|Rajdev Mishra|?|126579">
                                        Upen[]-[126579]-[3RD-A]-[Rajdev Mishra-8601727725]</option>
                                    <option value="2100414|?|Saurya|?|Sanjeev Kumar|?|30">Saurya[]-[30]-[4TH-A]-[Sanjeev
                                        Kumar-9456930082]</option>
                                    <option value="2100415|?|dummy|?|dummy father |?|">dummy[]-[]-[2ND-B]-[dummy father
                                        -1234567890]</option>
                                    <option value="2100427|?|Akhil|?|Mr. Manoj|?|4">Akhil[]-[4]-[2ND-A]-[Mr.
                                        Manoj-9719433442]</option>
                                    <option value="2100430|?|Sangita|?|Ramji|?|25">
                                        Sangita[]-[25]-[UKG-A]-[Ramji-9827185031]</option>
                                    <option value="2100437|?|cddf|?||?|126573">cddf[]-[126573]-[3RD-A]-[-6]</option>
                                    <option value="2100450|?|umesh  dhakad|?|mr  ramgopal dhakad|?|31">umesh
                                        dhakad[]-[31]-[UKG-A]-[mr ramgopal dhakad-8269548476]</option>
                                    <option value="2100451|?|Humaira|?|Palash|?|18">
                                        Humaira[]-[18]-[UKG-A]-[Palash-1316543133]</option>
                                    <option value="2100458|?|ayush koli|?|prabhu dayal|?|8">ayush
                                        koli[]-[8]-[UKG-A]-[prabhu dayal-9826390607]</option>
                                    <option value="2100470|?|ajay kewat|?|durga kewat|?|126571">ajay
                                        kewat[]-[126571]-[3RD-A]-[durga kewat-]</option>
                                    <option value="2100471|?|Aman|?|Asad|?|16">Aman[]-[16]-[4TH-A]-[Asad-9634569635]
                                    </option>
                                    <option value="2100474|?|raja|?|raja|?|126577">
                                        raja[]-[126577]-[3RD-A]-[raja-1234567891]</option>
                                    <option value="2100520|?|Nikhil  Lodhi|?|Mayank Lodhi|?|25">Nikhil
                                        Lodhi[427]-[25]-[4TH-A]-[Mayank Lodhi-8679458246]</option>
                                    <option value="2100536|?|RAJESH|?|TARACHANDRA|?|">
                                        RAJESH[]-[]-[11TH-A]-[TARACHANDRA-9839458652]</option>
                                    <option value="2100537|?|Vaidik|?||?|12565">Vaidik[]-[12565]-[5TH-A]-[-9974301792]
                                    </option>
                                    <option value="2100538|?|Diviya prajapati|?|Shrawan Ram|?|18">Diviya
                                        prajapati[]-[18]-[4TH-A]-[Shrawan Ram-9571176454]</option>
                                    <option value="2100541|?|Sagar Singh|?|Rakesh Singh|?|1">Sagar
                                        Singh[]-[1]-[7TH-A]-[Rakesh Singh-1234567890]</option>
                                    <option value="2100544|?|Jidan uddin|?|riyaz uddin|?|401392">Jidan
                                        uddin[]-[401392]-[1ST-A]-[riyaz uddin-8942116685]</option>
                                    <option value="2100549|?|Avnish kumar|?|Gopal kumar|?|120004">Avnish
                                        kumar[]-[120004]-[2ND-A]-[Gopal kumar-9931742369]</option>
                                    <option value="2100553|?|umesh |?|abhishek|?|30">umesh
                                        [109]-[30]-[UKG-A]-[abhishek-9144555977]</option>
                                    <option value="2100561|?|umesh |?||?|">umesh []-[]-[6TH-A]-[-]</option>
                                    <option value="2100563|?|umesh |?||?|12564">umesh []-[12564]-[5TH-A]-[-]</option>
                                    <option value="2100571|?|Anshu|?|Vijay|?|7">
                                        Anshu[126]-[7]-[UKG-A]-[Vijay-9144555977]</option>
                                    <option value="2100575|?| BABALI SAHU|?|SHAIKH|?|2"> BABALI
                                        SAHU[100094]-[2]-[UKG-A]-[SHAIKH-7978988989]</option>
                                    <option value="2100583|?|श्री|?|दीपक|?|120005">
                                        श्री[]-[120005]-[2ND-A]-[दीपक-9926621333]</option>
                                    <option value="2100585|?|Muhammed Adnan|?|Muhammed Afnan|?|23">Muhammed
                                        Adnan[]-[23]-[4TH-A]-[Muhammed Afnan-686868606868]</option>
                                    <option value="2100589|?|hari|?|hani|?|101206">hari[]-[101206]-[2ND-A]-[hani-123456]
                                    </option>
                                    <option value="2100601|?|Nidhi Mishra|?|Nidhi Mishra|?|101212">Nidhi
                                        Mishra[]-[101212]-[UKG-A]-[Nidhi Mishra-7571940317]</option>
                                    <option value="2100609|?|SARIKA SULTANE|?|SANJAY|?|">SARIKA
                                        SULTANE[]-[]-[11TH-A]-[SANJAY-7498177242]</option>
                                    <option value="2200612|?|dummy|?|dummy father |?|120007">
                                        dummy[]-[120007]-[2ND-A]-[dummy father -1234567890]</option>
                                    <option value="2200614|?|balveer singh|?|sukhvinder singh|?|12372">balveer
                                        singh[77]-[12372]-[LKG-A]-[sukhvinder singh-9144555977]</option>
                                    <option value="2200615|?|mahira khan|?|irfan khan|?|12373">mahira
                                        khan[94]-[12373]-[LKG-A]-[irfan khan-9144555977]</option>
                                    <option value="2200618|?|sanny|?|soham|?|12371">
                                        sanny[66]-[12371]-[LKG-A]-[soham-9144555977]</option>
                                    <option value="2200622|?|rohan sah|?|ram |?|120023">rohan
                                        sah[]-[120023]-[2ND-A]-[ram -9816870719]</option>
                                    <option value="2200623|?|ishan kumar|?|rohit kumar|?|120009">ishan
                                        kumar[]-[120009]-[2ND-A]-[rohit kumar-9816870719]</option>
                                    <option value="2200624|?|pankaj patel|?|ram |?|">pankaj patel[1234]-[]-[6TH-A]-[ram
                                        -9816870719]</option>
                                    <option value="2200626|?|kirti panday|?|sumit panday|?|12374">kirti
                                        panday[101]-[12374]-[LKG-A]-[sumit panday-9865474758]</option>
                                    <option value="2200627|?|lali|?||?|12364">lali[]-[12364]-[LKG-A]-[-]</option>
                                    <option value="2200628|?|sushant singh|?|nilkamal singh |?|101219">sushant
                                        singh[75]-[101219]-[UKG-A]-[nilkamal singh -9825734280]</option>
                                    <option value="2200629|?|saloni|?|bijay|?|120025">
                                        saloni[]-[120025]-[2ND-A]-[bijay-9825734280]</option>
                                    <option value="2200630|?|suman|?|bijay|?|">suman[]-[]-[6TH-A]-[bijay-9825734280]
                                    </option>
                                    <option value="2200632|?|MANVEER SINGH |?|GURDEV SINGH |?|">MANVEER SINGH
                                        []-[]-[7TH-A]-[GURDEV SINGH -836009915]</option>
                                    <option value="2200633|?|RAM PANDEY|?|KAMLESH PANDEY|?|">RAM
                                        PANDEY[]-[]-[9TH-A]-[KAMLESH PANDEY-77718853445]</option>
                                    <option value="2200634|?|Mayur Mangesh Padvi|?|Mangesh Gorakh Padvi|?|120012">Mayur
                                        Mangesh Padvi[]-[120012]-[2ND-A]-[Mangesh Gorakh Padvi-7773954846]</option>
                                    <option value="2200635|?|Bhavesh Arvind Padvi|?|Arvind Gorakh Padvi|?|120006">
                                        Bhavesh Arvind Padvi[]-[120006]-[2ND-A]-[Arvind Gorakh Padvi-8766578634]
                                    </option>
                                    <option value="2200636|?|Nikhil Dinesh Padvi|?|Dinesh Gorakh Padvi|?|120014">Nikhil
                                        Dinesh Padvi[]-[120014]-[2ND-A]-[Dinesh Gorakh Padvi-7507167517]</option>
                                    <option value="2200637|?|Kiran Sharma|?|Ramu Sharma|?|">Kiran
                                        Sharma[]-[]-[7TH-A]-[Ramu Sharma-123456789]</option>
                                    <option value="2200638|?|Riya Sharma|?|Ram Sharma|?|">Riya Sharma[]-[]-[7TH-A]-[Ram
                                        Sharma-234567891]</option>
                                    <option value="2200640|?|Meena Verma|?|Jay Verma|?|">Meena Verma[]-[]-[7TH-A]-[Jay
                                        Verma-456789123]</option>
                                    <option value="2200641|?|Heena Mittal|?|Lalu Pasad|?|">Heena
                                        Mittal[]-[]-[7TH-A]-[Lalu Pasad-567891234]</option>
                                    <option value="2200642|?|Anamika|?|Yash Kapoor|?|">Anamika[]-[]-[7TH-A]-[Yash
                                        Kapoor-9456312705]</option>
                                    <option value="2200643|?|Lalu Kumar|?|Raju Kumar|?|">Lalu Kumar[]-[]-[7TH-A]-[Raju
                                        Kumar-678912345]</option>
                                    <option value="2200644|?|SK Thakur|?|Aasss|?|101217">SK
                                        Thakur[]-[101217]-[UKG-A]-[Aasss-8084407273]</option>
                                    <option value="2200645|?|abcs|?|ebgh|?|120003">abcs[]-[120003]-[2ND-A]-[ebgh-25585]
                                    </option>
                                    <option value="2200646|?|Jay Sharma|?|Harsh Sharma|?|101207">Jay
                                        Sharma[]-[101207]-[UKG-A]-[Harsh Sharma-1234567891]</option>
                                    <option value="2200647|?|Sikdar|?||?|101216">Sikdar[]-[101216]-[UKG-A]-[-666]
                                    </option>
                                    <option value="2200648|?|Bijoy|?|ajoy|?|101204">Bijoy[]-[101204]-[UKG-A]-[ajoy-4555]
                                    </option>
                                    <option value="2200650|?|sona|?|rajesh|?|120026">
                                        sona[]-[120026]-[2ND-A]-[rajesh-9816870719]</option>
                                    <option value="2200651|?|RIYA DAS|?|RATAN DAS|?|101214">RIYA
                                        DAS[]-[101214]-[UKG-A]-[RATAN DAS-]</option>
                                    <option value="2200652|?|SUMIT KUMAR|?|Anil kumar |?|101218">SUMIT
                                        KUMAR[100094]-[101218]-[UKG-A]-[Anil kumar -1234567890]</option>
                                    <option value="2200653|?|Somya|?||?|">Somya[]-[]-[UKG-A]-[-6756789876]</option>
                                    <option value="2200654|?|MAHEK DASHORE|?|NAVIN KUMAR DASHORE|?|">MAHEK
                                        DASHORE[]-[]-[11TH-A]-[NAVIN KUMAR DASHORE-9584669888]</option>
                                    <option value="2200656|?|Radha Kumari|?|Ram Kumar|?|101213">Radha
                                        Kumari[]-[101213]-[UKG-A]-[Ram Kumar-1234567894]</option>
                                    <option value="2200657|?|ARPAN NANDEWAR|?|RAM NANDEWAR|?|101201">ARPAN
                                        NANDEWAR[]-[101201]-[UKG-A]-[RAM NANDEWAR-7987736568]</option>
                                    <option value="2200659|?|mahir khan |?|javed khan |?|22">mahir khan
                                        []-[22]-[4TH-A]-[javed khan -8305694069]</option>
                                    <option value="2200661|?|imran khan |?|waseem khan |?|19">imran khan
                                        []-[19]-[4TH-A]-[waseem khan -9977805298]</option>
                                    <option value="2200662|?|sajid khan |?|javed khan|?|120024">sajid khan
                                        []-[120024]-[2ND-A]-[javed khan-9826038592]</option>
                                    <option value="2200663|?|dummy |?|dummy father|?|120008">dummy
                                        []-[120008]-[2ND-A]-[dummy father-1234567890]</option>
                                    <option value="2200665|?|dishika|?|sonu khatri |?|">dishika[]-[]-[6TH-A]-[sonu
                                        khatri -1234567892]</option>
                                    <option value="2200666|?|Bhavesh Arvind Padvi|?||?|101203">Bhavesh Arvind
                                        Padvi[]-[101203]-[UKG-A]-[-]</option>
                                    <option value="2200667|?|payal|?|shyamlal|?|">
                                        payal[]-[]-[7TH-A]-[shyamlal-8052987121]</option>
                                    <option value="2200668|?|SAJAL|?||?|29">SAJAL[]-[29]-[4TH-A]-[-9818273851]</option>
                                    <option value="2200669|?|sarita|?|ramjee Gupta|?|">sarita[]-[]-[6TH-A]-[ramjee
                                        Gupta-8840268435]</option>
                                    <option value="2200671|?|Komal Gupta|?|Pramod Gupta|?|120011">Komal
                                        Gupta[11]-[120011]-[2ND-A]-[Pramod Gupta-8192906306]</option>
                                    <option value="2200672|?|Anil Kumar|?||?|17">Anil Kumar[]-[17]-[4TH-A]-[-9990008522]
                                    </option>
                                    <option value="2200674|?|Anil Kapoor Dhoom|?||?|">Anil Kapoor
                                        Dhoom[]-[]-[2ND-A]-[-9998000522]</option>
                                    <option value="2200675|?|Prashant |?|Rammu lal|?|31">Prashant []-[31]-[2ND-A]-[Rammu
                                        lal-]</option>
                                    <option value="2200677|?|RAJ|?|rajesh|?|120020">
                                        RAJ[]-[120020]-[2ND-A]-[rajesh-4987549]</option>
                                    <option value="2200678|?|himanshi|?|babl|?|">himanshi[]-[]-[UKG-A]-[babl-1444411]
                                    </option>
                                    <option value="2200679|?|Ram|?|Lala seth|?|12563">Ram[]-[12563]-[5TH-A]-[Lala
                                        seth-9893230765]</option>
                                    <option value="2200680|?|Prashant Kumar|?|Rammu|?|12562">Prashant
                                        Kumar[]-[12562]-[5TH-A]-[Rammu-8109607707]</option>
                                    <option value="2200681|?|GGDFGFDGFDG|?||?|101205">GGDFGFDGFDG[]-[101205]-[UKG-A]-[-]
                                    </option>
                                    <option value="2200684|?|ABHISHEK |?|B L YADAV|?|">ABHISHEK []-[]-[UKG-A]-[B L
                                        YADAV-9695924506]</option>
                                    <option value="2200685|?|XYZ|?|XYZ|?|120027">XYZ[]-[120027]-[2ND-A]-[XYZ-9818273851]
                                    </option>
                                    <option value="2200686|?|abc|?||?|120002">abc[]-[120002]-[2ND-A]-[-7845123698]
                                    </option>
                                    <option value="2200687|?|rahul|?||?|120019">rahul[]-[120019]-[2ND-A]-[-]</option>
                                    <option value="2200688|?|Prashant rajak|?|Rammu lal|?|120018">Prashant
                                        rajak[]-[120018]-[2ND-A]-[Rammu lal-647322824425]</option>
                                    <option value="2200689|?| Kanika|?||?|"> Kanika[]-[]-[UKG-A]-[-0123456789]</option>
                                    <option value="2200691|?|Ravi|?|xyz|?|">Ravi[]-[]-[UKG-A]-[xyz-]</option>
                                    <option value="2200692|?|Prashant kumar|?|Rammu lal|?|120017">Prashant
                                        kumar[]-[120017]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200693|?|RAHUL|?|XYC|?|">RAHUL[]-[]-[UKG-A]-[XYC-]</option>
                                    <option value="2200695|?|praveen kumar|?||?|401394">praveen
                                        kumar[]-[401394]-[1ST-A]-[-66666666666]</option>
                                    <option value="2200698|?|bjkb|?|kllkdv|?|">bjkb[]-[]-[2ND-A]-[kllkdv-9038423904]
                                    </option>
                                    <option value="2200699|?|laxmi|?|venkat|?|">laxmi[]-[]-[2ND-A]-[venkat-1234567892]
                                    </option>
                                    <option value="2200702|?|AJAY|?|SUNIL|?|">AJAY[]-[]-[2ND-A]-[SUNIL-7067633301]
                                    </option>
                                    <option value="2200707|?|kunal jha|?||?|">kunal jha[]-[]-[UKG-A]-[-9918556649]
                                    </option>
                                    <option value="2200708|?|fgdfg|?|dfgdf|?|">fgdfg[]-[]-[UKG-A]-[dfgdf-955656]
                                    </option>
                                    <option value="2200709|?|DISHANT PATIDAR|?||?|">DISHANT
                                        PATIDAR[]-[]-[6TH-A]-[-9999555333]</option>
                                    <option value="2200710|?|vishal jha|?||?|">vishal jha[]-[]-[UKG-A]-[-9918556649]
                                    </option>
                                    <option value="2200713|?|Ram|?||?|27">Ram[]-[27]-[4TH-A]-[-9999999995656]</option>
                                    <option value="2200714|?|vishal jha|?||?|20">vishal jha[]-[20]-[UKG-A]-[-9918556649]
                                    </option>
                                    <option value="2200715|?|Prashant kumar|?|babl|?|401393">Prashant
                                        kumar[]-[401393]-[1ST-A]-[babl-7844411100]</option>
                                    <option value="2200716|?|AS|?|SS|?|126572">AS[]-[126572]-[3RD-A]-[SS-4545454]
                                    </option>
                                    <option value="2200717|?|muskan ray|?|roshan ray|?|13">muskan
                                        ray[]-[13]-[UKG-A]-[roshan ray-9813405312]</option>
                                    <option value="2200719|?|Prashant  KUMAR|?|Rammu lal|?|12561">Prashant
                                        KUMAR[14]-[12561]-[5TH-A]-[Rammu lal-7744447774]</option>
                                    <option value="2200720|?|xghkjh|?|Anil|?|12361">
                                        xghkjh[]-[12361]-[LKG-A]-[Anil-1234567891]</option>
                                    <option value="2200722|?|सौरभ|?|sunil  jain|?|9">सौरभ[]-[9]-[2ND-A]-[sunil
                                        jain-9234567981]</option>
                                    <option value="2200723|?|aashu |?||?|">aashu []-[]-[3RD-A]-[-1234567891]</option>
                                    <option value="2200724|?|SANJAY KUMAR|?|manoj pandey|?|">SANJAY
                                        KUMAR[]-[]-[UKG-A]-[manoj pandey-470050060]</option>
                                    <option value="2200725|?|Rahul kumar|?|vijay singh|?|">Rahul
                                        kumar[]-[]-[5TH-A]-[vijay singh-8700377769]</option>
                                    <option value="2200728|?|saloni karn|?|bijay karn|?|28">saloni
                                        karn[]-[28]-[2ND-A]-[bijay karn-9816870719]</option>
                                    <option value="2200729|?|sushant karn|?|bijay karn|?|17">sushant
                                        karn[]-[17]-[UKG-A]-[bijay karn-9816870719]</option>
                                    <option value="2200730|?|sanam karn|?|bijay karn|?|12362">sanam
                                        karn[]-[12362]-[LKG-A]-[bijay karn-9816870719]</option>
                                    <option value="2200731|?|simran|?|PRAKASH PATIDAR|?|">simran[]-[]-[5TH-A]-[PRAKASH
                                        PATIDAR-9977522556]</option>
                                    <option value="2200732|?|APEKSHIT KOLI|?|MANOJ KUMAR KOLI|?|5">APEKSHIT
                                        KOLI[]-[5]-[2ND-A]-[MANOJ KUMAR KOLI-7697233299]</option>
                                    <option value="2200733|?|Akshay Karande|?|NILESH PATIDAR|?|12366">Akshay
                                        Karande[]-[12366]-[LKG-A]-[NILESH PATIDAR-]</option>
                                    <option value="2200734|?|Rituraj|?|mitu raj|?|126593">
                                        Rituraj[]-[126593]-[2ND-A]-[mitu raj-9875455522]</option>
                                    <option value="2200735|?|Aaditya |?|Sujit|?|1">Aaditya
                                        []-[1]-[2ND-A]-[Sujit-9934507865]</option>
                                    <option value="2200737|?|ashok|?||?|">ashok[]-[]-[9TH-A]-[-]</option>
                                    <option value="2200738|?|mayank|?|demo|?|12367">mayank[]-[12367]-[LKG-A]-[demo--1]
                                    </option>
                                    <option value="2200740|?|ashok|?||?|6">ashok[]-[6]-[2ND-A]-[-]</option>
                                    <option value="2200741|?|Abhay|?||?|4">Abhay[]-[4]-[UKG-A]-[-]</option>
                                    <option value="2200742|?|vivek|?||?|30">vivek[]-[30]-[2ND-A]-[-]</option>
                                    <option value="2200743|?|abhisek|?||?|401390">
                                        abhisek[]-[401390]-[1ST-A]-[-8109195202]</option>
                                    <option value="2200744|?|bbs|?|bbs|?|10">bbs[]-[10]-[2ND-A]-[bbs-9638527410]
                                    </option>
                                    <option value="2200745|?|roma|?||?|">roma[]-[]-[9TH-A]-[-8109195202]</option>
                                    <option value="2200746|?|ravi|?|udham|?|">ravi[]-[]-[2ND-A]-[udham-56548455455]
                                    </option>
                                    <option value="2200747|?|Vaishnavi Thakur|?|Mr. Amrendra Pratap Singh |?|12368">
                                        Vaishnavi Thakur[]-[12368]-[LKG-A]-[Mr. Amrendra Pratap Singh -9918666600]
                                    </option>
                                    <option value="2200748|?|AADITYA JHILLE|?|AASHISH JHILLE|?|">AADITYA
                                        JHILLE[552]-[]-[2ND-A]-[AASHISH JHILLE-7024347776]</option>
                                    <option value="2200749|?|Shifa Meman|?|Shabbir Meman|?|">Shifa
                                        Meman[]-[]-[8TH-A]-[Shabbir Meman-9893840078]</option>
                                    <option value="2200750|?|ROHIT KUMAR|?|DOODH NATH YADAV|?|">ROHIT
                                        KUMAR[]-[]-[2ND-A]-[DOODH NATH YADAV-8577908478]</option>
                                    <option value="2200751|?|Prashant  KUMAR|?|Rammu lal|?|">Prashant
                                        KUMAR[]-[]-[2ND-A]-[Rammu lal-7748908646]</option>
                                    <option value="2200752|?|Urvi sen|?|Prabhash sen|?|12369">Urvi
                                        sen[]-[12369]-[LKG-A]-[Prabhash sen-9101065310]</option>
                                    <option value="2200753|?|Akshaj Mishra|?|shesh Narayan Mishra|?|1">Akshaj
                                        Mishra[]-[1]-[3RD-A]-[shesh Narayan Mishra-9685437207]</option>
                                    <option value="2200755|?|priya|?|rahul mehara|?|26">priya[]-[26]-[4TH-A]-[rahul
                                        mehara-65463312]</option>
                                    <option value="2200756|?|RAJESH KUMAR MAHTO |?|SITA RAM MAHTO |?|12005">RAJESH KUMAR
                                        MAHTO []-[12005]-[6TH-A]-[SITA RAM MAHTO -7488150952]</option>
                                    <option value="2200757|?|Ram|?|Bca|?|">Ram[]-[]-[12TH-A]-[Bca-9416499566]</option>
                                    <option value="2200758|?|Aashish|?|Ramesh|?|6">
                                        Aashish[]-[6]-[NURSERY-A]-[Ramesh-9416499566]</option>
                                    <option value="2200759|?|INAMUR RAHMAN|?|ATIKUR RAHMAN|?|12348">INAMUR
                                        RAHMAN[]-[12348]-[LKG-A]-[ATIKUR RAHMAN-8486304694]</option>
                                    <option value="2200760|?|nidhi jain |?|sunil  jain|?|4">nidhi jain
                                        []-[4]-[3RD-A]-[sunil jain-9988525245]</option>
                                    <option value="2200761|?|rakesh|?||?|12370">rakesh[]-[12370]-[LKG-A]-[-]</option>
                                    <option value="2200762|?|Ravi|?||?|">Ravi[]-[]-[12TH-A]-[-8059076999]</option>
                                    <option value="2200763|?|VINAYAK PATIDAR|?|rahul mehara|?|126507">VINAYAK
                                        PATIDAR[]-[126507]-[5TH-A]-[rahul mehara-456946564]</option>
                                    <option value="2200765|?|RAJ  NAYK |?|GOPAL KHATRI|?|12004">RAJ NAYK
                                        []-[12004]-[6TH-A]-[GOPAL KHATRI-96325663]</option>
                                    <option value="2200767|?|Praashant |?|rammulal|?|126501">Praashant
                                        []-[126501]-[5TH-A]-[rammulal-70000040]</option>
                                    <option value="2200770|?|raman|?|tapan|?|14">
                                        raman[]-[14]-[NURSERY-A]-[tapan-7896541256]</option>
                                    <option value="2200771|?|Akshay|?|ABC|?|">Akshay[]-[]-[8TH-A]-[ABC-1234567890]
                                    </option>
                                    <option value="2200772|?|Prashant r|?|rahul mehara |?|">Prashant
                                        r[]-[]-[5TH-A]-[rahul mehara -]</option>
                                    <option value="2200776|?|nidhi jain |?|sunil  jain|?|24">nidhi jain
                                        []-[24]-[4TH-A]-[sunil jain-9988554665]</option>
                                    <option value="2200779|?|sunil 1|?|Asad|?|">sunil 1[]-[]-[2ND-A]-[Asad-9955886644]
                                    </option>
                                    <option value="2200780|?|Nikhil|?|jonh|?|">Nikhil[]-[]-[UKG-A]-[jonh-9090909090]
                                    </option>
                                    <option value="2200782|?|yashi|?|pushpendra|?|17">
                                        yashi[]-[17]-[NURSERY-A]-[pushpendra-8430555580]</option>
                                    <option value="2200783|?|Gopi|?|BIKSHAM |?|126572">Gopi[]-[126572]-[8TH-A]-[BIKSHAM
                                        -9052483352]</option>
                                    <option value="2200785|?|ABHIMANYU SHARMA|?|GOURAV SHARMA|?|7">ABHIMANYU
                                        SHARMA[1001]-[7]-[NURSERY-A]-[GOURAV SHARMA-9755404505]</option>
                                    <option value="2200786|?|AVNI SHARMA|?|SOURABH SHARMA|?|">AVNI
                                        SHARMA[]-[]-[2ND-A]-[SOURABH SHARMA-9826625627]</option>
                                    <option value="2200788|?|Fig|?|Niraj Kumar |?|">Fig[]-[]-[7TH-A]-[Niraj Kumar
                                        -458725]</option>
                                    <option value="2200790|?|shree|?|samay singh |?|16">shree[]-[16]-[NURSERY-A]-[samay
                                        singh -9911587536]</option>
                                    <option value="2200791|?|shreyansh|?|Neeraj kumar|?|401396">
                                        shreyansh[]-[401396]-[1ST-A]-[Neeraj kumar-9911587539]</option>
                                    <option value="2200793|?|Ajay|?|Vijay|?|8">
                                        Ajay[]-[8]-[NURSERY-A]-[Vijay-685555555555]</option>
                                    <option value="2200795|?|Druwa Ganesh Chaudhari|?|Ganesh Chaudhari|?|11">Druwa
                                        Ganesh Chaudhari[]-[11]-[NURSERY-A]-[Ganesh Chaudhari-8469808008]</option>
                                    <option value="2200796|?|SONU PRAJAPATI|?|LALARAM PRAJAPATI|?|24">SONU
                                        PRAJAPATI[741]-[24]-[2ND-A]-[LALARAM PRAJAPATI-7067208375]</option>
                                    <option value="2200797|?|Md alam ali |?|Ali alam|?|">Md alam ali []-[]-[UKG-A]-[Ali
                                        alam-9473000888]</option>
                                    <option value="2200798|?|dummy |?|dummy|?|11">dummy
                                        [0950]-[11]-[2ND-A]-[dummy-1234567890]</option>
                                    <option value="2200799|?|TABREZ ALAM|?|BAKRIDAN ANSARI|?|">TABREZ
                                        ALAM[]-[]-[2ND-A]-[BAKRIDAN ANSARI-7677425494]</option>
                                    <option value="2200800|?|SHIVANSH RAWAT|?|AJAY|?|15">SHIVANSH
                                        RAWAT[]-[15]-[NURSERY-A]-[AJAY-6283926887]</option>
                                    <option value="2200805|?|mahi|?|rohit kumar |?|1265704">
                                        mahi[]-[1265704]-[8TH-A]-[rohit kumar -]</option>
                                    <option value="2200806|?|mahi|?|ram singh |?|3">mahi[]-[3]-[UKG-A]-[ram singh
                                        -7024510634]</option>
                                    <option value="2200810|?|shahnawaz|?||?|401395">
                                        shahnawaz[]-[401395]-[1ST-A]-[-7677425494]</option>
                                    <option value="2200811|?|yasin|?||?|401400">yasin[]-[401400]-[1ST-A]-[-9931326638]
                                    </option>
                                    <option value="2200812|?|sultana|?||?|401398">
                                        sultana[]-[401398]-[1ST-A]-[-9693212542]</option>
                                    <option value="2200814|?|pragya |?|rajesh|?|1030">pragya
                                        []-[1030]-[6TH-A]-[rajesh-1234567891]</option>
                                    <option value="2200817|?|priya|?|kaml raj|?|1265710">priya[]-[1265710]-[8TH-A]-[kaml
                                        raj-56454564564564]</option>
                                    <option value="2200822|?|mahi|?|kaml raj|?|1265705">mahi[]-[1265705]-[8TH-A]-[kaml
                                        raj-5644545456]</option>
                                    <option value="2200823|?|Yash |?|Soun|?|">Yash []-[]-[NURSERY-A]-[Soun-6265767366]
                                    </option>
                                    <option value="2200827|?|jeet kumar|?|amit kumar |?|1031">jeet
                                        kumar[]-[1031]-[6TH-A]-[amit kumar -7896454571]</option>
                                    <option value="2200831|?|PANKAJ KUMAR|?|UPENDRA SHARMA|?|">PANKAJ
                                        KUMAR[]-[]-[2ND-A]-[UPENDRA SHARMA-7004625934]</option>
                                    <option value="2200836|?|Rohit|?|Ram kumar|?|">Rohit[]-[]-[9TH-A]-[Ram
                                        kumar-9918066214]</option>
                                    <option value="2200841|?|vicky uikey|?|jitendrasingh uikey|?|401399">vicky
                                        uikey[]-[401399]-[1ST-A]-[jitendrasingh uikey-7354713649]</option>
                                    <option value="2200846|?|penolope |?|jonh|?|1265706">penolope
                                        []-[1265706]-[8TH-A]-[jonh-]</option>
                                    <option value="2200854|?|Abdul sami |?|Mohd Sharif |?|">Abdul sami
                                        []-[]-[12TH-A]-[Mohd Sharif -6005939589]</option>
                                    <option value="2200856|?|jjlklkk|?||?|1265703">jjlklkk[]-[1265703]-[8TH-A]-[-]
                                    </option>
                                    <option value="2200861|?|VINAYAK PATIDAR|?|SUNIL RAI|?|25">VINAYAK
                                        PATIDAR[]-[25]-[2ND-A]-[SUNIL RAI-9955882211]</option>
                                    <option value="2200864|?|NIDHI SINGH|?|RAMRAJ|?|">NIDHI
                                        SINGH[]-[]-[5TH-A]-[RAMRAJ-89789665677]</option>
                                    <option value="2200868|?|Prashant |?|Rammu lal|?|">Prashant []-[]-[7TH-A]-[Rammu
                                        lal-1234569875]</option>
                                    <option value="2200869|?|Prashant |?|Rammu lal|?|">Prashant []-[]-[7TH-A]-[Rammu
                                        lal-1234587932]</option>
                                    <option value="2200871|?|pooja bairagi|?|j. d. bairagi|?|1265707">pooja
                                        bairagi[]-[1265707]-[8TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200872|?|pooja bairagi|?|j. d. bairagi|?|1265708">pooja
                                        bairagi[]-[1265708]-[8TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200879|?|pooja bairagi|?|Mr. J.D. Bairagi|?|1265709">pooja
                                        bairagi[]-[1265709]-[8TH-A]-[Mr. J.D. Bairagi-]</option>
                                    <option value="2200883|?|Farhan khan|?|Riyaz khan|?|1265701">Farhan
                                        khan[]-[1265701]-[8TH-A]-[Riyaz khan-458963248327]</option>
                                    <option value="2200884|?|पंकज कुमार|?|लालू राम|?|10">पंकज
                                        कुमार[]-[10]-[NURSERY-A]-[लालू राम-9898888888]</option>
                                    <option value="2200886|?|Mafidul Islam|?|Ali|?|">Mafidul
                                        Islam[]-[]-[6TH-A]-[Ali-00000000000000]</option>
                                    <option value="2200901|?|neha parihar |?|himanshu parihar |?|6">neha parihar
                                        []-[6]-[UKG-A]-[himanshu parihar -7854126359]</option>
                                    <option value="2200910|?|Prashant|?|Rammu lal|?|">Prashant[]-[]-[8TH-A]-[Rammu
                                        lal-7740000]</option>
                                    <option value="2200915|?|mahi|?|kaml raj|?|">mahi[]-[]-[8TH-A]-[kaml raj-4744444]
                                    </option>
                                    <option value="2200918|?|mansha|?||?|4">mansha[]-[4]-[UKG-A]-[-]</option>
                                    <option value="2200919|?|riya|?|kaml raj|?|">riya[]-[]-[8TH-A]-[kaml raj-56454564]
                                    </option>
                                    <option value="2200927|?|VINAYAK PATIDAR|?|RAJENDRA PATIDAR|?|">VINAYAK
                                        PATIDAR[]-[]-[2ND-A]-[RAJENDRA PATIDAR-9988552233]</option>
                                    <option value="2200931|?|ArhN|?|Arqam|?|">ArhN[]-[]-[5TH-A]-[Arqam-982365526]
                                    </option>
                                    <option value="2200933|?|Ariz|?||?|1">Ariz[]-[1]-[UKG-A]-[-]</option>
                                    <option value="2200934|?|Ariz|?||?|2">Ariz[]-[2]-[UKG-A]-[-]</option>
                                    <option value="2200936|?|vicky uikey|?|jitendra singh uikey|?|">vicky
                                        uikey[]-[]-[2ND-A]-[jitendra singh uikey-7354713649]</option>
                                    <option value="2200937|?|Chirag jatav|?|MR.Arjun jatav|?|401391">Chirag
                                        jatav[]-[401391]-[1ST-A]-[MR.Arjun jatav-123]</option>
                                    <option value="2200938|?|Pooja bairagi |?|Smt. Meenu bairagi|?|">Pooja bairagi
                                        []-[]-[8TH-A]-[Smt. Meenu bairagi-963486652388]</option>
                                    <option value="2200939|?|rajkumar|?|Rammu lal|?|">rajkumar[]-[]-[8TH-A]-[Rammu
                                        lal-544564]</option>
                                    <option value="2200942|?|priya|?||?|">priya[]-[]-[8TH-A]-[-]</option>
                                    <option value="2200943|?|Md. Mokarram alam |?|Md. Siddique alam |?|5">Md. Mokarram
                                        alam []-[5]-[UKG-A]-[Md. Siddique alam -6200665811]</option>
                                    <option value="2200945|?|ashta |?|sanjeev |?|">ashta []-[]-[8TH-A]-[sanjeev
                                        -7894561230]</option>
                                    <option value="2200946|?|lalit |?|harichandra |?|">lalit []-[]-[7TH-A]-[harichandra
                                        -1234567890]</option>
                                    <option value="2200947|?|shikha |?|rajendra |?|">shikha []-[]-[8TH-A]-[rajendra
                                        -546123790]</option>
                                    <option value="2200948|?|SANDEEP|?|PRATHAM SINGH|?|12363">
                                        SANDEEP[]-[12363]-[LKG-A]-[PRATHAM SINGH-9991233258]</option>
                                    <option value="2200951|?|Vansh Kumar Pasi|?|Ravi Pasi|?|">Vansh Kumar
                                        Pasi[]-[]-[2ND-A]-[Ravi Pasi-8103488491]</option>
                                    <option value="2200953|?|rakesh|?|shaelendra|?|12365">
                                        rakesh[]-[12365]-[LKG-A]-[shaelendra-9058068745]</option>
                                    <option value="2200955|?|RAM KUMAR |?|SHYAM KUMAR |?|">RAM KUMAR
                                        []-[]-[2ND-A]-[SHYAM KUMAR -8936860311]</option>
                                    <option value="2200957|?|Prashant |?|rammu lal |?|">Prashant []-[]-[8TH-A]-[rammu
                                        lal -7748770000]</option>
                                    <option value="2200958|?|Prashant |?|rammu lal |?|">Prashant []-[]-[8TH-A]-[rammu
                                        lal -74444]</option>
                                    <option value="2200959|?|Amit rao|?|Sahab rao|?|">Amit rao[]-[]-[2ND-A]-[Sahab
                                        rao-9450673349]</option>
                                    <option value="2200961|?|NIDHI SINGH|?|BHARAT PATIDAR|?|">NIDHI
                                        SINGH[]-[]-[2ND-A]-[BHARAT PATIDAR-824685465]</option>
                                    <option value="2200962|?|shravan singh|?|rajaram singh|?|">shravan
                                        singh[]-[]-[2ND-A]-[rajaram singh-9452358861]</option>
                                    <option value="2200965|?|asharamk|?||?|">asharamk[]-[]-[2ND-A]-[-6265861579]
                                    </option>
                                    <option value="2200974|?|kamalkant|?|vasudev dhakad|?|">
                                        kamalkant[]-[]-[8TH-A]-[vasudev dhakad-9752199047]</option>
                                    <option value="2200976|?|Prashant |?|rammu lal |?|">Prashant []-[]-[8TH-A]-[rammu
                                        lal -744777]</option>
                                    <option value="2200977|?|Aarunya Raj Sinha|?|tret|?|">Aarunya Raj
                                        Sinha[]-[]-[UKG-A]-[tret-87874545454]</option>
                                    <option value="2200980|?|Monali|?||?|">Monali[03]-[]-[2ND-A]-[-]</option>
                                    <option value="2200984|?|lokesh|?|sandeep|?|">
                                        lokesh[]-[]-[8TH-A]-[sandeep-9416499566]</option>
                                    <option value="2200987|?|prash|?|rrmm|?|">prash[]-[]-[7TH-A]-[rrmm-7444]</option>
                                    <option value="2200989|?|Prashant |?|rammu lal |?|">Prashant []-[]-[8TH-A]-[rammu
                                        lal -74440]</option>
                                    <option value="2200990|?|Prashant |?|rammu lal |?|123469">Prashant
                                        []-[123469]-[8TH-A]-[rammu lal -744]</option>
                                    <option value="2200992|?|Prashant |?||?|123470">Prashant []-[123470]-[8TH-A]-[-77]
                                    </option>
                                    <option value="2200993|?|VEDANT TIWARI|?|MANOJ KUMAR TIWARI|?|123476">VEDANT
                                        TIWARI[]-[123476]-[8TH-A]-[MANOJ KUMAR TIWARI-8090688671]</option>
                                    <option value="2201009|?|Aamna Hussain|?|Syed Farhat Hussain|?|5">Aamna
                                        Hussain[]-[5]-[NURSERY-A]-[Syed Farhat Hussain-9018501010]</option>
                                    <option value="2201010|?|Prashant |?|rammu lal |?|">Prashant []-[]-[7TH-A]-[rammu
                                        lal -74444]</option>
                                    <option value="2201015|?|Prashant |?|rammu lal |?|">Prashant []-[]-[7TH-A]-[rammu
                                        lal -7441000]</option>
                                    <option value="2201032|?|RAJESH CHOVE|?|MUKESH CHOVE|?|">RAJESH
                                        CHOVE[]-[]-[9TH-A]-[MUKESH CHOVE-]</option>
                                    <option value="2201035|?|Nitya Yadav|?|Mr. Mayank Yadav|?|">Nitya
                                        Yadav[]-[]-[NURSERY-A]-[Mr. Mayank Yadav-8707260755]</option>
                                    <option value="2201036|?|Shubh Kashyap|?|Mr. Anikesh Kumar|?|">Shubh
                                        Kashyap[]-[]-[NURSERY-A]-[Mr. Anikesh Kumar-8957380880]</option>
                                    <option value="2201037|?|Arohi Kushwaha|?|Mr. Shailendra Singh Kushwaha|?|">Arohi
                                        Kushwaha[]-[]-[NURSERY-A]-[Mr. Shailendra Singh Kushwaha-8726794375]</option>
                                    <option value="2201038|?|Anikesh|?|Mr. Amit Kumar|?|">Anikesh[]-[]-[NURSERY-A]-[Mr.
                                        Amit Kumar-9621111842]</option>
                                    <option value="2201039|?|Prithviraj|?|Dr. Pramod Kumar|?|13">
                                        Prithviraj[]-[13]-[NURSERY-A]-[Dr. Pramod Kumar-9219270152]</option>
                                    <option value="2201040|?|Arushi Diwakar|?|Mr. Virendra Kumar|?|9">Arushi
                                        Diwakar[]-[9]-[NURSERY-A]-[Mr. Virendra Kumar-6393465780]</option>
                                    <option value="2201041|?|Kartik Nishad|?|Kartik Nishad|?|12">Kartik
                                        Nishad[]-[12]-[NURSERY-A]-[Kartik Nishad-]</option>
                                    <option value="2201062|?|Ramesh|?|Suresh|?|28">
                                        Ramesh[]-[28]-[4TH-A]-[Suresh-9821223300]</option>
                                    <option value="2201068|?|AUGUSTAY|?| SHARMA|?|">AUGUSTAY[50]-[]-[10TH-A]-[
                                        SHARMA-9897015271]</option>
                                    <option value="2201069|?|Anamika Agrawal|?|Sushil Agrawal|?|">Anamika
                                        Agrawal[ABC123]-[]-[7TH-A]-[Sushil Agrawal-9111111111]</option>
                                    <option value="2201076|?|Sujata Agrawal|?|Sushil Agrawal|?|401397">Sujata
                                        Agrawal[ABC345]-[401397]-[1ST-A]-[Sushil Agrawal-7111111111]</option>
                                    <option value="2201077|?|aman soni|?|ravi soni|?|">aman soni[]-[]-[11TH-A]-[ravi
                                        soni-6387770743]</option>
                                    <option value="2201078|?|aman soni 2|?|ravi soni|?|">aman soni 2[]-[]-[9TH-A]-[ravi
                                        soni-6387770743]</option>
                                    <option value="2201079|?|amit|?|ram chandr|?|">amit[]-[]-[11TH-A]-[ram
                                        chandr-8976453600]</option>
                                    <option value="2201080|?|Roshan |?|Raj Mishra|?|">Roshan []-[]-[6TH-A]-[Raj
                                        Mishra-9936528547]</option>
                                    <option value="2201081|?|NIDHI SINGH |?|Asad|?|">NIDHI SINGH
                                        []-[]-[7TH-A]-[Asad-8454154454]</option>
                                    <option value="2201082|?|Rajdeep kumar|?|Mandal himesh|?|">Rajdeep
                                        kumar[]-[]-[4TH-A]-[Mandal himesh-8709788098]</option>
                                    <option value="2201084|?|SURYA PRATAP MAURYA|?||?|">SURYA PRATAP
                                        MAURYA[]-[]-[5TH-A]-[-]</option>
                                    <option value="2201085|?|Danica Mariam Jacob|?|J P Jacob|?|">Danica Mariam
                                        Jacob[]-[]-[1ST-A]-[J P Jacob-9977228818]</option>
                                    <option value="2201086|?|Rahul Kumar|?|Lalbabu Ray|?|">Rahul
                                        Kumar[]-[]-[NURSERY-A]-[Lalbabu Ray-9570503057]</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>student Name</label>
                            <input type="text" name="annualfee_student_name" value="" placeholder="student Name"
                                id="student_name" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Name</label>
                            <input type="text" name="annualfee_student_father_name" id="student_father_name"
                                placeholder="Father's Name" value="" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Roll No</label>
                            <input type="text" name="annualfee_student_roll_no" value="" placeholder="Student Roll No"
                                id="student_roll_no" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>School Name</label>
                            <input type="text" name="annualfee_school_name" value="SIMPTION TECH PVT LTD"
                                placeholder="School Name" required class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>During Year</label>
                            <div class="col-sm-12">
                                <div class="col-sm-6">

                                    <input type="text" name="annualfee_current_year_from" class="form-control"
                                        placeholder="From" required />
                                </div>

                                <div class="col-sm-6">

                                    <input type="text" class="form-control" name="annualfee_current_year_to"
                                        placeholder="To" required /><br />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label> AnnualFee Amt</label>
                            <input type="text" name="annualfee_type" placeholder="AnnualFee Amt" value=""
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Issued Date</label>
                            <input type="date" name="annualfee_issue_date" placeholder="Issued Date" value=""
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <br />
                        <center><input type="submit" name="submit" value="Submit" class="btn btn-success" /></center>
                        <br />
                    </div>


                </form>
                <div class="col-md-12">

                </div>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@innclude('common.footer')
<script>
$('.select2').select2();
</script>