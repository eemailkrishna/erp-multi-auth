<script>
	function open_file1(image_type,student_roll_no){

	$.ajax({
	address: "POST",
	url: access_link+"student/ajax_open_image.php?image_type="+image_type+"&student_roll_no="+student_roll_no+"",
	cache: false,
	success: function(detail){
	 $("#mypdf_view").html('');
	 $("#mypdf_view").html(detail);
	}
	});
	}
	
function readURL(input,id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
		$('#'+id).attr('src', e.target.result);
            };
			
            reader.readAsDataURL(input.files[0]);
			
        }
    }
	function check_file_type(input,id,id_show,type1){
if(type1=="image"){
	   var file = input.files[0];
	   if (file.size >= 1024 * 1024 * 1024) {
	    $('#'+id).val('');
      alert_new("File size must be at most 1GB","red");
      return;
    }  
if(!file.type.match("image/*"))
{
 $('#'+id).val('');
alert_new("Please Upload JPG/JPEG/PNG/GIF File","red");

 return;
}  
	var fileReader = new FileReader();
  fileReader.onloadend = function(e) {
    var arr = (new Uint8Array(e.target.result)).subarray(0, 4);
    var header = "";
    for (var i = 0; i < arr.length; i++) {
      header += arr[i].toString(16);
    }
	if(mimeType(header)==1){
	  $('#'+id).val('');
	alert_new("Please Upload JPG/JPEG/PNG/GIF File","red");
	
	}
  };
  fileReader.readAsArrayBuffer(file);
  readURL(input,id_show);
}else{

	   var file = input.files[0];
	   if (file.size >= 1024 * 1024 * 1024) {
	    $('#'+id).val('');
      alert_new("File size must be at most 1GB","red");
	  
      return;
    }  
 
	var fileReader = new FileReader();
  fileReader.onloadend = function(e) {
    var arr = (new Uint8Array(e.target.result)).subarray(0, 4);
    var header = "";
    for (var i = 0; i < arr.length; i++) {
      header += arr[i].toString(16);
    }
	if(mimeType(header)==1){
	 $('#'+id).val('');
	alert_new("Please Upload JPG/JPEG/PNG/GIF/PDF/DOC File","red");
	 
	}
  };
  fileReader.readAsArrayBuffer(file);
  readURL(input,id_show);
}

}
function mimeType(headerString) {
  switch (headerString) {
    case "89504e47":
      type = "image/png";
      break;
    case "47494638":
      type = "image/gif";
      break;
    case "ffd8ffe0":
    case "ffd8ffe1":
    case "ffd8ffe2":
      type = "image/jpeg";
      break;
	 case "25504446":
      type = "application/pdf";
      break;
	  case "d0cf11e0":
      type = "application/doc";
      break;
    default:
      type = "1";
      break;
  }
  return type;
}
</script>
<table id="example1" class="table table-bordered table-striped">
	<thead >
	<tr>
	<th>All<input type="checkbox" id="checked1" checked value="" name="" onclick="for_check(this.id);"></th>
	<th>S No</th>
	<th>Admission No.</th>
	<th>Name</th>
	<th>Father Name</th>
	<th>Choose Student Photo</th>
	<th>Student Photo</th>
	<th>Choose Father Photo</th>
	<th>Father Photo</th>
	<th>Choose Mother Photo</th>
	<th>Mother Photo</th>

	</thead>
	<tbody>
  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="0" name="student_index[]"></td>
	<td>1</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Aashish" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200758"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Ramesh"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="1135233_13112022125934pm.png"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200758" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200758','show_student2200758','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200758');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/1135233_13112022125934pm.png" id="show_student2200758" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200758" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200758','show_parent2200758','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200758');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200758" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200758" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200758','show_parent12200758','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200758');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200758" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="1" name="student_index[]"></td>
	<td>2</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="raman" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200770"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="tapan"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200770" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200770','show_student2200770','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200770');" src="../school_software_v1_old/images/student_blank.png" id="show_student2200770" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200770" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200770','show_parent2200770','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200770');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200770" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200770" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200770','show_parent12200770','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200770');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200770" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="2" name="student_index[]"></td>
	<td>3</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="yashi" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200782"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="pushpendra"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200782" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200782','show_student2200782','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200782');" src="../school_software_v1_old/images/student_blank.png" id="show_student2200782" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200782" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200782','show_parent2200782','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200782');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200782" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200782" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200782','show_parent12200782','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200782');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200782" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="3" name="student_index[]"></td>
	<td>4</td>
	<td>1001</td>
	<td><input type="text" name="student_name[]" class="" value="ABHIMANYU SHARMA" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200785"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="GOURAV SHARMA"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="119218525966_29112022112412am.png"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200785" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200785','show_student2200785','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200785');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/119218525966_29112022112412am.png" id="show_student2200785" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200785" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200785','show_parent2200785','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200785');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200785" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200785" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200785','show_parent12200785','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200785');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200785" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="4" name="student_index[]"></td>
	<td>5</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="shree" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200790"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="samay singh "readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200790" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200790','show_student2200790','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200790');" src="../school_software_v1_old/images/student_blank.png" id="show_student2200790" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200790" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200790','show_parent2200790','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200790');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200790" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200790" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200790','show_parent12200790','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200790');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200790" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="5" name="student_index[]"></td>
	<td>6</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Ajay" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200793"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Vijay"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200793" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200793','show_student2200793','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200793');" src="../school_software_v1_old/images/student_blank.png" id="show_student2200793" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200793" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200793','show_parent2200793','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200793');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200793" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200793" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200793','show_parent12200793','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200793');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200793" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="6" name="student_index[]"></td>
	<td>7</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Druwa Ganesh Chaudhari" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200795"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Ganesh Chaudhari"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200795" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200795','show_student2200795','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200795');" src="../school_software_v1_old/images/student_blank.png" id="show_student2200795" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200795" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200795','show_parent2200795','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200795');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200795" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200795" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200795','show_parent12200795','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200795');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200795" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="7" name="student_index[]"></td>
	<td>8</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="SHIVANSH RAWAT" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200800"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="AJAY"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200800" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200800','show_student2200800','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200800');" src="../school_software_v1_old/images/student_blank.png" id="show_student2200800" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200800" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200800','show_parent2200800','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200800');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200800" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200800" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200800','show_parent12200800','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200800');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200800" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="8" name="student_index[]"></td>
	<td>9</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Yash " readonly><input type="hidden" name="student_roll_no[]" class="" value="2200823"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Soun"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200823" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200823','show_student2200823','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200823');" src="../school_software_v1_old/images/student_blank.png" id="show_student2200823" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200823" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200823','show_parent2200823','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200823');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200823" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200823" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200823','show_parent12200823','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200823');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200823" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="9" name="student_index[]"></td>
	<td>10</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="पंकज कुमार" readonly><input type="hidden" name="student_roll_no[]" class="" value="2200884"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="लालू राम"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2200884" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2200884','show_student2200884','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2200884');" src="../school_software_v1_old/images/student_blank.png" id="show_student2200884" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2200884" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2200884','show_parent2200884','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2200884');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2200884" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12200884" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12200884','show_parent12200884','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2200884');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12200884" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="10" name="student_index[]"></td>
	<td>11</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Aamna Hussain" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201009"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Syed Farhat Hussain"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="18744232_b9cb917c3003ce62bf25de2e205f5616.jpg"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201009" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201009','show_student2201009','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201009');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/18744232_b9cb917c3003ce62bf25de2e205f5616.jpg" id="show_student2201009" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201009" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201009','show_parent2201009','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201009');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201009" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201009" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201009','show_parent12201009','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201009');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201009" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="11" name="student_index[]"></td>
	<td>12</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Nitya Yadav" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201035"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Mr. Mayank Yadav"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="64830103_NITYA.jpg"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201035" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201035','show_student2201035','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201035');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/64830103_NITYA.jpg" id="show_student2201035" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201035" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201035','show_parent2201035','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201035');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201035" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201035" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201035','show_parent12201035','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201035');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201035" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="12" name="student_index[]"></td>
	<td>13</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Shubh Kashyap" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201036"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Mr. Anikesh Kumar"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201036" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201036','show_student2201036','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201036');" src="../school_software_v1_old/images/student_blank.png" id="show_student2201036" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201036" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201036','show_parent2201036','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201036');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201036" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201036" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201036','show_parent12201036','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201036');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201036" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="13" name="student_index[]"></td>
	<td>14</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Arohi Kushwaha" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201037"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Mr. Shailendra Singh Kushwaha"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="16322064_AROHI.jpg"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201037" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201037','show_student2201037','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201037');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/16322064_AROHI.jpg" id="show_student2201037" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201037" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201037','show_parent2201037','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201037');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201037" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201037" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201037','show_parent12201037','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201037');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201037" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="14" name="student_index[]"></td>
	<td>15</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Anikesh" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201038"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Mr. Amit Kumar"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="67191674_ANIKESH.jpg"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201038" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201038','show_student2201038','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201038');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/67191674_ANIKESH.jpg" id="show_student2201038" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201038" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201038','show_parent2201038','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201038');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201038" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201038" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201038','show_parent12201038','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201038');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201038" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="15" name="student_index[]"></td>
	<td>16</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Prithviraj" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201039"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Dr. Pramod Kumar"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="1746270_PRITHVIRAJ.jpg"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201039" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201039','show_student2201039','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201039');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/1746270_PRITHVIRAJ.jpg" id="show_student2201039" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201039" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201039','show_parent2201039','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201039');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201039" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201039" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201039','show_parent12201039','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201039');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201039" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="16" name="student_index[]"></td>
	<td>17</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Arushi Diwakar" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201040"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Mr. Virendra Kumar"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="32992740_ARUSHI.jpg"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201040" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201040','show_student2201040','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201040');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/32992740_ARUSHI.jpg" id="show_student2201040" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201040" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201040','show_parent2201040','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201040');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201040" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201040" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201040','show_parent12201040','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201040');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201040" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="17" name="student_index[]"></td>
	<td>18</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Kartik Nishad" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201041"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Kartik Nishad"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value="12483072_KARTIK.jpg"></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201041" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201041','show_student2201041','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201041');" src="https://simptionerp.com/data-content/simptionschoolerp/demo/student_documents/12483072_KARTIK.jpg" id="show_student2201041" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201041" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201041','show_parent2201041','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201041');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201041" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201041" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201041','show_parent12201041','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201041');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201041" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	  <tr align='center'>
    <td><input type="checkbox" class="checked1" checked value="18" name="student_index[]"></td>
	<td>19</td>
	<td></td>
	<td><input type="text" name="student_name[]" class="" value="Rahul Kumar" readonly><input type="hidden" name="student_roll_no[]" class="" value="2201086"></td>
	

	<td><input type="text" name="student_father_name[]" class="" value="Lalbabu Ray"readonly></td>
	<td style="display:none"><input type="text" name="student_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_father_photo_name[]" class="" value=""></td>
	<td style="display:none"><input type="text" name="student_mother_photo_name[]" class="" value=""></td>
	
	<td><input type="file" id="student2201086" name="student_photo[]" placeholder="" onchange="check_file_type(this,'student2201086','show_student2201086','image');"  value="" class="form-control" accept="image/*" capture>
	</td>
	<td><img onclick="open_file1('student_image','2201086');" src="../school_software_v1_old/images/student_blank.png" id="show_student2201086" height="50" width="50" style="margin-top:10px;"></td>	
	
	
	<td> <input type="file"  id="parent2201086" name="student_father_photo[]" placeholder="" onchange="check_file_type(this,'parent2201086','show_parent2201086','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
	<td><img onclick="open_file1('student_father_image','2201086');" src="../school_software_v1_old/images/student_blank.png" id="show_parent2201086" height="50" width="50" style="margin-top:10px;"></td>
	
	
	
		<td> <input type="file"  id="parent12201086" name="student_mother_photo[]" placeholder="" onchange="check_file_type(this,'parent12201086','show_parent12201086','image');" value="" class="form-control" accept=".gif, .jpg, .jpeg, .png"></td>
		
		
	<td><img onclick="open_file1('student_mother_image','2201086');" src="../school_software_v1_old/images/student_blank.png" id="show_parent12201086" height="50" width="50" style="margin-top:10px;"></td>

  </tr>
	     </tbody>
     </table>
	 <div class="col-md-12">
		<center><input type="submit" name="finish" value="Submit" onclick="return validation();" class="btn btn-success"/></center> 
	 </div>
	<div id="mypdf_view">
			<div>	 
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
  
 $(function () {
$('#example1').DataTable()
})
</script>