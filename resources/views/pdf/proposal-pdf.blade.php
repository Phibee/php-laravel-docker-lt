<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ayrus!">
    <meta name="keywords" content="Best Mortgage Broker Company in Dubai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Proposal</title>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <style>

        * {
            font-family: "Poppins", sans-serif !important;
        }

        html,body{
            margin: 100px 10px 100px;
            padding: 0;
        }

        
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
            z-index: 0;
        }

        header img {
            width: 150px;
            height: auto;
            padding-left: 30px;
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
        
        h1.title {
            color: #5c4679;
            text-align: center;
            font-size: 2em;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
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
            /* padding: 10px; */
            min-height: 100vh;
            position: relative;
        }

        /* Info and Details */
        p {
            margin-bottom: 10px;
            font-size: 12px;
            color: #444;
        }

        ul li {
            margin-bottom: 5px;
            font-size: 12px;
            color: #444;
            padding-left: 20px;
        }

        /* Table Styles */
        .table-default {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;

        }

        .table-default th {
            background-color: #e0daf8;
            color: #5c4679;
            padding: 12px 15px;
            border-radius: 8px 8px 0 0;
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            border: 1px solid #fff;
        }

        .table-default td {
            padding: 7px 15px;
            font-size: 1em;
            color: #555;
        }


        .logo.logo-left {
            transform: translateX(-20px)
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

        h1.sub-header {
            font-weight: bold;
            font-size: 14px;
            margin: 0;
        }

        .table-default.style1{
            border-collapse: separate;
            border-spacing: 15px 0px;
        }

        .table-default.style1 td {
            padding: 7px 15px;
            font-size: 1em;
            color: #555;
            /* border: 1px solid red;
            border-radius: 12px; */
        }

        .text-bold {
            font-weight: bold;
        }
        
        .text-header-highlight {
            color: #5c4679;
            font-size: 14px;
        }

.table{
  display:table;
  width:100%;
  table-layout:fixed;
}

.table_cell{
  display:table-cell;
  width:16.66%;
  border:solid black 1px;
}

.table_cell_full{
  display:table-cell;
  width:70%;
}

.full-width {

}

.fit-width{
    width: fit-content;
}

.top_border{
    border-top-right-radius: 50%;
}

    ul.checked li:before {
        display: inline-block;
        font-size: inherit;
        height: 1em;
        overflow: visible;
        position: relative;
        top: 0.2rem;
        width: .875em;
        content: url("data:image/svg+xml,%3Csvg%20viewBox%3D'0%200%2024%2024'%20fill%3D'none'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Cg%20id%3D'SVGRepo_bgCarrier'%20stroke-width%3D'0'%3E%3C%2Fg%3E%3Cg%20id%3D'SVGRepo_tracerCarrier'%20stroke-linecap%3D'round'%20stroke-linejoin%3D'round'%3E%3C%2Fg%3E%3Cg%20id%3D'SVGRepo_iconCarrier'%3E%3Cpath%20d%3D'M4%2012.6111L8.92308%2017.5L20%206.5'%20stroke%3D'%23000000'%20stroke-width%3D'2'%20stroke-linecap%3D'round'%20stroke-linejoin%3D'round'%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
        margin-right: .5rem;
    }

    ul.reset-style li {
        margin: 0;
        padding: 0;
    }


    ul li[class*="-icon"]:before { 
        margin-left: 0;
        padding: 0;
        display: inline-block;
        font-size: inherit;
        height: 1em;
        overflow: visible;
        position: relative;
        top: 0.2rem;
        margin-right: .5rem;
    }

    ul li.email-icon:before { 
        width: .875em;
        content: url("data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2020%2020%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000000%22%3E%3Cg%20id%3D%22SVGRepo_bgCarrier%22%20stroke-width%3D%220%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_tracerCarrier%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_iconCarrier%22%3E%3Cg%20id%3D%22layer1%22%3E%3Cpath%20d%3D%22M%200%204%20L%200%2017%20L%2020%2017%20L%2020%204%20L%200%204%20z%20M%201.6621094%205%20L%2018.337891%205%20L%2010.376953%2011%20L%209.6230469%2011%20L%201.6621094%205%20z%20M%201%205.9335938%20L%209.0488281%2012%20L%2010.951172%2012%20L%2019%205.9335938%20L%2019%2015.246094%20L%2013.533203%2011.128906%20L%2013.53125%2011.126953%20L%2012.701172%2011.751953%20L%2012.703125%2011.753906%20L%2018.337891%2016%20L%201.6621094%2016%20L%207.296875%2011.753906%20L%207.2988281%2011.751953%20L%206.46875%2011.126953%20L%206.4667969%2011.128906%20L%201%2015.246094%20L%201%205.9335938%20z%20%22%20style%3D%22fill%3A%23222222%3B%20fill-opacity%3A1%3B%20stroke%3Anone%3B%20stroke-width%3A0px%3B%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }

    ul li.phone-icon:before { 
        width: .875em;
        content: url("data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20id%3D%22SVGRepo_bgCarrier%22%20stroke-width%3D%220%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_tracerCarrier%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_iconCarrier%22%3E%3Cpath%20d%3D%22M3%205.5C3%2014.0604%209.93959%2021%2018.5%2021C18.8862%2021%2019.2691%2020.9859%2019.6483%2020.9581C20.0834%2020.9262%2020.3009%2020.9103%2020.499%2020.7963C20.663%2020.7019%2020.8185%2020.5345%2020.9007%2020.364C21%2020.1582%2021%2019.9181%2021%2019.438V16.6207C21%2016.2169%2021%2016.015%2020.9335%2015.842C20.8749%2015.6891%2020.7795%2015.553%2020.6559%2015.4456C20.516%2015.324%2020.3262%2015.255%2019.9468%2015.117L16.74%2013.9509C16.2985%2013.7904%2016.0777%2013.7101%2015.8683%2013.7237C15.6836%2013.7357%2015.5059%2013.7988%2015.3549%2013.9058C15.1837%2014.0271%2015.0629%2014.2285%2014.8212%2014.6314L14%2016C11.3501%2014.7999%209.2019%2012.6489%208%2010L9.36863%209.17882C9.77145%208.93713%209.97286%208.81628%2010.0942%208.64506C10.2012%208.49408%2010.2643%208.31637%2010.2763%208.1317C10.2899%207.92227%2010.2096%207.70153%2010.0491%207.26005L8.88299%204.05321C8.745%203.67376%208.67601%203.48403%208.55442%203.3441C8.44701%203.22049%208.31089%203.12515%208.15802%203.06645C7.98496%203%207.78308%203%207.37932%203H4.56201C4.08188%203%203.84181%203%203.63598%203.09925C3.4655%203.18146%203.29814%203.33701%203.2037%203.50103C3.08968%203.69907%203.07375%203.91662%203.04189%204.35173C3.01413%204.73086%203%205.11378%203%205.5Z%22%20stroke%3D%22%23000000%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }

    ul li.globe-icon:before { 
        width: 1em;
        content: url("data:image/svg+xml,%3Csvg%20fill%3D%22%23000000%22%20viewBox%3D%220%200%2032%2032%22%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20id%3D%22SVGRepo_bgCarrier%22%20stroke-width%3D%220%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_tracerCarrier%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_iconCarrier%22%3E%3Cpath%20d%3D%22M32.032%2016c0-8.501-6.677-15.472-15.072-15.969-0.173-0.019-0.346-0.032-0.523-0.032-0.052%200-0.104%200.005-0.156%200.007-0.093-0.002-0.186-0.007-0.281-0.007-8.84%200-16.032%207.178-16.032%2016.001s7.192%2016.001%2016.032%2016.001c0.094%200%200.188-0.006%200.281-0.008%200.052%200.002%200.104%200.008%200.156%200.008%200.176%200%200.349-0.012%200.523-0.032%208.395-0.497%2015.072-7.468%2015.072-15.969zM29.049%2021.151c-0.551-0.16-1.935-0.507-4.377-0.794%200.202-1.381%200.313-2.84%200.313-4.357%200-1.196-0.069-2.354-0.197-3.469%203.094-0.37%204.45-0.835%204.54-0.867l-0.372-1.050c0.695%201.659%201.080%203.478%201.080%205.386%200%201.818-0.352%203.555-0.987%205.151zM8.921%2016c0-1.119%200.074-2.212%200.21-3.263%201.621%200.127%203.561%200.222%205.839%200.243v6.939c-2.219%200.021-4.114%200.111-5.709%200.234-0.22-1.319-0.34-2.715-0.34-4.154zM16.967%202.132c2.452%200.711%204.552%204.115%205.492%208.628-1.512%200.12-3.332%200.209-5.492%200.229v-8.857zM14.971%202.156v8.832c-2.136-0.021-3.965-0.109-5.502-0.226%200.96-4.457%203.076-7.836%205.502-8.606zM14.971%2021.913l0%207.929c-2.263-0.718-4.256-3.705-5.293-7.719%201.492-0.11%203.253-0.189%205.292-0.21zM16.967%2029.868l-0-7.955c2.061%200.020%203.814%200.102%205.288%200.217-1.019%204.067-3%207.076-5.288%207.738zM16.967%2019.92l0-6.939c2.291-0.021%204.218-0.118%205.818-0.25%200.131%201.053%200.203%202.147%200.203%203.268%200%201.442-0.116%202.84-0.329%204.16-1.575-0.128-3.462-0.219-5.692-0.24zM28.588%209.81c-0.302%200.094-1.564%200.453-4.094%200.751-0.564-2.998-1.584-5.561-2.91-7.412%203.048%201.325%205.535%203.697%207.005%206.661zM11.213%202.831c-1.632%201.873-2.963%204.568-3.691%207.754-2.265-0.245-3.623-0.534-4.166-0.665%201.585-3.27%204.407-5.836%207.856-7.088zM2.614%2011.787c0.385%200.104%201.841%200.467%204.549%200.766-0.155%201.107-0.24%202.26-0.24%203.447%200%201.509%200.136%202.96%200.383%204.334-2.325%200.251-3.755%200.552-4.396%200.706-0.607-1.566-0.944-3.264-0.944-5.041%200-1.467%200.228-2.883%200.649-4.213zM3.784%2022.886c0.727-0.154%202.029-0.39%203.956-0.591%200.759%202.803%201.993%205.175%203.473%206.874-3.16-1.148-5.79-3.398-7.429-6.282v0zM21.583%2028.849c1.195-1.665%202.14-3.907%202.728-6.525%201.982%200.227%203.226%200.494%203.853%200.652-1.5%202.596-3.808%204.669-6.581%205.873z%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }

    ul li.calculator-icon:before { 
        width: 1em;
        content: url("data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20id%3D%22SVGRepo_bgCarrier%22%20stroke-width%3D%220%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_tracerCarrier%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_iconCarrier%22%3E%3Cpath%20d%3D%22M9%207H15%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M15%2017V14%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M15%2011H15.01%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M12%2011H12.01%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M9%2011H9.01%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M9%2014H9.01%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M12%2014H12.01%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M12%2017H12.01%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M9%2017H9.01%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3Cpath%20d%3D%22M5%207C5%205.11438%205%204.17157%205.58579%203.58579C6.17157%203%207.11438%203%209%203H12H15C16.8856%203%2017.8284%203%2018.4142%203.58579C19%204.17157%2019%205.11438%2019%207V12V17C19%2018.8856%2019%2019.8284%2018.4142%2020.4142C17.8284%2021%2016.8856%2021%2015%2021H12H9C7.11438%2021%206.17157%2021%205.58579%2020.4142C5%2019.8284%205%2018.8856%205%2017V12V7Z%22%20stroke%3D%22%23323232%22%20stroke-width%3D%222%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }

    ul li.bank-icon:before { 
        width: 1em;
        content: url("data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20id%3D%22SVGRepo_bgCarrier%22%20stroke-width%3D%220%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_tracerCarrier%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_iconCarrier%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M20.6092%208.34165L12.0001%203.64575L3.39093%208.34165L3.75007%209.75007H5.25007V15.7501H4.50007V17.2501H19.5001V15.7501H18.7501V9.75007H20.2501L20.6092%208.34165ZM6.75007%2015.7501V9.75007H9.00007V15.7501H6.75007ZM10.5001%2015.7501V9.75007H13.5001V15.7501H10.5001ZM15.0001%2015.7501V9.75007H17.2501V15.7501H15.0001ZM12.0001%205.35438L17.3088%208.25007H6.69131L12.0001%205.35438ZM3%2019.5001H21V18.0001H3V19.5001Z%22%20fill%3D%22%23000000%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }

    ul li.calendar-icon:before { 
        width: .875em;
        margin-right: .6rem;
        content: url("data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20id%3D%22SVGRepo_bgCarrier%22%20stroke-width%3D%220%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_tracerCarrier%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fg%3E%3Cg%20id%3D%22SVGRepo_iconCarrier%22%3E%3Cpath%20d%3D%22M3%2010H21M7%203V5M17%203V5M6.2%2021H17.8C18.9201%2021%2019.4802%2021%2019.908%2020.782C20.2843%2020.5903%2020.5903%2020.2843%2020.782%2019.908C21%2019.4802%2021%2018.9201%2021%2017.8V8.2C21%207.07989%2021%206.51984%2020.782%206.09202C20.5903%205.71569%2020.2843%205.40973%2019.908%205.21799C19.4802%205%2018.9201%205%2017.8%205H6.2C5.0799%205%204.51984%205%204.09202%205.21799C3.71569%205.40973%203.40973%205.71569%203.21799%206.09202C3%206.51984%203%207.07989%203%208.2V17.8C3%2018.9201%203%2019.4802%203.21799%2019.908C3.40973%2020.2843%203.71569%2020.5903%204.09202%2020.782C4.51984%2021%205.07989%2021%206.2%2021Z%22%20stroke%3D%22%23000000%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    }

    .mb-5 {
        margin-bottom: 0.5rem;
    }

    table.default {
        border-spacing:0;
        border-collapse:collapse;
    }

    table.default td{
        margin: 0 !important;
        padding: 0 !important;
        text-align: left;
    }

    table.deals td {
    }

    .table td.w_40 {
        width: 37% !important;
    }

    .table td.w_20 {  
        width: 26% !important;
    }
    .table td.w_50 {  
        width: 50% !important;
    }
    .table td.w_30 {  
        width: 30% !important;
    }

    .reset-styles * {
        all: unset !important;
    }

    .reset-styles ul {
        padding-left: 14px;
    }

    .reset-styles ul li {
        list-style-type: disc !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .reset-styles ol li {
        list-style-type: decimal !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .small-text{
        font-size: 0.8em !important;
    }

    table.collapsed {
        border-collapse: collapse;
    }

    </style>
</head>
<body>
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
        <div class="logo logo-left mb-20 text-left">
            <img src="{{ public_path('img/logo.png') }}" class="w-60" alt="Company Logo">
        </div>

        <div class="mb-20">
            <h1 class="text-2xl text-bold">Mortgage Proposal</h1>
        </div>

        <div class="mb-10">
            <div><strong>Prepared for:</strong> {{ $client }}</div>
            <div><strong>Prepared by:</strong> {{ $currentUser['name'] }}</div>
            <div><strong>Date:</strong> {{ date('Y/m/d') }}</div>
        </div>

        <div>
            <h1 class="mb-2 text-bold">Greetings and Introduction</h1>
            <p>Dear {{ $client }},</p>
            <p>Welcome to <strong>The Lending Tree</strong>, where “Impossible is not an outcome” defines our approach to helping clients achieve their financial aspirations. We take pride in providing personalized, customer-focused solutions that make your mortgage journey smooth, transparent, and efficient.</p>
            <p>Whether you’re purchasing your first home, upgrading, or refinancing, we’re here to support you with expert advice and tailored options.</p>
            <p>This document provides an overview of your mortgage options and the next steps in the process. Should you have any questions or require further assistance, we’re just a call away.</p>
        </div>
       
        <div class="page_break"></div>

        <header>
            <div class="logo">
                <img src="{{ public_path('img/logo.png') }}" alt="Company Logo">
            </div>
        </header>
        
        <h1 class="text-bold mb-2 mt-4">Financial Overview</h1>
        <p>This section highlights the primary aspects of your financial profile and mortgage preferences. Based on this information, we have outlined the most suitable options below.</p>

        <h1 class="title">THE {{count($bankProducts) > 1 ? 'TOP '.count($bankProducts) : ''}} BEST MORTGAGE DEALS</h1>

         <table class="table-default style1 deals">
            <tbody>
                <tr>
                    @foreach ($bankProducts as $product => $productItem)
                        <td class="border border-slate-400 p-4 rounded-lg">
                            <h1 class="title">{{ $product }}</h1>
                            <ul class="reset-style mb-2">
                                <li class="text-slate-400 small-text">{{ $productItem['productId'] }}</li>
                                <li>
                                    <span>Interest Rate:</span>
                                    @if($productItem['rateType'] === "Variable")
                                        <span class="text-bold">{{ number_format($productItem['variableInterestRate'], 2) }}</span>
                                    @else 
                                        <span class="text-bold">{{ number_format($productItem['fixedInterestRate'], 2) }}</span>
                                    @endif
                                    @if(empty($productItem['fixedYears']) && $productItem['rateType'] === "Variable")
                                        <span class="text-slate-400 small-text">variable</span>
                                    @else 
                                        <span class="text-slate-400 small-text">{{ $productItem['fixedYears'] }} year</span>
                                    @endif
                                </li>
                                <li><span>Bank Fee: </span><span class="text-bold">{{ $productItem['bankProcessingFeePercentage'] }}%</span></li>
                            </ul>
                            <table class="default w-full">
                                <tr>
                                    <td class="px-1">
                                        <div>Monthly Payment</div>
                                        <div class="text-bold">AED {{ number_format($productItem['monthlyPayment'], 2) }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-1">
                                        <div>Loan Amount</div>
                                        <div class="text-bold">AED {{ number_format($amountTotals['loanAmount'], 2) }}</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>

        <div class="mb-6">
            <div class="bg-slate-900 w-48 px-4 py-1 top-[-0.8rem] transform text-[0.7rem] text-white rounded-t-md">
                Personal and Mortgage Details
            </div>
            <table class="table">
                    <tr>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell" valign="top">
                            <strong>Employment Status</strong>
                            <div>{{ $employmentStatus }}</div>
                        </td>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell" valign="top">
                            <strong>Mortgage Type</strong>
                            <div>{{ $mortgageType }}</div>
                        </td>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell" valign="top">
                            <strong>Resident Status</strong>
                            <div>{{ $residentStatus }}</div>
                        </td>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell" valign="top">
                            <strong>Transaction Type</strong>
                            <div>{{ $transactionType }}</div>
                        </td>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell" valign="top">
                            <strong>Mortgage Length</strong>
                            <div>{{ $mortgageLength }} months</div>
                        </td>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell" valign="top">
                            <strong>Location</strong>
                            @if($emirates == "Dubai")
                                <div>{{ $emirates }},{{ $subArea }}</div>
                            @else
                                <div>{{ $emirates }}</div>
                            @endif
                        </td>
                    </tr>
            </table>
        </div>

        <div>
            <div class="bg-slate-900 w-48 px-4 py-1 top-[-0.8rem] transform text-[0.7rem] text-white rounded-t-md">
                Property and Loan Information
            </div>
            <table class="table">
                    <tr>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell" valign="top">
                            <div class="mb-1">
                                <strong>Property Value</strong>
                                <div>AED {{ number_format($propertyValue, 2) }}</div>
                            </div>
                            <div class="mb-1">
                                <strong>Down Payment</strong>
                                <div>AED {{ number_format($downPayment, 2) }}</div>
                            </div>

                            @if($transactionType === "BuyOut + Equity" || $transactionType === "Handover + Equity")
                                <div class="mb-1">
                                    <strong>Equity Release Amount</strong>
                                    <div>AED {{ number_format($equityReleaseAmount, 2) }}</div>
                                </div>

                                @if($transactionType === "BuyOut + Equity")
                                <div>
                                    <strong>Outstanding Amount</strong>
                                    <div>AED {{ number_format($outstandingLoanAmount, 2) }}</div>
                                </div>
                                @endif
                            @endif
                   
                        </td>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell w_20" valign="top">
                            <div class="mb-5">
                                <strong>Loan to Value<br/>(LTV)</strong>
                                <div>{{ $ltv }}%</div>
                            </div>
                            <div>
                                <strong>Associated Fee Financing</strong>
                                <div>{{ $isFeeFinancing ? 'Yes' : 'No' }}</div>
                            </div>
                        </td>
                        <td class="border border-slate-400 py-2 px-1 rounded-lg table-cell" valign="top">
                            <table class="table w-full">
                                <tr>
                                    <td>
                                        <div class="text-bold">Original Loan Amount</div>
                                        <div>AED {{ number_format($amountTotals['loanAmount'], 2) }}</div>
                                    </td>
                                </tr>
                                <tr class="text-violet-600">
                                    <td>
                                        <div class="text-bold">Fee Financing Charge</div>
                                        <div>AED {{ number_format($amountTotals['feeFinanceCharge'], 2) }}</div>
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td>
                                        <div class="text-bold">Total Loan Amount</div>
                                        <div>AED {{ number_format($amountTotals['loanAmount'] + $amountTotals['feeFinanceCharge'], 2) }}</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
            </table>
        </div>

        <div class="page_break"></div>

        <header>
            <div class="logo">
                <img src="{{ public_path('img/logo.png') }}" alt="Company Logo">
            </div>
        </header>
        
        <div>
            <table class="table mb-2 border-b">
                <td class="table_cell_fit">
                    <div class="bg-slate-900 w-40 h-8 px-4 py-1 top-[-0.8rem] transform text-[0.7rem] text-white rounded-t-md pt-3" >
                    Offer Summary
                    </div>
                </td>
                <td class="table_cell_full">To help you make an informed decision, we present the following options tailored to your needs:</td>
            </table>
            <table class="table">
                    <tr>
                        <td class="py-0 px-1 table-cell" valign="top"></td>
                        @foreach ($bankProducts as $product => $productItem)
                        <td>
                            <div class="border rounded-t-lg border-slate-400 px-4 py-2 text-center" style="background-color: {{ $productItem['color'] }};">      
                                <div class="font-violet-700 text-bold text-header-highlight">Offer {{ $product }}</div>
                                <div>{{ $productItem['bank']['bankName']  }}</div>
                            </div>
                        </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Monthly Mortgage Payment</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">AED {{ number_format($productItem['monthlyPayment'], 2) }}</div>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Rate Terms</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                @if($productItem['rateType'] === "fixed")
                                    <div class="text-bold">{{ $productItem['fixedInterestRate'] }} year (fixed)</div>
                                @else
                                    <div class="text-bold">{{ $productItem['variableInterestRate'] }}</div>
                                @endif

                                @if($productItem['rateType'] === "fixed")
                                    <div>{{ $productItem['fixedYears'] }} year (fixed)</div>
                                @else
                                    <div>{{ $productItem['rateType'] }}</div>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Mortgage Type</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div>{{ $productItem['typeOfFinance'] }}</div>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Follow On Rate</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">{{ $productItem['variableInterestRate'] }}%</div>
                                <div>+{{ $productItem['eiborRateMonths'] }} months EIBOR</div>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Minimum Floor Rate</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">{{ number_format($productItem['floor'], 2) }}%</div>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Property Insurance</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">AED {{ number_format($productItem['propertyInsuranceVal'], 2) }}</div>
                                <div>({{ number_format($productItem['propertyInsurance'], 4) }}% per of the property value to be paid )</div>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Life Insurance</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">AED {{ number_format($productItem['lifeInsuranceVal'], 2) }}</div>
                                <div>({{ number_format($productItem['lifeInsurance'], 4) }}% on outstanding loan amount)</div>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Over Payment</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div>{{ $productItem['overPayment'] }}</div>
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        @if($transactionType === "BuyOut + Equity" || $transactionType === "Pure Equity")
                            <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Equity Processing Fee</td>
                        @else
                            <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Bank Processing Fee</td>
                        @endif

                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">AED {{ number_format($productItem['bankProcessingFeeVal'], 2) }}</div>
                                <div>({{ number_format($productItem['bankProcessingFeePercent'], 4) }}% of 
                                    @if($transactionType === "BuyOut + Equity" || $transactionType === "Pure Equity")
                                        <span>Equity Release Amount</span>
                                    @elseif($transactionType === "Handover + Equity")
                                        <span>Handover Amount</span>
                                    @elseif($transactionType !== "BuyOut + Equity" || $transactionType !== "Handover + Equity")
                                        <span>Loan Amount</span>
                                    @endif    
                                )</div>
                            </td>
                        @endforeach
                    </tr>  

                    @if($transactionType === "Handover + Equity")
                        <tr>
                            <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Equity Processing Fee</td>

                            @foreach ($bankProducts as $product => $productItem)
                                <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                    <div class="text-bold">AED {{ number_format($productItem['equityFeeVal'], 2) }}</div>
                                    <div>({{ number_format($productItem['equityFeePercent'], 2) }}% of Equity Release Amount)</div>
                                </td>
                            @endforeach
                        </tr>  
                    @endif

                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Property Valuation Fee (Fixed)</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">AED {{ number_format($productItem['propertyValuationFee'], 2) }}</div>
                            </td>
                        @endforeach
                    </tr>  
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg" valign="middle">Early Settlement Fee</td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div>{{ $productItem['earlySettlementFee'] }}</div>
                            </td>
                        @endforeach
                    </tr>          
            </table>

            <div class="bg-slate-100 px-4 py-2 rounded-lg mt-6 mb-6">
                <p>Each option offers unique advantages based on your financial priorities, such as lower monthly payments, stability in interest rates, or greater flexibility for early repayments.</p>
            </div>
        </div>

        <div class="page_break"></div>

        @if($hasAdditionalInfoNotes)        
            <header>
                <div class="logo">
                    <img src="{{ public_path('img/logo.png') }}" alt="Company Logo">
                </div>
            </header>
            
            <div>
                <table class="table mb-2 border-b">
                    <td class="table_cell_fit"><div class="bg-slate-900 w-40 px-4 py-1 top-[-0.8rem] transform text-[0.7rem] text-white rounded-t-md">
                        Additional Information
                    </div></td>
                    <td class="table_cell_full"></td>
                </table>
                <table class="table">
                        <tr>
                            @foreach ($bankProducts as $product => $productItem)
                            <td>
                                <div class="border rounded-t-lg border-slate-400 px-4 py-2 text-center" style="background-color: {{ $productItem['color'] }};">      
                                    <div class="font-violet-700 text-bold text-header-highlight">Offer {{ $product }}</div>
                                    <div>{{ $productItem['bank']['bankName']  }}</div>
                                </div>
                            </td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($bankProducts as $product => $productItem)
                                <td class="border border-slate-400 px-1 py-1" style="background-color: {{ $productItem['color'] }};">
                                    &nbsp;
                                    <div>{!! $productItem['additionalInformation'] !!}</div>
                                </td>
                            @endforeach
                        </tr>      
                </table>
            </div> 

            <div class="page_break"></div>
        @endif
        
        <header>
            <div class="logo">
                <img src="{{ public_path('img/logo.png') }}" alt="Company Logo">
            </div>
        </header>
        
        <div class="mb-2">
            <table class="table mb-2 border-b">
                <td class="table_cell_fit">
                    <div class="bg-slate-900 w-40 h-8 px-4 py-1 top-[-0.8rem] transform text-[0.7rem] text-white rounded-t-md pt-3" >
                    Transaction Fees
                    </div>
                </td>
                <td class="table_cell_full">
                    Transparency is one of our core values. Below is a breakdown of the fees involved in your mortgage process:
                </td>
            </table>
            <table class="table">
                    <tr>
                        <td class="py-2 px-1 rounded-lg table-cell" valign="top"></td>
                        @foreach ($bankProducts as $product => $productItem)
                        <td>
                            <div class="border rounded-t-lg border-slate-400 px-4 py-2 text-center" style="background-color: {{ $productItem['color'] }};">      
                                <div class="font-violet-700 text-bold text-header-highlight">Offer {{ $product }}</div>
                                <div>{{ $productItem['bank']['bankName']  }}</div>
                            </div>
                        </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td colspan="{{count($bankProducts) + 1}}" class="border border-slate-400 py-2 px-4 bg-slate-100" valign="top">Government Fees</td>
                    </tr>

                     @if($additionalFee['checkLandDepartment'])
                        <tr>
                            <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">
                                @if($emirates === "Dubai" && $subArea === "DIFC")
                                    <div>DIFC Transfer Fee</div>
                                @else 
                                    <div>Land Department Fee</div>
                                @endif
                                <div>
                                    ({{ $fees['landDepartmentFee']['amount'] }}% of Purchase Price) 
                                    @if(!empty($fees['landDepartmentFee']['additionalCharges']))
                                        <span>+ AED {{ $fees['landDepartmentFee']['additionalCharges'] }}</span>
                                    @endif
                                </div>
                            </td>
                            @foreach ($bankProducts as $product => $productItem)
                                <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                    <div class="text-bold">AED {{ number_format($productItem['landDepartmentFee']['amount'],2) }}</div>

                                    @if($isFeeFinancing && $productItem['landDepartmentFee']['value'] > 0)
                                        <div>(Out of {{ number_format($productItem['landDepartmentFee']['value'], 2) }})</div>
                                    @endif
                                </td>
                            @endforeach
                        </tr>  
                    @endif

                     @if($additionalFee['checkMortgageRegistration'])
                        <tr>
                            <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">
                                @if($emirates === "Dubai" && $subArea === "DIFC")
                                    <div>DIFC Mortgage Registration Fee</div>
                                @else 
                                    <div>Mortgage Registration Fee</div>
                                @endif
                                <div>
                                    ({{ $fees['mortgageRegistrationtFee']['amount'] }}% of Loan Amount) 
                                    @if(!empty($fees['mortgageRegistrationtFee']['additionalCharges']))
                                        <span>+ AED {{ $fees['mortgageRegistrationtFee']['additionalCharges'] }}</span>
                                    @endif
                                </div>
                            </td>
                            @foreach ($bankProducts as $product => $productItem)
                                <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                    <div class="text-bold">AED {{ number_format($productItem['mortgageRegistrationtFee']['amount'],2) }}</div>
                                </td>
                            @endforeach
                        </tr>   
                    @endif

                    @if($additionalFee['checkMortgageRelease'])
                        <tr>
                            <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">
                                <div>Mortgage Release Fee</div>
                                <div>
                                    @if($fees['mortgageReleaseFee']['amount'] !== 0)
                                        <span>({{ $fees['mortgageReleaseFee']['amount'] }}% of Purchase Price)</span>
                                    @endif
                                    @if($fees['mortgageReleaseFee']['amount'] > 0 && $fees['mortgageReleaseFee']['additionalCharges'] !== 0)
                                        <span>+ AED {{ $fees['mortgageReleaseFee']['additionalCharges'] }}</span>
                                    @endif
                                    @if($fees['mortgageReleaseFee']['amount'] === 0 && $fees['mortgageReleaseFee']['additionalCharges'] >= 0)
                                        <span>(Fixed)</span>
                                    @endif
                                </div>
                            </td>
                            @foreach ($bankProducts as $product => $productItem)
                                <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                    <div class="text-bold">AED {{ $productItem['mortgageReleaseFee']['amount'] }}</div>
                                </td>
                            @endforeach
                        </tr>   
                    @endif
                    
                     @if($additionalFee['checkTransferCenter'])
                        <tr>
                            <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">
                                <div>Transfer Center Fee</div>
                                <div>(fixed) (inclusive of VAT)</div>
                            </td>
                            @foreach ($bankProducts as $product => $productItem)
                                <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                    <div class="text-bold">AED {{ number_format($productItem['transferCostCenter']['amount'], 2) }}</div>
                                </td>
                            @endforeach
                        </tr>  
                    @endif
                     
                    <tr>
                        <td colspan="{{count($bankProducts) + 1}}" class="border border-slate-400 py-2 px-4 bg-slate-100" valign="top">Bank Fees</td>
                    </tr>    
                    <tr>
                        @if($transactionType === "BuyOut + Equity" || $transactionType === "Pure Equity")
                            <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">Equity Processing Fee</td>
                        @else
                            <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">Bank Processing Fee</td>
                        @endif
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">AED {{ number_format($productItem['bankProcessingFeeVal'], 2) }}</div>
                            </td>
                        @endforeach
                    </tr>  

                    @if($transactionType === "Handover + Equity")
                        <tr>
                            <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">Equity Processing Fee</td>

                            @foreach ($bankProducts as $product => $productItem)
                                <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                    <div class="text-bold">AED {{ number_format($productItem['equityFeeVal'], 2) }}</div>
                                </td>
                            @endforeach
                        </tr>  
                    @endif

                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">
                            <div>Property Valuation</div>
                            <div>(Fixed)</div>
                        </td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">AED {{ number_format($productItem['propertyValuationFee'], 2) }}</div>
                            </td>
                        @endforeach
                    </tr>  
                    <tr>
                        <td colspan="{{count($bankProducts) + 1}}" class="border border-slate-400 py-2 px-4 bg-slate-100" valign="top">Other Fees</td>
                    </tr>    

                    @if($additionalFee['checkRealEstate'])
                        <tr>
                            <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">
                                <div>Real Estate Fee</div>
                                <div>( {{ number_format($fees['realEstateFee']['amount'], 2) }}% of Purchase Price) (inclusive of 5% VAT)</div>
                            </td>
                            @foreach ($bankProducts as $product => $productItem)
                                <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                    <div class="text-bold">AED {{ number_format($productItem['realEstateFee']['amount'], 2) }}</div>
                                    
                                    @if($isFeeFinancing && $productItem['realEstateFee']['value'] > 0)
                                        <div>(Out of {{ number_format($productItem['realEstateFee']['value'], 2) }})</div>
                                    @endif
                                </td>
                            @endforeach
                        </tr> 
                    @endif
                    
                    <tr>
                        <td class="border border-slate-400 px-4 py-1 rounded-lg text-center" valign="middle">
                            <div>Mortgage Broker Fee</div>    
                            <div>(fixed) (inclusive of VAT)</div>
                        </td>
                        @foreach ($bankProducts as $product => $productItem)
                            <td class="border border-slate-400 px-4 py-1" style="background-color: {{ $productItem['color'] }};">
                                <div class="text-bold">AED {{ number_format($mortgageBrokerFee, 2) }}</div>
                            </td>
                        @endforeach
                    </tr>
            </table>
        </div>


        <table class="table collapsed mt-6 border border-slate-400">
                <tr>
                    <td class="py-1 px-1 rounded-lg text-center text-bold border border-slate-400" valign="top">Total Fees Upfront</td>
                    @foreach ($bankProducts as $product => $productItem)
                        <td class="py-1 px-1 rounded-lg text-left border border-slate-400" valign="top">AED {{ number_format($productItem['totalFeeUpfront'],2) }}</td>    
                    @endforeach
                </tr>
                <tr>
                    <td class="py-1 px-1 rounded-lg text-center text-bold border border-slate-400" valign="top">Down Payment</td>
                    @foreach ($bankProducts as $product => $productItem)
                        <td class="py-1 px-1 rounded-lg text-left border border-slate-400" valign="top">AED {{ number_format($downPayment,2) }}</td>    
                    @endforeach
                </tr>
                <tr class="border-t">
                    <td class="py-1 px-1 rounded-lg text-center text-bold border border-slate-400" valign="top">Total Required Upfront</td>
                    @foreach ($bankProducts as $product => $productItem) 
                        <td class="py-1 px-1 rounded-lg text-left border border-slate-400" valign="top">AED {{ number_format($productItem['totalRequiredUpfront'],2) }}</td>    
                    @endforeach
                </tr>
        </table>
        
        <div class="bg-slate-100 px-4 py-2 rounded-lg mt-4 mb-4">
            <div class="text-bold">Please Note:</div>
            <p>These fees are indicative and may vary depending on the bank’s final offer. VAT may also be applicable to some charges.</p>
        </div>

        <div class="page_break"></div>
        
        @if((!empty($requiredDocs) || !empty($supportDocs)) && $showRequiredDocs)         
            <div>
                <header>
                    <div class="logo">
                        <img src="{{ public_path('img/logo.png') }}" alt="Company Logo">
                    </div>
                </header>
                @if(!empty($requiredDocs))
                    <div class="mb-6">
                        <table class="table mb-2 border-b">
                            <td class="table_cell_fit"><div class="bg-slate-900 w-40 px-4 py-1 top-[-0.8rem] transform text-[0.7rem] text-white rounded-t-md">
                                Required Documents
                            </div></td>
                            <td class="table_cell_full"></td>
                        </table>
                        <div class="reset-styles">
                            {!! $requiredDocs !!}
                        </div>
                    </div>
                @endif

                @if(!empty($supportDocs))
                <div class="mb-6">
                    <table class="table mb-2 border-b">
                        <td class="table_cell_fit"><div class="bg-slate-900 w-40 px-4 py-1 top-[-0.8rem] transform text-[0.7rem] text-white rounded-t-md">
                            Supporting Documents
                        </div></td>
                        <td class="table_cell_full"></td>
                    </table>
                    <div class="reset-styles">
                        {!! $supportDocs !!}
                    </div>
                </div>
                @endif
                <div class="page_break"></div>
            </div>
        @endif

        <div>
            <header>
                    <div class="logo">
                        <img src="{{ public_path('img/logo.png') }}" alt="Company Logo">
                    </div>
            </header>

            <h1 class="text-bold">What to Expect Next</h1>
            <p>We aim to keep the process straightforward and stress-free. Here’s how it works:</p>
            <div class="pl-4 mb-4">
                <ol>
                    <li>
                        <div class="text-bold">1.  Document Submission:</div>
                        <div class="pl-3">To get started, we will need a few essential documents to verify your eligibility and proceed with the application. These typically include identification, income verification, and other supporting paperwork specific to your circumstances.</div>
                    </li>
                    <li>
                        <div class="text-bold">2.  Pre-Approval:</div>
                        <div class="pl-3">Once we receive your documents, we will work with the bank to secure a pre-approval. This confirms your eligibility for the loan amount and provides clarity as you move forward. Pre-approvals are generally valid for 30–60 days, depending on the institution.</div>
                    </li>
                    <li>
                        <div class="text-bold">3.  Property Valuation:</div>
                        <div class="pl-3">After pre-approval, the property will be evaluated by the bank through an approved third-party assessor. This ensures its value aligns with loan requirements and supports the final mortgage terms.</div>
                    </li>
                    <li>
                        <div class="text-bold">4.  Finalization of Offer:</div>
                        <div class="pl-3">Once the valuation is complete, we will finalize the mortgage terms that best suit your needs, including the interest rate, monthly payments, and tenure. You’ll then proceed to sign the agreement.</div>
                    </li>
                    <li>
                        <div class="text-bold">4.  Disbursement & Loan Booking:</div>
                        <div class="pl-3">After the final approval, the agreed loan amount will be disbursed. The funds will be transferred to the designated account (e.g., seller’s account for a purchase), and your mortgage will be officially booked.</div>
                    </li>
                </ol>
            </div>

            <p>At each step, our team is here to guide you, address your concerns, and ensure a seamless experience.</p>

            <div class="mt-4">
                <h1 class="text-bold">Contact Information</h1>
                <p>We are here to guide and support you at every stage. For assistance or additional information, please contact:</p>
                <div><strong>Name:</strong> {{ $currentUser['name'] }}</div>
                <div><strong>Email:</strong> {{ $currentUser['email'] }}</div>
                <div><strong>Phone:</strong> {{ $currentUser['phoneNumber'] }}</div>
            </div>


            <div class="bg-slate-100 px-4 py-2 rounded-lg mt-6 mb-6">
                <div class="text-bold">Disclaimer</div>
                <p>The details in this proposal are for illustrative purposes only and are subject to change based on the bank’s evaluation and terms. Additional conditions may apply as per regulatory and financial guidelines.</p>
            </div>
            <p>Thank you for trusting <strong>The Lending Tree</strong>. We are excited to assist you in this important journey and are committed to making it a stress-free and rewarding experience.</p>
        </div>

        <div>
            <h1 class="text-bold">Warm regards,</h1>
            <div>{{ $currentUser['name'] }}</div>
            <div class="text-bold">The Lending Tree</div>
        </div>

    </div>
</main>
</body>
</html>
