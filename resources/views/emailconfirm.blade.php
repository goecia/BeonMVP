@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro exitoso!</div>
                <div class="panel-body">
                    El email fue correctamente verificado. Clickear <a href="{{url('/login')}}">aquí para iniciar sesion</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection