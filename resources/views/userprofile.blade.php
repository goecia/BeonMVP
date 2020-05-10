@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/userprofile.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img class="avatar" src="assets/avatars/{{ Auth::user()->avatar }}" />
            <h1>{{ Auth::user()->name }}</h1>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Actualizar contraseña
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Actualizar correo electrónico
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="headingThree">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Actualizar nombre
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="headingFour">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Actualizar avatar
                        </a>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="row text-center status" id="status"></div>

    <div class="row text-center">
        <!-- UPDATE PASSWORD -->
        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <form class="text-center" enctype="multipart/form-data" action="/updatePassword" method="POST">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Nueva contraseña</label>
                    <div class="col-md-6">
                        <input id="password" type="text" class="form-control" name="password" value="{{ old('password') }}" required autofocus>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label for="password-confirm" class="col-md-4 control-label">Confirmar nueva contraseña</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="text" class="form-control" name="password-confirm" value="{{ old('password-confirm') }}" required>

                        @if ($errors->has('password-confirm'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password-confirm') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Enviar
                            </button>
                        </div>
                    </div>
            </form>
        </div>

        <!-- UPDATE EMAIL -->
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <form class="text-center" enctype="multipart/form-data" action="/updateEmail" method="POST">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">Nuevo correo electrónico</label>
                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label for="email-confirm" class="col-md-4 control-label">Confirmar nuevo correo electrónico</label>
                    <div class="col-md-6">
                        <input id="email-confirm" type="text" class="form-control" name="email-confirm" value="{{ old('email-confirm') }}" required>

                        @if ($errors->has('email-confirm'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email-confirm') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- UPDATE NAME -->
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <form class="text-center" enctype="multipart/form-data" action="/updateName" method="POST">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nuevo nombre</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <label for="name-confirm" class="col-md-4 control-label">Confirmar nuevo nombre</label>
                    <div class="col-md-6">
                        <input id="name-confirm" type="text" class="form-control" name="name-confirm" value="{{ old('name-confirm') }}" required>

                        @if ($errors->has('name-confirm'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name-confirm') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- UPDATE AVATAR -->
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <form class="text-center" enctype="multipart/form-data" action="javascript:updateAvatar();" method="POST">
                {{ csrf_field() }}

                @if ($errors->has('avatar'))
                    <span class="help-block">
                        <strong>{{ $errors->first('avatar') }}</strong>
                    </span>
                @endif

                <label for="avatar" class="col-md-6 col-md-offset-4 control-label">Actualizar avatar</label>
                <input class="col-md-10 col-md-offset-6" type="file" id="avatar" name="avatar" />

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@section('js')
    <script src="{{ asset('js/userprofile.js') }}"></script>
@endsection

@endsection