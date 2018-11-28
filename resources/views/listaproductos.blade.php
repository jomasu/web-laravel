@extends('layouts.layout')

@section('title', 'Electronicos y perifericos')

@section('body')
<div class="container">

<article class="col-md-12 aside-product text-center">

            
            
                <h3 class="text-center">LISTADO DE PRODUCTOS</h3><hr>
                @foreach($products as $product)
                    <div class="text-center product-list">
                        <section class="row"> 

                            <article class="col-md-2 col-12 text-center">
                                <a href="/shop/{{$product->id}}"><img src="{{ $product->photopath_slot1 }}" alt="" width="50" ></a>
                            </article> 

                            <article class="col-md-3 col-12 text-center">
                                <strong><a href="/shop/{{$product->id}}">{{ $product->name }}</a></strong>
                            </article>

                            <article class="col-md-1 col-2 text-center">
                                <strong>cant: {{ $product->stock }}</strong>
                            </article>

                            <article class="col-md-1 col-2 text-center">
                                <strong>${{ $product->price }}</strong>
                            </article>
                        
                            <article class="col-md-2 text-center">
                                <a class="btn btn-new" href="/products/edit/{{$product->id}}">Editar</a>
                            </article> 

                            <article class="col-md-2  text-center">
                                <a class="btn btn-new" href="/products/destroy/{{$product->id}}">Eliminar</a>
                            </article>   
                                
                        </section>
                    </div>
                    <hr>
                @endforeach    
            
            {{ $products->links() }}

            <br><br>

       
</article>

</div>
@endsection