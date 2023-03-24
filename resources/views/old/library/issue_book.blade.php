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
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "library/issue_book_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            ////alert_new(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('library/view_issued_book_list');
            }
        }
    });
});
</script>
<script type="text/javascript">
function for_name(value) {
    //alert_new('hit');
    $.ajax({
        type: "POST",
        url: access_link + "library/ajax_get_name.php?roll=" + value + "",
        cache: false,
        success: function(detail) {
            ////alert_new(detail); 
            $('#student_name').val(detail);
        }
    });
}
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#search-box input[type="text"]').on("keyup input", function() {
        /* Get input value on change */
        var classs = document.getElementById('class_no').value;
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if (inputVal.length) {
            $.get("backend-search.php", {
                term: inputVal,
                term2: classs
            }).done(function(data) {
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else {
            resultDropdown.empty();
        }
    });

    // Set search input value on click of result item
    $(document).on("click", ".result p", function() {
        $(this).parents("#search-box").find('input[type="text"]').val($(this).text());
        $(this).parents("#search-box").find('input[type="text"]').focus();
        $(this).parent(".result").empty();
    });
});
</script>
<script type="text/javascript">
function fill_detail(value) {
    var book_id = document.getElementById('book_id_number').value;
    $.ajax({
        address: "POST",
        url: access_link + "library/ajax_search_student_box.php?id=" + value + "&book_id=" + book_id + "",
        cache: false,
        success: function(detail) {
            if (detail != 0) {
                var res = detail.split("|?|");
                $("#student_roll_no").val(value);
                $("#student_name").val(res[0]);
                $("#student_class").val(res[1]);
                $("#student_section").val(res[2]);
            } else {
                alert_new('Sorry ! can not Issue Same Book to Same Student !!!', 'red');
                $("#student_roll_no111").val('');
            }


        }
    });

}
</script>

