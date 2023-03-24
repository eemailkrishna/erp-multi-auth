@include('common.header')
@include('common.navbar')
<script>
 $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"stock/category_add_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
                
                // console.log(detail);
                // //alert_new(detail);
                //$('#trial_detail').html(detail);
              var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Complete','green');
				  get_content('stock/category_list');
            }
			}
         });
      });
</script>


   <section class="content-header">
      <h1>
        Stock Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active">Add Category</li>
        </ol>
    </section>
	
	
	<!---*******************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h1 class="box-title"><b>Add New Category</b></h1>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Personal Detail--------------------------------------------------->
			<form role="form" action="{{url('/stock-update/'.$edits->id)}}" method="post" id="my_form" enctype="multipart/form-data">
      @csrf
            <div class="box-body">
				<div class="col-md-12">
                


				<div class="form-group">
                  <label >Category Name <span style="color:red;">*</span></label>
                  <input type="text" name="name" placeholder="Category Name" value="{{$edits->name}}" placeholder="student Name"  id="student_name" class="form-control">
                </div>
				
				</div>
		<div class="col-md-12">
		        <center>
		        <input type="submit" name="finish" value="update" class="btn btn-success" />
		        </center>
		</div>
          
		  </div>
		  </form>
    </div>
</section>
@include('common.footer')

