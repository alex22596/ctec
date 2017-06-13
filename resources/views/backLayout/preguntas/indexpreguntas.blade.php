@extends('layout')

@section('contenido')
    <div class="centerDiv center-align">
        <div class="valign">
            <form id="preguntasForm" method="post">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="contenidoPregunta" type="text" class="validate">
                        <label for="contenidoPregunta">Ingrese el Contenido de la Pregunta</label>
                    </div>
                    <div class="input-field col s12">
                        <select id="tipoPregunta">
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
            <script>
                $("#preguntasForm").submit(function () {
                    var contenidoPregunta = $('#contenidoPregunta').val();
                    var tipoPregunta = $('#tipoPregunta').val();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        params: {_token:token},
                        url: "/preguntas/agregarpreguntadefault",
                        data: {'contenidoPregunta': contenidoPregunta, 'tipoPregunta':tipoPregunta},
                        success: function () {
                            console.log("OK");
                        }
                    });
                });
            </script>
        </div>
    </div>
@endsection