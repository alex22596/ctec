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
    <title>Document</title>
</head>
<body>
<nav class="grey lighten-1 navBar">
    <a href="#" class="brand-logo center hide-on-med-and-up">CTEC</a>
    <ul id="slide-out" class="side-nav fixed indigo darken-1 z-depth-5">
        <li class="marginBottomProfile">
            <div class="userView centerImage">
                <a href="#"><span class="photo">
                            <img class="circle" src="img/icon_user2.png">
                        </span></a>
            </div>
            <h5 class="white-text name center-align marginDivider">Admin</h5>
        </li>
        <li class="marginDivider"><div class="divider"></div></li>
        <li><a class="waves-effect white-text" href="{{ url('instalaciones') }}">Gestión de Instalaciones</a></li>
        <li><a class="waves-effect white-text" href="{{ route('preguntas.index') }}">Gestión de Preguntas</a></li>
        <li><a class=" waves-effect white-text" href="{{ url('cuestionarios') }}">Gestión de Cuestionarios</a></li>
        <li><a class="waves-effect white-text" href="{{ url('enviarcuestionario') }}">Envío de Cuestionarios</a></li>
        <li><a class="waves-effect white-text" href="{{ url('reportes') }}">Reportes</a></li>
        <li><a class="waves-effect white-text" href="#">Cerrar Sesión</a></li>

    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
</nav>
<main>
    @yield('contenido')
</main>
</body>
</html>