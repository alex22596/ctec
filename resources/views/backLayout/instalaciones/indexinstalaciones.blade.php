@extends('layout')

@section('contenido')
    <div class="centerDiv center-align">
        <div class="valign">
            <form id="serviciosForm" method="post">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nombreInstalacion" name="nombre" type="text" class="validate">
                        <label for="nombreInstalacion">Ingrese el Nombre de la Instalación</label>
                    </div>
                    <div class="input-field col s12">
                        <select id="servicios" multiple>
                            <option value="" disabled selected>Choose your option</option>
                            @foreach($serviciosDefaults as $serviciosDefault)
                                <option name="servicios[]" value={{ $serviciosDefault->nombre }}>{{ $serviciosDefault->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">Agregar Instalación
                    <i class="material-icons right">send</i>
                </button>
            </form>
            <script>
                $("#serviciosForm").submit(function () {
                    var serviciosSeleccionados = $('#servicios').val();
                    var instalacionNombre = $('#nombreInstalacion').val();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        params: {_token:token},
                        url: "instalaciones/serviciosseleccionados",
                        data: {'serviciosSeleccionados': serviciosSeleccionados, 'nombreInstalaciones':instalacionNombre},
                        success: function () {
                            console.log("OK");
                            //Materialize.toast("OK", 2000);
                        }
                    });
                });
            </script>
        </div>
    </div>
    <div class="row centerDiv">
        <div class="col s8">
            <h4>
                Instalaciones
            </h4>
            @include('backLayout.instalaciones.fragmento.info')
            <table>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th colspan="3">&nbsp;</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($instalaciones as $instalacion)
                    <tr>
                        <td>{{ $instalacion->nombre }}</td>
                        <td>
                            <form action="{{ route('instalaciones.destroy', $instalacion->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="waves-effect waves-light btn">Eliminar</button>
                            </form>
                        </td>

                    </tr>
                    <tr>
                        <table>
                            <thead>
                            <tr>
                                <th>Nombre servicio</th>
                                <th colspan="3">&nbsp;</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instalacion->servicios as $servicio)
                                <tr>
                                    @if($instalacion->id == $servicio->instalacion_id)
                                        <td>{{ $servicio->nombre }}</td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $instalaciones->links() !!}
        </div>
    </div>
@endsection
