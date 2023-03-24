 @include('common.header')
 @include('common.navbar')
 <script>
function for_print() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
 </script>

 <section class="content-header">
     <h1>
         Login Management
     </h1>
     <ol class="breadcrumb">
         <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
         <li class="active"><i class="fa fa-list"></i>Login List</li>
     </ol>
 </section>

 <section class="content">
     <div class="box box-success ">
         <div class="box-header with-border">
             <h3 class="box-title">Active User List</h3>
         </div>
         <br>
         <div class="box-body table-responsive">
             <div class="col-md-12">
                 <div class="col-md-6">
                     <center><button type="button" class="btn btn-primary"
                             onclick="exportTableToExcel('printTable', 'Active Student List')"><i class="fa fa-print"
                                 aria-hidden="true"></i>Print In Excel</button></center>
                 </div>
                 <div class="col-md-6">
                     <center><button type="button" class="btn btn-success" onclick="for_print();"><i class="fa fa-print"
                                 aria-hidden="true"></i>Print In Pdf</button></center>
                 </div>
             </div> <br>
         </div>
         <br>
         <div class="box-body table-responsive">
             <div class="col-md-12">
                 <div class="box-body table-responsive" id="printTable">

                     <table id="example1" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>S.no.</th>
                                 <th>Student Name</th>
                                 <th>Class</th>
                                 <th>Section</th>

                                 <th>Login ID</th>
                                 <th>Login Time</th>
                                 <th>Login Date</th>

                             </tr>
                         </thead>

                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>Rahul Kumar</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>05:00:32pm</td>
                                 <td>30-11-2022</td>
                                 <td>2201086</td>

                             </tr>
                             <tr>
                                 <td>2</td>
                                 <td>Kartik Nishad</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>02:34:50pm</td>
                                 <td>09-11-2022</td>
                                 <td>2201041</td>

                             </tr>
                             <tr>
                                 <td>3</td>
                                 <td>Aamna Hussain</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>04:17:38pm</td>
                                 <td>08-11-2022</td>
                                 <td>2201009</td>

                             </tr>
                             <tr>
                                 <td>4</td>
                                 <td>ask</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>01:25:07pm</td>
                                 <td>02-11-2022</td>
                                 <td>2201048</td>

                             </tr>
                             <tr>
                                 <td>5</td>
                                 <td>ajay</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>06:41:05pm</td>
                                 <td>01-11-2022</td>
                                 <td>2201045</td>

                             </tr>
                             <tr>
                                 <td>6</td>
                                 <td>ram</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:08:02pm</td>
                                 <td>29-10-2022</td>
                                 <td>2201043</td>

                             </tr>
                             <tr>
                                 <td>7</td>
                                 <td>RAJ MOHAN</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>12:40:26pm</td>
                                 <td>17-10-2022</td>
                                 <td>2201027</td>

                             </tr>
                             <tr>
                                 <td>8</td>
                                 <td>ANJITA BANJARE</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>04:19:00pm</td>
                                 <td>13-10-2022</td>
                                 <td>2201023</td>

                             </tr>
                             <tr>
                                 <td>9</td>
                                 <td>Uttam </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:06:09pm</td>
                                 <td>10-10-2022</td>
                                 <td>2201018</td>

                             </tr>
                             <tr>
                                 <td>10</td>
                                 <td>shamli mashram </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>04:00:12pm</td>
                                 <td>08-09-2022</td>
                                 <td>2200983</td>

                             </tr>
                             <tr>
                                 <td>11</td>
                                 <td>Prashant </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>02:42:14pm</td>
                                 <td>05-09-2022</td>
                                 <td>2200975</td>

                             </tr>
                             <tr>
                                 <td>12</td>
                                 <td>पंकज कुमार</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:43:52pm</td>
                                 <td>03-09-2022</td>
                                 <td>2200884</td>

                             </tr>
                             <tr>
                                 <td>13</td>
                                 <td>zeba </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:37:50pm</td>
                                 <td>31-08-2022</td>
                                 <td>2200967</td>

                             </tr>
                             <tr>
                                 <td>14</td>
                                 <td>abc</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>05:14:32pm</td>
                                 <td>31-08-2022</td>
                                 <td>2200966</td>

                             </tr>
                             <tr>
                                 <td>15</td>
                                 <td>AADITYA SINGH</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:57:33am</td>
                                 <td>30-08-2022</td>
                                 <td>2200964</td>

                             </tr>
                             <tr>
                                 <td>16</td>
                                 <td>UMESH KUMAR KUSHWAHA</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>01:56:26pm</td>
                                 <td>25-08-2022</td>
                                 <td>2200960</td>

                             </tr>
                             <tr>
                                 <td>17</td>
                                 <td>JAMES BOND</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>07:45:37pm</td>
                                 <td>21-08-2022</td>
                                 <td>2200956</td>

                             </tr>
                             <tr>
                                 <td>18</td>
                                 <td>PUSHKAR</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:18:48pm</td>
                                 <td>18-08-2022</td>
                                 <td>2200952</td>

                             </tr>
                             <tr>
                                 <td>19</td>
                                 <td>zeba </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>05:13:13pm</td>
                                 <td>06-08-2022</td>
                                 <td>2200950</td>

                             </tr>
                             <tr>
                                 <td>20</td>
                                 <td>Neeraj Agrawal</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:52:54pm</td>
                                 <td>03-08-2022</td>
                                 <td>2200940</td>

                             </tr>
                             <tr>
                                 <td>21</td>
                                 <td>Aayan khan</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:09:10pm</td>
                                 <td>31-07-2022</td>
                                 <td>2200935</td>

                             </tr>
                             <tr>
                                 <td>22</td>
                                 <td>mehnaz </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>01:02:11pm</td>
                                 <td>29-07-2022</td>
                                 <td>2200921</td>

                             </tr>
                             <tr>
                                 <td>23</td>
                                 <td>Prashant kumar</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>01:20:34pm</td>
                                 <td>26-07-2022</td>
                                 <td>2200914</td>

                             </tr>
                             <tr>
                                 <td>24</td>
                                 <td>Sunny</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:18:40am</td>
                                 <td>23-07-2022</td>
                                 <td>2200905</td>

                             </tr>
                             <tr>
                                 <td>25</td>
                                 <td>krishna</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:42:29am</td>
                                 <td>21-07-2022</td>
                                 <td>2200899</td>

                             </tr>
                             <tr>
                                 <td>26</td>
                                 <td>tapu </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>02:08:52pm</td>
                                 <td>20-07-2022</td>
                                 <td>2200898</td>

                             </tr>
                             <tr>
                                 <td>27</td>
                                 <td>aashish xyz </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>12:13:39pm</td>
                                 <td>15-07-2022</td>
                                 <td>2200881</td>

                             </tr>
                             <tr>
                                 <td>28</td>
                                 <td>aashish</td>
                                 <td>NURSERY</td>
                                 <td>B</td>
                                 <td>03:33:39pm</td>
                                 <td>13-07-2022</td>
                                 <td>2200875</td>

                             </tr>
                             <tr>
                                 <td>29</td>
                                 <td>aashish</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>12:48:27pm</td>
                                 <td>13-07-2022</td>
                                 <td>2200873</td>

                             </tr>
                             <tr>
                                 <td>30</td>
                                 <td>poonam</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>04:26:17pm</td>
                                 <td>08-07-2022</td>
                                 <td>2200860</td>

                             </tr>
                             <tr>
                                 <td>31</td>
                                 <td>Testing</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>02:23:50pm</td>
                                 <td>04-07-2022</td>
                                 <td>2200853</td>

                             </tr>
                             <tr>
                                 <td>32</td>
                                 <td>dsafsdf</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>06:03:11pm</td>
                                 <td>01-07-2022</td>
                                 <td>2200848</td>

                             </tr>
                             <tr>
                                 <td>33</td>
                                 <td>harika</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>06:32:33pm</td>
                                 <td>28-06-2022</td>
                                 <td>2200839</td>

                             </tr>
                             <tr>
                                 <td>34</td>
                                 <td>D</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:37:20pm</td>
                                 <td>22-06-2022</td>
                                 <td>2200829</td>

                             </tr>
                             <tr>
                                 <td>35</td>
                                 <td>Sagar Agarwal</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>04:17:11pm</td>
                                 <td>22-06-2022</td>
                                 <td>2200826</td>

                             </tr>
                             <tr>
                                 <td>36</td>
                                 <td>Rahul</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:54:38am</td>
                                 <td>16-06-2022</td>
                                 <td>2200809</td>

                             </tr>
                             <tr>
                                 <td>37</td>
                                 <td>SHIVANSH RAWAT</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:55:22am</td>
                                 <td>03-06-2022</td>
                                 <td>2200800</td>

                             </tr>
                             <tr>
                                 <td>38</td>
                                 <td>Druwa Ganesh Chaudhari</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>01:14:02pm</td>
                                 <td>28-05-2022</td>
                                 <td>2200795</td>

                             </tr>
                             <tr>
                                 <td>39</td>
                                 <td>yashi</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:28:18am</td>
                                 <td>19-05-2022</td>
                                 <td>2200782</td>

                             </tr>
                             <tr>
                                 <td>40</td>
                                 <td>raman</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>04:37:05pm</td>
                                 <td>04-05-2022</td>
                                 <td>2200770</td>

                             </tr>
                             <tr>
                                 <td>41</td>
                                 <td>Anu</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:25:23am</td>
                                 <td>27-04-2022</td>
                                 <td>2200766</td>

                             </tr>
                             <tr>
                                 <td>42</td>
                                 <td>rakesh</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:08:03pm</td>
                                 <td>25-04-2022</td>
                                 <td>2200761</td>

                             </tr>
                             <tr>
                                 <td>43</td>
                                 <td>INAMUR RAHMAN</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:38:48am</td>
                                 <td>20-04-2022</td>
                                 <td>2200759</td>

                             </tr>
                             <tr>
                                 <td>44</td>
                                 <td>Urvi sen</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:01:04pm</td>
                                 <td>16-04-2022</td>
                                 <td>2200752</td>

                             </tr>
                             <tr>
                                 <td>45</td>
                                 <td>Vaishnavi Thakur</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:17:35am</td>
                                 <td>15-04-2022</td>
                                 <td>2200747</td>

                             </tr>
                             <tr>
                                 <td>46</td>
                                 <td>sanam karn</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:55:38pm</td>
                                 <td>04-04-2022</td>
                                 <td>2200730</td>

                             </tr>
                             <tr>
                                 <td>47</td>
                                 <td>SANJAY KUMAR</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:35:47pm</td>
                                 <td>03-04-2022</td>
                                 <td>2200724</td>

                             </tr>
                             <tr>
                                 <td>48</td>
                                 <td>xghkjh</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:56:53am</td>
                                 <td>01-04-2022</td>
                                 <td>2200720</td>

                             </tr>
                             <tr>
                                 <td>49</td>
                                 <td>aashish ray</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:03:46pm</td>
                                 <td>30-03-2022</td>
                                 <td>2200718</td>

                             </tr>
                             <tr>
                                 <td>50</td>
                                 <td>vishal jha</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:31:12am</td>
                                 <td>28-03-2022</td>
                                 <td>2200710</td>

                             </tr>
                             <tr>
                                 <td>51</td>
                                 <td>kunal jha</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:11:40am</td>
                                 <td>28-03-2022</td>
                                 <td>2200707</td>

                             </tr>
                             <tr>
                                 <td>52</td>
                                 <td>aashu </td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:09:42pm</td>
                                 <td>25-03-2022</td>
                                 <td>2200703</td>

                             </tr>
                             <tr>
                                 <td>53</td>
                                 <td>RAM</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:53:58pm</td>
                                 <td>23-03-2022</td>
                                 <td>2200701</td>

                             </tr>
                             <tr>
                                 <td>54</td>
                                 <td>akas kumar</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>12:54:53pm</td>
                                 <td>22-03-2022</td>
                                 <td>2200700</td>

                             </tr>
                             <tr>
                                 <td>55</td>
                                 <td>NIKHIL DINESH PADVI</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:19:59am</td>
                                 <td>17-03-2022</td>
                                 <td>2200696</td>

                             </tr>
                             <tr>
                                 <td>56</td>
                                 <td>Alisha</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:27:37pm</td>
                                 <td>16-03-2022</td>
                                 <td>2200694</td>

                             </tr>
                             <tr>
                                 <td>57</td>
                                 <td>RAHUL</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>02:30:43pm</td>
                                 <td>16-03-2022</td>
                                 <td>2200693</td>

                             </tr>
                             <tr>
                                 <td>58</td>
                                 <td>Ravi</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:43:34am</td>
                                 <td>16-03-2022</td>
                                 <td>2200691</td>

                             </tr>
                             <tr>
                                 <td>59</td>
                                 <td>GGDFGFDGFDG</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>06:24:10pm</td>
                                 <td>14-03-2022</td>
                                 <td>2200681</td>

                             </tr>
                             <tr>
                                 <td>60</td>
                                 <td>Bhavesh Arvind Padvi</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:17:11pm</td>
                                 <td>06-03-2022</td>
                                 <td>2200666</td>

                             </tr>
                             <tr>
                                 <td>61</td>
                                 <td>ARPAN NANDEWAR</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:12:23pm</td>
                                 <td>26-02-2022</td>
                                 <td>2200657</td>

                             </tr>
                             <tr>
                                 <td>62</td>
                                 <td>Radha Kumari</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>01:38:25am</td>
                                 <td>26-02-2022</td>
                                 <td>2200656</td>

                             </tr>
                             <tr>
                                 <td>63</td>
                                 <td>ABC</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:49:10pm</td>
                                 <td>22-02-2022</td>
                                 <td>2200652</td>

                             </tr>
                             <tr>
                                 <td>64</td>
                                 <td>RIYA DAS</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:32:25pm</td>
                                 <td>17-02-2022</td>
                                 <td>2200651</td>

                             </tr>
                             <tr>
                                 <td>65</td>
                                 <td>Bijoy</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:44:35pm</td>
                                 <td>10-02-2022</td>
                                 <td>2200648</td>

                             </tr>
                             <tr>
                                 <td>66</td>
                                 <td>Sikdar</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>01:56:58pm</td>
                                 <td>09-02-2022</td>
                                 <td>2200647</td>

                             </tr>
                             <tr>
                                 <td>67</td>
                                 <td>Sikdar</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:14:44am</td>
                                 <td>09-02-2022</td>
                                 <td>2200646</td>

                             </tr>
                             <tr>
                                 <td>68</td>
                                 <td>SK Thakur</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:42:27pm</td>
                                 <td>08-02-2022</td>
                                 <td>2200644</td>

                             </tr>
                             <tr>
                                 <td>69</td>
                                 <td>sushant</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>01:06:00am</td>
                                 <td>31-01-2022</td>
                                 <td>2200628</td>

                             </tr>
                             <tr>
                                 <td>70</td>
                                 <td>Anurag Singh </td>
                                 <td>2ND</td>
                                 <td>A</td>
                                 <td>11:52:17am</td>
                                 <td>17-07-2021</td>
                                 <td>2000137(Website)</td>

                             </tr>
                             <tr>
                                 <td>71</td>
                                 <td>Arvind</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:04:27am</td>
                                 <td>14-07-2021</td>
                                 <td>2100480(Website)</td>

                             </tr>
                             <tr>
                                 <td>72</td>
                                 <td>Anurag Singh </td>
                                 <td>2ND</td>
                                 <td>A</td>
                                 <td>04:18:47pm</td>
                                 <td>23-06-2021</td>
                                 <td>2000137(Android App)</td>

                             </tr>
                             <tr>
                                 <td>73</td>
                                 <td>SIDDHANT BARETH</td>
                                 <td>5TH</td>
                                 <td>A</td>
                                 <td>08:10:47am</td>
                                 <td>18-06-2021</td>
                                 <td>2000109</td>

                             </tr>
                             <tr>
                                 <td>74</td>
                                 <td>Anil</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>07:03:37am</td>
                                 <td>18-06-2021</td>
                                 <td>2000216</td>

                             </tr>
                             <tr>
                                 <td>75</td>
                                 <td>b</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>02:21:27pm</td>
                                 <td>16-06-2021</td>
                                 <td>2000210</td>

                             </tr>
                             <tr>
                                 <td>76</td>
                                 <td>Jayssh</td>
                                 <td>3RD</td>
                                 <td>A</td>
                                 <td>12:23:00pm</td>
                                 <td>16-06-2021</td>
                                 <td>2100407</td>

                             </tr>
                             <tr>
                                 <td>77</td>
                                 <td>Aman</td>
                                 <td>3RD</td>
                                 <td>A</td>
                                 <td>12:10:14pm</td>
                                 <td>16-06-2021</td>
                                 <td>2100471</td>

                             </tr>
                             <tr>
                                 <td>78</td>
                                 <td>Arham Patel</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>11:35:28am</td>
                                 <td>16-06-2021</td>
                                 <td>2000289</td>

                             </tr>
                             <tr>
                                 <td>79</td>
                                 <td>alok</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>11:21:27am</td>
                                 <td>16-06-2021</td>
                                 <td>2000147</td>

                             </tr>
                             <tr>
                                 <td>80</td>
                                 <td>Anurag Singh </td>
                                 <td>2ND</td>
                                 <td>A</td>
                                 <td>11:07:18am</td>
                                 <td>16-06-2021</td>
                                 <td>2000137</td>

                             </tr>
                             <tr>
                                 <td>81</td>
                                 <td>Akash kumar</td>
                                 <td>LKG</td>
                                 <td>A</td>
                                 <td>11:35:30am</td>
                                 <td>24-05-2021</td>
                                 <td>2100441</td>

                             </tr>
                             <tr>
                                 <td>82</td>
                                 <td>cddf</td>
                                 <td>2ND</td>
                                 <td>A</td>
                                 <td>11:07:37am</td>
                                 <td>05-05-2021</td>
                                 <td>2100437</td>

                             </tr>
                             <tr>
                                 <td>83</td>
                                 <td>Farhan</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>03:59:30pm</td>
                                 <td>05-05-2021</td>
                                 <td>2000150(Android App)</td>

                             </tr>
                             <tr>
                                 <td>84</td>
                                 <td>Farhan</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>10:29:29am</td>
                                 <td>05-05-2021</td>
                                 <td>2000150</td>

                             </tr>
                             <tr>
                                 <td>85</td>
                                 <td>ajit</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:19:56pm</td>
                                 <td>05-05-2021</td>
                                 <td>2000296(Android App)</td>

                             </tr>
                             <tr>
                                 <td>86</td>
                                 <td>ajit</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>09:49:53am</td>
                                 <td>05-05-2021</td>
                                 <td>2000296</td>

                             </tr>
                             <tr>
                                 <td>87</td>
                                 <td>RAVINDER SINGH</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:31:48am</td>
                                 <td>29-04-2021</td>
                                 <td>2000204(Web Mobile)</td>

                             </tr>
                             <tr>
                                 <td>88</td>
                                 <td>RAVINDER SINGH</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:42:02am</td>
                                 <td>19-04-2021</td>
                                 <td>2000204(Website)</td>

                             </tr>
                             <tr>
                                 <td>89</td>
                                 <td>KAJAL KUMARI</td>
                                 <td>5TH</td>
                                 <td>A</td>
                                 <td>07:07:22pm</td>
                                 <td>10-04-2021</td>
                                 <td>2000361(Android App)</td>

                             </tr>
                             <tr>
                                 <td>90</td>
                                 <td>KAJAL KUMARI</td>
                                 <td>5TH</td>
                                 <td>A</td>
                                 <td>01:37:22pm</td>
                                 <td>10-04-2021</td>
                                 <td>2000361</td>

                             </tr>
                             <tr>
                                 <td>91</td>
                                 <td>Amit kumar</td>
                                 <td>10TH</td>
                                 <td>A</td>
                                 <td>07:02:30pm</td>
                                 <td>10-04-2021</td>
                                 <td>2000321(Android App)</td>

                             </tr>
                             <tr>
                                 <td>92</td>
                                 <td>Amit kumar</td>
                                 <td>10TH</td>
                                 <td>A</td>
                                 <td>01:32:29pm</td>
                                 <td>10-04-2021</td>
                                 <td>2000321</td>

                             </tr>
                             <tr>
                                 <td>93</td>
                                 <td>AHMAD NASAR</td>
                                 <td>NURSERY</td>
                                 <td>B</td>
                                 <td>11:30:34am</td>
                                 <td>10-04-2021</td>
                                 <td>2100439(Android App)</td>

                             </tr>
                             <tr>
                                 <td>94</td>
                                 <td>AHMAD NASAR</td>
                                 <td>NURSERY</td>
                                 <td>B</td>
                                 <td>06:00:32am</td>
                                 <td>10-04-2021</td>
                                 <td>2100439</td>

                             </tr>
                             <tr>
                                 <td>95</td>
                                 <td>RAVINDER SINGH</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:12:01am</td>
                                 <td>10-04-2021</td>
                                 <td>2000204</td>

                             </tr>
                             <tr>
                                 <td>96</td>
                                 <td>Testing student</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:54:34am</td>
                                 <td>05-04-2021</td>
                                 <td>2100493</td>

                             </tr>
                             <tr>
                                 <td>97</td>
                                 <td>TOLESH KUAMAR SAHU</td>
                                 <td>7TH</td>
                                 <td>A</td>
                                 <td>11:05:14am</td>
                                 <td>02-04-2021</td>
                                 <td>2000118(Android App)</td>

                             </tr>
                             <tr>
                                 <td>98</td>
                                 <td>TOLESH KUAMAR SAHU</td>
                                 <td>7TH</td>
                                 <td>A</td>
                                 <td>05:35:13am</td>
                                 <td>02-04-2021</td>
                                 <td>2000118</td>

                             </tr>
                             <tr>
                                 <td>99</td>
                                 <td>Abhay</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:54:12pm</td>
                                 <td>26-03-2021</td>
                                 <td>2100468(Android App)</td>

                             </tr>
                             <tr>
                                 <td>100</td>
                                 <td>Abhay</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:24:11am</td>
                                 <td>26-03-2021</td>
                                 <td>2100468</td>

                             </tr>
                             <tr>
                                 <td>101</td>
                                 <td>abhiyank</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>03:52:12pm</td>
                                 <td>26-03-2021</td>
                                 <td>2000138(Android App)</td>

                             </tr>
                             <tr>
                                 <td>102</td>
                                 <td>abhiyank</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:22:11am</td>
                                 <td>26-03-2021</td>
                                 <td>2000138</td>

                             </tr>
                             <tr>
                                 <td>103</td>
                                 <td>a</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>05:26:58pm</td>
                                 <td>25-03-2021</td>
                                 <td>2100464(Android App)</td>

                             </tr>
                             <tr>
                                 <td>104</td>
                                 <td>a</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:56:57am</td>
                                 <td>25-03-2021</td>
                                 <td>2100464</td>

                             </tr>
                             <tr>
                                 <td>105</td>
                                 <td>AAISHA KURREY</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>05:25:55pm</td>
                                 <td>25-03-2021</td>
                                 <td>1900229(Android App)</td>

                             </tr>
                             <tr>
                                 <td>106</td>
                                 <td>AAISHA KURREY</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:55:54am</td>
                                 <td>25-03-2021</td>
                                 <td>1900229</td>

                             </tr>
                             <tr>
                                 <td>107</td>
                                 <td>Ankit kumar</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>01:33:31pm</td>
                                 <td>13-01-2021</td>
                                 <td>2000288(Android App)</td>

                             </tr>
                             <tr>
                                 <td>108</td>
                                 <td>Ankit kumar</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>01:33:30pm</td>
                                 <td>13-01-2021</td>
                                 <td>2000288</td>

                             </tr>
                             <tr>
                                 <td>109</td>
                                 <td>DEEPIKA CHAUHAN</td>
                                 <td>4TH</td>
                                 <td>A</td>
                                 <td>10:03:33am</td>
                                 <td>24-12-2020</td>
                                 <td>2000110(Android App)</td>

                             </tr>
                             <tr>
                                 <td>110</td>
                                 <td>DEEPIKA CHAUHAN</td>
                                 <td>4TH</td>
                                 <td>A</td>
                                 <td>10:03:33am</td>
                                 <td>24-12-2020</td>
                                 <td>2000110</td>

                             </tr>
                             <tr>
                                 <td>111</td>
                                 <td>Ankit kumar</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>11:39:40am</td>
                                 <td>20-12-2020</td>
                                 <td>2000288(Website)</td>

                             </tr>
                             <tr>
                                 <td>112</td>
                                 <td>ABDUL KAREEM </td>
                                 <td>LKG</td>
                                 <td>A</td>
                                 <td>03:09:51pm</td>
                                 <td>18-12-2020</td>
                                 <td>2000330(Android App)</td>

                             </tr>
                             <tr>
                                 <td>113</td>
                                 <td>ABDUL KAREEM </td>
                                 <td>LKG</td>
                                 <td>A</td>
                                 <td>03:09:51pm</td>
                                 <td>18-12-2020</td>
                                 <td>2000330</td>

                             </tr>
                             <tr>
                                 <td>114</td>
                                 <td>OMPRAKASH CHAUHAN</td>
                                 <td>4TH</td>
                                 <td>A</td>
                                 <td>04:29:33pm</td>
                                 <td>16-12-2020</td>
                                 <td>2000108(Android App)</td>

                             </tr>
                             <tr>
                                 <td>115</td>
                                 <td>OMPRAKASH CHAUHAN</td>
                                 <td>4TH</td>
                                 <td>A</td>
                                 <td>04:29:32pm</td>
                                 <td>16-12-2020</td>
                                 <td>2000108</td>

                             </tr>
                             <tr>
                                 <td>116</td>
                                 <td>Aaysha Bano</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:47:43am</td>
                                 <td>28-10-2020</td>
                                 <td>2000268(Website)</td>

                             </tr>
                             <tr>
                                 <td>117</td>
                                 <td>Abhijeet Thakur</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>05:54:49pm</td>
                                 <td>15-10-2020</td>
                                 <td>2000129(Website)</td>

                             </tr>
                             <tr>
                                 <td>118</td>
                                 <td>Abhijeet Thakur</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>02:44:23pm</td>
                                 <td>15-10-2020</td>
                                 <td>2000129(Web Mobile)</td>

                             </tr>
                             <tr>
                                 <td>119</td>
                                 <td>Abhijeet Thakur</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:25:12pm</td>
                                 <td>15-09-2020</td>
                                 <td>2000129(Android App)</td>

                             </tr>
                             <tr>
                                 <td>120</td>
                                 <td>Abhijeet Thakur</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:25:11pm</td>
                                 <td>15-09-2020</td>
                                 <td>2000129</td>

                             </tr>
                             <tr>
                                 <td>121</td>
                                 <td>Dyaneshwari</td>
                                 <td>10TH</td>
                                 <td>A</td>
                                 <td>04:16:07pm</td>
                                 <td>13-09-2020</td>
                                 <td>2000215(Android App)</td>

                             </tr>
                             <tr>
                                 <td>122</td>
                                 <td>Dyaneshwari</td>
                                 <td>10TH</td>
                                 <td>A</td>
                                 <td>04:16:06pm</td>
                                 <td>13-09-2020</td>
                                 <td>2000215</td>

                             </tr>
                             <tr>
                                 <td>123</td>
                                 <td>Ayush</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>07:06:06pm</td>
                                 <td>10-09-2020</td>
                                 <td>2000217(Android App)</td>

                             </tr>
                             <tr>
                                 <td>124</td>
                                 <td>Ayush</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>07:06:05pm</td>
                                 <td>10-09-2020</td>
                                 <td>2000217</td>

                             </tr>
                             <tr>
                                 <td>125</td>
                                 <td>MUZAFFAR HUSSAIN</td>
                                 <td>10TH</td>
                                 <td>A</td>
                                 <td>03:19:02pm</td>
                                 <td>08-09-2020</td>
                                 <td>2000151(Website)</td>

                             </tr>
                             <tr>
                                 <td>126</td>
                                 <td>ANIL KUMAR</td>
                                 <td>12TH</td>
                                 <td>A</td>
                                 <td>02:21:14pm</td>
                                 <td>28-08-2020</td>
                                 <td>2000222(Android App)</td>

                             </tr>
                             <tr>
                                 <td>127</td>
                                 <td>ANIL KUMAR</td>
                                 <td>12TH</td>
                                 <td>A</td>
                                 <td>02:21:13pm</td>
                                 <td>28-08-2020</td>
                                 <td>2000222</td>

                             </tr>
                             <tr>
                                 <td>128</td>
                                 <td>Abhijeet Thakur</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:23:30am</td>
                                 <td>22-08-2020</td>
                                 <td>2000130(Android App)</td>

                             </tr>
                             <tr>
                                 <td>129</td>
                                 <td>Abhijeet Thakur</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>08:23:30am</td>
                                 <td>22-08-2020</td>
                                 <td>2000130</td>

                             </tr>
                             <tr>
                                 <td>130</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td>(Website)</td>

                             </tr>
                             <tr>
                                 <td>131</td>
                                 <td>nikita </td>
                                 <td>LKG</td>
                                 <td>A</td>
                                 <td>12:28:30pm</td>
                                 <td>31-07-2020</td>
                                 <td>2000239(Android App)</td>

                             </tr>
                             <tr>
                                 <td>132</td>
                                 <td>nikita </td>
                                 <td>LKG</td>
                                 <td>A</td>
                                 <td>12:28:29pm</td>
                                 <td>31-07-2020</td>
                                 <td>2000239</td>

                             </tr>
                             <tr>
                                 <td>133</td>
                                 <td>Adil Zamal</td>
                                 <td>9TH</td>
                                 <td>A</td>
                                 <td>12:04:08pm</td>
                                 <td>31-07-2020</td>
                                 <td>2000267(Android App)</td>

                             </tr>
                             <tr>
                                 <td>134</td>
                                 <td>Adil Zamal</td>
                                 <td>9TH</td>
                                 <td>A</td>
                                 <td>12:04:08pm</td>
                                 <td>31-07-2020</td>
                                 <td>2000267</td>

                             </tr>
                             <tr>
                                 <td>135</td>
                                 <td>Aaysha Bano</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>05:59:49pm</td>
                                 <td>22-07-2020</td>
                                 <td>2000268(Android App)</td>

                             </tr>
                             <tr>
                                 <td>136</td>
                                 <td>Aaysha Bano</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>05:59:48pm</td>
                                 <td>22-07-2020</td>
                                 <td>2000268</td>

                             </tr>
                             <tr>
                                 <td>137</td>
                                 <td>Sumit</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>11:06:22am</td>
                                 <td>21-07-2020</td>
                                 <td>2000207(Android App)</td>

                             </tr>
                             <tr>
                                 <td>138</td>
                                 <td>Sumit</td>
                                 <td>1ST</td>
                                 <td>A</td>
                                 <td>11:06:22am</td>
                                 <td>21-07-2020</td>
                                 <td>2000207</td>

                             </tr>
                             <tr>
                                 <td>139</td>
                                 <td>Ram</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>06:57:07pm</td>
                                 <td>19-07-2020</td>
                                 <td>2000211(Android App)</td>

                             </tr>
                             <tr>
                                 <td>140</td>
                                 <td>Ram</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>06:57:06pm</td>
                                 <td>19-07-2020</td>
                                 <td>2000211</td>

                             </tr>
                             <tr>
                                 <td>141</td>
                                 <td>x</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>06:56:30pm</td>
                                 <td>19-07-2020</td>
                                 <td>2000209(Android App)</td>

                             </tr>
                             <tr>
                                 <td>142</td>
                                 <td>x</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>06:56:30pm</td>
                                 <td>19-07-2020</td>
                                 <td>2000209</td>

                             </tr>
                             <tr>
                                 <td>143</td>
                                 <td>S</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>12:02:20pm</td>
                                 <td>19-07-2020</td>
                                 <td>2000142(Android App)</td>

                             </tr>
                             <tr>
                                 <td>144</td>
                                 <td>S</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>12:02:20pm</td>
                                 <td>19-07-2020</td>
                                 <td>2000142</td>

                             </tr>
                             <tr>
                                 <td>145</td>
                                 <td>swaroop satish kalinge</td>
                                 <td>3RD</td>
                                 <td>A</td>
                                 <td>01:56:20pm</td>
                                 <td>10-07-2020</td>
                                 <td>2000154(Android App)</td>

                             </tr>
                             <tr>
                                 <td>146</td>
                                 <td>swaroop satish kalinge</td>
                                 <td>3RD</td>
                                 <td>A</td>
                                 <td>01:56:20pm</td>
                                 <td>10-07-2020</td>
                                 <td>2000154</td>

                             </tr>
                             <tr>
                                 <td>147</td>
                                 <td>efewf</td>
                                 <td>2ND</td>
                                 <td>A</td>
                                 <td>01:48:49pm</td>
                                 <td>10-07-2020</td>
                                 <td>2000227</td>

                             </tr>
                             <tr>
                                 <td>148</td>
                                 <td>MD JAHIR KHAN</td>
                                 <td>9TH</td>
                                 <td>A</td>
                                 <td>01:26:50pm</td>
                                 <td>10-07-2020</td>
                                 <td>2000140(Android App)</td>

                             </tr>
                             <tr>
                                 <td>149</td>
                                 <td>MD JAHIR KHAN</td>
                                 <td>9TH</td>
                                 <td>A</td>
                                 <td>01:25:38pm</td>
                                 <td>10-07-2020</td>
                                 <td>2000140</td>

                             </tr>
                             <tr>
                                 <td>150</td>
                                 <td>efewf</td>
                                 <td>2ND</td>
                                 <td>A</td>
                                 <td>10:51:41pm</td>
                                 <td>07-07-2020</td>
                                 <td>2000227(Android App)</td>

                             </tr>
                             <tr>
                                 <td>151</td>
                                 <td>ashish kumar yadav</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>07:25:41am</td>
                                 <td>04-07-2020</td>
                                 <td>2000122(Web Mobile)</td>

                             </tr>
                             <tr>
                                 <td>152</td>
                                 <td>ashish kumar yadav</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:01:28pm</td>
                                 <td>03-07-2020</td>
                                 <td>2000122(Website)</td>

                             </tr>
                             <tr>
                                 <td>153</td>
                                 <td>ashish kumar yadav</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>11:00:37pm</td>
                                 <td>03-07-2020</td>
                                 <td>2000122(Android App)</td>

                             </tr>
                             <tr>
                                 <td>154</td>
                                 <td>ashish kumar yadav</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:55:08pm</td>
                                 <td>03-07-2020</td>
                                 <td>2000122-(Android App</td>

                             </tr>
                             <tr>
                                 <td>155</td>
                                 <td>ashish kumar yadav</td>
                                 <td>NURSERY</td>
                                 <td>A</td>
                                 <td>10:52:44pm</td>
                                 <td>03-07-2020</td>
                                 <td>2000122(Android)</td>

                             </tr>
                             <tr>
                                 <td>156</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>

                             </tr>
                             <tr>
                                 <td>157</td>
                                 <td>ashish yadav</td>
                                 <td>UKG</td>
                                 <td>A</td>
                                 <td>06:28:17pm</td>
                                 <td>07-05-2020</td>
                                 <td>2000122</td>

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

 @include('common.footer')

 <script>
function exportTableToExcel(tableID, filename = '') {
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}

function for_search() {

    var dataTable = $('#example1').DataTable({
        destroy: true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: access_link + "smartclass/active_user_list_fetch.php",
            type: "post"
        }
    });
}
for_search();
 </script>