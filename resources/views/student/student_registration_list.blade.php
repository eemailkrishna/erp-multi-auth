@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>
        Student Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('student/students')"><i class="fa fa-graduation-cap"></i> Student</a></li>
        <li class="active">Student Registration List</li>
    </ol>
</section>



<!---******************************************************************************************************-->
<section class="content">
    <!-- Small boxes (Stat box) -->

    <div class="row">
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Registration List</h3>
            </div>
            <div class="box-body ">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Class</label>
                        <select name="student_class" onchange="for_list(this.value);" class="form-control" required>
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
                <div class="col-md-12" id="heree">
                    <!-- /.box -->

                    <div <div class="box box-success">
                        <div class="box-header with-border">
                        </div>

                        <div class="box-body table-responsive" id="search_list">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>student Name</th>
                                        <th>Father's Name</th>
                                        <th>Class</th>
                                        <th>Father Contact No.</th>
                                        <th>Registration Date</th>
                                        <th>Reg. No.</th>
                                        <th>Update By</th>
                                        <th>Date</th>
                                        <th>Make Admission</th>
                                        <th>Print</th>
                                        <th>Print Fee Reciept</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if($item->user)
                                                    {{$item->user->name}}
                                                @endif
                                            </td>
                                            <td>{{$item->father_name}}</td>
                                            <td>
                                                @if($item->class)
                                                        {{ $item->class->class }}
                                                @endif
                                            </td>   
                                            <td>{{$item->father_contact }}</td>
                                            <td>{{ $item->doa }}</td>
                                            <td>{{ $item->roll_no }}</td>
                                            <td>{{ $item->block }}</td> 
                                            <td>{{ $item->student->doa ?? 'None' }}</td>
                                            <td>
                                                <a href="{{ url('student/admission-edit/'.$item->id) }}"class="btn btn-info btn-sm">Make
                                                    Admission</a>
                                            </td>
                                            <td>
                                                <a href=""class="btn btn-info btn-sm"
                                                    onclick="window.print()">Print</a>
                                            </td>
                                            <td>
                                                <a href=""class="btn btn-info btn-sm">Print Fee Reciept</a>
                                            </td>
                                            <td>

                                                <button type="button" onclick="delete_functionn({{ $item->id }})"
                                                    class="btn btn-info btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
</section>
<!-- /.row -->
<script>
    var msg = '{{ Session::get('lavi') }}';
    var exist = '{{ Session::has('lavi') }}';
    if (exist) {
        alert(msg);
    }
</script>
@include('common.footer')
{{-- <script>
    $(function() {
        for_list('All');
    })

    function for_list(student_class) {
        var dataTable = $('#example1').DataTable({
            destroy: true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: access_link + "student/student_registration_list_fatch.php?student_class=" + student_class,
                type: "post"
            }
        });
    }
</script> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function delete_functionn(id) {
        // alert(id);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '/student/student_registration_list/' + id,
                        method: 'get',
                        success: function(res) {

                        }
                    });
                    $( "#heree" ).load(window.location.href + " #heree" );
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    location.reload();
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>
