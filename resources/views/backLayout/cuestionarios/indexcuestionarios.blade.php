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
        $("#agregarCuestionario").submit(function (e) {
            var nombreCuestionario = $('#nombreCuestionario').val();
            var instalacion = $('#instalacion option:selected').val();
            var preguntas = $('#preguntasdefault').val();
            e.preventDefault();
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
                    Materialize.toast('Cuestionario Creado',3000);
                    $("#refresh").load(location.href + " #refresh");
                }
            });
        });
    </script>

    <div class="row centerDiv paddingTop">
        <div class="col s8 m12">
            <h4>
                Cuestionarios
            </h4>
            @include('backLayout.instalaciones.fragmento.info')
            <div id="refresh">
            @foreach($evaluaciones as $evaluacion)
                <td><i class="flow-text">{{ $evaluacion->nombre }}</i></td>
                <table class="marginTop">
                    <tbody>
                    <tr>
                        <td>{{ $evaluacion->Instalacion->nombre }}</td>
                        <td class="right-align">
                            <form action="{{ route('cuestionarios.destroy', $evaluacion->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="waves-effect waves-light btn red material-icons">delete</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="centerDiv">
                    <thead>
                    <tr>
                        <th>Preguntas</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($evaluacion->preguntas as $pregunta)
                        <tr>
                            @if($evaluacion->id == $pregunta->evaluacion_id)
                                <td>{{ $pregunta->contenido }}</td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endforeach
            <div class="paddingTop left-align">
                {!! $instalaciones->links() !!}
            </div>
        </div>
        </div>
    </div>
@endsection