<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comanda;
use App\Models\Produto;
use App\Pedido_produto;
use DB;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comandas = DB::select('select id
                                from comandas
                                order by id;'); //Colocar status de uso
                                
        $pedidos = DB::select('select CO.id comanda, PR.nome nomeProd,
                               PR.valor_unitario valor
                               from comandas CO, pedidos PE, produtos PR, pedido_produtos PP
                               where CO.id = PE.comanda_id and PE.id = PP.pedido_id and PR.id = PP.produto_id
                               order by comanda;');
        
        $valor_total = DB::select('select sum(b.valor) total
                                   from pedidos a, pedido_produtos b
                                   where b.pedido_id = a.id
                                   and a.status = "A";');                               

        #return view('comanda.index')->with('comandas', $comandas);
        return view('comanda.index', compact('comandas', 'pedidos', 'valor_total'));
    }

    public function pagamentoParcial()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $comanda = Comanda::where('comanda_id', $request->comanda_id)->get();

        
        return redirect()->back()->with('comanda', $comanda);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
