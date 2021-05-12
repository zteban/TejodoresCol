@extends('layouts.plantilla')
@section ('title','tejido1'.$Tejido)
@section('content')
    <main class="mainPrincipal">
        <div class="dash-cards">
            @foreach ($Tejido as $tejido1)
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <h5>{{$tejido1->nombre}}</h5>
                            <a href="{{route('tejido.edit',$tejido1)}}" ><img src="{{asset($tejido1->imagen)}}" alt="" class="image fit" /></a>
                            <h4>{{$tejido1->created_at}}</h4>
                        </div>
                    
                    </div>
                   
                    <div class="card-footer">
                        <form action="{{route('tejido.like',$tejido1)}}" method='post' >
                            @csrf
                            @method('get')
                            <p>${{$tejido1->precio}}</a>
                            <button class="like__btn{{$tejido1->id}} like__btn">
                                <span id="icon{{$tejido1->id}}"><i class="far fa-thumbs-up"></i></span>
                                <span id="count{{$tejido1->id}}">{{$tejido1->likes}}</span>
                            </button>
                        </form>
                    </div>
                    
                    
                </div>
                
            @endforeach
            
        </div>      
    </main>
   
@endsection
