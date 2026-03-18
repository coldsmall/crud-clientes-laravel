@extends('layouts.app')
@section('content')

<h2>Clientes Eliminados</h2>

<a href="{{ route('clientes.index') }}" class="btn btn-secondary mb-3">
    Volver
</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    @forelse($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->email }}</td>
            <td>

                <!-- RESTAURAR -->
                <form action="{{ route('clientes.restore', $cliente->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-success btn-sm">Restaurar</button>
                </form>

                <!-- ELIMINAR DEFINITIVO -->
                <form action="{{ route('clientes.forceDelete', $cliente->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar definitivo</button>
                </form>

            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3">No hay clientes eliminados</td>
        </tr>
    @endforelse

    </tbody>
</table>

{{ $clientes->links() }}

@endsection