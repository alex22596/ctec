@extends('layout')

@section('contenido')
    <div class="centerDiv center-align paddingTop">
        <div class="valign">
            <form id="enviarevaluacionForm" method="post">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <select id="evaluacion">
                            <option value="" disabled selected>Seleccione una Opción</option>
                            @foreach($evaluaciones as $evaluacion)
                                <option name="evaluacion[]" value={{ $evaluacion->id }}>{{ $evaluacion->nombre }}</option>
                            @endforeach
                        </select>
                        <label>Escoja un Cuestionario</label>
                    </div>
                    <div class="input-field col s12">
                        <select multiple id="clientes">
                            <option value="" disabled selected>Puede Elegir Múltiples Opciones</option>
                            @foreach($clientes as $cliente)
                                <option name="clientes[]" value={{ $cliente->correo }}>{{ $cliente->correo }}</option>
                            @endforeach
                        </select>
                        <label>Seleccione el o los Correos Deseados</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">
                    Enviar Cuestionario
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
    <script>
        $("#enviarevaluacionForm").submit(function (e) {
            var clientesSeleccionados = $('#clientes').val();
            var evaluacionid = $('#evaluacion option:selected').val();
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
                url: "cuestionarios/enviarcorreo",
                data: {'clientes': clientesSeleccionados, 'evaluacion':evaluacionid},
                success: function (e) {
                    Materialize.toast('Correo/s enviados',3000);
                    $("#refresh").load(location.href + " #refresh");
                    console.log(e.mensaje);
                }
            });

        });
    </script>
@endsection