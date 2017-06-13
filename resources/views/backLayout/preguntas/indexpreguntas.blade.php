@extends('layout')

@section('contenido')
    <div class="centerDiv center-align">
        <div class="valign">
            <form action="">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="contenidoPregunta" type="text" class="validate">
                        <label for="contenidoPregunta">Ingrese el Contenido de la Pregunta</label>
                    </div>
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Seleccione una Opción</option>
                            <option value="1">Selección Única</option>
                            <option value="2">Selección Múltiple</option>
                            <option value="3">Escala</option>
                        </select>
                        <label>Escoja el Tipo de Pregunta</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">Agregar Pregunta
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
    <!--Instalaciones con sus servicios actuales-->
    <div class="centerDiv">
        <div class="">
            <div class="row valign-wrapper">
                <div class="col m4 s12">
                    <h5 class="mobileTitleView">Califique la Calidad del Aire Acondicionado</h5>
                </div>
                <div class="col m4 s3 push-s1">
                    <i class="material-icons">edit_mode</i>
                </div>
                <div class="col m4 push-s2">
                    <i class="material-icons">delete</i>
                </div>
            </div>
            <div class="tabServices">
                <div class="row">
                    <div class="col m4">
                        <h6>Excelente</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col m4">
                        <h6>Muy Bueno</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col m4">
                        <h6>Regular</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col m4">
                        <h6>Deficiente</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row valign-wrapper">
            <div class="col m4 s12">
                <h5 class="mobileTitleView">Califique la Limpieza de la Instalación</h5>
            </div>
            <div class="col m4 s3 push-s1">
                <i class="material-icons">edit_mode</i>
            </div>
            <div class="col m4 push-s2">
                <i class="material-icons">delete</i>
            </div>
        </div>
        <div class="tabServices">
            <div class="row">
                <div class="col m4">
                    <h6>Excelente</h6>
                </div>
            </div>
            <div class="row">
                <div class="col m4">
                    <h6>Muy Bueno</h6>
                </div>
            </div>
            <div class="row">
                <div class="col m4">
                    <h6>Regular</h6>
                </div>
            </div>
            <div class="row">
                <div class="col m4">
                    <h6>Deficiente</h6>
                </div>
            </div>
        </div>
        <div class="row valign-wrapper">
            <div class="col m4 s12">
                <h5 class="mobileTitleView">Califique la Calidad del Wifi</h5>
            </div>
            <div class="col m4 s3 push-s1">
                <i class="material-icons">edit_mode</i>
            </div>
            <div class="col m4 push-s2">
                <i class="material-icons">delete</i>
            </div>
        </div>
        <div class="tabServices">
            <div class="row">
                <div class="col m4">
                    <h6>Excelente</h6>
                </div>
            </div>
            <div class="row">
                <div class="col m4">
                    <h6>Muy Bueno</h6>
                </div>
            </div>
            <div class="row">
                <div class="col m4">
                    <h6>Regular</h6>
                </div>
            </div>
            <div class="row">
                <div class="col m4">
                    <h6>Deficiente</h6>
                </div>
            </div>
        </div>
    </div>
@endsection