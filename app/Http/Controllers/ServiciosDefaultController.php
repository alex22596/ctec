<?php

namespace CTEC\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use CTEC\Models\ServiciosDefault;

class ServiciosDefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviciosDefaults = ServiciosDefault::orderBy('id','DESC');
        return view('backLayout.instalaciones.indexinstalaciones', compact('serviciosDefaults'));
    }

    public function returnView(){
        $serviciosDefaults = ServiciosDefault::orderBy('id','DESC')->paginate(3);
        return view('backLayout.servicios.indexservicios', compact('serviciosDefaults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombreServicioDefault  = $request['nombreServicio'];
        //dd($nombreServicioDefault);
        $nuevoServicioDefault = new ServiciosDefault();
        $nuevoServicioDefault->nombre = $nombreServicioDefault;
        $nuevoServicioDefault->save();

        return response()->json(["mensaje" => "OK"]);
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
        return response()->json(["mensaje" => $id]);
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
        $servicio = ServiciosDefault::find($id);
        return redirect()->back()->with('info', $servicio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = ServiciosDefault::find($id);
        $servicio->delete();
        return back()->with('info','El Servicio fue Eliminado');
    }
}
