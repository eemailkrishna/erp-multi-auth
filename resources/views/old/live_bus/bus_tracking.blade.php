  @include('common.header')
  @include('common.navbar')

  <script>
window.scrollTo(0, 0);
  </script>
  <section class="content-header">
      <h1>
          User Management
          <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><i class="fa fa-photo"></i>Live Bus</li>
      </ol>
  </section>
  <!-- Main content -->
  <section class="content">
      <div class="box box-success">
          <div class="box-header with-border">

              <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
              </h3>
          </div>
          <div class="box-body">

              <a href="{{url('bus-password-change')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#E32636;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus ID-Password</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('bus-password-change')}}" class="small-box-footer">More
                              info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('bus-location-current')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:	#551B8C;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus Current Location</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <a href="{{url('bus-location-current')}}" class="small-box-footer">More info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('bus-location-live')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:	#808000;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus Live Location</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <a href="{{url('bus-location-live')}}" class="small-box-footer">More
                              info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('bus-location-route')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:	#808080;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus Location Route</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <a href="{{url('bus-location-route')}}" class="small-box-footer">More
                              info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>


          </div>
      </div>
  </section>

  @include('common.footer')