@include('common.header')
@include('common.navbar')


<section class="content-header">
    <h1>
        Paper Setter Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('set-paper')}}"><i class="fa fa-dashboard"></i>
                Paper Setter Management</a></li>
        <li class="active">Paper List</li>
    </ol>
</section>

<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box box-success">
                <div class="box-header with-border">

                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="my_background_color">
                            <tr>
                                <th>#</th>
                                <th>Language</th>
                                <th>Paper Id</th>
                                <th>Exam Type</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Exam Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td>1</td>
                                <td>English</td>
                                <td>10TH_Social Science_first_19_04_2020_English</td>
                                <td>first</td>
                                <td>10TH</td>
                                <td>Social Science</td>
                                <td>01-12-2022</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=10TH_Social Science_first_19_04_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=10TH_Social Science_first_19_04_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>English</td>
                                <td>1ST_computer_objective_25_08_2021_English</td>
                                <td>objective</td>
                                <td>1ST</td>
                                <td>computer</td>
                                <td>14-04-2022</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_computer_objective_25_08_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_computer_objective_25_08_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>English</td>
                                <td>1ST_computer_Yearly_18_10_2022_English</td>
                                <td>Yearly</td>
                                <td>1ST</td>
                                <td>computer</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_computer_Yearly_18_10_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_computer_Yearly_18_10_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>English</td>
                                <td>1ST_English_Annual Exam_19_05_2021_English</td>
                                <td>Annual Exam</td>
                                <td>1ST</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_English_Annual Exam_19_05_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_English_Annual Exam_19_05_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>English</td>
                                <td>1ST_English_first_19_04_2020_English</td>
                                <td>first</td>
                                <td>1ST</td>
                                <td>English</td>
                                <td>07-04-2021</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_English_first_19_04_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_English_first_19_04_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>English</td>
                                <td>1ST_English_Half yearly_07_01_2020_English</td>
                                <td>Half yearly</td>
                                <td>1ST</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_English_Half yearly_07_01_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_English_Half yearly_07_01_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>English</td>
                                <td>1ST_English_half yearly_07_04_2022_English</td>
                                <td>half yearly</td>
                                <td>1ST</td>
                                <td>English</td>
                                <td>17-09-2022</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_English_half yearly_07_04_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_English_half yearly_07_04_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>English</td>
                                <td>1ST_English_Half yearly_24_02_2020_English</td>
                                <td>Half yearly</td>
                                <td>1ST</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_English_Half yearly_24_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_English_Half yearly_24_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>English</td>
                                <td>1ST_English_Half yearly_28_06_2022_English</td>
                                <td>Half yearly</td>
                                <td>1ST</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_English_Half yearly_28_06_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_English_Half yearly_28_06_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>English</td>
                                <td>1ST_English_yearly_25_09_2021_English</td>
                                <td>yearly</td>
                                <td>1ST</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_English_yearly_25_09_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_English_yearly_25_09_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>Hindi</td>
                                <td>1ST_Hindi _FIRST_TERM_EXAM_2022_04_10_2022_Hindi</td>
                                <td>FIRST_TERM_EXAM_2022</td>
                                <td>1ST</td>
                                <td>Hindi </td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_Hindi _FIRST_TERM_EXAM_2022_04_10_2022_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_Hindi _FIRST_TERM_EXAM_2022_04_10_2022_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>12</td>
                                <td>English</td>
                                <td>1ST_Hindi _Half yearly_08_01_2020_English</td>
                                <td>Half yearly</td>
                                <td>1ST</td>
                                <td>Hindi </td>
                                <td>23-02-2020</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_Hindi _Half yearly_08_01_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_Hindi _Half yearly_08_01_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>English</td>
                                <td>1ST_Mathematics_Annual exam_19_05_2021_English</td>
                                <td>Annual exam</td>
                                <td>1ST</td>
                                <td>Mathematics</td>
                                <td>18-04-2022</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_Mathematics_Annual exam_19_05_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_Mathematics_Annual exam_19_05_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>English</td>
                                <td>1ST_Mathematics_Half yearly_10_01_2020_English</td>
                                <td>Half yearly</td>
                                <td>1ST</td>
                                <td>Mathematics</td>
                                <td>01-05-2020</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=1ST_Mathematics_Half yearly_10_01_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=1ST_Mathematics_Half yearly_10_01_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>English</td>
                                <td>5TH_English_first_19_04_2020_English</td>
                                <td>first</td>
                                <td>5TH</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=5TH_English_first_19_04_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=5TH_English_first_19_04_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>English</td>
                                <td>5TH_English_VBVVN_21_03_2021_English</td>
                                <td>VBVVN</td>
                                <td>5TH</td>
                                <td>English</td>
                                <td>21-03-2021</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=5TH_English_VBVVN_21_03_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=5TH_English_VBVVN_21_03_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>English</td>
                                <td>6TH_Hindi _Test_19_03_2020_English</td>
                                <td>Test</td>
                                <td>6TH</td>
                                <td>Hindi </td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=6TH_Hindi _Test_19_03_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=6TH_Hindi _Test_19_03_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>English</td>
                                <td>7TH_Mathematics_QUT._01_12_2022_English</td>
                                <td>QUT.</td>
                                <td>7TH</td>
                                <td>Mathematics</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=7TH_Mathematics_QUT._01_12_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=7TH_Mathematics_QUT._01_12_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>Hindi</td>
                                <td>8TH_Mathematics_अर्द्धवार्षिक परीक्षा _26_02_2020_Hindi</td>
                                <td>अर्द्धवार्षिक परीक्षा </td>
                                <td>8TH</td>
                                <td>Mathematics</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=8TH_Mathematics_अर्द्धवार्षिक परीक्षा _26_02_2020_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=8TH_Mathematics_अर्द्धवार्षिक परीक्षा _26_02_2020_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>20</td>
                                <td>Hindi</td>
                                <td>LKG_Animal Husbandry And Poultary Farm_ह्ह्ह_04_04_2020_Hindi</td>
                                <td>ह्ह्ह</td>
                                <td>LKG</td>
                                <td>Animal Husbandry And Poultary Farm</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=LKG_Animal Husbandry And Poultary Farm_ह्ह्ह_04_04_2020_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=LKG_Animal Husbandry And Poultary Farm_ह्ह्ह_04_04_2020_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>21</td>
                                <td>Hindi</td>
                                <td>LKG_Animal Husbandry And Poultary Farm__04_04_2020_Hindi</td>
                                <td>ह्ह्ह</td>
                                <td>LKG</td>
                                <td>Animal Husbandry And Poultary Farm</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=LKG_Animal Husbandry And Poultary Farm__04_04_2020_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=LKG_Animal Husbandry And Poultary Farm__04_04_2020_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>22</td>
                                <td>English</td>
                                <td>LKG_EVS_hgfhdfhdfh_17_10_2022_English</td>
                                <td>hgfhdfhdfh</td>
                                <td>LKG</td>
                                <td>EVS</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=LKG_EVS_hgfhdfhdfh_17_10_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=LKG_EVS_hgfhdfhdfh_17_10_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>23</td>
                                <td>Hindi</td>
                                <td>NURSERY_Cleanliness_abc_07_06_2022_Hindi</td>
                                <td>abc</td>
                                <td>NURSERY</td>
                                <td>Cleanliness</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_Cleanliness_abc_07_06_2022_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_Cleanliness_abc_07_06_2022_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>24</td>
                                <td>Hindi</td>
                                <td>NURSERY_Cleanliness_vcv_24_04_2020_Hindi</td>
                                <td>vcv</td>
                                <td>NURSERY</td>
                                <td>Cleanliness</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_Cleanliness_vcv_24_04_2020_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_Cleanliness_vcv_24_04_2020_Hindi&language=Hindi')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>25</td>
                                <td>English</td>
                                <td>NURSERY_Computer_abc_05_04_2021_English</td>
                                <td>abc</td>
                                <td>NURSERY</td>
                                <td>Computer</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_Computer_abc_05_04_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_Computer_abc_05_04_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>26</td>
                                <td>English</td>
                                <td>NURSERY_Computer_wwwww_26_04_2020_English</td>
                                <td>wwwww</td>
                                <td>NURSERY</td>
                                <td>Computer</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_Computer_wwwww_26_04_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_Computer_wwwww_26_04_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>27</td>
                                <td>English</td>
                                <td>NURSERY_English_FA1 exam_21_02_2020_English</td>
                                <td>FA1 exam</td>
                                <td>NURSERY</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_English_FA1 exam_21_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_English_FA1 exam_21_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>28</td>
                                <td>English</td>
                                <td>NURSERY_English_FA2 exam_21_02_2020_English</td>
                                <td>FA2 exam</td>
                                <td>NURSERY</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_English_FA2 exam_21_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_English_FA2 exam_21_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>29</td>
                                <td>English</td>
                                <td>NURSERY_English_fa_14_04_2022_English</td>
                                <td>fa</td>
                                <td>NURSERY</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_English_fa_14_04_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_English_fa_14_04_2022_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>30</td>
                                <td>English</td>
                                <td>NURSERY_English_term_21_02_2020_English</td>
                                <td>term</td>
                                <td>NURSERY</td>
                                <td>English</td>
                                <td>02-05-2020</td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_English_term_21_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_English_term_21_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>31</td>
                                <td>English</td>
                                <td>NURSERY_English_Test exam 1_18_06_2021_English</td>
                                <td>Test exam 1</td>
                                <td>NURSERY</td>
                                <td>English</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_English_Test exam 1_18_06_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_English_Test exam 1_18_06_2021_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
                            </tr>

                            <tr>
                                <td>32</td>
                                <td>English</td>
                                <td>NURSERY_Mathematics_New exam_28_02_2020_English</td>
                                <td>New exam</td>
                                <td>NURSERY</td>
                                <td>Mathematics</td>
                                <td></td>
                                <td><a
                                        href="javascript:post_content('exam_paper_setter/paper_list','id=NURSERY_Mathematics_New exam_28_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">View
                                            Paper</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a
                                        href="javascript:post_content('exam_paper_setter/paper_edit','id=NURSERY_Mathematics_New exam_28_02_2020_English&language=English')"><button
                                            type="button" class="btn btn-success">Edit Paper</button></a></td>
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