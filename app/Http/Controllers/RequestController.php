<?php

namespace CTEC\Http\Controllers;

use CTEC\Models\Instalacion;
use CTEC\Models\Pregunta;
use CTEC\Models\PreguntasDefault;
use CTEC\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RequestController extends Controller
{
    public function instalaciones(Request $request){
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

        return redirect()->back()->with('info','La instalacion fue creada');

    }

    public function getLast(){
        return Instalacion::orderBy('id','DESC')->first();
    }

    public function cuestionarios(Request $request){

    }

    public function preguntas(Request $request){

    }
}
