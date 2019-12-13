@extends('adminlte::page')

@section('title', 'biblioteca')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Inclusao de Bibliotecario</h1>
@stop

@section('content')
<form method="post" action="/a" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i> Cadastro Bibliotacario
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome do Bibliotecário<span class="text-red"></span></label>
                         <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-2">
                         <label for="senha">CPF<span class="text-red"></span></label>
                         <input type="text" name="CPF" id="CPF" class="form-control" required>
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-2">
                         <label for="senha">Senha<span class="text-red"></span></label>
                         <input type="text" name="senha" id="senha" class="form-control" required>
                    </div>
               </div> 

               <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                         <button type="submit" style="min-width: 100px;" class="btn btn-outline-primary"> Submit </button>
                     </div>
               </div>
          </div>
     </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop
