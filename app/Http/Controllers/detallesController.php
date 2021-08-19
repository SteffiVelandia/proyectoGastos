<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalles;
use App\Models\gastos;

class detallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, gastos $gastos)
    {
        //retorno a la vista de crear detalles
        return view('detalles.crear', [
            'Gastos'=>gastos::find($id), 'id'=>$id
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $image=$request->file('imgDet');
        $nombreImg=time().'.'.$image->getClientOriginalExtension();
        $destino=public_path('images/gastos');
        $request->imgDet->move($destino, $nombreImg);
        //almacenamos la informacion en la bd
        $nuevoDetalles = new detalles(); 
        $nuevoDetalles->nombre = $request->get('cajaNombreDet');
        $nuevoDetalles->descripcion = $request->get('cajaDescripcionDet');
        $nuevoDetalles->imagen=$nombreImg;
        $nuevoDetalles->gastos_id=$id;
        $nuevoDetalles->save();

        return redirect('/gastos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
