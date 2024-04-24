<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .invoice-wrap {
    padding: 20px;
    border: 1px solid #ccc;
    margin: 20px;
    background-color: #f9f9f9;
    max-width: 600px;
    margin: 0 auto;
}

.invoice-box {
    border: 1px solid #ddd;
    padding: 20px;
}

.text-center {
    text-align: center;
}

.mb-30 {
    margin-bottom: 30px;
}

.pb-30 {
    padding-bottom: 30px;
}

.pb-20 {
    padding-bottom: 20px;
}

.weight-600 {
    font-weight: 600;
}

.invoice-info {
    display: flex;
    justify-content: space-between;
}

.info-left, .info-right {
    width: 48%;
}

.right-align {
    text-align: right;
}

.invoice-desc {
    margin-top: 30px;
}

.invoice-desc-head {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
}

.desc-col {
    width: 23%;
    font-weight: 600;
}

.invoice-desc-body ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.desc-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
}

.invoice-desc-footer {
    border-top: 1px solid #ccc;
    padding-top: 20px;
}

.footer-head {
    display: flex;
    justify-content: space-between;
    font-weight: 600;
}

.footer-body ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-row {
    display: flex;
    justify-content: space-between;
}

.footer-left {
    width: 40%;
}

.due-by {
    width: 30%;
    text-align: center;
}

.total-due {
    width: 30%;
    text-align: right;
    color: #d9534f;
    font-size: 1.2rem;
}


    </style>

<div class="invoice-wrap">
    <div class="invoice-box">
        <div class="invoice-header">
            {{-- <div class="logo text-center">
                <img src="{{ asset('vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
            </div> --}}
        </div>
        <h4 class="text-center mb-30 weight-600">INVOICE</h4>
        <div class="invoice-info">
            <div class="info-left">
                <h5>{{ $invoices->client }}</h5>
                <p class="date">Date Issued: <strong>{{ $invoices->date }}</strong></p>
                <p class="invoice-no">Invoice No: <strong>4556</strong></p>
            </div>
            {{-- <div class="info-right">
                <div class="right-align">
                    <p>App Name: MedAPP</p>
                    <p>Address: Hay Narjis</p>
                    <p>City: Fes</p>
                    <p>Postcode: 3346</p>
                </div>
            </div> --}}
        </div>
        <hr>
        <div class="invoice-desc">
            <table class="invoice-table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Rate</th>
                        <th>Hours</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Website Design</td>
                        <td>$20</td>
                        <td>100</td>
                        <td>$2000</td>
                    </tr>
                    <tr>
                        <td>Logo Design</td>
                        <td>$20</td>
                        <td>100</td>
                        <td>$2000</td>
                    </tr>
                    <tr>
                        <td>Website Design</td>
                        <td>$20</td>
                        <td>100</td>
                        <td>$2000</td>
                    </tr>
                    <tr>
                        <td>Logo Design</td>
                        <td>$20</td>
                        <td>100</td>
                        <td>$2000</td>
                    </tr>
                </tbody>
            </table>
            <div class="invoice-desc-footer">
                <table class="footer-table">
                    <thead>
                        <tr>
                            <th>Bank Info</th>
                            <th>Due By</th>
                            <th>Total Due</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Account No: <strong>{{ $invoices->accountno }}</strong></p>
                                <p>Code: <strong>{{ $invoices->code }}</strong></p>
                            </td>
                            <td>{{ $invoices->due }}</td>
                            <td style="color: red">$8000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h4 class="text-center pb-20">Thank You!!</h4>
    </div>
</div>




</body>
</html>
