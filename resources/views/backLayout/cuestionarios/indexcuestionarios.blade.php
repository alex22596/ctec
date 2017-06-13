@extends('layout')

@section('contenido')
    <div class="centerDiv center-align">
        <div class="valign">
            <form action="">
                <div class="row">
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Seleccione una Opción</option>
                            <option value="1">Instalación 1</option>
                            <option value="2">Instalación 2</option>
                            <option value="3">Instalación 3</option>
                        </select>
                        <label>Escoja la Instalación</label>
                    </div>
                    <div class="input-field col s12">
                        <select multiple>
                            <option value="" disabled selected>Puede Elegir Múltiples Opciones</option>
                            <option value="1">Pregunta 1</option>
                            <option value="2">Pregunta 2</option>
                            <option value="3">Pregunta 3</option>
                        </select>
                        <label>Seleccione la/s Preguntas</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">Agregar Cuestionario
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
    <div class="centerDiv">
        <div class="">
            <div class="row valign-wrapper">
                <div class="col m4 s12">
                    <h5 class="mobileTitleView">Cuestionario 1</h5>
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
                        <h6 class="boldText">Jacaranda</h6>
                    </div>
                </div>
                <div class="row marginTab2">
                    <div class="col m4 ">
                        <h6>Califique la Calidad del Aire Acondicionado</h6>
                    </div>
                </div>
                <div class="row marginTab2">
                    <div class="col m4 ">
                        <h6>Califique la Limpieza de la Instalación</h6>
                    </div>
                </div>
                <div class="row marginTab2">
                    <div class="col m4 ">
                        <h6>Califique la Calidad del Wifi</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row valign-wrapper">
                <div class="col m4 s12">
                    <h5 class="mobileTitleView">Cuestionario 2</h5>
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
                        <h6 class="boldText">Bromelia</h6>
                    </div>
                </div>
                <div class="row marginTab2">
                    <div class="col m4 ">
                        <h6>Califique la Calidad del Aire Acondicionado</h6>
                    </div>
                </div>
                <div class="row marginTab2">
                    <div class="col m4 ">
                        <h6>Califique la Limpieza de la Instalación</h6>
                    </div>
                </div>
                <div class="row marginTab2">
                    <div class="col m4 ">
                        <h6>Califique la Calidad del Wifi</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection