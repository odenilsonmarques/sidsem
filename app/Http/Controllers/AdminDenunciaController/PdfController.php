<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Denuncia;

use PDF;

class PdfController extends Controller
{
   public function exibePdf(){
    $dados = Denuncia::all()->sortByDesc('id')->first();
    $pdf = PDF::loadView('adminDenunciaView.pdf',compact('dados'));
    return $pdf->setPaper('a4')->stream('denuncia.pdf');
   }
}
