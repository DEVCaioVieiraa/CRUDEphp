<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'total' => 'required|numeric',
            'status' => 'required|string|max:50',
        ]);

        $pedido = Pedido::create([
            'cliente' => $request->cliente,
            'total' => $request->total,
            'status' => $request->status,
        ]);

        return redirect()->route('pedidos.show', ['id' => $pedido->id])->with('success', 'Pedido cadastrado com sucesso!');
    }

    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);

        $pedido->update([
            'cliente' => $request->cliente,
            'total' => $request->total,
            'status' => $request->status,
        ]);

        return redirect()->route('pedidos.index')->with('success', 'Pedido atualizado com sucesso!');
    }

    public function delete($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.delete', compact('pedido'));
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', 'Pedido excluído com sucesso!');
    }
}
