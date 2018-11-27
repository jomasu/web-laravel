
{{-- Hacer vista --}}
@extends('layouts.layout')
@section('body')

 
 <section class="container">
 @foreach($producto_buscado as $producto)
    <div class="product-image-wrapper single-products ">
        <article class="col-md-2">
            <img src="{{$producto->photopath_slot1}}" alt="" width="100" height="100">
        </article>
        <article class="col-md-2 productinfo text-center"><h3><br>{{ $producto->name }}</h3></article>
        <article class="col-md-4 productinfo text-center"><br>{{ $producto->description}}<br></article>
        <article class="col-md-2 productinfo text-center"><br><h2>${{ $producto->price}}</h2><br></article><br>
        <article class="col-md-2 productinfo text-center">
         
            <a class="btn btn-primary" href="/shop/{{$producto->id}}">Ver Producto</a>    
            <br>
        </article>
        
    
    <hr>
    </div>
 
@endforeach
 </section>


 @endsection 