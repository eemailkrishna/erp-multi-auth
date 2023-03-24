   @include('common.header')
   @include('common.navbar')

   <section class="content-header">
       <h1>
           Fees Management <small>Control Panel</small>
       </h1>
       <ol class="breadcrumb">
           <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
           <li class="active">Fees</li>
       </ol>
   </section>
   <!-- Main content -->
   <section class="content">
       <div class="box">
           <div class="box-header">
               <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
               </h3>
           </div>
           <div class="box-body">
               <a href="{{url('reset-Fee')}}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#6E666C;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Reset Months</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_structure.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('reset-Fee') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('dues-detail') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#7CA4AB;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Set Dues Detail</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_structure.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('dues-detail') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('fee-structure') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#E32636;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Fees Structure</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_structure.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('fee-structure') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="javascript:get_content('fees_monthly/discount_types_list')">
                   <div class="col-lg-3 col-xs-6" style="display:none;">
                       <div class="small-box" style="background-color:#3B7A57;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:7px;color:#fff;">Discount Struc.</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/discount_structure.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="javascript:get_content('fees_monthly/discount_types_list')"
                               class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{url('student_admission')}}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#013220;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Set Fee</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{url('student_admission')}}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('classwise_fees') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#775CD3;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Set Fee</h3>
                               <p style="margin-left:10px;color:#fff;">Classwise</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('/images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('classwise_fees') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('classwise_transport') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#1D2C3D;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Set Transport Fee</h3>
                               <p style="margin-left:10px;color:#fff;">Classwise Monthly</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{url('classwise_transport')}}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('prev_year') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#FFA500;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Previous Dues</h3>
                               <p style="margin-left:10px;color:#fff;">Add in Current Fee</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('prev_year') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('std_fee_add_form') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#9F2B68;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Pay Fee</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/pay_fee.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('std_fee_add_form') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('std_fee_list') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#C46210;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Fee Details</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('std_fee_list') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('std_fee_list_rfid') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#634951;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Fee Details</h3>
                               <p style="margin-left:10px;color:#fff;">By RFID</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('std_fee_list_rfid') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{url('std_fees_dues_list')}}">
                   <div class="col-lg-3 col-xs-6" style="display:none;">
                       <div class="small-box" style="background-color:#8F9D32;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Dues List</h3>
                               <p style="margin-left:10px;color:#fff;">SMS & Print</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{url('std_fees_dues_list')}}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="javascript:get_content('fees_monthly/student_fee_dues_list_statuswise')">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#8F9D32;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Dues List</h3>
                               <p style="margin-left:10px;color:#fff;">SMS & Print</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="javascript:get_content('fees_monthly/student_fee_dues_list_statuswise')"
                               class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('std_fee_demand_bill') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#A9919D;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Demand Bill</h3>
                               <p style="margin-left:10px;color:#fff;">Print</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('std_fee_demand_bill') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('std_fee_demand_newbill_list') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#A9919D;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Demand Bill New</h3>
                               <p style="margin-left:10px;color:#fff;">Print</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('std_fee_demand_newbill_list') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('std_fee_balance_detail') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#184AA0;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Balance Details</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('std_fee_balance_detail') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('std_fee_balance') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#177C76;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Balance Details</h3>
                               <p style="margin-left:10px;color:#fff;">From - To</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('std_fee_balance') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('balance_detail') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#581845;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Only Balance</h3>
                               <p style="margin-left:10px;color:#fff;">Report Monthly</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('balance_detail') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
           </div>
           <div class="box-header">
               <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Transpoart Main
                       Panel</b></h3>
           </div>
           <div class="box-body">
               <a href="{{ url('reset_transport') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#B72506;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Reset Months</h3>
                               <p style="margin-left:10px;color:#fff;">Transport Fee</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_structure.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('reset_transport') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('set_transport_dues') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#7CA4AB;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Set Dues Detail</h3>
                               <p style="margin-left:10px;color:#fff;">Transport Dues</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_structure.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('set_transport_dues') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('add_bus_fee_category') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#E32636;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Fees Structure</h3>
                               <p style="margin-left:10px;color:#fff;">Transport Fee</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_structure.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('add_bus_fee_category') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('set_classwise_transport') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#775CD3;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Set Fee Classwise</h3>
                               <p style="margin-left:10px;color:#fff;">Transport Fee</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('set_classwise_transport') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('challan_list') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#433652;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Print Challan</h3>
                               <p style="margin-left:10px;color:#fff;">For Challan</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('challan_list') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('transport_form') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#9F2B68;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Pay Fee</h3>
                               <p style="margin-left:10px;color:#fff;">Transport Fee</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/pay_fee.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('transport_form') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('transport_fee_list') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#C46210;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Fee Details</h3>
                               <p style="margin-left:10px;color:#fff;">Transport Fee</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('transport_fee_list') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('dues_list') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#8F9D32;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Dues List</h3>
                               <p style="margin-left:10px;color:#fff;">Transport SMS & Print</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('dues_list') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
           </div>
       </div>
       <div class="box">
           <div class="box-header">
               <h3 class="box-title" style="color:teal;"><i
                       class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>
           </div>
           <div class="box-body">
               <a href="{{ url('report') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#594518;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Reports Panel</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('report') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('report_transport') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#bf1605;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Transport Reports</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/fee_details.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('report_transport') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="{{ url('buswise_list') }}">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:#5A5554;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Bus Id Card</h3>
                               <p style="margin-left:10px;color:#fff;">Buswise Report</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/bus_staff.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="{{ url('buswise_list') }}" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
           </div>
       </div>
       <div class="box">
           <div class="box-header">
               <h3 class="box-title" style="color:teal;"><i
                       class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>
           </div>
           <div class="box-body">
               <a href="userhelp/Fee Panel.pdf" target="_blank">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:red;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/userhelp.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="userhelp/Fee Panel.pdf" target="_blank" class="small-box-footer">More Info <i
                                   class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
               <a href="userhelp/Fee Panel hindi.pdf" target="_blank">
                   <div class="col-lg-3 col-xs-6">
                       <div class="small-box" style="background-color:green;">
                           <div class="inner"><br>
                               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>
                               <p style="margin-left:10px;color:#fff;">&nbsp;</p>
                           </div>
                           <div class="icon">
                               <i class="ion"><img src="{{url('images/userhelp.png')}}"
                                       style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "
                                       title="School Management System" class="image1"></i>
                           </div>
                           <a href="userhelp/Fee Panel hindi.pdf" target="_blank"" class=" small-box-footer">More Info
                               <i class="fa fa-arrow-circle-right"></i></a>
                       </div>
                   </div>
               </a>
           </div>
       </div>
   </section>
   @include('common.footer')