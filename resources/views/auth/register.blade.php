@extends('auth.auth')

@section('login-body')

<div>
    <noscript>
        <div class="ui-message-container ui-message-error">
            <div class="ui-message-icon"></div>
            <div class="ui-message-contents">Parece que JavaScript está desactivado. Activa JavaScript para restaurar la funcionalidad de página completa.</div>
        </div>
    </noscript>
    <div class="login-content login-form">
        <h1>Regístrate</h1>
        <form class="login-form" action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <label class="login-input login-input-email ui-label ui-input-label" id="lbl-name" placeholder="nombre">
                <span class="ui-label-text">Nombre</span>
                <input class="ui-text-input" type="text" name="name" id="name" value="" tabindex="1" required autofocus/>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </label>
            <label class="login-input login-input-email ui-label ui-input-label" id="lbl-email" placeholder="email">
                <span class="ui-label-text">Correo</span>
                <input class="ui-text-input" type="email" name="email" id="email" value="" tabindex="1" autocomplete="email" required autofocus/>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </label>
            <div class="hybrid-password-wrapper">
                <label class="hybrid-password login-input login-input-password ui-label ui-input-label" id="lbl-password" placeholder="password" style="padding-bottom:16px;">
                    <span class="ui-label-text">Contraseña</span>
                    <input type="password" class="ui-text-input" name="password" id="password" tabindex="2" autocomplete="new-password" required/>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </label>
                <span></span>
            </div>
            <div class="hybrid-password-wrapper">
                <label class="hybrid-password login-input login-input-password ui-label ui-input-label" id="lbl-password" placeholder="password">
                    <span class="ui-label-text">Repita la contraseña</span>
                    <input type="password" class="ui-text-input" name="password_confirmation" id="password-confirm" tabindex="2" autocomplete="new-password" required/>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </label>
                <span></span>
            </div>
            <button class="btn login-button btn-submit btn-small" type="submit" autocomplete="off" tabindex="4">
                Registrarse
            </button>
        </form>
        <form class="login-form" action="#" method="">
            <div class="facebookForm regOption">
                <div class="fb-minimal">
                    <hr/>
                    <button class="btn minimal-login btn-submit btn-small" type="submit" autocomplete="off" tabindex="6">
                        <div class="fb-login"><img class="icon-facebook" src="/img/FB-f-Logo__blue_57.png"/>
                            <span class="fbBtnText">Regístrate con Facebook</span>
                        </div>
                    </button>
                </div>
            </div>
        </form>
        <div class="login-signup-now">¿Ya estás registrado?
            <a class=" " target="_self" href="/login">Haz login aquí</a>.
        </div>
    </div>
</div>

@endsection
