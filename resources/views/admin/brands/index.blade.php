@extends('layout.main_template')
@section('content')
<h2>Index Marcas</h2>
<table>
<thead>
    <th>Nombre de la Marca</th>
    <th>Descripcion</th>
    <th>Acciones</th>
</thead>
<tbody>
    @foreach ($brands as $bra)
        <tr>
            <td>{{$bra->brand}}</td>
            <td>{{$bra->description}}</td>
            <td>
                <button><a href="{{route('brand.edit',$bra)}}">Editar</a></button>
                <form action="{{route('brand.destroy',$bra)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Eliminar</button>
                    </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection