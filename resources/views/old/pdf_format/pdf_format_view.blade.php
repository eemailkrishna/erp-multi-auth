 @include('common.header')
 @include('common.navbar')

 <script>
window.scrollTo(0, 0);
 </script>
 <section class="content-header">
     <h1>
         PDF Management
         <small>Control Panel</small>

     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/pdf-format')}}"><i class="fa fa-dashboard"></i> PDF Format</a></li>
         <li class="active">PDF Format View</li>
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


             <a href="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form1.pdf"
                 target="_blank">
                 <div class="col-md-6">
                     <object
                         data="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form1.pdf"
                         type="application/pdf" width="100%" height="400px">
                         <p>Alternative text - include a link <a
                                 href="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form1.pdf">to
                                 the PDF!</a></p>
                     </object>
                 </div>
             </a>


             <a href="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form2.pdf"
                 target="_blank">
                 <div class="col-md-6">
                     <object
                         data="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form2.pdf"
                         type="application/pdf" width="100%" height="400px">
                         <p>Alternative text - include a link <a
                                 href="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form2.pdf">to
                                 the PDF!</a></p>
                     </object>
                 </div>
             </a>


             <a href="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form3.pdf"
                 target="_blank">
                 <div class="col-md-6">
                     <object
                         data="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form3.pdf"
                         type="application/pdf" width="100%" height="400px">
                         <p>Alternative text - include a link <a
                                 href="https://www.simption.com/company/manager/school_pdf/school_pdf/admission_form/Admission Form3.pdf">to
                                 the PDF!</a></p>
                     </object>
                 </div>
             </a>



         </div>
     </div>






 </section>

 @include('common.footer')