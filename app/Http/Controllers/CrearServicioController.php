<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Carbon\Carbon;

class CrearServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $servicios = Service::all();
        return view('crearservicio.createservice', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $createNewservice = new Service();
        $createNewservice ->tipo_servicio=$request->input('tipo_servicio');
        $createNewservice ->marcas=$request->input('marcas');
        $createNewservice ->estado_tenis=$request->input('estado_tenis');
        $createNewservice ->abono=$request->input('abono');
        $createNewservice ->numero_order=$request->input('numero_order');
        $createNewservice ->referencia=$request->input('referencia');
        $createNewservice ->estado_pedido=$request->input('estado_pedido');
        $createNewservice ->fecha_entrega=$request->input('fecha_entrega');
        
        $createNewservice->save();
        return 'Saved';
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
