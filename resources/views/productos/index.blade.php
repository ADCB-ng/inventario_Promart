@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Productos</h1>

    @foreach($productos as $producto)
        <p>{{ $producto->nombre }}</p>
    @endforeach
</div>
@endsection