<section class="content-header">
    <h1>
        Library Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/library')}}"><i class="fa fa-book"></i> Library</a></li>
        <li class="active">Issue Book List</li>
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
                <center>
                    <h3 class="box-title" style="color:#592712;font-size:25px;"><b>Issue Book</b></h3>
                </center></br>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body">
                <form role="form" method="post" id="my_form" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Borrower's Name<font size="2" style="font-weight: normal;">
                                        (Search by Name,Unique Id,Class,Section,Father Name,Father Contact Number)
                                    </font> <span style="color:red;">*</span></label>
                                <select name="" class="form-control select2" id="student_roll_no111"
                                    onchange="fill_detail(this.value);" required>
                                    <option value="">Select student</option>
                                    <option value="2000084">VIDYA SURYAVANSHI[2000084]-[1ST-A]-[RANJIT SURYAVANSHI-]
                                    </option>
                                    <option value="2000085">YOGENDRA KUMAR SAHU[2000085]-[1ST-A]-[BODHRAM SAHU-]
                                    </option>
                                    <option value="2000087">AAYUSH PRADHAN[2000087]-[2ND-A]-[SEWAKRAM PRADHAN-]</option>
                                    <option value="2000088">ESHWAR CHAUHAN[2000088]-[2ND-A]-[SAMARU CHAUHAN-]</option>
                                    <option value="2000089">HARSH VAISHNAW[2000089]-[2ND-A]-[RAMESHWAR VAISHNAW-]
                                    </option>
                                    <option value="2000090">HITESH CHAUHAN[2000090]-[2ND-A]-[NARAYAN CHAUHAN-]</option>
                                    <option value="2000091">KAMINI MAHANT[2000091]-[2ND-A]-[BUDHRAM MAHANT-9340188163]
                                    </option>
                                    <option value="2000092">SANCHAYNI DIWAKAR[2000092]-[2ND-A]-[RAJKUMAR DIWAKAR-]
                                    </option>
                                    <option value="2000093">SALONA DIWAKAR[2000093]-[2ND-A]-[SHIV KUMAR DIWAKAR-]
                                    </option>
                                    <option value="2000094">ANISH CHAUHAN[2000094]-[3RD-A]-[PURUSHOTTAM CHAUHAN-]
                                    </option>
                                    <option value="2000095">BHUMIKA LAHRE [2000095]-[3RD-A]-[HIMANCHAL LAHRE-]</option>
                                    <option value="2000096">CHANCHAL LAHRE[2000096]-[3RD-A]-[RAJENDRA KUMAR LAHRE-]
                                    </option>
                                    <option value="2000097">CHETNA SAHU[2000097]-[3RD-A]-[PARDESHI SAHU-]</option>
                                    <option value="2000098">CHETAN SAHU[2000098]-[3RD-A]-[ASHOK SAHU-]</option>
                                    <option value="2000099">DEENBANDHU SAHU[2000099]-[3RD-A]-[SHYAMSHUNDAR SAHU-]
                                    </option>
                                    <option value="2000100">PRIYA PRADHAN[2000100]-[3RD-A]-[BRIJNANDAN PRADHAN-]
                                    </option>
                                    <option value="2000102">PRATAP GARHEWAL[2000102]-[3RD-A]-[BADRI PRASAD GARHEWAL-]
                                    </option>
                                    <option value="2000103">SONAM SONWANI[2000103]-[3RD-A]-[CHHTTELAL SONWANI-]</option>
                                    <option value="2000104">YATISH PRADHAN[2000104]-[3RD-A]-[DATARAM PRADHAN-]</option>
                                    <option value="2000105">RASHMI VAISHNAW[2000105]-[3RD-A]-[RAMESHWAR VAISHNAW-]
                                    </option>
                                    <option value="2000106">LUCKY SURYAWANSHI[2000106]-[3RD-A]-[NILKAMAL SURYAWANSHI-]
                                    </option>
                                    <option value="2000107">NOHAR PRASAD SAHU[2000107]-[4TH-A]-[MOHIT RAM SAHU-]
                                    </option>
                                    <option value="2000108">OMPRAKASH CHAUHAN[2000108]-[4TH-A]-[RAMKISHAN CHAUHAN-]
                                    </option>
                                    <option value="2000109">SIDDHANT BARETH[2000109]-[4TH-A]-[LOCHAN BARETH-]</option>
                                    <option value="2000110">DEEPIKA CHAVAN[2000110]-[4TH-A]-[NARAYAN CHAUHAN-]</option>
                                    <option value="2000111">LISHA NAGWAKAR[2000111]-[4TH-A]-[SURENDRA SINGH NAGWAKAR-]
                                    </option>
                                    <option value="2000112">HANSIKA LAHARE[2000112]-[4TH-A]-[RAJENDRA KUMAR LAHRE-]
                                    </option>
                                    <option value="2000113">GAURAV CHAUHAN[2000113]-[7TH-A]-[JITENDRA CHAUHAN-]</option>
                                    <option value="2000114">GJITESH PRADHAN[2000114]-[7TH-A]-[GENDRAM PRADHAN-]</option>
                                    <option value="2000115">RESHMA PRADHAN[2000115]-[7TH-A]-[HARISHANKAR PRADHAN-]
                                    </option>
                                    <option value="2000116">SAPANA PRADHAN[2000116]-[7TH-A]-[RAMNARAYAN PRADHAN-]
                                    </option>
                                    <option value="2000117">SAMA SONWANI[2000117]-[7TH-A]-[RATHLAL SONWANI-]</option>
                                    <option value="2000118">TOLESH KUAMAR SAHU[2000118]-[7TH-A]-[GULAB CHAN SAHU-]
                                    </option>
                                    <option value="2000119">NISHA PRADHAN[2000119]-[7TH-A]-[HARISHANKAR PRADHAN-]
                                    </option>
                                    <option value="2000121">umesh [2000121]-[NURSERY-A]-[abhishek-]</option>
                                    <option value="2000124">Ravi Kumar[2000124]-[1ST-A]-[Anil-]</option>
                                    <option value="2000125">SURYANSH KUMAR PRAJAPATI[2000125]-[NURSERY-A]-[PANKAJ KUMAR
                                        PRAJAPATI-7843999808]</option>
                                    <option value="2000126">Ravi Kumar[2000126]-[UKG-A]-[harish-]</option>
                                    <option value="2000127">aditi rai[2000127]-[3RD-A]-[-]</option>
                                    <option value="2000128">umesh mourya [2000128]-[LKG-A]-[suraj-]</option>
                                    <option value="2000129">Abhijeet Thakur[2000129]-[NURSERY-B]-[Anil-]</option>
                                    <option value="2000131">Abhijeet Thakur[2000131]-[NURSERY-A]-[Anil-]</option>
                                    <option value="2000132">Abhijeet Thakur[2000132]-[6TH-A]-[Anil-]</option>
                                    <option value="2000133">Ravi Kumar[2000133]-[5TH-A]-[Anil-]</option>
                                    <option value="2000134">Abhijeet Thakur[2000134]-[UKG-A]-[Anil-]</option>
                                    <option value="2000137">Anurag Singh [2000137]-[1ST-A]-[Mahesh Singh -9198234020]
                                    </option>
                                    <option value="2000138">abhiyank[2000138]-[NURSERY-A]-[suresh-9893492355]</option>
                                    <option value="2000140">MD JAHIR KHAN[2000140]-[9TH-A]-[MD JALALUDDIN
                                        KHAN-7005098908]</option>
                                    <option value="2000141">demo[2000141]-[8TH-A]-[ajay sahu-9424991256]</option>
                                    <option value="2000142">S[2000142]-[NURSERY-A]-[ankur-2]</option>
                                    <option value="2000144">Anushka sharma[2000144]-[LKG-A]-[Hari sharma-8210933925]
                                    </option>
                                    <option value="2000145">Sonu[2000145]-[LKG-A]-[Monu-9102428938]</option>
                                    <option value="2000146">Hariom pandey[2000146]-[NURSERY-A]-[Asbind Kumar
                                        pandey-8528073867]</option>
                                    <option value="2000147">alok[2000147]-[NURSERY-A]-[rk singh-]</option>
                                    <option value="2000148">Riti[2000148]-[NURSERY-A]-[Alok-9973560977]</option>
                                    <option value="2000149">Anushka sharma[2000149]-[UKG-A]-[Hari sharma-8210933925]
                                    </option>
                                    <option value="2000150">Farhan[2000150]-[1ST-A]-[shobh nath-7428222759]</option>
                                    <option value="2000151">MUZAFFAR HUSSAIN[2000151]-[10TH-A]-[JAMAL DIN-9876345623]
                                    </option>
                                    <option value="2000152">Yug[2000152]-[2ND-A]-[Hansraj-8053038939]</option>
                                    <option value="2000153">Prakshaya[2000153]-[NURSERY-A]-[Ravi-9412321084]</option>
                                    <option value="2000154">swaroop satish kalinge[2000154]-[3RD-A]-[satish-9341144119]
                                    </option>
                                    <option value="2000155">xyz[2000155]-[5TH-A]-[-32413]</option>
                                    <option value="2000156">Rahu [2000156]-[LKG-A]-[Mihan-8340634316]</option>
                                    <option value="2000157">R S[2000157]-[8TH-A]-[R D-9899000000]</option>
                                    <option value="2000158">manhood[2000158]-[NURSERY-A]-[love-234532523]</option>
                                    <option value="2000159">Shivaraj[2000159]-[3RD-A]-[-9731632991]</option>
                                    <option value="2000147">alok[2000147]-[UKG-A]-[rk singh-]</option>
                                    <option value="2000148">Riti[2000148]-[UKG-A]-[Alok-9973560977]</option>
                                    <option value="2000158">manhood[2000158]-[UKG-A]-[love-234532523]</option>
                                    <option value="2000161">Tanu yadav[2000161]-[3RD-A]-[Gopal yadav-9826300978]
                                    </option>
                                    <option value="2000162">Ongpong[2000162]-[NURSERY-A]-[manoj-234234234]</option>
                                    <option value="2000163">CALENDAR[2000163]-[NURSERY-A]-[YEAR-23423234]</option>
                                    <option value="2000164">Suresh[2000164]-[12TH-A]-[Ramesh-9860451597]</option>
                                    <option value="2000165">AMIT JAIN[2000165]-[LKG-A]-[MUKESH
                                        JAIN-98930125477477444444144]</option>
                                    <option value="2000166">prekshya chaudhary[2000166]-[NURSERY-A]-[ravi
                                        chaudhary-9412331084]</option>
                                    <option value="2000167">MUKESH GUPTA[2000167]-[3RD-A]-[ASHOK GUPTA-98930523215]
                                    </option>
                                    <option value="2000168">NAINCY SHARMA[2000168]-[3RD-A]-[Pramod sharma-9893005322]
                                    </option>
                                    <option value="2000169">yogesh[2000169]-[3RD-A]-[ganga-8173847510]</option>
                                    <option value="2000170">Mukul[2000170]-[11TH-A]-[Satish-9805636511]</option>
                                    <option value="2000171">ANKIT KUMAR[2000171]-[LKG-A]-[BRIJPAL-8057235962]</option>
                                    <option value="2000172">KAAFI[2000172]-[12TH-A]-[KAAMIL-252634247094]</option>
                                    <option value="2000173">अमित जैन[2000173]-[6TH-A]-[राकेश जैन-989352159]</option>
                                    <option value="2000174">Jaspreet singh[2000174]-[LKG-A]-[rajesh-64646464]</option>
                                    <option value="2000175">Praksh shamrav chanore[2000175]-[UKG-A]-[Shamrav
                                        chanore-8456231425]</option>
                                    <option value="2000176">DHVANIL[2000176]-[NURSERY-A]-[ROHIT-7773037709]</option>
                                    <option value="2000177">A[2000177]-[8TH-A]-[A-9986559604]</option>
                                    <option value="2000178">mani[2000178]-[NURSERY-A]-[gurmeet-535354453]</option>
                                    <option value="2000180">K Deka[2000180]-[NURSERY-A]-[R Deka-12345678890]</option>
                                    <option value="2000181">Ashutosh kumar[2000181]-[1ST-A]-[Jhamendra
                                        pandey-9801774687]</option>
                                    <option value="2000182">rahul kumar[2000182]-[NURSERY-A]-[ALKESH PATIDAR-9466438853]
                                    </option>
                                    <option value="2000183">konkon[2000183]-[LKG-A]-[mohan-987989889]</option>
                                    <option value="2000184">MUKESH GUPTA[2000184]-[3RD-A]-[ASHOK GUPTA-6645654645]
                                    </option>
                                    <option value="2000185">KANIKA RAJAWAT[2000185]-[12TH-A]-[ASHOK GUPTA-16546546546]
                                    </option>
                                    <option value="2000186">Papu Daimary[2000186]-[LKG-A]-[Dhaneswar Daimary-8787681064]
                                    </option>
                                    <option value="2000187">Papu Daimary[2000187]-[LKG-A]-[Dhaneswar Daimary-8787681064]
                                    </option>
                                    <option value="2000188">mukho[2000188]-[NURSERY-A]-[dev-4534534]</option>
                                    <option value="2000189">Manoj[2000189]-[12TH-A]-[Suresh-9574888798]</option>
                                    <option value="2000191">Abhishek[2000191]-[7TH-A]-[Sanjay-6203935431]</option>
                                    <option value="2000192">Ramakumari[2000192]-[LKG-A]-[Raju-9482564014]</option>
                                    <option value="2000193">Papu Daimary[2000193]-[LKG-A]-[Dhaneswar Daimary-]</option>
                                    <option value="2000194">Papu Saikia[2000194]-[LKG-A]-[Dhaneswar Daimary-]</option>
                                    <option value="2000195">GGDFGFDGFDG[2000195]-[1ST-A]-[DFGFDGDFG-0123456789]</option>
                                    <option value="2000196">RASHI [2000196]-[NURSERY-A]-[HARISH-9837091949]</option>
                                    <option value="2000197">ashu agrawal[2000197]-[LKG-A]-[basant-8937992992]</option>
                                    <option value="2000198">Ramu[2000198]-[4TH-A]-[Poooja-840588504808687]</option>
                                    <option value="2000199">Rajeev[2000199]-[NURSERY-A]-[Ramveer-9927594141]</option>
                                    <option value="2000200">pawan[2000200]-[10TH-A]-[harilal-9795220471]</option>
                                    <option value="2000201">RAJESH TRIVEDI[2000201]-[NURSERY-A]-[RAMLAL-9800000000]
                                    </option>
                                    <option value="2000202">RUZAINA[2000202]-[LKG-A]-[MOHSIN-9329621221]</option>
                                    <option value="2000203">radha kumari[2000203]-[NURSERY-A]-[ram mohan
                                        singh-7739836507]</option>
                                    <option value="2000204">RAVINDER SINGH[2000204]-[NURSERY-A]-[BALWANT
                                        SINGH-9781294515]</option>
                                    <option value="2000205">ankush[2000205]-[UKG-A]-[aniv-28]</option>
                                    <option value="2000206">sdfa[2000206]-[LKG-A]-[anurag-34523452]</option>
                                    <option value="2000207">Sumit[2000207]-[1ST-A]-[Sumit-9597492297]</option>
                                    <option value="2000209">deep[2000209]-[NURSERY-A]-[ramesh-1]</option>
                                    <option value="2000211">Ram[2000211]-[NURSERY-A]-[Dam-9888866905]</option>
                                    <option value="2000212">ttffgfgghhgh[2000212]-[1ST-A]-[-78787878676]</option>
                                    <option value="2000213">Mr. Dishu Saini[2000213]-[NURSERY-A]-[Mr. Pramod
                                        Kumar-8474992612]</option>
                                    <option value="2000214">Ravinder Singh[2000214]-[5TH-A]-[Balwant Singh-9825298878]
                                    </option>
                                    <option value="2000215">Dyaneshwari[2000215]-[10TH-A]-[Chandrashekhar-9490795976]
                                    </option>
                                    <option value="2000216">Anil[2000216]-[NURSERY-A]-[Shyam-]</option>
                                    <option value="2000217">Ayush[2000217]-[NURSERY-A]-[Ajay-1234567890]</option>
                                    <option value="2000219">Rajendra[2000219]-[3RD-A]-[Narayan-9682515115]</option>
                                    <option value="2000220">PRASHANT DUBEY[2000220]-[12TH-A]-[RAKESH DUBEY-8871712838]
                                    </option>
                                    <option value="2000221">Lawrence Raj[2000221]-[12TH-A]-[Lawrence Raj-9080441063]
                                    </option>
                                    <option value="2000222">ANIL KUMAR[2000222]-[12TH-A]-[MAHESH KUMAR-9425042109]
                                    </option>
                                    <option value="2000223">YASMEEN KHAN[2000223]-[1ST-A]-[SOHAIL KHAN-9997976764]
                                    </option>
                                    <option value="2000224">mahesh[2000224]-[1ST-A]-[rahul-9974366474]</option>
                                    <option value="2000225">SHAH TEJAS VIPULBHAI[2000225]-[12TH-A]-[VIPULBHAI T
                                        SHAH-8401022047]</option>
                                    <option value="2000226">MOHD AKRAM[2000226]-[6TH-A]-[MOHD RASHID-7036588385]
                                    </option>
                                    <option value="2000227">efewf[2000227]-[2ND-A]-[efwfw-7986369452]</option>
                                    <option value="2000228">Ramesh[2000228]-[LKG-A]-[Dinesh-8853030571]</option>
                                    <option value="2000229">SHRUTI SINGH[2000229]-[12TH-A]-[DHANANJAY SINGH-8240680593]
                                    </option>
                                    <option value="2000230">vishal vilran[2000230]-[1ST-A]-[Jagdish Chandra-8174902080]
                                    </option>
                                    <option value="2000231">vinod kumar[2000231]-[NURSERY-A]-[bhagirth mak-9785728885]
                                    </option>
                                    <option value="2000232">Nishant[2000232]-[1ST-A]-[-9827676237]</option>
                                    <option value="2000233">vinod[2000233]-[NURSERY-A]-[Bhagirath -9785728885]</option>
                                    <option value="2000234">ABHAY[2000234]-[LKG-A]-[NIRAJ-0000000000]</option>
                                    <option value="2000236">Sajid Ali[2000236]-[10TH-A]-[Shadhab Ali-9821443746]
                                    </option>
                                    <option value="2000239">nikita [2000239]-[LKG-A]-[sumit-]</option>
                                    <option value="2000240">raj[2000240]-[NURSERY-A]-[kunal-676765565]</option>
                                    <option value="2000244">ramesh kumar[2000244]-[LKG-A]-[shobh nath-8853030571]
                                    </option>
                                    <option value="2000247">Safalta Sanodiya [2000247]-[10TH-A]-[Sukhram Sanodiya
                                        -6261262501]</option>
                                    <option value="2000256">Abinaya[2000256]-[UKG-A]-[Sankar-8508688842]</option>
                                    <option value="2000259">shekhu [2000259]-[NURSERY-A]-[aman-8349379171]</option>
                                    <option value="2000262">Charles Islary[2000262]-[LKG-A]-[Jeffry Islary-9365177191]
                                    </option>
                                    <option value="2000263">Appreciate Muchahary[2000263]-[LKG-A]-[Agwr Gwra
                                        Muchahary-7002895981]</option>
                                    <option value="2000264">Mohan[2000264]-[6TH-A]-[Ram-9582929011]</option>
                                    <option value="2000267">Adil Zamal[2000267]-[9TH-A]-[Abdul Mannam-4561237890]
                                    </option>
                                    <option value="2000268">rahul kumar[2000268]-[NURSERY-A]-[Shahbudeen
                                        kathat-9001807360]</option>
                                    <option value="2000269">ARMAN KATHAT[2000269]-[1ST-A]-[VIRENDRA KATHAT-9680640640]
                                    </option>
                                    <option value="2000271">sourabh[2000271]-[NURSERY-A]-[gaurav-123456789]</option>
                                    <option value="2000281">Lakshman singh[2000281]-[12TH-A]-[Jay Singh-7217733825]
                                    </option>
                                    <option value="2000282">Jassu singh[2000282]-[8TH-A]-[Revant singh-9916115014]
                                    </option>
                                    <option value="2000283">Ram Das[2000283]-[7TH-A]-[Sam das-8597474036]</option>
                                    <option value="2000286">SHAILESH SHARMA[2000286]-[NURSERY-A]-[HARI SHANKER
                                        SHARMA-9917473809]</option>
                                    <option value="2000287">Mohammed Bhoraniya [2000287]-[1ST-A]-[Altaf-9782312334]
                                    </option>
                                    <option value="2000289">Arham Patel[2000289]-[NURSERY-A]-[Abdulnasir-7276231940]
                                    </option>
                                    <option value="2000291">VIDIT YADAV[2000291]-[1ST-A]-[JHINKOO YADAV-]</option>
                                    <option value="2000296">ajit[2000296]-[NURSERY-A]-[Satveer-9050653720]</option>
                                    <option value="2000297">REHAN[2000297]-[NURSERY-A]-[FARHAT ALI-8077194624]</option>
                                    <option value="2000298">Umesh[2000298]-[NURSERY-A]-[Rajesh-5666688]</option>
                                    <option value="2000299">UTPAL[2000299]-[NURSERY-A]-[Raj-9174931003]</option>
                                    <option value="2000305">JAGDISH KUMAWAT[2000305]-[12TH-A]-[TOGA RAM-8619478135]
                                    </option>
                                    <option value="2000309">Manan Sharma[2000309]-[9TH-A]-[Harish Sharma-9053660293]
                                    </option>
                                    <option value="2000310">Lavish Sharma[2000310]-[9TH-A]-[Harish Sharma-9315308692]
                                    </option>
                                    <option value="2000315">RAHUL[2000315]-[LKG-A]-[BINOD-9085]</option>
                                    <option value="2000320">Lokendra[2000320]-[10TH-A]-[Ramdyal-9672084642]</option>
                                    <option value="2000321">Amit kumar[2000321]-[10TH-A]-[Shivkumar ram-9140101269]
                                    </option>
                                    <option value="2000322">kamlesh[2000322]-[12TH-A]-[shatrughan-1234567890]</option>
                                    <option value="2000328">Sajal Bhartiya[2000328]-[1ST-A]-[Rakesh-7627282828]</option>
                                    <option value="2000330">ABDUL KAREEM [2000330]-[LKG-A]-[SHAIKH-5687425698]</option>
                                    <option value="2000332">Palak Kumari[2000332]-[NURSERY-A]-[Krishna
                                        Sahani-9876543210]</option>
                                    <option value="2000337">geeta kumari[2000337]-[NURSERY-A]-[ram sing-1234567899]
                                    </option>
                                    <option value="2000339">Chetan Tholiya[2000339]-[12TH-A]-[Teja Ram
                                        Tholiya-9521465677]</option>
                                    <option value="2000342">deepak kumar[2000342]-[LKG-A]-[nitish kumar-8229020634]
                                    </option>
                                    <option value="2000345">joy[2000345]-[1ST-A]-[peter-8893387594]</option>
                                    <option value="2000348">Rashid khan[2000348]-[4TH-A]-[Abdul jabbar-8707413560]
                                    </option>
                                    <option value="2000352">rakesh[2000352]-[NURSERY-A]-[kumar singh-9638527410]
                                    </option>
                                    <option value="2000356">LEYA ANNA ANTONY[2000356]-[2ND-A]-[ANTONY K
                                        VARGHESE-7034691897]</option>
                                    <option value="2000361">KAJAL KUMARI[2000361]-[5TH-A]-[JAGARNATH PRASAD-8757153256]
                                    </option>
                                    <option value="2000369">SuryBhan[2000369]-[12TH-A]-[Ram Prasad Singh-9958252256]
                                    </option>
                                    <option value="2100384">Rachita[2100384]-[7TH-A]-[Venkatram-9717386989]</option>
                                    <option value="2100392">Mohit [2100392]-[1ST-A]-[Mr. Ravi-9717386989]</option>
                                    <option value="2100396">KHANDU DNYANOBA
                                        JANBHALE[2100396]-[10TH-A]-[DNYANOBA-875468947684]</option>
                                    <option value="2100398">AMINA DHABAK[2100398]-[NURSERY-A]-[AJIJUL DHABAK-9851708053]
                                    </option>
                                    <option value="2100399">dummy[2100399]-[NURSERY-A]-[dummy father -1234567890]
                                    </option>
                                    <option value="2100407">Jayssh[2100407]-[2ND-A]-[parvesh-7218511710]</option>
                                    <option value="2100410">krhdjkhf[2100410]-[5TH-A]-[hfkldhrjke-86548586888]</option>
                                    <option value="2100412">Upen[2100412]-[1ST-A]-[Rajdev Mishra-8601727725]</option>
                                    <option value="2100413">Kishan[2100413]-[NURSERY-A]-[Kishan singh-9761332717]
                                    </option>
                                    <option value="2100414">Saurya[2100414]-[2ND-A]-[Sanjeev Kumar-9456930082]</option>
                                    <option value="2000297">REHAN[2000297]-[2ND-B]-[FARHAT ALI-8077194624]</option>
                                    <option value="2000314">Rajesh Prasad[2000314]-[2ND-B]-[Ananda Prasad-9135956095]
                                    </option>
                                    <option value="2000332">Palak Kumari[2000332]-[2ND-B]-[Krishna Sahani-9876543210]
                                    </option>
                                    <option value="2100415">dummy[2100415]-[2ND-B]-[dummy father -1234567890]</option>
                                    <option value="2100424">dummy[2100424]-[NURSERY-A]-[dummy father -8219722952]
                                    </option>
                                    <option value="2100428">Vivek[2100428]-[8TH-A]-[Sita-6201064933]</option>
                                    <option value="2100430">Sangita[2100430]-[NURSERY-A]-[Ramji-9827185031]</option>
                                    <option value="2100431">dummy[2100431]-[NURSERY-A]-[dummy father -9172504377]
                                    </option>
                                    <option value="2100432">dummy[2100432]-[NURSERY-A]-[dummy father -]</option>
                                    <option value="2100433">dummy[2100433]-[NURSERY-A]-[-]</option>
                                    <option value="2100435">dummy[2100435]-[NURSERY-A]-[dummy father --1]</option>
                                    <option value="2100436">dummy[2100436]-[NURSERY-A]-[-1324568712]</option>
                                    <option value="2100437">cddf[2100437]-[1ST-A]-[-6]</option>
                                    <option value="2100440">Ujb[2100440]-[LKG-A]-[Jbn-66]</option>
                                    <option value="2100441">Akash kumar[2100441]-[NURSERY-A]-[Horil yadav-875468]
                                    </option>
                                    <option value="2100445">Ram[2100445]-[12TH-A]-[Dashrath ji-8890962585]</option>
                                    <option value="2100450">umesh dhakad[2100450]-[NURSERY-A]-[mr ramgopal
                                        dhakad-8269548476]</option>
                                    <option value="2100451">Humaira[2100451]-[NURSERY-A]-[Palash-1316543133]</option>
                                    <option value="2100453">just a test[2100453]-[NURSERY-A]-[test-9802538061]</option>
                                    <option value="2100419">dummy[2100419]-[LKG-A]-[dummy father -9340188163]</option>
                                    <option value="2100458">ayush koli[2100458]-[NURSERY-A]-[prabhu dayal-9826390607]
                                    </option>
                                    <option value="2100463">RAHUL BHAGAT[2100463]-[9TH-A]-[DILIP BHAGAT-8889282268]
                                    </option>
                                    <option value="2100464">a[2100464]-[NURSERY-A]-[a-124564566]</option>
                                    <option value="2100467">kajal[2100467]-[LKG-A]-[gauri shankar das-11111111]</option>
                                    <option value="2100468">Abhay[2100468]-[NURSERY-A]-[Sourabh-9805555395]</option>
                                    <option value="2100483">Irshad[2100483]-[NURSERY-A]-[Razzak-9166678866]</option>
                                    <option value="2100485">gfhfjhg[2100485]-[NURSERY-A]-[gfghfh-9887656431]</option>
                                    <option value="2100513">AKMAL RAZA[2100513]-[NURSERY-A]-[MD-9868737390]</option>
                                    <option value="2100514">વાજા મિત રામસિંગભાઈ[2100514]-[1ST-A]-[રામસિંગભાઈ-8460202427]
                                    </option>
                                    <option value="2100558"> BABALI SAHU[2100558]-[UKG-A]-[-13e45]</option>
                                    <option value="2100609">SARIKA SULTANE[2100609]-[11TH-A]-[SANJAY-7498177242]
                                    </option>
                                    <option value="2200614">balveer singh[2200614]-[LKG-A]-[sukhvinder singh-9144555977]
                                    </option>
                                    <option value="2200615">mahira khan[2200615]-[LKG-A]-[irfan khan-9144555977]
                                    </option>
                                    <option value="2200618">sanny[2200618]-[LKG-A]-[soham-9144555977]</option>
                                    <option value="2200626">kirti panday[2200626]-[LKG-A]-[sumit panday-9865474758]
                                    </option>
                                    <option value="2200627">lali[2200627]-[LKG-A]-[-]</option>
                                    <option value="2100536">RAJESH[2100536]-[11TH-A]-[TARACHANDRA-9839458652]</option>
                                    <option value="2200654">MAHEK DASHORE[2200654]-[11TH-A]-[NAVIN KUMAR
                                        DASHORE-9584669888]</option>
                                    <option value="2200672">Anil Kumar[2200672]-[4TH-A]-[-9990008522]</option>
                                    <option value="2200674">Anil Kapoor Dhoom[2200674]-[2ND-A]-[-9998000522]</option>
                                    <option value="2100430">Sangita[2100430]-[UKG-A]-[Ramji-9827185031]</option>
                                    <option value="2100450">umesh dhakad[2100450]-[UKG-A]-[mr ramgopal
                                        dhakad-8269548476]</option>
                                    <option value="2100451">Humaira[2100451]-[UKG-A]-[Palash-1316543133]</option>
                                    <option value="2100458">ayush koli[2100458]-[UKG-A]-[prabhu dayal-9826390607]
                                    </option>
                                    <option value="2100553">umesh [2100553]-[UKG-A]-[abhishek-9144555977]</option>
                                    <option value="2100571">Anshu[2100571]-[UKG-A]-[Vijay-9144555977]</option>
                                    <option value="2100575"> BABALI SAHU[2100575]-[UKG-A]-[SHAIKH-7978988989]</option>
                                    <option value="2200653">Somya[2200653]-[UKG-A]-[-6756789876]</option>
                                    <option value="2200678">himanshi[2200678]-[UKG-A]-[babl-1444411]</option>
                                    <option value="2200684">ABHISHEK [2200684]-[UKG-A]-[B L YADAV-9695924506]</option>
                                    <option value="2200689"> Kanika[2200689]-[UKG-A]-[-0123456789]</option>
                                    <option value="2100589">hari[2100589]-[2ND-A]-[hani-123456]</option>
                                    <option value="2200695">praveen kumar[2200695]-[1ST-A]-[-66666666666]</option>
                                    <option value="2200698">bjkb[2200698]-[2ND-A]-[kllkdv-9038423904]</option>
                                    <option value="2200699">laxmi[2200699]-[2ND-A]-[venkat-1234567892]</option>
                                    <option value="2100549">Avnish kumar[2100549]-[2ND-A]-[Gopal kumar-9931742369]
                                    </option>
                                    <option value="2100583">श्री[2100583]-[2ND-A]-[दीपक-9926621333]</option>
                                    <option value="2200612">dummy[2200612]-[2ND-A]-[dummy father -1234567890]</option>
                                    <option value="2200622">rohan sah[2200622]-[2ND-A]-[ram -9816870719]</option>
                                    <option value="2200623">ishan kumar[2200623]-[2ND-A]-[rohit kumar-9816870719]
                                    </option>
                                    <option value="2200629">saloni[2200629]-[2ND-A]-[bijay-9825734280]</option>
                                    <option value="2200634">Mayur Mangesh Padvi[2200634]-[2ND-A]-[Mangesh Gorakh
                                        Padvi-7773954846]</option>
                                    <option value="2200635">Bhavesh Arvind Padvi[2200635]-[2ND-A]-[Arvind Gorakh
                                        Padvi-8766578634]</option>
                                    <option value="2200636">Nikhil Dinesh Padvi[2200636]-[2ND-A]-[Dinesh Gorakh
                                        Padvi-7507167517]</option>
                                    <option value="2200645">abcs[2200645]-[2ND-A]-[ebgh-25585]</option>
                                    <option value="2200650">sona[2200650]-[2ND-A]-[rajesh-9816870719]</option>
                                    <option value="2200662">sajid khan [2200662]-[2ND-A]-[javed khan-9826038592]
                                    </option>
                                    <option value="2200663">dummy [2200663]-[2ND-A]-[dummy father-1234567890]</option>
                                    <option value="2200671">Komal Gupta[2200671]-[2ND-A]-[Pramod Gupta-8192906306]
                                    </option>
                                    <option value="2200675">Prashant [2200675]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200677">RAJ[2200677]-[2ND-A]-[rajesh-4987549]</option>
                                    <option value="2200685">XYZ[2200685]-[2ND-A]-[XYZ-9818273851]</option>
                                    <option value="2200686">abc[2200686]-[2ND-A]-[-7845123698]</option>
                                    <option value="2200687">rahul[2200687]-[2ND-A]-[-]</option>
                                    <option value="2200688">Prashant rajak[2200688]-[2ND-A]-[Rammu lal-647322824425]
                                    </option>
                                    <option value="2200692">Prashant kumar[2200692]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200702">AJAY[2200702]-[2ND-A]-[SUNIL-7067633301]</option>
                                    <option value="2200720">xghkjh[2200720]-[LKG-A]-[Anil-1234567891]</option>
                                    <option value="2200725">Rahul kumar[2200725]-[5TH-A]-[vijay singh-8700377769]
                                    </option>
                                    <option value="2200723">aashu [2200723]-[3RD-A]-[-1234567891]</option>
                                    <option value="2100601">Nidhi Mishra[2100601]-[UKG-A]-[Nidhi Mishra-7571940317]
                                    </option>
                                    <option value="2200628">sushant singh[2200628]-[UKG-A]-[nilkamal singh -9825734280]
                                    </option>
                                    <option value="2200644">SK Thakur[2200644]-[UKG-A]-[Aasss-8084407273]</option>
                                    <option value="2200646">Jay Sharma[2200646]-[UKG-A]-[Harsh Sharma-1234567891]
                                    </option>
                                    <option value="2200647">Sikdar[2200647]-[UKG-A]-[-666]</option>
                                    <option value="2200648">Bijoy[2200648]-[UKG-A]-[ajoy-4555]</option>
                                    <option value="2200651">RIYA DAS[2200651]-[UKG-A]-[RATAN DAS-]</option>
                                    <option value="2200652">SUMIT KUMAR[2200652]-[UKG-A]-[Anil kumar -1234567890]
                                    </option>
                                    <option value="2200656">Radha Kumari[2200656]-[UKG-A]-[Ram Kumar-1234567894]
                                    </option>
                                    <option value="2200657">ARPAN NANDEWAR[2200657]-[UKG-A]-[RAM NANDEWAR-7987736568]
                                    </option>
                                    <option value="2200666">Bhavesh Arvind Padvi[2200666]-[UKG-A]-[-]</option>
                                    <option value="2200681">GGDFGFDGFDG[2200681]-[UKG-A]-[-]</option>
                                    <option value="2200691">Ravi[2200691]-[UKG-A]-[xyz-]</option>
                                    <option value="2200693">RAHUL[2200693]-[UKG-A]-[XYC-]</option>
                                    <option value="2200707">kunal jha[2200707]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200708">fgdfg[2200708]-[UKG-A]-[dfgdf-955656]</option>
                                    <option value="2200710">vishal jha[2200710]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200724">SANJAY KUMAR[2200724]-[UKG-A]-[manoj pandey-470050060]
                                    </option>
                                    <option value="2200730">sanam karn[2200730]-[LKG-A]-[bijay karn-9816870719]</option>
                                    <option value="2200632">MANVEER SINGH [2200632]-[7TH-A]-[GURDEV SINGH -836009915]
                                    </option>
                                    <option value="2200637">Kiran Sharma[2200637]-[7TH-A]-[Ramu Sharma-123456789]
                                    </option>
                                    <option value="2200638">Riya Sharma[2200638]-[7TH-A]-[Ram Sharma-234567891]</option>
                                    <option value="2200640">Meena Verma[2200640]-[7TH-A]-[Jay Verma-456789123]</option>
                                    <option value="2200641">Heena Mittal[2200641]-[7TH-A]-[Lalu Pasad-567891234]
                                    </option>
                                    <option value="2200642">Anamika[2200642]-[7TH-A]-[Yash Kapoor-9456312705]</option>
                                    <option value="2200643">Lalu Kumar[2200643]-[7TH-A]-[Raju Kumar-678912345]</option>
                                    <option value="2200744">bbs[2200744]-[1ST-A]-[bbs-9638527410]</option>
                                    <option value="2100541">Sagar Singh[2100541]-[7TH-A]-[Rakesh Singh-1234567890]
                                    </option>
                                    <option value="2200667">payal[2200667]-[7TH-A]-[shyamlal-8052987121]</option>
                                    <option value="2200746">ravi[2200746]-[1ST-]-[udham-56548455455]</option>
                                    <option value="2100544">Jidan uddin[2100544]-[1ST-A]-[riyaz uddin-8942116685]
                                    </option>
                                    <option value="2200715">Prashant kumar[2200715]-[1ST-A]-[babl-7844411100]</option>
                                    <option value="2200743">abhisek[2200743]-[1ST-A]-[-8109195202]</option>
                                    <option value="2000345">joy[2000345]-[3RD-A]-[peter-8893387594]</option>
                                    <option value="2100412">Upen[2100412]-[3RD-A]-[Rajdev Mishra-8601727725]</option>
                                    <option value="2100437">cddf[2100437]-[3RD-A]-[-6]</option>
                                    <option value="2100470">ajay kewat[2100470]-[3RD-A]-[durga kewat-]</option>
                                    <option value="2100474">raja[2100474]-[3RD-A]-[raja-1234567891]</option>
                                    <option value="2200716">AS[2200716]-[3RD-A]-[SS-4545454]</option>
                                    <option value="2100414">Saurya[2100414]-[4TH-A]-[Sanjeev Kumar-9456930082]</option>
                                    <option value="2100471">Aman[2100471]-[4TH-A]-[Asad-9634569635]</option>
                                    <option value="2100520">Nikhil Lodhi[2100520]-[4TH-A]-[Mayank Lodhi-8679458246]
                                    </option>
                                    <option value="2100538">Diviya prajapati[2100538]-[4TH-A]-[Shrawan Ram-9571176454]
                                    </option>
                                    <option value="2100585">Muhammed Adnan[2100585]-[4TH-A]-[Muhammed
                                        Afnan-686868606868]</option>
                                    <option value="2200659">mahir khan [2200659]-[4TH-A]-[javed khan -8305694069]
                                    </option>
                                    <option value="2200661">imran khan [2200661]-[4TH-A]-[waseem khan -9977805298]
                                    </option>
                                    <option value="2200668">SAJAL[2200668]-[4TH-A]-[-9818273851]</option>
                                    <option value="2200713">Ram[2200713]-[4TH-A]-[-9999999995656]</option>
                                    <option value="2100537">Vaidik[2100537]-[5TH-A]-[-9974301792]</option>
                                    <option value="2100563">umesh [2100563]-[5TH-A]-[-]</option>
                                    <option value="2200679">Ram[2200679]-[5TH-A]-[Lala seth-9893230765]</option>
                                    <option value="2200680">Prashant Kumar[2200680]-[5TH-A]-[Rammu-8109607707]</option>
                                    <option value="2200719">Prashant KUMAR[2200719]-[5TH-A]-[Rammu lal-7744447774]
                                    </option>
                                    <option value="2200731">simran[2200731]-[5TH-A]-[PRAKASH PATIDAR-9977522556]
                                    </option>
                                    <option value="2100561">umesh [2100561]-[6TH-A]-[-]</option>
                                    <option value="2200624">pankaj patel[2200624]-[6TH-A]-[ram -9816870719]</option>
                                    <option value="2200630">suman[2200630]-[6TH-A]-[bijay-9825734280]</option>
                                    <option value="2200665">dishika[2200665]-[6TH-A]-[sonu khatri -1234567892]</option>
                                    <option value="2200669">sarita[2200669]-[6TH-A]-[ramjee Gupta-8840268435]</option>
                                    <option value="2200709">DISHANT PATIDAR[2200709]-[6TH-A]-[-9999555333]</option>
                                    <option value="2200633">RAM PANDEY[2200633]-[9TH-A]-[KAMLESH PANDEY-77718853445]
                                    </option>
                                    <option value="2200737">ashok[2200737]-[9TH-A]-[-]</option>
                                    <option value="2200745">roma[2200745]-[9TH-A]-[-8109195202]</option>
                                    <option value="2200748">pankaj [2200748]-[1ST-A]-[AASHISH JHILLE-7024347776]
                                    </option>
                                    <option value="2200749">Shifa Meman[2200749]-[8TH-A]-[Shabbir Meman-9893840078]
                                    </option>
                                    <option value="2200750">ROHIT KUMAR[2200750]-[1ST-]-[DOODH NATH YADAV-8577908478]
                                    </option>
                                    <option value="2200752">Urvi sen[2200752]-[NURSERY-A]-[Prabhash sen-9101065310]
                                    </option>
                                    <option value="2200753">Akshaj Mishra[2200753]-[2ND-A]-[shesh Narayan
                                        Mishra-9685437207]</option>
                                    <option value="2200756">RAJESH KUMAR MAHTO [2200756]-[5TH-A]-[SITA RAM MAHTO
                                        -7488150952]</option>
                                    <option value="2200757">Ram[2200757]-[12TH-A]-[Bca-9416499566]</option>
                                    <option value="2200758">Aashish[2200758]-[NURSERY-A]-[Ramesh-9416499566]</option>
                                    <option value="2200759">INAMUR RAHMAN[2200759]-[NURSERY-A]-[ATIKUR
                                        RAHMAN-8486304694]</option>
                                    <option value="2200760">nidhi jain [2200760]-[2ND-A]-[sunil jain-9988525245]
                                    </option>
                                    <option value="2100427">Akhil[2100427]-[2ND-A]-[Mr. Manoj-9719433442]</option>
                                    <option value="2200722">सौरभ[2200722]-[2ND-A]-[sunil jain-9234567981]</option>
                                    <option value="2200728">saloni karn[2200728]-[2ND-A]-[bijay karn-9816870719]
                                    </option>
                                    <option value="2200732">APEKSHIT KOLI[2200732]-[2ND-A]-[MANOJ KUMAR KOLI-7697233299]
                                    </option>
                                    <option value="2200734">Rituraj[2200734]-[2ND-A]-[mitu raj-9875455522]</option>
                                    <option value="2200735">Aaditya [2200735]-[2ND-A]-[Sujit-9934507865]</option>
                                    <option value="2200740">ashok[2200740]-[2ND-A]-[-]</option>
                                    <option value="2200742">vivek[2200742]-[2ND-A]-[-]</option>
                                    <option value="2200744">bbs[2200744]-[2ND-A]-[bbs-9638527410]</option>
                                    <option value="2200746">ravi[2200746]-[2ND-A]-[udham-56548455455]</option>
                                    <option value="2200748">AADITYA JHILLE[2200748]-[2ND-A]-[AASHISH JHILLE-7024347776]
                                    </option>
                                    <option value="2200750">ROHIT KUMAR[2200750]-[2ND-A]-[DOODH NATH YADAV-8577908478]
                                    </option>
                                    <option value="2200751">Prashant KUMAR[2200751]-[2ND-A]-[Rammu lal-7748908646]
                                    </option>
                                    <option value="2200761">rakesh[2200761]-[NURSERY-A]-[-]</option>
                                    <option value="2200762">Ravi[2200762]-[12TH-A]-[-8059076999]</option>
                                    <option value="2200763">VINAYAK PATIDAR[2200763]-[4TH-]-[RAHUL MEHRA-456946564]
                                    </option>
                                    <option value="2200764">RANI KHATRI [2200764]-[12TH-]-[NARAYAN KHATRI -8624542123]
                                    </option>
                                    <option value="2200765">RAJ NAYK [2200765]-[5TH-A]-[GOPAL KHATRI-96325663]</option>
                                    <option value="2200755">priya[2200755]-[4TH-A]-[rahul mehara-65463312]</option>
                                    <option value="2200770">raman[2200770]-[NURSERY-A]-[tapan-7896541256]</option>
                                    <option value="2200763">VINAYAK PATIDAR[2200763]-[5TH-A]-[rahul mehara-456946564]
                                    </option>
                                    <option value="2200767">Praashant [2200767]-[5TH-A]-[rammulal-70000040]</option>
                                    <option value="2200733">Akshay Karande[2200733]-[LKG-A]-[NILESH PATIDAR-]</option>
                                    <option value="2200738">mayank[2200738]-[LKG-A]-[demo--1]</option>
                                    <option value="2200747">Vaishnavi Thakur[2200747]-[LKG-A]-[Mr. Amrendra Pratap Singh
                                        -9918666600]</option>
                                    <option value="2200752">Urvi sen[2200752]-[LKG-A]-[Prabhash sen-9101065310]</option>
                                    <option value="2200759">INAMUR RAHMAN[2200759]-[LKG-A]-[ATIKUR RAHMAN-8486304694]
                                    </option>
                                    <option value="2200761">rakesh[2200761]-[LKG-A]-[-]</option>
                                    <option value="2200771">Akshay[2200771]-[8TH-]-[ABC-1234567890]</option>
                                    <option value="2200772">PRASHANT SHARMA[2200772]-[4TH-]-[RAM KUMAR-]</option>
                                    <option value="2200753">Akshaj Mishra[2200753]-[3RD-A]-[shesh Narayan
                                        Mishra-9685437207]</option>
                                    <option value="2200773">nidhi jain [2200773]-[2ND-A]-[sunil jain-9668552231]
                                    </option>
                                    <option value="2200772">Prashant r[2200772]-[5TH-A]-[rahul mehara -]</option>
                                    <option value="2200774">Ram[2200774]-[1ST-A]-[Shyam-7000272137]</option>
                                    <option value="2200771">Akshay[2200771]-[8TH-A]-[ABC-1234567890]</option>
                                    <option value="2200776">nidhi jain [2200776]-[2ND-A]-[sunil jain-9988554665]
                                    </option>
                                    <option value="2200760">nidhi jain [2200760]-[3RD-A]-[sunil jain-9988525245]
                                    </option>
                                    <option value="2200776">nidhi jain [2200776]-[4TH-A]-[sunil jain-9988554665]
                                    </option>
                                    <option value="2200777">क़ैलश [2200777]-[1ST-A]-[ओहन -7568885859]</option>
                                    <option value="2200778">Kailash [2200778]-[11TH-]-[Mohan ram -7568582859]</option>
                                    <option value="2200779">sunil 1[2200779]-[1ST-A]-[Asad-9955886644]</option>
                                    <option value="2200779">sunil 1[2200779]-[2ND-A]-[Asad-9955886644]</option>
                                    <option value="2200780">Nikhil[2200780]-[LKG-A]-[jonh-9090909090]</option>
                                    <option value="2200756">RAJESH KUMAR MAHTO [2200756]-[6TH-A]-[SITA RAM MAHTO
                                        -7488150952]</option>
                                    <option value="2200765">RAJ NAYK [2200765]-[6TH-A]-[GOPAL KHATRI-96325663]</option>
                                    <option value="2200782">yashi[2200782]-[NURSERY-A]-[pushpendra-8430555580]</option>
                                    <option value="2200783">Gopi[2200783]-[7TH-A]-[BIKSHAM -9052483352]</option>
                                    <option value="2200785">ABHIMANYU SHARMA[2200785]-[NURSERY-A]-[GOURAV
                                        SHARMA-9755404505]</option>
                                    <option value="2200786">AVNI SHARMA[2200786]-[2ND-A]-[SOURABH SHARMA-9826625627]
                                    </option>
                                    <option value="2200788">Fig[2200788]-[6TH-A]-[Niraj Kumar -458725]</option>
                                    <option value="2200789">FALGUNI[2200789]-[UKG-A]-[-]</option>
                                    <option value="2200790">shree[2200790]-[NURSERY-A]-[samay singh -9911587536]
                                    </option>
                                    <option value="2200791">shreyansh[2200791]-[1ST-A]-[Neeraj kumar-9911587539]
                                    </option>
                                    <option value="2200792">KRISH ARYA[2200792]-[2ND-A]-[MANI LAL-7677425494]</option>
                                    <option value="2200793">Ajay[2200793]-[NURSERY-A]-[Vijay-685555555555]</option>
                                    <option value="2200795">Druwa Ganesh Chaudhari[2200795]-[NURSERY-A]-[Ganesh
                                        Chaudhari-8469808008]</option>
                                    <option value="2200783">Gopi[2200783]-[8TH-A]-[BIKSHAM -9052483352]</option>
                                    <option value="2200797">Md alam ali [2200797]-[UKG-A]-[Ali alam-9473000888]</option>
                                    <option value="2200798">dummy [2200798]-[1ST-A]-[dummy-1234567890]</option>
                                    <option value="2200799">TABREZ ALAM[2200799]-[1ST-A]-[BAKRIDAN ANSARI-7677425494]
                                    </option>
                                    <option value="2200800">SHIVANSH RAWAT[2200800]-[NURSERY-A]-[AJAY-6283926887]
                                    </option>
                                    <option value="2200801">AYAT[2200801]-[2ND-A]-[-7677425494]</option>
                                    <option value="2200802">SULTANA[2200802]-[2ND-A]-[-9693212542]</option>
                                    <option value="2200796">SONU PRAJAPATI[2200796]-[2ND-A]-[LALARAM
                                        PRAJAPATI-7067208375]</option>
                                    <option value="2200798">dummy [2200798]-[2ND-A]-[dummy-1234567890]</option>
                                    <option value="2200803">Kayyum Ansari [2200803]-[UKG-A]-[Shahabuddin
                                        Ansari-7571090390]</option>
                                    <option value="2200804">Chander Mohan[2200804]-[2ND-A]-[Norang Lal-9991199553]
                                    </option>
                                    <option value="2200805">mahi[2200805]-[7TH-A]-[rohit kumar -]</option>
                                    <option value="2200806">mahi[2200806]-[LKG-A]-[ram singh -7024510634]</option>
                                    <option value="2200808">Kapil kumar [2200808]-[10TH-A]-[-8586996456]</option>
                                    <option value="2200770">raman[2200770]-[NURSERY-A]-[tapan-7896541256]</option>
                                    <option value="2200782">yashi[2200782]-[NURSERY-A]-[pushpendra-8430555580]</option>
                                    <option value="2200790">shree[2200790]-[NURSERY-A]-[samay singh -9911587536]
                                    </option>
                                    <option value="2200795">Druwa Ganesh Chaudhari[2200795]-[NURSERY-A]-[Ganesh
                                        Chaudhari-8469808008]</option>
                                    <option value="2200800">SHIVANSH RAWAT[2200800]-[NURSERY-A]-[AJAY-6283926887]
                                    </option>
                                    <option value="2200810">shahnawaz[2200810]-[1ST-A]-[-7677425494]</option>
                                    <option value="2200811">yasin[2200811]-[1ST-A]-[-9931326638]</option>
                                    <option value="2200812">sultana[2200812]-[1ST-A]-[-9693212542]</option>
                                    <option value="2200813">KRISH ARYA[2200813]-[2ND-A]-[-767742549412]</option>
                                    <option value="2200814">pragya [2200814]-[5TH-A]-[rajesh-1234567891]</option>
                                    <option value="2200815">veena[2200815]-[5TH-A]-[ramesh-]</option>
                                    <option value="2200816">priya[2200816]-[5TH-A]-[ramu-7825458730]</option>
                                    <option value="2200817">priya[2200817]-[7TH-A]-[kaml raj-56454564564564]</option>
                                    <option value="2200818">hari shankar kol[2200818]-[12TH-]-[dummy father-121251212]
                                    </option>
                                    <option value="2200819">himanshu kol[2200819]-[10TH-]-[dummy father-7]</option>
                                    <option value="2200820">rubeena[2200820]-[10TH-A]-[ashfak-1234554321]</option>
                                    <option value="2200821">PATEL GHANS[2200821]-[5TH-A]-[SHA-000]</option>
                                    <option value="2200714">vishal jha[2200714]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200717">muskan ray[2200717]-[UKG-A]-[roshan ray-9813405312]</option>
                                    <option value="2200729">sushant karn[2200729]-[UKG-A]-[bijay karn-9816870719]
                                    </option>
                                    <option value="2200741">Abhay[2200741]-[UKG-A]-[-]</option>
                                    <option value="2200780">Nikhil[2200780]-[UKG-A]-[jonh-9090909090]</option>
                                    <option value="2200822">mahi[2200822]-[7TH-A]-[kaml raj-5644545456]</option>
                                    <option value="2200823">Yash [2200823]-[NURSERY-A]-[Soun-6265767366]</option>
                                    <option value="2200824">PALAK BANKAR[2200824]-[1ST-A]-[-]</option>
                                    <option value="2200825">Sagar Agarwal[2200825]-[NURSERY-B]-[Rajesh
                                        Agarwal-9872599661]</option>
                                    <option value="2200826">Sagar Agarwal[2200826]-[NURSERY-B]-[Rajesh
                                        Agarwal-9874563219]</option>
                                    <option value="2200827">jeet kumar[2200827]-[5TH-A]-[amit kumar -7896454571]
                                    </option>
                                    <option value="2200828">sharda [2200828]-[8TH-]-[krishna-1234554321]</option>
                                    <option value="2200829">D[2200829]-[NURSERY-A]-[Dd-34346499494]</option>
                                    <option value="2200814">pragya [2200814]-[6TH-A]-[rajesh-1234567891]</option>
                                    <option value="2200827">jeet kumar[2200827]-[6TH-A]-[amit kumar -7896454571]
                                    </option>
                                    <option value="2200830">ROHIT[2200830]-[UKG-A]-[ANKUSH-46455464]</option>
                                    <option value="2200831">PANKAJ KUMAR[2200831]-[2ND-A]-[UPENDRA SHARMA-7004625934]
                                    </option>
                                    <option value="2200832">nidhi [2200832]-[10TH-A]-[jagdish-8754129623]</option>
                                    <option value="2200833">poonam [2200833]-[5TH-A]-[samrat kumar -7854126310]</option>
                                    <option value="2200834">akhay[2200834]-[UKG-A]-[hemant-]</option>
                                    <option value="2200835">PANKAJ KUMAR[2200835]-[3RD-A]-[UPENDRA SHARMA-]</option>
                                    <option value="2200836">Rohit[2200836]-[9TH-A]-[Ram kumar-9918066214]</option>
                                    <option value="2200838">manish[2200838]-[8TH-]-[s.b. shrivastava-9910447389]
                                    </option>
                                    <option value="2200839">harika[2200839]-[NURSERY-A]-[murli-9346151027]</option>
                                    <option value="2200840">king kholh[2200840]-[LKG-A]-[santosh uikey-123496545]
                                    </option>
                                    <option value="2200842">dheeraj[2200842]-[12TH-]-[subeet-885288528]</option>
                                    <option value="2200810">shahnawaz[2200810]-[1ST-A]-[-7677425494]</option>
                                    <option value="2200811">yasin[2200811]-[1ST-A]-[-9931326638]</option>
                                    <option value="2200812">sultana[2200812]-[1ST-A]-[-9693212542]</option>
                                    <option value="2200841">vicky uikey[2200841]-[1ST-A]-[jitendrasingh
                                        uikey-7354713649]</option>
                                    <option value="2200843">sameer[2200843]-[5TH-A]-[sataym-1234567890]</option>
                                    <option value="2200844">seena[2200844]-[1ST-]-[rohit-1234554321]</option>
                                    <option value="2200845">dinamyte[2200845]-[LKG-A]-[sunil jain-]</option>
                                    <option value="2200846">penolope [2200846]-[7TH-A]-[jonh-]</option>
                                    <option value="2200847">diksha[2200847]-[NURSERY-A]-[raj-5623145982]</option>
                                    <option value="2200848">dsafsdf[2200848]-[NURSERY-A]-[dsfsdfgds-136448654651]
                                    </option>
                                    <option value="2200849">fghfhfgh[2200849]-[LKG-A]-[raj-]</option>
                                    <option value="2200850">rani[2200850]-[LKG-A]-[ram-56455126]</option>
                                    <option value="2200852">Abc[2200852]-[12TH-A]-[Xyz-12345]</option>
                                    <option value="2200853">Testing[2200853]-[NURSERY-B]-[-9717386989]</option>
                                    <option value="2200854">Abdul sami [2200854]-[12TH-A]-[Mohd Sharif -6005939589]
                                    </option>
                                    <option value="2200855">vishwsan[2200855]-[LKG-A]-[abc-545412222222]</option>
                                    <option value="2200856">jjlklkk[2200856]-[7TH-A]-[-]</option>
                                    <option value="2200857">rahul[2200857]-[12TH-]-[raghaw--1]</option>
                                    <option value="2200858">SURBHI[2200858]-[12TH-]-[RAMESH-1234554321]</option>
                                    <option value="2200859">teena[2200859]-[LKG-A]-[krshab-1234554321]</option>
                                    <option value="2200860">poonam[2200860]-[NURSERY-A]-[rakesh-1234554321]</option>
                                    <option value="2200861">VINAYAK PATIDAR[2200861]-[1ST-A]-[SUNIL RAI-9955882211]
                                    </option>
                                    <option value="2200862">Jagat [2200862]-[LKG-A]-[Jaganniwas-7987090292]</option>
                                    <option value="2200863">RAM[2200863]-[2ND-A]-[NILESH PATIDAR-0987668986]</option>
                                    <option value="2200864">NIDHI SINGH[2200864]-[4TH-]-[RAMRAJ SINGH-89789665677]
                                    </option>
                                    <option value="2200865">rekha[2200865]-[12TH-]-[ramesh-1234554321]</option>
                                    <option value="2200866">NIDHI SINGH[2200866]-[1ST-A]-[RAMRAJ-76767676656]</option>
                                    <option value="2200867">moni[2200867]-[12TH-]-[radhe-9875463541]</option>
                                    <option value="2200868">Prashant [2200868]-[6TH-A]-[Rammu lal-1234569875]</option>
                                    <option value="2200869">Prashant [2200869]-[6TH-A]-[Rammu lal-1234587932]</option>
                                    <option value="2200870">heena[2200870]-[12TH-A]-[shjdgf-]</option>
                                    <option value="2200871">pooja bairagi[2200871]-[7TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200872">pooja bairagi[2200872]-[7TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200873">aashish[2200873]-[NURSERY-A]-[rajan-9479489344]</option>
                                    <option value="2200874">aashish[2200874]-[9TH-]-[rajan-9999999999]</option>
                                    <option value="2200875">aashish[2200875]-[NURSERY-A]-[rajan-8888888888]</option>
                                    <option value="2200878">RITA[2200878]-[12TH-A]-[RAJ-6869782122]</option>
                                    <option value="2200879">pooja bairagi[2200879]-[7TH-A]-[Mr. J.D. Bairagi-]</option>
                                    <option value="2200880">sarikha[2200880]-[5TH-A]-[ramesh-1234554321]</option>
                                    <option value="2200881">aashish xyz [2200881]-[NURSERY-A]-[aaaaaaaaa-5656565656]
                                    </option>
                                    <option value="2200882">rekha [2200882]-[2ND-A]-[mohit-5656586568]</option>
                                    <option value="2200883">Farhan khan[2200883]-[7TH-A]-[Riyaz khan-458963248327]
                                    </option>
                                    <option value="2200884">पंकज कुमार[2200884]-[NURSERY-A]-[लालू राम-9898888888]
                                    </option>
                                    <option value="2200885">deenu[2200885]-[1ST-A]-[-1234554321]</option>
                                    <option value="2200886">Mafidul Islam[2200886]-[6TH-A]-[Ali-00000000000000]</option>
                                    <option value="2200887">dummy student[2200887]-[1ST-A]-[test-9876543218]</option>
                                    <option value="2200888">mahi[2200888]-[UKG-A]-[rohit kumar -56445454]</option>
                                    <option value="2200889">Sasikiran[2200889]-[10TH-A]-[Siva-9700010510]</option>
                                    <option value="2200890">mkjoh[2200890]-[12TH-A]-[fygsxyhmc-3654641254]</option>
                                    <option value="2200891">ydchtnb[2200891]-[12TH-A]-[grsry-5378646411]</option>
                                    <option value="2200892">mahi[2200892]-[5TH-A]-[rohit kumar -444556454]</option>
                                    <option value="2200788">Fig[2200788]-[7TH-A]-[Niraj Kumar -458725]</option>
                                    <option value="2200868">Prashant [2200868]-[7TH-A]-[Rammu lal-1234569875]</option>
                                    <option value="2200869">Prashant [2200869]-[7TH-A]-[Rammu lal-1234587932]</option>
                                    <option value="2200893">radhika [2200893]-[10TH-A]-[ramesh -1234554321]</option>
                                    <option value="2200894">nidhi [2200894]-[NURSERY-A]-[ram parkash -7845129632]
                                    </option>
                                    <option value="2200895">sapna [2200895]-[5TH-A]-[rajaraam-8712459632]</option>
                                    <option value="2200896">dhara [2200896]-[NURSERY-A]-[ghanshyam -8745216395]</option>
                                    <option value="2200897">rakesh kumar [2200897]-[10TH-A]-[jitendar -9856231487]
                                    </option>
                                    <option value="2200898">tapu [2200898]-[NURSERY-A]-[jethalaal-8796325412]</option>
                                    <option value="2200864">NIDHI SINGH[2200864]-[5TH-A]-[RAMRAJ-89789665677]</option>
                                    <option value="2200899">krishna[2200899]-[NURSERY-A]-[radhe-9956568145]</option>
                                    <option value="2200900">pari[2200900]-[NURSERY-A]-[sanjay-7845126389]</option>
                                    <option value="2200901">neha parihar [2200901]-[LKG-A]-[himanshu parihar
                                        -7854126359]</option>
                                    <option value="2200902">anshu jha [2200902]-[NURSERY-A]-[ravindr jha -9856231478]
                                    </option>
                                    <option value="2200903">aryan singh[2200903]-[NURSERY-A]-[omprakash
                                        singh-9854254614]</option>
                                    <option value="2200904">Sunny[2200904]-[NURSERY-A]-[dfh-7484724152]</option>
                                    <option value="2200905">Sunny[2200905]-[NURSERY-A]-[tdfrghe-9983545536]</option>
                                    <option value="2200906">Monika[2200906]-[8TH-]-[Rathore-9983151325]</option>
                                    <option value="2200907">mansha[2200907]-[10TH-A]-[-1234554321]</option>
                                    <option value="2200908">NIDHI SINGH[2200908]-[8TH-]-[MR.SHYAM-789986575]</option>
                                    <option value="2200911">Aaradhy choubey[2200911]-[1ST-A]-[atul choubey-9993501345]
                                    </option>
                                    <option value="2200912">Kavita[2200912]-[8TH-]-[raj-9855165123]</option>
                                    <option value="2200913">nidhi [2200913]-[3RD-A]-[sunil -]</option>
                                    <option value="2200914">Prashant kumar[2200914]-[NURSERY-A]-[-]</option>
                                    <option value="2200915">mahi[2200915]-[7TH-A]-[kaml raj-4744444]</option>
                                    <option value="2200916">reena[2200916]-[5TH-A]-[-1234554321]</option>
                                    <option value="2200917">mansha[2200917]-[12TH-A]-[-]</option>
                                    <option value="2200918">mansha[2200918]-[LKG-A]-[-]</option>
                                    <option value="2200919">riya[2200919]-[7TH-A]-[kaml raj-56454564]</option>
                                    <option value="2200920">mehnaz [2200920]-[NURSERY-A]-[Aslam -123456879]</option>
                                    <option value="2200921">mehnaz [2200921]-[NURSERY-A]-[Aslam-1234587]</option>
                                    <option value="2200922">Aaysha Bano[2200922]-[1ST-A]-[-]</option>
                                    <option value="2200923">MANAV RAI[2200923]-[1ST-A]-[RAJENDRA PATIDAR-9955336677]
                                    </option>
                                    <option value="2200924">MANAV RAI[2200924]-[1ST-A]-[RAJENDRA PATIDAR-]</option>
                                    <option value="2200925">radhika [2200925]-[10TH-A]-[mukesh -1234554321]</option>
                                    <option value="2200926">ram[2200926]-[12TH-A]-[shyam-]</option>
                                    <option value="2200927">VINAYAK PATIDAR[2200927]-[1ST-A]-[RAJENDRA
                                        PATIDAR-9988552233]</option>
                                    <option value="2200928">vipin kumar[2200928]-[12TH-A]-[harish chandra-9936563372]
                                    </option>
                                    <option value="2200929">Nidhi Singh [2200929]-[2ND-A]-[Vijay -853215684]</option>
                                    <option value="2200931">ArhN[2200931]-[5TH-A]-[Arqam-982365526]</option>
                                    <option value="2200932">Atif[2200932]-[9TH-]-[-]</option>
                                    <option value="2200933">Ariz[2200933]-[LKG-A]-[-]</option>
                                    <option value="2200934">Ariz[2200934]-[LKG-A]-[-]</option>
                                    <option value="2200935">Aayan khan[2200935]-[NURSERY-A]-[Zubair khan-7849533494]
                                    </option>
                                    <option value="2200936">vicky uikey[2200936]-[1ST-A]-[jitendra singh
                                        uikey-7354713649]</option>
                                    <option value="2200937">Chirag jatav[2200937]-[1ST-A]-[MR.Arjun jatav-123]</option>
                                    <option value="2200938">Pooja bairagi [2200938]-[7TH-A]-[Smt. Meenu
                                        bairagi-963486652388]</option>
                                    <option value="2200939">rajkumar[2200939]-[7TH-A]-[Rammu lal-544564]</option>
                                    <option value="2200940">Neeraj Agrawal[2200940]-[NURSERY-A]-[Subhash-9300251956]
                                    </option>
                                    <option value="2200941">PRASHANT[2200941]-[1ST-A]-[sdfdff-988979797979]</option>
                                    <option value="2200942">priya[2200942]-[7TH-A]-[-]</option>
                                    <option value="2200805">mahi[2200805]-[8TH-A]-[rohit kumar -]</option>
                                    <option value="2200817">priya[2200817]-[8TH-A]-[kaml raj-56454564564564]</option>
                                    <option value="2200822">mahi[2200822]-[8TH-A]-[kaml raj-5644545456]</option>
                                    <option value="2200846">penolope [2200846]-[8TH-A]-[jonh-]</option>
                                    <option value="2200856">jjlklkk[2200856]-[8TH-A]-[-]</option>
                                    <option value="2200871">pooja bairagi[2200871]-[8TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200872">pooja bairagi[2200872]-[8TH-A]-[j. d. bairagi-]</option>
                                    <option value="2200879">pooja bairagi[2200879]-[8TH-A]-[Mr. J.D. Bairagi-]</option>
                                    <option value="2200883">Farhan khan[2200883]-[8TH-A]-[Riyaz khan-458963248327]
                                    </option>
                                    <option value="2200910">Prashant[2200910]-[8TH-A]-[Rammu lal-7740000]</option>
                                    <option value="2200915">mahi[2200915]-[8TH-A]-[kaml raj-4744444]</option>
                                    <option value="2200919">riya[2200919]-[8TH-A]-[kaml raj-56454564]</option>
                                    <option value="2200938">Pooja bairagi [2200938]-[8TH-A]-[Smt. Meenu
                                        bairagi-963486652388]</option>
                                    <option value="2200939">rajkumar[2200939]-[8TH-A]-[Rammu lal-544564]</option>
                                    <option value="2200943">Md. Mokarram alam [2200943]-[LKG-A]-[Md. Siddique alam
                                        -6200665811]</option>
                                    <option value="2200944">himanshu sidam [2200944]-[11TH-]-[yatish sidam -1234554321]
                                    </option>
                                    <option value="2200945">ashta [2200945]-[7TH-A]-[sanjeev -7894561230]</option>
                                    <option value="2200946">lalit [2200946]-[6TH-A]-[harichandra -1234567890]</option>
                                    <option value="2200947">shikha [2200947]-[7TH-A]-[rajendra -546123790]</option>
                                    <option value="2200948">SANDEEP[2200948]-[LKG-A]-[PRATHAM SINGH-9991233258]</option>
                                    <option value="2200949">sheeba [2200949]-[NURSERY-A]-[Raja -325798965]</option>
                                    <option value="2200950">zeba [2200950]-[NURSERY-A]-[Raja -325798965]</option>
                                    <option value="2200951">Vansh Kumar Pasi[2200951]-[2ND-A]-[Ravi Pasi-8103488491]
                                    </option>
                                    <option value="2200952">PUSHKAR[2200952]-[NURSERY-A]-[NIRAJ RAJ-9030204470]</option>
                                    <option value="2200953">rakesh[2200953]-[LKG-A]-[shaelendra-9058068745]</option>
                                    <option value="2200954">AMAN BHARTI[2200954]-[8TH-]-[SONU KUMAR BHARTI-9102993075]
                                    </option>
                                    <option value="2200806">mahi[2200806]-[UKG-A]-[ram singh -7024510634]</option>
                                    <option value="2200955">RAM KUMAR [2200955]-[1ST-]-[SHYAM KUMAR -8936860311]
                                    </option>
                                    <option value="2200956">JAMES BOND[2200956]-[NURSERY-A]-[JAMES-9916230778]</option>
                                    <option value="2200957">Prashant [2200957]-[7TH-A]-[rammu lal -7748770000]</option>
                                    <option value="2200958">Prashant [2200958]-[7TH-A]-[rammu lal -74444]</option>
                                    <option value="2200959">Amit rao[2200959]-[1ST-A]-[Sahab rao-9450673349]</option>
                                    <option value="2200960">UMESH KUMAR
                                        KUSHWAHA[2200960]-[NURSERY-A]-[KANHAI-4523659874]</option>
                                    <option value="2200961">NIDHI SINGH[2200961]-[1ST-A]-[BHARAT PATIDAR-824685465]
                                    </option>
                                    <option value="2200942">priya[2200942]-[8TH-A]-[-]</option>
                                    <option value="2200945">ashta [2200945]-[8TH-A]-[sanjeev -7894561230]</option>
                                    <option value="2200947">shikha [2200947]-[8TH-A]-[rajendra -546123790]</option>
                                    <option value="2200957">Prashant [2200957]-[8TH-A]-[rammu lal -7748770000]</option>
                                    <option value="2200962">shravan singh[2200962]-[1ST-A]-[rajaram singh-9452358861]
                                    </option>
                                    <option value="2200963">AADITYA SINGH[2200963]-[4TH-]-[OM SINGH-941525203]</option>
                                    <option value="2200964">AADITYA SINGH[2200964]-[NURSERY-A]-[OM -9889889300]</option>
                                    <option value="2200965">asharamk[2200965]-[1ST-A]-[-6265861579]</option>
                                    <option value="2200966">abc[2200966]-[NURSERY-A]-[Raja -1234544321]</option>
                                    <option value="2200967">zeba [2200967]-[NURSERY-A]-[Raja -1234567891]</option>
                                    <option value="2200969">Shristhi soni[2200969]-[10TH-A]-[Samrat-5461237899]</option>
                                    <option value="2200970">AAISHA KURREY[2200970]-[10TH-A]-[SANJEEV KUMAR
                                        KURREY-2136547899]</option>
                                    <option value="2200971">Arvind[2200971]-[10TH-A]-[v,kknkl-4662326895]</option>
                                    <option value="2200972">ravi das [2200972]-[10TH-A]-[mohan das -7896541232]</option>
                                    <option value="2200973">ravina singh [2200973]-[10TH-A]-[dev singh -5461237890]
                                    </option>
                                    <option value="2200974">kamalkant[2200974]-[7TH-A]-[vasudev dhakad-9752199047]
                                    </option>
                                    <option value="2200975">Prashant [2200975]-[NURSERY-A]-[rammu lal -7747440]</option>
                                    <option value="2200976">Prashant [2200976]-[7TH-A]-[rammu lal -744777]</option>
                                    <option value="2200977">Aarunya Raj Sinha[2200977]-[LKG-A]-[tret-87874545454]
                                    </option>
                                    <option value="2200980">Monali[2200980]-[2ND-A]-[-]</option>
                                    <option value="2200981">Monali[2200981]-[2ND-A]-[-]</option>
                                    <option value="2200982">MANAV RAI[2200982]-[3RD-A]-[SUNIL RAI-8168383975]</option>
                                    <option value="2200983">shamli mashram [2200983]-[NURSERY-A]-[harichandra
                                        -1234567899]</option>
                                    <option value="2200901">neha parihar [2200901]-[UKG-A]-[himanshu parihar
                                        -7854126359]</option>
                                    <option value="2200918">mansha[2200918]-[UKG-A]-[-]</option>
                                    <option value="2200933">Ariz[2200933]-[UKG-A]-[-]</option>
                                    <option value="2200934">Ariz[2200934]-[UKG-A]-[-]</option>
                                    <option value="2200943">Md. Mokarram alam [2200943]-[UKG-A]-[Md. Siddique alam
                                        -6200665811]</option>
                                    <option value="2200977">Aarunya Raj Sinha[2200977]-[UKG-A]-[tret-87874545454]
                                    </option>
                                    <option value="2200984">lokesh[2200984]-[7TH-A]-[sandeep-9416499566]</option>
                                    <option value="2200799">TABREZ ALAM[2200799]-[2ND-A]-[BAKRIDAN ANSARI-7677425494]
                                    </option>
                                    <option value="2200861">VINAYAK PATIDAR[2200861]-[2ND-A]-[SUNIL RAI-9955882211]
                                    </option>
                                    <option value="2200927">VINAYAK PATIDAR[2200927]-[2ND-A]-[RAJENDRA
                                        PATIDAR-9988552233]</option>
                                    <option value="2200936">vicky uikey[2200936]-[2ND-A]-[jitendra singh
                                        uikey-7354713649]</option>
                                    <option value="2200955">RAM KUMAR [2200955]-[2ND-A]-[SHYAM KUMAR -8936860311]
                                    </option>
                                    <option value="2200959">Amit rao[2200959]-[2ND-A]-[Sahab rao-9450673349]</option>
                                    <option value="2200961">NIDHI SINGH[2200961]-[2ND-A]-[BHARAT PATIDAR-824685465]
                                    </option>
                                    <option value="2200962">shravan singh[2200962]-[2ND-A]-[rajaram singh-9452358861]
                                    </option>
                                    <option value="2200965">asharamk[2200965]-[2ND-A]-[-6265861579]</option>
                                    <option value="2200986">Meenakshi[2200986]-[9TH-]-[kamble-9864253472]</option>
                                    <option value="2200987">prash[2200987]-[6TH-A]-[rrmm-7444]</option>
                                    <option value="2200989">Prashant [2200989]-[7TH-A]-[rammu lal -74440]</option>
                                    <option value="2200990">Prashant [2200990]-[7TH-A]-[rammu lal -744]</option>
                                    <option value="2200958">Prashant [2200958]-[8TH-A]-[rammu lal -74444]</option>
                                    <option value="2200974">kamalkant[2200974]-[8TH-A]-[vasudev dhakad-9752199047]
                                    </option>
                                    <option value="2200976">Prashant [2200976]-[8TH-A]-[rammu lal -744777]</option>
                                    <option value="2200984">lokesh[2200984]-[8TH-A]-[sandeep-9416499566]</option>
                                    <option value="2200989">Prashant [2200989]-[8TH-A]-[rammu lal -74440]</option>
                                    <option value="2200992">Prashant [2200992]-[7TH-A]-[-77]</option>
                                    <option value="2200993">VEDANT TIWARI[2200993]-[7TH-A]-[MANOJ KUMAR
                                        TIWARI-8090688671]</option>
                                    <option value="2201004">pawan[2201004]-[2ND-A]-[mfldfe-64611649611]</option>
                                    <option value="2201005">hghgkjnlklml[2201005]-[1ST-A]-[-]</option>
                                    <option value="2201006">SAJIYA FIRDOSH[2201006]-[LKG-A]-[SK HEDAYTULLAH-7504631786]
                                    </option>
                                    <option value="2201008">virat[2201008]-[9TH-A]-[ram kumar-9219270152]</option>
                                    <option value="2200990">Prashant [2200990]-[8TH-A]-[rammu lal -744]</option>
                                    <option value="2200992">Prashant [2200992]-[8TH-A]-[-77]</option>
                                    <option value="2200993">VEDANT TIWARI[2200993]-[8TH-A]-[MANOJ KUMAR
                                        TIWARI-8090688671]</option>
                                    <option value="2201009">Aamna Hussain[2201009]-[NURSERY-A]-[Syed Farhat
                                        Hussain-9018501010]</option>
                                    <option value="2201010">Prashant [2201010]-[7TH-A]-[rammu lal -74444]</option>
                                    <option value="2201012">SANIYA FIROJ SHEIKH[2201012]-[1ST-A]-[-1234566666]</option>
                                    <option value="2201013">RISHITA ASHOK KANKUNTLA[2201013]-[1ST-A]-[-36251145222]
                                    </option>
                                    <option value="2201014">Himanshu kushwaha[2201014]-[11TH-A]-[Virendra kushwaha
                                        -8004561271]</option>
                                    <option value="2201015">Prashant [2201015]-[7TH-A]-[rammu lal -7441000]</option>
                                    <option value="2201010">Prashant [2201010]-[7TH-A]-[rammu lal -74444]</option>
                                    <option value="2201015">Prashant [2201015]-[7TH-A]-[rammu lal -7441000]</option>
                                    <option value="2201017">रधिका महेश्वरि [2201017]-[1ST-A]-[प्रकाश
                                        महेश्वरि-7779999777]</option>
                                    <option value="2201018">Uttam [2201018]-[NURSERY-A]-[Ghanshyam -9610170090]</option>
                                    <option value="2201020">Amit[2201020]-[1ST-A]-[Uttam-9610170090]</option>
                                    <option value="2201021">AYUSH SAHU[2201021]-[LKG-A]-[RAKESH KUMAR-9984908313]
                                    </option>
                                    <option value="2201022">Warda Sahar[2201022]-[10TH-A]-[Mohd Junaid-9839054804]
                                    </option>
                                    <option value="2201023">ANJITA BANJARE[2201023]-[NURSERY-A]-[CHHUNNI LAL
                                        BANJARE-7772345028]</option>
                                    <option value="2201025">PAYAL SAHU[2201025]-[2ND-A]-[VINOD SAHU-7458668265]</option>
                                    <option value="2201026">Sharan Kumar [2201026]-[12TH-A]-[Nagnath -6363352757]
                                    </option>
                                    <option value="2201027">RAJ MOHAN[2201027]-[NURSERY-A]-[RAJ-9450811452]</option>
                                    <option value="2200946">lalit [2200946]-[7TH-A]-[harichandra -1234567890]</option>
                                    <option value="2200987">prash[2200987]-[7TH-A]-[rrmm-7444]</option>
                                    <option value="2201028">suhani raj singh ji [2201028]-[5TH-A]-[kkkkkkk-9335206818]
                                    </option>
                                    <option value="2201029">muhani raj singh ji [2201029]-[5TH-A]-[kkkkkkk-]</option>
                                    <option value="2201030">duhani raj singh ji[2201030]-[5TH-A]-[-]</option>
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
                                    <option value="2000342">deepak kumar[2000342]-[2ND-A]-[nitish kumar-8229020634]
                                    </option>
                                    <option value="2200715">Prashant kumar[2200715]-[2ND-A]-[babl-7844411100]</option>
                                    <option value="2200743">abhisek[2200743]-[2ND-A]-[-8109195202]</option>
                                    <option value="2200791">shreyansh[2200791]-[2ND-A]-[Neeraj kumar-9911587539]
                                    </option>
                                    <option value="2200810">shahnawaz[2200810]-[2ND-A]-[-7677425494]</option>
                                    <option value="2200811">yasin[2200811]-[2ND-A]-[-9931326638]</option>
                                    <option value="2200812">sultana[2200812]-[2ND-A]-[-9693212542]</option>
                                    <option value="2200841">vicky uikey[2200841]-[2ND-A]-[jitendrasingh
                                        uikey-7354713649]</option>
                                    <option value="2200937">Chirag jatav[2200937]-[2ND-A]-[MR.Arjun jatav-123]</option>
                                    <option value="2200695">praveen kumar[2200695]-[2ND-A]-[-66666666666]</option>
                                    <option value="2100541">Sagar Singh[2100541]-[8TH-A]-[Rakesh Singh-1234567890]
                                    </option>
                                    <option value="2200632">MANVEER SINGH [2200632]-[8TH-A]-[GURDEV SINGH -836009915]
                                    </option>
                                    <option value="2200637">Kiran Sharma[2200637]-[8TH-A]-[Ramu Sharma-123456789]
                                    </option>
                                    <option value="2200638">Riya Sharma[2200638]-[8TH-A]-[Ram Sharma-234567891]</option>
                                    <option value="2200639">Ram Kumar[2200639]-[8TH-A]-[Ravi Kumar-345678912]</option>
                                    <option value="2200640">Meena Verma[2200640]-[8TH-A]-[Jay Verma-456789123]</option>
                                    <option value="2200641">Heena Mittal[2200641]-[8TH-A]-[Lalu Pasad-567891234]
                                    </option>
                                    <option value="2200642">Anamika[2200642]-[8TH-A]-[Yash Kapoor-9456312705]</option>
                                    <option value="2200643">Lalu Kumar[2200643]-[8TH-A]-[Raju Kumar-678912345]</option>
                                    <option value="2200667">payal[2200667]-[8TH-A]-[shyamlal-8052987121]</option>
                                    <option value="2200788">Fig[2200788]-[8TH-A]-[Niraj Kumar -458725]</option>
                                    <option value="2200868">Prashant [2200868]-[8TH-A]-[Rammu lal-1234569875]</option>
                                    <option value="2200869">Prashant [2200869]-[8TH-A]-[Rammu lal-1234587932]</option>
                                    <option value="2200946">lalit [2200946]-[8TH-A]-[harichandra -1234567890]</option>
                                    <option value="2200987">prash[2200987]-[8TH-A]-[rrmm-7444]</option>
                                    <option value="2201010">Prashant [2201010]-[8TH-A]-[rammu lal -74444]</option>
                                    <option value="2201015">Prashant [2201015]-[8TH-A]-[rammu lal -7441000]</option>
                                    <option value="2201059">Prashant [2201059]-[7TH-A]-[rammu lal -4545446564]</option>
                                    <option value="2201060">RAJESH SINGH[2201060]-[1ST-A]-[HARBHAJAN SINGH-9501492060]
                                    </option>
                                    <option value="2201061">ANIL SINGH[2201061]-[12TH-A]-[HARBHAJAN SINGH-9815603856]
                                    </option>
                                    <option value="2201062">Ramesh[2201062]-[4TH-A]-[Suresh-9821223300]</option>
                                    <option value="2201063">nidhi jain[2201063]-[4TH-A]-[sunil-9997775544]</option>
                                    <option value="2201064">nidhi jain [2201064]-[1ST-A]-[Asad-84875548754]</option>
                                    <option value="2201068">AUGUSTAY[2201068]-[10TH-A]-[ SHARMA-9897015271]</option>
                                    <option value="2201069">Anamika Agrawal[2201069]-[7TH-A]-[Sushil Agrawal-9111111111]
                                    </option>
                                    <option value="2201076">Sujata Agrawal[2201076]-[1ST-A]-[Sushil Agrawal-7111111111]
                                    </option>
                                    <option value="2201069">Anamika Agrawal[2201069]-[8TH-A]-[Sushil Agrawal-9111111111]
                                    </option>
                                    <option value="2201077">aman soni[2201077]-[11TH-A]-[ravi soni-6387770743]</option>
                                    <option value="2201078">aman soni 2[2201078]-[9TH-A]-[ravi soni-6387770743]</option>
                                    <option value="2201079">amit[2201079]-[11TH-A]-[ram chandr-8976453600]</option>
                                    <option value="2201080">Roshan [2201080]-[6TH-A]-[Raj Mishra-9936528547]</option>
                                    <option value="2201081">NIDHI SINGH [2201081]-[7TH-A]-[Asad-8454154454]</option>
                                    <option value="2201082">Rajdeep kumar[2201082]-[4TH-A]-[Mandal himesh-8709788098]
                                    </option>
                                    <option value="2201081">NIDHI SINGH [2201081]-[8TH-A]-[Asad-8454154454]</option>
                                    <option value="2100407">Jayssh[2100407]-[4TH-A]-[parvesh-7218511710]</option>
                                    <option value="2100414">Saurya[2100414]-[4TH-A]-[Sanjeev Kumar-9456930082]</option>
                                    <option value="2100471">Aman[2100471]-[4TH-A]-[Asad-9634569635]</option>
                                    <option value="2100520">Nikhil Lodhi[2100520]-[4TH-A]-[Mayank Lodhi-8679458246]
                                    </option>
                                    <option value="2100538">Diviya prajapati[2100538]-[4TH-A]-[Shrawan Ram-9571176454]
                                    </option>
                                    <option value="2100585">Muhammed Adnan[2100585]-[4TH-A]-[Muhammed
                                        Afnan-686868606868]</option>
                                    <option value="2200659">mahir khan [2200659]-[4TH-A]-[javed khan -8305694069]
                                    </option>
                                    <option value="2200661">imran khan [2200661]-[4TH-A]-[waseem khan -9977805298]
                                    </option>
                                    <option value="2200668">SAJAL[2200668]-[4TH-A]-[-9818273851]</option>
                                    <option value="2200672">Anil Kumar[2200672]-[4TH-A]-[-9990008522]</option>
                                    <option value="2200713">Ram[2200713]-[4TH-A]-[-9999999995656]</option>
                                    <option value="2200755">priya[2200755]-[4TH-A]-[rahul mehara-65463312]</option>
                                    <option value="2200776">nidhi jain [2200776]-[4TH-A]-[sunil jain-9988554665]
                                    </option>
                                    <option value="2201062">Ramesh[2201062]-[4TH-A]-[Suresh-9821223300]</option>
                                    <option value="2201082">Rajdeep kumar[2201082]-[4TH-A]-[Mandal himesh-8709788098]
                                    </option>
                                    <option value="2201084">SURYA PRATAP MAURYA[2201084]-[5TH-A]-[-]</option>
                                    <option value="2201085">Danica Mariam Jacob[2201085]-[1ST-A]-[J P Jacob-9977228818]
                                    </option>
                                    <option value="2201086">Rahul Kumar[2201086]-[NURSERY-A]-[Lalbabu Ray-9570503057]
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="student_name" id="student_name" />

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Borrower's Class & Section</label>
                            <input type="text" name="student_class" placeholder="Student Class" id="student_class"
                                class="form-control" readonly />
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="form-group" id="search-box">
                            <label>Borrower's ID</label>
                            <input type="text" autocomplete="off" class="form-control" name="student_roll_no"
                                id="student_roll_no" onblur="for_name(this.value);" placeholder="student id" readonly />
                            <div class="result"></div>
                        </div>
                    </div>



                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Book Title</label>
                            <input type="hidden" class="form-control" name="copy_left" value="226">
                            <input type="text" class="form-control" name="book_title" value="Nectar Textbook"
                                placeholder="Enter Name" readonly />
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="book_id_number" id="book_id_number" value="02554"
                        placeholder="" readonly />

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Author Name</label>
                            <input type="text" name="author_name" placeholder="Add Student Roll No"
                                value="Main Textbook" class="form-control" readonly />
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Date Of Issue<font style="color:red"><b>*</b></font></label>
                            <input type="date" class="form-control" name="issue_date" value="2022-12-05"
                                placeholder="Enter today's date" required>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label>Due Date<font style="color:red"><b>*</b></font></label>
                            <input type="date" class="form-control" name="date_of_return"
                                placeholder="Enter publisher name" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group" style="display:none">
                            <label style="color:black;">Status</label>
                            <input type="text" class="form-control" name="status" value="Active" readonly />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <center><input type="submit" name="finish" value="Submit" class="btn btn-success" />
                            </center>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>
</section>

<script>
$(function() {
    $('.select2').select2()
})
</script>
@include('common.footer')