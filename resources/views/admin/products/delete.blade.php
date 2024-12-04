@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<form action="{{route("products.destroy",$product->id)}}" method="POST">
@method("DELETE")
@csrf
<h3>¿Estas seguro que quieres eliminar el producto {{$product->nameProducts}}?</h3>
<button><a href="{{route("products.index")}}">No</a></button>
<button type="submit">Si</button>
</form>
@endsection