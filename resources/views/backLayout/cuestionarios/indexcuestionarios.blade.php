@extends('layout')

@section('contenido')
    <div class="centerDiv center-align paddingTop">
        <div class="valign">
            <form id="agregarCuestionario" method="post">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nombreCuestionario" name="nombre" type="text" class="validate">
                        <label for="nombreCuestionario" class="black-text" >Ingrese el Nombre del Cuestionario</label>
                    </div>
                    <div class="input-field col s12">
                        <select id="instalacion">
                            <option value="" disabled selected>Seleccione instalación</option>
                            @foreach($instalaciones as $instalacion)
                                <option name="instalacion[]" value={{ $instalacion->id }}>{{ $instalacion->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <select id="preguntasdefault" multiple>
                            <option value="" disabled selected>Seleccione la/s preguntas</option>
                            @foreach($preguntasDefault as $preguntaDefault)
                                <option name="preguntasdefault[]" value={{ $preguntaDefault->id }}>{{ $preguntaDefault->contenido }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">Agregar Cuestionario
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
    <script>
        $("#agregarCuestionario").submit(function () {
            var nombreCuestionario = $('#nombreCuestionario').val();
            var instalacion = $('#instalacion option:selected').val();
            var preguntas = $('#preguntasdefault').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                params: {_token:token},
                url: "cuestionarios/agregarcuestionario",
                data: {'nombreCuestionario': nombreCuestionario, 'instalacion':instalacion,'preguntas':preguntas},
                success: function (e) {
                    alert(preguntas);
                    console.log(e);
                    console.log("OK");
                }
            });
        });
    </script>

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
    </div>
@endsection