@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table">
                        <caption> Usuarios cadastrados</caption>
                        <tr><th>Nome</th><th>Email</th></tr>
                        @forelse($users as $user)
                            <tr><td>{{$user->name}}</td><td>{{$user->email}}</td></tr>
                        @empty
                            <p>Sem cadastro</p>
                        @endforelse

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
