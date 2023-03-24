 
<script type="text/javascript">
function for_calculation(value,id_class,class_code,fee_code){

var fee_sno=document.getElementById('fee_sno').value;
var class_code2=document.getElementById('class_code2').value;
var tot_cls=class_code2.split('|?|');
var tot_lnth=tot_cls.length;
if(id_class=='my_id'){
    var each_amt=parseFloat(value/fee_sno);
    if($('#for_same1').prop("checked") == true){
    for(var q=1;q<tot_lnth;q++){
        $('#'+tot_cls[q]).val(value);
        $('.'+tot_cls[q]).each(function() {
        $(this).val(each_amt.toFixed());
        });
    }
    }else{
    $('.'+class_code).each(function() {
    $(this).val(each_amt.toFixed());
    });
    }
}else if(id_class=='my_class'){
    if($('#for_same1').prop("checked") == true){
    var total=0;
    $('.'+class_code).each(function() {
    total += Number($(this).val());
    });
    var v=0;
    for(var q=1;q<tot_lnth;q++){
        $('#month_'+fee_code+'_'+v).val(value);
        $('#'+tot_cls[q]).val(total);
        v=Number(v+1);
    }
    }else{
    var total=0;
    $('.'+class_code).each(function() {
    total += Number($(this).val());
    });
    $('#'+class_code).val(total);
    }
}

}

// function for_same(value){
//     if($('#same_fee').prop("checked") == true){
//     $(".bus_fee").each(function() {
//     $(this).val(value);
//     });
//     }
// }
</script>
<script>

    $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
		window.scrollTo(0, 0);
        loader();
        $.ajax({
            url: access_link+"school_info/add_bus_fee_category_monthly_installmentwise_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
                //$('#test').html(detail);
              var res=detail.split("|?|");
			   if(res[1]=='success'){
			       alert_new('Successfully Complete!!!','green');
				   get_content('school_info/add_bus_fee_category_monthly_installmentwise');
            }
			}
         });
      });
