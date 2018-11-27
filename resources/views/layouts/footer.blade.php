@section('footer')
<footer id="footer"><!--Footer-->
		
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Categorías</h2>
							<ul class="nav nav-pills nav-stacked">
								@foreach($categories as $categorie)
									<li><a href="#">{{ $categorie->name }}</a></li>
								@endforeach	
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Marcas</h2>
							<ul class="nav nav-pills nav-stacked">
							@foreach($brands as $brand)
								<li><a href="#">{{ $brand->name }}</a></li>
							@endforeach		
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Servicios</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Carrito</a></li>
								<li><a href="#">Contactanos</a></li>
								<li><a href="#">Login</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Sobre nosotros</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Productos</a></li>
								<li><a href="#">Marcas</a></li>
								<li><a href="#">Promociones</a></li>
                                <li><a href="#">Términos y condiciones</a></li>
                                <li><a href="#">Trabajá con nosotros</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Registrate</h2>

							
							<form action="#" class="searchform">
								<input type="text" placeholder="Tu email" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Recibe a tu casilla de correo <br />las ofertas más destacadas..</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Tfire SA. Todos los derechos reservados.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	@endsection