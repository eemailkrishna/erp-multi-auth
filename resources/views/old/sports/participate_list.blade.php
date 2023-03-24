@include('common.header')
@include('common.navbar')


<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        for_delete(s_no);
    } else {
        return false;
    }
}

function for_delete(s_no) {
    $.ajax({
        type: "POST",
        url: access_link + "sports/delete_participate.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('sports/participate_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Sports Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/sports')}}" #><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li><i class="fa fa-list"></i> Participate List</li>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Participation List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="overflow-x:scroll;width:100%;">
                    <table id="example1" class="table table-bordered table-striped" style="height:100px;">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Class/Sec</th>
                                <th>Gender</th>
                                <th>Adm No</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Dob</th>
                                <th>Aadhar/Uid</th>
                                <th>Contact</th>
                                <th>Sports Name</th>
                                <th>Board Reg No</th>
                                <th>Age Category</th>
                                <th>Actual Age </th>
                                <th style="display:none;">Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>Roshan </th>
                                <th>6TH(A)</th>
                                <th>Male</th>
                                <th></th>
                                <th>Raj Mishra</th>
                                <th>Goldi</th>
                                <th>2022-03-06</th>
                                <th></th>
                                <th>9936528547</th>
                                <th>फूत्बल्ल</th>
                                <th>1</th>
                                <th>Under 1 Year</th>
                                <th>0 Years 9 Month 0 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=29');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('29');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>2</th>
                                <th>muskan ray</th>
                                <th>LKG()</th>
                                <th>Female</th>
                                <th></th>
                                <th>roshan ray</th>
                                <th>ranju ray</th>
                                <th>2015-02-04</th>
                                <th></th>
                                <th>9813405312</th>
                                <th>Basket Ball</th>
                                <th>1234554321</th>
                                <th>Under 8 Year</th>
                                <th>7 Years 7 Month 1 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=28');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('28');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>3</th>
                                <th>Zubair khan</th>
                                <th>7TH(A)</th>
                                <th>Male</th>
                                <th></th>
                                <th>Faraz Khan</th>
                                <th>Zeba Khan</th>
                                <th>2010-08-20</th>
                                <th>114422112277</th>
                                <th>7894561237</th>
                                <th>Cricket</th>
                                <th>589</th>
                                <th>Under 12 Year</th>
                                <th>11 Years 11 Month 8 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=27');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('27');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>4</th>
                                <th>ABHISHEK </th>
                                <th>LKG()</th>
                                <th>Male</th>
                                <th></th>
                                <th>B L YADAV</th>
                                <th>SUSHILA DEVI</th>
                                <th>2002-01-07</th>
                                <th></th>
                                <th>9695924506</th>
                                <th>Cricket</th>
                                <th>112233</th>
                                <th>Under 21 Year</th>
                                <th>20 Years 6 Month 19 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=26');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('26');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>5</th>
                                <th>LAXMI GUPTA </th>
                                <th>LKG(A)</th>
                                <th>Female</th>
                                <th></th>
                                <th>SUSHIL GUPTA </th>
                                <th>KUMKUM</th>
                                <th>2012-01-01</th>
                                <th></th>
                                <th>7897907659</th>
                                <th>Basket Ball</th>
                                <th>998</th>
                                <th>Under 11 Year</th>
                                <th>10 Years 3 Month 22 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=25');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('25');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>6</th>
                                <th>OMPRAKASH CHAUHAN</th>
                                <th>5TH(A)</th>
                                <th>Male</th>
                                <th>102</th>
                                <th>RAMKISHAN CHAUHAN</th>
                                <th>PILI BAI CHAUHAN</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Basket Ball</th>
                                <th>cgbfc</th>
                                <th>Under 52 Year</th>
                                <th>51 Years 9 Month 9 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=24');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('24');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>7</th>
                                <th>SIMARAN KUMARI KURREY</th>
                                <th>9TH(A)</th>
                                <th>Female</th>
                                <th>313</th>
                                <th>SUNIL KURREY</th>
                                <th>FULESHWARI KURREY</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Basket Ball</th>
                                <th>asasass</th>
                                <th>Under 52 Year</th>
                                <th>51 Years 0 Month 5 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=22');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('22');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>8</th>
                                <th>AALIYA KHANDEY</th>
                                <th>5TH(A)</th>
                                <th>Female</th>
                                <th>333</th>
                                <th>DULARI RAM KHSNDEY</th>
                                <th>GUDIYA BAI KHANDEY</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Basket Ball</th>
                                <th>767</th>
                                <th>Under 2022 Year</th>
                                <th>2021 Years 10 Month 24 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=21');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('21');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>9</th>
                                <th>RAGINI BANJARE</th>
                                <th>9TH(A)</th>
                                <th>Female</th>
                                <th>311</th>
                                <th>SANTOSH BANJARE</th>
                                <th>RESHAM BAI BANJARE</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Basket Ball</th>
                                <th>ssss</th>
                                <th>Under 2022 Year</th>
                                <th>2021 Years 9 Month 10 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=20');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('20');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>10</th>
                                <th>akshada yadav</th>
                                <th>5TH(B)</th>
                                <th>Female</th>
                                <th>4</th>
                                <th></th>
                                <th></th>
                                <th>2019-12-12</th>
                                <th></th>
                                <th>4546576575</th>
                                <th>Basket Ball</th>
                                <th>12345</th>
                                <th>Under 1 Year</th>
                                <th>0 Years 2 Month 27 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=19');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('19');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>11</th>
                                <th>abc</th>
                                <th>LKG(A)</th>
                                <th>Male</th>
                                <th></th>
                                <th>cdr</th>
                                <th></th>
                                <th>0005-01-28</th>
                                <th></th>
                                <th>123</th>
                                <th>football</th>
                                <th>214455</th>
                                <th>Under 2017 Year</th>
                                <th>2016 Years 1 Month 29 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=18');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('18');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>12</th>
                                <th>ajay</th>
                                <th>LKG(A)</th>
                                <th>Male</th>
                                <th></th>
                                <th>ashish</th>
                                <th></th>
                                <th>2017-01-02</th>
                                <th></th>
                                <th>46026698</th>
                                <th>football</th>
                                <th>689</th>
                                <th>Under 3 Year</th>
                                <th>2 Years 10 Month 10 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=17');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('17');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>13</th>
                                <th>ANKIT SHARMA</th>
                                <th>6TH(A)</th>
                                <th>Male</th>
                                <th></th>
                                <th>ASHOK SHARMA</th>
                                <th></th>
                                <th>2013-02-05</th>
                                <th></th>
                                <th>9856743210</th>
                                <th>football</th>
                                <th>2uy2t463y24</th>
                                <th>Under 7 Year</th>
                                <th>6 Years 9 Month 5 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=16');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('16');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>14</th>
                                <th>amit kumar</th>
                                <th>LKG(A)</th>
                                <th>Male</th>
                                <th></th>
                                <th>rahul kumar</th>
                                <th>kavita devi</th>
                                <th>2016-05-01</th>
                                <th></th>
                                <th>9826821566</th>
                                <th>फूत्बल्ल</th>
                                <th>12345</th>
                                <th>Under 4 Year</th>
                                <th>3 Years 4 Month 23 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=15');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('15');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>15</th>
                                <th>preeti chobey</th>
                                <th>2ND(A)</th>
                                <th>Male</th>
                                <th>54544</th>
                                <th>Ajeet chobey</th>
                                <th>kavita chobey</th>
                                <th>2010-02-02</th>
                                <th>544646465446</th>
                                <th>8873834601</th>
                                <th>Cricket</th>
                                <th>5456548535453658</th>
                                <th>Under 10 Year</th>
                                <th>9 Years 3 Month 7 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=14');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('14');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>16</th>
                                <th>Ranu Ghuraiya</th>
                                <th>NURSERY(A)</th>
                                <th>Male</th>
                                <th>4510004</th>
                                <th>Mahesh Ghuraiya</th>
                                <th>sawita Ghuraiya</th>
                                <th>2001-05-05</th>
                                <th></th>
                                <th>9144555977</th>
                                <th>NADI PAHAD</th>
                                <th>55231321</th>
                                <th>Under 18 Year</th>
                                <th>17 Years 7 Month 13 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=13');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('13');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>17</th>
                                <th>Bharat Agrawal</th>
                                <th>4TH(A)</th>
                                <th>Male</th>
                                <th>58996</th>
                                <th>suresh Agrawal</th>
                                <th>suman Agrawal</th>
                                <th>2011-03-03</th>
                                <th>123654789455</th>
                                <th>9685748596</th>
                                <th>kho kho</th>
                                <th>1211</th>
                                <th>Under 8 Year</th>
                                <th>7 Years 9 Month 10 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=12');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('12');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>18</th>
                                <th>sefali khaddar</th>
                                <th>1ST(A)</th>
                                <th>Female</th>
                                <th>12233</th>
                                <th>Ajeet khaddar</th>
                                <th> sonam khaddar</th>
                                <th>2015-02-03</th>
                                <th>113131345645</th>
                                <th>9144555966</th>
                                <th>Football</th>
                                <th>456</th>
                                <th>Under 4 Year</th>
                                <th>3 Years 10 Month 7 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=11');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('11');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>19</th>
                                <th>Mayank singhai </th>
                                <th>10TH(A)</th>
                                <th>Female</th>
                                <th></th>
                                <th>Diwar Singhai</th>
                                <th>Sunita singhai</th>
                                <th>2003-12-28</th>
                                <th>123657889997</th>
                                <th>9685748596</th>
                                <th>high jump</th>
                                <th>1001</th>
                                <th>Under 15 Year</th>
                                <th>14 Years 11 Month 14 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=10');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('10');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>20</th>
                                <th>Rahul thakur</th>
                                <th>NURSERY(A)</th>
                                <th>Male</th>
                                <th>4510004</th>
                                <th>Sateish thakur</th>
                                <th>komal singh thakur</th>
                                <th>2018-11-17</th>
                                <th>111256699877</th>
                                <th>8269869375</th>
                                <th>high jump</th>
                                <th>212332</th>
                                <th>Under 1 Year</th>
                                <th>0 Years 0 Month 14 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=9');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('9');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>21</th>
                                <th>kalesh sidhi </th>
                                <th>4TH(A)</th>
                                <th>Male</th>
                                <th>7878</th>
                                <th>damodar sindhi</th>
                                <th>santi devi sindhi</th>
                                <th>2012-02-01</th>
                                <th>145263655444</th>
                                <th>8269869375</th>
                                <th>Running</th>
                                <th>2234</th>
                                <th>Under 7 Year</th>
                                <th>6 Years 10 Month 5 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=8');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('8');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>22</th>
                                <th>sefali khaddar</th>
                                <th>1ST(A)</th>
                                <th>Female</th>
                                <th>12233</th>
                                <th>Ajeet khaddar</th>
                                <th> sonam khaddar</th>
                                <th>2015-02-03</th>
                                <th>113131345645</th>
                                <th>9144555966</th>
                                <th>Cricket</th>
                                <th>1526</th>
                                <th>Under 4 Year</th>
                                <th>3 Years 10 Month 2 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=7');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('7');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>23</th>
                                <th>Shalindra kumar</th>
                                <th>3RD(A)</th>
                                <th>Male</th>
                                <th>858899</th>
                                <th>Ajeet Kumar</th>
                                <th>komal kumar </th>
                                <th>2012-03-07</th>
                                <th>125699878845</th>
                                <th>9685748596</th>
                                <th>Running</th>
                                <th>323</th>
                                <th>Under 7 Year</th>
                                <th>6 Years 9 Month 0 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=6');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('6');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>24</th>
                                <th>sandeep shrivastava</th>
                                <th>7TH(A)</th>
                                <th>Male</th>
                                <th>4654564</th>
                                <th>ramkumar shrivastava</th>
                                <th>syamraani shrivastava</th>
                                <th>2010-01-05</th>
                                <th>115565465463</th>
                                <th>8269869375</th>
                                <th>Football</th>
                                <th>1231</th>
                                <th>Under 9 Year</th>
                                <th>8 Years 11 Month 2 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=5');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('5');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>25</th>
                                <th>simran shukla</th>
                                <th>9TH(A)</th>
                                <th>Male</th>
                                <th>123456</th>
                                <th>subham shukla</th>
                                <th>savaita shukla</th>
                                <th>1996-08-13</th>
                                <th>123456789654</th>
                                <th>7894561230</th>
                                <th>kho kho</th>
                                <th>12346</th>
                                <th>Under 23 Year</th>
                                <th>22 Years 3 Month 25 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=4');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('4');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>

                            <tr>
                                <th>26</th>
                                <th>ashok gahlot</th>
                                <th>NURSERY(A)</th>
                                <th>Male</th>
                                <th></th>
                                <th>s k gahlot</th>
                                <th>Raani gahlot</th>
                                <th>2000-11-01</th>
                                <th>1233433333554</th>
                                <th>7771094070</th>
                                <th>Bedminton</th>
                                <th>456</th>
                                <th>Under 19 Year</th>
                                <th>18 Years 1 Month 4 Days</th>
                                <th style="display:none;"><button type="button"
                                        onclick="post_content('sports/edit_participate','id=3');"
                                        class="btn btn-default">Edit</button></th>
                                <th><button type="button" onclick="return valid('3');"
                                        class="btn btn-default">Delete</button></th>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="col-md-12">
                <center><button type="button" class="btn btn-success"
                        onclick="get_content('sports/download_participate_list');">Print</button></center>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<script>
$(function() {
    $('#example1').DataTable()
})
</script>
@include('common.footer')