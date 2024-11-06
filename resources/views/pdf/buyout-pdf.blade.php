<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ayrus!">
    <meta name="keywords" content="Best Mortgage Broker Company in Dubai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyOut Calculation - The Lending Tree</title>

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
            padding: 7px 15px;
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
        <h1 class="title">BuyOut Calculation Report</h1>

        <table class="schedule-table">
            <thead class="table-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Old Loan Details</th>
                <th scope="col">New Loan Details</th>
            </tr>
            </thead>
            <tr>
                <td>Loan Amount (AED)</td>
                <td>{{ isset($current_outstanding_amount) ? number_format($current_outstanding_amount, 2) : 0 }}</td>
                <td>{{ isset($new_loan_amount) ? number_format($new_loan_amount, 2) : 0 }}</td>
            </tr>
            <tr>
                <td>Loan Tenure (Months)</td>
                <td>{{ isset($current_loan_tenure) ? $current_loan_tenure : 0 }}</td>
                <td>{{ isset($new_loan_tenure) ? $new_loan_tenure : 0 }}</td>
            </tr>
            <tr>
                <td>EMI (AED)</td>
                <td>{{ isset($current_monthly_installment) ? number_format($current_monthly_installment, 2) : 0 }}</td>
                <td>{{ isset($new_monthly_installment) ? number_format($new_monthly_installment, 2) : 0 }}</td>
            </tr>
            <tr>
                <td>Interest Rate (%)</td>
                <td>{{ isset($current_interest_rate) ? number_format($current_interest_rate, 2) : 0 }} %</td>
                <td>{{ isset($new_interest_rate) ? number_format($new_interest_rate, 2) : 0 }} %</td>
            </tr>
        </table>

        <table class="schedule-table">
            <thead class="table-info">
            <tr>
                <th scope="col" colspan="2">Comparative Analysis (in AED)</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Difference in EMI</td>
                <td class="w-25">{{ (isset($current_monthly_installment) && isset($new_monthly_installment)) ? number_format( $current_monthly_installment - $new_monthly_installment, 2) : 0 }}</td>
            </tr>
            @if(isset($additional_cash_amount) && $additional_cash_amount > 0)
                <tr>
                    <td class="w-75">Extra Cash in Hand</td>
                    <td class="w-25">{{ isset($additional_cash_amount) ? number_format($additional_cash_amount,2) : 0 }}</td>
                </tr>
            @endif
        </table>

        <table class="schedule-table">
            <thead class="table-warning">
            <tr>
                <th scope="col" colspan="2">Interest and Payable (in AED)</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Total Interest Payable</td>
                <td class="w-25">{{ isset($total_interest_payable) ? number_format($total_interest_payable, 2) : 0}}</td>

            </tr>
            <tr>
                <td class="w-75">Total Payable (Principal & Interest)</td>
                <td class="w-25">{{ isset($total_payable) ? number_format($total_payable,2) : 0}}</td>
            </tr>
        </table>

        @if(isset($gross_savings) && number_format($gross_savings, 2) > 0)
            <table class="schedule-table">
                <thead class="table-info">
                <tr>
                    <th scope="col" colspan="2">Savings Analysis</th>
                </tr>
                </thead>
                <tr>
                    <td class="w-75">Gross Savings (AED)</td>
                    <td class="w-25">{{ isset($gross_savings) ? number_format($gross_savings, 2) : 0 }}</td>

                </tr>
                <tr>
                    <td class="w-75">Net Savings (AED)</td>
                    <td class="w-25">{{ isset($net_savings) ? number_format($net_savings,2) : 0 }}</td>
                </tr>
                <tr>
                    <td class="w-75">Net Savings (in %)</td>
                    <td class="w-25">{{ isset($net_savings_percentage) ? number_format($net_savings_percentage,2) : 0 }} %</td>
                </tr>
                <tr>
                    <td class="w-75">Break-Even (in months)</td>
                    <td class="w-25">{{ isset($breakeven_months) ? number_format($breakeven_months,2) : 0 }}</td>
                </tr>
            </table>
        @endif

        <table class="schedule-table">
            <thead class="table-warning">
            <tr>
                <th scope="col" colspan="2">Moving Cost (in AED)</th>
            </tr>
            </thead>
            <tr>
                <td class="w-75">Bank Processing Fee</td>
                <td class="w-25">{{ isset($cost_of_moving['bank_processing_fee']) ? number_format($cost_of_moving['bank_processing_fee'], 2) : 0 }}</td>

            </tr>
            <tr>
                <td class="w-75">Bank Valuation Fee</td>
                <td class="w-25">{{ isset($cost_of_moving['bank_valuation_fee']) ? number_format($cost_of_moving['bank_valuation_fee'],2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">DLD Mortgage Release Fee</td>
                <td class="w-25">{{ isset($cost_of_moving['dld_mortgage_release']) ? number_format($cost_of_moving['dld_mortgage_release'],2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">DLD Trustee Fee</td>
                <td class="w-25">{{ isset($cost_of_moving['dld_trustee_fee']) ? number_format($cost_of_moving['dld_trustee_fee'],2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">DLD Mortgage Registration Fee</td>
                <td class="w-25">{{ isset($cost_of_moving['dld_mortgage_registration_fee']) ? number_format($cost_of_moving['dld_mortgage_registration_fee'],2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75">DLD Misc. Fees</td>
                <td class="w-25">{{ isset($cost_of_moving['dld_misc']) ? number_format($cost_of_moving['dld_misc'],2) : 0 }}</td>
            </tr>
            <tr>
                <td class="w-75"><strong>Total Moving Cost</strong></td>
                <td class="w-25"><strong>{{ isset($total_cost_of_moving) ? number_format($total_cost_of_moving,2) : 0 }} (AED)</strong></td>
            </tr>
        </table>
    </div>
</main>
</body>
</html>
