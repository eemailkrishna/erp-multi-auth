@include('common.header')
@include('common.navbar')

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_account(s_no);
    } else {
        return false;
    }
}

function delete_account(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "account/income_or_expence_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                //alert_new('Successfully Deleted');
                get_content('account/income_or_expence_list');
            } else if (res[1] == 'session_not_set') {
                alert_new('Session Expire !!!', 'red');
            } else {
                //  alert_new(detail); 
            }
        }
    });
}

function open_file1(image_type, s_no) {

    $.ajax({
        address: "POST",
        url: access_link + "account/ajax_open_image.php?image_type=" + image_type + "&s_no=" + s_no + "",
        cache: false,
        success: function(detail) {
            $("#mypdf_view").html('');
            $("#mypdf_view").html(detail);
        }
    });
}
</script>
<script>
function for_print() {
    var divToPrint = document.getElementById("mypdf_view");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>

<section class="content-header">
    <h1>
        Account Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('account')}}"><i class="fa fa-inr"></i>Account</a></li>
        <li><a href="{{url('add-income-or-expence-info')}}"><i class="fa fa-user-plus"></i>Add
                Info</a></li>
        <li><i class="Active"></i>List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content" id="here">

    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success ">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></i>S.no.</th>
                                <th></i>Date</th>
                                <th></i>Customer Name</th>
                                <th></i>Contact No</th>
                                <th></i>Address</th>
                                <th></i>Designation</th>
                                <th></i>Amount Type</th>
                                <th></i>Amount</th>
                                <th></i>Bill File</th>
                                <th>Date</th>
                                <th style=""></i>Edit</th>
                                <th style=""></i>Delete</th>
                                <th></i>Print Voucher</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($accountInfo as $data)
                            <tr>
                                <input type="hidden" class="delete_accountInfo_id" value="{{$data->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->date}}</td>

                                <td>
                                    @if($data->user)
                                    {{$data->user->name}}
                                    @else
                                    {{$data->cust_name}}
                                    @endif
                                </td>

                                <td>{{$data->contact_no}}</td>

                                <td>
                                    @if($data->addres)
                                    {{$data->addres->street_address}}
                                    @else
                                    {{$data->address}}
                                    @endif
                                </td>
                                <td>{{$data->designation}}</td>
                                <td>{{$data->amount_type}}</td>
                                <td>{{$data->debit_amount}}{{$data->credit_amount}}</td>
                                <td>
                                    <img src="{{asset('images/account/'.$data->bill_image)}}" width="60px" height="50px"
                                        alt="">
                                </td>
                                <td>{{$data->updated_at}}</td>

                                <td>
                                    <a href="{{ url('/edit-income-or-expence-info-data', $data->id)}}"
                                        class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger accountInfoDeletebtn">Delete</button>
                                </td>
                                <td>
                                <a href="{{ url('print', $data->id) }}" target="_blank" id="print_btn" class="btn btn-success">Print</a>

                                    <!-- <button type="button" class="btn btn-success" onclick="for_print();"><i
                                            aria-hidden="true"></i>Print</button> -->
                                    <!-- <button type="button" class="btn btn-success" onclick="for_print();">Print</button> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</section>

    

<script>
$(function() {
    $('.table').DataTable()

})
</script>

@include('common.footer')

<script>
$(document).ready(function() {
    $('#print_btn').click(function() {
        $('#mypdf_view').print();
    });
});
</script>
<script>
$(function() {
    @if(Session::has('success'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
    }
    toastr.success("{{ session('success') }}")
    @endif
});
</script>

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
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.accountInfoDeletebtn').on('click', function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.delete_accountInfo_id').val();
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this account data !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    var data = {
                        "_token": $('input[name=_token]').val(),
                        "id": delete_id,
                    };
                    $.ajax({
                        type: "get",
                        url: "/delete-income-or-expence-info-data/" + delete_id,
                        data: data,
                        success: function(response) {
                            swal(response.status, {
                                    icon: "success",
                                })
                                .then((result) => {
                                    location.reload();
                                    // $("#example1").load(window.location.href +
                                    //     " #example1");

                                });
                        }
                    });
                }
            });
    });
});
</script>