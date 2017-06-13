<?php

namespace CTEC\Http\Controllers;

use CTEC\Models\Evaluacion;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use CTEC\Models\Instalacion;
use CTEC\Models\PreguntasDefault;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instalaciones = Instalacion::orderBy('id','DESC')->paginate(200);
        $preguntasDefault = PreguntasDefault::orderBy('id','DESC')->paginate(200);
        $evaluaciones = Evaluacion::orderBy('id','DESC')->paginate(3);

        return view("backLayout.cuestionarios.indexcuestionarios",compact('instalaciones','preguntasDefault','evaluaciones'));
        /*
        $instalaciones = Instalacion::orderBy('id','DESC')->paginate(3);
        $serviciosDefaults = ServiciosDefault::orderBy('id','DESC')->paginate();
        return view('backLayout.instalaciones.indexinstalaciones', compact('serviciosDefaults','instalaciones'));
        */
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
    public function store(Request $request)
    {
        //
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
        $evaluacion = Evaluacion::find($id);
        $evaluacion->delete();
        return back()->with('info','La instalacion fue eliminada');
    }
}
