 
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

</script>
<script>

    $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
		window.scrollTo(0, 0);
        get_content(loader_div);
        $.ajax({
            url: access_link+"fees_monthly/add_bus_fee_category_monthly_installmentwise_api.php",
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
			       alert('Successfully Completed');
				   get_content('fees_monthly/add_bus_fee_category_monthly_installmentwise');
            }
			}
         });
      });
</script>
    
        
    <section class="content-header">
      <h1>
        Fees Management        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	  <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
	  <li><a href="javascript:get_content('fees_monthly/add_bus_fee_category_monthly_installmentwise')"><i class="fa fa-graduation-cap"></i>Transport Fee List</a></li>
	  <li class="active">Transport Fees Structure Edit</li>
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
              <div class="col-md-8"><h3 class="box-title">Transport Fees Structure</h3></div>
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
				        <input type="text" name="bus_fee_category_name" id="" value="NASRULLAGANJ" class="form-control" />
				        <input type="hidden" name="fee_sno" id="fee_sno" value="1" class="form-control" />
				        <input type="hidden" name="class_code2" id="class_code2" value="|?|class1|?|class2|?|class3|?|class4|?|class5|?|class6|?|class7|?|class8|?|class9|?|class10|?|class11|?|class12|?|class13|?|class14|?|class15" class="form-control" />
				        <input type="hidden" name="bus_fee_category_code11" id="bus_fee_category_code11" value="busfee1" class="form-control" />
				        <input type="hidden" name="class_sno" id="class_sno" value="15" class="form-control" />
				        <input type="hidden" name="fees_code11" id="fees_code11" value="04" class="form-control" />
				    </div>
				    <div class="col-md-6">
				        <label>Bus Fee Type Hindi</label>
				        <input type="text" name="bus_fee_category_name_hindi" id="" value="" class="form-control" />
				    </div>
				</div>
				<div class="col-md-12" id="test">&nbsp;</div>
                <table id="table-data" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
				  <th>#</th>
				  <th>Class Name</th>
				  <th>Total Amount</th>
				                    <th>April Month</th>
                                  </tr>
                </thead>
                <tbody>
                                <tr>
                <td>1.</td>
                <td>NURSERY<input type="hidden" name="class_code[]" value="class1" /></td>
                <td><input type="number" name="total_amount[]" id="class1" value="4800" style="width:80px;" class="amt1" title="NURSERY" oninput="for_calculation(this.value,'my_id','class1','01');" /></td>
                                <td><input type="number" name="class1_04" id="month_04_0" value="" style="width:60px;" class="class1 amt" title="NURSERY / April Month" oninput="for_calculation(this.value,'my_class','class1','04');" /></td>
                                </tr>
                                <tr>
                <td>2.</td>
                <td>LKG<input type="hidden" name="class_code[]" value="class2" /></td>
                <td><input type="number" name="total_amount[]" id="class2" value="6600" style="width:80px;" class="amt1" title="LKG" oninput="for_calculation(this.value,'my_id','class2','01');" /></td>
                                <td><input type="number" name="class2_04" id="month_04_1" value="" style="width:60px;" class="class2 amt" title="LKG / April Month" oninput="for_calculation(this.value,'my_class','class2','04');" /></td>
                                </tr>
                                <tr>
                <td>3.</td>
                <td>UKG<input type="hidden" name="class_code[]" value="class3" /></td>
                <td><input type="number" name="total_amount[]" id="class3" value="1600" style="width:80px;" class="amt1" title="UKG" oninput="for_calculation(this.value,'my_id','class3','01');" /></td>
                                <td><input type="number" name="class3_04" id="month_04_2" value="" style="width:60px;" class="class3 amt" title="UKG / April Month" oninput="for_calculation(this.value,'my_class','class3','04');" /></td>
                                </tr>
                                <tr>
                <td>4.</td>
                <td>1ST<input type="hidden" name="class_code[]" value="class4" /></td>
                <td><input type="number" name="total_amount[]" id="class4" value="1600" style="width:80px;" class="amt1" title="1ST" oninput="for_calculation(this.value,'my_id','class4','01');" /></td>
                                <td><input type="number" name="class4_04" id="month_04_3" value="" style="width:60px;" class="class4 amt" title="1ST / April Month" oninput="for_calculation(this.value,'my_class','class4','04');" /></td>
                                </tr>
                                <tr>
                <td>5.</td>
                <td>2ND<input type="hidden" name="class_code[]" value="class5" /></td>
                <td><input type="number" name="total_amount[]" id="class5" value="1600" style="width:80px;" class="amt1" title="2ND" oninput="for_calculation(this.value,'my_id','class5','01');" /></td>
                                <td><input type="number" name="class5_04" id="month_04_4" value="" style="width:60px;" class="class5 amt" title="2ND / April Month" oninput="for_calculation(this.value,'my_class','class5','04');" /></td>
                                </tr>
                                <tr>
                <td>6.</td>
                <td>3RD<input type="hidden" name="class_code[]" value="class6" /></td>
                <td><input type="number" name="total_amount[]" id="class6" value="1600" style="width:80px;" class="amt1" title="3RD" oninput="for_calculation(this.value,'my_id','class6','01');" /></td>
                                <td><input type="number" name="class6_04" id="month_04_5" value="" style="width:60px;" class="class6 amt" title="3RD / April Month" oninput="for_calculation(this.value,'my_class','class6','04');" /></td>
                                </tr>
                                <tr>
                <td>7.</td>
                <td>4TH<input type="hidden" name="class_code[]" value="class7" /></td>
                <td><input type="number" name="total_amount[]" id="class7" value="1600" style="width:80px;" class="amt1" title="4TH" oninput="for_calculation(this.value,'my_id','class7','01');" /></td>
                                <td><input type="number" name="class7_04" id="month_04_6" value="" style="width:60px;" class="class7 amt" title="4TH / April Month" oninput="for_calculation(this.value,'my_class','class7','04');" /></td>
                                </tr>
                                <tr>
                <td>8.</td>
                <td>5TH<input type="hidden" name="class_code[]" value="class8" /></td>
                <td><input type="number" name="total_amount[]" id="class8" value="1600" style="width:80px;" class="amt1" title="5TH" oninput="for_calculation(this.value,'my_id','class8','01');" /></td>
                                <td><input type="number" name="class8_04" id="month_04_7" value="" style="width:60px;" class="class8 amt" title="5TH / April Month" oninput="for_calculation(this.value,'my_class','class8','04');" /></td>
                                </tr>
                                <tr>
                <td>9.</td>
                <td>6TH<input type="hidden" name="class_code[]" value="class9" /></td>
                <td><input type="number" name="total_amount[]" id="class9" value="1600" style="width:80px;" class="amt1" title="6TH" oninput="for_calculation(this.value,'my_id','class9','01');" /></td>
                                <td><input type="number" name="class9_04" id="month_04_8" value="" style="width:60px;" class="class9 amt" title="6TH / April Month" oninput="for_calculation(this.value,'my_class','class9','04');" /></td>
                                </tr>
                                <tr>
                <td>10.</td>
                <td>7TH<input type="hidden" name="class_code[]" value="class10" /></td>
                <td><input type="number" name="total_amount[]" id="class10" value="1600" style="width:80px;" class="amt1" title="7TH" oninput="for_calculation(this.value,'my_id','class10','01');" /></td>
                                <td><input type="number" name="class10_04" id="month_04_9" value="" style="width:60px;" class="class10 amt" title="7TH / April Month" oninput="for_calculation(this.value,'my_class','class10','04');" /></td>
                                </tr>
                                <tr>
                <td>11.</td>
                <td>8TH<input type="hidden" name="class_code[]" value="class11" /></td>
                <td><input type="number" name="total_amount[]" id="class11" value="1600" style="width:80px;" class="amt1" title="8TH" oninput="for_calculation(this.value,'my_id','class11','01');" /></td>
                                <td><input type="number" name="class11_04" id="month_04_10" value="" style="width:60px;" class="class11 amt" title="8TH / April Month" oninput="for_calculation(this.value,'my_class','class11','04');" /></td>
                                </tr>
                                <tr>
                <td>12.</td>
                <td>9TH<input type="hidden" name="class_code[]" value="class12" /></td>
                <td><input type="number" name="total_amount[]" id="class12" value="1600" style="width:80px;" class="amt1" title="9TH" oninput="for_calculation(this.value,'my_id','class12','01');" /></td>
                                <td><input type="number" name="class12_04" id="month_04_11" value="" style="width:60px;" class="class12 amt" title="9TH / April Month" oninput="for_calculation(this.value,'my_class','class12','04');" /></td>
                                </tr>
                                <tr>
                <td>13.</td>
                <td>10TH<input type="hidden" name="class_code[]" value="class13" /></td>
                <td><input type="number" name="total_amount[]" id="class13" value="1600" style="width:80px;" class="amt1" title="10TH" oninput="for_calculation(this.value,'my_id','class13','01');" /></td>
                                <td><input type="number" name="class13_04" id="month_04_12" value="" style="width:60px;" class="class13 amt" title="10TH / April Month" oninput="for_calculation(this.value,'my_class','class13','04');" /></td>
                                </tr>
                                <tr>
                <td>14.</td>
                <td>11TH<input type="hidden" name="class_code[]" value="class14" /></td>
                <td><input type="number" name="total_amount[]" id="class14" value="1600" style="width:80px;" class="amt1" title="11TH" oninput="for_calculation(this.value,'my_id','class14','01');" /></td>
                                <td><input type="number" name="class14_04" id="month_04_13" value="" style="width:60px;" class="class14 amt" title="11TH / April Month" oninput="for_calculation(this.value,'my_class','class14','04');" /></td>
                                </tr>
                                <tr>
                <td>15.</td>
                <td>12TH<input type="hidden" name="class_code[]" value="class15" /></td>
                <td><input type="number" name="total_amount[]" id="class15" value="1600" style="width:80px;" class="amt1" title="12TH" oninput="for_calculation(this.value,'my_id','class15','01');" /></td>
                                <td><input type="number" name="class15_04" id="month_04_14" value="" style="width:60px;" class="class15 amt" title="12TH / April Month" oninput="for_calculation(this.value,'my_class','class15','04');" /></td>
                                </tr>
                                </tbody>
                </table>
                <div class="col-md-12">
                <center><input type="submit" name="submit" value="Submit" class="btn  my_background_color" /></center>
                </div>
                </div>
  		
	      </div>
	      </form>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
