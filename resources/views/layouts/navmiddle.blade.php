<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="/"><img src="{{ asset('img/home/tfire.png') }} " alt="" /></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Nosotros</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Carrito</a></li>

							  @if (Route::has('login'))
								  @auth
								<li class="dropdown"><a ><i class="fa fa-lock"></i> Bienvenido <span class="name-user">{{ Auth::user()->name }}</span></a>
								<ul role="menu" class="sub-menu">
										<li ><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
									</ul>
								</li>
								 @else
								 <li><a href="{{ route('login') }}">Login</a></li>
								 @endauth
							@endif

							


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->