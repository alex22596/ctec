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
    <div class="row centerDiv">
        <div class="col s8">
            <h4>
                Instalaciones
            </h4>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="3">&nbsp;</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($instalaciones as $instalacion)
                    <tr>
                        <td>{{ $instalacion->id }}</td>
                        <td>{{ $instalacion->nombre }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
            {!! $instalaciones->links() !!}
        </div>
    </div>
@endsection