<?php

namespace CTEC\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class AdministradorController extends Controller
{
    public function iniciarSesion(Request $request)
    {
        if (Auth::attempt(['nombre_usuario' => $request['nombreUsuario'], 'password' => $request['password']])) {
            return view('instalaciones');
        }
        return redirect()->back();
    }
}
