@include('common.header')
@include('common.navbar')
<script type="text/javascript">
function fill_detail(value) {

    $("#student_roll_no").val('Loading.....');
    $("#student_name").val('Loading.....');
    $("#student_class").val('Loading.....');
    $("#student_section").val('Loading.....');

    $.ajax({
        address: "POST",
        url: access_link + "leave/ajax_search_student_box.php?id=" + value + "",
        cache: false,
        success: function(detail) {
            //alert_new(detail);
            var str = detail;
            var res = str.split("|?|");
            $("#student_roll_no").val(value);
            $("#student_name").val(res[0]);
            $("#student_class").val(res[1]);
            $("#student_section").val(res[2]);
        }
    });

}
</script>
<script>
function check_date() {
    var from_date = document.getElementById("leave_from_date").value;
    var to_date = document.getElementById("leave_to_date").value;
    if (from_date != '' && to_date != '') {

        $("#total_leave_days").val('Loading.....');
        $("#total_sunday").val('Loading.....');
        $("#total_holiday").val('Loading.....');

        $.ajax({
            type: "POST",
            url: access_link + "leave/ajax_holiday_detail.php?from_date=" + from_date + "&to_date=" + to_date +
                "",
            cache: false,
            success: function(detail) {
                var str = detail;
                var res = str.split("|?|");
                $("#total_leave_days").val(res[0]);
                $("#total_sunday").val(res[1]);
                $("#total_holiday").val(res[2]);

            }

        });
    }
}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "leave/leave_form_api.php",
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
                get_content('leave/leave_list');
            }
        }
    });
});
</script>
<script>
$(function() {

    $('.select2').select2()

})
</script>

<section class="content-header">
    <h1>
        Leave Management </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/leave')}}" #><i class="fa fa-umbrella"></i> Leave Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Leave</li>
    </ol>
</section>



