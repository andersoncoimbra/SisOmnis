
<div class="form-horizontal">
    {!! Form::open(array('url' => '/jobs', 'class'=>'form-horizontal')) !!}
    <div class="form-group">
        {!! Form::label('nomejob', 'Nome do Job', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            <input name="nomejob" class="form-control" type="text" placeholder="Escreva o nome do Job">
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('parceiro', 'Selecione o parceiro', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <select name="parceiro" class="form-control selectpicker" style="margin: 3px;">
                <option value="1">Parceiro 1</option>
                <option value="2">Parceiro 2</option>
                <option value="3">Parceiro 3</option>
                <option value="4">Parceiro 4</option>
                <option value="6">Parceiro 5</option>
                <option value="7">Parceiro 6</option>
                <option value="8">Parceiro 7</option>
                <option value="9">Parceiro 8</option>
                <option value="10">Parceiro 10</option>
                <option value="11">Parceiro 13</option>
                <option value="12">Parceiro 32</option>
                <option value="13">Parceiro 33</option>
                <option value="14">Parceiro 34</option>
                <option value="15">Parceiro 31</option>
                <option value="16">Parceiro 314</option>
                <option value="17">Parceiro 34</option>
                <option value="18">Parceiro 35</option>
                <option value="19">Parceiro 36</option>
                <option value="20">Parceiro 37</option>
            </select>
        </div>

        {!! Form::label('praca', 'Selecione a praça', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <select name="praca" class="form-control selectpicker" style="margin: 3px;">
                <option value="1">Praça 1</option>
                <option value="2">Praça 2</option>
                <option value="3">Praça 3</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('codpar', 'Coordenador Parceiro', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            <input name="codpar" class="form-control" type="text" placeholder="Nome do Coordenador Parceiro">
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('codemail', 'Email', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input name="codemail" class="form-control" type="text" placeholder="Email do Coordenador Parceiro">
        </div>

        {!! Form::label('codetele', 'Telefone', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input name="codetele" class="form-control" type="text" placeholder="Telefone Coordenador">
        </div>
    </div>

    <div class="form-group">

    </div>

    <div class="form-group">
        {!! Form::label('nf', 'Nota fiscal', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            <select name="nf" class="form-control" >
                <option selected="selected" value="">Nota Fiscal</option>
                <option value="true">Sim</option><option value="false">Não</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('inicio', 'Data de Inicio', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input name="inicio"  class="form-control" type="date" placeholder="Inicio 12 / 07 / 2016">
        </div>

        {!! Form::label('fim', 'Data Fim', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input name="fim" class="form-control"  type="date" placeholder="Fim 12 / 07 / 2016">
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('praca', 'Status', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            <select name="status"  class="form-control" >
                <option selected="selected" value="">Status</option>
                <option value="1">Orçamento</option>
                <option value="2">Standy by</option>
                <option value="3">Execução</option>
            </select>
        </div>
    </div>

    <input type="submit" class="btn btn-success" value="Registrar">
    {!! Form::close() !!}
</div>