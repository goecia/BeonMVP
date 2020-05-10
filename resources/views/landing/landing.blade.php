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

        <title>Descubre {{ config('app.name', 'BeonWords') }}.com</title>

        <!-- Fonts and icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700&amp;subset=latin-ext" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bad+Script" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/material-icons.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/material-kit.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/landing.css') }}" /> <!-- custom style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/animate.css') }}" /> <!-- animations presets -->
    </head>

    <body class="landing-page">
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
                @if (Auth::user() && Auth::user()->isAdmin())
                    <div class="navbar-right">
                        <a href="/admin" class="navbar-brand">Admin</a>
                    </div>
                @elseif (Auth::user())
                    <div class="navbar-right">
                        <a href="/news" class="navbar-brand">Noticias</a>
                    </div>
                @else
                    <div class="navbar-right">
                        <a href="/register" class="navbar-brand">Registrarse</a>
                    </div>
                    <div class="navbar-right">
                        <a href="/login" class="navbar-brand">Iniciar sesion</a>
                    </div>
                @endif
            </div>
        </nav>

        <div class="header">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item bg_blue active">
                        <div class="animated fadeIn delay_05s"><div class="splat"></div></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="quote animated fadeInUp duration_2s">
                                        &quot;El rel&aacute;mpago ilumina el cielo pero el trueno es lo que estremece.&quot;
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="dialog dialog_1 animated slideInRight">
                                        <div class="dialog_box">Conectate con la lectura como nunca antes.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg_pink">
                        <div class="animated fadeIn delay_05s"><div class="splat splat_2"></div></div>
                        <div class="container">
                            <div class="row hidden-xs hidden-sm">
                                <div class="col-md-6">
                                    <div class="dialog dialog_2 animated slideInLeft">
                                        <div class="dialog_box">Toda historia tiene sonidos que necesitan ser o&iacute;dos.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quote animated fadeInUp duration_2s">
                                        &quot;Las palabras resisten, prisioneras del silencio.&quot;
                                    </div>
                                </div>
                            </div>
                            <div class="row visible-xs-block visible-sm-block">
                                <div class="col-md-6">
                                    <div class="quote animated fadeInUp duration_2s">
                                        &quot;Las palabras resisten, prisioneras del silencio.&quot;
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="dialog dialog_1 animated slideInRight">
                                        <div class="dialog_box">Toda historia tiene sonidos que necesitan ser o&iacute;dos.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg_green">
                        <div class="animated fadeIn delay_05s"><div class="splat splat_3"></div></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="quote animated fadeInUp duration_2s">
                                        &#191;Est&aacute;s dispuesto <br> a liberarlas?
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="dialog dialog_1 animated slideInRight">
                                        <div class="dialog_box">Te invitamos a una experiencia que potenciar&aacute; tus sentidos.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div> <!-- fin header -->

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 logo_timeline">
                            <img src="{{ asset('assets/landing/BeOn.jpg') }}" alt="BeonWords">
                        </div>
                    </div>

                    <div class="prueba">
                        <div class="row">
                            <h2 class="col-md-8 col-md-offset-2 text-center title slogan">Viv&iacute; la experiencia ahora</h2>
                            <div class="col-sm-6 borde">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <!-- <h4 class="info-title">Si tienes audio</h4> -->
                                    <div class="icon">
                                        <i class="material-icons">volume_up</i>
                                    </div>
                                    <a href="/bienvenido">
                                        <button class="btn btn-primary btn-raised">
                                            <h3 class="info-title">Probar {{ config('app.name', 'BeonWords') }}</h3>
                                        </button>
                                    </a>
                                    <p>Te recomendamos usar auriculares para hacer tu experiencia a&uacute;n m&aacute;s inmersiva.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="icon">
                                        <i class="material-icons">volume_off</i>
                                    </div>
                                    <a href="/saberMas">
                                        <button class="btn btn-primary btn-raised">
                                            <h3 class="info-title">Quiero saber m&aacute;s</h3>
                                        </button>
                                    </a>
                                    <p>No ten&eacute;s audio? ac&aacute; te contamos qu&eacute; es {{ config('app.name', 'BeonWords') }}. Pod&eacute;s probarlo m&aacute;s tarde.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cont_formulario" class="container">

            <div class="section landing-section">
                <div id="formulario" class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Te gusta {{ config('app.name', 'BeonWords') }} ?</h2>
                        <h4 class="text-center description">Dejanos tu email. Recib&iacute; promociones exclusivas y novedades.</h4>

                        <form id="contacto" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tu Nombre</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tu Email</label>
                                        <input id="mail" name="mail" type="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label">Lo que quieras decirnos</label>
                                <textarea id="texto" name="texto" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button type="submit" class="btn btn-primary btn-raised">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div id="formulario_gracias" class="row hidden">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Muchas gracias!</h2>
                        <h4 class="text-center description">Valoramos mucho tu opini&oacute;n. <br>
                        Pronto te sorprenderemos con novedades exclusivas!</h4>
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
