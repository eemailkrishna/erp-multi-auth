


<script>
function for_change(){
	
var paper_language = document.getElementById('paper_language').value;

var question_class = document.getElementById('question_class').value;

var question_subject = document.getElementById('question_subject').value;
var question_chapter = document.getElementById('question_chapter').value;
var question_type = document.getElementById('question_type1').value;
var question_book = document.getElementById('new_book_dropdown').value;
if(question_book==''){
var question_book = document.getElementById('new_book_input').value;
}
var book_type_hidden = document.getElementById('book_type_hidden').value;
var option4 = document.getElementById('options6').value;

if(question_class==''){
	alert_new("Please select class",'red');

}else if(question_subject==''){
	alert_new("Please select Subject",'red');

}else if(question_chapter==''){
	alert_new("Please select Chapter",'red');

}else if(question_book==''){
	//alert_new("Please select Book");

}else if(paper_language==''){
	alert_new("Please select Language",'red');

}else if(question_type==''){
	//alert_new("Please select Question Type");

}else if(option4==''){
	//alert_new("Please select Number of Options");

}else{

var data="question_class="+question_class+"&question_subject="+question_subject+"&question_chapter="+question_chapter+"&question_book="+question_book+"&book_type_hidden="+book_type_hidden+"&paper_language="+paper_language+"&question_type="+question_type+"&option2="+option4;
post_content('exam_paper_setter/add_question',data);

}

}








function for_options(value1){
	
var question_type2 = document.getElementById('question_type1').value;

if(question_type2!=''){
if(question_type2=='Objective'){
	add_more_objective();

}else if(question_type2=='True_False'){
add_more_true_false();
     
}else if(question_type2=='Fill_in_the_blank'){
    
add_more_fill_in_the_blank();
}else if(question_type2=='Matching'){
add_more_matching();
}else if(question_type2=='One_word'){
	add_more_one_word();

}else if(question_type2=='Unseen_Passage'){
add_more_unseen_passage();
    
}



}
}

function for_question(value){
if(value!=''){
	document.getElementById('question_type1').value=value;
if(value=='Objective'){
$("#options").show();

}
else if(value=='True_False'){
$("#options").show();

}
else if(value=='Fill_in_the_blank'){
$("#options").show();

}
else if(value=='Short_Question'){
add_more_short();

}
else if(value=='Long_Question'){
add_more_long();

}
else if(value=='Unseen_Passage'){
$("#options").show();

}
else if(value=='One_word'){
$("#options").show();

}
else if(value=='Matching'){
$("#options").show();

}
else if(value=='Other'){
main_box_other();
}

}else{
$('#question_panel').empty();
}

}
function for_subject(value){
   
if(value!=''){
   $('#question_subject').html("<option value='' >Loading....</option>");
$.ajax({
	  address: "POST",
	  url: access_link+"exam_paper_setter/ajax_get_subject.php?class_name="+value,
	  cache: false,
	  success: function(detail){
	     
	   	 $("#question_subject").html(detail);
	   }
   });
}else{
$("#question_subject").html("<option value=''>Select</option>");
}

}

function for_book(){
var s_class=document.getElementById('question_class').value;
var subject=document.getElementById('question_subject').value;
if(s_class!='' && subject!=''){
	   $('#new_book_dropdown').html("<option value='' >Loading....</option>");
$.ajax({
	  address: "POST",
	  url: access_link+"exam_paper_setter/ajax_get_book_name.php?s_class="+s_class+"&subject="+subject+"",
	  cache: false,
	  success: function(detail){
	     // //alert_new(detail);
		 $("#new_book_dropdown").html(detail);
	  }
   });
}else{
$("#new_book_dropdown").html("<option value=''>Select</option>");
}
}
function book_type(book){
if(book=="Add New"){
$("#new_book_input").show();
$("#new_book_input").attr("required",true);
$("#new_book_dropdown").hide();
$("#new_book_dropdown").attr("required",false);
$("#book_type1").val("Old Book");
$("#book_type_hidden").val("Old Book");
}
else{
$("#new_book_input").hide();
$("#new_book_dropdown").show();
$("#book_type1").val("Add New");
$("#book_type_hidden").val("Add New");
$("#new_book_input").attr("required",false);
$("#new_book_dropdown").attr("required",true);
}
}

    $("#my_form").submit(function(e){
       //alert_new();
 var total=document.getElementById('div_count').value;
if(total!=0){
    var formdata = new FormData(this);
//window.scrollTo(0, 0);
    //loader();
        $.ajax({
            url: access_link+"exam_paper_setter/add_question_api.php",
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
				   alert_new('Successfully Complete','red');
				   get_content('exam_paper_setter/add_question');
            }
			}
         });
}else{
	alert_new("Please add atleast one question ",'red');
}

      });
	  
	  
	  
	  
	  
	  function select_book_name(value){
		 // $("#book_type_hidden").val(value);
	  }
	    function enter_book_name(value){
		  //$("#book_type_hidden").val(value);
	  }
</script>
<script type="text/javascript">
  function add_more_objective(){
 var count=document.getElementById('div_count').value;
 if(count>14){
 alert_new('You Can not add more than 15 question in one shot ','red');
 }else{
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control'><table class='table table-striped'><tr><th style='width:20px'><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th><textarea style='width:700px' class='form-control' id='text_area_"+count+"' name='question[]' placeholder='Enter Question' rows='4' required ></textarea></th><th style='width:100px'>Marks&nbsp;<input type='text'  name='marks[]' value='' placeholder='Marks' class='form-control' required /></th></tr><tr><td style='text-align:center; padding-top:15px;'>A.</td><td><input style='width:700px' type='text' id='option1_"+count+"' name='option_1[]' value='' placeholder='Enter option 1st' class='form-control' required /></td></tr><tr><td style='text-align:center; padding-top:15px;'>B.</td><td><input style='width:700px' type='text' id='option2_"+count+"' name='option_2[]' value='' placeholder='Enter option 2nd' class='form-control' required /></td><td><input type='button' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></center></td></tr><tr><td style='text-align:center; padding-top:15px;'>C.</td><td><input style='width:700px' type='text' id='option3_"+count+"' name='option_3[]' value='' placeholder='Enter option 3rd' class='form-control' required /></td></tr><tr style='display:none;' id='option_tr1_"+count+"'><td style='text-align:center; padding-top:15px;'>D.</td><td><input style='width:700px' type='text' id='option4_"+count+"' name='option_4[]' value='' placeholder='Enter option 4th' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr2_"+count+"'><td style='text-align:center; padding-top:15px;'>E.</td><td><input style='width:700px' type='text' id='option5_"+count+"' name='option_5[]' value='' placeholder='Enter option 5th' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:21px;'>Correct Answer</td><td><br/><select style='width:700px' name='correct_answer[]' class='form-control' required ><option value=''>Select</option><option value='A'>A</option><option value='B'>B</option><option value='C'>C</option><option id='option_value4_"+count+"' style='display:none;'  value='D'>D</option><option id='option_value5_"+count+"' style='display:none;'  value='E'>E</option></select></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;
serail_no();

   var options2=document.getElementById('options6').value;
   if(options2=='4'){
   $('#option_tr1_'+count).show();
   $('#option_value4_'+count).show();
   $('#option4_'+count).prop('required',true);
   } 
   else if(options2=='5'){
    $('#option_tr1_'+count).show();
    $('#option_tr2_'+count).show();
	 $('#option_value4_'+count).show();
	 $('#option_value5_'+count).show();
	 $('#option4_'+count).prop('required',true);
	 $('#option5_'+count).prop('required',true);
   }

 }
 }
  function add_more_matching(){
 var count=document.getElementById('div_count').value;
 if(count>14){
 alert_new('You Can not add more than 15 question in one shot ','red');
 }else{
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control'><table class='table table-striped'><tr><th style='width:20px'><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th colspan='3'><textarea style='width:700px' class='form-control' id='text_area_"+count+"' name='question[]' placeholder='Enter Question' rows='4' required ></textarea></th><th style='width:70px'>Marks</th><td style='width:70px'><input type='text'  name='marks[]' value='' placeholder='Marks' class='form-control' required /> <br/><input type='button' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></td></tr><tr><td style='text-align:center; padding-top:15px;'>A.</td><td><input style='width:200px' type='text' id='option1_"+count+"'  name='option_1[]' value='' placeholder='Enter option 1st' class='form-control' required /></td><td><input style='width:200px' type='text' id='option21_"+count+"' name='option2_1[]' value='' placeholder='Enter option 1st' class='form-control'  /></td><td><input style='width:200px' type='text' id='answer1_"+count+"' name='answer_1[]' value='' placeholder='Enter Answer 1st' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:15px;'>B.</td><td><input style='width:200px' type='text' id='option2_"+count+"' name='option_2[]' value='' placeholder='Enter option 2nd' class='form-control' required /></td><td><input style='width:200px' type='text' id='option22_"+count+"' name='option2_2[]' value='' placeholder='Enter option 2nd' class='form-control'  /></td><td><input style='width:200px' type='text' id='answer2_"+count+"' name='answer_2[]' value='' placeholder='Enter Answer 2nd' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:15px;'>C.</td><td><input style='width:200px' type='text' id='option3_"+count+"' name='option_3[]' value='' placeholder='Enter option 3rd' class='form-control' required /></td><td><input style='width:200px' type='text' id='option23_"+count+"' name='option2_3[]' value='' placeholder='Enter option 3rd' class='form-control'  /></td><td><input style='width:200px' type='text' id='answer3_"+count+"' name='answer_3[]' value='' placeholder='Enter Answer 3rd' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr1_"+count+"'><td style='text-align:center; padding-top:15px;'>D.</td><td><input style='width:200px' type='text' id='option4_"+count+"' name='option_4[]' value='' placeholder='Enter option 4th' class='form-control'  /></td><td><input style='width:200px' type='text' id='option24_"+count+"' name='option2_4[]' value='' placeholder='Enter option 4th' class='form-control'  /></td><td><input style='width:200px' type='text' id='answer4_"+count+"' name='answer_4[]' value='' placeholder='Enter Answer 4th' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr2_"+count+"'><td style='text-align:center; padding-top:15px;'>E.</td><td><input style='width:200px' type='text' id='option5_"+count+"' name='option_5[]' value='' placeholder='Enter option 5th' class='form-control'  /></td><td><input style='width:200px' type='text' id='option25_"+count+"' name='option2_5[]' value='' placeholder='Enter option 5th' class='form-control'  /></td><td><input style='width:200px' type='text' id='answer5_"+count+"' name='answer_5[]' value='' placeholder='Enter Answer 5th' class='form-control'  /></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;
serail_no();

   var options2=document.getElementById('options6').value;
    
   if(options2=='4'){
   $('#option_tr1_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
   $('#option24_'+count).prop('required',true);
   } 
   else if(options2=='5'){
    $('#option_tr1_'+count).show();
    $('#option_tr2_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
   $('#option24_'+count).prop('required',true);
	 $('#answer5_'+count).prop('required',true);
	 $('#option5_'+count).prop('required',true);
	 $('#option25_'+count).prop('required',true);
   }

 }
 }
 function add_more_fill_in_the_blank(){
 var count=document.getElementById('div_count').value;
 if(count==''){
     count=0;
 }
 if(count>14){
 alert_new('You Can not add more than 15 question in one shot ','red');
 }else{
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control'><table class='table table-striped'><tr><th style='width:20px'><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th><textarea style='width:700px' class='form-control' id='text_area_"+count+"' name='question[]' placeholder='Enter Question' rows='4' required ></textarea></th><th style='width:70px'>Marks</th><td style='width:70px'><input type='text'  name='marks[]' value='' placeholder='Marks' class='form-control' required /> <br/><input type='button' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></td></tr><tr><td style='text-align:center; padding-top:15px;'>A.</td><td><input style='width:700px' type='text' id='option1_"+count+"'  name='option_1[]' value='' placeholder='Enter option 1st' class='form-control' required /></td><td colspan='2'><input style='width:150px' type='text' id='answer1_"+count+"' name='answer_1[]' value='' placeholder='Enter Answer 1st' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:15px;'>B.</td><td><input style='width:700px' type='text' id='option2_"+count+"' name='option_2[]' value='' placeholder='Enter option 2nd' class='form-control' required /></td><td colspan='2'><input style='width:150px' type='text' id='answer2_"+count+"' name='answer_2[]' value='' placeholder='Enter Answer 2nd' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:15px;'>C.</td><td><input style='width:700px' type='text' id='option3_"+count+"' name='option_3[]' value='' placeholder='Enter option 3rd' class='form-control' required /></td><td colspan='2'><input style='width:150px' type='text' id='answer3_"+count+"' name='answer_3[]' value='' placeholder='Enter Answer 3rd' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr1_"+count+"'><td style='text-align:center; padding-top:15px;'>D.</td><td><input style='width:700px' type='text' id='option4_"+count+"' name='option_4[]' value='' placeholder='Enter option 4th' class='form-control'  /></td><td colspan='2'><input style='width:150px' type='text' id='answer4_"+count+"' name='answer_4[]' value='' placeholder='Enter Answer 4th' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr2_"+count+"'><td style='text-align:center; padding-top:15px;'>E.</td><td><input style='width:700px' type='text' id='option5_"+count+"' name='option_5[]' value='' placeholder='Enter option 5th' class='form-control'  /></td><td colspan='2'><input style='width:150px' type='text' id='answer5_"+count+"' name='answer_5[]' value='' placeholder='Enter Answer 5th' class='form-control'  /></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;

serail_no();

  var options2=document.getElementById('options6').value;

   if(options2=='4'){
      
   $('#option_tr1_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
   } 
   else if(options2=='5'){
    $('#option_tr1_'+count).show();
    $('#option_tr2_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
	 $('#answer5_'+count).prop('required',true);
	 $('#option5_'+count).prop('required',true);
   }

 }
 }
       
 function add_more_long(){

 var count=document.getElementById('div_count').value;
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control' /><table class='table table-striped'><tr class='paper_language_tr' style='display:none'><td colspan='4'><h4>Don't Know Hindi Typing? Don't Worry Click Here </h4><input type='button'  class='btn btn-success' value='click' onclick='hindi_typing_question("+count+");'><h5 style='display:none' id='suggestion_"+count+"'>Press Space for showing Content in Editor and change font style etc by selecting Content in Editor </h5><input type='hidden' id='count_value_"+count+"' value='1' ></input><input type='text' id='question_box_"+count+"' rows='2' onKeyUp='get_text_question("+count+")' name='content' class='form-control' style='display:none'></td></tr><tr><th><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th></th><th></th><td style='float:right;'> <b>Marks</th></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='width:65px; float:right;' type='text'  name='long_marks[]' value='' placeholder='Marks' class='form-control' style='margin-top:5px;' required /></td></tr><tr><th colspan='4'><textarea id='editor1_"+count+"' style='width:700px' class='form-control' name='long_question[]' placeholder='Enter Question' rows='4' required ></textarea></th></tr><tr><td style='padding-top:25px;'>Correct Answer</td><th></th><th></th><th><input type='button' style='float:right;' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></th></tr><tr class='paper_language_tr' style='display:none'><td colspan='4'><h4>Don't Know Hindi Typing? Don't Worry Click Here </h4><input type='button'  class='btn btn-success' value='click' onclick='hindi_typing_answer("+count+");'><h5 style='display:none' id='suggestion1_"+count+"'>Press Space for showing Content in Editor and change font style etc by selecting Content in Editor </h5><input type='hidden' id='count_value1_"+count+"' value='1' ></input><input type='text' id='answer_box_"+count+"' rows='2' onKeyUp='get_text_answer("+count+")' name='content' class='form-control' style='display:none'></tr></tr><tr><td colspan='4'><textarea style='width:700px' id='editor2_"+count+"' class='form-control' name='long_correct_answer[]' placeholder='Enter Answer' rows='4' required ></textarea></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;
serail_no();
 CKEDITOR.replace('editor1_'+count);
 CKEDITOR.replace('editor2_'+count);
	show_option();


	 
 }
 function add_more_short(){

 var count=document.getElementById('div_count').value;
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control' /><table class='table table-striped'><tr class='paper_language_tr' style='display:none'><td colspan='4'><h4>Don't Know Hindi Typing? Don't Worry Click Here </h4><input type='button'  class='btn btn-success' value='click' onclick='hindi_typing_question("+count+");'><h5 style='display:none' id='suggestion_"+count+"'>Press Space for showing Content in Editor and change font style etc by selecting Content in Editor </h5><input type='hidden' id='count_value_"+count+"' value='1' ></input><input type='text' id='question_box_"+count+"' rows='2' onKeyUp='get_text_question("+count+")' name='content' class='form-control' style='display:none'></td></tr><tr><th><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th></th><th></th><td style='float:right;'> <b>Marks</th></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='width:65px; float:right;' type='text'  name='long_marks[]' value='' placeholder='Marks' class='form-control' style='margin-top:5px;' required /></td></tr><tr><th colspan='4'><textarea id='editor1_"+count+"' style='width:700px' class='form-control' name='long_question[]' placeholder='Enter Question' rows='4' required ></textarea></th></tr><tr><td style='padding-top:25px;'>Correct Answer</td><th></th><th></th><th><input type='button' style='float:right;' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></th></tr><tr class='paper_language_tr' style='display:none'><td colspan='4'><h4>Don't Know Hindi Typing? Don't Worry Click Here </h4><input type='button'  class='btn btn-success' value='click' onclick='hindi_typing_answer("+count+");'><h5 style='display:none' id='suggestion1_"+count+"'>Press Space for showing Content in Editor and change font style etc by selecting Content in Editor </h5><input type='hidden' id='count_value1_"+count+"' value='1' ></input><input type='text' id='answer_box_"+count+"' rows='2' onKeyUp='get_text_answer("+count+")' name='content' class='form-control' style='display:none'></tr></tr><tr><td colspan='4'><textarea style='width:700px' id='editor2_"+count+"' class='form-control' name='long_correct_answer[]' placeholder='Enter Answer' rows='4' required ></textarea></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;
serail_no();
 CKEDITOR.replace('editor1_'+count);
 CKEDITOR.replace('editor2_'+count);
	show_option();


	 
 }
 function add_more_one_word(){
 var count=document.getElementById('div_count').value;
 if(count>14){
 alert_new('You Can not add more than 15 question in one shot ','red');
 }else{
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control'><table class='table table-striped'><tr><th style='width:20px'><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th><textarea style='width:700px' class='form-control' id='text_area_"+count+"' name='question[]' placeholder='Enter Question' rows='4' required ></textarea></th><th style='width:70px'>Marks</th><td style='width:70px'><input type='text'  name='marks[]' value='' placeholder='Marks' class='form-control' required /> <br/><input type='button' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></td></tr><tr><td style='text-align:center; padding-top:15px;'>A.</td><td><input style='width:700px' type='text' id='option1_"+count+"'  name='option_1[]' value='' placeholder='Enter option 1st' class='form-control' required /></td><td colspan='2'><input style='width:150px' type='text' id='answer1_"+count+"' name='answer_1[]' value='' placeholder='Enter Answer 1st' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:15px;'>B.</td><td><input style='width:700px' type='text' id='option2_"+count+"' name='option_2[]' value='' placeholder='Enter option 2nd' class='form-control' required /></td><td colspan='2'><input style='width:150px' type='text' id='answer2_"+count+"' name='answer_2[]' value='' placeholder='Enter Answer 2nd' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:15px;'>C.</td><td><input style='width:700px' type='text' id='option3_"+count+"' name='option_3[]' value='' placeholder='Enter option 3rd' class='form-control' required /></td><td colspan='2'><input style='width:150px' type='text' id='answer3_"+count+"' name='answer_3[]' value='' placeholder='Enter Answer 3rd' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr1_"+count+"'><td style='text-align:center; padding-top:15px;'>D.</td><td><input style='width:700px' type='text' id='option4_"+count+"' name='option_4[]' value='' placeholder='Enter option 4th' class='form-control'  /></td><td colspan='2'><input style='width:150px' type='text' id='answer4_"+count+"' name='answer_4[]' value='' placeholder='Enter Answer 4th' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr2_"+count+"'><td style='text-align:center; padding-top:15px;'>E.</td><td><input style='width:700px' type='text' id='option5_"+count+"' name='option_5[]' value='' placeholder='Enter option 5th' class='form-control'  /></td><td colspan='2'><input style='width:150px' type='text' id='answer5_"+count+"' name='answer_5[]' value='' placeholder='Enter Answer 5th' class='form-control'  /></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;
serail_no();

   var options2=document.getElementById('options6').value;
   if(options2=='4'){
   $('#option_tr1_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
   } 
   else if(options2=='5'){
    $('#option_tr1_'+count).show();
    $('#option_tr2_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
	 $('#answer5_'+count).prop('required',true);
	 $('#option5_'+count).prop('required',true);
   }

 }
 }
   function main_box_other(){

 var count=document.getElementById('div_count').value;
  if(count>14){
 alert_new('You Can not add more than 15 question in one shot ','red');
 }else{
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control' /><table class='table table-striped'><tr class='paper_language_tr' style='display:none'><td colspan='4'><h4>Don't Know Hindi Typing? Don't Worry Click Here </h4><input type='button'  class='btn btn-success' value='click' onclick='hindi_typing_question("+count+");'><h5 style='display:none' id='suggestion_"+count+"'>Press Space for showing Content in Editor and change font style etc by selecting Content in Editor </h5><input type='hidden' id='count_value_"+count+"' value='1' ></input><input type='text' id='question_box_"+count+"' rows='2' onKeyUp='get_text_question("+count+")' name='content' class='form-control' style='display:none'></td></tr><tr><th><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th></th><th></th><td style='float:right;'> <b>Marks</th></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='width:65px; float:right;' type='text'  name='long_marks[]' value='' placeholder='Marks' class='form-control' style='margin-top:5px;' required /></td></tr><tr><th colspan='4'><textarea id='editor1_"+count+"' style='width:700px' class='form-control' name='long_question[]' placeholder='Enter Question' rows='4' required ></textarea></th></tr><tr><td style='padding-top:25px;'>Correct Answer</td><th></th><th></th><th><input type='button' style='float:right;' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></th></tr><tr class='paper_language_tr' style='display:none'><td colspan='4'><h4>Don't Know Hindi Typing? Don't Worry Click Here </h4><input type='button'  class='btn btn-success' value='click' onclick='hindi_typing_answer("+count+");'><h5 style='display:none' id='suggestion1_"+count+"'>Press Space for showing Content in Editor and change font style etc by selecting Content in Editor </h5><input type='hidden' id='count_value1_"+count+"' value='1' ></input><input type='text' id='answer_box_"+count+"' rows='2' onKeyUp='get_text_answer("+count+")' name='content' class='form-control' style='display:none'></tr></tr><tr><td colspan='4'><textarea style='width:700px' id='editor2_"+count+"' class='form-control' name='long_correct_answer[]' placeholder='Enter Answer' rows='4' required ></textarea></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;
serail_no();
 CKEDITOR.replace('editor1_'+count);
 CKEDITOR.replace('editor2_'+count);
	show_option();


	} 
 }
 function add_more_unseen_passage(){
 var count=document.getElementById('div_count').value;
 if(count>14){
 alert_new('You Can not add more than 15 question in one shot ','red');
 }else{
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control'><table class='table table-striped'><tr><th style='width:20px'><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th><textarea style='width:700px' class='form-control' id='text_area_"+count+"' name='question[]' placeholder='Enter Question' rows='8' required ></textarea></th><th style='width:70px'>Marks</th><td style='width:70px'><input type='text'  name='marks[]' value='' placeholder='Marks' class='form-control' required /> <br/><input type='button' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></td></tr><tr><td style='text-align:center; padding-top:15px;'>Que. 1.</td><td><input style='width:700px' type='text' id='option1_"+count+"'  name='option_1[]' value='' placeholder='Enter Question 1st' class='form-control' required /></td></tr><tr><td style='text-align:center; padding-top:15px;'>Ans.</td><td><input style='width:700px' type='text' id='answer1_"+count+"' name='answer_1[]' value='' placeholder='Enter Answer 1st' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:15px;'>Que. 2.</td><td><input style='width:700px' type='text' id='option2_"+count+"' name='option_2[]' value='' placeholder='Enter Question 2nd' class='form-control' required /></td></tr><tr><td style='text-align:center; padding-top:15px;'>Ans.</td><td><input style='width:700px' type='text' id='answer2_"+count+"' name='answer_2[]' value='' placeholder='Enter Answer 2nd' class='form-control'  /></td></tr><tr><td style='text-align:center; padding-top:15px;'>Que. 3.</td><td><input style='width:700px' type='text' id='option3_"+count+"' name='option_3[]' value='' placeholder='Enter Question 3rd' class='form-control' required /></td></tr><tr><td style='text-align:center; padding-top:15px;'>Ans.</td><td><input style='width:700px' type='text' id='answer3_"+count+"' name='answer_3[]' value='' placeholder='Enter Answer 3rd' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr1_"+count+"'><td style='text-align:center; padding-top:15px;'>Que. 4.</td><td><input style='width:700px' type='text' id='option4_"+count+"' name='option_4[]' value='' placeholder='Enter Question 4th' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr11_"+count+"'><td style='text-align:center; padding-top:15px;'>Ans.</td><td><input style='width:700px' type='text' id='answer4_"+count+"' name='answer_4[]' value='' placeholder='Enter Answer 4th' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr2_"+count+"'><td style='text-align:center; padding-top:15px;'>Que. 5.</td><td><input style='width:700px' type='text' id='option5_"+count+"' name='option_5[]' value='' placeholder='Enter Question 5th' class='form-control'  /></td></tr><tr style='display:none;' id='option_tr22_"+count+"'><td style='text-align:center; padding-top:15px;'>Ans.</td><td><input style='width:700px' type='text' id='answer5_"+count+"' name='answer_5[]' value='' placeholder='Enter Answer 5th' class='form-control'  /></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;
serail_no();

   var options2=document.getElementById('options6').value;
   if(options2=='4'){
   $('#option_tr1_'+count).show();
   $('#option_tr11_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
   } 
   else if(options2=='5'){
    $('#option_tr1_'+count).show();
    $('#option_tr11_'+count).show();
    $('#option_tr2_'+count).show();
    $('#option_tr22_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
	 $('#answer5_'+count).prop('required',true);
	 $('#option5_'+count).prop('required',true);
   }

 }
 }
 
       
     function add_more_true_false(){
 var count=document.getElementById('div_count').value;
 if(count>14){
 alert_new('You Can not add more than 15 question in one shot ','red');
 }else{
count=parseInt(count)+parseInt(1);
 $("#div_"+count).show();
$( "#main_box1" ).append("<div class='box-body table-responsive no-padding' id='div_"+count+"'><br/><input type='hidden'  id='div_id_"+count+"' value='0' class='form-control'><table class='table table-striped'><tr><th style='width:20px'><input style='width:50px' type='text' readonly style='text-align:center;' id='s_no_"+count+"' value='"+count+"' class='form-control my_num' /></th><th><textarea style='width:700px' class='form-control' id='text_area_"+count+"' name='question[]' placeholder='Enter Question' rows='4' required ></textarea></th><th style='width:100px'>Marks&nbsp;<input type='text'  name='marks[]' value='' placeholder='Marks' class='form-control' required /> <br/><input type='button' class='addButton' id='' onclick='for_delete("+count+");' value='Delete' /></th></tr><tr><td style='text-align:center; padding-top:15px;'>A.</td><td><input style='width:700px' type='text' id='option1_"+count+"'  name='option_1[]' value='' placeholder='Enter option 1st' class='form-control' required /></td><td colspan='2'><select  class='form-control' id='answer1_"+count+"' name='answer_1[]' required ><option value=''>Select</option><option class='my_hindi' style='display:none;' value='सत्य '>सत्य </option><option class='my_hindi' style='display:none;' value='असत्य  '>असत्य  </option><option class='my_english' style='display:none;' value='True '>True</option><option class='my_english' style='display:none;' value='False  '>False  </option></select></td></tr><tr><td style='text-align:center; padding-top:15px;'>B.</td><td><input style='width:700px' type='text' id='option2_"+count+"' name='option_2[]' value='' placeholder='Enter option 2nd' class='form-control' required /></td><td colspan='2'><select  class='form-control' id='answer2_"+count+"' name='answer_2[]' required ><option value=''>Select</option><option class='my_hindi' style='display:none;' value='सत्य '>सत्य </option><option class='my_hindi' style='display:none;' value='असत्य  '>असत्य  </option><option class='my_english' style='display:none;' value='True '>True</option><option class='my_english' style='display:none;' value='False  '>False  </option></select></td></tr><tr><td style='text-align:center; padding-top:15px;'>C.</td><td><input style='width:700px' type='text' id='option3_"+count+"' name='option_3[]' value='' placeholder='Enter option 3rd' class='form-control' required /></td><td colspan='2'><select  class='form-control' id='answer3_"+count+"' name='answer_3[]' required ><option value=''>Select</option><option class='my_hindi' style='display:none;' value='सत्य '>सत्य </option><option class='my_hindi' style='display:none;' value='असत्य  '>असत्य  </option><option class='my_english' style='display:none;' value='True '>True</option><option class='my_english' style='display:none;' value='False  '>False  </option></select></td></tr><tr style='display:none;' id='option_tr1_"+count+"'><td style='text-align:center; padding-top:15px;'>D.</td><td><input style='width:700px' type='text' id='option4_"+count+"' name='option_4[]' value='' placeholder='Enter option 4th' class='form-control'  /></td><td colspan='2'><select  class='form-control' id='answer4_"+count+"' name='answer_4[]'  ><option value=''>Select</option><option class='my_hindi' style='display:none;' value='सत्य '>सत्य </option><option class='my_hindi' style='display:none;' value='असत्य  '>असत्य  </option><option class='my_english' style='display:none;' value='True '>True</option><option class='my_english' style='display:none;' value='False  '>False  </option></select></td></tr><tr style='display:none;' id='option_tr2_"+count+"'><td style='text-align:center; padding-top:15px;'>E.</td><td><input style='width:700px' type='text' id='option5_"+count+"' name='option_5[]' value='' placeholder='Enter option 5th' class='form-control'  /></td><td colspan='2'><select  class='form-control' id='answer5_"+count+"' name='answer_5[]'  ><option value=''>Select</option><option class='my_hindi' style='display:none;' value='सत्य '>सत्य </option><option class='my_hindi' style='display:none;' value='असत्य  '>असत्य  </option><option class='my_english' style='display:none;' value='True '>True</option><option class='my_english' style='display:none;' value='False  '>False  </option></select></td></tr></table><br/></div>");
document.getElementById('div_count').value=count;
document.getElementById('div_id_'+count).value=1;
serail_no();

var paper_language2=document.getElementById('paper_language').value;
if(paper_language2=='Hindi'){
	 $(".my_hindi").each(function() {
	 $(this).show();
     });
	 $(".my_english").each(function() {
	 $(this).hide();
     });
     
}else{
	 $(".my_hindi").each(function() {
	 $(this).hide();
     });
	 $(".my_english").each(function() {
	 $(this).show();
     });
}

   var options2=document.getElementById('options6').value;
   if(options2=='4'){
   $('#option_tr1_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
   } 
   else if(options2=='5'){
    $('#option_tr1_'+count).show();
    $('#option_tr2_'+count).show();
   $('#answer4_'+count).prop('required',true);
   $('#option4_'+count).prop('required',true);
	 $('#answer5_'+count).prop('required',true);
	 $('#option5_'+count).prop('required',true);
   }
 }
 }    
 function for_delete(id){
	 $('#div_'+id).remove();
	 var count=document.getElementById('div_count').value;
	 var i=1;
	 count=count-1;
	 document.getElementById('div_count').value=count;
	 $(".my_num").each(function() {
	 $(this).val(i);
	 i++;
     });
	 serail_no();
 }
 function serail_no()
 {
var total=document.getElementById('div_count').value;
 var serial_number=1;
 for(var i=1;i<=total;i++){
 var count=document.getElementById('div_id_'+i).value;
 if(count==1){
 document.getElementById('s_no_'+i).value=+serial_number;
 serial_number=parseInt(serial_number)+parseInt(1);
 }
 else{
  document.getElementById('s_no_'+i).value=0;
 }
 }
 }
 
  function show_option(){
var paper_language2=document.getElementById('paper_language1').value;
	if(paper_language2=='Hindi'){
 $(".paper_language_tr").each(function(){
	 $(this).show();
     });
	 }else{
	  $(".paper_language_tr").each(function(){
	 $(this).hide();
     });
	 }
 
 }


  $(function () { 
    show_option(); 
    CKEDITOR.replace('editor1_1')
	CKEDITOR.replace('editor2_1')
	onLoad();
    $('.textarea').wysihtml5()
  })
 </script> <section class="content-header">
      <h1>
        Paper Setter
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
		   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	   <li><a href="javascript:get_content('exam_paper_setter/exam_paper_setter')"><i class="fa fa-dashboard"></i> Paper Setter Management</a></li>
	   <li class="active">Add Question</li>
      </ol>
    </section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
		   <div class="box-body">
		   <input type="hidden"  id="div_count" value="0"  class="form-control">
			<form method="post" enctype="multipart/form-data" id="my_form">
			<div class="col-md-12 ">
               <div class="col-md-1">	
				</div>	
				
					 				<div class="col-md-5">				
					 <div class="form-group" >
					    <label>Class</label>
					    <select name="question_class" id="question_class" class="form-control" required onchange="for_subject(this.value);for_book();" >
								  					  <option value="NURSERY">NURSERY</option>
					   						    
						       						       <option value="NURSERY">NURSERY</option>
					           						       <option value="LKG">LKG</option>
					           						       <option value="UKG">UKG</option>
					           						       <option value="1ST">1ST</option>
					           						       <option value="2ND">2ND</option>
					           						       <option value="3RD">3RD</option>
					           						       <option value="4TH">4TH</option>
					           						       <option value="5TH">5TH</option>
					           						       <option value="6TH">6TH</option>
					           						       <option value="7TH">7TH</option>
					           						       <option value="8TH">8TH</option>
					           						       <option value="9TH">9TH</option>
					           						       <option value="10TH">10TH</option>
					           						       <option value="11TH">11TH</option>
					           						       <option value="12TH">12TH</option>
					           					    </select>
				
					  
					   
					</div>
				 </div>
				 			 <div class="col-md-5">				
					 <div class="form-group" >
					  <label >Subject</label>
					  <select name="question_subject" id="question_subject" onchange="for_book();" class="form-control" required >
					  		  					  <option value="Animal Husbandry And Poultary Farm">Animal Husbandry And Poultary Farm</option>
					   					
					  </select>
					</div>
				 </div>
		
			</div>
			 <div class="col-md-12 ">
                <div class="col-md-1">	
				</div>
								 <div class="col-md-5">				
					 <div class="form-group" >
					  <label >Question Book Name</label>
					  <div class="input-group">
					  <select name="question_book_dropdown" id="new_book_dropdown" onchange="select_book_name(this.value)" class="form-control"  required >
					   					  <option value="questions">questions</option>
					   					  </select>
					  <input type="text"  id="new_book_input" name="question_book_input" value="questions" oninput="enter_book_name(this.value)" style="display:none" placeholder="Enter Question Book Name" class="form-control" />
					  <span class="input-group-addon" style="padding:0px;">
					    <input type="button" class="btn" id="book_type1" onclick="book_type(this.value);" value="Add New">
						</span>
						<input type="hidden" value="Add New" id="book_type_hidden" name="book_type_hidden">
						</div>
					</div>
				 </div>
		 <div class="col-md-5">				
					 <div class="form-group" >
					  <label >Chapter</label>
					  <select name="question_chapter" id="question_chapter" class="form-control" required>
					  		   					  <option value="2nd">2nd</option>
					   		
					  <option value="1st">1st</option>
					  <option value="2nd">2nd</option>
					  <option value="3rd">3rd</option>
					  <option value="4th">4th</option>
					  <option value="5th">5th</option>
					  <option value="6th">6th</option>
					  <option value="7th">7th</option>
					  <option value="8th">8th</option>
					  <option value="9th">9th</option>
					  <option value="10th">10th</option>
					  <option value="11th">11th</option>
					  <option value="12th">12th</option>
					  <option value="13th">13th</option>
					  <option value="14th">14th</option>
					  <option value="15th">15th</option>
					  <option value="16th">16th</option>
					  <option value="17th">17th</option>
					  <option value="18th">18th</option>
					  <option value="19th">19th</option>
					  <option value="20th">20th</option>
					  <option value="21st">21st</option>
					  <option value="22nd">22nd</option>
					  <option value="23rd">23rd</option>
					  <option value="24th">24th</option>
					  </select>
					</div>
				 </div>
			
			 </div>
			  <div class="col-md-12 ">
                <div class="col-md-1">	
				</div>
					<div class="col-md-5">	
					  <label >Paper Language</label>
					  <select name="paper_language2" class="form-control" id="paper_language" onchange="for_change();for_change_header(this.value,'hindi_typing');">
					    					  <option value="Hindi">Hindi</option>
					   
					  <option value="Hindi">Hindi</option>
					  <option value="English">English</option>
					  </select>
					</div>
				<div class="col-md-5">		
                    <input type="hidden"   value="Objective"/>				
					 <div class="form-group" >
					  <label >Question Type</label>
					  <select  class="form-control" name="question_type2" id="question_type1" onchange="for_change();for_question(this.value)">
					  					  <option value="Objective">Objective</option>
					   					  <option value="Objective">Objective</option>
					  <option value="True_False">True / False</option>
					  <option value="Fill_in_the_blank">Fill in the blank</option>
					  <option value="Short_Question">Short Question</option>
					  <option value="Long_Question">Long Question</option>
					  <option value="Unseen_Passage">Unseen Passage</option>
					  <option value="One_word">One Word</option>
					  <option value="Matching">Matching</option>
					  <option value="Other">Other</option>
					  </select>
					</div>
				</div>
			 </div>
			 			  <div class="col-md-12 ">
                <div class="col-md-1">	
				</div>
				 <div class="col-md-5">				 
					 <div class="form-group" style="display:none;" id="options">
					  <label >Total Options</label>
					  <select name="options6" class="form-control" id="options6" onchange="for_change();">
							  					  <option value="3">3</option>
					   					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  </select>
					</div>
				</div>
			 </div>
             <div class="col-sm-12">
			 <div class="col-sm-1"></div>
			 <div class="col-sm-10" id="question_panel">	
			 	  <div class="box" id="main_box1">
				   </div>
				   			 
					  <center><input type="submit"  class="addButton btn  btn-success" name="objective" value="submit"  />
					<input type="button" class="addButton btn  btn-success" id="addButton" onclick="add_questions();" value="Add More" /></center><br/>
			 </div>

			 </div>
			 
          </form> 
	</div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
	

<script>
function add_questions(){
var question_type = document.getElementById('question_type1').value;
var options5 = document.getElementById('options6').value;
for_question(question_type);
if(question_type=='Objective' || question_type=='True_False' || question_type=='Fill_in_the_blank' || question_type=='Matching' || question_type=='One_word'  || question_type=='Unseen_Passage')
{
for_options(options5);
}
}
add_questions();
</script>

