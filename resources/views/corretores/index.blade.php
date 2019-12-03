@extends('adminlte::page')

@section('title', 'ImóvelCerto')

@section('content_header')
    <h1><i class="fas fa-bars"></i>  Listar Corretores</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        Relaçao dos Corretores
        <div class="pull-right">
            <a href="{{ route('corretores.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="{{ route('corretores.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Registro</a>
        </div>
    </div>
    <div class="panel-body">
        <table id="table-corretores" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome do Corretor</td>
                    <td>E-Mail</td>
                    <td>Açoes</td>
                </tr>
            </thead>
            <tbody>
                @foreach($corretores as $corretor)
                <tr>
                    <td>{{ $corretor->id }}</td>
                    <td>{{ $corretor->nome }}</td>
                    <td>{{ $corretor->email}}</td>
                    <td>
                        <!-- botao de detalhes do registro -->
                        <a href="{{ route('corretores.show', $corretor) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>

                        <!-- botao de edicao do registro -->
                        <a href="{{ route('corretores.edit', $corretor->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>

                        <!-- botao de exclusao -->
                        <form action="{{ route('corretores.destroy', $corretor) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                               <i class="fas fa-fx fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#table-corretores').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
