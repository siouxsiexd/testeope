@extends('adminlte::page')

@section('title', "JBS - Produtos")

@section('content_header')

<h1 class="text-center">Lista de produtos</h1>

<style>
    b {
        color: #4286f4;
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <a href="{{route('produto.novo')}}" class="btn btn-info">Novo Registro</a>
                <br><br>
                
                <table class="table table-striped datatable" id="tabela_registros">
                    <thead>
                        <tr class="text-center">
                            <td><label>#id</label></td>
                            <td><label>Produto</label></td>
                            <td><label>Grupo</label></td>
                            <td><label>Categoria</label></td>
                            <td><label>Manipulado</label></td>
                            <td><label>Estoque</label></td>
                            <td><label>Preço</label></td>
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
                    	@foreach ($produtos as $produto)
                        <tr class="text-center">

                            <td>{{$produto->id}}</td>
                            <td>{{$produto->nomeProd}}</td>
                            <td>{{$produto->nomeGrp}}</td>
                            <td>{{$produto->nomeCat}}</td>
                            <td>{{$produto->manipulado}}</td>
                            <td>{{$produto->estoque}}</td>
                            <td>R$ {{$produto->valor_unitario}}</td>

                            <td>
                                <a href="/produtos/editar/{{ $produto->id }}"><i class="fas fa-cog"></i></a>
                                <b>|</b>
                                <a href="/produtos/deletar/{{ $produto->id }}"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $('#pesquisar').keyup(function(){

    if($('#pesquisar').val().length >= 3){
      $('#qtde').html("Pesquisando...");

      $.get("{!! url('pesquisar') !!}", {pesquisar:$('#pesquisar').val()},function(data){
        $('#qtde').html(data.posts.length.toString()+" Resultados");

        var html = "";
        for (var i = 0; i < data.posts.length; i++) {
          html += "<div class='panel panel-default'>";
          html += "<div class='panel-heading'>";
          html += "<h3 class='panel-title'> "+data.posts[i].titulo+" </h3>";
          html += "</div>";
          html += "<div class='panel-body' style='padding:0px;' align='center'>";
          html += "<img src=' "+data.posts[i].imagem+" ' class='img-responsive'>";
          html += "</div>";
          html += "<div class='panel-footer'>";
          html += "<a href=' "+data.url+"/post/"+data.posts[i].categoria+"/"+data.posts[i].slug+" ' class='btn btn-success' role='button'>Visualizar</a>";
          html += "</div>";
          html += "</div>";
        }

        if(data.posts.length!=0){
          $("#textos").html(html);
        }else{
          $('#qtde').html("Nenhum Texto Foi Encontrado!!!");
          $("#textos").html("");
        }
      });
    }
  });
</script>

@stop