 @include('common.header')
 @include('common.navbar')

 <script>
function student_class(value) {

    $.ajax({
        type: "POST",
        url: access_link + "downloads/ajax_get_student_class.php?student_data=" + value + "",
        cache: false,
        success: function(data2) {
            $("#student_class_section").html("<option value='All'> All </option>" + data2);
        }
    });
}
 </script>
 <script>
function form_submit() {

    $.ajax({
        type: "POST",
        url: access_link + "downloads/download_userid_password.php",
        data: $("#my_form").serialize(),
        success: function(data1) {

            $('#get_content').html(data1);

        }
    });
}
 </script>
 </head>

 <section class="content-header">
     <h1>
         Downloads Management
         <small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/download')}}"><i class="fa fa-phone-square"></i>Download panel</a></li>
         <li class="active"><i class="fa fa-user-plus"></i>User Id And Password</li>
     </ol>
 </section>


 <!---******************************************************************************************************-->
 <section class="content">
     <!-- Small boxes (Stat box) -->
     <div class="row">
         <div class="box box-primary my_border_top">
             <div class="box-header with-border ">
                 <h3 class="box-title">User Id And Password</h3>
             </div>
             <div class="box-body">
                 <form role="form" method="post" id="my_form" enctype="multipart/form-data">

                     <div class="col-md-12">
                         <!-- /.box -->

                         <div class="box box-success">
                             <div class="box-header with-border">
                                 <div class="col-md-2"></div>
                                 <div class="col-md-6">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <th><b style="font-size:15px">Choose Class</b></th>
                                             <select name="student_category" id="std_category" class="form-control"
                                                 onchange="student_class(this.value);">
                                                 <option value="All">All</option>
                                                 <option value="NURSERY">NURSERY</option>
                                                 <option value="LKG">LKG</option>
                                                 <option value="UKG">UKG</option>
                                                 <option value="1ST">1ST</option>
                                                 <option value="2ND">2ND</option>
                                                 <option value="3RD">3RD</option>
                                                 <option value="4TH">4TH</option>
                                                 <option value="5TH">5TH</option>
                                                 <option value="6TH">6TH</option>
                                                 <option value="7TH">7TH</option>
                                                 <option value="8TH">8TH</option>
                                                 <option value="9TH">9TH</option>
                                                 <option value="10TH">10TH</option>
                                                 <option value="11TH">11TH</option>
                                                 <option value="12TH">12TH</option>
                                             </select>
                                         </div>
                                     </div>

                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <th><b style="font-size:15px">Section</b></th>
                                             <select class="form-control" name="student_class_section"
                                                 id="student_class_section">
                                                 <option value="All">All</option>
                                             </select>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-2">
                                     <label>Order By</label>
                                     <select class="form-control" name="order_by" id="order_by">
                                         <option value="">Select</option>
                                         <option value="student_name">Student Name</option>
                                         <option value="student_father_name">Father Name</option>
                                         <option value="school_roll_no">School Roll No</option>
                                         <option value="student_admission_number">Admission No</option>
                                         <option value="student_scholar_number">Scholar No</option>
                                         <option value="student_registration_number">Registration No</option>
                                         <option value="student_enrollment_number">Enrollment No</option>
                                     </select>
                                 </div>

                                 <div class="col-md-2"></div>
                                 <div class="col-md-12">
                                     <center><input type="button" name="submit" onclick="form_submit();" value="Submit"
                                             class="btn btn-primary"></center>
                                 </div>
                             </div>
                 </form>
             </div>
             <!-- /.box-body -->
         </div>

         <!-- /.box -->
     </div>
     </form>
     <!-- /.col -->
     </div>
     <!-- /.row -->
 </section>

 @include('common.footer')