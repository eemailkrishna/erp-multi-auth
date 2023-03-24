@include('common.header')
@include('common.navbar')

<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "account/add_account_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {

            var res = detail.split("|?|");
            if (res[1] == 'success') {
                //alert_new('Successfully Complete');
                get_content('account/account_list');
            }
        }
    });
});
</script>
<section class="content-header">
    <h1>
        Account Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/account')}}"><i class="fa fa-inr"></i>Account</a></li>
        <li><a href="{{url('/account-list')}}"><i class="fa fa-list"></i>Account List</a></li>
        <li class="active">Edit Account</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning  ">
            <div class="box-header with-border ">
                <h3 class="box-title" style=" color: red;"> Bank Account Update Form </h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="col-md-12">
                <form action="{{url('edit-bank-account')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$account->id}}" class="form-control" required>

                    <input type="hidden" name="user_id" value="{{$account->user_id}}" class="form-control" required>

                    <div class="col-md-4 ">

                        <div class="form-group">
                            <label>Account Holder Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" pattern="^[a-zA-Z ]*$" name="bank_account_holder_name"
                                value="{{$account->emp_bank_account_name}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Account Number<font style="color:red"><b>*</b></font></label>
                            <input type="number" pattern="^[0-9]*$" name="bank_account_no" value="{{$account->emp_account_no}}"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bank Name<font style="color:red"><b>*</b></font></label>
                            <input type="text" pattern="^[a-zA-Z ]*$" name="bank_name" value="{{$account->emp_bank_name}}" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bank Branch Name</label>
                            <input type="text" pattern="^[a-zA-Z0-9 ]*$" name="bank_branch_name" value="{{$account->emp_branch_name}}"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bank IFSC Code</label>
                            <input type="text" pattern="^[A-Z]{4}0[A-Z0-9]{6}$" name="bank_ifsc_code" value="{{$account->emp_ifsc_code}}"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <center><button type="submit" class="btn btn-primary">Update</button></center>

                        <!-- <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" /></center> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('common.footer')