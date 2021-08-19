@extends('layouts.base')

@section ('content')
<div class="content">
               <div class=row>
                   <div class="col">
                       <h2>Crear nuevos gastos</h2>
                       @if($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach($errors->all() as $error)
                               <li>{{$error}}</li>
                               @endforeach
                           </ul>
                       </div>
                       @endif
                       <form action="/gastos" method="POST" enctype ="multipart/form-data">
                       @csrf
                            <div class="form-group">
                                <label for="Nombre">Digite nombre de Gasto</label>
                                <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Por favor digite el nombre de su gasto" value="{{old('cajaNombre')}}"> <br>
                            </div><br>
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="/gastos" class="btn btn-primary">Atras</a>
                       </form>
                       
                    
                    
                   </div>
               </div> 
            </div>
@endsection

