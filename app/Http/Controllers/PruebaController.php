<?php

namespace CTEC\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PruebaController extends Controller
{
    public function iniciarSesion(Request $request)
    {
        if (Auth::attempt(['nombre_usuario' => $request['nombre_usuario'], 'password' => $request['password']])) {
            return redirect()->route('instalaciones');
        }
        else{
            return redirect()->back();
        }
    }
}
