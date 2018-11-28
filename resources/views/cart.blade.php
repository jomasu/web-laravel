<!-- Hacer foreach con el $product->name, ->precio y ->cantidad.
Incorporar a la vista -->
@extends('layouts.layout')

@section('title', 'Carrito T-fire')

<!--Slider-->


@section('body')
<div class="container">
				<div class="breadcrumbs">
					<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li class="active">Shopping Cart</li>
					</ol>
				</div>
	<section class="col-md-9" id="cart_items">
		
				
            @empty($products) 
            <h1>No hay productos en el carrito</h1>
            <br><br><br><br>
            @else
			<div class=" table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        
                        @foreach($products as $product)
						<tr>
                            
							<td class="cart_product">
								<a href=""><img src="#" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$product->name}}</a></h4>
								<p>Web ID: </p>
							</td>
							<td class="cart_price">
								<p>${{$product->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="qty" value="{{ $product->stock}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{number_format($product->price)}}</p>
							</td>
							<td class="cart_delete">
								<a class="{{ route('cart.remove', $product->id) }}" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        @endforeach
						
						
					</tbody>
				</table>
			</div>
		
	</section> <!--/#cart_items-->

	<section class="col-sm-3" id="do_action">
		
			
			<div class="row total_area">
				
				
					<div class=" padding-cart">
						
							
							<p>Sub Total <span>$100.00</span></p>
							<p>Precio de Envio <span>Free</span></p>
							<hr>
							<p>Total <span>$1000.00</span></p>
						
							<a class="btn btn-default btn-primary btn-block" href="">Borrar todo</a>
							<a class="btn btn-default btn-primary btn-block" href="">Finalizar Compra</a>
					</div>
                
                @endempty
			</div>
		
	</section><!--/#do_action-->
</div>	
    @endsection
    <!--Footer de la página-->
@section('footer')
	@include('layouts.footer')
@endsection
