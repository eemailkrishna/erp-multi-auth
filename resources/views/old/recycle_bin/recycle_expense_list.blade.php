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
        url: access_link + "recycle_bin/recycle_expense_list_delete.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('recycle_bin/recycle_expense_list');
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
        url: access_link + "recycle_bin/recycle_expense_list_restore.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Restore', 'green');
                get_content('recycle_bin/recycle_expense_list');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Recycle Bin
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/recycle-bin')}}"><i class="fal fa-trash-alt"></i> Recycle Bin</a></li>
        <li class="active">Expense List Recycle Bin</li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Expence List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Designation</th>
                                <th>Total Amount</th>
                                <th>Restore</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>1</th>
                                <th>2019-04-13</th>
                                <th>Kailash soni</th>
                                <th>hoshangabad</th>
                                <th>Teacher</th>
                                <th>8000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('42');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('42');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>2</th>
                                <th>2019-05-02</th>
                                <th>GGG</th>
                                <th>L</th>
                                <th></th>
                                <th>5000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('46');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('46');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>3</th>
                                <th>2019-05-24</th>
                                <th>yogesh ji</th>
                                <th>181, chhatri colony, indore-kota road</th>
                                <th></th>
                                <th>1200</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('53');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('53');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>4</th>
                                <th>2019-08-14</th>
                                <th>Kailash soni</th>
                                <th>hoshangabad</th>
                                <th>Teacher</th>
                                <th>5000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('66');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('66');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>5</th>
                                <th>2019-09-25</th>
                                <th>Prateek Patel</th>
                                <th></th>
                                <th></th>
                                <th>20000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('76');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('76');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>6</th>
                                <th>2019-09-29</th>
                                <th>aashu kuware</th>
                                <th></th>
                                <th></th>
                                <th>2</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('78');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('78');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>7</th>
                                <th>2019-10-21</th>
                                <th>RAJU PATEL</th>
                                <th></th>
                                <th></th>
                                <th>500</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('88');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('88');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>8</th>
                                <th>2019-12-12</th>
                                <th>jay kishan</th>
                                <th>jktujryjryrjjjjjjjjj</th>
                                <th></th>
                                <th>5000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('107');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('107');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>9</th>
                                <th>2019-12-13</th>
                                <th>ankit jain</th>
                                <th></th>
                                <th></th>
                                <th>20000000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('108');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('108');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>10</th>
                                <th>2020-05-28</th>
                                <th>sourabh</th>
                                <th></th>
                                <th></th>
                                <th>1020</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('181');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('181');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>11</th>
                                <th>2020-05-30</th>
                                <th>Ramesh</th>
                                <th>Mahuliya</th>
                                <th></th>
                                <th>500</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('182');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('182');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>12</th>
                                <th>2020-06-05</th>
                                <th>electrical Bill</th>
                                <th></th>
                                <th></th>
                                <th>2</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('183');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('183');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>13</th>
                                <th>2020-06-11</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>6676</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('184');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('184');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>14</th>
                                <th>2020-06-12</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>200</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('185');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('185');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>15</th>
                                <th>2020-06-12</th>
                                <th>ramesh kumar</th>
                                <th></th>
                                <th></th>
                                <th>500</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('186');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('186');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>16</th>
                                <th>2020-07-01</th>
                                <th>ramesh kumar</th>
                                <th></th>
                                <th></th>
                                <th>2000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('187');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('187');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>17</th>
                                <th>2020-07-01</th>
                                <th>DEEPIKA KURREY</th>
                                <th></th>
                                <th></th>
                                <th>5000000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('188');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('188');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>18</th>
                                <th>2021-01-17</th>
                                <th>electrical Bill</th>
                                <th>SURAT</th>
                                <th></th>
                                <th>5000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('200');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('200');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>19</th>
                                <th>2021-02-01</th>
                                <th>electrical Bill</th>
                                <th>ggg</th>
                                <th></th>
                                <th>120000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('201');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('201');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>20</th>
                                <th>2021-02-16</th>
                                <th>EMILEEE</th>
                                <th></th>
                                <th></th>
                                <th>455</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('204');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('204');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>21</th>
                                <th>2021-03-11</th>
                                <th>PRAKASH KUMAWAT</th>
                                <th>KITNOD ROAD BITHUJA</th>
                                <th>Teacher</th>
                                <th>323</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('209');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('209');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>22</th>
                                <th>2021-03-22</th>
                                <th>ASHADUR RAHMAN MONDAL</th>
                                <th>SOUTH SALMARA</th>
                                <th>Principle</th>
                                <th>323</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('215');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('215');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>23</th>
                                <th>2021-08-21</th>
                                <th>PRAKASH KUMAWAT</th>
                                <th>KITNOD ROAD BITHUJA</th>
                                <th>Teacher</th>
                                <th>50000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('226');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('226');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>24</th>
                                <th>2021-08-26</th>
                                <th>bank</th>
                                <th>dsfasfdasf</th>
                                <th></th>
                                <th>5000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('228');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('228');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>25</th>
                                <th>2021-09-09</th>
                                <th>ravi </th>
                                <th></th>
                                <th></th>
                                <th>5000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('244');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('244');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>26</th>
                                <th>2021-09-19</th>
                                <th>PRAKASH KUMAWAT</th>
                                <th>KITNOD ROAD BITHUJA</th>
                                <th>Teacher</th>
                                <th>500</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('245');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('245');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>27</th>
                                <th>2021-09-20</th>
                                <th>GAMIT ILAKBHAI GENABHAI</th>
                                <th></th>
                                <th></th>
                                <th>3000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('246');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('246');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>28</th>
                                <th>2021-09-25</th>
                                <th>GAMIT ILAKBHAI GENABHAI</th>
                                <th>dsfasfdasf</th>
                                <th></th>
                                <th>5000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('247');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('247');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>29</th>
                                <th>2022-07-05</th>
                                <th>payal</th>
                                <th>atarra road baberu anda</th>
                                <th></th>
                                <th>100000000</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('286');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('286');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>30</th>
                                <th>2022-07-28</th>
                                <th>himanshi</th>
                                <th>Bhopal</th>
                                <th></th>
                                <th>852258</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('302');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('302');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>31</th>
                                <th>2022-09-05</th>
                                <th>electricityy</th>
                                <th></th>
                                <th></th>
                                <th>500</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('309');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('309');">Delete</button></td>

                            </tr>

                            <tr>
                                <th>32</th>
                                <th>2022-09-14</th>
                                <th>JAGMAL YADAV</th>
                                <th></th>
                                <th></th>
                                <th>100</th>

                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid('315');">Restore</button></td>
                                <td><button type="button" class="btn btn-danger"
                                        onclick="return valid1('315');">Delete</button></td>

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