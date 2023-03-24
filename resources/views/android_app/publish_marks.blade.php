	@include('common.header')
	@include('common.navbar')

	<section class="content-header">
	    <h1>
	        Notification Management
	        <small>Control Panel</small>
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li><a href="{{url('app')}}"><i class="fa fa-dashboard"></i> Android App</a></li>
	        <li class="active"><i class="fa fa-list"></i>Publish Marks</li>
	    </ol>
	</section>

	<script>
function for_check(id) {
    if ($('#' + id).prop("checked") == true) {
        $("." + id).each(function() {
            $(this).prop('checked', true);
        });
    } else {
        $("." + id).each(function() {
            $(this).prop('checked', false);
        });
    }
}

$("#my_form1").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "android_app/publish_marks_mp_board_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('android_app/publish_marks');
            }
        }
    });
});

$("#my_form2").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "android_app/publish_marks_cbse_board_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('android_app/publish_marks');
            }
        }
    });
});

$("#my_form3").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "android_app/publish_marks_monthly_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('android_app/publish_marks');
            }
        }
    });
});
	</script>



	<!-- Main content -->
	<section class="content">
	    <div class="row">
	        <div class="col-xs-12">

	            <!-- /.box -->
	            <div class="box box-success ">
	                <div class="box-header with-border">
	                    <h3 class="box-title">Publish Marks List (State Board)</h3>
	                </div>
	                <!-- /.box-header -->
	                <form method="post" enctype="multipart/form-data" id="my_form1">
	                    <div class="box-body table-responsive">
	                        <table id="example1" class="table table-bordered table-striped">
	                            <thead>
	                                <tr>
	                                    <th>S No</th>
	                                    <th>Class</th>
	                                    <th>Exam Types</th>
	                                    <th>Publish OR Not</th>
	                                    <th><input type="checkbox" name="" id="chk_mp_board"
	                                            onclick="for_check(this.id);" /></th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>1</td>
	                                    <td>NURSERY</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>NO</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="362|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>2</td>
	                                    <td>NURSERY</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="363|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>3</td>
	                                    <td>NURSERY</td>
	                                    <td>Annual Exam</td>
	                                    <td>Yes</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="364|?|Yes"
	                                            class="chk_mp_board" checked /></td>
	                                </tr>
	                                <tr>
	                                    <td>4</td>
	                                    <td>NURSERY</td>
	                                    <td>Final Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="365|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>5</td>
	                                    <td>LKG</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="366|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>6</td>
	                                    <td>LKG</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="367|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>7</td>
	                                    <td>LKG</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="368|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>8</td>
	                                    <td>LKG</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="369|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>9</td>
	                                    <td>UKG</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="371|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>10</td>
	                                    <td>UKG</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="372|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>11</td>
	                                    <td>UKG</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="373|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>12</td>
	                                    <td>UKG</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="374|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>13</td>
	                                    <td>1ST</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="376|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>14</td>
	                                    <td>1ST</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="377|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>15</td>
	                                    <td>1ST</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="378|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>16</td>
	                                    <td>1ST</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="379|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>17</td>
	                                    <td>2ND</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>NO</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="381|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>18</td>
	                                    <td>2ND</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="382|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>19</td>
	                                    <td>2ND</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="383|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>20</td>
	                                    <td>2ND</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="384|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>21</td>
	                                    <td>3RD</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="386|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>22</td>
	                                    <td>3RD</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="387|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>23</td>
	                                    <td>3RD</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="388|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>24</td>
	                                    <td>3RD</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="389|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>25</td>
	                                    <td>4TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="391|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>26</td>
	                                    <td>4TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="392|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>27</td>
	                                    <td>4TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="393|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>28</td>
	                                    <td>4TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="394|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>29</td>
	                                    <td>5TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="396|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>30</td>
	                                    <td>5TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="397|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>31</td>
	                                    <td>5TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="398|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>32</td>
	                                    <td>5TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="399|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>33</td>
	                                    <td>6TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="401|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>34</td>
	                                    <td>6TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="402|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>35</td>
	                                    <td>6TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="403|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>36</td>
	                                    <td>6TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="404|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>37</td>
	                                    <td>7TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="406|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>38</td>
	                                    <td>7TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="407|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>39</td>
	                                    <td>7TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="408|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>40</td>
	                                    <td>7TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="409|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>41</td>
	                                    <td>8TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="411|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>42</td>
	                                    <td>8TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="412|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>43</td>
	                                    <td>8TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="413|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>44</td>
	                                    <td>8TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="414|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>45</td>
	                                    <td>9TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="416|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>46</td>
	                                    <td>9TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="417|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>47</td>
	                                    <td>9TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="418|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>48</td>
	                                    <td>9TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="419|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>49</td>
	                                    <td>10TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="421|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>50</td>
	                                    <td>10TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="422|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>51</td>
	                                    <td>10TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="423|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>52</td>
	                                    <td>10TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="424|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>53</td>
	                                    <td>11TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="426|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>54</td>
	                                    <td>11TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="427|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>55</td>
	                                    <td>11TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="428|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>56</td>
	                                    <td>11TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="429|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>57</td>
	                                    <td>12TH</td>
	                                    <td>Quarterly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="431|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>58</td>
	                                    <td>12TH</td>
	                                    <td>Half Yearly Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="432|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>59</td>
	                                    <td>12TH</td>
	                                    <td>Pre Board Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="433|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                                <tr>
	                                    <td>60</td>
	                                    <td>12TH</td>
	                                    <td>Annual Exam</td>
	                                    <td>No</td>
	                                    <td><input type="checkbox" name="mp_board_publish_marks[]" value="434|?|Yes"
	                                            class="chk_mp_board" /></td>
	                                </tr>
	                            </tbody>
	                        </table>
	                        <div class="col-md-12">
	                            <center><input type="submit" name="submit1" value="Submit" class="btn btn-success /></center>
            </div>
            </div>
            </form>
			            <!-- /.box-body -->
			            <!-- /.box-body -->
            <div class=" box-header with-border">
	                                <h3 class="box-title">Publish Marks List (Monthly Test)</h3>
	                        </div>
	                        <!-- /.box-header -->
	                        <form method="post" enctype="multipart/form-data" id="my_form3">
	                            <div class="box-body table-responsive">
	                                <table id="example3" class="table table-bordered table-striped">
	                                    <thead>
	                                        <tr>
	                                            <th>S No</th>
	                                            <th>Class</th>
	                                            <th>Exam Types</th>
	                                            <th>Publish OR Not</th>
	                                            <th><input type="checkbox" name="" id="chk_monthly"
	                                                    onclick="for_check(this.id);" /></th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td>1</td>
	                                            <td>NURSERY</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="361|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>2</td>
	                                            <td>NURSERY</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="362|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>3</td>
	                                            <td>NURSERY</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="363|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>4</td>
	                                            <td>NURSERY</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="364|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>5</td>
	                                            <td>NURSERY</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="365|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>6</td>
	                                            <td>NURSERY</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="436|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>7</td>
	                                            <td>LKG</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="366|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>8</td>
	                                            <td>LKG</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="367|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>9</td>
	                                            <td>LKG</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="368|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>10</td>
	                                            <td>LKG</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="369|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>11</td>
	                                            <td>LKG</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="370|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>12</td>
	                                            <td>LKG</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="437|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>13</td>
	                                            <td>UKG</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="371|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>14</td>
	                                            <td>UKG</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="372|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>15</td>
	                                            <td>UKG</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="373|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>16</td>
	                                            <td>UKG</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="374|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>17</td>
	                                            <td>UKG</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="375|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>18</td>
	                                            <td>1ST</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="376|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>19</td>
	                                            <td>1ST</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="377|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>20</td>
	                                            <td>1ST</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="378|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>21</td>
	                                            <td>1ST</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="379|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>22</td>
	                                            <td>1ST</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="380|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>23</td>
	                                            <td>1ST</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="439|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>24</td>
	                                            <td>2ND</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="381|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>25</td>
	                                            <td>2ND</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="382|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>26</td>
	                                            <td>2ND</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="383|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>27</td>
	                                            <td>2ND</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="384|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>28</td>
	                                            <td>2ND</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="385|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>29</td>
	                                            <td>2ND</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="440|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>30</td>
	                                            <td>3RD</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="386|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>31</td>
	                                            <td>3RD</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="387|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>32</td>
	                                            <td>3RD</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="388|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>33</td>
	                                            <td>3RD</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="389|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>34</td>
	                                            <td>3RD</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="390|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>35</td>
	                                            <td>3RD</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="441|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>36</td>
	                                            <td>4TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="391|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>37</td>
	                                            <td>4TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="392|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>38</td>
	                                            <td>4TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="393|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>39</td>
	                                            <td>4TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="394|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>40</td>
	                                            <td>4TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="395|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>41</td>
	                                            <td>4TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="442|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>42</td>
	                                            <td>5TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="396|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>43</td>
	                                            <td>5TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="397|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>44</td>
	                                            <td>5TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="398|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>45</td>
	                                            <td>5TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="399|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>46</td>
	                                            <td>5TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="400|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>47</td>
	                                            <td>5TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="443|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>48</td>
	                                            <td>6TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="401|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>49</td>
	                                            <td>6TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="402|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>50</td>
	                                            <td>6TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="403|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>51</td>
	                                            <td>6TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="404|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>52</td>
	                                            <td>6TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="405|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>53</td>
	                                            <td>6TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="444|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>54</td>
	                                            <td>7TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="406|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>55</td>
	                                            <td>7TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="407|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>56</td>
	                                            <td>7TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="408|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>57</td>
	                                            <td>7TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="409|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>58</td>
	                                            <td>7TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="410|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>59</td>
	                                            <td>7TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="445|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>60</td>
	                                            <td>8TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="411|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>61</td>
	                                            <td>8TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="412|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>62</td>
	                                            <td>8TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="413|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>63</td>
	                                            <td>8TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="414|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>64</td>
	                                            <td>8TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="415|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>65</td>
	                                            <td>8TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="446|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>66</td>
	                                            <td>9TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="416|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>67</td>
	                                            <td>9TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="417|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>68</td>
	                                            <td>9TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="418|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>69</td>
	                                            <td>9TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="419|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>70</td>
	                                            <td>9TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="420|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>71</td>
	                                            <td>9TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="447|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>72</td>
	                                            <td>10TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="421|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>73</td>
	                                            <td>10TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="422|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>74</td>
	                                            <td>10TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="423|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>75</td>
	                                            <td>10TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="424|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>76</td>
	                                            <td>10TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="425|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>77</td>
	                                            <td>10TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="448|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>78</td>
	                                            <td>11TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="426|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>79</td>
	                                            <td>11TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="427|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>80</td>
	                                            <td>11TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="428|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>81</td>
	                                            <td>11TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="429|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>82</td>
	                                            <td>11TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="430|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>83</td>
	                                            <td>11TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="449|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>84</td>
	                                            <td>12TH</td>
	                                            <td>Unit Test1</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="431|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>85</td>
	                                            <td>12TH</td>
	                                            <td>Unit Test2</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="432|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>86</td>
	                                            <td>12TH</td>
	                                            <td>Unit Test3</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="433|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>87</td>
	                                            <td>12TH</td>
	                                            <td>Unit Test4</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="434|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>88</td>
	                                            <td>12TH</td>
	                                            <td>Unit Test5</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="435|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                        <tr>
	                                            <td>89</td>
	                                            <td>12TH</td>
	                                            <td>Unit Test6</td>
	                                            <td></td>
	                                            <td><input type="checkbox" name="monthly_publish_marks[]" value="450|?|Yes"
	                                                    class="chk_monthly" /></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                                <div class="col-md-12">
	                                    <center><input type="submit" name="submit3" value="Submit" class="btn btn-success /></center>
            </div>
            </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
		
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    @include('common.footer')