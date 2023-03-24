<style>
    .btnadd{
        float: right;
    padding-right: 55px;
    }
</style>

<script>
 $("#my_form").submit(function(e){
    
        e.preventDefault();
    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"stock/edit_item_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			////alert_new(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   get_content('stock/item_list');
                }
			}
         });
      });
</script>
   <section class="content-header">
      <h1>
        Stocks        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="javascript:get_content('stock/stock')"><i class="fa fa-money"></i> Stock Management</a></li>
        <li class="active">Edit Stock Item</li>
        </ol>
    </section>
	<!---*******************************************************************************************************************************************************************-->
    <!-- Main content -->
    <form role="form" method="post" id="my_form" enctype="multipart/form-data">
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h1 class="box-title"><b>Edit Stock Item</b></h1>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Personal Detail--------------------------------------------------->

				    				    
	        <div class="box-body">
						
			<div class="col-md-4 ">	
			<input type="hidden"  name="s_no"  value="1">
					
					<div class="form-group" >
					  <label >Product Name<font style="color:red"><b>*</b></font></label>
					  <input type="text"  name="item_product_name" placeholder="Product Name"  value="Shoes" class="form-control" required >
					</div>
			</div>
			
			<div class="col-md-4 ">				
                <div class="form-group" >
                    <label >Category <font style="color:red"><b>*</b></font></label>
                    <select name="item_product_category" class="form-control" required>
                    <option value="">Select</option>
                                        <option value="1" selected >BOOK</option>
                                        <option value="2"  >Stationery item</option>
                                        <option value="3"  >Stationery item</option>
                                        <option value="4"  >IT</option>
                                        <option value="5"  >Furniture</option>
                                        <option value="6"  >bus</option>
                                        <option value="8"  >welcome kite </option>
                                        <option value="9"  >computers</option>
                                        <option value="10"  >Uniform</option>
                                        <option value="11"  >uni.</option>
                                        <option value="12"  >testing</option>
                                        <option value="13"  >uni.</option>
                                        <option value="14"  >shoes</option>
                                        <option value="15"  >books</option>
                                        <option value="16"  >tables</option>
                                        <option value="17"  >chair</option>
                                        <option value="18"  >Duster</option>
                                        <option value="19"  >stationary</option>
                                        <option value="20"  >BOOK SETS</option>
                                        <option value="21"  >school dress</option>
                                        <option value="22"  >Uniform</option>
                                        <option value="23"  >beg</option>
                                        <option value="24"  >far.</option>
                                        <option value="25"  >stashnary</option>
                                        <option value="26"  >beg</option>
                                        </select>
                </div>
			</div>
			
			<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Product Brand</label>
					  <input type="text"  name="item_brand_name" placeholder="Product Brand"  value="radhe" class="form-control" >
					</div>
			</div>
			
			<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Product Rate</label>
					  <input type="number"  name="item_rate" placeholder="Product Rate"  value="200" class="form-control" >
					</div>
			</div>
			
			
			<div class="col-md-4 ">				
					<div class="form-group" >
					  <label >Product Description </label>
					  <input type="text"  name="item_description" placeholder="Product Description"  value="" class="form-control">
					</div>
			</div>	
			<div class="col-md-4 ">				
					<div class="form-group" >
					  <label>Product Quantity</label>
					  <input type="text"  name="item_quantity" placeholder="Product Quantity"  value="" class="form-control">
					</div>
			</div>	
			<div class="col-md-4 ">				
					<div class="form-group" >
					  <label>Product Code</label>
					  <input type="text"  name="item_code" placeholder="Product Code"  value="1" class="form-control">
					</div>
			</div>
          </div>
		  
				</div>
                    <center>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success" />
                    </center>
                </div>
		    </div>
		
    </div>
</section>
</form>