  @include('common.header')
  @include('common.navbar')

  <section class="content-header">
      <h1>
          School Information Management <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
          <li class="active">School Information</li>
      </ol>
  </section>

  <!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-md-12">

              <!-- /.box -->

              <div <div class="box box-success">>
                  <div class="box-header with-border">

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive">
                      <table id="example2" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>Class</th>
                                  <th>Total Students</th>
                                  <th>Total Boys</th>
                                  <th>Total Girls</th>
                                  <th>Total Obc</th>
                                  <th>Total SC</th>
                                  <th>Total ST</th>
                                  <th>Total Gen</th>
                                  <th>Total Other</th>
                                  <th>Total Hosteler</th>
                                  <th>Total Bus User</th>
                                  <th>Total Paid Fee</th>
                                  <th>Total Balance</th>
                              </tr>
                          </thead>
                          <tbody>


                              <tr>
                                  <td style="background-color:#E5E8E8;color:red;"><b>All Class</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>268</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>221</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>47</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>17</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>3</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>5</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>34</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>1</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>6</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>67</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>855173</b></td>
                                  <td style="background-color:#E5E8E8;color:red;"><b>4008266</b></td>
                              </tr>


                              <tr>
                                  <td style="background-color:#85C1E9"><b>NURSERY</b></td>
                                  <td style="background-color:#85C1E9;"><b>25</b></td>
                                  <td style="background-color:#85C1E9;"><b>21</b></td>
                                  <td style="background-color:#85C1E9;"><b>4</b></td>
                                  <td style="background-color:#85C1E9;"><b>1</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>2</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>1</b></td>
                                  <td style="background-color:#85C1E9;"><b>8</b></td>

                                  <td style="background-color:#85C1E9;"><b>39263</b></td>
                                  <td style="background-color:#85C1E9;"><b>628655</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#D7DBDD"><b>LKG</b></td>
                                  <td style="background-color:#D7DBDD;"><b>17</b></td>
                                  <td style="background-color:#D7DBDD;"><b>12</b></td>
                                  <td style="background-color:#D7DBDD;"><b>5</b></td>
                                  <td style="background-color:#D7DBDD;"><b>1</b></td>
                                  <td style="background-color:#D7DBDD;"><b>0</b></td>
                                  <td style="background-color:#D7DBDD;"><b>0</b></td>
                                  <td style="background-color:#D7DBDD;"><b>4</b></td>
                                  <td style="background-color:#D7DBDD;"><b>0</b></td>
                                  <td style="background-color:#D7DBDD;"><b>3</b></td>
                                  <td style="background-color:#D7DBDD;"><b>1</b></td>

                                  <td style="background-color:#D7DBDD;"><b>41830</b></td>
                                  <td style="background-color:#D7DBDD;"><b>228023</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#DC7633"><b>UKG</b></td>
                                  <td style="background-color:#DC7633;"><b>41</b></td>
                                  <td style="background-color:#DC7633;"><b>35</b></td>
                                  <td style="background-color:#DC7633;"><b>6</b></td>
                                  <td style="background-color:#DC7633;"><b>2</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>6</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>8</b></td>

                                  <td style="background-color:#DC7633;"><b>1400</b></td>
                                  <td style="background-color:#DC7633;"><b>239350</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#F0B27A"><b>1ST</b></td>
                                  <td style="background-color:#F0B27A;"><b>14</b></td>
                                  <td style="background-color:#F0B27A;"><b>12</b></td>
                                  <td style="background-color:#F0B27A;"><b>2</b></td>
                                  <td style="background-color:#F0B27A;"><b>0</b></td>
                                  <td style="background-color:#F0B27A;"><b>0</b></td>
                                  <td style="background-color:#F0B27A;"><b>0</b></td>
                                  <td style="background-color:#F0B27A;"><b>2</b></td>
                                  <td style="background-color:#F0B27A;"><b>0</b></td>
                                  <td style="background-color:#F0B27A;"><b>1</b></td>
                                  <td style="background-color:#F0B27A;"><b>5</b></td>

                                  <td style="background-color:#F0B27A;"><b>16460</b></td>
                                  <td style="background-color:#F0B27A;"><b>130740</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#76D7C4"><b>2ND</b></td>
                                  <td style="background-color:#76D7C4;"><b>60</b></td>
                                  <td style="background-color:#76D7C4;"><b>51</b></td>
                                  <td style="background-color:#76D7C4;"><b>9</b></td>
                                  <td style="background-color:#76D7C4;"><b>5</b></td>
                                  <td style="background-color:#76D7C4;"><b>1</b></td>
                                  <td style="background-color:#76D7C4;"><b>4</b></td>
                                  <td style="background-color:#76D7C4;"><b>9</b></td>
                                  <td style="background-color:#76D7C4;"><b>0</b></td>
                                  <td style="background-color:#76D7C4;"><b>0</b></td>
                                  <td style="background-color:#76D7C4;"><b>19</b></td>

                                  <td style="background-color:#76D7C4;"><b>113990</b></td>
                                  <td style="background-color:#76D7C4;"><b>656300</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#D7BDE2"><b>3RD</b></td>
                                  <td style="background-color:#D7BDE2;"><b>8</b></td>
                                  <td style="background-color:#D7BDE2;"><b>7</b></td>
                                  <td style="background-color:#D7BDE2;"><b>1</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>1</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>2</b></td>

                                  <td style="background-color:#D7BDE2;"><b>9520</b></td>
                                  <td style="background-color:#D7BDE2;"><b>54750</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#E5E7E9"><b>4TH</b></td>
                                  <td style="background-color:#E5E7E9;"><b>14</b></td>
                                  <td style="background-color:#E5E7E9;"><b>14</b></td>
                                  <td style="background-color:#E5E7E9;"><b>0</b></td>
                                  <td style="background-color:#E5E7E9;"><b>1</b></td>
                                  <td style="background-color:#E5E7E9;"><b>0</b></td>
                                  <td style="background-color:#E5E7E9;"><b>0</b></td>
                                  <td style="background-color:#E5E7E9;"><b>1</b></td>
                                  <td style="background-color:#E5E7E9;"><b>0</b></td>
                                  <td style="background-color:#E5E7E9;"><b>0</b></td>
                                  <td style="background-color:#E5E7E9;"><b>2</b></td>

                                  <td style="background-color:#E5E7E9;"><b>15000</b></td>
                                  <td style="background-color:#E5E7E9;"><b>69200</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#F5CBA7"><b>5TH</b></td>
                                  <td style="background-color:#F5CBA7;"><b>13</b></td>
                                  <td style="background-color:#F5CBA7;"><b>13</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>2</b></td>
                                  <td style="background-color:#F5CBA7;"><b>1</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>1</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>1</b></td>
                                  <td style="background-color:#F5CBA7;"><b>3</b></td>

                                  <td style="background-color:#F5CBA7;"><b>27120</b></td>
                                  <td style="background-color:#F5CBA7;"><b>93740</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#F9E79F"><b>6TH</b></td>
                                  <td style="background-color:#F9E79F;"><b>12</b></td>
                                  <td style="background-color:#F9E79F;"><b>8</b></td>
                                  <td style="background-color:#F9E79F;"><b>4</b></td>
                                  <td style="background-color:#F9E79F;"><b>1</b></td>
                                  <td style="background-color:#F9E79F;"><b>0</b></td>
                                  <td style="background-color:#F9E79F;"><b>0</b></td>
                                  <td style="background-color:#F9E79F;"><b>1</b></td>
                                  <td style="background-color:#F9E79F;"><b>0</b></td>
                                  <td style="background-color:#F9E79F;"><b>0</b></td>
                                  <td style="background-color:#F9E79F;"><b>2</b></td>

                                  <td style="background-color:#F9E79F;"><b>33100</b></td>
                                  <td style="background-color:#F9E79F;"><b>231300</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#F0B27A"><b>7TH</b></td>
                                  <td style="background-color:#F0B27A;"><b>20</b></td>
                                  <td style="background-color:#F0B27A;"><b>10</b></td>
                                  <td style="background-color:#F0B27A;"><b>10</b></td>
                                  <td style="background-color:#F0B27A;"><b>3</b></td>
                                  <td style="background-color:#F0B27A;"><b>1</b></td>
                                  <td style="background-color:#F0B27A;"><b>1</b></td>
                                  <td style="background-color:#F0B27A;"><b>4</b></td>
                                  <td style="background-color:#F0B27A;"><b>1</b></td>
                                  <td style="background-color:#F0B27A;"><b>0</b></td>
                                  <td style="background-color:#F0B27A;"><b>9</b></td>

                                  <td style="background-color:#F0B27A;"><b>434160</b></td>
                                  <td style="background-color:#F0B27A;"><b>242100</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#76D7C4"><b>8TH</b></td>
                                  <td style="background-color:#76D7C4;"><b>29</b></td>
                                  <td style="background-color:#76D7C4;"><b>25</b></td>
                                  <td style="background-color:#76D7C4;"><b>4</b></td>
                                  <td style="background-color:#76D7C4;"><b>0</b></td>
                                  <td style="background-color:#76D7C4;"><b>0</b></td>
                                  <td style="background-color:#76D7C4;"><b>0</b></td>
                                  <td style="background-color:#76D7C4;"><b>2</b></td>
                                  <td style="background-color:#76D7C4;"><b>0</b></td>
                                  <td style="background-color:#76D7C4;"><b>0</b></td>
                                  <td style="background-color:#76D7C4;"><b>4</b></td>

                                  <td style="background-color:#76D7C4;"><b>2950</b></td>
                                  <td style="background-color:#76D7C4;"><b>1148708</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#85C1E9"><b>9TH</b></td>
                                  <td style="background-color:#85C1E9;"><b>6</b></td>
                                  <td style="background-color:#85C1E9;"><b>6</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>1</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>
                                  <td style="background-color:#85C1E9;"><b>0</b></td>

                                  <td style="background-color:#85C1E9;"><b>3240</b></td>
                                  <td style="background-color:#85C1E9;"><b>72300</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#DC7633"><b>10TH</b></td>
                                  <td style="background-color:#DC7633;"><b>1</b></td>
                                  <td style="background-color:#DC7633;"><b>1</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>1</b></td>

                                  <td style="background-color:#DC7633;"><b>0</b></td>
                                  <td style="background-color:#DC7633;"><b>41750</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#D7BDE2"><b>11TH</b></td>
                                  <td style="background-color:#D7BDE2;"><b>5</b></td>
                                  <td style="background-color:#D7BDE2;"><b>3</b></td>
                                  <td style="background-color:#D7BDE2;"><b>2</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>1</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>0</b></td>
                                  <td style="background-color:#D7BDE2;"><b>2</b></td>

                                  <td style="background-color:#D7BDE2;"><b>117140</b></td>
                                  <td style="background-color:#D7BDE2;"><b>132950</b></td>
                              </tr>

                              <tr>
                                  <td style="background-color:#F5CBA7"><b>12TH</b></td>
                                  <td style="background-color:#F5CBA7;"><b>3</b></td>
                                  <td style="background-color:#F5CBA7;"><b>3</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>1</b></td>

                                  <td style="background-color:#F5CBA7;"><b>0</b></td>
                                  <td style="background-color:#F5CBA7;"><b>38400</b></td>
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
    $('#example2').DataTable({
        'paging': false,
        'lengthChange': false,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': false
    })
})
  </script>
  @include('common.footer')