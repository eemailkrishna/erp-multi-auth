<script>
      function paper_publish(data,id)
  {
   
    $.ajax({
    type:"POST",
    url:access_link+"smartclass/online_exam_paper_publish.php?s_no="+data+"&id="+id,
    cache:"false",
    success:function(detail)
    {
        var res=detail.split("|?|");
    
              if(res[1]=='success'){
            if(id=='1'){
        alert_new('Successfully Unpublished!!!',"Green");
            }else{
        alert_new('Successfully Published!!!',"Green");
            }
        get_content('smartclass/paper_list');
            }else{
                 alert_new('Please Select Desire Number Of Questions!!!','red');    
            }
    }
    });
  }

</script>

<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_question(s_no);       
 }            
else{      
return false;
 }       
 }

function delete_question(s_no){
    var paper_code=document.getElementById('paper_code').value;
$.ajax({
type: "POST",
url: access_link+"smartclass/online_exam_question_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted!!!','green');
				   post_content('smartclass/online_exam_question_view','paper_code='+paper_code);
			   }else{
               	   alert_new('Sorry!!! Some Error Occured','red'); 
			   }
}
});
}
function question_edit(s_no){
$.ajax({
type: "POST",
url: access_link+"smartclass/online_exam_question_edit.php?id="+s_no+"",
cache: false,
success: function(detail){
 $("#question_edit_div").html(detail); 
			   
}
});
}
var element_id='text_area_1';
    function special_char(chararacter){
        var get_data=$("#"+element_id).val();
        var new_val=get_data+chararacter;
       $("#"+element_id).val(new_val);  
       $("#"+element_id).focus();  
    }
    function element_id_set(id){
        element_id=id;
      
    }
