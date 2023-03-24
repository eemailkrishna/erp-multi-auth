 @include('common.header')
 @include('common.navbar')

 <meta name="csrf-token" content="{{ csrf_token() }}">
 <section class="content-header">
     <h1>
         School Information Management<small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-graduation-cap"></i>Time Table</a>
         </li>
         <li class="active">Add Period</li>
     </ol>
 </section>
 <section class="content">
     <div class="row">
         <div class="box box-primary my_border_top">




             <button type="submit" class="btn btn-primary" id="add_todo">
                 Add Period
             </button>

             <table class="table table-bordered">
                 <thead>
                     <th>Sr.no</th>
                     <th>Period Name</th>
                     <th>Start Time</th>
                     <th>End Time</th>
                     <th>Action</th>
                 </thead>
                 <tbody id="list_todo">
                     @foreach ($todos as $todo)
                         <tr id="list_todo_{{ $todo->id }}">
                             <td>{{ $loop->iteration }}</td>
                             <td>{{ $todo->period_name }}</td>
                             <td>{{ $todo->start_time }}</td>
                             <td>{{ $todo->end_time }}</td>
                             <td>
                                 <button type="button"  onclick="edit_todo({{$todo->id}})"   
                                     class="edit_todo btn btn-sm btn-info ml-1">Edit</button>
                                 <button type="button" id="delete_todo"  onclick="delete_functionn({{$todo->id}})"
                                     class="btn btn-sm btn-danger ml-1">Delete</button>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>


             <!-- The Modal -->

             <body>

                 <div class="modal" id="modal_todo">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <form id="form_todo" action="{{url('time_table/add_class_period-store')}}" method="POST">
                                @csrf
                                 <!-- Modal Header -->
                                 <div class="modal-header">
                                     <h4 class="modal-title" id="modal-title">Modal</h4>
                                 
                                 </div>

                                 <!-- Modal body -->
                                 <div class="modal-body">
                                     
                                     <label for="">Period Name</label>
                                     <input type="text" name="period_name" id="period_name" class="form-control"
                                         placeholder="Period Name">
                                     <label for="">Start Time</label>
                                     <input type="time" name="start_time" id="start_time" class="form-control">
                                     <label for="">End Time</label>
                                     <input type="time" name="end_time" id="end_time" class="form-control">

                                 </div>

                                 <!-- Modal footer -->
                                 <div class="modal-footer">
                                     <button type="submit" class="btn btn-info" id="add_data" onclick="addEmployee()" data-bs-dismiss="modal">Add</button>
                                     <button type="button" class="btn btn-danger"
                                         data-bs-dismiss="modal">Close</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>


                 <div class="modal" id="modal_todo-edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="form_todo" action="{{url('time_table/add_class_period-edit-update')}}" method="post">
                                @csrf
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modal-title">Edit Period</h4>
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal">+</button> --}}
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="edit-id">
                                    <label for="">Period Name</label>

                                    <input type="text" name="period_name" id="period_name-edit" class="form-control"
                                        placeholder="Period Name">
                                    <label for="">Start Time</label>
                                    <input type="time" name="start_time" id="start_time-edit" class="form-control">
                                    <label for="">End Time</label>
                                    <input type="time" name="end_time" id="end_time-edit" class="form-control">

                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info"  onclick="update_todo({{$todo->id}})" data-bs-dismiss="modal">Update</button>
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             </body>
         </div>
     </div>
 </section>
 @include('common.footer')
 <script>
     $(document).ready(function() {
         $.ajaxSetup({
             headers: {
                 'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
             }
         })
     });

     $("#add_todo").on('click', function() {
         $("#form_todo").trigger('reset');
         $("#modal-title").html('Add Period');
         $("#modal_todo").modal('show');
     });


     $(".edit_todo").on('click', function() {
         $("#form_todo").trigger('reset');
         $("#modal-title").html('Add Period');
         $("#modal_todo-edit").modal('show');
     });

     

     function edit_todo(id){      

        $.ajax({
            url:'{{url("time_table/add_class_period-edit")}}/'+id,
            method:'get',
            success: function(res){

                if(res){

                    var period_name = res['period_name'];
                    var start_time = res['start_time'];
                    var end_time = res['end_time'];
                    var id = res['id'];

                    $('#edit-id').val(id);
                    $('#period_name-edit').val(period_name);
                    $('#start_time-edit').val(start_time);
                    $('#end_time-edit').val(end_time);
                }
                else{
                    alert('something went wrong');
                }

            }
            
        })
        
     }
 </script>

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
                        url:'{{url("time_table/add_class_period-edit-delete")}}/'+id,
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
