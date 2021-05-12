@extends('layouts.plantilla')
@section ('title','tejido1'.$Tejido)
@section('content')
<h1 class="logo">Gestión de <span>Tejidos</span></h1>
<main class="mainPrincipal"> 
    <div class="activity-card">
        <h3>Recent activity</h3>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>precio</th>
                    <th>Creacion</th>
                    <th>Ultima Modificaion</th>
                    <th>Accion</th>   
                </tr>
            </thead>
            <tbody>

                
                @foreach ($Tejido as $tejido1)
                    <tr>
                        <td>{{$tejido1->id}}</td>
                        <td>{{$tejido1->nombre}}</td>
                        <td>{{$tejido1->descripcion}}</td>               
                        <td>{{$tejido1->precio}}</td>
                        <td>{{$tejido1->created_at}}</td>
                        <td>{{$tejido1->updated_at}}</td>
                        <td>
                            <a href="{{route('tejido.edit',$tejido1)}}" class="image fit"><span class="badge success">Editar</span></a>
                            <a href="{{route('tejido.delete',$tejido1)}}" class="image fit"><span class="badge delete">Borrar</span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>       
        </table>      
    </div>  
</main>
@endsection
