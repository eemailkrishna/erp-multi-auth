@include('common.header')
@include('common.navbar')
<script>
window.scrollTo(0, 0);
</script>

<section class="content-header">
    <h1>
        Account Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Account</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box box-success ">
        <div class="box-header with-border">

            <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
        </div>
        <div class="box-body">

            <a href="{{url('add-account')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#E32636;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Bank A/c</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>

                        <a href="{{url('add-account')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('account-list')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#3B7A57;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Account List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>

                        <a href="{{url('account-list')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('add-income-or-expence-info')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#9F2B68;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Add Income/Expense</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>

                        <a href="{{url('add-income-or-expence-info')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('income-or-expence-list')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:	#C46210;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Income/Expense List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>

                        <a href="{{url('income-or-expence-list')}}" class="small-box-footer">More
                            Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('ledger')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#3B3B6D;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Ledger Info</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>

                        <a href="{{url('ledger')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>


        </div>
    </div>
    <div class="box box-success ">
        <div class="box-header with-border">

            <h3 class="box-title" style="color:teal;"><i
                    class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>
        </div>
        <div class="box-body">
            <a href="{{url('ledger-report')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#C0A812;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Ledger Report <small
                                    style="color:#fff;">Daily</small></h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('ledger-report')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('ledger-report-monthly')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#68075C;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Ledger Report <small
                                    style="color:#fff;">Monthly</small></h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('ledger-report-monthly')}}" class="small-box-footer">More
                            Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('income-expense-report')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#C43B1E;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Income/Expense Report</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('income-expense-report')}}" class="small-box-footer">More
                            Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <!-- <a href="{{url('refund-report')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#C43B1E;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Refund Report</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <a href="{{url('refund-report')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a> -->

            <!-- <a href="{{url('ledger-advance-salary-report')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#806964;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Advance Salary</h3>
                            <p style="margin-left:10px;color:#fff;">Report</p>
                        </div>
                        <a href="{{url('ledger-advance-salary-report')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a> -->

        </div>
    </div>

</section>
@include('common.footer')