@extends('layouts.layout')

@section('title', 'Electronicos y perifericos')

@section('body')


    <div id="contact-page" class="container">
    	<div class="bg">
	    	<br><br><br><br>	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Contactanos </h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        
                        @include('layouts.error')

                        {!! Form::open(['route'=>'contacto.store','method'=>'POST']) !!}
                        @csrf
				    	
				            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Nombre">
                                
                                
                            </div>
                            
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Asunto">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Tu mensaje Aquí"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Enviar">
				            </div>
                       
                        {!! Form::close() !!}
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Donde Estamos</h2>
	    				<address>
	    					<p>T-fire Inc.</p>
							<p>Belgrano 860</p>
							<p>Buenos Aires</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@tfire.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Nuestras Redes</h2>
							<ul>
								<li>
									<a href="#"><i class="fab fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fab fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->

@endsection