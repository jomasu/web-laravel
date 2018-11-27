@extends('layouts.layout')

@section('title', $product->name)

<!--Contenido de la página-->
@section('body')
<section>
		<div class="container">
		@include('layouts.sidebar')
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{$product->photopath_slot1}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{ asset('img/product-details/similar1.jpg') }}" alt=""></a>
										  <a href=""><img src="{{ asset('img/product-details/similar3.jpg') }}" alt=""></a>
										  <a href=""><img src="{{ asset('img/product-details/similar1.jpg') }}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{ asset('img/product-details/similar2.jpg') }}" alt=""></a>
										  <a href=""><img src="{{ asset('img/product-details/similar3.jpg') }}" alt=""></a>
										  <a href=""><img src="{{ asset('img/product-details/similar1.jpg') }} " alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{ asset('img/product-details/similar2.jpg') }}" alt=""></a>
										  <a href=""><img src="{{ asset('img/product-details/similar3.jpg') }}" alt=""></a>
										  <a href=""><img src="{{ asset('img/product-details/similar2.jpg') }}" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{ asset('img/product-details/new.jpg') }}" class="newarrival" alt="" />
								<h2>{{$product->name}}</h2>
								<p>Web ID: {{$product->id}}</p>
								<img src="{{ asset('img/product-details/rating.png') }}" alt="" />
								<span>
									<span>${{number_format($product->price,2,',','.')}}</span>
									<label>Cantidad:</label>
									<input type="text" value="{{$product->stock}}" />
                                    <br><br>
                                    <p>{{$product->description}}</p>
                                    <p><b>Availability:</b>En stock</p>
								    <p><b>Condition:</b> New</p>
								    <p><b>Brand:</b> E-SHOPPER</p>
                                   
								</span>
								
								<div class="overlay-content">
												
												{!! Form::open(['route'=>'products.addToCart','method'=>'POST']) !!}	
												@csrf

												<input type="hidden" name="product_id" value="{{ $product->id }}">
												<input type="hidden" name="stock" value="1">	
												<button type="submit" href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir a carrito</button>
												{!! Form::close() !!}
								</div>
                               
                               
								
								
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
@endsection

<!--Footer de la página-->
@section('footer')
	@include('layouts.footer')
@endsection
