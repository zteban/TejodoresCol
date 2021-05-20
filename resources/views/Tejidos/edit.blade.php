@extends('layouts.plantilla')
@section ('title','Modificar tejido')
@section('content')
    <h1 class="logo">Creacion de <span>Tejidos</span></h1>
    <div class="contact-wrapper animated bounceInUp ">
        <div class="contact-form">
            <form action="{{route('tejido.update',$Tejido)}}" method='post'>
                @csrf
                @method('put')
                <p>
                    <label>Codigo Tejedor</label>
                    <input type="text" name="idTejedor" id="idTejedor " value = "{{$Tejido->idTejedor}}">
                </p>
                <p>
                    <label>Nombre del tejido</label>
                    <input type="text" name="nombre" id="nombre" value = "{{$Tejido->nombre}}">
                </p>    
                <p class="block">
                    <label>Descripcion</label>
                    <textarea name="descripcion" rows="3" >{{$Tejido->descripcion}}</textarea>
                </p>     
                <p>
                    <label>Precio</label>
                    <input type="text" name="precio" id="precio" value = "{{$Tejido->precio}}">
                </p>                                                
                <p class="block">
                    <button>
                        Guardar
                    </button>
                </p>
            </form>  
        </div>
        <img src="{{asset($tejido1->imagen)}}" alt="" style = "width:100%;height:340px;margin-top:5rem;"/>
    </div>
@endsection

    
