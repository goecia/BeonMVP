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

        <!-- Core JS Files -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/landing/landing.js') }}"></script>
    </head>

    <body class="landing-page more-info">
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
                                En un mundo en constante evoluci&oacute;n...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="container timeline">
                <div class="section text-center">
                    <div class="prueba">
                        <div class="row">
                            <div class="col-xs-6 borde">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-left-1" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/rupestre.png') }}" alt="Glifos"></div>
                                    <div class="invisible" id="text-left-1"><h4 class="title slogan">Cuando el tiempo recién era tiempo se dibujaba en las rocas.</h4></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-right-1" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/percusion.png') }}" alt="Percusi&oacute;n"></div>
                                    <div class="invisible" id="text-right-1"><h4 class="title slogan">La percusión marcó el ritmo que luego fue música.</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="row flechita_top">
                            <div class="col-xs-6 borde">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-left-2" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/papiro.png') }}" alt="Papiro"></div>
                                    <div class="invisible" id="text-left-2"><h4 class="title slogan">Luego el papiro le arrebató el protagonismo literario.</h4></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-right-2" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/fonografo.png') }}" alt="Fon&oacute;grafo"></div>
                                    <div class="invisible" id="text-right-2"><h4 class="title slogan">La vanguardia artística alcanzó los medios para grabarla y conservarla.</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="row flechita_top">
                            <div class="col-xs-6 borde">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-left-3" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/libro.png') }}" alt="Libro"></div>
                                    <div class="invisible" id="text-left-3"><h4 class="title slogan">Hasta que los papiros se acumularon, se compilaron en orden y nacieron los libros.</h4></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-right-3" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/vinilo.png') }}" alt="Vinilo"></div>
                                    <div class="invisible" id="text-right-3"><h4 class="title slogan">Llegaron formatos nuevos y el acceso de dejó de ser para unos pocos privilegiados. La música llegó a todos los rincones.</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="row flechita_top">
                            <div class="col-xs-6 borde">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-left-4" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/libro.png') }}" alt="Libro"></div>
                                    <div class="invisible" id="text-left-4"><h4 class="title slogan">A partir de entonces la memoria y las historias tomaron la forma de miles de libros.</h4></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-right-4" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/casette.png') }}" alt="Casette"></div>
                                    <div class="invisible" id="text-right-4"><h4 class="title slogan">Y un día se hizo portátil. Desde los ritmos ancestrales hasta las últimas melodías se pudieron trasladar en un bolsillo.</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="row flechita_top">
                            <div class="col-xs-6 borde">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-left-5" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/libro.png') }}" alt="Libro"></div>
                                    <div class="invisible" id="text-left-5"><h4 class="title slogan">La imprenta trajo la masividad y esos miles se transformaron en millones de ejemplares.</h4></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-right-5" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/cd.png') }}" alt="CD"></div>
                                    <div class="invisible" id="text-right-5"><h4 class="title slogan">Los sonidos se volvieron más nítidos para reflejar las emociones y volverlas audibles.</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="row flechita_top">
                            <div class="col-xs-6 borde">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-left-6" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/ereader.png') }}" alt="E-reader"></div>
                                    <div class="invisible" id="text-left-6"><h4 class="title slogan">Hoy la tecnología permite que todos ellos entren en una simple tablet o e-reader.</h4></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <div class="iconos_sabermas" id="icon-right-6" onmouseover="showText(this)" onmouseout="hideText(this)"><img src="{{ asset('assets/landing/streaming.png') }}" alt="Streaming"></div>
                                    <div class="invisible" id="text-right-6"><h4 class="title slogan">Hoy, más que nunca, la música está en el aire.</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flechita_top">
                        <div class="col-md-8 col-md-offset-2 logo_timeline">
                            <img src="assets/landing/BeOn.jpg" alt="BeonWords">
                        </div>
                    </div>
                    <div class="prueba">
                        <div class="row">
                            <h2 class="col-md-8 col-md-offset-2 text-center title slogan">Bienvenido a la revoluci&oacute;n de la lectura <br> <b>con banda de sonido original</b>.</h2>
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
        </div>

        <div class="container">
            <div class="section">
                <div class="prueba margen-superior text-center">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="info-title">Ya ten&eacute;s audio?</h2>
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
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="copyright pull-right">
                    &copy; {{ date('Y') }} {{ config('app.name', 'BeonWords') }}.com
                </div>
            </div>
        </footer>
    </body>

    <!-- Non-Core JS Files -->
    <script type="text/javascript" src="{{ asset('js/landing/material.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/landing/jquery.validate.min.js') }}"></script>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89067003-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());
        gtag('config', 'UA-89067003-3');
    </script>

</html>
