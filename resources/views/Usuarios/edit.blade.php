@extends('layouts.plantilla')
@section ('title','Modificar usuario')
@section('content')
    <h1 class="logo">Creacion de <span>Usuarios</span></h1>
    <div class="contact-wrapper animated bounceInUp ">
        <div class="contact-form">
            <form action="{{route('usuario.update',$Usuario)}}" method='post'>
                @csrf
                @method('put')
                <p>
                    <label>nombre</label>
                    <input type="text" name="nombre" id="nombre" value = "{{$Usuario->nombre}}" >
                </p>
                <p>
                    <label>documento</label>
                    <input type="text" name="documento" id="documento" value = "{{$Usuario->documento}}" >
                </p>
                <p>
                    <label>Tipo documento</label>
                    <input type="text" name="tipoDoc" id="tipoDoc" value = "{{$Usuario->tipoDoc}}" >
                </p>    
                <p>
                    <label>email</label>
                    <input type="text" name="email" id="email" value = "{{$Usuario->email}}" >
                </p>
                <p>
                    <label>direccion</label>
                    <input type="text" name="direccion" id="direccion" value = "{{$Usuario->direccion}}">
                </p>       
                <p>
                    <label>celular</label>
                    <input type="text" name="celular" id="celular" value = "{{$Usuario->celular}}">
                </p>          
                <p>
                    <label>Ciudad</label>
                    <input type="text" name="Ciudad" id="Ciudad" value = "{{$Usuario->Ciudad}}">
                </p>
                <p>
                    <label>Id Actor</label>
                    <input type="text" name="idActor" id="idActor" value = "{{$Usuario->idActor}}" >
                </p>
                <p class="block">
                    <button>
                        Guardar
                    </button>
                </p>
            </form>
        </div>  
    </div>
@endsection

    
