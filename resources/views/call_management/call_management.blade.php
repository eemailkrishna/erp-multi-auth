  @include('common.header')
  @include('common.navbar')

  <section class="content-header">
      <h1>
          Enquiry Management <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><i class="fa fa-phone-square"></i> Call Management</li>
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


              <a href="{{url('call-student-list')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#808000;">
                          <div class="inner"><br>
                              <h3 style="font-size:22px;margin-left:10px;color:#fff;">Student Call Management</h3>
                              <p style="margin-left:10px;color:#fff;">List</p>
                          </div>
                          <a href="{{url('call-student-list')}}" class="small-box-footer">More Info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
          </div>
      </div>
  </section>

  @include('common.footer')