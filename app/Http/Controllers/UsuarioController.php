<?php

namespace App\Http\Controllers;


use App\Models\Usuario;
use App\Models\Rol;
use App\Models\Credencial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{
    public function index(){
        $Usuario = Usuario::paginate();
        return view('Usuarios.index',compact('Usuario'));
    }
    
    public function crear(){
        $Rol = Rol::paginate();
        return view('Usuarios.crear',compact('Rol'));
    }
    
    public function store(request $request){
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->documento = $request->documento;
        $usuario->tipoDoc = $request->tipoDoc;
        $usuario->email = $request->email;
        $usuario->direccion = $request->direccion;
        $usuario->celular = $request->celular;
        $usuario->idCredencial = 1;
        $usuario->Ciudad = $request->Ciudad;
        $usuario->idActor = $request->idActor;
        $usuario->save();
        $credencial = new Credencial();
        $credencial->usuario = $request->usuario;
        $credencial->contra = $request->contra;
        $credencial->save();
        return redirect()->route('usuario.index');
    }
  
    public function show(Usuario $Usuario){
        return view('Usuarios.show',compact('Usuario'));
    }

    public function edit(Usuario $Usuario){ 
        return view('Usuarios.edit',compact('Usuario'));
    }

    public function update(request $request,Usuario $usuario){
        $usuario->nombre = $request->nombre;
        $usuario->documento = $request->documento;
        $usuario->tipoDoc = $request->tipoDoc;
        $usuario->email = $request->email;
        $usuario->direccion = $request->direccion;
        $usuario->celular = $request->celular;
        $usuario->idCredencial = 1;
        $usuario->Ciudad = $request->Ciudad;
        $usuario->idActor = $request->idActor;
        $usuario->save();
        return redirect()->route('usuario.index');
    }
    public function delete(request $request,Usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}

