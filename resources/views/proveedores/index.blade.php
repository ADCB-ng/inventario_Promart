@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Proveedores</h1>

    @foreach($proveedores as $proveedor)
        <p>{{ $proveedor->nombre }}</p>
    @endforeach
</div>
@endsection