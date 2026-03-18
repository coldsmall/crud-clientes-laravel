@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Tabla de clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">
        <i class="bi bi-plus"></i> Añadir cliente
    </a>

    

</div>



<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Empresa</th>
            <th width="180">Acciones</th>
        </tr>
    </thead>
    <tbody>

    @forelse($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->empresa }}</td>
            <td>

                <!-- VER -->
                <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-info btn-sm">
                    <i class="bi bi-eye"></i>
                </a>

                <!-- EDITAR -->
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>

                <!-- ELIMINAR -->
            
                <button class="btn btn-danger btn-sm btn-delete"
                    data-id="{{ $cliente->id }}">
                    <i class="bi bi-trash"></i>
                </button>


                <!-- FORM OCULTO -->
                <form id="form-delete-{{ $cliente->id }}"
                      action="{{ route('clientes.destroy', $cliente) }}"
                      method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>

            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No hay clientes</td>
        </tr>
    @endforelse

    </tbody>
</table>

<div class="mt-3">
    {{ $clientes->links() }}
    <a href="{{ route('clientes.trashed') }}" class="btn btn-secondary">
        Ver eliminados
    </a>
</div>

@endsection