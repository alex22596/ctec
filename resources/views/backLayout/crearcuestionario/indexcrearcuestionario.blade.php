<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/home.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/preventBack.js"></script>
        <script src="js/dropdown.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Evaluación</title>
    </head>
    <header>
        <a href="#"><img src="img/CTECCompleto.png" alt="CTEC logo."></a>
    </header>
    <body>
        <main>
            <div class="row centerDiv paddingTop">
                <div class="col s8 m12">
                    <b>{{$cuestionario->nombre}}</b>
                        <table class="marginTop">
                            <tbody>
                                <tr>
                                     <td>
                                         @foreach($preguntas as $pregunta)
                                            @if($pregunta->tipo == "Escala")
                                                <b>{{$pregunta->contenido}}</b>
                                                    <div class="row">
                                                        <div class="col s12 offset-s1">
                                                            <p class="range-field">
                                                                <input type="range" min="1" max="5"/>
                                                            </p>
                                                        </div>
                                                    </div>
                                            @else
                                                <b>{{$pregunta->contenido}}</b>
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
                                         @endforeach
                                     </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn waves-effect waves-light light-blue marginButton" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                </div>
            </div>
        </main>
    </body>
</html>