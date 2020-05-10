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
    <title>{{ config('app.name', 'BeonWords') }} - Bienvenido a Beon</title>

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
        <div class="titulo">Bienvenido a Beon</div>

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
            <h1>Bienvenido a Beon</h1>
                <div> <span id="1499718694343">¿Cómo estás?</span> <span id="1499718939691">Gracias</span> por venir. Necesitaba hablar con alguien. Mi mujer... mi mujer anda con otro. Estoy seguro. Sí, ya sé lo que me vas a decir y no, yo no la ví. <span id="1500492309287">Pero</span> estoy seguro, creeme. Dejame que te cuente.

Hará dos semanas, yo <span id="silence3">me</span> <span id="1499370988017">había</span> <span id="1499371044262">ido a j</span>ugar al <span id="1499371734195">fútbol</span>. Fue ese día de la tormenta, ¿te acordás? Iba en el auto y el limpiaparabrisas no llegaba a <span id="silence7">sa</span><span id="1499371788979">car el</span><span id="1499371813934"> agua</span>, <span id="1499371847224">era demasiada</span>. <span id="1499371874140">Puse</span> la radio y estaban transmitiendo un partido del ascenso, no me acuerdo qué <span id="1499371890639">equipos</span> <span id="1499371924923">eran </span>pero a uno lo lo goleaban y estaban poer suspenderlo por la lluvia. Nosotros por suerte jugábamos en una cancha techada así que iba tranquilo. Pero en un momento me distraje y el semáforo se puso en rojo. Clavé <span id="1499711606150">los </span>frenos y el auto patinó. Por suerte no pasó nada, pero ya no estaba tranquilo. Tuve la sensación de que algo no estaba bien. Seguí con cuidado y llegué a la cancha, donde estaba <span id="1501088230814">Cristian</span>, ¿lo ubicás? Es el que lleva los <span id="1501087819500">pájaros </span>a concursos de canto. Bueno, la cosa es que éramos los únicos. <span id="1501204201615">M</span>e puse a hablar con él <span id="1501088245712">pero</span> el ruido de la lluvia contra el techo de chapas hizo que tuviéramos que gritar. Y ahí fue cuando me lo dijo. </div><div><br></div><div><span id="silence19">Pará</span>, <span id="1500922933647">yo acá</span>, contándote cosas y vos por ahí tenés que ir al baño. Mirá, arriba a la derecha hay un botón donde podés poner pausa cualquier cosa. Porque no está bueno aguantarse y yo ya me tomé una cerveza antes que vos vinieras. Igual todavía estoy bien. <br></div><div><br></div><div><span id="silence21">Sig</span>o<span id="1500931120078"> contándote.</span> <span id="1501088114010">Cristian</span> y yo esperábamos a los demás pero se ve que la lluvia no les gustó y se quedaron en la <span id="1501204229626">casa </span>casi todos. Nos pusimos a patear la pelota un rato pero no vino nadie más. Ahí fue cuando Cristian me dijo que algunos días atrás vio al Chino cerca de mi casa. ¿Qué hacía el Chino por allí si vive en la otra punta de la ciudad? Y<span id="1502306489851"> era,</span> justamente, un día que yo no estaba. Al principio no me dí cuenta. Pero después recordé que al salir para la cancha ví un auto cerca de la esquina, un auto igual al del Chino. No le presté atención pero recuerdo que lo pensé. Entonces...<br></div><div><br>¿<span id="silence26">Voy</span> <span id="1500493313662">muy</span> rápido? No te quiero marear. Mira, arriba a la derecha también tienes una opción donde puedes modificar la velocidad y el tamaño de letra. Lo digo porque yo sin los anteojos no veo nada. ¿Ahí va mejor? <br></div><div> ¿Seguimos? </div><div><span id="silence28"> Ent</span>o<span id="1501340256474">nces me</span> <span id="1501204704754">subí </span>al auto y<span id="1501204719707"> salí </span>a toda velocidad para casa. Estaba seguro de que los iba a encontrar juntos. El <span id="1501204892098">Chino</span> siempre me <span id="1501621542077">dio</span> desconfianza. Me acuerdo una vez en la fiesta de la colorada que salía con Javier, un día que se les dio por poner<span id="1501712247662"> música</span> <span id="1501618998865">clásica </span>para bailar… sí, no sé qué mambo tenían. Era un montón de gente que se sacudía mientras sonaba música clásica como si tuvieran convulsiones. Está bien igual, yo no soy quién para juzgar. Pero el Chino andaba ahí, merodeando a la colorada. No hacían nada pero se notaba que había algo. Bailaban, se miraban, le hablaba al oído y le señalaba a otro lado, como haciéndose el distraído. De ahí ya me quedó idea. <br></div><div><br></div><div> <span id="silence36">Así </span>que llegué a <span id="1501205089022">casa,</span> d<span id="1501713039023">ejé el aut</span>o en la esquina para que no me vieran y corrí abajo de la lluvia para llegar a la entrada. Me <span id="1501713142573">empapé</span>. <span id="1501525747872">Metí l</span>a llave en la cerradura, despacito para no hacer ruido pero estaba oscuro y no la embocaba, entonces tuve que probar varias veces. Entré y cerré la puerta. Adentro hacía calor y estaba todo en silencio. Se escuchaba la lluvia a lo lejos y música que<span id="1501714705587"> venía</span> de la habitación. <span id="1501714600949">Era obvio </span>que estaban ahí. Subí la escalera con los pies <span id="1501713631117">mojado</span>s. En otro momento me habría querido matar porque mi mujer se pone como loca cuando entro con los pies mojados. Pero qué me importaba, si ella me estaba traicionando. Llegué al final de la escalera, me acerqué a la habitación y abrí la puerta de un <span id="1502303789184">golpe</span>. </div><div> <span id="silence45">Uf,</span> <span id="1501337731771">me</span> dio sed ¿Querés algo para tomar? ¿Querés ajustar algo más? ¿No? ¡Mozo! ¡Otra cerveza! <br></div><div> <span id="silence47">Te</span> <span id="1501621510474">decía</span>, <span id="1501338298054">entré</span> en la <span id="1501339678684">habitación</span> y ahí estaba mi mujer, acostada, tapada con la sábana, mirando una película, un musical era. Estaba sola. Me preguntó si estaba todo bien porque había vuelto enseguida y dijo que me veía raro. Yo la miré, miré alrededor. No había nadie. Pero ¿sabés qué vi? ¿Sabés qué había en el piso? ¡Un pelo negro! ¿Te das <span id="1502307012664">cuenta</span>? ¡Está clarísimo que el hijo de puta se escapó cuando me escuchó abrir con la llave! Y mi mujer si hizo la desentendida. Yo no le dije nada. Pero ya los voy a agarrar infraganti y ahí le meto juicio de divorcio y me quedo <span id="silence52">con</span><span id="1501339835346"> todo. </span>Por <span id="1502305349881">traidora. </span>
Además… uy… mirá... ¿Es el Chino ese que... va de la mano con el amigo de la colorada? ¡Ah! No <span id="1501525346545">sabía</span> que era gay. Por eso debía estar hablando con la Colorada en la fiesta… claro, tiene sentido. Bueno, olvidate lo que te dije entonces. Se ve que me confundí. Uno se pone medio paranóico a veces y dice boludeces, se hace la película ¿viste?. Aunque… ¿vos donde estuviste ese día a la noche?</div>

        </div>
        <div class="poll">
            <a href="/lucas"><div class="poll_btn">Continuar</div></a>
        </div>
    </div>

    <script type="text/javascript">
        eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('b n=[];3.a("e").1j.1Q="3G";3.1N.1j.26="1S";b z=c u({t:1,s:["/q/A/1l.o"],p:f,r:x});n.w(z);b C=c u({t:1,s:["/q/y/2S.o"],p:f,r:x});n.w(C);b D=c u({t:0.2O,s:["/q/y/2H.o"],p:f,r:x});n.w(D);b F=c u({t:0.8,s:["/q/y/16.o"],p:f,r:x});n.w(F);b E=c u({t:0.1h,s:["/q/A/2E.o"],p:f,r:x});n.w(E);b G=c u({t:0.5,s:["/q/y/28.o"],p:f,r:x});n.w(G);b I=c u({t:0.7,s:["/q/y/16.o"],p:f,r:x});n.w(I);b T=c u({t:0.7,s:["/q/A/2L.o"],p:f,r:f});n.w(T);b S=c u({t:0.7,s:["/q/y/2b.o"],p:f,r:f});n.w(S);b R=c u({t:0.6,s:["/q/A/1v.o"],p:f,r:f});n.w(R);b O=c u({t:0.6,s:["/q/y/2J.o"],p:f,r:x});n.w(O);b Q=c u({t:0.5,s:["/q/A/2U.o"],p:f,r:x});n.w(Q);b P=c u({t:1,s:["/q/y/2W.o"],p:f,r:x});n.w(P);b J=c u({t:0.2V,s:["/q/15/2Z.o"],p:f,r:x});n.w(J);b M=c u({t:0.3b,s:["/q/y/34.o"],p:f,r:x});n.w(M);b L=c u({t:0.9,s:["/q/y/2g.o"],p:f,r:x});n.w(L);b K=c u({t:0.6,s:["/q/A/2a.o"],p:f,r:x});n.w(K);b V=c u({t:1,s:["/q/A/1l.o"],p:f,r:x});n.w(V);b Z=c u({t:0.9,s:["/q/y/16.o"],p:f,r:x});n.w(Z);b Y=c u({t:0.5,s:["/q/A/2a.o"],p:f,r:f});n.w(Y);b H=c u({t:0.9,s:["/q/y/2g.o"],p:f,r:x});n.w(H);b X=c u({t:0.7,s:["/q/15/39.o"],p:f,r:f});n.w(X);b 11=c u({t:0.1u,s:["/q/A/1l.o"],p:f,r:f});n.w(11);b 14=c u({t:0.8,s:["/q/y/16.o"],p:f,r:x});n.w(14);b U=c u({t:0.2e,s:["/q/A/2Y.o"],p:f,r:x});n.w(U);b 18=c u({t:0.2e,s:["/q/y/28.o"],p:f,r:x});n.w(18);b N=c u({t:0.8,s:["/q/A/1v.o"],p:f,r:f});n.w(N);b 1a=c u({t:0.1h,s:["/q/y/2b.o"],p:f,r:x});n.w(1a);b 19=c u({t:0.1h,s:["/q/y/16.o"],p:f,r:x});n.w(19);b 1b=c u({t:0.2A,s:["/q/15/2I.o"],p:f,r:f});n.w(1b);b 1c=c u({t:0.8,s:["/q/y/2T.o"],p:f,r:x});n.w(1c);b W=c u({t:0.45,s:["/q/A/2E.o"],p:f,r:x});n.w(W);b 12=c u({t:0.4,s:["/q/A/1v.o"],p:f,r:f});n.w(12);b 1i=c u({t:1,s:["/q/y/35.o"],p:f,r:x});n.w(1i);b 1d=c u({t:1,s:["/q/y/2M.o"],p:f,r:x});n.w(1d);b 1e=c u({t:0.8,s:["/q/15/36.o"],p:f,r:f});n.w(1e);b 1f=c u({t:0.8,s:["/q/y/33.o"],p:f,r:x});n.w(1f);b 1g=c u({t:0.9,s:["/q/y/2X.o"],p:f,r:x});n.w(1g);b 1n=c u({t:0.8,s:["/q/A/1l.o"],p:f,r:x});n.w(1n);b 1q=c u({t:0.8,s:["/q/y/16.o"],p:f,r:x});n.w(1q);b 1m=c u({t:0.6,s:["/q/15/2K.o"],p:f,r:f});n.w(1m);b 1p=c u({t:0.1h,s:["/q/y/2Q.o"],p:f,r:x});n.w(1p);b 1r=c u({t:0.25,s:["/q/15/3a.o"],p:f,r:x});n.w(1r);b 1s=c u({t:0.1h,s:["/q/y/16.o"],p:f,r:x});n.w(1s);b 1o=c u({t:0.1u,s:["/q/A/1l.o"],p:f,r:x});n.w(1o);b 1w=c u({t:0.38,s:["/q/15/31.o"],p:f,r:f});n.w(1w);(d 1H(){37(z.17()=="13"&&C.17()=="13"&&D.17()=="13"&&F.17()=="13"&&E.17()=="13"&&G.17()=="13"&&I.17()=="13"){3.a("32").1j.30="1S";3.a("e").1j.1Q="2N";3.1N.1j.26="2P";}2R{1t.2C(d(){1H();},10);}})();1t.3d=d(){1t.2C(d(){b 1z=c l({k:3.a(\'3h\'),j:d(){z.v();1z.i();},h:3.a(\'e\'),g:\'m%\'});b 1x=c l({k:3.a(\'3J\'),j:d(){C.v();1x.i();},h:3.a(\'e\'),g:\'m%\'});b 1D=c l({k:3.a(\'3K\'),j:d(){D.v();1D.i();},h:3.a(\'e\'),g:\'m%\'});b 23=c l({k:3.a(\'3L\'),j:d(){z.2();C.2();D.2();23.i();},h:3.a(\'e\'),g:\'m%\'});b 1Z=c l({k:3.a(\'3M\'),j:d(){F.v();1Z.i();},h:3.a(\'e\'),g:\'m%\'});b 1O=c l({k:3.a(\'3N\'),j:d(){E.v();E.B(0,0.1h,2G);1O.i();},h:3.a(\'e\'),g:\'m%\'});b 1P=c l({k:3.a(\'3O\'),j:d(){G.v();1P.i();},h:3.a(\'e\'),g:\'m%\'});b 1R=c l({k:3.a(\'3P\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();1R.i();},h:3.a(\'e\'),g:\'m%\'});b 1T=c l({k:3.a(\'3Q\'),j:d(){I.v();1T.i();},h:3.a(\'e\'),g:\'m%\'});b 1U=c l({k:3.a(\'3R\'),j:d(){T.v();1U.i();},h:3.a(\'e\'),g:\'m%\'});b 1M=c l({k:3.a(\'3S\'),j:d(){S.v();1M.i();},h:3.a(\'e\'),g:\'m%\'});b 1V=c l({k:3.a(\'3T\'),j:d(){R.v();1V.i();},h:3.a(\'e\'),g:\'m%\'});b 1X=c l({k:3.a(\'3U\'),j:d(){O.v();1X.i();},h:3.a(\'e\'),g:\'m%\'});b 1Y=c l({k:3.a(\'3V\'),j:d(){Q.v();1Y.i();},h:3.a(\'e\'),g:\'m%\'});b 1K=c l({k:3.a(\'3X\'),j:d(){P.v();1K.i();},h:3.a(\'e\'),g:\'m%\'});b 20=c l({k:3.a(\'3I\'),j:d(){J.v();20.i();},h:3.a(\'e\'),g:\'m%\'});b 21=c l({k:3.a(\'3Y\'),j:d(){M.v();21.i();},h:3.a(\'e\'),g:\'48%\'});b 22=c l({k:3.a(\'40\'),j:d(){L.v();22.i();},h:3.a(\'e\'),g:\'48%\'});b 24=c l({k:3.a(\'41\'),j:d(){K.v();24.i();},h:3.a(\'e\'),g:\'m%\'});b 1W=c l({k:3.a(\'43\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();I.2();T.2();S.2();R.2();O.2();Q.2();P.2();J.2();M.2();L.2();K.2();1W.i();},h:3.a(\'e\'),g:\'m%\'});b 1L=c l({k:3.a(\'44\'),j:d(){V.v();1L.i();},h:3.a(\'e\'),g:\'m%\'});b 1J=c l({k:3.a(\'47\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();I.2();T.2();S.2();R.2();O.2();Q.2();P.2();J.2();M.2();L.2();K.2();V.2();1J.i();},h:3.a(\'e\'),g:\'m%\'});b 1G=c l({k:3.a(\'3Z\'),j:d(){Z.v();1G.i();},h:3.a(\'e\'),g:\'m%\'});b 1B=c l({k:3.a(\'4a\'),j:d(){Y.v();1B.i();},h:3.a(\'e\'),g:\'m%\'});b 1A=c l({k:3.a(\'46\'),j:d(){H.v();1A.i();},h:3.a(\'e\'),g:\'m%\'});b 1y=c l({k:3.a(\'42\'),j:d(){H.B(0.7,0,2w);H.1k(\'B\',d(){H.2();});X.v();1y.i();},h:3.a(\'e\'),g:\'m%\'});b 1C=c l({k:3.a(\'3W\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();I.2();T.2();S.2();R.2();O.2();Q.2();P.2();J.2();M.2();L.2();K.2();V.2();Z.2();Y.2();H.2();X.2();1C.i();},h:3.a(\'e\'),g:\'m%\'});b 1E=c l({k:3.a(\'3H\'),j:d(){11.v();1E.i();},h:3.a(\'e\'),g:\'m%\'});b 1F=c l({k:3.a(\'3c\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();I.2();T.2();S.2();R.2();O.2();Q.2();P.2();J.2();M.2();L.2();K.2();V.2();Z.2();Y.2();H.2();X.2();11.2();1F.i();},h:3.a(\'e\'),g:\'m%\'});b 1I=c l({k:3.a(\'3s\'),j:d(){14.v();1I.i();},h:3.a(\'e\'),g:\'m%\'});b 27=c l({k:3.a(\'3F\'),j:d(){U.v();27.i();},h:3.a(\'e\'),g:\'m%\'});b 29=c l({k:3.a(\'3f\'),j:d(){18.v();29.i();},h:3.a(\'e\'),g:\'49%\'});b 2x=c l({k:3.a(\'3g\'),j:d(){U.B(0.8,0,2w);U.1k(\'B\',d(){U.2();});N.v();N.B(0,0.8,10);2x.i();},h:3.a(\'e\'),g:\'m%\'});b 2y=c l({k:3.a(\'3i\'),j:d(){1a.v();2y.i();},h:3.a(\'e\'),g:\'m%\'});b 2z=c l({k:3.a(\'3j\'),j:d(){19.v();2z.i();},h:3.a(\'e\'),g:\'m%\'});b 2B=c l({k:3.a(\'3k\'),j:d(){N.B(0.2A,0,10);N.1k(\'B\',d(){N.2();});1b.v();2B.i();},h:3.a(\'e\'),g:\'m%\'});b 2v=c l({k:3.a(\'3l\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();I.2();T.2();S.2();R.2();O.2();Q.2();P.2();J.2();M.2();L.2();K.2();V.2();Z.2();Y.2();H.2();X.2();11.2();14.2();U.2();18.2();N.2();1a.2();19.2();1b.2();2v.i();},h:3.a(\'e\'),g:\'m%\'});b 2F=c l({k:3.a(\'3m\'),j:d(){1c.v();2F.i();},h:3.a(\'e\'),g:\'m%\'});b 2D=c l({k:3.a(\'3n\'),j:d(){W.v();2D.i();},h:3.a(\'e\'),g:\'m%\'});b 2u=c l({k:3.a(\'3o\'),j:d(){W.B(0.4,0,10);W.1k(\'B\',d(){W.2();});12.v();12.B(0,0.4,2G);2u.i();},h:3.a(\'e\'),g:\'m%\'});b 2j=c l({k:3.a(\'3p\'),j:d(){1i.v();2j.i();},h:3.a(\'e\'),g:\'m%\'});b 2s=c l({k:3.a(\'3q\'),j:d(){1d.v();2s.i();},h:3.a(\'e\'),g:\'m%\'});b 2c=c l({k:3.a(\'3e\'),j:d(){1e.v();2c.i();},h:3.a(\'e\'),g:\'m%\'});b 2d=c l({k:3.a(\'3r\'),j:d(){1f.v();2d.i();},h:3.a(\'e\'),g:\'48%\'});b 2t=c l({k:3.a(\'3t\'),j:d(){1g.v();2t.i();},h:3.a(\'e\'),g:\'49%\'});b 2f=c l({k:3.a(\'3u\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();I.2();T.2();S.2();R.2();O.2();Q.2();P.2();J.2();M.2();L.2();K.2();V.2();Z.2();Y.2();H.2();X.2();11.2();14.2();U.2();18.2();N.2();1a.2();19.2();1b.2();1c.2();W.2();12.2();1i.2();1d.2();1e.2();1f.2();1g.2();2f.i();},h:3.a(\'e\'),g:\'m%\'});b 2h=c l({k:3.a(\'3v\'),j:d(){1n.v();2h.i();},h:3.a(\'e\'),g:\'m%\'});b 2i=c l({k:3.a(\'3w\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();I.2();T.2();S.2();R.2();O.2();Q.2();P.2();J.2();M.2();L.2();K.2();V.2();Z.2();Y.2();H.2();X.2();11.2();14.2();U.2();18.2();N.2();1a.2();19.2();1b.2();1c.2();W.2();12.2();1i.2();1d.2();1e.2();1f.2();1g.2();1n.2();2i.i();},h:3.a(\'e\'),g:\'m%\'});b 2k=c l({k:3.a(\'3x\'),j:d(){1q.v();2k.i();},h:3.a(\'e\'),g:\'m%\'});b 2l=c l({k:3.a(\'3y\'),j:d(){z.B(0.6,0,10);z.1k(\'B\',d(){z.2();});1m.v();1m.B(0,0.6,10);2l.i();},h:3.a(\'e\'),g:\'m%\'});b 2m=c l({k:3.a(\'3z\'),j:d(){1p.v();2m.i();},h:3.a(\'e\'),g:\'49%\'});b 2n=c l({k:3.a(\'3A\'),j:d(){1r.v();2n.i();},h:3.a(\'e\'),g:\'m%\'});b 2o=c l({k:3.a(\'3B\'),j:d(){z.2();C.2();D.2();F.2();E.2();G.2();I.2();T.2();S.2();R.2();O.2();Q.2();P.2();J.2();M.2();L.2();K.2();V.2();Z.2();Y.2();H.2();X.2();11.2();14.2();U.2();18.2();N.2();1a.2();19.2();1b.2();1c.2();W.2();12.2();1i.2();1d.2();1e.2();1f.2();1g.2();1n.2();1q.2();1m.2();1p.2();1r.2();2o.i();},h:3.a(\'e\'),g:\'m%\'});b 2p=c l({k:3.a(\'3C\'),j:d(){1s.v();2p.i();},h:3.a(\'e\'),g:\'m%\'});b 2q=c l({k:3.a(\'3D\'),j:d(){1o.v();1o.B(0,0.1u,10);2q.i();},h:3.a(\'e\'),g:\'m%\'});b 2r=c l({k:3.a(\'3E\'),j:d(){1w.v();2r.i();},h:3.a(\'e\'),g:\'m%\'});},10);}',62,259,'||stop|document|||||||getElementById|var|new|function|book|true|offset|context|destroy|handler|element|Waypoint|50|tracks|mp4|preload|audio|loop|src|volume|Howl|play|push|false|fx|audio1499718694343|ambient|fade|audio1499718939691|audio1500492309287|audio1499371044262|audio1499370988017|audio1499371734195|audio1501204229626|audio1499371788979|audio1501088230814|audio1501088245712|audio1501204201615|audio1501087819500|audio1501204892098|audio1499371890639|audio1499711606150|audio1499371924923|audio1499371874140|audio1499371847224|audio1499371813934|audio1501204704754|audio1500922933647|audio1501713039023|audio1502306489851|audio1501088114010|audio1500931120078|1000|audio1500493313662|audio1501713142573|loaded|audio1501340256474|music|transicion_01|state|audio1501204719707|audio1501712247662|audio1501621542077|audio1501618998865|audio1501205089022|audio1501714705587|audio1501714600949|audio1501713631117|audio1502303789184|75|audio1501525747872|style|once|ambiente_bar_01|audio1501338298054|audio1501337731771|audio1502305349881|audio1501339678684|audio1501621510474|audio1502307012664|audio1501339835346|window|72|ambiente_auto_lluvia_01|audio1501525346545|waypoint1499718939691|waypoint1502306489851|waypoint1499718694343|waypoint1501204229626|waypoint1501088114010|waypointsilence26|waypoint1500492309287|waypoint1500493313662|waypointsilence28|waypoint1500931120078|modalCheck|waypoint1501340256474|waypointsilence21|waypoint1499711606150|waypoint1500922933647|waypoint1499371847224|documentElement|waypoint1499371044262|waypoint1499371734195|overflowY|waypointsilence7|none|waypoint1499371788979|waypoint1499371813934|waypoint1499371874140|waypointsilence19|waypoint1499371890639|waypoint1499371924923|waypoint1499370988017|waypoint1501088230814|waypoint1501087819500|waypoint1501204201615|waypointsilence3|waypoint1501088245712||pointerEvents|waypoint1501204704754|trueno_01|waypoint1501204719707|ambiente_lluvia_01|limpiaparabrisas_01|waypoint1501714600949|waypoint1501713631117|85|waypointsilence45|futbol_duo_01|waypoint1501337731771|waypointsilence47|waypoint1501525747872|waypoint1501621510474|waypoint1501338298054|waypoint1501339678684|waypoint1502307012664|waypointsilence52|waypoint1501339835346|waypoint1502305349881|waypoint1501525346545|waypoint1501714705587|waypoint1502303789184|waypoint1501713142573|waypointsilence36|2000|waypoint1501204892098|waypoint1501621542077|waypoint1501712247662|61|waypoint1501618998865|setTimeout|waypoint1501713039023|ambiente__lluvia_suave_01|waypoint1501205089022|1500|silla_mov_02_01|musica_clasica_01|switch_radio_01|musica_tv_cerca_01|ambiente_auto_01|cerrarpuertacasa_01|scroll|82|auto|gotas_cuarto_01|else|silla_mov_01_01|cerrarpuertaauto_01|ambiente_partido_radio_01|65|chirrido_ruedas_01|abrir_puerta_cuarto_01|ambiente_auto_veloz_01|musica_preocupacion_01|display|musica_comedia_01|modal|pasosmojados_01|pajaro_01|llaves_no_entran_01|musica_tv_lejos_01|if|83|musica_preocupacion_b_01|musica_tension_tutorial_01|71|silence28|onload|1501714600949|1501204719707|1501204892098|1499718694343|1501621542077|1501712247662|1501618998865|silence36|1501205089022|1501713039023|1501713142573|1501525747872|1501714705587|1501713631117|1501340256474|1502303789184|silence45|1501337731771|silence47|1501621510474|1501338298054|1501339678684|1502307012664|silence52|1501339835346|1502305349881|1501525346545|1501204704754|hidden|1500493313662|1501088230814|1499718939691|1500492309287|silence3|1499370988017|1499371044262|1499371734195|silence7|1499371788979|1499371813934|1499371847224|1499371874140|1499371890639|1499371924923|silence26|1499711606150|1501087819500|1500931120078|1501204201615|1501088245712|1502306489851|silence19|1500922933647||1501204229626|silence21|||1501088114010'.split('|')))

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