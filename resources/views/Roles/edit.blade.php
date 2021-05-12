
@extends('layouts.plantilla')
@section ('title','modificar')
@section('content')

    <h1 class="logo">Creacion de <span>Usuarios</span></h1>
    <div class="contact-wrapper animated bounceInUp ">
        <div class="contact-form">
        <form action="{{route('rol.update',$Rol)}}" method='post'>
            @csrf
            @method('put')
            <p>
                <label>descripcion</label>
                <input type="text" name="descripcion" id="descripcion" value = "{{$Rol->descripcion}}" >
            </p>
            <p class="block">
                    <button>
                        Guardar
                    </button>
                </p>
            </form>
        </div>      
    </div>
    <main class="mainPrincipal"> 
        <div class="activity-card">
            <h3>Recent activity</h3>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>descripcion</th>
                        <th>Creacion</th>
                        <th>Ultima Modificaion</th>
                        <th>Accion</th>   
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td>{{$Rol->id}}</td>
                            <td>{{$Rol->descripcion}}</td>
                            <td>{{$Rol->created_at}}</td>
                            <td>{{$Rol->updated_at}}</td>
                            <td><a href="{{route('rol.edit',$Rol)}}" class="image fit"><span class="badge success">Modificar</span></a></td>
                        </tr>
                
                </tbody>       
            </table>      
        </div>  
    </main>

@endsection

    
