
@extends('layouts.plantilla')
@section ('title','tejedor1'.$Tejedor)
@section('content')


</div>
    <h1>Bienvenido {{$Tejedor->name}}></h1>
    <a href="{{route('tejedor.index')}}">Volver al inicio</a>
    <br>
    <a href ="{{route('tejedor.edit',$Tejedor)}}">Editar Tejedor</a>
    <p><strong>Categoria:</strong>{{$Tejedor->categoria}}</p>
    <p>{{$Tejedor->descripcion}}</p>
@endsection
