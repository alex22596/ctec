<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <title>Document</title>
    </head>
    <body>
    <header>
        <a href="#"><img src="img/CTECCompleto.png" alt="CTEC logo."></a>
    </header>
    <main>
        <div class="valign-wrapper row login-box center-align">
            <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
                <form name="formValidate" id="formValidate" action="{{route('login.post')}}" method="post" enctype="multipart/form-data">
                    <div class="card-content">
                        <span class="card-title">CTEC Evaluation System | Inicio de Sesión</span>
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="nombreUsuario">Nombre de Usuario*</label>
                                <input id="nombreUsuario" name="nombreUsuario" type="text" data-error=".errorTxt1">
                                <div class="errorTxt1 left-align"></div>
                            </div>
                            <div class="input-field col s12">
                                <label for="password">Contraseña*</label>
                                <input id="password" type="password" name="password" data-error=".errorTxt2">
                                <div class="errorTxt2 left-align"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action center-align">
                        <input type="submit" class="btn blue waves-effect waves-light" value="Iniciar Sesión">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/alert.js"></script>
    </body>
</html>