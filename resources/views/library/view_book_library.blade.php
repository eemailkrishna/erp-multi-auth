@include('common.header')
 @include('common.navbar')
<script>
function valid(id){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
for_delete(id);       
 }            
else  {      
return false;
 }
}
  
function for_delete(id){
$.ajax({
type: "POST",
url: access_link+"library/delete_book.php?id="+id+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				  alert_new('Successfully Deleted','green');
				   get_content('library/view_book_library');
			   }else{
               //alert_new(detail); 
			   }
}
});
}

</script> 
<script type="text/javascript">
   function search_class(value){
    //alert_new(value);
       $.ajax({
			  type: "POST",
              url: access_link+"library/library_search_class.php?id="+value+"",
              cache: false,
              success: function(detail){
			    // //alert_new(detail); 
            $('#search_table').html(detail);
              }
           });
    }
</script>
<script type="text/javascript">
   function search_subject(value){
     //alert_new(value);
	  var subject =document.getElementById('class_no').value;
	 //alert_new(subject);
       $.ajax({
			  type: "POST",
              url: access_link+"library/library_search_subject.php?id="+value+"&id2="+subject+"",
              cache: false,
              success: function(detail){
			  ////alert_new(detail); 
            $('#search_table').html(detail);
              }
           });
    }
</script>
<script type="text/javascript">
   function for_section(value){

       $.ajax({
			  type: "POST",
              url: access_link+"library/ajax_class_section_code.php?class_name="+value+"",
              cache: false,
              success: function($detail){
                   var str =$detail;                
                 
                  $("#student_class_section").html(str);
				  for_exam();
				  for_list();
				  
              }
           });

    }
</script>
<script type="text/javascript">
   function for_book(value){
//alert_new(value);
       $.ajax({
			  type: "POST",
              url: access_link+"library/ajax_search_book.php?class="+value+"",
              cache: false,
              success: function($detail){
			 
                   var str =$detail;                
                  //alert_new(str);
                  $("#book_id_no").html(str);
				  for_exam();
				  for_list();
				  
              }
           });

    }
</script>

<script type="text/javascript">
   function fill_detail(value){
           
			$.ajax({
			  address: "POST",
              url: access_link+"library/ajax_search_book_classwise.php?id="+value+"",
              cache: false,
              success: function(detail){
			  ////alert_new(detail);
                 var str =detail;
		  var res = str.split("|?|");
	    $("#student_roll_no").val(value); 
		  $("#student_name").val(res[0]); 
		  $("#student_class").val(res[1]); 
          $("#student_section").val(res[2]);  
          
        
      
              }
           });

    }
	
function fill_bookdetail(ser){
var book_id=document.getElementById('book_id_'+ser).value;
if(book_id==''){
alert_new('This book is not available right now','red');
$("#book_title_"+ser).val(''); 
	$("#book_author_name_"+ser).val('');
	//$("#book_class_name").val('');
}else{
	$.ajax({
	address: "POST",
	url: access_link+"library/ajax_search_book_details.php?book_id="+book_id+"",
	cache: false,
	success: function(detail){
	var res = detail.split("|?|");
	$("#book_title_"+ser).val(res[0]); 
	$("#book_author_name_"+ser).val(res[1]);
	//$("#book_class_name").val(res[2]);
	fill_stddetail();
	}
	});
	}
}

function search_student_details(){
var roll_no=document.getElementById('student_details').value;
//alert_new(roll_no);
	$.ajax({
	address: "POST",
	url: access_link+"library/search_student_details.php?student_roll_no="+roll_no+"",
	cache: false,
	success: function(detail){
	////alert_new(detail);
	var res = detail.split("|?|");
	$("#student_class_and_section").val(res[1]); 
	$("#student_roll_no").val(res[2]); 
	$("#student_name").val(res[0]); 
	}
	});
}
</script> 

<script>
function validation(){
var book_id=document.getElementById('book_id').value;
if(book_id==''){
 return false
 
}else{
  return true

}
}
  $("#my_form").submit(function(e){
  e.preventDefault();

    var formdata = new FormData(this);
    $("#myModal_close").click();
  //window.scrollTo(0, 0);
   //loader();
        $.ajax({
            url: access_link+"library/view_book_library_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			$('#modal-default').modal('hide');
               var res=detail.split("|?|");
		   if(res[1]>0 && res[2]>0){
			    alert_new('Some Book Issue & Some Book can not Issue !!!','red');
			    get_content('library/view_book_library');
            }else{
                if(res[1]>0){
			    alert_new('Successfully Complete','green');
			    get_content('library/view_book_library');
			    }else{
			    alert_new('Sorry ! can not Issue Same Book to Same Student !!!','red');
			    get_content('library/view_book_library');
			    }
            }
			}
         });
      });
