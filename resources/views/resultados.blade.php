{{-- Hacer vista --}}
@extends('layouts.layout')
@section('content')

@foreach($producto_buscado as $producto)
{{ $producto->name }}{{ $producto->description}}{{ $producto->price}}{{$producto->photopath_slot1}}
<br>
@endforeach

@endsection