@extends('layouts.layout')

@section('body')



<div class="container">

<form class="form-group dropzone" id="my-awesome-dropzone" action="" method="get">
<div class="col-sm-4 col-sm-offset-1 login-form">
<h3><i class="fas fa-box-open"></i>&nbsp;Agregar Nuevo Producto</h3>

	<div class="fallback">
    	<input name="file" type="file" multiple />
 	</div>	
	
<div class="custom-file">
  
  <input name="file-input" id="file-input" type="file" />
  
    <div class="preview-img">
        <img id="imgSalida" width="100%" height="100%" src="" />
    </div>
	 <br>
	<label class="custom-file-label" for="file-input"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Subir la Imagen Principal</label>	
	
</div>
	
	<div class="custom-file">
  
		<input name="file-input" id="file-input2" type="file" />
  
   
	 <br>
	<label class="custom-file-label preview-img2" for="file-input2"> <img id="imgSalida2" width="100%" height="100%" src="" /></label>	
	
	</div>
	
	
<br>
</div>


<div class="col-sm-4 col-sm-offset-1 login-form">
    <br><br>
<label class="custom-file-label" for="name_product"><i class="fas fa-edit"></i>&nbsp; Nombre del Producto:&nbsp;</label>	
<input type="text" name="name_product" id="name_product" placeholder="Elija un nombre" require>
<br><br>
<select id="categoria" class="custom-select">
  <option selected>Seleccionar una categoría</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select><br><br>
<select class="custom-select">
  <option selected>Seleccionar una Marca</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<br><br>
	<div class="row">
		<div class="col-sm-6">
			<label class="custom-file-label" for="price"><i class="fas fa-dollar-sign"></i>&nbsp;Precio:</label>
			<input type="number" name="price" id="price" placeholder ="$0"require>
		</div>
		<div class="col-sm-6">
			<label class="custom-file-label" for="price"><i class="fas fa-boxes"></i>&nbsp;Cantidad:</label>
			<input type="number" name="stock" id="stock" placeholder ="0"require>
		</div>
	
		
	</div>
<br>
<label for="description_product"><i class="fas fa-edit"></i>&nbsp;Descripción de Producto</label>
<textarea name="description_product" id="description_product" cols="30" rows="10"></textarea>
<button class="btn btn-primary"type="submit">CREAR PRODUCTO</button>
</div>
</form>
</div>
@endsection