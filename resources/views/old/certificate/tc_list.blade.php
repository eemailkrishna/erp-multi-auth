@include('common.header')
@include('common.navbar')
<script>
function valid(s_no, roll_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_tc(s_no, roll_no);
    } else {
        return false;
    }
}

function delete_tc(s_no, roll_no) {
    $.ajax({
        type: "POST",
        url: access_link + "certificate/tc_delete.php?id=" + s_no + "&roll_no=" + roll_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('certificate/tc_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}

function for_activate(student_roll_no) {

    if ($('#student_' + student_roll_no).prop('checked') == true) {
        var student_status = "Active";
        var message = "Active";
    } else {
        var student_status = "Tc_issued";
        var message = "Inactive";
    }

    $.ajax({
        type: "POST",
        url: access_link + "certificate/ajax_active_inactive_student.php?student_roll_no=" + student_roll_no +
            "&student_status=" + student_status + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('This Student Successfully ' + message + ' in Student List !!!', 'green');
                get_content('certificate/tc_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Certificate Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/certificate')}}"><i class="fa fa-certificate"></i> Certificate</a></li>
        <li class="active"> TC List</li>
    </ol>
</section>



<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success ">
                <div class="box-header with-border">
                    <h3 class="box-title">TC List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>student Name</th>
                                <th>Father's Name</th>
                                <th>Class</th>
                                <th>Roll.No.</th>
                                <th>Issue Date</th>

                                <th>Update By</th>
                                <th>Date</th>
                                <th>A/I</th>

                                <th>Print Tc</th>
                                <th>Print Noc</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Umesh</td>
                                <td>Rajesh</td>
                                <td>2ND</td>
                                <td>2000298</td>
                                <td>2022-12-04</td>

                                <td>rahul@simption.com</td>
                                <td>04-12-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000298"
                                        onclick="for_activate('2000298');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=814'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=814'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=814')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('814','2000298');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Ram Kumar</td>
                                <td>Ravi Kumar</td>
                                <td>7TH</td>
                                <td>2200639</td>
                                <td>2022-12-03</td>

                                <td>rahul@simption.com</td>
                                <td>03-12-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2200639"
                                        onclick="for_activate('2200639');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=813'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=813'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=813')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('813','2200639');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Umesh</td>
                                <td>Rajesh</td>
                                <td>2ND</td>
                                <td>2000298</td>
                                <td>2022-12-02</td>

                                <td>rahul@simption.com</td>
                                <td>02-12-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000298"
                                        onclick="for_activate('2000298');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=812'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=812'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=812')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('812','2000298');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Kishan</td>
                                <td>Kishan singh</td>
                                <td>UKG</td>
                                <td>2100413</td>
                                <td>2022-11-30</td>

                                <td>rahul@simption.com</td>
                                <td>30-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100413"
                                        onclick="for_activate('2100413');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=811'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=811'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=811')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('811','2100413');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Jayssh</td>
                                <td>parvesh</td>
                                <td>4TH</td>
                                <td>2100407</td>
                                <td>2022-11-29</td>

                                <td>rahul@simption.com</td>
                                <td>29-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100407"
                                        onclick="for_activate('2100407');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=810'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=810'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=810')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('810','2100407');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>S</td>
                                <td></td>
                                <td>2ND</td>
                                <td>2000142</td>
                                <td>2022-11-25</td>

                                <td>rahul@simption.com</td>
                                <td>25-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000142"
                                        onclick="for_activate('2000142');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=809'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=809'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=809')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('809','2000142');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>AMINA DHABAK</td>
                                <td>AJIJUL DHABAK</td>
                                <td>UKG</td>
                                <td>2100398</td>
                                <td>2022-11-25</td>

                                <td>rahul@simption.com</td>
                                <td>25-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100398"
                                        onclick="for_activate('2100398');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=808'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=808'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=808')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('808','2100398');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Ratan Lohar</td>
                                <td>SANJAY KUMAR</td>
                                <td>UKG</td>
                                <td>2100492</td>
                                <td>2022-11-25</td>

                                <td>rahul@simption.com</td>
                                <td>25-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100492"
                                        onclick="for_activate('2100492');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=807'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=807'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=807')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('807','2100492');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>Mohit </td>
                                <td>Mr. Ravi</td>
                                <td>3RD</td>
                                <td>2100392</td>
                                <td>2022-11-23</td>

                                <td>rahul@simption.com</td>
                                <td>23-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100392"
                                        onclick="for_activate('2100392');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=806'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=806'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=806')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('806','2100392');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>RAJESH</td>
                                <td>TARACHANDRA</td>
                                <td>11TH</td>
                                <td>2100536</td>
                                <td>2022-11-22</td>

                                <td>rahul@simption.com</td>
                                <td>22-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100536"
                                        onclick="for_activate('2100536');" value=""
                                        title="For Admission Info Active / Inactive" checked /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=805'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=805'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=805')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('805','2100536');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>LEYA ANNA ANTONY</td>
                                <td>ANTONY K VARGHESE</td>
                                <td>4TH</td>
                                <td>2000356</td>
                                <td>2022-11-22</td>

                                <td>rahul@simption.com</td>
                                <td>22-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000356"
                                        onclick="for_activate('2000356');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=804'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=804'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=804')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('804','2000356');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>12</td>
                                <td>SatyaPrakash Bhardwaj</td>
                                <td>Santrash Rajbhar</td>
                                <td>6TH</td>
                                <td>2200664</td>
                                <td>2022-11-22</td>

                                <td>rahul@simption.com</td>
                                <td>22-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2200664"
                                        onclick="for_activate('2200664');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=803'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=803'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=803')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('803','2200664');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>LAXMI GUPTA </td>
                                <td>SUSHIL GUPTA </td>
                                <td>UKG</td>
                                <td>2000374</td>
                                <td>2022-11-19</td>

                                <td>rahul@simption.com</td>
                                <td>19-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000374"
                                        onclick="for_activate('2000374');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=802'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=802'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=802')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('802','2000374');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>rakesh</td>
                                <td>kumar singh</td>
                                <td>UKG</td>
                                <td>2000352</td>
                                <td>2022-11-18</td>

                                <td>rahul@simption.com</td>
                                <td>18-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000352"
                                        onclick="for_activate('2000352');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=801'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=801'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=801')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('801','2000352');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>Akash kumar</td>
                                <td>Horil yadav</td>
                                <td>UKG</td>
                                <td>2100441</td>
                                <td>2022-11-17</td>

                                <td>rahul@simption.com</td>
                                <td>17-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100441"
                                        onclick="for_activate('2100441');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=800'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=800'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=800')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('800','2100441');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>deepak kumar</td>
                                <td>nitish kumar</td>
                                <td>1ST</td>
                                <td>2000342</td>
                                <td>2022-11-12</td>

                                <td>rahul@simption.com</td>
                                <td>12-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000342"
                                        onclick="for_activate('2000342');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=799'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=799'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=799')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('799','2000342');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>deepak kumar</td>
                                <td>nitish kumar</td>
                                <td>1ST</td>
                                <td>2000342</td>
                                <td>2022-11-12</td>

                                <td>rahul@simption.com</td>
                                <td>12-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000342"
                                        onclick="for_activate('2000342');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=798'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=798'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=798')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('798','2000342');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>Rashid khan</td>
                                <td>Abdul jabbar</td>
                                <td>6TH</td>
                                <td>2000348</td>
                                <td>2022-11-10</td>

                                <td>rahul@simption.com</td>
                                <td>10-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000348"
                                        onclick="for_activate('2000348');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=797'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=797'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=797')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('797','2000348');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>x</td>
                                <td></td>
                                <td>2ND</td>
                                <td>2000209</td>
                                <td>2022-11-10</td>

                                <td>rahul@simption.com</td>
                                <td>10-11-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000209"
                                        onclick="for_activate('2000209');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=796'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=796'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=796')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('796','2000209');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>20</td>
                                <td>RAHUL</td>
                                <td>BINOD</td>
                                <td>1ST</td>
                                <td>2000315</td>
                                <td>2022-10-02</td>

                                <td>rahul@simption.com</td>
                                <td>02-10-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000315"
                                        onclick="for_activate('2000315');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=781'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=781'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=781')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('781','2000315');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>ABDUL KAREEM </td>
                                <td>SHAIKH</td>
                                <td>1ST</td>
                                <td>2000330</td>
                                <td>2022-08-06</td>

                                <td>rahul@simption.com</td>
                                <td>06-08-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000330"
                                        onclick="for_activate('2000330');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=744'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=744'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=744')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('744','2000330');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>22</td>
                                <td>vishal vilran</td>
                                <td>Jagdish Chandra</td>
                                <td>5TH</td>
                                <td>2000230</td>
                                <td>2022-08-03</td>

                                <td>rahul@simption.com</td>
                                <td>03-08-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000230"
                                        onclick="for_activate('2000230');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=739'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=739'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=739')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('739','2000230');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>23</td>
                                <td>S</td>
                                <td></td>
                                <td>2ND</td>
                                <td>2000142</td>
                                <td>2022-07-30</td>

                                <td>rahul@simption.com</td>
                                <td>30-07-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000142"
                                        onclick="for_activate('2000142');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=733'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=733'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=733')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('733','2000142');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>24</td>
                                <td>RAHUL</td>
                                <td>BINOD</td>
                                <td>1ST</td>
                                <td>2000315</td>
                                <td>2022-07-29</td>

                                <td>rahul@simption.com</td>
                                <td>29-07-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000315"
                                        onclick="for_activate('2000315');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=732'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=732'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=732')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('732','2000315');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>ram</td>
                                <td>shyam</td>
                                <td>1ST</td>
                                <td>2100556</td>
                                <td>2022-07-29</td>

                                <td>rahul@simption.com</td>
                                <td>29-07-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100556"
                                        onclick="for_activate('2100556');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=731'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=731'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=731')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('731','2100556');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>26</td>
                                <td>Aman</td>
                                <td>Asad</td>
                                <td>4TH</td>
                                <td>2100472</td>
                                <td>2022-07-20</td>

                                <td>rahul@simption.com</td>
                                <td>20-07-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2100472"
                                        onclick="for_activate('2100472');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=722'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=722'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=722')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('722','2100472');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>27</td>
                                <td>Sajal Bhartiya</td>
                                <td>Rakesh</td>
                                <td>3RD</td>
                                <td>2000328</td>
                                <td>2022-05-02</td>

                                <td>rahul@simption.com</td>
                                <td>02-05-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000328"
                                        onclick="for_activate('2000328');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=635'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=635'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=635')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('635','2000328');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>Jibran khan</td>
                                <td>Md kamran khan</td>
                                <td>4TH</td>
                                <td>2200655</td>
                                <td>2022-04-25</td>

                                <td>rahul@simption.com</td>
                                <td>25-04-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2200655"
                                        onclick="for_activate('2200655');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=622'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=622'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=622')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('622','2200655');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>29</td>
                                <td>Ram</td>
                                <td>Dam</td>
                                <td>2ND</td>
                                <td>2000211</td>
                                <td>2022-04-18</td>

                                <td>rahul@simption.com</td>
                                <td>18-04-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000211"
                                        onclick="for_activate('2000211');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=615'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=615'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=615')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('615','2000211');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>30</td>
                                <td>Mr. Dishu Saini</td>
                                <td>Mr. Pramod Kumar</td>
                                <td>2ND</td>
                                <td>2000213</td>
                                <td>2022-04-18</td>

                                <td>rahul@simption.com</td>
                                <td>18-04-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000213"
                                        onclick="for_activate('2000213');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=610'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=610'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=610')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('610','2000213');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>31</td>
                                <td>RAJESH TRIVEDI</td>
                                <td>RAMLAL</td>
                                <td>2ND</td>
                                <td>2000201</td>
                                <td>2022-04-03</td>

                                <td>rahul@simption.com</td>
                                <td>03-04-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000201"
                                        onclick="for_activate('2000201');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=586'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=586'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=586')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('586','2000201');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>32</td>
                                <td>DHVANIL</td>
                                <td>ROHIT</td>
                                <td>2ND</td>
                                <td>2000176</td>
                                <td>2022-03-10</td>

                                <td>rahul@simption.com</td>
                                <td>10-03-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2000176"
                                        onclick="for_activate('2000176');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=570'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=570'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=570')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('570','2000176');">Delete</button></td>
                            </tr>

                            <tr>
                                <td>33</td>
                                <td>jiyana khaton</td>
                                <td>suleman khan </td>
                                <td>LKG</td>
                                <td>2200617</td>
                                <td>2022-02-01</td>

                                <td>rahul@simption.com</td>
                                <td>01-02-2022</td>
                                <td><input type="checkbox" name="" class="" id="student_2200617"
                                        onclick="for_activate('2200617');" value=""
                                        title="For Admission Info Active / Inactive" /></td>

                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/tc_pdf_cbs.php?id=553'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Tc</button></a></td>
                                <td><a href='../school_software_v1_old/pdf/pdf/certificate_page/noc_certificate.php?id=553'
                                        target="_blank"><button type="button" class="btn btn-success">Print
                                            Noc</button></a></td>
                                <td><button type="button" onclick="post_content('certificate/tc_form_edit','id=553')"
                                        class="btn btn-success">Edit</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('553','2200617');">Delete</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@include('common.footer')
<script>
$(function() {
    $('#example1').DataTable()
})
</script>