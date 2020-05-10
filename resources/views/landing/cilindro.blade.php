<!doctype html>
<html lang="es">
<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WMCW5GB');
    </script>

    <!-- Behavioral Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="An audio trigger webpage">
    <meta name="author" content="Alexis Casasola (goecia@gmail.com), Agustin Guruciaga (agustinmuydesign@gmail.com)">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Title -->
    <title>{{ config('app.name', 'BeonWords') }} - El Cilindro</title>

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
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WMCW5GB" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header id="header">
        <!-- Refresh -->
        <div class="icono_header_left" onclick="refresh();" title="Refresh">
            <i class="material-icons md-dark md-36">refresh</i>
        </div>
        
        <!-- Title -->
        <div class="titulo">El Cilindro</div>

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
            <h1>El Cilindro</h1>
                <span id="1512592448657">El cilindro</span> resbaló de mi mano sudada y logré alcanzarlo antes de que golpee el suelo de roca. Los nervios se adueñaban de los presentes, incluyéndome. Hacía dos meses ya que la especie humana luchaba por sobrevivir. Dos meses trágicos. Por un instante creímos que todo estaba perdido, que era el fin. Sin embargo, en las últimas horas renació la esperanza. Un grupo de investigadores encontró la <span id="1512592651927">respuesta</span> en un laboratorio de Buenos Aires. La explicación fue abrumadoramente confusa. Debo confesar que asentí al escucharla pero no entendí una sola palabra. No hacía falta. Lo único que necesitaba saber era que debía llevar ese cilindro hasta el continente asiático y que un dispositivo en mi cerebro era la garantía de que llegue en condiciones de ser utilizado.<br><br>No existía forma de llegar a destino utilizando un medio de transporte. Los vuelos y viajes en barco eran cosa del pasado. El optimismo estuvo a punto de desvanecerse cuando agentes gubernamentales nos comunicaron de su existencia. Había sido descubierto décadas atrás durante las excavaciones que ampliaban la red de subterráneos y mantenido en secreto desde entonces. Se trataba de una anomalía. Una realidad imposible para la física. Y, no obstante, allí estaba, frente a nosotros. <span id="1512592714349">Una caverna</span> bajo la ciudad formada por rocas basálticas de un volcán inexistente. En el centro, atravesándola de lado a lado, un río separaba las dos orillas. De un lado Buenos Aires, del otro Ho Chi Minh.<br><br>
