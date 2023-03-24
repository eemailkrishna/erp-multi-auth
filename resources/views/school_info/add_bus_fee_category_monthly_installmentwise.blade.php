 @include('common.header')
 @include('common.navbar')
 <script type="text/javascript">
// function add_edit(value,name){
// var fee_name=name.split('|?|');
// $('#bus_fee_type1').val(fee_name[0]);
// $('#bus_fee_type_hindi').val(fee_name[1]);
// $('#bus_fee_code_hidden').val(value);
// var class_codes=document.getElementById('all_class_codes').value;
// var class_codes1=class_codes.split('|?|');
// var class_codes2=class_codes1.length;
// var class_codes3=Number(parseInt(class_codes2)-1);
// for(var i=1;i<=class_codes3;i++){
// var j=Number(parseInt(i)+1);
// $('#'+class_codes1[i]+'_amount').val(fee_name[j]);
// }
// }

// function for_same(value){
//     if($('#same_fee').prop("checked") == true){
//     $(".bus_fee").each(function() {
//     $(this).val(value);
//     });
//     }
// }
 </script>
 <script>
//     $("#my_form").submit(function(e){
//         e.preventDefault();

//     var formdata = new FormData(this);
// 				   $("#myModal_close").click();
//         $.ajax({
//             url: access_link+"school_info/add_bus_fee_category_monthly_installmentwise_api.php",
//             type: "POST",
//             data: formdata,
//             mimeTypes:"multipart/form-data",
//             contentType: false,
//             cache: false,
//             processData: false,
//             success: function(detail){
//               var res=detail.split("|?|");
// 			   if(res[1]=='success'){
// 				   $('#myModal').modal('hide');

