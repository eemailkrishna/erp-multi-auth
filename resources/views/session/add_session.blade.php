 @include('common.header')
 @include('common.navbar')

 <script type="text/javascript">
$(function() {
    $("#table-data").on('click', 'input.addButton', function() {
        var $tr = $(this).closest('tr');
        var allTrs = $tr.closest('table').find('tr');
        var lastTr = allTrs[allTrs.length - 1];
        var $clone = $(lastTr).clone();
        $clone.find('td').each(function() {
            var el = $(this).find(':first-child');
            var id = el.attr('id') || null;
            if (id) {
                var i = id.substr(id.length - 1);
                var prefix = id.substr(0, (id.length - 1));
            }
        });
        $clone.find('input:text').val('');
        $tr.closest('table').append($clone);
    });
});
 </script>
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
        url: access_link + "session/delete_session.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            //alert_new(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('session/add_session');
            } else {
                alert_new(detail);
            }
        }
    });
}
 </script>
 <script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "session/add_session_api.php",
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
                get_content('session/add_session');
            }
        }
    });
});
 </script>

 <section class="content-header">
     <h1>
         Session Management
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
         <li><a href="{{url('/session')}}"><i class="fa fa-truck"></i>Session </a></li>
     </ol>
 </section>

 <!---********************************************************************************************************************************************************************************************************************************************************-->
 <!-- Main content -->
 <section class="content">
     <!-- Small boxes (Stat box) -->
     <div class="row">
         <!-- general form elements disabled -->
         <div class="box box-primary my_border_top">
             <div class="box-header with-border ">
                 <h3 class="box-title">Add Session</h3>
             </div>
             <!-- /.box-header -->
             <!------------------------------------------------Start Registration form--------------------------------------------------->

             <div class="box-body">
                 @if(Session::has('success'))
                 <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert">X</button>
                     {{Session::get('success')}}
                 </div>
                 @endif
                 <form role="form" action="{{url('add-session')}}" method="post" id="my_form"
                     enctype="multipart/form-data">
                     @csrf

                     <div class="col-md-12">
                         <div class="col-md-6">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label>Add Session<font style="color:red"><b>*</b></font></label>
                                     <center><input type="text" id="date" name="add_session" placeholder="Add session"
                                             value="" class="form-control" required></center>
                                 </div>
                             </div>
                             <div class="col-md-6 ">
                                 <div class="form-group">
                                     <label>Last Session<font style="color:red"><b>*</b></font></label>
                                     <center> <input type="year" name="last_session" value="" class="form-control"
                                             required>
                                     </center>
                                 </div>
                             </div>

                             <div class="col-md-6 ">
                                 <div class="form-group">
                                     <label>Creation Date<font style="color:red"><b>*</b></font></label>
                                     <center><input type="date" name="creation_date" placeholder="" value=""
                                             class="form-control" required></center>
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <center><input type="submit" name="finish" value="Submit" class="btn btn-success" />
                                 </center>
                             </div>
                         </div>



                         <div class="col-md-6">
                             <div class="col-md-2"></div>

                             <div class="col-md-8 box-body table-responsive">
                                 <table id="table-data" class="table table-bordered table-striped">
                                     <thead>
                                         <tr>
                                             <th>S No</th>
                                             <th>Session</th>
                                             <th>Last Session</th>
                                             <th>Creation Date</th>
                                             <th>Delete</th>
                                         </tr>
                                     </thead>

                                     <tbody>
                                         @foreach($sessions as $ses)
                                         <tr>
                                             <input type="hidden" class="delete_session" value="{{$ses->id}}">
                                             <th>{{$loop->iteration}}</th>
                                             <td>{{$ses->session}}</td>
                                             <td>{{$ses->last_session}}</td>
                                             <td>{{$ses->session_creation_date}}</td>
                                             <td>
                                                 <button type="button"
                                                     class="btn btn-danger btn-sm deletesessionbtn">Delete</button>
                                             </td>
                                         </tr>
                                         @endforeach
                                     <tbody>
                                 </table>
                             </div>
                             <div class=" col-md-2">
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
             <!---------------------------------------------End Registration form--------------------------------------------------------->
             <!-- /.box-body -->
         </div>
     </div>
 </section>

 @include('common.footer')
 <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
 <script type="text/javascript">
$(function() {
    $("#date").datepicker({
        dateFormat: 'mm-yy',
        buttonText: 'date'
    });
});
 </script> -->

 <script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deletesessionbtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.delete_session').val();
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
                        url: "/delete-session/" + delete_id,
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
                    // } else {
                    //     swal("Your imaginary file is safe!");
                }
            });
    });
});
 </script>
 <!-- --------------------------------------For-Toast------------------------------ -->
 <script>
$(function() {
    var timeout = 3000; // in miliseconds (3*1000)
    $('.alert').delay(timeout).fadeOut(400);
});
 </script>