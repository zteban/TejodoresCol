@extends('layouts.plantilla')
@section ('title','Home')
@section('content')
    <h1 class="logo">Creacion de <span>Usuarios</span></h1>
    <div class="contact-wrapper animated bounceInUp ">
        <div class="contact-form">
            <form action="{{route('usuario.store')}}" method='POST' enctype="multipart/form-data">
                @csrf
                <p>
                    <label>Nombres y Apellidos</label>
                    <input type="text" name="nombre" id="nombre" >
                </p>
                <p>
                    <label>Documento</label>
                    <input type="text" name="documento" id="documento" >
                </p>
                <p>    
                    <label>Tipo Documento</label>
                    <select class = "select"  name="tipoDoc" id="tipoDoc">                     
                            <option value="Cedula de Ciudadania">CC. Ciudadania</option>
                            <option value="Cedula de Extranjera">CC. Extranjera</option>                     
                            <option value="Pasaporte">Pasaporte</option>
                            <option value="Tarjeta de Identidad">T. Identidad</option>
                            <option value="Numero unico de Identificacion ">N Unico Identidad</option>
                    </select>   
                </p>      
                <p>
                    <label>Correo Electronico</label>
                    <input type="text" name="email" id="email" >
                </p>
                <p>
                    <label>Direccion</label>
                    <input type="text" name="direccion" id="direccion" >
                </p>          
                <p>
                    <label>Numero Celular</label>
                    <input type="text" name="celular" id="celular" >
                </p>       
                <p>
                    <label>Ciudad</label>
                    <input type="text" name="Ciudad" id="Ciudad" >
                </p>
                <p>    
                    <label>Id Actor</label>
                    <select class = "select"  name="idActor" id="idActor">
                        @foreach ($Rol as $rol1)
                            <option value="{{$rol1->id}}">{{$rol1->descripcion}}</option>
                        @endforeach
                    </select>   
                </p>
                <p>
                    <label>Usuario</label>
                    <input type="text" name="usuario" id="usuario" >
                </p>
                <p>
                    <label>Contraseña</label>
                    <input type="text" name="contra" id="contra" >
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
 

