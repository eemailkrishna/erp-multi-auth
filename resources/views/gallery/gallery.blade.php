 @include('common.header')
 @include('common.navbar')

 <script>
     window.scrollTo(0, 0);
 </script>

 <style>
     #statusmessage {
         background: green;
         position: absolute;
         top: 20px;
         right: 10px;
         color: white;
         padding: 10px;
     }

     .gallary{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items:center;
        padding: 20px;
    }

    .gallary p{
        font-size: 20px;
    }

     .gallary img{
        width: 300px;
        border: 5px solid gray;
        border-radius: 5px;
     }

     .inputDnD {
         .form-control-file {
             position: relative;
             width: 100%;
             height: 100%;
             min-height: 6em;
             outline: none;
             visibility: hidden;
             cursor: pointer;
             background-color: #c61c23;
             box-shadow: 0 0 5px solid currentColor;

             &:before {
                 content: attr(data-title);
                 position: absolute;
                 top: 0.5em;
                 left: 0;
                 width: 100%;
                 min-height: 6em;
                 line-height: 2em;
                 padding-top: 1.5em;
                 opacity: 1;
                 visibility: visible;
                 text-align: center;
                 border: 0.25em dashed currentColor;
                 transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
                 overflow: hidden;
             }

             &:hover {
                 &:before {
                     border-style: solid;
                     box-shadow: inset 0px 0px 0px 0.25em currentColor;
                 }
             }
         }
     }

     // PRESENTATIONAL CSS
     body {
         background-color: #f7f7f9;
     }
 </style>





 <section class="content-header">
     <h1>
         Gallery Management
         <small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Gallery</li>
     </ol>
 </section>


 <section id="portfolio">
     <div class="box box-primary my_border_top">
         <div class="box-header with-border ">
             <h3 class="box-title">Gallery</h3>
         </div>

         @if (session('status'))
             <div id="statusmessage">
                 {{ session('status') }}
             </div>
         @endif
         <div class="row">

             <div class="col-twelve">
                 <div class="col-md-4"></div>
                 <div class="col-md-4" style="padding:20px 20px 10px 10px;">


                     <!-- /.box -->
                     <div class="box" style="padding:10px 10px 10px 10px;">
                         <div class="box-header with-border">
                             <h3 class="box-title">Add Gallery <small style="color:red;">( Upload Image Less than 2MB
                                     )</small></h3>
                         </div>
                         <!-- /.box-header -->
                         <div class="box-body table-responsive">
                             <a href="{{ url('/gallery-addNewGallery') }}"><button type="button"
                                     class="btn btn-success" style="float:right;">
                                     + Add New Gallery</button></a>
                             <button type="button" style='display:none' id="new_button" data-toggle="modal"
                                 data-target="#modal-default">
                             </button>

                         </div>
                         <!-- /.box-body -->
                     </div>
                     <!-- /.box -->


                 </div> <!-- end folio-wrap -->
             </div> <!-- end twelve -->
         </div> <!-- end portfolio-content -->
     </div>
 </section>


 <div class="container">
    <div class="row">
        @foreach($data as $item)
            <div class="col-md-4 gallary">
                <img src="{{url('uploads/gallary/'.$item->image)}}" class="img-fluid" >
                <p class="text-center">{{$item->name}}</p>
            </div>
        @endforeach
    </div>
 </div>

 <script>
     setTimeout(function() {
         document.getElementById("statusmessage").style.display = "none";
     }, 3000);
 </script>


 @include('common.footer');
