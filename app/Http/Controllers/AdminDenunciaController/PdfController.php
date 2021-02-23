<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Denuncia;

use PDF;

class PdfController extends Controller
{
   public function exibePdf(request $id){
     
       $dados = Denuncia::find($id->id - env('MASK_ID'));
       return view('AdminDenunciaView.pdf',['dados'=>$dados]);
      //$dados = Denuncia::where('id','=',$id)->first();
      //$dados = Denuncia::all()->sortByDesc('id')->first();
      //return redirect()->route('pdf');
      //$pdf = PDF::loadView('adminDenunciaView.pdf',['dados'=>$dados]);
      //return $pdf->setPaper('a4')->stream('denuncia.pdf');
     // return $pdf->setPaper('a4')->download('denuncia.pdf');
   }
}
