<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefono' => 'nullable|string',
            'empresa' => 'nullable|string',
        ]);

        try {
            Cliente::create($validated);

            return redirect()->route('clientes.index')
                ->with('success', 'Cliente creado correctamente');

        } catch (\Exception $e) {
            Log::error($e);

            return back()
                ->withInput()
                ->with('error', 'Error al crear el cliente');
        }
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'telefono' => 'nullable|string',
            'empresa' => 'nullable|string',
        ]);

        try {
            $cliente->update($validated);

            return redirect()->route('clientes.index')
                ->with('success', 'Cliente actualizado correctamente');

        } catch (\Exception $e) {
            Log::error($e);

            return back()
                ->withInput()
                ->with('error', 'Error al actualizar el cliente');
        }
    }

    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();

            return redirect()->route('clientes.index')
                ->with('success', 'Cliente eliminado correctamente');

        } catch (\Exception $e) {
            Log::error($e);

            return back()
                ->with('error', 'Error al eliminar el cliente');
        }
    }

    public function trashed()
    {
        $clientes = Cliente::onlyTrashed()->paginate(10);
        return view('clientes.trashed', compact('clientes'));
    }

        public function restore($id)
    {
        $cliente = Cliente::withTrashed()->findOrFail($id);
        $cliente->restore();

        return redirect()->route('clientes.trashed');
    }

    public function forceDelete($id)
    {
        $cliente = Cliente::withTrashed()->findOrFail($id);
        $cliente->forceDelete();

        return redirect()->route('clientes.trashed')
            ->with('success', 'Cliente eliminado definitivamente');
    }


    

}