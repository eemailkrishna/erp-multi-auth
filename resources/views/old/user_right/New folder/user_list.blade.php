 
<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_user(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_user(s_no){
$.ajax({
type: "POST",
url: access_link+"user_right/delete_user.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('user_right/user_list');
			   }else{
              //  alert_new(detail); 
			   }
}
});
}

</script>
    <section class="content-header">
      <h1>
        User Management 
      </h1>
      <ol class="breadcrumb">
      <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:get_content('user_right/user_right')"><i class="fa fa-photo"></i> User Rights</a></li>
        <li class="active"><i class="fa fa-list"></i> user List </li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >>
            <div class="box-header with-border">
              <h3 class="box-title">User List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S No</th>
                  <th>User Name</th>
                  <th>User Id</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Designation</th>
                  <th>Password</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                 
                </tr>
                </thead>
		
		<tbody>
				                <tr>
                  <td>1</td>
                  <td>Rashi Saxena</td>
                  <td></td>
                  <td>rashisaxena1997@gmail.com</td>
                  <td>9630843846</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rashisaxena1997@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('155');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>2</td>
                  <td>HARSHALI SHAH</td>
                  <td></td>
                  <td>HARSHALI234@GMAIL.COM</td>
                  <td>9406046007</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=HARSHALI234@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('154');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>3</td>
                  <td>Ass</td>
                  <td></td>
                  <td>rahul@gmail.com</td>
                  <td>56777889</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rahul@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('153');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>4</td>
                  <td>AYUSH</td>
                  <td></td>
                  <td>rathore.ayush37@gmail.com</td>
                  <td>9406855366</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rathore.ayush37@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('152');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>5</td>
                  <td>KHETARAM JI</td>
                  <td></td>
                  <td>info@simption.com</td>
                  <td>0914455597</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=info@simption.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('151');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>6</td>
                  <td>suresh Devashi</td>
                  <td></td>
                  <td>sureshramesh@gmail.com</td>
                  <td>9820964914</td>
                  <td>Driver</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=sureshramesh@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('150');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>7</td>
                  <td>AA</td>
                  <td></td>
                  <td>tushar234@gmail.com</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=tushar234@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('149');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>8</td>
                  <td>tushar modi </td>
                  <td></td>
                  <td>tushar234@gmail.com</td>
                  <td>8109964727</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=tushar234@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('148');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>9</td>
                  <td>srishti gusain</td>
                  <td></td>
                  <td>srishtigusain56@gmail.com</td>
                  <td>8602503194</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=srishtigusain56@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('147');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>10</td>
                  <td>Teacher</td>
                  <td></td>
                  <td>teacher1@gmail.com</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=teacher1@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('146');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>11</td>
                  <td>kunal mourya</td>
                  <td></td>
                  <td>umeshmourya2580@gmail.com</td>
                  <td>8889648546</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=umeshmourya2580@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('145');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>12</td>
                  <td>KUMAR RAVIKANT</td>
                  <td></td>
                  <td>ravi100281@gmail.com</td>
                  <td>7979046795</td>
                  <td>Incharge Principal</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=ravi100281@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('144');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>13</td>
                  <td>MR. BHOOPENDRA LODHI</td>
                  <td></td>
                  <td>BHOOPENDRA081194@GMAIL.COM</td>
                  <td>9340342389</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=BHOOPENDRA081194@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('143');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>14</td>
                  <td>shamli </td>
                  <td></td>
                  <td>mahsramshamli@gmail.com</td>
                  <td>6359874129</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=mahsramshamli@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('142');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>15</td>
                  <td>kundan kumar jha</td>
                  <td></td>
                  <td>kjhatimple@gmail.com</td>
                  <td>8789581784</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=kjhatimple@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('141');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>16</td>
                  <td>Supriya Santosh</td>
                  <td></td>
                  <td>supriyasantosh1234@gmail.com</td>
                  <td>8602503194</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=supriyasantosh1234@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('140');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>17</td>
                  <td>Shiwanand Tiwari</td>
                  <td></td>
                  <td>supriyasantosh1234@gmail.com</td>
                  <td>8602503194</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=supriyasantosh1234@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('139');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>18</td>
                  <td>AMIT JI</td>
                  <td></td>
                  <td>00@GMAIL.COM</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=00@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('138');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>19</td>
                  <td>MANOJ YOGI</td>
                  <td></td>
                  <td>00@GMAIL.COM</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=00@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('137');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>20</td>
                  <td>RATAN JI</td>
                  <td></td>
                  <td>00@GMAIL.COM</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=00@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('136');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>21</td>
                  <td>Ghunguu</td>
                  <td></td>
                  <td>gunghuu10@gmail.com</td>
                  <td>0552844854</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=gunghuu10@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('135');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>22</td>
                  <td>Monika</td>
                  <td>Monika</td>
                  <td>monika@gmail.com</td>
                  <td>9825356122</td>
                  <td>school staff</td>
                  <td>111111</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=monika@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('134');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>23</td>
                  <td>Monika</td>
                  <td>Monika</td>
                  <td>monika@gmail.com</td>
                  <td>9825356122</td>
                  <td>school staff</td>
                  <td>111111</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=monika@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('133');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>24</td>
                  <td>kaveri</td>
                  <td></td>
                  <td>kaveri12@gmail.com</td>
                  <td>2569854625</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=kaveri12@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('132');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>25</td>
                  <td>rahul</td>
                  <td></td>
                  <td>md.gjgj@gmai.com</td>
                  <td>1234567891</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=md.gjgj@gmai.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('131');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>26</td>
                  <td>anil n</td>
                  <td>anil n</td>
                  <td>ANILNEMA17@GMAIL.COM</td>
                  <td>19302610017</td>
                  <td>TEACHER</td>
                  <td>12345</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=ANILNEMA17@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('130');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>27</td>
                  <td>000@GMAIL.COM</td>
                  <td>000@GMAIL.COM</td>
                  <td>000@GMAIL.COM</td>
                  <td>7748908646</td>
                  <td>teacher</td>
                  <td>123123</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=000@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('126');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>28</td>
                  <td>someone@someid.com</td>
                  <td>someone@someid.com</td>
                  <td>someone@someid.com</td>
                  <td>744</td>
                  <td>T</td>
                  <td>700470</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=someone@someid.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('125');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>29</td>
                  <td>someone@someid.com</td>
                  <td>someone@someid.com</td>
                  <td>someone@someid.com</td>
                  <td>744</td>
                  <td>T</td>
                  <td>700470</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=someone@someid.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('124');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>30</td>
                  <td>Vishu</td>
                  <td></td>
                  <td>bbsbs@d.com</td>
                  <td>Hdhdh</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=bbsbs@d.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('123');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>31</td>
                  <td>shreya sharma</td>
                  <td></td>
                  <td>dummy@gmail.com</td>
                  <td>987461236</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=dummy@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('122');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>32</td>
                  <td>rohan</td>
                  <td>rohan</td>
                  <td>KOSAL78@GMAIL.COM</td>
                  <td>25625634</td>
                  <td>Teacher</td>
                  <td>12390</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=KOSAL78@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('121');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>33</td>
                  <td>TUSHAR IYRE </td>
                  <td></td>
                  <td>SIR1234@GMAIL.COM</td>
                  <td>9845632156</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=SIR1234@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('120');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>34</td>
                  <td>DD</td>
                  <td></td>
                  <td>cds@gmaill.com</td>
                  <td>54654</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=cds@gmaill.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('119');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>35</td>
                  <td>Harshit sharma</td>
                  <td></td>
                  <td>harshitkumars092@gmail.com</td>
                  <td>7869973168</td>
                  <td>BDE</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=harshitkumars092@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('118');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>36</td>
                  <td>DEMO</td>
                  <td></td>
                  <td>demo@gmail.com</td>
                  <td>9717386989</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=demo@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('117');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>37</td>
                  <td>SANTOSH KUMAR SINGH</td>
                  <td></td>
                  <td>nagendra709042198@GMAIL.COM</td>
                  <td>9709042198</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=nagendra709042198@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('116');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>38</td>
                  <td>sanjay</td>
                  <td>sanjay</td>
                  <td>sunflowerpublicschool786@gmail.com</td>
                  <td>8654963254</td>
                  <td>Teachers</td>
                  <td>8899</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=sunflowerpublicschool786@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('115');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>39</td>
                  <td>jay kishan</td>
                  <td></td>
                  <td>jay@gmail.com</td>
                  <td>9864645645</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=jay@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('114');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>40</td>
                  <td>Puran Singh Sahu</td>
                  <td>Puran Singh Sahu</td>
                  <td>rajanikanta.fine@gmail.com</td>
                  <td>+918815220143</td>
                  <td>Teacher</td>
                  <td>54321</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajanikanta.fine@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('113');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>41</td>
                  <td>Puran Singh Sahu</td>
                  <td>Puran Singh Sahu</td>
                  <td>rajanikanta.fine@gmail.com</td>
                  <td>+918815220143</td>
                  <td>Teacher</td>
                  <td>54321</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajanikanta.fine@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('112');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>42</td>
                  <td>Puran Singh Sahu</td>
                  <td>Puran Singh Sahu</td>
                  <td>rajanikanta.fine@gmail.com</td>
                  <td>+918815220143</td>
                  <td>Teacher</td>
                  <td>54321</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajanikanta.fine@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('111');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>43</td>
                  <td>Puran Singh Sahu</td>
                  <td>Puran Singh Sahu</td>
                  <td>rajanikanta.fine@gmail.com</td>
                  <td>+918815220143</td>
                  <td>Teacher</td>
                  <td>54321</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajanikanta.fine@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('110');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>44</td>
                  <td>Puran Singh Sahu</td>
                  <td>Puran Singh Sahu</td>
                  <td>rajanikanta.fine@gmail.com</td>
                  <td>+918815220143</td>
                  <td>Teacher</td>
                  <td>54321</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajanikanta.fine@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('109');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>45</td>
                  <td>Puran Singh Sahu</td>
                  <td>Puran Singh Sahu</td>
                  <td>rajanikanta.fine@gmail.com</td>
                  <td>+918815220143</td>
                  <td>Teacher</td>
                  <td>54321</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajanikanta.fine@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('108');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>46</td>
                  <td>Puran Singh Sahu</td>
                  <td>Puran Singh Sahu</td>
                  <td>rajanikanta.fine@gmail.com</td>
                  <td>+918815220143</td>
                  <td>Teacher</td>
                  <td>54321</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajanikanta.fine@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('107');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>47</td>
                  <td>Puran Singh Sahu</td>
                  <td>Puran Singh Sahu</td>
                  <td>rajanikanta.fine@gmail.com</td>
                  <td>+918815220143</td>
                  <td>Teacher</td>
                  <td>54321</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajanikanta.fine@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('106');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>48</td>
                  <td>Anamika</td>
                  <td></td>
                  <td>XYZ@GMAIL.COM</td>
                  <td>1234567891</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=XYZ@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('105');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>49</td>
                  <td>Anamika</td>
                  <td></td>
                  <td>XYZ@GMAIL.COM</td>
                  <td>9456312705</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=XYZ@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('104');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>50</td>
                  <td>anand sharma</td>
                  <td></td>
                  <td>XYZ@GMAIL.COM</td>
                  <td>1234567890</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=XYZ@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('103');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>51</td>
                  <td>Abhul Rjaak </td>
                  <td>Abhul Rjaak </td>
                  <td>rajaak987@gmail.com</td>
                  <td>9685745263</td>
                  <td>Teacher</td>
                  <td>2121</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rajaak987@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('102');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>52</td>
                  <td>demo</td>
                  <td>demo</td>
                  <td>demo123@gmail.com</td>
                  <td>1234567890</td>
                  <td>driver</td>
                  <td>1234567890</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=demo123@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('101');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>53</td>
                  <td>kailash soni</td>
                  <td>kailash soni</td>
                  <td>kailusoni99@gmail.com</td>
                  <td>9617777047</td>
                  <td>Teacher</td>
                  <td>12220</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=kailusoni99@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('100');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>54</td>
                  <td>kailash soni</td>
                  <td>kailash soni</td>
                  <td>kailusoni99@gmail.com</td>
                  <td>9617777047</td>
                  <td>Teacher</td>
                  <td>12220</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=kailusoni99@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('99');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>55</td>
                  <td>simption@4170gmail.c</td>
                  <td>simption@4170gmail.c</td>
                  <td>bhopal@gmail.com</td>
                  <td>9584834331</td>
                  <td>Teacher</td>
                  <td>simption</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=bhopal@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('98');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>56</td>
                  <td>PRAKASH KUMAWAT</td>
                  <td></td>
                  <td>rkmps2014@gmail.com</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rkmps2014@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('97');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>57</td>
                  <td>S.G.HAGE</td>
                  <td></td>
                  <td>sghage@tsrd.com</td>
                  <td></td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=sghage@tsrd.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('96');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>58</td>
                  <td>demo</td>
                  <td></td>
                  <td>dec@gmail.cpm</td>
                  <td>7978988989</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=dec@gmail.cpm')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('95');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>59</td>
                  <td>SATISH HAGE</td>
                  <td></td>
                  <td>22188689@SJ.COM</td>
                  <td></td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=22188689@SJ.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('94');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>60</td>
                  <td>Anita choudhary</td>
                  <td></td>
                  <td>anitachoudhary@gmail.com</td>
                  <td>9761743455</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=anitachoudhary@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('93');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>61</td>
                  <td>shardha</td>
                  <td></td>
                  <td>pfedjhnepj@gmail.com</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=pfedjhnepj@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('92');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>62</td>
                  <td>Sumit</td>
                  <td></td>
                  <td>nbikaujgh@gmail.com</td>
                  <td>1236547987</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=nbikaujgh@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('91');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>63</td>
                  <td>ALOK KUMAR SHARMA</td>
                  <td></td>
                  <td>alokkumarsharma1983@gmail.com</td>
                  <td>7355613255</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=alokkumarsharma1983@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('90');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>64</td>
                  <td>GYGT</td>
                  <td></td>
                  <td>BHAN.RATHOD@GMAIL.COM</td>
                  <td></td>
                  <td>Accountant</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=BHAN.RATHOD@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('89');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>65</td>
                  <td>amar</td>
                  <td></td>
                  <td>abc@gmail.com</td>
                  <td>7784879926</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=abc@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('88');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>66</td>
                  <td>Varshika</td>
                  <td></td>
                  <td>abc@gmail.com</td>
                  <td>9588231141</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=abc@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('87');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>67</td>
                  <td>nikhil advin</td>
                  <td></td>
                  <td>abc@gmail.com</td>
                  <td>1236547896</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=abc@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('86');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>68</td>
                  <td>pravin</td>
                  <td></td>
                  <td>abc@gmail.com</td>
                  <td>7578412587</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=abc@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('85');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>69</td>
                  <td>Rashid Wafy</td>
                  <td></td>
                  <td>iringattirirashid@gmail.com</td>
                  <td>9961302886</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=iringattirirashid@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('80');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>70</td>
                  <td>HASIBUR RAHAMAN</td>
                  <td></td>
                  <td>arizaktar@gmail.com</td>
                  <td>9732035737</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=arizaktar@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('79');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>71</td>
                  <td>aashu </td>
                  <td></td>
                  <td>aashu@gmail.com</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=aashu@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('78');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>72</td>
                  <td>rani</td>
                  <td>rani</td>
                  <td>rani73@gmail.com</td>
                  <td>9074822542</td>
                  <td>Teacher</td>
                  <td>123456</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=rani73@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('77');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>73</td>
                  <td>SANJAY KUMAR MAHTO</td>
                  <td></td>
                  <td>sanjaykr875762@gmail.com</td>
                  <td>8757628034</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=sanjaykr875762@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('76');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>74</td>
                  <td>ASHADUR RAHMAN MONDA</td>
                  <td></td>
                  <td>ASHADURMONDALL@GMAIL.COM</td>
                  <td>7005657009</td>
                  <td>Principle</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=ASHADURMONDALL@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('75');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>75</td>
                  <td>MISTER AZAD</td>
                  <td></td>
                  <td>dilrubaazad357@gail.com</td>
                  <td>9939057531</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=dilrubaazad357@gail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('74');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>76</td>
                  <td>prabhu dayal koli</td>
                  <td></td>
                  <td>pdkoli82@gmail.com</td>
                  <td>9826390607</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=pdkoli82@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('73');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>77</td>
                  <td>RAM</td>
                  <td>RAM</td>
                  <td>parantappublicschool@gmail.com</td>
                  <td>8299534828</td>
                  <td>accontant</td>
                  <td>123456789</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=parantappublicschool@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('72');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>78</td>
                  <td>Bonald</td>
                  <td>Bonald</td>
                  <td>bonaldsangma@gmail.com</td>
                  <td>09402510573</td>
                  <td>Office Work</td>
                  <td>523635</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=bonaldsangma@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('70');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>79</td>
                  <td>Gdufjc</td>
                  <td></td>
                  <td>fkgkv@gmail.com</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=fkgkv@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('69');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>80</td>
                  <td>DWARAPUREDDI GANESH</td>
                  <td>DWARAPUREDDI GANESH</td>
                  <td>ganeshdwarapureddi1999@gmail.com</td>
                  <td>8096960283</td>
                  <td>Head Master</td>
                  <td>8096960283</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=ganeshdwarapureddi1999@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('65');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>81</td>
                  <td>NANDINI BINAKIA</td>
                  <td></td>
                  <td>bbinakia@rocketmail.com</td>
                  <td>09617050420</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=bbinakia@rocketmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('63');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>82</td>
                  <td>Hansraj</td>
                  <td></td>
                  <td>hansraj4384@gmail.com</td>
                  <td>8053038939</td>
                  <td>Teacher</td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=hansraj4384@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('62');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>83</td>
                  <td>Md Farhan Ashraf</td>
                  <td>Md Farhan Ashraf</td>
                  <td>farhanashraf487@gmail.com</td>
                  <td>9939776047</td>
                  <td>Director</td>
                  <td>123456</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=farhanashraf487@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('61');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>84</td>
                  <td>we</td>
                  <td></td>
                  <td>shsh@gmail.com</td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=shsh@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('60');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>85</td>
                  <td>Norang lal</td>
                  <td>Norang lal</td>
                  <td>noranglalmanglaw@gmail.com</td>
                  <td>6377764116</td>
                  <td>Principal</td>
                  <td>123456</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=noranglalmanglaw@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('59');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>86</td>
                  <td>PRAKASH KUMAWAT</td>
                  <td>PRAKASH KUMAWAT</td>
                  <td>SAINIKISHAN2002@GMAIL.COM</td>
                  <td>6367680365</td>
                  <td>Teacher</td>
                  <td>854897213</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=SAINIKISHAN2002@GMAIL.COM')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('58');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>87</td>
                  <td>Subair faisy</td>
                  <td></td>
                  <td>subairfaisy@gmail.com</td>
                  <td>9995292362</td>
                  <td></td>
                  <td></td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=subairfaisy@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('57');" >Delete</button></td>
				 
                  
                </tr>
	                <tr>
                  <td>88</td>
                  <td>Amit Chaudhary</td>
                  <td>Amit Chaudhary</td>
                  <td>Pranatbhai123@gmail.com</td>
                  <td>9592147871</td>
                  <td>Director</td>
                  <td>9592147871</td>
				  <td><button type="button"  onclick="post_content('user_right/add_user','user_email=Pranatbhai123@gmail.com')" class="btn btn-success" >Edit</button></td><td>
			<button type="button"  class="btn btn-danger" onclick="return valid('55');" >Delete</button></td>
				 
                  
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

<script>
  $(function () {
    $('#example1').DataTable()
   
  })
</script>

