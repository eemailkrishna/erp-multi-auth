@include('common.header')
@include('common.navbar')
<script>
function check_all_class1() {
    if ($('#id_class_check').prop('checked')) {
        $('.check_all_class').each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $('.check_all_class').each(function() {
            $(this).prop('checked', false);
        });
    }
}

function class_wise_check(id) {
    if ($('#id_check_all_classwise' + id).prop('checked')) {
        $('.check_all_classwise' + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $('.check_all_classwise' + id).each(function() {
            $(this).prop('checked', false);
        });
    }
}

function class_wise_check_reverse(id) {

    $('#id_check_all_classwise' + id).prop('checked', true);
    var x1 = '0';
    $('.check_all_classwise' + id).each(function() {
        if ($(this).prop('checked')) {
            x1 = '1';
        }
    });
    if (x1 == '0') {
        $('#id_check_all_classwise' + id).prop('checked', false);
    }
}

function myFunction() {
    var x1 = '0';
    $('.check_all_class').each(function() {
        if ($(this).prop('checked')) {
            x1 = '1';
        }
    });
    if (x1 == '0') {

        alert_new('Please Select Atleast One Class', 'red');
        return false;
    }
    var x2 = '0';
    $('.check_all_panel').each(function() {
        if ($(this).prop('checked')) {
            x2 = '1';
        }
    });
    if (x2 == '0') {

        alert_new('Please Select Atleast One Panel', 'red');
        return false;
    }
    return true;
}






function check_all_panel_wise(id) {
    if ($('#panel_' + id).prop('checked')) {
        $('.check_' + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $('.check_' + id).each(function() {
            $(this).prop('checked', false);
        });
    }
}

function check_all_panel_wise_all(id) {
    $('#panel_' + id).prop('checked', true);

}

function check_edit_delete(id) {
    if ($('#edit_delete_' + id).prop('checked')) {
        $('#delete_' + id).prop('checked', true);
        $('#edit_' + id).prop('checked', true);
    } else {
        $('#delete_' + id).prop('checked', false);
        $('#edit_' + id).prop('checked', false);
    }
}

function check_edit_delete_reverse(id1, id) {
    $('#edit_delete_' + id).prop('checked', true);
    $('#panel_' + id1).prop('checked', true);
}

function check_all_panel1() {
    if ($('#id_panel_check').prop('checked')) {
        $('.check_all_panel').each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $('.check_all_panel').each(function() {
            $(this).prop('checked', false);
        });
    }
}

function get_emp_detail(id) {
    post_content('user_right/add_user', 'user_email=' + id);
}


$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "user_right/add_user_api.php",
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
                get_content('user_right/user_list');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        User Right
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/user-right')}}"><i class="fa fa-photo"></i> User Rights</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add User</li>
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
                <h3 class="box-title">Add User</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <form role="form" method="post" onsubmit=" return myFunction()" id="my_form">
                <div class="box-body ">


                    <div class="col-md-12 ">
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label>Select User</label>
                                <select name="user_id" placeholder="" class="form-control select2"
                                    onchange='get_emp_detail(this.value);'>
                                    <option value=''>select</option>
                                    <option value='kailusoni99@gmail.com'>kailash soni[9617777047]</option>
                                    <option value='kailusoni99@gmail.com'>kailash soni[9617777047]</option>
                                    <option value='jay@gmail.com'>jay kishan[9864645645]</option>
                                    <option value='rajaak987@gmail.com'>Abhul Rjaak [9685745263]</option>
                                    <option value='someone@someid.com'>suresh soni[07878963254]</option>
                                    <option value='KOSAL78@GMAIL.COM'>rohan[25625634]</option>
                                    <option value='demo@gmail.com'>DEMO[9717386989]</option>
                                    <option value='dummy@gmail.com'>shreya sharma[987461236]</option>
                                    <option value='abc@gmail.com'>pravin[7578412587]</option>
                                    <option value='sunflowerpublicschool786@gmail.com'>sanjay[8654963254]</option>
                                    <option value='rashisaxena1997@gmail.com'>Rashi Saxena[9630843846]</option>
                                    <option value='rajanikanta.fine@gmail.com'>Pankajini Patra[8249570835]</option>
                                    <option value='rajanikanta.fine@gmail.com'>Jyoti Ranjan Patra[+917008251522]
                                    </option>
                                    <option value='rajanikanta.fine@gmail.com'>Goutam Kumar Das[+916371329608]</option>
                                    <option value='rajanikanta.fine@gmail.com'>Human Ram Bhati[8249570835]</option>
                                    <option value='rajanikanta.fine@gmail.com'>Premshankar Yadav[8249570835]</option>
                                    <option value='rajanikanta.fine@gmail.com'>Amit Kumar Patra[8249570835]</option>
                                    <option value='rajanikanta.fine@gmail.com'>Sibdutta Negi[9981229723]</option>
                                    <option value='vbr.svn@gmail.com'>Brahmarao[9949458795]</option>
                                    <option value='srishtigusain56@gmail.com'>srishti gusain[8602503194]</option>
                                    <option value='HARSHALI234@GMAIL.COM'>HARSHALI SHAH[9406046007]</option>
                                    <option value='tushar234@gmail.com'>tushar modi [8109964727]</option>
                                    <option value='SUDEEP.S.SALUJA@GMAIL.COM'>DS SALUJA[9009742474]</option>
                                    <option value='rathore.ayush37@gmail.com'>AYUSH[9406855366]</option>
                                    <option value='SIR1234@GMAIL.COM'>TUSHAR IYRE [9845632156]</option>
                                    <option value='rajani.winzon@gmail.com'>Rajanikanta Mund[8249570835]</option>
                                    <option value='umeshmourya2580@gmail.com'>kunal mourya[8889648546]</option>
                                    <option value='SANTOSHSAHU6513@GMAIL.COM'>MR. SANTOSH KUMAR SAHU[8718909760]
                                    </option>
                                    <option value='BHOOPENDRA081194@GMAIL.COM'>MR. BHOOPENDRA LODHI [9340342389]
                                    </option>
                                    <option value='anjli@gmail.com'>Anjali ojha[887666]</option>
                                    <option value='thakuratulsingh53@gmail.com'>atul singh thakur [7089840046]</option>
                                    <option value='nagendra709042198@GMAIL.COM'>SANTOSH KUMAR SINGH[9709042198]</option>
                                    <option value='rani2@gmail.com'>rani[8275483645]</option>
                                    <option value='ravi100281@gmail.com'>KUMAR RAVIKANT[7979046795]</option>
                                    <option value='abc@gmail.com'>nikhil advin[1236547896]</option>
                                    <option value='rani2@gmail.com'>sadab[8275483645]</option>
                                    <option value='admin@gmail.com'>Ravi[00000000]</option>
                                    <option value='sam.harle@rediffmail.com'>Samir harle[7083029022 ]</option>
                                    <option value='umeshmourya2580@gmail.com'>umesh mourya[7067247461]</option>
                                    <option value='neelamjharbade94@gmail.com'>Neelam jharbade[]</option>
                                    <option value='xyz@gmail.com'>anand sharma[1234567890]</option>
                                    <option value='jittu1988@gmail.com'>jitendra shriwash[9691737446]</option>
                                    <option value='demofaculty@gmail.com'>demo faculty[]</option>
                                    <option value='vatan.niit@gmail.com'>VATAN VERMA[8840241165]</option>
                                    <option value='user1@gmail.com'>user1[]</option>
                                    <option value='pawan1995@gmail.com'>Pawan malviya[7746943011]</option>
                                    <option value='teacher@gmail.com'> teacher[]</option>
                                    <option value='abhisheksingh2122@gmail.com'>ABHISHEK SINGH THAKUR[9300174646]
                                    </option>
                                    <option value='JKLJKLJKJK@GMAIL.COM'>MONU KUMAR[89559698998]</option>
                                    <option value='abhi23@gmail.com'>abhushek[8630913086]</option>
                                    <option value='teacher1@gmail.com'>Teacher[]</option>
                                    <option value='saltnatansari159@gmail.com'>Supriya tiwari[8319595088]</option>
                                    <option value='yash14@gmail.com'>Yashpal Kr[741236985]</option>
                                    <option value='VAISHNAVIAGRWAL123@GAMIL.COM'>VAISHNAVI AGRWAL[7900927306]</option>
                                    <option value='KKHAN0025@GMAIL.COM'>KAREEM RANA[8859090867]</option>
                                    <option value='KPALWINDER1972@GMAIL.COM'>PALWINDER KAUR[9417894252]</option>
                                    <option value='Satishtiwari77616@gmail.com'>Supriya Santosh[4454655y6547]</option>
                                    <option value='jahir.maxwell@gmail.com'>MD JAHIR KHAN[+919086669999]</option>
                                    <option value='supriyasantosh1234@gmail.com'>Supriya Santosh[8602503194]</option>
                                    <option value='lakshya4shiksha@gmail.com'>Mr Daya Nand Tiwari[9336024608]</option>
                                    <option value='yadavsatyaprakashr@gmail.com'>satyaprakash yadav[9638277283]</option>
                                    <option value='upadhyaygroup1@gmail.com'>praveen[8120900282]</option>
                                    <option value='neelamjharbade94@gmail.com'>Neelam jharbade[8109668266]</option>
                                    <option value='tribhuwan311@gmail.com'>Tribhuwan Kumar[9155703545]</option>
                                    <option value='tribhuwan311@gmail.com'>SURAJ KUMAR SINGH[9576771430]</option>
                                    <option value='rohit@simption.com'>Rohit []</option>
                                    <option value='ymeysssj@gmail'>umesh[]</option>
                                    <option value='Satishtiwari77616@gmail.com'>Shiwanand Tiwari[8602503194]</option>
                                    <option value='someone@someid.com'>suresh soni[]</option>
                                    <option value='dupanzgam@gmail.com'>RAYEES[9906412069]</option>
                                    <option value='anayat@gmail.com'>ANAYAT ULLAH[99064112069]</option>
                                    <option value='rather@gmail.com'>xxx[]</option>
                                    <option value='rather@gmail.com'>AAA[]</option>
                                    <option value='tushar234@gmail.com'>AA[]</option>
                                    <option value='javid@gmail.com'>JAVID[]</option>
                                    <option value='hansraj4384@gmail.com'>Hansraj[8053038939]</option>
                                    <option value='dhakadmohit60448@gmail.com'>Mohit nagar[7999245216]</option>
                                    <option value='rkmps2014@gmail.com'>PRAKASH KUMAWAT[]</option>
                                    <option value='sunitabai@gmail.com'>Sunita Bai[9992288710]</option>
                                    <option value='Rati@gmail.com'>Rati [9638527410]</option>
                                    <option value='lucyy@gmail.com'>Priyanka kaushik[9926534586]</option>
                                    <option value='000@GMAIL.COM'>JAGMAL YADAV[]</option>
                                    <option value='ABC@GMAIL.COM'>RAMKISHAN JI[]</option>
                                    <option value='radhachohan@gmail.com'>rima d[]</option>
                                    <option value='jjj33@gmail.com'>nidhi[7656754345]</option>
                                    <option value='rani73@gmail.com'>pooja [56475534]</option>
                                    <option value='kftg@gmail.com'>ufgv[25646541]</option>
                                    <option value='monika@gmail.com'>Moniika[9825356122]</option>
                                    <option value='monika@gmail.com'>Monika[9821556548]</option>
                                    <option value='mahsramshamli@gmail.com'>shamli [6359874129]</option>
                                    <option value='kjhatimple@gmail.com'>kundan kumar jha[8789581784]</option>
                                    <option value='radhachohan@gmail.com'>JAGMAL YADAV[9898788845]</option>
                                    <option value='mkb@gmail.com'>rahul [56455698]</option>
                                    <option value='eswari@gmail.com'>eswari[6369209603]</option>
                                    <option value='radhachohan@gmail.com'>JAGMAL YADAV[]</option>
                                    <option value='radhachohan@gmail.com'>JAGMAL YADAV[]</option>
                                    <option value='AA@GMAIL.COM'>ABJISHEK LAND[]</option>
                                    <option value='TS20@GMAIL.COM'>TUSHAR SULTANE[]</option>
                                    <option value='PATILPARVATI072@GAMIL.COM'>PARVATI PATIL[7477010621]</option>
                                    <option value='ASHADURMONDALL@GMAIL.COM'>ASHADUR RAHMAN MONDAL[7005657009]</option>
                                    <option value='AAA@AAA.COM'>TUSHAR[0]</option>
                                    <option value='vivekies2000@gmail.com'>VIVEK KUMAR[9525553060]</option>
                                    <option value='sureshramesh@gmail.com'>suresh Devashi[9820964914]</option>
                            </div>
</section>


<script>
$(function() {
    $('#example1').DataTable()
})
</script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

})
</script>
@include('common.footer')