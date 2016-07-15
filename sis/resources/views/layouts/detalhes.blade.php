@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Job - {{$job->nomeJob}}</h3></div>
                    <div class="panel-body col-md-12">
                        <div class="col-md-4">
                            <dl>
                                <dt>Nome do Job</dt>
                                <dd>{{$job->nomeJob}}</dd>
                                <dt>Parceiro</dt>
                                <dd>{{$dp[$job->parceiro]}}</dd>
                                <dt>Praça</dt>
                                <dd>{{$p[$job->praca]}}</dd>
                                <dt>Coordenador Parceiro</dt>
                                <dd>{{$job->codnome}}</dd>
                                <dt>E-mail coordenador</dt>
                                <dd>{{$job->codemail}}</dd>
                                <dt>Telefone</dt>
                                <dd>{{$job->codtele}}</dd>
                                <dt>Nota Fiscal</dt>
                                <dd>{{$job->nf? 'Sim': 'Não'}}</dd>
                                <dt>Data de Inicio</dt>
                                <dd>{{date('d / m / Y', strtotime($job->inicio))}}</dd>
                                <dt>Data de Finalização </dt>
                                <dd>{{date('d / m / Y', strtotime($job->fim))}}</dd>
                                <dt>Status</dt>
                                <dd>{{$ds[$job->status]}}</dd>
                            </dl>
                        </div>
                        <div class="col-md-4 "></div>
                        <div class="col-md-4 clearfix"></div>

                        <div class="col-md-12 clearfix">
                            <button class="btn btn-danger ">Editar</button>
                           <a href="{{url()->current()}}/sp"> <button class="btn btn-default ">Solicitações de pessoal</button>
                            <button class="btn btn-info ">Solicitações</button>
                            <button class="btn btn-success ">Editar detalhes</button>
                            <button class="btn btn-warning ">Gerar Orçamento</button>
                            <button class="btn btn-primary ">Conta</button>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection
