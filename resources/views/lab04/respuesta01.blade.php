@extends('lab04.layout.master')
@section('content')
<h1>Respuesta</h1>
<br>
<h5>La {{$val_ope}} entre {{$val_1}} y {{$val_2}} resulta: <b>{{$val_res}}</b></h5>
<a href=/calculadora>Volver</a>
@stop