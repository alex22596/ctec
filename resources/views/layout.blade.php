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
        <li><a class="waves-effect white-text" href="instalaciones.php">Gestión de Instalaciones</a></li>
        <li><a class="waves-effect white-text" href="preguntas.php">Gestión de Preguntas</a></li>

        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header white-text">Cuestionarios<i class="material-icons white-text">arrow_drop_down</i></a>
                    <div class="collapsible-body indigo darken">
                        <ul>
                            <li><a class=" waves-effect white-text" href="cuestionarios.php">Gestión de Cuestionarios</a></li>
                            <li><a class="waves-effect white-text" href="enviarCuestionario.php">Envío de Cuestionarios</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li><a class="waves-effect white-text" href="reportes.php">Reportes</a></li>

    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
</nav>
<main>
    @yield('contenido')
</main>
</body>
</html>