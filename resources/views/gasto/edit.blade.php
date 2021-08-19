@extends('layouts.base')

@section ('content')
<div class="content">
               <div class=row>
                   <div class="col">
                       <h2>Editar gastos {{$gastosM->name}}</h2>
                       @if($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach($errors->all() as $error)
                               <li>{{$error}}</li>
                               @endforeach
                           </ul>
                       </div>
                       @endif
                       <form action="/gastos/{{$gastosM->id}}" method="POST">
                       @csrf
                       @method('put')
                            <div class=" ">
                                <label for="Nombre">Digite Gasto</label>
                                <input type="text" class="form-control" id="cajaNombreM" name="cajaNombreM" placeholder="Por favor digite el nombre de su gasto"> <br>
                             </div><br>
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="/gastos" class="btn btn-primary">Atras</a>
                       </form>
                       
                    
                    
                   </div>
               </div> 
            </div>
@endsection

