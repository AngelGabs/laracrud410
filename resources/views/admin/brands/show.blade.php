@extends('layout.main_template')

@section('content')

<h1>Detalles de la Marca</h1>
<h3>Nombre de la Marca: {{$b->$brand}}</h3>
<h3>Descripcion de la Marca: {{$b->$description}}</h3>
<!-- TODO Mostrar Imagen -->

@endsection