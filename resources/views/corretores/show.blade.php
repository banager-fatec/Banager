@extends('adminlte::page')

@section('title', 'ImóvelSJC')

@section('content_header')
<h1>Detalhes do Corretor</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes do cadastro do corretor
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td class="col-md-2">ID</td>
                    <td class="col-md-10">{{ $corretor->id }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Nome do Corretor</td>
                    <td class="col-md-10">{{ $corretor->nome }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Nro Creci</td>
                    <td class="col-md-10">{{ $corretor->creci }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Telefone</td>
                    <td class="col-md-10">{{ $corretor->fone }}</td>
                </tr>

                <tr>
                    <td class="col-md-2">Email</td>
                    <td class="col-md-10">{{ $corretor->email }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{ route('corretores.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>



@stop

@section('css')

@stop

@section('js')

@stop
