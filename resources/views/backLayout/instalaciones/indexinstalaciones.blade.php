@extends('layout')

@section('contenido')
    <div class="centerDiv center-align">
        <div class="valign">
            <form action="">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nombreInstalacion" type="text" class="validate">
                        <label for="nombreInstalacion">Ingrese el Nombre de la Instalación</label>
                    </div>
                    <div class="input-field col s12">
                        <select multiple>
                            <option value="" disabled selected>Puede Escoger Múltiples Opciones</option>
                            <option value="1">Aire Acondicionado</option>
                            <option value="2">Sonido</option>
                            <option value="3">Internet</option>
                        </select>
                        <label>Elija los Servicios que desea Añadir</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">Agregar Instalación
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col s8">
            Intalaciones
        </div>
        <div class="col s4">
            mensaje
        </div>
    </div>
@endsection