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
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Productos</a></li>
										<li><a href="product-details.html">Detalles de productos</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Carrito</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<!--<li><a href="404.html">404</a></li>-->
								<li><a href="contact-us.html">Sucursales</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
					{!!Form::open(['route'=>'layouts.nav','method'=>'GET','class'=>'vavbar-form pull-right'] !!}
<div class="input-group">
{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar','aria-describedby'=>'search])!!}
<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->