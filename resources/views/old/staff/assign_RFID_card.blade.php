@include('common.header')
@include('common.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
{{-- <script type="text/javascript">
    function for_list() {
        $("#example2").html(loader_div);
        var emp_categories = document.getElementById("emp_categories").value;
        //	alert(emp_categories);
        $.ajax({
            type: "POST",
            url: access_link + "staff/ajax_rfid_get.php?emp_categories=" + emp_categories + "",
            cache: false,
            success: function(detail) {

                $('#example2').html(detail);
                //$("#click").click();
            }
        });
    }
    $("#my_form").submit(function(e) {
        e.preventDefault();
        $('#modal-default').modal('hide');

        var formdata = new FormData(this);

        $.ajax({
            url: access_link + "staff/rfid_card_generate_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail) {
                var res = detail.split("|?|");
                //   alert(res[1]);
                var emp_categories = document.getElementById("emp_categories").value;
                $("#staff_rf_id_number").val("");

                for_list();

            }
        });
    });
</script> --}}

<section class="content-header">
    <h1>
        Employee Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
        <li class="active">Staff RFID Card</li>
    </ol>
</section>


<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Assign RFID</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Staff type :</label>
                            <select name="staff_type" id="emp_categories" class="form-control" onchange="for_list();"
                                required>
                                <option value=" ">All</option>
                                @if (count($users) > 0)
                                    @foreach ($users as $staff)
                                        <option value="{{ $staff->id }}">{{ $staff->emp_categories }} </option>
                                    @endforeach

                                @endif
                                {{-- <option value="Teaching">Teaching </option>
                                <option value="Non Teaching">Non Teaching </option> --}}
                            </select>
                        </div>
                    </div>





                    <div class="col-xs-12">
                        <!-- /.box -->

                        <div class="box box-success">
                            <div class="box-header with-border">
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive" id="example2">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Staff Name</th>
                                            <th>Employee ID</th>
                                            <th>Designation</th>
                                            <th>Contact</th>
                                            <th>Rfid No.</th>

                                            <th>Update By</th>
                                            <th>Date</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @foreach ($users as $data)
                                        <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->emp_name }}</td>
                                                <td>{{ $data->emp_id_prefix }}</td>
                                                <td>{{ $data->emp_designation }}</td>
                                                <td>{{ $data->emp_mobile_new }}</td>
                                                <td>{{ $data->emp_rf_id_no }}</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary rfid" data-toggle="modal" data-target="#myModal"> Allot RFID NO</button>
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
                    <!-- modal-box-open -->
               <div class="modal fade" id="myModal" role="dialog">
                <form role="form" action="{{ url('staff.assign_RFID_card') }}" method="POST" enctype="multipart/form-data" id="my_form">
@csrf

                        {{-- <div class="modal fade"> --}}
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header my_background_color">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <center>
                                            <h4 class="modal-title"><b>ADD RFID CARD NO</b></h4>
                                        </center>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label>Staff Name<font style="color:red"><b>*</b></font></label>
                                            <input type="text" class="form-control" value="{{ $data->emp_name }}" name="staff_name" id="staff_name"
                                                readonly />
                                        </div>
                                        <div class="form-group" style="display:none">
                                            <input type="hidden" class="form-control" name="employee_id"
                                                id="employee_id" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Add RFID</label>
                                            <input type="text" name="staff_rf_id_number" value="{{ $data->emp_rf_id_no }}" id="staff_rf_id_number"
                                                autofocus class="form-control" />
                                        </div>
                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-danger pull-left"
                                            data-dismiss="modal">Close</button>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>

                    </form>
               </div>
                    <!-- modal-box-end -->
                    <div class="col-md-12" style="display:none  ">
                        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
                    </div>
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>


<script>
	function open_model(roll_no){
	var student=document.getElementById("emp_name_"+roll_no).value;
	document.getElementById("staff_name").value=student;
	document.getElementById("employee_id").value=roll_no;
	}

</script>
{{-- // dropdown filter ajax query in category start --}}
<script>
$(document).ready(function() {
        $("#emp_categories").on('change', function() {
            var value = $(this).val();
            $.ajax({
                url: "{{ route('rfidcard-assign') }}",
                type: "GET",
                data: {
                    'staff_type': value
                },
                success: function(data) {
                    var users = data.users;
                    var html = '';
                    if (users.length > 0) {
                        for (let i = 0; i < users.length; i++) {
                            html += '<tr>\
                <td> ' +(i+1) + ' </td>\
                <td> ' + users[i]['emp_name'] + ' </td>\
                <td> '+ users[i]['emp_id_prefix']+'</td>\
                <td> '+ users[i]['emp_designation']+'</td>\
                <td> '+ users[i]['emp_mobile_new']+'</td>\
                <td> '+ users[i]['emp_rf_id_no']+'</td>\
                <td> </td>\
                <td> </td>\
                <td><button type="button" class="btn btn-primary rfid" data-toggle="modal" data-target="#myModal"> Allot RFID NO</button>\
                 </td>\
                 </tr>'
                        }
                    } else {
                        html += '<tr>\
            <td colspan="10" style="color:red;" align="center">No data found</td>\
            </tr>';
                    }
                    $("#tbody").html(html);
                }
            });
        });
    });

    </script>
{{-- // dropdown filter ajax query in category end --}}








<script>
    for_list();
</script>
<script>
    $(function() {
        $('#example1').DataTable()

    })
    </script>
@include('common.footer')
