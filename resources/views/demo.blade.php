<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Behavioral Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="An audio trigger webpage">
    <meta name="author" content="Alexis Casasola (goecia@gmail.com), Agustin Guruciaga (agustinmuydesign@gmail.com)">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Title -->
    <title>{{ config('app.name', 'BeonWords') }} - El Cilindro</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i&amp;subset=latin-ext" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo/roller.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/demo/animate.css') }}">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/demo/hyphenator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/demo/jquery-latest.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/demo/actions.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/demo/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/demo/howler.min.js') }}"></script>

    <script type="text/javascript">
        Hyphenator.run();
        //Analytics
        /*
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89067003-2', 'auto');
        ga('send', 'pageview');
        */
    </script>
</head>

<body class="noselectable">

    <!-- Animation splash -->
    <!-- Loading div -->
    <div class="splash" id="splash2">
        <div class="splash_gradiente_blanco"></div>
        <div class="splash_gradiente"></div>
        <div class="splash_loader"><img class="animated zoomIn duration_2s" src="/assets/demo/loader_beon.gif" alt=""><br><div class="splash_cargando animated pulse duration_2s infinite">Cargando...</div></div>
    </div>

    <!-- Initial Splash --> 
    <div class="splash" id="splash1">
        <div class="splash_gradiente_blanco"></div>
        <div class="splash_gradiente"></div>
        <div class="splash_cont">
            <div class="splash_top_20prcnt">
                <div class="splash_logo animated fadeIn duration_2s"><img src="/assets/demo/logo_splash.png" alt="logo_splash"></div>
                <div class="splash_texto animated fadeInUp delay_05s">
                    Prepárate para la<br>
                    <b>nueva experiencia de lectura</b> <br>
                    <span>con banda sonora...</span>
                </div>
            </div>

            <div class="splash_bottom_10prcnt">
                <div class="splash_cont_aviso">
                    <div class="splash_headset animated bounceInDown delay_2s"><i class="material-icons md-light md-60 animated tada delay_6s duration_2s">headset</i></div>
                    <div class="splash_aviso animated fadeInRight delay_1_5s">Conecta tus <br> auriculares</div>
                    <div class="clear"></div>
                    <div class="splash_btn animated zoomInUp delay_2s duration_2s">Todo listo !</div>
                </div>
            </div>
        </div>
    </div>


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
            <h1><span id="el_cilindro">El Cilindro</span></h1>

            <p>
            El cilindro resbaló de mi mano sudada y logré alcanzarlo antes de que golpee el suelo de roca. Los nervios se adueñaban de los presentes, incluyéndome. Hacía dos meses ya que la especie humana luchaba por sobrevivir. Dos meses trágicos. Por un instante creímos que todo estaba perdido, que era el fin. Sin embargo, en las últimas horas renació la esperanza. Un grupo de investigadores encontró la <span id="respuesta">respuesta</span> en un laboratorio de Buenos Aires. La explicación fue abrumadoramente confusa. Debo confesar que asentí al escucharla pero no entendí una sola palabra. No hacía falta. Lo único que necesitaba saber era que debía llevar ese cilindro hasta el continente asiático y que un dispositivo en mi cerebro era la garantía de que llegue en condiciones de ser utilizado.
            </p>

            <p>
            No existía forma de llegar a destino utilizando un medio de transporte. Los vuelos y viajes en barco eran cosa del pasado. El optimismo estuvo a punto de desvanecerse cuando agentes gubernamentales nos comunicaron de su existencia. Había sido descubierto décadas atrás durante las excavaciones que ampliaban la red de subterráneos y mantenido en secreto desde entonces. Se trataba de una anomalía. Una realidad imposible para la física. Y, no obstante, allí estaba, frente a nosotros. <span id="una_caverna">Una caverna</span> bajo la ciudad formada por rocas basálticas de un volcán inexistente. En el centro, atravesándola de lado a lado, un río separaba las dos orillas. De un lado Buenos Aires, del otro Ho Chi Minh.
            </p>

            <p>
            El curso de agua se perdía a la derecha por debajo de las rocas. Era inviable cruzar por allí. Las opciones de hacerlo a nado o en alguna embarcación caducaron cuando descubrieron que el componente ácido que cargaba el agua desintegraba todo lo que intentara atravesarlo. <span id="solo_existia">Sólo existía</span> una opción viable. Sobre el extremo izquierdo de la caverna, una angosta cornisa recorría la roca hasta llegar a la otra orilla. Su superficie resbalosa volvía prácticamente imposible transitarla. Al menos seis personas habían muerto intentándolo en las épocas de experimentación. Y hoy era la única posibilidad.
            </p>

            <p>
            Éramos tres los voluntarios y de nuestro éxito dependía el futuro de la humanidad. Al menos uno de nosotros debía llegar al otro lado y entregar el cilindro al representante asiático. Jorge, el primer voluntario, inició el trayecto. Mientras luchaba por afirmarse sabíamos que, aunque lograra llegar, debería todavía enfrentar uno de los peores obstáculos. Cruzar en doscientos metros de un extremo al otro del planeta acarreaba consecuencias nefastas. La fuerza de la rotación de la Tierra descargaba su furia sobre quien completara el trayecto. Algunos habían muerto en el intento mientras que otros, que lograron mantener la integridad física, perdieron la razón. David y yo lo mirábamos con atención. Otros, con los ojos cerrados, sólo escucharon <span id="el_ruido_del_agua">el ruido del agua</span> cuando el cuerpo de Jorge la encontró.
            </p>

            <p>
            El silencio era quebrado por <span id="sollozos">sollozos ahogados</span> cuando David se aprestó para partir. Avanzó con seguridad hasta mitad de    camino y a partir de allí no pude mirar. Escondí los ojos tras mi brazo mientras me aferraba al cilindro como a un amuleto. Los segundos pasaron y <span id="el_silencio">el silencio</span> se hizo profundo. Alcé la vista justo a tiempo para verlo llegar a la orilla. Las sonrisas se dibujaron en muchos de los presentes pero sólo duraron un suspiro. Apenas arribado a tierra firme y antes de que el representante de Vietnam llegara a recibirlo, David se contorsionó en espasmos de dolor y <span id="sus_gritos">sus gritos retumbaron en la caverna</span> haciéndonos temblar. Cuando se incorporó, su mente se había desconectado de su cuerpo desintegrando el dispositivo de seguridad  y volviendo inservible el cilindro.
            </p>

            <p>
            <span id="mi_turno">Mi turno</span> había llegado. Sentía todas las miradas clavadas en mi espalda mientras me acercaba a la cornisa. El último cilindro parecía quemarme las manos. Era la última oportunidad, la última esperanza. El destino del mundo descansaba sobre mí y en mi <span id="primer_paso">primer paso resbalé.</span> Estuve a punto de caer. Una saliente en la roca me permitió aferrarme y logré estabilizarme de nuevo. Avancé con cuidado, tratando de afirmar cada paso. Por tramos la cornisa se reducía a una ínfima expresión y me vi obligado a proseguir sostenido únicamente por las puntas de mis pies. El agua, amenazante, salpicaba mis talones en su torrente continuo. Apreté los dientes y continué. La orilla asiática ya estaba cerca. Hasta parecía posible alcanzarla. Al último tramo lo cubría un musgo que lo hacía especialmente resbaloso. El pánico me invadió. No creía posible atravesarlo, pero no tenía opción. Ya no quedaban más intentos. Reanudé la marcha concentrándome en cada paso y casi sin darme cuenta llegué.
            </p>

            <p>
            <span id="la_violencia">La violencia</span> de la rotación concentrada me sacudió propiciándome un dolor que no creí posible. <span id="cai_al_suelo">Caí al suelo</span> intentando resistir. Busqué por todos los medios concentrarme en la misión, en el futuro. <span id="no_podia_rendirme">No podía rendirme</span>. Cerré los ojos mientras un tornado de punzadas insoportables recorría mi cuerpo como un ejército de agujas clavándose al mismo tiempo. Luego, tan repentinamente como comenzó, el dolor cesó. Me incorporé para encontrar al representante vietnamita y le entregué el cilindro con una sonrisa y un conjunto incontenible de lágrimas que brotaban desde mis ojos. <span id="era_feliz">Era feliz.</span>
            </p>

            <p>
            En el momento en que ambos sostuvimos el cilindro, el dispositivo se materializó en el cerebro del receptor, liberándome. Lleno de júbilo me acerqué a la orilla y lancé un grito para festejar junto con mis compañeros. <span id="ellos">Ellos</span> respondieron con vítores y aplausos. Di media vuelta y cuando les daba la espalda <span id="tropece">tropecé</span> con una roca y <span id="resbale">resbalé</span> con los restos de musgo que poblaban la orilla. Apenas atiné a estabilizarme pero ya era tarde. El agua me envolvió suavemente hasta devorarme. Me sumergí, indefenso, consciente de mi destino pero no me importó. Lo había conseguido.
            </p>

            <h2>Fin</h2>

        </div>

        <!-- User poll (TOREMOVE after demo)-->
        <!--<div class="poll">
            <a href="https://docs.google.com/forms/d/1Mr6TYlrv09-IkeVvQK_y0m84Pe5ofKg-TxgM7s00bDU/edit"><div class="poll_btn">Ir a la encuesta</div></a>
        </div>-->
    </div>

    <script type="text/javascript">
        // Global variables
        var offset = "50%";
        var volume = 1;
        var muted = false;
        var tracks = [];
        var dummy = 0;
        var loaded = false;

        // Take off scroll action for modal
        document.getElementById("book").style.overflowY = "hidden";

        // Collection of variables
        var audio = new Howl({
            volume: volume,
            src: ["{{ asset('audio/ambient/AmbienteIntro_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio);

        var audio0 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/music/Music_01.mp4') }}"],
            preload: true,
            loop: true
        });
        tracks.push(audio0);

        var audio1 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/ambient/AmbienteCaverna_01.mp4') }}"],
            preload: true,
            loop: true
        });
        tracks.push(audio1);

        var audio2 = new Howl({
            volume: 0.1,
            src: ["{{ asset('audio/music/Music_Tension_01.mp4') }}"],
            preload: true,
            loop: true
        });
        tracks.push(audio2);

        var audio3 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/fx/1stFall_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio3);

        var audio4 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/fx/DavidCrying_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio4);

        var audio5 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/ambient/AmbienteSilencio_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio5);

        var audio6 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/fx/DavidScreams_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio6);

        var audio7 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/music/Music_Tension_02.mp4') }}"],
            preload: true,
            loop: true
        });
        tracks.push(audio7);

        var audio8 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/fx/AlmostDown_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio8);

        var audio9 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/ambient/AmbienteRotacion_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio9);

        var audio10 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/fx/Falling2ground_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio10);

        var audio11 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/music/Music_Epica_01.mp4') }}"],
            preload: true,
            loop: true
        });
        tracks.push(audio11);

        var audio12 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/music/Music_Epica_02.mp4') }}"],
            preload: true,
            loop: true
        });
        tracks.push(audio12);

        var audio13 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/fx/Aplausos_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio13);

        var audio14 = new Howl({
            volume: volume,
            src: ["{{ asset('audio/fx/FinalFall_01.mp4') }}"],
            preload: true
        });
        tracks.push(audio14);

        // Recursive function to check preload
        (function modalCheck() {
            if(
                audio.state() == "loaded" &&
                audio0.state() == "loaded" &&
                audio1.state() == "loaded" &&
                audio2.state() == "loaded" &&
                audio3.state() == "loaded" &&
                audio4.state() == "loaded" &&
                audio5.state() == "loaded" &&
                audio6.state() == "loaded" &&
                audio7.state() == "loaded" &&
                audio8.state() == "loaded" &&
                audio9.state() == "loaded" &&
                audio10.state() == "loaded" &&
                audio11.state() == "loaded" &&
                audio12.state() == "loaded" &&
                audio13.state() == "loaded" &&
                audio14.state() == "loaded"
            ) {
                // If all loaded: hide modal and renew scroll
                loaded = true;
                document.getElementById("splash2").style.display = "none";
                document.getElementById("book").style.overflowY = "scroll";
            } else {
                // Set a one second delay (1000ms) and try again
                window.setTimeout(function(){
                    modalCheck();
                }, 1000);
            }
        })();

        // Collection of waypoints
        window.onload = function () {
            var waypoint = new Waypoint({
                element: document.getElementById('el_cilindro'),
                handler: function() {
                    audio.play();
                    waypoint.destroy();
                },
                context: document.getElementById('book'),
                offset: "45%"
            })

            var waypoint0 = new Waypoint({
                element: document.getElementById('respuesta'),
                handler: function() {
                    audio0.play();
                    waypoint0.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint1 = new Waypoint({
                element: document.getElementById('una_caverna'),
                handler: function() {
                    audio1.play();
                    waypoint1.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint2 = new Waypoint({
                element: document.getElementById('solo_existia'),
                handler: function() {
                    audio0.fade(volume, 0, 4000);
                    audio0.once('fade', function(){
                        audio0.stop();
                    });
                    audio2.play();
                    audio2.fade(0, volume, 4000);
                    waypoint2.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint3 = new Waypoint({
                element: document.getElementById('el_ruido_del_agua'),
                handler: function() {
                    audio3.play();
                    waypoint3.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint4 = new Waypoint({
                element: document.getElementById('sollozos'),
                handler: function() {
                    audio4.play();
                    waypoint4.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint5 = new Waypoint({
                element: document.getElementById('el_silencio'),
                handler: function() {
                    //audio.unload() FOR DESTROYING OBJECT AND TAKE OFF THE CACHE
                    // Howl.stop();
                    audio.stop();
                    audio0.stop();
                    audio1.stop();
                    audio2.stop();
                    audio3.stop();
                    audio4.stop();
                    audio5.play();
                    waypoint5.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint6 = new Waypoint({
                element: document.getElementById('sus_gritos'),
                handler: function() {
                    audio6.play();
                    waypoint6.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint7 = new Waypoint({
                element: document.getElementById('mi_turno'),
                handler: function() {
                    tracks.push(audio7);
                    audio2.fade(volume, 0, 4000);
                    audio2.once('fade', function(){
                        audio2.stop();
                    });
                    audio7.play();
                    audio7.fade(0, volume, 4000);
                    waypoint7.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint8 = new Waypoint({
                element: document.getElementById('primer_paso'),
                handler: function() {
                    audio8.play();
                    waypoint8.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint9 = new Waypoint({
                element: document.getElementById('la_violencia'),
                handler: function() {
                    audio9.play();
                    waypoint9.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint10 = new Waypoint({
                element: document.getElementById('cai_al_suelo'),
                handler: function() {
                    audio10.play();
                    waypoint10.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint11 = new Waypoint({
                element: document.getElementById('no_podia_rendirme'),
                handler: function() {
                    audio7.fade(volume, 0, 4000);
                    audio7.once('fade', function(){
                        audio7.stop();
                    });
                    audio11.play();
                    audio11.fade(0, volume, 4000);
                    waypoint11.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint12 = new Waypoint({
                element: document.getElementById('era_feliz'),
                handler: function() {
                    audio11.fade(volume, 0, 4000);
                    audio11.once('fade', function(){
                        audio11.stop();
                    });
                    audio12.play();
                    audio12.fade(0, volume, 4000);
                    waypoint12.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint13 = new Waypoint({
                element: document.getElementById('ellos'),
                handler: function() {
                    audio13.play();
                    waypoint13.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint14 = new Waypoint({
                element: document.getElementById('tropece'),
                handler: function() {
                        audio6.stop();
                        audio7.stop();
                        audio8.stop();
                        audio9.stop();
                        audio10.stop();
                        audio11.stop();
                        audio12.stop();
                        audio13.stop();
                        waypoint14.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })

            var waypoint15 = new Waypoint({
                element: document.getElementById('resbale'),
                handler: function() {
                        audio14.play();
                        waypoint15.destroy();
                },
                context: document.getElementById('book'),
                offset: offset
            })
        }
    </script>
</body>
</html>