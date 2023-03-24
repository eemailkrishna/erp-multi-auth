@include('common.header')
@include('common.navbar')
<script type="text/javascript">
function show(value, hide_unhide) {

    $.ajax({
        address: "POST",
        url: access_link + "smartclass/result_show_api.php?value=" + value + "&hide_unhide=" + hide_unhide + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new("Successfully Complete!!!", "green");
                get_content('smartclass/result_show');
            } else {
                alert_new("Sorry!!! Some error occured", "red");
            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        Exam Result Management
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/smartclass')}}"><i class="fa fa-book"></i> Smart Class</a></li>
        <li></i>Result Show</li>
    </ol>
</section>


<section class="content">




    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class NURSERY</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th></th>
                            <th><button type="button" id="exam1|?|class1" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class1" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class1" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class1" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>5</th>
                            <th>Final Exam</th>
                            <th><button type="button" id="exam5|?|class1" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class LKG</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class2" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class2" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class2" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class2" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class UKG</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class3" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class3" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class3" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class3" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 1ST</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class4" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class4" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class4" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class4" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 2ND</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class5" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class5" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class5" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class5" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 3RD</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class6" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class6" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class6" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class6" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 4TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class7" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class7" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class7" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class7" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 5TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class8" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class8" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class8" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class8" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 6TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class9" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class9" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class9" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class9" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 7TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class10" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class10" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class10" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class10" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 8TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class11" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class11" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class11" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class11" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 9TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class12" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class12" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class12" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class12" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 10TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class13" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class13" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class13" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class13" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 11TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class14" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class14" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class14" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class14" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>


    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title" style="color:teal;">Exam result show for class 12TH</h3>

        </div>
        <div class="box-body  table-responsive">
            <div class="col-md-12">
                <table id="table-data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Exam Type</th>
                            <th>Result Show</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr align='center'>

                            <th>1</th>
                            <th>Quarterly Exam</th>
                            <th><button type="button" id="exam1|?|class15" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>2</th>
                            <th>Half Yearly Exam</th>
                            <th><button type="button" id="exam2|?|class15" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>3</th>
                            <th>Pre Board Exam</th>
                            <th><button type="button" id="exam3|?|class15" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>


                        <tr align='center'>

                            <th>4</th>
                            <th>Annual Exam</th>
                            <th><button type="button" id="exam4|?|class15" class="btn btn-danger "
                                    onclick="show(this.id,'Yes')">Show</th>




                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <br>

</section>
@include('common.footer')

<script>
$(function() {
    $('#example1').DataTable()
})
</script>