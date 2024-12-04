@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Brands</h1>
<form action="{{route('brand.store')}}" method="POST">
    @csrf
        <label for="">Nombre de la Marca</label>
        <input type="text" name="brand">

        <label for="">Descripcion de la Marca</label>
        <input type="text" name="description">
    
        <button type="submit">Registrar</button>
    
    </form>
    @endsection