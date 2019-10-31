@extends('adminlte::page')

@section('title', 'ImovelCerto')

@section('content_header')
    <h1><i class="fas fa-list-ult">Listar Corretores</h1>

@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        Relação dos Corretores
        <div class="pull-rght">
            <a href="#" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="#" class="btn btn-success"><i class="fas fa-puls"></i> Inserir novo registro</a>
        </div>
    </div>    
<div class="panel-body">
    <table id="table-corretores" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>NOME DO CORRETOR</td>
                <td>E-MAIL</td>
                <td>AÇÕES</td>
            </tr>
        </thead>
        <tbody> 
        
        @foreach($corretores as $corretor)
            <tr>
                <td>{{ $cooretor->id }}</td>
                <td>{{ $corretor->nome }}</td>
                <td>{{ $corretor->email }}</td>
                <td>AÇÕES</td>
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
    $('#table-corretores').DataTable ({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop