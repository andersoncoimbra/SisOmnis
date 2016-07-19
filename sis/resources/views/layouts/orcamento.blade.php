@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="print" class="panel panel-default">
                    <div class="panel-heading">
                        <div class="col-md-12">
                            <div class="col-md-4">
                            <img src="{{URL::to('assets/logo.png')}}" style="height: 80px; width: auto;">
                            </div>
                            <div class="col-md-8">
                            <h3>{{$job->nomeJob}}</h3>
                            </div>
                        </div>
                        <br>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6" style="border: 1px solid #dddddd; border-right: none;">
                            <table class="table" style="margin-top: 3px; border: 1px solid #dddddd; margin: 10px">
                                <tr><th class="active">Parceiro:</th> <td>{{$p[$job->parceiro]}}</td></tr>
                            </table>
                            <table  class="table" style="margin-top: 3px; border: 1px solid #dddddd; margin: 10px">
                                <tr><th class="active">Praça:</th> <td>{{$pc[$job->praca]}}</td></tr>
                            </table>
                            <table  class="table" style="margin-top: 3px; border: 1px solid #dddddd; margin: 10px">
                                <tr><th class="active">Atemdimento:</th> <td></td></tr>
                            </table>
                        </div>
                        <div class="col-md-6" style="border: 1px solid #dddddd">
                            <table class="table" style="margin-top: 3px; border: 1px solid #dddddd; margin: 10px">
                                <tr><th class="active">Cordenador:</th> <td>{{$job->codnome}}</td></tr>
                            </table>
                            <table  class="table" style="margin-top: 3px; border: 1px solid #dddddd; margin: 10px">
                                <tr><th class="active">Período da Ação:</th> <td>De {{date('d / m ', strtotime($job->inicio))}} A {{date('d / m / Y', strtotime($job->fim))}}</td></tr>
                            </table>
                            <table  class="table" style="margin-top: 3px; border: 1px solid #dddddd; margin: 10px">
                                <tr><th class="active">Data do Briefing:</th> <td>{{date('d / m / Y', strtotime($job->created_at))}}</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="print" class="panel panel-default">
                    <div class="panel-heading">
                        <button id="btn">Imprimir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

