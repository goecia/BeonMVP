<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beon</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgba(76,217,189, 1);
                color: #333;
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- Scripts -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-89067003-3', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="bg-image"></div>
                <div class="title m-b-md">
                    {{ config('app.name', 'BeonWords') }}
                </div>
                <br />
                @if (Route::has('login'))
                    <div class="links">
                        @if (Auth::user() && Auth::user()->isAdmin())
                            <a href="{{ url('/admin') }}">Admin Panel</a>
                        @elseif (Auth::check())
                            <a href="{{ url('/news') }}">Noticias</a>
                        @else
                            <a href="{{ url('/login') }}">Entrar</a>
                            <a href="{{ url('/register') }}">Registrarse</a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
