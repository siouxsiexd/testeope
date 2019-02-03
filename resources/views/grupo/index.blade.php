@extends('adminlte::page')

@section('title', "JBS - Produtos")

@section('content_header')

<h1 class="text-center">Lista de grupos</h1>

<style>
    b {
        color: #4286f4;
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <a href="{{route('grupo.novo')}}" class="btn btn-info">Novo grupo</a>
                <br><br>

                <table class="table table-striped datatable" id="tabela_registros">
                    <thead>
                        <tr class="text-center">
                            <td><label>#id</label></td>
                            <td><label>Grupo</label></td>
                            <td><label>Ações</label></td>
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
                    	@foreach ($grupos as $grupo)
                        <tr class="text-center">
                            <td>{{$grupo->id}}</td>
                            <td>{{$grupo->nome}}</td>

                            <td>
                                <a href="/grupos/editar/{{ $grupo->id }}"><i class="fas fa-cog"></i></a>
                                <b>|</b>
                                <a href="/grupos/deletar/{{ $grupo->id }}"><i class="far fa-trash-alt"></i></a>
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