El curso de agua se perdía a la derecha por debajo de las rocas. Era inviable cruzar por allí. Las opciones de hacerlo a nado o en alguna embarcación caducaron cuando descubrieron que el componente ácido que cargaba el agua desintegraba todo lo que intentara atravesarlo. <span id="1512593041505">Sólo existía</span> una opción viable. Sobre el extremo izquierdo de la caverna, una angosta cornisa recorría la roca hasta llegar a la otra orilla. Su superficie resbalosa volvía prácticamente imposible transitarla. Al menos seis personas habían muerto intentándolo en las épocas de experimentación. Y hoy era la única posibilidad.<br><br>Éramos tres los voluntarios y de nuestro éxito dependía el futuro de la humanidad. Al menos uno de nosotros debía llegar al otro lado y entregar el cilindro al representante asiático. Jorge, el primer voluntario, inició el trayecto. Mientras luchaba por afirmarse sabíamos que, aunque lograra llegar, debería todavía enfrentar uno de los peores obstáculos. <span id="1512593310710">Cruzar</span> en doscientos metros de un extremo al otro del planeta acarreaba consecuencias nefastas. La fuerza de la rotación de la Tierra descargaba su furia sobre quien completara el trayecto. Algunos habían muerto en el intento mientras que otros, que lograron mantener la integridad física, perdieron la razón. David y yo lo mirábamos con atención. Otros, con los ojos cerrados, sólo escucharon <span id="1512593350973">el ruido del agua</span> cuando el cuerpo de Jorge la encontró.<br><br>El silencio era quebrado por <span id="1512593369597">sollozos ahogados</span> cuando David se aprestó para partir. Avanzó con seguridad hasta mitad de camino y a partir de allí no pude mirar. Escondí los ojos tras mi brazo mientras me aferraba al cilindro como a un amuleto. Los segundos pasaron y el silencio se hizo profundo. Alcé la vista justo a tiempo para verlo llegar a la orilla. Las sonrisas se dibujaron en muchos de los presentes pero sólo duraron un suspiro. Apenas arribado a tierra firme y antes de que el representante de Vietnam llegara a recibirlo, David se contorsionó en espasmos de dolor y <span id="1512593386588">sus gritos retumbaron en la caverna</span> haciéndonos temblar. Cuando se incorporó, su mente se había desconectado de su cuerpo desintegrando el dispositivo de seguridad y volviendo inservible el cilindro.<br><br>Mi turno había llegado. Sentía todas las miradas clavadas en mi espalda mientras me acercaba a la cornisa. El último cilindro parecía quemarme las manos. Era la última oportunidad, la última esperanza. El destino del mundo descansaba sobre mí y en mi <span id="1512593408580">primer paso resbalé</span>. Estuve a punto de caer. Una saliente en la roca me permitió aferrarme y logré estabilizarme de nuevo. Avancé con cuidado, tratando de afirmar cada paso. Por tramos la cornisa se reducía a una ínfima expresión y me vi obligado a proseguir sostenido únicamente por las puntas de mis pies. El agua, amenazante, salpicaba mis talones en su torrente continuo. Apreté los dientes y continué. La orilla asiática ya estaba cerca. Hasta parecía posible alcanzarla. Al último tramo lo cubría un musgo que lo hacía especialmente resbaloso. El pánico me invadió. No creía posible atravesarlo, pero no tenía opción. Ya no quedaban más intentos. Reanudé la marcha concentrándome en cada paso y casi sin darme cuenta llegué.<br><br><span id="1512593441123">La violencia</span> de la rotación concentrada me sacudió propiciándome un dolor que no creí posible. <span id="1512593470547">Caí al suelo</span> intentando resistir. Busqué por todos los medios concentrarme en la misión, en el futuro. <span id="1512593534251">No podía rendirme.</span> Cerré los ojos mientras un tornado de punzadas insoportables recorría mi cuerpo como un ejército de agujas clavándose al mismo tiempo. Luego, tan repentinamente como comenzó, el dolor cesó. Me incorporé para encontrar al representante vietnamita y le entregué el cilindro con una sonrisa y un conjunto incontenible de lágrimas que brotaban desde mis ojos. <span id="1512593570947">Era feliz.</span><br><br> En el momento en que ambos sostuvimos el cilindro, el dispositivo se materializó en el cerebro del receptor, liberándome. Lleno de júbilo me acerqué a la orilla y lancé un grito para festejar junto con mis compañeros. <span id="1512593587770">Ellos</span> respondieron con vítores y aplausos. Di media vuelta y cuando les daba la espalda <span id="silence14">tropecé</span> con una roca y <span id="1512593625970">resbalé</span> con los restos de musgo que poblaban la orilla. Apenas atiné a estabilizarme pero ya era tarde. El agua me envolvió suavemente hasta devorarme. Me sumergí, indefenso, consciente de mi destino pero no me importó. Lo había conseguido.
        </div>
        <div class="poll">
            <a href="/news"><div class="poll_btn">Ir a Noticias</div></a>
        </div>
    </div>

    <script type="text/javascript">
        eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('4 e=[];2.3("9").K.Y="1z";2.X.K.W="Z";4 E=5 l({n:1,o:["/k/Q/1w.m"],j:8,i:s});e.p(E);4 y=5 l({n:1,o:["/k/G/1v.m"],j:8,i:8});e.p(y);4 C=5 l({n:0.1u,o:["/k/Q/1t.m"],j:8,i:8});e.p(C);4 B=5 l({n:1,o:["/k/G/1s.m"],j:8,i:s});e.p(B);4 x=5 l({n:0.7,o:["/k/G/11.m"],j:8,i:8});e.p(x);4 F=5 l({n:1,o:["/k/z/1r.m"],j:8,i:s});e.p(F);4 D=5 l({n:1,o:["/k/z/1q.m"],j:8,i:s});e.p(D);4 J=5 l({n:1,o:["/k/z/1p.m"],j:8,i:s});e.p(J);4 I=5 l({n:1,o:["/k/z/1o.m"],j:8,i:s});e.p(I);4 L=5 l({n:1,o:["/k/Q/1x.m"],j:8,i:s});e.p(L);4 M=5 l({n:1,o:["/k/z/1m.m"],j:8,i:s});e.p(M);4 w=5 l({n:1,o:["/k/G/1k.m"],j:8,i:8});e.p(w);4 H=5 l({n:1,o:["/k/G/11.m"],j:8,i:s});e.p(H);4 N=5 l({n:1,o:["/k/z/1h.m"],j:8,i:s});e.p(N);4 P=5 l({n:1,o:["/k/z/1n.m"],j:8,i:s});e.p(P);(6 U(){1Q(E.u()=="v"&&y.u()=="v"&&C.u()=="v"&&B.u()=="v"&&x.u()=="v"&&F.u()=="v"&&D.u()=="v"&&J.u()=="v"&&I.u()=="v"){2.3("1O").K.1N="Z";2.3("9").K.Y="1L";2.X.K.W="1A";}1I{R.T(6(){U();},V);}})();R.1G=6(){R.T(6(){4 S=5 b({c:2.3(\'1E\'),d:6(){E.q();S.f();},g:2.3(\'9\'),h:\'1C%\'});4 12=5 b({c:2.3(\'1B\'),d:6(){y.q();12.f();},g:2.3(\'9\'),h:\'r%\'});4 10=5 b({c:2.3(\'1S\'),d:6(){C.q();10.f();},g:2.3(\'9\'),h:\'r%\'});4 1f=5 b({c:2.3(\'1l\'),d:6(){y.t(1,0,A);y.O(\'t\',6(){y.a();});B.q();B.t(0,1,A);1f.f();},g:2.3(\'9\'),h:\'r%\'});4 13=5 b({c:2.3(\'1D\'),d:6(){x.q();13.f();},g:2.3(\'9\'),h:\'r%\'});4 1a=5 b({c:2.3(\'1F\'),d:6(){F.q();1a.f();},g:2.3(\'9\'),h:\'1H%\'});4 16=5 b({c:2.3(\'1J\'),d:6(){D.q();16.f();},g:2.3(\'9\'),h:\'r%\'});4 15=5 b({c:2.3(\'1K\'),d:6(){J.q();15.f();},g:2.3(\'9\'),h:\'r%\'});4 19=5 b({c:2.3(\'1M\'),d:6(){I.q();19.f();},g:2.3(\'9\'),h:\'r%\'});4 1b=5 b({c:2.3(\'1P\'),d:6(){L.q();1b.f();},g:2.3(\'9\'),h:\'r%\'});4 1d=5 b({c:2.3(\'1R\'),d:6(){M.q();1d.f();},g:2.3(\'9\'),h:\'r%\'});4 1e=5 b({c:2.3(\'1y\'),d:6(){x.t(1,0,A);x.O(\'t\',6(){x.a();});w.q();w.t(0,1,A);1e.f();},g:2.3(\'9\'),h:\'r%\'});4 14=5 b({c:2.3(\'1T\'),d:6(){w.t(1,0,A);w.O(\'t\',6(){w.a();});H.q();H.t(0,1,A);14.f();},g:2.3(\'9\'),h:\'r%\'});4 1c=5 b({c:2.3(\'1i\'),d:6(){N.q();1c.f();},g:2.3(\'9\'),h:\'r%\'});4 18=5 b({c:2.3(\'1g\'),d:6(){E.a();y.a();C.a();B.a();x.a();F.a();D.a();J.a();I.a();L.a();M.a();w.a();H.a();N.a();18.f();},g:2.3(\'9\'),h:\'r%\'});4 17=5 b({c:2.3(\'1j\'),d:6(){P.q();17.f();},g:2.3(\'9\'),h:\'r%\'});},V);}',62,118,'||document|getElementById|var|new|function||true|book|stop|Waypoint|element|handler|tracks|destroy|context|offset|loop|preload|audio|Howl|mp4|volume|src|push|play|50|false|fade|state|loaded|audio1512593534251|audio1512593310710|audio1512592651927|fx|4000|audio1512593041505|audio1512592714349|audio1512593369597|audio1512592448657|audio1512593350973|music|audio1512593570947|audio1512593408580|audio1512593386588|style|audio1512593441123|audio1512593470547|audio1512593587770|once|audio1512593625970|ambient|window|waypoint1512592448657|setTimeout|modalCheck|1000|pointerEvents|documentElement|overflowY|none|waypoint1512592714349|Music_Tension_02|waypoint1512592651927|waypoint1512593310710|waypoint1512593570947|waypoint1512593386588|waypoint1512593369597|waypoint1512593625970|waypointsilence14|waypoint1512593408580|waypoint1512593350973|waypoint1512593441123|waypoint1512593587770|waypoint1512593470547|waypoint1512593534251|waypoint1512593041505|silence14|Aplausos_01|1512593587770|1512593625970|Music_Epica_01|1512593041505|Falling2ground_01|FinalFall_01|AlmostDown_01|DavidScreams_01|DavidCrying_01|1stFall_01|Music_Tension_01|AmbienteCaverna_01|65|Music_01|AmbienteIntro_01|AmbienteRotacion_01|1512593534251|hidden|auto|1512592651927|45|1512593310710|1512592448657|1512593350973|onload|49|else|1512593369597|1512593386588|scroll|1512593408580|display|modal|1512593441123|if|1512593470547|1512592714349|1512593570947'.split('|')))

    </script>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89067003-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());
        gtag('config', 'UA-89067003-3');
    </script>
</body>
</html>