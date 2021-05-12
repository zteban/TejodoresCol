
@extends('layouts.plantilla')
@section ('title','rol1'.$Rol)
@section('content')

    <h1 class="logo">Gestiòn de <span>Roles</span></h1>
    <div class="contact-wrapper animated bounceInUp ">
        <div class="contact-form">           
            <form action="{{route('rol.store')}}" method='POST' enctype="multipart/form-data">
                @csrf
                <p>
                    <label>descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" >
                </p>
                <p class="block">
                    <button>
                        Guardar
                    </button>
                </p>            
            </form>
        </div>
        <div class="contact-info">   
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
                    @foreach ($Rol as $rol1)
                        <tr>
                            <td>{{$rol1->id}}</td>
                            <td>{{$rol1->descripcion}}</td>
                            <td>{{$rol1->created_at}}</td>
                            <td>{{$rol1->updated_at}}</td>
                            <td><a href="{{route('rol.edit',$rol1)}}" class="image fit"><span class="badge success">Modificar</span></a></td>
                        </tr>
                    @endforeach
                </tbody>       
            </table>      
        </div>  
    </main>
 
@endsection



                       
                         
                        