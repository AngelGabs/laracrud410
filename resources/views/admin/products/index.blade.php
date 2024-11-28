@extends('layout.main_template')
@section('content')
<h1> Index productos </h1>
    <br>
    <button><a href="{{route('products.create')}}">Crear producto</a></button>
    <br>
    <br>
    <button><a href="{{route('brands.index')}}">Mostrar marca</a></button>
    <br>
    <br>
    <button><a href="{{route('brands.create')}}">Crear Marca</a></button>
    <br>

   

    <table>
        <thead>
            <th>Nombre del producto </th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th> Cantidad </th>
            <th> Precio </th>
            <th> Imagen </th>
            <th> Acciones </th>
        </thead>
        <tbody>
           @foreach ($products as $p)
           <tr>
            <td>{{$p->nameProduct}}</td>
            <td>{{$p->brand->brand}}</td>
            <td>{{$p->brand->description}}</td>
            <td>{{$p->stock}}</td>
            <td>{{$p->unit_price}}</td>
            <td><img src="/image/products/{{$p->imagen}}" width="60" alt="producto"></td>
            <td>
                <button><a href="{{route("products.show", $p)}}">Mostrar</a></button>
                <button><a href="{{route("products.edit", $p)}}">Editar</a></button>
                <button><a href="{{route("products.delete", $p)}}">Eliminar</a></button>
            </td>
           </tr>
               
           @endforeach
        </tbody>
    </table>
    {{$products->links()}} <!-- Genera los enlaces de cada página-->
@endsection
