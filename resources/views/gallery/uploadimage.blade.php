@include('common.header')
@include('common.navbar')
<div class="box-body">
    <form role="form" action="{{ url('/store-gallery') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12 ">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Image Name" class="form-control">
            </div>
        </div>

        <div class="col-md-12 ">
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" placeholder="Enter total no of day" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <center><input type="submit" class="btn btn-success" /></center>
        </div>




    </form>

</div>
@include('common.footer')
