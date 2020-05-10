<!doctype html>
<html lang="en">
    <head>
        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WMCW5GB');
        </script>
        <!-- End Google Tag Manager -->

        <!-- Behavioral Meta Data -->
        <meta charset="utf-8">
        <meta name="description" content="An audio trigger webpage">
        <meta name="author" content="Alexis Casasola (goecia@gmail.com), Agustin Guruciaga (agustinmuydesign@gmail.com)">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!-- Favico -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <!-- CSRF Token -->
        <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">

        <title>Descubre {{ config('app.name', 'BeonWords') }}</title>

        <!-- Fonts and icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i&amp;subset=latin-ext" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bad+Script" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/material-icons.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/material-kit.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/landing.css') }}" /> <!-- custom style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/animate.css') }}" /> <!-- animations presets -->
    </head>

    <body class="landing-page post-tuto">
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WMCW5GB" height="0" width="0" style="display:none;visibility:hidden">
            </iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">{{ config('app.name', 'BeonWords') }}</a>
                </div>
            </div>
        </nav>

        <div class="header">
            <div class="item bg_green">
                <div class="animated fadeIn delay_05s"><div class="splat"></div></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="quote animated fadeInUp duration_2s">
                                No seas egoista...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cont_formulario" class="main main-raised">
            <div class="container">
                
                <div class="section landing-section">
                    <div id="formulario" class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="text-center title">Invit&aacute; a un amigo <br> y segu&iacute; disfrutando!</h1>
                            <h4 class="text-center description">Ingres&aacute; el mail de un amigo y deleit&aacute; tus sentidos con un nuevo <i>beon</i></h4>
                            <form id="registro" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre de tu amigo</label>
                                            <input name="nombre" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email de tu amigo</label>
                                            <input id="mail" name="mail" type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 text-center">
                                        <button type="submit" class="btn btn-primary btn-raised" onclick="Invitar()">
                                            Invitar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container">
                
                <div class="section text-center">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 logo_timeline">
                            <img src="{{ asset('assets/landing/logo.png') }}" alt="BeonWords">
                        </div>
                    </div>

                    <div class="prueba">
                        <div class="row">
                            <h2 class="col-md-8 col-md-offset-2 text-center title slogan">Bienvenido a la revoluci&oacute;n de la lectura <br> <b>con banda de sonido original</b>.</h2>
                        </div>
                    </div>

                </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="copyright pull-right">
                    &copy; {{ date('Y')}} {{ config('app.name', 'BeonWords') }}.com
                </div>
            </div>
        </footer>

    </body>

    <!-- Core JS Files -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/landing/material.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/landing/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/landing/landing.js') }}"></script>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89067003-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());
        gtag('config', 'UA-89067003-3');
    </script>

</html>
