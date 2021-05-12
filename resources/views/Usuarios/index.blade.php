
@extends('layouts.plantilla')
@section ('title','usuario1'.$Usuario)
@section('content')
    <h1 class="logo">Gestión de <span>Usuarios</span></h1>
    <main class="mainPrincipal"> 
        <div class="activity-card">
            <h3>Recent activity</h3>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Tipo Documento</th>
                        <th>Email</th>
                        <th>direccion</th>
                        <th>celular</th>
                        <th>Ciudad</th>
                        <th>Accion</th>  
                    </tr>
                </thead>
                <tbody>
                @foreach ($Usuario as $usuario1)
                    <tr>
                        <td>{{$usuario1->id}}</td>
                        <td>{{$usuario1->nombre}}</td>
                        <td>{{$usuario1->documento}}</td>
                        <td>{{$usuario1->tipoDoc}}</td>
                        <td>{{$usuario1->email}}</td>
                        <td>{{$usuario1->direccion}}</td>
                        <td>{{$usuario1->celular}}</td>
                        <td>{{$usuario1->Ciudad}}</td>
                        <td>
                            <a href="{{route('usuario.edit',$usuario1)}}" class="image fit"><span class="badge success">Editar</span></a>
                            <a href="{{route('usuario.delete',$usuario1)}}" class="image fit"><span class="badge delete">Borrar</span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>   
            </table>
        </div>   
    </main>
@endsection



                       
                         
                        