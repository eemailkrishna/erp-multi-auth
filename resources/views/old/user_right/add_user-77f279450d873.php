<script>
function check_all_class1(){
  if($('#id_class_check').prop('checked')) {
  		$('.check_all_class').each(function() {
		 $(this).prop('checked',true);
		});
}else{
  		$('.check_all_class').each(function() {
		 $(this).prop('checked',false);
		});
}
}

function class_wise_check(id){
  if($('#id_check_all_classwise'+id).prop('checked')) {
  		$('.check_all_classwise'+id).each(function() {
		 $(this).prop('checked',true);
		});
}else{
  		$('.check_all_classwise'+id).each(function() {
		 $(this).prop('checked',false);
		});
}
}
function class_wise_check_reverse(id){

$('#id_check_all_classwise'+id).prop('checked',true);
var x1='0';
$('.check_all_classwise'+id).each(function() {
if($(this).prop('checked')){
x1='1';
}
});
if(x1=='0'){
$('#id_check_all_classwise'+id).prop('checked',false);
}
}

function myFunction(){
var x1='0';
$('.check_all_class').each(function() {
if($(this).prop('checked')){
x1='1';
}
});
if(x1=='0'){

alert_new('Please Select Atleast One Class','red');
return false;
}
var x2='0';
$('.check_all_panel').each(function() {
if($(this).prop('checked')){
x2='1';
}
});
if(x2=='0'){

alert_new('Please Select Atleast One Panel','red');
return false;
}
return true;
}






function check_all_panel_wise(id){
  if($('#panel_'+id).prop('checked')) {
  		$('.check_'+id).each(function() {
		 $(this).prop('checked',true);
		});
}else{
  		$('.check_'+id).each(function() {
		 $(this).prop('checked',false);
		});
}
}
function check_all_panel_wise_all(id){
$('#panel_'+id).prop('checked',true);

}
function check_edit_delete(id){
  if($('#edit_delete_'+id).prop('checked')) {
$('#delete_'+id).prop('checked',true);
$('#edit_'+id).prop('checked',true);
}else{
$('#delete_'+id).prop('checked',false);
$('#edit_'+id).prop('checked',false);
}
}
function check_edit_delete_reverse(id1,id){
$('#edit_delete_'+id).prop('checked',true);
$('#panel_'+id1).prop('checked',true);
}

function check_all_panel1(){
  if($('#id_panel_check').prop('checked')) {
  		$('.check_all_panel').each(function() {
		 $(this).prop('checked',true);
		});
}else{
  		$('.check_all_panel').each(function() {
		 $(this).prop('checked',false);
		});
}
}
    function get_emp_detail(id){ 
post_content('user_right/add_user','user_email='+id);
            }
			
			
 $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"user_right/add_user_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
			   alert_new('Successfully Complete','green');
			   get_content('user_right/user_list');
            }
			}
         });
      });			
			
