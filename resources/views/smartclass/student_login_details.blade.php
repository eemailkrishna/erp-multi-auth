 @include("common.header")
 @include('common.navbar')


 <section class="content-header">
     <h1>
         Login Management
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
         <li class="active"><i class="fa fa-list"></i>Login List</li>
     </ol>
 </section>


 <section class="content">

     <div class="box box-success ">
         <div class="box-header with-border">
             <h3 class="box-title">Student's Login List</h3>
         </div>
         <div class="box-body table-responsive">
             <div class="col-md-12">
                 <table id="example1" class="table table-bordered table-striped">
                     <thead>
                         <tr>
                             <th>S No</th>
                             <th>Student Name</th>
                             <th>Class</th>
                             <th>Section</th>
                             <th>Login ID</th>
                             <th>Login Date</th>
                             <th>Login Time</th>

                         </tr>
                     </thead>

                     <tbody>


                     </tbody>

                 </table>
             </div>

         </div>
     </div>
     </div>
 </section>

 @include('common.footer')

 <script>
function for_search() {

    var dataTable = $('#example1').DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "smartclass/student_login_details_fetch.php",
            type: "post"
        }
    });
}
for_search();
 </script>