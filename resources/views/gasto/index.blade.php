@extends('layouts.base')
@section ('content')
<div class="content">
               <div class=row>
                   <div class="col">
                       <h2>Gastos</h2>
                       <table class="table table-hover">
                           <tr>
                            <th>Id</th>
                            <th>Nombre Gasto</th>
                            <th>Opcion 1</th>
                            <th>Opcion 2</th>
                            <th>Agregar</th>
                           </tr>
                           
                       @foreach($Gastos as $Gastos)
                            <tr>
                                <td>{{$Gastos->id}}</td>
                                <td>{{$Gastos->name}}</td>
                                <td><a class="btn btn-outline-success" href="/gastos/{{$Gastos->id}}/edit">Editar</a></td>
                                <td><a class="btn btn-outline-danger" href="/gastos/{{$Gastos->id}}/confirm">Eliminar</a></td>
                                <td><a class="btn btn-outline-danger" href="/gastos/{{$Gastos->id}}">Agregar Detalles</a></td>
                            </tr>

                       @endforeach
                    </table>
                    <a href="/gastos/create" class="btn btn-primary">Crear Gastos</a>
                   </div>
               </div> 
            </div>
@endsection

