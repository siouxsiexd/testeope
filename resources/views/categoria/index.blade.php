@extends('adminlte::page')

@section('title', "JBS - Produtos")

@section('content_header')

<h1 class="text-center">Lista de categorias</h1>

<style>
    b {
        color: #4286f4;
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <a href="{{route('categoria.novo')}}" class="btn btn-info">Nova categoria</a>
                <br><br>

                <table class="table table-striped datatable" id="tabela_registros">
                    <thead>
                        <tr class="text-center">
                            <td><label>#id</label></td>
                            <td><label>Categoria</label></td>
                            <td><label>Grupo</label></td>
                        </tr>
                    </thead>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                    <tbody>
                    	@foreach ($categorias as $categoria)
                        <tr class="text-center">
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->nomeCat}}</td>
                            <td>{{$categoria->nomeGrp}}</td>

                            <td>
                                <a href="/categorias/editar/{{ $categoria->id }}"><i class="fas fa-cog"></i></a>
                                <b>|</b>
                                <a href="/categorias/deletar/{{ $categoria->id }}"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop