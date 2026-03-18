@extends('layouts.app')

@section('content')

<h2>Crear Cliente</h2>

<form method="POST" action="{{ route('clientes.store') }}">
    @csrf

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
        @error('nombre') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Teléfono</label>
        <input type="text" name="telefono" class="form-control">
    </div>

    <div class="mb-3">
        <label>Empresa</label>
        <input type="text" name="empresa" class="form-control">
    </div>

    <button class="btn btn-success">Guardar</button>

</form>

@endsection