// 				   get_content('school_info/add_bus_fee_category_monthly_installmentwise');
//             }
// 			}
//          });
//       });
 </script>
 <section class="content-header">
     <h1>
         School Information Management <small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
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
                 <h3 class="box-title">Bus Fee Type Add</h3>
             </div>
             <!-- /.box-header -->
             <!------------------------------------------------Start Registration form--------------------------------------------------->

             <div class="box-body ">

                 <div class="col-md-12 box-body table-responsive">
                     <table id="table-data" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>S No.</th>
                                 <th>Bus Fee Type</th>
                                 <th>Bus Fee Type Hindi</th>
                                 <th>NURSERY</th>
                                 <th>LKG</th>
                                 <th>UKG</th>
                                 <th>1ST</th>
                                 <th>2ND</th>
                                 <th>3RD</th>
                                 <th>4TH</th>
                                 <th>5TH</th>
                                 <th>6TH</th>
                                 <th>7TH</th>
                                 <th>8TH</th>
                                 <th>9TH</th>
                                 <th>10TH</th>
                                 <th>11TH</th>
                                 <th>12TH</th>
                                 <th><input type="hidden" id="all_class_codes"
                                         value="|?|class1|?|class2|?|class3|?|class4|?|class5|?|class6|?|class7|?|class8|?|class9|?|class10|?|class11|?|class12|?|class13|?|class14|?|class15" />Add/Edit
                                 </th>
                             </tr>
                         </thead>
                         <tbody>

                             <tr align='center'>
                                 <th>1</th>
                                 <th>NASRULLAGANJ</th>
                                 <th></th>
                                 <th>4800</th>
                                 <th>6600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>
                                 <th>1600</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee1')"><button
                                             type="button" id="busfee1"
                                             name="NASRULLAGANJ|?||?|4800|?|6600|?|1600|?|1600|?|1600|?|1600|?|1600|?|1600|?|1600|?|1600|?|1600|?|1600|?|1600|?|1600|?|1600"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>2</th>
                                 <th>RALA</th>
                                 <th></th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee2')"><button
                                             type="button" id="busfee2"
                                             name="RALA|?||?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>3</th>
                                 <th>BORKHEDA</th>
                                 <th></th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>
                                 <th>1800</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee3')"><button
                                             type="button" id="busfee3"
                                             name="BORKHEDA|?||?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800|?|1800"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>4</th>
                                 <th>MP</th>
                                 <th></th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>
                                 <th>600</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee4')"><button
                                             type="button" id="busfee4"
                                             name="MP|?||?|600|?|600|?|600|?|600|?|600|?|600|?|600|?|600|?|600|?|600|?|600|?|600|?|600|?|600|?|600"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>5</th>
                                 <th>subhas nagar</th>
                                 <th></th>
                                 <th>501</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee5')"><button
                                             type="button" id="busfee5"
                                             name="subhas nagar|?||?|501|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>6</th>
                                 <th>20000</th>
                                 <th>kolar</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>
                                 <th>3000</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee6')"><button
                                             type="button" id="busfee6"
                                             name="20000|?|kolar|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000|?|3000"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>7</th>
                                 <th>mp nagar</th>
                                 <th></th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>
                                 <th>2200</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee7')"><button
                                             type="button" id="busfee7"
                                             name="mp nagar|?||?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200|?|2200"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>8</th>
                                 <th>ashoka garden</th>
                                 <th></th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>
                                 <th>2500</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee8')"><button
                                             type="button" id="busfee8"
                                             name="ashoka garden|?||?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500|?|2500"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>9</th>
                                 <th>kolar</th>
                                 <th></th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>
                                 <th>1000</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee9')"><button
                                             type="button" id="busfee9"
                                             name="kolar|?||?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000|?|1000"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>10</th>
                                 <th>bardi</th>
                                 <th></th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>
                                 <th>4000</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee10')"><button
                                             type="button" id="busfee10"
                                             name="bardi|?||?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000|?|4000"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>11</th>
                                 <th>mp.nagar</th>
                                 <th></th>
                                 <th>4400</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee11')"><button
                                             type="button" id="busfee11"
                                             name="mp.nagar|?||?|4400|?||?||?||?||?||?||?||?||?||?||?||?||?||?|"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>12</th>
                                 <th>arwind vihar</th>
                                 <th></th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>
                                 <th>5000</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee12')"><button
                                             type="button" id="busfee12"
                                             name="arwind vihar|?||?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000|?|5000"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>13</th>
                                 <th>kalpna nagar</th>
                                 <th></th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>
                                 <th>3500</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee13')"><button
                                             type="button" id="busfee13"
                                             name="kalpna nagar|?||?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500|?|3500"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>14</th>
                                 <th>KHANDAKPAR</th>
                                 <th>600</th>
                                 <th>5220</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee14')"><button
                                             type="button" id="busfee14"
                                             name="KHANDAKPAR|?|600|?|5220|?||?||?||?||?||?||?||?||?||?||?||?||?||?|"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>15</th>
                                 <th>Bhel </th>
                                 <th></th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>
                                 <th>2000</th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee15')"><button
                                             type="button" id="busfee15"
                                             name="Bhel |?||?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000|?|2000"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>16</th>
                                 <th>MOD</th>
                                 <th></th>
                                 <th>2000</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee16')"><button
                                             type="button" id="busfee16"
                                             name="MOD|?||?|2000|?||?||?||?||?||?||?||?||?||?||?||?||?||?|"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>17</th>
                                 <th>mp nagar</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee17')"><button
                                             type="button" id="busfee17"
                                             name="mp nagar|?||?||?||?||?||?||?||?||?||?||?||?||?||?||?||?|"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>18</th>
                                 <th>mp nagar</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee18')"><button
                                             type="button" id="busfee18"
                                             name="mp nagar|?||?||?||?||?||?||?||?||?||?||?||?||?||?||?||?|"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>

                             <tr align='center'>
                                 <th>19</th>
                                 <th>mp nagar </th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>

                                 <th><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee19')"><button
                                             type="button" id="busfee19"
                                             name="mp nagar |?||?||?||?||?||?||?||?||?||?||?||?||?||?||?||?|"
                                             class="btn btn-success">Add/Edit</a></th>
                             </tr>
                             <tr align='center'>
                                 <th colspan="4"><a style="color:#fff;"
                                         href="javascript:post_content('school_info/bus_fee_category_monthly_installmentwise_edit','bus_fee_category_code=busfee20')"><button
                                             type="button" id="busfee20"
                                             name="|?||?||?||?||?||?||?||?||?||?||?||?||?||?||?||?|"
                                             class="btn btn-success">Add More</a></th>
                             </tr>
                         </tbody>
                     </table>
                 </div>
                 <div class="modal fade" id="myModal" role="dialog">
                     <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                         <div class="modal-dialog">

                             <!-- Modal content-->
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>

                                 </div>
                                 <div class="modal-body">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Bus Fee Category Add/Edit</label>
                                             <input type="text" name="bus_fee_type1" id="bus_fee_type1"
                                                 class="form-control">
                                             <input type="hidden" name="bus_fee_code_hidden" id="bus_fee_code_hidden"
                                                 class="form-control">
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Bus Fee Category Hindi Add/Edit</label>
                                             <input type="text" name="bus_fee_type_hindi" id="bus_fee_type_hindi"
                                                 class="form-control">
                                         </div>
                                     </div>

                                     <div class="col-md-12">
                                         <span style="float:right;"><input type="checkbox" value="" id="same_fee" /><b
                                                 style="color:red;">Check Same</b></span>
                                     </div>

                                     <div class="col-md-12">
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>NURSERY Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class1_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class1"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>LKG Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class2_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class2"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>UKG Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class3_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class3"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>1ST Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class4_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class4"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>2ND Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class5_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class5"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>3RD Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class6_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class6"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>4TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class7_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class7"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>5TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class8_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class8"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>6TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class9_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class9"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>7TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class10_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class10"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>8TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class11_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class11"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>9TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class12_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class12"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>10TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class13_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class13"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>11TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class14_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class14"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>12TH Fee</label>
                                                 <input type="text" name="classwise_amount[]" id="class15_amount"
                                                     oninput="for_same(this.value);" class="form-control bus_fee" />
                                                 <input type="hidden" name="class_code_hidden[]" value="class15"
                                                     class="form-control" />
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="modal-footer">
                                     <input type="submit" name="finish" value="ADD" class="btn btn-success" />
                                     <button type="button" class="btn btn-default" id="myModal_close"
                                         data-dismiss="modal">Close</button>
                                 </div>
                             </div>

                         </div>

                     </form>
                 </div>

             </div>
             <!---------------------------------------------End Registration form--------------------------------------------------------->
             <!-- /.box-body -->
         </div>
     </div>
 </section>
 @include('common.footer')