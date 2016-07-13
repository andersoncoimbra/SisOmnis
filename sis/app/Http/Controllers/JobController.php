<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;

class JobController extends Controller
{
    //
    private $parceiro = ['','Parceiro 1','Parceiro 2','Parceiro 3','Parceiro 4','Parceiro 5','Parceiro 6','Parceiro 7','Parceiro 8','Parceiro 9'];
    private $status = ['','Orçamento', 'Stand by', 'Exercução'];
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jobs = Job::all();

        return view('jobs', compact('jobs'));
    }

    public function post(Request $request)
    {
        $this->gravar(
            $request->nomejob,
            $request->parceiro,
            $request->praca, 
            $request->codnome,
            $request->codpar,
            $request->codemail,
            $request->nf,
            $request->codetele,
            $request->inicio,
            $request->fim,
            $request->status
            );
        $jobs = Job::all();

        return view('jobs', compact('jobs'));
    }
    
    public function detalhes($id)
    {
        $dp = $this->parceiro;
        $ds = $this->status;
        return view('layouts.detalhes', ['job' => Job::find($id), 'dp'=> $dp, 'ds'=>$ds]);
    }

    protected function gravar($nomejob, $parceiro, $praca, $codnome, $codnome, $codmail, $nf, $codtele, $inicio, $fim, $status)
    {
        $job = new Job();
        
        $job->nomeJob = $nomejob;
        $job->parceiro = $parceiro;
        $job->praca = $praca;
        $job->codnome = $codnome;
        $job->codemail = $codmail;
        $job->nf = $nf;
        $job->codtele = $codtele;
        $job->inicio = $inicio;
        $job->fim = $fim;
        $job->status = $status;

        $job->save();
    }
}