</script>

    <section class="content-header">
      <h1>
        User Right
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('user_right/user_right')"><i class="fa fa-photo"></i> User Rights</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add User</li>
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
              <h3 class="box-title">Add User</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			<form role="form" method="post"  onsubmit=" return myFunction()" id="my_form">
            <div class="box-body "  >
			
			
				 <div class="col-md-12 ">
				 <div class="col-md-4 ">
						<div class="form-group">
						  <label>Select User</label>
						   <select   name="user_id"   placeholder=""   class="form-control select2" onchange='get_emp_detail(this.value);' >
						   <option value=''>select</option>
						   	<option selected value='kailusoni99@gmail.com' >kailash soni[9617777047]</option>
			<option selected value='kailusoni99@gmail.com' >kailash soni[9617777047]</option>
			<option  value='jay@gmail.com' >jay kishan[9864645645]</option>
			<option  value='rajaak987@gmail.com' >Abhul Rjaak [9685745263]</option>
			<option  value='someone@someid.com' >suresh soni[07878963254]</option>
			<option  value='KOSAL78@GMAIL.COM' >rohan[25625634]</option>
			<option  value='demo@gmail.com' >DEMO[9717386989]</option>
			<option  value='dummy@gmail.com' >shreya sharma[987461236]</option>
			<option  value='abc@gmail.com' >pravin[7578412587]</option>
			<option  value='sunflowerpublicschool786@gmail.com' >sanjay[8654963254]</option>
			<option  value='rashisaxena1997@gmail.com' >Rashi Saxena[9630843846]</option>
			<option  value='rajanikanta.fine@gmail.com' >Pankajini Patra[8249570835]</option>
			<option  value='rajanikanta.fine@gmail.com' >Jyoti Ranjan Patra[+917008251522]</option>
			<option  value='rajanikanta.fine@gmail.com' >Goutam Kumar Das[+916371329608]</option>
			<option  value='rajanikanta.fine@gmail.com' >Human Ram Bhati[8249570835]</option>
			<option  value='rajanikanta.fine@gmail.com' >Premshankar Yadav[8249570835]</option>
			<option  value='rajanikanta.fine@gmail.com' >Amit Kumar Patra[8249570835]</option>
			<option  value='rajanikanta.fine@gmail.com' >Sibdutta Negi[9981229723]</option>
			<option  value='vbr.svn@gmail.com' >Brahmarao[9949458795]</option>
			<option  value='srishtigusain56@gmail.com' >srishti gusain[8602503194]</option>
			<option  value='HARSHALI234@GMAIL.COM' >HARSHALI SHAH[9406046007]</option>
			<option  value='tushar234@gmail.com' >tushar modi [8109964727]</option>
			<option  value='SUDEEP.S.SALUJA@GMAIL.COM' >DS SALUJA[9009742474]</option>
			<option  value='rathore.ayush37@gmail.com' >AYUSH[9406855366]</option>
			<option  value='SIR1234@GMAIL.COM' >TUSHAR IYRE [9845632156]</option>
			<option  value='rajani.winzon@gmail.com' >Rajanikanta Mund[8249570835]</option>
			<option  value='umeshmourya2580@gmail.com' >kunal mourya[8889648546]</option>
			<option  value='SANTOSHSAHU6513@GMAIL.COM' >MR. SANTOSH KUMAR SAHU[8718909760]</option>
			<option  value='BHOOPENDRA081194@GMAIL.COM' >MR. BHOOPENDRA LODHI [9340342389]</option>
			<option  value='anjli@gmail.com' >Anjali ojha[887666]</option>
			<option  value='thakuratulsingh53@gmail.com' >atul singh thakur [7089840046]</option>
			<option  value='nagendra709042198@GMAIL.COM' >SANTOSH KUMAR SINGH[9709042198]</option>
			<option  value='rani2@gmail.com' >rani[8275483645]</option>
			<option  value='ravi100281@gmail.com' >KUMAR RAVIKANT[7979046795]</option>
			<option  value='abc@gmail.com' >nikhil advin[1236547896]</option>
			<option  value='rani2@gmail.com' >sadab[8275483645]</option>
			<option  value='admin@gmail.com' >Ravi[00000000]</option>
			<option  value='sam.harle@rediffmail.com' >Samir harle[7083029022 ]</option>
			<option  value='umeshmourya2580@gmail.com' >umesh mourya[7067247461]</option>
			<option  value='neelamjharbade94@gmail.com' >Neelam jharbade[]</option>
			<option  value='xyz@gmail.com' >anand sharma[1234567890]</option>
			<option  value='jittu1988@gmail.com' >jitendra shriwash[9691737446]</option>
			<option  value='demofaculty@gmail.com' >demo faculty[]</option>
			<option  value='vatan.niit@gmail.com' >VATAN VERMA[8840241165]</option>
			<option  value='user1@gmail.com' >user1[]</option>
			<option  value='pawan1995@gmail.com' >Pawan malviya[7746943011]</option>
			<option  value='teacher@gmail.com' > teacher[]</option>
			<option  value='abhisheksingh2122@gmail.com' >ABHISHEK SINGH THAKUR[9300174646]</option>
			<option  value='JKLJKLJKJK@GMAIL.COM' >MONU KUMAR[89559698998]</option>
			<option  value='abhi23@gmail.com' >abhushek[8630913086]</option>
			<option  value='teacher1@gmail.com' >Teacher[]</option>
			<option  value='saltnatansari159@gmail.com' >Supriya tiwari[8319595088]</option>
			<option  value='yash14@gmail.com' >Yashpal Kr[741236985]</option>
			<option  value='VAISHNAVIAGRWAL123@GAMIL.COM' >VAISHNAVI AGRWAL[7900927306]</option>
			<option  value='KKHAN0025@GMAIL.COM' >KAREEM RANA[8859090867]</option>
			<option  value='KPALWINDER1972@GMAIL.COM' >PALWINDER KAUR[9417894252]</option>
			<option  value='Satishtiwari77616@gmail.com' >Supriya Santosh[4454655y6547]</option>
			<option  value='jahir.maxwell@gmail.com' >MD JAHIR KHAN[+919086669999]</option>
			<option  value='supriyasantosh1234@gmail.com' >Supriya Santosh[8602503194]</option>
			<option  value='lakshya4shiksha@gmail.com' >Mr Daya Nand Tiwari[9336024608]</option>
			<option  value='yadavsatyaprakashr@gmail.com' >satyaprakash yadav[9638277283]</option>
			<option  value='upadhyaygroup1@gmail.com' >praveen[8120900282]</option>
			<option  value='neelamjharbade94@gmail.com' >Neelam jharbade[8109668266]</option>
			<option  value='tribhuwan311@gmail.com' >Tribhuwan Kumar[9155703545]</option>
			<option  value='tribhuwan311@gmail.com' >SURAJ KUMAR SINGH[9576771430]</option>
			<option  value='rohit@simption.com' >Rohit []</option>
			<option  value='ymeysssj@gmail' >umesh[]</option>
			<option  value='Satishtiwari77616@gmail.com' >Shiwanand Tiwari[8602503194]</option>
			<option  value='someone@someid.com' >suresh soni[]</option>
			<option  value='dupanzgam@gmail.com' >RAYEES[9906412069]</option>
			<option  value='anayat@gmail.com' >ANAYAT ULLAH[99064112069]</option>
			<option  value='rather@gmail.com' >xxx[]</option>
			<option  value='rather@gmail.com' >AAA[]</option>
			<option  value='tushar234@gmail.com' >AA[]</option>
			<option  value='javid@gmail.com' >JAVID[]</option>
			<option  value='hansraj4384@gmail.com' >Hansraj[8053038939]</option>
			<option  value='dhakadmohit60448@gmail.com' >Mohit nagar[7999245216]</option>
			<option  value='rkmps2014@gmail.com' >PRAKASH KUMAWAT[]</option>
			<option  value='sunitabai@gmail.com' >Sunita Bai[9992288710]</option>
			<option  value='Rati@gmail.com' >Rati [9638527410]</option>
			<option  value='lucyy@gmail.com' >Priyanka kaushik[9926534586]</option>
			<option  value='000@GMAIL.COM' >JAGMAL YADAV[]</option>
			<option  value='ABC@GMAIL.COM' >RAMKISHAN JI[]</option>
			<option  value='radhachohan@gmail.com' >rima d[]</option>
			<option  value='jjj33@gmail.com' >nidhi[7656754345]</option>
			<option  value='rani73@gmail.com' >pooja [56475534]</option>
			<option  value='kftg@gmail.com' >ufgv[25646541]</option>
			<option  value='monika@gmail.com' >Moniika[9825356122]</option>
			<option  value='monika@gmail.com' >Monika[9821556548]</option>
			<option  value='mahsramshamli@gmail.com' >shamli [6359874129]</option>
			<option  value='kjhatimple@gmail.com' >kundan kumar jha[8789581784]</option>
			<option  value='radhachohan@gmail.com' >JAGMAL YADAV[9898788845]</option>
			<option  value='mkb@gmail.com' >rahul [56455698]</option>
			<option  value='eswari@gmail.com' >eswari[6369209603]</option>
			<option  value='radhachohan@gmail.com' >JAGMAL YADAV[]</option>
			<option  value='radhachohan@gmail.com' >JAGMAL YADAV[]</option>
			<option  value='AA@GMAIL.COM' >ABJISHEK LAND[]</option>
			<option  value='TS20@GMAIL.COM' >TUSHAR SULTANE[]</option>
			<option  value='PATILPARVATI072@GAMIL.COM' >PARVATI PATIL[7477010621]</option>
			<option  value='ASHADURMONDALL@GMAIL.COM' >ASHADUR RAHMAN MONDAL[7005657009]</option>
			<option  value='AAA@AAA.COM' >TUSHAR[0]</option>
			<option  value='vivekies2000@gmail.com' >VIVEK KUMAR[9525553060]</option>
			<option  value='sureshramesh@gmail.com' >suresh Devashi[9820964914]</option>
					</select>

						</div>
			</div>
			
			 <div class="col-md-4 ">
						<div class="form-group">
						  <label>User Name</label>
						   <input type="text"  name="user_name"  id='user_name' placeholder="User Name"  value="kailash soni" class="form-control " required />
						</div>
			</div>
	

				 <div class="col-md-4 ">
						<div class="form-group">
						  <label>Email</label>
						   <input type="email"  name="user_email"  id='user_email' placeholder="Email"  value="kailusoni99@gmail.com" class="form-control " required readonly />
						</div>
			</div>
				 <div class="col-md-4 ">
						<div class="form-group">
						  <label>Mobile</label>
						   <input type="text"  name="user_mobile"  id='user_mobile' placeholder="Mobile"  value="9617777047" class="form-control " required />
						</div>
			</div>
				 <div class="col-md-4 ">
						<div class="form-group">
						  <label>Designation</label>
						   <input type="text"  name="user_designation"  id='user_designation' placeholder="Designation"  value="Teacher" class="form-control " required />
						</div>
			</div>
						 <div class="col-md-4 ">
						<div class="form-group">
						  <label>Password</label>
						   <input type="text"  name="user_password"  id='user_password' placeholder="Password"  value="12220" class="form-control " required />
						</div>
			</div>
			</div>

	
	</div>
	
	     
			          <div <div class="box box-success" >>
            <div class="box-header with-border">
              <h3 class="box-title">Panel Rights</h3>  
			  <input type="checkbox"   id="id_panel_check"   onclick="check_all_panel1()" />
				     <label>Check All</label>
            </div>
            <!-- /.box-header -->
          
                        <div class="box-body table-responsive">
              <table id="" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th style='width:50px'>S No</th>
                  <th style='width:200px' colspan="2">Main Head</th>
                  <th colspan="12">Sub Head</th>
				 </tr>
				   <tr>
                  <th style='width:50px'></th>
                  <th style='width:25px'></th>
                  <th style='width:200px'></th>
                  <th style='width:25px'></th>
                  <th style='width:200px'></th>
				  <th style='width:25px'></th>
                  <th style='width:200px'></th>
				  <th style='width:25px'></th>
                  <th style='width:200px'></th>
				  <th style='width:25px'></th>
                  <th style='width:200px'></th>
				  <th style='width:25px'></th>
                  <th style='width:200px'></th>
				  <th style='width:25px'></th>
                  <th style='width:200px'></th>
				 </tr>
                </thead>
		
		<tbody>
                	<!-- /.Account start -->	
            
              			 <tr >
						 <td  rowspan="3">1</td>
						 <td  rowspan="3">
						   <input type="checkbox"  name="panel_rights[]" id="panel_1" onclick="check_all_panel_wise('1')" checked class="check_all_panel"  value="panel_account"/>
			              </td>
			              <td rowspan="3">
						  <label>Account</label>
			              </td>
			              </td>
			              <td rowspan="3">
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1"   onclick="check_all_panel_wise_all('1')" value="sub_panel_add_account"   />
						  </td>
						  <td rowspan="3" >
						  <label>Add Account</label>
						   </td>
						
						 
							 </td>
						  <td rowspan="3"><input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1"   onclick="check_all_panel_wise_all('1')" value="sub_panel_add_income_or_expence_info"   />
							  </td>
						  <td rowspan="3">
			                <label>Add Income Or Expence Info</label>
							 </td>
							 <td rowspan="3">
							 
							 <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1"   onclick="check_all_panel_wise_all('1')" value="sub_panel_ledger"   />
			                </td>
						  <td rowspan="3"><label>Ledger</label>
						 </td>
							   <td>
							<input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 " id="edit_delete_1"  onclick="check_all_panel_wise_all('1');check_edit_delete('1');" value="sub_panel_account_list"   /> </td>
						  <td>
			                <label>Account List</label>
						  </td>
						  <td >
							 
							 <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 "  id="edit_delete_2" onclick="check_all_panel_wise_all('1');check_edit_delete('2');" value="sub_panel_income_or_expence_list"   />
			                </td>
						  <td ><label>Income Or Expence List</label>
							 </td>
							 
						<td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 "  id="edit_delete_2" onclick="check_all_panel_wise_all('1');check_edit_delete('2');" value="account_sub_panel_ledger_report_daily"   />
			            </td>
						<td >
						   <label>Ledger Report daily</label>
						</td>	 
						</tr>
							 
						  
						 
						 <tr>
						  <td><input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 "   onclick="check_all_panel_wise_all('1');check_edit_delete_reverse('1','1')" id="edit_1" value="sub_panel_account_list_edit" />
			                 </td>
						  <td><label style="color:orange">Edit</label>
									   </td>
									     <td>
							 
							 <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 "   onclick="check_all_panel_wise_all('1');check_edit_delete_reverse('1','2')"  id="edit_2" value="account_panel_edit_button"   />
			                </td>
						  <td><label  style="color:orange">Edit</label>
							 </td>
						 </tr>
						 <tr>
						 	  <td><input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 "   onclick="check_all_panel_wise_all('1');check_edit_delete_reverse('1','1')"  id="delete_1" value="sub_panel_account_list_delete"  />
			                 </td>
						  <td> <label style="color:red">Delete</label>
						    <td>
							 
							 <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 "  id="delete_2"  onclick="check_all_panel_wise_all('1');check_edit_delete_reverse('1','2')" value="account_panel_delete_button"   />
			                </td>
						  <td><label  style="color:red">Delete</label>
							 </td>
						 </tr>
						 
						 
						 <tr>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						
						<td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 "  id="edit_delete_2" onclick="check_all_panel_wise_all('1');check_edit_delete('2');" value="account_sub_panel_ledger_report_monthly"   />
			            </td>
						<td >
						   <label>Ledger Report Monthly</label>
						</td>
						 
						 <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_1 "  id="edit_delete_2" onclick="check_all_panel_wise_all('1');check_edit_delete('2');" value="account_sub_panel_income_expanece_report"   />
			            </td>
						<td >
						   <label>Income Expanece Report</label>
						</td>
						 
						 </tr>
					<!-- /.Account End -->	 
					<!-- /.Attedace start -->	 
						<td>2</td>
						 <td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_2" onclick="check_all_panel_wise('2')"  class="check_all_panel"   value="panel_attendance"   />  </td>
						  <td>
			                  <label>Attendance</label>  </td>
						  <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="sub_panel_student_attendance_select"   />  </td>
						  <td>
			                  <label>Student Attendance Select</label>  </td>
						  <td>
			                 
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="sub_panel_emp_attendance_select"   />  </td>
						  <td><label>Emp Attendance Select</label>   </td>
						  <td>
							 
			                 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="sub_panel_student_rfid_attendance"   />  </td>
						  <td> <label>Student Rfid Attendance</label>  </td>
						  <td>
							 
			                <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="sub_panel_emp_rfid_attendance"   />  </td>
						  <td><label>Emp Rfid Attendance</label>
							
							</td>
							
						 <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="attendance_sub_panel_registerwise_staff_attendance"   /> 
						 </td> 
						<td>
						  <label>Emp Registerwise Att</label>
						</td>	
							
						<td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="attendance_sub_panel_atendance_graph"   /> 
						 </td> 
						<td>
						  <label>Attendance Graph</label>
						</td>	
					     </tr>
					     <tr>
					     <td></td>     
					     <td></td>     
					     <td></td>     
					     <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="attendance_sub_panel_student_report_daily_classwise"   /> 
						 </td> 
						<td>
						  <label>Std Report Classwise</label>
						</td>	
							
						<td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="attendance_sub_panel_student_report_studentwise_monthly"   /> 
						 </td> 
						<td>
						  <label>Attendance report studentwise monthly</label>
						</td> 
					      
					    <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="attendance_sub_panel_emp_report_daily_categorywise"   /> 
						 </td> 
						<td>
						  <label>Emp report daily categorywise</label>
						</td>    
					         
					   <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="attendance_sub_panel_emp_report_employeewise"   /> 
						 </td> 
						<td>
						  <label>Emp report empwise</label>
						</td>    
						
						<td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="attendance_sub_panel_student_att_report_daytime"   /> 
						 </td> 
						<td>
						  <label>Std report day with Time</label>
						</td>
						
						<td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_2"   onclick="check_all_panel_wise_all('2')" value="attendance_sub_panel_emp_att_report_daytime"   /> 
						 </td> 
						<td>
						  <label>Emp report day with Time</label>
						</td>
						
					         
						 </tr>   
						    <tr><td rowspan="2">3</td><td rowspan="2">
					   <input type="checkbox"  name="panel_rights[]" id="panel_3" onclick="check_all_panel_wise('3')"  class="check_all_panel"   value="panel_bus"   />
						    </td><td rowspan="2"><label>Bus</label></td>
						<td>
						
						<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_add_bus"   />
			                    </td><td><label>Add Bus</label></td><td>
							  
					             <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_bus_list"   />
					      </td><td><label>Bus List</label></td><td>
						
						<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_route_add"   />
						     </td><td><label>Route Add</label></td><td>
						
						        <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_bus_route_add"   />
			                    </td><td><label>Bus Route Add</label></td><td>
							  
							  
				             <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_bus_route_list"   />
			                    </td><td><label>Bus Route List</label></td><td>	

						<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_asigned_bus_route"   />
						  </td><td><label>Asigned Bus Route</label></td>
						</tr>
						<tr>
						<td>	
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_bus_employee_add"   />
						  </td><td><label>Bus Employee Add</label></td><td>

						<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_bus_employee_list"   />
						  </td><td><label>Bus Employee List</label></td>
						  
						  <td>
						     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="sub_panel_bus_purchase_list"   />
						  </td>
						  <td><label>Bus Purchase List</label></td>
						  
						  <td>
						     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="bus_sub_panel_student_list"   />
						  </td>
						  <td><label>Bus student List</label></td>
						  
						  <td>
						     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="bus_sub_panel_add_bus_expance"   />
						  </td>
						  <td><label>Add Bus Expance</label></td>
						
						
						  <td>
						     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="bus_sub_panel_bus_expance_report"   />
						  </td>
						  <td><label>student Bus Expance Report</label></td>
						</tr>
						
						<tr>
						   <td></td> 
						   <td></td> 
						   <td></td> 
						   <td>
						     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="bus_sub_panel_student_list_bus_wise_rprt"   />
						  </td>
						  <td><label>student Bus Report buswise</label></td> 
						  
						  
						  <td>
						     <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="bus_panel_edit_button"   />
						  </td>
						  <td>
						     <label style="color:red;">Bus Panel Edit Button</label>
						  </td>
						  
						  <td>
						     <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_3"   onclick="check_all_panel_wise_all('3')" value="bus_panel_delete_button"   />
						  </td>
						  <td>
						     <label style="color:red;">Bus Panel Delete Button</label>
						  </td>
						  
						</tr>
						
						
						    <tr><td rowspan="2">4</td><td rowspan="2">
						   <input type="checkbox"  name="panel_rights[]" id="panel_4" onclick="check_all_panel_wise('4')"  class="check_all_panel"   value="panel_certificate"   />
			                  </td><td rowspan="2"><label>Certificate</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="sub_panel_character_certificate_form"   />
			                  </td><td><label>Character Certificate Form</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="sub_panel_character_certificate_list"   />
			                  </td><td><label>Character Certificate List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="sub_panel_event_certificate_form"   />
			                  </td><td><label>Event Certificate Form</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="sub_panel_event_certificate_list"   />
			                  </td><td><label>Event Certificate List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="sub_panel_sport_certificate_form"   />
			                  </td><td><label>Sport Certificate Form</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="sub_panel_sport_certificate_list"   />
			                  </td><td><label>Sport Certificate List</label></td>
							  </tr>
							<tr>
							  <td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="sub_panel_tc_form"   />
							
			                  </td><td><label>Tc Form</label></td>
							  <td>
							
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="sub_panel_tc_list"   />
			                  </td><td><label>Tc List</label></td>
			                  
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_bonafide"   />
			                  </td>
			                  <td><label>Bonafied Certificate</label></td>
			                  
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_bonafide_list"   />
			                  </td>
			                  <td><label>Bonafied Certificate List</label></td>
			                  
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_tue_fee"   />
			                  </td>
			                  <td><label>Tue Fee Certificate</label></td>
			                  
			                   <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_tue_fee_list"   />
			                  </td>
			                  <td><label>Tue Fee Certificate List</label></td>
			                  </tr>
							 <tr>
							     <td></td>
							     <td></td>
							     <td></td>
							    <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_annual_fee"   />
			                  </td>
			                  <td><label>Annual Certificate</label></td> 
			                  
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_annual_fee_list"   />
			                  </td>
			                  <td><label>Annual Certificate List</label></td>
			                  
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_cast_certificate"   />
			                  </td>
			                  <td><label>Cast Certificate</label></td>
			                  
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_cast_certificate_list"   />
			                  </td>
			                  <td><label>Cast Certificate List</label></td>
			                  
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_birth_certificate"   />
			                  </td>
			                  <td><label>Birth Certificate Print Out</label></td>
			                  
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_4"   onclick="check_all_panel_wise_all('4')" value="certificate_sub_panel_extra_printout"   />
			                  </td>
			                  <td><label>other Print Out</label></td>
			                  
							 </tr>
							
						    <tr><td>5</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_5" onclick="check_all_panel_wise('5')"  class="check_all_panel"   value="panel_complaint"   />
			                  </td><td><label>Complaints</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_5"   onclick="check_all_panel_wise_all('5')" value="sub_panel_student_complaint"   />
			                  </td><td><label>Student Complaint</label></td>
			              <td>
						      <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_5"   onclick="check_all_panel_wise_all('5')" value="sub_panel_staff_complaint"   />
			              </td>
			              <td><label>Staff Complaint</label>
			              </td>
			              
			              <td>
						      <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_5"   onclick="check_all_panel_wise_all('5')" value="complaint_sub_panel_employee_complaint"   />
			              </td>
			              <td>
			                  <label>Employee Complaint</label>
			              </td>
			              
			              
			              <td>						  
						  </td></tr>
						  
						  
						  
						    <tr><td rowspan="2">6</td><td rowspan="2">
						   <input type="checkbox"  name="panel_rights[]" id="panel_6" onclick="check_all_panel_wise('6')"  class="check_all_panel"   value="panel_downloads"   />
			                  </td><td rowspan="2"><label>Downloads</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="sub_panel_student_admission_list_download_class_wise"   />
			                  </td><td><label>Student Admission List Download Class Wise</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="sub_panel_employee_list_download_category_wise"   />
			                  </td><td><label>Employee List Download Category Wise</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="sub_panel_staff_salary_list_download_month_wise"   />
			                  </td><td><label>Staff Salary List Download Month Wise</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="sub_panel_enquiry_download_date_wise"   />
			                  </td><td><label>Enquiry Download Date Wise</label></td><td>
						 
						  
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="sub_panel_student_fee_list_download_month_wise"   />
			                  </td><td><label>Student Fee List Download Month Wise</label></td><td>
							
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="sub_panel_expense_list_download_month_wise"   />
			                  </td><td><label>Expense List Download Month Wise</label></td>
							</tr>
							<tr>
							<td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="sub_panel_income_list_download_month_wise"   />
			                  </td><td><label>Income List Download Month Wise</label></td>
			                  
			                  <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="download_sub_panel_attendance_list"   />
			                  </td>
			                  <td><label>Download Attendance List</label>
			                  </td>
			                  
			                  <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="download_sub_panel_userid_password"   />
			                  </td>
			                  <td><label>Download User id and password</label>
			                  </td>
			                  
			                  <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_6"   onclick="check_all_panel_wise_all('6')" value="download_sub_panel_tc_list"   />
			                  </td>
			                  <td><label>Download Tc List</label>
			                  </td>
			                  
						  
						  
						  </tr>
						  
						    <tr><td>7</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_7" onclick="check_all_panel_wise('7')"  class="check_all_panel"   value="panel_dues"   />
			                   </td><td><label>Dues</label></td>
						 <td>
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_7"   onclick="check_all_panel_wise_all('7')" value="sub_panel_class_wise_dues_details"   />
			                  </td><td><label>Class Wise Dues Details</label></td><td>
						 
						 </td></tr>
						 
						 
						    <tr><td>8</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_8" onclick="check_all_panel_wise('8')"  class="check_all_panel"   value="panel_enquiry"   />
			                 </td><td><label>Enquiry</label></td>
						   <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_8"   onclick="check_all_panel_wise_all('8')" value="sub_panel_add_enquiry"   />
			                  </td><td><label>Add Enquiry</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_8"   onclick="check_all_panel_wise_all('8')" value="sub_panel_enquiry_list"   />
			                  </td><td><label>Enquiry List</label></td>
			                  
			                  
			                  <td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_8"   onclick="check_all_panel_wise_all('8')" value="enquiry_sub_panel_enquiry_sms"   />
			                  </td><td><label>Enquiry SMS</label></td>
			                  
			                  
			                  </tr>
						   
						    <tr><td>9</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_9" onclick="check_all_panel_wise('9')"  class="check_all_panel"   value="panel_event_management"   />
			                    </td><td><label>Event Management</label></td>
						<td>
						
						<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="sub_panel_add_event"   />
			                  </td><td><label>Add Event</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="sub_panel_event_list"   />
			                  </td><td><label>Event List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="sub_panel_event_add_participate"   />
			                  </td><td><label>Event Add Participate</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="sub_panel_event_participate_list"   />
			                  </td><td><label>Event Participate List</label></td>
			                  
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_add_house"   />
			             </td>
			             <td>
			                 <label>Add House</label>
			             </td>     
			                  
			              <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_assigned_house"   />
			             </td>
			             <td>
			                 <label>Assigned House</label>
			             </td>     
			                  
			                  </tr>
						<tr>
						 <td></td>
						 <td></td>
						 <td></td>
						 <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_activity_plan"   />
			             </td>
			             <td>
			                 <label>Activity Plan</label>
			             </td>     
						  
						 <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_activity_plan_list"   />
			             </td>
			             <td>
			                 <label>Activity Plan List</label>
			             </td> 
			             
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_event_result"   />
			             </td>
			             <td>
			                 <label>Event Result</label>
			             </td> 
						    
						 <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_event_result_list"   />
			             </td>
			             <td>
			                 <label>Event Result List</label>
			             </td>   
						    
						  <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_team_creation"   />
			             </td>
			             <td>
			                 <label>Event Team Creation</label>
			             </td> 
			             
			              <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_team_creation_list"   />
			             </td>
			             <td>
			                 <label>Event Team Creation List</label>
			             </td> 
						</tr>
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_9"   onclick="check_all_panel_wise_all('9')" value="event_sub_panel_participant_list"   />
			             </td>
			             <td>
			                 <label>participant List</label>
			             </td> 
						</tr>
						
						    <tr><td>10</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_10" onclick="check_all_panel_wise('10')"  class="check_all_panel"   value="panel_exam_paper_setter"   />
			                  </td><td><label>Paper Setter</label></td>
						  <td>
						  
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_10"   onclick="check_all_panel_wise_all('10')" value="sub_panel_add_question"   />
			                  </td><td><label>Add Question</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_10"   onclick="check_all_panel_wise_all('10')" value="sub_panel_view_question"   />
			                  </td><td><label>View Question</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_10"   onclick="check_all_panel_wise_all('10')" value="sub_panel_instant_go_to_paper_setter"   />
			                  </td><td><label>Instant Go To Paper Setter</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_10"   onclick="check_all_panel_wise_all('10')" value="sub_panel_go_to_paper_setter"   />
			                  </td><td><label>Go To Paper Setter</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_10"   onclick="check_all_panel_wise_all('10')" value="sub_panel_total_paper_list"   />
			                  </td><td><label>Total Paper List</label></td></tr>
						  
						    <tr><td>11</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_11" onclick="check_all_panel_wise('11')"  class="check_all_panel"   value="panel_examination"   />
			                   </td><td><label>Examination</label></td>
						 <td>
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="sub_panel_admit_card"   />
			                  </td><td><label>Admit Card</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="sub_panel_admit_card_print"   />
			                  </td><td><label>Admit Card Print</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="sub_panel_marksheet_fill"   />
			                  </td><td><label>Marksheet Fill</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="sub_panel_marksheet_view"   />
			                  </td><td><label>Marksheet View</label></td>
			                  
			                 <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="sub_panel_marksheet_fill_monthly"   />
			                 </td>
			                 <td>
			                   <label>Marksheet Fill Monthly</label>
			                 </td> 
			                  
			                  <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="sub_panel_marksheet_view_monthly"   />
			                 </td>
			                 <td>
			                   <label>Marksheet View Monthly</label>
			                 </td> 
			                 <tr>
			                   <td></td>  
			                   <td></td>  
			                   <td></td>  
			                  <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="exam_sub_panel_view_resultsheet"   />
			                 </td>
			                 <td>
			                   <label>View Resultsheet</label>
			                 </td> 
			                  
			                  <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="exam_sub_panel_download_marks"   />
			                 </td>
			                 <td>
			                   <label>Marks Downloads</label>
			                 </td> 
			                 
			                 <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="sxam_sub_panel_send_marks"   />
			                 </td>
			                 <td>
			                   <label>Send Marks</label>
			                 </td> 
			                 
			                 
			                 <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="examination_fill_marks_total_day_field"   />
			                 </td>
			                 <td>
			                   <label style="color:red;">Marksheet Fill Total Day field</label>
			                 </td>
			                 
			                 <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="examination_fill_marks_prasent_day_field"   />
			                 </td>
			                 <td>
			                   <label style="color:red;">Marksheet Fill Prasent Day field</label>
			                 </td> 
			                 
			                 <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_11"   onclick="check_all_panel_wise_all('11')" value="examination_fill_marks_remarks_field"   />
			                 </td>
			                 <td>
			                   <label style="color:red;">Marksheet Fill Remark field</label>
			                 </td>
			                 </tr>
			                 
			                 
			                 
			                 
			                 </tr>
						    <tr><td rowspan="2">12</td><td rowspan="2">
						   <input type="checkbox"  name="panel_rights[]" id="panel_12" onclick="check_all_panel_wise('12')" checked class="check_all_panel"   value="panel_fees"   />
			                   </td><td rowspan="2"><label>Fees</label></td>
						 
						 <td rowspan="2">
						        <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_reset_months_or_installment"   />
			             </td>
			             <td rowspan="2">
			                    <label>Reset Months and Installments</label>
			             </td>
						 
						 
						 
						 <td rowspan="2">
						 <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="sub_panel_fee_structure_list"   />
			                  </td><td rowspan="2"><label>Fee Structure List</label></td><td rowspan="2">
							
							<input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="sub_panel_discount_types_list"   />
			                  </td><td rowspan="2"><label>Discount Types List</label></td><td>
							
							<input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="sub_panel_student_fee_add_form"   />
			                  </td><td><label>Pay Fees</label></td>
			                  
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="sub_panel_student_fee_list"   />
			            </td>
			            <td>
			               <label>Student Fee List</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_set_dues_detail"   />
			            </td>
			            <td>
			               <label>Set Dues Details</label>
			            </td>
			            </tr>
						 
						 <tr>
						     
						  <td><input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12');" value="sub_panel_submission_date_change"  />
			                 </td>
						  <td> <label style="color:Green">Submission Date Change</label></td>
						    <td>
							 
							 <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"  onclick="check_all_panel_wise_all('12');" value="sub_panel_fee_list_delete"   />
			                </td>
						  <td><label  style="color:red">Fee Delete</label>
							 </td>
						 </tr>
						 <tr>
						     <td></td>
						     <td></td>
						     <td></td>
						<td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_set_fee"   />
			            </td>
			            <td>
			               <label>Set Fees Perticuler</label>
			            </td> 
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_set_fees_classwise"   />
			            </td>
			            <td>
			               <label>Set Fees Classwise</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_set_transport_fee_classwise"   />
			            </td>
			            <td>
			               <label>Set Fees Classwise Transport</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_previous_dues"   />
			            </td>
			            <td>
			               <label>Previous Dues</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_print_chalan"   />
			            </td>
			            <td>
			               <label>Print Chalan</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_fees_detail_by_rfid"   />
			            </td>
			            <td>
			               <label>Fee Deatils By Rfid</label>
			            </td>
						</tr>
						<tr>
						 <td></td>   
						 <td></td>   
						 <td></td>   
						  <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_dues_list_sms_print"   />
			            </td>
			            <td>
			               <label>Dues List and Sms</label>
			            </td> 
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_demand_bill"   />
			            </td>
			            <td>
			               <label>Demand Bill</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_student_income_tax"   />
			            </td>
			            <td>
			               <label>Student Income Tex</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_transport_reset_month"   />
			            </td>
			            <td>
			               <label>Transport Reset Monts</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_transport_set_dues_detail"   />
			            </td>
			            <td>
			               <label>Transport Set Dues Details</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_transport_fees_structure"   />
			            </td>
			            <td>
			               <label>Transport Fees Structure</label>
			            </td>
			            </tr>
			            <tr>
			            <td></td>       
			            <td></td>       
			            <td></td>       
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_transport_set_fee_classwise"   />
			            </td>
			            <td>
			               <label>Transport Set Fees Classwise </label>
			            </td>
			            
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_transport_pay_fee"   />
			            </td>
			            <td>
			               <label>Transport Pay Fees</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_transport_fee_details"   />
			            </td>
			            <td>
			               <label>Transport Fees Details</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_report_panel"   />
			            </td>
			            <td>
			               <label>All Report Panel </label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_transport_reports_panel"   />
			            </td>
			            <td>
			               <label>transport Report Panel </label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_sub_panel_bus_id_card"   />
			            </td>
			            <td>
			               <label>Bus Id Card</label>
			            </td>
			            
						</tr>
						<tr>
						    
					    <td></td>       
			            <td></td>       
			            <td></td>       
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_panel_delete_button"   />
			            </td>
			            <td>
			               <label style="color:red;">Fees Panel Delete Button For All Panels </label>
			            </td>
			            
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_panel_edit_button"   />
			            </td>
			            <td>
			               <label style="color:red;">Fees Panel Edit Button For All Panels</label>
			            </td>
			            
			            <td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="fees_panel_details_button"   />
			            </td>
			            <td>
			               <label style="color:red;">Fees Panel Details Button</label>
			            </td>
						    
						<td>
						  <input type="checkbox" checked    name="panel_rights[]" class="check_all_panel check_12"   onclick="check_all_panel_wise_all('12')" value="Fess_panel_edit_button"   />
			            </td>
			            <td>
			               <label style="color:red;">Fees Panel Edit Button</label>
			            </td>    
						    
						</tr>
						 
						    <tr><td>13</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_13" onclick="check_all_panel_wise('13')"  class="check_all_panel"   value="panel_gallery"   />
			                  </td><td><label>Gallery</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_13"   onclick="check_all_panel_wise_all('13')" value="sub_panel_gallery"   />
			                  </td><td><label>Gallery</label></td></tr>
						    <tr><td>14</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_14" onclick="check_all_panel_wise('14')"  class="check_all_panel"   value="panel_govt_requirement"   />
			                   </td><td><label>Govt. Reqr.</label></td>
						 <td>
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_14"   onclick="check_all_panel_wise_all('14')" value="sub_panel_mapping_list"   />
			                  </td><td><label>Mapping List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_14"   onclick="check_all_panel_wise_all('14')" value="sub_panel_student_list"   />
			                  </td><td><label>Student List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_14"   onclick="check_all_panel_wise_all('14')" value="sub_panel_student_contact_list"   />
			                  </td><td><label>Student Contact List</label></td><td>
						 
						 </td></tr>
						    <tr><td>15</td><td>
						    <input type="checkbox"  name="panel_rights[]" id="panel_15" onclick="check_all_panel_wise('15')"  class="check_all_panel"   value="panel_holiday"   />
			                  </td><td><label>Holiday</label></td>
						 <td>
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_15"   onclick="check_all_panel_wise_all('15')" value="sub_panel_add_holiday"   />
			                  </td><td><label>Add Holiday</label></td><td>
							
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_15"   onclick="check_all_panel_wise_all('15')" value="sub_panel_holiday_list"   />
			                  </td><td><label>Holiday List</label></td></tr>
						    <tr><td>16</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_16" onclick="check_all_panel_wise('16')"  class="check_all_panel"   value="panel_homework"   />
			                   </td><td><label>Homework</label></td>
						 <td>
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_16"   onclick="check_all_panel_wise_all('16')" value="sub_panel_homework_add"   />
			                  </td><td><label>Homework Add</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_16"   onclick="check_all_panel_wise_all('16')" value="sub_panel_homework_list"   />
			                  </td><td><label>Homework List</label></td>
			                  
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_16"   onclick="check_all_panel_wise_all('16')" value="sub_panel_class_work"   />
			             </td>
			             <td>
			                <label>Classwork</label>
			             </td>     
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_16"   onclick="check_all_panel_wise_all('16')" value="sub_panel_class_work_list"   />
			             </td>
			             <td>
			                <label>Classwork List</label>
			             </td>      
			                  
			                  
			                  
			                  
						 
						 
						 </tr>
						 
						    <tr><td rowspan="3">17</td><td rowspan="3">
						   <input type="checkbox"  name="panel_rights[]" id="panel_17" onclick="check_all_panel_wise('17')"  class="check_all_panel"   value="panel_hostel"   />
			                  </td><td rowspan="3"><label>Hostel</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_list"   />
			                  </td><td><label>Hostel List</label></td><td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_room_list"   />
							
			                  </td><td><label>Room List</label></td><td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_seat_avail"   />
			                  </td><td><label>Hostel Seat Availibilty</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_employee_add"   />
			                  </td><td><label>Hostel Employee Add</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_employee_list"   />
			                  </td><td><label>Hostel Employee List</label></td>
							
							</tr>
							<tr>
							<td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_student_list"   />
			                  </td><td><label>Hostel Student List</label></td><td>
							
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_mess_menu_list"   />
			                  </td><td><label>Hostel Mess Menu List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_leave_student"   />
			                  </td><td><label>Hostel Leave Student</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_daily_entry"   />
			                  </td><td><label>Hostel Daily Entry</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_buy_item"   />
			                  </td><td><label>Buy Item</label></td><td>
						  
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_purchase_list"   />
			                  </td><td><label>Hostel Purchase List</label></td>
							</tr>
							<tr>
							<td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_hostel_expenses"   />
			                  </td><td><label>Hostel Expenses</label></td><td>
						  
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="sub_panel_account_collection"   />
			                  </td><td><label>Account Collection</label></td>
			                  
			                <td> 
			               <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_17"   onclick="check_all_panel_wise_all('17')" value="hostal_panel_edit_delete_button"   />
			                  </td><td><label style="color:red;">Edit and Delete Button</label></td>  
			                  
			                  
			                  
			                  </tr>
						    <tr><td>18</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_18" onclick="check_all_panel_wise('18')"  class="check_all_panel"   value="panel_leave"   />
			                  </td><td><label>Leave</label></td>
						  <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_18"   onclick="check_all_panel_wise_all('18')" value="sub_panel_leave_form"   />
			                  </td><td><label>Leave Form</label></td><td>
							
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_18"   onclick="check_all_panel_wise_all('18')" value="sub_panel_leave_list"   />
			                  </td><td><label>Leave List</label></td></tr>
						    <tr><td>19</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_19" onclick="check_all_panel_wise('19')"  class="check_all_panel"   value="panel_library"   />
			                  </td><td><label>Library</label></td>
						  <td>
						  
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_19"   onclick="check_all_panel_wise_all('19')" value="sub_panel_library_add_book"   />
			                  </td><td><label>Library Add Book</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_19"   onclick="check_all_panel_wise_all('19')" value="sub_panel_view_book_library"   />
			                  </td><td><label>View Book Library</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_19"   onclick="check_all_panel_wise_all('19')" value="sub_panel_view_issued_book_list"   />
			                  </td><td><label>Issued Book List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_19"   onclick="check_all_panel_wise_all('19')" value="sub_panel_view_return_book_list"   />
			                  </td><td><label>View Return Book List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_19"   onclick="check_all_panel_wise_all('19')" value="sub_panel_e_library"   />
			                  </td><td><label>E-library</label></td>
			                  
			                  
			                 <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_19"   onclick="check_all_panel_wise_all('19')" value="lib_sub_panel_e_stuff"   />
			                 </td>
			                 <td>
			                    <label>E-Stuff</label>
			                 </td> 
			                  
			                  
			                  </tr>
						    <tr><td>20</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_20" onclick="check_all_panel_wise('20')"  class="check_all_panel"   value="panel_penalty"   />
			                  </td><td><label>Penalty</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_20"   onclick="check_all_panel_wise_all('20')" value="sub_panel_penalty_form"   />
			                  </td><td><label>Penalty form</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_20"   onclick="check_all_panel_wise_all('20')" value="sub_panel_penalty_list"   />
			                  </td><td><label>Penalty list</label></td></tr>
						  
						    <tr><td>21</td><td>
						    <input type="checkbox"  name="panel_rights[]" id="panel_21" onclick="check_all_panel_wise('21')"  class="check_all_panel"   value="panel_recycle_bin"   />
			                 </td><td><label>Recycle Bin</label></td>
			                 
			                 <td>
						        <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_21"   onclick="check_all_panel_wise_all('20')" value="recycle_bin_sub_panel_student_list"   />
			                 </td>
			                 <td>
			                    <label>Student admission List</label>
			                 </td>
			                 
			                 <td>
						        <input type="checkbox"    name="panel_rights[]" class="check_all_panel check_21"   onclick="check_all_panel_wise_all('20')" value="recycle_bin_sub_panel_emp_list"   />
			                 </td>
			                 <td>
			                    <label>Emp List</label>
			                 </td>
			                 
			                 <td>
						        <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_21"   onclick="check_all_panel_wise_all('20')" value="recycle_bin_sub_panel_expance_list"   />
			                 </td>
			                 <td>
			                    <label>Expance List</label>
			                 </td>
			                 
			                 <td>
						        <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_21"   onclick="check_all_panel_wise_all('20')" value="recycle_bin_sub_panel_hostal_student_list"   />
			                 </td>
			                 <td>
			                    <label>Hostal Student List</label>
			                 </td>
			                 
			                 <td>
						        <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_21"   onclick="check_all_panel_wise_all('20')" value="recycle_bin_sub_panel_hostal_account_list"   />
			                 </td>
			                 <td>
			                    <label>Hostal account List</label>
			                 </td>
			                 
			                 <td>
						        <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_21"   onclick="check_all_panel_wise_all('20')" value="recycle_bin_sub_panel_registration_list"   />
			                 </td>
			                 <td>
			                    <label>student Registration List</label>
			                 </td>
			             </tr>
			             <tr>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td>
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_21"   onclick="check_all_panel_wise_all('20')" value="recycle_sub_panel_reset_delete_button"   />
			              </td>
			              <td>
			                    <label style="color:red;">Recycle Bin Restore and Delete Button</label>
			              </td>
						    <tr><td>22</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_22" onclick="check_all_panel_wise('22')"  class="check_all_panel"   value="panel_reminder"   />
			                  </td><td><label>Reminder</label></td>
						  <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_22"   onclick="check_all_panel_wise_all('22')" value="sub_panel_reminder_add"   />
			                  </td><td><label>Reminder Add</label></td><td>
						  
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_22"   onclick="check_all_panel_wise_all('22')" value="sub_panel_reminder_list"   />
			                  </td><td><label>Reminder List</label></td><td>
							
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_22"   onclick="check_all_panel_wise_all('22')" value="sub_panel_reminder_teacher_add"   />
			                  </td><td><label>Reminder Teacher Add</label></td><td>
							
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_22"   onclick="check_all_panel_wise_all('22')" value="sub_panel_reminder_teacher_list"   />
			                  </td><td><label>Reminder Teacher List</label></td></tr>
						    <tr><td rowspan="2">23</td><td rowspan="2">
						   <input type="checkbox"  name="panel_rights[]" id="panel_23" onclick="check_all_panel_wise('23')"  class="check_all_panel"   value="panel_school_info"   />
			                  </td><td rowspan="2"><label>School Info</label></td>
						  <td>
						  
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_school_info_general"   />
			                  </td><td><label>School Info General</label></td>
			                  <td>
							     <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_exam_type_add"   />
			                  </td><td><label>Exam Type Add</label></td>
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="school_info_sub_panel_add_exam_type_monthly"   />
			             </td>
			             <td>
			                <label>Exam Type Add Monthly</label>
			             </td>
			             <td>
							    <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_add_section"   />
			                  </td><td><label>Add Section</label></td><td>
							
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_add_class_stream"   />
			                  </td><td><label>Add Class Stream</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_add_stream_group"   />
			                  </td><td><label>Add Stream Group</label></td>
			                  
			                  
							</tr>
				         	<tr>
				         	 <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_subject_add"   />
			                  </td><td><label>Subject Add</label></td>
							<td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_class_wise_subject"   />
			                  </td><td><label>Class Wise Subject</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_fee_types_add"   />
			                  </td><td><label>Fee Types Add</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_discount_types_add"   />
			                  </td><td><label>Discount Types Add</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="sub_panel_total_list"   />
			                  </td><td><label>Total List</label></td>
			                  
			              <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="school_info_sub_panel_student_password_update"   />
			             </td>
			             <td>
			                <label>Std password Update</label>
			             </td> 
			             
			             
			             </tr>
			             <tr>
			                 <td></td>
			                 <td></td>
			                 <td></td>
			              
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="school_info_sub_panel_add_fee_category"   />
			             </td>
			             <td>
			                <label>Add Std Fee Category</label>
			             </td> 
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="school_info_sub_panel_add_bus_fee_category"   />
			             </td>
			             <td>
			                <label>Add Bus Fee category</label>
			             </td>
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="school_info_sub_panel_std_identity_category"   />
			             </td>
			             <td>
			                <label>Std Identity Category</label>
			             </td> 
			             
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="school_info_sub_panel_syllebus_detail"   />
			             </td>
			             <td>
			                <label>Syllebus detail</label>
			             </td> 
			             
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_23"   onclick="check_all_panel_wise_all('23')" value="add_bus_fee_category_acadmic_calender"   />
			             </td>
			             <td>
			                <label>Academic Calender</label>
			             </td> 
			             
			             </tr>
			             
			             
						    <tr><td rowspan="2">24</td><td rowspan="2">
						   <input type="checkbox"  name="panel_rights[]" id="panel_24" onclick="check_all_panel_wise('24')"  class="check_all_panel"   value="panel_sms"   />
			                  </td ><td rowspan="2"><label>SMS</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sub_panel_send"   />
			                  </td><td><label>Send</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sub_panel_classwise_sms"   />
			                  </td><td><label>Classwise Sms</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sub_panel_attendance_sms"   />
			                  </td><td><label>Attendance Sms</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sub_panel_fee_sms"   />
			                  </td><td><label>Fee Sms</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sub_panel_birthday_sms"   />
			                  </td><td><label>Birthday Sms</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sub_panel_staff_sms"   />
			                  </td><td><label>Staff Sms</label></td>
						  </tr>
						  <tr>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sub_panel_sms_templates_list"   />
			                  </td><td><label>Sms Templates List</label></td>
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sms_sub_panel_add_group"   />
			               </td>
			               <td>
			                 <label>Add Group</label>
			               </td>
			               
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sms_sub_panel_add_group_staff"   />
			               </td>
			               <td>
			                 <label>Add Group Staff</label>
			               </td>
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sms_sub_panel_group_student"   />
			               </td>
			               <td>
			                 <label>Group Student</label>
			               </td>
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sms_sub_panel_group_teacher"   />
			               </td>
			               <td>
			                 <label>Group Teacher</label>
			               </td>
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sms_sub_panel_group_sms"   />
			               </td>
			               <td>
			                 <label>Group Sms</label>
			               </td>
			               </tr>
			               <tr>
			               <td></td>      
			               <td></td>      
			               <td></td> 
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sms_sub_panel_bus_sms"   />
			               </td>
			               <td>
			                 <label>Bus Sms</label>
			               </td>
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sms_sub_panel_group_other_contact"   />
			               </td>
			               <td>
			                 <label>Group Other contact</label>
			               </td>
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sms_sub_panel_group_voice_call"   />
			               </td>
			               <td>
			                 <label>Voice Call</label>
			               </td>
			               
			               <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_24"   onclick="check_all_panel_wise_all('24')" value="sub_panel_delivery_report"   />
			               </td>
			               <td>
			                 <label>Delivery Report</label>
			               </td>
			                  
			                  
			                  </tr>
						  
						    <tr><td>25</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_25" onclick="check_all_panel_wise('25')"  class="check_all_panel"   value="panel_sports"   />
			                   </td><td><label>Sports</label></td>
						 <td>
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_25"   onclick="check_all_panel_wise_all('25')" value="sub_panel_add_sports"   />
			                  </td><td><label>Add Sports</label></td><td>
							
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_25"   onclick="check_all_panel_wise_all('25')" value="sub_panel_sports_list"   />
			                  </td><td><label>Sports List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_25"   onclick="check_all_panel_wise_all('25')" value="sub_panel_sports_add_participate"   />
			                  </td><td><label>Sports Add Participate</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_25"   onclick="check_all_panel_wise_all('25')" value="sub_panel_sports_participate_list"   />
			                  </td><td><label>Sports Participate List</label></td>
			                  
			                  <td>
						        <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_25"   onclick="check_all_panel_wise_all('25')" value="sports_sub_panel_add_sports_type"   />
			                  </td>
			                  <td>
			                    <label> Add Sports Type</label>
			                  </td>
			                  
			                  
			                  <td>
						        <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_25"   onclick="check_all_panel_wise_all('25')" value="sports_sub_panel_age_category"   />
			                  </td>
			                  <td>
			                    <label> Age category</label>
			                  </td>
			                  
			                  
						 <tr>
						  <td></td>   
						  <td></td>   
						  <td></td>   
						 <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_25"   onclick="check_all_panel_wise_all('25')" value="sports_sub_panel_team_creation"   />
			             </td>
			             <td>
			               <label>Sports Team Creation</label>
			             </td>    
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_25"   onclick="check_all_panel_wise_all('25')" value="sports_sub_panel_team_creation_list"   />
			             </td>
			             <td>
			               <label>Sports Team Creation List</label>
			             </td>   
						 </tr>
						 
						 
						 </tr>
						    <tr><td>26</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_26" onclick="check_all_panel_wise('26')"  class="check_all_panel"   value="panel_staff"   />
			                  </td><td><label>Staff</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_26"   onclick="check_all_panel_wise_all('26')" value="sub_panel_attendance_employee_add"   />
			                  </td><td><label>Attendance Employee Add</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_26"   onclick="check_all_panel_wise_all('26')" value="sub_panel_attendance_employee_list"   />
			                  </td><td><label>Attendance Employee List</label></td>
							
							
			                  
			                  <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_26"   onclick="check_all_panel_wise_all('26')" value="sub_panel_emp_salary_list"   />
			                  </td>
			                  <td>
			                   <label>Emp Salary List</label>
			                  </td>
			                  
			                  <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_26"   onclick="check_all_panel_wise_all('26')" value="staff_sub_panel_drop_list"   />
			                  </td>
			                  <td>
			                   <label>Drop List</label>
			                  </td>
			                  
			                  <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_26"   onclick="check_all_panel_wise_all('26')" value="staff_sub_panel_id_generate"   />
			                  </td>
			                  <td>
			                   <label>staff Id generate</label>
			                  </td>
			                  
							</tr><tr>
							<td></td>
							<td></td>
							<td></td>
							<td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_26"   onclick="check_all_panel_wise_all('26')" value="staff_sub_panel_assign_rfid"   />
			                  </td>
			                  <td>
			                   <label>Assign Rfid card</label>
			                  </td>
			                  <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_26"   onclick="check_all_panel_wise_all('26')" value="staff_sub_panel_attendance_registr"   />
			                  </td>
			                  <td>
			                   <label>Attendance Register</label>
			                  </td>
			                  <td>
							   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_26"   onclick="check_all_panel_wise_all('26')" value="staff_sub_panel_attendance_prority"   />
			                  </td>
			                  <td>
			                   <label>Attendance Priority</label>
			                  </td>
							</tr>
						    <tr><td>27</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_27" onclick="check_all_panel_wise('27')"  class="check_all_panel"   value="panel_stock"   />
			                  </td><td><label>Stock</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_27"   onclick="check_all_panel_wise_all('27')" value="sub_panel_add_item"   />
			                  </td><td><label>Add Item</label></td><td>
							
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_27"   onclick="check_all_panel_wise_all('27')" value="sub_panel_stock_purchase_list"   />
			                  </td><td><label>Stock Purchase List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_27"   onclick="check_all_panel_wise_all('27')" value="sub_panel_item_list"   />
			                  </td><td><label>Item List</label></td>
			                  
			                  
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_27"   onclick="check_all_panel_wise_all('27')" value="sub_panel_sale_list"   />
			             </td>
			             <td>
			                 <label>Sale List</label>
			             </td>
			             
			             
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_27"   onclick="check_all_panel_wise_all('27')" value="stock_sub_panel_add_category"   />
			             </td>
			             <td>
			                 <label>Add category</label>
			             </td>
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_27"   onclick="check_all_panel_wise_all('27')" value="stock_sub_panel_category_list"   />
			             </td>
			             <td>
			                 <label>Category List</label>
			             </td>
			             </tr>
			             <tr>
			             <td></td>    
			             <td></td>    
			             <td></td>
			             
			             <td>
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_27"   onclick="check_all_panel_wise_all('27')" value="stock_sub_panel_buy_sale"   />
			             </td>
			             <td>
			                 <label>Buy and Sale</label>
			             </td>
			             
			             </tr>
						    <tr><td rowspan="2" >28</td><td rowspan="2" >
						   <input type="checkbox"  name="panel_rights[]" id="panel_28" onclick="check_all_panel_wise('28')"  class="check_all_panel"   value="panel_student"   />
			                  </td><td rowspan="2"><label>Student</label></td>
						  <td>
						  
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_student_registration"   />
			                  </td><td><label>Student Registration</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_student_registration_list"   />
			                  </td><td><label>Student Registration List</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_student_admission_list"   />
			                  </td><td><label>Student Admission List</label></td><td style="display:none;">
							
							<input type="checkbox"  checked name="panel_rights[]" class="check_all_panel check_028"   onclick="check_all_panel_wise_all('28')" value="sub_panel_student_admission_fee_list"   />
			                  </td><td style="display:none;"><label>Student Admission Fee List</label></td>
			                  
			                  
			                  
			                  <td>
							    <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_rfid_card_generate"   />
			                  </td>
			                  <td>
			                     <label>Rfid Card Generate</label>
			                  </td>
							
							  <td>
							    <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_profile_update"   />
			                  </td>
			                  <td>
			                     <label>Student Profile Update</label>
			                  </td>
			                 </tr>
							<tr>
							<td>
							    <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_mapping_data_update"   />
			                </td>
			                <td>
			                     <label>Mapping Data Update</label>
			                </td>    
							    
							    
							<td>
						<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_student_roll_no"   />
			                  </td><td><label>Student Roll No</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_student_id_card"   />
			                  </td><td><label>Student Id Card</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_student_action"   />
			                  </td><td><label>One Click</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_health_zone"   />
			                  </td><td><label>Health Zone</label></td><td>
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="sub_panel_physical_fitness"   />
			                  </td><td><label>Physical Fitness</label></td></tr>
						  <tr>
						  <td></td>
			              <td></td>
			              <td></td>
						  <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_sms_contact_update"   />
			              </td>
			              <td>
			                 <label>Sms contact Update</label>
			              </td>
			              
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_web_sms"   />
			              </td>
			              <td>
			                 <label>Web Sms</label>
			              </td>
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_guardian_id_card"   />
			              </td>
			              <td>
			                 <label>Guardian Id Card</label>
			              </td>
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_father_id_card"   />
			              </td>
			              <td>
			                 <label>father Id Card</label>
			              </td>
			              
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_mother_id_card"   />
			              </td>
			              <td>
			                 <label>Mother Id Card</label>
			              </td>
			              
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_student_strength_castwise"   />
			              </td>
			              <td>
			                 <label>Student strength Castwise</label>
			              </td>
			              </tr>
			              <tr>
						  <td></td>
			              <td></td>
			              <td></td>
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_photo_update"   />
			              </td>
			              <td>
			                 <label>Photo Update</label>
			              </td>
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_student_strength_religionwise"   />
			              </td>
			              <td>
			                 <label>Student strength Religion</label>
			              </td>
			              
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_generate_csv"   />
			              </td>
			              <td>
			                 <label>Generate CSV</label>
			              </td>
						  <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_sub_panel_upload_csv"   />
			              </td>
			              <td>
			                 <label>Upload Csv</label>
			              </td>
			              
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_panel_edit_button"   />
			              </td>
			              <td>
			                 <label style="color:red;">Student Panel Edit Button</label>
			              </td>
			              
			              <td>
							 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_28"   onclick="check_all_panel_wise_all('28')" value="student_panel_delete_button"   />
			              </td>
			              <td>
			                 <label style="color:red;">Student Panel Delete Button</label>
			              </td>
			              </tr>
						  
						  
						    <tr><td>29</td><td>
						    <input type="checkbox"  name="panel_rights[]" id="panel_29" onclick="check_all_panel_wise('29')"  class="check_all_panel"   value="panel_time_table"   />
			                  </td><td><label>Time Table</label></td>
						 <td>
						 
						 <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="sub_panel_time_table_generate"   />
			                  </td><td><label>Time Table Generate</label></td><td>
							
							
							<input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="sub_panel_time_table_list"   />
			                  </td><td><label>Time Table List</label></td>
			                  
			             <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="sub_panel_teacher_availability"   />
			             </td>
			             <td>
			               <label>Teacher Availability</label>
			             </td>
			             
			             
			             <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="time_table_sub_panel_class_periode"   />
			             </td>
			             <td>
			               <label>Class Periode</label>
			             </td>
			             
			             <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="time_table_sub_panel_subjectwise_teacher"   />
			             </td>
			             <td>
			               <label>Add Subjectwise Teacher</label>
			             </td>
			             
			             
			             <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="time_table_sub_panel_teacher_mgt"   />
			             </td>
			             <td>
			               <label>Teacher Management</label>
			             </td>
			             </tr>
			             <tr>
			             <td></td>    
			             <td></td>    
			             <td></td>
			             <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="time_table_sub_panel_timetable_sheet"   />
			             </td>
			             <td>
			               <label>Time Table Sheet</label>
			             </td>
			           
			             <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="time_table_sub_panel_class_periode1"   />
			             </td>
			             <td>
			               <label>Diffrent class periode</label>
			             </td>
			             <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="time_table_sub_panel_time_table1"   />
			             </td>
			             <td>
			               <label>Diffrent Time Table</label>
			             </td>
			             <td>
						   <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_29"   onclick="check_all_panel_wise_all('29')" value="time_table_sub_panel_time_table_list1"   />
			             </td>
			             <td>
			               <label>Diffrent Time Table List</label>
			             </td>
			             
			             </tr>
			             
			             
						    <tr><td>30</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_30" onclick="check_all_panel_wise('30')"  class="check_all_panel"   value="panel_utility"   />
			                  </td><td><label>Utility</label></td>
						  <td>
						  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_30"   onclick="check_all_panel_wise_all('30')" value="sub_panel_hindi_type"   />
			                  </td><td><label>Hindi Type</label></td>
			                  
			                  
			                  <td>
							    <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_30"   onclick="check_all_panel_wise_all('30')" value="sub_panel_editor1"   />
			                  </td>
			                  <td>
			                     <label>Editor</label>
			                  </td>
			                  
			                  <td>
							    <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_30"   onclick="check_all_panel_wise_all('30')" value="sub_panel_login_details"   />
			                  </td>
			                  <td>
			                     <label>Login Details</label>
			                  </td>
			                  
			                  <td>
							    <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_30"   onclick="check_all_panel_wise_all('30')" value="sub_panel_student_login"   />
			                  </td>
			                  <td>
			                     <label>Student Login Details</label>
			                  </td>
			                  
			                  <td>
							    <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_30"   onclick="check_all_panel_wise_all('30')" value="sub_panel_teacher_login"   />
			                  </td>
			                  <td>
			                     <label>Teacher Login Details</label>
			                  </td>
			                  
			                  </tr>
						    <tr><td>31</td>
						    <td>
						      <input type="checkbox"  name="panel_rights[]" id="panel_31" onclick="check_all_panel_wise('31')"  class="check_all_panel"   value="panel_session"   />
			                </td>
			                <td>
			                  <label>Session</label>
			                </td>
						 
						    <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_31"   onclick="check_all_panel_wise_all('3`')" value="sub_panel_add_session"   />
			                </td>
			                <td>
			                  <label>Add Session</label>
			                </td>
			                
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_31"   onclick="check_all_panel_wise_all('3`')" value="sub_panel_move_student"   />
			                </td>
			                <td>
			                  <label>Move Student</label>
			                </td>
						 
						 
						 </tr>
						    <tr><td>32</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_32" onclick="check_all_panel_wise('32')"  class="check_all_panel"   value="panel_user_right"   />
			                  </td><td><label>User Right</label></td>
						  <td></td></tr>
						    <tr><td>33</td><td>
		                     <input type="checkbox"  name="panel_rights[]" id="panel_33" onclick="check_all_panel_wise('33')"  class="check_all_panel"  value="panel_live_bus"   />
						    </td><td><label>Live Bus</label></td>
			              <td></td></tr>
						    <tr><td>34</td>
						    
						    <td>
						       <input type="checkbox"  name="panel_rights[]" id="panel_34" onclick="check_all_panel_wise('34')"  class="check_all_panel"   value="panel_android_app"   />
			                </td>
			                <td>
			                    <label>Android App</label>
			                </td>
			                
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_34"   onclick="check_all_panel_wise_all('34')" value="panel_notifiction"   />
			                </td>
			                <td>
			                  <label>Notification</label>
			                </td>
							
							<td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_34"   onclick="check_all_panel_wise_all('34')" value="android_app_sub_panel_notification_add"   />
			                </td>
			                <td>
			                  <label>Add Notification</label>
			                </td>
							
							<td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_34"   onclick="check_all_panel_wise_all('34')" value="android_app_sub_panel_notification_list"   />
			                </td>
			                <td>
			                  <label>Notification List</label>
			                </td>
			                
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_34"   onclick="check_all_panel_wise_all('34')" value="android_app_sub_panel_password_reset"   />
			                </td>
			                <td>
			                  <label>Password Reset</label>
			                </td>
							
							
							</tr>
						    <tr><td>35</td>
						   <td>
						    <input type="checkbox"  name="panel_rights[]" id="panel_35" onclick="check_all_panel_wise('35')"  class="check_all_panel"   value="panel_website_management"   />
			               </td>
			               <td>
			                <label>Website Management</label>
			               </td>
					       <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_notification"   />
			                </td>
			                <td>
			                  <label>Website Notification</label>
			                </td>
					       <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_busroute"   />
			                </td>
			                <td>
			                  <label>Bus Route</label>
			                </td>
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_reqirectment"   />
			                </td>
			                <td>
			                  <label>Requiretment</label>
			                </td>
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_commety"   />
			                </td>
			                <td>
			                  <label>Commety</label>
			                </td>
					        <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_slider"   />
			                </td>
			                <td>
			                  <label>Slider</label>
			                </td> 
					        <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_time_table"   />
			                </td>
			                <td>
			                  <label>Time table</label>
			                </td> 
					     </tr>
					     <tr>
					     <td></td>    
					     <td></td>    
					     <td></td>    
					         <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_tc_upload"   />
			                </td>
			                <td>
			                  <label>Tc Upload</label>
			                </td> 
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_kiosk_reg"   />
			                </td>
			                <td>
			                  <label>Kiosk Reg</label>
			                </td> 
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_kiosk_list"   />
			                </td>
			                <td>
			                  <label>Kiosk Reg List</label>
			                </td> 
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_syllebus"   />
			                </td>
			                <td>
			                  <label>Syllebus Details</label>
			                </td>
			                <td>
							  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_35"   onclick="check_all_panel_wise_all('35')" value="sub_panel_website_management_dashboard_marquee"   />
			                </td>
			                <td>
			                  <label>Dashboard Marquee</label>
			                </td>
					     </tr>
					     
					<tr><td>36</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_36" onclick="check_all_panel_wise('36')"  class="check_all_panel"   value="panel_customer_support"   />
			                    </td><td><label>panel support</label></td>
					
					<td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_36"   onclick="check_all_panel_wise_all('36')" value="support_sub_panel_add_query"   />
			        </td>
			        <td>
			           <label>Add Query</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_36"   onclick="check_all_panel_wise_all('36')" value="support_sub_panel_query_list"   />
			        </td>
			        <td>
			           <label>Query List</label>
			        </td>
					
					</tr>
					<tr><td>37</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_37" onclick="check_all_panel_wise('37')"  class="check_all_panel"   value="panel_gate_pass"   />
			                    </td><td><label>Gate Pass</label></td>
					
					<td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_37"   onclick="check_all_panel_wise_all('37')" value="gatepass_sub_panel_add_new"   />
			        </td>
			        <td>
			           <label>Add  New GatePass</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_37"   onclick="check_all_panel_wise_all('37')" value="gatepass_sub_panel_gatepass_list"   />
			        </td>
			        <td>
			           <label>Gate Pass List</label>
			        </td>
					
					
					
					</tr>
					
					<tr><td>38</td><td>
						   <input type="checkbox"  name="panel_rights[]" id="panel_38" onclick="check_all_panel_wise('38')"  class="check_all_panel"   value="panel_stock_management"   />
			                    </td><td><label>Stock Management</label></td>
					
					<td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_add_vandor"   />
			        </td>
			        <td>
			           <label>Add Vendor</label>
			        </td>
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_vandor_list"   />
			        </td>
			        <td>
			           <label>Vendor List</label>
			        </td>
			        
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_category_list"   />
			        </td>
			        <td>
			           <label>Category List</label>
			        </td>
			         <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_list_book_item"   />
			        </td>
			        <td>
			           <label>Book Item List</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_buy_book_item_list"   />
			        </td>
			        <td>
			           <label>Buy Book Item List</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_book_add_in_stock"   />
			        </td>
			        <td>
			           <label>Buy Book Add stock</label>
			        </td>
					</tr>
					<tr>
					 <td></td>   
					 <td></td>   
					 <td></td>   
					 <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_add_category"   />
			        </td>
			        <td>
			           <label>Add Category</label>
			        </td> 
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_vandor_list_edit"   />
			        </td>
			        <td>
			           <label style="color:Red;">Vendor List Edit Button</label>
			        </td> 
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_category_list_edit_button"   />
			        </td>
			        <td>
			           <label style="color:Red;">Category List Edit Button</label>
			        </td>
			        
			         <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_list_book_item_edit"   />
			        </td>
			        <td>
			           <label style="color:Red;">book Item Edit Button</label>
			        </td> 
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_buy_book_item_list_edit"   />
			        </td>
			        <td>
			           <label style="color:Red;">Buy book Item Edit Button</label>
			        </td>
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_book_add_in_stock_button"   />
			        </td>
			        <td>
			           <label style="color:Red;">Add in stock Button</label>
			        </td>
			        
			       
			        
					</tr>
					<tr>
					 <td></td>   
					 <td></td>   
					 <td></td>   
					 <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_add_book_item"   />
			        </td>
			        <td>
			           <label>Add Book Item</label>
			        </td>
					 <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_vandor_list_delete"   />
			        </td>
			        <td>
			           <label style="color:Red;">Vendor List Delete Button</label>
			        </td> 
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_category_list_delete_button"   />
			        </td>
			        <td>
			           <label style="color:Red;">Category List Delete Button</label>
			        </td> 
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_list_book_item_delete"   />
			        </td>
			        <td>
			           <label style="color:Red;">Book Item Delete Button</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_buy_book_item_list_delete"   />
			        </td>
			        <td>
			           <label style="color:Red;">Buy Book Item Delete Button</label>
			        </td>
			         <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_book_sale_item"   />
			        </td>
			        <td>
			           <label>Sale item</label>
			        </td>
					</tr>
					<td></td>   
					 <td></td>   
					 <td></td>   
					 <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_buy_book_item"   />
			        </td>
			        <td>
			           <label>Buy Book Item</label>
			        </td>
			        
			         <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_book_sale_item_list"   />
			        </td>
			        <td>
			           <label>Book Sale Item List</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_book_stock_return"   />
			        </td>
			        <td>
			           <label> Book Stock Return</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_book_stock_return_list"   />
			        </td>
			        <td>
			           <label>Book Stock Return List</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_list_item_uniform"   />
			        </td>
			        <td>
			           <label>Add uniform item List</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_uniform_buy_item_list"   />
			        </td>
			        <td>
			           <label>Buy uniform item List</label>
			        </td>
					<tr>
					</tr>
					<tr>
					 <td></td>   
					 <td></td>   
					 <td></td>   
					 <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_buy_book_cancle_list"   />
			        </td>
			        <td>
			           <label>Buy Book cancle List</label>
			        </td> 
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_book_sale_item_list_cancle_button"   />
			        </td>
			        <td>
			           <label style="color:red;">Sale List Cancle Button</label>
			        </td> 
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_add_item_uniform"   />
			        </td>
			        <td>
			           <label>Add Item Uniform</label>
			        </td>
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_uniform_buy_item"   />
			        </td>
			        <td>
			           <label>Buy Item Uniform</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_uniform_item_edit_button"   />
			        </td>
			        <td>
			           <label style="color:red;">Uniform List Edit Button</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_uniform_buy_item_list_cancel"   />
			        </td>
			        <td>
			           <label style="color:red;">Buy Item cacel Button</label>
			        </td>
					    
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_uniform_item_delete_button"   />
			        </td>
			        <td>
			           <label style="color:red;">Uniform List Delete Button</label>
			        </td>
					</tr>
					<tr>
					   <td></td> 
					   <td></td> 
					   <td></td>
					   <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_buy_cancel_list"   />
			        </td>
			        <td>
			           <label>Buy Uniform Cancel List</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_add_in_stock"   />
			        </td>
			        <td>
			           <label>Uniform Add in stock </label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_sale_item_uniform"   />
			        </td>
			        <td>
			           <label>sale item Uniform</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_uniform_sale_list"   />
			        </td>
			        <td>
			           <label>sale List Uniform</label>
			        </td>
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_uniform_sale_cancel_list"   />
			        </td>
			        <td>
			           <label>uniform sale Cancel List </label>
			        </td>
			        
			        
			        <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_sub_panel_uniform_add_opening"   />
			        </td>
			        <td>
			           <label>uniform Add Openning</label>
			        </td>
			        
					</tr>
					<tr>
					    <td></td>
					    <td></td>
					    <td></td>
					    <td>
					  <input type="checkbox"     name="panel_rights[]" class="check_all_panel check_38"   onclick="check_all_panel_wise_all('38')" value="stock_mgt_reports"   />
			        </td>
			        <td>
			           <label>Reports of stock management</label>
			        </td>
					</tr>
					<tr><td>39</td>
						    
						    <td>
						       <input type="checkbox"  name="panel_rights[]" id="panel_39" onclick="check_all_panel_wise('39')"  class="check_all_panel"   value="panel_important"/>
			                </td>
			                <td>
			                    <label>Panel Important</label>
			                </td>
			         </tr>       
				  </tbody>

             </table>	
		
				
		
            <!-- /.box-body -->
          </div>


          </div>

			  <div <div class="box box-success" >>
            <div class="box-header with-border">
              <h3 class="box-title">Class and Section Right</h3>  
			  <input type="checkbox"   id="id_class_check"   onclick="check_all_class1()" />
				     <label>Check All</label>
            </div>
           
			
              <div class="box-body table-responsive">
              <table  class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th style="width:100px">S No</th>
                  <th style="width:200px" >Class Name</th>
                  <th  >Section</th>
                
                  
                 
                </tr>
                </thead>
		
		<tbody>
				                <tr>
                  <td>1</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise1" onclick="class_wise_check('1');"  value="NURSERY"   />   <label>NURSERY</label></td>
				  <input type="hidden" name='section1[]' value="5" />
				  
				  
				  
				  
                  <td>  		 <input type="checkbox"  name="NURSERY_section[] "  class="check_all_class check_all_classwise1" value="A"  onclick="class_wise_check_reverse('1');" />
				     <label>A</label>
				    <input type="checkbox"  name="NURSERY_section[] " class="check_all_class check_all_classwise1"   value="B" onclick="class_wise_check_reverse('1');" />
				     <label>B</label>
				    <input type="checkbox"  name="NURSERY_section[] " class="check_all_class check_all_classwise1"  value="C"  onclick="class_wise_check_reverse('1');" />
				     <label>C</label>
				    <input type="checkbox"  name="NURSERY_section[] "  class="check_all_class check_all_classwise1" value="D"  onclick="class_wise_check_reverse('1');" />
				     <label>D</label>	
				       <input type="checkbox"  name="NURSERY_section[] " class="check_all_class check_all_classwise1"   value="E" onclick="class_wise_check_reverse('1');"  />
				     <label>E</label>	
						
			</td>
			
                </tr>
                               <tr>
                  <td>2</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise2" onclick="class_wise_check('2');"  value="LKG"   />   <label>LKG</label></td>
				  <input type="hidden" name='section1[]' value="2" />
				  
				  
				  
				  
                  <td>  		 <input type="checkbox"  name="LKG_section[] "  class="check_all_class check_all_classwise2" value="A"  onclick="class_wise_check_reverse('2');" />
				     <label>A</label>
				    <input type="checkbox"  name="LKG_section[] "  class="check_all_class check_all_classwise2" value="B"  onclick="class_wise_check_reverse('2');" />
				     <label>B</label>
							
			</td>
			
                </tr>
                               <tr>
                  <td>3</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise3" onclick="class_wise_check('3');"  value="UKG"   />   <label>UKG</label></td>
				  <input type="hidden" name='section1[]' value="3" />
				  
				  
				  
				  
                  <td>  		 <input type="checkbox"  name="UKG_section[] " class="check_all_class check_all_classwise3"  value="A"  onclick="class_wise_check_reverse('3');" />
				     <label>A</label>
				    <input type="checkbox"  name="UKG_section[] " class="check_all_class check_all_classwise3"  value="B"  onclick="class_wise_check_reverse('3');" />
				     <label>B</label>
				    <input type="checkbox"  name="UKG_section[] "  class="check_all_class check_all_classwise3" value="C"  onclick="class_wise_check_reverse('3');"  />
				     <label>C</label>
										
			</td>
			
                </tr>
                               <tr>
                  <td>4</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise4" onclick="class_wise_check('4');"  value="1ST"   />   <label>1ST</label></td>
				  <input type="hidden" name='section1[]' value="2" />
				  
				  
				  
				  
                  <td>  		 <input type="checkbox"  name="1ST_section[] "  class="check_all_class check_all_classwise4" value="A"  onclick="class_wise_check_reverse('4');" />
				     <label>A</label>
				    <input type="checkbox"  name="1ST_section[] "  class="check_all_class check_all_classwise4" value="B"  onclick="class_wise_check_reverse('4');" />
				     <label>B</label>
							
			</td>
			
                </tr>
                               <tr>
                  <td>5</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise5" onclick="class_wise_check('5');"  value="2ND"   />   <label>2ND</label></td>
				  <input type="hidden" name='section1[]' value="1" />
				  
				  
				  
				  
                  <td>   
				  <input type="checkbox"  name="2ND_section[] " class="check_all_class check_all_classwise5"  value="A"   onclick="class_wise_check_reverse('5');" />
				     <label>A</label>
					
			</td>
			
                </tr>
                               <tr>
                  <td>6</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise6" onclick="class_wise_check('6');"  value="3RD"   />   <label>3RD</label></td>
				  <input type="hidden" name='section1[]' value="1" />
				  
				  
				  
				  
                  <td>   
				  <input type="checkbox"  name="3RD_section[] " class="check_all_class check_all_classwise6"  value="A"   onclick="class_wise_check_reverse('6');" />
				     <label>A</label>
					
			</td>
			
                </tr>
                               <tr>
                  <td>7</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise7" onclick="class_wise_check('7');" checked value="4TH"   />   <label>4TH</label></td>
				  <input type="hidden" name='section1[]' value="2" />
				  
				  
				  
				  
                  <td>  		 <input type="checkbox"  name="4TH_section[] "  class="check_all_class check_all_classwise7" value="A"  onclick="class_wise_check_reverse('7');" />
				     <label>A</label>
				    <input type="checkbox"  name="4TH_section[] "  class="check_all_class check_all_classwise7" value="B"  onclick="class_wise_check_reverse('7');" />
				     <label>B</label>
							
			</td>
			
                </tr>
                               <tr>
                  <td>8</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise8" onclick="class_wise_check('8');"  value="5TH"   />   <label>5TH</label></td>
				  <input type="hidden" name='section1[]' value="2" />
				  
				  
				  
				  
                  <td>  		 <input type="checkbox"  name="5TH_section[] "  class="check_all_class check_all_classwise8" value="A"  onclick="class_wise_check_reverse('8');" />
				     <label>A</label>
				    <input type="checkbox"  name="5TH_section[] "  class="check_all_class check_all_classwise8" value="B"  onclick="class_wise_check_reverse('8');" />
				     <label>B</label>
							
			</td>
			
                </tr>
                               <tr>
                  <td>9</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise9" onclick="class_wise_check('9');"  value="6TH"   />   <label>6TH</label></td>
				  <input type="hidden" name='section1[]' value="3" />
				  
				  
				  
				  
                  <td>  		 <input type="checkbox"  name="6TH_section[] " class="check_all_class check_all_classwise9"  value="A"  onclick="class_wise_check_reverse('9');" />
				     <label>A</label>
				    <input type="checkbox"  name="6TH_section[] " class="check_all_class check_all_classwise9"  value="B"  onclick="class_wise_check_reverse('9');" />
				     <label>B</label>
				    <input type="checkbox"  name="6TH_section[] "  class="check_all_class check_all_classwise9" value="C"  onclick="class_wise_check_reverse('9');"  />
				     <label>C</label>
										
			</td>
			
                </tr>
                               <tr>
                  <td>10</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise10" onclick="class_wise_check('10');"  value="7TH"   />   <label>7TH</label></td>
				  <input type="hidden" name='section1[]' value="1" />
				  
				  
				  
				  
                  <td>   
				  <input type="checkbox"  name="7TH_section[] " class="check_all_class check_all_classwise10"  value="A"   onclick="class_wise_check_reverse('10');" />
				     <label>A</label>
					
			</td>
			
                </tr>
                               <tr>
                  <td>11</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise11" onclick="class_wise_check('11');"  value="8TH"   />   <label>8TH</label></td>
				  <input type="hidden" name='section1[]' value="1" />
				  
				  
				  
				  
                  <td>   
				  <input type="checkbox"  name="8TH_section[] " class="check_all_class check_all_classwise11"  value="A"   onclick="class_wise_check_reverse('11');" />
				     <label>A</label>
					
			</td>
			
                </tr>
                               <tr>
                  <td>12</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise12" onclick="class_wise_check('12');"  value="9TH"   />   <label>9TH</label></td>
				  <input type="hidden" name='section1[]' value="2" />
				  
				  
				  
				  
                  <td>  		 <input type="checkbox"  name="9TH_section[] "  class="check_all_class check_all_classwise12" value="A"  onclick="class_wise_check_reverse('12');" />
				     <label>A</label>
				    <input type="checkbox"  name="9TH_section[] "  class="check_all_class check_all_classwise12" value="B"  onclick="class_wise_check_reverse('12');" />
				     <label>B</label>
							
			</td>
			
                </tr>
                               <tr>
                  <td>13</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise13" onclick="class_wise_check('13');"  value="10TH"   />   <label>10TH</label></td>
				  <input type="hidden" name='section1[]' value="1" />
				  
				  
				  
				  
                  <td>   
				  <input type="checkbox"  name="10TH_section[] " class="check_all_class check_all_classwise13"  value="A"   onclick="class_wise_check_reverse('13');" />
				     <label>A</label>
					
			</td>
			
                </tr>
                               <tr>
                  <td>14</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise14" onclick="class_wise_check('14');"  value="11TH"   />   <label>11TH</label></td>
				  <input type="hidden" name='section1[]' value="1" />
				  
				  
				  
				  
                  <td>   
				  <input type="checkbox"  name="11TH_section[] " class="check_all_class check_all_classwise14"  value="A"   onclick="class_wise_check_reverse('14');" />
				     <label>A</label>
					
			</td>
			
                </tr>
                               <tr>
                  <td>15</td>
                  <td> <input type="checkbox"  name="class_right[]" class="check_all_class" id="id_check_all_classwise15" onclick="class_wise_check('15');"  value="12TH"   />   <label>12TH</label></td>
				  <input type="hidden" name='section1[]' value="1" />
				  
				  
				  
				  
                  <td>   
				  <input type="checkbox"  name="12TH_section[] " class="check_all_class check_all_classwise15"  value="A"   onclick="class_wise_check_reverse('15');" />
				     <label>A</label>
					
			</td>
			
                </tr>
               
                </tbody>
 <input type="hidden" value="15" name="serial_no" >
             </table>
            </div>
         			
				
				
				 <div class="col-md-12 ">	
			 
				<center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
				</div>	
				
		
            <!-- /.box-body -->
          </div>


       
		  
		  </form>	
		       </div>
</section>


<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>