<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Student Leave Form</h3>
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
                                    <option value="2000161">Tanu yadav[2000161]-[2ND-A]-[Gopal yadav-9826300978]
                                    </option>
                                    <option value="2000268">Aaysha Bano[2000268]-[2ND-B]-[Shahbudeen kathat-9001807360]
                                    </option>
                                    <option value="2000271">sourabh[2000271]-[2ND-B]-[gaurav-123456789]</option>
                                    <option value="2000286">SHAILESH SHARMA[2000286]-[2ND-B]-[HARI SHANKER
                                        SHARMA-9917473809]</option>
                                    <option value="2000297">REHAN[2000297]-[2ND-B]-[FARHAT ALI-8077194624]</option>
                                    <option value="2000314">Rajesh Prasad[2000314]-[2ND-B]-[Ananda Prasad-9135956095]
                                    </option>
                                    <option value="2000345">joy[2000345]-[3RD-A]-[peter-8893387594]</option>
                                    <option value="2100414">Saurya[2100414]-[4TH-A]-[Sanjeev Kumar-9456930082]</option>
                                    <option value="2100427">Akhil[2100427]-[2ND-A]-[Mr. Manoj-9719433442]</option>
                                    <option value="2100437">cddf[2100437]-[3RD-A]-[-6]</option>
                                    <option value="2100450">umesh dhakad[2100450]-[UKG-A]-[mr ramgopal
                                        dhakad-8269548476]</option>
                                    <option value="2100451">Humaira[2100451]-[UKG-A]-[Palash-1316543133]</option>
                                    <option value="2100458">ayush koli[2100458]-[UKG-A]-[prabhu dayal-9826390607]
                                    </option>
                                    <option value="2100470">ajay kewat[2100470]-[3RD-A]-[durga kewat-]</option>
                                    <option value="2100471">Aman[2100471]-[4TH-A]-[Asad-9634569635]</option>
                                    <option value="2100474">raja[2100474]-[3RD-A]-[raja-1234567891]</option>
                                    <option value="2100520">Nikhil Lodhi[2100520]-[4TH-A]-[Mayank Lodhi-8679458246]
                                    </option>
                                    <option value="2100536">RAJESH[2100536]-[11TH-A]-[TARACHANDRA-9839458652]</option>
                                    <option value="2100537">Vaidik[2100537]-[5TH-A]-[-9974301792]</option>
                                    <option value="2100538">Diviya prajapati[2100538]-[4TH-A]-[Shrawan Ram-9571176454]
                                    </option>
                                    <option value="2100541">Sagar Singh[2100541]-[7TH-A]-[Rakesh Singh-1234567890]
                                    </option>
                                    <option value="2100544">Jidan uddin[2100544]-[1ST-A]-[riyaz uddin-8942116685]
                                    </option>
                                    <option value="2100549">Avnish kumar[2100549]-[2ND-A]-[Gopal kumar-9931742369]
                                    </option>
                                    <option value="2100553">umesh [2100553]-[UKG-A]-[abhishek-9144555977]</option>
                                    <option value="2100561">umesh [2100561]-[6TH-A]-[-]</option>
                                    <option value="2100563">umesh [2100563]-[5TH-A]-[-]</option>
                                    <option value="2100571">Anshu[2100571]-[UKG-A]-[Vijay-9144555977]</option>
                                    <option value="2100575"> BABALI SAHU[2100575]-[UKG-A]-[SHAIKH-7978988989]</option>
                                    <option value="2100583">श्री[2100583]-[2ND-A]-[दीपक-9926621333]</option>
                                    <option value="2100585">Muhammed Adnan[2100585]-[4TH-A]-[Muhammed
                                        Afnan-686868606868]</option>
                                    <option value="2100589">hari[2100589]-[2ND-A]-[hani-123456]</option>
                                    <option value="2100601">Nidhi Mishra[2100601]-[UKG-A]-[Nidhi Mishra-7571940317]
                                    </option>
                                    <option value="2100609">SARIKA SULTANE[2100609]-[11TH-A]-[SANJAY-7498177242]
                                    </option>
                                    <option value="2200612">dummy[2200612]-[2ND-A]-[dummy father -1234567890]</option>
                                    <option value="2200614">balveer singh[2200614]-[LKG-A]-[sukhvinder singh-9144555977]
                                    </option>
                                    <option value="2200615">mahira khan[2200615]-[LKG-A]-[irfan khan-9144555977]
                                    </option>
                                    <option value="2200618">sanny[2200618]-[LKG-A]-[soham-9144555977]</option>
                                    <option value="2200622">rohan sah[2200622]-[2ND-A]-[ram -9816870719]</option>
                                    <option value="2200623">ishan kumar[2200623]-[2ND-A]-[rohit kumar-9816870719]
                                    </option>
                                    <option value="2200624">pankaj patel[2200624]-[6TH-A]-[ram -9816870719]</option>
                                    <option value="2200627">lali[2200627]-[LKG-A]-[-]</option>
                                    <option value="2200628">sushant singh[2200628]-[UKG-A]-[nilkamal singh -9825734280]
                                    </option>
                                    <option value="2200629">saloni[2200629]-[2ND-A]-[bijay-9825734280]</option>
                                    <option value="2200630">suman[2200630]-[6TH-A]-[bijay-9825734280]</option>
                                    <option value="2200632">MANVEER SINGH [2200632]-[7TH-A]-[GURDEV SINGH -836009915]
                                    </option>
                                    <option value="2200633">RAM PANDEY[2200633]-[9TH-A]-[KAMLESH PANDEY-77718853445]
                                    </option>
                                    <option value="2200634">Mayur Mangesh Padvi[2200634]-[2ND-A]-[Mangesh Gorakh
                                        Padvi-7773954846]</option>
                                    <option value="2200635">Bhavesh Arvind Padvi[2200635]-[2ND-A]-[Arvind Gorakh
                                        Padvi-8766578634]</option>
                                    <option value="2200636">Nikhil Dinesh Padvi[2200636]-[2ND-A]-[Dinesh Gorakh
                                        Padvi-7507167517]</option>
                                    <option value="2200637">Kiran Sharma[2200637]-[7TH-A]-[Ramu Sharma-123456789]
                                    </option>
                                    <option value="2200638">Riya Sharma[2200638]-[7TH-A]-[Ram Sharma-234567891]</option>
                                    <option value="2200640">Meena Verma[2200640]-[7TH-A]-[Jay Verma-456789123]</option>
                                    <option value="2200641">Heena Mittal[2200641]-[7TH-A]-[Lalu Pasad-567891234]
                                    </option>
                                    <option value="2200642">Anamika[2200642]-[7TH-A]-[Yash Kapoor-9456312705]</option>
                                    <option value="2200643">Lalu Kumar[2200643]-[7TH-A]-[Raju Kumar-678912345]</option>
                                    <option value="2200644">SK Thakur[2200644]-[UKG-A]-[Aasss-8084407273]</option>
                                    <option value="2200645">abcs[2200645]-[2ND-A]-[ebgh-25585]</option>
                                    <option value="2200646">Jay Sharma[2200646]-[UKG-A]-[Harsh Sharma-1234567891]
                                    </option>
                                    <option value="2200647">Sikdar[2200647]-[UKG-A]-[-666]</option>
                                    <option value="2200648">Bijoy[2200648]-[UKG-A]-[ajoy-4555]</option>
                                    <option value="2200650">sona[2200650]-[2ND-A]-[rajesh-9816870719]</option>
                                    <option value="2200651">RIYA DAS[2200651]-[UKG-A]-[RATAN DAS-]</option>
                                    <option value="2200652">SUMIT KUMAR[2200652]-[UKG-A]-[Anil kumar -1234567890]
                                    </option>
                                    <option value="2200653">Somya[2200653]-[UKG-A]-[-6756789876]</option>
                                    <option value="2200654">MAHEK DASHORE[2200654]-[11TH-A]-[NAVIN KUMAR
                                        DASHORE-9584669888]</option>
                                    <option value="2200656">Radha Kumari[2200656]-[UKG-A]-[Ram Kumar-1234567894]
                                    </option>
                                    <option value="2200657">ARPAN NANDEWAR[2200657]-[UKG-A]-[RAM NANDEWAR-7987736568]
                                    </option>
                                    <option value="2200659">mahir khan [2200659]-[4TH-A]-[javed khan -8305694069]
                                    </option>
                                    <option value="2200661">imran khan [2200661]-[4TH-A]-[waseem khan -9977805298]
                                    </option>
                                    <option value="2200662">sajid khan [2200662]-[2ND-A]-[javed khan-9826038592]
                                    </option>
                                    <option value="2200663">dummy [2200663]-[2ND-A]-[dummy father-1234567890]</option>
                                    <option value="2200665">dishika[2200665]-[6TH-A]-[sonu khatri -1234567892]</option>
                                    <option value="2200666">Bhavesh Arvind Padvi[2200666]-[UKG-A]-[-]</option>
                                    <option value="2200667">payal[2200667]-[7TH-A]-[shyamlal-8052987121]</option>
                                    <option value="2200668">SAJAL[2200668]-[4TH-A]-[-9818273851]</option>
                                    <option value="2200669">sarita[2200669]-[6TH-A]-[ramjee Gupta-8840268435]</option>
                                    <option value="2200671">Komal Gupta[2200671]-[2ND-A]-[Pramod Gupta-8192906306]
                                    </option>
                                    <option value="2200672">Anil Kumar[2200672]-[4TH-A]-[-9990008522]</option>
                                    <option value="2200674">Anil Kapoor Dhoom[2200674]-[2ND-A]-[-9998000522]</option>
                                    <option value="2200675">Prashant [2200675]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200677">RAJ[2200677]-[2ND-A]-[rajesh-4987549]</option>
                                    <option value="2200678">himanshi[2200678]-[UKG-A]-[babl-1444411]</option>
                                    <option value="2200679">Ram[2200679]-[5TH-A]-[Lala seth-9893230765]</option>
                                    <option value="2200680">Prashant Kumar[2200680]-[5TH-A]-[Rammu-8109607707]</option>
                                    <option value="2200681">GGDFGFDGFDG[2200681]-[UKG-A]-[-]</option>
                                    <option value="2200684">ABHISHEK [2200684]-[UKG-A]-[B L YADAV-9695924506]</option>
                                    <option value="2200685">XYZ[2200685]-[2ND-A]-[XYZ-9818273851]</option>
                                    <option value="2200686">abc[2200686]-[2ND-A]-[-7845123698]</option>
                                    <option value="2200687">rahul[2200687]-[2ND-A]-[-]</option>
                                    <option value="2200688">Prashant rajak[2200688]-[2ND-A]-[Rammu lal-647322824425]
                                    </option>
                                    <option value="2200689"> Kanika[2200689]-[UKG-A]-[-0123456789]</option>
                                    <option value="2200691">Ravi[2200691]-[UKG-A]-[xyz-]</option>
                                    <option value="2200692">Prashant kumar[2200692]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200693">RAHUL[2200693]-[UKG-A]-[XYC-]</option>
                                    <option value="2200695">praveen kumar[2200695]-[1ST-A]-[-66666666666]</option>
                                    <option value="2200698">bjkb[2200698]-[2ND-A]-[kllkdv-9038423904]</option>
                                    <option value="2200699">laxmi[2200699]-[2ND-A]-[venkat-1234567892]</option>
                                    <option value="2200702">AJAY[2200702]-[2ND-A]-[SUNIL-7067633301]</option>
                                    <option value="2200707">kunal jha[2200707]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200708">fgdfg[2200708]-[UKG-A]-[dfgdf-955656]</option>
                                    <option value="2200709">DISHANT PATIDAR[2200709]-[6TH-A]-[-9999555333]</option>
                                    <option value="2200710">vishal jha[2200710]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200713">Ram[2200713]-[4TH-A]-[-9999999995656]</option>
                                    <option value="2200714">vishal jha[2200714]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200715">Prashant kumar[2200715]-[1ST-A]-[babl-7844411100]</option>
                                    <option value="2200716">AS[2200716]-[3RD-A]-[SS-4545454]</option>
                                    <option value="2200717">muskan ray[2200717]-[UKG-A]-[roshan ray-9813405312]</option>
                                    <option value="2200719">Prashant KUMAR[2200719]-[5TH-A]-[Rammu lal-7744447774]
                                    </option>
                                    <option value="2200720">xghkjh[2200720]-[LKG-A]-[Anil-1234567891]</option>
                                    <option value="2200722">सौरभ[2200722]-[2ND-A]-[sunil jain-9234567981]</option>
                                    <option value="2200723">aashu [2200723]-[3RD-A]-[-1234567891]</option>
                                    <option value="2200724">SANJAY KUMAR[2200724]-[UKG-A]-[manoj pandey-470050060]
                                    </option>
                                    <option value="2200725">Rahul kumar[2200725]-[5TH-A]-[vijay singh-8700377769]
                                    </option>
                                    <option value="2200728">saloni karn[2200728]-[2ND-A]-[bijay karn-9816870719]
                                    </option>
                                    <option value="2200729">sushant karn[2200729]-[UKG-A]-[bijay karn-9816870719]
                                    </option>
                                    <option value="2200730">sanam karn[2200730]-[LKG-A]-[bijay karn-9816870719]</option>
                                    <option value="2200731">simran[2200731]-[5TH-A]-[PRAKASH PATIDAR-9977522556]
                                    </option>
                                    <option value="2200732">APEKSHIT KOLI[2200732]-[2ND-A]-[MANOJ KUMAR KOLI-7697233299]
                                    </option>
                                    <option value="2200733">Akshay Karande[2200733]-[LKG-A]-[NILESH PATIDAR-]</option>
                                    <option value="2200734">Rituraj[2200734]-[2ND-A]-[mitu raj-9875455522]</option>
                                    <option value="2200735">Aaditya [2200735]-[2ND-A]-[Sujit-9934507865]</option>
                                    <option value="2200737">ashok[2200737]-[9TH-A]-[-]</option>
                                    <option value="2200738">mayank[2200738]-[LKG-A]-[demo--1]</option>
                                    <option value="2200740">ashok[2200740]-[2ND-A]-[-]</option>
                                    <option value="2200741">Abhay[2200741]-[UKG-A]-[-]</option>
                                    <option value="2200742">vivek[2200742]-[2ND-A]-[-]</option>
                                    <option value="2200743">abhisek[2200743]-[1ST-A]-[-8109195202]</option>
                                    <option value="2200744">bbs[2200744]-[2ND-A]-[bbs-9638527410]</option>
                                    <option value="2200745">roma[2200745]-[9TH-A]-[-8109195202]</option>
                                    <option value="2200746">ravi[2200746]-[2ND-A]-[udham-56548455455]</option>
                                    <option value="2200747">Vaishnavi Thakur[2200747]-[LKG-A]-[Mr. Amrendra Pratap Singh
                                        -9918666600]</option>
                                    <option value="2200748">AADITYA JHILLE[2200748]-[2ND-A]-[AASHISH JHILLE-7024347776]
                                    </option>
                                    <option value="2200749">Shifa Meman[2200749]-[8TH-A]-[Shabbir Meman-9893840078]
                                    </option>
                                    <option value="2200750">ROHIT KUMAR[2200750]-[2ND-A]-[DOODH NATH YADAV-8577908478]
                                    </option>
                                    <option value="2200751">Prashant KUMAR[2200751]-[2ND-A]-[Rammu lal-7748908646]
                                    </option>
                                    <option value="2200752">Urvi sen[2200752]-[LKG-A]-[Prabhash sen-9101065310]</option>
                                    <option value="2200753">Akshaj Mishra[2200753]-[3RD-A]-[shesh Narayan
                                        Mishra-9685437207]</option>
                                    <option value="2200755">priya[2200755]-[4TH-A]-[rahul mehara-65463312]</option>
                                    <option value="2200756">RAJESH KUMAR MAHTO [2200756]-[6TH-A]-[SITA RAM MAHTO
                                        -7488150952]</option>
                                    <option value="2200757">Ram[2200757]-[12TH-A]-[Bca-9416499566]</option>
                                    <option value="2200758">Aashish[2200758]-[NURSERY-A]-[Ramesh-9416499566]</option>
                                    <option value="2200759">INAMUR RAHMAN[2200759]-[LKG-A]-[ATIKUR RAHMAN-8486304694]
                                    </option>
                                    <option value="2200760">nidhi jain [2200760]-[3RD-A]-[sunil jain-9988525245]
                                    </option>
                                    <option value="2200761">rakesh[2200761]-[LKG-A]-[-]</option>
                                    <option value="2200762">Ravi[2200762]-[12TH-A]-[-8059076999]</option>
                                    <option value="2200763">VINAYAK PATIDAR[2200763]-[5TH-A]-[rahul mehara-456946564]
                                    </option>
                                    <option value="2200765">RAJ NAYK [2200765]-[6TH-A]-[GOPAL KHATRI-96325663]</option>
                                    <option value="2200767">Praashant [2200767]-[5TH-A]-[rammulal-70000040]</option>
                                    <option value="2200770">raman[2200770]-[NURSERY-A]-[tapan-7896541256]</option>
                                    <option value="2200771">Akshay[2200771]-[8TH-A]-[ABC-1234567890]</option>
                                    <option value="2200772">Prashant r[2200772]-[5TH-A]-[rahul mehara -]</option>
                                    <option value="2200776">nidhi jain [2200776]-[4TH-A]-[sunil jain-9988554665]
                                    </option>
                                    <option value="2200779">sunil 1[2200779]-[2ND-A]-[Asad-9955886644]</option>
                                    <option value="2200780">Nikhil[2200780]-[UKG-A]-[jonh-9090909090]</option>
                                    <option value="2200782">yashi[2200782]-[NURSERY-A]-[pushpendra-8430555580]</option>
                                    <option value="2200783">Gopi[2200783]-[8TH-A]-[BIKSHAM -9052483352]</option>
                                    <option value="2200785">ABHIMANYU SHARMA[2200785]-[NURSERY-A]-[GOURAV
                                        SHARMA-9755404505]</option>
                                    <option value="2200786">AVNI SHARMA[2200786]-[2ND-A]-[SOURABH SHARMA-9826625627]
                                    </option>
                                    <option value="2200788">Fig[2200788]-[7TH-A]-[Niraj Kumar -458725]</option>
                                    <option value="2200790">shree[2200790]-[NURSERY-A]-[samay singh -9911587536]
                                    </option>
                                    <option value="2200791">shreyansh[2200791]-[1ST-A]-[Neeraj kumar-9911587539]
                                    </option>
                                    <option value="2200793">Ajay[2200793]-[NURSERY-A]-[Vijay-685555555555]</option>
                                    <option value="2200795">Druwa Ganesh Chaudhari[2200795]-[NURSERY-A]-[Ganesh
                                        Chaudhari-8469808008]</option>
                                    <option value="2200796">SONU PRAJAPATI[2200796]-[2ND-A]-[LALARAM
                                        PRAJAPATI-7067208375]</option>
                                    <option value="2200797">Md alam ali [2200797]-[UKG-A]-[Ali alam-9473000888]</option>
                                    <option value="2200798">dummy [2200798]-[2ND-A]-[dummy-1234567890]</option>
                                    <option value="2200799">TABREZ ALAM[2200799]-[2ND-A]-[BAKRIDAN ANSARI-7677425494]
                                    </option>
                                    <option value="2200800">SHIVANSH RAWAT[2200800]-[NURSERY-A]-[AJAY-6283926887]
                                    </option>
                                    <option value="2200805">mahi[2200805]-[8TH-A]-[rohit kumar -]</option>
                                    <option value="2200806">mahi[2200806]-[UKG-A]-[ram singh -7024510634]</option>
                                    <option value="2200810">shahnawaz[2200810]-[1ST-A]-[-7677425494]</option>
                                    <option value="2200811">yasin[2200811]-[1ST-A]-[-9931326638]</option>
                                    <option value="2200812">sultana[2200812]-[1ST-A]-[-9693212542]</option>
                                    <option value="2200814">pragya [2200814]-[6TH-A]-[rajesh-1234567891]</option>
                                    <option value="2200817">priya[2200817]-[8TH-A]-[kaml raj-56454564564564]</option>
                                    <option value="2200822">mahi[2200822]-[8TH-A]-[kaml raj-5644545456]</option>
                                    <option value="2200823">Yash [2200823]-[NURSERY-A]-[Soun-6265767366]</option>
                                    <option value="2200827">jeet kumar[2200827]-[6TH-A]-[amit kumar -7896454571]
                                    </option>
                                    <option value="2200831">PANKAJ KUMAR[2200831]-[2ND-A]-[UPENDRA SHARMA-7004625934]
                                    </option>
                                    <option value="2200836">Rohit[2200836]-[9TH-A]-[Ram kumar-9918066214]</option>
                                    <option value="2200841">vicky uikey[2200841]-[1ST-A]-[jitendrasingh
                                        uikey-7354713649]</option>
                                    <option value="2200846">penolope [2200846]-[8TH-A]-[jonh-]</option>
                                    <option value="2200854">Abdul sami [2200854]-[12TH-A]-[Mohd Sharif -6005939589]
                                    </option>
                                    <option value="2200856">jjlklkk[2200856]-[8TH-A]-[-]</option>
                                    <option value="2200861">VINAYAK PATIDAR[2200861]-[2ND-A]-[SUNIL RAI-9955882211]
                                    </option>
                                    <option value="2200864">NIDHI SINGH[2200864]-[5TH-A]-[RAMRAJ-89789665677]</option>
                                    <option value="2200868">Prashant [2200868]-[7TH-A]-[Rammu lal-1234569875]</option>
                                    <option value="2200869">Prashant [2200869]-[7TH-A]-[Rammu lal-1234587932]</option>
                                    <option value="2200871">pooja bairagi[2200871]-[8TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200872">pooja bairagi[2200872]-[8TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200879">pooja bairagi[2200879]-[8TH-A]-[Mr. J.D. Bairagi-]</option>
                                    <option value="2200883">Farhan khan[2200883]-[8TH-A]-[Riyaz khan-458963248327]
                                    </option>
                                    <option value="2200884">पंकज कुमार[2200884]-[NURSERY-A]-[लालू राम-9898888888]
                                    </option>
                                    <option value="2200886">Mafidul Islam[2200886]-[6TH-A]-[Ali-00000000000000]</option>
                                    <option value="2200901">neha parihar [2200901]-[UKG-A]-[himanshu parihar
                                        -7854126359]</option>
                                    <option value="2200910">Prashant[2200910]-[8TH-A]-[Rammu lal-7740000]</option>
                                    <option value="2200915">mahi[2200915]-[8TH-A]-[kaml raj-4744444]</option>
                                    <option value="2200918">mansha[2200918]-[UKG-A]-[-]</option>
                                    <option value="2200919">riya[2200919]-[8TH-A]-[kaml raj-56454564]</option>
                                    <option value="2200927">VINAYAK PATIDAR[2200927]-[2ND-A]-[RAJENDRA
                                        PATIDAR-9988552233]</option>
                                    <option value="2200931">ArhN[2200931]-[5TH-A]-[Arqam-982365526]</option>
                                    <option value="2200933">Ariz[2200933]-[UKG-A]-[-]</option>
                                    <option value="2200934">Ariz[2200934]-[UKG-A]-[-]</option>
                                    <option value="2200936">vicky uikey[2200936]-[2ND-A]-[jitendra singh
                                        uikey-7354713649]</option>
                                    <option value="2200937">Chirag jatav[2200937]-[1ST-A]-[MR.Arjun jatav-123]</option>
                                    <option value="2200938">Pooja bairagi [2200938]-[8TH-A]-[Smt. Meenu
                                        bairagi-963486652388]</option>
                                    <option value="2200939">rajkumar[2200939]-[8TH-A]-[Rammu lal-544564]</option>
                                    <option value="2200942">priya[2200942]-[8TH-A]-[-]</option>
                                    <option value="2200943">Md. Mokarram alam [2200943]-[UKG-A]-[Md. Siddique alam
                                        -6200665811]</option>
                                    <option value="2200945">ashta [2200945]-[8TH-A]-[sanjeev -7894561230]</option>
                                    <option value="2200946">lalit [2200946]-[7TH-A]-[harichandra -1234567890]</option>
                                    <option value="2200947">shikha [2200947]-[8TH-A]-[rajendra -546123790]</option>
                                    <option value="2200948">SANDEEP[2200948]-[LKG-A]-[PRATHAM SINGH-9991233258]</option>
                                    <option value="2200951">Vansh Kumar Pasi[2200951]-[2ND-A]-[Ravi Pasi-8103488491]
                                    </option>
                                    <option value="2200953">rakesh[2200953]-[LKG-A]-[shaelendra-9058068745]</option>
                                    <option value="2200955">RAM KUMAR [2200955]-[2ND-A]-[SHYAM KUMAR -8936860311]
                                    </option>
                                    <option value="2200957">Prashant [2200957]-[8TH-A]-[rammu lal -7748770000]</option>
                                    <option value="2200958">Prashant [2200958]-[8TH-A]-[rammu lal -74444]</option>
                                    <option value="2200959">Amit rao[2200959]-[2ND-A]-[Sahab rao-9450673349]</option>
                                    <option value="2200961">NIDHI SINGH[2200961]-[2ND-A]-[BHARAT PATIDAR-824685465]
                                    </option>
                                    <option value="2200962">shravan singh[2200962]-[2ND-A]-[rajaram singh-9452358861]
                                    </option>
                                    <option value="2200965">asharamk[2200965]-[2ND-A]-[-6265861579]</option>
                                    <option value="2200974">kamalkant[2200974]-[8TH-A]-[vasudev dhakad-9752199047]
                                    </option>
                                    <option value="2200976">Prashant [2200976]-[8TH-A]-[rammu lal -744777]</option>
                                    <option value="2200977">Aarunya Raj Sinha[2200977]-[UKG-A]-[tret-87874545454]
                                    </option>
                                    <option value="2200980">Monali[2200980]-[2ND-A]-[-]</option>
                                    <option value="2200984">lokesh[2200984]-[8TH-A]-[sandeep-9416499566]</option>
                                    <option value="2200987">prash[2200987]-[7TH-A]-[rrmm-7444]</option>
                                    <option value="2200989">Prashant [2200989]-[8TH-A]-[rammu lal -74440]</option>
                                    <option value="2200990">Prashant [2200990]-[8TH-A]-[rammu lal -744]</option>
                                    <option value="2200992">Prashant [2200992]-[8TH-A]-[-77]</option>
                                    <option value="2200993">VEDANT TIWARI[2200993]-[8TH-A]-[MANOJ KUMAR
                                        TIWARI-8090688671]</option>
                                    <option value="2200995">Gudiya kumari[2200995]-[LKG-A]-[Banti sharma-8809612215]
                                    </option>
                                    <option value="2200996">Aditya kumar[2200996]-[NURSERY-A]-[Naresh sharma-9955384775]
                                    </option>
                                    <option value="2200997">Anshu kumar[2200997]-[NURSERY-A]-[Lavkush kumar-8377912973]
                                    </option>
                                    <option value="2200998">Naina khatun[2200998]-[NURSERY-A]-[Samsher aalam-8793140571]
                                    </option>
                                    <option value="2200999">Subham kumar[2200999]-[LKG-A]-[Dhaneshwar singh-6207819941]
                                    </option>
                                    <option value="2201001">Rahul Kumar [2201001]-[1ST-A]-[Ajay singh-7764952499]
                                    </option>
                                    <option value="2201002">Varsha kumari[2201002]-[NURSERY-A]-[Ajay ram-7909043168]
                                    </option>
                                    <option value="2201003">Simran kumari[2201003]-[LKG-A]-[Sushil kumar
                                        gupta-63678555352]</option>
                                    <option value="2201009">Aamna Hussain[2201009]-[NURSERY-A]-[Syed Farhat
                                        Hussain-9018501010]</option>
                                    <option value="2201010">Prashant [2201010]-[7TH-A]-[rammu lal -74444]</option>
                                    <option value="2201015">Prashant [2201015]-[7TH-A]-[rammu lal -7441000]</option>
                                    <option value="2201032">RAJESH CHOVE[2201032]-[9TH-A]-[MUKESH CHOVE-]</option>
                                    <option value="2201035">Nitya Yadav[2201035]-[NURSERY-A]-[Mr. Mayank
                                        Yadav-8707260755]</option>
                                    <option value="2201036">Shubh Kashyap[2201036]-[NURSERY-A]-[Mr. Anikesh
                                        Kumar-8957380880]</option>
                                    <option value="2201037">Arohi Kushwaha[2201037]-[NURSERY-A]-[Mr. Shailendra Singh
                                        Kushwaha-8726794375]</option>
                                    <option value="2201038">Anikesh[2201038]-[NURSERY-A]-[Mr. Amit Kumar-9621111842]
                                    </option>
                                    <option value="2201039">Prithviraj[2201039]-[NURSERY-A]-[Dr. Pramod
                                        Kumar-9219270152]</option>
                                    <option value="2201040">Arushi Diwakar[2201040]-[NURSERY-A]-[Mr. Virendra
                                        Kumar-6393465780]</option>
                                    <option value="2201041">Kartik Nishad[2201041]-[NURSERY-A]-[Kartik Nishad-]</option>
                                    <option value="2201062">Ramesh[2201062]-[4TH-A]-[Suresh-9821223300]</option>
                                    <option value="2201068">AUGUSTAY[2201068]-[10TH-A]-[ SHARMA-9897015271]</option>
                                    <option value="2201069">Anamika Agrawal[2201069]-[7TH-A]-[Sushil Agrawal-9111111111]
                                    </option>
                                    <option value="2201076">Sujata Agrawal[2201076]-[1ST-A]-[Sushil Agrawal-7111111111]
                                    </option>
                                    <option value="2201077">aman soni[2201077]-[11TH-A]-[ravi soni-6387770743]</option>
                                    <option value="2201078">aman soni 2[2201078]-[9TH-A]-[ravi soni-6387770743]</option>
                                    <option value="2201079">amit[2201079]-[11TH-A]-[ram chandr-8976453600]</option>
                                    <option value="2201080">Roshan [2201080]-[6TH-A]-[Raj Mishra-9936528547]</option>
                                    <option value="2201081">NIDHI SINGH [2201081]-[7TH-A]-[Asad-8454154454]</option>
                                    <option value="2201082">Rajdeep kumar[2201082]-[4TH-A]-[Mandal himesh-8709788098]
                                    </option>
                                    <option value="2201084">SURYA PRATAP MAURYA[2201084]-[5TH-A]-[-]</option>
                                    <option value="2201085">Danica Mariam Jacob[2201085]-[1ST-A]-[J P Jacob-9977228818]
                                    </option>
                                    <option value="2201086">Rahul Kumar[2201086]-[NURSERY-A]-[Lalbabu Ray-9570503057]
                                    </option>
                                    <option value="2201087">xyz[2201087]-[NURSERY-A]-[abc-8529637410]</option>
                                    <option value="2201088">NIDHI SINGH [2201088]-[7TH-A]-[SAMSHER SINGH -7554154464]
                                    </option>
                                    <option value="2201089">rakesh tailor[2201089]-[1ST-A]-[ganpat lal-9413137558]
                                    </option>
                                    <option value="2201090">Ayush [2201090]-[NURSERY-A]-[Shiv-7007554977]</option>
                                    <option value="2201091">Prashant [2201091]-[7TH-A]-[rammu lal -740000]</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>student Name</label>
                            <input type="text" name="student_name" placeholder="student Name" id="student_name"
                                class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Class</label>
                            <input type="text" name="student_class" placeholder="Class" id="student_class"
                                class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Student Section</label>
                            <input type="text" name="student_section" placeholder="Student Section" id="student_section"
                                class="form-control" readonly>

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Student Roll No</label>
                            <input type="text" name="student_roll_no" placeholder="Student Roll No" id="student_roll_no"
                                class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Leave From </label>
                            <input type="date" id="leave_from_date" name="leave_from_date" placeholder="Leave From "
                                onchange="check_date();" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Leave To</label>
                            <input type="date" onchange="check_date();" id="leave_to_date" name="leave_to_date"
                                placeholder="Leave To" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Approved By</label>
                            <input type="text" name="approved_by" placeholder="Approved By" value=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Upload Application</label>
                            <input type="file" id="leave_application" name="leave_application" value=""
                                onchange="check_file_type(this,'leave_application','show_application','all');"
                                class="form-control" accept=".gif, .jpg, .jpeg, .png, .pdf, .doc">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <img src="../school_software_v1_old/images/student_blank.png" id="show_application"
                                height="50" width="50">
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <label>Total leave days</label>
                            <input type="text" name="total_leave_days" id="total_leave_days"
                                placeholder="Total leave days" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1 ">
                        <div class="form-group">
                            <label>Total Sunday</label>
                            <input type="text" id="total_sunday" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-1 ">
                        <div class="form-group">
                            <label>Total Holiday</label>
                            <input type="text" id="total_holiday" value="" class="form-control" readonly>
                        </div>
                    </div>

                    <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>





                </form>
                <div class="col-md-12">

                </div>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')