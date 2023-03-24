 @include('common.header')
 @include('common.navbar')

 <script>
function for_section(value) {
    $('#student_class_section').html("<option value='' >Loading....</option>");
    if (value != '') {
        $.ajax({
            type: "POST",
            url: access_link + "important_ajax/get_section_all.php?class_name=" + value + "",
            cache: false,
            success: function(detail) {
                $("#student_class_section").html(detail);

            }
        });
    } else {
        $("#student_class_section").html("<option value=''>Select</option>");
    }

}

function student_list() {

    var class_name = document.getElementById('student_class').value;
    var class_section = document.getElementById('student_class_section').value;
    var student_class_stream = document.getElementById('student_class_stream').value;
    var student_class_group = document.getElementById('student_class_group').value;

    var t = 0;
    if (class_name == '11TH' || class_name == '12TH') {
        if (student_class_group != '' && student_class_stream != '') {
            t = 1;
        }
    } else {
        t = 1;
    }
    if (class_name != '' && class_section != '' && t == 1) {
        $("#example").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "smartclass/student_user_password_change_ajax.php?class_name=" + class_name +
                "&class_section=" + class_section + "&student_class_stream=" + student_class_stream +
                "&student_class_group=" + student_class_group + "",
            cache: false,
            success: function(detail) {

                $("#example").html(detail);
            }
        });
    } else {
        $("#example").html('');
    }
}

function for_stream(value2) {
    if (value2 == "11TH" || value2 == "12TH") {
        $("#student_class_stream_div").show();
        $("#student_class_group_div").show();
        $("#student_class_group_subject_div").show();
        $("#student_class_stream").attr('required', true);
        $("#student_class_group").attr('required', true);
    } else {
        $("#student_class_stream_div").hide();
        $("#student_class_group_div").hide();
        $("#student_class_group_subject_div").hide();
        $("#student_class_stream").attr('required', false);
        $("#student_class_group").attr('required', false);
    }
}

function get_group(value1) {
    $('#student_class_group').html("<option value='' >Loading....</option>");
    $.ajax({
        type: "POST",
        url: access_link + "important_ajax/get_group_all.php?stream_name=" + value1 + "",
        cache: false,
        success: function(detail1) {
            $("#student_class_group").html(detail1);
        }
    });

}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    $("#get_content").html(loader_div);
    $.ajax({
        url: access_link + "smartclass/student_user_password_change_api.php",
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
                get_content('smartclass/student_user_password_change');
            } else {
                alert_new("Sorry!!! Some error occured", 'red');
            }
        }
    });
});
 </script>

 <section class="content-header">
     <h1>
         Student Password Update
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/smartclass')}}"><i class="fa fa-dashboard"></i>Smart Class</a></li>
         <li class="active">Student Password Update</li>
     </ol>
 </section>

 <section class="content">
     <div class="row">
         <div class="col-md-3">
             <div class="box box-success " style="padding:10px 10px 10px 10px;">
                 <div class="box-header with-border ">
                     <h3 class="box-title" style="color:teal;">Class List</h3>

                 </div>
                 <br>
                 <div class="box-body table-responsive">
                     <div class="col-md-12">
                         <div class="form-group">
                             <label>Class :</label>
                             <select name="student_class" id="student_class" class="form-control"
                                 onchange="for_section(this.value);for_stream(this.value)" required>
                                 <option value="">Select</option>
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

                         <div class="form-group" id="student_class_stream_div" style="display:none;">
                             <label>Stream</label>
                             <select class="form-control" name="student_class_stream" id="student_class_stream"
                                 onchange="get_group(this.value);">
                                 <option value="">Select Stream</option>
                                 <option value="All">All</option>
                                 <option value="SCIENCE">SCIENCE</option>
                                 <option value="ARTS">ARTS</option>
                                 <option value="Commerce ">Commerce </option>
                             </select>
                         </div>

                         <div class="form-group" id="student_class_group_div" style="display:none;">
                             <label>Group</label>
                             <select class="form-control" name="student_class_group" id="student_class_group">
                                 <option value="">Select Group</option>
                                 <option value="All">All</option>
                             </select>
                             </select>
                         </div>
                         <div class="form-group">
                             <label>Section :</label>
                             <select name="student_class_section" id="student_class_section" class="form-control"
                                 required>
                                 <option value="">Select</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label>&nbsp;</label>
                             <button class="btn btn-success" type="button" onclick="student_list();">Get List</button>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
         <div class="col-md-9">

             <div class="box box-success " style="padding:10px 10px 10px 10px;">
                 <div class="box-header with-border ">
                     <h3 class="box-title" style="color:teal;">Student List</h3>

                 </div>
                 <form method="post" enctype="multipart/form-data" id="my_form">
                     <div class="box-body table-responsive" id="example">
                         <br>
                         <div class="col-md-12">
                             <table class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>S No.</th>
                                         <th>Student Name</th>
                                         <th>Class</th>
                                         <th>User Id</th>
                                         <th>Password</th>
                                         <th>#</th>

                                         <th>SMS Contact</th>
                                     </tr>
                                 </thead>
                             </table>

                         </div>
                 </form>
             </div>
         </div>
     </div>
     </div>
 </section>

 @include('common.footer')