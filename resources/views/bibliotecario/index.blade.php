@extends('adminlte::page')

@section('title', 'biblioteca')

@section('content_header')
    <h1><i class="fas fa-bars"></i>  Listar Bibliotecario</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        Relaçao dos Bibliotecario
        <div class="pull-right">
            <a href="{{ route('bibliotecario.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="{{ route('bibliotecario.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Registro</a>
        </div>
    </div>
    <div class="panel-body">
        <table id="table-bibliotecario" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome do bibliotecario</td>
                    <td>CPF</td>
                </tr>
            </thead>
            <tbody>
                @foreach($bibliotecarios as $bibliotecario)
                <tr>
                    <td>{{ $bibliotecario->id }}</td>
                    <td>{{ $bibliotecario->nome }}</td>
                    <td>{{ $bibliotecario->CPF}}</td>
                    <td>
                        <!-- botao de detalhes do registro -->
                        <a href="{{ route('bibliotecario.show', $bibliotecario) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>

                        <!-- botao de edicao do registro -->
                        <a href="{{ route('bibliotecario.edit', $bibliotecario->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>

                        <!-- botao de exclusao -->
                        <form action="{{ route('bibliotecario.destroy', $bibliotecario) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
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
    $('#table-bibliotecario').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
