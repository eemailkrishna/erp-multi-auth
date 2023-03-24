@include('common.header')
@include('common.navbar')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Fees Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/fees')}}"><i class="fa fa-money"></i> Fees</a></li>
        <li class="active">Student Fees List By RFID</li>
    </ol>
</section>

<script>
function valid(s_no, roll_no, total_months) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_fee(s_no, roll_no, total_months);
    } else {
        return false;
    }
}

function delete_fee(s_no, roll_no, total_months) {
    $.ajax({
        type: "POST",
        url: access_link + "fees_monthly/student_fee_delete.php?s_no=" + s_no + "&roll_no=" + roll_no +
            "&total_months=" + total_months + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert('Successfully Deleted');
                get_content('fees_monthly/student_fee_list');
            } else {
                alert(detail);
            }
        }
    });
}

function fill_detail(value) {

    $('#rfid_no').val(value);
    get_details();

}

function get_details() {
    var rfid_no = document.getElementById('rfid_no').value;
    var len = rfid_no.length;
    if (len == 10) {
        $('#rfid_no').val('');
        $("#particular_details").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "fees_monthly/ajax_student_fee_list_by_rfid.php?rfid_no=" + rfid_no + "",
            cache: false,
            success: function(data) {
                $('#particular_details').html(data);
            }
        });
    }
}
</script>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">

            <!-- /.box -->

            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <div class="col-md-6 col-md-offset-3">

                        <h2>Fee Details Panel</h2>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-5">
                                    <input type="text" name="" id="rfid_no" class="form-control"
                                        oninput="get_details();" placeholder="RFID No." autofocus required />
                                </div>
                                <div class="col-md-5">
                                    <select name="" id="" class="form-control select2" style="width:100%;"
                                        onchange="fill_detail(this.value);">
                                        <option value="">Select Student</option>
                                        <option value="IES0001PK">Palak Kumari[]-[2ND-B]-[Krishna Sahani-9876543210]
                                        </option>
                                        <option value="0004279640">joy[126574]-[3RD-A]-[peter-8893387594]</option>
                                        <option value="01">Humaira[18]-[UKG-A]-[Palash-1316543133]</option>
                                        <option value="0014944965">umesh [30]-[UKG-A]-[abhishek-9144555977]</option>
                                        <option value="0011996285">Anshu[7]-[UKG-A]-[Vijay-9144555977]</option>
                                        <option value="0010290419"> BABALI SAHU[2]-[UKG-A]-[SHAIKH-7978988989]</option>
                                        <option value="0014944965">balveer singh[12372]-[LKG-A]-[sukhvinder
                                            singh-9144555977]</option>
                                        <option value="0014806624">ishan kumar[120009]-[2ND-A]-[rohit kumar-9816870719]
                                        </option>
                                        <option value="0012660095">Mayur Mangesh Padvi[120012]-[2ND-A]-[Mangesh Gorakh
                                            Padvi-7773954846]</option>
                                        <option value="0003757438">Lalu Kumar[]-[7TH-A]-[Raju Kumar-678912345]</option>
                                        <option value="0003757961">sona[120026]-[2ND-A]-[rajesh-9816870719]</option>
                                        <option value="577711111111111">Prashant KUMAR[12561]-[5TH-A]-[Rammu
                                            lal-7744447774]</option>
                                        <option value="0009240208">aashu []-[3RD-A]-[-1234567891]</option>
                                        <option value="12345">Rituraj[126593]-[2ND-A]-[mitu raj-9875455522]</option>
                                        <option value="744444740000">Prashant KUMAR[]-[2ND-A]-[Rammu lal-7748908646]
                                        </option>
                                        <option value="0014816326">Akshay[]-[8TH-A]-[ABC-1234567890]</option>
                                        <option value="0005981246">Gopi[126572]-[8TH-A]-[BIKSHAM -9052483352]</option>
                                        <option value="No">Fig[]-[7TH-A]-[Niraj Kumar -458725]</option>
                                        <option value="272">shreyansh[401396]-[1ST-A]-[Neeraj kumar-9911587539]</option>
                                        <option value="0010317118">Farhan khan[1265701]-[8TH-A]-[Riyaz
                                            khan-458963248327]</option>
                                        <option value="0002847890">Ariz[2]-[UKG-A]-[-]</option>
                                        <option value="0012022978">Amit rao[]-[2ND-A]-[Sahab rao-9450673349]</option>
                                        <option value="0007113750">Aarunya Raj Sinha[]-[UKG-A]-[tret-87874545454]
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" name="" id="" class="btn btn-default my_background_color"
                                        onclick="get_content('fees_monthly/student_fee_list_by_rfid');">Reset</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12" id="particular_details">

                    </div>
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
<script>
$(function() {
    $('.select2').select2();
});
</script>
@include('common.footer')