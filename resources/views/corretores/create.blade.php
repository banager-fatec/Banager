@extends('adminlte::page')

@section('title', 'ImóvelSJC')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Inclusao de Corretores</h1>
@stop

@section('content')
<form method="post" action="{{ route('corretores.store') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i> Tela de cadastramento de corretor
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome do Corretor <span class="text-red">*</span></label>
                         <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-2">
                         <label for="creci">Nº do CRECI <span class="text-red">*</span></label>
                         <input type="text" name="creci" id="creci" class="form-control" required>
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-3">
                         <label for="fone">Nº do Telefone</label>
                         <input type="text" name="fone" id="fone" class="form-control">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-4">
                         <label for="email">E-mail <span class="text-red">*</span></label>
                         <input type="email" name="email" id="email" class="form-control" required>
                    </div>
               </div>
          </div>

          <div class="panel-footer">
               <a href="{{ route('corretores.index') }}" class="btn btn-default">
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
