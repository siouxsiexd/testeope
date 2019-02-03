@extends('adminlte::page')

@section('title', "JBS - Produtos")

@section('content_header')
    <h1 class="text-center">Cadastro de Categorias</h1>
@stop

@section('content')
    
	
	<form method="POST" action="/categorias/{{ $cat->id }}">

		{{ csrf_field() }}

		<div class="row form-group">
			<div class="col-md-4">
				<label>Nome da categoria</label>
				<input type="text" name="Nome_categoria" class="form-control" value="{{ $cat->nome }}">
			</div>
		

			<!-- GRUPO -->
			<div class="col-md-4">
				<label for="inlineFormCustomSelect">Grupo</label>
				<br>
				<select name="Nome_grupo" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
					<option selected>Escolher...</option>
					@foreach($grps as $grp)
					    <option value="{{ $grp->id }}">{{ $grp->nome }}</option>
					@endforeach
				</select>
			</div>

		<div class="row form-group text-center">
			<div class="col-md-3 text-center">
				<input type="submit" value="Salvar" class="btn btn-sm btn-primary">
				<a href="/categorias" class="btn btn-sm btn-danger">Cancelar</a>
			</div>
		</div>


	</form>


@stop