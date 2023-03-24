@include('common.header')
@include('common.navbar')
</head>
 <meta name="csrf-token" content="{{csrf_token()}}"> 
 <section class="content-header">
    <h1>
        Time Table Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-clock-o"></i> Time Table</a></li>
        <li class="active">Time Table Generate</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Time Table Generate</h3>
            </div>
             <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">

                <form role="form" method="post" enctype="multipart/form-data" id="my_form" action="{{url('/')}}">
					@csrf				
                    <div class="col-md-12">
                        <!-- /.box -->

                        <div <div class="box box-success">
                            <div class="box-header with-border">
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="table-data" class="table table-bordered table-striped" style="width:3000px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th colspan="2">
                                                <center>Monday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Tuesday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Wednesday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Thursday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Friday</center>
                                            </th>
                                            <th colspan="2">
                                                <center>Saturday</center>
                                            </th>
                                        </tr>
                                        <tr>
                                            
                                            <th>
                                                <center>Period Name</center>
                                            </th>
                                            <th>
                                                <center>Time From</center>
                                            </th>
                                            <th>
                                                <center>Time To</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Subject Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Teacher Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Subject Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Teacher Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Subject Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Teacher Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Subject Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Teacher Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Subject Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Teacher Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Subject Name</center>
                                            </th>
                                            <th style="width:200px">
                                                <center>Teacher Name</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="period_list">

                                       @foreach ($todoss as $todoo)
                                            <tr id="list_todo_{{ $todoo->id }}">
                                                <td><input type="text" value="{{ $todoo->period_name }}"></td>
                                              					 
                                                <td><input type="time" value="{{ $todoo->time_from }}"></td>
                                                <td><input type="time" value="{{ $todoo->time_to }}"></td>
                                                <td><input type="text" value=" {{ $todoo->monday_subject_name }}">
                                                </td>
                                                <td><input type="text" value="{{ $todoo->monday_teacher_name }}">
                                                </td>
                                                <td><input type="text" value="{{ $todoo->tuesday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->tuesday_teacher_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->wednesday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->wednesday_teacher_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->thursday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->thursday_teacher_name }}">
                                                    </<td>
                                                <td><input type="text"value="{{ $todoo->friday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->friday_teacher_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->saturday_subject_name }}">
                                                </td>
                                                <td><input type="text"value="{{ $todoo->saturday_teacher_name }}">
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
					                  
                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')