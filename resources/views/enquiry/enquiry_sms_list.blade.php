@include('common.header')
@include('common.navbar')


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Fees Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('enquiry/enquiry')"><i class="fa fa-money"></i> Enquiry</a></li>
        <li class="active">Enquiry SMS List</li>
    </ol>
</section>

<script>
    function for_feelist() {
        $("#fee_details").html(loader_div);
        var enquiry_type = document.getElementById('enquiry_type').value;
        var from_date = document.getElementById('from_date').value;
        var to_date = document.getElementById('to_date').value;

        if (enquiry_type != '' && from_date != '' && to_date != '') {
            $.ajax({
                type: "POST",
                url: access_link + "enquiry/ajax_enquiry_sms_list.php",
                data: {
                    enquiry_type: enquiry_type,
                    from_date: from_date,
                    to_date: to_date
                },
                cache: false,
                success: function (detail) {
                    $("#fee_details").html(detail);
                }
            });
        } else {
            $("#fee_details").html('');
        }
    }

    function for_check(id) {
        if ($('#' + id).prop("checked") == true) {
            $("." + id).each(function () {
                $(this).prop('checked', true);
            });
        } else {
            $("." + id).each(function () {
                $(this).prop('checked', false);
            });
        }
    }

    function validate() {
        var add1 = 0;
        $(".info").each(function () {
            if ($(this).prop('checked') == true) {
                add1 = parseInt(add1 + 1);
            }
        });
        if (add1 > 0) {
            return true;
        } else {
            alert_new('Please Select Atleast One Option !!!', 'red');
            return false;
        }
    }

    $("#my_form").submit(function (e) {
        e.preventDefault();

        var formdata = new FormData(this);
        window.scrollTo(0, 0);
        loader();
        $.ajax({
            url: access_link + "enquiry/enquiry_sms_list_api.php",
            type: "POST",
            data: formdata,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function (detail) {
                alert_new(detail);
                var res = detail.split("|?|");
                if (res[1] == 'success') {
                    alert_new('Successfully Complete', 'green');
                    get_content('enquiry/enquiry_sms_list');
                }
            }
        });
    });

</script>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->

<form role="form" action="{{url('enquiry_sms_list')}}" method="post" id="my_form">
    <!-- Main content -->
    
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- general form elements disabled -->
            <div class="box box-primary my_border_top">

                <!-- /.box-header -->
                <div class="box-body">

                    <div class="box-body  col-md-12">
                        <div class="col-md-12 col-md-offset-3">

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Enquiry Type</label>
                                    <select class="form-control" name="category" id="category" required>
                                        <option value="">All</option>
                                        <option value="">job</option>
                                        <option value="">admision</option>
                                        <option value="">other</option>
                                       
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <input type="date" name="from_date" id="from_date" oninput="for_feelist();"
                                        class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <input type="date" name="to_date" id="to_date" oninput="for_feelist();"
                                        class="form-control" />
                                        
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-md-offset-3">

                           

                        </div>

                    </div>


                    <div class="col-md-12">&nbsp;</div>

                    <div class="box-body col-md-10 col-md-offset-1" style="overflow:scroll;border:1px solid;"
                        id="fee_details">

                    </div>




                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">

                                <!-- /.box -->

                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Enquiry List</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="my_background_color">
                                                <tr>
                                                    <th>S.no.</th>
                                                    <th>Enquiry Type</th>
                                                    <th>Enquiry Type Other</th>
                                                    <th>Date</th>
                                                    <th>Name</th>
                                                    <th>Father's Name</th>
                                                    <th>Class Name</th>
                                                    <th> Address</th>
                                                    <th> Contact Number</th>
                                                    <th>Next Follow Up Date</th>
                                                    <th>Remark_1</th>
                                                    <th>Previous School Name</th>
                                                    <th> Staff Name </th>
                                                    <th> Remark2 </th>
                                                    <th>Student Medium</th>

                                                    <!-- <th>Contact No 2.</th> -->

                                                    
                                                    <th>Update By</th>
                                                    <th>Date</th>
                                                    <th> Action </th>
                                                    <!-- 		
		<th>Print</th>
    
		<th>Edit</th>
		<th>Delete</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->enquiry_type}}</td>
                                                    <td>{{$item->enquiry_type_other}}</td>
                                                    <td>{{$item->enquiry_date}}</td>
                                                    <td>{{$item->enquiry_name}}</td>
                                                    <td>{{$item->enquiry_father_name}}</td>
                                                    <td>{{$item->select_class_name}}</td>
                                                    <td>{{$item->enquiry_address}}</td>
                                                    <td>{{$item->enquiry_contact_no}}</td>
                                                    <td>{{$item->enquiry_next_follow_up_date}}</td>
                                                    <td>{{$item->enquiry_remark_1}}</td>
                                                    <td>{{$item->previous_school_name}}</td>
                                                    <td>{{$item->enquiry_staff_name}}</td>
                                                    <td>{{$item->enquiry_remark_2}}</td>
                                                    <td>{{$item->student_medium}}</td>
                                                    <td>{{$item->updated_at}}</td>
                                                    <td>{{$item->created_at}}</td>

                                                   
                                                    <td><a href=""><button type="button" class="btn btn-success"
                                                                onclick="window.print();">Print</button></a>
                                                    <a href="{{url('enquiry-edit/'.$item->id)}}"><button
                                                                type="button" class="btn btn-primary">Edit</button></a>
                                                    
                                                   <a href="{{url('/enquiry-delete/'.$item->id)}}"><button
                                                                type="button" class="btn btn-danger">Delete</button></a>
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
                    <!-- /.content -->

                </div>

            </div>









    
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
        </div>
    </section>
</form>


<script>
    $(document).ready(function(){
        $("#category").on('change',function(){
            var category=$(this).val();
$.ajax({
url:"{{route('enquiry_sms_list')}}",
type:GET,
data:{'data':category},
success.function(data){
console.log(data);
}
});
        });

    });
    </script>

<script>
    for_feelist();

</script>
<script>
$(document).ready( function () {
    $('#example1').DataTable();
} );
</script>
@include('common.footer')
