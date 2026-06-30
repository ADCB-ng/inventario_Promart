@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pedidos a proveedores</h1>

    @foreach($pedidos as $pedido)
        <p>
            Pedido #{{ $pedido->id }}
            - Fecha: {{ $pedido->fecha_pedido }}
            - Cantidad: {{ $pedido->cantidad }}
        </p>
    @endforeach
</div>
@endsection