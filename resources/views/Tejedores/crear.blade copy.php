
@extends('layouts.plantilla')
@section ('title','Home')
@section('content')
<div class="main-content" id="main-content" >
    <h1>Publica tus Tejidos</h1>
        <form action="{{route('tejedor.store')}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="fields">
                <div class="field">
                    <label for="name">Nombre del tejido</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field">
                    <label for="description">Descripcion</label>
                    <textarea name="description"  rows="3"></textarea>
                </div>
                <div class="field">
                    <label for="categoria">Nombres</label>
                    <input type="text" name="categoria" id="categoria" />
                
                </div>
                <div class="field">
                    <label for="imagenTejido">Imagen</label>
                    <input type="file" name="file" id="file" accept="image/*" />
                    @error('file')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Guardar Tejido" /></li>
            </ul>
        </form>
</div>
@endsection
