

{!! Form::open(array('url' => '/jobs')) !!}
{!! Form::text('nomeJob', 'Nome do Job')!!}
<select name="parceiro" class="selectpicker" style="margin: 3px;">
    <option value="1">Parceiro 1</option>
    <option value="2">Parceiro 2</option>
    <option value="3">Parceiro 3</option>
</select>

<select name="praca" class="selectpicker" style="margin: 3px;">
    <option value="1">Praça 1</option>
    <option value="2">praca 2</option>
    <option value="3">praca 3</option>
</select>
{!! Form::text('codPar', 'Nome do Coordenador Parceiro')!!}
{!! Form::text('codemail', 'Email do Coordenador Parceiro')!!}

{!! Form::text('tele', 'Telefone Coordenador')!!}
{!! Form::select('nf', array('true' => 'Sim', 'false' => 'Não'), null, ['placeholder' => 'Nota Fiscal']) !!}
{{ Form::date('inicio', \Carbon\Carbon::now()->format('\\I\\n\\i\\c\\i\\o d / m / Y'))}}
{{ Form::date('fim', \Carbon\Carbon::now()->format('\\F\\i\\m d / m / Y'))}}

{!! Form::select('nf', array('1' => 'Orçamento', '2' => 'Standy by', '3'=>'Execução','4'=>'Encerrada','5'=>'Fechada','6'=>'Finalizada','7'=>'Faturamento'), null, ['placeholder' => 'Status']) !!}

{!! Form::submit('Registrar') !!}
{!! Form::close() !!}