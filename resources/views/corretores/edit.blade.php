@extends('adminlte::page')

@section('title', 'ImóvelSJC')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Alteração de dados do Corretor</h1>
@stop

@section('content')
<form method="post" action="{{ route('corretores.update', $corretor->id) }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="_method" value="PUT">

     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i> Tela de alteração de dados
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome do Corretor <span class="text-red">*</span></label>
                         <input type="text" name="nome" id="nome" class="form-control" required value="{{ $corretor->nome }}">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-2">
                         <label for="creci">Nº do CRECI <span class="text-red">*</span></label>
                         <input type="text" name="creci" id="creci" class="form-control" required value="{{ $corretor->creci }}">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-3">
                         <label for="fone">Nº do Telefone</label>
                         <input type="text" name="fone" id="fone" class="form-control" value="{{ $corretor->fone }}">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-4">
                         <label for="email">E-mail <span class="text-red">*</span></label>
                         <input type="email" name="email" id="email" class="form-control" required value="{{ $corretor->email }}">
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
