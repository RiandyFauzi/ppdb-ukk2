<?php

namespace App\Http\Controllers;

use App\Ppdb;
use PDF;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print($id)
    {
        $ppdb = Ppdb::find($id);
        $pdf = PDF::loadview('ppdb.print', compact('data'))->setPaper('A4','portrait');
        return $pdf->stream();
    }
}
