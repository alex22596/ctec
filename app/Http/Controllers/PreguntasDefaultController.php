<?php

namespace CTEC\Http\Controllers;

use CTEC\Models\PreguntasDefault;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PreguntasDefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = PreguntasDefault::orderBy('id','DESC')->paginate(3);
        //$serviciosDefaults = ServiciosDefault::orderBy('id','DESC')->paginate();
        return view('backLayout.preguntas.indexpreguntas', compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function preguntasdefault(Request $request){
        $contenidoPregunta  = $request['contenidoPregunta'];
        $tipoPregunta = $request['tipoPregunta'];

        $nuevaPreguntaDefault = new PreguntasDefault();
        $nuevaPreguntaDefault->contenido = $contenidoPregunta;
        $nuevaPreguntaDefault->tipo = $tipoPregunta;
        $nuevaPreguntaDefault->save();

        return response()->json(["mensaje" => "OK"]);
    }

    public function store(Request $request)
    {

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
        $pregunta = PreguntasDefault::find($id);
        $pregunta->delete();
        return back()->with('info','La instalacion fue eliminada');
    }
}
