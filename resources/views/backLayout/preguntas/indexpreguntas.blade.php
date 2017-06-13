@extends('layout')

@section('contenido')
    <div class="centerDiv center-align paddingTop">
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
                            <option value="2">Escala</option>
                        </select>
                        <label>Escoja el Tipo de Pregunta</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">Agregar Pregunta
                    <i class="material-icons right">send</i>
                </button>
            </form>
            <script>
                $("#preguntasForm").submit(function (e) {
                    var contenidoPregunta = $('#contenidoPregunta').val();
                    var tipoPregunta = $('#tipoPregunta').find('option:selected').text();
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
                        url: "preguntas/agregarpreguntadefault",
                        data: {'contenidoPregunta': contenidoPregunta, 'tipoPregunta':tipoPregunta},
                        success: function (e) {
                            Materialize.toast('Instalacion Creada',3000);
                            $("#refresh").load(location.href + " #refresh");
                            console.log(e.mensaje);
                        }
                    });
                });
            </script>
            <div class="row paddingTop">
                <h4 class="left-align">
                    Preguntas
                </h4>
                @include('backLayout.instalaciones.fragmento.info')
                <div id="refresh">
                    @foreach($preguntas as $pregunta)
                        <table class="marginTop">
                            <tbody>
                                <tr>
                                    <td><i class="flow-text">{{ $pregunta->contenido }}</i></td>
                                    <td class="right-align">
                                        <form action="{{ route('preguntas.destroy', $pregunta->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="waves-effect waves-light btn red material-icons">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        @if($pregunta->tipo == "Escala")
                                            <b>Tipo Escala</b>
                                            <div class="row">
                                                <div class="col s12 offset-s1">
                                                    <p class="range-field">
                                                        <input type="range" min="1" max="5"/>
                                                    </p>
                                                </div>
                                            </div>
                                        @else
                                            <b>Tipo Selección Unica</b>
                                            <div class="row">
                                                <p class="col s12 offset-s1">
                                                    <input name="group1" type="radio" id="test1" />
                                                    <label for="test1">Excelente</label>
                                                </p>
                                                <p class="col s12 offset-s1">
                                                    <input name="group1" type="radio" id="test2" />
                                                    <label for="test2">Muy Bueno</label>
                                                </p>
                                                <p class="col s12 offset-s1">
                                                    <input name="group1" type="radio" id="test3" />
                                                    <label for="test3">Regular</label>
                                                </p>
                                                <p class="col s12 offset-s1">
                                                    <input name="group1" type="radio" id="test4" />
                                                    <label for="test4">Deficiente</label>
                                                </p>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @endforeach
                    <div class="paddingTop left-align">
                        {!! $preguntas->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection