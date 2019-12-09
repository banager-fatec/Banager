@extends('adminlte::page')

@section('title', 'biblioteca')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Alteração de dados do bibliotecario</h1>
@stop

@section('content')
<form method="post" action="{{ route('bibliotecario.update', $corretor->id) }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="_method" value="PUT">

     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i>Tela de alteração de dados
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome do biliotecario <span class="text-red">*</span></label>
                         <input type="text" name="nome" id="nome" class="form-control" required value="{{ $corretor->nome }}">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-3">
                         <label for="fone">senha</label>
                         <input type="text" name="senha" id="senha" class="form-control" value="{{ $corretor->fone }}">
                    </div>
               </div>

               <a href="{{ route('bibliotecario.index') }}" class="btn btn-default">
                    <i class="fas fa-reply"></i> Voltar
               </a>

               <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Gravar
               </button>
          </div>
     </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop
