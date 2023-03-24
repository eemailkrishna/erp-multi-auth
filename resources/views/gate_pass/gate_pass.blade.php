 @include('common.header')
 @include('common.navbar')

 <script>
window.scrollTo(0, 0);
 </script>
 <section class="content-header">
     <h1>
         Gate Pass
         <small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Gate Pass</li>
     </ol>
 </section>

 <!-- Main content -->
 <section class="content">
     <!-- Small boxes (Stat box) -->
     <div class="row">

         <a href="{{url('new-gate-pass')}}">
             <div class="col-lg-3 col-xs-6">
                 <div class="small-box" style="background-color:#E32636;">
                     <div class="inner"><br>
                         <h3 style="font-size:20px;margin-left:5px;color:#fff;">New Gate Pass</h3>
                         <p style="margin-left:10px;color:#fff;">Enter</p>
                     </div>
                     <div class="icon">
                         <i class="ion"></i>
                     </div>
                     <a href="{{url('new-gate-pass')}}" class="small-box-footer">More Info <i
                             class="fa fa-arrow-circle-right"></i></a>
                 </div>
             </div>
         </a>
         <a href="{{url('gate-pass-list')}}">
             <div class="col-lg-3 col-xs-6">
                 <div class="small-box" style="background-color:#3B7A57;">
                     <div class="inner"><br>
                         <h3 style="font-size:20px;margin-left:5px;color:#fff;">Gate Pass List</h3>
                         <p style="margin-left:10px;color:#fff;">Enter</p>
                     </div>
                     <div class="icon">
                         <i class="ion"></i>
                     </div>
                     <a href="{{url('gate-pass-list')}}" class="small-box-footer">More Info <i
                             class="fa fa-arrow-circle-right"></i></a>
                 </div>
             </div>
         </a>


     </div>


 </section>

 @include('common.footer')