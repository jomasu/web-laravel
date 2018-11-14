@extends('layouts.layout')

@section('body')



<div class="container">

<form class="form-group"action="" method="get">
<div class="col-sm-4 col-sm-offset-1 login-form">
<h3>Agregar Nuevo Producto</h3>

<div class="custom-file">
  <label class="custom-file-label" for="file-input"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Subir la Imagen Principal</label>
  <input name="file-input" id="file-input" type="file" />
   <br />
    <div class="preview-img">
        <img id="imgSalida" width="100%" height="100%" src="" />
    </div>
</div>
<br>
</div>


<div class="col-sm-4 col-sm-offset-1 login-form">
    <br><br>
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
<input type="number" name="price" id="price" placeholder ="$0"require>
<br><br>
<label for="description_product">Descripción de Producto</label>
<textarea name="description_product" id="description_product" cols="30" rows="10"></textarea>
<button class="btn btn-primary"type="submit">CREAR PRODUCTO</button>
</div>
</form>
</div>
@endsection