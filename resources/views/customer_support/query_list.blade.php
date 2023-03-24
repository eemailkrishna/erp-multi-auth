@include('common.header')
@include('common.navbar')

<section class="content-header">
    <h1>
        Support Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('customer-support')}}"><i class="fa fa-male"></i> Support</a></li>
        <li class="active">Query List</li>
    </ol>
</section>

<!--<script>
function for_list(){
var s_name=document.getElementById('s_name').value;
var d_name=document.getElementById('d_name').value;

if(s_name!='' && d_name!=''){
$.ajax({
type: "POST",
url: "http://simption.com/complaint/complaint_api/ajax_query_list.php?s_name="+s_name+"&d_name="+d_name+"",
cache: false,
success: function(detail){
$("#search_list").html(detail);
}
});
}else{
$("#search_list").html('');
}
    
}
</script>

<script>
function valid(s_no){
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_record(s_no);
}else{
return false;
}
}

function delete_record(s_no){
$.ajax({
type: "POST",
url: "http://simption.com/complaint/complaint_api/ajax_query_delete.php?s_no="+s_no+"",
cache: false,
success: function(detail){
var res=detail.split("|?|");
if(res[1]=='success'){
   alert('Successfully Deleted');
   get_content('customer_support/query_list');
}else{
alert(detail); 
}
}
});
}
</script>-->

<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {

        var url = window.location.href;
        $('#my_url').val(url);
        $('#s_no').val(s_no);
        $('#my_submit').click();

    } else {
        return false;
    }
}
</script>

<!---******`****`*******`*****`*******`************`********`*********`******`*****`*********`*******************`*******`**`*****`****`**-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">
                    <div class="col-md-10">
                        <h3 class="box-title">Query List</h3>
                    </div>
                    <div class="col-md-2"><span style="float:right;"><a
                                href="javascript:get_content('customer_support/add_query');"><button type="button"
                                    class="btn btn-success">New Query</button></a></span></div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">

                    <input type="hidden" name="s_name" id="s_name" value="simptionerp.com" class="form-control"
                        readonly />
                    <input type="hidden" name="d_name" id="d_name" value="demo" class="form-control" readonly />

                    <div class="col-md-12" id="search_list">


                    </div>

                    <div class="col-md-12" style="display:none;">
                        <form name="myForm" method="post"
                            action="http://simption.com/complaint/complaint_api/ajax_query_delete.php"
                            enctype="multipart/form-data" id="my_form">
                            <div class="col-md-12">
                                <input type="hidden" name="my_url" id="my_url" readonly />
                                <input type="hidden" name="s_no" id="s_no" readonly />
                                <input type="submit" name="submit" id="my_submit" value="submit"
                                    style="display:none;" />
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

@include('common.footer')


<!--<script>
for_list();
</script>-->