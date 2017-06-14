<?php

namespace CTEC\Http\Controllers;

use CTEC\Models\Instalacion;
use CTEC\Models\Pregunta;
use CTEC\Models\PreguntasDefault;
use CTEC\Models\Servicio;
use CTEC\Models\Evaluacion;
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

        return response()->json(["mensaje" => "OK"]);

    }

    public function getLast(){
        return Instalacion::orderBy('id','DESC')->first();
    }

    public function cuestionarios(Request $request){
        $nombreEvaluacion  = $request['nombreCuestionario'];
        $instalacion = $request['instalacion'];
        $preguntas = $request['preguntas'];

        $nuevaEvaluacion = new Evaluacion();
        $nuevaEvaluacion->nombre = $nombreEvaluacion;
        $nuevaEvaluacion->instalacion_id = intval($instalacion);
        $nuevaEvaluacion->save();

        $id = self::getLastEvaluacion()->id;

        foreach ($preguntas as $pregunta){
            $idpregunta = intval($pregunta);
            $preguntaDefault = self::getDataPreguntaDefault($idpregunta);
            $nuevaPregunta = new Pregunta();
            $nuevaPregunta->contenido = $preguntaDefault->contenido;
            $nuevaPregunta->tipo = $preguntaDefault->tipo;
            $nuevaPregunta->evaluacion_id = $id;
            $nuevaPregunta->save();
        }
        return response()->json(["mensaje" => "OK"]);
    }

    public function editarServicio(Request $request){
        return view('iniciarSesion');
    }

    public function getLastEvaluacion(){
        return Evaluacion::orderBy('id','DESC')->first();
    }
    public function getDataPreguntaDefault($id){
        $preguntaDefault = PreguntasDefault::find($id);
        return $preguntaDefault;
    }

    public function preguntas($instalacion, $pregunta){
        $preguntaDefault = self::getDataPreguntaDefault($pregunta);
        $nuevaPregunta = new Pregunta();
        $nuevaPregunta->contenido = $preguntaDefault->contenido;
        $nuevaPregunta->tipo = $preguntaDefault->tipo;
        $nuevaPregunta->evaluacion_id = intval($instalacion);
        $nuevaPregunta->save();
    }

    public function preguntasdefault(Request $request){
        $contenidoPregunta  = $request['contenidoPregunta'];
        $tipoPregunta = $request['tipoPregunta'];

        $nuevaPreguntaDefault = new PreguntasDefault();
        $nuevaPreguntaDefault->contenido = $contenidoPregunta;
        $nuevaPreguntaDefault->tipo = $tipoPregunta;
        $nuevaPreguntaDefault->save();

        return redirect()->back();
    }
}
