<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="/" class="active">Home</a></li>
								<li class="dropdown"><a href="{{route('shop')}}">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('shop')}}">Productos</a></li>
										<li><a href="{{ route('cart') }}">Carrito</a></li> 
										<li><a href="{{ route('login') }}">Login</a></li> 
                                    </ul>
                                </li> 
								
								<!--<li><a href="404.html">404</a></li>-->
								<li><a href="contact-us.html">Contacto</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
						{{ csrf_field() }}
							<form action="{{ route('query') }}" method="get">
								<input type="text"  name="products" placeholder="Buscar"/>
								<button class="btn btn-submit" >Buscar </button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->