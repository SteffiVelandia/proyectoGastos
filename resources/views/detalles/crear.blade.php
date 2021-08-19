@extends('layouts.base')

@section ('content')
<div class="content">
               <div class=row>
                   <div class="col">
                       <h2>Detalles de: </h2>
                       <form action="/gastos/{{$id}}/detalles" method="POST" enctype ="multipart/form-data">
                       @csrf
                            <div class="form-group">
                                <label for="Nombre">Digite nombre del datefmt_get_locale</label>
                                <input type="text" class="form-control" id="cajaNombreDet" name="cajaNombreDet" placeholder="Por favor digite el nombre de su gasto" value="{{old('cajaNombre')}}"> <br>
                                <label for="Nombre">Digite la descripcion</label>
                                <input type="text" class="form-control" id="cajaDescripcionDet" name="cajaDescripcionDet" placeholder="Por favor digite el nombre de su gasto" value="{{old('cajaNombre')}}"> <br>
                                <label for="Nombre">Seleccione Imagen del detealle</label>
                                <input type="file" class="form-control" id="imgDet" name="imgDet" placeholder="Por favor digite el nombre de su gasto" value="{{old('cajaNombre')}}"> <br>
                            </div><br>
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="/gastos" class="btn btn-primary">Atras</a>
                       </form>
                    
                   </div>
               </div> 
            </div>
@endsection

