@extends('adminlte::page')

@section('title', "JBS - Comandas")

@section('content_header')
    <h1 class="text-center">Comandas em uso</h1>

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                  Procurar comanda
                </button>

                <br><br>

                <table class="table table-striped datatable" id="tabela_registros">
                    <thead>
                        <tr class="text-center">
                            <td># id</td>
                            <td>Produtos</td>
                            <td>Valor</td>
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

                        <tr class="text-center">
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Comanda</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('comanda.detalhe')}}">
            {{ csrf_field() }}
            <div>
                <label>ID Comanda</label>
                <input type="number" name="comanda_id" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-primary" value="Procurar" />
        </form>
      </div>
    </div>
  </div>
</div>
@stop

