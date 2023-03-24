  @include('common.header')
  @include('common.navbar')

  <section class="content-header">
      <h1>
          Study Material Management
      </h1>
      <ol class="breadcrumb">
          <li><a href="{{url('/')}}><i class=" fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i>Smart Class</a></li>
          <li class="active">Study Material</li>
      </ol>
  </section>
  <section class="content">
      <div class="box box-success ">
          <div class="box-header with-border">
              <h3 class="box-title" style="color:teal;">Study Material Management</h3>
          </div>
          <br>
          <div class="box-body">
              <a href="{{url('study-material-add')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#808000;">
                          <div class="inner"><br>
                              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Add Material</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <a href="{{url('study-material-add')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a><a href="{{url('study-material-list')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#800080;">
                          <div class="inner"><br>
                              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Material List</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <a href="{{url('study-material-list')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>




          </div>
      </div>
      </div>


  </section>

  @include('common.footer')