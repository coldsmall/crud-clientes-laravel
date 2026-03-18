@extends('layouts.app')

@section('content')

<h2>Editar Cliente</h2>

<form method="POST" action="{{ route('clientes.update', $cliente) }}">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" class="form-control mb-2" value="{{ $cliente->nombre }}">
    <input type="email" name="email" class="form-control mb-2" value="{{ $cliente->email }}">
    <input type="text" name="telefono" class="form-control mb-2" value="{{ $cliente->telefono }}">
    <input type="text" name="empresa" class="form-control mb-2" value="{{ $cliente->empresa }}">

    <button class="btn btn-primary">Actualizar</button>

</form>

@endsection