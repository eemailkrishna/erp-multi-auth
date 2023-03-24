  @include('common.header')
  @include('common.navbar')

  <script>
window.scrollTo(0, 0);
  </script>
  <section class="content-header">
      <h1>
          Sports Management
          <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Sport Management</li>
      </ol>
  </section>
  <!-- Main content -->
  <section class="content">
      <div <div class="box box-success">
          <div class="box-header with-border">

              <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
              </h3>
          </div>
          <div class="box-body">
              <a href="{{url('add-sports')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#E32636;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Sports</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('add-sports')}}" class="small-box-footer">More Info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <!-- <a href="{{url('sports-type')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#9F2B68;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Sports Type</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('sports-type')}}" class="small-box-footer">More Info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a> -->
              <a href="{{url('age-category')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#D46A0C;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Age Category</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('age-category')}}" class="small-box-footer">More Info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('add-participate')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#3B7A57;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Participate</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('add-participate')}}" class="small-box-footer">More Info
                              <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('participate-list')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#0CA7D4;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Participate List</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('participate-list')}}" class="small-box-footer">More Info
                              <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('team-creation')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#EA60B4;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Team Creation</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('team-creation')}}" class="small-box-footer">More Info <i
                                  class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>
              <a href="{{url('/team-creation-list')}}">
                  <div class="col-lg-3 col-xs-6">
                      <div class="small-box" style="background-color:#F85373;">
                          <div class="inner"><br>
                              <h3 style="font-size:20px;margin-left:5px;color:#fff;">Team Creation List</h3>
                              <p style="margin-left:10px;color:#fff;">Enter</p>
                          </div>
                          <div class="icon">
                              <i class="ion"></i>
                          </div>
                          <a href="{{url('/team-creation-list')}}" class="small-box-footer">More
                              Info <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </a>

          </div>
      </div>
      <!-- <div <div class="box box-success" > -->
      <!--<div class="box-header with-border">-->

      <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
      <!--</div>-->
      <!--<div class="box-body">-->




      <!--</div>-->
      <!-- </div>-->
      <!-- <div <div class="box box-success" >-->
      <!--<div class="box-header with-border">-->

      <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
      <!--</div>-->
      <!--<div class="box-body">-->



      <!--</div>-->
      <!-- </div>-->
  </section>

  @include('common.footer')