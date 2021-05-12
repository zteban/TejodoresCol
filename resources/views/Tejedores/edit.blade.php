
@extends('layouts.plantilla')
@section ('title','Modificar tejedor')
@section('content')
<div id="main" >
    <h1>Actualiza tus datos tejedor</h1>
    <form action="{{route('tejedor.update',$Tejedor)}}" method='post'>
        @csrf
        @method('put')
        <label>
            Nombre Tejido
            <br>
            <input type="text" name = "name" value = "{{$Tejedor->name}}">
        </label>
        <br>
        <label>
            Descripcion
            <br>
            <textarea name="description"  rows="3">{{$Tejedor->description}}</textarea>
        </label>
        <br>
        <label>
            Nombres
            <br>
            <input type="text" name = "categoria" value = "{{$Tejedor->categoria}}">
        </label>
        <br>
      
      
        <button type = "submit">Actualizar</button>
    </form>
</div>
@endsection