@include('common.header')
@include('common.navbar')
<script type="text/javascript">
function fill_detail(value) {
    $.ajax({
        address: "POST",
        url: access_link + "certificate/ajax_search_student_box_tc.php?id=" + value + "",
        cache: false,
        success: function(detail) {

            var str = detail;
            var res = str.split("|?|");
            $("#student_roll_no").val(value);
            $("#student_name").val(res[0]);
            $("#student_class").val(res[1]);
            $("#student_section").val(res[2]);
            $("#tc_student_father_name").val(res[3]);
            $("#tc_mother_name").val(res[4]);
            $("#date_of_birth").val(res[5]);
            $("#date_of_birth_in_word").val(res[6]);
            $("#tc_student_sssm_id_no").val(res[7]);
            $("#tc_admission_date").val(res[8]);
            $("#tc_admission_no").val(res[9]);
            $("#school_roll_no").val(res[10]);
            $("#class_in_which_admitted").val(res[11]);
            $("#tc_student_class_leaving").val(res[12]);
            $("#tc_student_uid_no").val(res[13]);
            $("#total_num_working").val(res[16]);
            $("#num_of_days_present").val(res[17]);
            //   $("#tc_generate_no").val(res[18]);  


        }
    });

}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "certificate/tc_form_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            ////alert_new(detail);
            //$('#query_print').html(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('certificate/tc_list');
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
        <li><a href="{{url('/certificate')}}"><i class="fa fa-certificate"></i> Certificate</a></li>
        <li class="active">TC Form</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title"> TC Generate</h3>
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
                                    style="width:100%" required>
                                    <option value="">Select student</option>
                                    <option value="2000296">ajit[]-[]-[2ND-B]-[Satveer-9050653720]</option>
                                    <option value="2000297">REHAN[]-[]-[2ND-B]-[FARHAT ALI-8077194624]</option>
                                    <option value="2000314">Rajesh Prasad[]-[]-[2ND-B]-[Ananda Prasad-9135956095]
                                    </option>
                                    <option value="2000332">Palak Kumari[85274196313]-[]-[2ND-B]-[Krishna
                                        Sahani-9876543210]</option>
                                    <option value="2000345">joy[192]-[126574]-[3RD-A]-[peter-8893387594]</option>
                                    <option value="2100412">Upen[]-[126579]-[3RD-A]-[Rajdev Mishra-8601727725]</option>
                                    <option value="2100414">Saurya[]-[30]-[4TH-A]-[Sanjeev Kumar-9456930082]</option>
                                    <option value="2100415">dummy[]-[]-[2ND-B]-[dummy father -1234567890]</option>
                                    <option value="2100427">Akhil[]-[4]-[2ND-A]-[Mr. Manoj-9719433442]</option>
                                    <option value="2100430">Sangita[]-[25]-[UKG-A]-[Ramji-9827185031]</option>
                                    <option value="2100437">cddf[]-[126573]-[3RD-A]-[-6]</option>
                                    <option value="2100450">umesh dhakad[]-[31]-[UKG-A]-[mr ramgopal dhakad-8269548476]
                                    </option>
                                    <option value="2100451">Humaira[]-[18]-[UKG-A]-[Palash-1316543133]</option>
                                    <option value="2100458">ayush koli[]-[8]-[UKG-A]-[prabhu dayal-9826390607]</option>
                                    <option value="2100470">ajay kewat[]-[126571]-[3RD-A]-[durga kewat-]</option>
                                    <option value="2100471">Aman[]-[16]-[4TH-A]-[Asad-9634569635]</option>
                                    <option value="2100474">raja[]-[126577]-[3RD-A]-[raja-1234567891]</option>
                                    <option value="2100520">Nikhil Lodhi[427]-[25]-[4TH-A]-[Mayank Lodhi-8679458246]
                                    </option>
                                    <option value="2100536">RAJESH[]-[]-[11TH-A]-[TARACHANDRA-9839458652]</option>
                                    <option value="2100537">Vaidik[]-[12565]-[5TH-A]-[-9974301792]</option>
                                    <option value="2100538">Diviya prajapati[]-[18]-[4TH-A]-[Shrawan Ram-9571176454]
                                    </option>
                                    <option value="2100541">Sagar Singh[]-[1]-[7TH-A]-[Rakesh Singh-1234567890]</option>
                                    <option value="2100544">Jidan uddin[]-[401392]-[1ST-A]-[riyaz uddin-8942116685]
                                    </option>
                                    <option value="2100549">Avnish kumar[]-[120004]-[2ND-A]-[Gopal kumar-9931742369]
                                    </option>
                                    <option value="2100553">umesh [109]-[30]-[UKG-A]-[abhishek-9144555977]</option>
                                    <option value="2100561">umesh []-[]-[6TH-A]-[-]</option>
                                    <option value="2100563">umesh []-[12564]-[5TH-A]-[-]</option>
                                    <option value="2100571">Anshu[126]-[7]-[UKG-A]-[Vijay-9144555977]</option>
                                    <option value="2100575"> BABALI SAHU[100094]-[2]-[UKG-A]-[SHAIKH-7978988989]
                                    </option>
                                    <option value="2100583">श्री[]-[120005]-[2ND-A]-[दीपक-9926621333]</option>
                                    <option value="2100585">Muhammed Adnan[]-[23]-[4TH-A]-[Muhammed Afnan-686868606868]
                                    </option>
                                    <option value="2100589">hari[]-[101206]-[2ND-A]-[hani-123456]</option>
                                    <option value="2100601">Nidhi Mishra[]-[101212]-[UKG-A]-[Nidhi Mishra-7571940317]
                                    </option>
                                    <option value="2100609">SARIKA SULTANE[]-[]-[11TH-A]-[SANJAY-7498177242]</option>
                                    <option value="2200612">dummy[]-[120007]-[2ND-A]-[dummy father -1234567890]</option>
                                    <option value="2200614">balveer singh[77]-[12372]-[LKG-A]-[sukhvinder
                                        singh-9144555977]</option>
                                    <option value="2200615">mahira khan[94]-[12373]-[LKG-A]-[irfan khan-9144555977]
                                    </option>
                                    <option value="2200618">sanny[66]-[12371]-[LKG-A]-[soham-9144555977]</option>
                                    <option value="2200622">rohan sah[]-[120023]-[2ND-A]-[ram -9816870719]</option>
                                    <option value="2200623">ishan kumar[]-[120009]-[2ND-A]-[rohit kumar-9816870719]
                                    </option>
                                    <option value="2200624">pankaj patel[1234]-[]-[6TH-A]-[ram -9816870719]</option>
                                    <option value="2200626">kirti panday[101]-[12374]-[LKG-A]-[sumit panday-9865474758]
                                    </option>
                                    <option value="2200627">lali[]-[12364]-[LKG-A]-[-]</option>
                                    <option value="2200628">sushant singh[75]-[101219]-[UKG-A]-[nilkamal singh
                                        -9825734280]</option>
                                    <option value="2200629">saloni[]-[120025]-[2ND-A]-[bijay-9825734280]</option>
                                    <option value="2200630">suman[]-[]-[6TH-A]-[bijay-9825734280]</option>
                                    <option value="2200632">MANVEER SINGH []-[]-[7TH-A]-[GURDEV SINGH -836009915]
                                    </option>
                                    <option value="2200633">RAM PANDEY[]-[]-[9TH-A]-[KAMLESH PANDEY-77718853445]
                                    </option>
                                    <option value="2200634">Mayur Mangesh Padvi[]-[120012]-[2ND-A]-[Mangesh Gorakh
                                        Padvi-7773954846]</option>
                                    <option value="2200635">Bhavesh Arvind Padvi[]-[120006]-[2ND-A]-[Arvind Gorakh
                                        Padvi-8766578634]</option>
                                    <option value="2200636">Nikhil Dinesh Padvi[]-[120014]-[2ND-A]-[Dinesh Gorakh
                                        Padvi-7507167517]</option>
                                    <option value="2200637">Kiran Sharma[]-[]-[7TH-A]-[Ramu Sharma-123456789]</option>
                                    <option value="2200638">Riya Sharma[]-[]-[7TH-A]-[Ram Sharma-234567891]</option>
                                    <option value="2200640">Meena Verma[]-[]-[7TH-A]-[Jay Verma-456789123]</option>
                                    <option value="2200641">Heena Mittal[]-[]-[7TH-A]-[Lalu Pasad-567891234]</option>
                                    <option value="2200642">Anamika[]-[]-[7TH-A]-[Yash Kapoor-9456312705]</option>
                                    <option value="2200643">Lalu Kumar[]-[]-[7TH-A]-[Raju Kumar-678912345]</option>
                                    <option value="2200644">SK Thakur[]-[101217]-[UKG-A]-[Aasss-8084407273]</option>
                                    <option value="2200645">abcs[]-[120003]-[2ND-A]-[ebgh-25585]</option>
                                    <option value="2200646">Jay Sharma[]-[101207]-[UKG-A]-[Harsh Sharma-1234567891]
                                    </option>
                                    <option value="2200647">Sikdar[]-[101216]-[UKG-A]-[-666]</option>
                                    <option value="2200648">Bijoy[]-[101204]-[UKG-A]-[ajoy-4555]</option>
                                    <option value="2200650">sona[]-[120026]-[2ND-A]-[rajesh-9816870719]</option>
                                    <option value="2200651">RIYA DAS[]-[101214]-[UKG-A]-[RATAN DAS-]</option>
                                    <option value="2200652">SUMIT KUMAR[100094]-[101218]-[UKG-A]-[Anil kumar
                                        -1234567890]</option>
                                    <option value="2200653">Somya[]-[]-[UKG-A]-[-6756789876]</option>
                                    <option value="2200654">MAHEK DASHORE[]-[]-[11TH-A]-[NAVIN KUMAR DASHORE-9584669888]
                                    </option>
                                    <option value="2200656">Radha Kumari[]-[101213]-[UKG-A]-[Ram Kumar-1234567894]
                                    </option>
                                    <option value="2200657">ARPAN NANDEWAR[]-[101201]-[UKG-A]-[RAM NANDEWAR-7987736568]
                                    </option>
                                    <option value="2200659">mahir khan []-[22]-[4TH-A]-[javed khan -8305694069]</option>
                                    <option value="2200661">imran khan []-[19]-[4TH-A]-[waseem khan -9977805298]
                                    </option>
                                    <option value="2200662">sajid khan []-[120024]-[2ND-A]-[javed khan-9826038592]
                                    </option>
                                    <option value="2200663">dummy []-[120008]-[2ND-A]-[dummy father-1234567890]</option>
                                    <option value="2200665">dishika[]-[]-[6TH-A]-[sonu khatri -1234567892]</option>
                                    <option value="2200666">Bhavesh Arvind Padvi[]-[101203]-[UKG-A]-[-]</option>
                                    <option value="2200667">payal[]-[]-[7TH-A]-[shyamlal-8052987121]</option>
                                    <option value="2200668">SAJAL[]-[29]-[4TH-A]-[-9818273851]</option>
                                    <option value="2200669">sarita[]-[]-[6TH-A]-[ramjee Gupta-8840268435]</option>
                                    <option value="2200671">Komal Gupta[11]-[120011]-[2ND-A]-[Pramod Gupta-8192906306]
                                    </option>
                                    <option value="2200672">Anil Kumar[]-[17]-[4TH-A]-[-9990008522]</option>
                                    <option value="2200674">Anil Kapoor Dhoom[]-[]-[2ND-A]-[-9998000522]</option>
                                    <option value="2200675">Prashant []-[31]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200677">RAJ[]-[120020]-[2ND-A]-[rajesh-4987549]</option>
                                    <option value="2200678">himanshi[]-[]-[UKG-A]-[babl-1444411]</option>
                                    <option value="2200679">Ram[]-[12563]-[5TH-A]-[Lala seth-9893230765]</option>
                                    <option value="2200680">Prashant Kumar[]-[12562]-[5TH-A]-[Rammu-8109607707]</option>
                                    <option value="2200681">GGDFGFDGFDG[]-[101205]-[UKG-A]-[-]</option>
                                    <option value="2200684">ABHISHEK []-[]-[UKG-A]-[B L YADAV-9695924506]</option>
                                    <option value="2200685">XYZ[]-[120027]-[2ND-A]-[XYZ-9818273851]</option>
                                    <option value="2200686">abc[]-[120002]-[2ND-A]-[-7845123698]</option>
                                    <option value="2200687">rahul[]-[120019]-[2ND-A]-[-]</option>
                                    <option value="2200688">Prashant rajak[]-[120018]-[2ND-A]-[Rammu lal-647322824425]
                                    </option>
                                    <option value="2200689"> Kanika[]-[]-[UKG-A]-[-0123456789]</option>
                                    <option value="2200691">Ravi[]-[]-[UKG-A]-[xyz-]</option>
                                    <option value="2200692">Prashant kumar[]-[120017]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200693">RAHUL[]-[]-[UKG-A]-[XYC-]</option>
                                    <option value="2200695">praveen kumar[]-[401394]-[1ST-A]-[-66666666666]</option>
                                    <option value="2200698">bjkb[]-[]-[2ND-A]-[kllkdv-9038423904]</option>
                                    <option value="2200699">laxmi[]-[]-[2ND-A]-[venkat-1234567892]</option>
                                    <option value="2200702">AJAY[]-[]-[2ND-A]-[SUNIL-7067633301]</option>
                                    <option value="2200707">kunal jha[]-[]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200708">fgdfg[]-[]-[UKG-A]-[dfgdf-955656]</option>
                                    <option value="2200709">DISHANT PATIDAR[]-[]-[6TH-A]-[-9999555333]</option>
                                    <option value="2200710">vishal jha[]-[]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200713">Ram[]-[27]-[4TH-A]-[-9999999995656]</option>
                                    <option value="2200714">vishal jha[]-[20]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200715">Prashant kumar[]-[401393]-[1ST-A]-[babl-7844411100]</option>
                                    <option value="2200716">AS[]-[126572]-[3RD-A]-[SS-4545454]</option>
                                    <option value="2200717">muskan ray[]-[13]-[UKG-A]-[roshan ray-9813405312]</option>
                                    <option value="2200719">Prashant KUMAR[14]-[12561]-[5TH-A]-[Rammu lal-7744447774]
                                    </option>
                                    <option value="2200720">xghkjh[]-[12361]-[LKG-A]-[Anil-1234567891]</option>
                                    <option value="2200722">सौरभ[]-[9]-[2ND-A]-[sunil jain-9234567981]</option>
                                    <option value="2200723">aashu []-[]-[3RD-A]-[-1234567891]</option>
                                    <option value="2200724">SANJAY KUMAR[]-[]-[UKG-A]-[manoj pandey-470050060]</option>
                                    <option value="2200725">Rahul kumar[]-[]-[5TH-A]-[vijay singh-8700377769]</option>
                                    <option value="2200728">saloni karn[]-[28]-[2ND-A]-[bijay karn-9816870719]</option>
                                    <option value="2200729">sushant karn[]-[17]-[UKG-A]-[bijay karn-9816870719]</option>
                                    <option value="2200730">sanam karn[]-[12362]-[LKG-A]-[bijay karn-9816870719]
                                    </option>
                                    <option value="2200731">simran[]-[]-[5TH-A]-[PRAKASH PATIDAR-9977522556]</option>
                                    <option value="2200732">APEKSHIT KOLI[]-[5]-[2ND-A]-[MANOJ KUMAR KOLI-7697233299]
                                    </option>
                                    <option value="2200733">Akshay Karande[]-[12366]-[LKG-A]-[NILESH PATIDAR-]</option>
                                    <option value="2200734">Rituraj[]-[126593]-[2ND-A]-[mitu raj-9875455522]</option>
                                    <option value="2200735">Aaditya []-[1]-[2ND-A]-[Sujit-9934507865]</option>
                                    <option value="2200737">ashok[]-[]-[9TH-A]-[-]</option>
                                    <option value="2200738">mayank[]-[12367]-[LKG-A]-[demo--1]</option>
                                    <option value="2200740">ashok[]-[6]-[2ND-A]-[-]</option>
                                    <option value="2200741">Abhay[]-[4]-[UKG-A]-[-]</option>
                                    <option value="2200742">vivek[]-[30]-[2ND-A]-[-]</option>
                                    <option value="2200743">abhisek[]-[401390]-[1ST-A]-[-8109195202]</option>
                                    <option value="2200744">bbs[]-[10]-[2ND-A]-[bbs-9638527410]</option>
                                    <option value="2200745">roma[]-[]-[9TH-A]-[-8109195202]</option>
                                    <option value="2200746">ravi[]-[]-[2ND-A]-[udham-56548455455]</option>
                                    <option value="2200747">Vaishnavi Thakur[]-[12368]-[LKG-A]-[Mr. Amrendra Pratap
                                        Singh -9918666600]</option>
                                    <option value="2200748">AADITYA JHILLE[552]-[]-[2ND-A]-[AASHISH JHILLE-7024347776]
                                    </option>
                                    <option value="2200749">Shifa Meman[]-[]-[8TH-A]-[Shabbir Meman-9893840078]</option>
                                    <option value="2200750">ROHIT KUMAR[]-[]-[2ND-A]-[DOODH NATH YADAV-8577908478]
                                    </option>
                                    <option value="2200751">Prashant KUMAR[]-[]-[2ND-A]-[Rammu lal-7748908646]</option>
                                    <option value="2200752">Urvi sen[]-[12369]-[LKG-A]-[Prabhash sen-9101065310]
                                    </option>
                                    <option value="2200753">Akshaj Mishra[]-[1]-[3RD-A]-[shesh Narayan
                                        Mishra-9685437207]</option>
                                    <option value="2200755">priya[]-[26]-[4TH-A]-[rahul mehara-65463312]</option>
                                    <option value="2200756">RAJESH KUMAR MAHTO []-[12005]-[6TH-A]-[SITA RAM MAHTO
                                        -7488150952]</option>
                                    <option value="2200757">Ram[]-[]-[12TH-A]-[Bca-9416499566]</option>
                                    <option value="2200758">Aashish[]-[6]-[NURSERY-A]-[Ramesh-9416499566]</option>
                                    <option value="2200759">INAMUR RAHMAN[]-[12348]-[LKG-A]-[ATIKUR RAHMAN-8486304694]
                                    </option>
                                    <option value="2200760">nidhi jain []-[4]-[3RD-A]-[sunil jain-9988525245]</option>
                                    <option value="2200761">rakesh[]-[12370]-[LKG-A]-[-]</option>
                                    <option value="2200762">Ravi[]-[]-[12TH-A]-[-8059076999]</option>
                                    <option value="2200763">VINAYAK PATIDAR[]-[126507]-[5TH-A]-[rahul mehara-456946564]
                                    </option>
                                    <option value="2200765">RAJ NAYK []-[12004]-[6TH-A]-[GOPAL KHATRI-96325663]</option>
                                    <option value="2200767">Praashant []-[126501]-[5TH-A]-[rammulal-70000040]</option>
                                    <option value="2200770">raman[]-[14]-[NURSERY-A]-[tapan-7896541256]</option>
                                    <option value="2200771">Akshay[]-[]-[8TH-A]-[ABC-1234567890]</option>
                                    <option value="2200772">Prashant r[]-[]-[5TH-A]-[rahul mehara -]</option>
                                    <option value="2200776">nidhi jain []-[24]-[4TH-A]-[sunil jain-9988554665]</option>
                                    <option value="2200779">sunil 1[]-[]-[2ND-A]-[Asad-9955886644]</option>
                                    <option value="2200780">Nikhil[]-[]-[UKG-A]-[jonh-9090909090]</option>
                                    <option value="2200782">yashi[]-[17]-[NURSERY-A]-[pushpendra-8430555580]</option>
                                    <option value="2200783">Gopi[]-[126572]-[8TH-A]-[BIKSHAM -9052483352]</option>
                                    <option value="2200785">ABHIMANYU SHARMA[1001]-[7]-[NURSERY-A]-[GOURAV
                                        SHARMA-9755404505]</option>
                                    <option value="2200786">AVNI SHARMA[]-[]-[2ND-A]-[SOURABH SHARMA-9826625627]
                                    </option>
                                    <option value="2200788">Fig[]-[]-[7TH-A]-[Niraj Kumar -458725]</option>
                                    <option value="2200790">shree[]-[16]-[NURSERY-A]-[samay singh -9911587536]</option>
                                    <option value="2200791">shreyansh[]-[401396]-[1ST-A]-[Neeraj kumar-9911587539]
                                    </option>
                                    <option value="2200793">Ajay[]-[8]-[NURSERY-A]-[Vijay-685555555555]</option>
                                    <option value="2200795">Druwa Ganesh Chaudhari[]-[11]-[NURSERY-A]-[Ganesh
                                        Chaudhari-8469808008]</option>
                                    <option value="2200796">SONU PRAJAPATI[741]-[24]-[2ND-A]-[LALARAM
                                        PRAJAPATI-7067208375]</option>
                                    <option value="2200797">Md alam ali []-[]-[UKG-A]-[Ali alam-9473000888]</option>
                                    <option value="2200798">dummy [0950]-[11]-[2ND-A]-[dummy-1234567890]</option>
                                    <option value="2200799">TABREZ ALAM[]-[]-[2ND-A]-[BAKRIDAN ANSARI-7677425494]
                                    </option>
                                    <option value="2200800">SHIVANSH RAWAT[]-[15]-[NURSERY-A]-[AJAY-6283926887]</option>
                                    <option value="2200805">mahi[]-[1265704]-[8TH-A]-[rohit kumar -]</option>
                                    <option value="2200806">mahi[]-[3]-[UKG-A]-[ram singh -7024510634]</option>
                                    <option value="2200810">shahnawaz[]-[401395]-[1ST-A]-[-7677425494]</option>
                                    <option value="2200811">yasin[]-[401400]-[1ST-A]-[-9931326638]</option>
                                    <option value="2200812">sultana[]-[401398]-[1ST-A]-[-9693212542]</option>
                                    <option value="2200814">pragya []-[1030]-[6TH-A]-[rajesh-1234567891]</option>
                                    <option value="2200817">priya[]-[1265710]-[8TH-A]-[kaml raj-56454564564564]</option>
                                    <option value="2200822">mahi[]-[1265705]-[8TH-A]-[kaml raj-5644545456]</option>
                                    <option value="2200823">Yash []-[]-[NURSERY-A]-[Soun-6265767366]</option>
                                    <option value="2200827">jeet kumar[]-[1031]-[6TH-A]-[amit kumar -7896454571]
                                    </option>
                                    <option value="2200831">PANKAJ KUMAR[]-[]-[2ND-A]-[UPENDRA SHARMA-7004625934]
                                    </option>
                                    <option value="2200836">Rohit[]-[]-[9TH-A]-[Ram kumar-9918066214]</option>
                                    <option value="2200841">vicky uikey[]-[401399]-[1ST-A]-[jitendrasingh
                                        uikey-7354713649]</option>
                                    <option value="2200846">penolope []-[1265706]-[8TH-A]-[jonh-]</option>
                                    <option value="2200854">Abdul sami []-[]-[12TH-A]-[Mohd Sharif -6005939589]</option>
                                    <option value="2200856">jjlklkk[]-[1265703]-[8TH-A]-[-]</option>
                                    <option value="2200861">VINAYAK PATIDAR[]-[25]-[2ND-A]-[SUNIL RAI-9955882211]
                                    </option>
                                    <option value="2200864">NIDHI SINGH[]-[]-[5TH-A]-[RAMRAJ-89789665677]</option>
                                    <option value="2200868">Prashant []-[]-[7TH-A]-[Rammu lal-1234569875]</option>
                                    <option value="2200869">Prashant []-[]-[7TH-A]-[Rammu lal-1234587932]</option>
                                    <option value="2200871">pooja bairagi[]-[1265707]-[8TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200872">pooja bairagi[]-[1265708]-[8TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200879">pooja bairagi[]-[1265709]-[8TH-A]-[Mr. J.D. Bairagi-]
                                    </option>
                                    <option value="2200883">Farhan khan[]-[1265701]-[8TH-A]-[Riyaz khan-458963248327]
                                    </option>
                                    <option value="2200884">पंकज कुमार[]-[10]-[NURSERY-A]-[लालू राम-9898888888]</option>
                                    <option value="2200886">Mafidul Islam[]-[]-[6TH-A]-[Ali-00000000000000]</option>
                                    <option value="2200901">neha parihar []-[6]-[UKG-A]-[himanshu parihar -7854126359]
                                    </option>
                                    <option value="2200910">Prashant[]-[]-[8TH-A]-[Rammu lal-7740000]</option>
                                    <option value="2200915">mahi[]-[]-[8TH-A]-[kaml raj-4744444]</option>
                                    <option value="2200918">mansha[]-[4]-[UKG-A]-[-]</option>
                                    <option value="2200919">riya[]-[]-[8TH-A]-[kaml raj-56454564]</option>
                                    <option value="2200927">VINAYAK PATIDAR[]-[]-[2ND-A]-[RAJENDRA PATIDAR-9988552233]
                                    </option>
                                    <option value="2200931">ArhN[]-[]-[5TH-A]-[Arqam-982365526]</option>
                                    <option value="2200933">Ariz[]-[1]-[UKG-A]-[-]</option>
                                    <option value="2200934">Ariz[]-[2]-[UKG-A]-[-]</option>
                                    <option value="2200936">vicky uikey[]-[]-[2ND-A]-[jitendra singh uikey-7354713649]
                                    </option>
                                    <option value="2200937">Chirag jatav[]-[401391]-[1ST-A]-[MR.Arjun jatav-123]
                                    </option>
                                    <option value="2200938">Pooja bairagi []-[]-[8TH-A]-[Smt. Meenu
                                        bairagi-963486652388]</option>
                                    <option value="2200939">rajkumar[]-[]-[8TH-A]-[Rammu lal-544564]</option>
                                    <option value="2200942">priya[]-[]-[8TH-A]-[-]</option>
                                    <option value="2200943">Md. Mokarram alam []-[5]-[UKG-A]-[Md. Siddique alam
                                        -6200665811]</option>
                                    <option value="2200945">ashta []-[]-[8TH-A]-[sanjeev -7894561230]</option>
                                    <option value="2200946">lalit []-[]-[7TH-A]-[harichandra -1234567890]</option>
                                    <option value="2200947">shikha []-[]-[8TH-A]-[rajendra -546123790]</option>
                                    <option value="2200948">SANDEEP[]-[12363]-[LKG-A]-[PRATHAM SINGH-9991233258]
                                    </option>
                                    <option value="2200951">Vansh Kumar Pasi[]-[]-[2ND-A]-[Ravi Pasi-8103488491]
                                    </option>
                                    <option value="2200953">rakesh[]-[12365]-[LKG-A]-[shaelendra-9058068745]</option>
                                    <option value="2200955">RAM KUMAR []-[]-[2ND-A]-[SHYAM KUMAR -8936860311]</option>
                                    <option value="2200957">Prashant []-[]-[8TH-A]-[rammu lal -7748770000]</option>
                                    <option value="2200958">Prashant []-[]-[8TH-A]-[rammu lal -74444]</option>
                                    <option value="2200959">Amit rao[]-[]-[2ND-A]-[Sahab rao-9450673349]</option>
                                    <option value="2200961">NIDHI SINGH[]-[]-[2ND-A]-[BHARAT PATIDAR-824685465]</option>
                                    <option value="2200962">shravan singh[]-[]-[2ND-A]-[rajaram singh-9452358861]
                                    </option>
                                    <option value="2200965">asharamk[]-[]-[2ND-A]-[-6265861579]</option>
                                    <option value="2200974">kamalkant[]-[]-[8TH-A]-[vasudev dhakad-9752199047]</option>
                                    <option value="2200976">Prashant []-[]-[8TH-A]-[rammu lal -744777]</option>
                                    <option value="2200977">Aarunya Raj Sinha[]-[]-[UKG-A]-[tret-87874545454]</option>
                                    <option value="2200980">Monali[03]-[]-[2ND-A]-[-]</option>
                                    <option value="2200984">lokesh[]-[]-[8TH-A]-[sandeep-9416499566]</option>
                                    <option value="2200987">prash[]-[]-[7TH-A]-[rrmm-7444]</option>
                                    <option value="2200989">Prashant []-[]-[8TH-A]-[rammu lal -74440]</option>
                                    <option value="2200990">Prashant []-[123469]-[8TH-A]-[rammu lal -744]</option>
                                    <option value="2200992">Prashant []-[123470]-[8TH-A]-[-77]</option>
                                    <option value="2200993">VEDANT TIWARI[]-[123476]-[8TH-A]-[MANOJ KUMAR
                                        TIWARI-8090688671]</option>
                                    <option value="2201009">Aamna Hussain[]-[5]-[NURSERY-A]-[Syed Farhat
                                        Hussain-9018501010]</option>
                                    <option value="2201010">Prashant []-[]-[7TH-A]-[rammu lal -74444]</option>
                                    <option value="2201015">Prashant []-[]-[7TH-A]-[rammu lal -7441000]</option>
                                    <option value="2201032">RAJESH CHOVE[]-[]-[9TH-A]-[MUKESH CHOVE-]</option>
                                    <option value="2201035">Nitya Yadav[]-[]-[NURSERY-A]-[Mr. Mayank Yadav-8707260755]
                                    </option>
                                    <option value="2201036">Shubh Kashyap[]-[]-[NURSERY-A]-[Mr. Anikesh
                                        Kumar-8957380880]</option>
                                    <option value="2201037">Arohi Kushwaha[]-[]-[NURSERY-A]-[Mr. Shailendra Singh
                                        Kushwaha-8726794375]</option>
                                    <option value="2201038">Anikesh[]-[]-[NURSERY-A]-[Mr. Amit Kumar-9621111842]
                                    </option>
                                    <option value="2201039">Prithviraj[]-[13]-[NURSERY-A]-[Dr. Pramod Kumar-9219270152]
                                    </option>
                                    <option value="2201040">Arushi Diwakar[]-[9]-[NURSERY-A]-[Mr. Virendra
                                        Kumar-6393465780]</option>
                                    <option value="2201041">Kartik Nishad[]-[12]-[NURSERY-A]-[Kartik Nishad-]</option>
                                    <option value="2201062">Ramesh[]-[28]-[4TH-A]-[Suresh-9821223300]</option>
                                    <option value="2201068">AUGUSTAY[50]-[]-[10TH-A]-[ SHARMA-9897015271]</option>
                                    <option value="2201069">Anamika Agrawal[ABC123]-[]-[7TH-A]-[Sushil
                                        Agrawal-9111111111]</option>
                                    <option value="2201076">Sujata Agrawal[ABC345]-[401397]-[1ST-A]-[Sushil
                                        Agrawal-7111111111]</option>
                                    <option value="2201077">aman soni[]-[]-[11TH-A]-[ravi soni-6387770743]</option>
                                    <option value="2201078">aman soni 2[]-[]-[9TH-A]-[ravi soni-6387770743]</option>
                                    <option value="2201079">amit[]-[]-[11TH-A]-[ram chandr-8976453600]</option>
                                    <option value="2201080">Roshan []-[]-[6TH-A]-[Raj Mishra-9936528547]</option>
                                    <option value="2201081">NIDHI SINGH []-[]-[7TH-A]-[Asad-8454154454]</option>
                                    <option value="2201082">Rajdeep kumar[]-[]-[4TH-A]-[Mandal himesh-8709788098]
                                    </option>
                                    <option value="2201084">SURYA PRATAP MAURYA[]-[]-[5TH-A]-[-]</option>
                                    <option value="2201085">Danica Mariam Jacob[]-[]-[1ST-A]-[J P Jacob-9977228818]
                                    </option>
                                    <option value="2201086">Rahul Kumar[]-[]-[NURSERY-A]-[Lalbabu Ray-9570503057]
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Tc Generate No.</label>
                                <input type="text" id="tc_generate_no" name="tc_generate_no" value="2147483647"
                                    placeholder="Tc Generate No." class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>student Name</label>
                            <input type="text" name="tc_student_name" value="" placeholder="student Name"
                                id="student_name" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class</label>
                            <input type="text" name="tc_student_class" value="" placeholder="Class" id="student_class"
                                class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Section</label>
                            <input type="text" name="tc_student_class_section" value="" placeholder="Student Section"
                                id="student_section" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Roll No</label>
                            <input type="hidden" name="tc_student_roll_no" value="" placeholder="" id="student_roll_no"
                                class="form-control" readonly>
                            <input type="text" value="" placeholder="Student Roll No" id="school_roll_no"
                                class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>SSSM Id No.</label>
                            <input type="text" name="tc_student_sssm_id_no" id="tc_student_sssm_id_no"
                                placeholder="SSSM Id No." value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3  ">
                        <div class="form-group">
                            <label>Student Unique Id</label>
                            <input type="text" name="tc_student_uid_no" id="tc_student_uid_no"
                                placeholder="Student Unique Id" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Father's Name</label>
                            <input type="text" name="tc_student_father_name" id="tc_student_father_name"
                                placeholder="Father's Name" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Mother's Name</label>
                            <input type="text" name="tc_mother_name" id="tc_mother_name" placeholder="Mother's Name"
                                value="" class="form-control" readonly>
                        </div>

                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="text" name="date_of_birth" id="date_of_birth" placeholder="Date Of Birth"
                                value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Birth(word)</label>
                            <input type="text" name="date_of_birth_in_word" id="date_of_birth_in_word"
                                placeholder="Date Of Birth(word)" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Student Admission No.</label>
                            <input type="text" name="tc_admission_no" id="tc_admission_no"
                                placeholder="Student Admission No." value="" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Admission Date</label>
                            <input type="text" name="tc_admission_date" id="tc_admission_date"
                                placeholder="Admission Date" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class In Which Admitted</label>
                            <input type="text" name="class_in_which_admitted" id="class_in_which_admitted"
                                placeholder="Class In Which Admitted" value="" class="form-control">

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Issue Date</label>
                            <input type="date" name="date_of_school_leaving" id="date_of_school_leaving"
                                placeholder="Issue Date" value="2022-12-05" class="form-control">

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Reason For Leaving</label>
                            <input type="text" name="region_for_leaving" placeholder="Reason For Leaving" value=""
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label> paid Month</label>
                            <input type="text" name="paid_month" id="paid_month" value="" class="form-control"
                                placeholder='enter paid month'>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Any Fee Concession</label>
                            <input type="text" name="any_fee_concession" id="any_fee_concession" value=""
                                class="form-control" placeholder='any fees concession'>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Wheather Ncc/Scout/Guide</label>
                            <input type="text" name="wheather_ncc_scount_guide" id="wheather_ncc_scount_guide" value=""
                                class="form-control" placeholder='Yes/No'>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Games Played Or Extra Activity</label>
                            <input type="text" name="Games_Played_Or_Extra_Activity" id="Games_Played_Or_Extra_Activity"
                                value="" class="form-control" placeholder='Yes/No'>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Total Num working</label>
                            <input type="text" name="total_num_working" id="total_num_working" class="form-control"
                                placeholder='Total Num Working'>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Num of days present </label>
                            <input type="text" name="num_of_days_present" id="num_of_days_present" class="form-control"
                                placeholder='Total Num Present days'>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Result status</label>
                            <input type="text" name="result_status" id="result_status" value="" class="form-control"
                                placeholder='result status pass,fail'>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label> Subject</label>
                            <input type="text" name="tc_subject" placeholder="Subject" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Class In which Leaving</label>
                            <input type="text" name="tc_student_class_leaving" id="tc_student_class_leaving"
                                placeholder="Class In which Leaving" value="" class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Due If Any</label>
                            <input type="text" name="due_if_any" placeholder="Due If Any" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Due Date</label>
                            <input type="date" name="due_date" id="due_date" placeholder="" value="2022-12-05"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Conduct And Behaviour</label>
                            <input type="text" name="conduct_and_behaviour" placeholder="Conduct And Behaviour" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Application</label>
                            <input type="date" name="date_of_application" placeholder="" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Any Other Remark</label>
                            <input type="text" name="any_other_remark" placeholder="" value="" class="form-control">
                        </div>
                    </div>



                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>

                    </div>



                </form>
                <div class="col-md-12" id="query_print">

                </div>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')
<script>
$('.select2').select2();
</script>