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
            <th>Nombre de la marca </th>
            <th>descripcion</th>
          
        </thead>
        <tbody>
           @foreach ($brands as $b)
           <tr>
            <td>{{$b->brand}}</td>
            <td>{{$b->description}}</td>
        
            <td>
                
                <button><a href="{{route("brands.edit", $b)}}">Editar</a></button>
                <form action="{{route("brands.destroy", $b)}}" method="POST">
                    @method("DELETE")
                    @csrf 
                <button type="submit"> Eliminar </button>
            </form>
            </td>
           </tr>
               
           @endforeach
        </tbody>
    </table>
@endsection
