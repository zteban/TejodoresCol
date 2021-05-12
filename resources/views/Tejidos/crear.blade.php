@extends('layouts.plantilla')
@section ('title','Home')
@section('content')
    <h1 class="logo">Publica tu <span>Tejido</span></h1>
    <div class="contact-wrapper animated bounceInUp ">
        <div class="contact-form">  
            <form action="{{route('tejido.store')}}" method='POST' enctype="multipart/form-data">
                @csrf
                
                <p>
                    <label>Nombre del tejido</label>
                    <input type="text" name="nombre" id="nombre" >
                </p>    
                <p>
                    <label>Precio</label>
                    <input type="text" name="precio" id="precio" >
                </p>
                <p class="block">
                    <label>Descripción</label>
                    
                    <textarea name="descripcion" rows="3"></textarea>
                </p>    
                
                <p>
                    <label>Imagen</label>
                    <input type="file" name="imagen" id="imagen" accept="image/*" />
                    @error('imagen')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
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
 

