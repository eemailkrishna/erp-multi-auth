 @include('common.header')
 @include('common.navbar')

 <script type="text/javascript">
function add_edit(value, name) {
    $('#class_preffered').find('option:selected').remove().end();
    $('#subject_preffered').find('option:selected').remove().end();
    var emp_detail = name.split('|?|');
    $('#emp_name').val(emp_detail[0]);
    var class_preffered1 = emp_detail[1].split(",");
    var class_length = class_preffered1.length;

    for (var x = 0; x < class_length; x++) {
        if (class_preffered1[x] != '') {
            $('#class_preffered').prepend('<option value="' + class_preffered1[x] + '" selected>' + class_preffered1[
                x] + '</option>');
        }
    }

    var subject_preffered1 = emp_detail[2].split(",");
    var subject_length = subject_preffered1.length;
    for (var x = 0; x < subject_length; x++) {
        if (subject_preffered1[x] != '') {
            $('#subject_preffered').prepend('<option value="' + subject_preffered1[x] + '" selected>' +
                subject_preffered1[x] + '</option>');
        }
    }


    $('#emp_code_hidden').val(value);
}
 </script>
 <script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    $("#myModal_close").click();
    $.ajax({
        url: access_link + "time_table/subject_wise_teacher_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                $('#myModal').modal('hide');

                get_content('time_table/subject_wise_teacher');
            }
        }
    });
});
 </script>
 <section class="content-header">
     <h1>
         School Information Management <small>Control Panel</small>
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/time_table')}}"><i class="fa fa-graduation-cap"></i>Time Table</a></li>
         <li class="active">Subject Wise Teacher</li>
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
                 <h3 class="box-title">Subject Wise Teacher</h3>
             </div>
             <!-- /.box-header -->
             <!------------------------------------------------Start Registration form--------------------------------------------------->

             <div class="box-body ">

                 <div class="col-md-12 box-body table-responsive">
                     <table id="table-data" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>S No.</th>
                                 <th>Teacher Name</th>
                                 <th>Subject Preferred</th>
                                 <th>Class Preferred</th>
                                 <th>Add/Edit</th>
                             </tr>
                         </thead>
                         <tbody>

                             <tr align='center'>
                                 <th>1</th>
                                 <th>KAILASH SONI</th>
                                 <th>Mathematics,SCIENCE,AG BIO,S.S.</th>
                                 <th>NURSERY,4th,LKG,1ST</th>

                                 <th><button type="button" id="15"
                                         name="kailash soni|?|NURSERY,4th,LKG,1ST|?|Mathematics,SCIENCE,AG BIO,S.S."
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>2</th>
                                 <th>KAILASH SONI</th>
                                 <th>AG CHEMISTRY</th>
                                 <th>LKG</th>

                                 <th><button type="button" id="19" name="kailash soni|?|LKG|?|AG CHEMISTRY"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>3</th>
                                 <th>ABHUL RJAAK </th>
                                 <th>English </th>
                                 <th>9th to 12th</th>

                                 <th><button type="button" id="29" name="Abhul Rjaak |?|9th to 12th|?|English "
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>4</th>
                                 <th>SURESH SONI</th>
                                 <th>maths</th>
                                 <th>LKG,2ND</th>

                                 <th><button type="button" id="70" name="suresh soni|?|LKG,2ND|?|maths"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>5</th>
                                 <th>ROHAN</th>
                                 <th>Sanskrit ,English</th>
                                 <th>1ST,UKG,NURSERY</th>

                                 <th><button type="button" id="71" name="rohan|?|1ST,UKG,NURSERY|?|Sanskrit ,English"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>6</th>
                                 <th>DEMO</th>
                                 <th>Social Science</th>
                                 <th>LKG</th>

                                 <th><button type="button" id="74" name="DEMO|?|LKG|?|Social Science"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>7</th>
                                 <th>SHREYA SHARMA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="75" name="shreya sharma|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>8</th>
                                 <th>PRAVIN</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="78" name="pravin|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>9</th>
                                 <th>SANJAY</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="79" name="sanjay|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>10</th>
                                 <th>RASHI SAXENA</th>
                                 <th>computer</th>
                                 <th></th>

                                 <th><button type="button" id="80" name="Rashi Saxena|?||?|computer"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>11</th>
                                 <th>PANKAJINI PATRA</th>
                                 <th>Maths</th>
                                 <th>6th</th>

                                 <th><button type="button" id="81" name="Pankajini Patra|?|6th|?|Maths"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>12</th>
                                 <th>JYOTI RANJAN PATRA</th>
                                 <th>Science</th>
                                 <th>Upper Primary</th>

                                 <th><button type="button" id="82" name="Jyoti Ranjan Patra|?|Upper Primary|?|Science"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>13</th>
                                 <th>GOUTAM KUMAR DAS</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="83" name="Goutam Kumar Das|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>14</th>
                                 <th>HUMAN RAM BHATI</th>
                                 <th>Hindi</th>
                                 <th></th>

                                 <th><button type="button" id="84" name="Human Ram Bhati|?||?|Hindi"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>15</th>
                                 <th>PREMSHANKAR YADAV</th>
                                 <th>social studies</th>
                                 <th></th>

                                 <th><button type="button" id="85" name="Premshankar Yadav|?||?|social studies"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>16</th>
                                 <th>AMIT KUMAR PATRA</th>
                                 <th>Maths</th>
                                 <th></th>

                                 <th><button type="button" id="86" name="Amit Kumar Patra|?||?|Maths"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>17</th>
                                 <th>SIBDUTTA NEGI</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="87" name="Sibdutta Negi|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>18</th>
                                 <th>BRAHMARAO</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="90" name="Brahmarao|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>19</th>
                                 <th>SRISHTI GUSAIN</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="91" name="srishti gusain|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>20</th>
                                 <th>HARSHALI SHAH</th>
                                 <th>Hindi,Maths,English,G.K.Computer</th>
                                 <th>8</th>

                                 <th><button type="button" id="92"
                                         name="HARSHALI SHAH|?|8|?|Hindi,Maths,English,G.K.Computer"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>21</th>
                                 <th>TUSHAR MODI </th>
                                 <th>Hindi,Maths,English,G.K.Computer</th>
                                 <th>8</th>

                                 <th><button type="button" id="93"
                                         name="tushar modi |?|8|?|Hindi,Maths,English,G.K.Computer"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>22</th>
                                 <th>DS SALUJA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="94" name="DS SALUJA|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>23</th>
                                 <th>AYUSH</th>
                                 <th>PHYSICS</th>
                                 <th>12</th>

                                 <th><button type="button" id="95" name="AYUSH|?|12|?|PHYSICS" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>24</th>
                                 <th>TUSHAR IYRE </th>
                                 <th>maths</th>
                                 <th>10</th>

                                 <th><button type="button" id="96" name="TUSHAR IYRE |?|10|?|maths"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>25</th>
                                 <th>KUNAL MOURYA</th>
                                 <th>English,Hindi </th>
                                 <th>12,11TH</th>

                                 <th><button type="button" id="99" name="kunal mourya|?|12,11TH|?|English,Hindi "
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>26</th>
                                 <th>MR. SANTOSH KUMAR SAHU</th>
                                 <th>Science</th>
                                 <th>UKG</th>

                                 <th><button type="button" id="101" name="MR. SANTOSH KUMAR SAHU|?|UKG|?|Science"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>27</th>
                                 <th>MR. BHOOPENDRA LODHI </th>
                                 <th>Social Science</th>
                                 <th>8TH</th>

                                 <th><button type="button" id="102" name="MR. BHOOPENDRA LODHI |?|8TH|?|Social Science"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>28</th>
                                 <th>ANJALI OJHA</th>
                                 <th>AG BIO</th>
                                 <th>LKG</th>

                                 <th><button type="button" id="103" name="Anjali ojha|?|LKG|?|AG BIO"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>29</th>
                                 <th>ATUL SINGH THAKUR </th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="104" name="atul singh thakur |?||?|"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>30</th>
                                 <th>SANTOSH KUMAR SINGH</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="105" name="SANTOSH KUMAR SINGH|?||?|"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>31</th>
                                 <th>RANI</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="107" name="rani|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>32</th>
                                 <th>KUMAR RAVIKANT</th>
                                 <th>SCIENCE</th>
                                 <th>1ST,UKG,NURSERY</th>

                                 <th><button type="button" id="108" name="KUMAR RAVIKANT|?|1ST,UKG,NURSERY|?|SCIENCE"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>33</th>
                                 <th>NIKHIL ADVIN</th>
                                 <th>Hindi ,Sanskrit </th>
                                 <th>LKG</th>

                                 <th><button type="button" id="109" name="nikhil advin|?|LKG|?|Hindi ,Sanskrit "
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>34</th>
                                 <th>SADAB</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="110" name="sadab|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>35</th>
                                 <th>RAVI</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="111" name="Ravi|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>36</th>
                                 <th>ANAND SHARMA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="125" name="anand sharma|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>37</th>
                                 <th>JITENDRA SHRIWASH</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="126" name="jitendra shriwash|?||?|"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>38</th>
                                 <th>DEMO FACULTY</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="127" name="demo faculty|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>39</th>
                                 <th>VATAN VERMA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="128" name="VATAN VERMA|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>40</th>
                                 <th>USER1</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="129" name="user1|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>41</th>
                                 <th>PAWAN MALVIYA</th>
                                 <th>Hindi</th>
                                 <th>1st to 5th</th>

                                 <th><button type="button" id="130" name="Pawan malviya|?|1st to 5th|?|Hindi"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>42</th>
                                 <th> TEACHER</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="131" name=" teacher|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>43</th>
                                 <th>MONU KUMAR</th>
                                 <th>OFFICE</th>
                                 <th></th>

                                 <th><button type="button" id="134" name="MONU KUMAR|?||?|OFFICE"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>44</th>
                                 <th>ABHUSHEK</th>
                                 <th>Sanskrit ,Hindi </th>
                                 <th>NURSERY</th>

                                 <th><button type="button" id="135" name="abhushek|?|NURSERY|?|Sanskrit ,Hindi "
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>45</th>
                                 <th>TEACHER</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="136" name="Teacher|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>46</th>
                                 <th>SUPRIYA TIWARI</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="137" name="Supriya tiwari|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>47</th>
                                 <th>VAISHNAVI AGRWAL</th>
                                 <th>MATH</th>
                                 <th>1 TO 8</th>

                                 <th><button type="button" id="139" name="VAISHNAVI AGRWAL|?|1 TO 8|?|MATH"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>48</th>
                                 <th>KAREEM RANA</th>
                                 <th>ALL</th>
                                 <th>ALL,LKG</th>

                                 <th><button type="button" id="140" name="KAREEM RANA|?|ALL,LKG|?|ALL"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>49</th>
                                 <th>PALWINDER KAUR</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="141" name="PALWINDER KAUR|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>50</th>
                                 <th>SUPRIYA SANTOSH</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="142" name="Supriya Santosh|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>51</th>
                                 <th>MD JAHIR KHAN</th>
                                 <th>E</th>
                                 <th></th>

                                 <th><button type="button" id="143" name="MD JAHIR KHAN|?||?|E" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>52</th>
                                 <th>SUPRIYA SANTOSH</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="144" name="Supriya Santosh|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>53</th>
                                 <th>SATYAPRAKASH YADAV</th>
                                 <th>math</th>
                                 <th>12</th>

                                 <th><button type="button" id="146" name="satyaprakash yadav|?|12|?|math"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>54</th>
                                 <th>TRIBHUWAN KUMAR</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="149" name="Tribhuwan Kumar|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>55</th>
                                 <th>SURAJ KUMAR SINGH</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="150" name="SURAJ KUMAR SINGH|?||?|"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>56</th>
                                 <th>ROHIT </th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="151" name="Rohit |?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>57</th>
                                 <th>UMESH</th>
                                 <th>Science,Mathematics,English 2</th>
                                 <th>1ST,UKG,LKG</th>

                                 <th><button type="button" id="152"
                                         name="umesh|?|1ST,UKG,LKG|?|Science,Mathematics,English 2"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>58</th>
                                 <th>SHIWANAND TIWARI</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="153" name="Shiwanand Tiwari|?||?|"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>59</th>
                                 <th>SURESH SONI</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="154" name="suresh soni|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>60</th>
                                 <th>RAYEES</th>
                                 <th>All</th>
                                 <th>2ND</th>

                                 <th><button type="button" id="155" name="RAYEES|?|2ND|?|All" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>61</th>
                                 <th>ANAYAT ULLAH</th>
                                 <th>English urdu</th>
                                 <th>2ND</th>

                                 <th><button type="button" id="156" name="ANAYAT ULLAH|?|2ND|?|English  urdu"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>62</th>
                                 <th>XXX</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="157" name="xxx|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>63</th>
                                 <th>AAA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="158" name="AAA|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>64</th>
                                 <th>AA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="159" name="AA|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>65</th>
                                 <th></th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="160" name="|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>66</th>
                                 <th>JAVID</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="166" name="JAVID|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>67</th>
                                 <th>HANSRAJ</th>
                                 <th>English,social sciences,Science/Evs,Social Science</th>
                                 <th>7</th>

                                 <th><button type="button" id="175"
                                         name="Hansraj|?|7|?|English,social sciences,Science/Evs,Social Science"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>68</th>
                                 <th>MOHIT NAGAR</th>
                                 <th></th>
                                 <th>10th</th>

                                 <th><button type="button" id="199" name="Mohit nagar|?|10th|?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>69</th>
                                 <th>PRAKASH KUMAWAT</th>
                                 <th>B.K.A.</th>
                                 <th>LKG</th>

                                 <th><button type="button" id="261" name="PRAKASH KUMAWAT|?|LKG|?|B.K.A."
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>70</th>
                                 <th>SUNITA BAI</th>
                                 <th>hindi </th>
                                 <th>1st</th>

                                 <th><button type="button" id="278" name="Sunita Bai|?|1st|?|hindi "
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>71</th>
                                 <th>RATI </th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="279" name="Rati |?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>72</th>
                                 <th>PRIYANKA KAUSHIK</th>
                                 <th>EVS</th>
                                 <th>123</th>

                                 <th><button type="button" id="281" name="Priyanka kaushik|?|123|?|EVS"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>73</th>
                                 <th>JAGMAL YADAV</th>
                                 <th>Maths ,HINDI,S.S.,SANSKRIT</th>
                                 <th>10TH</th>

                                 <th><button type="button" id="290"
                                         name="JAGMAL YADAV|?|10TH|?|Maths ,HINDI,S.S.,SANSKRIT" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>74</th>
                                 <th>RAMKISHAN JI</th>
                                 <th>History</th>
                                 <th>11TH,12TH</th>

                                 <th><button type="button" id="300" name="RAMKISHAN JI|?|11TH,12TH|?|History"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>75</th>
                                 <th>RIMA D</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="301" name="rima d|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>76</th>
                                 <th>NIDHI</th>
                                 <th>maths</th>
                                 <th>11th</th>

                                 <th><button type="button" id="307" name="nidhi|?|11th|?|maths" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>77</th>
                                 <th>POOJA </th>
                                 <th>maths</th>
                                 <th>11th</th>

                                 <th><button type="button" id="308" name="pooja |?|11th|?|maths" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>78</th>
                                 <th>UFGV</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="310" name="ufgv|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>79</th>
                                 <th>MONIIKA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="311" name="Moniika|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>80</th>
                                 <th>MONIKA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="313" name="Monika|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>81</th>
                                 <th>SHAMLI </th>
                                 <th>MATHS</th>
                                 <th>12</th>

                                 <th><button type="button" id="317" name="shamli |?|12|?|MATHS" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>82</th>
                                 <th>KUNDAN KUMAR JHA</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="319" name="kundan kumar jha|?||?|"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>83</th>
                                 <th>JAGMAL YADAV</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="320" name="JAGMAL YADAV|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>84</th>
                                 <th>RAHUL </th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="325" name="rahul |?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>85</th>
                                 <th>ESWARI</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="328" name="eswari|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>86</th>
                                 <th>JAGMAL YADAV</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="329" name="JAGMAL YADAV|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>87</th>
                                 <th>JAGMAL YADAV</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="330" name="JAGMAL YADAV|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>88</th>
                                 <th>ABJISHEK LAND</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="331" name="ABJISHEK LAND|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>89</th>
                                 <th>PARVATI PATIL</th>
                                 <th>MATHS</th>
                                 <th>1 TO 5</th>

                                 <th><button type="button" id="333" name="PARVATI PATIL|?|1 TO 5|?|MATHS"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>90</th>
                                 <th>ASHADUR RAHMAN MONDAL</th>
                                 <th></th>
                                 <th>ALL</th>

                                 <th><button type="button" id="334" name="ASHADUR RAHMAN MONDAL|?|ALL|?|"
                                         class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                         data-toggle="modal" data-target="#myModal">Add</th>
                             </tr>

                             <tr align='center'>
                                 <th>91</th>
                                 <th>VIVEK KUMAR</th>
                                 <th></th>
                                 <th></th>

                                 <th><button type="button" id="337" name="VIVEK KUMAR|?||?|" class="btn btn-success"
                                         onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                         data-target="#myModal">Add</th>
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
                                             <label>Teacher Name</label>
                                             <input type="text" name="emp_name" id="emp_name" class="form-control"
                                                 readonly>
                                             <input type="hidden" name="emp_code_hidden" id="emp_code_hidden"
                                                 class="form-control">
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Class Preffered</label>
                                             <select name="class_preffered[]" class="select2  form-control"
                                                 id='class_preffered' multiple style="width:100%">
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
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Subject Preferred</label>
                                             <select name="subject_preffered[]" class="select2  form-control"
                                                 id='subject_preffered' multiple style="width:100%">
                                                 <option value="SCIENCE">SCIENCE</option>
                                                 <option value="CHEMISTRY">CHEMISTRY</option>
                                                 <option value="AG BIO">AG BIO</option>
                                                 <option value="HINDI">HINDI</option>
                                                 <option value="S.S.">S.S.</option>
                                                 <option value="SANSKRIT">SANSKRIT</option>
                                                 <option value="Bangali">Bangali</option>
                                                 <option value="Biology M">Biology M</option>
                                                 <option value="Chemistry">Chemistry</option>
                                                 <option value="Physics">Physics</option>
                                                 <option value="Maths ">Maths </option>
                                                 <option value="Biotechnology">Biotechnology</option>
                                                 <option value="Sociology">Sociology</option>
                                                 <option value="Psychology">Psychology</option>
                                                 <option value="Political Science">Political Science</option>
                                                 <option value="DRAWING">DRAWING</option>
                                                 <option value="History">History</option>
                                                 <option value="Geography">Geography</option>
                                                 <option value="Economics">Economics</option>
                                                 <option value="Anatomy">Anatomy</option>
                                                 <option value="Agriculture">Agriculture</option>
                                                 <option value="Home Management">Home Management</option>
                                                 <option value="Element Science">Element Science</option>
                                                 <option value="Business">Business</option>
                                                 <option value="Book Keeping & Accountancy">Book Keeping & Accountancy
                                                 </option>
                                                 <option value="Crop Production">Crop Production</option>
                                                 <option value="Element of Animal">Element of Animal</option>
                                                 <option value="Computer">Computer</option>
                                                 <option value="General Knowledge">General Knowledge</option>
                                                 <option value="Information">Information</option>
                                                 <option value="SCIENCE">SCIENCE</option>
                                                 <option value="GK OR COMPUTER">GK OR COMPUTER</option>
                                                 <option value="Economics ">Economics </option>
                                                 <option value="Bussines Study">Bussines Study</option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value="HINDI SAHITYA">HINDI SAHITYA</option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value="Elements of Physics">Elements of Physics</option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value="ENGLISH">ENGLISH</option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value="Games">Games</option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value="Animal Husbandry And Poultary Farm">Animal Husbandry And
                                                     Poultary Farm</option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value="ORGANIC CHEMISTRY ">ORGANIC CHEMISTRY </option>
                                                 <option value="computer">computer</option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value="testr">testr</option>
                                                 <option value="Cleanliness">Cleanliness</option>
                                                 <option value="Regularity">Regularity</option>
                                                 <option value="Homework">Homework</option>
                                                 <option value="Computer">Computer</option>
                                                 <option value="Project Work">Project Work</option>
                                                 <option value="MATH">MATH</option>
                                                 <option value="LIFE SKILL & VALUE">LIFE SKILL & VALUE</option>
                                                 <option value=""></option>
                                                 <option value="GK & DRAWING">GK & DRAWING</option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>
                                                 <option value=""></option>

                                             </select>
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
 <script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

})
 </script>