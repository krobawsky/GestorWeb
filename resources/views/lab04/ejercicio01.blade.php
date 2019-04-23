@extends('lab04.layout.master')
@section('content')
<h1>Ejercicio 01</h1>
<form action="/calculadora" method="POST">
    {{ csrf_field() }}
    <div class="row">
    	<div class="form-group col-4">
        <label for="exampleInputEmail1">Valor a</label>
        <input type="number" class="form-control" name="valor_a" placeholder="Ingrese valor a" required="true">
      </div>
			<div class="form-group col-4">
        <label for="exampleInputEmail1">Valor b</label>
        <input type="number" class="form-control" name="valor_b" placeholder="Ingrese valor b" required="true">
      </div>
      <div class="btn-group btn-group-toggle col-2" data-toggle="buttons">
        <select name="operador">
          <option value="suma">Suma</option>
          <option value="resta">Resta</option>
          <option value="multiplicacion">Multiplicaci&oacute;n</option>
          <option value="division">Divisi&oacute;n</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Ejecutar</button>
		</div>                    
</form>
@stop