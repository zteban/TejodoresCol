@extends('layouts.plantilla')
@section ('title','Modificar tejido')
@section('content')
<h1 class="logo">Ver <span>Tejido</span></h1>




    <div class="contact-form">
   
    <img src="{{asset($Tejido->imagen)}}" alt="" style = "width:30%;height:340px;margin-top:5rem;margin-left:5rem;"/>

   
               
      
        <form action="{{route('tejido.update',$Tejido)}}" method='post'>
            @csrf
            @method('put')
            <p>
                <label style="margin-left: 5rem;">Tejido: </label>
                <label id="label2"> {{$Tejido->nombre}}</label><br>
                <label style="margin-left: 5rem;">Descripcion: </label>
                <label id="label2"> {{$Tejido->descripcion}}</label><br>
                <label style="margin-left: 5rem;">Precio: </label>
                <label id="label2"> {{$Tejido->precio}}</label><br>
                <label style="margin-left: 5rem;">Tejedor: </label>
                <label id="label2"> Tito Esteban Acosta Paiva</label><br>
                <label style="margin-left: 5rem;">Celular: </label>
                <label id="label2"> 3195411766</label><br>
                <label style="margin-left: 5rem;">Correo: </label>
                <label id="label2"> zteban.ap@gmail.com</label><br>
               
            </p>
                                                         
            <p class="block">
                <button>
                    Guardar
                </button>
            </p>
        </form>  
    </div>
   

@endsection

    
