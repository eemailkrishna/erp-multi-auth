@include('common.header')
@include('common.navbar')

<script type="text/javascript">
function form_submit() {
    $.ajax({
        type: "POST",
        url: access_link + "downloads/student_data_groupwise.php",
        data: $("#my_form1").serialize(),
        success: function(data1) {
            $('#get_content').html(data1);
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Download Student Info
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('download')}}"><i class="fa fa-phone-square"></i>Download panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Select Student</li>
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
                <h3 class="box-title">Download Student Info</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form1">

                    <div class="col-md-12">
                        <span style="float:right;"><input type="checkbox" value="" id="cls"
                                onclick="for_check(this.id);" checked>
                            <th><b style="color:red;">Check All Class/Unchecked All</b></th>
                        </span>
                    </div>

                    <div class="col-md-12">
                        <th><b style="font-size:15px">Student Class : </b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="NURSERY"
                                    class="cls" checked /> NURSERY&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="LKG"
                                    class="cls" checked /> LKG&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="UKG"
                                    class="cls" checked /> UKG&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="1ST"
                                    class="cls" checked /> 1ST&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="2ND"
                                    class="cls" checked /> 2ND&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="3RD"
                                    class="cls" checked /> 3RD&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="4TH"
                                    class="cls" checked /> 4TH&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="5TH"
                                    class="cls" checked /> 5TH&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="6TH"
                                    class="cls" checked /> 6TH&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="7TH"
                                    class="cls" checked /> 7TH&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="8TH"
                                    class="cls" checked /> 8TH&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="9TH"
                                    class="cls" checked /> 9TH&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="10TH"
                                    class="cls" checked /> 10TH&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="11TH"
                                    class="cls" checked /> 11TH&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="std_class[]" id="" value="12TH"
                                    class="cls" checked /> 12TH&nbsp;&nbsp;</b></th>
                    </div>

                    <div class="col-md-12">
                        <th><b style="font-size:15px">Student Stream : </b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_stream[]" id=""
                                    value="SCIENCE" class="stream" /> SCIENCE&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_stream[]" id=""
                                    value="ARTS" class="stream" /> ARTS&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_stream[]" id=""
                                    value="Commerce " class="stream" /> Commerce &nbsp;&nbsp;</b></th>
                    </div>

                    <div class="col-md-12">
                        <th><b style="font-size:15px">Student Group : </b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_group[]" id=""
                                    value="Group-A" class="group" /> Group-A&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_group[]" id=""
                                    value="Group-B" class="group" /> Group-B&nbsp;&nbsp;</b></th>
                    </div>

                    <div class="col-md-12">
                        <span style="float:right;"><input type="checkbox" value="" id="sec"
                                onclick="for_check(this.id);" checked>
                            <th><b style="color:red;">Check All Section/Unchecked All</b></th>
                        </span>
                    </div>

                    <div class="col-md-12">
                        <th><b style="font-size:15px">Student Section : </b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_section[]" id=""
                                    value="A" class="sec" checked /> A&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_section[]" id=""
                                    value="B" class="sec" checked /> B&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_section[]" id=""
                                    value="C" class="sec" checked /> C&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_section[]" id=""
                                    value="D" class="sec" checked /> D&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_section[]" id=""
                                    value="E" class="sec" checked /> E&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_section[]" id=""
                                    value="F" class="sec" checked /> F&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_section[]" id=""
                                    value="G" class="sec" checked /> G&nbsp;&nbsp;</b></th>
                        <th><b style="font-size:15px"><input type="checkbox" name="student_class_section[]" id=""
                                    value="H" class="sec" checked /> H&nbsp;&nbsp;</b></th>
                    </div>

                    <div class="col-md-12">

                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Choose Category</b></th>
                                <select name="category" id="std_category" class="form-control">
                                    <option value="All">All</option>
                                    <option value="General">General</option>
                                    <option value="Obc">Obc</option>
                                    <option value="Sc">Sc</option>
                                    <option value="St">ST</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Choose Gender</b></th>
                                <select name="gender" id="std_gender" class="form-control">
                                    <option value="All">All</option>
                                    <option value="Male">Boys</option>
                                    <option value="Female">Girls</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Student Old/New</b></th>
                                <select class="form-control" name="student_old_new" id="student_old_new">
                                    <option value="All">All</option>
                                    <option value="Old">Old</option>
                                    <option value="New">New</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Medium</b></th>
                                <select class="form-control" name="student_Medium" id="student_Medium">
                                    <option value="All">All</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Bus</b></th>
                                <select class="form-control" name="student_Bus" id="student_Bus">
                                    <option value="All">All</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <th><b style="font-size:15px">Hostel</b></th>
                                <select class="form-control" name="Student_hostel" id="Student_hostel">
                                    <option value="All">All</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Bus Category</label>
                            <select class="form-control select2" name="bus_fee_category_name" id="bus_fee_category_name"
                                style="width:100%">
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
                        <div class="col-md-2">
                            <label>Admission Scheme</label>
                            <select class="form-control" name="admission_scheme" id="admission_scheme">
                                <option value="All">All</option>
                                <option value="RTE">RTE</option>
                                <option value="NON-RTE">NON-RTE</option>
                                <option value="Granted">Granted</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label>Student Address</label>
                            <select class="form-control select2" name="student_adress" id="student_adress"
                                style="width:100%">
                                <option value="All">All</option>
                                <option value=""></option>
                                <option value=" CHAPRA, RANAGHAT , NADIA"> CHAPRA, RANAGHAT , NADIA</option>
                                <option value="100, argentina, south america">100, argentina, south america</option>
                                <option value="109 SHIV PURAM LKO">109 SHIV PURAM LKO</option>
                                <option value="112-B Kachiyana, CSJM University Kanpur">112-B Kachiyana, CSJM University
                                    Kanpur</option>
                                <option value="2A/224 Azad Nagar, Kanpur Nagar">2A/224 Azad Nagar, Kanpur Nagar</option>
                                <option value="304, VAISHALI BUILDING">304, VAISHALI BUILDING</option>
                                <option value="314 Balajipuram, Makdikheda, Kanpur Nagar">314 Balajipuram, Makdikheda,
                                    Kanpur Nagar</option>
                                <option value="4/130,PERIYAKADU, NAVALUR POST, ATTUR TALUK">4/130,PERIYAKADU, NAVALUR
                                    POST, ATTUR TALUK</option>
                                <option value="8/10">8/10</option>
                                <option value="96 ,ROM ITALY">96 ,ROM ITALY</option>
                                <option value="975 naw bhar colony bhopal">975 naw bhar colony bhopal</option>
                                <option value="975 naw bhar colony station bhopal ">975 naw bhar colony station bhopal
                                </option>
                                <option value="Acb">Acb</option>
                                <option value="agra">agra</option>
                                <option value="Alert place colony hathras road tedi bagiya agra-6">Alert place colony
                                    hathras road tedi bagiya agra-6</option>
                                <option value="Anand Nagar">Anand Nagar</option>
                                <option value="Anand nagar Bhopal, Madhya Pradesh ">Anand nagar Bhopal, Madhya Pradesh
                                </option>
                                <option value="Araria ">Araria </option>
                                <option value="ashok nagar ">ashok nagar </option>
                                <option value="ashoka garden ">ashoka garden </option>
                                <option value="At.Post.Khapar Tel. Akkalkuwa Dist. Nandurbar ">At.Post.Khapar Tel.
                                    Akkalkuwa Dist. Nandurbar </option>
                                <option value="At.Post.Khapar Tel.Akkalkuwa Dist.Nandurbar 425419">At.Post.Khapar
                                    Tel.Akkalkuwa Dist.Nandurbar 425419</option>
                                <option value="atarra road baberu anda">atarra road baberu anda</option>
                                <option value="ATARSUMBA">ATARSUMBA</option>
                                <option value="atrauli">atrauli</option>
                                <option value="ayodhya by pas ">ayodhya by pas </option>
                                <option value="उमेद्नगर">उमेद्नगर</option>
                                <option value="कंकर बाग ">कंकर बाग </option>
                                <option value="Baghpat gate meerut">Baghpat gate meerut</option>
                                <option value="bairad">bairad</option>
                                <option value="bakhedi ">bakhedi </option>
                                <option value="Balajipuram, Kanpur Nagar">Balajipuram, Kanpur Nagar</option>
                                <option value="BEHIND OF police STATION HASTINAPUR BAMOREKALAN">BEHIND OF police STATION
                                    HASTINAPUR BAMOREKALAN</option>
                                <option value="Belwa Sammay Road Colonelganj Dist. Gonda">Belwa Sammay Road Colonelganj
                                    Dist. Gonda</option>
                                <option value="bhopal">bhopal</option>
                                <option value="bhuna">bhuna</option>
                                <option value="BIRSINGHPUR">BIRSINGHPUR</option>
                                <option value="bodla">bodla</option>
                                <option value="C-4, SECOND FLOOR, PRABHAT SQUARE BHOPAL">C-4, SECOND FLOOR, PRABHAT
                                    SQUARE BHOPAL</option>
                                <option value="C/O CENTRAL PUBLIC SCHOOL, NEAR VIRENDRA VATIKA JAIL ROAD, BHIND">C/O
                                    CENTRAL PUBLIC SCHOOL, NEAR VIRENDRA VATIKA JAIL ROAD, BHIND</option>
                                <option value="CHACHAIPAR MAKHMELPUR MAU">CHACHAIPAR MAKHMELPUR MAU</option>
                                <option value="Chaumukha">Chaumukha</option>
                                <option value="chirana">chirana</option>
                                <option value="CHIRIMIRI">CHIRIMIRI</option>
                                <option value="CHOWK MOHD SAEED KHAN">CHOWK MOHD SAEED KHAN</option>
                                <option value="dehra milak">dehra milak</option>
                                <option value="DHANBAD">DHANBAD</option>
                                <option value="dibiyapur">dibiyapur</option>
                                <option value="Ek dalia birampur, Lalgola, West Bengal ">Ek dalia birampur, Lalgola,
                                    West Bengal </option>
                                <option value="G">G</option>
                                <option value="G 1 T230">G 1 T230</option>
                                <option value="GARHPURA">GARHPURA</option>
                                <option
                                    value="GAT NO. 887-890; Flat no. A-205, mainland valencia, kesnand,  taluka- haveli, district-pune">
                                    GAT NO. 887-890; Flat no. A-205, mainland valencia, kesnand, taluka- haveli,
                                    district-pune</option>
                                <option value="GAYA">GAYA</option>
                                <option value="gfgggggggggggggggggggggg">gfgggggggggggggggggggggg</option>
                                <option value="Gjhch">Gjhch</option>
                                <option value="golden valleey campus">golden valleey campus</option>
                                <option value="GORA">GORA</option>
                                <option value="hayatpur ">hayatpur </option>
                                <option value="Hh">Hh</option>
                                <option value="HIRIYA COLONY">HIRIYA COLONY</option>
                                <option value="Hno- 42 Sec. 14 Gurugram">Hno- 42 Sec. 14 Gurugram</option>
                                <option value="indira nagar ">indira nagar </option>
                                <option value="indor">indor</option>
                                <option value="indore  ">indore </option>
                                <option value="Jagdev Nagar,PO. Anaith, Gali No 7">Jagdev Nagar,PO. Anaith, Gali No 7
                                </option>
                                <option value="jaipur">jaipur</option>
                                <option value="Jaithra">Jaithra</option>
                                <option value="JALARAM WARD">JALARAM WARD</option>
                                <option value="Jamoniya">Jamoniya</option>
                                <option value="janakpur">janakpur</option>
                                <option value="Jawahar Nagar">Jawahar Nagar</option>
                                <option value="jhangirabad">jhangirabad</option>
                                <option value="JITWAL KHURD">JITWAL KHURD</option>
                                <option value="Julwania">Julwania</option>
                                <option value="kailash nagar bhopal">kailash nagar bhopal</option>
                                <option value="Kalathikunnel Njayapilly">Kalathikunnel Njayapilly</option>
                                <option value="Kalavan gauri Bazar Deoira">Kalavan gauri Bazar Deoira</option>
                                <option value="KALINAGAR PART III">KALINAGAR PART III</option>
                                <option value="Kanharpuri">Kanharpuri</option>
                                <option value="Katra">Katra</option>
                                <option value="KILA ROAD">KILA ROAD</option>
                                <option value="Kota">Kota</option>
                                <option value="Krishna Kutumb, Rama Dental College Lakhanpur, Kanpur Nagar">Krishna
                                    Kutumb, Rama Dental College Lakhanpur, Kanpur Nagar</option>
                                <option value="Law Gate">Law Gate</option>
                                <option value="Laxmi Nagar">Laxmi Nagar</option>
                                <option value="lkjhgchjk">lkjhgchjk</option>
                                <option value="MAIN ROAD">MAIN ROAD</option>
                                <option value="mandideep">mandideep</option>
                                <option value="Mendhar ">Mendhar </option>
                                <option value="MOH. MUNNA LAL SHIV PURI ">MOH. MUNNA LAL SHIV PURI </option>
                                <option value="MOH. SITAKUND WORD NO. 2">MOH. SITAKUND WORD NO. 2</option>
                                <option value="Moriya rohat pali">Moriya rohat pali</option>
                                <option value="Nagara">Nagara</option>
                                <option value="Nagla ramkishun post Bihar dist Farrukhabad up">Nagla ramkishun post
                                    Bihar dist Farrukhabad up</option>
                                <option value="Naya Bazar pachna road lakhisarai">Naya Bazar pachna road lakhisarai
                                </option>
                                <option value="NEAR BUS-STAND">NEAR BUS-STAND</option>
                                <option value="Near Khadi Asharam Durga Nagar Dibiyapur ">Near Khadi Asharam Durga Nagar
                                    Dibiyapur </option>
                                <option value="NEAR MQAHUAR COLONY">NEAR MQAHUAR COLONY</option>
                                <option value="New city">New city</option>
                                <option value="NEWADA KALA">NEWADA KALA</option>
                                <option value="noor mehal bhopal ">noor mehal bhopal </option>
                                <option value="Oil Seedsfarm, Kalyanpur, Kanpur Nagar">Oil Seedsfarm, Kalyanpur, Kanpur
                                    Nagar</option>
                                <option value="padari bazar ">padari bazar </option>
                                <option value="Padriya khlilabad">Padriya khlilabad</option>
                                <option value="Padvi Galli Khapar">Padvi Galli Khapar</option>
                                <option value="pahadi">pahadi</option>
                                <option value="Park Avenue">Park Avenue</option>
                                <option value="phaphund">phaphund</option>
                                <option value="Plot no 45 prabhat  resisency  meghpar  kumbaradi  anjar kutch">Plot no
                                    45 prabhat resisency meghpar kumbaradi anjar kutch</option>
                                <option value="Police line byron bazar raipur">Police line byron bazar raipur</option>
                                <option value="ptu">ptu</option>
                                <option value="puspa nagar railway station bhopal ">puspa nagar railway station bhopal
                                </option>
                                <option value="rbl">rbl</option>
                                <option value="Revelganj">Revelganj</option>
                                <option value="Rom">Rom</option>
                                <option value="Rom italy">Rom italy</option>
                                <option value="S/634 ">S/634 </option>
                                <option value="S/O SHYAM SUNDER SHARMA 111 HATHI, DARWAZA GOVERDHAN BRAHMNAN MATHURA">
                                    S/O SHYAM SUNDER SHARMA 111 HATHI, DARWAZA GOVERDHAN BRAHMNAN MATHURA</option>
                                <option value="Sadar Raebareli">Sadar Raebareli</option>
                                <option value="sadgghdshdjfuyhrefj">sadgghdshdjfuyhrefj</option>
                                <option value="Sale nagar">Sale nagar</option>
                                <option value="Sandahedi">Sandahedi</option>
                                <option value="Sangam Vihar Chandausi">Sangam Vihar Chandausi</option>
                                <option value="Sarita Vihar">Sarita Vihar</option>
                                <option value="Seemant nagar Gursahaiganj">Seemant nagar Gursahaiganj</option>
                                <option value="Selamba">Selamba</option>
                                <option value="SHASTRI COLONY">SHASTRI COLONY</option>
                                <option value="Shiwasthan thawe">Shiwasthan thawe</option>
                                <option value="Shubhash Nagar">Shubhash Nagar</option>
                                <option value="SHYAM NAGAR ">SHYAM NAGAR </option>
                                <option value="shyam singh wali kothi ">shyam singh wali kothi </option>
                                <option value="Siddhart Lake City. Anand Nagar">Siddhart Lake City. Anand Nagar</option>
                                <option value="SITA ROAD MANIHAR CHOWK">SITA ROAD MANIHAR CHOWK</option>
                                <option value="Sondhad">Sondhad</option>
                                <option value="subhash nagar bhopal">subhash nagar bhopal</option>
                                <option value="Sunjwan">Sunjwan</option>
                                <option value="TEJPURA">TEJPURA</option>
                                <option value="Trade industry ">Trade industry </option>
                                <option value="trilok puri colony ashok nagar">trilok puri colony ashok nagar</option>
                                <option value="Vijaynagar">Vijaynagar</option>
                                <option value="Vil post patloni baldeo">Vil post patloni baldeo</option>
                                <option value="vill post patloni">vill post patloni</option>
                                <option value="VILL- HARIPUR">VILL- HARIPUR</option>
                                <option value="VILL- PAKHANPUR, POST- AHIRAULA, DISTT- AZAMGARH">VILL- PAKHANPUR, POST-
                                    AHIRAULA, DISTT- AZAMGARH</option>
                                <option value="Vill-Champa">Vill-Champa</option>
                                <option value="Vill-Khanamukh, P.O- Nonkey Patgaon, Dist-sonitpur(Assam)Pin-784101">
                                    Vill-Khanamukh, P.O- Nonkey Patgaon, Dist-sonitpur(Assam)Pin-784101</option>
                                <option value="Vill-Post Harrajpura, Masuda,Ajmer(Raj)">Vill-Post Harrajpura,
                                    Masuda,Ajmer(Raj)</option>
                                <option
                                    value="Vill. & P. O. Bazarghat, P.S. - Ratabari, District- Karimganj, State - Assam, Pin-788733">
                                    Vill. & P. O. Bazarghat, P.S. - Ratabari, District- Karimganj, State - Assam,
                                    Pin-788733</option>
                                <option value="VILL. KUMBRA">VILL. KUMBRA</option>
                                <option value="VILLAGE BARTAL,NAWABGANJ,FARRUKHABAD">VILLAGE
                                    BARTAL,NAWABGANJ,FARRUKHABAD</option>
                                <option value="VILLAGE OF ITAURA ">VILLAGE OF ITAURA </option>
                                <option value="Village-Kanvi PO-Pilkhuwa District-Hapur">Village-Kanvi PO-Pilkhuwa
                                    District-Hapur</option>
                                <option value="WARD NO 12">WARD NO 12</option>
                                <option value="ward no 6">ward no 6</option>
                                <option value="WARD NO. 8, DHARAMRAYCHAK, PURANI BAZAR, LAKHISARAI">WARD NO. 8,
                                    DHARAMRAYCHAK, PURANI BAZAR, LAKHISARAI</option>
                                <option value="yini college">yini college</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label>Village/City</label>
                            <select class="form-control" name="student_city" id="student_city" style="width:100%">
                                <option value="All">All</option>
                                <option value=""></option>
                                <option value="Adhartal">Adhartal</option>
                                <option value="Agra">Agra</option>
                                <option value="Ara">Ara</option>
                                <option value="arga">arga</option>
                                <option value="ashok nagar">ashok nagar</option>
                                <option value="atrauli">atrauli</option>
                                <option value="ATTUR TK,SALEM DT">ATTUR TK,SALEM DT</option>
                                <option value="Aun">Aun</option>
                                <option value="AYODHYA ">AYODHYA </option>
                                <option value="कंकर बाग">कंकर बाग</option>
                                <option value="जोधपुर">जोधपुर</option>
                                <option value="baberu">baberu</option>
                                <option value="bairad">bairad</option>
                                <option value="BALAGHAT">BALAGHAT</option>
                                <option value="BAMORE KALAN">BAMORE KALAN</option>
                                <option value="BANK MORE">BANK MORE</option>
                                <option value="Banka">Banka</option>
                                <option value="Barun">Barun</option>
                                <option value="Batch road">Batch road</option>
                                <option value="BEDIA">BEDIA</option>
                                <option value="bg">bg</option>
                                <option value="BHIND">BHIND</option>
                                <option value="bhopal">bhopal</option>
                                <option value="bhuna">bhuna</option>
                                <option value="bodla">bodla</option>
                                <option value="CHANDAUSI">CHANDAUSI</option>
                                <option value="Chapra">Chapra</option>
                                <option value="Chaumukha">Chaumukha</option>
                                <option value="chirana">chirana</option>
                                <option value="CITY">CITY</option>
                                <option value="dehra">dehra</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Dhama ">Dhama </option>
                                <option value="Dharamraichak">Dharamraichak</option>
                                <option value="Dhodhandih">Dhodhandih</option>
                                <option value="Dibiyapur">Dibiyapur</option>
                                <option value="Ekdalia Birampur ">Ekdalia Birampur </option>
                                <option value="frrregrg">frrregrg</option>
                                <option value="Gadi srirampur">Gadi srirampur</option>
                                <option value="GARHPURA">GARHPURA</option>
                                <option value="GAYA">GAYA</option>
                                <option value="Girhola">Girhola</option>
                                <option value="Gonda">Gonda</option>
                                <option value="Gopalganj ">Gopalganj </option>
                                <option value="GORA">GORA</option>
                                <option value="Gurgaon">Gurgaon</option>
                                <option value="Gursahaiganj">Gursahaiganj</option>
                                <option value="Gyuuuu">Gyuuuu</option>
                                <option value="HALDIBADI">HALDIBADI</option>
                                <option value="HARIPUR">HARIPUR</option>
                                <option value="Harrajpura">Harrajpura</option>
                                <option value="Hh">Hh</option>
                                <option value="HINDOLI">HINDOLI</option>
                                <option value="Hodal">Hodal</option>
                                <option value="indor">indor</option>
                                <option value="ITAURA">ITAURA</option>
                                <option value="jaipur">jaipur</option>
                                <option value="Jaithra">Jaithra</option>
                                <option value="Jammu">Jammu</option>
                                <option value="Jamoniya">Jamoniya</option>
                                <option value="janakpur">janakpur</option>
                                <option value="Jhansi">Jhansi</option>
                                <option value="Julwania">Julwania</option>
                                <option value="Kailani">Kailani</option>
                                <option value="Kalavan">Kalavan</option>
                                <option value="KALINAGAR PART III">KALINAGAR PART III</option>
                                <option value="Kanpur">Kanpur</option>
                                <option value="Kanpur Nagar">Kanpur Nagar</option>
                                <option value="Kanvi">Kanvi</option>
                                <option value="karsarwa bujurg">karsarwa bujurg</option>
                                <option value="khanamukh">khanamukh</option>
                                <option value="Khapar ">Khapar </option>
                                <option value="Khlilabad">Khlilabad</option>
                                <option value="Kota">Kota</option>
                                <option value="Kutch">Kutch</option>
                                <option value="Kuttampuzha">Kuttampuzha</option>
                                <option value="Lakhisarai">Lakhisarai</option>
                                <option value="Lamka">Lamka</option>
                                <option value="longl">longl</option>
                                <option value="Mainpuri">Mainpuri</option>
                                <option value="MALERKOTLA">MALERKOTLA</option>
                                <option value="mandideep">mandideep</option>
                                <option value="MATHURA">MATHURA</option>
                                <option value="Mathyra">Mathyra</option>
                                <option value="MAU">MAU</option>
                                <option value="MAWANA">MAWANA</option>
                                <option value="Meghpar">Meghpar</option>
                                <option value="MISHRIKH">MISHRIKH</option>
                                <option value="MOHALLA WALI ABAD SIDHRA JAMMU">MOHALLA WALI ABAD SIDHRA JAMMU</option>
                                <option value="Moriya">Moriya</option>
                                <option value="NAGAR">NAGAR</option>
                                <option value="NASRULLAGANJ">NASRULLAGANJ</option>
                                <option value="NAWABGANJ ">NAWABGANJ </option>
                                <option value="okmujhb">okmujhb</option>
                                <option value="pahadi">pahadi</option>
                                <option value="PAIKAULI BAZAR">PAIKAULI BAZAR</option>
                                <option value="PAKHANPUR">PAKHANPUR</option>
                                <option value="PANDHURNA">PANDHURNA</option>
                                <option value="pardesipura">pardesipura</option>
                                <option value="patloni">patloni</option>
                                <option value="Phagwara">Phagwara</option>
                                <option value="PHAPHUND">PHAPHUND</option>
                                <option value="Pil">Pil</option>
                                <option value="PIMPRI KHODRI">PIMPRI KHODRI</option>
                                <option value="pune">pune</option>
                                <option value="PURANI BASTI">PURANI BASTI</option>
                                <option value="Raebareli">Raebareli</option>
                                <option value="raipur">raipur</option>
                                <option value="Rajnandgaon">Rajnandgaon</option>
                                <option value="Ramainagar">Ramainagar</option>
                                <option value="RANAGHAT">RANAGHAT</option>
                                <option value="rbl">rbl</option>
                                <option value="Rom">Rom</option>
                                <option value="S.A.S. NAGAR">S.A.S. NAGAR</option>
                                <option value="Sale nagar">Sale nagar</option>
                                <option value="Sandahedi">Sandahedi</option>
                                <option value="sarni ">sarni </option>
                                <option value="SATYA PREMI NAGAR">SATYA PREMI NAGAR</option>
                                <option value="sector 91 ">sector 91 </option>
                                <option value="Selamba">Selamba</option>
                                <option value="Shahabazpur">Shahabazpur</option>
                                <option value="Shivpuri">Shivpuri</option>
                                <option value="Surajputa">Surajputa</option>
                                <option value="SURENDRA PLACE">SURENDRA PLACE</option>
                                <option value="Tajpur Saraiya ward no 14">Tajpur Saraiya ward no 14</option>
                                <option value="TALKHED">TALKHED</option>
                                <option value="TEJPURA">TEJPURA</option>
                                <option value="tilcara">tilcara</option>
                                <option value="Vg">Vg</option>
                                <option value="WARD NO 15">WARD NO 15</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label>Block</label>
                            <select class="form-control" name="student_block" id="student_block" style="width:100%">
                                <option value="All">All</option>
                                <option value=""></option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="1500">1500</option>
                                <option value="2">2</option>
                                <option value="24 ">24 </option>
                                <option value="A">A</option>
                                <option value="agra">agra</option>
                                <option value="AHIRAULA">AHIRAULA</option>
                                <option value="Akkalkuwa">Akkalkuwa</option>
                                <option value="ALGAPUR">ALGAPUR</option>
                                <option value="anjaran">anjaran</option>
                                <option value="Ara">Ara</option>
                                <option value="ashok nagar">ashok nagar</option>
                                <option value="ashoka gurden">ashoka gurden</option>
                                <option value="atrauli">atrauli</option>
                                <option value="टोंक खुर्द">टोंक खुर्द</option>
                                <option value="b">b</option>
                                <option value="baberu">baberu</option>
                                <option value="Badamalhera">Badamalhera</option>
                                <option value="Baldeo">Baldeo</option>
                                <option value="Balipara">Balipara</option>
                                <option value="Banka">Banka</option>
                                <option value="bankta">bankta</option>
                                <option value="BHAGYA NAGAR">BHAGYA NAGAR</option>
                                <option value="BHIND">BHIND</option>
                                <option value="BHIYAV">BHIYAV</option>
                                <option value="bhopal">bhopal</option>
                                <option value="bhopal main railway station bhopal ">bhopal main railway station bhopal
                                </option>
                                <option value="BIHAR SHARIF">BIHAR SHARIF</option>
                                <option value="Bijaipur">Bijaipur</option>
                                <option value="boda">boda</option>
                                <option value="bodla">bodla</option>
                                <option value="c">c</option>
                                <option value="c/4 ">c/4 </option>
                                <option value="CHANDERI">CHANDERI</option>
                                <option value="CHENGA">CHENGA</option>
                                <option value="chhibramau">chhibramau</option>
                                <option value="Colonelganj ">Colonelganj </option>
                                <option value="D">D</option>
                                <option value="Dewa">Dewa</option>
                                <option value="Dhamda">Dhamda</option>
                                <option value="DHANBAD">DHANBAD</option>
                                <option value="dharsiwa">dharsiwa</option>
                                <option value="diobby">diobby</option>
                                <option value="Fgjjjhh">Fgjjjhh</option>
                                <option value="Gauri Bazar">Gauri Bazar</option>
                                <option value="GAYA">GAYA</option>
                                <option value="Gbh">Gbh</option>
                                <option value="ghodadongari">ghodadongari</option>
                                <option value="Giridih">Giridih</option>
                                <option value="Hapur">Hapur</option>
                                <option value="hasanpur">hasanpur</option>
                                <option value="Hb">Hb</option>
                                <option value="hb31">hb31</option>
                                <option value="Hodal">Hodal</option>
                                <option value="HOME">HOME</option>
                                <option value="HOSANGABAD ROAD">HOSANGABAD ROAD</option>
                                <option value="indira nagar">indira nagar</option>
                                <option value="indor">indor</option>
                                <option value="Jabalpur">Jabalpur</option>
                                <option value="Jagir">Jagir</option>
                                <option value="jaipur">jaipur</option>
                                <option value="Jaithra">Jaithra</option>
                                <option value="JALGAON JAMOD">JALGAON JAMOD</option>
                                <option value="KADOORA">KADOORA</option>
                                <option value="KALYANPUR">KALYANPUR</option>
                                <option value="KHADGAWAN">KHADGAWAN</option>
                                <option value="Khaniyandhana">Khaniyandhana</option>
                                <option value="Khlilabad">Khlilabad</option>
                                <option value="KHRAR 3">KHRAR 3</option>
                                <option value="Kla">Kla</option>
                                <option value="kolar road">kolar road</option>
                                <option value="kolaras ">kolaras </option>
                                <option value="Kothamangalam">Kothamangalam</option>
                                <option value="Lakhanpur">Lakhanpur</option>
                                <option value="Lakhisarai">Lakhisarai</option>
                                <option value="Lalganj">Lalganj</option>
                                <option value="Lalgola ">Lalgola </option>
                                <option value="Masuda">Masuda</option>
                                <option value="Mendhar ">Mendhar </option>
                                <option value="MISHRIKH">MISHRIKH</option>
                                <option value="MOTALA">MOTALA</option>
                                <option value="n">n</option>
                                <option value="NAWABGANJ ">NAWABGANJ </option>
                                <option value="nawlargh">nawlargh</option>
                                <option value="North">North</option>
                                <option value="OBRA">OBRA</option>
                                <option value="PANDHURNA">PANDHURNA</option>
                                <option value="patna">patna</option>
                                <option value="pohari">pohari</option>
                                <option value="pune">pune</option>
                                <option value="raebareli">raebareli</option>
                                <option value="Rajgarh">Rajgarh</option>
                                <option value="Rajpur">Rajpur</option>
                                <option value="RAMPUR">RAMPUR</option>
                                <option value="RANAGHAT II">RANAGHAT II</option>
                                <option value="Raniganj">Raniganj</option>
                                <option value="rbl">rbl</option>
                                <option value="Rohat">Rohat</option>
                                <option value="Sagbara">Sagbara</option>
                                <option value="SANAWAD">SANAWAD</option>
                                <option value="shihawal">shihawal</option>
                                <option value="Shivpuri">Shivpuri</option>
                                <option value="Street">Street</option>
                                <option value="Surajpura">Surajpura</option>
                                <option value="Tetaria">Tetaria</option>
                                <option value="tryye">tryye</option>
                                <option value="waraseoni">waraseoni</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label>District</label>
                            <select class="form-control" name="student_district" id="student_district"
                                style="width:100%">
                                <option value="All">All</option>
                                <option value=""></option>
                                <option value="agra">agra</option>
                                <option value="Ajmer">Ajmer</option>
                                <option value="aligarh">aligarh</option>
                                <option value="Allahabad ">Allahabad </option>
                                <option value="AMBEDKARNAGAR">AMBEDKARNAGAR</option>
                                <option value="amroha">amroha</option>
                                <option value="Ara">Ara</option>
                                <option value="Araria">Araria</option>
                                <option value="ashok nagar">ashok nagar</option>
                                <option value="ASHOKNAGAR">ASHOKNAGAR</option>
                                <option value="AURAIYA">AURAIYA</option>
                                <option value="AURANGABAD">AURANGABAD</option>
                                <option value="AZAMGARH">AZAMGARH</option>
                                <option value="देवास">देवास</option>
                                <option value="balaghat">balaghat</option>
                                <option value="banda">banda</option>
                                <option value="Banka">Banka</option>
                                <option value="BARABANKI">BARABANKI</option>
                                <option value="Barabsnki">Barabsnki</option>
                                <option value="BARPETA">BARPETA</option>
                                <option value="Barwani">Barwani</option>
                                <option value="betul">betul</option>
                                <option value="BHIND">BHIND</option>
                                <option value="bhopal">bhopal</option>
                                <option value="boda">boda</option>
                                <option value="BULDANA">BULDANA</option>
                                <option value="BULDHANA">BULDHANA</option>
                                <option value="Ch dadri">Ch dadri</option>
                                <option value="CHHINDWARA">CHHINDWARA</option>
                                <option value="Churachandpur">Churachandpur</option>
                                <option value="Deoira">Deoira</option>
                                <option value="deoria">deoria</option>
                                <option value="DHANBAD">DHANBAD</option>
                                <option value="dhanusha">dhanusha</option>
                                <option value="Durg">Durg</option>
                                <option value="Ernakulam">Ernakulam</option>
                                <option value="EST champaran">EST champaran</option>
                                <option value="Etah">Etah</option>
                                <option value="FARIDKOT">FARIDKOT</option>
                                <option value="FARRUKHABAD">FARRUKHABAD</option>
                                <option value="fatehabad">fatehabad</option>
                                <option value="frrregrg">frrregrg</option>
                                <option value="GAYA">GAYA</option>
                                <option value="Gghui">Gghui</option>
                                <option value="Giridih">Giridih</option>
                                <option value="Gonda ">Gonda </option>
                                <option value="Gopalganj">Gopalganj</option>
                                <option value="Goplaganj ">Goplaganj </option>
                                <option value="Gurugram">Gurugram</option>
                                <option value="H hi">H hi</option>
                                <option value="HAILAKANDI">HAILAKANDI</option>
                                <option value="Hapur">Hapur</option>
                                <option value="Hh">Hh</option>
                                <option value="Hodal">Hodal</option>
                                <option value="ind">ind</option>
                                <option value="indore ">indore </option>
                                <option value="Jabalpur ">Jabalpur </option>
                                <option value="jaipur">jaipur</option>
                                <option value="JALAUN">JALAUN</option>
                                <option value="Jammu">Jammu</option>
                                <option value="jhunjhunu">jhunjhunu</option>
                                <option value="kabidham">kabidham</option>
                                <option value="kannuj">kannuj</option>
                                <option value="Kanpur Nagar">Kanpur Nagar</option>
                                <option value="KHARGONE">KHARGONE</option>
                                <option value="KOREYA">KOREYA</option>
                                <option value="Kutch">Kutch</option>
                                <option value="Lakhisarai">Lakhisarai</option>
                                <option value="Longle">Longle</option>
                                <option value="LUCKNOW">LUCKNOW</option>
                                <option value="Mahasamund">Mahasamund</option>
                                <option value="Mainpuri">Mainpuri</option>
                                <option value="Mathura">Mathura</option>
                                <option value="Meerut">Meerut</option>
                                <option value="Murshidabad ">Murshidabad </option>
                                <option value="NADIA">NADIA</option>
                                <option value="NALANDA ">NALANDA </option>
                                <option value="Nanadurbar">Nanadurbar</option>
                                <option value="Nandurbar">Nandurbar</option>
                                <option value="Narmada">Narmada</option>
                                <option value="Pali">Pali</option>
                                <option value="patna">patna</option>
                                <option value="Phagwara">Phagwara</option>
                                <option value="Poonch">Poonch</option>
                                <option value="pune">pune</option>
                                <option value="Raipur">Raipur</option>
                                <option value="raisen">raisen</option>
                                <option value="Rajgarh">Rajgarh</option>
                                <option value="Rajnandgaon">Rajnandgaon</option>
                                <option value="RAMPUR">RAMPUR</option>
                                <option value="rbl">rbl</option>
                                <option value="Roh">Roh</option>
                                <option value="Rohtas">Rohtas</option>
                                <option value="rom">rom</option>
                                <option value="s ">s </option>
                                <option value="S.A.S NAGAR">S.A.S NAGAR</option>
                                <option value="SAGAR">SAGAR</option>
                                <option value="SAMBHAL">SAMBHAL</option>
                                <option value="SANGRUR">SANGRUR</option>
                                <option value="Santkabeer nagar">Santkabeer nagar</option>
                                <option value="SATNA">SATNA</option>
                                <option value="SEHORE">SEHORE</option>
                                <option value="Shivpuri">Shivpuri</option>
                                <option value="sidhi">sidhi</option>
                                <option value="Sitapur">Sitapur</option>
                                <option value="Sonitpur">Sonitpur</option>
                                <option value="tilcara">tilcara</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label>Student Conveyance</label>
                            <select class="form-control" name="student_conveyance" id="student_conveyance">
                                <option value="All">All</option>
                                <option value="With Parent">With Parent</option>
                                <option value="By Bus">By Bus</option>
                                <option value="With Guardian">With Guardian</option>
                                <option value="On Foot">On Foot</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Select Category</label>
                                <select name="student_fee_category" id="student_fee_category" class="form-control">
                                    <option value="All">All</option>
                                    <option value="category1">Non- RTE</option>
                                    <option value="category2">New </option>
                                    <option value="category3">Oid </option>
                                    <option value="category4">Science</option>
                                    <option value="category5">RTE</option>
                                    <option value="category6">sibling</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <label>Photo <small>( All / Yes / No )</small></label>
                            <select class="form-control" name="student_photo1" id="student_photo1">
                                <option value="All">All</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Admission Type</label>
                                <select class="form-control" name="student_admission_type1"
                                    id="student_admission_type1">
                                    <option value="All">All</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Private">Private</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <label>RFID Card</label>
                            <select class="form-control" name="student_rf_id_number1" id="student_rf_id_number1">
                                <option value="All">All</option>
                                <option value="Signed">Signed</option>
                                <option value="Unsigned">Unsigned</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-12">

                        <div class="col-md-2">
                            <label>Student Caste</label>
                            <select class="form-control select2" name="student_caste" id="student_caste"
                                style="width:100%">
                                <option value="All">All</option>
                                <option value=""></option>
                                <option value="6TH">6TH</option>
                                <option value="Ahir">Ahir</option>
                                <option value="BADHAI">BADHAI</option>
                                <option value="Bania">Bania</option>
                                <option value="Bhilala">Bhilala</option>
                                <option value="Bhumihar ">Bhumihar </option>
                                <option value="BRAHMIN">BRAHMIN</option>
                                <option value="GAWALI">GAWALI</option>
                                <option value="GEN">GEN</option>
                                <option value="Hindu">Hindu</option>
                                <option value="KHAN">KHAN</option>
                                <option value="KUMHAR">KUMHAR</option>
                                <option value="KURMI">KURMI</option>
                                <option value="Malaha">Malaha</option>
                                <option value="OBC">OBC</option>
                                <option value="pandit">pandit</option>
                                <option value="PAsi">PAsi</option>
                                <option value="Patidar">Patidar</option>
                                <option value="PRAJAPATI">PRAJAPATI</option>
                                <option value="Rajput">Rajput</option>
                                <option value="S.T">S.T</option>
                                <option value="sah">sah</option>
                                <option value="Sc">Sc</option>
                                <option value="Shahabazpur">Shahabazpur</option>
                                <option value="Sharma">Sharma</option>
                                <option value="sikh">sikh</option>
                                <option value="Teli">Teli</option>
                                <option value="Thakur ">Thakur </option>
                                <option value="Yadav">Yadav</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Student Status</label>
                                <select class="form-control" name="Student_Status" id="Student_Status">
                                    <option value="All">All</option>
                                    <option value="Active">Active</option>
                                    <option value="Deleted">Deactive</option>
                                    <option value="Tc_issued">Tc Issued</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label>Order By</label>
                            <select class="form-control" name="order_by" id="order_by">
                                <option value="">Select</option>
                                <option value="student_name">Student Name</option>
                                <option value="class_code_no">Class Name</option>
                                <option value="student_class_section">Only Section</option>
                                <option value="student_father_name">Father Name</option>
                                <option value="school_roll_no">School Roll No</option>
                                <option value="student_admission_number">Admission No</option>
                                <option value="student_scholar_number">Scholar No</option>
                                <option value="student_registration_number">Registration No</option>
                                <option value="student_enrollment_number">Enrollment No</option>
                                <option value="student_category">Student Category</option>
                            </select>
                        </div>

                    </div>
                    </br></br></br>
                    <hr>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="checkbox" value="" id="check_all" onclick="for_check(this.id);" checked>
                            <th><b style="color:red;">Check All Field/Unchecked All</b></th>
                        </div>
                    </div>


                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_scholar_number|?|student scholar number" class="check_all">
                            <th><b>Student Scholar Number</b></th>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_name|?|student name"
                                class="check_all">
                            <th><b>Student Name</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_father_name|?|student father name" class="check_all">
                            <th><b>Father Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_mother_name|?|student mother name" class="check_all">
                            <th><b>Mother Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_class|?|student class"
                                class="check_all">
                            <th><b>Student Class</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_class_section|?|Student Class Section" class="check_all">
                            <th><b>Student Class Section</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_class_stream|?|Student Class Stream" class="check_all">
                            <th><b>Student Class Stream</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_class_group|?|Student Class Group" class="check_all">
                            <th><b>Student Class Group</b></th>
                        </div>
                    </div>



                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_roll_no|?|student roll no" class="check_all">
                            <th><b>Student Roll No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="school_roll_no|?|school roll no"
                                class="check_all">
                            <th><b>School Roll No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_date_of_birth|?|student date of birth" class="check_all">
                            <th><b>Student Date Of Birth</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_age|?|student age"
                                class="check_all">
                            <th><b>Student Age</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_gender|?|student gender"
                                class="check_all">
                            <th><b>Student Gender</b></th>
                        </div>
                    </div>


                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_caste|?|student caste"
                                class="check_all">
                            <th><b>Student Caste</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_category|?|student category" class="check_all">
                            <th><b>Student Category</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_city|?|student city"
                                class="check_all">
                            <th><b>Student City</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_bus_fee_category|?|student bus fee catgeory" class="check_all">
                            <th><b>Student Bus Stop</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_sssmid_number|?|student sssmid number" class="check_all">
                            <th><b>Student Ssmid Number</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_adhar_number|?|student adhar number" class="check_all">
                            <th><b>Student Adhar Number</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_enrollment_number|?|student enrollment number" class="check_all">
                            <th><b>Student Enrollment Number</b></th>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_photo|?|Student Photo"
                                class="check_all">
                            <th><b>Student Photo</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_handicapped|?|student handicapped" class="check_all">
                            <th><b>Student Handicapped</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_rf_id_number|?|student rf id number" class="check_all">
                            <th><b>Student Rfid Number</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_father_adhar_card_number|?|student father adhar card number"
                                class="check_all">
                            <th><b>Student Father Adhar card Number</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_child_id|?|student child id" class="check_all">
                            <th><b>Student Child Id</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_family_id|?|student family id" class="check_all">
                            <th><b>Student Family Id</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_walk_through|?|Student Walk Through" class="check_all">
                            <th><b>Student Conveyance</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="bpl_card_no|?|bpl card no"
                                class="check_all">
                            <th><b>Bpl Card No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="income_certificate_no|?|income certificate no" class="check_all">
                            <th><b>Income Certificate No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="caste_certificate_no|?|caste certificate no" class="check_all">
                            <th><b>Caste Certificate No</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_father_bank_name|?|student father bank name" class="check_all">
                            <th><b>Student Father Bank Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_father_bank_account_number|?|student father bank account number"
                                class="check_all">
                            <th><b>Student Father Bank Account Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_father_bank_ifsc_code|?|student father bank ifsc code" class="check_all">
                            <th><b>Student Father Bank Ifsc Code</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_bank_name|?|student bank name" class="check_all">
                            <th><b>Student Bank Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_account_number|?|student account number" class="check_all">
                            <th><b>Student Account Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_bank_ifsc_code|?|student bank ifsc code" class="check_all">
                            <th><b>Student Bank Ifsc Code</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_admission_type|?|student admission type" class="check_all">
                            <th><b>Student Admission Type</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_medium|?|student medium"
                                class="check_all">
                            <th><b>Student Medium</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="house_name|?|house name"
                                class="check_all">
                            <th><b>Student House Name</b></th>
                        </div>
                    </div>


                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_date_of_admission|?|student date of admission" class="check_all">
                            <th><b>Student Date Of Admission</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_previous_class|?|student previous class" class="check_all">
                            <th><b>Student Previous Class</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_admission_class|?|student admission class" class="check_all">
                            <th><b>Student admission Class</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_previous_school_name|?|student previous school name" class="check_all">
                            <th><b>Student Previous School Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_admission_scheme|?|student admission scheme" class="check_all">
                            <th><b>Student Admission Scheme</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_admission_number|?|student admission number" class="check_all">
                            <th><b>Student Admission Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_father_contact_number|?|student father contact number" class="check_all">
                            <th><b>Student Father Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_mother_contact_number|?|student Mother Contact Number" class="check_all">
                            <th><b>Student Mother Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_father_occupation|?|student father occupation" class="check_all">
                            <th><b>Student Father Occupation</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_guardian_name|?|Student Guardian Name" class="check_all">
                            <th><b>Student Guardian Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_guardian_contact_number|?|student guardian contact number"
                                class="check_all">
                            <th><b>Student Guardian Contact Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_contact_number|?|student contact number" class="check_all">
                            <th><b>Student Contact Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_email_id|?|student email id" class="check_all">
                            <th><b>Student Email Id</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_adress|?|student adress"
                                class="check_all">
                            <th><b>Student Address</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_address_permanent|?|student permanent address" class="check_all">
                            <th><b>student permanent Address</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_district|?|student district" class="check_all">
                            <th><b>Student District</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_pincode|?|student pincode" class="check_all">
                            <th><b>Student Pincode</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="student_bus_no|?|student bus no"
                                class="check_all">
                            <th><b> Student Bus No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_hostel_name|?|student hostel name" class="check_all">
                            <th><b>Student Hostel Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_hostel_room_no|?|student hostel room no" class="check_all">
                            <th><b>Student Hostel Room No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_blood_group|?|blood group" class="check_all">
                            <th><b>Blood Group</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="student_mother_occupation|?|mother occupation" class="check_all">
                            <th><b>Mother Occupation</b></th>
                        </div>
                    </div>

            </div>
            <div class="col-md-12">
                <center><input type="button" name="submit" value="Submit" class="btn btn-primary"
                        onclick="return for_validity();" /></center>
            </div>
            </form>
        </div>
        <!---------------------------------------------End Registration form--------------------------------------------------------->
        <!-- /.box-body -->
    </div>
    </div>

</section>

@include('common.footer')


<script>
function for_check(id) {
    if ($('#' + id).prop("checked") == true) {
        $("." + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $("." + id).each(function() {
            $(this).prop('checked', false);
        });
    }
}

function for_validity() {
    var num2 = 0;
    $(".check_all").each(function() {
        if ($(this).prop('checked') == true) {
            num2 += Number(parseInt(num2) + 1);
        }
    });
    var num3 = 0;
    $(".cls").each(function() {
        if ($(this).prop('checked') == true) {
            num3 += Number(parseInt(num3) + 1);
        }
    });
    if (num2 < 1 || num3 < 1) {
        alert_new('Please Select Atleast One Class and One Field !!!', 'red');
        return false;
    } else {
        form_submit();
        return true;
    }
}
</script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

})
</script>