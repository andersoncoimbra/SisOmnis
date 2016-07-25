<?php

namespace App\Http\Controllers;

use App\Parceiro;
use Illuminate\Http\Request;

use App\Http\Requests;

class CadastroController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $parceiros = Parceiro::all();
        
        return view('cadastros', ['parceiro'=>$parceiros]);
    }
    
    public function addParceiro(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|min:3',
            'cnpj' => 'required|min:14|max:18'
        ]);

        $parceiro = new Parceiro();
        $parceiro->nome = $request->nome;
        $parceiro->cnpj = $request->cnpj;
        $parceiro->save();


      return redirect()->route('cadastros');
    }
}
