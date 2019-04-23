@extends('lab04.layout.master')
@section('content')
<h1>Ejercicio 02</h1>
<form action="/edades" method="POST">
    {{ csrf_field() }}
    <div class="row">
    	<div class="form-group col-4">
        <label for="exampleInputEmail1">Nombre A</label>
        <input type="text" class="form-control" name="nombrea" placeholder="Ingrese nombre" required="true">
      </div>
			<div class="form-group col-4">
        <label for="exampleInputEmail1">Fecha de nac.</label>
        <input type="date" class="form-control" name="fechaa" required="true">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-4">
        <label for="exampleInputEmail1">Nombre B</label>
        <input type="text" class="form-control" name="nombreb" placeholder="Ingrese nombre" required="true">
      </div>
			<div class="form-group col-4">
        <label for="exampleInputEmail1">Fecha de nac.</label>
        <input type="date" class="form-control" name="fechab" required="true">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Verificar</button>               
</form>
@stop