@include('common.header')
@include('common.navbar')


<section class="content-header">
    <h1>
        Account Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/account')}}"><i class="fa fa-inr"></i>Account</a></li>
        <li class="active">Account List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">

            <!-- /.box -->

            <br>

            <div class="box box-success ">
                <div class="box-header with-border">
                    <h3 class="box-title">Account List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>User Name</th>
                                <th>User Type</th>
                                <th>Staff Type</th>
                                <th>Account Holder Name</th>
                                <th>Account Number</th>
                                <th>Bank Name</th>
                                <th>Bank Branch Name</th>
                                <th>Bank IFSC Code</th>
                                <th style="">Edit</th>
                                <th style="">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $acc)
                            <tr>
                                <input type="hidden" class="delete_account_id" value="{{$acc->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$acc->user->name}}</td>
                                <td>{{$acc->user_type}}</td>
                                <td>{{$acc->staff_type}}</td>
                                <td>{{$acc->emp_bank_account_name}}</td>
                                <td>{{$acc->emp_account_no}}</td>
                                <td>{{$acc->emp_bank_name}}</td>
                                <td>{{$acc->emp_branch_name}}</td>
                                <td>{{$acc->emp_ifsc_code}}</td>
                                <td>
                                    <a href="{{ url('/edit-bank-account', $acc->id)}}" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn">Delete</button>
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
    <!-- /.row -->
</section>
@include('common.footer')


<script>
$(document).ready(function() {
    $('.table').DataTable();
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
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deletebtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.delete_account_id').val();
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
                        url: "/delete/" + delete_id,
                        data: data,
                        success: function(response) {
                            swal(response.status, {
                                    icon: "success",
                                })
                                .then((result) => {
                                    location.reload();
                                });
                        }
                    });
                }
            });
    });
});