 @include('common.header');
 @include('common.navbar');

  <script>
window.scrollTo(0, 0);
</script>

	<style>
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
 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li class="active">Gallery</li>
      </ol>
    </section>


   <section id="portfolio">
   		 <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Gallery</h3>
            </div>

   	<div class="row">

   		<div class="col-twelve">
		<div class="col-md-4"></div>
<div class="col-md-4" style="padding:20px 20px 10px 10px;">


		  <!-- /.box -->
         <div class="box" style="padding:10px 10px 10px 10px;">
            <div class="box-header with-border">
              <h3 class="box-title">Add Gallery <small style="color:red;">( Upload Image Less than 2MB )</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
			  <a href="javascript:get_content('gallery/image_upload_frame')"><button type="button" class="btn btn-success"  style="float:right;" >
                + Add New Gallery</button></a>
	<button type="button" style='display:none' id="new_button" data-toggle="modal" data-target="#modal-default">
               </button>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


		</div>
 <div class="col-md-4"></div>












		<!-----------------------------------------------Model Box Start----------------------------------------------------------->
















  <!-----------------------------------------------Model Box End------------------------------------------------------------>
   			<div id="folio-wrap" class="bricks-wrapper col-lg-12">


					<div class="col-md-4"  >

			<center>
	                 <a href="javascript:post_content('gallery/view_gallery','id=Annual Function')" class="overlay">
	                  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/gallery/1843499_539.jpg"  style="width:300px; height:200px;" >
	                   </a>
					   </center>
	                 <center><a href="javascript:post_content('gallery/view_gallery','id=Annual Function')"><button type="button" class="btn btn-danger">Annual Function</button></a></center><br><br>
	              <!-- end folio-item -->
 </div>

					<div class="col-md-4"  >

			<center>
	                 <a href="javascript:post_content('gallery/view_gallery','id=Hello')" class="overlay">
	                  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/gallery/4244474_WhatsApp Image 2022-07-21 at 9.56.46 AM.jpeg"  style="width:300px; height:200px;" >
	                   </a>
					   </center>
	                 <center><a href="javascript:post_content('gallery/view_gallery','id=Hello')"><button type="button" class="btn btn-danger">Hello</button></a></center><br><br>
	              <!-- end folio-item -->
 </div>

					<div class="col-md-4"  >

			<center>
	                 <a href="javascript:post_content('gallery/view_gallery','id=MAK')" class="overlay">
	                  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/gallery/6103072_WhatsApp Image 2022-01-14 at 3.35.14 PM.jpeg"  style="width:300px; height:200px;" >
	                   </a>
					   </center>
	                 <center><a href="javascript:post_content('gallery/view_gallery','id=MAK')"><button type="button" class="btn btn-danger">MAK</button></a></center><br><br>
	              <!-- end folio-item -->
 </div>

					<div class="col-md-4"  >

			<center>
	                 <a href="javascript:post_content('gallery/view_gallery','id=NIDHI')" class="overlay">
	                  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/gallery/8826122_adb_usb.ini"  style="width:300px; height:200px;" >
	                   </a>
					   </center>
	                 <center><a href="javascript:post_content('gallery/view_gallery','id=NIDHI')"><button type="button" class="btn btn-danger">NIDHI</button></a></center><br><br>
	              <!-- end folio-item -->
 </div>

					<div class="col-md-4"  >

			<center>
	                 <a href="javascript:post_content('gallery/view_gallery','id=Prashant')" class="overlay">
	                  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/gallery/6688139_24af81c5-4b9a-4af2-99ad-a7719244e6aa.jpg"  style="width:300px; height:200px;" >
	                   </a>
					   </center>
	                 <center><a href="javascript:post_content('gallery/view_gallery','id=Prashant')"><button type="button" class="btn btn-danger">Prashant</button></a></center><br><br>
	              <!-- end folio-item -->
 </div>

					<div class="col-md-4"  >

			<center>
	                 <a href="javascript:post_content('gallery/view_gallery','id=school annual')" class="overlay">
	                  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/gallery/5188117_ht logo.jpeg"  style="width:300px; height:200px;" >
	                   </a>
					   </center>
	                 <center><a href="javascript:post_content('gallery/view_gallery','id=school annual')"><button type="button" class="btn btn-danger">school annual</button></a></center><br><br>
	              <!-- end folio-item -->
 </div>

					<div class="col-md-4"  >

			<center>
	                 <a href="javascript:post_content('gallery/view_gallery','id=School photo')" class="overlay">
	                  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/gallery/9695733_Photo0584.jpg"  style="width:300px; height:200px;" >
	                   </a>
					   </center>
	                 <center><a href="javascript:post_content('gallery/view_gallery','id=School photo')"><button type="button" class="btn btn-danger">School photo</button></a></center><br><br>
	              <!-- end folio-item -->
 </div>

					<div class="col-md-4"  >

			<center>
	                 <a href="javascript:post_content('gallery/view_gallery','id=vicky')" class="overlay">
	                  <img src="https://simptionerp.com/data-content/simptionschoolerp/demo/gallery/6328647_WhatsApp Image 2022-01-28 at 15.48.37.jpeg"  style="width:300px; height:200px;" >
	                   </a>
					   </center>
	                 <center><a href="javascript:post_content('gallery/view_gallery','id=vicky')"><button type="button" class="btn btn-danger">vicky</button></a></center><br><br>
	              <!-- end folio-item -->
 </div>



   			</div> <!-- end folio-wrap -->
   		</div> <!-- end twelve -->
   	</div> <!-- end portfolio-content -->

   </section>  <!-- end portfolio -->

 @include('common.footer');
