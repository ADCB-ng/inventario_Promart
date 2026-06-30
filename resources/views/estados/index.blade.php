@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Estados</h1>

    @foreach($estados as $estado)
        <p>{{ $estado->nombre }}</p>
    @endforeach
</div>
@endsection