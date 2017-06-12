<?php

namespace CTEC\Http\Controllers;

use CTEC\Models\Instalacion;
use CTEC\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PruebaServicioController extends Controller
{
    public function prueba(Request $request){
        $serviciosSeleccionados  = response()->json($request);
        $id = self::getLast()->id;
        foreach ($serviciosSeleccionados as $key => $val){
           foreach ($val as $element){
               return response()->json(["ja" => $element]);
           }
        }
        //$arrayServicios = $serviciosSeleccionados[0];
        /*
        foreach ($arrayServicios as $servicio){
            $newServicio = new Servicio();
            $newServicio->nombre = $servicio;
            $newServicio->instalacion_id = $id;
            $newServicio->save();
        }
        */

        return $serviciosSeleccionados;
    }

    public function getLast(){
        return Instalacion::orderBy('id','DESC')->first();
    }
}
