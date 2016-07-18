<?php

namespace App\Http\Controllers;

use App\ExtrasVagasJob;
use App\Job;
use App\VagasJob;
use Illuminate\Http\Request;

use App\Http\Requests;

class JobController extends Controller
{
    //
    private $parceiro = ['','Parceiro 1','Parceiro 2','Parceiro 3','Parceiro 4','Parceiro 5','Parceiro 6','Parceiro 7','Parceiro 8','Parceiro 10','Parceiro 13','Parceiro 32','Parceiro 33','Parceiro 34','Parceiro 31','Parceiro 314','Parceiro 34','Parceiro 35','Parceiro 36','Parceiro 37','Parceiro 15','Parceiro 26','Parceiro 47','Parceiro 58','Parceiro 89'];
    private $status = ['','Orçamento', 'Stand by', 'Exercução'];
    private $praca = ['','Praça 1', 'Praça 2', 'Praça 3', 'Praça 4', 'Praça 5'];
    private $cargo = ['','cargo 1','cargo 2','cargo 3','cargo 4','cargo 5','cargo 6','cargo 7','cargo 8','cargo 9','cargo 2','cargo 3','cargo 4','cargo 5','cargo 6','cargo 7','cargo 8','cargo 9','cargo 2','cargo 3','cargo 4','cargo 5','cargo 6','cargo 7','cargo 8','cargo 9'];
    private $regime = ['','Regime 1', 'Regime 2', 'Regime 3', 'Regime 4', 'Regime 5'];
    private $contratante = ['','Omnis', 'Parceiro', 'Outro'];
    private $periodo = ['', 'Diario', 'Mensal','Unico'];
    private $tipoajuda = ['','Ajuda de custo', 'Pacote de dados', 'Vale transporte'];



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jobs   = Job::orderBy('id','DESC')->get();
        $ds     = $this->status;
        $dp     = $this->parceiro;
        $p      = $this->praca;

        return view('jobs', ['jobs'=> $jobs, 'ds'=> $ds, 'dp'=>$dp, 'p'=>$p]);
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
        
        $vj = VagasJob::all()->where('id_job', $id);

        //dd();
        return view('layouts.detalhes', ['job' => Job::find($id), 'dp'=> $dp, 'ds'=>$ds, 'p'=>$p, 'vj' => $vj]);
    }

    public function solicitapessoal($idjob)
    {
        $nomejob = Job::find($idjob)->nomeJob;
        $vj = VagasJob::all()->where('id_job', $idjob);
        $c  = $this->cargo;
        $r = $this->regime;
        $ct = $this->contratante;
        $per = $this->periodo;
        return view('layouts.vagasjob', ['id'=> $idjob, 'per'=>$per, 'vj'=>$vj, 'nomejob'=>$nomejob, 'c'=>$c, 'r'=>$r, 'ct'=>$ct]);
    }

    public function postsolicitapessoal(Request $request, $idjob)
    {
        //dd($request);
        $nomejob = Job::find($idjob)->nomeJob;
        $per = $this->periodo;
        $c  = $this->cargo;        
        $rq = $request;

        $vaga = new VagasJob();
        $vaga->cargo = $request->cargo;
        $vaga->regime = $request->regime;
        $vaga->contratante = $request->contratante;
        $vaga->quantidade = $request->qtd;
        $vaga->periodo = $request->periodo;
        $vaga->valor = $request->valor;
        $vaga->custo = $request->custo;
        $vaga->id_job = $idjob;
        $vaga->save();

        $vj = VagasJob::all()->where('id_job', $idjob);
        //return view('layouts.vagasjob', ['id'=> $idjob,'rq'=>$rq, 'per'=>$per, 'vj'=>$vj, 'nomejob'=>$nomejob, 'c'=>$c, 'r'=>$r, 'ct'=>$ct]);
        return redirect('/jobs/'.$idjob);
    }

    public function extras($id, $idvj){
        $vj = VagasJob::find($idvj);
        $job = Job::find($id);
        $evj = ExtrasVagasJob::all()->where('id_vaga_job', $idvj);
        $r = $this->regime;
        $ct = $this->contratante;
        $dp = $this->cargo;
        $p  = $this->praca;
        $per = $this->periodo;
        $tipo = $this->tipoajuda;


        return view('layouts.extras', ['id'=>$id, 'job'=>$job, 'vj'=> $vj, 'dp'=>$dp, 'p'=>$p, 'r'=>$r, 'ct'=>$ct, 'per'=>$per, 'evj'=>$evj, 'tipo'=>$tipo]);
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
