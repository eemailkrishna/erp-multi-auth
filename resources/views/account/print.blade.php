@include('common.header')
@include('common.navbar')

    <style>
    .borderrr {
        border: solid;
        decoration: center;
    }

    .dated {
        position: absolute;
        left: 750px;
        top: 250px;
        padding-bottom: -200px;

    }

    .received_by {
        position: absolute;
        left: 750px;
        top: 400px;
    }

    .receipt,
    .amount,
    .amount_word,
    .paid_to,
    .account_of,
    .prepared_by {
        margin-left: 250px;
    }
    </style>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.jqueryui.min.css" rel="stylesheet">
</head> -->

<body>
    <div id="mypdf_view">
        <div class="row">
            <div class="col-12 borderrr">
                <div>
                    <h2 class="text-center"><b>reBLISS Acadamy</b></h2>
                    <p class="text-center">Kutumbh Care Distribution Network Pvt. Ltd.
                        B-154,, Sector-63, Noida, Uttar Pradesh 201301</p>
                    <h3 class="text-center">Payment Receipt</h3>
                    <p class="receipt">Receipt No. {{$AccountInfo->bill_no}}</p>
                    <p class="dated">Dated : {{$AccountInfo->date}}</p>
                    <p class="amount">Amount : {{$AccountInfo->debit_amount}}{{$AccountInfo->credit_amount}}</p>
                    <p class="amount_word">In Words :</p>
                    <p class="paid_to">Paid To : {{ $userAccountName}}</p>
                    <p class="account_of">On Account Of :    {{ $AccountInfo->officeAccount->name}}</p>
                    <p class="prepared_by">Prepared By _______________ </p>
                    <p class="received_by">Received By _______________ </p>
                </div>
            </div>
        </div>
    </div>
   <center> <button type="button" class="btn btn-success" id="print_btn" onclick="for_print();"><i aria-hidden="true"></i>Print</button></center>
</body>
@include('common.footer')

<!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->
<script>
function for_print() {
    var divToPrint = document.getElementById("mypdf_view");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>
</html>