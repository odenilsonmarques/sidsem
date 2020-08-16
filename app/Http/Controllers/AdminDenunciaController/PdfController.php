<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Denuncia;

use PDF;

class PdfController extends Controller
{
   public function exibePdf(Request $id){
      $dados = Denuncia::all()->sortByDesc('id')->first();
      //$dados = Denuncia::find($id)->first();
      $pdf = PDF::loadView('adminDenunciaView.pdf',['dados'=>$dados]);
      return $pdf->setPaper('a4')->stream('denuncia.pdf');
     // return $pdf->setPaper('a4')->download('denuncia.pdf');
   }
}
