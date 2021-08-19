<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gastos;

class gastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        //aca vamos a mostrar todos los gastos que esten en la tabla
            return view('gasto.index',
                        ['Gastos'=>gastos::all()]
                    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //nos lleva al formulario de creaciòn.
        return  view('gasto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $valiData=$request->validate([
        //     'cajaNombre'=>'required|min:3|max:30',
        // ]);

        
        //almacenamos la informacion en la bd
        $nuevoGasto = new gastos(); 
        $nuevoGasto->name = $request->get('cajaNombre');
        $nuevoGasto->save();

        return redirect('/gastos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(gastos $gastos, $id)
    {
        
        //$nuevoDetalles = gastos::find($id);
        //dd($nuevoDetalles->gastosDetalles);
        return view('gasto.show',['Gastos'=> $gastos::findOrfail($id)] );
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gastosM =gastos::find($id);
        return view('gasto.edit',['gastosM'=>$gastosM]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valiData=$request->validate([
            'cajaNombreM'=>'required|min:3|max:30',
        ]);
        $modificarGasto=gastos::find($id);
        $modificarGasto->name=$request->get('cajaNombreM');
        $modificarGasto->save();
        return redirect ('/gastos'); 
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borarR=gastos::find($id);
        $borarR->delete();
        return redirect ('/gastos');
    }
    public function confirmId($id){
        $borrarM=gastos::find($id);
        return view('gasto.confirmV',['borrarM'=>$borrarM]);
    }
}
