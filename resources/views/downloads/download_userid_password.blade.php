<script>
        (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script>
function for_print()
 {
 var divToPrint=document.getElementById("printTable");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
//$('#printTable').print();
 }
</script>

  <section class="content-header">
      <h1>
        Downloads Management
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="javascript:get_content('downloads/downloads')"><i class="fa fa-phone-square"></i>Download panel</a></li>
  <li><a href="javascript:get_content('downloads/userid_password')"><i class="fa fa-phone-square"></i>Userid Password</a></li>
	    <li class="active">Download Userid Password</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
    <!-- Main content -->
    <section class="content">
      <div class="row">
		<div class="box box-primary my_border_top">
		<div class="box-header with-border ">
		<div class="col-md-12">
		
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Userid And Password')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
			  </div>
		</div>
        </div>
	
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box box-success" >
            <!-- /.box-header -->
			<div class="col-md-10 col-md-offset-1">
            <div class="box-body table-responsive" id="printTable">
			 
			  			 
			  <table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
			  <tr>
			  <td colspan="3"><span style="font-size:20px;font-weight:bold"><center><b>SIMPTION TECH PVT LTD</b></center></span></td>
			  </tr>
			  <tr>
			  <td style="float:left"><b>Dise Code : 23260100164</b></td>
			  <td><center><b>USERID & PASSWORD LIST</b></center></td>
			  <td style="float:right"><b>School Code : 50702</b></td>
			  </tr>
			  </table>
				  <table cellspacing="0" cellpadding="10px;" border="1" id="example1" class="table table-bordered table-striped" style="width:100%;">
						<thead class="my_background_color">
								<tr>
								  <td><b>S.No.</b></td>
								  <td><b>Student Name</b></td>
								  <td><b>Father Name</b></td>
								  <td><b>UserId</b></td>
								  <td><b>Password</b></td>
								</tr>
						</thead>
					<tbody >
											<tr>
						  <td>1</td>
						  <td> BABALI SAHU</td>
						  <td>SHAIKH</td>
						  <td>2100575</td>
						  <td>1234567</td>
					   </tr>
					 						<tr>
						  <td>2</td>
						  <td> Kanika</td>
						  <td></td>
						  <td>2200689</td>
						  <td>0123456789</td>
					   </tr>
					 						<tr>
						  <td>3</td>
						  <td>Aaditya </td>
						  <td>Sujit</td>
						  <td>2200735</td>
						  <td>56444556</td>
					   </tr>
					 						<tr>
						  <td>4</td>
						  <td>AADITYA JHILLE</td>
						  <td>AASHISH JHILLE</td>
						  <td>2200748</td>
						  <td>7024347776</td>
					   </tr>
					 						<tr>
						  <td>5</td>
						  <td>Aamna Hussain</td>
						  <td>Syed Farhat Hussain</td>
						  <td>2201009</td>
						  <td>9018501010</td>
					   </tr>
					 						<tr>
						  <td>6</td>
						  <td>Aarunya Raj Sinha</td>
						  <td>tret</td>
						  <td>2200977</td>
						  <td>87874545454</td>
					   </tr>
					 						<tr>
						  <td>7</td>
						  <td>Aashish</td>
						  <td>Ramesh</td>
						  <td>2200758</td>
						  <td>9416499566</td>
					   </tr>
					 						<tr>
						  <td>8</td>
						  <td>aashu </td>
						  <td></td>
						  <td>2200723</td>
						  <td>1234567891</td>
					   </tr>
					 						<tr>
						  <td>9</td>
						  <td>abc</td>
						  <td></td>
						  <td>2200686</td>
						  <td>7845123698</td>
					   </tr>
					 						<tr>
						  <td>10</td>
						  <td>abcs</td>
						  <td>ebgh</td>
						  <td>2200645</td>
						  <td>25585</td>
					   </tr>
					 						<tr>
						  <td>11</td>
						  <td>Abdul sami </td>
						  <td>Mohd Sharif </td>
						  <td>2200854</td>
						  <td>6005939589</td>
					   </tr>
					 						<tr>
						  <td>12</td>
						  <td>Abhay</td>
						  <td></td>
						  <td>2200741</td>
						  <td>75889995</td>
					   </tr>
					 						<tr>
						  <td>13</td>
						  <td>ABHIMANYU SHARMA</td>
						  <td>GOURAV SHARMA</td>
						  <td>2200785</td>
						  <td>9755404505</td>
					   </tr>
					 						<tr>
						  <td>14</td>
						  <td>abhisek</td>
						  <td></td>
						  <td>2200743</td>
						  <td>8109195202</td>
					   </tr>
					 						<tr>
						  <td>15</td>
						  <td>ABHISHEK </td>
						  <td>B L YADAV</td>
						  <td>2200684</td>
						  <td>9695924506</td>
					   </tr>
					 						<tr>
						  <td>16</td>
						  <td>Ajay</td>
						  <td>Vijay</td>
						  <td>2200793</td>
						  <td>685555555555</td>
					   </tr>
					 						<tr>
						  <td>17</td>
						  <td>AJAY</td>
						  <td>SUNIL</td>
						  <td>2200702</td>
						  <td>7067633301</td>
					   </tr>
					 						<tr>
						  <td>18</td>
						  <td>ajay kewat</td>
						  <td>durga kewat</td>
						  <td>2100470</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>19</td>
						  <td>ajit</td>
						  <td>Satveer</td>
						  <td>2000296</td>
						  <td>9050653720</td>
					   </tr>
					 						<tr>
						  <td>20</td>
						  <td>Akhil</td>
						  <td>Mr. Manoj</td>
						  <td>2100427</td>
						  <td>9719433442</td>
					   </tr>
					 						<tr>
						  <td>21</td>
						  <td>Akshaj Mishra</td>
						  <td>shesh Narayan Mishra</td>
						  <td>2200753</td>
						  <td>9685437207</td>
					   </tr>
					 						<tr>
						  <td>22</td>
						  <td>Akshay</td>
						  <td>ABC</td>
						  <td>2200771</td>
						  <td>1234567890</td>
					   </tr>
					 						<tr>
						  <td>23</td>
						  <td>Akshay Karande</td>
						  <td>NILESH PATIDAR</td>
						  <td>2200733</td>
						  <td>22</td>
					   </tr>
					 						<tr>
						  <td>24</td>
						  <td>Aman</td>
						  <td>Asad</td>
						  <td>2100471</td>
						  <td>9634569635</td>
					   </tr>
					 						<tr>
						  <td>25</td>
						  <td>aman soni</td>
						  <td>ravi soni</td>
						  <td>2201077</td>
						  <td>6387770743</td>
					   </tr>
					 						<tr>
						  <td>26</td>
						  <td>aman soni 2</td>
						  <td>ravi soni</td>
						  <td>2201078</td>
						  <td>6387770743</td>
					   </tr>
					 						<tr>
						  <td>27</td>
						  <td>amit</td>
						  <td>ram chandr</td>
						  <td>2201079</td>
						  <td>8976453600</td>
					   </tr>
					 						<tr>
						  <td>28</td>
						  <td>Amit rao</td>
						  <td>Sahab rao</td>
						  <td>2200959</td>
						  <td>9450673349</td>
					   </tr>
					 						<tr>
						  <td>29</td>
						  <td>Anamika</td>
						  <td>Yash Kapoor</td>
						  <td>2200642</td>
						  <td>5678912345</td>
					   </tr>
					 						<tr>
						  <td>30</td>
						  <td>Anamika Agrawal</td>
						  <td>Sushil Agrawal</td>
						  <td>2201069</td>
						  <td>9111111111</td>
					   </tr>
					 						<tr>
						  <td>31</td>
						  <td>Anikesh</td>
						  <td>Mr. Amit Kumar</td>
						  <td>2201038</td>
						  <td>9621111842</td>
					   </tr>
					 						<tr>
						  <td>32</td>
						  <td>Anil Kapoor Dhoom</td>
						  <td></td>
						  <td>2200674</td>
						  <td>9998000522</td>
					   </tr>
					 						<tr>
						  <td>33</td>
						  <td>Anil Kumar</td>
						  <td></td>
						  <td>2200672</td>
						  <td>9990008522</td>
					   </tr>
					 						<tr>
						  <td>34</td>
						  <td>Anshu</td>
						  <td>Vijay</td>
						  <td>2100571</td>
						  <td>9580194547</td>
					   </tr>
					 						<tr>
						  <td>35</td>
						  <td>APEKSHIT KOLI</td>
						  <td>MANOJ KUMAR KOLI</td>
						  <td>2200732</td>
						  <td>7697233299</td>
					   </tr>
					 						<tr>
						  <td>36</td>
						  <td>ArhN</td>
						  <td>Arqam</td>
						  <td>2200931</td>
						  <td>982365526</td>
					   </tr>
					 						<tr>
						  <td>37</td>
						  <td>Ariz</td>
						  <td></td>
						  <td>2200933</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>38</td>
						  <td>Ariz</td>
						  <td></td>
						  <td>2200934</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>39</td>
						  <td>Arohi Kushwaha</td>
						  <td>Mr. Shailendra Singh Kushwaha</td>
						  <td>2201037</td>
						  <td>8726794375</td>
					   </tr>
					 						<tr>
						  <td>40</td>
						  <td>ARPAN NANDEWAR</td>
						  <td>RAM NANDEWAR</td>
						  <td>2200657</td>
						  <td>7987736568</td>
					   </tr>
					 						<tr>
						  <td>41</td>
						  <td>Arushi Diwakar</td>
						  <td>Mr. Virendra Kumar</td>
						  <td>2201040</td>
						  <td>6393465780</td>
					   </tr>
					 						<tr>
						  <td>42</td>
						  <td>AS</td>
						  <td>SS</td>
						  <td>2200716</td>
						  <td>4545454</td>
					   </tr>
					 						<tr>
						  <td>43</td>
						  <td>asharamk</td>
						  <td></td>
						  <td>2200965</td>
						  <td>6265861579</td>
					   </tr>
					 						<tr>
						  <td>44</td>
						  <td>ashok</td>
						  <td></td>
						  <td>2200737</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>45</td>
						  <td>ashok</td>
						  <td></td>
						  <td>2200740</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>46</td>
						  <td>ashta </td>
						  <td>sanjeev </td>
						  <td>2200945</td>
						  <td>7894561230</td>
					   </tr>
					 						<tr>
						  <td>47</td>
						  <td>AUGUSTAY</td>
						  <td> SHARMA</td>
						  <td>2201068</td>
						  <td>9897015271</td>
					   </tr>
					 						<tr>
						  <td>48</td>
						  <td>AVNI SHARMA</td>
						  <td>SOURABH SHARMA</td>
						  <td>2200786</td>
						  <td>9826625627</td>
					   </tr>
					 						<tr>
						  <td>49</td>
						  <td>Avnish kumar</td>
						  <td>Gopal kumar</td>
						  <td>2100549</td>
						  <td>9931742369</td>
					   </tr>
					 						<tr>
						  <td>50</td>
						  <td>ayush koli</td>
						  <td>prabhu dayal</td>
						  <td>2100458</td>
						  <td>9826390607</td>
					   </tr>
					 						<tr>
						  <td>51</td>
						  <td>पंकज कुमार</td>
						  <td>लालू राम</td>
						  <td>2200884</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>52</td>
						  <td>श्री</td>
						  <td>दीपक</td>
						  <td>2100583</td>
						  <td>9926621333</td>
					   </tr>
					 						<tr>
						  <td>53</td>
						  <td>सौरभ</td>
						  <td>sunil  jain</td>
						  <td>2200722</td>
						  <td>9234567981</td>
					   </tr>
					 						<tr>
						  <td>54</td>
						  <td>balveer singh</td>
						  <td>sukhvinder singh</td>
						  <td>2200614</td>
						  <td>7578987674</td>
					   </tr>
					 						<tr>
						  <td>55</td>
						  <td>bbs</td>
						  <td>bbs</td>
						  <td>2200744</td>
						  <td>9638527410</td>
					   </tr>
					 						<tr>
						  <td>56</td>
						  <td>Bhavesh Arvind Padvi</td>
						  <td></td>
						  <td>2200666</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>57</td>
						  <td>Bhavesh Arvind Padvi</td>
						  <td>Arvind Gorakh Padvi</td>
						  <td>2200635</td>
						  <td>8766578634</td>
					   </tr>
					 						<tr>
						  <td>58</td>
						  <td>Bijoy</td>
						  <td>ajoy</td>
						  <td>2200648</td>
						  <td>4555</td>
					   </tr>
					 						<tr>
						  <td>59</td>
						  <td>bjkb</td>
						  <td>kllkdv</td>
						  <td>2200698</td>
						  <td>9038423904</td>
					   </tr>
					 						<tr>
						  <td>60</td>
						  <td>cddf</td>
						  <td></td>
						  <td>2100437</td>
						  <td>6</td>
					   </tr>
					 						<tr>
						  <td>61</td>
						  <td>Chirag jatav</td>
						  <td>MR.Arjun jatav</td>
						  <td>2200937</td>
						  <td>123</td>
					   </tr>
					 						<tr>
						  <td>62</td>
						  <td>Danica Mariam Jacob</td>
						  <td>J P Jacob</td>
						  <td>2201085</td>
						  <td>9977228818</td>
					   </tr>
					 						<tr>
						  <td>63</td>
						  <td>DISHANT PATIDAR</td>
						  <td></td>
						  <td>2200709</td>
						  <td>9999555333</td>
					   </tr>
					 						<tr>
						  <td>64</td>
						  <td>dishika</td>
						  <td>sonu khatri </td>
						  <td>2200665</td>
						  <td>1234567892</td>
					   </tr>
					 						<tr>
						  <td>65</td>
						  <td>Diviya prajapati</td>
						  <td>Shrawan Ram</td>
						  <td>2100538</td>
						  <td>9571176454</td>
					   </tr>
					 						<tr>
						  <td>66</td>
						  <td>Druwa Ganesh Chaudhari</td>
						  <td>Ganesh Chaudhari</td>
						  <td>2200795</td>
						  <td>8469808008</td>
					   </tr>
					 						<tr>
						  <td>67</td>
						  <td>dummy</td>
						  <td>dummy father </td>
						  <td>2100415</td>
						  <td>1234567890</td>
					   </tr>
					 						<tr>
						  <td>68</td>
						  <td>dummy </td>
						  <td>dummy</td>
						  <td>2200798</td>
						  <td>1234567890</td>
					   </tr>
					 						<tr>
						  <td>69</td>
						  <td>dummy</td>
						  <td>dummy father </td>
						  <td>2200612</td>
						  <td>1234567890</td>
					   </tr>
					 						<tr>
						  <td>70</td>
						  <td>dummy </td>
						  <td>dummy father</td>
						  <td>2200663</td>
						  <td>1234567890</td>
					   </tr>
					 						<tr>
						  <td>71</td>
						  <td>Farhan khan</td>
						  <td>Riyaz khan</td>
						  <td>2200883</td>
						  <td>458963248327</td>
					   </tr>
					 						<tr>
						  <td>72</td>
						  <td>fgdfg</td>
						  <td>dfgdf</td>
						  <td>2200708</td>
						  <td>955656</td>
					   </tr>
					 						<tr>
						  <td>73</td>
						  <td>Fig</td>
						  <td>Niraj Kumar </td>
						  <td>2200788</td>
						  <td>458725</td>
					   </tr>
					 						<tr>
						  <td>74</td>
						  <td>GGDFGFDGFDG</td>
						  <td></td>
						  <td>2200681</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>75</td>
						  <td>Gopi</td>
						  <td>BIKSHAM </td>
						  <td>2200783</td>
						  <td>9052483352</td>
					   </tr>
					 						<tr>
						  <td>76</td>
						  <td>hari</td>
						  <td>hani</td>
						  <td>2100589</td>
						  <td>123456</td>
					   </tr>
					 						<tr>
						  <td>77</td>
						  <td>Heena Mittal</td>
						  <td>Lalu Pasad</td>
						  <td>2200641</td>
						  <td>5678912345</td>
					   </tr>
					 						<tr>
						  <td>78</td>
						  <td>himanshi</td>
						  <td>babl</td>
						  <td>2200678</td>
						  <td>1444411</td>
					   </tr>
					 						<tr>
						  <td>79</td>
						  <td>Humaira</td>
						  <td>Palash</td>
						  <td>2100451</td>
						  <td>1316543133</td>
					   </tr>
					 						<tr>
						  <td>80</td>
						  <td>imran khan </td>
						  <td>waseem khan </td>
						  <td>2200661</td>
						  <td>9977805298</td>
					   </tr>
					 						<tr>
						  <td>81</td>
						  <td>INAMUR RAHMAN</td>
						  <td>ATIKUR RAHMAN</td>
						  <td>2200759</td>
						  <td>8486304694</td>
					   </tr>
					 						<tr>
						  <td>82</td>
						  <td>ishan kumar</td>
						  <td>rohit kumar</td>
						  <td>2200623</td>
						  <td>2589751545</td>
					   </tr>
					 						<tr>
						  <td>83</td>
						  <td>Jay Sharma</td>
						  <td>Harsh Sharma</td>
						  <td>2200646</td>
						  <td>33333</td>
					   </tr>
					 						<tr>
						  <td>84</td>
						  <td>jeet kumar</td>
						  <td>amit kumar </td>
						  <td>2200827</td>
						  <td>7896454571</td>
					   </tr>
					 						<tr>
						  <td>85</td>
						  <td>Jidan uddin</td>
						  <td>riyaz uddin</td>
						  <td>2100544</td>
						  <td>8942116685</td>
					   </tr>
					 						<tr>
						  <td>86</td>
						  <td>jjlklkk</td>
						  <td></td>
						  <td>2200856</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>87</td>
						  <td>joy</td>
						  <td>peter</td>
						  <td>2000345</td>
						  <td>8893387594</td>
					   </tr>
					 						<tr>
						  <td>88</td>
						  <td>kamalkant</td>
						  <td>vasudev dhakad</td>
						  <td>2200974</td>
						  <td>9752199047</td>
					   </tr>
					 						<tr>
						  <td>89</td>
						  <td>Kartik Nishad</td>
						  <td>Kartik Nishad</td>
						  <td>2201041</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>90</td>
						  <td>Kiran Sharma</td>
						  <td>Ramu Sharma</td>
						  <td>2200637</td>
						  <td>1234567891</td>
					   </tr>
					 						<tr>
						  <td>91</td>
						  <td>kirti panday</td>
						  <td>sumit panday</td>
						  <td>2200626</td>
						  <td>9865474758</td>
					   </tr>
					 						<tr>
						  <td>92</td>
						  <td>Komal Gupta</td>
						  <td>Pramod Gupta</td>
						  <td>2200671</td>
						  <td>8192906306</td>
					   </tr>
					 						<tr>
						  <td>93</td>
						  <td>kunal jha</td>
						  <td></td>
						  <td>2200707</td>
						  <td>9918556649</td>
					   </tr>
					 						<tr>
						  <td>94</td>
						  <td>lali</td>
						  <td></td>
						  <td>2200627</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>95</td>
						  <td>lalit </td>
						  <td>harichandra </td>
						  <td>2200946</td>
						  <td>1234567890</td>
					   </tr>
					 						<tr>
						  <td>96</td>
						  <td>Lalu Kumar</td>
						  <td>Raju Kumar</td>
						  <td>2200643</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>97</td>
						  <td>laxmi</td>
						  <td>venkat</td>
						  <td>2200699</td>
						  <td>1234567892</td>
					   </tr>
					 						<tr>
						  <td>98</td>
						  <td>lokesh</td>
						  <td>sandeep</td>
						  <td>2200984</td>
						  <td>9416499566</td>
					   </tr>
					 						<tr>
						  <td>99</td>
						  <td>Mafidul Islam</td>
						  <td>Ali</td>
						  <td>2200886</td>
						  <td>00000000000000</td>
					   </tr>
					 						<tr>
						  <td>100</td>
						  <td>MAHEK DASHORE</td>
						  <td>NAVIN KUMAR DASHORE</td>
						  <td>2200654</td>
						  <td>9584669888</td>
					   </tr>
					 						<tr>
						  <td>101</td>
						  <td>mahi</td>
						  <td>rohit kumar </td>
						  <td>2200805</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>102</td>
						  <td>mahi</td>
						  <td>kaml raj</td>
						  <td>2200822</td>
						  <td>5644545456</td>
					   </tr>
					 						<tr>
						  <td>103</td>
						  <td>mahi</td>
						  <td>kaml raj</td>
						  <td>2200915</td>
						  <td>4744444</td>
					   </tr>
					 						<tr>
						  <td>104</td>
						  <td>mahi</td>
						  <td>ram singh </td>
						  <td>2200806</td>
						  <td>7024510634</td>
					   </tr>
					 						<tr>
						  <td>105</td>
						  <td>mahir khan </td>
						  <td>javed khan </td>
						  <td>2200659</td>
						  <td>8305694069</td>
					   </tr>
					 						<tr>
						  <td>106</td>
						  <td>mahira khan</td>
						  <td>irfan khan</td>
						  <td>2200615</td>
						  <td>9693929574</td>
					   </tr>
					 						<tr>
						  <td>107</td>
						  <td>mansha</td>
						  <td></td>
						  <td>2200918</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>108</td>
						  <td>MANVEER SINGH </td>
						  <td>GURDEV SINGH </td>
						  <td>2200632</td>
						  <td>8360099157</td>
					   </tr>
					 						<tr>
						  <td>109</td>
						  <td>mayank</td>
						  <td>demo</td>
						  <td>2200738</td>
						  <td>-1</td>
					   </tr>
					 						<tr>
						  <td>110</td>
						  <td>Mayur Mangesh Padvi</td>
						  <td>Mangesh Gorakh Padvi</td>
						  <td>2200634</td>
						  <td>7773954846</td>
					   </tr>
					 						<tr>
						  <td>111</td>
						  <td>Md alam ali </td>
						  <td>Ali alam</td>
						  <td>2200797</td>
						  <td>9473000888</td>
					   </tr>
					 						<tr>
						  <td>112</td>
						  <td>Md. Mokarram alam </td>
						  <td>Md. Siddique alam </td>
						  <td>2200943</td>
						  <td>6200665811</td>
					   </tr>
					 						<tr>
						  <td>113</td>
						  <td>Meena Verma</td>
						  <td>Jay Verma</td>
						  <td>2200640</td>
						  <td>4567891234</td>
					   </tr>
					 						<tr>
						  <td>114</td>
						  <td>Monali</td>
						  <td></td>
						  <td>2200980</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>115</td>
						  <td>Muhammed Adnan</td>
						  <td>Muhammed Afnan</td>
						  <td>2100585</td>
						  <td>686868606868</td>
					   </tr>
					 						<tr>
						  <td>116</td>
						  <td>muskan ray</td>
						  <td>roshan ray</td>
						  <td>2200717</td>
						  <td>9813405312</td>
					   </tr>
					 						<tr>
						  <td>117</td>
						  <td>neha parihar </td>
						  <td>himanshu parihar </td>
						  <td>2200901</td>
						  <td>7854126359</td>
					   </tr>
					 						<tr>
						  <td>118</td>
						  <td>nidhi jain </td>
						  <td>sunil  jain</td>
						  <td>2200760</td>
						  <td>9988525245</td>
					   </tr>
					 						<tr>
						  <td>119</td>
						  <td>nidhi jain </td>
						  <td>sunil  jain</td>
						  <td>2200776</td>
						  <td>9988554665</td>
					   </tr>
					 						<tr>
						  <td>120</td>
						  <td>Nidhi Mishra</td>
						  <td>Nidhi Mishra</td>
						  <td>2100601</td>
						  <td>7571940317</td>
					   </tr>
					 						<tr>
						  <td>121</td>
						  <td>NIDHI SINGH </td>
						  <td>Asad</td>
						  <td>2201081</td>
						  <td>8454154454</td>
					   </tr>
					 						<tr>
						  <td>122</td>
						  <td>NIDHI SINGH</td>
						  <td>RAMRAJ</td>
						  <td>2200864</td>
						  <td>89789665677</td>
					   </tr>
					 						<tr>
						  <td>123</td>
						  <td>NIDHI SINGH</td>
						  <td>BHARAT PATIDAR</td>
						  <td>2200961</td>
						  <td>824685465</td>
					   </tr>
					 						<tr>
						  <td>124</td>
						  <td>Nikhil</td>
						  <td>jonh</td>
						  <td>2200780</td>
						  <td>9090909090</td>
					   </tr>
					 						<tr>
						  <td>125</td>
						  <td>Nikhil  Lodhi</td>
						  <td>Mayank Lodhi</td>
						  <td>2100520</td>
						  <td>8679458246</td>
					   </tr>
					 						<tr>
						  <td>126</td>
						  <td>Nikhil Dinesh Padvi</td>
						  <td>Dinesh Gorakh Padvi</td>
						  <td>2200636</td>
						  <td>7507167517</td>
					   </tr>
					 						<tr>
						  <td>127</td>
						  <td>Nitya Yadav</td>
						  <td>Mr. Mayank Yadav</td>
						  <td>2201035</td>
						  <td>8707260755</td>
					   </tr>
					 						<tr>
						  <td>128</td>
						  <td>Palak Kumari</td>
						  <td>Krishna Sahani</td>
						  <td>2000332</td>
						  <td>9876543210</td>
					   </tr>
					 						<tr>
						  <td>129</td>
						  <td>PANKAJ KUMAR</td>
						  <td>UPENDRA SHARMA</td>
						  <td>2200831</td>
						  <td>7004625934</td>
					   </tr>
					 						<tr>
						  <td>130</td>
						  <td>pankaj patel</td>
						  <td>ram </td>
						  <td>2200624</td>
						  <td>9816870719</td>
					   </tr>
					 						<tr>
						  <td>131</td>
						  <td>payal</td>
						  <td>shyamlal</td>
						  <td>2200667</td>
						  <td>8052987121</td>
					   </tr>
					 						<tr>
						  <td>132</td>
						  <td>penolope </td>
						  <td>jonh</td>
						  <td>2200846</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>133</td>
						  <td>pooja bairagi</td>
						  <td>j. d. bairagi</td>
						  <td>2200871</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>134</td>
						  <td>pooja bairagi</td>
						  <td>j. d. bairagi</td>
						  <td>2200872</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>135</td>
						  <td>pooja bairagi</td>
						  <td>Mr. J.D. Bairagi</td>
						  <td>2200879</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>136</td>
						  <td>Pooja bairagi </td>
						  <td>Smt. Meenu bairagi</td>
						  <td>2200938</td>
						  <td>963486652388</td>
					   </tr>
					 						<tr>
						  <td>137</td>
						  <td>Praashant </td>
						  <td>rammulal</td>
						  <td>2200767</td>
						  <td>70000040</td>
					   </tr>
					 						<tr>
						  <td>138</td>
						  <td>pragya </td>
						  <td>rajesh</td>
						  <td>2200814</td>
						  <td>1234567891</td>
					   </tr>
					 						<tr>
						  <td>139</td>
						  <td>prash</td>
						  <td>rrmm</td>
						  <td>2200987</td>
						  <td>7444</td>
					   </tr>
					 						<tr>
						  <td>140</td>
						  <td>Prashant </td>
						  <td>Rammu lal</td>
						  <td>2200868</td>
						  <td>1234569875</td>
					   </tr>
					 						<tr>
						  <td>141</td>
						  <td>Prashant </td>
						  <td>Rammu lal</td>
						  <td>2200869</td>
						  <td>1234587932</td>
					   </tr>
					 						<tr>
						  <td>142</td>
						  <td>Prashant</td>
						  <td>Rammu lal</td>
						  <td>2200910</td>
						  <td>7740000</td>
					   </tr>
					 						<tr>
						  <td>143</td>
						  <td>Prashant </td>
						  <td>rammu lal </td>
						  <td>2200957</td>
						  <td>7748770000</td>
					   </tr>
					 						<tr>
						  <td>144</td>
						  <td>Prashant </td>
						  <td>rammu lal </td>
						  <td>2200958</td>
						  <td>74444</td>
					   </tr>
					 						<tr>
						  <td>145</td>
						  <td>Prashant </td>
						  <td>rammu lal </td>
						  <td>2200976</td>
						  <td>744777</td>
					   </tr>
					 						<tr>
						  <td>146</td>
						  <td>Prashant </td>
						  <td>rammu lal </td>
						  <td>2200989</td>
						  <td>74440</td>
					   </tr>
					 						<tr>
						  <td>147</td>
						  <td>Prashant </td>
						  <td>rammu lal </td>
						  <td>2200990</td>
						  <td>744</td>
					   </tr>
					 						<tr>
						  <td>148</td>
						  <td>Prashant </td>
						  <td></td>
						  <td>2200992</td>
						  <td>77</td>
					   </tr>
					 						<tr>
						  <td>149</td>
						  <td>Prashant </td>
						  <td>rammu lal </td>
						  <td>2201010</td>
						  <td>74444</td>
					   </tr>
					 						<tr>
						  <td>150</td>
						  <td>Prashant </td>
						  <td>rammu lal </td>
						  <td>2201015</td>
						  <td>7441000</td>
					   </tr>
					 						<tr>
						  <td>151</td>
						  <td>Prashant </td>
						  <td>Rammu lal</td>
						  <td>2200675</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>152</td>
						  <td>Prashant  KUMAR</td>
						  <td>Rammu lal</td>
						  <td>2200719</td>
						  <td>7744447774</td>
					   </tr>
					 						<tr>
						  <td>153</td>
						  <td>Prashant  KUMAR</td>
						  <td>Rammu lal</td>
						  <td>2200751</td>
						  <td>7748908646</td>
					   </tr>
					 						<tr>
						  <td>154</td>
						  <td>Prashant kumar</td>
						  <td>babl</td>
						  <td>2200715</td>
						  <td>7844411100</td>
					   </tr>
					 						<tr>
						  <td>155</td>
						  <td>Prashant Kumar</td>
						  <td>Rammu</td>
						  <td>2200680</td>
						  <td>8109607707</td>
					   </tr>
					 						<tr>
						  <td>156</td>
						  <td>Prashant kumar</td>
						  <td>Rammu lal</td>
						  <td>2200692</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>157</td>
						  <td>Prashant r</td>
						  <td>rahul mehara </td>
						  <td>2200772</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>158</td>
						  <td>Prashant rajak</td>
						  <td>Rammu lal</td>
						  <td>2200688</td>
						  <td>647322824425</td>
					   </tr>
					 						<tr>
						  <td>159</td>
						  <td>praveen kumar</td>
						  <td></td>
						  <td>2200695</td>
						  <td>66666666666</td>
					   </tr>
					 						<tr>
						  <td>160</td>
						  <td>Prithviraj</td>
						  <td>Dr. Pramod Kumar</td>
						  <td>2201039</td>
						  <td>9219270152</td>
					   </tr>
					 						<tr>
						  <td>161</td>
						  <td>priya</td>
						  <td>kaml raj</td>
						  <td>2200817</td>
						  <td>56454564564564</td>
					   </tr>
					 						<tr>
						  <td>162</td>
						  <td>priya</td>
						  <td></td>
						  <td>2200942</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>163</td>
						  <td>priya</td>
						  <td>rahul mehara</td>
						  <td>2200755</td>
						  <td>65463312</td>
					   </tr>
					 						<tr>
						  <td>164</td>
						  <td>Radha Kumari</td>
						  <td>Ram Kumar</td>
						  <td>2200656</td>
						  <td>1234567891</td>
					   </tr>
					 						<tr>
						  <td>165</td>
						  <td>RAHUL</td>
						  <td>XYC</td>
						  <td>2200693</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>166</td>
						  <td>rahul</td>
						  <td></td>
						  <td>2200687</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>167</td>
						  <td>Rahul kumar</td>
						  <td>vijay singh</td>
						  <td>2200725</td>
						  <td>8700377769</td>
					   </tr>
					 						<tr>
						  <td>168</td>
						  <td>Rahul Kumar</td>
						  <td>Lalbabu Ray</td>
						  <td>2201086</td>
						  <td>9570503057</td>
					   </tr>
					 						<tr>
						  <td>169</td>
						  <td>RAJ</td>
						  <td>rajesh</td>
						  <td>2200677</td>
						  <td>4987549</td>
					   </tr>
					 						<tr>
						  <td>170</td>
						  <td>RAJ  NAYK </td>
						  <td>GOPAL KHATRI</td>
						  <td>2200765</td>
						  <td>96325663</td>
					   </tr>
					 						<tr>
						  <td>171</td>
						  <td>raja</td>
						  <td>raja</td>
						  <td>2100474</td>
						  <td>1234567891</td>
					   </tr>
					 						<tr>
						  <td>172</td>
						  <td>Rajdeep kumar</td>
						  <td>Mandal himesh</td>
						  <td>2201082</td>
						  <td>8709788098</td>
					   </tr>
					 						<tr>
						  <td>173</td>
						  <td>RAJESH</td>
						  <td>TARACHANDRA</td>
						  <td>2100536</td>
						  <td>9839458652</td>
					   </tr>
					 						<tr>
						  <td>174</td>
						  <td>RAJESH CHOVE</td>
						  <td>MUKESH CHOVE</td>
						  <td>2201032</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>175</td>
						  <td>RAJESH KUMAR MAHTO </td>
						  <td>SITA RAM MAHTO </td>
						  <td>2200756</td>
						  <td>7488150952</td>
					   </tr>
					 						<tr>
						  <td>176</td>
						  <td>Rajesh Prasad</td>
						  <td>Ananda Prasad</td>
						  <td>2000314</td>
						  <td>9135956095</td>
					   </tr>
					 						<tr>
						  <td>177</td>
						  <td>rajkumar</td>
						  <td>Rammu lal</td>
						  <td>2200939</td>
						  <td>544564</td>
					   </tr>
					 						<tr>
						  <td>178</td>
						  <td>rakesh</td>
						  <td>shaelendra</td>
						  <td>2200953</td>
						  <td>9058068745</td>
					   </tr>
					 						<tr>
						  <td>179</td>
						  <td>rakesh</td>
						  <td></td>
						  <td>2200761</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>180</td>
						  <td>Ram</td>
						  <td></td>
						  <td>2200713</td>
						  <td>9999999995656</td>
					   </tr>
					 						<tr>
						  <td>181</td>
						  <td>Ram</td>
						  <td>Lala seth</td>
						  <td>2200679</td>
						  <td>9893230765</td>
					   </tr>
					 						<tr>
						  <td>182</td>
						  <td>Ram</td>
						  <td>Bca</td>
						  <td>2200757</td>
						  <td>9416499566</td>
					   </tr>
					 						<tr>
						  <td>183</td>
						  <td>RAM KUMAR </td>
						  <td>SHYAM KUMAR </td>
						  <td>2200955</td>
						  <td>8936860311</td>
					   </tr>
					 						<tr>
						  <td>184</td>
						  <td>RAM PANDEY</td>
						  <td>KAMLESH PANDEY</td>
						  <td>2200633</td>
						  <td>77718853445</td>
					   </tr>
					 						<tr>
						  <td>185</td>
						  <td>raman</td>
						  <td>tapan</td>
						  <td>2200770</td>
						  <td>7896541256</td>
					   </tr>
					 						<tr>
						  <td>186</td>
						  <td>Ramesh</td>
						  <td>Suresh</td>
						  <td>2201062</td>
						  <td>9821223300</td>
					   </tr>
					 						<tr>
						  <td>187</td>
						  <td>Ravi</td>
						  <td>xyz</td>
						  <td>2200691</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>188</td>
						  <td>ravi</td>
						  <td>udham</td>
						  <td>2200746</td>
						  <td>56548455455</td>
					   </tr>
					 						<tr>
						  <td>189</td>
						  <td>Ravi</td>
						  <td></td>
						  <td>2200762</td>
						  <td>8059076999</td>
					   </tr>
					 						<tr>
						  <td>190</td>
						  <td>REHAN</td>
						  <td>FARHAT ALI</td>
						  <td>2000297</td>
						  <td>8077194624</td>
					   </tr>
					 						<tr>
						  <td>191</td>
						  <td>Rituraj</td>
						  <td>mitu raj</td>
						  <td>2200734</td>
						  <td>9875455522</td>
					   </tr>
					 						<tr>
						  <td>192</td>
						  <td>riya</td>
						  <td>kaml raj</td>
						  <td>2200919</td>
						  <td>56454564</td>
					   </tr>
					 						<tr>
						  <td>193</td>
						  <td>RIYA DAS</td>
						  <td>RATAN DAS</td>
						  <td>2200651</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>194</td>
						  <td>Riya Sharma</td>
						  <td>Ram Sharma</td>
						  <td>2200638</td>
						  <td>2345678912</td>
					   </tr>
					 						<tr>
						  <td>195</td>
						  <td>rohan sah</td>
						  <td>ram </td>
						  <td>2200622</td>
						  <td>9852587215</td>
					   </tr>
					 						<tr>
						  <td>196</td>
						  <td>Rohit</td>
						  <td>Ram kumar</td>
						  <td>2200836</td>
						  <td>9918066214</td>
					   </tr>
					 						<tr>
						  <td>197</td>
						  <td>ROHIT KUMAR</td>
						  <td>DOODH NATH YADAV</td>
						  <td>2200750</td>
						  <td>8577908478</td>
					   </tr>
					 						<tr>
						  <td>198</td>
						  <td>roma</td>
						  <td></td>
						  <td>2200745</td>
						  <td>8109195202</td>
					   </tr>
					 						<tr>
						  <td>199</td>
						  <td>Roshan </td>
						  <td>Raj Mishra</td>
						  <td>2201080</td>
						  <td>9936528547</td>
					   </tr>
					 						<tr>
						  <td>200</td>
						  <td>Sagar Singh</td>
						  <td>Rakesh Singh</td>
						  <td>2100541</td>
						  <td>1234567890</td>
					   </tr>
					 						<tr>
						  <td>201</td>
						  <td>SAJAL</td>
						  <td></td>
						  <td>2200668</td>
						  <td>9818273851</td>
					   </tr>
					 						<tr>
						  <td>202</td>
						  <td>sajid khan </td>
						  <td>javed khan</td>
						  <td>2200662</td>
						  <td>9826038592</td>
					   </tr>
					 						<tr>
						  <td>203</td>
						  <td>saloni</td>
						  <td>bijay</td>
						  <td>2200629</td>
						  <td>9825734280</td>
					   </tr>
					 						<tr>
						  <td>204</td>
						  <td>saloni karn</td>
						  <td>bijay karn</td>
						  <td>2200728</td>
						  <td>9816870719</td>
					   </tr>
					 						<tr>
						  <td>205</td>
						  <td>sanam karn</td>
						  <td>bijay karn</td>
						  <td>2200730</td>
						  <td>9816870719</td>
					   </tr>
					 						<tr>
						  <td>206</td>
						  <td>SANDEEP</td>
						  <td>PRATHAM SINGH</td>
						  <td>2200948</td>
						  <td>9991233258</td>
					   </tr>
					 						<tr>
						  <td>207</td>
						  <td>Sangita</td>
						  <td>Ramji</td>
						  <td>2100430</td>
						  <td>9827185031</td>
					   </tr>
					 						<tr>
						  <td>208</td>
						  <td>SANJAY KUMAR</td>
						  <td>manoj pandey</td>
						  <td>2200724</td>
						  <td>470050060</td>
					   </tr>
					 						<tr>
						  <td>209</td>
						  <td>sanny</td>
						  <td>soham</td>
						  <td>2200618</td>
						  <td>987654321</td>
					   </tr>
					 						<tr>
						  <td>210</td>
						  <td>SARIKA SULTANE</td>
						  <td>SANJAY</td>
						  <td>2100609</td>
						  <td>7498177242</td>
					   </tr>
					 						<tr>
						  <td>211</td>
						  <td>sarita</td>
						  <td>ramjee Gupta</td>
						  <td>2200669</td>
						  <td>8840268435</td>
					   </tr>
					 						<tr>
						  <td>212</td>
						  <td>Saurya</td>
						  <td>Sanjeev Kumar</td>
						  <td>2100414</td>
						  <td>9456930082</td>
					   </tr>
					 						<tr>
						  <td>213</td>
						  <td>shahnawaz</td>
						  <td></td>
						  <td>2200810</td>
						  <td>7677425494</td>
					   </tr>
					 						<tr>
						  <td>214</td>
						  <td>Shifa Meman</td>
						  <td>Shabbir Meman</td>
						  <td>2200749</td>
						  <td>9893840078</td>
					   </tr>
					 						<tr>
						  <td>215</td>
						  <td>shikha </td>
						  <td>rajendra </td>
						  <td>2200947</td>
						  <td>546123790</td>
					   </tr>
					 						<tr>
						  <td>216</td>
						  <td>SHIVANSH RAWAT</td>
						  <td>AJAY</td>
						  <td>2200800</td>
						  <td>6283926887</td>
					   </tr>
					 						<tr>
						  <td>217</td>
						  <td>shravan singh</td>
						  <td>rajaram singh</td>
						  <td>2200962</td>
						  <td>9452358861</td>
					   </tr>
					 						<tr>
						  <td>218</td>
						  <td>shree</td>
						  <td>samay singh </td>
						  <td>2200790</td>
						  <td>9911587536</td>
					   </tr>
					 						<tr>
						  <td>219</td>
						  <td>shreyansh</td>
						  <td>Neeraj kumar</td>
						  <td>2200791</td>
						  <td>9911587539</td>
					   </tr>
					 						<tr>
						  <td>220</td>
						  <td>Shubh Kashyap</td>
						  <td>Mr. Anikesh Kumar</td>
						  <td>2201036</td>
						  <td>8957380880</td>
					   </tr>
					 						<tr>
						  <td>221</td>
						  <td>Sikdar</td>
						  <td></td>
						  <td>2200647</td>
						  <td>666</td>
					   </tr>
					 						<tr>
						  <td>222</td>
						  <td>simran</td>
						  <td>PRAKASH PATIDAR</td>
						  <td>2200731</td>
						  <td>9977522556</td>
					   </tr>
					 						<tr>
						  <td>223</td>
						  <td>SK Thakur</td>
						  <td>Aasss</td>
						  <td>2200644</td>
						  <td>8084407273</td>
					   </tr>
					 						<tr>
						  <td>224</td>
						  <td>Somya</td>
						  <td></td>
						  <td>2200653</td>
						  <td>6756789876</td>
					   </tr>
					 						<tr>
						  <td>225</td>
						  <td>sona</td>
						  <td>rajesh</td>
						  <td>2200650</td>
						  <td>9816870719</td>
					   </tr>
					 						<tr>
						  <td>226</td>
						  <td>SONU PRAJAPATI</td>
						  <td>LALARAM PRAJAPATI</td>
						  <td>2200796</td>
						  <td>7067208375</td>
					   </tr>
					 						<tr>
						  <td>227</td>
						  <td>Sujata Agrawal</td>
						  <td>Sushil Agrawal</td>
						  <td>2201076</td>
						  <td>7111111111</td>
					   </tr>
					 						<tr>
						  <td>228</td>
						  <td>sultana</td>
						  <td></td>
						  <td>2200812</td>
						  <td>9693212542</td>
					   </tr>
					 						<tr>
						  <td>229</td>
						  <td>suman</td>
						  <td>bijay</td>
						  <td>2200630</td>
						  <td>9825734280</td>
					   </tr>
					 						<tr>
						  <td>230</td>
						  <td>SUMIT KUMAR</td>
						  <td>Anil kumar </td>
						  <td>2200652</td>
						  <td>1234567891</td>
					   </tr>
					 						<tr>
						  <td>231</td>
						  <td>sunil 1</td>
						  <td>Asad</td>
						  <td>2200779</td>
						  <td>9955886644</td>
					   </tr>
					 						<tr>
						  <td>232</td>
						  <td>SURYA PRATAP MAURYA</td>
						  <td></td>
						  <td>2201084</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>233</td>
						  <td>sushant karn</td>
						  <td>bijay karn</td>
						  <td>2200729</td>
						  <td>9816870719</td>
					   </tr>
					 						<tr>
						  <td>234</td>
						  <td>sushant singh</td>
						  <td>nilkamal singh </td>
						  <td>2200628</td>
						  <td>9825734280</td>
					   </tr>
					 						<tr>
						  <td>235</td>
						  <td>TABREZ ALAM</td>
						  <td>BAKRIDAN ANSARI</td>
						  <td>2200799</td>
						  <td>7677425494</td>
					   </tr>
					 						<tr>
						  <td>236</td>
						  <td>umesh </td>
						  <td></td>
						  <td>2100563</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>237</td>
						  <td>umesh </td>
						  <td></td>
						  <td>2100561</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>238</td>
						  <td>umesh </td>
						  <td>abhishek</td>
						  <td>2100553</td>
						  <td>6253</td>
					   </tr>
					 						<tr>
						  <td>239</td>
						  <td>umesh  dhakad</td>
						  <td>mr  ramgopal dhakad</td>
						  <td>2100450</td>
						  <td>8269548476</td>
					   </tr>
					 						<tr>
						  <td>240</td>
						  <td>Upen</td>
						  <td>Rajdev Mishra</td>
						  <td>2100412</td>
						  <td>8601727725</td>
					   </tr>
					 						<tr>
						  <td>241</td>
						  <td>Urvi sen</td>
						  <td>Prabhash sen</td>
						  <td>2200752</td>
						  <td>9101065310</td>
					   </tr>
					 						<tr>
						  <td>242</td>
						  <td>Vaidik</td>
						  <td></td>
						  <td>2100537</td>
						  <td>9974301792</td>
					   </tr>
					 						<tr>
						  <td>243</td>
						  <td>Vaishnavi Thakur</td>
						  <td>Mr. Amrendra Pratap Singh </td>
						  <td>2200747</td>
						  <td>9918666600</td>
					   </tr>
					 						<tr>
						  <td>244</td>
						  <td>Vansh Kumar Pasi</td>
						  <td>Ravi Pasi</td>
						  <td>2200951</td>
						  <td>8103488491</td>
					   </tr>
					 						<tr>
						  <td>245</td>
						  <td>VEDANT TIWARI</td>
						  <td>MANOJ KUMAR TIWARI</td>
						  <td>2200993</td>
						  <td>8090688671</td>
					   </tr>
					 						<tr>
						  <td>246</td>
						  <td>vicky uikey</td>
						  <td>jitendra singh uikey</td>
						  <td>2200936</td>
						  <td>7354713649</td>
					   </tr>
					 						<tr>
						  <td>247</td>
						  <td>vicky uikey</td>
						  <td>jitendrasingh uikey</td>
						  <td>2200841</td>
						  <td>7354713649</td>
					   </tr>
					 						<tr>
						  <td>248</td>
						  <td>VINAYAK PATIDAR</td>
						  <td>rahul mehara</td>
						  <td>2200763</td>
						  <td>456946564</td>
					   </tr>
					 						<tr>
						  <td>249</td>
						  <td>VINAYAK PATIDAR</td>
						  <td>SUNIL RAI</td>
						  <td>2200861</td>
						  <td>9955882211</td>
					   </tr>
					 						<tr>
						  <td>250</td>
						  <td>VINAYAK PATIDAR</td>
						  <td>RAJENDRA PATIDAR</td>
						  <td>2200927</td>
						  <td>9988552233</td>
					   </tr>
					 						<tr>
						  <td>251</td>
						  <td>vishal jha</td>
						  <td></td>
						  <td>2200710</td>
						  <td>9918556649</td>
					   </tr>
					 						<tr>
						  <td>252</td>
						  <td>vishal jha</td>
						  <td></td>
						  <td>2200714</td>
						  <td>9918556649</td>
					   </tr>
					 						<tr>
						  <td>253</td>
						  <td>vivek</td>
						  <td></td>
						  <td>2200742</td>
						  <td></td>
					   </tr>
					 						<tr>
						  <td>254</td>
						  <td>xghkjh</td>
						  <td>Anil</td>
						  <td>2200720</td>
						  <td>1234567891</td>
					   </tr>
					 						<tr>
						  <td>255</td>
						  <td>XYZ</td>
						  <td>XYZ</td>
						  <td>2200685</td>
						  <td>9818273851</td>
					   </tr>
					 						<tr>
						  <td>256</td>
						  <td>Yash </td>
						  <td>Soun</td>
						  <td>2200823</td>
						  <td>6265767366</td>
					   </tr>
					 						<tr>
						  <td>257</td>
						  <td>yashi</td>
						  <td>pushpendra</td>
						  <td>2200782</td>
						  <td>8430555580</td>
					   </tr>
					 						<tr>
						  <td>258</td>
						  <td>yasin</td>
						  <td></td>
						  <td>2200811</td>
						  <td>9931326638</td>
					   </tr>
					 					</tbody>
				 </table>
			  
        <!-- /.col -->
      </div>
      </div>
			  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="exportTableToExcel('printTable', 'Userid And Password')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
			  </div>
			  </div>
      <!-- /.row -->
    </section>

<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
	