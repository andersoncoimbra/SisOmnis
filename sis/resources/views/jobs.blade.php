@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de Jobs</div>

                    <div class="panel-body">
                        @include('forms.addJob')

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Jobs</div>

                    <div class="panel-body">

                        @include('layouts.listajobs')

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
