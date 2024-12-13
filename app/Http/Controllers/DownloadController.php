<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;

class DownloadController extends Controller
{
    
    public function mortgagePdf(Request $request)
    {
        $data = $request->all();

        $pdf = PDF::loadView('pdf.mortgage-pdf', $data);

        return $pdf->download('Mortgage-Calculation-by-TheLendingTree.pdf');
    }

    public function buyoutPdf(Request $request)
    {
        $data = $request->all();

        $pdf = PDF::loadView('pdf.buyout-pdf', $data);

        return $pdf->download('BuyOut-Calculation-by-TheLendingTree.pdf');
    }

    public function dbrPdf(Request $request) 
    {
        $data = $request->all();

        $pdf = PDF::loadView('pdf.dbr-pdf', $data);

        return $pdf->download('DBR-Calculation-by-TheLendingTree.pdf');  
    }

    public function proposalPdf(Request $request) 
    {   
        $data = $request->all();

        $pdf = PDF::loadView('pdf.proposal-pdf', $data);

        return $pdf->download('Client-Proposal.pdf');
    }

}
