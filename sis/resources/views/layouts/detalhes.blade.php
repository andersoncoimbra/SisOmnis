@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Job - {{$job->nomeJob}}</h3></div>
                    <div class="panel-body">
                        <dl>
                            <dt>Nome do Job</dt>
                            <dd>{{$job->nomeJob}}</dd>
                            <dt>Parceiro</dt>
                            <dd>{{$dp[$job->parceiro]}}</dd>
                            <dt>Praça</dt>
                            <dd></dd>
                            <dt>Coordenador Parceiro</dt>
                            <dd>{{$job->codnome}}</dd>
                            <dt>E-mail coordenador</dt>
                            <dd>{{$job->codemail}}</dd>
                            <dt>Telefone</dt>
                            <dd>{{$job->codtele}}</dd>
                            <dt>Nota Fiscal</dt>
                            <dd>{{$job->nf? 'Sim': 'Não'}}</dd>
                            <dt>Data de Inicio</dt>
                            <dd>{{$job->inicio}}</dd>
                            <dt>Data de Finalização </dt>
                            <dd>{{$job->fim}}</dd>
                            <dt>Data de Inicio</dt>
                            <dd>{{$ds[$job->status]}}</dd>
                        </dl>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
