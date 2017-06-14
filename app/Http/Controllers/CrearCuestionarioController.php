<?php

namespace CTEC\Http\Controllers;

use Illuminate\Http\Request;
use CTEC\Models\Evaluacion;
use CTEC\Models\Pregunta;
use Illuminate\Routing\Controller;

class CrearCuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * $idCuestionario
     */
    public function index($id)
    {
        $idCuestionario = $id;
        $cuestionario = Evaluacion::find($idCuestionario);
        $preguntas = Pregunta::orderBy('id','DESC')->paginate(10);
        return view('backLayout.crearcuestionario.indexcrearcuestionario',compact('cuestionario','preguntas'));
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
        //
    }
}
