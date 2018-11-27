<div class="row">
	<div class="col-sm-3">
		<div class="left-sidebar">
			<h2>Categorias</h2>
				<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						
					<div class="panel panel-default">


						@foreach ($categories as $categorie)
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{ $categorie->name }}
									</a>
								</h4>
							</div>
						@endforeach
							
							    <br>
				    
		        </div><!--/category-products-->
        </div>			
		<div class="brands_products"><!--brands_products-->
							<h2>Marcas</h2>
			<div class="brands-name">
				<ul class="nav nav-pills nav-stacked">
					@foreach ($brands as $brand)		
						<li><a href="#"> <span class="pull-right">(50)</span>{{$brand->name}}</a></li>
					@endforeach		
				</ul>
			</div>
		</div><!--/brands_products-->
						
						
						
						
					
	</div>
</div>