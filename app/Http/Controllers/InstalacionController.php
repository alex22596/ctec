<?php

namespace CTEC\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use CTEC\Models\Instalacion;
use CTEC\Models\ServiciosDefault;
use CTEC\Http\Requests\InstalacionRequest;
use CTEC\Models\Servicio;
use Illuminate\View\View;
use SebastianBergmann\Environment\Console;

class InstalacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instalaciones = Instalacion::orderBy('id','DESC')->paginate(3);
        $serviciosDefaults = ServiciosDefault::orderBy('id','DESC')->paginate();
        return view('backLayout.instalaciones.indexinstalaciones', compact('serviciosDefaults','instalaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backLayout.instalaciones.indexinstalaciones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool|\Illuminate\Http\Response
     */
    public function store(InstalacionRequest $request)
    {

        return redirect()->back()->with('info','La instalación fue Creada');
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
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Instalacion = Instalacion::find($id);
        $Instalacion->delete();
        return back()->with('info','La instalacion fue eliminada');
    }
}
