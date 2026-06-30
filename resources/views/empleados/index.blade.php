@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Empleados</h1>

    @foreach($empleados as $empleado)
        <p>{{ $empleado->nombre }}</p>
    @endforeach
</div>
@endsection