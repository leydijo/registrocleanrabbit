<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterUser;
use App\Http\Requests\UserregisterRequest;


class RegisterUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $name = new RegisterUser();
        $name = $request->input('name');
        dd($request->all());
        return redirect(action('RegisterUsersController@create'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('resgisterUsers.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserregisterRequest $request)
    { 
        //return $request->input('name');
        //return $request->all();
        
         $createNewUser = new RegisterUser();
         $createNewUser->cedula=$request->input('cedula');
         $createNewUser->nombres=$request->input('nombrescompletos');
         $createNewUser->direccion=$request->input('direccion');
         $createNewUser->cumpleanos=$request->input('cumpleanos');
         $createNewUser->telefono=$request->input('telefono');
         $createNewUser->save();
         return redirect(action('RegisterUsersController@create'));
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
        
        $usuarioregistrado = RegisterUser::find($id);
        
        return view('edit.editarservice', compact('usuarioregistrado'));
        return redirect(action('RegisterUsersController@create'));
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserregisterRequest $request, $id)
    {
        //$usuarioregistrado->update($request->all());

        // $usuarioregistrado =  RegisterUser::find($id);

        //  $usuarioregistrado->cedula =  $request->cedula;
        //  $usuarioregistrado->nombres =  $request->nombres;
        // $usuarioregistrado->direccion =  $request->direccion;
        //  $usuarioregistrado->cumpleanos =  $request->cumpleanos;
        //  $usuarioregistrado->telefono =  $request->telefono;

        // $usuarioregistrado->save();

         $usuarioregistrado = RegisterUser::find($id);
         $usuarioregistrado->update($request->all());
         $usuarioregistrado->cedula = $request->cedula;
    	 $usuarioregistrado->nombres = $request->nombrescompletos;
         $usuarioregistrado->direccion = $request->direccion;
         $usuarioregistrado->cumpleanos = $request->cumpleanos;
		 $usuarioregistrado->telefono = $request->telefono;
        
    	
         $usuarioregistrado->save();

          return view('resgisterUsers.createUser');
        //return 'actualizado';
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
