<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfFormatController extends Controller
{
    public function PdfFormat(){
        return view('pdf_format.pdf_format');
    }
    public function PdfFormatView(){
        return view('pdf_format.pdf_format_view');
    }
}