</script>
    
        
    <section class="content-header">
      <h1>
        School Information Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('school_info/school_info')"><i class="fa fa-graduation-cap"></i> School Info</a></li>
	  <li><a href="javascript:get_content('school_info/add_bus_fee_category_monthly_installmentwise')"><i class="fa fa-graduation-cap"></i> Fee Type List</a></li>
	  <li class="active">Add Bus Fees Type</li>
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
              <div class="col-md-8"><h3 class="box-title">Bus Fee Type Add</h3></div>
              <div class="col-md-4"><span style="float:right;font-weight:bold;color:red;"><input type="checkbox" id="for_same1">Check For Same</span></div>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
                        <form role="form"  method="post" enctype="multipart/form-data" id="my_form">
            <div class="box-body "  >
		        
				<div class="col-md-12 box-body table-responsive">
				<div class="col-md-8 col-md-offset-2">
				    <div class="col-md-6">
				        <label>Bus Fee Type</label>
				        <input type="text" name="bus_fee_category_name" id="" value="MOD" class="form-control" />
				        <input type="hidden" name="fee_sno" id="fee_sno" value="12" class="form-control" />
				        <input type="hidden" name="class_code2" id="class_code2" value="|?|class1|?|class2|?|class3|?|class4|?|class5|?|class6|?|class7|?|class8|?|class9|?|class10|?|class11|?|class12|?|class13|?|class14|?|class15" class="form-control" />
				        <input type="hidden" name="bus_fee_category_code11" id="bus_fee_category_code11" value="busfee16" class="form-control" />
				        <input type="hidden" name="class_sno" id="class_sno" value="15" class="form-control" />
				        <input type="hidden" name="fees_code11" id="fees_code11" value="04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12|?|01|?|02|?|03" class="form-control" />
				    </div>
				    <div class="col-md-6">
				        <label>Bus Fee Type Hindi</label>
				        <input type="text" name="bus_fee_category_name_hindi" id="" value="" class="form-control" />
				    </div>
				</div>
				<div class="col-md-12" id="test">&nbsp;</div>
                <table id="table-data" class="table table-bordered table-striped">
                <thead >
                <tr>
				  <th>#</th>
				  <th>Class Name</th>
				  <th>Total Amount</th>
				                    <th>April Month</th>
                                    <th>May Month</th>
                                    <th>June Month</th>
                                    <th>July Month</th>
                                    <th>August Month</th>
                                    <th>September Month</th>
                                    <th>October Month</th>
                                    <th>November Month</th>
                                    <th>December Month</th>
                                    <th>January Month</th>
                                    <th>February Month</th>
                                    <th>March Month</th>
                                  </tr>
                </thead>
                <tbody>
                                <tr>
                <td>1.</td>
                <td>NURSERY<input type="hidden" name="class_code[]" value="class1" /></td>
                <td><input type="number" name="total_amount[]" id="class1" value="2000" style="width:80px;" class="amt1" title="NURSERY" oninput="for_calculation(this.value,'my_id','class1','01');" /></td>
                                <td><input type="number" name="class1_04" id="month_04_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / April Month" oninput="for_calculation(this.value,'my_class','class1','04');" /></td>
                                <td><input type="number" name="class1_05" id="month_05_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / May Month" oninput="for_calculation(this.value,'my_class','class1','05');" /></td>
                                <td><input type="number" name="class1_06" id="month_06_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / June Month" oninput="for_calculation(this.value,'my_class','class1','06');" /></td>
                                <td><input type="number" name="class1_07" id="month_07_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / July Month" oninput="for_calculation(this.value,'my_class','class1','07');" /></td>
                                <td><input type="number" name="class1_08" id="month_08_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / August Month" oninput="for_calculation(this.value,'my_class','class1','08');" /></td>
                                <td><input type="number" name="class1_09" id="month_09_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / September Month" oninput="for_calculation(this.value,'my_class','class1','09');" /></td>
                                <td><input type="number" name="class1_10" id="month_10_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / October Month" oninput="for_calculation(this.value,'my_class','class1','10');" /></td>
                                <td><input type="number" name="class1_11" id="month_11_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / November Month" oninput="for_calculation(this.value,'my_class','class1','11');" /></td>
                                <td><input type="number" name="class1_12" id="month_12_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / December Month" oninput="for_calculation(this.value,'my_class','class1','12');" /></td>
                                <td><input type="number" name="class1_01" id="month_01_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / January Month" oninput="for_calculation(this.value,'my_class','class1','01');" /></td>
                                <td><input type="number" name="class1_02" id="month_02_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / February Month" oninput="for_calculation(this.value,'my_class','class1','02');" /></td>
                                <td><input type="number" name="class1_03" id="month_03_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / March Month" oninput="for_calculation(this.value,'my_class','class1','03');" /></td>
                                </tr>
                                <tr>
                <td>2.</td>
                <td>LKG<input type="hidden" name="class_code[]" value="class2" /></td>
                <td><input type="number" name="total_amount[]" id="class2" value="" style="width:80px;" class="amt1" title="LKG" oninput="for_calculation(this.value,'my_id','class2','01');" /></td>
                                <td><input type="number" name="class2_04" id="month_04_1" value="" style="width:60px;" class="class2 amt" title="LKG / April Month" oninput="for_calculation(this.value,'my_class','class2','04');" /></td>
                                <td><input type="number" name="class2_05" id="month_05_1" value="" style="width:60px;" class="class2 amt" title="LKG / May Month" oninput="for_calculation(this.value,'my_class','class2','05');" /></td>
                                <td><input type="number" name="class2_06" id="month_06_1" value="" style="width:60px;" class="class2 amt" title="LKG / June Month" oninput="for_calculation(this.value,'my_class','class2','06');" /></td>
                                <td><input type="number" name="class2_07" id="month_07_1" value="" style="width:60px;" class="class2 amt" title="LKG / July Month" oninput="for_calculation(this.value,'my_class','class2','07');" /></td>
                                <td><input type="number" name="class2_08" id="month_08_1" value="" style="width:60px;" class="class2 amt" title="LKG / August Month" oninput="for_calculation(this.value,'my_class','class2','08');" /></td>
                                <td><input type="number" name="class2_09" id="month_09_1" value="" style="width:60px;" class="class2 amt" title="LKG / September Month" oninput="for_calculation(this.value,'my_class','class2','09');" /></td>
                                <td><input type="number" name="class2_10" id="month_10_1" value="" style="width:60px;" class="class2 amt" title="LKG / October Month" oninput="for_calculation(this.value,'my_class','class2','10');" /></td>
                                <td><input type="number" name="class2_11" id="month_11_1" value="" style="width:60px;" class="class2 amt" title="LKG / November Month" oninput="for_calculation(this.value,'my_class','class2','11');" /></td>
                                <td><input type="number" name="class2_12" id="month_12_1" value="" style="width:60px;" class="class2 amt" title="LKG / December Month" oninput="for_calculation(this.value,'my_class','class2','12');" /></td>
                                <td><input type="number" name="class2_01" id="month_01_1" value="" style="width:60px;" class="class2 amt" title="LKG / January Month" oninput="for_calculation(this.value,'my_class','class2','01');" /></td>
                                <td><input type="number" name="class2_02" id="month_02_1" value="" style="width:60px;" class="class2 amt" title="LKG / February Month" oninput="for_calculation(this.value,'my_class','class2','02');" /></td>
                                <td><input type="number" name="class2_03" id="month_03_1" value="" style="width:60px;" class="class2 amt" title="LKG / March Month" oninput="for_calculation(this.value,'my_class','class2','03');" /></td>
                                </tr>
                                <tr>
                <td>3.</td>
                <td>UKG<input type="hidden" name="class_code[]" value="class3" /></td>
                <td><input type="number" name="total_amount[]" id="class3" value="" style="width:80px;" class="amt1" title="UKG" oninput="for_calculation(this.value,'my_id','class3','01');" /></td>
                                <td><input type="number" name="class3_04" id="month_04_2" value="" style="width:60px;" class="class3 amt" title="UKG / April Month" oninput="for_calculation(this.value,'my_class','class3','04');" /></td>
                                <td><input type="number" name="class3_05" id="month_05_2" value="" style="width:60px;" class="class3 amt" title="UKG / May Month" oninput="for_calculation(this.value,'my_class','class3','05');" /></td>
                                <td><input type="number" name="class3_06" id="month_06_2" value="" style="width:60px;" class="class3 amt" title="UKG / June Month" oninput="for_calculation(this.value,'my_class','class3','06');" /></td>
                                <td><input type="number" name="class3_07" id="month_07_2" value="" style="width:60px;" class="class3 amt" title="UKG / July Month" oninput="for_calculation(this.value,'my_class','class3','07');" /></td>
                                <td><input type="number" name="class3_08" id="month_08_2" value="" style="width:60px;" class="class3 amt" title="UKG / August Month" oninput="for_calculation(this.value,'my_class','class3','08');" /></td>
                                <td><input type="number" name="class3_09" id="month_09_2" value="" style="width:60px;" class="class3 amt" title="UKG / September Month" oninput="for_calculation(this.value,'my_class','class3','09');" /></td>
                                <td><input type="number" name="class3_10" id="month_10_2" value="" style="width:60px;" class="class3 amt" title="UKG / October Month" oninput="for_calculation(this.value,'my_class','class3','10');" /></td>
                                <td><input type="number" name="class3_11" id="month_11_2" value="" style="width:60px;" class="class3 amt" title="UKG / November Month" oninput="for_calculation(this.value,'my_class','class3','11');" /></td>
                                <td><input type="number" name="class3_12" id="month_12_2" value="" style="width:60px;" class="class3 amt" title="UKG / December Month" oninput="for_calculation(this.value,'my_class','class3','12');" /></td>
                                <td><input type="number" name="class3_01" id="month_01_2" value="" style="width:60px;" class="class3 amt" title="UKG / January Month" oninput="for_calculation(this.value,'my_class','class3','01');" /></td>
                                <td><input type="number" name="class3_02" id="month_02_2" value="" style="width:60px;" class="class3 amt" title="UKG / February Month" oninput="for_calculation(this.value,'my_class','class3','02');" /></td>
                                <td><input type="number" name="class3_03" id="month_03_2" value="" style="width:60px;" class="class3 amt" title="UKG / March Month" oninput="for_calculation(this.value,'my_class','class3','03');" /></td>
                                </tr>
                                <tr>
                <td>4.</td>
                <td>1ST<input type="hidden" name="class_code[]" value="class4" /></td>
                <td><input type="number" name="total_amount[]" id="class4" value="" style="width:80px;" class="amt1" title="1ST" oninput="for_calculation(this.value,'my_id','class4','01');" /></td>
                                <td><input type="number" name="class4_04" id="month_04_3" value="" style="width:60px;" class="class4 amt" title="1ST / April Month" oninput="for_calculation(this.value,'my_class','class4','04');" /></td>
                                <td><input type="number" name="class4_05" id="month_05_3" value="" style="width:60px;" class="class4 amt" title="1ST / May Month" oninput="for_calculation(this.value,'my_class','class4','05');" /></td>
                                <td><input type="number" name="class4_06" id="month_06_3" value="" style="width:60px;" class="class4 amt" title="1ST / June Month" oninput="for_calculation(this.value,'my_class','class4','06');" /></td>
                                <td><input type="number" name="class4_07" id="month_07_3" value="" style="width:60px;" class="class4 amt" title="1ST / July Month" oninput="for_calculation(this.value,'my_class','class4','07');" /></td>
                                <td><input type="number" name="class4_08" id="month_08_3" value="" style="width:60px;" class="class4 amt" title="1ST / August Month" oninput="for_calculation(this.value,'my_class','class4','08');" /></td>
                                <td><input type="number" name="class4_09" id="month_09_3" value="" style="width:60px;" class="class4 amt" title="1ST / September Month" oninput="for_calculation(this.value,'my_class','class4','09');" /></td>
                                <td><input type="number" name="class4_10" id="month_10_3" value="" style="width:60px;" class="class4 amt" title="1ST / October Month" oninput="for_calculation(this.value,'my_class','class4','10');" /></td>
                                <td><input type="number" name="class4_11" id="month_11_3" value="" style="width:60px;" class="class4 amt" title="1ST / November Month" oninput="for_calculation(this.value,'my_class','class4','11');" /></td>
                                <td><input type="number" name="class4_12" id="month_12_3" value="" style="width:60px;" class="class4 amt" title="1ST / December Month" oninput="for_calculation(this.value,'my_class','class4','12');" /></td>
                                <td><input type="number" name="class4_01" id="month_01_3" value="" style="width:60px;" class="class4 amt" title="1ST / January Month" oninput="for_calculation(this.value,'my_class','class4','01');" /></td>
                                <td><input type="number" name="class4_02" id="month_02_3" value="" style="width:60px;" class="class4 amt" title="1ST / February Month" oninput="for_calculation(this.value,'my_class','class4','02');" /></td>
                                <td><input type="number" name="class4_03" id="month_03_3" value="" style="width:60px;" class="class4 amt" title="1ST / March Month" oninput="for_calculation(this.value,'my_class','class4','03');" /></td>
                                </tr>
                                <tr>
                <td>5.</td>
                <td>2ND<input type="hidden" name="class_code[]" value="class5" /></td>
                <td><input type="number" name="total_amount[]" id="class5" value="" style="width:80px;" class="amt1" title="2ND" oninput="for_calculation(this.value,'my_id','class5','01');" /></td>
                                <td><input type="number" name="class5_04" id="month_04_4" value="" style="width:60px;" class="class5 amt" title="2ND / April Month" oninput="for_calculation(this.value,'my_class','class5','04');" /></td>
                                <td><input type="number" name="class5_05" id="month_05_4" value="" style="width:60px;" class="class5 amt" title="2ND / May Month" oninput="for_calculation(this.value,'my_class','class5','05');" /></td>
                                <td><input type="number" name="class5_06" id="month_06_4" value="" style="width:60px;" class="class5 amt" title="2ND / June Month" oninput="for_calculation(this.value,'my_class','class5','06');" /></td>
                                <td><input type="number" name="class5_07" id="month_07_4" value="" style="width:60px;" class="class5 amt" title="2ND / July Month" oninput="for_calculation(this.value,'my_class','class5','07');" /></td>
                                <td><input type="number" name="class5_08" id="month_08_4" value="" style="width:60px;" class="class5 amt" title="2ND / August Month" oninput="for_calculation(this.value,'my_class','class5','08');" /></td>
                                <td><input type="number" name="class5_09" id="month_09_4" value="" style="width:60px;" class="class5 amt" title="2ND / September Month" oninput="for_calculation(this.value,'my_class','class5','09');" /></td>
                                <td><input type="number" name="class5_10" id="month_10_4" value="" style="width:60px;" class="class5 amt" title="2ND / October Month" oninput="for_calculation(this.value,'my_class','class5','10');" /></td>
                                <td><input type="number" name="class5_11" id="month_11_4" value="" style="width:60px;" class="class5 amt" title="2ND / November Month" oninput="for_calculation(this.value,'my_class','class5','11');" /></td>
                                <td><input type="number" name="class5_12" id="month_12_4" value="" style="width:60px;" class="class5 amt" title="2ND / December Month" oninput="for_calculation(this.value,'my_class','class5','12');" /></td>
                                <td><input type="number" name="class5_01" id="month_01_4" value="" style="width:60px;" class="class5 amt" title="2ND / January Month" oninput="for_calculation(this.value,'my_class','class5','01');" /></td>
                                <td><input type="number" name="class5_02" id="month_02_4" value="" style="width:60px;" class="class5 amt" title="2ND / February Month" oninput="for_calculation(this.value,'my_class','class5','02');" /></td>
                                <td><input type="number" name="class5_03" id="month_03_4" value="" style="width:60px;" class="class5 amt" title="2ND / March Month" oninput="for_calculation(this.value,'my_class','class5','03');" /></td>
                                </tr>
                                <tr>
                <td>6.</td>
                <td>3RD<input type="hidden" name="class_code[]" value="class6" /></td>
                <td><input type="number" name="total_amount[]" id="class6" value="" style="width:80px;" class="amt1" title="3RD" oninput="for_calculation(this.value,'my_id','class6','01');" /></td>
                                <td><input type="number" name="class6_04" id="month_04_5" value="" style="width:60px;" class="class6 amt" title="3RD / April Month" oninput="for_calculation(this.value,'my_class','class6','04');" /></td>
                                <td><input type="number" name="class6_05" id="month_05_5" value="" style="width:60px;" class="class6 amt" title="3RD / May Month" oninput="for_calculation(this.value,'my_class','class6','05');" /></td>
                                <td><input type="number" name="class6_06" id="month_06_5" value="" style="width:60px;" class="class6 amt" title="3RD / June Month" oninput="for_calculation(this.value,'my_class','class6','06');" /></td>
                                <td><input type="number" name="class6_07" id="month_07_5" value="" style="width:60px;" class="class6 amt" title="3RD / July Month" oninput="for_calculation(this.value,'my_class','class6','07');" /></td>
                                <td><input type="number" name="class6_08" id="month_08_5" value="" style="width:60px;" class="class6 amt" title="3RD / August Month" oninput="for_calculation(this.value,'my_class','class6','08');" /></td>
                                <td><input type="number" name="class6_09" id="month_09_5" value="" style="width:60px;" class="class6 amt" title="3RD / September Month" oninput="for_calculation(this.value,'my_class','class6','09');" /></td>
                                <td><input type="number" name="class6_10" id="month_10_5" value="" style="width:60px;" class="class6 amt" title="3RD / October Month" oninput="for_calculation(this.value,'my_class','class6','10');" /></td>
                                <td><input type="number" name="class6_11" id="month_11_5" value="" style="width:60px;" class="class6 amt" title="3RD / November Month" oninput="for_calculation(this.value,'my_class','class6','11');" /></td>
                                <td><input type="number" name="class6_12" id="month_12_5" value="" style="width:60px;" class="class6 amt" title="3RD / December Month" oninput="for_calculation(this.value,'my_class','class6','12');" /></td>
                                <td><input type="number" name="class6_01" id="month_01_5" value="" style="width:60px;" class="class6 amt" title="3RD / January Month" oninput="for_calculation(this.value,'my_class','class6','01');" /></td>
                                <td><input type="number" name="class6_02" id="month_02_5" value="" style="width:60px;" class="class6 amt" title="3RD / February Month" oninput="for_calculation(this.value,'my_class','class6','02');" /></td>
                                <td><input type="number" name="class6_03" id="month_03_5" value="" style="width:60px;" class="class6 amt" title="3RD / March Month" oninput="for_calculation(this.value,'my_class','class6','03');" /></td>
                                </tr>
                                <tr>
                <td>7.</td>
                <td>4TH<input type="hidden" name="class_code[]" value="class7" /></td>
                <td><input type="number" name="total_amount[]" id="class7" value="" style="width:80px;" class="amt1" title="4TH" oninput="for_calculation(this.value,'my_id','class7','01');" /></td>
                                <td><input type="number" name="class7_04" id="month_04_6" value="" style="width:60px;" class="class7 amt" title="4TH / April Month" oninput="for_calculation(this.value,'my_class','class7','04');" /></td>
                                <td><input type="number" name="class7_05" id="month_05_6" value="" style="width:60px;" class="class7 amt" title="4TH / May Month" oninput="for_calculation(this.value,'my_class','class7','05');" /></td>
                                <td><input type="number" name="class7_06" id="month_06_6" value="" style="width:60px;" class="class7 amt" title="4TH / June Month" oninput="for_calculation(this.value,'my_class','class7','06');" /></td>
                                <td><input type="number" name="class7_07" id="month_07_6" value="" style="width:60px;" class="class7 amt" title="4TH / July Month" oninput="for_calculation(this.value,'my_class','class7','07');" /></td>
                                <td><input type="number" name="class7_08" id="month_08_6" value="" style="width:60px;" class="class7 amt" title="4TH / August Month" oninput="for_calculation(this.value,'my_class','class7','08');" /></td>
                                <td><input type="number" name="class7_09" id="month_09_6" value="" style="width:60px;" class="class7 amt" title="4TH / September Month" oninput="for_calculation(this.value,'my_class','class7','09');" /></td>
                                <td><input type="number" name="class7_10" id="month_10_6" value="" style="width:60px;" class="class7 amt" title="4TH / October Month" oninput="for_calculation(this.value,'my_class','class7','10');" /></td>
                                <td><input type="number" name="class7_11" id="month_11_6" value="" style="width:60px;" class="class7 amt" title="4TH / November Month" oninput="for_calculation(this.value,'my_class','class7','11');" /></td>
                                <td><input type="number" name="class7_12" id="month_12_6" value="" style="width:60px;" class="class7 amt" title="4TH / December Month" oninput="for_calculation(this.value,'my_class','class7','12');" /></td>
                                <td><input type="number" name="class7_01" id="month_01_6" value="" style="width:60px;" class="class7 amt" title="4TH / January Month" oninput="for_calculation(this.value,'my_class','class7','01');" /></td>
                                <td><input type="number" name="class7_02" id="month_02_6" value="" style="width:60px;" class="class7 amt" title="4TH / February Month" oninput="for_calculation(this.value,'my_class','class7','02');" /></td>
                                <td><input type="number" name="class7_03" id="month_03_6" value="" style="width:60px;" class="class7 amt" title="4TH / March Month" oninput="for_calculation(this.value,'my_class','class7','03');" /></td>
                                </tr>
                                <tr>
                <td>8.</td>
                <td>5TH<input type="hidden" name="class_code[]" value="class8" /></td>
                <td><input type="number" name="total_amount[]" id="class8" value="" style="width:80px;" class="amt1" title="5TH" oninput="for_calculation(this.value,'my_id','class8','01');" /></td>
                                <td><input type="number" name="class8_04" id="month_04_7" value="" style="width:60px;" class="class8 amt" title="5TH / April Month" oninput="for_calculation(this.value,'my_class','class8','04');" /></td>
                                <td><input type="number" name="class8_05" id="month_05_7" value="" style="width:60px;" class="class8 amt" title="5TH / May Month" oninput="for_calculation(this.value,'my_class','class8','05');" /></td>
                                <td><input type="number" name="class8_06" id="month_06_7" value="" style="width:60px;" class="class8 amt" title="5TH / June Month" oninput="for_calculation(this.value,'my_class','class8','06');" /></td>
                                <td><input type="number" name="class8_07" id="month_07_7" value="" style="width:60px;" class="class8 amt" title="5TH / July Month" oninput="for_calculation(this.value,'my_class','class8','07');" /></td>
                                <td><input type="number" name="class8_08" id="month_08_7" value="" style="width:60px;" class="class8 amt" title="5TH / August Month" oninput="for_calculation(this.value,'my_class','class8','08');" /></td>
                                <td><input type="number" name="class8_09" id="month_09_7" value="" style="width:60px;" class="class8 amt" title="5TH / September Month" oninput="for_calculation(this.value,'my_class','class8','09');" /></td>
                                <td><input type="number" name="class8_10" id="month_10_7" value="" style="width:60px;" class="class8 amt" title="5TH / October Month" oninput="for_calculation(this.value,'my_class','class8','10');" /></td>
                                <td><input type="number" name="class8_11" id="month_11_7" value="" style="width:60px;" class="class8 amt" title="5TH / November Month" oninput="for_calculation(this.value,'my_class','class8','11');" /></td>
                                <td><input type="number" name="class8_12" id="month_12_7" value="" style="width:60px;" class="class8 amt" title="5TH / December Month" oninput="for_calculation(this.value,'my_class','class8','12');" /></td>
                                <td><input type="number" name="class8_01" id="month_01_7" value="" style="width:60px;" class="class8 amt" title="5TH / January Month" oninput="for_calculation(this.value,'my_class','class8','01');" /></td>
                                <td><input type="number" name="class8_02" id="month_02_7" value="" style="width:60px;" class="class8 amt" title="5TH / February Month" oninput="for_calculation(this.value,'my_class','class8','02');" /></td>
                                <td><input type="number" name="class8_03" id="month_03_7" value="" style="width:60px;" class="class8 amt" title="5TH / March Month" oninput="for_calculation(this.value,'my_class','class8','03');" /></td>
                                </tr>
                                <tr>
                <td>9.</td>
                <td>6TH<input type="hidden" name="class_code[]" value="class9" /></td>
                <td><input type="number" name="total_amount[]" id="class9" value="" style="width:80px;" class="amt1" title="6TH" oninput="for_calculation(this.value,'my_id','class9','01');" /></td>
                                <td><input type="number" name="class9_04" id="month_04_8" value="" style="width:60px;" class="class9 amt" title="6TH / April Month" oninput="for_calculation(this.value,'my_class','class9','04');" /></td>
                                <td><input type="number" name="class9_05" id="month_05_8" value="" style="width:60px;" class="class9 amt" title="6TH / May Month" oninput="for_calculation(this.value,'my_class','class9','05');" /></td>
                                <td><input type="number" name="class9_06" id="month_06_8" value="" style="width:60px;" class="class9 amt" title="6TH / June Month" oninput="for_calculation(this.value,'my_class','class9','06');" /></td>
                                <td><input type="number" name="class9_07" id="month_07_8" value="" style="width:60px;" class="class9 amt" title="6TH / July Month" oninput="for_calculation(this.value,'my_class','class9','07');" /></td>
                                <td><input type="number" name="class9_08" id="month_08_8" value="" style="width:60px;" class="class9 amt" title="6TH / August Month" oninput="for_calculation(this.value,'my_class','class9','08');" /></td>
                                <td><input type="number" name="class9_09" id="month_09_8" value="" style="width:60px;" class="class9 amt" title="6TH / September Month" oninput="for_calculation(this.value,'my_class','class9','09');" /></td>
                                <td><input type="number" name="class9_10" id="month_10_8" value="" style="width:60px;" class="class9 amt" title="6TH / October Month" oninput="for_calculation(this.value,'my_class','class9','10');" /></td>
                                <td><input type="number" name="class9_11" id="month_11_8" value="" style="width:60px;" class="class9 amt" title="6TH / November Month" oninput="for_calculation(this.value,'my_class','class9','11');" /></td>
                                <td><input type="number" name="class9_12" id="month_12_8" value="" style="width:60px;" class="class9 amt" title="6TH / December Month" oninput="for_calculation(this.value,'my_class','class9','12');" /></td>
                                <td><input type="number" name="class9_01" id="month_01_8" value="" style="width:60px;" class="class9 amt" title="6TH / January Month" oninput="for_calculation(this.value,'my_class','class9','01');" /></td>
                                <td><input type="number" name="class9_02" id="month_02_8" value="" style="width:60px;" class="class9 amt" title="6TH / February Month" oninput="for_calculation(this.value,'my_class','class9','02');" /></td>
                                <td><input type="number" name="class9_03" id="month_03_8" value="" style="width:60px;" class="class9 amt" title="6TH / March Month" oninput="for_calculation(this.value,'my_class','class9','03');" /></td>
                                </tr>
                                <tr>
                <td>10.</td>
                <td>7TH<input type="hidden" name="class_code[]" value="class10" /></td>
                <td><input type="number" name="total_amount[]" id="class10" value="" style="width:80px;" class="amt1" title="7TH" oninput="for_calculation(this.value,'my_id','class10','01');" /></td>
                                <td><input type="number" name="class10_04" id="month_04_9" value="" style="width:60px;" class="class10 amt" title="7TH / April Month" oninput="for_calculation(this.value,'my_class','class10','04');" /></td>
                                <td><input type="number" name="class10_05" id="month_05_9" value="" style="width:60px;" class="class10 amt" title="7TH / May Month" oninput="for_calculation(this.value,'my_class','class10','05');" /></td>
                                <td><input type="number" name="class10_06" id="month_06_9" value="" style="width:60px;" class="class10 amt" title="7TH / June Month" oninput="for_calculation(this.value,'my_class','class10','06');" /></td>
                                <td><input type="number" name="class10_07" id="month_07_9" value="" style="width:60px;" class="class10 amt" title="7TH / July Month" oninput="for_calculation(this.value,'my_class','class10','07');" /></td>
                                <td><input type="number" name="class10_08" id="month_08_9" value="" style="width:60px;" class="class10 amt" title="7TH / August Month" oninput="for_calculation(this.value,'my_class','class10','08');" /></td>
                                <td><input type="number" name="class10_09" id="month_09_9" value="" style="width:60px;" class="class10 amt" title="7TH / September Month" oninput="for_calculation(this.value,'my_class','class10','09');" /></td>
                                <td><input type="number" name="class10_10" id="month_10_9" value="" style="width:60px;" class="class10 amt" title="7TH / October Month" oninput="for_calculation(this.value,'my_class','class10','10');" /></td>
                                <td><input type="number" name="class10_11" id="month_11_9" value="" style="width:60px;" class="class10 amt" title="7TH / November Month" oninput="for_calculation(this.value,'my_class','class10','11');" /></td>
                                <td><input type="number" name="class10_12" id="month_12_9" value="" style="width:60px;" class="class10 amt" title="7TH / December Month" oninput="for_calculation(this.value,'my_class','class10','12');" /></td>
                                <td><input type="number" name="class10_01" id="month_01_9" value="" style="width:60px;" class="class10 amt" title="7TH / January Month" oninput="for_calculation(this.value,'my_class','class10','01');" /></td>
                                <td><input type="number" name="class10_02" id="month_02_9" value="" style="width:60px;" class="class10 amt" title="7TH / February Month" oninput="for_calculation(this.value,'my_class','class10','02');" /></td>
                                <td><input type="number" name="class10_03" id="month_03_9" value="" style="width:60px;" class="class10 amt" title="7TH / March Month" oninput="for_calculation(this.value,'my_class','class10','03');" /></td>
                                </tr>
                                <tr>
                <td>11.</td>
                <td>8TH<input type="hidden" name="class_code[]" value="class11" /></td>
                <td><input type="number" name="total_amount[]" id="class11" value="" style="width:80px;" class="amt1" title="8TH" oninput="for_calculation(this.value,'my_id','class11','01');" /></td>
                                <td><input type="number" name="class11_04" id="month_04_10" value="" style="width:60px;" class="class11 amt" title="8TH / April Month" oninput="for_calculation(this.value,'my_class','class11','04');" /></td>
                                <td><input type="number" name="class11_05" id="month_05_10" value="" style="width:60px;" class="class11 amt" title="8TH / May Month" oninput="for_calculation(this.value,'my_class','class11','05');" /></td>
                                <td><input type="number" name="class11_06" id="month_06_10" value="" style="width:60px;" class="class11 amt" title="8TH / June Month" oninput="for_calculation(this.value,'my_class','class11','06');" /></td>
                                <td><input type="number" name="class11_07" id="month_07_10" value="" style="width:60px;" class="class11 amt" title="8TH / July Month" oninput="for_calculation(this.value,'my_class','class11','07');" /></td>
                                <td><input type="number" name="class11_08" id="month_08_10" value="" style="width:60px;" class="class11 amt" title="8TH / August Month" oninput="for_calculation(this.value,'my_class','class11','08');" /></td>
                                <td><input type="number" name="class11_09" id="month_09_10" value="" style="width:60px;" class="class11 amt" title="8TH / September Month" oninput="for_calculation(this.value,'my_class','class11','09');" /></td>
                                <td><input type="number" name="class11_10" id="month_10_10" value="" style="width:60px;" class="class11 amt" title="8TH / October Month" oninput="for_calculation(this.value,'my_class','class11','10');" /></td>
                                <td><input type="number" name="class11_11" id="month_11_10" value="" style="width:60px;" class="class11 amt" title="8TH / November Month" oninput="for_calculation(this.value,'my_class','class11','11');" /></td>
                                <td><input type="number" name="class11_12" id="month_12_10" value="" style="width:60px;" class="class11 amt" title="8TH / December Month" oninput="for_calculation(this.value,'my_class','class11','12');" /></td>
                                <td><input type="number" name="class11_01" id="month_01_10" value="" style="width:60px;" class="class11 amt" title="8TH / January Month" oninput="for_calculation(this.value,'my_class','class11','01');" /></td>
                                <td><input type="number" name="class11_02" id="month_02_10" value="" style="width:60px;" class="class11 amt" title="8TH / February Month" oninput="for_calculation(this.value,'my_class','class11','02');" /></td>
                                <td><input type="number" name="class11_03" id="month_03_10" value="" style="width:60px;" class="class11 amt" title="8TH / March Month" oninput="for_calculation(this.value,'my_class','class11','03');" /></td>
                                </tr>
                                <tr>
                <td>12.</td>
                <td>9TH<input type="hidden" name="class_code[]" value="class12" /></td>
                <td><input type="number" name="total_amount[]" id="class12" value="" style="width:80px;" class="amt1" title="9TH" oninput="for_calculation(this.value,'my_id','class12','01');" /></td>
                                <td><input type="number" name="class12_04" id="month_04_11" value="" style="width:60px;" class="class12 amt" title="9TH / April Month" oninput="for_calculation(this.value,'my_class','class12','04');" /></td>
                                <td><input type="number" name="class12_05" id="month_05_11" value="" style="width:60px;" class="class12 amt" title="9TH / May Month" oninput="for_calculation(this.value,'my_class','class12','05');" /></td>
                                <td><input type="number" name="class12_06" id="month_06_11" value="" style="width:60px;" class="class12 amt" title="9TH / June Month" oninput="for_calculation(this.value,'my_class','class12','06');" /></td>
                                <td><input type="number" name="class12_07" id="month_07_11" value="" style="width:60px;" class="class12 amt" title="9TH / July Month" oninput="for_calculation(this.value,'my_class','class12','07');" /></td>
                                <td><input type="number" name="class12_08" id="month_08_11" value="" style="width:60px;" class="class12 amt" title="9TH / August Month" oninput="for_calculation(this.value,'my_class','class12','08');" /></td>
                                <td><input type="number" name="class12_09" id="month_09_11" value="" style="width:60px;" class="class12 amt" title="9TH / September Month" oninput="for_calculation(this.value,'my_class','class12','09');" /></td>
                                <td><input type="number" name="class12_10" id="month_10_11" value="" style="width:60px;" class="class12 amt" title="9TH / October Month" oninput="for_calculation(this.value,'my_class','class12','10');" /></td>
                                <td><input type="number" name="class12_11" id="month_11_11" value="" style="width:60px;" class="class12 amt" title="9TH / November Month" oninput="for_calculation(this.value,'my_class','class12','11');" /></td>
                                <td><input type="number" name="class12_12" id="month_12_11" value="" style="width:60px;" class="class12 amt" title="9TH / December Month" oninput="for_calculation(this.value,'my_class','class12','12');" /></td>
                                <td><input type="number" name="class12_01" id="month_01_11" value="" style="width:60px;" class="class12 amt" title="9TH / January Month" oninput="for_calculation(this.value,'my_class','class12','01');" /></td>
                                <td><input type="number" name="class12_02" id="month_02_11" value="" style="width:60px;" class="class12 amt" title="9TH / February Month" oninput="for_calculation(this.value,'my_class','class12','02');" /></td>
                                <td><input type="number" name="class12_03" id="month_03_11" value="" style="width:60px;" class="class12 amt" title="9TH / March Month" oninput="for_calculation(this.value,'my_class','class12','03');" /></td>
                                </tr>
                                <tr>
                <td>13.</td>
                <td>10TH<input type="hidden" name="class_code[]" value="class13" /></td>
                <td><input type="number" name="total_amount[]" id="class13" value="" style="width:80px;" class="amt1" title="10TH" oninput="for_calculation(this.value,'my_id','class13','01');" /></td>
                                <td><input type="number" name="class13_04" id="month_04_12" value="" style="width:60px;" class="class13 amt" title="10TH / April Month" oninput="for_calculation(this.value,'my_class','class13','04');" /></td>
                                <td><input type="number" name="class13_05" id="month_05_12" value="" style="width:60px;" class="class13 amt" title="10TH / May Month" oninput="for_calculation(this.value,'my_class','class13','05');" /></td>
                                <td><input type="number" name="class13_06" id="month_06_12" value="" style="width:60px;" class="class13 amt" title="10TH / June Month" oninput="for_calculation(this.value,'my_class','class13','06');" /></td>
                                <td><input type="number" name="class13_07" id="month_07_12" value="" style="width:60px;" class="class13 amt" title="10TH / July Month" oninput="for_calculation(this.value,'my_class','class13','07');" /></td>
                                <td><input type="number" name="class13_08" id="month_08_12" value="" style="width:60px;" class="class13 amt" title="10TH / August Month" oninput="for_calculation(this.value,'my_class','class13','08');" /></td>
                                <td><input type="number" name="class13_09" id="month_09_12" value="" style="width:60px;" class="class13 amt" title="10TH / September Month" oninput="for_calculation(this.value,'my_class','class13','09');" /></td>
                                <td><input type="number" name="class13_10" id="month_10_12" value="" style="width:60px;" class="class13 amt" title="10TH / October Month" oninput="for_calculation(this.value,'my_class','class13','10');" /></td>
                                <td><input type="number" name="class13_11" id="month_11_12" value="" style="width:60px;" class="class13 amt" title="10TH / November Month" oninput="for_calculation(this.value,'my_class','class13','11');" /></td>
                                <td><input type="number" name="class13_12" id="month_12_12" value="" style="width:60px;" class="class13 amt" title="10TH / December Month" oninput="for_calculation(this.value,'my_class','class13','12');" /></td>
                                <td><input type="number" name="class13_01" id="month_01_12" value="" style="width:60px;" class="class13 amt" title="10TH / January Month" oninput="for_calculation(this.value,'my_class','class13','01');" /></td>
                                <td><input type="number" name="class13_02" id="month_02_12" value="" style="width:60px;" class="class13 amt" title="10TH / February Month" oninput="for_calculation(this.value,'my_class','class13','02');" /></td>
                                <td><input type="number" name="class13_03" id="month_03_12" value="" style="width:60px;" class="class13 amt" title="10TH / March Month" oninput="for_calculation(this.value,'my_class','class13','03');" /></td>
                                </tr>
                                <tr>
                <td>14.</td>
                <td>11TH<input type="hidden" name="class_code[]" value="class14" /></td>
                <td><input type="number" name="total_amount[]" id="class14" value="" style="width:80px;" class="amt1" title="11TH" oninput="for_calculation(this.value,'my_id','class14','01');" /></td>
                                <td><input type="number" name="class14_04" id="month_04_13" value="" style="width:60px;" class="class14 amt" title="11TH / April Month" oninput="for_calculation(this.value,'my_class','class14','04');" /></td>
                                <td><input type="number" name="class14_05" id="month_05_13" value="" style="width:60px;" class="class14 amt" title="11TH / May Month" oninput="for_calculation(this.value,'my_class','class14','05');" /></td>
                                <td><input type="number" name="class14_06" id="month_06_13" value="" style="width:60px;" class="class14 amt" title="11TH / June Month" oninput="for_calculation(this.value,'my_class','class14','06');" /></td>
                                <td><input type="number" name="class14_07" id="month_07_13" value="" style="width:60px;" class="class14 amt" title="11TH / July Month" oninput="for_calculation(this.value,'my_class','class14','07');" /></td>
                                <td><input type="number" name="class14_08" id="month_08_13" value="" style="width:60px;" class="class14 amt" title="11TH / August Month" oninput="for_calculation(this.value,'my_class','class14','08');" /></td>
                                <td><input type="number" name="class14_09" id="month_09_13" value="" style="width:60px;" class="class14 amt" title="11TH / September Month" oninput="for_calculation(this.value,'my_class','class14','09');" /></td>
                                <td><input type="number" name="class14_10" id="month_10_13" value="" style="width:60px;" class="class14 amt" title="11TH / October Month" oninput="for_calculation(this.value,'my_class','class14','10');" /></td>
                                <td><input type="number" name="class14_11" id="month_11_13" value="" style="width:60px;" class="class14 amt" title="11TH / November Month" oninput="for_calculation(this.value,'my_class','class14','11');" /></td>
                                <td><input type="number" name="class14_12" id="month_12_13" value="" style="width:60px;" class="class14 amt" title="11TH / December Month" oninput="for_calculation(this.value,'my_class','class14','12');" /></td>
                                <td><input type="number" name="class14_01" id="month_01_13" value="" style="width:60px;" class="class14 amt" title="11TH / January Month" oninput="for_calculation(this.value,'my_class','class14','01');" /></td>
                                <td><input type="number" name="class14_02" id="month_02_13" value="" style="width:60px;" class="class14 amt" title="11TH / February Month" oninput="for_calculation(this.value,'my_class','class14','02');" /></td>
                                <td><input type="number" name="class14_03" id="month_03_13" value="" style="width:60px;" class="class14 amt" title="11TH / March Month" oninput="for_calculation(this.value,'my_class','class14','03');" /></td>
                                </tr>
                                <tr>
                <td>15.</td>
                <td>12TH<input type="hidden" name="class_code[]" value="class15" /></td>
                <td><input type="number" name="total_amount[]" id="class15" value="" style="width:80px;" class="amt1" title="12TH" oninput="for_calculation(this.value,'my_id','class15','01');" /></td>
                                <td><input type="number" name="class15_04" id="month_04_14" value="" style="width:60px;" class="class15 amt" title="12TH / April Month" oninput="for_calculation(this.value,'my_class','class15','04');" /></td>
                                <td><input type="number" name="class15_05" id="month_05_14" value="" style="width:60px;" class="class15 amt" title="12TH / May Month" oninput="for_calculation(this.value,'my_class','class15','05');" /></td>
                                <td><input type="number" name="class15_06" id="month_06_14" value="" style="width:60px;" class="class15 amt" title="12TH / June Month" oninput="for_calculation(this.value,'my_class','class15','06');" /></td>
                                <td><input type="number" name="class15_07" id="month_07_14" value="" style="width:60px;" class="class15 amt" title="12TH / July Month" oninput="for_calculation(this.value,'my_class','class15','07');" /></td>
                                <td><input type="number" name="class15_08" id="month_08_14" value="" style="width:60px;" class="class15 amt" title="12TH / August Month" oninput="for_calculation(this.value,'my_class','class15','08');" /></td>
                                <td><input type="number" name="class15_09" id="month_09_14" value="" style="width:60px;" class="class15 amt" title="12TH / September Month" oninput="for_calculation(this.value,'my_class','class15','09');" /></td>
                                <td><input type="number" name="class15_10" id="month_10_14" value="" style="width:60px;" class="class15 amt" title="12TH / October Month" oninput="for_calculation(this.value,'my_class','class15','10');" /></td>
                                <td><input type="number" name="class15_11" id="month_11_14" value="" style="width:60px;" class="class15 amt" title="12TH / November Month" oninput="for_calculation(this.value,'my_class','class15','11');" /></td>
                                <td><input type="number" name="class15_12" id="month_12_14" value="" style="width:60px;" class="class15 amt" title="12TH / December Month" oninput="for_calculation(this.value,'my_class','class15','12');" /></td>
                                <td><input type="number" name="class15_01" id="month_01_14" value="" style="width:60px;" class="class15 amt" title="12TH / January Month" oninput="for_calculation(this.value,'my_class','class15','01');" /></td>
                                <td><input type="number" name="class15_02" id="month_02_14" value="" style="width:60px;" class="class15 amt" title="12TH / February Month" oninput="for_calculation(this.value,'my_class','class15','02');" /></td>
                                <td><input type="number" name="class15_03" id="month_03_14" value="" style="width:60px;" class="class15 amt" title="12TH / March Month" oninput="for_calculation(this.value,'my_class','class15','03');" /></td>
                                </tr>
                                </tbody>
                </table>
                <div class="col-md-12">
                <center><input type="submit" name="submit" value="Submit" class="btn btn-success" /></center>
                </div>
                </div>
  		
	      </div>
	      </form>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
