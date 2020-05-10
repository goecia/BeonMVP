<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Behavioral Meta Data -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Beon') }} - 500</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/error.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>

    <body class="noselectable">
        <div id="modal" class="modal">
            <h1>{{ config('app.name', 'BeonWords') }} - Error interno del servidor.</h1>
            <br />
            <a href="{{ env('APP_URL') }}">Regresar a {{ config('app.name', 'BeonWords') }}</a>
        <div>
    </body>

</html>