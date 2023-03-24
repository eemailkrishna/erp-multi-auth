@include('common.header')
@include('common.navbar')

<script>
function form_submit() {

    $.ajax({
        type: "POST",
        url: access_link + "downloads/employee_data_downloads.php",
        data: $("#my_form").serialize(),
        success: function(data1) {

            $('#get_content').html(data1);

        }
    });
}
</script>
</script>
<section class="content-header">
    <h1>
        Download Employee Info
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/download')}}"><i class="fa fa-phone-square"></i>Download panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Downloads</li>
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
                <h3 class="box-title">Employee Download</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" id="my_form" enctype="multipart/form-data">

                    <div class="col-md-12">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <th><b style="font-size:15px">Choose Staff:-</b></th><select name="staff"
                                    class="form-control" required>
                                    <option value="All">All</option>
                                    <option value="Teaching">Teaching Staff</option>
                                    <option value="Non Teaching">Non Teaching Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label>Employee Name</label>
                            <select name="employee_id" class="form-control select2" id="employee_id" style="width:100%;"
                                required>
                                <option value="All">All</option>
                                <option value="15">kailash soni [15] - [ishwar deen soni] - [kailusoni99@gmail.com] -
                                    [9617777047]</option>
                                <option value="19">kailash soni [19] - [ishwar deen soni] - [kailusoni99@gmail.com] -
                                    [9617777047]</option>
                                <option value="20">jay kishan [20] - [tomar ji] - [jay@gmail.com] - [9864645645]
                                </option>
                                <option value="29">Abhul Rjaak [29] - [Khursid Rjaak] - [rajaak987@gmail.com] -
                                    [9685745263]</option>
                                <option value="70">suresh soni [70] - [something] - [someone@someid.com] - [07878963254]
                                </option>
                                <option value="71">rohan [71] - [ajay] - [KOSAL78@GMAIL.COM] - [25625634]</option>
                                <option value="74">DEMO [74] - [] - [demo@gmail.com] - [9717386989]</option>
                                <option value="75">shreya sharma [75] - [Mr. Bhola Sharma] - [dummy@gmail.com] -
                                    [987461236]</option>
                                <option value="78">pravin [78] - [] - [abc@gmail.com] - [7578412587]</option>
                                <option value="79">sanjay [79] - [] - [sunflowerpublicschool786@gmail.com] -
                                    [8654963254]</option>
                                <option value="80">Rashi Saxena [80] - [mr. surendra saxena] -
                                    [rashisaxena1997@gmail.com] - [9630843846]</option>
                                <option value="81">Pankajini Patra [81] - [Rajanikanta Mund] -
                                    [rajanikanta.fine@gmail.com] - [8249570835]</option>
                                <option value="82">Jyoti Ranjan Patra [82] - [Dhirendra Kumar Patra] -
                                    [rajanikanta.fine@gmail.com] - [+917008251522]</option>
                                <option value="83">Goutam Kumar Das [83] - [rudra das] - [rajanikanta.fine@gmail.com] -
                                    [+916371329608]</option>
                                <option value="84">Human Ram Bhati [84] - [Jagat] - [rajanikanta.fine@gmail.com] -
                                    [8249570835]</option>
                                <option value="85">Premshankar Yadav [85] - [vijay shankar] -
                                    [rajanikanta.fine@gmail.com] - [8249570835]</option>
                                <option value="86">Amit Kumar Patra [86] - [Bimal chandra Patra] -
                                    [rajanikanta.fine@gmail.com] - [8249570835]</option>
                                <option value="87">Sibdutta Negi [87] - [Lalit Mohan Negi] -
                                    [rajanikanta.fine@gmail.com] - [9981229723]</option>
                                <option value="90">Brahmarao [90] - [DYtzgtkyg] - [vbr.svn@gmail.com] - [9949458795]
                                </option>
                                <option value="91">srishti gusain [91] - [] - [srishtigusain56@gmail.com] - [8602503194]
                                </option>
                                <option value="92">HARSHALI SHAH [92] - [SUNILpoj] - [HARSHALI234@GMAIL.COM] -
                                    [9406046007]</option>
                                <option value="93">tushar modi [93] - [ayush modi ] - [tushar234@gmail.com] -
                                    [8109964727]</option>
                                <option value="94">DS SALUJA [94] - [SURENDRA SINGH] - [SUDEEP.S.SALUJA@GMAIL.COM] -
                                    [9009742474]</option>
                                <option value="95">AYUSH [95] - [GHANSHYAM RATHORE] - [rathore.ayush37@gmail.com] -
                                    [9406855366]</option>
                                <option value="96">TUSHAR IYRE [96] - [RAHUL] - [SIR1234@GMAIL.COM] - [9845632156]
                                </option>
                                <option value="97">Rajanikanta Mund [97] - [Raghumani Mund] - [rajani.winzon@gmail.com]
                                    - [8249570835]</option>
                                <option value="99">kunal mourya [99] - [umesh] - [umeshmourya2580@gmail.com] -
                                    [8889648546]</option>
                                <option value="101">MR. SANTOSH KUMAR SAHU [101] - [TABAL SINGH ] -
                                    [SANTOSHSAHU6513@GMAIL.COM] - [8718909760]</option>
                                <option value="102">MR. BHOOPENDRA LODHI [102] - [BHAGWAT SINGH ] -
                                    [BHOOPENDRA081194@GMAIL.COM] - [9340342389]</option>
                                <option value="103">Anjali ojha [103] - [] - [anjli@gmail.com] - [887666]</option>
                                <option value="104">atul singh thakur [104] - [] - [thakuratulsingh53@gmail.com] -
                                    [7089840046]</option>
                                <option value="105">SANTOSH KUMAR SINGH [105] - [] - [nagendra709042198@GMAIL.COM] -
                                    [9709042198]</option>
                                <option value="107">rani [107] - [] - [rani2@gmail.com] - [8275483645]</option>
                                <option value="108">KUMAR RAVIKANT [108] - [BUNDI PRASAD] - [ravi100281@gmail.com] -
                                    [7979046795]</option>
                                <option value="123456109">nikhil advin [123456109] - [H. N advin] - [abc@gmail.com] -
                                    [1236547896]</option>
                                <option value="110">sadab [110] - [] - [rani2@gmail.com] - [8275483645]</option>
                                <option value="111">Ravi [111] - [] - [admin@gmail.com] - [00000000]</option>
                                <option value="Samir 112">Samir harle [Samir 112] - [Hariman ] -
                                    [sam.harle@rediffmail.com] - [7083029022 ]</option>
                                <option value="122">umesh mourya [122] - [ramdash mourya] - [umeshmourya2580@gmail.com]
                                    - [7067247461]</option>
                                <option value="124">Neelam jharbade [124] - [] - [neelamjharbade94@gmail.com] - []
                                </option>
                                <option value="125">anand sharma [125] - [ramesh sharma] - [xyz@gmail.com] -
                                    [1234567890]</option>
                                <option value="126">jitendra shriwash [126] - [godhan shriwas] - [jittu1988@gmail.com] -
                                    [9691737446]</option>
                                <option value="127">demo faculty [127] - [] - [demofaculty@gmail.com] - []</option>
                                <option value="128">VATAN VERMA [128] - [] - [vatan.niit@gmail.com] - [8840241165]
                                </option>
                                <option value="129">user1 [129] - [] - [user1@gmail.com] - []</option>
                                <option value="Ok show130">Pawan malviya [Ok show130] - [Shreeram malviya] -
                                    [pawan1995@gmail.com] - [7746943011]</option>
                                <option value="131"> teacher [131] - [] - [teacher@gmail.com] - []</option>
                                <option value="1132">ABHISHEK SINGH THAKUR [1132] - [AMAR SINGH THAKUR] -
                                    [abhisheksingh2122@gmail.com] - [9300174646]</option>
                                <option value="124489134">MONU KUMAR [124489134] - [MANA RAM JAT] -
                                    [JKLJKLJKJK@GMAIL.COM] - [89559698998]</option>
                                <option value="135">abhushek [135] - [] - [abhi23@gmail.com] - [8630913086]</option>
                                <option value="136">Teacher [136] - [] - [teacher1@gmail.com] - []</option>
                                <option value="137">Supriya tiwari [137] - [sdTiwari] - [saltnatansari159@gmail.com] -
                                    [8319595088]</option>
                                <option value="138">Yashpal Kr [138] - [Yashpal Gupta] - [yash14@gmail.com] -
                                    [741236985]</option>
                                <option value="29002139">VAISHNAVI AGRWAL [29002139] - [VIVEK VERMA] -
                                    [VAISHNAVIAGRWAL123@GAMIL.COM] - [7900927306]</option>
                                <option value="2901140">KAREEM RANA [2901140] - [AZAD KHAN] - [KKHAN0025@GMAIL.COM] -
                                    [8859090867]</option>
                                <option value="AAAA141">PALWINDER KAUR [AAAA141] - [BHARPUR SINGH] -
                                    [KPALWINDER1972@GMAIL.COM] - [9417894252]</option>
                                <option value="142">Supriya Santosh [142] - [Brijendra Pandey] -
                                    [Satishtiwari77616@gmail.com] - [4454655y6547]</option>
                                <option value="143">MD JAHIR KHAN [143] - [MD jalaluddin khan] -
                                    [jahir.maxwell@gmail.com] - [+919086669999]</option>
                                <option value="144">Supriya Santosh [144] - [Shiwanand Tiwari] -
                                    [supriyasantosh1234@gmail.com] - [8602503194]</option>
                                <option value="S145">Mr Daya Nand Tiwari [S145] - [Mr Sahiba Nand Tiwari] -
                                    [lakshya4shiksha@gmail.com] - [9336024608]</option>
                                <option value="146">satyaprakash yadav [146] - [raj pal singh yadav] -
                                    [yadavsatyaprakashr@gmail.com] - [9638277283]</option>
                                <option value="1147">praveen [1147] - [ishwar lal] - [upadhyaygroup1@gmail.com] -
                                    [8120900282]</option>
                                <option value="148">Neelam jharbade [148] - [Sukhdev jharbade] -
                                    [neelamjharbade94@gmail.com] - [8109668266]</option>
                                <option value="149">Tribhuwan Kumar [149] - [Mithilesh Mishra] -
                                    [tribhuwan311@gmail.com] - [9155703545]</option>
                                <option value="150">SURAJ KUMAR SINGH [150] - [SATISH KUMAR] - [tribhuwan311@gmail.com]
                                    - [9576771430]</option>
                                <option value="151">Rohit [151] - [] - [rohit@simption.com] - []</option>
                                <option value="152">umesh [152] - [] - [ymeysssj@gmail] - []</option>
                                <option value="153">Shiwanand Tiwari [153] - [Shiwanand Tiwari] -
                                    [Satishtiwari77616@gmail.com] - [8602503194]</option>
                                <option value="154">suresh soni [154] - [MR. SHEETLA PRASAD DWIVEDI ] -
                                    [someone@someid.com] - []</option>
                                <option value="222155">RAYEES [222155] - [Mani] - [dupanzgam@gmail.com] - [9906412069]
                                </option>
                                <option value="156">ANAYAT ULLAH [156] - [ ] - [anayat@gmail.com] - [99064112069]
                                </option>
                                <option value="157">xxx [157] - [] - [rather@gmail.com] - []</option>
                                <option value="158">AAA [158] - [] - [rather@gmail.com] - []</option>
                                <option value="159">AA [159] - [Aayprasad tiwari] - [tushar234@gmail.com] - []</option>
                                <option value="160"> [160] - [] - [Sheikhannu145@gmail.com] - []</option>
                                <option value="166">JAVID [166] - [] - [javid@gmail.com] - []</option>
                                <option value="001175">Hansraj [001175] - [Omprakash] - [hansraj4384@gmail.com] -
                                    [8053038939]</option>
                                <option value="199">Mohit nagar [199] - [Bheemsingh Nagar] -
                                    [dhakadmohit60448@gmail.com] - [7999245216]</option>
                                <option value="261">PRAKASH KUMAWAT [261] - [demo father] - [rkmps2014@gmail.com] - []
                                </option>
                                <option value="gtttsk280">Sunita Bai [gtttsk280] - [Manmohan Raj] -
                                    [sunitabai@gmail.com] - [9992288710]</option>
                                <option value="281">Rati [281] - [Rajkumar] - [Rati@gmail.com] - [9638527410]</option>
                                <option value="283">Priyanka kaushik [283] - [Neeprit rajvansh] - [lucyy@gmail.com] -
                                    [9926534586]</option>
                                <option value="292">JAGMAL YADAV [292] - [ABC] - [000@GMAIL.COM] - []</option>
                                <option value="302">RAMKISHAN JI [302] - [ABC] - [ABC@GMAIL.COM] - []</option>
                                <option value="303">rima d [303] - [] - [radhachohan@gmail.com] - []</option>
                                <option value="309">nidhi [309] - [krishna] - [jjj33@gmail.com] - [7656754345]</option>
                                <option value="310">pooja [310] - [surendra singh] - [rani73@gmail.com] - [56475534]
                                </option>
                                <option value="312">ufgv [312] - [xfx] - [kftg@gmail.com] - [25646541]</option>
                                <option value="313">Moniika [313] - [Rathore] - [monika@gmail.com] - [9825356122]
                                </option>
                                <option value="315">Monika [315] - [Rathore] - [monika@gmail.com] - [9821556548]
                                </option>
                                <option value="789456123216320">shamli [789456123216320] - [harichandra] -
                                    [mahsramshamli@gmail.com] - [6359874129]</option>
                                <option value="322">kundan kumar jha [322] - [] - [kjhatimple@gmail.com] - [8789581784]
                                </option>
                                <option value="323">JAGMAL YADAV [323] - [] - [radhachohan@gmail.com] - [9898788845]
                                </option>
                                <option value="328">rahul [328] - [shiva ji] - [mkb@gmail.com] - [56455698]</option>
                                <option value="hi331">eswari [hi331] - [nil] - [eswari@gmail.com] - [6369209603]
                                </option>
                                <option value="332">JAGMAL YADAV [332] - [late md masood khan] - [radhachohan@gmail.com]
                                    - []</option>
                                <option value="333">JAGMAL YADAV [333] - [late md masood khan] - [radhachohan@gmail.com]
                                    - []</option>
                                <option value="334">ABJISHEK LAND [334] - [] - [AA@GMAIL.COM] - []</option>
                                <option value="-335">TUSHAR SULTANE [-335] - [] - [TS20@GMAIL.COM] - []</option>
                                <option value="RP34641645336">PARVATI PATIL [RP34641645336] - [DURJAN PATIL] -
                                    [PATILPARVATI072@GAMIL.COM] - [7477010621]</option>
                                <option value="1337">ASHADUR RAHMAN MONDAL [1337] - [AMZAD ALI MONDAL] -
                                    [ASHADURMONDALL@GMAIL.COM] - [7005657009]</option>
                                <option value="0338">TUSHAR [0338] - [SANJAY] - [AAA@AAA.COM] - [0]</option>
                                <option value="340">VIVEK KUMAR [340] - [VIPIN SAHANI] - [vivekies2000@gmail.com] -
                                    [9525553060]</option>
                                <option value="123341">suresh Devashi [123341] - [Ramesh] - [sureshramesh@gmail.com] -
                                    [9820964914]</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label>Order By</label>
                            <select class="form-control" name="order_by" id="order_by">
                                <option value="">Select</option>
                                <option value="emp_name">Employee Name</option>
                                <option value="emp_id">Employee Id</option>
                                <option value="emp_priority">Employee Priority</option>
                            </select>
                        </div>

                        <div class="col-md-1">
                        </div>
                    </div></br></br></br></br></br>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="checkbox" name="" value="" id="check_all" onclick="for_check(this.id);"
                                checked>
                            <th><b style="color:red;">Check All Field/Unchecked All</b></th>
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_id|?|emp id"
                                class="check_all" />
                            <th><b>Employee Id</b></th>
                        </div>
                    </div>

                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_rf_id_no|?|emp rf id no"
                                class="check_all" />
                            <th><b>Employee Rf Id No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_name|?|emp name"
                                class="check_all" />
                            <th><b>Employee Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_dob|?|emp DOB"
                                class="check_all" />
                            <th><b>Employee DOB</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_gender|?|emp gender"
                                class="check_all" />
                            <th><b>Employee Gender</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_father|?|emp father"
                                class="check_all" />
                            <th><b>Employee Father</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_email|?|emp email"
                                class="check_all" />
                            <th><b>Employee Email</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_mobile|?|emp mobile"
                                class="check_all" />
                            <th><b>Employee Mobile</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_address|?|emp address"
                                class="check_all" />
                            <th><b>Employee Address</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="emp_qualification|?|emp qualification" class="check_all" />
                            <th><b>Employee Qualification</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_doj|?|emp doj"
                                class="check_all" />
                            <th><b>Employee Date Of Joning</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_categories|?|emp categories"
                                class="check_all" />
                            <th><b>Employee Categories</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="emp_class_preferred|?|emp class preferred" class="check_all" />
                            <th><b>Employee Class Preferred</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="emp_designation|?|emp designation" class="check_all" />
                            <th><b>Employee Designation</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="emp_pan_card_no|?|emp pan card no" class="check_all" />
                            <th><b>Employee Pan Card No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_bank_name|?|emp bank name"
                                class="check_all" />
                            <th><b>Employee Bank Name</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_account_no|?|emp account no"
                                class="check_all" />
                            <th><b>Employee Account Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_ifsc_code|?|emp ifsc code"
                                class="check_all" />
                            <th><b>Employee Ifsc Code</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="emp_basic_salary|?|emp basic salary" class="check_all" />
                            <th><b>Emp Basic Salary</b></th>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_pf_number|?|emp pf number"
                                class="check_all" />
                            <th><b>Employee Pf Number</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="emp_subject_preferred|?|emp subject preferred" class="check_all" />
                            <th><b>Employee Subject Preferred</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]"
                                value="emp_uid_no|?|emp aadhar / uid no" class="check_all" />
                            <th><b>Employee Aadhar / Uid No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="blank_field_1|?|emp sssmid no"
                                class="check_all" />
                            <th><b>Employee SSSMID No</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_basic_salary|?|salary"
                                class="check_all" />
                            <th><b>Employee Salary</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_other_wages|?|other wages"
                                class="check_all" />
                            <th><b>Employee Other Wages</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_leave_cl|?|casual leave"
                                class="check_all" />
                            <th><b>Employee Casual Leave</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_leave_pl|?|pay/earn leave"
                                class="check_all" />
                            <th><b>Employee Pay/Earn Leave</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_leave_sl|?|sick leave"
                                class="check_all" />
                            <th><b>Employee Sick Leave</b></th>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="checkbox" checked name="student_data[]" value="emp_leave_other|?|other leave"
                                class="check_all" />
                            <th><b>Employee Other Leave</b></th>
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
    if (num2 < 1) {
        alert_new('Please Select Atleast One Field !!!', 'red');
        return false;
    } else {
        form_submit();
        return true;
    }
}
</script>
<script>
$(function() {
    $('.select2').select2();
});
</script>