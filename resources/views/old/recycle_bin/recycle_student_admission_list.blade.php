@include('common.header')
@include('common.navbar')

<script>
function valid1(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        delete_data(s_no);
    } else {
        return false;
    }
}

function delete_data(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "recycle_bin/student_admission_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('recycle_bin/recycle_student_admission_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}

function valid(s_no) {
    var myval = confirm("Are you sure want to restore this record !!!!");
    if (myval == true) {
        restore_data(s_no);
    } else {
        return false;
    }
}

function restore_data(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "recycle_bin/recycle_student_admission_restore.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Restore', 'green');
                get_content('recycle_bin/recycle_student_admission_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
</script>
<section class="content-header">
    <h1>
        Recycle Bin
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/recycle-bin')}}"><i class="fal fa-trash-alt"></i> Recycle Bin</a>
        </li>
        <li class="active">Student Admission List Recycle Bin</li>
    </ol>
</section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->
            <div <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Admission List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Student Name</th>
                                <th>Father Name</th>
                                <th>Student Class</th>
                                <th>Student Section</th>
                                <th>Student Roll No</th>
                                <th>updated by</th>
                                <th>updated date</th>
                                <th style="">Restore</th>
                                <th style="">Delete</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td>1</td>
                                <td>Arham Patel</td>
                                <td>Abdulnasir</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000289');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000289');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>2</td>
                                <td>SHAILESH SHARMA</td>
                                <td>HARI SHANKER SHARMA</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000286');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000286');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>3</td>
                                <td>sourabh</td>
                                <td>gaurav</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000271');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000271');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Aaysha Bano</td>
                                <td>Shahbudeen kathat</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000268');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000268');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>5</td>
                                <td>shekhu </td>
                                <td>aman</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>11</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000259');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000259');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>6</td>
                                <td>raj</td>
                                <td></td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>10</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000240');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000240');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>7</td>
                                <td>vinod</td>
                                <td>Bhagirath </td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>9</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000233');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000233');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>8</td>
                                <td>vinod kumar</td>
                                <td>bhagirth mak</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>8</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000231');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000231');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>9</td>
                                <td>xaa</td>
                                <td>sas</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>43</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000218');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000218');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>10</td>
                                <td>Ayush</td>
                                <td>Ajay</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>13</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000217');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000217');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>11</td>
                                <td>Anil</td>
                                <td>Shyam</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>11</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000216');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000216');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>12</td>
                                <td>b</td>
                                <td></td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>15</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000210');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000210');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>13</td>
                                <td>xyz</td>
                                <td></td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>44</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000208');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000208');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>14</td>
                                <td>RAVINDER SINGH</td>
                                <td>BALWANT SINGH</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>35</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000204');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000204');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>15</td>
                                <td>radha kumari</td>
                                <td>ram mohan singh</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>30</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000203');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000203');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>16</td>
                                <td>Rajeev</td>
                                <td>Ramveer</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000199');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000199');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>17</td>
                                <td>RASHI </td>
                                <td>HARISH</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>34</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000196');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000196');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>18</td>
                                <td>कैलाश</td>
                                <td>मोहन राम</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>14</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000190');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000190');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>19</td>
                                <td>mukho</td>
                                <td>mokoo</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>26</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000188');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000188');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>20</td>
                                <td>Suhana Perveen Mahi </td>
                                <td>Monorul Islam Mukul</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>12</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000182');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000182');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>21</td>
                                <td>K Deka</td>
                                <td>R Deka</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>22</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000180');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000180');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>22</td>
                                <td>mani</td>
                                <td>gurmeet</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>24</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000178');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000178');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>23</td>
                                <td>prekshya chaudhary</td>
                                <td>ravi chaudhary</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>29</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000166');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000166');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>24</td>
                                <td>CALENDAR</td>
                                <td>YEAR</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>16</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000163');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000163');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>25</td>
                                <td>Ongpong</td>
                                <td>mokho</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>27</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000162');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000162');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>26</td>
                                <td>zzz</td>
                                <td>aas</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>45</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000160');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000160');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>27</td>
                                <td>Prakshaya</td>
                                <td>Ravi</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>28</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000153');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000153');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>28</td>
                                <td>Hariom pandey</td>
                                <td>Asbind Kumar pandey</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>20</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000146');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000146');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>29</td>
                                <td>S</td>
                                <td></td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>38</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000143');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000143');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>30</td>
                                <td>ds</td>
                                <td></td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>18</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000139');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000139');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>31</td>
                                <td>abhiyank</td>
                                <td>suresh</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>9</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000138');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000138');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>32</td>
                                <td>Abhijeet Thakur</td>
                                <td>Anil</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>8</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000131');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000131');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>33</td>
                                <td>Abhijeet Thakur</td>
                                <td>Anil</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>6</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000129');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000129');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>34</td>
                                <td>SURYANSH KUMAR PRAJAPATI</td>
                                <td>PANKAJ KUMAR PRAJAPATI</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>39</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000125');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000125');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>35</td>
                                <td>ashish kumar yadav</td>
                                <td>Anil</td>
                                <td>2ND</td>
                                <td>B</td>
                                <td>12</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000122');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000122');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>36</td>
                                <td>Rajendra</td>
                                <td>Narayan</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000219');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000219');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>37</td>
                                <td>MUKESH GUPTA</td>
                                <td>ASHOK GUPTA</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000184');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000184');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>38</td>
                                <td>NAINCY SHARMA</td>
                                <td>Pramod sharma</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1008</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000168');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000168');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>39</td>
                                <td>MUKESH GUPTA</td>
                                <td>ASHOK GUPTA</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1007</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000167');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000167');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>40</td>
                                <td>Tanu yadav</td>
                                <td>Gopal yadav</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1014</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000161');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000161');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>41</td>
                                <td>Shivaraj</td>
                                <td></td>
                                <td>2ND</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000159');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000159');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>42</td>
                                <td>RASHMI VAISHNAW</td>
                                <td>RAMESHWAR VAISHNAW</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1011</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000105');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000105');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>43</td>
                                <td>YATISH PRADHAN</td>
                                <td>DATARAM PRADHAN</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1015</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000104');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000104');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>44</td>
                                <td>SONAM SONWANI</td>
                                <td>CHHTTELAL SONWANI</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1013</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000103');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000103');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>45</td>
                                <td>PRATAP GARHEWAL</td>
                                <td>BADRI PRASAD GARHEWAL</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1009</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000102');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000102');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>46</td>
                                <td>RITIK BARETH</td>
                                <td>DILRAM BARETH</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1012</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000101');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000101');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>47</td>
                                <td>PRIYA PRADHAN</td>
                                <td>BRIJNANDAN PRADHAN</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1010</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000100');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000100');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>48</td>
                                <td>DEENBANDHU SAHU</td>
                                <td>SHYAMSHUNDAR SAHU</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1006</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000099');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000099');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>49</td>
                                <td>CHETAN SAHU</td>
                                <td>ASHOK SAHU</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1004</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000098');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000098');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>50</td>
                                <td>CHETNA SAHU</td>
                                <td>PARDESHI SAHU</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1005</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000097');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000097');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>51</td>
                                <td>CHANCHAL LAHRE</td>
                                <td>RAJENDRA KUMAR LAHRE</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1003</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000096');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000096');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>52</td>
                                <td>BHUMIKA LAHRE </td>
                                <td>HIMANCHAL LAHRE</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1002</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000095');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000095');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>53</td>
                                <td>ANISH CHAUHAN</td>
                                <td>PURUSHOTTAM CHAUHAN</td>
                                <td>2ND</td>
                                <td>A</td>
                                <td>1001</td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000094');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000094');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>54</td>
                                <td>HANSIKA LAHRE</td>
                                <td>RAJENDRA KUMAR LAHRE</td>
                                <td>5TH</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000112');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000112');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>55</td>
                                <td>LISHA NAGWAKAR</td>
                                <td>SURENDRA SINGH NAGWAKAR</td>
                                <td>5TH</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000111');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000111');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>56</td>
                                <td>DEEPIKA CHAUHAN</td>
                                <td>NARAYAN CHAUHAN</td>
                                <td>5TH</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000110');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000110');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>57</td>
                                <td>SIDDHANT BARETH</td>
                                <td>LOCHAN BARETH</td>
                                <td>5TH</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000109');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000109');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>58</td>
                                <td>OMPRAKASH CHAUHAN</td>
                                <td>RAMKISHAN CHAUHAN</td>
                                <td>5TH</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000108');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000108');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>59</td>
                                <td>NOHAR PRASAD SAHU</td>
                                <td>MOHIT RAM SAHU</td>
                                <td>5TH</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000107');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000107');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>60</td>
                                <td>manhood</td>
                                <td>love</td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000158');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000158');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>61</td>
                                <td>Riti</td>
                                <td>Alok</td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000148');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000148');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>62</td>
                                <td>alok</td>
                                <td>rk singh</td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000147');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000147');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>63</td>
                                <td>umesh </td>
                                <td></td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000121');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000121');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>64</td>
                                <td>HULAS BARETH</td>
                                <td>MANGAL SINGH BARETH</td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000013');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000013');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>65</td>
                                <td>GANGA BARETH</td>
                                <td>SONI BARETH </td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000012');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000012');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>66</td>
                                <td>AASHISH SAMEER</td>
                                <td>SANJAY SAMEER</td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000004');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000004');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>67</td>
                                <td>AARUN KUMAR URAO</td>
                                <td>VINOD URAO</td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000003');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000003');"
                                        style="">Delete</button></td>

                            </tr>

                            <tr>
                                <td>68</td>
                                <td>AARUSH URAO</td>
                                <td>BIRBAL URAO</td>
                                <td>LKG</td>
                                <td>A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid('2000002');"
                                        style="">Restore</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="return valid1('2000002');"
                                        style="">Delete</button></td>

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
$(function() {
    $('#example1').DataTable()
})
</script>

@include('common.footer')