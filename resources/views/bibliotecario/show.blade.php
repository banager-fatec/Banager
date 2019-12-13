@extends('adminlte::page')

@section('title', 'biblioteca')

@section('content_header')
<h1>Detalhes do bibliotecario</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes do cadastro do bibliotecario
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td class="col-md-2">ID</td>
                    <td class="col-md-10">{{ $bibliotecario->id }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Nome do bibliotecario</td>
                    <td class="col-md-10">{{ $bibliotecario->nome }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">CPF</td>
                    <td class="col-md-10">{{ $bibliotecario->CPF }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">senha</td>
                    <td class="col-md-10">{{ $bibliotecario->senha }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{ route('bibliotecario.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>


@stop

@section('css')

@stop

@section('js')

@stop
