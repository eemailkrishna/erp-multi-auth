 @include('common.header')
 @include('common.navbar')

 <script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    $("#get_content").html(loader_div);
    $.ajax({
        url: access_link + "live_bus/bus_password_change_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete!!!', 'green');
                get_content('live_bus/bus_password_change');
            } else {
                alert_new("Sorry!!! Some error occured", 'red');
            }
        }
    });
});
 </script>

 <section class="content-header">
     <h1>
         Bus Password Update
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/live-bus')}}"><i class="fa fa-dashboard"></i>Live Bus</a></li>
         <li class="active">Bus Password Update</li>
     </ol>
 </section>

 <section class="content">
     <div class="row">
         <div class="col-md-12">

             <div class="box box-success " style="padding:10px 10px 10px 10px;">
                 <div class="box-header with-border ">
                     <h3 class="box-title" style="color:teal;">Bus List</h3>

                 </div>
                 <form method="post" enctype="multipart/form-data" id="my_form">
                     <div class="box-body table-responsive" id="example">
                         <br>
                         <div class="col-md-12">
                             <table class="table table-bordered table-striped" style="width:100%">
                                 <thead>
                                     <tr>
                                         <th>S No.</th>
                                         <th>Bus Name</th>
                                         <th>Registration NUmber</th>
                                         <th>Bus NUmber</th>
                                         <th>Bus Id</th>
                                         <th>Password</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                     <tr align='center'>


                                         <th>1</th>
                                         <th>BHARAT BENZ</th>
                                         <th>MH19TS0001</th>
                                         <th>MH19TS0001</th>

                                         <td><input type="text" value="Mdsschool" name="bus_login_id[]"
                                                 class="form-control" minlength="5"><input type="hidden" value="3"
                                                 name="s_no_hidden[]" readonly></td>
                                         <td><input type="text" value="123456" name="bus_login_password[]"
                                                 class="form-control" minlength="5"></td>


                                     </tr>
                                 </tbody>
                             </table>
                             <div class="col-md-12">
                                 <center><input type="submit" name="submit" value="Password Update"
                                         class="btn btn-success" /></center>
                             </div>
                         </div>
                 </form>
             </div>
         </div>
     </div>
     </div>
 </section>

 @include('common.footer')