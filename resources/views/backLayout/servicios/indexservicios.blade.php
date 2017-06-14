@extends('layout')

@section('contenido')
    <div class="centerDiv center-align paddingTop">
        <div class="valign">
            <form id="serviciosForm" method="post">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="servicio" type="text" class="validate">
                        <label for="servicio">Ingrese el Nombre del Servicio</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">Agregar Servicio
                    <i class="material-icons right">send</i>
                </button>
            </form>
            <script>
                $("#serviciosForm").submit(function (e) {
                    var nombreServicio = $('#servicio').val();
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
                        url: "serviciosdefault",
                        data: {'nombreServicio': nombreServicio},
                        success: function (e) {
                            Materialize.toast('Servicio Creado',3000);
                            $("#refresh").load(location.href + " #refresh", function () {
                                $.getScript('js/modal.js');
                            });
                            console.log(e.mensaje);
                        }
                    });
                });
            </script>
            <div class="row paddingTop">
                <h4 class="left-align">
                    Servicios
                </h4>
                @include('backLayout.instalaciones.fragmento.info')
                <div id="refresh">
                    @foreach($serviciosDefaults as $serviciosDefault)
                        <div class="marginTop">
                            <div class="row">
                                <div class="col s4 push-s1 left-align">
                                    <i class="flow-text">{{ $serviciosDefault->nombre }}</i>
                                </div>
                                {{--Dialog Pop-Up--}}
                                <div class="right-align col s4">
                                    <a class="waves-effect waves-light btn editButton" href="#modal1" data-id="{{$serviciosDefault->id}}"><i
                                                class="material-icons center">edit</i></a>
                                        <div id="modal1" class="modal">
                                            <div class="modal-content">
                                                <form method="get" id="editarServicioForm">,
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input id="editarServicio" type="text" class="validate">
                                                            <label for="editarServicio">Ingrese el Nombre del Servicio</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                                        <button class="btn waves-effect waves-light" type="submit">Editar
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{--Fin Dialog Pop-UP--}}
                                    <div class="right-align col s4">
                                        <form action="{{ route('serviciosdefault.destroy', $serviciosDefault->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="waves-effect waves-light btn red material-icons">delete</button>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                    <div class="paddingTop left-align">
                        {!! $serviciosDefaults->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection