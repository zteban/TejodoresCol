<?php

namespace App\Http\Controllers;


use App\Models\Tejido;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class TejidoController extends Controller
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $Tejido = Tejido::paginate();  
        
        return view('Tejidos.index',compact('Tejido'));
    }
    public function index2(){
        $Tejido = Tejido::paginate();       
        return view('Tejidos.index2',compact('Tejido'));
    }
    public function crear(){
        return view('Tejidos.crear');
    }
    
    public function store(request $request){
        
        $request->validate([
            'imagen'=> 'required|image|max:2048'
       ]);
        $imagenes = $request->file('imagen')->store('public');
        $url = Storage::url($imagenes);
        
        $tejido = new Tejido();
  

        $tejedor = auth()->user()->id;

        $tejido->idTejedor = $tejedor;
        $tejido->nombre = $request->nombre;
        $tejido->descripcion = $request->descripcion;
        $tejido->imagen = $url;
        $tejido->precio = $request->precio;
        $tejido->likes = 1;
        $tejido->dislikes = 1;
        $tejido->save();
        return redirect()->route('tejido.index2');
 
    }
  
    
    public function show(Tejido $Tejido){    
        return view('Tejidos.show',compact('Tejido'));
    }


    public function edit(Tejido $Tejido){  
        return view('Tejidos.edit',compact('Tejido'));
    }
    

    public function update(request $request,Tejido $tejido){

        $tejido->idTejedor = $request->idTejedor;
        $tejido->nombre = $request->nombre;
        $tejido->descripcion = $request->descripcion;
        $tejido->precio = $request->precio;
        $tejido->likes = 1;
        $tejido->dislikes = 1;
        $tejido->save();
        return redirect()->route('tejido.index2');
    }

    public function delete(Tejido $Tejido){
        $Tejido->delete();
        return redirect()->route('tejido.index2');
    }

    public function like(Tejido $tejido){  
        $tejido->likes = $tejido->likes +1;
        $tejido->save();
        return redirect()->route('tejido.index');
    }
    
}

