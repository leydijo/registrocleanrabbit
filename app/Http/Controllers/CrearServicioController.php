<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TiposServicio;
use App\Marca;
use App\EstadosTeni;
use App\EstadosPedido; 
use App\Orders;
use App\RegisterUser;
use App\OrdersRegisterUser;
use Carbon\Carbon;

class CrearServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user=new RegisterUser();
        $getUserById=$user->getUserById($request->get("user"));
        //dd($getUserById);
        return view('verproductos.productos', compact('getUserById'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //muestre estos campos en la vista service/creeate


        $usuario = RegisterUser::find($request->get('user'));
        

        $tipoServicios = TiposServicio::all();

        $tipoMarcas = Marca::all(); 

        $estadoTenis = EstadosTeni::all();

        $estadoPedido = EstadosPedido::all();

       
                //return $request->input('name');

              //dd($request->input('cedula'));
        return view('crearservicio.createservice', compact('nameuser','tipoServicios', 'tipoMarcas', 'estadoTenis', 'estadoPedido', 'usuario'));

        
        
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
            
        Orders::create($request->all());

        

            //  dd($request->all());
      
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
