@extends('layouts.base')

@section ('content')
<div class="content">
               <div class=row>
                   <div class="col">
                       <h2>Borrar gastos: {{$borrarM->name}}</h2>
                       <form action="/gastos/{{$borrarM->id}}" method="POST">
                       @csrf
                       @method('delete')
                        <button class="btn btn-success" type="submit">Eliminar</button>
                        <a href="/gastos" class="btn btn-primary">Atras</a>
                       </form>
                       
                    
                    
                   </div>
               </div> 
            </div>
@endsection

