<!doctype html>
<html lang="es">
<head>
    <!-- Behavioral Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="An audio trigger webpage">
    <meta name="author" content="Alexis Casasola (goecia@gmail.com), Agustin Guruciaga (agustinmuydesign@gmail.com)">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Title -->
    <title>BeonWords - {{ $beon['name'] }}</title>

    <!-- CSRF Token -->
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i&amp;subset=latin-ext" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/testbeon.css"/>
    <link rel="stylesheet" type="text/css" href="/css/material-icons.css"/>

    <!-- Scripts -->
    <script type="text/javascript" src="/js/hyphenator.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/actions.js"></script>
    <script type="text/javascript" src="/js/waypoints.min.js"></script>
    <script type="text/javascript" src="/js/howler.min.js"></script>
    <script type="text/javascript">Hyphenator.run();</script>

</head>

<body class="noselectable">
    <header id="header">
        <!-- Refresh -->
        <div class="icono_header_left" onclick="refresh();" title="Refresh">
            <i class="material-icons md-dark md-36">refresh</i>
        </div>
        
        <!-- Title -->
        <div class="titulo">{{ $beon['name'] }}</div>

        <!-- Scroll Control -->
        <div id="switch-scroll" class="icono_header">
            <div id="play" title="Autoscroll"><i class="material-icons md-dark md-36">play_arrow</i></div>
            <div id="pause" title="Reanudar Scroll" class="nodisplay"><i class="material-icons md-dark md-36">pause</i></div>
        </div>

        <!-- Mute Control -->
        <div id="switch-volume" class="icono_header" onclick="mute();">
            <div id="on-volume" title="Silenciar"><i class="material-icons md-dark md-36">volume_up</i></div>
            <div id="off-volume" title="Reanudar Sonido" class="nodisplay"><i class="material-icons  md-36">volume_off</i></div>
        </div>

        <!-- Settings -->
        <div id="switch-settings" class="icono_header" title="Configuracion">
            <i class="material-icons md-dark md-36">settings</i>
        </div>
    </header>

    <div class="modal" id="modal"></div>

    <div class="settings nodisplay">
        <div class="scroll_speed">
            <div id="velplus" class="icon_plus">
                <i class="material-icons md-dark md-36">add</i>
            </div>
            <i class="material-icons md-light md-36">fast_forward</i>
            <div id="velminus" class="icon_minus">
                <i class="material-icons md-dark md-36">remove</i>
            </div>
        </div>

        <div class="font_size">
            <div id="fontplus" class="icon_plus">
                <i class="material-icons md-dark md-36">add</i>
            </div>
            <i class="material-icons md-light md-36">text_fields</i>
            <div id="fontminus" class="icon_minus">
                <i class="material-icons md-dark md-36">remove</i>
            </div>
        </div>
    </div>

    <div class="follower" id="follower"></div>
    <div class="book" id="book">
        <div class="text hyphenate" id="text" lang="es">
            <h1>{{ $beon['name'] }}</h1>
                {!! $beon['text'] !!}
        </div>
    </div>

    <script type="text/javascript">
        {!! $beon['script'] !!}
    </script>
</body>
</html>