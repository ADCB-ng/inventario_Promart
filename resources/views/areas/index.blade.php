@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Áreas</h1>

    @foreach($areas as $area)
        <p>{{ $area->nombre }}</p>
    @endforeach
</div>
@endsection