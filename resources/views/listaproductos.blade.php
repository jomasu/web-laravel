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
                                <img src="{{ $product->photopath_slot1 }}" alt="" width="50" >
                            </article> 

                            <article class="col-md-3 col-12 text-center">
                                <strong>{{ $product->name }}</strong>
                            </article>

                            <article class="col-md-1 col-2 text-center">
                                <strong>cant: {{ $product->stock }}</strong>
                            </article>

                            <article class="col-md-1 col-2 text-center">
                                <strong>${{ $product->price }}</strong>
                            </article>
                        
                            <article class="col-md-2 text-center">
                                <a class="btn btn-new" href="#">Editar</a>
                            </article> 

                            <article class="col-md-2  text-center">
                                <a class="btn btn-new" href="#">borrar</a>
                            </article>   
                                
                        </section>
                    </div>
                    <hr>
                @endforeach    
            
            <br><br>
            <ul class="pagination ">
				{{$products->render()}}
			</ul>

       
</article>

</div>
@endsection