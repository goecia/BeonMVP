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
    <title>{{ config('app.name', 'BeonWords') }} - 2013 Lucas</title>

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
        <div class="titulo">2013 lucas</div>

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
            <h1>2013 lucas</h1>
                <span id="1513014689177">La señal</span> del <span id="1513014734410">cambio</span> <span id="1513014777233">de turno</span> liberó a Lucas de su jornada laboral en la fábrica. Se sentía exhausto. Al cansancio del arduo día de trabajo se le sumaba el hecho de que, <span id="1513014825848">la noche anterior</span>, el perro del vecino decidió ladrar durante largas horas de la madrugada privandolo del sueño. No lo irritaba tanto el animal en sí sino la actitud <span id="1513014877543">pasiva</span> de sus dueños, que se comportaban como si nada pasara. Llegó el colectivo, como cada día, y lo tomó por inercia. Le llamó la atención que nadie más subiera junto a él en la parada habitual, raramente ocurría. El sol de media tarde ingresaba a través de las ventanillas <span id="1513014912759">laterales,</span> encandilando a los pasajeros. Lucas encontró lugar disponible a mitad del vehículo y se sentó contra la ventanilla, agradecido de que contara con cortinas. Agotado como estaba, no le costó caer rápidamente en un sueño profundo.<br><br>El descanso duró lo que le pareció una fracción de segundo hasta que su cabeza golpeó levemente contra el vidrio por el <span id="silence6">mal</span> <span id="1513014974566">estado</span> <span id="1513015013149">del camino.</span> Abrió los ojos, sintiendo que no había sido suficiente tiempo de siesta, pero extrañado comprobó que el sol ya se había escondido por completo. La oscuridad reinaba en el exterior y no lograba reconocer la zona. <span id="1513015046229">Casas sencillas</span> y calles de pocas luces se extendían a ambos lados del asfalto. ¿Sería posible que se hubiera equivocado de colectivo? No recordaba con exactitud el momento en que reconoció el vehículo y se subió. ¿Se habría pasado de su parada? Le costaba creerlo, llevaba años con la costumbre de dormir en el viaje y ya antes había estado tan cansado como entonces. Instintivamente, su primera reacción, fue ponerse de pie y tocar el timbre de la puerta trasera. Donde fuera que <span id="1513015078038">estuviera,</span> debía regresar.<br><br>Presionó el botón dos, tres, cuatro veces pero el coche no se detuvo. Impaciente, recorrió el <span id="1513015548079">pasillo</span> central hasta la altura del chofer. Por el camino, notó que viajaban exactamente los mismos pasajeros que cuando subió. Llegó hasta el conductor y le dijo, con toda la calma que pudo, que por favor lo deje bajar. El hombre al volante, de cabello cano y ojos celestes, no le prestó atención y siguió con su tarea. Lucas, irritado, lo increpó y le reclamó en voz cada vez más fuerte que detuviera el colectivo, que había tocado el timbre en repetidas ocasiones.<br><br>De pronto observó que el panorama externo iba cambiando. Las casas, cada vez más dispersas y la calle, una ruta con campos a cada lado. Ya no podía esperar más, debía bajarse antes de que se encontraran en medio de la nada y no tuviese medios para regresar. Volvió la cabeza hacia el conductor y lo increpó de nuevo, esta vez tomándolo del hombro para sacudirlo. El chofer giró con un movimiento brusco la cabeza y clavó sus ojos celestes en los de <span id="1513015843867">Lucas</span> quien, sorprendido por la reacción, volvió a solicitarle que lo dejara bajar. El conductor no respondió. Sus labios parecían sellados, sus manos en el volante y su mirada fija en el pasajero. Lucas se sintió desconcertado, incómodo y luego intimidado. La mirada del chofer era intensa, perturbadora, y no se la quitaba de encima. Hacía ya casi un minuto que no observaba el camino. La urgencia invadió al trabajador fabril que, a los gritos, le reclamó que pusiera atención en la ruta. El hombre al volante lo <span id="1513015990145">ignoró</span> por completo y siguió mirándolo sin parpadear. De pronto Lucas divisó una vaca, iluminada por los faros delanteros, de pie en medio del asfalto. El animal se acercaba peligrosamente a ellos y el chofer no la había visto. Le señaló hacia adelante mostrándole el peligro, pero no hubo reacción. Le gritó que tuviera cuidado, que estaba a punto de chocar, el impacto era inminente. Atinó a lanzarse sobre el volante para torcer el curso del colectivo y evitar la colisión, pero su ropa se atascó en un gancho que salía de un caño detrás de él y no pudo avanzar. Ya era demasiado tarde.<br><br>Se quedó inmóvil, aferrado al caño y esperando lo inevitable, pero apenas un instante <span id="1513016482002">antes del impacto</span>, el chofer maniobró bruscamente el volante sin quitarle los ojos de encima y todavía sin parpadear. El vehículo dio un giro hacia la izquierda y luego a la derecha que por poco termina en vuelco. La maniobra logró evitar al animal y proseguir el camino, pero le ocasionó varios golpes al hombre atascado contra el caño. El rostro del chofer sólo varió su expresión para dedicarle una siniestra sonrisa.<br><br>La <span id="1513016597186">oscuridad</span> del exterior sólo era quebrada por las luces delanteras sobre la ruta. A los lados, un manto negro cubría lo que la vista alcanzaba a distinguir. Lucas retrocedió con cautela, desenganchando su ropa y alejándose de la penetrante mirada del conductor hacia la parte trasera del colectivo. Un tropiezo lo hizo retomar consciencia de la situación. Sacudió la cabeza y se frotó los ojos, tratando de ordenar sus pensamientos. Esto no podía estar pasándole. Alzó la vista hacia los otros pasajeros. Todos se mantenían en la misma posición que al principio del viaje y mostraban total indiferencia respecto a lo ocurrido. Se paró en medio del pasillo, como lo haría un vendedor ambulante y se dirigió a ellos para denunciar la conducta del chofer y solicitarles ayuda para detener la marcha del coche. Los pasajeros se acurrucaron en sus asientos y se concentraron en mirar por la ventana sin responder a los reclamos. Volvió a repetir su solicitud, esta vez a los gritos. Su paciencia ya había desaparecido por completo. Los pasajeros lo ignoraron, inmutables, como si no estuviera allí. Fuera de sí, se acercó a cada uno de ellos y los zamarreó, gritandoles en el oído, completamente desquiciado. La gente se giró y le dio la espalda, soportando el ataque en completa negación y pasividad. Lucas se tiró del cabello y golpeó los asientos, invadido por la impotencia y la ira. Se clavó las uñas en la frente, completamente desbordado mientras que seguía gritando hasta <span id="silence16">que uno</span> <span id="1513016723855">de los pasajeros</span> reaccionó y lo <span id="1513016767022">golpeó en el</span> <span id="1513016800446">rostro.</span><br><br>Un hilo de sangre le brotó de la mejilla y el calor del líquido que se derramaba lentamente hacia sus labios lo hizo volver a sus cabales. La persona que lo golpeó ya estaba de regreso en su posición de <span id="1513016844182">negación</span> e indiferencia brutal. ¡Al diablo con todos!, pensó. Recorrió el colectivo, buscando la salida de emergencia, pero no la encontró. Buscó, detrás de las cortinas, el martillo para romper la ventanilla y escapar, pero no estaba por ningún lado. Debía salir de allí. Ya no podía esperar más. Desesperado, inspeccionó el piso, corriendo a la fuerza las piernas de los viajantes que se acurrucaban contra las ventanas y evitaban mirarlo por todos los medios. Nada. No aparecía ningún objeto lo suficientemente contundente como para romper el vidrio. Estaba al borde del llanto cuando de pronto lo vio.<br><br>Debajo del último asiento estaba el martillo rojo de emergencia. Se levantó, trastabillando y se lanzó sobre él como si fuera el objeto más preciado del mundo. Al fin lo alcanzó, lo tomó en la mano y se puso de pie con aire triunfal. Alzó la vista y se encontró con las miradas de todos los pasajeros, ahora volteados hacia él. Hombres y mujeres, viejos y jóvenes lo observaron fijamente, <span id="1513016950214">incluso</span> el chofer lo miró, sin pestañear, a través del espejo retrovisor. Lucas supo que eso no podía ser bueno. Se apresuró hacia la ventana trasera y la rompió de un golpe. <span id="1513016987828">La noche</span> <span id="1513017050219">devoró</span> los cristales destrozados y un <span id="1513017092570">frío</span> viento ingresó en el autobús. La ruta pasaba debajo de ellos a gran velocidad, era evidente que el colectivo se desplazaba con una rapidez excepcional. Se volteó, una vez más y vio que los pasajeros se levantaban todos al mismo tiempo y se lanzaban con determinación sobre su posición. Ya no había escapatoria, no tenía más alternativa que saltar.<br><br><span id="silence25">Se lanzó</span> <span id="1513017158537">en dirección</span> a la banquina y cayó con un duro golpe, rodando sobre el pasto durante varios segundos. Al detenerse, se tomó la cabeza y quiso incorporarse. Una mano lo sujetó por el hombro y lo hizo permanecer acostado. <span id="1513017193857">Levantó la vista,</span> sobresaltado, y vio el rostro de una anciana iluminado por los primeros rayos del amanecer. La tenue luz marcaba las arrugas de su rostro mientras le ofrecía un vaso de agua. «Lo estábamos esperando», le dijo y lo ayudó a levantarse.<br><br>Ya de pie, se encontró frente a un pequeño grupo de personas de diferentes edades a las puertas de un precario poblado. Una mujer le preguntó el nombre y luego los presentó. Los presentes lo saludaron con cordialidad mientras que la anciana se retiró hacia una pared cercana, donde figuraban anotados una consecución de años con intervalos de siete en siete. A un lado de cada año se leía un nombre. La última entrada databa del 2006. La señora tomó un rudimentario pincel, lo ungió en un líquido oscuro y escribió a continuación: 2013 – Lucas.<br><br><br>

        </div>
        <div class="poll">
            <a href="/registrar"><div class="poll_btn">Continuar</div></a>
        </div>
    </div>

    <script type="text/javascript">
        eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('b n=[];3.a("g").V.1p="2u";3.1o.V.1m="1q";b H=c w({t:0.6,p:["/u/z/1N.v"],q:f,x:y});n.r(H);b I=c w({t:0.1O,p:["/u/Q/1Q.v"],q:f,x:y});n.r(I);b J=c w({t:0.1R,p:["/u/C/1T.v"],q:f,x:f});n.r(J);b K=c w({t:0.7,p:["/u/z/1U.v"],q:f,x:y});n.r(K);b G=c w({t:0.8,p:["/u/z/2b.v"],q:f,x:y});n.r(G);b L=c w({t:0.6,p:["/u/Q/1Z.v"],q:f,x:y});n.r(L);b N=c w({t:0.4,p:["/u/z/23.v"],q:f,x:y});n.r(N);b O=c w({t:0.5,p:["/u/Q/1k.v"],q:f,x:f});n.r(O);b R=c w({t:0.6,p:["/u/C/25.v"],q:f,x:f});n.r(R);b S=c w({t:0.2,p:["/u/z/26.v"],q:f,x:y});n.r(S);b F=c w({t:0.6,p:["/u/C/1X.v"],q:f,x:f});n.r(F);b B=c w({t:0.8,p:["/u/C/1Y.v"],q:f,x:f});n.r(B);b P=c w({t:0.9,p:["/u/C/2a.v"],q:f,x:y});n.r(P);b T=c w({t:1,p:["/u/z/29.v"],q:f,x:y});n.r(T);b U=c w({t:0.8,p:["/u/C/1n.v"],q:f,x:f});n.r(U);b 10=c w({t:0.8,p:["/u/z/28.v"],q:f,x:y});n.r(10);b 13=c w({t:0.8,p:["/u/z/27.v"],q:f,x:y});n.r(13);b M=c w({t:0.6,p:["/u/Q/1k.v"],q:f,x:f});n.r(M);b 11=c w({t:0.8,p:["/u/C/1n.v"],q:f,x:f});n.r(11);b 12=c w({t:0.8,p:["/u/z/22.v"],q:f,x:y});n.r(12);b X=c w({t:1,p:["/u/z/21.v"],q:f,x:y});n.r(X);b W=c w({t:0.19,p:["/u/Q/20.v"],q:f,x:y});n.r(W);b Y=c w({t:0.5,p:["/u/Q/1L.v"],q:f,x:f});n.r(Y);b 18=c w({t:0.7,p:["/u/z/1V.v"],q:f,x:y});n.r(18);b 16=c w({t:0.9,p:["/u/C/1M.v"],q:f,x:y});n.r(16);(e 1r(){2D(H.D()=="E"&&I.D()=="E"&&J.D()=="E"&&K.D()=="E"&&G.D()=="E"&&L.D()=="E"&&N.D()=="E"&&O.D()=="E"){3.a("2H").V.2w="1q";3.a("g").V.1p="2G";3.1o.V.1m="2B";}2A{15.1l(e(){1r();},Z);}})();15.2F=e(){15.1l(e(){b 1i=c h({i:3.a(\'2m\'),j:e(){H.s();1i.l();},k:3.a(\'g\'),m:\'o%\'});b 1j=c h({i:3.a(\'2t\'),j:e(){I.s();1j.l();},k:3.a(\'g\'),m:\'o%\'});b 1a=c h({i:3.a(\'2g\'),j:e(){J.s();1a.l();},k:3.a(\'g\'),m:\'17%\'});b 1h=c h({i:3.a(\'2h\'),j:e(){K.s();1h.l();},k:3.a(\'g\'),m:\'17%\'});b 1g=c h({i:3.a(\'2j\'),j:e(){G.s();1g.l();},k:3.a(\'g\'),m:\'o%\'});b 1f=c h({i:3.a(\'2k\'),j:e(){L.s();1f.l();},k:3.a(\'g\'),m:\'o%\'});b 1e=c h({i:3.a(\'2e\'),j:e(){H.d();I.d();J.d();K.d();G.d();L.d();1e.l();},k:3.a(\'g\'),m:\'o%\'});b 1d=c h({i:3.a(\'2n\'),j:e(){N.s();1d.l();},k:3.a(\'g\'),m:\'o%\'});b 1c=c h({i:3.a(\'2o\'),j:e(){O.s();1c.l();},k:3.a(\'g\'),m:\'o%\'});b 1b=c h({i:3.a(\'2q\'),j:e(){R.s();1b.l();},k:3.a(\'g\'),m:\'o%\'});b 1s=c h({i:3.a(\'2r\'),j:e(){S.s();1s.l();},k:3.a(\'g\'),m:\'o%\'});b 1t=c h({i:3.a(\'2x\'),j:e(){F.s();1t.l();},k:3.a(\'g\'),m:\'17%\'});b 1K=c h({i:3.a(\'2s\'),j:e(){F.A(0.8,0,o);F.14(\'A\',e(){F.d();});B.s();B.A(0,0.8,2p);1K.l();},k:3.a(\'g\'),m:\'o%\'});b 1J=c h({i:3.a(\'2l\'),j:e(){B.A(0.9,0,Z);B.14(\'A\',e(){B.d();});P.s();P.A(0,0.9,1G);1J.l();},k:3.a(\'g\'),m:\'o%\'});b 1u=c h({i:3.a(\'2i\'),j:e(){T.s();1u.l();},k:3.a(\'g\'),m:\'o%\'});b 1H=c h({i:3.a(\'2f\'),j:e(){U.s();1H.l();},k:3.a(\'g\'),m:\'o%\'});b 1E=c h({i:3.a(\'2v\'),j:e(){H.d();I.d();J.d();K.d();G.d();L.d();N.d();O.d();R.d();S.d();F.d();B.d();P.d();T.d();U.d();1E.l();},k:3.a(\'g\'),m:\'o%\'});b 1C=c h({i:3.a(\'2z\'),j:e(){10.s();1C.l();},k:3.a(\'g\'),m:\'o%\'});b 1B=c h({i:3.a(\'2C\'),j:e(){13.s();1B.l();},k:3.a(\'g\'),m:\'o%\'});b 1A=c h({i:3.a(\'2I\'),j:e(){M.s();1A.l();},k:3.a(\'g\'),m:\'o%\'});b 1x=c h({i:3.a(\'2E\'),j:e(){11.s();1x.l();},k:3.a(\'g\'),m:\'o%\'});b 1v=c h({i:3.a(\'2y\'),j:e(){12.s();1v.l();},k:3.a(\'g\'),m:\'o%\'});b 1I=c h({i:3.a(\'2c\'),j:e(){X.s();1I.l();},k:3.a(\'g\'),m:\'o%\'});b 1w=c h({i:3.a(\'2d\'),j:e(){M.A(0.19,0,1G);M.14(\'A\',e(){M.d();});W.s();W.A(0,0.19,Z);1w.l();},k:3.a(\'g\'),m:\'o%\'});b 1y=c h({i:3.a(\'1P\'),j:e(){Y.s();1y.l();},k:3.a(\'g\'),m:\'o%\'});b 1z=c h({i:3.a(\'1S\'),j:e(){H.d();I.d();J.d();K.d();G.d();L.d();N.d();O.d();R.d();S.d();F.d();B.d();P.d();T.d();U.d();10.d();13.d();M.d();11.d();12.d();X.d();W.d();Y.d();1z.l();},k:3.a(\'g\'),m:\'o%\'});b 1D=c h({i:3.a(\'1W\'),j:e(){18.s();1D.l();},k:3.a(\'g\'),m:\'o%\'});b 1F=c h({i:3.a(\'24\'),j:e(){16.s();1F.l();},k:3.a(\'g\'),m:\'o%\'});},Z);}',62,169,'|||document|||||||getElementById|var|new|stop|function|true|book|Waypoint|element|handler|context|destroy|offset|tracks|50|src|preload|push|play|volume|audio|mp4|Howl|loop|false|fx|fade|audio1513015843867|music|state|loaded|audio1513015548079|audio1513014877543|audio1513014689177|audio1513014734410|audio1513014777233|audio1513014825848|audio1513014912759|audio1513016800446|audio1513014974566|audio1513015013149|audio1513015990145|ambient|audio1513015046229|audio1513015078038|audio1513016482002|audio1513016597186|style|audio1513017050219|audio1513016987828|audio1513017092570|1000|audio1513016723855|audio1513016844182|audio1513016950214|audio1513016767022|once|window|audio1513017193857|51|audio1513017158537|84|waypoint1513014777233|waypoint1513015046229|waypoint1513015013149|waypoint1513014974566|waypointsilence6|waypoint1513014912759|waypoint1513014877543|waypoint1513014825848|waypoint1513014689177|waypoint1513014734410|ambiente_bus_02|setTimeout|pointerEvents|musica_escape_01|documentElement|overflowY|none|modalCheck|waypoint1513015078038|waypoint1513015548079|waypoint1513016482002|waypoint1513016950214|waypoint1513017050219|waypoint1513016844182|waypoint1513017092570|waypointsilence25|waypoint1513016800446|waypoint1513016767022|waypoint1513016723855|waypoint1513017158537|waypointsilence16|waypoint1513017193857|500|waypoint1513016597186|waypoint1513016987828|waypoint1513015990145|waypoint1513015843867|ambiente_viento_01|musica_final_01|wistle_fabrica_01|65|1513017092570|ambiente_fabrica_01|71|silence25|musica_intro_lucas|perro_ladrando_01|rodando_asfalto_01|1513017158537|musica_epica_01|musica_tension_02|ambiente_bus_01|ambiente_bus_exterior_01|vidrio_roto_01|nota_suspenso_01|golpe_bache_01|1513017193857|musica_tension_01|timbre_01|slowmotion_01|golpe_01|chirrido_ruedas_01|musica_terror_01|llegada_bus_01|1513016987828|1513017050219|silence6|1513016597186|1513014777233|1513014825848|1513016482002|1513014877543|1513014912759|1513015990145|1513014689177|1513014974566|1513015013149|100|1513015046229|1513015078038|1513015843867|1513014734410|hidden|silence16|display|1513015548079|1513016950214|1513016723855|else|auto|1513016767022|if|1513016844182|onload|scroll|modal|1513016800446'.split('|')))

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