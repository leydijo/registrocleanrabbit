<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TiposServicio;
use App\Marca;
use App\EstadosTeni;
use App\EstadosPedido;
use App\ProductoServicioUser;


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
        //muestre estos campos en la vista service/creeate

        $tipoServicios = TiposServicio::all();

        $tipoMarcas = Marca::all();

        $estadoTenis = EstadosTeni::all();

        $estadoPedido = EstadosPedido::all();

        return view('crearservicio.createservice', compact('tipoServicios', 'tipoMarcas', 'estadoTenis', 'estadoPedido'));

        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar los campos de la vista service/create
            
            ProductoServicioUser::create($request->all());

              dd($request->all());
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
