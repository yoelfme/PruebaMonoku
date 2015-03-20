<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Monoku</title>

        <meta name="description" content="Prueba de Monoku">
        <meta name="author" content="Yoel Monzon">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/assets/css/plugins.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link rel="stylesheet" href="/assets/css/themes.css">
        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="loginBg">
        <div id="login-container">
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                Monoku
            </h1>
            <div class="block animation-fadeInQuickInv">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Algunos datos estan incorrectos.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form  role="form" method="POST" action="/admin/login" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-8">
                            <label class="csscheckbox csscheckbox-primary">
                                <input type="checkbox" name="remember">
                                <span></span>
                            </label>
                            Recuerdame ?
                        </div>
                        <div class="col-xs-4 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-2.1.1.min.js"%3E%3C/script%3E'));</script>
        <script src="js/vendor/bootstrap.min.js"></script>
    </body>
</html>