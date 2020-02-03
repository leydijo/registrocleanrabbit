<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use App\RegisterUser;



class SearchController extends Controller
{
    //

    public function search(Request $request)
    {
        $c = $request->get('c');
        if($c != ""){
            $user = RegisterUser::where('cedula','LIKE', '%' . $c . '%')
                                    ->orwhere('nombres', 'LIKE', '%' . $c . '%')
                                    ->get();
            
            if(count($user) > 0)
                    return view('resgisterUsers.createUser')->withDetails($user)->withQuery($c);
            
        }
        return view('resgisterUsers.createUser')->withMessage("USUARIO NO REGISTRADO");
    }

}
