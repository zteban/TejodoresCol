<?php

namespace App\Http\Controllers;


use App\Models\Rol;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RolController extends Controller
{
    public function index(){
        $Rol = Rol::paginate();
        return view('Roles.index',compact('Rol'));
    }
    
    public function crear(){
        return view('Roles.crear');
    }
    
    public function store(request $request){
        $rol = new Rol();
        $rol->descripcion = $request->descripcion;
        
        $rol->save();
       
        return redirect()->route('rol.index');
    }
  
    public function show(Rol $Rol){
        return view('Roles.show',compact('Rol'));
    }

    public function edit(Rol $Rol){ 
        return view('Roles.edit',compact('Rol'));
    }

    public function update(request $request,Rol $rol){
        $rol->descripcion = $request->descripcion;
        
        $rol->save();
        return redirect()->route('rol.index',$rol);
    }

}

