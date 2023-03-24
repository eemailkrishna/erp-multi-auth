@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>
        Support Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Support</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box box-success">
        <div class="box-header with-border">

            <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
        </div>
        <div class="box-body">

            <a href="{{url('add-query')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#FF1493;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Add Query</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>

                        <a href="{{url('add-query')}}" class="small-box-footer">More
                            info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('query-list')}}">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#FF8C00;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Query List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>

                        <a href="javascript:get_content('customer_support/query_list')" class="small-box-footer">More
                            info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>

</section>

@include('common.footer')