@extends('layouts.app')

@section('content')

<h2>Detalle del Cliente</h2>

<ul class="list-group">
    <li class="list-group-item"><strong>Nombre:</strong> {{ $cliente->nombre }}</li>
    <li class="list-group-item"><strong>Email:</strong> {{ $cliente->email }}</li>
    <li class="list-group-item"><strong>Teléfono:</strong> {{ $cliente->telefono }}</li>
    <li class="list-group-item"><strong>Empresa:</strong> {{ $cliente->empresa }}</li>
    <li class="list-group-item"><strong>Actualización:</strong> {{ $cliente->updated_at }}</li>
    <li class="list-group-item"><strong>Creación:</strong> {{ $cliente->created_at }}</li>
</ul>

<a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver</a>

@endsection