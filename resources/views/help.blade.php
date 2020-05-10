@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h4>Hola {{ Auth::user()->name }}!</h4>

            Aquí podrás obtener ayuda sobre la plataforma.

        </div>
    </div>
</div>

@endsection