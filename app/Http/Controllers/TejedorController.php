<?php

namespace App\Http\Controllers;

use App\Models\Tejedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TejedorController extends Controller
{
    public function index(){

        $Tejedor = Tejedor::paginate();
        
        return view('Tejedores.index',compact('Tejedor'));
    }
    public function crear(){
        return view('Tejedores.crear');
    }
    public function store(request $request){
        $request->validate([
            'file'=> 'required|image|max:2048'
       ]);
        $imagenes = $request->file('file')->store('public');
        $url = Storage::url($imagenes);
        
        $tejedor = new Tejedor();
        $tejedor->name = $request->name;
        $tejedor->description = $request->description;
        $tejedor->categoria = $request->categoria;
        $tejedor->url = $url;
        $tejedor->save();
        return redirect()->route('tejedor.index');
 
    }
    
    public function show(Tejedor $Tejedor){
     
        return view('Tejedores.show',compact('Tejedor'));
     
    }
    public function edit(Tejedor $Tejedor){
        
        return view('Tejedores.edit',compact('Tejedor'));
  
     
    }
    public function update(request $request,Tejedor $tejedor){
        
     
         $tejedor->name = $request->name;
       $tejedor->description = $request->description;
       $tejedor->categoria = $request->categoria;
       $tejedor->save();
        return redirect()->route('tejedor.show',$tejedor);
    }
}
