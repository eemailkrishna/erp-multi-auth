 @include('common.header')
 @include('common.navbar')

 <script>
window.scrollTo(0, 0);
 </script>
 <section class="content-header">
     <h1>
         Library Management
         <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Library Management</li>
     </ol>
 </section>

 <!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
 <!-- Main content -->
 <section class="content">
     <div class="box box-success">
         <div class="box-header with-border">

             <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
             </h3>
         </div>
         <div class="box-body">

             <a href="{{url('library_add_book')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#E32636;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Book</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('library_add_book')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('view_book_library')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#3B7A57;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">View Book</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('view_book_library')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('issue_book')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#9F2B68;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Issued Book</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('issue_book')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('view_return_book_list')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#C46210;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">Return Book</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('view_return_book_list')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('e_library')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#3B3B6D;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">E-Library</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('e_library')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>
             <a href="{{url('exam_stuff_add')}}">
                 <div class="col-lg-3 col-xs-6">
                     <div class="small-box" style="background-color:#D68910;">
                         <div class="inner"><br>
                             <h3 style="font-size:20px;margin-left:5px;color:#fff;">E-Stuff</h3>
                             <p style="margin-left:10px;color:#fff;">Enter</p>
                         </div>
                         <div class="icon">
                             <i class="ion"></i>
                         </div>
                         <a href="{{url('exam_stuff_add')}}" class="small-box-footer">More Info <i
                                 class="fa fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </a>

         </div>
     </div>
     <!--    <div class="box box-success" >-->
     <!--        	<div class="box-header with-border">-->

     <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
     <!--</div>-->
     <!--        <div class="box-body">-->
     <!--            		<a href="../school_software_v1_old/userhelp/LiBrary Panel.pdf" target="_blank">-->
     <!--			<div class="col-lg-3 col-xs-6">-->
     <!--				<div class="small-box" style="background-color:red;">-->
     <!--					<div class="inner"><br>-->
     <!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>-->
     <!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
     <!--				</div>-->
     <!--				<div class="icon">-->
     <!--					<i class="ion"><img src="../../school_software_v1_old/images/userhelp.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>-->
     <!--				</div>-->
     <!--					<a href="../school_software_v1_old/userhelp/LiBrary Panel.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
     <!--				</div>-->
     <!--			</div>-->
     <!--			</a>-->


     <!--			<a href="../school_software_v1_old/userhelp/Library hindi Pane1.pdf" target="_blank">-->
     <!--			<div class="col-lg-3 col-xs-6">-->
     <!--				<div class="small-box" style="background-color:green;">-->
     <!--					<div class="inner"><br>-->
     <!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>-->
     <!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
     <!--				</div>-->
     <!--				<div class="icon">-->
     <!--					<i class="ion"><img src="../../school_software_v1_old/images/userhelp.png" style="width:80px;margin-bottom:20px;" alt="Simption Tech Pvt Ltd "  title="School Management System" class="image1"></i>-->
     <!--				</div>-->
     <!--					<a href="../school_software_v1_old/userhelp/Library hindi Pane1.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
     <!--				</div>-->
     <!--			</div>-->
     <!--			</a>-->
     <!--        </div>-->

     <!--    </div>-->


 </section>

 @include('common.footer')