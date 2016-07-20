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
                        <div class="col-md-4 ">
                            <p>Vagas do Job</p>
                            <table class="table">
                                <tr><th>Qtd</th><th>Cargo</th><th>Valor</th><th>Custo</th></tr>
                               <?php
                                $custototal = null;
                                $valortotal = null;
                                 ?>
                                @forelse($vj as $v)
                                    <tr><td>{{$v->quantidade}}</td><td>{{$dp[$v->cargo]}}</td><td>{{$v->valor}}</td><td>{{$v->custo}}</td></tr>
                                    <?php
                                    $custototal += $v->quantidade*$v->custo;
                                    $valortotal += $v->quantidade*$v->valor;
                                    ?>
                                @empty
                                    <tr><td>Sem cargos adicionados</td></tr>
                                @endforelse
                            </table>
                            @if($custototal && $valortotal)
                            <p class="bg-warning" style="padding: 10px; text-align: right">Contrações Custo total: <strong>{{$custototal}}</strong></p>
                            <p class="bg-primary" style="padding: 10px; text-align: right">Contrações Valor total: <strong>{{$valortotal}}</strong></p>
                            @endif
                        </div>
                        <div class="col-md-4 clearfix">
                            <p class="bg-success" style="padding: 10px; text-align: right">Valor global: <strong>R$ {{$job->valor}}</strong></p>
                            @if($custototal > $job->valor)
                                <p class="bg-danger" style="padding: 10px; text-align: right">Atenção prejuizo em <strong>R$ {{$custototal-$job->valor }}</strong></p>
                            @endif
                        </div>

                        <div class="col-md-12 clearfix">
                            <button class="btn btn-danger ">Editar</button>
                            <a href="{{url()->current()}}/sp"> <button class="btn btn-default ">Solicitações de pessoal</button></a>
                            <button class="btn btn-info ">Solicitações</button>
                            <button class="btn btn-success ">Informaçoes do Job</button>
                            <a href="{{url()->current()}}/o"><button class="btn btn-warning ">Gerar Orçamento</button></a>
                            <button class="btn btn-primary ">Conta</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