function set_detail(value){
   post_content('smartclass/online_exam_question_view','paper_code='+value);
}
 </script>
 
 <section class="content-header">
      <h1>
       Online Exam
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
			 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
			   <li><a href="javascript:get_content('smartclass/smartclass')"><i class="fa fa-book"></i> Smart Class</a></li>
	 <li><a href="javascript:get_content('smartclass/online_exam')"><i class="fa fa-dashboard"></i>Online Exam</a></li>
        <li class="active">Paper List</li>
      </ol>
    </section>

    <section class="content">
           <div class="box box-success ">
            <div class="box-header with-border">
              <h3 class="box-title">Paper Question Details</h3>
            </div>
            <div class="box-body">
                <br>
                	<div class="col-md-12 ">
               <div class="col-md-4">       
               <div class="form-group">
                  <label>Select Paper Code</label>
                  <select  class="form-control select2" onchange="set_detail(this.value);" id="paper_code" name="paper_code">
                    <option value="">Select Paper</option>
                                                               <option  value="3rd_english_31102022104035">Hindi[3rd_english_31102022104035]</option>
                             <option selected value="lkg_english_05082022041651">Test -1[lkg_english_05082022041651]</option>
                             <option  value="5th_mathematics_13072022112154">maths[5th_mathematics_13072022112154]</option>
                             <option  value="12th_ag bio_20062022123639">baldev[12th_ag bio_20062022123639]</option>
                             <option  value="8th_hindi _30042022125847">ddf[8th_hindi _30042022125847]</option>
                             <option  value="12th_physics_10032022065357">Test -22[12th_physics_10032022065357]</option>
                             <option  value="12th_physics_10032022065906">Test -11[12th_physics_10032022065906]</option>
                             <option  value="12th_physics_10032022050655">test-1[12th_physics_10032022050655]</option>
                             <option  value="nursery_english_03022022024253">halfyearly[nursery_english_03022022024253]</option>
                             <option  value="4th_english_19012022125622">English[4th_english_19012022125622]</option>
                             <option  value="10th_hindi _22122021113720">122[10th_hindi _22122021113720]</option>
                             <option  value="7th_hindi _20092021121309">hindi kkavya[7th_hindi _20092021121309]</option>
                             <option  value="1st_english_13092021055504">enlish[1st_english_13092021055504]</option>
                             <option  value="10th_english_02092021113413">hdgh[10th_english_02092021113413]</option>
                             <option  value="5th_english_02082021094437">halfyear[5th_english_02082021094437]</option>
                             <option  value="nursery_english_31072021034112">halfyear [nursery_english_31072021034112]</option>
                             <option  value="5TH_English_28072021113637">testing[5TH_English_28072021113637]</option>
                             <option  value="NURSERY_Mathematics_21072021031203">dummy[NURSERY_Mathematics_21072021031203]</option>
                             <option  value="NURSERY_English_21072021025950">Testing[NURSERY_English_21072021025950]</option>
                             <option  value="NURSERY_English_21072021024846">halfyear [NURSERY_English_21072021024846]</option>
                             <option  value="5TH_English_01072021055328">halfyear [5TH_English_01072021055328]</option>
                             <option  value="__24052021023928">test[__24052021023928]</option>
                             <option  value="__21042021104559">ut[__21042021104559]</option>
                             <option  value="NURSERY_All_21042021102056">NURSERY_All_21042021101346[NURSERY_All_21042021102056]</option>
                             <option  value="NURSERY_All_21042021101346">eng[NURSERY_All_21042021101346]</option>
                             <option  value="1ST_English_15042021120619">english[1ST_English_15042021120619]</option>
                             <option  value="NURSERY_Computer_14042021115611">unit  test-3[NURSERY_Computer_14042021115611]</option>
                             <option  value="NURSERY_ENGLISH_05042021110030">UT 1[NURSERY_ENGLISH_05042021110030]</option>
                             <option  value="NURSERY_All_05042021114918">ENLISH[NURSERY_All_05042021114918]</option>
                             <option  value="__03042021071805">Hindi[__03042021071805]</option>
                             <option  value="1ST_English_02032021094507">Aks[1ST_English_02032021094507]</option>
                             <option  value="__22022021025026">enlish[__22022021025026]</option>
                             <option  value="12TH_Physics_12022021092818">physics[12TH_Physics_12022021092818]</option>
                             <option  value="1ST_Hindi _10022021024259">Hindi[1ST_Hindi _10022021024259]</option>
                             <option  value="LKG_PROJECT WORK (ENGLISH)_31012021015446">hbjb[LKG_PROJECT WORK (ENGLISH)_31012021015446]</option>
                             <option  value="UKG_Regularity_24012021075208">mid term[UKG_Regularity_24012021075208]</option>
                             <option  value="UKG_Cleanliness_21012021112005">fddsf[UKG_Cleanliness_21012021112005]</option>
                             <option  value="NURSERY_Computer_04012021013530">unit test[NURSERY_Computer_04012021013530]</option>
                             <option  value="10TH_Mathematics_05122020111837">Maths[10TH_Mathematics_05122020111837]</option>
                             <option  value="10TH_Mathematics_05122020111837">Maths[10TH_Mathematics_05122020111837]</option>
                             <option  value="9TH_English_14112020090834">ONLINE TEST-3[9TH_English_14112020090834]</option>
                             <option  value="7TH_All_14112020091029">ONLINE TEST-2[7TH_All_14112020091029]</option>
                             <option  value="7TH_All_28102020103445">polity[7TH_All_28102020103445]</option>
                             <option  value="LKG_Mathematics_12092020115929">Maths 1 to 100[LKG_Mathematics_12092020115929]</option>
                             <option  value="1ST_English_05092020113638">ENGLISH[1ST_English_05092020113638]</option>
                             <option  value="NURSERY_Computer_22072020014654">Test 1[NURSERY_Computer_22072020014654]</option>
                             <option  value="8TH_Mathematics_Maths_09-06-2020_english">Maths[8TH_Mathematics_Maths_09-06-2020_english]</option>
                             <option  value="2ND_All_Urdu_31-05-2020_english">Urdu[2ND_All_Urdu_31-05-2020_english]</option>
                             <option  value="__dsdffdf_28-05-2020_hindi">dsdffdf[__dsdffdf_28-05-2020_hindi]</option>
                             <option  value="1ST_All_English_20-05-2020_english">English[1ST_All_English_20-05-2020_english]</option>
                             <option  value="__english_05-05-2020_hindi">english[__english_05-05-2020_hindi]</option>
                             <option  value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short paper_01-05-2020_hindi]</option>
                             <option  value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short paper_01-05-2020_hindi]</option>
                             <option  value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short paper_01-05-2020_hindi]</option>
                             <option  value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short paper_01-05-2020_hindi]</option>
                             <option  value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short paper_01-05-2020_hindi]</option>
                             <option  value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short paper_01-05-2020_hindi]</option>
                             <option  value="NURSERY_All_short paper_01-05-2020_hindi">short paper[NURSERY_All_short paper_01-05-2020_hindi]</option>
                             <option  value="NURSERY_All_testing_">testing[NURSERY_All_testing_]</option>
                             <option  value="NURSERY_All_test_29-">test[NURSERY_All_test_29-]</option>
                             <option  value="NURSERY_Cleanliness_">hjhk[NURSERY_Cleanliness_]</option>
                             <option  value="Paper-101">History Paper[Paper-101]</option>
                           </select>
                </div>
             </div>
            </div>
            </div>
            </div>
            <br>
                                      <div class="box box-success ">
             <div class="box-header with-border">
              <h3 class="box-title">Question List</h3>
            </div>
            <div class="box-body">
               	<div class="col-md-12">
               	    <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>#</th>
				  <th>Paper ID</th>
				  <th>Paper Name</th>
				  <th>Question</th>
				  <th>Option-1</th>
				  <th>Option-2</th>
				  <th>Option-3</th>
				  <th>Option-4</th>
				  <th>Answer</th>
			      <th>Edit</th>
				  <th>Delete</th>
	
                </tr>
                </thead>
                <tbody>
                
				
                <tr>
                  <td>1</td>
				  <td>lkg_english_05082022041651</td>
                  <td>Test -1</td>
                  <td>Who is India Prime Minister</td>
				  <td>Mamohan Singh</td>
				  <td>Rahul Gandhi</td>
				  <td>Sonia Gandhai</td>
				  <td>Narendra Modi</td>
				  <td>D</td>
				  <td><button type="button"  onclick="question_edit('112')" class="btn btn-success">Edit</button></td>
				  <td><button type="button" onclick="valid('112')" class="btn btn-success" >Delete</button></td>
                </tr>
                                </tbody>
             </table>
            </div>
                     </div>
         <div id="question_edit_div"></div>
        </div>
        </div>
     
    </section>
   <script>
 $(function(){
 $(".select2").select2();
 $("#example1").DataTable();
})	   
</script>