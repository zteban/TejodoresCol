
@extends('layouts.plantilla')
@section ('title','tejido1'.$Tejido)
@section('content')


</div>
    <h1>Bienvenido {{$Tejido->nombre}}></h1>
    <a href="{{route('tejido.index')}}">Volver al inicio</a>
    <br>
    <a href ="{{route('tejido.edit',$Tejido)}}">Editar Tejido</a>
    <p><strong>Categoria:</strong>{{$Tejido->nombre}}</p>
    <p>{{$Tejido->descripcion}}</p>
@endsection
