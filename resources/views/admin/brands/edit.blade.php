@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')


<h1> Editar Marcas </h1>

<form action="{{route('brands.update', $brand->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nombre de la marca </label>
    <input type="text" name="brand" value="{{$brand->brand}}">

    
    <label for=""> Descripcion </label>
    <input type="text" name='description' value="{{$brand->description}}">

    <button type="submit"> Registrar </button>
</form>

@endsection