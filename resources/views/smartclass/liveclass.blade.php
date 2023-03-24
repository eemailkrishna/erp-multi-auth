  @include('common.header')
  @include('common.navbar')
  <section class="content-header">
      <h1>
          Live Class Management
      </h1>
      <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{url('/smartclass')}}"><i class="fa fa-dashboard"></i> Smart Class</a></li>
          <li class="active"><i class="fa fa-book"></i> Live Class</li>
      </ol>
  </section>
  <section class="content">
      <div class="box box-success ">
          <div class="box-header with-border">

              <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Live Class
                      Panel</b></h3>
          </div>
          <br>
          <div class="box-body">
              <a href="{{url('liveclass-add-class')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#808000;">
                          <div class="inner"><br>
                              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Add LIVE Class</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <a href="{{url('liveclass-add-class')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('liveclass-class-list')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#008080;">
                          <div class="inner"><br>
                              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Live Class List</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <a href="{{url('liveclass-class-list')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>

          </div>
      </div>

  </section>

  @include('common.footer')