</script>
 
    <section class="content-header">
      <h1>
       Library Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="javascript:get_content('library/library')"><i class="fa fa-book"></i> Library</a></li>
        <li class="active">View Book</li>
      </ol>
	 
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
	
	
	
    <section class="content" id="here">
      <div class="row">
        <div class="col-sm-12">
         
          <!-- /.box -->

          <div class="box box-success" >
            <div class="box-header with-border">
			<div class="col-sm-12">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-4">
                 <center><h3 class="box-title" style="color:#592712;font-size:25px;"><b>View Books Details</b></h3></center></br>
		    </div>
			 <div class="col-sm-2">
			 <!-- <button type="button" name="finish" class="btn btn-primary" value=""  data-toggle="modal"  data-target="#modal-default" >Issue Book</button> -->
			 </div>
			</div>
            </div>

            @if(Session('success'))
            <div class="alert alert-success">
                {{ Session('success') }}
            </div>
        @endif
            <!-- /.box-header -->	   
			   
            <div class="box-body table-responsive">
			
			   
		
             <table id="example1" class="table table-bordered table-striped">
                <thead >
               <tr>
				  <th>S.No</th>
				  <th>Book No.</th>
                  <th>book_code_no</th>
				  <th>division</th>
                  <th>languase</th>
                  <th>book type</th>
                  <th>book title</th>
				  <th>author</th>
				  <th>main class</th>
				  <th>subject</th>
				  <th>publisher name</th>
				  <th>publisher date</th>
				  <th>no of copy</th>
				  <th>Vendor</th>
				  <th>cost of book</th>
				  <th>entery date</th>
				  <th>other information</th>


                  <th>Edit</th>
                  <th>Delete</th>

                </tr>
                </thead>
                  <tbody id="search_table">
               
				  @foreach($data as $library)
<tr>
<input type="hidden" class="deleteviewbookId" value="{{$library->id}}">
  <td>{{$loop->iteration}}</td>
  <td>{{$library->book_no}}</td>
  <td>{{$library->book_code_no}}</td>
  <td>{{$library->division}}</td>
  <td>{{$library->languase}}</td>
  <td>{{$library->book_type}}</td>
  <td>{{$library->book_title}}</td>
  <td>{{$library->author}}</td>
  <td>{{$library->main_class}}</td> 
  <td>{{$library->subject}}</td> 
  <td>{{$library->publisher_name}}</td> 
  <td>{{$library->publisher_date}}</td> 
  <td>{{$library->no_of_copy}}</td> 
  <td>{{$library->Vendor}}</td> 
  <td>{{$library->cost_of_book}}</td> 
  <td>{{$library->entery_date}}</td> 
  <td>{{$library->other_information}}</td> 
   

  <td><a href="{{url('viewbook-edit/'.$library->id)}}"style="text-decoration:none; color:white"><button type="button" class="btn btn-primary">Edit</button></a></td>
  
  <td><button  type="button" class="btn btn-danger deleteviewbookBtn">Delete</button><td>

  
 
</tr>
        
			
		
		
		@endforeach 
		
	   </tr>
				
			
                </tbody>
             </table>
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
 


<script>
$(function () {
$('#example1').DataTable()
})

</script>





<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $('.deleteviewbookBtn').click(function(e) {
        e.preventDefault();

        var delete_id = $(this).closest("tr").find('.deleteviewbookId').val();

        swal({

                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this account data !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    var data = {
                        "_token": $('input[name=_token]').val(),
                        "id": delete_id,
                    };
                    $.ajax({
                        type: "get",
                        url: "/viewbook-delete/" + delete_id,
                        data: data,
                        success: function(response) {
                            swal(response.status, {
                                    icon: "success",
                                })
                                .then((result) => {
                                    // location.reload();
                                    $("#here").load(window.location.href + " #here" );
                                });
                        }

                    });
                    // } else {
                    //     swal("Your imaginary file is safe!");
                }
            });
    });

});
</script>
