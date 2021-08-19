@extends('layouts.base')
@section ('content')
<div class="content">
               <div class=row>
                   <div class="col">
                       <h2>Detalles de: {{$Gastos->name}}</h2>
                       <table class="table table-hover">
                           <tr>
                               <th>Nombre</th>
                               <th>Descripcion</th>
                               <th>Imagen</th>
                           </tr>
                           @foreach($Gastos->gastosDetalles as $gasDetalles)
                           <tr>
                               <td>{{$gasDetalles->nombre}}</td>
                               <td>{{$gasDetalles->descripcion}}</td>
                               <td><img src="/Images/gastos/{{$gasDetalles->imagen}}" alt="Imagen Usuario" width="100" height="100">
                               <a href="">Editar</a>
                               <a href="">Eliminar</a>
                           </tr>
                           @endforeach
                       </table>
                    <a href="/gastos/{{$gasDetalles->gastos_id}}/detalles/create" class="btn btn-primary">Crear detalles</a>
                   </div>
               </div> 
            </div>
@endsection

