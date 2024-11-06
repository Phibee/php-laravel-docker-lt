<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ayrus!">
    <meta name="keywords" content="Best Mortgage Broker Company in Dubai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mortgage Calculation - The Lending Tree</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <style>
        @page {
            margin: 100px 25px;
        }

        /* Header Styles */
        header {
            position: fixed;
            top: -80px;
            left: 0;
            right: 0;
            height: 30px;
            text-align: left;
        }

        header img {
            width: 150px;
            height: auto;
        }

        /* Body Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }

        .page_break {
            page-break-before: always;
        }

        h1 {
            color: #5c4679;
        }

        h1.title {
            text-align: center;
            font-size: 2em;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: underline;
        }

        h2 {
            color: #5c4679;
            font-size: 1.5em;
            margin-top: 0px;
            text-align: center;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            text-decoration: underline;
        }

        h3 {
            color: #5c4679;
            background: #e0daf8;
            text-align: center;
            font-size: 1.25em;
            margin-top: 10px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.7px;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 10px;
            min-height: 100vh;
            position: relative;
        }

        /* Info and Details */
        p {
            margin-bottom: 10px;
            font-size: 12px;
            color: #444;
        }

        p strong {
            color: #5c4679;
        }

        /* Table Styles */
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;

        }

        .schedule-table th {
            background-color: #e0daf8;
            color: #5c4679;
            padding: 12px 15px;
            border-radius: 8px 8px 0 0;
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            border: 1px solid #fff;
        }

        .schedule-table td {
            border: 1px solid #ddd;
            padding: 7px 15px;
            font-size: 1em;
            background-color: #fdfdfd;
            color: #555;
        }

        .center {
            text-align: center;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .schedule-table tr:nth-child(even) td {
            background-color: #f7f7f7;
        }

        footer {
            position: fixed;
            bottom: -55px;
            left: 0;
            right: 0;
            height: 30px;
            text-align: center;
            border-top: 1px solid #5c4679;
        }

        footer p {
            margin: 5px 0;
            font-size: 11px;
        }
    </style>
</head>
<body>
<header>
    <!-- Company Logo -->
    <div class="logo">
        <img src="{{ public_path('img/logo.png') }}" alt="Company Logo">
    </div>
</header>
<footer>
    <!-- Footer -->
    <div class="footer">
        <p><strong>The Lending Tree Commercial Brokers LLC.</strong></p>
        <p><strong>Phone:</strong> +971 4 447 7127 | <strong>Email:</strong> info@thelendingtree.ae</p>
        <p><strong>Address:</strong> 30th Floor, Office No. 3006, The One Tower, Sheikh Zayed Road, Barsha Heights, TECOM, Dubai, UAE</p>
    </div>
</footer>
<main>
    <div class="container">
        <!-- Mortgage Calculation Details -->
        <h1 class="title">Mortgage Calculation Report</h1>

        <table class="schedule-table">
            <thead class="table-danger">
            <tr>
                <th scope="col" colspan="2">Loan Details</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Loan Amount (AED)</td>
                <td class="w-25">{{ isset($loanAmount) ?  number_format($loanAmount,2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">Loan Tenure (Months)</td>
                <td class="w-25">{{ isset($mortgage_period) ?  number_format($mortgage_period) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">Monthly Payment/EMI (AED)</td>
                <td class="w-25">{{ isset($monthlyPayment) ?  number_format($monthlyPayment, 2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">Interest Rate (in %)</td>
                <td class="w-25">{{ isset($interest_rate) ?  number_format($interest_rate, 2) : 0 }} %</td>
            </tr>
        </table>
        <table class="schedule-table">
            <thead class="table-warning">
            <tr>
                <th scope="col" colspan="2">Financial Details</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Total Property Value (AED)</td>
                <td class="w-25">{{ isset($total_amount) ? number_format($total_amount, 2) : 0 }}</td>
            </tr>
            @if(isset($downpayment_amount) && $downpayment_amount>0)
                <tr>
                    <td class="w-75">Down-Payment (in %)</td>
                    <td class="w-25">{{ isset($downpayment_percent) ? number_format($downpayment_percent, 2) : 0 }} %</td>
                </tr>
                <tr>
                    <td class="w-75">Down-Payment Amount (AED)</td>
                    <td class="w-25">{{ isset($downpayment_amount) ? number_format($downpayment_amount, 2) : 0 }}</td>
                </tr>
            @endif
        </table>
        <table class="schedule-table">
            <thead class="table-success">
            <tr>
                <th scope="col" colspan="2">Total Payment (in AED)</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Total Payment (Principal + Interest)</td>
                <td class="w-25">{{ isset($totalPayment) ? number_format($totalPayment, 2) : 0}}</td>
            </tr>
            <tr>
                <td class="w-75">Total Interest Payable</td>
                <td class="w-25">{{ isset($totalInterestPaid) ? number_format($totalInterestPaid,2) : 0 }}</td>
            </tr>
        </table>

        <div class="page_break"></div>

        <h2>Mortgage Amortization Schedule</h2>
        <br/>
        <table class="schedule-table">
            <thead>
            <tr>
                <th>Year</th>
                <th>Principal Paid</th>
                <th>Interest Paid</th>
                <th>Total Paid</th>
                <th>Remaining Balance</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($paymentSchedule as $year => $schedule)
                <tr>
                    <td class="center">{{ $year + 1 }}</td>
                    <td>AED {{ isset($schedule['principalPaid']) ? number_format($schedule['principalPaid'], 2) : 0 }}</td>
                    <td>AED {{ isset($schedule['interestPaid']) ? number_format($schedule['interestPaid'], 2) : 0 }}</td>
                    <td>AED {{ isset($schedule['totalPaid']) ? number_format($schedule['totalPaid'], 2) : 0 }}</td>
                    <td>AED {{ isset($schedule['remainingBalance']) ? number_format($schedule['remainingBalance'], 2) : 0 }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
  
    </div>
</main>
</body>
</html>
