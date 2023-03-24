@include('common.header')
@include('common.navbar')

<script>
window.scrollTo(0, 0);
</script>
<section class="content-header">
    <h1>
        PDF Management
        <small>Control Panel</small>

    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">PDF Format</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div <div class="box box-success">
        <div class="box-header with-border">

            <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b>
            </h3>
        </div>
        <div class="box-body">


            <a href="{{url('pdf-format-view')}}">
                <!--,'id=admission_form' -->
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#E32636;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Admission Form</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="{{url('pdf-format-view')}}" class="small-box-footer">More Info<i
                                class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=admit_card_state_board')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3B7A57;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Admit Card State Board</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=admit_card_state_board')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=bonfied_certificate')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#9F2B68;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Bonfied Certificate</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=bonfied_certificate')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=character_certificate')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#C46210;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Character Certificate</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=character_certificate')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=event_certificate')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3B3B6D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Event Certificate</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=event_certificate')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=fee_slip')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#FF7E00;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Fee Slip</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=fee_slip')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=fee_slip_thermal')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#804040;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Fee Slip Thermal</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=fee_slip_thermal')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=marksheet_examwise_cbse')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#34B334;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Marksheet Examwise Cbse</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=marksheet_examwise_cbse')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=marksheet_final_state_board')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#551B8C;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Marksheet Final State Board</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=marksheet_final_state_board')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=sport_certificate')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#915C83;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Sport Certificate</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=sport_certificate')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=staff_id_card')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#4B5320;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Staff Id Card</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=staff_id_card')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=student_id_card')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#3B444B;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Student Id Card</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=student_id_card')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>

            <a href="javascript:post_content('pdf_format/pdf_format_view','id=tc_state_board')">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color:#A2006D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:10px;color:#fff;">Tc State Board</h3>
                            <p style="margin-left:10px;color:#fff;">Pdf Detail</p>
                        </div>

                        <a href="javascript:post_content('pdf_format/pdf_format_view','id=tc_state_board')"
                            class="small-box-footer">More Info<i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </a>


        </div>
    </div>






</section>
@include('common.footer')