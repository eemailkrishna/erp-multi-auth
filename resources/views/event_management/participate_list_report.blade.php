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
<section class="content-header">
    <h1>
        Participant List
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('event')}}"><i class="fa fa-calendar"></i>Event
                Management</a></li>

    </ol>
</section>

<!---********************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
          

            <div style="float: right">
                <a href="{{ url('/event_management/add_participate/') }}" class="btn btn-info btn-sm">Add New
                    Participant</a>

            </div>

            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                    @csrf
                    <div class="col-md-12">
                        <div id="add-participent" class="col-md-12 box-body table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead class="my_background_color">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Participate type</th>
                                        <th>Event Name</th>
                                        <th>House Name</th>
                                        <th>School Participant</th>
                                        <th>Student Name</th>
                                        <th>Student Father Name</th>
                                        <th>Student Mother Name</th>
                                        <th>Student Class</th>
                                        <th>Student Gender</th>
                                        <th>DOB</th>
                                        <th>Category</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($add_particcipents as $user)
                                        <tr>

                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $user->participate_type }}</td>
                                            <td>{{ $user->event_name }}</td>
                                            <td></td>
                                            <td>{{ $user->school_name }}</td>
                                            <td>{{ $user->student_name }}</td>
                                            <td>{{ $user->student_father_name }}</td>
                                            <td>{{ $user->student_mother_name }}</td>
                                            <td>{{ $user->class }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->dateofbirth }}</td>
                                            <td>{{ $user->category }}</td>
                                            <td>  <a href="{{url('/event_management/edit_participate_list_report/'. $user->id)}}"
                                                class="btn btn-info btn-sm">Edit</a></td>
                                            <td>
                                              
                                                <button type="button" onclick="delete_function({{ $user->id }})"
                                                    class="btn btn-info btn-sm">Delete</button>
                                            </td>
                                            <br>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <div id="search-result"></div>
                            </table>
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

<script>
    $(function() {
        $('#example2').DataTable()
    })

    function delete_function(id) {

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this Record!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                
            })
            
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '/event_management/participate_list_report/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    })
                    swal("Poof! Your Entery has been deleted!", {
                        icon: "success",
                    });
                    $( "#add-participent" ).load(window.location.href + " #add-participent" );
                } else {
                    swal("Your Entery is safe!");
                }
            });
    }

//edit Function..
// function edit_function(id) {

// swal({
//         title: "Are you sure?",
//         text: "Once you will edit the record information will Changed !",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
        
//     })
    
//     .then((willDelete) => {
//         if (willDelete) {
//             $.ajax({
//                 url: '/event_management/edit_participate_list_report/' + id,
//                 method: 'get',
//                 success: function(res) {

//                 }
//             })
//             swal("Poof! Your Entery has been deleted!", {
//                 icon: "success",
//             });
//             location.reload();
//         } else {
//             swal("Your Entery is safe!");
//         }
//     });
// }

</script>
