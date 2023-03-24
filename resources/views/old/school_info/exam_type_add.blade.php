@include('common.header')
@include('common.navbar')
<script type="text/javascript">
function add_edit(value, name) {
    var exam_name = name.split('-');
    $('#exam_type1').val(exam_name[0]);
    $('#exam_type_hindi').val(exam_name[1]);
    $('#class_code_hidden').val(exam_name[2]);
    $('#exam_code_hidden').val(value);
    $('#s_no_hidden').val(exam_name[3]);
}

function form_submit() {
    $("#modal_close").click();
    $.ajax({
        type: "POST",
        url: access_link + "school_info/exam_type_add_api.php",
        data: $("#my_form").serialize(),
        success: function(detail) {
            //alert(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                get_content('school_info/exam_type_add');
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        School Information Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
        <li class="active">Add exams Type</li>
    </ol>
</section>


<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->

        <div class="box box-primary my_border_top">

            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">


                    <h4 class="box-title">Exam Type Add For NURSERY </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th></th>
                                    <th> </th>
                                    <th><button type="button" id="exam1" name="- -class1-361" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class1-362" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class1-363" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class1-364"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>5</th>
                                    <th>Final Exam</th>
                                    <th></th>
                                    <th><button type="button" id="exam5" name="Final Exam--class1-365"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam6" name="--class1"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For LKG </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class2-366" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class2-367" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class2-368" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class2-369"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class2"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For UKG </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class3-371" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class3-372" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class3-373" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class3-374"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class3"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 1ST </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class4-376" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class4-377" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class4-378" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class4-379"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class4"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 2ND </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class5-381" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class5-382" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class5-383" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class5-384"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class5"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 3RD </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class6-386" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class6-387" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class6-388" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class6-389"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class6"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 4TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class7-391" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class7-392" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class7-393" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class7-394"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class7"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 5TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class8-396" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class8-397" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class8-398" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class8-399"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class8"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 6TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class9-401" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class9-402" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class9-403" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class9-404"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class9"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 7TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class10-406" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class10-407" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class10-408"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class10-409"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class10"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 8TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class11-411" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class11-412" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class11-413"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class11-414"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class11"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 9TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class12-416" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class12-417" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class12-418"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class12-419"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class12"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 10TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class13-421" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class13-422" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class13-423"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class13-424"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class13"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 11TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class14-426" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class14-427" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class14-428"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class14-429"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class14"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>


                    <h4 class="box-title">Exam Type Add For 12TH </h4>

                    <div class="col-md-12 box-body table-responsive">
                        <table id="table-data" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no.</th>
                                    <th>Exam Type</th>
                                    <th>Exam Type</th>
                                    <th>Add/Edit</th>
                                </tr>
                            </thead>

                            <tbody>


                                <tr align='center'>

                                    <th>1</th>
                                    <th>Quarterly Exam</th>
                                    <th>त्रैमासिक परीक्षा</th>
                                    <th><button type="button" id="exam1"
                                            name="Quarterly Exam-त्रैमासिक परीक्षा-class15-431" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>2</th>
                                    <th>Half Yearly Exam</th>
                                    <th>छमाही परीक्षा</th>
                                    <th><button type="button" id="exam2"
                                            name="Half Yearly Exam-छमाही परीक्षा-class15-432" class="btn btn-success"
                                            onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                            data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>3</th>
                                    <th>Pre Board Exam</th>
                                    <th>पूर्व बोर्ड परीक्षा</th>
                                    <th><button type="button" id="exam3"
                                            name="Pre Board Exam-पूर्व बोर्ड परीक्षा-class15-433"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>


                                <tr align='center'>

                                    <th>4</th>
                                    <th>Annual Exam</th>
                                    <th>वार्षिक परीक्षा</th>
                                    <th><button type="button" id="exam4" name="Annual Exam-वार्षिक परीक्षा-class15-434"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Edit</th>




                                </tr>
                                <tr align='center'>
                                    <th colspan="4"><button type="button" id="exam5" name="--class15"
                                            class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                            data-toggle="modal" data-target="#myModal">Add More</th>
                            </tbody>

                        </table>
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" id="modal_close"
                                        data-dismiss="modal">&times;</button>

                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Exam Type Add/Edit</label>
                                        <input type="text" name="exam_type1" id="exam_type1" class="form-control">
                                        <input type="hidden" name="exam_code_hidden" id="exam_code_hidden"
                                            class="form-control">
                                        <input type="hidden" name="class_code_hidden" id="class_code_hidden"
                                            class="form-control">
                                        <input type="hidden" name="s_no_hidden" id="s_no_hidden" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Exam Type Hindi Add/Edit</label>
                                        <input type="text" name="exam_type_hindi" id="exam_type_hindi"
                                            class="form-control">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" name="finish" onclick="form_submit();" value="ADD"
                                        class="btn btn-success" />
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>


                </form>
            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')