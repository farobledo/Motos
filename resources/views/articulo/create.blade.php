@extends('layouts.plantillabase');

@section('contenido')
<h2>Crear Registros</h2>

<form action="/articulos" method="POST">
@csrf
<div class="mb-3">
<label ="" class="form-label">Código</label>
<input id="codigo" name="codigo"  type="text" class="form-control" tabindex="1">
</div>

<div class="mb-3">
<label for="" class="form-label">Descripcion</label>
<input id="descripcion" name="descripcion"  type="text" class="form-control" tabindex="2">
</div>

<div class="mb-3">
<label for="" class="form-label">Cantidad</label>
<input id="cantidad" name="cantidad"  type="text" class="form-control" tabindex="3">
</div>

<div class="mb-3">
<label for="" class="form-label">Precio</label>
 <input id="precio" name="precio"  type="number" step="any" value="0.00000000" class="form-control">
</div>
<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection