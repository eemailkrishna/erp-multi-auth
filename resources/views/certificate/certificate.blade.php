 @include('common.header')
 @include('common.navbar')

 <script>
window.scrollTo(0, 0);
 </script>



 <!-- Main content -->
 <section class="content">
     <div class="box box-success ">
         <div class="box-header with-border">

             <section class="content-header">
                 <h1>
                     Certificate Management <small>Control Panel</small>
                 </h1>
                 <ol class="breadcrumb">
                     <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                     <li class="active">Certificate</li>
                 </ol>
             </section>
             <!-- Main content -->
             <section class="content">

                 <div class="box box-success ">
                     <div class="box-header with-border">


                         <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main
                                 Panel</b>
                         </h3>
                     </div>
                     <div class="box-body">


                         <a href="{{url('certificate/character_certificate_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#804040;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">CC Form</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/character_certificate_form')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/character_certificate_list')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#804040;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">CC List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/character_certificate_list')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/event_certificate_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#9F2B68;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Event</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/event_certificate_form')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/event_certificate_list')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#9F2B68;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Event List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/event_certificate_list')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/sport_certificate_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#E32636;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Sports </h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/sport_certificate_form')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/sport_certificate_list')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#E32636;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Sports List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/sport_certificate_list')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>

                         <!-- <a href="{{url('certificate/character_certificate_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#804040;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">CC Form</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/character_certificate_form')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a> -->
                         <!-- <a href="javascript:get_content('certificate/character_certificate_list')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#804040;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">CC List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/character_certificate_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a> -->
                         <!-- <a href="javascript:get_content('certificate/event_certificate_form')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#9F2B68;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Event</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/event_certificate_form')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/event_certificate_list')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#9F2B68;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Event List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/event_certificate_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a> -->
                         <!-- <a href="javascript:get_content('certificate/sport_certificate_form')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#E32636;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Sports </h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/sport_certificate_form')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/sport_certificate_list')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#E32636;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Sports List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/sport_certificate_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a> -->



                         <a href="{{url('certificate/tc_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#3F7ED0;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">TC Form <small
                                                 style="color:#fff;">(State Board)</small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/tc_form')}}" class="small-box-footer">More Info <i
                                             class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>

                         <!-- <a href="javascript:get_content('certificate/tc_form')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#3F7ED0;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">TC Form <small
                                                 style="color:#fff;">(State Board)</small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/tc_form')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a> -->

                         <a href="{{url('certificate/tc_list')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#3F7ED0;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">TC List <small
                                                 style="color:#fff;">(State Board)</small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/tc_list')}}" class="small-box-footer">More Info <i
                                             class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/bonafied_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#138D75;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Bonafied<small
                                                 style="color:#fff;"></small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/bonafied_form')}}" class="small-box-footer">More Info
                                         <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/bonafied_certificate_list')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#138D75;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Bonafied List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/bonafied_certificate_list')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/tutionfee_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#FF7E00;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Tu.Fee Cert.<small
                                                 style="color:#fff;"></small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>

                                     <a href="{{url('certificate/tutionfee_form')}}" class="small-box-footer">More Info
                                         <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/tutionfee_certificate_list')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#FF7E00;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Tu.Fee Cer.List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/tutionfee_certificate_list')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/annualfee_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#6C3483;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Ann.Fee Cert.<small
                                                 style="color:#fff;"></small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/annualfee_form')}}" class="small-box-footer">More Info
                                         <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/annualfee_certificate_list')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#6C3483;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Ann.Fee Cer.List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/annualfee_certificate_list')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/caste_certificate_form')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#85929E;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Caste Cert.<small
                                                 style="color:#fff;"></small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/caste_certificate_form')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/caste_certificate_list')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#85929E;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Caste Cer.List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/caste_certificate_list')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>


                         <a href="{{url('certificate/other_certificate_form')}}">
                             <div class="col-lg-3 col-xs-6" style="display:none">
                                 <div class="small-box" style="background-color:#85929E;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Other Cert.
                                             <small style="color:#fff;"></small>
                                         </h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/other_certificate_form')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>

                         <a href="{{url('certificate/other_certificate_list')}}">
                             <div class="col-lg-3 col-xs-6" style="display:none">
                                 <div class="small-box" style="background-color:#85929E;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Other cert List.</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/other_certificate_list')}}"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="{{url('certificate/birth_certificate')}}">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#DAF7A6;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Birth Certificate
                                             <small style="color:#fff;"></small>
                                         </h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="{{url('certificate/birth_certificate')}}" class="small-box-footer">More
                                         Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <!-- 
                         <a href="javascript:get_content('certificate/tc_list')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#3F7ED0;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">TC List <small
                                                 style="color:#fff;">(State Board)</small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/tc_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/bonafied_form')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#138D75;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Bonafied<small
                                                 style="color:#fff;"></small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/bonafied_form')"
                                         class="small-box-footer">More
                                         Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/bonafied_certificate_list')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#138D75;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Bonafied List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/bonafied_certificate_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/tutionfee_form')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#FF7E00;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Tu.Fee Cert.<small
                                                 style="color:#fff;"></small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>

                                     <a href="javascript:get_content('certificate/tutionfee_form')"
                                         class="small-box-footer">More
                                         Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/tutionfee_certificate_list')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#FF7E00;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Tu.Fee Cer.List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/tutionfee_certificate_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/annualfee_form')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#6C3483;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Ann.Fee Cert.<small
                                                 style="color:#fff;"></small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/annualfee_form')"
                                         class="small-box-footer">More
                                         Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/annualfee_certificate_list')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#6C3483;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Ann.Fee Cer.List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/annualfee_certificate_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/caste_form')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#85929E;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Caste Cert.<small
                                                 style="color:#fff;"></small></h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/caste_form')"
                                         class="small-box-footer">More Info
                                         <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/caste_certificate_list')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#85929E;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Caste Cer.List</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/caste_certificate_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>


                         <a href="javascript:get_content('certificate/other_certificate_form')">
                             <div class="col-lg-3 col-xs-6" style="display:none">
                                 <div class="small-box" style="background-color:#85929E;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Other Cert.
                                             <small style="color:#fff;"></small>
                                         </h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/other_certificate_form')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>

                         <a href="javascript:get_content('certificate/other_certificate_list')">
                             <div class="col-lg-3 col-xs-6" style="display:none">
                                 <div class="small-box" style="background-color:#85929E;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Other cert List.</h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/other_certificate_list')"
                                         class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a>
                         <a href="javascript:get_content('certificate/birth_certificate')">
                             <div class="col-lg-3 col-xs-6">
                                 <div class="small-box" style="background-color:#DAF7A6;">
                                     <div class="inner"><br>
                                         <h3 style="font-size:22px;margin-left:10px;color:#fff;">Birth Certificate
                                             <small style="color:#fff;"></small>
                                         </h3>
                                         <p style="margin-left:10px;color:#fff;">Enter</p>
                                     </div>
                                     <a href="javascript:get_content('certificate/birth_certificate')"
                                         class="small-box-footer">More
                                         Info <i class="fa fa-arrow-circle-right"></i></a>
                                 </div>
                             </div>
                         </a> -->


             </section>
             @include('common.footer')