<section>
		<div class="container">
				@include('layouts.sidebar')
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Ultimos Productos</h2>

							@foreach($products as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{$product->photopath_slot1}}" alt="" />
											<h2>${{number_format($product->price,2,',','.')}}</h2>
											<p>{{$product->name}}</p>

											<!-- modificado --> <!-- Incorporar Bootstrap
											<form action="{{ route('products.addToCart') }}" method="POST">
                                				@csrf
                                				<input type="hidden" name="product_id" value="{{ $product->id }}">
                                				<input type="stock" name="stock">
                                				<input type="submit" name="submit" value="Add to cart">
                            				</form>
											 modificado -->

										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>${{number_format($product->price,2,',','.')}}</h2>
												<p>{{$product->name}}</p>

												{!! Form::open(['route'=>'products.addToCart','method'=>'POST']) !!}	
												@csrf

												<input type="hidden" name="product_id" value="{{ $product->id }}">
												<input type="hidden" name="stock">	
												<button type="submit" href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</button>
												{!! Form::close() !!}
											</div>
										</div>
										<img src="{{ asset('img/home/new.png') }}" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="/shop/{{$product->id}}"><i class="fa fa-plus-square"></i>Ver Producto</a></li>
										
									</ul>
								</div>
								
							</div>
							
							
						</div>
						@endforeach
						
					</div><!--features_items-->
					
					
					
				</div>
			</div>
		</div>
	</section>