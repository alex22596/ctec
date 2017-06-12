<?php

namespace CTEC\Http\Controllers;

use CTEC\Models\Instalacion;
use CTEC\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PruebaServicioController extends Controller
{
    public function prueba(Request $request){
        $serviciosSeleccionados  = $request['serviciosSeleccionados'];
        $id = self::getLast()->id;

        foreach ($serviciosSeleccionados as $servicio){
            $newServicio = new Servicio();
            $newServicio->nombre = $servicio;
            $newServicio->instalacion_id = $id;
            $newServicio->save();
        }

        return $serviciosSeleccionados;

    }

    public function getLast(){
        return Instalacion::orderBy('id','DESC')->first();
    }
}
