@extends('layouts.layout')

@section('body')



<div class="container">
<section>
    
    <article>
        <form class="form-group"  action="{{ route('agregar.producto') }}" method="POST">
        {{ csrf_field() }}

        <div class="col-sm-4 col-sm-offset-1 login-form">
        <h3><i class="fas fa-box-open"></i>&nbsp;Agregar Nuevo Producto</h3>

            
            
        <div class="custom-file">
        
        <input name="photopath_slot1" value= "{{ old( "photopath_slot1" ) }}" id="photopath_slot1" type="file" />
        
            <div class="preview-img">
                <img id="imgSalida" width="100%" height="100%" src="" />
            </div>
            <br>
        <label class="custom-file-label" for="photopath_slot1"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Subir la Imagen Principal</label>	
            
        </div>
            

        @for ($i = 2; $i <= 5; $i++)

        <div class="custom-file col-sm-3">
        
            <input name="photopath_slot{{$i}}" id="photopath_slot{{$i}}" type="file" />
        
            <br>
            <label class="custom-file-label preview-img2" for="photopath_slot{{$i}}"> <img id="imgSalida{{$i}}" width="100%" height="100%" src="" /></label>	
            
        </div>
        @endfor	
            
        </div>


        <div class="col-sm-6  login-form">
            <br><br>
        <label class="custom-file-label" for="name"><i class="fas fa-edit"></i>&nbsp; Nombre del Producto:&nbsp;</label>	
        <input type="text" name="name" id="name" placeholder="Elija un nombre" require>
        <br><br>
        <select id="categorie_id" name="categorie_id" class="custom-select">
        <option selected>Seleccionar una categoría</option>
        @foreach($categories as $categorie)
        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
        @endforeach
        
        </select><br><br>
        <select id="brand_id" name="brand_id" class="custom-select">
        <option selected>Seleccionar una Marca</option>

        @foreach($brands as $brand)
        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
        
        </select>
        <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <label class="custom-file-label" for="price"><i class="fas fa-dollar-sign"></i>&nbsp;Precio:</label>
                    <input type="number" name="price" id="price" placeholder ="$0"require>
                </div>
                <div class="col-sm-6">
                    <label class="custom-file-label" for="stock"><i class="fas fa-boxes"></i>&nbsp;Cantidad:</label>
                    <input type="number" name="stock" id="stock" placeholder ="0"require>
                </div>
            
                
            </div>
        <br>
        <label for="description"><i class="fas fa-edit"></i>&nbsp;Descripción de Producto</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <button class="btn btn-primary"type="submit">CREAR PRODUCTO</button>
        </div>
        </form>
    </article>
</section>
</div>
@endsection