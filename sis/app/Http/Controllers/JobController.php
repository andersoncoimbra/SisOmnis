<?php

namespace App\Http\Controllers;

use App\Job;
use App\VagasJob;
use Illuminate\Http\Request;

use App\Http\Requests;

class JobController extends Controller
{
    //
    private $parceiro = ['','Parceiro 1','Parceiro 2','Parceiro 3','Parceiro 4','Parceiro 5','Parceiro 6','Parceiro 7','Parceiro 8','Parceiro 9','Parceiro 2','Parceiro 3','Parceiro 4','Parceiro 5','Parceiro 6','Parceiro 7','Parceiro 8','Parceiro 9','Parceiro 2','Parceiro 3','Parceiro 4','Parceiro 5','Parceiro 6','Parceiro 7','Parceiro 8','Parceiro 9'];
    private $status = ['','Orçamento', 'Stand by', 'Exercução'];
    private $praca = ['','Praça 1', 'Praça 2', 'Praça 3', 'Praça 4', 'Praça 5'];
    private $cargo = ['','cargo 1','cargo 2','cargo 3','cargo 4','cargo 5','cargo 6','cargo 7','cargo 8','cargo 9','cargo 2','cargo 3','cargo 4','cargo 5','cargo 6','cargo 7','cargo 8','cargo 9','cargo 2','cargo 3','cargo 4','cargo 5','cargo 6','cargo 7','cargo 8','cargo 9'];
    private $regime = ['','Regime 1', 'Regime 2', 'Regime 3', 'Regime 4', 'Regime 5'];
    private $contratante = ['','Omnis', 'Parceiro', 'Outro'];



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
        $dp = $this->cargo;
        $ds = $this->status;
        $p  = $this->praca;

        //dd();
        return view('layouts.detalhes', ['job' => Job::find($id), 'dp'=> $dp, 'ds'=>$ds, 'p'=>$p]);
    }

    public function solicitapessoal($idjob)
    {
        $nomejob = Job::find($idjob)->nomeJob;
        $vj = VagasJob::all()->where('id_job', $idjob);
        $c  = $this->cargo;
        $r = $this->regime;
        $ct = $this->contratante;
        return view('layouts.vagasjob', ['id'=> $idjob, 'vj'=>$vj, 'nomejob'=>$nomejob, 'c'=>$c, 'r'=>$r, 'ct'=>$ct]);
    }

    public function postsolicitapessoal(Request $request, $idjob)
    {
        //dd($request);
     $rq = $request;
        return view('layouts.vagasjob', ['id'=> $idjob,'rq'=>$rq]);
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
