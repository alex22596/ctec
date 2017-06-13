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
        $nombreInstalacion = $request['nombreInstalaciones'];

        $nuevaInstalacion = new Instalacion();
        $nuevaInstalacion->nombre = $nombreInstalacion;
        $nuevaInstalacion->save();
        $id = self::getLast()->id;

        foreach ($serviciosSeleccionados as $servicio){
            $newServicio = new Servicio();
            $newServicio->nombre = $servicio;
            $newServicio->instalacion_id = $id;
            $newServicio->save();
        }

        return view('backLayout.instalaciones.indexinstalaciones')->with('info','La instalación fue Creada');;

    }

    public function getLast(){
        return Instalacion::orderBy('id','DESC')->first();
    }
}
