@include('common.header')
@include('common.navbar')
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "complaint/faculty_complaint_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                get_content('complaint/staff_complaint');
            }
        }
    });
});
</script>
<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_complaint(s_no);
    } else {
        return false;
    }
}

function delete_complaint(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "complaint/staff_complaint_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            ////alert_new(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('complaint/faculty_complaint');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Complaint And Feedback Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/complaint')}}"><i class="fa fa-times-circle"></i> Complaints</a></li>
        <li><i class="fa fa-list"></i>Complaint Employee</li>
    </ol>
</section>

<!-- Model Box -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Teacher Reply</h4>
            </div>
            <form id="my_form" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="">
                        <label>Reply to Parents</label>
                        <input type="text" name="staff_complaint_reply" placeholder="Reply to Parents" value=""
                            class="form-control">
                        <input type="hidden" id="reply_roll_no" name="reply_roll_no" value="" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" value="Send" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Employee Complaint List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="my_background_color">
                            <tr>
                                <th>S.no.</th>
                                <th> Complaint </th>
                                <th>Roll.No.</th>
                                <th>Complaint Date</th>
                                <th>Faculty Name</th>
                                <th>Student Name</th>
                                <th>Student class</th>

                                <th>Update By</th>
                                <th>Date</th>

                                <th>Delete</th>
                                <th style="display:none;">Status</th>
                                <th style="display:none;"> Reply</th>
                            </tr>
                        </thead>

                        <tr align='center'>

                            <th>1</th>
                            <th>abc</th>
                            <th>2200735</th>
                            <th>05/12/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Aaditya </th>
                            <th>2ND</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('267');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=267')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200735"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>2</th>
                            <th>Sunil </th>
                            <th>2200709</th>
                            <th>15/11/2022</th>
                            <th>rahul@simption.com</th>
                            <th>DISHANT PATIDAR</th>
                            <th>6TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('266');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=266')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200709"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>3</th>
                            <th>NOT COMPLETE A WORK</th>
                            <th>2200812</th>
                            <th>14/11/2022</th>
                            <th>rahul@simption.com</th>
                            <th>sultana</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('265');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=265')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200812"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>4</th>
                            <th>nishan paul</th>
                            <th>2200811</th>
                            <th>09/10/2022</th>
                            <th>rahul@simption.com</th>
                            <th>yasin</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('264');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=264')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200811"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>5</th>
                            <th> bbb</th>
                            <th>2200934</th>
                            <th>25/09/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Ariz</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('263');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=263')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200934"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>6</th>
                            <th>Hello</th>
                            <th>2200758</th>
                            <th>04/09/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Aashish</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('262');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=262')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200758"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>7</th>
                            <th>isosos</th>
                            <th>2200875</th>
                            <th>09/08/2022</th>
                            <th>rahul@simption.com</th>
                            <th>aashish</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('261');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=261')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200875"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>8</th>
                            <th>bbm</th>
                            <th>2200765</th>
                            <th>18/05/2022</th>
                            <th>rahul@simption.com</th>
                            <th>RAJ NAYK </th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('257');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=257')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200765"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>9</th>
                            <th>jmgjm</th>
                            <th>2200726</th>
                            <th>18/05/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Avhanya11</th>
                            <th>12TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('258');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=258')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200726"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>10</th>
                            <th>hsbansb</th>
                            <th>2200721</th>
                            <th>18/05/2022</th>
                            <th>rahul@simption.com</th>
                            <th>ajay kumar mahto</th>
                            <th>11TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('259');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=259')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200721"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>11</th>
                            <th>uuu</th>
                            <th>2200709</th>
                            <th>11/05/2022</th>
                            <th>rahul@simption.com</th>
                            <th>DISHANT PATIDAR</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('256');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=256')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200709"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>12</th>
                            <th>she is behuda</th>
                            <th>2200766</th>
                            <th>01/05/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Anu</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('255');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=255')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200766"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>13</th>
                            <th>उयूयूई जेजीए जेजजजे कएक्केकक दज्ज्डजडज</th>
                            <th>2100556</th>
                            <th>28/04/2022</th>
                            <th>rahul@simption.com</th>
                            <th>ram</th>
                            <th>UKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('254');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=254')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2100556"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>14</th>
                            <th>tesing</th>
                            <th>2200759</th>
                            <th>21/04/2022</th>
                            <th>rahul@simption.com</th>
                            <th>INAMUR RAHMAN</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('252');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=252')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200759"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>15</th>
                            <th>hdjs</th>
                            <th>2200759</th>
                            <th>21/04/2022</th>
                            <th>rahul@simption.com</th>
                            <th>INAMUR RAHMAN</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('253');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=253')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200759"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>16</th>
                            <th>hghnm</th>
                            <th>2100575</th>
                            <th>02/04/2022</th>
                            <th>rahul@simption.com</th>
                            <th> BABALI SAHU</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('251');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=251')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2100575"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>17</th>
                            <th>dj jvcgh</th>
                            <th>2100575</th>
                            <th>01/04/2022</th>
                            <th>rahul@simption.com</th>
                            <th> BABALI SAHU</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('250');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=250')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2100575"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>18</th>
                            <th>he is noughty</th>
                            <th>2200700</th>
                            <th>22/03/2022</th>
                            <th>rahul@simption.com</th>
                            <th>akas kumar</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('249');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=249')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200700"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>19</th>
                            <th>please</th>
                            <th>2100450</th>
                            <th>22/03/2022</th>
                            <th>rahul@simption.com</th>
                            <th>umesh dhakad</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('248');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=248')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2100450"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>20</th>
                            <th>hlo</th>
                            <th>2100536</th>
                            <th>14/03/2022</th>
                            <th>rahul@simption.com</th>
                            <th>RAJESH</th>
                            <th>10TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('247');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=247')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2100536"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>21</th>
                            <th>hee</th>
                            <th>2100575</th>
                            <th>10/03/2022</th>
                            <th>rahul@simption.com</th>
                            <th> BABALI SAHU</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('246');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=246')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2100575"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>22</th>
                            <th>jdjdd</th>
                            <th>2100392</th>
                            <th>27/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Mohit </th>
                            <th>2ND</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('245');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=245')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2100392"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>23</th>
                            <th>t</th>
                            <th>2000268</th>
                            <th>26/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Aaysha Bano</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('241');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=241')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000268"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>24</th>
                            <th>t</th>
                            <th>2000268</th>
                            <th>26/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Aaysha Bano</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('242');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=242')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000268"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>25</th>
                            <th>t</th>
                            <th>2200645</th>
                            <th>26/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>abcs</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('243');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=243')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200645"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>26</th>
                            <th>hhhg</th>
                            <th>2200642</th>
                            <th>18/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Anamika</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('239');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=239')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200642"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>27</th>
                            <th>gg</th>
                            <th>2200641</th>
                            <th>18/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Heena Mittal</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('240');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=240')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200641"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>28</th>
                            <th>Hi</th>
                            <th>2200648</th>
                            <th>17/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Bijoy</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('238');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=238')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200648"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>29</th>
                            <th>hi</th>
                            <th>2200628</th>
                            <th>16/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>sushant singh</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('235');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=235')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200628"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>30</th>
                            <th>hi</th>
                            <th>2200648</th>
                            <th>16/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Bijoy</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('236');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=236')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200648"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>31</th>
                            <th>maths revision test 1

                                1. a packet of balloon cantain in 95 balloons how many balloon are there in 24 such
                                packet ? 5 Marks

                                2.on a monda many a read 23 pages on Thursday she read on 20 more pages digit many read
                                on the Thursday? 5 Marks

                                total 10 marks
                            </th>
                            <th>2200648</th>
                            <th>16/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>Bijoy</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('237');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=237')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200648"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>32</th>
                            <th>gghj</th>
                            <th>2000269</th>
                            <th>13/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>ARMAN KATHAT</th>
                            <th>2ND</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('234');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=234')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000269"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>33</th>
                            <th>EVS : Read lession 7</th>
                            <th>2200628</th>
                            <th>08/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>sushant singh</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('229');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=229')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200628"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>34</th>
                            <th>Maths: Do the given Homework
                                in Workbook MCQ of Angles lession write Q.1 to Q . 10
                                2 times in your HOME Assignment Book Refer Work book </th>
                            <th>2200628</th>
                            <th>08/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>sushant singh</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('230');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=230')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200628"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>35</th>
                            <th>ft</th>
                            <th>2200614</th>
                            <th>08/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>balveer singh</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('232');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=232')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200614"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>36</th>
                            <th>write a .......</th>
                            <th>2200628</th>
                            <th>08/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>sushant singh</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('233');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=233')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200628"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>37</th>
                            <th>hi</th>
                            <th>2200628</th>
                            <th>07/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>sushant singh</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('227');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=227')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200628"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>38</th>
                            <th>Hindi : Do the given HW </th>
                            <th>2200628</th>
                            <th>07/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>sushant singh</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('228');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=228')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200628"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>39</th>
                            <th>a ram ....</th>
                            <th>2100470</th>
                            <th>01/02/2022</th>
                            <th>rahul@simption.com</th>
                            <th>ajay kewat</th>
                            <th>2ND</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('226');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=226')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2100470"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>40</th>
                            <th>testing</th>
                            <th>2200614</th>
                            <th>31/01/2022</th>
                            <th>rahul@simption.com</th>
                            <th>balveer singh</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('225');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=225')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2200614"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>41</th>
                            <th>not complete h.w</th>
                            <th>2000122</th>
                            <th> 03 / 07 /2021 </th>
                            <th>kailash soni</th>
                            <th>ashish kumar yadav</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('218');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=218')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>42</th>
                            <th>not complete h.w</th>
                            <th>2000122</th>
                            <th> 03 / 07 /2021 </th>
                            <th>kailash soni</th>
                            <th>ashish kumar yadav</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('219');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=219')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>43</th>
                            <th>not complete h.w</th>
                            <th>2000122</th>
                            <th> 03 / 07 /2021 </th>
                            <th>kailash soni</th>
                            <th>ashish kumar yadav</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('220');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=220')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>44</th>
                            <th>not complete h.w</th>
                            <th>2000122</th>
                            <th> 03 / 07 /2021 </th>
                            <th>kailash soni</th>
                            <th>ashish kumar yadav</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('221');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=221')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>45</th>
                            <th>not complete h.w</th>
                            <th>2000122</th>
                            <th> 03 / 07 /2021 </th>
                            <th>kailash soni</th>
                            <th>ashish kumar yadav</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('222');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=222')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>46</th>
                            <th>not complete h.w
                            </th>
                            <th>2000122</th>
                            <th> 03 / 07 /2021 </th>
                            <th>kailash soni</th>
                            <th>ashish kumar yadav</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('223');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=223')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>47</th>
                            <th>yy</th>
                            <th>2000151</th>
                            <th> 08 / 06 /2021 </th>
                            <th>kailash soni</th>
                            <th>MUZAFFAR HUSSAIN</th>
                            <th>10TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('215');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=215')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000151"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>48</th>
                            <th>absent</th>
                            <th>2000121</th>
                            <th> 08 / 05 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('212');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=212')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>49</th>
                            <th>absent</th>
                            <th>2000121</th>
                            <th> 08 / 05 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('213');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=213')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>50</th>
                            <th>absent</th>
                            <th>2000121</th>
                            <th> 08 / 05 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('214');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=214')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>51</th>
                            <th>not doing his work</th>
                            <th>2000081</th>
                            <th> 06 / 05 /2021 </th>
                            <th>kailash soni</th>
                            <th>THALESHWARI KUMARI BARETH</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('211');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=211')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000081"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>52</th>
                            <th>new and improved to be have please care</th>
                            <th>2000121</th>
                            <th> 07 / 04 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('210');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=210')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>53</th>
                            <th>no working</th>
                            <th>1900229</th>
                            <th> 01 / 04 /2021 </th>
                            <th>kailash soni</th>
                            <th>AAISHA KURREY</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('205');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=205')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>54</th>
                            <th>no working</th>
                            <th>1900229</th>
                            <th> 01 / 04 /2021 </th>
                            <th>kailash soni</th>
                            <th>AAISHA KURREY</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('206');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=206')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>55</th>
                            <th>no working</th>
                            <th>1900229</th>
                            <th> 01 / 04 /2021 </th>
                            <th>kailash soni</th>
                            <th>AAISHA KURREY</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('207');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=207')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>56</th>
                            <th>no working</th>
                            <th>1900229</th>
                            <th> 01 / 04 /2021 </th>
                            <th>kailash soni</th>
                            <th>AAISHA KURREY</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('208');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=208')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>57</th>
                            <th>no working</th>
                            <th>1900229</th>
                            <th> 01 / 04 /2021 </th>
                            <th>kailash soni</th>
                            <th>AAISHA KURREY</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('209');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=209')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>58</th>
                            <th>maja</th>
                            <th>2000128</th>
                            <th> 25 / 03 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh mourya </th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('203');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=203')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000128"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>59</th>
                            <th>maja</th>
                            <th>2000128</th>
                            <th> 25 / 03 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh mourya </th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('204');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=204')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000128"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>60</th>
                            <th>ALWAYS MAKE A NOSIE</th>
                            <th>2000107</th>
                            <th> 04 / 03 /2021 </th>
                            <th>kailash soni</th>
                            <th>NOHAR PRASAD SAHU</th>
                            <th>4TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('202');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=202')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000107"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>61</th>
                            <th>hfd</th>
                            <th>2000121</th>
                            <th> 03 / 03 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('200');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=200')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>62</th>
                            <th>hfd</th>
                            <th>2000121</th>
                            <th> 03 / 03 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('201');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=201')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>63</th>
                            <th>vcv</th>
                            <th>2000055</th>
                            <th> 02 / 02 /2021 </th>
                            <th>kailash soni</th>
                            <th>RINA PRADHAN</th>
                            <th>UKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('197');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=197')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000055"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>64</th>
                            <th>vcv</th>
                            <th>2000055</th>
                            <th> 02 / 02 /2021 </th>
                            <th>kailash soni</th>
                            <th>RINA PRADHAN</th>
                            <th>UKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('198');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=198')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000055"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>65</th>
                            <th>1234567890 1234567890 1234567890 1234567890 1234567890 1234567890 1234567890 1234567890
                                1234567890 1234567890 1234567890 1234567890</th>
                            <th>2000144</th>
                            <th> 02 / 02 /2021 </th>
                            <th>kailash soni</th>
                            <th>Anushka sharma</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('199');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=199')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000144"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>66</th>
                            <th>He is not present from last 1 week</th>
                            <th>2000121</th>
                            <th> 23 / 01 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('193');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=193')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>67</th>
                            <th>He is not present from last 1 week</th>
                            <th>2000121</th>
                            <th> 23 / 01 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('194');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=194')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>68</th>
                            <th>quarrling in school</th>
                            <th>2000121</th>
                            <th> 23 / 01 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('195');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=195')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>69</th>
                            <th>quarrling in school</th>
                            <th>2000121</th>
                            <th> 23 / 01 /2021 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('196');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=196')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>70</th>
                            <th>no Home work</th>
                            <th>2000060</th>
                            <th> 16 / 01 /2021 </th>
                            <th>kailash soni</th>
                            <th>BANSHIDHAR BARETH</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('191');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=191')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000060"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>71</th>
                            <th>no adhar card</th>
                            <th>2000060</th>
                            <th> 16 / 01 /2021 </th>
                            <th>kailash soni</th>
                            <th>BANSHIDHAR BARETH</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('192');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=192')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000060"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>72</th>
                            <th>He is not attentive in class</th>
                            <th>2000113</th>
                            <th> 03 / 01 /2021 </th>
                            <th>kailash soni</th>
                            <th>GAURAV CHAUHAN</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('190');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=190')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000113"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>73</th>
                            <th>she is not studying</th>
                            <th>2000037</th>
                            <th> 17 / 12 /2020 </th>
                            <th>kailash soni</th>
                            <th>RAGINI BANJARE</th>
                            <th>9TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('189');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=189')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000037"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>74</th>
                            <th>hi</th>
                            <th>2000121</th>
                            <th> 23 / 11 /2020 </th>
                            <th>kailash soni</th>
                            <th>umesh </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('188');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=188')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000121"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>75</th>
                            <th>he has not done his homework.</th>
                            <th>2000059</th>
                            <th> 31 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>AAYUSH CHAUHAN</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('187');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=187')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000059"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>76</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('176');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=176')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>77</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('177');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=177')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>78</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('178');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=178')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>79</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('179');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=179')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>80</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('180');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=180')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>81</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('181');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=181')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>82</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed
                                right</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('182');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=182')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>83</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed
                                right</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('183');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=183')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>84</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed
                                right</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('184');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=184')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>85</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed
                                right</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('185');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=185')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>86</th>
                            <th>duck duck rumours sudden trick studies riding rustic 3rd rural reign wish wish to run
                                pretty widows Hayes Disick Irish Irish room issue Isuzu listed
                                right</th>
                            <th>2000332</th>
                            <th> 17 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>Palak Kumari</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('186');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=186')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000332"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>87</th>
                            <th>bad </th>
                            <th>2000220</th>
                            <th> 16 / 10 /2020 </th>
                            <th>kailash soni</th>
                            <th>PRASHANT DUBEY</th>
                            <th>12TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('175');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=175')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000220"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>88</th>
                            <th>stay home no complient</th>
                            <th>2000191</th>
                            <th> 29 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>Abhishek</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('167');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=167')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000191"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>89</th>
                            <th>stay home no complient</th>
                            <th>2000191</th>
                            <th> 29 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>Abhishek</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('168');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=168')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000191"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>90</th>
                            <th>stay home no complient</th>
                            <th>2000191</th>
                            <th> 29 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>Abhishek</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('169');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=169')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000191"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>91</th>
                            <th>stay home no complient</th>
                            <th>2000191</th>
                            <th> 29 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>Abhishek</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('170');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=170')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000191"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>92</th>
                            <th>stay home no complient</th>
                            <th>2000191</th>
                            <th> 29 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>Abhishek</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('171');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=171')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000191"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>93</th>
                            <th>stay home no complient</th>
                            <th>2000191</th>
                            <th> 29 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>Abhishek</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('172');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=172')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000191"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>94</th>
                            <th>stay home no complient</th>
                            <th>2000191</th>
                            <th> 29 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>Abhishek</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('173');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=173')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000191"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>95</th>
                            <th>stay home no complient</th>
                            <th>2000191</th>
                            <th> 29 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>Abhishek</th>
                            <th>7TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('174');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=174')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000191"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>96</th>
                            <th>wesdgf</th>
                            <th>2000027</th>
                            <th> 24 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('162');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=162')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>97</th>
                            <th>wesdgf</th>
                            <th>2000027</th>
                            <th> 24 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('163');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=163')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>98</th>
                            <th>wesdgf
                            </th>
                            <th>2000027</th>
                            <th> 24 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('164');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=164')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>99</th>
                            <th>wesdgf
                            </th>
                            <th>2000027</th>
                            <th> 24 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('165');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=165')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>100</th>
                            <th>wesdgf
                            </th>
                            <th>2000027</th>
                            <th> 24 / 09 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('166');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=166')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>101</th>
                            <th>बहुत गंदा बच्चा है</th>
                            <th>2000120</th>
                            <th> 27 / 06 /2020 </th>
                            <th>kailash soni</th>
                            <th>Ravi Kumar</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('161');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=161')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000120"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>102</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('151');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=151')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>103</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('152');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=152')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>104</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('153');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=153')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>105</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('154');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=154')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>106</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('155');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=155')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>107</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('156');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=156')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>108</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('157');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=157')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>109</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('158');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=158')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>110</th>
                            <th>gffgygffde</th>
                            <th>2000122</th>
                            <th> 11 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('159');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=159')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>111</th>
                            <th>gdhhdhdhshhshshhdhdhdhdhhdhdhhdhhhdhdhhhdh</th>
                            <th>2000122</th>
                            <th> 10 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('148');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=148')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>112</th>
                            <th>gdhhdhdhshhshshhdhdhdhdhhdhdhhdhhhdhdhhhdh</th>
                            <th>2000122</th>
                            <th> 10 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('149');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=149')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>113</th>
                            <th>gdhhdhdhshhshshhdhdhdhdhhdhdhhdhhhdhdhhhdh</th>
                            <th>2000122</th>
                            <th> 10 / 04 /2020 </th>
                            <th>kailash soni</th>
                            <th>ashish yadav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('150');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=150')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000122"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>114</th>
                            <th>Your encouragement inspires me to work hard.</th>
                            <th>2000027</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('139');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=139')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>115</th>
                            <th>Your encouragement inspires me to work hard.</th>
                            <th>2000027</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('140');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=140')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>116</th>
                            <th>Your encouragement inspires me to work hard.</th>
                            <th>2000028</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>KAVITA SURYVANSHI</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('141');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=141')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000028"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>117</th>
                            <th>Your encouragement inspires me to work hard.</th>
                            <th>2000028</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>KAVITA SURYVANSHI</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('142');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=142')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000028"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>118</th>
                            <th>Your encouragement inspires me to work hard.</th>
                            <th>2000029</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>KHILESH KUMAR SAHU</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('143');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=143')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000029"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>119</th>
                            <th>nc</th>
                            <th>2000027</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('144');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=144')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>120</th>
                            <th>nc</th>
                            <th>2000027</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('145');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=145')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>121</th>
                            <th>bsyzgauzbsu</th>
                            <th>2000027</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('146');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=146')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>122</th>
                            <th>bsyzgauzbsu</th>
                            <th>2000027</th>
                            <th> 28 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('147');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=147')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>123</th>
                            <th>काम सही से नहीं करता</th>
                            <th>2000027</th>
                            <th> 27 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>HINU KUMARI LAHRE</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('138');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=138')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000027"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>124</th>
                            <th>vuuuu</th>
                            <th>2000813</th>
                            <th> 01 / 03 /2020 </th>
                            <th>kailash soni</th>
                            <th>Deepak Kelwa</th>
                            <th>12TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('137');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=137')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000813"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>125</th>
                            <th>home work not completed</th>
                            <th>1900736</th>
                            <th> 12 / 02 /2020 </th>
                            <th>kailash soni</th>
                            <th>Sumit</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('135');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=135')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900736"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>126</th>
                            <th>meets</th>
                            <th>1900733</th>
                            <th> 12 / 02 /2020 </th>
                            <th>kailash soni</th>
                            <th>Mahesh</th>
                            <th>UKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('136');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=136')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900733"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>127</th>
                            <th>hlby</th>
                            <th>2000833</th>
                            <th> 07 / 02 /2020 </th>
                            <th>kailash soni</th>
                            <th>DEMO</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('134');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=134')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000833"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>128</th>
                            <th>आपक बच्चा गृह कार्य नहीं करके लाता है कृपया घर पे ध्यान दिया करे</th>
                            <th>2000864</th>
                            <th> 04 / 02 /2020 </th>
                            <th>kailash soni</th>
                            <th>Gulshan Mishra</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('130');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=130')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000864"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>129</th>
                            <th>ggsfacffvjjeg</th>
                            <th>2000864</th>
                            <th> 04 / 02 /2020 </th>
                            <th>kailash soni</th>
                            <th>Gulshan Mishra</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('131');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=131')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000864"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>130</th>
                            <th>check dhkfkidg</th>
                            <th>2000864</th>
                            <th> 04 / 02 /2020 </th>
                            <th>kailash soni</th>
                            <th>Gulshan Mishra</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('132');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=132')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000864"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>131</th>
                            <th>check dhkfkidg</th>
                            <th>2000864</th>
                            <th> 04 / 02 /2020 </th>
                            <th>kailash soni</th>
                            <th>Gulshan Mishra</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('133');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=133')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="2000864"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>132</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('120');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=120')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>133</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('121');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=121')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>134</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('122');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=122')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>135</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('123');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=123')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>136</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('124');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=124')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>137</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('125');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=125')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>138</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('126');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=126')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>139</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('127');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=127')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>140</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('128');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=128')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>141</th>
                            <th>बहुत गंदा लड़का है</th>
                            <th>1900229</th>
                            <th> 15 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('129');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=129')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>142</th>
                            <th>good student</th>
                            <th>1900703</th>
                            <th> 12 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>cheatan</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('115');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=115')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900703"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>143</th>
                            <th>good</th>
                            <th>1900703</th>
                            <th> 12 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>cheatan</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('116');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=116')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900703"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>144</th>
                            <th>good</th>
                            <th>1900703</th>
                            <th> 12 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>cheatan</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('117');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=117')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900703"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>145</th>
                            <th>good</th>
                            <th>1900703</th>
                            <th> 12 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>cheatan</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('118');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=118')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900703"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>146</th>
                            <th>very good student</th>
                            <th>1900703</th>
                            <th> 12 / 12 /2019 </th>
                            <th>kailash soni</th>
                            <th>cheatan</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('119');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=119')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900703"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>147</th>
                            <th>tyyu</th>
                            <th>1800002</th>
                            <th> 07 / 12 /2019 </th>
                            <th>simption</th>
                            <th>ashok gahlot</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('114');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=114')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800002"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>148</th>
                            <th>He is nnvgh</th>
                            <th>1800064</th>
                            <th> 03 / 12 /2019 </th>
                            <th>simption</th>
                            <th>kasif khan</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('113');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=113')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800064"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>149</th>
                            <th>good</th>
                            <th>1900703</th>
                            <th> 11 / 11 /2019 </th>
                            <th>simption</th>
                            <th>cheatan</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('111');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=111')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900703"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>150</th>
                            <th>good</th>
                            <th>1900703</th>
                            <th> 11 / 11 /2019 </th>
                            <th> teacher</th>
                            <th>cheatan</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('112');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=112')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900703"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>151</th>
                            <th>he is veey weak in hindi subject so u fovus on this</th>
                            <th>1900229</th>
                            <th> 08 / 11 /2019 </th>
                            <th>simption</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('110');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=110')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>152</th>
                            <th>hhh</th>
                            <th>1800003</th>
                            <th> 31 / 10 /2019 </th>
                            <th>simption</th>
                            <th>Ranu Ghuraiya</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('109');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=109')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800003"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>153</th>
                            <th>good</th>
                            <th>1900679</th>
                            <th> 09 / 10 /2019 </th>
                            <th>simption</th>
                            <th>demo</th>
                            <th>6TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('106');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=106')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900679"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>154</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('94');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=94')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>155</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('95');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=95')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>156</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('96');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=96')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>157</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('97');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=97')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>158</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('98');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=98')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>159</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('99');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=99')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>160</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('101');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=101')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>161</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('102');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=102')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>162</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('103');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=103')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>163</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('104');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=104')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>164</th>
                            <th>its apsent for 2 days </th>
                            <th>1800041</th>
                            <th> 06 / 10 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('105');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=105')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>165</th>
                            <th>good</th>
                            <th>1900158</th>
                            <th> 25 / 09 /2019 </th>
                            <th>simption</th>
                            <th>SAURABH TRIPATHI</th>
                            <th>11TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('91');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=91')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900158"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>166</th>
                            <th>good</th>
                            <th>1900158</th>
                            <th> 25 / 09 /2019 </th>
                            <th>simption</th>
                            <th>SAURABH TRIPATHI</th>
                            <th>11TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('92');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=92')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900158"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>167</th>
                            <th>good</th>
                            <th>1900158</th>
                            <th> 25 / 09 /2019 </th>
                            <th>simption</th>
                            <th>SAURABH TRIPATHI</th>
                            <th>11TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('93');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=93')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900158"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>168</th>
                            <th>Somu fight with all the students </th>
                            <th>1900597</th>
                            <th> 13 / 08 /2019 </th>
                            <th>simption</th>
                            <th>somu</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('89');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=89')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900597"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>169</th>
                            <th>sir will all student in may call so vary mis behave with me </th>
                            <th>1900159</th>
                            <th> 04 / 08 /2019 </th>
                            <th>simption</th>
                            <th> Riya patel</th>
                            <th>9TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('87');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=87')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900159"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>170</th>
                            <th>hdhd</th>
                            <th>1800085</th>
                            <th> 04 / 08 /2019 </th>
                            <th>simption</th>
                            <th>pooja singh</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('88');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=88')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800085"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>171</th>
                            <th>hgghy</th>
                            <th>1800021</th>
                            <th> 11 / 07 /2019 </th>
                            <th>simption</th>
                            <th>Abhijeet Thakur</th>
                            <th>6TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('86');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=86')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800021"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>172</th>
                            <th>They not come regularly HW </th>
                            <th>1800060</th>
                            <th> 10 / 07 /2019 </th>
                            <th>simption</th>
                            <th>Aarushi Soni</th>
                            <th>UKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('85');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=85')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800060"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>173</th>
                            <th>rddd</th>
                            <th>1900144</th>
                            <th> 06 / 06 /2019 </th>
                            <th>simption</th>
                            <th>ANKIT SHARMA</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('84');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=84')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900144"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>174</th>
                            <th>Not following my advice regarding study</th>
                            <th>1800041</th>
                            <th> 26 / 05 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('82');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=82')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>175</th>
                            <th>Not following my advice regarding study</th>
                            <th>1800041</th>
                            <th> 26 / 05 /2019 </th>
                            <th>simption</th>
                            <th>madhu soni</th>
                            <th>5TH</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('83');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=83')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800041"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>176</th>
                            <th>vkgihohohoh</th>
                            <th>1800062</th>
                            <th> 24 / 05 /2019 </th>
                            <th>simption</th>
                            <th>deepansi kour</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('80');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=80')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800062"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>177</th>
                            <th>vkgihohohoh</th>
                            <th>1800062</th>
                            <th> 24 / 05 /2019 </th>
                            <th>simption</th>
                            <th>deepansi kour</th>
                            <th>LKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('81');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=81')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800062"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>178</th>
                            <th>hi</th>
                            <th>1800090</th>
                            <th> 12 / 05 /2019 </th>
                            <th>simption</th>
                            <th>Aditi Bhargav</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('79');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=79')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800090"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>179</th>
                            <th>good</th>
                            <th>1900229</th>
                            <th> 09 / 05 /2019 </th>
                            <th>simption</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('76');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=76')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>180</th>
                            <th>good</th>
                            <th>1900229</th>
                            <th> 09 / 05 /2019 </th>
                            <th>simption</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('77');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=77')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>181</th>
                            <th>new complaint </th>
                            <th>1900229</th>
                            <th> 09 / 05 /2019 </th>
                            <th>simption</th>
                            <th>VIKAS MODI </th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('78');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=78')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900229"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>182</th>
                            <th>not doing hw properly</th>
                            <th>1800060</th>
                            <th> 03 / 05 /2019 </th>
                            <th>simption</th>
                            <th>Aarushi Soni</th>
                            <th>UKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('74');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=74')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800060"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>183</th>
                            <th>good</th>
                            <th>1800002</th>
                            <th> 09 / 04 /2019 </th>
                            <th>simption</th>
                            <th>ashok gahlot</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('71');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=71')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800002"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>184</th>
                            <th>vvgga</th>
                            <th>1800060</th>
                            <th> 03 / 04 /2019 </th>
                            <th>simption</th>
                            <th>Aarushi Soni</th>
                            <th>UKG</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('70');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=70')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800060"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>185</th>
                            <th>home work not complete</th>
                            <th>1800006</th>
                            <th> 26 / 03 /2019 </th>
                            <th>simption</th>
                            <th>subham soni</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('69');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=69')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800006"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>186</th>
                            <th>good students </th>
                            <th>1800008</th>
                            <th> 12 / 03 /2019 </th>
                            <th>shreya sharma</th>
                            <th>Avik Shrotiya</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('67');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=67')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800008"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>187</th>
                            <th>good student</th>
                            <th>1900103</th>
                            <th> 12 / 03 /2019 </th>
                            <th>shreya sharma</th>
                            <th>QAYNAAT</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('68');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=68')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1900103"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>188</th>
                            <th>demo</th>
                            <th>1800003</th>
                            <th> 10 / 01 /2019 </th>
                            <th>simption</th>
                            <th>Ranu Ghuraiya</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('66');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=66')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800003"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>189</th>
                            <th>demo</th>
                            <th>1800003</th>
                            <th> 10 / 01 /2019 </th>
                            <th>simption</th>
                            <th>Ranu Ghuraiya</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('65');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=65')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800003"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>190</th>
                            <th>demo</th>
                            <th>1800003</th>
                            <th> 10 / 01 /2019 </th>
                            <th>simption</th>
                            <th>Ranu Ghuraiya</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('64');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=64')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800003"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>191</th>
                            <th>testing</th>
                            <th>1800003</th>
                            <th> 10 / 01 /2019 </th>
                            <th>simption</th>
                            <th>Ranu Ghuraiya</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('63');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=63')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800003"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>192</th>
                            <th>complaint</th>
                            <th>1800090</th>
                            <th> 05 / 01 /2019 </th>
                            <th>simption</th>
                            <th>Aditi Bhargav</th>
                            <th>1ST</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('62');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=62')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800090"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>193</th>
                            <th>dhuus</th>
                            <th>1800002</th>
                            <th> 02 / 01 /2019 </th>
                            <th>simption</th>
                            <th>ashok gahlot</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('61');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=61')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800002"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>194</th>
                            <th>dhuus</th>
                            <th>1800002</th>
                            <th> 02 / 01 /2019 </th>
                            <th>simption</th>
                            <th>ashok gahlot</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('60');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=60')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800002"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>195</th>
                            <th>guutde</th>
                            <th>1800002</th>
                            <th> 28 / 12 /2018 </th>
                            <th>simption</th>
                            <th>ashok gahlot</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('59');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=59')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800002"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>196</th>
                            <th>guutde</th>
                            <th>1800002</th>
                            <th> 28 / 12 /2018 </th>
                            <th>simption</th>
                            <th>ashok gahlot</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('58');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=58')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800002"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>197</th>
                            <th>fyutt</th>
                            <th>1800088</th>
                            <th> 28 / 12 /2018 </th>
                            <th>simption</th>
                            <th>Vikky Gupta</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('57');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=57')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800088"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>198</th>
                            <th>improve </th>
                            <th>1800090</th>
                            <th> 26 / 12 /2018 </th>
                            <th>simption</th>
                            <th>Aditi Bhargav</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('56');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=56')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800090"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>



                        <tr align='center'>

                            <th>199</th>
                            <th>not good</th>
                            <th>1800015</th>
                            <th> 25 / 12 /2018 </th>
                            <th>simption</th>
                            <th>Avik Shrotiya</th>
                            <th>NURSERY</th>

                            <td></td>
                            <td>01-01-1970</td>

                            <th><button type="button" onclick="return valid('54');" class="btn btn-danger">Delete</th>
                            <th style="display:none;"><a
                                    href="javascript:post_content('complaint/seen_unseen_staff','id=54')"><button
                                        type="button" class="btn btn-default "></th>
                            <th style="display:none;"><button type="button" class="btn btn-default " value="1800015"
                                    onclick="open_model(this.value)" data-toggle="modal" data-target="#modal-default"
                                    id="student_roll_no">Reply</th>

                        </tr>





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
<!-- /.content -->

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->

<script>
$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>
<script>
function open_model(roll_no) {
    document.getElementById("reply_roll_no").value = roll_no;
}
</script>
@include('common.footer')