<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ayrus!">
    <meta name="keywords" content="Best Mortgage Broker Company in Dubai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBR Calculation - The Lending Tree</title>

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
        <p><strong>Address:</strong> 30th Floor, Office No. 3006, The One Tower, Sheikh Zayed Road, Barsha Heights,
            TECOM, Dubai, UAE</p>
    </div>
</footer>
<main>
    <div class="container">
        <h1 class="title">DBR Calculation Report</h1>
        <p><strong>Notice:</strong> To assess your eligibility, banks apply a <strong>Stress Test Rate</strong>, which
            currently averages around <strong>7.3%</strong> <i>(the rate used in this calculator)</i>. However, this
            <strong>rate can vary</strong> between <i>6.4% and 8.5%</i>, depending on the specific bank and its
            policies.</p>
        <table class="schedule-table">
            <thead>
            <tr>
                <th scope="col" colspan="2">Income Details</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Total Income Per Month</td>
                <td class="w-25">AED {{ isset($totalIncomePerMonth) ? number_format( $totalIncomePerMonth, 2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">Total Liabilities Per Month</td>
                <td class="w-25">AED {{ isset($totalLiabilities) ? number_format( $totalLiabilities, 2) : 0 }}</td>
            </tr>
        </table>

        <table class="schedule-table">
            <thead>
            <tr>
                <th scope="col" colspan="2">DBR Details</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Current DBR (in %)</td>
                <td class="w-25">{{ isset($currentDBR) ? number_format($currentDBR, 2) : 0 }} %</td>
            </tr>
        </table>

        <table class="schedule-table">
            <thead>
            <tr>
                <th scope="col" colspan="2">Maximum Eligibility</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Maximum Financing Eligibility</td>
                <td class="w-25">AED {{ isset($maxLoanPrincipal) ? number_format($maxLoanPrincipal, 2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">Maximum Loan Tenure</td>
                <td class="w-25">{{ isset($loanTenure) ? number_format($loanTenure,0) : 0 }} Years</td>
            </tr>
        </table>

        <table class="schedule-table">
            <thead>
            <tr>
                <th scope="col" colspan="2">Home Affordability</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Home Affordability</td>
                <td class="w-25">AED {{ isset($homeAffordability) ? number_format($homeAffordability, 2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">Down Payment Required ({{ isset($downPaymentPercent) ? $downPaymentPercent : 0 }} %)</td>
                <td class="w-25">AED {{ isset($downpaymentAmount) ? number_format($downpaymentAmount, 2) : 0 }}</td>
            </tr>
        </table>

       <table class="schedule-table">
            <thead>
            <tr>
                <th scope="col" colspan="4">DBR Calculation Values</th>
            </tr>
            </thead>
            <tr>
                <td class="w-25">Monthly Salary</td>
                <td class="w-25">AED {{ isset($monthly_salary) ? number_format($monthly_salary, 2) : 0 }}</td>
                <td class="w-25">Annual Rental Income</td>
                <td class="w-25">AED {{ isset($annual_rental_income) ? number_format($annual_rental_income, 2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-25">Resident Status</td>
                <td class="w-25">{{ isset($resident_status) ? strtoupper($resident_status) : "" }}</td>
                <td class="w-25">Employment Type</td>
                <td class="w-25">{{ isset($employment_type) ? strtoupper($employment_type) : "" }}</td>
            </tr>
            <tr>
                <td class="w-25">Credit Card Limits (UAE)</td>
                <td class="w-25">AED {{ isset($credit_card_limits) ? number_format($credit_card_limits, 2) : 0 }}</td>
                <td class="w-25">Personal Loan EMI (Monthly)</td>
                <td class="w-25">AED {{ isset($personal_loan_emi) ? number_format($personal_loan_emi, 2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-25">Auto Loan EMI (Monthly)</td>
                <td class="w-25">AED {{ isset($auto_loan_emi) ? number_format($auto_loan_emi, 2) : 0 }}</td>
                <td class="w-25">Home Loan EMI (Monthly)</td>
                <td class="w-25">AED {{ isset($home_loan_emi) ? number_format($home_loan_emi, 2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-25">Age (Years)</td>
                <td class="w-25">{{ isset($age) ? $age : 0 }}</td>
                <td class="w-25">Stress Test Rate</td>
                <td class="w-25">7.3 %</td>
            </tr>
        </table>
    </div>
</main>
</body>
</html>
