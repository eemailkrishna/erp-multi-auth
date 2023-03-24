    @include('common.header');
    @include('common.navbar');


  <script>
window.scrollTo(0, 0);
</script>
    <section class="content-header">
      <h1>
        Stock Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
                 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-money"></i> Stock Management</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <div <div class="box box-success" >
		<div class="box-header with-border">

		<h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
		</div>
		<div class="box-body">
        		<a href="{{url('category_add')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#87A518;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Category</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{url('category_add')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
				<a href="{{url('category_list')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#053332;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Category List</h3>
				<p style="margin-left:10px;color:#fff;">&nbsp;</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{url('category_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

		        <a href="{{url('add_item')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#E32636;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add New Item</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{url('add_item')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
	 	 <a href="{{url('item_list')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#42EA21;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Item List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{url('item_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

        <a href="{{url('purchase_list')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#3B7A57;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;">Purchase List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{url('purchase_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>
				 	 <a href="{{url('sale_list')}}">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#9F2B68;">
            <div class="inner"><br>
               <h3 style="font-size:20px;margin-left:5px;color:#fff;"> Sale List</h3>
				<p style="margin-left:10px;color:#fff;">Enter</p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="{{url('sale_list')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		</a>

		
		</div>
	  </div>
    </section>
    @include('common.footer');